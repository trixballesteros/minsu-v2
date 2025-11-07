<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;
use Inertia\Inertia;

class NewsController extends Controller
{
    public function index(){
        return Inertia::render('Admin/News/Index');
    }
    public function frontend_index()
    {
        $newslist = News::orderBy('date','DESC')->get();
        return view('pages.news.index',compact('newslist'));
    }
    public function show($id)
    {
        $news=News::find($id);
        $newslist=News::select('id','title','date')->orderBy('date','DESC')->limit(5)->get();
        return view('pages.news.show',compact('news','newslist'));
    }
}
