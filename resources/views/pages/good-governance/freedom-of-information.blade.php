@extends('layouts.app')
@section('content')

    <div class="about_bg">

            @include('layouts.core.topmenu')
            <div class="row">
                <div class="col-md-12">
                    <h1>Freedom of Information</h1>
                </div>
            </div>

    </div>
    <section class="welcome_about">
        <div class="container">
            <div class="row">
                <div class="card-header" style="background-color: #0b5421;">
                    <h7 style="color: white">One Page- FOI Manual</h7>
                </div>
                <div class="col-md-12">
                    <embed src="/files/foi/One Page - FOI Manual.pdf" type="application/pdf" width="100%" height="900px">
                </div>
                <div class="card-header" style="background-color: #0b5421;">
                    <h7 style="color: white">Full Public Disclosure</h7>
                </div>
                <div class="col-md-12">
                    <embed src="/files/foi/Full Public Disclosure.pdf" type="application/pdf" width="100%" height="900px">
                </div>
                <div class="card-header" style="background-color: #0b5421;">
                    <h7 style="color: white">FOI Manual</h7>
                </div>
                <div class="col-md-12">
                    <embed src="/files/foi/FOI Manual.pdf" type="application/pdf" width="100%" height="900px">
                </div>
                <div class="card-header" style="background-color: #0b5421;">
                    <h7 style="color: white">Certificate of Compliance</h7>
                </div>
                <div class="col-md-12">
                    <embed src="/files/foi/Certificate of Compliance.pdf" type="application/pdf" width="100%" height="900px">
                </div>
            </div>
        </div>
    </section>
    @include('sections.detail-chart')
@endsection
