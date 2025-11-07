<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GuidanceCounselorController extends Controller
{
    public function index(){
        return view('pages.academics.offices.guidance-counselor');
    }
}
