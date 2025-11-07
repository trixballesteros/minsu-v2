<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use Inertia\Inertia;
use App\Models\College;
use App\Models\News;
use App\Models\UniversityEvent;
use Carbon\Carbon;
use Doctrine\DBAL\Events;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    // public function index()
    // {
    //     return Inertia::render('Welcome', [
    //         'colleges' => College::all(),
    //         'announcements' => UniversityEvent::where('featured', '=', 1)
    //             // ->whereDate('date_from', '>=', Carbon::today())
    //             // ->orderBy('date_from', 'ASC')
    //             // ->latest()
    //             ->take(3)
    //             ->get(),
    //         'events' => UniversityEvent::where('featured', 0)
    //             ->whereDate('date_from', '>=', Carbon::today())
    //             ->orderBy('date_from', 'DESC') // Most recent upcoming first
    //             ->take(4)
    //             ->get()
    //             ->values(),
    //         'news_featured' => News::orderBy('date', 'desc')->first()?->only(['id', 'title', 'description', 'content', 'image_url', 'date']),
    //         'news' => News::orderBy('date', 'DESC')->take(4)->get(),
    //     ]);
    // }
       public function index()
       {
           $colleges = College::all();
           $announcements = UniversityEvent::where('featured','=',1)
    //            ->whereDate('date_from','>=', Carbon::today())
               ->orderBy('date_from','ASC')
               ->latest()
               ->take(3)
               ->get();
           $events = UniversityEvent::where('featured','=',0)
               ->whereDate('date_from','>=', Carbon::today())
               ->orderBy('date_from','ASC')
               ->latest()
               ->take(3)
               ->get();
           $news_featured = News::orderBy('date','DESC')->first();
           $news = News::orderBy('date','DESC')->take(3)->get();
           return view('welcome', compact('colleges','announcements','events','news_featured','news'));
       }
}
