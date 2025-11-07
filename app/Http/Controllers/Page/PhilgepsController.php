<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Models\Philgeps;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PhilgepsController extends Controller
{
    public function index(){
        $philgeps = Philgeps::get()->toTree();
        return view('pages.good-governance.philgeps',compact('philgeps'));
    }
}
