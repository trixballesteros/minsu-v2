<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        return view('pages.about.index');
    }
    public function history(){
        return view('pages.about.history');
    }
    public function hymn(){
        return view('pages.about.hymn');
    }
    public function vmgo(){
        return view('pages.about.vmgo');
    }
    public function core_values(){
        return view('pages.about.core_values');
    }
    public function quality_policy(){
        return view('pages.about.quality_policy');
    }

}
