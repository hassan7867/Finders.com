@extends('top-nav')
@section("content")
<html lang="en">
<style>
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
</style>
<head>
    <title>Contact V1</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
{{--    <script  type="text/javascript" src="{{ \Illuminate\Support\Facades\URL::asset('js/jquery.js') }}"></script>--}}
{{--    <script  type="text/javascript" src="{{ \Illuminate\Support\Facades\URL::asset('js/jquery.main.js') }}" ></script>--}}
    <script  type="text/javascript" src="{{ \Illuminate\Support\Facades\URL::asset('theme-styles/js/jquery-3.3.1.min.js')}}"></script>
    <script  type="text/javascript" src="{{ \Illuminate\Support\Facades\URL::asset('theme-styles/styles/bootstrap-4.1.2/popper.js') }}"></script>
    <script  type="text/javascript" src="{{ \Illuminate\Support\Facades\URL::asset('theme-styles/styles/bootstrap-4.1.2/bootstrap.min.js') }}"></script>
    <link rel="stylesheet" type="text/css" {{\Illuminate\Support\Facades\URL::asset('theme-styles/styles/contact.css') }}>
    <script  type="text/javascript" src="{{ \Illuminate\Support\Facades\URL::asset('theme-styles/js/contact.js') }}"></script>

        <link href="{{ \Illuminate\Support\Facades\URL::asset('contact-us-css/css/util.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ \Illuminate\Support\Facades\URL::asset('contact-us-css/css/main.css') }}" rel="stylesheet" type="text/css">
{{--    <script  type="text/javascript" src="{{ \Illuminate\Support\Facades\URL::asset('js/jquery.js') }}"></script>--}}
{{--    <script  type="text/javascript" src="{{ \Illuminate\Support\Facades\URL::asset('js/jquery.main.js') }}" ></script>--}}
</head>
<body>

<div style="height: 150px">
</div>

<!-- Contact -->

<div class="contact">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section_title_container text-center">
                    <div class="section_subtitle">Go findee</div>
                    <div class="section_title"><h1>Get in touch</h1></div>
                </div>
            </div>
        </div>
        <div class="row contact_row">
            <!-- Contact - About -->
            <div class="col-lg-4 contact_col">
                <div class="logo bold" style="font-size: 20px">Go Findee</div>
                <div class="contact_text">
                    <p>GoFindee is a real estate company. We provide online services to people who want to sell or rent their properties.</p>
                </div>
            </div>
            <!-- Contact - Info -->
            <div class="col-lg-4 contact_col">
                <div class="contact_info">
                    {{--<ul>--}}
                        {{--<li class="d-flex flex-row align-items-center justify-content-start">--}}
                            {{--<div class="d-flex flex-column align-items-center justify-content-center">--}}
                                {{--<div><img src="{{asset('theme-styles/images/placeholder_2.svg')}}" alt=""></div>--}}
                            {{--</div>--}}
                            {{--<span>Main Str, no 23, New York</span>--}}
                        {{--</li>--}}
                        {{--<li class="d-flex flex-row align-items-center justify-content-start">--}}
                            {{--<div class="d-flex flex-column align-items-center justify-content-center">--}}
                                {{--<div><img src="{{asset('theme-styles/images/phone-call-2.svg')}}"alt=""></div>--}}
                            {{--</div>--}}
                            {{--<span>+546 990221 123</span>--}}
                        {{--</li>--}}
                        {{--<li class="d-flex flex-row align-items-center justify-content-start">--}}
                            {{--<div class="d-flex flex-column align-items-center justify-content-center">--}}
                                {{--<div><img src="{{asset('theme-styles/images/envelope-2.svg')}}" alt=""></div>--}}
                            {{--</div>--}}
                            {{--<span>hosting@contact.com</span>--}}
                        {{--</li>--}}
                    {{--</ul>--}}
                </div>
            </div>

            <!-- Contact - Image -->
            <div class="col-lg-4 contact_col">
                <div class="contact_image d-flex flex-column align-items-center justify-content-center">
                    <img src="{{asset('theme-styles/images/contact_image.jpg')}}" alt="">
                </div>
            </div>

        </div>
        <div class="contact1-form validate-form mb-4">
            <div class="wrap-input1 validate-input" data-validate="Name is required">
                <input class="input1" type="text" name="name" placeholder="Name" id="name">
                <span class="shadow-input1"></span>
            </div>
            <div class="wrap-input1 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                <input class="input1" type="text" name="email" placeholder="Email" id="email">
                <span class="shadow-input1"></span>
            </div>
            <div class="wrap-input1 validate-input" data-validate="Message is required">
                <textarea class="input1" name="message" placeholder="Message" id="message"></textarea>
                <span class="shadow-input1"></span>
            </div>

            <div class="container-contact1-form-btn">
                <button class="contact1-form-btn" onclick="sendMessage()">
						<span>
							Send Email
							<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
						</span>
                </button>
            </div>
        </div>

    </div>
</div>


{{--<div class="contact1" style="background: #f8f9fa !important;">--}}
    {{--<div class="container-contact1">--}}
        {{--<div class="contact1-pic js-tilt" data-tilt>--}}
            {{--<img src="{{asset('contact-us-css/images/email.svg')}}" alt="IMG">--}}
        {{--</div>--}}

        {{--<div class="contact1-form validate-form">--}}
            {{--<div class="wrap-input1 validate-input" data-validate="Name is required">--}}
                {{--<input class="input1" type="text" name="name" placeholder="Name" id="name">--}}
                {{--<span class="shadow-input1"></span>--}}
            {{--</div>--}}
            {{--<div class="wrap-input1 validate-input" data-validate="Valid email is required: ex@abc.xyz">--}}
                {{--<input class="input1" type="text" name="email" placeholder="Email" id="email">--}}
                {{--<span class="shadow-input1"></span>--}}
            {{--</div>--}}
            {{--<div class="wrap-input1 validate-input" data-validate="Message is required">--}}
                {{--<textarea class="input1" name="message" placeholder="Message" id="message"></textarea>--}}
                {{--<span class="shadow-input1"></span>--}}
            {{--</div>--}}

            {{--<div class="container-contact1-form-btn">--}}
                {{--<button class="contact1-form-btn" onclick="sendMessage()">--}}
						{{--<span>--}}
							{{--Send Email--}}
							{{--<i class="fa fa-long-arrow-right" aria-hidden="true"></i>--}}
						{{--</span>--}}
                {{--</button>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
</body>
<script  type="text/javascript" src="{{ \Illuminate\Support\Facades\URL::asset('theme-styles/js/custom.js') }}"></script>
</html>
<div id="success-notification"></div>
<div id="error-notification"></div>
    <script>
      function sendMessage(){
          if(document.getElementById('name').value === '' || document.getElementById('email').value === '' || document.getElementById('message').value === ''){
              errorNotification("Invalid data!");
              return;
          }
          let name = document.getElementById('name').value;
          let email = document.getElementById('email').value;
          let message = document.getElementById('message').value;
          $.ajax({
              type: "POST",  //type of method
              url: "http://gofindee.com/api/message/send",  //your page
              data: {email: email, name: name, message: message},// passing the values
              success: function (res) {
                  res = JSON.parse(res);
                  resetEmailForm();
                  if(res.status){
                      successNotification(res.message);
                  }else{
                      errorNotification(res.message);
                  }
              }
          });
      }

      function resetEmailForm() {
          document.getElementById('name').value = '';
          document.getElementById('email').value = '';
          document.getElementById('message').value = '';
      }

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

    </script>
@endsection