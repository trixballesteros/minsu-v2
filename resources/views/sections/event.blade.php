<!--============================= EVENTS =============================-->
<section class="event">
    <div class="container">
{{--        <div class="row">--}}
{{--            <div class="col-lg-6">--}}
{{--                <div class="row">--}}
{{--                    <h2>Announcements</h2>--}}
{{--                </div>--}}
{{--                <div class="event-img2">--}}
{{--                    @foreach($announcements as $event)--}}
{{--                        <a style="text-decoration: none; color: inherit"--}}
{{--                           href="{{route('events-details',['id'=> $event->id])}}" class="home_event_link">--}}
{{--                            <div class="mb-4 pb-2">--}}
{{--                                <div class="row mb-2">--}}
{{--                                    <div class="col-sm-4 pb-4"><img style="width: 100%; height: 100px;object-fit: cover" src="{{$event->image_url}}"--}}
{{--                                                                    class="img-fluid"--}}
{{--                                                                    alt="event-img"></div><!-- // end .col-sm-3 -->--}}
{{--                                    <div class="col-sm-8"><h3>{{$event->name}}</h3>--}}
{{--                                        <span>{{\Carbon\Carbon::parse($event->date_from)->format('M. d, Y')}}</span>--}}
{{--                                        @if($event->date_from < $event->date_to )--}}
{{--                                            <span>- {{\Carbon\Carbon::parse($event->date_to)->format('M. d, Y')}}</span>--}}
{{--                                        @endif--}}
{{--                                        <div>--}}
{{--                                            {{\Illuminate\Support\Str::limit(strip_tags($event->description),100,$end = '...' )}}--}}
{{--                                        </div>--}}
{{--                                        --}}{{--                                <a href="#">Read More</a></div><!-- // end .col-sm-7 -->--}}
{{--                                    </div><!-- // end .row -->--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                    @endforeach--}}
{{--                </div>--}}
{{--                <div class="col-md-12 text-center">--}}
{{--                    <a href="{{route('announcement-list')}}" class="btn btn-default btn-courses">View all</a>--}}
{{--                </div>--}}
{{--            </div>--}}

                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2>Academic Calendar / Events</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        @foreach($events as $main_event)
                            <div class="event_date">
                                <div class="event-date-wrap">
                                    <p class="text-center">{{\Carbon\Carbon::parse($main_event->date_from)->format('d')}}</p>
                                    <span>{{\Carbon\Carbon::parse($main_event->date_from)->format('M. Y')}}</span>
                                </div>
                            </div>
                            <div class="date-description">
                                <h3>{{$main_event->name}}</h3>
                                <div>
                                    {{strip_tags($main_event->description)}}
                                </div>
                                <hr class="event_line">
                            </div>
                        @endforeach
                    </div>
                    <div class="col-md-12 text-center">
                        <a href="{{route('events-list')}}" class="btn btn-default btn-courses">View all</a>
                    </div>
                </div>

            </div>


</section>
<!--//END EVENTS -->
