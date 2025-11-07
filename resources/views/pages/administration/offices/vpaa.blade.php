@extends('layouts.app')
@section('content')

    <div class="about_bg">

            @include('layouts.core.topmenu')
            <div class="row">
                <div class="col-md-12">
                    <h1>Office of the Vice President for Academic Affairs</h1>
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

                                <div class="card-text">
                                    <div class="row p-4">
                                        <div class="col-md-4">
                                            <img style="border: 2px solid #0b5421;width: 100%;object-fit: cover"
                                                 src="/template/images/employee/MinsuVPAA.png" alt="">
                                        </div>
                                        <div class="col-md-8">
                                            <h3 style="margin-bottom: 20px">
                                                Welcome to Mindoro State University!
                                            </h3>
                                            <p>
                                                "..."
                                            </p>
                                            <h4 style="margin-top: 20px">
                                                Nemesio H. Davalos, Ph.D.
                                            </h4>
                                            <p>Vice President for Academic Affairs</p>
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
                                    <h4 style="color: white">About the Vice President for Academic Affairs</h4>
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
                                <h4 style="color: white">Vice President's Corner</h4>
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
