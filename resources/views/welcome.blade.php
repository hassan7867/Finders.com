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
        background: #f8f9fa;
        color: black;
        border: 1px solid #f8f9fa;
        font-weight: bold;
        text-align: center;
        padding: 15px;
        border-radius: 3px;
        width: 100px;
    }

    .un-selected-button {
        background: rgba(86,90,92,.5);
        color: #f8f9fa;
        border: 1px solid #f8f9fa;
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
<body onload="typeWriter()">
<div class="super_container">
<div class="home">

    <!-- Home Slider -->
    <div class="home_slider_container">
        <div class="owl-carousel owl-theme home_slider">
            <div class="slide">
                <div class="background_image" style="background-image:url({{asset('theme-styles/images/open-source-1.jpg')}})"></div>
            </div>
        </div>

        {{--<div class="home_slider_nav"><i class="fa fa-angle-right" aria-hidden="true"></i></div>--}}

    </div>
</div>

    <div class="search">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="search_container">
                        <div class="search_title text-center" id="AutoText"></div>
                        <div class="mb-2 text-center">
                            <button class="un-selected-button mt-1 text-center" onclick="selectPurpose('buy')" id="buy-purpose">Buy</button>
                            <button class="un-selected-button mt-1" onclick="selectPurpose('rent')" id="rent-purpose">Rent</button>
                        </div>
                        <div class="search_form_container">
                            <span class="search_form" id="search_form">
                                <div class="d-flex flex-lg-row flex-column align-items-start justify-content-lg-between justify-content-start">
                                    <div class="search_inputs d-flex flex-lg-row flex-column align-items-start justify-content-lg-between justify-content-start">
                                        <select onchange="getCities()" class="search_input" id="select-country">
                                            <option value="-1">Select country</option>
                                            <option value="PK">Pakistan</option>
                                            <option value="AE">United Arab Emirates</option>
                                        </select>
                                        <input placeholder="enter city name" list="cities-list" class="search_input location-resp" id="select-city"/>
                                        <datalist id="cities-list">
                                        </datalist>
                                            {{--<option value="-1">Select city</option>--}}
                                        <input type="text" placeholder="Enter location" class="search_input location-resp" id='selected-location'>
                                    </div>
                                    <button class="search_button" onclick="filterProperties()">Search</button>
                                </div>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{--properties list--}}
