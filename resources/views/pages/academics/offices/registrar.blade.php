@extends('layouts.app')
@section('content')
    <style>

        h5 {
            text-align: center;
            font-size: 40px;
        }

        p {
            text-align: center;
            font-size: medium;
        }
        .p1 {

            text-align: center;
            font-size: large;
        }

    </style>

    <div class="about_bg">

            @include('layouts.core.topmenu')
            <div class="row">
                <div class="col-md-12">
                    <h1>Office of the Registrar</h1>
                </div>

        </div>
    </div>

    <section class="main-section" style="margin-top: 50px; margin-bottom: 50px">
        <div class="container">
            <div class="row gutter-1">
                <div class="col-md-9 mb-2">
                    <div class="row">
                        <div class="card w-100">
                            <div class="card-body">
                                <div style="background-color: #0b5421" class="card-header">
                                    <h4 class style="color: white">Summary of Candidates for Graduation</h4>
                                </div>
                                <div class="card-text" style="padding: 30px; background:#cadba4 ; text-align: center">


                                    <div class="text-center w-100"
                                         style="background-color: #3c763d ; border-radius: 10px ; position: relative;display: inline-block;text-align: center">
                                        <div class="w-100 p-2">
                                            <div class="row px-3">
                                                <div class="col"
                                                     style="text-align: center; color: white; padding: 20px; border-right: 1px solid white; border-bottom: 1px solid white">
                                                    <h5>516</h5>
                                                    <p>MAIN CAMPUS <br> BACCALAUREATE PROGRAM </p>
                                                </div>
                                                <div class="col"
                                                     style="text-align: center; color: white; padding: 20px; border-bottom: 1px solid white">
                                                    <h5>78</h5>
                                                    <p>MAIN CAMPUS <br> GRADUATE STUDIES </p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col"
                                                     style="text-align: center ; color: white; padding: 20px; border-right: 1px solid white; ">
                                                    <h5>1,182</h5>
                                                    <p>CALAPAN CAMPUS <br> BACCALAUREATE PROGRAM</p>

                                                </div>
                                                <div class="col"
                                                     style="text-align: center; color: white ; padding: 20px">
                                                    <h5>555</h5>
                                                    <p>BONGABONG CAMPUS <br> BACCALAUREATE PROGRAM </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="py-2 px-3"
                                             style=" border:1px solid white; border-radius: 10px;position: absolute;background-color: #9bc4a6; top: 50%; left: 50%; transform: translate(-50%,-50%)">
                                            <h2> 2,331</h2>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row pt-2">
                        <div class="card w-100">
                            <div class="card-body">
                                <div style="background-color: #0b5421" class="card-header">
                                    <h4 class style="color: white">Enrollment Data 2nd Semester AY 2021-2022</h4>
                                </div>
                                <div class="card-text" style="padding: 20px; background:#cadba4 ; text-align: center">
                                    <div class="row">
                                    <div class="col-md-4" style="margin-top: 5px">
                                        <div class="card">
                                            <div class="card-body p-4" style="background-color: #9bc4a6">
                                                <h3><strong>MAIN CAMPUS</strong> <br> 2,750</h3>
                                                <div class="card inline-block mb-2" style="background-color: #3c763d ">
                                                    <div class="card-body" style="text-align: center; color: white">
                                                        <p class="p1">BD-2,137 <br> GS- 397 </p>
                                                    </div>
                                                </div>
                                                <div class="card inline-block mb-2" style="background-color: #3c763d ">
                                                    <div class="card-body" style="text-align: center; color: white">
                                                        <h3>LHS:</h3>
                                                        <p class="p1">JHS- 87 <br> SHS- 129</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                        <div class="col-md-4" style="margin-top: 5px">
                                            <div class="card">
                                                <div class="card-body p-4" style="background-color: #9bc4a6">
                                                    <h3><strong>CALAPAN CAMPUS</strong> <br> 5,127</h3>
                                                    <div class="card inline-block mb-2" style="background-color: #3c763d ">
                                                        <div class="card-body" style="text-align: center; color: white">
                                                            <p class="p1">BD-4,865</p>
                                                        </div>
                                                    </div>
                                                    <div class="card inline-block mb-2" style="background-color: #3c763d ">
                                                        <div class="card-body" style="text-align: center; color: white">
                                                            <h3>LHS:</h3>
                                                            <p class="p1">JHS- 163 <br> SHS- 99</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                        <div class="col-md-4" style="margin-top: 5px">
                                            <div class="card">
                                                <div class="card-body p-4" style="background-color: #9bc4a6">
                                                    <h3><strong>BONGABONG CAMPUS</strong> <br> 2,453</h3>
                                                    <div class="card inline-block mb-2" style="background-color: #3c763d ">
                                                        <div class="card-body" style="text-align: center; color: white">
                                                            <p class="p1">BD-2,453 </p>
                                                        </div>
                                                    </div>
                                                    <div class="card inline-block mb-2" style="background-color: #3c763d ">
                                                        <div class="card-body" style="text-align: center; color: white">
                                                            <h3>LHS:</h3>
                                                            <p class="p1">JHS- 84 <br> SHS- 66</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
                            <div style="background-color: #0b5421;text-align: center" class="card-header">
                                <h4 style="color: white">Important Dates/ Schedule</h4>
                            </div>
                            <div class="card-text p-4">
                                <div class="col d-flex align-items-center align-content-center justify-content-center"
                                     style="color: #6e6e6e">
                                    <p class="text-left"><b>Evaluation of Academic Records:</b> June 6-10 and 13-17, 2022
                                        <br><b>Application for Graduation:</b> June 20-24, 2022 <br>
                                        <b>Summer Class Registration Period:</b> July 11-15, 2022 <b>Tentative Date of Graduation:</b> July 18, 2022</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="margin-top: 40px">
                        <div class="card-body">
                            <div style="background-color: #0b5421; text-align: center" class="card-header">
                                <h4 style="color: white ">Contact Us</h4>
                            </div>
                            <div class="card-text" >
                                <div class="wrap" style="text-align: center">
                                    <h4 style="margin-top: 20px; color: green">
                                        <strong>MAIN CAMPUS</strong>
                                    </h4>
                                    <p><b>Esperanza A. Maminta </b> <br> Alcate, Victoria Oriental Mindoro <br> (0977) 801 1752</p>
                                    <h4 style="margin-top: 20px; color: green">
                                        <strong>CALAPAN CITY CAMPUS</strong>
                                    </h4>
                                    <p><b>Angelie H. Fernandez </b> <br> Masipit, Calapan City Oriental Mindoro <br> (0951) 740 2602 / (0995) 543 8716</p>
                                    <h4 style="margin-top: 20px; color: green">
                                        <strong>BONGABONG CAMPUS</strong>
                                    </h4>
                                    <p><b>Rachel Marie N. Dela Cruz </b> <br> Labasan, Bongabong Oriental Mindoro <br> registrar.bongabong@gmail.com
                                        <br>0953-710-0668 </p>
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
