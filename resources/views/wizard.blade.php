@extends('top-nav')
@section('content')
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
    <script  type="text/javascript" src="{{ \Illuminate\Support\Facades\URL::asset('theme-styles/js/jquery-3.3.1.min.js')}}"></script>
    <script  type="text/javascript" src="{{ \Illuminate\Support\Facades\URL::asset('theme-styles/styles/bootstrap-4.1.2/popper.js') }}"></script>
    <script  type="text/javascript" src="{{ \Illuminate\Support\Facades\URL::asset('theme-styles/styles/bootstrap-4.1.2/bootstrap.min.js') }}"></script>

    {{--<script  type="text/javascript" src="{{ \Illuminate\Support\Facades\URL::asset('js/jquery.js') }}"></script>--}}
{{--    <script  type="text/javascript" src="{{ \Illuminate\Support\Facades\URL::asset('js/jquery.main.js') }}" ></script>--}}
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="colorlib.com">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add New Property</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{ asset('wizard/fonts/material-icon/css/material-design-iconic-font.min.css') }}">

    <!-- Main css -->
    <link href="{{ \Illuminate\Support\Facades\URL::asset('wizard/css/style.css') }}" rel="stylesheet" type="text/css">
    {{--js--}}

</head>

<body onload="islogin();">
<div style="height: 120px"></div>
<div class="main" style="padding-top: 20px">
    <div class="container-custom" style="width: 96% !important; padding: 5px !important;">
        <h2>Add a New Property </h2>
        <h3 class="mb-2 text-center mt-2 font-weight-bold">Step by Step Guide </h3>
        <div id="signup-form" class="signup-form">
            <h3>
                <span class="title_text">Property Type</span>
            </h3>
            <fieldset>
                <div style="border-bottom: 1px solid #ebebeb;">
                    <div class="form-group" style="display: block">
                            <div>
                            <b style="font-size: medium;">Purpose</b>
                            <div class="row mt-3">
                                <button class="selected-button" onclick="selectPurpose('buy')" id="buy-purpose" value="forSale">For Sale</button>
                                <button class="un-selected-button ml-2" onclick="selectPurpose('rent')" id="rent-purpose" value="forRent">Rent</button>
                            </div>
                            </div>
                    </div>
                    <div class="form-group" style="display: block">
                        <div>
                            <b style="font-size: medium">Property Type</b><br>
                            <div class="row mt-3">
                                <button class="selected-button" onclick="selectPropertyType('home')" id="home-type">Home</button>
                                <button class="un-selected-button ml-2" onclick="selectPropertyType('plots')" id="plots-type">Plots</button>
                                <button class="un-selected-button ml-2" onclick="selectPropertyType('commercial')" id="commercial-type">Commercial</button>
                            </div>
                        </div>
                    </div>
                    <div class="form-group" id="propertyTypeHome" style="display: block">
                        <div>
                            <ul>
                                <li>
                                    <button style="padding: 1px!important;font-size: small" class="selected-button" onclick="propertyTypeHome('house')" id="type-house">House</button>
                                </li>
                                <li class="mt-1">
                                    <button style="padding: 1px!important;font-size: small" class="un-selected-button" onclick="propertyTypeHome('flat')" id="type-flat">Flat</button>
                                </li>
                                <li class="mt-1">
                                    <button style="padding: 1px!important;font-size: small" class="un-selected-button" onclick="propertyTypeHome('upper-portion')" id="type-upper-portion">Upper Portion</button>
                                </li>
                                <li class="mt-1">
                                    <button style="padding: 1px!important;font-size: small" class="un-selected-button" onclick="propertyTypeHome('lower-portion')" id="type-lower-portion">Lower portion</button>
                                </li>
                                <li class="mt-1">
                                    <button style="padding: 1px!important;font-size: small" class="un-selected-button" onclick="propertyTypeHome('farm-house')" id="type-farm-house">Farm House</button>
                                </li>
                                <li class="mt-1">
                                    <button style="padding: 1px!important;font-size: small" class="un-selected-button" onclick="propertyTypeHome('room')" id="type-room">Room</button>
                                </li>
                                <li class="mt-1">
                                    <button style="padding: 1px!important;font-size: small" class="un-selected-button" onclick="propertyTypeHome('pent-house')" id="type-pent-house" value="forSale">Pent House</button>
                                </li>
                                <li class="mt-1">
                                    <button style="padding: 1px!important;font-size: small" class="un-selected-button" onclick="propertyTypeHome('bed-space')" id="type-bed-space" value="forSale">Bed Space</button>
                                </li>
                            </ul>
                            {{--<div class="row  ml-0">--}}
                                {{--<button style="padding: 1px!important;font-size: small" class="selected-button" onclick="propertyTypeHome('house')" id="type-house">House</button>--}}
                                {{--<button style="padding: 1px!important;font-size: small" class="un-selected-button ml-2" onclick="propertyTypeHome('flat')" id="type-flat">Flat</button>--}}
                                {{--<button style="padding: 1px!important;font-size: small" class="un-selected-button ml-2" onclick="propertyTypeHome('upper-portion')" id="type-upper-portion">Upper Portion</button>--}}
                            {{--</div>--}}
                            {{--<div class="row mt-1  ml-0">--}}
                                {{--<button style="padding: 1px!important;font-size: small" class="un-selected-button" onclick="propertyTypeHome('lower-portion')" id="type-lower-portion">Lower portion</button>--}}
                                {{--<button style="padding: 1px!important;font-size: small" class="un-selected-button ml-2" onclick="propertyTypeHome('farm-house')" id="type-farm-house">Farm House</button>--}}
                                {{--<button style="padding: 1px!important;font-size: small" class="un-selected-button ml-2" onclick="propertyTypeHome('room')" id="type-room">Room</button>--}}
                            {{--</div>--}}
                            {{--<div class="row mt-1  ml-0">--}}
                                {{--<button style="padding: 1px!important;font-size: small" class="un-selected-button" onclick="propertyTypeHome('pent-house')" id="type-pent-house" value="forSale">Pent House</button>--}}
                            {{--</div>--}}
                        </div>
                    </div>
                    <div class="form-group" id="propertyTypePlot" style="display: none">
                        <div>
                            <ul>
                                <li>
                                    <button style="padding: 1px!important;font-size: small" class="selected-button" onclick="propertyTypePlot('residential-plot')" id="type-residential-plot">Residential Plot</button>
                                </li>
                                <li class="mt-1">
                                    <button style="padding: 1px!important;font-size: small" class="un-selected-button" onclick="propertyTypePlot('commercial-plot')" id="type-commercial-plot">Commercial Plot</button>
                                </li>
                                <li class="mt-1">
                                    <button style="padding: 1px!important;font-size: small" class="un-selected-button" onclick="propertyTypePlot('agricultural-land')" id="type-agricultural-land">Agricultural Land</button>
                                </li>
                                <li class="mt-1">
                                    <button style="padding: 1px!important;font-size: small" class="un-selected-button" onclick="propertyTypePlot('industrial-land')" id="type-industrial-land">Industrial Land</button>
                                </li>
                                <li class="mt-1">
                                    <button style="padding: 1px!important;font-size: small" class="un-selected-button" onclick="propertyTypePlot('plot-file')" id="type-plot-file">Plot File</button>
                                </li>
                                <li class="mt-1">
                                    <button style="padding: 1px!important;font-size: small" class="un-selected-button" onclick="propertyTypePlot('plot-farm')" id="type-plot-farm">Plot Farm</button>
                                </li>
                            </ul>
                            {{--<div class="row  ml-0">--}}
                                {{--<button style="padding: 1px!important;font-size: small" class="selected-button" onclick="propertyTypePlot('residential-plot')" id="type-residential-plot">Residential Plot</button>--}}
                                {{--<button style="padding: 1px!important;font-size: small" class="un-selected-button ml-2" onclick="propertyTypePlot('commercial-plot')" id="type-commercial-plot">Commercial Plot</button>--}}
                                {{--<button style="padding: 1px!important;font-size: small" class="un-selected-button ml-2" onclick="propertyTypePlot('agricultural-land')" id="type-agricultural-land">Agricultural Land</button>--}}
                            {{--</div>--}}
                            {{--<div class="row mt-1  ml-0">--}}
                                {{--<button style="padding: 1px!important;font-size: small" class="un-selected-button" onclick="propertyTypePlot('industrial-land')" id="type-industrial-land">Industrial Land</button>--}}
                                {{--<button style="padding: 1px!important;font-size: small" class="un-selected-button ml-2" onclick="propertyTypePlot('plot-file')" id="type-plot-file">Plot File</button>--}}
                                {{--<button style="padding: 1px!important;font-size: small" class="un-selected-button ml-2" onclick="propertyTypePlot('plot-farm')" id="type-plot-farm">Plot Farm</button>--}}
                            {{--</div>--}}
                        </div>
                    </div>
                    <div class="form-group" id="propertyTypeCommercial" style="display: none">
                        <div>
                            <ul>
                                <li>
                                    <button style="padding: 1px!important;font-size: small" class="selected-button" onclick="propertyTypeCommercial('office')" id="type-office">Office</button>
                                </li>
                                <li class="mt-1">
                                    <button style="padding: 1px!important;font-size: small" class="un-selected-button" onclick="propertyTypeCommercial('shop')" id="type-shop">Shop</button>
                                </li>
                                <li class="mt-1">
                                    <button style="padding: 1px!important;font-size: small" class="un-selected-button" onclick="propertyTypeCommercial('warehouse')" id="type-warehouse">Warehouse</button>
                                </li>
                                <li class="mt-1">
                                    <button style="padding: 1px!important;font-size: small" class="un-selected-button" onclick="propertyTypeCommercial('factory')" id="type-factory">Factory</button>
                                </li>
                                <li class="mt-1">
                                    <button style="padding: 1px!important;font-size: small" class="un-selected-button" onclick="propertyTypeCommercial('building')" id="type-building">Building</button>
                                </li>
                                <li class="mt-1">
                                    <button style="padding: 1px!important;font-size: small" class="un-selected-button" onclick="propertyTypeCommercial('others')" id="type-others">Others</button>
                                </li>
                            </ul>
                            {{--<div class="row  ml-0">--}}
                                {{--<button style="padding: 1px!important;font-size: small" class="selected-button" onclick="propertyTypeCommercial('office')" id="type-office">Office</button>--}}
                                {{--<button style="padding: 1px!important;font-size: small" class="un-selected-button ml-2" onclick="propertyTypeCommercial('shop')" id="type-shop">Shop</button>--}}
                                {{--<button style="padding: 1px!important;font-size: small" class="un-selected-button ml-2" onclick="propertyTypeCommercial('warehouse')" id="type-warehouse">Warehouse</button>--}}
                            {{--</div>--}}
                            {{--<div class="row mt-1  ml-0">--}}
                                {{--<button style="padding: 1px!important;font-size: small" class="un-selected-button" onclick="propertyTypeCommercial('factory')" id="type-factory">Factory</button>--}}
                                {{--<button style="padding: 1px!important;font-size: small" class="un-selected-button ml-2" onclick="propertyTypeCommercial('building')" id="type-building">Building</button>--}}
                                {{--<button style="padding: 1px!important;font-size: small" class="un-selected-button ml-2" onclick="propertyTypeCommercial('others')" id="type-others">Others</button>--}}
                            {{--</div>--}}
                        </div>
                    </div>
                </div>
                <div class="fieldset-footer">
                    <span>Step 1 of 6</span>
                </div>
            </fieldset>
            <h3>
                <span class="title_text">Property Location</span>
            </h3>
            <fieldset>
                <div class="form-group" style="margin-bottom: 3px;display: block" >
                    <label>Country :</label>
                    <select onchange="getCities()" id="select-country" class="form-control col-md-4" name="city">
                        <option value="-1">Select country</option>
                        <option value="PK">Pakistan</option>
                        <option value="AE">United Arab Emirates</option>
                    </select>
                </div>
                <div class="text-danger mb-2" style="display: none" id="country-validate">
                    <li>Country is required</li>
                </div>
                <div class="form-group mt-4" style="margin-bottom: 3px; display: block;">
                    <label>City :</label>
                    {{--<select onchange="selectCity()" id="select-city" type="text" class="form-control col-md-4" name="city">--}}
                        {{--<option value="-1">Select city</option>--}}
                    {{--</select>--}}
                    <input list="cities-list" onchange="selectCity()" class="form-control col-md-4" id="select-city" name="city" type="text">
                    <datalist id="cities-list">
                    </datalist>
                </div>
                <div class="text-danger mb-2" style="display: none" id="city-validate">
                    <li>City is required</li>
                </div>
                <div class="form-group mt-4" style="margin-bottom: 3px; display: block">
                    <label>Location :</label>
                    <input onkeypress="selectLocation()" class="form-control col-md-4" id="select-location" name="location" type="text">
                </div>
                <div class="text-danger mb-2" style="display: none" id="location-validate">
                    <li>Location is required</li>
                </div>
                <div class="fieldset-footer">
                    <span>Step 2 of 6</span>
                </div>
            </fieldset>
            <h3 id="property-detail-heading">
                <span class="title_text">Property Details</span>
            </h3>
            <fieldset>

                <div class="form-group" style="margin-bottom: 3px; display: block" >
                    <label>Property Title :</label>
                    <input class="form-control col-md-4" id="property-title" name="propertyTitle" type="text">
                </div>
                <div class="text-danger mb-2" style="display: none" id="property-title-validate">
                    <li>Property Title is required</li>
                </div>
                <div class="form-group mt-4" style="margin-bottom: 3px; display: block;">
                    <label>Description :</label>
                    <textarea class="form-control col-md-4" id="property-description" rows="2" cols="25"
                              name="description"></textarea>
                </div>
                <div class="text-danger mb-2" style="display: none" id="property-description-validate">
                    <li>Description is required</li>
                </div>
                <div  class="form-group mt-4" style="margin-bottom: 1px; display: block;">
                    <label>Price :</label>
                    <div class="d-flex">
                    <input class="form-control col-md-4" id="property-price" name="price" type="number">
                    <select type="text" class="form-control col-md-2" id="price-unit" name="priceunit">
                        <option value=".00">.00</option>
                        <option value="Thousand">K</option>
                        <option value="Lacs">Lac</option>
                        <option value="Million">Million</option>
                        <option value="Crore">Crore</option>
                        <option value="Billion">Billion</option>
                    </select>
                        <select type="text" class="form-control col-md-2" id="price-currency" name="currency">
                            <option value="PKR">PKR</option>
                            <option value="AED">AED</option>
                        </select>
                    </div>
                </div>
                 <div class="text-danger mb-2" style="display: none;" id="property-price-validate">
                    <li>Price is required</li>
                </div>

                <div class="form-group mt-4" style="margin-bottom: 3px; display: block">
                    <label>Land Area :</label>
                    <div class="d-flex">
                        <input class="form-control col-md-4" id="property-land-area" name="landArea" type="number">
                        <select type="text" class="form-control col-md-2" id="property-unit" name="unit">
                            {{--<option value="">--Please Select--</option>--}}
                            <option value="squareFeet">Square Feet</option>
                            <option value="squareyards">Square Yards</option>
                            <option value="squareMeters">Square Meters</option>
                            <option value="marla">Marla</option>
                            <option value="kanal">Kanal</option>
                        </select>
                    </div>
                </div>
                {{--<div class="form-group mt-4" style="margin-bottom: 3px; display: block">--}}
                    {{--<label class="mt-2">Unit: </label>--}}
                    {{--<select type="text" class="form-control col-md-4" id="property-unit" name="unit">--}}
                        {{--<option value="">--Please Select--</option>--}}
                        {{--<option value="squareFeet">Square Feet</option>--}}
                        {{--<option value="squareyards">Square Yards</option>--}}
                        {{--<option value="squareMeters">Square Meters</option>--}}
                        {{--<option value="marla">Marla</option>--}}
                        {{--<option value="kanal">Kanal</option>--}}
                    {{--</select>--}}
                {{--</div>--}}
                <div class="text-danger mb-2" style="display: none" id="property-land-area-validate">
                    <li>Land Area and Unit is required</li>
                </div>
                <div class="form-group" id="bedroomField" style="display: none;">
                    <label>Bedrooms :</label>
                    <select type="text" class="form-control col-md-4" id="bedrooms" name="bedrooms">
                        <option value="">--Please Select--</option>
                        <option value="1 bedroom">1</option>
                        <option value="2 bedroom">2</option>
                        <option value="3 bedroom">3</option>
                        <option value="4 bedroom">4</option>
                        <option value="5 bedroom">5</option>
                        <option value="6 bedroom">6</option>
                        <option value="7 bedroom">7</option>
                        <option value="8 bedroom">8</option>
                        <option value="9 bedroom">9</option>
                        <option value="10 bedroom">10</option>
                    </select>
                </div>
                <div class="form-group" id="bathroomField" style="display: none">
                    <label>Bathrooms :</label>
                    <select type="text" class="form-control col-md-4" id="bathroom" name="bathroom">
                        <option value="">--Please Select--</option>
                        <option value="1 bathrooms">1</option>
                        <option value="2 bathrooms">2</option>
                        <option value="3 bathrooms">3</option>
                        <option value="4 bathrooms">4</option>
                        <option value="5 bathrooms">5</option>
                        <option value="6 bathrooms">6</option>
                        <option value="7 bathrooms">7</option>
                        <option value="8 bathrooms">8</option>
                        <option value="9 bathrooms">9</option>
                        <option value="10 bathrooms">10</option>
                    </select>
                </div>
                <div class="form-group mt-4" style="margin-bottom: 3px; display: block">
                    <label>Expire after :</label>
                    <select type="text" class="form-control col-md-4" id="property-expiry-date" name="expiryDate">
                        <option value="">--Please Select--</option>
                        <option value="Less than 1 year">1 month</option>
                        <option value="1 year">3 months</option>
                        <option value="2 year">6 months</option>
                    </select>
                </div>
                <div class="text-danger mb-2" style="display: none;" id="property-expiry-after-validate">
                    <li>Required</li>
                </div>

                <div class="fieldset-footer">
                    <span>Step 3 of 3</span>
                </div>
            </fieldset>
            <h3>
                <span class="title_text">Property Features</span>
            </h3>
            <fieldset>

                <div style="display: block;" id="home-features">
                    <div class="form-group" style="margin-bottom: 3px;display: block">
                        <label>Bedrooms :</label>
                        <input class="form-control col-md-4" id="bedroom-feature" name="location" type="number">
                    </div>
                    <div class="text-danger mb-2" style="display: none;" id="bedroom-validate">
                        <li>Bedroom is required</li>
                    </div>
                    <div class="form-group mt-4" style="margin-bottom: 3px;display: block">
                        <label>Bathrooms :</label>
                        <input class="form-control col-md-4" id="bathroom-feature" name="location" type="number">
                    </div>
                    <div class="text-danger mb-2" style="display: none;" id="bathroom-validate">
                        <li>Bathroom is required</li>
                    </div>
                    <div class="form-group mt-4" style="margin-bottom: 3px;display: block">
                        <label>Kitchens :</label>
                        <input class="form-control col-md-4" id="kitchen-feature" name="location" type="number">
                    </div>
                    <div class="text-danger mb-2" style="display: none;" id="kitchen-validate">
                        <li>Kitchen is required</li>
                    </div>
                    <div class="form-group mt-4" style="margin-bottom: 3px; display: block">
                        <label>Store Rooms :</label>
                        <input class="form-control col-md-4" id="store-room-feature" name="location" type="number">
                    </div>
                    <div class="text-danger mb-2" style="display: none;" id="store-room-validate">
                        <li>Store Room is required</li>
                    </div>
                    <div class="form-group mt-4" style="margin-bottom: 3px;display: block">
                        <label>Parking Spaces :</label>
                        <input class="form-control col-md-4" id="home-parking-space-feature" name="location" type="number">
                    </div>
                    <div class="text-danger mb-2" style="display: none;" id="home-parking-space-validate">
                        <li>Parking Space is required</li>
                    </div>
                </div>

                <div style="display: none;" id="plot-features">
                    <div class="form-group" style="margin-bottom: 3px;">
                        <div class="d-flex">
                            <label style="width: 200px !important;" class="text-left">Corner :</label>
                            <input id="corner-feature" class="mt-1" name="location" type="checkbox" style="width: 50px!important;">
                        </div>
                    </div>
                    <div class="text-danger mb-2 ml-5 px-5" style="display: none;" id="corner-validate">
                        <li>Corner is equired</li>
                    </div>
                    <div class="form-group mt-4" style="margin-bottom: 3px;">
                        <div class="d-flex">
                            <label style="width: 200px !important;" class="text-left">Park Facing :</label>
                            <input id="park-facing-feature" name="location" type="checkbox"
                                   class="mt-1" style="width: 50px!important;">
                        </div>
                    </div>
                    <div class="text-danger mb-2 ml-5 px-5" style="display: none;" id="park-facing-validate">
                        <li>Park Facing is required</li>
                    </div>
                    <div class="form-group mt-4" style="margin-bottom: 3px;">
                        <div class="d-flex">
                        <label style="width: 200px !important;" class="text-left">Electricity :</label>
                        <input id="electricity-feature" name="location" class="mt-1" type="checkbox" style="width: 50px!important;">
                        </div>
                    </div>
                    <div class="text-danger mb-2 ml-5 px-5" style="display: none;" id="electricity-validate">
                        <li>Electricity is required</li>
                    </div>
                    <div class="form-group mt-4" style="margin-bottom: 3px;">
                        <div class="d-flex">
                        <label style="width: 200px !important;" class="text-left">Water Supply :</label>
                        <input id="water-supply-feature" class="mt-1" name="checkbox" type="checkbox" style="width: 50px!important;">
                        </div>
                    </div>
                    <div class="text-danger mb-2 ml-5 px-5" style="display: none;" id="water-supply-validate">
                        <li>Water Supply is required</li>
                    </div>
                    <div class="form-group mt-4" style="margin-bottom: 3px;">
                        <div class="d-flex">
                        <label style="width: 200px !important;" class="text-left">Sui Gas :</label>
                        <input class="mt-1" id="sui-gas-feature" name="location" type="checkbox" style="width: 50px!important;">
                        </div>
                    </div>
                    <div class="text-danger mb-2 ml-5 px-5" style="display: none;" id="sui-gas-validate">
                        <li>Sui Gas is required</li>
                    </div>
                </div>

                <div style="display: none;" id="commercial-features">
                    <div class="form-group" style="margin-bottom: 3px;display: block">
                        <label>Built in Year :</label>
                        <input class="form-control col-md-4" id="builtin-year-feature" name="location" type="number">
                    </div>
                    <div class="text-danger mb-2" style="display: none;" id="builtin-year-validate">
                        <li>Builtin Year is required</li>
                    </div>
                    <div class="form-group mt-4" style="margin-bottom: 3px; display: block">
                        <label>Rooms :</label>
                        <input class="form-control col-md-4" id="room-feature" name="location" type="number">
                    </div>
                    <div class="text-danger mb-2" style="display: none;" id="room-validate">
                        <li>Room is required</li>
                    </div>
                    <div class="form-group mt-4" style="margin-bottom: 3px; display: block">
                        <label>Floors :</label>
                        <input class="form-control col-md-4" id="floor-feature" name="location" type="number">
                    </div>
                    <div class="text-danger mb-2" style="display: none;" id="floor-validate">
                        <li>Floor is required</li>
                    </div>
                    <div class="form-group mt-4" style="margin-bottom: 3px; display: block">
                        <label>Elevators :</label>
                        <input class="form-control col-md-4" id="elevator-feature" name="location" type="number">
                    </div>
                    <div class="text-danger mb-2" style="display: none;" id="elevator-validate">
                        <li>Elevator is required</li>
                    </div>
                    <div class="form-group mt-4" style="margin-bottom: 3px;display: block">
                        <label>Parking Spaces :</label>
                        <input class="form-control col-md-4" id="commercial-parking-space-feature" name="location" type="number">
                    </div>
                    <div class="text-danger mb-2" style="display: none;" id="commercial-parking-space-validate">
                        <li>Parking Space is required</li>
                    </div>
                </div>

                <div class="fieldset-footer">
                    <span>Step 4 of 6</span>
                </div>
            </fieldset>
            <h3>
                <span class="title_text">Property Files</span>
            </h3>
            <fieldset>
                <ul>
                    <li><b>Instructions</b></li>
                    <li class="mt-2">&rarr;  For multiple selection : please hold CTRL and select multiple files from selection window</li>
                    <li>&rarr;  You can also select videos from same selection window</li>
                    <li>&rarr;  First selected image is your main property image</li>
                </ul>
                <div class="form-group mt-2"><b>Select files to upload :</b><br>
                    <input multiple class="" type="file" name="fileToUpload" id="property-file" style="border: 0px solid #ebebeb;">
                </div>

                <div class="fieldset-footer">
                    <span>Step 5 of 6</span>
                </div>
            </fieldset>
            <h3>
                <span class="title_text">Contact Details</span>
            </h3>
            <fieldset>

                <div class="form-group" style="margin-bottom: 3px;display: block">
                    <label>Name :</label>
                    <input class="form-control col-md-4" id="contact-name" name="location" type="text">
                </div>
                <div class="text-danger mb-2" style="display: none;" id="contact-name-validate">
                    <li>Name is required</li>
                </div>
                <div class="form-group mt-4" style="margin-bottom: 3px;display: block">
                    <label>Email :</label>
                    <input class="form-control col-md-4" id="contact-email" name="location" type="email">
                </div>
                <div class="text-danger mb-2" style="display: none;" id="contact-email-validate">
                    <li>Email is required</li>
                </div>
                <div class="text-danger mb-2" style="display: none;" id="contact-email-format-validate">
                    <li>Email format is not valid</li>
                </div>
                <div class="form-group mt-4" style="margin-bottom: 3px;display: block">
                    <label>Mobile :</label>
                    <input class="form-control col-md-4" id="contact-mobile" name="location" type="text">
                </div>
                <div class="text-danger mb-2" style="display: none;" id="contact-mobile-validate">
                    <li>Mobile is required</li>
                </div>

                <div class="fieldset-footer">
                    <span>Step 6 of 6</span>
                </div>
            </fieldset>
        </div>
    </div>

