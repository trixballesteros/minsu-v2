@extends('layouts.app')
@section('content')

    <div class="about_bg">

            @include('layouts.core.topmenu')
            <div class="row">
                <div class="col-md-12">
                    <h1>Citizen's Charter</h1>
                </div>
            </div>

    </div>
    <section class="welcome_about">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <embed src="/files/citizen-charter/MinSU Citizen Charter 1st Edition 2025.pdf" type="application/pdf" width="100%" height="900px">
                </div>
                <div class="col-md-12">
                    <embed src="/files/citizen-charter/MinSU Initial WOG Reengineering Plan.pdf" type="application/pdf" width="100%" height="900px">
                </div>
                <div class="col-md-12">
                    <embed src="/files/citizen-charter/Recomposition of MinSU CART 2025.pdf" type="application/pdf" width="100%" height="900px">
                </div>
                <div class="col-md-12">
                    <embed src="/files/citizen-charter/MinSU COC 2025.pdf" type="application/pdf" width="100%" height="900px">
                </div>
                <div class="col-md-12">
                    <embed src="/files/citizen-charter/MinSU ARTA Annex B- Inventory of Backlogs 2025.pdf" type="application/pdf" width="100%" height="900px">
                </div>
                <div class="col-md-12">
                    <embed src="/files/citizen-charter/MinSU_CSMR_2022.pdf" type="application/pdf" width="100%" height="900px">
                </div>

            </div>
        </div>
    </section>
    @include('sections.detail-chart')
@endsection
