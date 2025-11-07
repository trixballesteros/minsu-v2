<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Models\Downloadables;
use Illuminate\Http\Request;
use Inertia\Inertia;

class DownloadablesController extends Controller
{
    public function index(){
        $downloadables = Downloadables::get()->toTree();
        return view('pages.services.downloadables',compact('downloadables'));
    }
}
