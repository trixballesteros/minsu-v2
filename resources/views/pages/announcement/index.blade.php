@extends('layouts.app')
@section('content')

    <div class="about_bg">

            @include('layouts.core.topmenu')
            <div class="row">
                <div class="col-md-12">
                    <h1>Announcement List</h1>
                </div>
            </div>

    </div>

    <section class="welcome_about">
        <div class="container">
            @foreach($announcementlist as $event)

                <div class="row mb-4 pb-4">
                    <div class="col-md-5">
                        <img style="height: 300px; object-fit: cover ;width: 100%" src="{{$event->image_url}}"
                             alt="{{$event->title}}">
                    </div>
                    <div class="col-md-7">

                        <div class="date-description">
                            <h3>{{$event->name}}</h3>
                            <p>{!! $event->description !!}</p>
                            <span><i class="fa fa-calendar ml-2"></i>&nbsp;{{\Carbon\Carbon::parse($event->date_from)->format('M. d, Y')}}</span>
                            @if($event->date_from < $event->date_to )
                                <span>- {{\Carbon\Carbon::parse($event->date_to)->format('M. d, Y')}}</span>
                            @endif
                        </div>

                    </div>


                </div>
            @endforeach

        </div>
    </section>
    @include('sections.detail-chart')
@endsection
