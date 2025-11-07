<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreNewsRequest;
use App\Http\Requests\UpdateNewsRequest;
use App\Http\Resources\NewsResources;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    public function index(Request $request)
    {
        if (!auth()->user()->can('view news')) {
            return abort(401);
        }

        $perPage = $request->has('perPage') ? $request->input('perPage') : 10;
        $news = News::with([])
            ->where(function($query) use ($request){
                if($request->has('query'))
                {
                    $query_string = $request->input('query').'';
                    $query->where('title','LIKE','%'.$query_string.'%');
                }
            })
            ->orderBy('date', 'DESC')
            ->paginate($perPage);

        return new NewsResources($news);
    }
    public function show($id){
        if (!auth()->user()->can('delete news')) {
            return abort(401);
        }
        $news = News::findOrFail($id);
        $news->delete();

        return response(null, 204);
    }
    public function store(StoreNewsRequest $request){
        if (!auth()->user()->can('insert news')) {
            return abort(401);
        }
        $newsArr = $request->validated();
        $news = News::create($newsArr);

        if($request['image']){
            $news = News::find($news->id);
            $news->clearMediaCollection('news_image');
            $news->addMediaFromRequest('image')
                ->usingFileName(Str::uuid() . '.' . $request['image']->getClientOriginalExtension())
                ->usingName(Str::uuid())
                ->toMediaCollection('news_image');
        }


        return (new NewsResources($news))
            ->response()
            ->setStatusCode(201);
    }
    public function update(UpdateNewsRequest $request,$id){
        if (!auth()->user()->can('update news')) {
            return abort(401);
        }
        $newsArr = $request->validated();
        $news = News::find($id);
        $news->update($newsArr);

        if($request['image']){
            $news = News::find($id);
            $news->clearMediaCollection('news_image');
            $news->addMediaFromRequest('image')
                ->usingFileName(Str::uuid() . '.' . $request['image']->getClientOriginalExtension())
                ->usingName(Str::uuid())
                ->toMediaCollection('news_image');
        }


        return (new NewsResources($news))
            ->response()
            ->setStatusCode(201);
    }
    public function destroy($id)
    {
        if (!auth()->user()->can('delete news')) {
            return abort(401);
        }
        $news = News::findOrFail($id);
        $news->delete();

        return response(null, 204);
    }
}
