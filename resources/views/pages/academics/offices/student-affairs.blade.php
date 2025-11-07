@extends('layouts.app')
@section('content')

    <div class="about_bg">

            @include('layouts.core.topmenu')
            <div class="row">
                <div class="col-md-12">
                    <h1>Office of Student Affairs and Services</h1>

            </div>
        </div>
    </div>
    <section style="margin-top: 50px; margin-bottom: 50px">
        <div class="container">
            <div class="row">
                <div class="col-md-9" style="padding-right: 40px">
                    <div class="row">
                        <div class="card">
                            <div class="card-body">
                                <div style="background-color: #0b5421" class="card-header">
                                    <h4 class style="color: white">Office of Student Affairs and Services</h4>
                                </div>
                                <div class="card-text">
                                    <div class="row p-4">
                                        <div class="col-md-4">
                                            <img style="border: 2px solid #0b5421;width: 100%;object-fit: cover"
                                                 src="/template/images/employee/MinSUOSAS.jpg" alt="">
                                        </div>
                                        <div class="col-md-8">
                                            <h3 style="margin-bottom: 20px">
                                                Welcome to Mindoro State University!
                                            </h3>
                                            <p>
                                                ...
                                            </p>
                                            <h4 style="margin-top: 20px">
                                                Evelyn A. Leynes
                                            </h4>
                                            <p>Student Affairs and Services</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <div style="background-color: #0b5421" class="card-header">
                                <h4 style="color: white">OSAS News</h4>
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
