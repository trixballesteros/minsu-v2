<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCollegeRequest;
use App\Http\Requests\UpdateCollegeRequest;
use App\Http\Resources\CollegeResources;
use App\Models\College;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CollegeController extends Controller
{
    public function index(Request $request)
    {
        if (!auth()->user()->can('view college')) {
            return abort(401);
        }

        $perPage = $request->has('perPage') ? $request->input('perPage') : 10;
        $colleges = College::with([])
            ->where(function($query) use ($request){
                if($request->has('query'))
                {
                    $query_string = $request->input('query').'';
                    $query->where('name','LIKE','%'.$query_string.'%');
                    $query->orWhere('code','LIKE','%'.$query_string.'%');
                }
            })
            ->paginate($perPage);
        return new CollegeResources($colleges);
    }
    public function show($id){
        if (!auth()->user()->can('delete college')) {
            return abort(401);
        }
        $college = College::findOrFail($id);
        $college->delete();

        return response(null, 204);
    }
    public function store(StoreCollegeRequest $request){
        if (!auth()->user()->can('insert college')) {
            return abort(401);
        }
        $collegeArr = $request->validated();
        $college = College::create($collegeArr);

        if($request['image']){
            $college = College::find($college->id);
            $college->clearMediaCollection('college_image');
            $college->addMediaFromRequest('image')
                ->usingFileName(Str::uuid() . '.' . $request['image']->getClientOriginalExtension())
                ->usingName(Str::uuid())
                ->toMediaCollection('college_image');
        }


        return (new CollegeResources($college))
            ->response()
            ->setStatusCode(201);
    }
    public function update(UpdateCollegeRequest $request,$id){
        if (!auth()->user()->can('update college')) {
            return abort(401);
        }
        $collegeArr = $request->validated();
        $college = College::find($id);
        $college->update($collegeArr);

        if($request['image']){
            $college = College::find($id);
            $college->clearMediaCollection('college_image');
            $college->addMediaFromRequest('image')
                ->usingFileName(Str::uuid() . '.' . $request['image']->getClientOriginalExtension())
                ->usingName(Str::uuid())
                ->toMediaCollection('college_image');
        }


        return (new CollegeResources($college))
            ->response()
            ->setStatusCode(201);
    }
    public function destroy($id)
    {
        if (!auth()->user()->can('delete college')) {
            return abort(401);
        }
        $college = College::findOrFail($id);
        $college->delete();

        return response(null, 204);
    }
}
