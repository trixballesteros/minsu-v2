<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CAAFController extends Controller
{
    public function index(){
        return Inertia::render('Academics/Programs');
//        return view('pages.academics.program');
    }
}
