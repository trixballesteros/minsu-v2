<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Models\UniversityEvent;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    public function frontend_index()
    {
        $announcementlist = UniversityEvent::where('featured','=',1)
        ->orderBy('date_from','DESC')->get();
        return view('pages.announcement.index',compact('announcementlist'));
    }
}
