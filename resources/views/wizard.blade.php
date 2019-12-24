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
    <script  type="text/javascript" src="{{ \Illuminate\Support\Facades\URL::asset('js/jquery.js') }}"></script>
    <script  type="text/javascript" src="{{ \Illuminate\Support\Facades\URL::asset('js/jquery.main.js') }}" ></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="colorlib.com">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{ asset('wizard/fonts/material-icon/css/material-design-iconic-font.min.css') }}">

    <!-- Main css -->
    <link href="{{ \Illuminate\Support\Facades\URL::asset('wizard/css/style.css') }}" rel="stylesheet" type="text/css">
    {{--js--}}

</head>

<body>

<div class="main" style="padding-top: 20px">
    <div class="container-custom" style="width: 96% !important; padding: 5px !important;">
        <h2 style="margin-bottom:20px">Add a New Property </h2>
        <div id="signup-form" class="signup-form">
            <h3>
                <span class="title_text">Property Type</span>
            </h3>
            <fieldset>
                <div style="border-bottom: 1px solid #ebebeb;">
                    <div class="form-group">
                            <div>
                            <b style="font-size: medium">Purpose</b><br>
                            <div class="row mt-3 ml-2">
                                <button class="selected-button" onclick="selectPurpose('buy')" id="buy-purpose" value="forSale">For Sale</button>
                                <button class="un-selected-button ml-2" onclick="selectPurpose('rent')" id="rent-purpose" value="forRent">Rent</button>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div>
                            <b style="font-size: medium">Property Type</b><br>
                            <div class="row mt-3 ml-2">
                                <button class="selected-button" onclick="selectPropertyType('home')" id="home-type">Home</button>
                                <button class="un-selected-button ml-2" onclick="selectPropertyType('plots')" id="plots-type">Plots</button>
                                <button class="un-selected-button ml-2" onclick="selectPropertyType('commercial')" id="commercial-type">Commercial</button>
                            </div>
                        </div>
                    </div>
                    <div class="form-group" id="propertyTypeHome" style="display: block">
                        <div>
                            <div class="row ml-5">
                                <button style="padding: 1px!important;font-size: small" class="selected-button" onclick="propertyTypeHome('house')" id="type-house">House</button>
                                <button style="padding: 1px!important;font-size: small" class="un-selected-button ml-2" onclick="propertyTypeHome('flat')" id="type-flat">Flat</button>
                                <button style="padding: 1px!important;font-size: small" class="un-selected-button ml-2" onclick="propertyTypeHome('upper-portion')" id="type-upper-portion">Upper Portion</button>
                            </div>
                            <div class="row ml-5 mt-1">
                                <button style="padding: 1px!important;font-size: small" class="un-selected-button" onclick="propertyTypeHome('lower-portion')" id="type-lower-portion">Lower portion</button>
                                <button style="padding: 1px!important;font-size: small" class="un-selected-button ml-2" onclick="propertyTypeHome('farm-house')" id="type-farm-house">Farm House</button>
                                <button style="padding: 1px!important;font-size: small" class="un-selected-button ml-2" onclick="propertyTypeHome('room')" id="type-room">Room</button>
                            </div>
                            <div class="row ml-5 mt-1">
                                <button style="padding: 1px!important;font-size: small" class="un-selected-button" onclick="propertyTypeHome('pent-house')" id="type-pent-house" value="forSale">Pent House</button>
                            </div>
                        </div>
                    </div>
                    <div class="form-group" id="propertyTypePlot" style="display: none">
                        <div>
                            <div class="row ml-5">
                                <button style="padding: 1px!important;font-size: small" class="selected-button" onclick="propertyTypePlot('residential-plot')" id="type-residential-plot">Residential Plot</button>
                                <button style="padding: 1px!important;font-size: small" class="un-selected-button ml-2" onclick="propertyTypePlot('commercial-plot')" id="type-commercial-plot">Commercial Plot</button>
                                <button style="padding: 1px!important;font-size: small" class="un-selected-button ml-2" onclick="propertyTypePlot('agricultural-land')" id="type-agricultural-land">Agricultural Land</button>
                            </div>
                            <div class="row ml-5 mt-1">
                                <button style="padding: 1px!important;font-size: small" class="un-selected-button" onclick="propertyTypePlot('industrial-land')" id="type-industrial-land">Industrial Land</button>
                                <button style="padding: 1px!important;font-size: small" class="un-selected-button ml-2" onclick="propertyTypePlot('plot-file')" id="type-plot-file">Plot File</button>
                                <button style="padding: 1px!important;font-size: small" class="un-selected-button ml-2" onclick="propertyTypePlot('plot-farm')" id="type-plot-farm">Plot Farm</button>
                            </div>
                        </div>
                    </div>
                    <div class="form-group" id="propertyTypeCommercial" style="display: none">
                        <div>
                            <div class="row ml-5">
                                <button style="padding: 1px!important;font-size: small" class="selected-button" onclick="propertyTypeCommercial('office')" id="type-office">Office</button>
                                <button style="padding: 1px!important;font-size: small" class="un-selected-button ml-2" onclick="propertyTypeCommercial('shop')" id="type-shop">Shop</button>
                                <button style="padding: 1px!important;font-size: small" class="un-selected-button ml-2" onclick="propertyTypeCommercial('warehouse')" id="type-warehouse">Warehouse</button>
                            </div>
                            <div class="row ml-5 mt-1">
                                <button style="padding: 1px!important;font-size: small" class="un-selected-button" onclick="propertyTypeCommercial('factory')" id="type-factory">Factory</button>
                                <button style="padding: 1px!important;font-size: small" class="un-selected-button ml-2" onclick="propertyTypeCommercial('building')" id="type-building">Building</button>
                                <button style="padding: 1px!important;font-size: small" class="un-selected-button ml-2" onclick="propertyTypeCommercial('others')" id="type-others">Others</button>
                            </div>
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
                <div class="form-group">
                    <label>Country :</label>
                    <select onchange="getCities()" id="select-country" class="form-control w-25" style="margin-left: 0.1rem!important;" name="city">
                        <option value="-1">Select country</option>
                        <option value="PK">Pakistan</option>
                        <option value="AE">United Arab Emirates</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>City :</label>
                    <select onchange="selectCity()" id="select-city" type="text" class="form-control w-25" style="margin-left: 1.8rem!important;" name="city">
                        <option value="-1">Select city</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Location :</label>
                    <input onkeypress="selectLocation()" class="form-control w-25" id="select-location" name="location" type="text">
                </div>

                <div class="fieldset-footer">
                    <span>Step 2 of 6</span>
                </div>
            </fieldset>
            <h3 id="property-detail-heading">
                <span class="title_text">Property Details</span>
            </h3>
            <fieldset>

                <div class="form-group">
                    <label>Property Title :</label>
                    <input class="form-control w-25" id="property-title" name="propertyTitle" type="text">
                </div>
                <div class="form-group">
                    <label>Description :</label>
                    <textarea class="form-control w-25" style="resize: none; margin-left: 1.0rem!important" id="property-description" rows="2" cols="25"
                              name="description"></textarea>
                </div>
                <div class="form-group">
                    <label>Price :</label>
                    <input class="form-control w-25" id="property-price" name="price" type="number" style="margin-left: 3.6rem!important;">
                </div>
                <div class="form-group">
                    <label>Land Area :</label>
                    <div class="row">
                        <input class="form-control w-25 ml-3" id="property-land-area" name="landArea" type="number" style="margin-left: 2.4rem!important;">
                        <label class="mt-2" style="margin-right: 12px !important;">Unit: </label>
                        <select type="text" class="form-control ml-2" style="width: 24%!important;" id="property-unit" name="unit">
                            {{--<option value="">--Please Select--</option>--}}
                            <option value="squareFeet">Square Feet</option>
                            <option value="squareyards">Square Yards</option>
                            <option value="squareMeters">Square Meters</option>
                            <option value="marla">Marla</option>
                            <option value="kanal">Kanal</option>
                        </select>
                    </div>
                </div>
                <div class="form-group" id="bedroomField" style="display: none">
                    <label>Bedrooms :</label>
                    <select type="text" class="form-control w-25" id="bedrooms" name="bedrooms">
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
                    <select type="text" class="form-control w-25" id="bathroom" name="bathroom">
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
                <div class="form-group">
                    <label>Expire after :</label>
                    <select type="text" class="form-control w-25" id="property-expiry-date" name="expiryDate" style="margin-left: 0.8rem!important;">
                        <option value="">--Please Select--</option>
                        <option value="Less than 1 year">1 month</option>
                        <option value="1 year">3 months</option>
                        <option value="2 year">6 months</option>
                    </select>
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
                    <div class="form-group">
                        <label>Bedrooms :</label>
                        <input class="form-control w-25" id="bedroom-feature" name="location" type="number" style="margin-left: 1.6rem!important">
                    </div>
                    <div class="form-group">
                        <label>Bathrooms :</label>
                        <input class="form-control w-25" id="bathroom-feature" name="location" type="number" style="margin-left: 1.3rem!important">
                    </div>
                    <div class="form-group">
                        <label>Kitchens :</label>
                        <input class="form-control w-25" id="kitchen-feature" name="location" type="number" style="margin-left: 2.1rem!important">
                    </div>
                    <div class="form-group">
                        <label>Store Rooms :</label>
                        <input class="form-control w-25" id="store-room-feature" name="location" type="number" style="margin-left: 0.6rem!important">
                    </div>
                    <div class="form-group">
                        <label>Parking Spaces :</label>
                        <input class="form-control w-25" id="home-parking-space-feature" name="location" type="number" style="margin-left: -0.5rem!important">
                    </div>
                </div>

                <div style="display: none;" id="plot-features">
                    <div class="form-group">
                        <label>Corner :</label>
                        <input id="corner-feature" name="location" type="checkbox" style="margin-left: 2.5rem!important; width: 50px!important;">
                    </div>
                    <div class="form-group">
                        <label>Park Facing :</label>
                        <input id="park-facing-feature" name="location" type="checkbox" style="margin-left: 0.3rem!important; width: 50px!important;">
                    </div>
                    <div class="form-group">
                        <label>Electricity :</label>
                        <input id="electricity-feature" name="location" type="checkbox" style="margin-left: 0.9rem!important; width: 50px!important;">
                    </div>
                    <div class="form-group">
                        <label>Water Supply :</label>
                        <input id="water-supply-feature" name="checkbox" type="checkbox" style="margin-left: -0.4rem!important; width: 50px!important;">
                    </div>
                    <div class="form-group">
                        <label>Sui Gas :</label>
                        <input id="sui-gas-feature" name="location" type="checkbox" style="margin-left: 2.0rem!important; width: 50px!important;">
                    </div>
                </div>

                <div style="display: none;" id="commercial-features">
                    <div class="form-group">
                        <label>Built in Year :</label>
                        <input class="form-control w-25" id="builtin-year-feature" name="location" type="number" style="margin-left: 0.5rem!important">
                    </div>
                    <div class="form-group">
                        <label>Rooms :</label>
                        <input class="form-control w-25" id="room-feature" name="location" type="number" style="margin-left: 2.9rem!important">
                    </div>
                    <div class="form-group">
                        <label>Floors :</label>
                        <input class="form-control w-25" id="floor-feature" name="location" type="number" style="margin-left: 3.2rem!important">
                    </div>
                    <div class="form-group">
                        <label>Elevators :</label>
                        <input class="form-control w-25" id="elevator-feature" name="location" type="number" style="margin-left: 2.0rem!important">
                    </div>
                    <div class="form-group">
                        <label>Parking Spaces :</label>
                        <input class="form-control w-25" id="commercial-parking-space-feature" name="location" type="number" style="margin-left: -0.5rem!important">
                    </div>
                </div>

                <div class="fieldset-footer">
                    <span>Step 4 of 6</span>
                </div>
            </fieldset>
            <h3>
                <span class="title_text">Property Images</span>
            </h3>
            <fieldset>

                <div class="form-group">Select image to upload :<br>
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

                <div class="form-group">
                    <label>Name :</label>
                    <input class="form-control w-25" id="contact-name" name="location" type="text" style="margin-left: 0.6rem!important">
                </div>
                <div class="form-group">
                    <label>Email :</label>
                    <input class="form-control w-25" id="contact-email" name="location" type="email" style="margin-left: 0.6rem!important">
                </div>
                <div class="form-group">
                    <label>Mobile :</label>
                    <input class="form-control w-25" id="contact-mobile" name="location" type="text" style="margin-left: 0.2rem!important">
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
    let propertylandArea = '';
    let propertyUnit = '';
    let propertyExpireDate = '';

    let bedroomFeature = '';
    let bathroomFeature = '';
    let kitchenFeature = '';
    let storeRoomFeature = '';
    let homeParkingSpaceFeature = '';

    let cornerFeature = '';
    let parkFacingFeature = '';
    let electricityFeature = '';
    let waterSupplyFeature = '';
    let suiGasFeature = '';

    let builtinYearFeature = '';
    let roomFeature = '';
    let floorFeature = '';
    let elevatorFeature = '';
    let commercialParkingSpaceFeature = '';

    let files = [];

    let contactName = '';
    let contactEmail = '';
    let contactMobile = '';

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
        $.ajax({
            type: "POST",  //type of method
            url: "http://finders.com/api/cities/get",  //your page
            data: {country: country},// passing the values
            success: function (res) {
                res = JSON.parse(res);
                document.getElementById('select-city').innerHTML = '';
                let child =  document.createElement("option");
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
    let currentStep = 0;
    function stepForward(){
        currentStep++;

        if(currentStep === 2){
            country = document.getElementById('select-country').value;
            city = document.getElementById('select-city').value;
            placelocation = document.getElementById('select-location').value;
        }
        if(currentStep === 3)
        {
            propertyTitle = document.getElementById('property-title').value;
            propertyDescription = document.getElementById('property-description').value;
            propertyPrice = document.getElementById('property-price').value;
            propertylandArea = document.getElementById('property-land-area').value;
            propertyUnit = document.getElementById('property-unit').value;
            propertyExpireDate = document.getElementById('property-expiry-date').value;
        }
        if(currentStep === 4){
            bedroomFeature = document.getElementById('bedroom-feature').value;
            bathroomFeature = document.getElementById('bathroom-feature').value;
            kitchenFeature = document.getElementById('kitchen-feature').value;
            storeRoomFeature = document.getElementById('store-room-feature').value;
            homeParkingSpaceFeature = document.getElementById('home-parking-space-feature').value;

            cornerFeature = document.getElementById('corner-feature').checked;
            parkFacingFeature = document.getElementById('park-facing-feature').checked;
            electricityFeature = document.getElementById('electricity-feature').checked;
            waterSupplyFeature = document.getElementById('water-supply-feature').checked;
            suiGasFeature = document.getElementById('sui-gas-feature').checked;

            builtinYearFeature = document.getElementById('builtin-year-feature').value;
            roomFeature = document.getElementById('room-feature').value;
            floorFeature = document.getElementById('floor-feature').value;
            elevatorFeature = document.getElementById('elevator-feature').value;
            commercialParkingSpaceFeature = document.getElementById('commercial-parking-space-feature').value;
        }
        if(currentStep === 5){
            files = document.getElementById("property-file").files;
        }
        if(currentStep === 6){
            contactName = document.getElementById('contact-name').value;
            contactEmail = document.getElementById('contact-email').value;
            contactMobile = document.getElementById('contact-mobile').value;
        }
    }

    function stepBackward() {
        currentStep--;
    }

    function saveProperty() {
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
        $.ajax({
            type: "POST",  //type of method
            url: "http://finders.com/api/property",  //your page
            data: formData,// passing the values
            contentType: false, // NEEDED, DON'T OMIT THIS (requires jQuery 1.6+)
            processData: false, // NEEDED, DON'T OMIT THIS
            success: function (res) {
                //res = JSON.parse(res);
                successNotification('Property Saved Successfully');
                setTimeout(function () {
                    window.location.reload();
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

</script>
