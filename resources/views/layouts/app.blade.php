<!DOCTYPE html>

<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Mindoro State University</title>
    <link rel="icon" type="image/png" href="{{asset('template/img/icon/favicon.ico')}}"/>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('template/css/bootstrap.min.css')}}">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('template/css/font-awesome.min.css')}}">
    <!-- Simple Line Font -->
    <link rel="stylesheet" href="{{asset('template/css/simple-line-icons.css')}}">
    <!-- Slider / Carousel -->
    <link rel="stylesheet" href="{{asset('template/css/slick.cs')}}s">
    <link rel="stylesheet" href="{{asset('template/css/slick-theme.cs')}}s">
    <link rel="stylesheet" href="{{asset('template/css/owl.carousel.min.css')}}">
    <!-- Main CSS -->
    <link href="{{asset('template/css/style.css')}}" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        p {
            text-align: justify;
            text-justify: inter-word
        }
    </style>


    @yield('styles')
</head>

<body>


<!-- Messenger Chat Plugin Code -->
<div id="fb-root"></div>

<!-- Your Chat Plugin code -->
<div id="fb-customer-chat" class="fb-customerchat">
</div>

<script>
    var chatbox = document.getElementById('fb-customer-chat');
    chatbox.setAttribute("page_id", "107661790936244");
    chatbox.setAttribute("attribution", "biz_inbox");
</script>

<!-- Your SDK code -->
<script>
    window.fbAsyncInit = function() {
        FB.init({
            xfbml            : true,
            version          : 'v17.0'
        });
    };

    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>


@yield('content')
@include('layouts.core.footer')


{{--Cards with animation, css and script--}}
<div id="drawCardsBtn" ><img class="cardbtn" src="{{asset('template/images/card-icons/sdg-pakudos.png')}}" ></div>
<div id="cardContainer" >
    <div class="drawcard" style="background-image: url('/template/images/card-icons/tarot.png');" title="GADLY">
        <a href="https://minsu.edu.ph/news/details/134" target="_blank" rel="noopener noreferrer"><img class="logocard" src="{{asset('template/images/card-icons/gadly.png')}}" ></a>
    </div>

    <div class="drawcard" style="background-image: url('/template/images/card-icons/tarot.png');" title="CalaMinSU" style="margin-left: 4px">
        <a href="https://minsu.edu.ph/news/details/135" target="_blank" rel="noopener noreferrer"><img class="logocard" src="{{asset('template/images/card-icons/calaminsu.jpg')}}" > </a>
    </div>
    <div class="drawcard" style="background-image: url('/template/images/card-icons/tarot.png');" title="Project Moses">

        <a href="https://projectmoses.io" target="_blank" rel="noopener noreferrer"><img class="logocard" src="{{asset('template/images/card-icons/projectmoses.png')}}" ></a>
    </div>
    <div class="drawcard" style="background-image: url('/template/images/card-icons/tarot.png');" title="I-BIBES">

        <a href="https://minsuibibes.com/" target="_blank" rel="noopener noreferrer"><img class="logocard" src="{{asset('template/images/card-icons/ibibes.png')}}" ></a>
    </div>
    <div class="drawcard" style="background-image: url('/template/images/card-icons/tarot.png');" title="Sustainable Development Goals">
        <a href="https://sdg.minsu.edu.ph" target="_blank" rel="noopener noreferrer"><img class="logocard" style="height: 90px; width: 90px; margin-left: -8px;" src="{{asset('template/images/card-icons/sdg.png')}}" ></a>
    </div>

    <div id="hideCardsBtn" > <img class="closeBtn" src="{{asset('template/images/card-icons/iconClose.png')}}" ></div>
</div>


<style>

    html{
        scroll-behavior: smooth;
    }
    button1 {
        position: fixed;
        right: 30px;
        z-index: 0;
        font-size: 18px;
        border: none;
        outline: none;
        background-color: #0e5705;
        color: white;
        cursor: pointer;
        padding: 8px 12px;
        border-radius: 3px;
        opacity: 80%;
        transition: bottom ease-in-out 0.3s;
    }

    button1 :hover {
        background-color: #255509;
    }
    /*style for cards*/
    #cardContainer {
        position: fixed;
        top: 70%;        left: -600px; /* Start off-screen */
        transform: translateY(-50%);
        transition: left 0.5s ease;
        display: flex;
    }
    .closeBtn {
        margin-left: 20px;
        margin-top: -40px;
        height: 20px;
        width: 20px;
        border-top-right-radius: 50%;
        border-bottom-right-radius: 50%;
    }

    .closeBtn:hover{
        transform: scale(1.5);
    }
    .logocard {
        height: 80px; width: 80px; margin-top: 20px;
    }

    .drawcard {
        border-radius: 5px;
        padding: 20px;
        margin: -20px;
        width: 120px;
        height: 160px;
        text-align: center;
        transition: transform 0.2s;
        justify-content: center;
        /* background-image: url('{{asset(`template/images/card-icons/tarot.png`)}}'); */
        background-size: cover;
        background-position: center;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.2); /* Blurred shadow */


    }
    .cardbtn {
        height: 150px;
        width: 150px;

    }


    #drawCardsBtn {
        position: fixed;
        top: 62%;
        cursor: pointer;
        background-color: rgba(255, 255, 255);
        border-bottom-right-radius: 50%;
        border-top-right-radius: 50%;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.6)
    }

    .drawcard:hover {
        transform: scale(1.2); /* Slightly enlarge the button */
        cursor: pointer;
        z-index: 1;
        background: white;
        outline: 1px solid #0b0b0b; /* Border-style outline */
        outline-offset: -10px;  /* Move the border inside */

    }
    .hidden {
        display: none; /* Hide initially */
    }
