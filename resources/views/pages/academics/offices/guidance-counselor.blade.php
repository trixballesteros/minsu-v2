@extends('layouts.app')
@section('content')

    <div class="about_bg">

            @include('layouts.core.topmenu')
            <div class="row">
                <div class="col-md-12">
                    <h1>Office of the Guidance Counselor</h1>
                </div>

        </div>
    </div>
    <
    <section style="margin-top: 50px; margin-bottom: 50px">
        <div class="container">
            <div class="row">
                <div class="col-md-9" style="padding-right: 40px">
                    <div class="row">
                        <div class="card">
                            <div class="card-body">
                                <div style="background-color: #0b5421" class="card-header">
                                    <h4 class style="color: white">Guidance Office</h4>
                                </div>
                                <div class="card-text">
                                    <div class="row p-4">
                                        <div class="col-md-4">
                                            <img style="border: 2px solid #0b5421;width: 100%;object-fit: cover"
                                                 src="/template/images/employee/MinSUGUIDANCE.jpg" alt="">
                                        </div>
                                        <div class="col-md-8">
                                            <h3 style="margin-bottom: 20px">
                                                Welcome to Mindoro State University!
                                            </h3>
                                            <p>
                                                The Guidance and Counseling Office aims to assist the academic community
                                                in carrying out its mission and creating a more humane campus
                                                environment that provides students appropriate opportunities for growth
                                                and development.
                                            </p>
                                            <h4 style="margin-top: 20px">
                                               Heidelita Bumohya
                                            </h4>
                                            <p>Guidance Office</p>
                                        </div>
                                    </div>
                                    <div class="row p-4">
                                        <div class="col-md-4">
                                            <img style="border: 2px solid #0b5421;width: 100%;object-fit: cover"
                                                 src="/template/images/employee/MinSUPhsyco.jpg" alt="">
                                        </div>
                                        <div class="col-md-8">
                                            <p>
                                                A psychometrician is a type of scientist who studies measurements, or specifically, the measurement of people’s knowledge, skills and abilities, also known as KSAs. Most psychometricians perform their work by developing tests and examinations that measure a person's innate or learned KSAs.
                                            </p>
                                            <h4 style="margin-top: 20px">
                                                Mariz Katrin Capon
                                            </h4>
                                            <p>Psychometrician</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="margin-top: 50px" class="row">
                        <div style="width: 100%" class="card">
                            <div class="card-body">
                                <div style="background-color: #0b5421" class="card-header">
                                    <h4 style="color: white">Meet the Counselors</h4>
                                </div>
                                <div class="card-text p-4">
                                    <h4 style="color: #6e6e6e" class="text-center">No item found</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <div style="background-color: #0b5421" class="card-header">
                                <h4 style="color: white">Counseling schedule</h4>
                            </div>
                            <div class="card-text p-4">
                                <div class="d-flex align-items-center align-content-center justify-content-center"
                                     style="height: 150px;color: #6e6e6e">
                                    <h4 class="text-center">No item found</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="margin-top: 40px">
                        <div class="card-body">
                            <div style="background-color: #0b5421" class="card-header">
                                <h4 style="color: white">Announcements</h4>
                            </div>
                            <div class="card-text">
                                <div class="d-flex align-items-center align-content-center justify-content-center"
                                     style="height: 150px;color: #6e6e6e;width: 100%;">
                                    <h4 class="text-center">No item found</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('sections.detail-chart')
@endsection
