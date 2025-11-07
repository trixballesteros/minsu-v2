@extends('layouts.app')
@section('content')

    <div class="about_bg">

            @include('layouts.core.topmenu')
            <div class="row">
                <div style="color: white" class="col-md-12">
                    <h1>Our Core Values</h1>
                </div>

        </div>
    </div>
    <section class="testimonial">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="single-item">
                        <div class="quote">
                            <h2>Resilience</h2>
                            <p class="text-center"><strong>WE STRIVE</strong> hard to regain the University's strength
                                quickly amidst adversities for sustained growth and empowerment.</p>
                        </div>
                        <div class="quote">
                            <h2>Integrity</h2>
                            <p class="text-center"><strong>WE ADHERE</strong> to the value of respect and champions the
                                practice of upright moral code crucial in the attainment of the University's vision and
                                mission.</p>
                        </div>
                        <div class="quote">
                            <h2>Commitment</h2>
                            <p class="text-center"><strong>WE INTERNALIZE</strong> the value of dedication to hard work to meet the quality standards and shares this value as zeal towards achieving excellent performance. </p>

                        </div>
                        <div class="quote">
                            <h2>Excellence</h2>
                            <p class="text-center"><strong>WE UPHOLD</strong> outstanding performance of the University's quadruple functions-instruction, research, extension and production.</p>
                        </div>
                    </div>
                </div>
            </div>
            <hr style="width: 100%">
            <div class="row my-4">
                <div class="col-md-12">
                    <p class="">
                        <i><strong>WE BELIEVE</strong> that every graduate of MinSU should model the Core Values
                            of R.I.C.E in whatever endeavor he/she gets involved in and must strive to spread the
                            good values advocated by the University.</i>
                    </p>
                </div>
            </div>
        </div>
    </section>
    @include('sections.detail-chart')
@endsection
