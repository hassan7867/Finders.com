@extends('layouts.app')
<link rel="stylesheet" href="<?php echo asset('css/stylesheet.css')?>" type="text/css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
@section('content')
    <div class="container mt-5">
        <div class="w-25">
        <button class="btn btn-success-custom">Buy</button>
        <button class="btn btn-success-custom ml-1">Rent</button>
        </div>
        <br>
        <div class="mt-2">
            <div class="row">
                <div class="col-md-4">
                    <input type="text" placeholder="enter location" class="form-control" id="qty">
                    <div id='div_change_qty' name='div_change_qty' style='display:none;width:200px;height:200px;position:absolute;z-index:10;background:white' >
                        <table class="table" style="background: #f4fcff" width='100%' height='100%'>
                            <tr><td class="cursor-pointer">Lahore</td></tr>
                            <tr><td class="cursor-pointer">Islamabad</td></tr>
                            <tr><td class="cursor-pointer">Karachi</td></tr>
                        </table>
                    </div>
                </div>
                <div class="col-md-4">
                    <input type="text" placeholder="enter budget" class="form-control">
                </div>
                <div class="col-md-4">
                    <button class="form-control btn btn-success-custom">Search</button>
                </div>
            </div>
        </div>
        <table class="table mt-4">
            <thead style="background: #f4fcff">
                <tr>
                    <th>#</th>
                    <th>Property Name</th>
                    <th>Price</th>
                    <th>Location</th>
                    <th>Attachments</th>
                </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>dummy property</td>
                <td>1000</td>
                <td>Lahore</td>
                <td><a href="#">View</a></td>
            </tr>
            </tbody>
        </table>
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
