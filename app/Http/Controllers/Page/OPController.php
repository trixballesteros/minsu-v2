<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OPController extends Controller
{
    public function index(){
        return view('pages.administration.offices.op');
    }
}
