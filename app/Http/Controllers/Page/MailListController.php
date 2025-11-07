<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Models\MailList;
use Illuminate\Http\Request;

class MailListController extends Controller
{
    public function index(){
        $list=MailList::orderBy('campus','ASC')->get();
        return view('pages.services.mail-list',compact('list'));
    }
}
