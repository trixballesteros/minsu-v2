@extends('layouts.app')
@section('content')

    <div class="about_bg">

            @include('layouts.core.topmenu')
            <div class="row">
                <div class="col-md-12">
                    <h1>News</h1>
                </div>

        </div>
    </div>

    <section class="notice">
        <div class="container">
            @foreach($newslist as $news)
                <a style="text-decoration: none; color:  inherit" href="{{route('news-details',['id'=> $news->id])}}">
                    <div class="row mb-4 pb-4">
                        <div class="col-md-5">
                            <img  style="height: 300px; object-fit: cover ;width: 100%" src="{{$news->image_url}}" alt="{{$news->title}}">
                        </div>
                        <div class="col-md-7">
                            <div class="date-description">
                                <h3>{{$news->title}}</h3>
                                <p>{{$news->description}}</p>
                                <hr class="event_line">
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </section>
    @include('sections.detail-chart')
@endsection
