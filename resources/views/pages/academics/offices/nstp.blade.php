@extends('layouts.app')
@section('content')

    <div class="about_bg">

            @include('layouts.core.topmenu')
            <div class="row">
                <div class="col-md-12">
                    <h1>Office of National Service Training Program</h1>
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
                                    <h4 class style="color: white">Director for National Service Training Program</h4>
                                </div>
                                <div class="card-text">
                                    <div class="row p-4">
                                        <div class="col-md-4">
                                            <img style="border: 2px solid #0b5421;width: 100%;object-fit: cover"
                                                 src="/template/images/employee/directornstp.jpg" alt="">
                                        </div>
                                        <div class="col-md-8">
                                            <h3 style="margin-bottom: 20px">
                                                Welcome to Mindoro State University!
                                            </h3>
                                            <p>"National Service Training Program (NSTP)” is a program aimed at enhancing civic consciousness and defense preparedness in the youth by developing the ethics of service and patriotism while undergoing training in any of its three (3) program components. Its various components are specially designed to enhance the youth’s active contribution to the general welfare.</p>
                                            <p>"Reserve-Officers’ Training Corps (ROTC)” is a program institutionalized under Sections 38 and 39 of Republic Act No. 7077 designed to provide military training to tertiary level students in order to motivate, train, organize and mobilize them for national defense preparedness.</p>
                                            <p>"Literacy Training Service” is a program designed to train students to become teachers of literacy and numeracy skills to school children, out of school youth, and other segments of society in need of their service.</p>
                                            <p>"Civic Welfare Training Service” refers to programs or activities contributory to the general welfare and the betterment of life for the members of the community or the enhancement of its facilities, especially those devoted to improving health, education, environment, entrepreneurship, safety, recreation and morals of the citizenry.</p>

                                            <h4 style="margin-top: 20px">
                                                Darius M. Abog, MSIT
                                            </h4>
                                            <p>OIC Director for National Service Training Program </p>
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
                                <h4 style="color: white">NSTP News</h4>
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
