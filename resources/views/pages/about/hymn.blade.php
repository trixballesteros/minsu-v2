@extends('layouts.app')
@section('content')

    <div class="about_bg">

            @include('layouts.core.topmenu')
            <div class="row">
                <div class="col-md-12">
                    <h1>Our Hymn</h1>
                </div>
            </div>

    </div>
    <section class="testimonial">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>MinSU Hymn</h2>
                </div>
                <div class="col-md-12 d-flex justify-content-center apgn-content-center apgn-items-center">
{{--                    <audio controls>--}}
{{--                        <source src="{{asset('template/audio/minsu_hymn.mp3')}}" type="audio/mpeg">--}}
{{--                        Your browser does not support the audio element.--}}
{{--                    </audio>--}}<iframe width="100%" height="400" src="https://www.youtube.com/embed/8VfjZhAJd3Y" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <style>
                    p {
                        text-align: center;
                        margin-top: -1px;
                    }

                </style>
                <div class="col-md-12 text-center mt-4 pt-4 ">

                    <p>
                        Raise your voice throughout the land <br>
                        We have MinSU forever <br>
                        Bring the truth and wisdom fore <br>
                        Our unyielding spirits soar <br><br>

                        A humble few, to till the land <br>
                        Wishing all the world could share <br>
                        It's our goal, to shape and teach <br>
                        Every willing arms to reach. <br> <br>

                        (Refrain)<br>
                        We have planted all the seeds,<br>
                        And the yield are all our dreams <br>
                        Reaching with our might <br>
                        Even through the night <br>
                        We have MinSU in our hearts. <br><br>

                        Let us sing our blessed hymn <br>
                        Making MinSU our true home <br>
                        Throughout the world our feet will tread <br>
                        But our hearts would stay instead<br><br>

                        (Repeat Refrain) <br>
                        Reaching with our might <br>
                        Even through the night <br>
                        We have MINSU in our hearts.</p>


                </div>
            </div>
        </div>
    </section>
    @include('sections.detail-chart')
@endsection
