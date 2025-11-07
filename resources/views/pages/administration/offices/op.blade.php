@extends('layouts.app')
@section('content')

    <div class="about_bg">

            @include('layouts.core.topmenu')
            <div class="row">
                <div class="col-md-12">
                    <h1>Office of the University President</h1>
                </div>
            </div>

    </div>
    <section style="margin-top: 50px; margin-bottom: 50px">
        <div class="container">
            <div class="row">
                <div class="col-md-12" style="padding-right: 40px">
                    <div class="row">
                        <div class="card">
                            <div class="card-body">

                                <div class="card-text">
                                    <div class="row p-4">
                                        <div class="col-md-5">
                                            <img style="border: 2px solid #0b5421;width: 100%;object-fit: cover"
                                                 src="/template/images/employee/president_apostol.png" alt="">
                                            <h3>
                                                Dr. Enya Marie D. Apostol
                                            </h3>
                                            <h4>
                                                University President
                                            </h4>
                                            <p>
                                                <a href="universitypresident@minsu.edu.ph">
                                                    <i class="fa fa-envelope"> universitypresident@minsu.edu.ph </i></a> <br>

                                                <a href="opcontact">
                                                    <i class="fa fa-phone"> +63 977 846 7228</i></a>

                                            </p>

                                        </div>
                                        <div class="col-md-6">
                                            <h3 style="margin-bottom: 20px">
                                                Welcome to Mindoro State University!
                                            </h3>
                                            <blockquote style="font-size: 15px">
                                                <p>
                                                    "As the first lady president of our beloved institution, I am deeply moved by your support and confidence in me. Together, we embark on a journey to make Mindoro State University the region's university of choice. This vision is not merely a goal but a promise, a beacon of hope for every student, faculty member, staff, and stakeholder. We will strive for excellence, inclusivity, and innovation, ensuring that every individual is valued and empowered.
                                                </p>
                                                <p>
                                                    Our mission is clear: to continue to LIFT MINSU to new heights through development goals that enhance our educational programs, foster groundbreaking research, and cultivate an environment where every individual can thrive. Achieving these objectives requires a collective effort, and I am confident that we will make this vision a reality with your continued support, dedication, and collaboration.
                                                </p>
                                                <p>
                                                    I am humbled by this opportunity and eager to work alongside each of you to shape a brighter future for our university and our community. Let us unite in our commitment to excellence and progress, knowing that together, we can achieve extraordinary things.
                                                </p>
                                                <p>
                                                    Thank you for believing in me and for being part of this incredible journey. I remain, now and always, your dedicated ally and advocate. I am forever Enya Marie Dinglasan-Apostol, your guide, your Apostle."
                                                </p>

                                            </blockquote>

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
                                    <h4 style="color: white">About the University President</h4>
                                </div>
                                <div class="card-text p-4">
                                    <h4  class="text-center">
                                        <p>
                                            Dr. Enya Marie D. Apostol has been elected as the 2nd University President of Mindoro State University by the MinSU Governing Board of Regents (BOR) through Board Resolution No. 28, series of 2-24.
                                        </p>
                                        <p>
                                            She is also the first woman president of MinSU.
                                        </p>
                                        <p>
                                            Dr. Apostol graduated with a Bachelor’s degree in Secondary Education major in Mathematics in 1999, got her master’s degree in Education major in Administration and Supervision and pursued Doctor of Philosophy in Management at the Divine Word College of Calapan in 1999, 2003 and 2009, respectively. She also completed her Post Doctorate in Professional Advancement Management Program in 2012 at EDS Business School in Malaysia.
                                        </p>
                                        <p>
                                            Prior to her application for the MinSU presidency, she served as Director for Planning, Monitoring, and Evaluation as well as Director for Finance, Administrative, and Support Services.
                                        </p>
                                        <p>
                                            She has also been recognized as dedicated and distinguished educator with a proven track record in teaching, administration, research and community service.
                                        </p>
                                        <p>
                                            In the recent presidential public presentation and forum, Dr. Apostol envisioned MinSU as "a university of choice," by 2030 with developmental goals encapsulated in the acronym LIFT MINSU: Leadership Excellence, Inclusivity, Fiscal Prudence, Technological Advancement, Management of Resources, Innovation, and Network of Collaborative Partnerships.
                                        </p>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
{{--                <div class="col-md-3">--}}
{{--                    <div class="card">--}}
{{--                        <div class="card-body">--}}
{{--                            <div style="background-color: #0b5421" class="card-header">--}}
{{--                                <h4 style="color: white">President's Corner</h4>--}}
{{--                            </div>--}}
{{--                            <div class="card-text p-4">--}}
{{--                                <div class="d-flex align-items-center align-content-center justify-content-center"--}}
{{--                                     style="height: 150px;color: #6e6e6e">--}}
{{--                                    <h4 class="text-center">No item found</h4>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="card" style="margin-top: 40px">--}}
{{--                        <div class="card-body">--}}
{{--                            <div style="background-color: #0b5421" class="card-header">--}}
{{--                                <h4 style="color: white">Announcements</h4>--}}
{{--                            </div>--}}
{{--                            <div class="card-text">--}}
{{--                                <div class="d-flex align-items-center align-content-center justify-content-center"--}}
{{--                                     style="height: 150px;color: #6e6e6e;width: 100%;">--}}
{{--                                    <h4 class="text-center">No item found</h4>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
    </section>
    @include('sections.detail-chart')
@endsection
