@extends('layouts.app')
@section('content')

    <div class="about_bg">

            @include('layouts.core.topmenu')
            <div class="row">
                <div class="col-md-12">
                    <h1>Job Vacancy</h1>
                </div>

        </div>
    </div>
    <section class="welcome_about">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <embed src="/files/job-vacant/jobvacancy.pdf" type="application/pdf" width="100%" height="900px">
                </div>
            </div>
        </div>
    </section>
    @include('sections.detail-chart')
@endsection
