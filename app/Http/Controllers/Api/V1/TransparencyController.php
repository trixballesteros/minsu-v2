<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTransparencyRequest;
use App\Http\Requests\UpdateTransparencyRequest;
use App\Http\Resources\TransparencyResources;
use App\Models\Transparency;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TransparencyController extends Controller
{
    public function index(Request $request)
    {
        if (!auth()->user()->can('view transparency')) {
            return abort(401);
        }

        $transparencys = Transparency::get()->toTree();
        return new TransparencyResources($transparencys);
    }

    public function store(StoreTransparencyRequest $request)
    {
        if (!auth()->user()->can('insert transparency')) {
            return abort(401);
        }
        Transparency::fixTree();
        $transparency = Transparency::create(['name'=>$request['name']]);
        if($request['parent_id'] && $request['parent_id'] !== 'none') {
            $node = Transparency::find($request['parent_id']);
            $node->appendNode($transparency);
        }
        if ($request['transparency_file']) {
            $transparency = Transparency::find($transparency->id);
            $transparency->clearMediaCollection('transparency_file');
            $transparency->addMediaFromRequest('transparency_file')
//                ->usingFileName(Str::uuid() . '.' . $request['transparency_file']->getClientOriginalExtension())
                ->usingName(Str::uuid())
                ->toMediaCollection('transparency_file');
        }


        return (new TransparencyResources($transparency))
            ->response()
            ->setStatusCode(201);
    }
    public function show($id){
        if (!auth()->user()->can('delete transparency')) {
            return abort(401);
        }
        $transparency = Transparency::findOrFail($id);
        $transparency->delete();

        return response(null, 204);
    }
    public function update(UpdateTransparencyRequest $request, $id)
    {
        if (!auth()->user()->can('update transparency')) {
            return abort(401);
        }
        $transparencyArr = $request->validated();
        $transparency = Transparency::find($id);
        $transparency->update($transparencyArr);

        if ($request['transparency_file']) {
            $transparency = Transparency::find($id);
            $transparency->clearMediaCollection('transparency_file');
            $transparency->addMediaFromRequest('transparency_file')
                ->toMediaCollection('transparency_file');
        }


        return (new TransparencyResources($transparency))
            ->response()
            ->setStatusCode(201);
    }

    public function destroy($id)
    {
        if (!auth()->user()->can('delete transparency')) {
            return abort(401);
        }
        $transparency = Transparency::findOrFail($id);
        $transparency->delete();

        return response(null, 204);
    }
}