<div class="featured" id="properties">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section_title_container text-center">
                    <div class="section_subtitle">the best deals</div>
                    <div class="section_title"><h1>Properties Listing</h1></div>
                    @if(count($properties) == 0)
                        <div class="section_subtitle mt-4">Whoops! No Properties Found!</div>
                    @endif
                </div>
            </div>
        </div>
        <div class="row featured_row">

            <!-- Featured Item -->
            @foreach ($properties as $property)
                <div class="col-lg-4">
                    <div class="listing">
                        <div class="listing_image" style="cursor: pointer" onclick="viewDetails({{$property->id}})">
                            <div class="listing_image_container">
                                @if(!empty($property->main_image))
                                    <img style="width: 450px !important; height: 400px !important;"
                                         src="http://gofindee.com/api/property/image/get?attachment={{$property->main_image}}">
                                @endif
                                @if(!empty($property->main_video))
                                        <video style="width: 450px !important; height: 400px !important;" controls>
                                            <source src="http://gofindee.com/api/property/image/get?attachment={{$property->main_video}}" type="video/mp4">
                                            <source src="http://gofindee.com/api/property/image/get?attachment={{$property->main_video}}" type="video/ogg">
                                            Your browser does not support the video tag.
                                        </video>
                                @endif
                                @if(empty($property->main_image) && empty($property->main_video))
                                    <img style="width: 450px !important; height: 400px !important;" src="{{asset('img/default-image.jpg')}}">
                                @endif
                            </div>
                            <div class="tags d-flex flex-row align-items-start justify-content-start flex-wrap">
                                <div class="tag tag_house" style="color: white"><a>{{$property->property_type}}</a></div>
                                @if($property->purpose == 'forSale')
                                    <div class="tag tag_sale" style="color: white"><a>for sale</a></div>
                                @endif
                                @if($property->purpose == 'forRent')
                                    <div class="tag tag_rent" style="color: white"><a>for rent</a>
                                    </div>
                                @endif
                            </div>
                            <div class="tag_price listing_price">{{$property->price_currency}} {{$property->price}}
                                @if($property->price_unit != ".00")
                                    {{$property->price_unit}}
                                @endif
                            </div>
                        </div>
                        <div class="listing_content">
                            <div style="cursor: pointer" onclick="viewDetails({{$property->id}})" class="prop_location listing_location d-flex flex-row align-items-start justify-content-start">
                                <h6><b>{{$property->title}}</b></h6>
                            </div>
                            <div  style="cursor: pointer;" onclick="viewDetails({{$property->id}})" class="prop_location listing_location d-flex flex-row align-items-start justify-content-start">
                                <img src="{{asset('theme-styles/images/icon_1.png')}}" alt="location">
                                <a>{{$property->location}}, {{$property->city}}, {{$property->country}}</a>
                            </div>
                            <div class="listing_info" style="cursor: pointer" onclick="viewDetails({{$property->id}})">
                                <ul class="d-flex flex-row align-items-center justify-content-start flex-wrap">
                                    <li style="cursor: pointer" title="{{$property->unit}}"
                                        class="property_area d-flex flex-row align-items-center justify-content-start">
                                        <img src="{{asset('theme-styles/images/icon_2.png')}}" alt="">
                                        <span>{{$property->land_area}}</span>
                                    </li>
                                    @if(!empty($property->home_features))
                                        @if(($property->home_features->bedrooms) != -1)
                                            <li title="bedrooms"
                                                class="d-flex flex-row align-items-center justify-content-start">
                                                <img src="{{asset("img/bed.svg")}}"
                                                     style="width: 25px !important; height: 25px !important;">
                                                <span>{{$property->home_features->bedrooms}}</span>
                                            </li>
                                        @endif
                                        @if(($property->home_features->bathrooms) != -1)
                                                <li title="bathrooms"
                                                    class="d-flex flex-row align-items-center justify-content-start">
                                                    <img src="{{asset("theme-styles/images/icon_3.png")}}">
                                                    <span>{{$property->home_features->bathrooms}}</span>
                                                </li>
                                         @endif
                                         @if(($property->home_features->home_parking_space) != -1)
                                                <li title="parking space"
                                                    class="d-flex flex-row align-items-center justify-content-start">
                                                    <img src="{{asset("img/parking.svg")}}"
                                                         style="width: 25px !important; height: 25px !important;">
                                                    <span>{{$property->home_features->home_parking_space}}</span>
                                                </li>
                                         @endif
                                    @endif
                                    @if(!empty($property->commercial_features))
                                        @if(($property->commercial_features->rooms) != -1)
                                            <li title="rooms"
                                                class="d-flex flex-row align-items-center justify-content-start">
                                                <img src="{{asset("img/bed.svg")}}"
                                                     style="width: 25px !important; height: 25px !important;">
                                                <span>{{$property->commercial_features->rooms}}</span>
                                            </li>
                                        @endif
                                        @if(($property->commercial_features->floors) != -1)
                                                <li title="rooms"
                                                    class="d-flex flex-row align-items-center justify-content-start">
                                                    <img src="{{asset("theme-styles/images/icon_5.png")}}">
                                                    <span>{{$property->commercial_features->floors}}</span>
                                                </li>
                                        @endif
                                        @if(($property->commercial_features->commercial_parking_space) != -1)
                                                <li title="parking space"
                                                    class="d-flex flex-row align-items-center justify-content-start">
                                                    <img src="{{asset("img/parking.svg")}}"
                                                         style="width: 25px !important; height: 25px !important;">
                                                    <span>{{$property->commercial_features->commercial_parking_space}}</span>
                                                </li>
                                        @endif
                                    @endif
                                    @if(!empty($property->plot_features))
                                        <li title="parking space"
                                            class="d-flex flex-row align-items-center justify-content-start">
                                            <div style="width: 25px !important; height: 25px !important;">
                                            </div>
                                        </li>
                                    @endif
                                </ul>
                                <ul class="d-flex flex-row align-items-center justify-content-start flex-wrap">
                                    <li  style="font-size: 10px" class="d-flex flex-row align-items-center justify-content-start">
                                        Added on {{$property->date_posting}}
                                    </li>
                                </ul>
                            </div>
                            <div class="listing_info">
                                <ul class="d-flex flex-row align-items-center justify-content-start flex-wrap">
                                    <li class="d-flex flex-row align-items-center justify-content-start" style="margin-right: 3px !important;">
                                        <button class="success-primary-btn-custom" data-toggle="modal" data-target="#call-modal" onclick="getCallInfo({{$property->id}})">Call</button>
                                    </li>
                                    <li class="d-flex flex-row align-items-center justify-content-start"  style="margin-right: 3px !important;">
                                        <button class="success-primary-btn-custom" data-toggle="modal" data-target="#email-modal" onclick="setPropertyInfo({{$property->id_property}}, {{$property->id}})">Email</button>
                                    </li>
                                    <li class="d-flex flex-row align-items-center justify-content-start" >
                                        <button class="success-primary-btn-custom" data-toggle="modal" data-target="#message-modal" onclick="messageView({{$property->id}})">Message</button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
        </div>
    </div>
