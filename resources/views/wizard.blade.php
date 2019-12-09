@extends('top-nav')
@section('content')
<html lang="en">

<head>
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
        <form method="POST" id="signup-form" class="signup-form">
            <h3>
                <span class="title_text">Property Type</span>
            </h3>
            <fieldset>
                <div class="fieldset-content">
                    <div class="form-group">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" name="username" id="username" placeholder="User Name" />
                    </div>
                    <div class="form-group">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" id="email" placeholder="Your Email" />
                    </div>
                    <div class="form-group form-password">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" id="password" data-indicator="pwindicator" />
                        <div id="pwindicator">
                            <div class="bar-strength">
                                <div class="bar-process">
                                    <div class="bar"></div>
                                </div>
                            </div>
                            <div class="label"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="your_avatar" class="form-label">Select avatar</label>
                        <div class="form-file">
                            <input type="file" name="your_avatar" id="your_avatar" class="custom-file-input" />
                            <span id='val'></span>
                            <span id='button'>Select File</span>
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
                <div class="fieldset-footer">
                    <span>Step 2 of 6</span>
                </div>
            </fieldset>
            <h3>
                <span class="title_text">Property Details</span>
            </h3>
            <fieldset>
                <div class="fieldset-footer">
                    <span>Step 3 of 3</span>
                </div>
            </fieldset>
            <h3>
                <span class="title_text">Property Features</span>
            </h3>
            <fieldset>
                <div class="fieldset-footer">
                    <span>Step 4 of 6</span>
                </div>
            </fieldset>
            <h3>
                <span class="title_text">Property Images</span>
            </h3>
            <fieldset>
                <div class="fieldset-footer">
                    <span>Step 5 of 6</span>
                </div>
            </fieldset>
            <h3>
                <span class="title_text">Contact Details</span>
            </h3>
            <fieldset>
                <div class="fieldset-footer">
                    <span>Step 6 of 6</span>
                </div>
            </fieldset>
        </form>
    </div>

</div>

<!-- JS -->
<script src="{{ asset('wizard/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('wizard/vendor/jquery-validation/dist/jquery.validate.min.js') }}"></script>
<script src="{{ asset('wizard/vendor/jquery-validation/dist/additional-methods.min.js') }}"></script>
<script src="{{ asset('wizard/vendor/jquery-steps/jquery.steps.min.js') }}"></script>
<script src="{{ asset('wizard/vendor/minimalist-picker/dobpicker.js') }}"></script>
<script src="{{ asset('wizard/vendor/minimalist-picker/dobpicker.js') }}"></script>
<script src="{{ asset('wizard/vendor/jquery.pwstrength/jquery.pwstrength.js') }}"></script>
<script src="{{ asset('wizard/js/main.js') }}"></script>
</body>

</html>
@endsection