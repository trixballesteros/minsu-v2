@extends('layouts.app')
@section('content')

    <div class="about_bg">

            @include('layouts.core.topmenu')
            <div class="row">
                <div class="col-md-12">
                    <h1>News Details</h1>
                </div>
            </div>

    </div>

    <section class="welcome_about">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <img style="object-fit: cover" src="{{$news->image_url}}" alt="{{$news->title}}">
                    <h2 class="block my-4">
                        {{$news->title}}
                    </h2>
                    <h5>
                        {{$news->description}}
                    </h5>
                    <div style="opacity: 70%">
                        <span ><i class="fa fa-pencil"></i> Admin </span> &nbsp; <span ><i class="fa fa-calendar-o"></i>&nbsp;{{\Carbon\Carbon::parse($news->date)->format('M. d, Y')}} </span>
                    </div>
                    <p>
                        {!! $news->content !!}
                    </p>
                </div>
                <div class="col-md-3">
                    <div class="blog-category_block pt-0">


                        <h3>Other News</h3>

                        <ul>
                            @foreach($newslist as $news)
                                <li><a href="{{route('news-details',['id'=> $news->id])}}">{{$news->title}}<i
                                            class="fa fa-caret-right" aria-hidden="true"></i></a></li>
                            @endforeach

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('sections.detail-chart')
@endsection
