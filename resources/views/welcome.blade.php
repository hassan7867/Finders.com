<!DOCTYPE html>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="<?php echo asset('css/stylesheet.css')?>" type="text/css">
<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
{{--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>--}}
{{--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"--}}
{{--integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">--}}
{{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>--}}
<link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}">
<style>
    .nav-text-custom {
        color: white !important;
        font-weight: bold;
    }

    body {
        background: #f8f9fa;
    }

    .success-btn-custom {
        background: #f8f9fa;
        color: #1cd8d4;
        border: 1px solid #1cd8d4;
        font-weight: bold;
    }

    .success-btn-custom:hover {
        background: #1cd8d4;
        color: white;
        font-weight: bold;
    }

    .selected-button {
        background: #1cd8d4;
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
        color: #1cd8d4;
        border: 1px solid #1cd8d4;
        font-weight: bold;
        text-align: center;
        padding: 5px;
        border-radius: 3px;
        width: 100px;
    }

    .un-selected-button:hover {
        background: #1cd8d4;
        color: white;
    }

    .top-search-bar{
        border-radius: 5px;
        box-shadow: white;
    }
</style>


<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<body onload="typeWriter()">
<nav class="navbar navbar-expand-lg navbar-light" style="background: #1cd8d4;">
    <a class="navbar-brand nav-text-custom" href="#">Finders</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link nav-text-custom" href="#">Homes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link nav-text-custom" href="#">Plots</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="mr-sm-2 top-search-bar" type="search" placeholder="Enter Property ID" aria-label="Search">
            <button class="btn btn-outline my-2 my-sm-0" style="background: white; font-size: 12px" type="submit">Find</button>
            <button class="btn btn-outline my-2 my-sm-0 ml-2" style="background: white; font-size: 12px">Add Property</button>
        </form>
    </div>
</nav>
<div class="container mt-5">
    <h1 style="font-weight: bold; font-size: 25px; color: #1cd8d4" id="AutoText"></h1>
    <div class="w-25 mt-3">
        <button class="selected-button" onclick="selectPurpose('buy')" id="buy-purpose">Buy</button>
        <button class="un-selected-button" onclick="selectPurpose('rent')" id="rent-purpose">Rent</button>
        {{--<button class="btn btn-success-custom">Buy</button>--}}
        {{--<button class="btn btn-success-custom ml-1">Rent</button>--}}
    </div>
    <br>
    <div>
        <div class="row">
            <div class="col-md-3">
                <select class="form-control">
                    <option>Select country</option>
                    <option>Pakistan</option>
                    <option>United Arab Emirates</option>
                </select>
            </div>
            <div class="col-md-3">
                <select class="form-control">
                    <option>Select city</option>
                    <option>ABB</option>
                    <option>BB</option>
                </select>
            </div>
            <div class="col-md-2">
                <input type="text" placeholder="Enter min budget" class="form-control">
            </div>
            <div class="col-md-2">
                <input type="text" placeholder="Enter max budget" class="form-control">
            </div>
            <div class="col-md-2">
                <button class="form-control btn success-btn-custom">Find</button>
            </div>
        </div>
    </div>
    @foreach ($properties as $property)
        <div class="row mt-4">
            <div class="col-md-6"><img width="550px" height="300px"
                                       src="http://localhost/finders.com/public/storage/{{$property->main_image}}">
            </div>
            <div class="col-md-6">
                <h1 class="text-left">PKR {{$property->price}}</h1>
                <h3>{{$property->location}}, {{$property->city}}, {{$property->country}}</h3>
                <a href="#"><h4>{{$property->title}}</h4></a>
                <h5>{{$property->description}} </h5><a href="#"><h5>read more</h5></a>
                <h6>Added on {{$property->date_posting}}</h6>
                <h6>{{$property->purpose}}</h6>
                <button class="btn success-btn-custom" data-toggle="modal" data-target="#call-modal">Call</button>
                <button class="btn success-btn-custom" data-toggle="modal" data-target="#email-modal">Email</button>
            </div>
        </div>
    @endforeach
</div>
</body>

<div class="modal fade" id="call-modal">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <h4 class="mt-2 text-center">Contact Us</h4>
            <p class="text-center">Locations Property And Construction</p>
            <div class="w-100" style="border: 1px solid green"></div>

            <div class="row ml-3 mt-2">
                <div class="col-3">Name</div> <div class="col-4">Ali Riaz</div>
            </div>
            <div class="row ml-3">
                <div class="col-3">Tel</div> <div class="col-4">+923060460186</div>
            </div>
            <div class="row">
            <div class="col-5">
            <button class="btn btn-outline-danger mt-2 mb-1" style="margin-left: 220px">Close</button>
            </div>
            </div>
    </div>
</div>
</div>

    <div class="modal fade" id="email-modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Email</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h5 class="mt-2">Location Property and Construction</h5>
                    <form>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Email:</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Phone :</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Message:</label>
                            <textarea class="form-control" id="message-text"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn success-btn-custom">Send message</button>
                </div>
            </div>
        </div>
    </div>

<script>
    function selectPurpose(type) {
        if (type === 'buy') {
            document.getElementById('buy-purpose').classList.add("selected-button");
            document.getElementById('rent-purpose').classList.add("un-selected-button");
            document.getElementById('buy-purpose').classList.remove("un-selected-button");
        } else {
            document.getElementById('rent-purpose').classList.add("selected-button");
            document.getElementById('buy-purpose').classList.add("un-selected-button");
            document.getElementById('rent-purpose').classList.remove("un-selected-button");
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

</script>
</html>