</style>

{{--script for cards--}}
<script>
    const drawCardsBtn = document.getElementById('drawCardsBtn');
    const cardContainer = document.getElementById('cardContainer');
    const hideCardsBtn = document.getElementById('hideCardsBtn');

    // Function to show the card container
    const showCards = () => {
        cardContainer.classList.remove('hidden');
        cardContainer.style.left = '30px'; // Slide in
        drawCardsBtn.style.display = 'none'; // Hide the draw button
    };

    // Function to hide the card container
    const hideCards = () => {
        cardContainer.style.left = '-600px'; // Slide out
        setTimeout(() => {
            cardContainer.classList.add('hidden');
            drawCardsBtn.style.display = 'block'; // Show the draw button
        }, 500); // Wait for slide out animation to finish
    };

    // Toggle card container visibility when drawCardsBtn is clicked
    drawCardsBtn.addEventListener('click', showCards);

    // Hide the card container when hideCardsBtn is clicked
    hideCardsBtn.addEventListener('click', hideCards);

    // Hide the card container when clicking outside of it
    document.addEventListener('click', function(event) {
        if (!cardContainer.contains(event.target) && !drawCardsBtn.contains(event.target)) {
            hideCards(); // Call hide function if click is outside
        }
    });
</script>


<style>

    html{
        scroll-behavior: smooth;
    }
    button1 {
        position: fixed;
        right: 30px;
        z-index: 0;
        font-size: 18px;
        border: none;
        outline: none;
        background-color: #0e5705;
        color: white;
        cursor: pointer;
        padding: 8px 12px;
        border-radius: 3px;
        opacity: 80%;
        transition: bottom ease-in-out 0.3s;
    }

    button1 :hover {
        background-color: #255509;
    }

</style>

<button1 onclick="topFunction()" id="backToTop" title="Go to top" Top>
    <i class="fa fa-chevron-up"> </i>
</button1>
<script>
    //Get the button
    var button1 = document.getElementById("backToTop");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function () {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 40 || document.documentElement.scrollTop > 20) {
            button1.style.bottom ="20px";
        } else {
            button1.style.bottom = "-60px";
        }

    }

    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }

</script>
<script>
    document.addEventListener("DOMContentLoaded", function (event) {
        document.querySelectorAll('img').forEach(function (img) {
            img.onerror = function () {
                this.style.objectFit = 'cover';
                this.src = '/img/no-image-found.png'
            };
        })
    });
    // var image = document.querySelectorAll("img");
    // function errorImage(_this){
    //     _this.onerror = null;
    //     _this.src='/img/no-image-found.png'
    // }
    // for (var i = 0; i < image.length; i++){
    //     image[i].setAttribute('onerror',errorImage(this));
    //     image[i].style.objectFit = 'cover';
    // }
</script>
<!-- jQuery, Bootstrap JS. -->
<script src="{{asset('template/js/jquery.min.j')}}s"></script>
<script src="{{asset('template/js/tether.min.js')}}"></script>
<script src="{{asset('template/js/bootstrap.min.js')}}"></script>
<!-- Plugins -->
<script src="{{asset('template/js/slick.min.js')}}"></script>
<script src="{{asset('template/js/waypoints.min.js')}}"></script>
<script src="{{asset('template/js/counterup.min.j')}}s"></script>
<script src="{{asset('template/js/instafeed.min.js')}}"></script>
<script src="{{asset('template/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('template/js/validate.js')}}"></script>
<script src="{{asset('template/js/tweetie.min.js')}}"></script>
<!-- Subscribe -->
<script src="{{asset('template/js/subscribe.js')}}"></script>
<!-- Script JS -->
<script src="{{asset('template/js/script.js')}}"></script>
@yield('script')
</body>

</html>
