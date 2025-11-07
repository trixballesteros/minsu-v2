@extends('layouts.app')
@section('content')

    <div class="about_bg">

            @include('layouts.core.topmenu')
            <div class="row">
                <div class="col-md-12">
                    <h1>Our Students</h1>
                </div>
            </div>

    </div>
    <!--//ADD Student Department here-->




    <section class="campus">
        <div class="container">
            <div class="row">
                <div style=" border: 5px solid  #0b5421; position: relative;padding-left: 50px; padding-right: 50px" class="col-md-12 mb-4">
                    <div
                        style=" border: 5px solid  #0b5421; position: absolute;top: -50px;background-color: white;left: 25px; padding-left: 20px;padding-right: 20px; padding-top: 20px; padding-bottom: 0px">
                       <h2>University Departments</h2>
                    </div>
                    <h4 style="margin-top: 80px; margin-bottom: 5px;">
                        Mindoro State University.
                    </h4>
                    <div class="row justify-content-center">
                        <div class="col-xs-12 col-md-6 col-lg-4">
                            <div class="campus-img_block">
                                <img src="images/campus/campus-img_01.jpg" class="img-fluid" alt="campus-img">
                                <div class="campus-title-block">
                                    <h4>Arts and Culture</h4>
                                </div>
                            </div>
                            <div class="campus-img_text">
                                <p>Continually strategize extensive channels vis-a-vis transparent e-services.
                                    Seamlessly
                                    embrace unique methodologies</p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6 col-lg-4">
                            <div class="campus-img_block">
                                <img src="images/campus/campus-img_02.jpg" class="img-fluid" alt="campus-img">
                                <div class="campus-title-block">
                                    <h4>Physical</h4>
                                </div>
                            </div>
                            <div class="campus-img_text">
                                <p> Seamlessly embrace unique methodologies after front-end benefits. Credibly drive
                                    value-added methods of empowerment</p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6 col-lg-4">
                            <div class="campus-img_block">
                                <img src="images/campus/campus-img_03.jpg" class="img-fluid" alt="campus-img">
                                <div class="campus-title-block">
                                    <h4>Science</h4>
                                </div>
                            </div>
                            <div class="campus-img_text">
                                <p>Strategize extensive channels vis-a-vis transparent e-services. Seamlessly embrace
                                    unique
                                    methodologies after front-end</p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6 col-lg-4">
                            <div class="campus-img_block">
                                <img src="images/campus/campus-img_04.jpg" class="img-fluid" alt="campus-img">
                                <div class="campus-title-block">
                                    <h4>Health & Wellness</h4>
                                </div>
                            </div>
                            <div class="campus-img_text">
                                <p>Credibly drive value-added methods of empowerment without highly
                                    efficient.Continually
                                    strategize extensive channels</p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6 col-lg-4">
                            <div class="campus-img_block">
                                <img src="images/campus/campus-img_05.jpg" class="img-fluid" alt="campus-img">
                                <div class="campus-title-block">
                                    <h4>Students IT service</h4>
                                </div>
                            </div>
                            <div class="campus-img_text">
                                <p>Continually strategize extensive channels vis-a-vis transparent e-services.
                                    Seamlessly
                                    embrace unique methodologies</p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6 col-lg-4">
                            <div class="campus-img_block">
                                <img src="images/campus/campus-img_06.jpg" class="img-fluid" alt="campus-img">
                                <div class="campus-title-block">
                                    <h4>Food </h4>
                                </div>
                            </div>
                            <div class="campus-img_text">
                                <p>Seamlessly embrace unique methodologies after front-end benefits. Credibly drive
                                    value-added methods of empowerment</p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6 col-lg-4">
                            <div class="campus-img_block">
                                <img src="images/campus/campus-img_07.jpg" class="img-fluid" alt="campus-img">
                                <div class="campus-title-block">
                                    <h4>Students Club</h4>
                                </div>
                            </div>
                            <div class="campus-img_text">
                                <p>Continually strategize extensive channels vis-a-vis transparent e-services. Credibly
                                    drive value-added methods</p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6 col-lg-4">
                            <div class="campus-img_block">
                                <img src="images/campus/campus-img_08.jpg" class="img-fluid" alt="campus-img">
                                <div class="campus-title-block">
                                    <h4>Charity Club</h4>
                                </div>
                            </div>
                            <div class="campus-img_text">
                                <p>Continually strategize extensive channels vis-a-vis transparent e-services.
                                    Seamlessly
                                    embrace unique methodologies</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-6 col-lg-4"></div>
            <div class="col-md-12 text-center">
                <a href="#" class="btn btn-default btn-courses">All Departments</a>
            </div>
        </div>

    </section>
    </section>
    @include('sections.detail-chart')
@endsection
