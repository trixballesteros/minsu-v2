<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CitizenCharterController extends Controller
{
    public function index(){
        return view('pages.good-governance.citizens-charter');
    }
}