</div>
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
<div class="modal fade" id="call-modal">
    <div class="modal-dialog modal-sm">
        <div class="modal-content mb-5" style="background-color: #f3f7fb !important; color: black">
            <div class="modal-header">
                <h5 class="modal-title text-center" style="background-color: #f3f7fb !important; color: black">Contact Owner</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="row ml-3 mt-2">
                <div class="col-3">Name</div> <div class="col-4" id="contact-name"></div>
            </div>
            <div class="row ml-3 mb-5 mt-4">
                <div class="col-3">Tel</div> <div class="col-4" >
                    <a id="contact-mobile" href="tel:"></a>
                </div>
            </div>
    </div>
</div>
</div>

<div class="modal fade" id="message-modal">
    <div class="modal-dialog modal-sm">
        <div class="modal-content mb-5" style="background-color: #f3f7fb !important; color: black">
            <div class="modal-header">
                <h5 class="modal-title text-center" style="background-color: #f3f7fb !important; color: black">Contact Owner</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="row ml-3 mt-2">
                <div class="col-8"><a target="_blank" id="send-whatsapp" href="#"><img src="{{asset('img/whatsapp.svg')}}" style="width: 20px; height: 20px"><span class="ml-3">WhatsApp</span></a> </div>
            </div>
            <div class="row ml-3 mb-5 mt-4">
                <div class="col-8"><a target="_blank" id="send-sms" href="#"><img src="{{asset('img/sms.svg')}}" style="width: 20px; height: 20px"><span class="ml-3">SMS</span></a> </div>
            </div>
    </div>
