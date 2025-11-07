<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CollegeController extends Controller
{
    public function index(){
        return Inertia::render('Admin/College/Index');
    }
    public function show(){
        return Inertia::render('Admin/College/Index');
    }
}
