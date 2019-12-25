@extends('top-nav')
@section('content')
    <script  type="text/javascript" src="{{ \Illuminate\Support\Facades\URL::asset('js/jquery.js') }}"></script>
    <script  type="text/javascript" src="{{ \Illuminate\Support\Facades\URL::asset('js/jquery.main.js') }}" ></script>
    <script src="../js/app.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?php echo asset('css/stylesheet.css')?>" type="text/css">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}">
    <style>

        body {
            background: #f8f9fa;
        }

        .success-btn-custom {
            background: #002F34;
            color: white;
            border: 1px solid #002F34;
            font-weight: bold;
        }

        .success-primary-btn-custom {
            background: #002F34;
            color: white;
            border: 1px solid #002F34;
            font-weight: bold;
            padding: 5px 5px;
            border-radius: 2px;
            width: 100px;
        }

        .success-btn-custom:hover,  .success-btn-custom:active{
            background: #002F34;
            color: white;
            font-weight: bold;
        }

        .selected-button {
            background: #002F34;
            color: white;
            font-weight: bold;
            text-align: center;
            padding: 5px;
            border-radius: 3px;
            width: 100px;
            box-shadow: none;
            outline: none;
        }

        .un-selected-button {
            background: #f8f9fa;
            color: #002F34;
            border: 1px solid #002F34;
            font-weight: bold;
            text-align: center;
            padding: 5px;
            border-radius: 3px;
            width: 100px;
        }

        .un-selected-button:hover {
            background: #002F34;
            color: white;
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

        div.image-gallery {
            margin: 5px;
            float: left;
            width: 180px;
            height: 180px;
        }

        div.image-gallery:hover {
            cursor: pointer;
        }

        div.image-gallery img {
            width: 100%;
            height: 100%;
        }
    </style>


    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <body>
    <div class="container mt-3">
        @if(!empty($properties))
                <div class="mt-2 property-card"   style="padding: 10px ;margin-left: 0px !important;margin-right: 0px !important;">
                   <div class="row">
                       <div class="col-md-8">
                           <h1><b>Property Details</b></h1>
                       </div>
                       <div class="col-md-4 text-right">
                           <h1><b>Property ID : {{$properties->id_property}}</b></h1>
                       </div>
                   </div>
                    <div>
                        <div class="row">
                            <div class="col-md-8">
                                <h1><b>{{$properties->title}}</b></h1>

                            </div>
                            <div class="col-md-4 text-right">
                                    <h2><span><b>PKR {{$properties->price}}</b></span></h2>
                            </div>
                        </div>
                        @if($properties->purpose == 'forSale')
                            <h4 class="mt-2"><span style="color: #1e7e34"><b>For Sale</b></span></h4>
                        @endif
                        @if($properties->purpose == 'forRent')
                            <h4 class="mt-2"><span style="color: #007bff"><b>For Rent</b></span></h4>
                        @endif
                        <h3 style="color: grey">{{$properties->location}}, {{$properties->city}}, {{$properties->country}}</h3>
                        <div class="mt-1">
                            @if(!empty($properties->home_features))
                                <span title="Bedrooms" style="font-size: 20px"><img src="{{asset("img/bed.svg")}}" style="width: 25px; height: 25px"> {{$properties->home_features->bedrooms}}</span>
                                <span title="Bathrooms" style="font-size: 20px; margin-left: 15px"><img src="{{asset("img/bathrooms.svg")}}" style="width: 20px; height: 20px"> {{$properties->home_features->bathrooms}}</span>
                                <span title="Parking space" style="font-size: 20px; margin-left: 15px"><img src="{{asset("img/parking.svg")}}" style="width: 20px; height: 20px"> {{$properties->home_features->home_parking_space}}</span>
                                <span title="Land area" style="font-size: 20px; margin-left: 15px"><img src="{{asset("img/area.svg")}}" style="width: 18px; height: 18px"> {{$properties->land_area}} {{$properties->unit}}</span>
                            @endif
                            @if(!empty($properties->commercial_features))
                                <span title="Rooms" style="font-size: 20px"><img src="{{asset("img/rooms.svg")}}" style="width: 20px; height: 20px"> {{$properties->commercial_features->rooms}}</span>
                                <span title="Floors" style="font-size: 20px; margin-left: 15px"><img src="{{asset("img/floors.svg")}}" style="width: 25px; height: 25px"> {{$properties->commercial_features->floors}}</span>
                                <span title="Parking space" style="font-size: 20px; margin-left: 15px"><img src="{{asset("img/parking.svg")}}" style="width: 20px; height: 20px"> {{$properties->commercial_features->commercial_parking_space}}</span>
                                <span title="Land area" style="font-size: 20px; margin-left: 15px"><img src="{{asset("img/area.svg")}}" style="width: 18px; height: 18px"> {{$properties->land_area}} {{$properties->unit}}</span>
                            @endif
                            @if(!empty($properties->plot_features))
                                <span title="Land area" style="font-size: 20px;"><img src="{{asset("img/area.svg")}}" style="width: 18px; height: 18px"> {{$properties->land_area}} {{$properties->unit}}</span>
                            @endif
                        </div>
                        <h6 class="mt-1" style="color: grey">Added on {{$properties->date_posting}}</h6>
                        <div class="row mt-4">
                            <div class="col-md-9">
                                <h2><b>Property Images</b></h2>
                            </div>
                            <div class="col-md-3 text-right">
                                <button class="success-primary-btn-custom" data-toggle="modal" data-target="#call-modal" onclick="getCallInfo({{$properties->id}})">Call</button>
                                <button class="success-primary-btn-custom" data-toggle="modal" data-target="#email-modal" onclick="setPropertyInfo({{$properties->id_property}}, {{$properties->id}})">Email</button>
                            </div>
                        </div>
                        <div class="row heading mt-4">
                            @foreach ($properties['images'] as $image)
                                <div>
                                    <div class="image-gallery">
                                        <a target="_blank" href="${values.url}">
                                            <img src="http://finders.com/api/property/image/get?attachment={{$image->image_path}}" width="600" height="400"
                                                 alt="click here to open file">
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
        @endif
    </div>
    </body>

    <div class="modal fade" id="call-modal">
        <div class="modal-dialog modal-sm">
            <div class="modal-content mb-5">
                <div class="modal-header">
                    <h5 class="modal-title text-center">Contact Owner</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="row ml-3 mt-2">
                    <div class="col-3">Name</div> <div class="col-4" id="contact-name"></div>
                </div>
                <div class="row ml-3 mb-5">
                    <div class="col-3">Tel</div> <div class="col-4" id="contact-mobile"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="email-modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Send Email</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="close-email-modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form>
                    <div class="modal-body">
                        <h5 class="mt-2"></h5>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Email:</label>
                            <input type="text" name="senderEmail" class="form-control" id="sender-email" placeholder="enter your email">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Phone:</label>
                            <input type="text"  name="senderPhone"  class="form-control" id="sender-phone" placeholder="enter your contact number">
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Message:</label>
                            <textarea name="senderMessage" class="form-control" id="sender-message">
                            </textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button id="send-btn" style="display: inline" type="button" class="btn success-btn-custom" onclick="sendEmail()">Send message</button>
                        <button style="display: none" class="btn success-btn-custom" id="sending-btn">
                        <span class="spinner-border spinner-border-sm" role="status"
                              aria-hidden="true"></span> Sending
                        </button>

                    </div>
                </form>
            </div>
        </div>
    </div>
    </html>
    <div id="success-notification"></div>
    <div id="error-notification"></div>
    <script>
        let currentEmailPropertyId = -1;
        function getCallInfo(propertyId) {
            $.ajax({
                type: "GET",  //type of method
                url: `http://finders.com/api/property/${propertyId}/contact/get`,  //your page
                success: function (res) {
                    res = JSON.parse(res);
                    document.getElementById('contact-name').innerHTML = res.name;
                    document.getElementById('contact-mobile').innerHTML = res.mobile;
                }
            });
        }

        function sendEmail(){
            document.getElementById('send-btn').style.display = 'none';
            document.getElementById('sending-btn').style.display = 'inline';
            let email = document.getElementById('sender-email').value;
            let phone = document.getElementById('sender-phone').value;
            let message = document.getElementById('sender-message').value;
            $.ajax({
                type: "POST",  //type of method
                url: "http://finders.com/api/email/send",  //your page
                data: {email: email, phone: phone, message: message, propertyId : currentEmailPropertyId},// passing the values
                success: function (res) {
                    res = JSON.parse(res);
                    document.getElementById('send-btn').style.display = 'inline';
                    document.getElementById('sending-btn').style.display = 'none';
                    resetEmailForm();
                    document.getElementById('close-email-modal').click();
                    if(res.status){
                        successNotification(res.message);
                    }else{
                        errorNotification(res.message);
                    }
                }
            });
        }
        function setPropertyInfo(propertyId, id) {
            currentEmailPropertyId = id;
            document.getElementById('sender-message').innerText = "I would like to inquire about your property of ID = " + propertyId + ". Please contact me at your earliest convenience."
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

        function resetEmailForm() {
            document.getElementById('sender-email').value = '';
            document.getElementById('sender-phone').value = '';
        }
    </script>
@endsection
