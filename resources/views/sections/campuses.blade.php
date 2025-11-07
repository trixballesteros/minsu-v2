<!--============================= OUR COURSES =============================-->
<section class="our_courses">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Our Colleges</h2>
            </div>
        </div>
        <div class="row">
            @foreach($colleges as $college)
                <a href="">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                        <div class="courses_box mb-4">
                            <div class="course-img-wrap">
                                <img height="150" src="{{$college->image_url}}" style="object-fit: cover"  alt="college-img">
                            </div>
                            <a href="course-detail.html" class="course-box-content">
                                <h3>{{$college->name}}</h3>
                                <p>{{$college->description}}</p>
                            </a>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
        <br>
        {{--        <div class="row">--}}
        {{--            <div class="col-md-12 text-center">--}}
        {{--                <a href="#" class="btn btn-default btn-courses">View all colleges</a>--}}
        {{--            </div>--}}
        {{--        </div>--}}
    </div>
</section>
<!--//END OUR COURSES -->
<?php
