<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUniversityEventRequest;
use App\Http\Requests\UpdateUniversityEventRequest;
use App\Http\Resources\UniversityEventResources;
use App\Models\UniversityEvent;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class UniversityEventController extends Controller
{
    public function index(Request $request)
    {
        if (!auth()->user()->can('view event')) {
            return abort(401);
        }

        $perPage = $request->has('perPage') ? $request->input('perPage') : 10;
        $events = UniversityEvent::with([])
            ->orderBy('id','DESC')
            ->where(function($query) use ($request){

                if($request->has('query'))
                {
                    $query_string = $request->input('query').'';
                    $query->where('name','LIKE','%'.$query_string.'%');
                }
            })
            ->paginate($perPage);
        return new UniversityEventResources($events);
    }
    public function store(StoreUniversityEventRequest $request){
        if (!auth()->user()->can('insert event')) {
            return abort(401);
        }
        $eventArr = $request->validated();
        $event = UniversityEvent::create($eventArr);

        if($request['image']){
            $event = UniversityEvent::find($event->id);
            $event->clearMediaCollection('event_image');
            $event->addMediaFromRequest('image')
                ->usingFileName(Str::uuid() . '.' . $request['image']->getClientOriginalExtension())
                ->usingName(Str::uuid())
                ->toMediaCollection('event_image');
        }


        return (new UniversityEventResources($event))
            ->response()
            ->setStatusCode(201);
    }
    public function update(UpdateUniversityEventRequest $request,$id){
        if (!auth()->user()->can('update event')) {
            return abort(401);
        }
        $eventArr = $request->validated();
        $event = UniversityEvent::find($id);
        $event->update($eventArr);

        if($request['image']){
            $event = UniversityEvent::find($id);
            $event->clearMediaCollection('event_image');
            $event->addMediaFromRequest('image')
                ->usingFileName(Str::uuid() . '.' . $request['image']->getClientOriginalExtension())
                ->usingName(Str::uuid())
                ->toMediaCollection('event_image');
        }


        return (new UniversityEventResources($event))
            ->response()
            ->setStatusCode(201);
    }
    public function show($id){
        if (!auth()->user()->can('delete event')) {
            return abort(401);
        }
        $event = UniversityEvent::findOrFail($id);
        $event->delete();

        return response(null, 204);
    }
    public function destroy($id)
    {
        if (!auth()->user()->can('delete event')) {
            return abort(401);
        }
        $event = UniversityEvent::findOrFail($id);
        $event->delete();

        return response(null, 204);
    }
}
