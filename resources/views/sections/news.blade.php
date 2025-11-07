
<section class="blog">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>News and Updates</h2>
            </div>
        </div>
        @if($news_featured)
            <div class="row">
                <div class="col-md-12">
                    <a href="{{route('news-details',['id'=> $news_featured->id])}}" class="home_blog_link">
                        <div class="blog-img_box">
                            <img style="height: 300px;object-fit: cover" src="{{$news_featured->image_url}}"
                                 class="img-fluid blog_display" alt="blog-img">
                            <div class="blogtitle blogtitle-rtl">
                                <h3>{{$news_featured->title}}</h3>
{{--                                                                <i class="icon-user fa-common" aria-hidden="true"></i>--}}
{{--                                                                <p>by: admin</p>--}}
                                <i class="icon-calendar fa-common" aria-hidden="true"></i>
                                <p>{{\Carbon\Carbon::parse($news_featured->date)->format('M. d, Y')}}</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        @endif
        <div class="row">
            @foreach($news as $item)
{{--                {{ dd($item) }}--}}
                <div class="col-md-4">
                    <a href="{{route('news-details',['id'=> $item->id])}}" class="home_blog_link">
                        <div class="blog-img_box" style="height: 350px">
                            <img style="object-fit: cover;height: 150px" src="{{$item->image_url}}"
                                 class="img-fluid blog_display" alt="blog-img">
                            <div class="blogtitle blogtitle-rtl" style="padding: 20px">
                                <h3>{{$item->title}}</h3>
                                {{--                                <i class="icon-user fa-common" aria-hidden="true"></i>--}}
                                {{--                                <p>by: admin</p>--}}
                                <i class="icon-calendar fa-common" aria-hidden="true"></i>
                                <p>{{\Carbon\Carbon::parse($item->date)->format('M. d, Y')}}</p>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <a href="{{route('news-list')}}" class="btn btn-default btn-courses">Read more</a>
            </div>
        </div>
    </div>
</section>
