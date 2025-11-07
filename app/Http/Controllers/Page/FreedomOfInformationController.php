<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FreedomOfInformationController extends Controller
{
    public function index(){
        return view('pages.good-governance.freedom-of-information');
    }
}
