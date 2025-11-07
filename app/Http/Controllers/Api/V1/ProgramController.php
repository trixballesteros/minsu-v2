<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProgramRequest;
use App\Http\Requests\UpdateProgramRequest;
use App\Http\Resources\ProgramResources;
use App\Models\Program;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProgramController extends Controller
{
    public function index(Request $request)
    {
        if (!auth()->user()->can('view program')) {
            return abort(401);
        }

        $perPage = $request->has('perPage') ? $request->input('perPage') : 10;
        $programs = Program::with([])
            ->where(function($query) use ($request){
                if($request->has('query'))
                {
                    $query_string = $request->input('query').'';
                    $query->where('name','LIKE','%'.$query_string.'%');
                    $query->orWhere('code','LIKE','%'.$query_string.'%');
                }
            })
            ->paginate($perPage);
        return new ProgramResources($programs);
    }
    public function store(StoreProgramRequest $request){
        if (!auth()->user()->can('insert program')) {
            return abort(401);
        }
        $programArr = $request->validated();
        $program = Program::create($programArr);

        if($request['image']){
            $program = Program::find($program->id);
            $program->clearMediaCollection('program_image');
            $program->addMediaFromRequest('image')
                ->usingFileName(Str::uuid() . '.' . $request['image']->getClientOriginalExtension())
                ->usingName(Str::uuid())
                ->toMediaCollection('program_image');
        }


        return (new ProgramResources($program))
            ->response()
            ->setStatusCode(201);
    }
    public function update(UpdateProgramRequest $request,$id){
        if (!auth()->user()->can('update program')) {
            return abort(401);
        }
        $programArr = $request->validated();
        $program = Program::find($id);
        $program->update($programArr);

        if($request['image']){
            $program = Program::find($id);
            $program->clearMediaCollection('program_image');
            $program->addMediaFromRequest('image')
                ->usingFileName(Str::uuid() . '.' . $request['image']->getClientOriginalExtension())
                ->usingName(Str::uuid())
                ->toMediaCollection('program_image');
        }


        return (new ProgramResources($program))
            ->response()
            ->setStatusCode(201);
    }
    public function show($id){
        if (!auth()->user()->can('delete program')) {
            return abort(401);
        }
        $program = Program::findOrFail($id);
        $program->delete();

        return response(null, 204);
    }
    public function destroy($id)
    {
        if (!auth()->user()->can('delete program')) {
            return abort(401);
        }
        $program = Program::findOrFail($id);
        $program->delete();

        return response(null, 204);
    }
}
