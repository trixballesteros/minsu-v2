<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Models\College;
use App\Models\Program;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ProgramController extends Controller
{
    public function index()
    {
//        return Inertia::render('Admin/Program/Index');
        return view('pages.academics.program');
    }
//    public function index()
//    {
////        return view('pages.academics.program');
//        return Inertia::render('Academics/Programs');
//
////        ]);
//    }

    public function frontend()
    {
//        return Inertia::render('Academics/Programs');
//        $colleges = College::select('id','name')->get();
//        $programs = Program::all();
        return view('pages.academics.program', [
//            'colleges' => $colleges,
//            'programs' => $programs,
        ]);
    }
}
