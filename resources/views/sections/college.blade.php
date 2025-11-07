<!--============================= OUR COURSES =============================-->
<section class="our_courses">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Our Colleges</h2>
            </div>
        </div>
        <div style="padding: 20px" class="row">
            @foreach($colleges as $college)
                <div style="text-align: center;width: 100%; margin-bottom: 50px" class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                    <img title="{{$college->name}}" height="150" width="150" src="{{$college->image_url}}" style="object-fit: cover;border-radius: 50%"  alt="college-img">
                    <div class="text-center" style="text-align: center; margin-top: 20px;">
                        <h4 style="text-align: center; display: block;">{{$college->name}}</h4>
                    </div>
                </div>
            @endforeach
        </div>
        <br>
        <div class="row">
            <div class="col-md-12 text-center">
                <a href="https://minsu.edu.ph/academics/programs" class="btn btn-default btn-courses">Learn more</a>
            </div>
        </div>
    </div>
</section>
<!--//END OUR COURSES -->
