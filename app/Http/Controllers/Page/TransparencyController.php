<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Models\Transparency;
use Illuminate\Http\Request;
use Inertia\Inertia;

class TransparencyController extends Controller
{
    public function index(){
        $transparencies = Transparency::get()->toTree();
        return view('pages.good-governance.transparency',compact('transparencies'));
    }
}
