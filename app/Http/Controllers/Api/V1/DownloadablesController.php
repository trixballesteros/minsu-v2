<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreDownloadablesRequest;
use App\Http\Requests\UpdateDownloadablesRequest;
use App\Http\Resources\DownloadablesResources;
use App\Models\Downloadables;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DownloadablesController extends Controller
{
    public function index(Request $request)
    {
        if (!auth()->user()->can('view downloadables')) {
            return abort(401);
        }

        $downloadables = Downloadables::get()->toTree();
        return new DownloadablesResources($downloadables);
    }

    public function store(StoreDownloadablesRequest $request)
    {
      if (!auth()->user()->can('insert downloadables')) {
           return abort(401);
      }
        Downloadables::fixTree();
        $downloadables = Downloadables::create(['name'=>$request['name']]);
        if($request['parent_id'] && $request['parent_id'] !== 'none') {
            $node = Downloadables::find($request['parent_id']);
            $node->appendNode($downloadables);
        }
        if ($request['downloadables_file']) {
            $downloadables = Downloadables::find($downloadables->id);
            $downloadables->clearMediaCollection('downloadables_file');
            $downloadables->addMediaFromRequest('downloadables_file')
//                ->usingFileName(Str::uuid() . '.' . $request['transparency_file']->getClientOriginalExtension())
                ->usingName(Str::uuid())
                ->toMediaCollection('downloadables_file');
        }


        return (new DownloadablesResources($downloadables))
            ->response()
            ->setStatusCode(201);
    }
    public function show($id){
        if (!auth()->user()->can('delete downloadables')) {
            return abort(401);
        }
        $downloadables = Downloadables::findOrFail($id);
        $downloadables->delete();

        return response(null, 204);
    }
    public function update(UpdateDownloadablesRequest $request, $id)
    {
        if (!auth()->user()->can('update downloadables')) {
            return abort(401);
        }
        $downloadablesArr = $request->validated();
        $downloadables = Downloadables::find($id);
        $downloadables->update($downloadablesArr);

        if ($request['downloadables_file']) {
            $downloadables = Downloadables::find($id);
            $downloadables->clearMediaCollection('downloadables_file');
            $downloadables->addMediaFromRequest('downloadables_file')
                ->toMediaCollection('downloadables_file');
        }


        return (new DownloadablesResources($downloadables))
            ->response()
            ->setStatusCode(201);
    }

    public function destroy($id)
    {
        if (!auth()->user()->can('delete downloadables')) {
            return abort(401);
        }
        $downloadables = Downloadables::findOrFail($id);
        $downloadables->delete();

        return response(null, 204);
    }
}