</div>
</div>

    <div class="modal fade" id="email-modal">
        <div class="modal-dialog">
            <div class="modal-content" style="background-color: #f3f7fb !important; color: black">
                <div class="modal-header">
                    <h5 class="modal-title" style="background-color: #f3f7fb !important; color: black">Send Email</h5>
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
    let UAECitiess = ["Umm al Qaywayn","Ras al-Khaimah","Muzayri\u2018","Murba\u1e29","Khawr Fakk\u0101n","Dubai","Dibba Al-Fujairah","Dibba Al-Hisn","Sharjah","Ar Ruways","Al Fujayrah","Al Ain","Ajman","Adh Dhayd","Abu Dhabi"];
    let PAKCitiess = ["Chuhar Jamali","Timargara","Rawala Kot","Pir Jo Goth","Khairpur Mir\u2019s","Adilpur","Ziarat","Zhob","Zaida","Zahir Pir","Zafarwal","Yazman","Wazirabad","Chak Five Hundred Seventy-five","Warah","Wana","Vihari","Utmanzai","Uthal","Usta Muhammad","Umarkot","Ubauro","Turbat","Topi","Toba Tek Singh","Thul","Thatta","Tharu Shah","Taunsa","Tank","Tangwani","Tangi","Tando Muhammad Khan","Tando Mitha Khan","Tando Jam","Tando Bago","Tando Allahyar","Tando Adam","Tandlianwala","Talhar","Talamba","Talagang","Thal","Swabi","Surkhpur","Surab","Sukkur","Sukheke Mandi","Sohbatpur","Sodhri","Sobhodero","Skardu","S\u012bta Road","Sinjhoro","Sillanwali","Sibi","Sialkot","Shujaabad","Shorkot","Shinpokh","Shikarpur","Shekhupura","Sharqpur Sharif","Shakargarh","Shahr Sultan","Shahpur Chakar","Shahpur","Shahkot","Shahdadpur","Shahdad Kot","Shabqadar","Sehwan","Sargodha","Sarai Sidhu","Sarai Naurang","Sarai Alamgir","Sann","Sanjwal","Sangla Hill","Sanghar","Sambrial","Samaro","Sakrand","Saidu Sharif","Sahiwal","Sahiwal","Saddiqabad","Rustam","Rojhan","Rohri","Renala Khurd","Rawalpindi","Ratodero","Rasulnagar","Ranipur","Rajo Khanani","Rajanpur","Raja Jang","Raiwind","Rahim Yar Khan","Goth Radhan","Chenab Nagar","Quetta","Qila Saifullah","Qila Abdullah","Kambar","Qadirpur Ran","Pithoro","Pishin","Pir Mahal","Pindi Gheb","Pindi Bhattian","Pind Dadan Khan","Goth Phulji","Phalia","Peshawar","Pattoki","Pasrur","Pasni","Parachinar","Pano Aqil","Panjgur","Pakpattan","Paharpur","Pad Idan","Pabbi","Ormara","Okara","Nushki","Nowshera","New Mirpur","Nawabshah","Naushahro Firoz","Naushahra Virkan","Naudero","Nasirabad","Narowal","Narang Mandi","Naukot","Nankana Sahib","Nabisar","Muzaffargarh","Muzaffar\u0101b\u0101d","Mustaf\u0101b\u0101d","Musa Khel Bazar","Murree","Muridke","Multan","Moro","Mithi","Mitha Tiwana","Mirwah Gorchani","Mirpur Sakro","Mirpur Mathelo","Mirpur Khas","Mirpur Bhtoro","Miro Khan","Miran Shah","Mingora","Minchianabad","Mianwali","Mian Channun","Mehrabpur","Mehar","Matli","Matiari","Mastung","Mardan","Mansehra","Mankera","Mangla","Mandi Bahauddin","Mananwala","Mamu Kanjan","Malir Cantonment","Malakwal","Malakand","Mailsi","Madeji","Mach","Loralai","Lodhran","Liliani","Layyah","Larkana","Landi Kotal","Lalian","Lala Musa","Lakki","Lakhi","Lahore","Ladhewala Waraich","Lachi","Kunri","Kunjah","Kundian","Kulachi","Kot Sultan","Kot Samaba","Kotri","Kot Rajkour","Kot Radha Kishan","Kot Mumin","Kot Malik Barkhurdar","Kotli Loharan","Kotli","Kot Ghulam Muhammad","Kot Diji","Kot Addu","Kohlu","Kohat","Khuzdar","Khush\u0101b","Khurrianwala","Khewra","Kharian","Kharan","Karak","Khanpur","Khanpur Mahar","Khangarh","Khangah Dogran","Khanewal","Khandowa","Khalabat","Khairpur Nathan Shah","Khairpur Tamewah","Khairpur","Khadro","Keti Bandar","Keshupur","Kasur","Kashmor","Karor","Kario Ghanwar","Karaundi","Karachi","Kanganpur","Kandiaro","Kandiari","Kandhkot","Kamra","Kamoke","Chak One Hundred Twenty Nine Left","Kamar Mushani","Kamalia","Kalur Kot","Kallar Kahar","Kaleke Mandi","Kalat","Kalaswala","Kalabagh","Kahuta","Kahror Pakka","Kahna Nau","Kadhan","Kabirwala","Johi","Jiwani","Chak Jhumra","Jhol","Jhelum","Jhawarian","Dera Allahyar","Jhang Sadr","Jauharabad","Jatoi Shimali","Jati","Jaranwala","Jandiala Sher Khan","Jand","Jamshoro","Jampur","Jalalpur Pirwala","Jalalpur Jattan","Jahanian Shah","Jacobabad","Islamkot","Islamabad","Hyderabad","Hujra Shah Muqim","Hingorja","Hazro City","Havelian","Haveli Lakha","Hasilpur","Chak Thirty-one -Eleven Left","Harunabad","Harnoli","Harnai","Haripur","Hangu","Hala","Hafizabad","Hadali","Gwadar","Gujrat","Gujranwala","Gujar Khan","Gojra","Gilgit","Ghotki","Ghauspur","Gharo","Garh Maharaja","Garhiyasin","Garhi Khairo","Goth Garelo","Gandava","Gambat","Gakuch","Gadani","Fort Abbas","Fazilpur","Chak Two Hundred Forty-nine Thal Development Authority","Faruka","Faqirwali","Faisalabad","Eminabad","Dunyapur","Dunga Bunga","Dullewala","Duki","Dokri","Doaba","Upper Dir","Diplo","Dipalpur","Dinan Bashnoian Wala","Dinga","Dijkot","Digri","Dhoro Naro","Dhaunkal","Dhanot","Dera Ismail Khan","Dera Ghazi Khan","Dera Bugti","Daur","Daultala","Daulatpur","Daud Khel","Daska Kalan","Darya Khan Marri","Darya Khan","Daromehar","Dalbandin","Dajal","Daira Din Panah","Daggar","Dadu","Dadhar","Chunian","Chuchar-kana Mandi","Chhor","Choa Saidan Shah","Chitral","Chishtian","Chiniot","Chilas","Chichawatni","Cherat Cantonement","Chawinda","Charsadda","Chamber","Chaman","Chakwal","Chak Azam Sahu","Chak","B\u016brew\u0101la","Bulri","Bozdar Wada","Bhopalwala","Bhit Shah","Bhiria","Bhimbar","Bhera","Bhawana","Bhan","Bhalwal","Bhakkar","Mianke Mor","Bhag","Berani","Bela","Begowala","Bat Khela","Battagram","Basirpur","Barkhan","Bannu","Bandhi","Bakhri Ahmad Khan","Bahawalpur","Bahawalnagar","Bagh","Bagarji","Baffa","Badin","Baddomalhi","Awaran","Attock City","Arifwala","Aman Garh","Alizai","Alipur","Aliabad","Akora","Ahmadpur East","Abbottabad","Jhang City","Bahawalnagar","Gulishah Kach","Nowshera Cantonment","Alik Ghund","Khadan Khak","Ahmadpur Sial","New B\u0101d\u0101h","Dandot RS","Dera Murad Jamali","J\u0101m S\u0101hib","Chowki Jamali","Setharja Old","Risalpur Cantonment","Noorabad","Alpurai","Shingli Bala","Malakwal City","Mehmand Chak","Basti Dosa","Moza Shahwala","Eidgah","Dasu","Barishal","Athmuqam","Nazir Town","Amirabad","Kakad Wari Dir Upper","Hattian Bala","Ashanagro Koto"];
    //setFilters();
    function setFilters(){
        if(window.location.href.includes('properties/get/')){
            // let secondHalf = window.location.href.split('properties/get/')[1];
            // purpose = secondHalf.split('/')[0];
            // countrySelected = secondHalf.split('/')[1];
            // city = secondHalf.split('/')[2];
            // selectedlocation = secondHalf.split('/')[3];
            // if(purpose === 'forSale'){
            //     document.getElementById('buy-purpose').classList.add("selected-button");
            //     document.getElementById('rent-purpose').classList.add("un-selected-button");
            //     document.getElementById('buy-purpose').classList.remove("un-selected-button");
            // }
            // if(purpose === 'forRent'){
            //     document.getElementById('rent-purpose').classList.add("selected-button");
            //     document.getElementById('buy-purpose').classList.add("un-selected-button");
            //     document.getElementById('rent-purpose').classList.remove("un-selected-button");
            // }
            // if(countrySelected !== 'all'){
            //     document.getElementById('select-country').value = countrySelected;
            //     let res = [];
            //     if(countrySelected === 'PK'){
            //         res = PAKCitiess;
            //     }else if(countrySelected === 'AE'){
            //         res = UAECitiess;
            //     }
            //     for(let i=0; i<res.length; i++){
            //         let child =  document.createElement("option");
            //         // child.innerHTML = res[i];
            //         child.value = res[i];
            //         document.getElementById('cities-list').appendChild(child);
            //     }
            //     if(city !== 'all'){
            //         document.getElementById('select-city').value = city
            //     }

                // $.ajax({
                //     type: "POST",  //type of method
                //     url: "http://gofindee.com/api/cities/get",  //your page
                //     data: {country: countrySelected},// passing the values
                //     success: function (res) {
                //         res = JSON.parse(res);
                //         document.getElementById('select-city').innerHTML = '';
                //         let child =  document.createElement("option");
                //         child.value = "-1";
                //         child.innerHTML = "Select City";
                //         document.getElementById('select-city').appendChild(child);
                //         for(let i=0; i<res.length; i++){
                //             let child =  document.createElement("option");
                //             child.innerHTML = res[i];
                //             child.value = res[i];
                //             document.getElementById('select-city').appendChild(child);
                //         }
                //         if(city !== 'all'){
                //             document.getElementById('select-city').value = city
                //         }
                //     }
                // });

            // }
            // if(selectedlocation !== 'all'){
            //     document.getElementById('selected-location').value = selectedlocation;
            // }
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
    let txt = 'We find it for you.';
    let speed = 50;

    document.getElementById("AutoText").innerHTML = '';
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
            url: "http://gofindee.com/api/email/send",  //your page
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
        if(country === -1 || country === '-1' || country === '' || country === undefined || country === 'undefined'){
            countrySelected = 'all';
        }else{
            countrySelected = country;
        }
        document.getElementById('cities-list').innerHTML = '';
        let res = [];
        if(country === 'PK'){
            res = PAKCitiess;
        }else if(country === 'AE'){
            res = UAECitiess;
        }
        for(let i=0; i<res.length; i++){
            let child =  document.createElement("option");
            // child.innerHTML = res[i];
            child.value = res[i];
            document.getElementById('cities-list').appendChild(child);
        }

        // $.ajax({
        //     type: "POST",  //type of method
        //     url: "http://gofindee.com/api/cities/get",  //your page
        //     data: {country: country},// passing the values
        //     success: function (res) {
        //         res = JSON.parse(res);
        //         document.getElementById('select-city').innerHTML = '';
        //         let child =  document.createElement("option");
        //         child.value = "-1";
        //         child.innerHTML = "Select City";
        //         document.getElementById('select-city').appendChild(child);
        //         for(let i=0; i<res.length; i++){
        //             let child =  document.createElement("option");
        //             child.innerHTML = res[i];
        //             child.value = res[i];
        //             document.getElementById('select-city').appendChild(child);
        //         }
        //     }
        // });
    }

    function getCallInfo(propertyId) {
        $.ajax({
            type: "GET",  //type of method
            url: `http://gofindee.com/api/property/${propertyId}/contact/get`,  //your page
            success: function (res) {
                res = JSON.parse(res);
                document.getElementById('contact-name').innerHTML = res.name;
                document.getElementById('contact-mobile').innerHTML = res.mobile;
                document.getElementById('contact-mobile').href = "tel:" + res.mobile;
            }
        });
    }

    function messageView(propertyId) {
        $.ajax({
            type: "GET",  //type of method
            url: `http://gofindee.com/api/property/${propertyId}/contact/get`,  //your page
            success: function (res) {
                res = JSON.parse(res);
                document.getElementById('send-whatsapp').href = "https://api.whatsapp.com/send?phone=" + res.mobile;
                document.getElementById('send-sms').href = "sms:" + res.mobile;
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


        window.location.href = `/properties/get/${purpose}/${countrySelected}/${city}/${selectedlocation}`
    }

    function viewDetails(propertyId) {
        window.location.href = `http://gofindee.com/property/${propertyId}/detail`
    }
</script>
</html>
@endsection
