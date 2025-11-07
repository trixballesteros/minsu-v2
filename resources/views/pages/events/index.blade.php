@extends('layouts.app')
@section('content')

    <div class="about_bg">

            @include('layouts.core.topmenu')
            <div class="row">
                <div class="col-md-12">
                    <h1>Events List</h1>
                </div>
            </div>

    </div>

    <section class="welcome_about">
        <div class="container">
            @foreach($eventslist as $event)
                <div class="row">
                    <div class="col-md-12">
                        <div class="event_date">
                            <div  class="event-date-wrap text-center">
                                <p style="color: white" class="text-center">{{\Carbon\Carbon::parse($event->date_from)->format('d')}}</p>
                                <span>{{\Carbon\Carbon::parse($event->date_from)->format('M. Y')}}</span>
                            </div>
                        </div>
                        <div class="date-description">
                            <h3>{{$event->name}}</h3>
                            <p>{!! $event->description !!}</p>
                            <hr class="event_line">
                        </div>

                    </div>


                </div>
            @endforeach

        </div>
    </section>
    @include('sections.detail-chart')
@endsection
