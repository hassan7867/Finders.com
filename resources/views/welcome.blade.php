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
</style>


<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<body onload="typeWriter()">
<div class="container mt-3">
    <div class="search-card">
        <div class="ml-3">
            <h1 style="font-weight: bold; font-size: 25px; color: #002F34" id="AutoText"></h1>
        </div>
        <div class="w-25 mt-2 ml-3">
            <button class="un-selected-button" onclick="selectPurpose('buy')" id="buy-purpose">Buy</button>
            <button class="un-selected-button ml-1" onclick="selectPurpose('rent')" id="rent-purpose">Rent</button>
        </div>
        <div class="row mt-2" style="margin-left: 0px !important;margin-right: 0px !important;">
            <div class="col-md-3">
                <select onchange="getCities()" class="form-control" id="select-country">
                    <option value="-1">Select country</option>
                    <option value="PK">Pakistan</option>
                    <option value="AE">United Arab Emirates</option>
                </select>
            </div>
            <div class="col-md-3">
                <select class="form-control" id="select-city">
                    <option value="-1">Select city</option>
                </select>
            </div>
            <div class="col-md-3">
                <input type="text" placeholder="Enter location" class="form-control" id='selected-location'>
            </div>
            {{--<div class="col-md-2">--}}
                {{--<input type="text" placeholder="Enter max budget" class="form-control">--}}
            {{--</div>--}}
            <div class="col-md-2">
                <button class="success-primary-btn-custom" onclick="filterProperties()">Find</button>
            </div>
        </div>
    </div>
    @if(!empty($properties))
        @foreach ($properties as $property)
            <div class="row mt-2 property-card" style="margin-left: 0px !important;margin-right: 0px !important;">
                <div class="col-md-6" style="padding: 5px">
                    @if(!empty($property->main_image))
                         <img width="550px" height="300px"
                                           src="http://finders.com/api/property/image/get?attachment={{$property->main_image}}">
                    @endif
                    @if(empty($property->main_image))
                            <img width="550px" height="300px"
                                 src="{{asset('img/default-image.jpg')}}">
                     @endif
                </div>
                <div class="col-md-6">
                    @if($property->purpose == 'forSale')
                        <h4 class="mt-2"><span style="color: #1e7e34"><b>For Sale</b></span></h4>
                    @endif
                    @if($property->purpose == 'forRent')
                        <h4 class="mt-2"><span style="color: #007bff"><b>For Rent</b></span></h4>
                    @endif
                    <div style="font-size: 18px" class="text-left">PKR <span style="font-size: 25px"><b>{{$property->price}}</b></span></div>
                     <h4><b>{{$property->title}}</b></h4>
                    <h3 style="color: grey">{{$property->location}}, {{$property->city}}, {{$property->country}}</h3>
                    <div class="mt-1">
                    @if(!empty($property->home_features))
                        <span title="Bedrooms" style="font-size: 20px"><img src="{{asset("img/bed.svg")}}" style="width: 25px; height: 25px"> {{$property->home_features->bedrooms}}</span>
                        <span title="Bathrooms" style="font-size: 20px; margin-left: 15px"><img src="{{asset("img/bathrooms.svg")}}" style="width: 20px; height: 20px"> {{$property->home_features->bathrooms}}</span>
                        <span title="Parking space" style="font-size: 20px; margin-left: 15px"><img src="{{asset("img/parking.svg")}}" style="width: 20px; height: 20px"> {{$property->home_features->home_parking_space}}</span>
                        <span title="Land area" style="font-size: 20px; margin-left: 15px"><img src="{{asset("img/area.svg")}}" style="width: 18px; height: 18px"> {{$property->land_area}} {{$property->unit}}</span>
                    @endif
                    @if(!empty($property->commercial_features))
                        <span title="Rooms" style="font-size: 20px"><img src="{{asset("img/rooms.svg")}}" style="width: 20px; height: 20px"> {{$property->commercial_features->rooms}}</span>
                        <span title="Floors" style="font-size: 20px; margin-left: 15px"><img src="{{asset("img/floors.svg")}}" style="width: 25px; height: 25px"> {{$property->commercial_features->floors}}</span>
                        <span title="Parking space" style="font-size: 20px; margin-left: 15px"><img src="{{asset("img/parking.svg")}}" style="width: 20px; height: 20px"> {{$property->commercial_features->commercial_parking_space}}</span>
                        <span title="Land area" style="font-size: 20px; margin-left: 15px"><img src="{{asset("img/area.svg")}}" style="width: 18px; height: 18px"> {{$property->land_area}} {{$property->unit}}</span>
                    @endif
                    @if(!empty($property->plot_features))
                        <span title="Land area" style="font-size: 20px;"><img src="{{asset("img/area.svg")}}" style="width: 18px; height: 18px"> {{$property->land_area}} {{$property->unit}}</span>
                    @endif
                    </div>
                    <h6 class="mt-5" style="color: grey">Added on {{$property->date_posting}}</h6>
                    <div class="mt-1">
                    <button class="success-primary-btn-custom" data-toggle="modal" data-target="#call-modal" onclick="getCallInfo({{$property->id}})">Call</button>
                    <button class="success-primary-btn-custom" data-toggle="modal" data-target="#email-modal" onclick="setPropertyInfo({{$property->id_property}}, {{$property->id}})">Email</button>
                        <button class="success-primary-btn-custom" onclick="viewDetails({{$property->id}})">View Details</button>
                    </div>
                </div>
            </div>
        @endforeach
    @endif
    @if(empty($properties))
        <div class="mt-2 property-card">
            <h3  style="color: grey; text-align: center">No properties found!</h3>
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
<div id="success-notification"></div>
<div id="error-notification"></div>
<script>

    let purpose = 'all';
    let countrySelected = 'all';
    let city = 'all';
    let selectedlocation = 'all';
    let currentEmailPropertyId = -1;

    setFilters();
    function setFilters(){
        if(window.location.href.includes('properties/get/')){
            let secondHalf = window.location.href.split('properties/get/')[1];
            purpose = secondHalf.split('/')[0];
            countrySelected = secondHalf.split('/')[1];
            city = secondHalf.split('/')[2];
            selectedlocation = secondHalf.split('/')[3];
            if(purpose === 'forSale'){
                document.getElementById('buy-purpose').classList.add("selected-button");
                document.getElementById('rent-purpose').classList.add("un-selected-button");
                document.getElementById('buy-purpose').classList.remove("un-selected-button");
            }
            if(purpose === 'forRent'){
                document.getElementById('rent-purpose').classList.add("selected-button");
                document.getElementById('buy-purpose').classList.add("un-selected-button");
                document.getElementById('rent-purpose').classList.remove("un-selected-button");
            }
            if(countrySelected !== 'all'){
                document.getElementById('select-country').value = countrySelected;
                $.ajax({
                    type: "POST",  //type of method
                    url: "http://finders.com/api/cities/get",  //your page
                    data: {country: countrySelected},// passing the values
                    success: function (res) {
                        res = JSON.parse(res);
                        document.getElementById('select-city').innerHTML = '';
                        let child =  document.createElement("option");
                        child.value = "-1";
                        child.innerHTML = "Select City";
                        document.getElementById('select-city').appendChild(child);
                        for(let i=0; i<res.length; i++){
                            let child =  document.createElement("option");
                            child.innerHTML = res[i];
                            child.value = res[i];
                            document.getElementById('select-city').appendChild(child);
                        }
                        if(city !== 'all'){
                            document.getElementById('select-city').value = city
                        }
                    }
                });

            }
            if(selectedlocation !== 'all'){
                document.getElementById('selected-location').value = selectedlocation;
            }
        }
    }

    function selectPurpose(type) {
        properties = [];
        if (type === 'buy') {
            purpose = 'forSale';
            document.getElementById('buy-purpose').classList.add("selected-button");
            document.getElementById('rent-purpose').classList.add("un-selected-button");
            document.getElementById('buy-purpose').classList.remove("un-selected-button");
            filterProperties();
        } else {
            purpose = 'forRent';
            document.getElementById('rent-purpose').classList.add("selected-button");
            document.getElementById('buy-purpose').classList.add("un-selected-button");
            document.getElementById('rent-purpose').classList.remove("un-selected-button");
            filterProperties();
        }
    }

    function openCallModal() {

    }

    // auto written text
    let i = 0;
    let txt = 'Hi, Find your dream property here.';
    let speed = 50;

    function typeWriter() {
        if (i < txt.length) {
            document.getElementById("AutoText").innerHTML += txt.charAt(i);
            i++;
            setTimeout(typeWriter, speed);
        }
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

    function resetEmailForm() {
        document.getElementById('sender-email').value = '';
        document.getElementById('sender-phone').value = '';
    }

    function citySelected(val){
        if(val === -1 || val === '-1'){
            city = 'all';
        }
        city = val;
    }

    //get cities
    function getCities(){
        let country = (document.getElementById('select-country').value);
        if(country === -1 || country === '-1'){
            countrySelected = 'all';
        }else{
            countrySelected = country;
        }
        $.ajax({
            type: "POST",  //type of method
            url: "http://finders.com/api/cities/get",  //your page
            data: {country: country},// passing the values
            success: function (res) {
                res = JSON.parse(res);
                document.getElementById('select-city').innerHTML = '';
                let child =  document.createElement("option");
                child.value = "-1";
                child.innerHTML = "Select City";
                document.getElementById('select-city').appendChild(child);
                for(let i=0; i<res.length; i++){
                    let child =  document.createElement("option");
                    child.innerHTML = res[i];
                    child.value = res[i];
                    document.getElementById('select-city').appendChild(child);
                }
            }
        });
    }

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

    function setPropertyInfo(propertyId, id) {
        currentEmailPropertyId = id;
        document.getElementById('sender-message').innerText = "I would like to inquire about your property of ID = " + propertyId + ". Please contact me at your earliest convenience."
    }

    function filterProperties() {
        if(document.getElementById('selected-location').value != ''){
            selectedlocation = document.getElementById('selected-location').value;
        }else{
            selectedlocation = 'all';
        }
        if(document.getElementById('select-city').value !== '' && document.getElementById('select-city').value !== '-1' && document.getElementById('select-city').value !== -1){
            city = document.getElementById('select-city').value;
        }else{
            city = 'all';
        }


        window.location.href = `http://finders.com/properties/get/${purpose}/${countrySelected}/${city}/${selectedlocation}`
    }

    function viewDetails(propertyId) {
        window.location.href = `http://finders.com/property/${propertyId}/detail`
    }

</script>
</html>
@endsection
