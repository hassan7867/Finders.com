@extends('layouts.app')
<link rel="stylesheet" href="<?php echo asset('css/stylesheet.css')?>" type="text/css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
@section('content')
    <div class="container mt-5">
        <div class="w-25">
            <nav class="nav nav-pills">
                <a href="#" class="nav-item nav-link">Buy</a>
                <a href="#" class="nav-item nav-link">Rent</a>
            </nav>
        {{--<button class="btn btn-success-custom">Buy</button>--}}
        {{--<button class="btn btn-success-custom ml-1">Rent</button>--}}
        </div>
        <br>
        <div>
            <div class="row">
                <div class="col-md-3">
                    <input type="text" placeholder="enter location" class="form-control" id="qty">
                    <div id='div_change_qty' name='div_change_qty' style='display:none;width:200px;height:200px;position:absolute;z-index:10;background:white' >
                        <table class="table" style="background: #f4fcff" width='100%' height='100%'>
                            <tr><td class="cursor-pointer">Lahore</td></tr>
                            <tr><td class="cursor-pointer">Islamabad</td></tr>
                            <tr><td class="cursor-pointer">Karachi</td></tr>
                        </table>
                    </div>
                </div>
                <div class="col-md-3">
                    <input type="text" placeholder="enter min budget" class="form-control">
                </div>
                <div class="col-md-3">
                    <input type="text" placeholder="enter max budget" class="form-control">
                </div>
                <div class="col-md-3">
                    <button class="form-control btn btn-success-custom">Search</button>
                </div>
            </div>
        </div>
        @foreach ($properties as $property)
                <div class="row mt-4">
                    <div class="col-md-6"><img width="550px" height="300px" src="http://localhost/finders.com/public/storage/{{$property->main_image}}"></div>
                    <div class="col-md-6">
                        <h1 class="text-left">PKR {{$property->price}}</h1>
                        <h3>{{$property->location}}, {{$property->city}}, {{$property->country}}</h3>
                        <a href="#"><h4>{{$property->title}}</h4></a>
                        <h5>{{$property->description}} </h5><a href="#"><h5>read more</h5></a>
                        <h6>Added on {{$property->date_posting}}</h6>
                        <button class="btn btn-success">Call</button>
                        <button class="btn btn-success">Email</button>
                    </div>
                </div>
        @endforeach
    </div>


    <script>
        var qty= document.querySelector('#qty');

        qty.onmouseup= function(e) {
            var div= document.querySelector('#div_change_qty');
            div.style.display= div.style.display==='block'?'none':'block';
        }

        qty.onblur= function(e) {
            var div= document.querySelector('#div_change_qty');
            div.style.display= 'none';
        }
    </script>
@endsection
