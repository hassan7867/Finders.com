@extends('top-nav')
@section('content')
    <link rel="stylesheet" href="<?php echo asset('css/stylesheet.css')?>" type="text/css">
    <style>

        body {
            background: #f8f9fa;
        }

        .success-btn-custom {
            background: #55407d;
            color: white;
            border: 1px solid #55407d;
            font-weight: bold;
        }

        .success-primary-btn-custom {
            background: #55407d;
            color: white;
            border: 1px solid #55407d;
            font-weight: bold;
            padding: 5px 5px;
            border-radius: 2px;
            width: 100px;
        }

        .success-btn-custom:hover,  .success-btn-custom:active{
            background: #55407d;
            color: white;
            font-weight: bold;
        }

        .selected-button {
            background: #55407d;
            color: white;
            border: 1px solid #f8f9fa;
            font-weight: bold;
            text-align: center;
            padding: 15px;
            border-radius: 3px;
            width: 100px;
        }

        .un-selected-button {
            background: white;
            color: black;
            border: 1px solid #55407d;
            font-weight: bold;
            text-align: center;
            padding: 15px;
            border-radius: 3px;
            width: 100px;
        }

        .un-selected-button:hover {
            background: #f8f9fa;
            color: black;
        }

        #success-notification {
            visibility: hidden;
            min-width: 250px;
            margin-left: -125px;
            background-color: #71c016;
            color: #fff;
            text-align: center;
            border-radius: 2px;
            padding: 16px;
            position: fixed;
            z-index: 1;
            left: 50%;
            bottom: 30px;
        }

        #error-notification {
            visibility: hidden;
            min-width: 250px;
            margin-left: -125px;
            background-color: #ff4747;
            color: #fff;
            text-align: center;
            border-radius: 2px;
            padding: 16px;
            position: fixed;
            z-index: 1;
            left: 50%;
            bottom: 30px;
        }

        #success-notification.show, #error-notification.show {
            visibility: visible;
            -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
            animation: fadein 0.5s, fadeout 0.5s 2.5s;
        }

        .active-top-link{
            background: white; border-radius: 4px; color: #002F34 !important;
        }

        .property-card{
            background: white; padding: 5px; border-radius: 2px; border-bottom: 4px solid grey; z-index: 1; cursor: pointer;
        }

        .search-card{
            background: white; padding: 10px; border-radius: 2px; border-bottom: 5px solid grey; z-index: 1;
        }
        .search-card:hover{
            border-bottom: 5px solid #002F34; z-index: 1;
        }
        .property-card:hover{
            border-bottom: 4px solid #002F34; cursor: pointer;
        }
        .location-resp{
            margin-top: 0px;
        }
        @media screen and (max-width: 970px) {
            .location-resp {
                margin-top: 10px;
            }
        }
    </style>


    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <body>
    <div style="margin-top: 250px; margin-bottom: 100px; padding: 10px">
    <div class="form-group ">
        <h3><b>Set your Password</b></h3>
        <label>Enter New Password</label>
        <input type="password" id="password" required="" class="form-control col-md-4">
    </div>
    <button class="btn btn-info" onclick="changePassword()">Change Password</button>
    </div>
    {{--properties list--}}
    <script  type="text/javascript" src="{{ \Illuminate\Support\Facades\URL::asset('theme-styles/js/jquery-3.3.1.min.js')}}"></script>
    <script  type="text/javascript" src="{{ \Illuminate\Support\Facades\URL::asset('theme-styles/styles/bootstrap-4.1.2/popper.js') }}"></script>
    <script  type="text/javascript" src="{{ \Illuminate\Support\Facades\URL::asset('theme-styles/styles/bootstrap-4.1.2/bootstrap.min.js') }}"></script>
    <script  type="text/javascript" src="{{ \Illuminate\Support\Facades\URL::asset('theme-styles/plugins/greensock/TweenMax.min.js') }}"></script>
    <script  type="text/javascript" src="{{ \Illuminate\Support\Facades\URL::asset('theme-styles/plugins/greensock/TimelineMax.min.js') }}"></script>
    <script  type="text/javascript" src="{{ \Illuminate\Support\Facades\URL::asset('theme-styles/plugins/scrollmagic/ScrollMagic.min.js') }}"></script>
    <script  type="text/javascript" src="{{ \Illuminate\Support\Facades\URL::asset('theme-styles/plugins/greensock/animation.gsap.min.js') }}"></script>
    <script  type="text/javascript" src="{{ \Illuminate\Support\Facades\URL::asset('theme-styles/plugins/greensock/ScrollToPlugin.min.js') }}"></script>
    <script  type="text/javascript" src="{{ \Illuminate\Support\Facades\URL::asset('theme-styles/plugins/OwlCarousel2-2.3.4/owl.carousel.js') }}"></script>
    <script  type="text/javascript" src="{{ \Illuminate\Support\Facades\URL::asset('theme-styles/plugins/easing/easing.js') }}"></script>
    <script  type="text/javascript" src="{{ \Illuminate\Support\Facades\URL::asset('theme-styles/plugins/progressbar/progressbar.min.js') }}"></script>
    <script  type="text/javascript" src="{{ \Illuminate\Support\Facades\URL::asset('theme-styles/plugins/parallax-js-master/parallax.min.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
    <script  type="text/javascript" src="{{ \Illuminate\Support\Facades\URL::asset('theme-styles/js/custom.js') }}"></script>
    </body>
    <div id="success-notification"></div>
    <div id="error-notification"></div>
    <script>

        function successNotification(successMessage) {
            var x = document.getElementById("success-notification");
            x.innerHTML = successMessage;
            x.className = "show";
            setTimeout(function () {
                x.className = x.className.replace("show", "");
            }, 2000);
        }

        function errorNotification(errorMessage) {
            let notification = document.getElementById("error-notification");
            notification.innerHTML = errorMessage;
            notification.className = "show";
            setTimeout(function () {
                notification.className = notification.className.replace("show", "");
            }, 2000);
        }

        function changePassword(){
            let password = document.getElementById('password').value;
            let token = window.location.href.split('/')[4];
            $.ajax({
                type: "POST",  //type of method
                url: "http://gofindee.com/api/setpassword",  //your page
                data: {password: password, token: token},// passing the values
                success: function (res) {
                    res = JSON.parse(res);
                    if(res.status){
                        successNotification(res.message);
                        setTimeout(function () {
                           window.location.href = 'http://gofindee.com';
                        }, 2000);
                    }else{
                        errorNotification(res.message);
                    }
                }
            });
        }

    </script>
    </html>
@endsection