</div>
<div id="success-notification"></div>
<div id="error-notification"></div>
<!-- JS -->
{{--<script src="{{ asset('wizard/vendor/jquery/jquery.min.js') }}"></script>--}}
<script src="{{ asset('wizard/vendor/jquery-validation/dist/jquery.validate.min.js') }}"></script>
<script src="{{ asset('wizard/vendor/jquery-steps/jquery.steps.min.js') }}"></script>
<script src="{{ asset('wizard/js/main.js') }}"></script>
<script  type="text/javascript" src="{{ \Illuminate\Support\Facades\URL::asset('theme-styles/js/custom.js') }}"></script>

</body>

</html>
@endsection

<script>

    let propertyPurpose = 'forSale';
    let propertyType = 'home';
    let propertyTypeDetail = 'House';

    let country = '';
    let city = '';
    let placelocation = '';

    let propertyTitle = '';
    let propertyDescription = '';
    let propertyPrice = '';
    let propertyPriceUnit = '.00';
    let propertyPriceCurrency = 'PKR';
    let propertylandArea = '';
    let propertyUnit = '';
    let propertyExpireDate = '';

    let bedroomFeature = '-1';
    let bathroomFeature = '-1';
    let kitchenFeature = '-1';
    let storeRoomFeature = '-1';
    let homeParkingSpaceFeature = '-1';

    let cornerFeature = '';
    let parkFacingFeature = '';
    let electricityFeature = '';
    let waterSupplyFeature = '';
    let suiGasFeature = '';

    let builtinYearFeature = '-1';
    let roomFeature = '-1';
    let floorFeature = '-1';
    let elevatorFeature = '-1';
    let commercialParkingSpaceFeature = '-1';

    let files = [];

    let contactName = '';
    let contactEmail = '';
    let contactMobile = '';

    let UAECitiess = ["Umm al Qaywayn","Ras al-Khaimah","Muzayri\u2018","Murba\u1e29","Khawr Fakk\u0101n","Dubai","Dibba Al-Fujairah","Dibba Al-Hisn","Sharjah","Ar Ruways","Al Fujayrah","Al Ain","Ajman","Adh Dhayd","Abu Dhabi"];
    let PAKCitiess = ["Chuhar Jamali","Timargara","Rawala Kot","Pir Jo Goth","Khairpur Mir\u2019s","Adilpur","Ziarat","Zhob","Zaida","Zahir Pir","Zafarwal","Yazman","Wazirabad","Chak Five Hundred Seventy-five","Warah","Wana","Vihari","Utmanzai","Uthal","Usta Muhammad","Umarkot","Ubauro","Turbat","Topi","Toba Tek Singh","Thul","Thatta","Tharu Shah","Taunsa","Tank","Tangwani","Tangi","Tando Muhammad Khan","Tando Mitha Khan","Tando Jam","Tando Bago","Tando Allahyar","Tando Adam","Tandlianwala","Talhar","Talamba","Talagang","Thal","Swabi","Surkhpur","Surab","Sukkur","Sukheke Mandi","Sohbatpur","Sodhri","Sobhodero","Skardu","S\u012bta Road","Sinjhoro","Sillanwali","Sibi","Sialkot","Shujaabad","Shorkot","Shinpokh","Shikarpur","Shekhupura","Sharqpur Sharif","Shakargarh","Shahr Sultan","Shahpur Chakar","Shahpur","Shahkot","Shahdadpur","Shahdad Kot","Shabqadar","Sehwan","Sargodha","Sarai Sidhu","Sarai Naurang","Sarai Alamgir","Sann","Sanjwal","Sangla Hill","Sanghar","Sambrial","Samaro","Sakrand","Saidu Sharif","Sahiwal","Sahiwal","Saddiqabad","Rustam","Rojhan","Rohri","Renala Khurd","Rawalpindi","Ratodero","Rasulnagar","Ranipur","Rajo Khanani","Rajanpur","Raja Jang","Raiwind","Rahim Yar Khan","Goth Radhan","Chenab Nagar","Quetta","Qila Saifullah","Qila Abdullah","Kambar","Qadirpur Ran","Pithoro","Pishin","Pir Mahal","Pindi Gheb","Pindi Bhattian","Pind Dadan Khan","Goth Phulji","Phalia","Peshawar","Pattoki","Pasrur","Pasni","Parachinar","Pano Aqil","Panjgur","Pakpattan","Paharpur","Pad Idan","Pabbi","Ormara","Okara","Nushki","Nowshera","New Mirpur","Nawabshah","Naushahro Firoz","Naushahra Virkan","Naudero","Nasirabad","Narowal","Narang Mandi","Naukot","Nankana Sahib","Nabisar","Muzaffargarh","Muzaffar\u0101b\u0101d","Mustaf\u0101b\u0101d","Musa Khel Bazar","Murree","Muridke","Multan","Moro","Mithi","Mitha Tiwana","Mirwah Gorchani","Mirpur Sakro","Mirpur Mathelo","Mirpur Khas","Mirpur Bhtoro","Miro Khan","Miran Shah","Mingora","Minchianabad","Mianwali","Mian Channun","Mehrabpur","Mehar","Matli","Matiari","Mastung","Mardan","Mansehra","Mankera","Mangla","Mandi Bahauddin","Mananwala","Mamu Kanjan","Malir Cantonment","Malakwal","Malakand","Mailsi","Madeji","Mach","Loralai","Lodhran","Liliani","Layyah","Larkana","Landi Kotal","Lalian","Lala Musa","Lakki","Lakhi","Lahore","Ladhewala Waraich","Lachi","Kunri","Kunjah","Kundian","Kulachi","Kot Sultan","Kot Samaba","Kotri","Kot Rajkour","Kot Radha Kishan","Kot Mumin","Kot Malik Barkhurdar","Kotli Loharan","Kotli","Kot Ghulam Muhammad","Kot Diji","Kot Addu","Kohlu","Kohat","Khuzdar","Khush\u0101b","Khurrianwala","Khewra","Kharian","Kharan","Karak","Khanpur","Khanpur Mahar","Khangarh","Khangah Dogran","Khanewal","Khandowa","Khalabat","Khairpur Nathan Shah","Khairpur Tamewah","Khairpur","Khadro","Keti Bandar","Keshupur","Kasur","Kashmor","Karor","Kario Ghanwar","Karaundi","Karachi","Kanganpur","Kandiaro","Kandiari","Kandhkot","Kamra","Kamoke","Chak One Hundred Twenty Nine Left","Kamar Mushani","Kamalia","Kalur Kot","Kallar Kahar","Kaleke Mandi","Kalat","Kalaswala","Kalabagh","Kahuta","Kahror Pakka","Kahna Nau","Kadhan","Kabirwala","Johi","Jiwani","Chak Jhumra","Jhol","Jhelum","Jhawarian","Dera Allahyar","Jhang Sadr","Jauharabad","Jatoi Shimali","Jati","Jaranwala","Jandiala Sher Khan","Jand","Jamshoro","Jampur","Jalalpur Pirwala","Jalalpur Jattan","Jahanian Shah","Jacobabad","Islamkot","Islamabad","Hyderabad","Hujra Shah Muqim","Hingorja","Hazro City","Havelian","Haveli Lakha","Hasilpur","Chak Thirty-one -Eleven Left","Harunabad","Harnoli","Harnai","Haripur","Hangu","Hala","Hafizabad","Hadali","Gwadar","Gujrat","Gujranwala","Gujar Khan","Gojra","Gilgit","Ghotki","Ghauspur","Gharo","Garh Maharaja","Garhiyasin","Garhi Khairo","Goth Garelo","Gandava","Gambat","Gakuch","Gadani","Fort Abbas","Fazilpur","Chak Two Hundred Forty-nine Thal Development Authority","Faruka","Faqirwali","Faisalabad","Eminabad","Dunyapur","Dunga Bunga","Dullewala","Duki","Dokri","Doaba","Upper Dir","Diplo","Dipalpur","Dinan Bashnoian Wala","Dinga","Dijkot","Digri","Dhoro Naro","Dhaunkal","Dhanot","Dera Ismail Khan","Dera Ghazi Khan","Dera Bugti","Daur","Daultala","Daulatpur","Daud Khel","Daska Kalan","Darya Khan Marri","Darya Khan","Daromehar","Dalbandin","Dajal","Daira Din Panah","Daggar","Dadu","Dadhar","Chunian","Chuchar-kana Mandi","Chhor","Choa Saidan Shah","Chitral","Chishtian","Chiniot","Chilas","Chichawatni","Cherat Cantonement","Chawinda","Charsadda","Chamber","Chaman","Chakwal","Chak Azam Sahu","Chak","B\u016brew\u0101la","Bulri","Bozdar Wada","Bhopalwala","Bhit Shah","Bhiria","Bhimbar","Bhera","Bhawana","Bhan","Bhalwal","Bhakkar","Mianke Mor","Bhag","Berani","Bela","Begowala","Bat Khela","Battagram","Basirpur","Barkhan","Bannu","Bandhi","Bakhri Ahmad Khan","Bahawalpur","Bahawalnagar","Bagh","Bagarji","Baffa","Badin","Baddomalhi","Awaran","Attock City","Arifwala","Aman Garh","Alizai","Alipur","Aliabad","Akora","Ahmadpur East","Abbottabad","Jhang City","Bahawalnagar","Gulishah Kach","Nowshera Cantonment","Alik Ghund","Khadan Khak","Ahmadpur Sial","New B\u0101d\u0101h","Dandot RS","Dera Murad Jamali","J\u0101m S\u0101hib","Chowki Jamali","Setharja Old","Risalpur Cantonment","Noorabad","Alpurai","Shingli Bala","Malakwal City","Mehmand Chak","Basti Dosa","Moza Shahwala","Eidgah","Dasu","Barishal","Athmuqam","Nazir Town","Amirabad","Kakad Wari Dir Upper","Hattian Bala","Ashanagro Koto"];


    function selectPurpose(type) {
        if (type === 'buy') {
            document.getElementById('buy-purpose').classList.add("selected-button");
            document.getElementById('rent-purpose').classList.add("un-selected-button");
            document.getElementById('buy-purpose').classList.remove("un-selected-button");
            propertyPurpose = 'forSale';
        } else {
            document.getElementById('rent-purpose').classList.add("selected-button");
            document.getElementById('buy-purpose').classList.add("un-selected-button");
            document.getElementById('rent-purpose').classList.remove("un-selected-button");
            propertyPurpose = 'forRent';
        }
    }

    function selectPropertyType(type) {

        if (type === 'home') {
            document.getElementById('home-type').classList.remove("un-selected-button");
            document.getElementById('home-type').classList.add("selected-button");
            document.getElementById('plots-type').classList.add("un-selected-button");
            document.getElementById('commercial-type').classList.add("un-selected-button");
            document.getElementById('propertyTypeHome').style.display = 'block';
            document.getElementById('propertyTypePlot').style.display = 'none';
            document.getElementById('propertyTypeCommercial').style.display = 'none';
            document.getElementById('home-features').style.display = 'block';
            document.getElementById('commercial-features').style.display = 'none';
            document.getElementById('plot-features').style.display = 'none';
            propertyType = 'home';

        } else if (type === 'plots') {
            document.getElementById('plots-type').classList.remove("un-selected-button");
            document.getElementById('plots-type').classList.add("selected-button");
            document.getElementById('home-type').classList.add("un-selected-button");
            document.getElementById('commercial-type').classList.add("un-selected-button");
            document.getElementById('propertyTypePlot').style.display = 'block';
            document.getElementById('propertyTypeHome').style.display = 'none';
            document.getElementById('propertyTypeCommercial').style.display = 'none';
            document.getElementById('home-features').style.display = 'none';
            document.getElementById('commercial-features').style.display = 'none';
            document.getElementById('plot-features').style.display = 'block';
            propertyType = 'plot';

        } else {
            document.getElementById('commercial-type').classList.remove("un-selected-button");
            document.getElementById('commercial-type').classList.add("selected-button");
            document.getElementById('plots-type').classList.add("un-selected-button");
            document.getElementById('home-type').classList.add("un-selected-button");
            document.getElementById('propertyTypeCommercial').style.display = 'block';
            document.getElementById('propertyTypeHome').style.display = 'none';
            document.getElementById('propertyTypePlot').style.display = 'none';
            document.getElementById('home-features').style.display = 'none';
            document.getElementById('commercial-features').style.display = 'block';
            document.getElementById('plot-features').style.display = 'none';
            propertyType = 'commercial';
        }
    }

    function propertyTypeHome(type) {
        document.getElementById('type-house').classList.add("un-selected-button");
        document.getElementById('type-flat').classList.add("un-selected-button");
        document.getElementById('type-upper-portion').classList.add("un-selected-button");
        document.getElementById('type-lower-portion').classList.add("un-selected-button");
        document.getElementById('type-farm-house').classList.add("un-selected-button");
        document.getElementById('type-room').classList.add("un-selected-button");
        document.getElementById('type-pent-house').classList.add("un-selected-button");
        document.getElementById('type-bed-space').classList.add("un-selected-button");
        if(type === 'house'){
            document.getElementById('type-house').classList.add("selected-button");
            document.getElementById('type-house').classList.remove("un-selected-button");
            propertyTypeDetail = 'House';
        } else if(type === 'flat'){
            document.getElementById('type-flat').classList.add("selected-button");
            document.getElementById('type-flat').classList.remove("un-selected-button");
            propertyTypeDetail = 'Flat';
        } else if(type === 'upper-portion'){
            document.getElementById('type-upper-portion').classList.add("selected-button");
            document.getElementById('type-upper-portion').classList.remove("un-selected-button");
            propertyTypeDetail = 'Upper Portion';
        } else if(type === 'lower-portion'){
            document.getElementById('type-lower-portion').classList.add("selected-button");
            document.getElementById('type-lower-portion').classList.remove("un-selected-button");
            propertyTypeDetail = 'Lower Portion';
        } else if(type === 'farm-house'){
            document.getElementById('type-farm-house').classList.add("selected-button");
            document.getElementById('type-farm-house').classList.remove("un-selected-button");
            propertyTypeDetail = 'Farm House';
        } else if(type === 'room'){
            document.getElementById('type-room').classList.add("selected-button");
            document.getElementById('type-room').classList.remove("un-selected-button");
            propertyTypeDetail = 'Room';
        } else if(type === 'pent-house'){
            document.getElementById('type-pent-house').classList.add("selected-button");
            document.getElementById('type-pent-house').classList.remove("un-selected-button");
            propertyTypeDetail = 'Pent House';
        }else if(type === 'bed-space'){
            document.getElementById('type-bed-space').classList.add("selected-button");
            document.getElementById('type-bed-space').classList.remove("un-selected-button");
            propertyTypeDetail = 'bed-space';
        }
    }

    function propertyTypePlot(type) {
        document.getElementById('type-residential-plot').classList.add("un-selected-button");
        document.getElementById('type-commercial-plot').classList.add("un-selected-button");
        document.getElementById('type-agricultural-land').classList.add("un-selected-button");
        document.getElementById('type-industrial-land').classList.add("un-selected-button");
        document.getElementById('type-plot-file').classList.add("un-selected-button");
        document.getElementById('type-plot-farm').classList.add("un-selected-button");
        if(type === 'residential-plot'){
            document.getElementById('type-residential-plot').classList.add("selected-button");
            document.getElementById('type-residential-plot').classList.remove("un-selected-button");
            propertyTypeDetail = 'Residential Plot';
        } else if(type === 'commercial-plot'){
            document.getElementById('type-commercial-plot').classList.add("selected-button");
            document.getElementById('type-commercial-plot').classList.remove("un-selected-button");
            propertyTypeDetail = 'Commercial Plot';
        } else if(type === 'agricultural-land'){
            document.getElementById('type-agricultural-land').classList.add("selected-button");
            document.getElementById('type-agricultural-land').classList.remove("un-selected-button");
            propertyTypeDetail = 'Agricultural Land';
        } else if(type === 'industrial-land'){
            document.getElementById('type-industrial-land').classList.add("selected-button");
            document.getElementById('type-industrial-land').classList.remove("un-selected-button");
            propertyTypeDetail = 'Industrial Land';
        } else if(type === 'plot-file'){
            document.getElementById('type-plot-file').classList.add("selected-button");
            document.getElementById('type-plot-file').classList.remove("un-selected-button");
            propertyTypeDetail = 'Plot File';
        } else if(type === 'plot-farm'){
            document.getElementById('type-plot-farm').classList.add("selected-button");
            document.getElementById('type-plot-farm').classList.remove("un-selected-button");
            propertyTypeDetail = 'Plot Farm';
        }
    }

    function propertyTypeCommercial(type) {
        document.getElementById('type-office').classList.add("un-selected-button");
        document.getElementById('type-shop').classList.add("un-selected-button");
        document.getElementById('type-warehouse').classList.add("un-selected-button");
        document.getElementById('type-factory').classList.add("un-selected-button");
        document.getElementById('type-building').classList.add("un-selected-button");
        document.getElementById('type-others').classList.add("un-selected-button");
        if(type === 'office'){
            document.getElementById('type-office').classList.add("selected-button");
            document.getElementById('type-office').classList.remove("un-selected-button");
            propertyTypeDetail = 'Office';

        } else if(type === 'shop'){
            document.getElementById('type-shop').classList.add("selected-button");
            document.getElementById('type-shop').classList.remove("un-selected-button");
            propertyTypeDetail = 'Shop';
        } else if(type === 'warehouse'){
            document.getElementById('type-warehouse').classList.add("selected-button");
            document.getElementById('type-warehouse').classList.remove("un-selected-button");
            propertyTypeDetail = 'Warehouse';

        } else if(type === 'factory'){
            document.getElementById('type-factory').classList.add("selected-button");
            document.getElementById('type-factory').classList.remove("un-selected-button");
            propertyTypeDetail = 'Factory';
        } else if(type === 'building'){
            document.getElementById('type-building').classList.add("selected-button");
            document.getElementById('type-building').classList.remove("un-selected-button");
            propertyTypeDetail = 'Building';
        } else if(type === 'others'){
            document.getElementById('type-others').classList.add("selected-button");
            document.getElementById('type-others').classList.remove("un-selected-button");
            propertyTypeDetail = 'Others';
        }
    }

    function selectCity(){
        city = document.getElementById('select-city').value;
    }

    function selectLocation(){
        placelocation = document.getElementById('select-location').value;
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
    let currentStep = 0;
    function stepForward(){
        currentStep++;
        //
        // if(currentStep === 2){
        //     country = document.getElementById('select-country').value;
        //     city = document.getElementById('select-city').value;
        //     placelocation = document.getElementById('select-location').value;
        // }
        // if(currentStep === 3)
        // {
        //     propertyTitle = document.getElementById('property-title').value;
        //     propertyDescription = document.getElementById('property-description').value;
        //     propertyPrice = document.getElementById('property-price').value;
        //     propertylandArea = document.getElementById('property-land-area').value;
        //     propertyUnit = document.getElementById('property-unit').value;
        //     propertyExpireDate = document.getElementById('property-expiry-date').value;
        // }
        // if(currentStep === 4){
        //     bedroomFeature = document.getElementById('bedroom-feature').value;
        //     bathroomFeature = document.getElementById('bathroom-feature').value;
        //     kitchenFeature = document.getElementById('kitchen-feature').value;
        //     storeRoomFeature = document.getElementById('store-room-feature').value;
        //     homeParkingSpaceFeature = document.getElementById('home-parking-space-feature').value;
        //
        //     cornerFeature = document.getElementById('corner-feature').checked;
        //     parkFacingFeature = document.getElementById('park-facing-feature').checked;
        //     electricityFeature = document.getElementById('electricity-feature').checked;
        //     waterSupplyFeature = document.getElementById('water-supply-feature').checked;
        //     suiGasFeature = document.getElementById('sui-gas-feature').checked;
        //
        //     builtinYearFeature = document.getElementById('builtin-year-feature').value;
        //     roomFeature = document.getElementById('room-feature').value;
        //     floorFeature = document.getElementById('floor-feature').value;
        //     elevatorFeature = document.getElementById('elevator-feature').value;
        //     commercialParkingSpaceFeature = document.getElementById('commercial-parking-space-feature').value;
        // }
        // if(currentStep === 5){
        //     files = document.getElementById("property-file").files;
        // }
        // if(currentStep === 6){
        //     contactName = document.getElementById('contact-name').value;
        //     contactEmail = document.getElementById('contact-email').value;
        //     contactMobile = document.getElementById('contact-mobile').value;
        // }
    }

    function stepBackward() {
        currentStep--;
    }

    function saveProperty() {
        propertyPriceUnit = document.getElementById('price-unit').value;
        propertyPriceCurrency = document.getElementById('price-currency').value;
        let formData = new FormData();
        formData.append('propertyPurpose', propertyPurpose);
        formData.append('propertyType', propertyType);
        formData.append('propertyTypeDetail', propertyTypeDetail);
        formData.append('country', country);
        formData.append('city', city);
        formData.append('location', placelocation);
        formData.append('propertyTitle', propertyTitle);
        formData.append('propertyDescription', propertyDescription);
        formData.append('propertyPrice', propertyPrice);
        formData.append('propertyPriceUnit', propertyPriceUnit);
        formData.append('propertyPriceCurrency', propertyPriceCurrency);
        formData.append('propertyLandArea', propertylandArea);
        formData.append('propertyUnit', propertyUnit);
        formData.append('propertyExpireDate', propertyExpireDate);
        formData.append('bedroomFeature', bedroomFeature);
        formData.append('bathroomFeature', bathroomFeature);
        formData.append('kitchenFeature', kitchenFeature);
        formData.append('bedroomFeature', bedroomFeature);
        formData.append('storeRoomFeature', storeRoomFeature);
        formData.append('homeParkingSpaceFeature', homeParkingSpaceFeature);
        formData.append('cornerFeature', cornerFeature);
        formData.append('parkFacingFeature', parkFacingFeature);
        formData.append('electricityFeature', electricityFeature);
        formData.append('waterSupplyFeature', waterSupplyFeature);
        formData.append('suiGasFeature', suiGasFeature);
        formData.append('builtinYearFeature', builtinYearFeature);
        formData.append('roomFeature', roomFeature);
        formData.append('floorFeature', floorFeature);
        formData.append('elevatorFeature', elevatorFeature);
        formData.append('commercialParkingSpaceFeature', commercialParkingSpaceFeature);
        formData.append('contactName', contactName);
        formData.append('contactEmail', contactEmail);
        formData.append('contactMobile', contactMobile);

        for(let i=0; i<files.length;i++){
            formData.append('images[]', files[i]);
        }
        successNotification('Please wait....');

        $.ajax({
            type: "POST",  //type of method
            url: "http://gofindee.com/api/property",  //your page
            data: formData,// passing the values
            contentType: false, // NEEDED, DON'T OMIT THIS (requires jQuery 1.6+)
            processData: false, // NEEDED, DON'T OMIT THIS
            success: function (res) {
                //res = JSON.parse(res);
                successNotification('Property Saved Successfully');
                setTimeout(function () {
                   window.location.href="http://gofindee.com/";
                }, 2000);
            }
        });

    }

    function successNotification(successMessage) {
        var x = document.getElementById("success-notification");
        x.innerHTML = successMessage;
        x.className = "show";
        setTimeout(function () {
            x.className = x.className.replace("show", "");
        }, 2000);
    }

    function islogin() {
        if(!localStorage.hasOwnProperty('id')){
            return;
        }
        $.ajax({
            type: "GET",  //type of method
            url:    `http://gofindee.com/api/user/${localStorage.getItem('id')}/get`,  //your page
            success: function (res) {
                res = JSON.parse(res);
                if(res.status){
                    document.getElementById('contact-mobile').value = res.phone;
                    document.getElementById('contact-name').value = res.name;
                    document.getElementById('contact-email').value = res.email;
                }else{

                }
            }
        });
    }

</script>
