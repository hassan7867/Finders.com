@extends('top-nav')
@section('content')
    <link href="{{asset('theme-styles/styles/about.css')}}" rel="stylesheet">
    <script  type="text/javascript" src="{{ \Illuminate\Support\Facades\URL::asset('js/jquery.js') }}"></script>
    <script  type="text/javascript" src="{{ \Illuminate\Support\Facades\URL::asset('js/jquery.main.js') }}" ></script>
    <script  type="text/javascript" src="{{ \Illuminate\Support\Facades\URL::asset('theme-styles/styles/bootstrap-4.1.2/popper.js')}}"></script>
    <script  type="text/javascript" src="{{ \Illuminate\Support\Facades\URL::asset('theme-styles/styles/bootstrap-4.1.2/bootstrap.min.js')}}"></script>
    <script  type="text/javascript" src="{{ \Illuminate\Support\Facades\URL::asset('theme-styles/plugins/greensock/TweenMax.min.js')}}"></script>
    <script  type="text/javascript" src="{{ \Illuminate\Support\Facades\URL::asset('theme-styles/plugins/scrollmagic/ScrollMagic.min.js')}}"></script>
    <script  type="text/javascript" src="{{ \Illuminate\Support\Facades\URL::asset('theme-styles/js/about.js')}}"></script>
    <script  type="text/javascript" src="{{ \Illuminate\Support\Facades\URL::asset('theme-styles/js/custom.js') }}"></script>
    <div class="super_container">

        <img style="width: 100%; height: 50%" src="{{asset('theme-styles/images/about.jpg')}}">

    <!-- about-me -->
    <div class="intro mt-5">
        <div class="container">
            <div class="row row-eq-height">

                <!-- Intro Content -->
                <div class="col-lg-6">
                    <div class="intro_content">
                        <div class="section_title_container">
                            <div class="section_subtitle">Go Findee</div>
                            <div class="section_title"><h1>Who we are</h1></div>
                        </div>
                        <div class="intro_text">
                            <p>GoFindee is a real estate company. We provide online services to people who want to sell or rent their properties.</p>
                        </div>
                    </div>
                </div>

                <!-- Intro Image -->
                <div class="col-lg-6 intro_col">
                    <div class="intro_image">
                        <div class="background_image" style="background-image:url({{asset('theme-styles/images/intro.jpg')}})"></div>
                        <img src="{{asset('theme-styles/images/intro.jpg')}}" alt="">
                    </div>
                </div>

            </div>
        </div>
    </div>


    {{--services--}}

        <div class="services mt-4">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="section_title_container text-center">
                            <div class="section_subtitle">Go Findee</div>
                            <div class="section_title"><h1>Services</h1></div>
                        </div>
                    </div>
                </div>
                <div class="row services_row">

                    <!-- Service -->
                    <div class="col-xl-4 col-md-6">
                        <div class="service">
                            <div class="service_title_container d-flex flex-row align-items-center justify-content-start">
                                <div class="service_icon d-flex flex-column align-items-start justify-content-center">
                                    <img src="{{asset('theme-styles/images/service_1.png')}}" alt="">
                                </div>
                                <div class="service_title"><h3>Consulting</h3></div>
                            </div>
                            <div class="service_text">
                                <p>Nulla aliquet bibendum sem, non placer risus venenatis at. Prae sent vulputate bibendum dictum.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Service -->
                    <div class="col-xl-4 col-md-6">
                        <div class="service">
                            <div class="service_title_container d-flex flex-row align-items-center justify-content-start">
                                <div class="service_icon d-flex flex-column align-items-start justify-content-center">
                                    <img src="{{asset('theme-styles/images/service_2.png')}}" alt="">
                                </div>
                                <div class="service_title"><h3>Real estate sales</h3></div>
                            </div>
                            <div class="service_text">
                                <p>Aliquet bibendum sem, non placerat risus venenatis at. Prae sent vulputate bibendum dictum. Cras at vehicula.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Service -->
                    <div class="col-xl-4 col-md-6">
                        <div class="service">
                            <div class="service_title_container d-flex flex-row align-items-center justify-content-start">
                                <div class="service_icon d-flex flex-column align-items-start justify-content-center">
                                    <img src="{{asset('theme-styles/images/service_3.png')}}" alt="">
                                </div>
                                <div class="service_title"><h3>Renting</h3></div>
                            </div>
                            <div class="service_text">
                                <p>Nulla aliquet bibendum sem, non placerat risus venenatis at. Prae sent vulputate bibendum dictum.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Service -->
                    <div class="col-xl-4 col-md-6">
                        <div class="service">
                            <div class="service_title_container d-flex flex-row align-items-center justify-content-start">
                                <div class="service_icon d-flex flex-column align-items-start justify-content-center">
                                    <img src="{{asset('theme-styles/images/service_4.png')}}" alt="">
                                </div>
                                <div class="service_title"><h3>Meditation</h3></div>
                            </div>
                            <div class="service_text">
                                <p>Aliquet bibendum sem, non placerat risus venenatis at. Prae sent vulputate bibendum dictum. Cras at vehicula.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Service -->
                    <div class="col-xl-4 col-md-6">
                        <div class="service">
                            <div class="service_title_container d-flex flex-row align-items-center justify-content-start">
                                <div class="service_icon d-flex flex-column align-items-start justify-content-center">
                                    <img src="{{asset('theme-styles/images/service_5.png')}}" alt="">
                                </div>
                                <div class="service_title"><h3>Evaluation</h3></div>
                            </div>
                            <div class="service_text">
                                <p>Bibendum sem, non placerat risus venenatis at. Prae sent vulputate bibendum dictum. Cras at vehicula.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Service -->
                    <div class="col-xl-4 col-md-6">
                        <div class="service">
                            <div class="service_title_container d-flex flex-row align-items-center justify-content-start">
                                <div class="service_icon d-flex flex-column align-items-start justify-content-center">
                                    <img src="{{asset('theme-styles/images/service_6.png')}}" alt="">
                                </div>
                                <div class="service_title"><h3>Price Consulting</h3></div>
                            </div>
                            <div class="service_text">
                                <p>Aliquet bibendum sem, non placerat risus venenatis at. Prae sent vulputate bibendum dictum. Cras at vehicula.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="milestones mb-4">
            <div class="container">
                <div class="row">

                    <!-- Milestone -->
                    <div class="col-xl-3 col-md-6 milestone_col">
                        <div class="milestone d-flex flex-row align-items-start justify-content-md-center justify-content-start">
                            <div class="milestone_content">
                                <div class="milestone_icon d-flex flex-column align-items-start justify-content-center"><img src="{{asset('theme-styles/images/duplex.svg')}}" alt=""></div>
                                <div class="milestone_counter" data-end-value="425">430</div>
                                <div class="milestone_text">homes sold</div>
                            </div>
                        </div>
                    </div>

                    <!-- Milestone -->
                    <div class="col-xl-3 col-md-6 milestone_col">
                        <div class="milestone d-flex flex-row align-items-start justify-content-md-center justify-content-start">
                            <div class="milestone_content">
                                <div class="milestone_icon d-flex flex-column align-items-start justify-content-center"><img src="{{asset('theme-styles/images/prize.svg')}}" alt=""></div>
                                <div class="milestone_counter" data-end-value="18">2</div>
                                <div class="milestone_text">awards</div>
                            </div>
                        </div>
                    </div>

                    <!-- Milestone -->
                    <div class="col-xl-3 col-md-6 milestone_col">
                        <div class="milestone d-flex flex-row align-items-start justify-content-md-center justify-content-start">
                            <div class="milestone_content">
                                <div class="milestone_icon d-flex flex-column align-items-start justify-content-center"><img src="{{asset('theme-styles/images/home.svg')}}" alt=""></div>
                                <div class="milestone_counter" data-end-value="25" data-sign-after="k">2K</div>
                                <div class="milestone_text">followers</div>
                            </div>
                        </div>
                    </div>

                    <!-- Milestone -->
                    <div class="col-xl-3 col-md-6 milestone_col">
                        <div class="milestone d-flex flex-row align-items-start justify-content-md-center justify-content-start">
                            <div class="milestone_content">
                                <div class="milestone_icon d-flex flex-column align-items-start justify-content-center"><img src="{{asset('theme-styles/images/rent.svg')}}" alt=""></div>
                                <div class="milestone_counter" data-end-value="1265">500</div>
                                <div class="milestone_text">rentals</div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>



        {{--<div class="agents">--}}
            {{--<div class="container">--}}
                {{--<div class="row">--}}
                    {{--<div class="col">--}}
                        {{--<div class="section_title_container text-center">--}}
                            {{--<div class="section_subtitle">Go Findee</div>--}}
                            {{--<div class="section_title"><h1>Our Realtors</h1></div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="row agents_row">--}}

                    {{--<!-- Agent -->--}}
                    {{--<div class="col-lg-4 agent_col">--}}
                        {{--<div class="agent">--}}
                            {{--<div class="agent_image"><img style="width: 500px;height: 400px" src="{{asset('img/hassanagent.jpg')}}" alt=""></div>--}}
                            {{--<div class="agent_content">--}}
                                {{--<div class="agent_name"><a href="#">Hassan Abbas</a></div>--}}
                                {{--<div class="agent_title">Buying Agent</div>--}}
                                {{--<div class="agent_list">--}}
                                    {{--<ul>--}}
                                        {{--<li>hassanabbas7462@gmail.com</li>--}}
                                        {{--<li>+92 322 4644 713</li>--}}
                                    {{--</ul>--}}
                                {{--</div>--}}
                                {{--<div class="social">--}}
                                    {{--<ul class="d-flex flex-row align-items-center justify-content-start">--}}
                                        {{--<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>--}}
                                        {{--<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>--}}
                                        {{--<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>--}}
                                    {{--</ul>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<!-- Agent -->--}}
                    {{--<div class="col-lg-4 agent_col">--}}
                        {{--<div class="agent">--}}
                            {{--<div class="agent_image"><img  style="width: 500px;height: 400px" src="{{asset('img/back2.jpg')}}" alt=""></div>--}}
                            {{--<div class="agent_content">--}}
                                {{--<div class="agent_name"><a href="#">Jane Williams</a></div>--}}
                                {{--<div class="agent_title">Buying Agent</div>--}}
                                {{--<div class="agent_list">--}}
                                    {{--<ul>--}}
                                        {{--<li>michael@myhometemp.com</li>--}}
                                        {{--<li>+45 27774 5653 267</li>--}}
                                    {{--</ul>--}}
                                {{--</div>--}}
                                {{--<div class="social">--}}
                                    {{--<ul class="d-flex flex-row align-items-center justify-content-start">--}}
                                        {{--<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>--}}
                                        {{--<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>--}}
                                        {{--<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>--}}
                                    {{--</ul>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<!-- Agent -->--}}
                    {{--<div class="col-lg-4 agent_col">--}}
                        {{--<div class="agent">--}}
                            {{--<div class="agent_image"><img  style="width: 500px;height: 400px" src="{{asset('theme-styles/images/realtor_3.jpg')}}" alt=""></div>--}}
                            {{--<div class="agent_content">--}}
                                {{--<div class="agent_name"><a href="#">Carla Brown</a></div>--}}
                                {{--<div class="agent_title">Buying Agent</div>--}}
                                {{--<div class="agent_list">--}}
                                    {{--<ul>--}}
                                        {{--<li>michael@myhometemp.com</li>--}}
                                        {{--<li>+45 27774 5653 267</li>--}}
                                    {{--</ul>--}}
                                {{--</div>--}}
                                {{--<div class="social">--}}
                                    {{--<ul class="d-flex flex-row align-items-center justify-content-start">--}}
                                        {{--<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>--}}
                                        {{--<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>--}}
                                        {{--<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>--}}
                                    {{--</ul>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    </div>
@endsection