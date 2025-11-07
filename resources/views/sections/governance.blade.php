<!--============================= OUR COURSES =============================-->
<section class="event">
    <div class="container">
        <div class="row text-center">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                <a target="_blank" href="https://www.foi.gov.ph/requests/?q=Mindoro+State+University">
                    <div class="courses_box mb-4">
                        <div class="course-img-wrap">
                            <img height="150" src="template/images/governance/foi.png" style="object-fit: cover"  alt="courses-img">
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                <a href="{{route('good-governance.philgeps')}}">
                    <div class="courses_box mb-4">
                        <div class="course-img-wrap">
                            <img height="150" src="template/images/governance/philgeps.png" style="object-fit: cover"  alt="courses-img">
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                <a href="{{route('good-governance.transparency')}}">
                    <div class="courses_box mb-4">
                        <div class="course-img-wrap">
                            <img height="150" src="template/images/governance/transparencyseal.png" style="object-fit: cover"  alt="courses-img">
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                <div class="courses_box mb-4">
                    <div class="course-img-wrap d-flex text-center flex-column justify-content-center align-content-center" >
                        <div id="myclock"></div>
                        <h4 class="text-green"><strong><span id="lblDay"></span>, <span id="lblDate"></span></strong></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@section('script')
    <script language="javascript" type="text/javascript" src="{{asset('template/clock/js/jquery.thooClock.js')}}"></script>
    <script language="javascript">
        var intVal, myclock;

        $(document).ready(function(){

            var audioElement = new Audio("");

            //clock plugin constructor
            $('#myclock').thooClock({
                size:175,
                sweepingMinutes:false,
                sweepingSeconds:false,
                showNumerals:true,
                brandText:'MINSU',
                brandText2:'Philippines',
            });

        });

    </script>
    <script>
        var date = new Date();
        var day = date.getDay('DD');
        var weekday = new Array(7);
        weekday[0] = "Sunday";
        weekday[1] = "Monday";
        weekday[2] = "Tuesday";
        weekday[3] = "Wednesday";
        weekday[4] = "Thursday";
        weekday[5] = "Friday";
        weekday[6] = "Saturday";

        var month = new Array(12);
        month[0] = "January";
        month[1] = "February";
        month[2] = "March";
        month[3] = "April";
        month[4] = "May";
        month[5] = "June";
        month[6] = "July";
        month[7] = "August";
        month[8] = "September";
        month[9] = "October";
        month[10] = "November";
        month[11] = "December";

        $('#lblDay').html(weekday[day]);
        $('#lblDate').html(month[date.getMonth()] +' '+date.getDate() +', '+ date.getFullYear());
    </script>
@endsection
<!--//END OUR COURSES -->
