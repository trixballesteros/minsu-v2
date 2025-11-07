@extends('layouts.app')
@section('content')
    <div class="container nav-menu">
        @include('layouts.core.topmenu')
    </div>
    @include('sections.header')
    @include('sections.president-message')
    @if(!empty($news))
        @include('sections.news')
    @endif

    @include('sections.detail-chart')

    @if(!empty($events))
        @include('sections.event')
    @endif



    @if(!empty($colleges))
        @include('sections.college')
    @endif
    @include('sections.campus_map')
{{--    @include('sections.governance')--}}
@endsection


