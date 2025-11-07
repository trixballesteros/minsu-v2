<?php

namespace App\Http\Controllers\Page\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class TransparencyController extends Controller
{
    public function index(){
        return Inertia::render('Admin/Transparency/Index');
    }
}
