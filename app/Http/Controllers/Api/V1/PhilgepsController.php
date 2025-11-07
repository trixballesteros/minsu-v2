<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePhilgepsRequest;
use App\Http\Requests\UpdatePhilgepsRequest;
use App\Http\Resources\PhilgepsResources;
use App\Models\Philgeps;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PhilgepsController extends Controller
{
    public function index(Request $request)
    {
        if (!auth()->user()->can('view philgeps')) {
            return abort(401);
        }

        $philgeps = Philgeps::get()->toTree();
        return new PhilgepsResources($philgeps);
    }

    public function store(StorePhilgepsRequest $request)
    {
        if (!auth()->user()->can('insert philgeps')) {
            return abort(401);
        }
        Philgeps::fixTree();
        $philgeps = Philgeps::create(['name'=>$request['name']]);
        if($request['parent_id'] && $request['parent_id'] !== 'none') {
            $node = Philgeps::find($request['parent_id']);
            $node->appendNode($philgeps);
        }
        if ($request['philgeps_file']) {
            $philgeps = Philgeps::find($philgeps->id);
            $philgeps->clearMediaCollection('philgeps_file');
            $philgeps->addMediaFromRequest('philgeps_file')
                ->usingFileName(Str::uuid() . '.' . $request['philgeps_file']->getClientOriginalExtension())
                ->usingName(Str::uuid())
                ->toMediaCollection('philgeps_file');
        }


        return (new PhilgepsResources($philgeps))
            ->response()
            ->setStatusCode(201);
    }

    public function update(UpdatePhilgepsRequest $request, $id)
    {
        if (!auth()->user()->can('update philgeps')) {
            return abort(401);
        }
        $philgepsArr = $request->validated();
        $philgeps = Philgeps::find($id);
        $philgeps->update($philgepsArr);

        if ($request['philgeps_file']) {
            $philgeps = Philgeps::find($id);
            $philgeps->clearMediaCollection('philgeps_file');
            $philgeps->addMediaFromRequest('philgeps_file')
                ->toMediaCollection('philgeps_file');
        }


        return (new PhilgepsResources($philgeps))
            ->response()
            ->setStatusCode(201);
    }
    public function show($id){
        if (!auth()->user()->can('delete philgeps')) {
            return abort(401);
        }
        $philgeps = Philgeps::findOrFail($id);
        $philgeps->delete();

        return response(null, 204);
    }
    public function destroy($id)
    {
        if (!auth()->user()->can('delete philgeps')) {
            return abort(401);
        }
        $philgeps = Philgeps::findOrFail($id);
        $philgeps->delete();

        return response(null, 204);
    }
}
