@extends('layouts.app')
@section('content')

    <div class="about_bg">

            @include('layouts.core.topmenu')
            <div class="row">
                <div class="col-md-12">
                    <h1>Events Details</h1>
                </div>
            </div>

    </div>

    <section class="welcome_about">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <img style="object-fit: cover; height: 400px" src="{{$events->image_url}}" alt="{{$events->name}}">
                    <h2 class="block my-4">
                        {{$events->name}}
                    </h2>

                    <p>
                        {!! $events->description !!}
                    </p>
                </div>
                <div class="col-md-3">
                    <div class="blog-category_block pt-0">


                        <h3>Other events</h3>

                        <ul>
                            @foreach($eventslist as $events)
                                <li><a href="{{route('events-details',['id'=> $events->id])}}">{{$events->name}}<i
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
