@extends('layouts.app')
@section('content')

    <div class="about_bg">

            @include('layouts.core.topmenu')
            <div class="row">
                <div class="col-md-12">
                    <h1>Quality Policy</h1>
                </div>
            </div>

    </div>
    <div class="container align-center">
    <div class="col-md-12 pt-4 mt-2">
        <img src="{{asset('template/images/quality-policy.png')}}" class="img-fluid m-0 p-2" alt="#">
    </div>
    </div>
    @include('sections.detail-chart')
@endsection
