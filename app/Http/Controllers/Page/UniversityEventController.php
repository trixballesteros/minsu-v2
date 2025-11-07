<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Models\UniversityEvent;
use Illuminate\Http\Request;
use Inertia\Inertia;

class UniversityEventController extends Controller
{
    public function index(){
        return Inertia::render('Admin/Event/Index');
    }
    public function frontend_index()
    {
        $eventslist = UniversityEvent::orderBy('date_from','DESC')->get();
        return view('pages.events.index',compact('eventslist'));
    }
    public function show($id)
    {
        $events=UniversityEvent::find($id);
        $eventslist=UniversityEvent::select('id','name','created_at')->orderBy('id','DESC')->limit(5)->get();
        return view('pages.events.show',compact('events','eventslist'));
    }
}
