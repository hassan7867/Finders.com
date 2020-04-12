{{--<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">--}}
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Go findee - real estate project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('theme-styles/plugins/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('theme-styles/plugins/OwlCarousel2-2.3.4/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('theme-styles/plugins/OwlCarousel2-2.3.4/owl.theme.default.css') }}" rel="stylesheet">
    <link href="{{ asset('theme-styles/plugins/OwlCarousel2-2.3.4/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('theme-styles/styles/main_styles.css') }}" rel="stylesheet">
    <link href="{{ asset('theme-styles/styles/responsive.css') }}" rel="stylesheet">
</head>
<style>
    .nav-text-custom {
        color: white !important;
        font-weight: bold;
        font-size: 13px;
        text-align: center;
    }

    .call-class {
        color: #6c7079;
        cursor: pointer;
    }

    .call-class:hover {
        color: deepskyblue;
    }

    .top-call {
        color: white;
        cursor: pointer;
    }

    .top-call:hover {
        color: deepskyblue;
    }


    .top-search-bar {
        border-radius: 5px !important;
        box-shadow: white !important;
        background: white !important;
        width: 150px;
    !important;
        padding: 5px !important;
    }

    .active-top-link {
        background: white;
        border-radius: 4px;
        color: #002F34 !important;
    }
</style>
<body onload="checkLoggined()">
<div class="super_container">

    <div class="super_overlay"></div>

    <!-- Header -->
    <header class="header">

        <!-- Header Bar -->
        <div class="header_bar d-flex flex-row align-items-center justify-content-start">
            <div class="header_list">
                <ul class="d-flex flex-row align-items-center justify-content-start">
                    <!-- Phone -->
                    <li class="d-flex flex-row align-items-center justify-content-start">
                        <div><img src="{{asset("theme-styles/images/phone-call.svg")}}" alt=""></div>
                        <span style="font-size: 12px"><a title="call" href="tel:+923360003604" class="top-call">+92 336 0003 604</a></span>
                    </li>
                    <!-- Address -->
                    <li class="d-flex flex-row align-items-center justify-content-start">
                        <div><img src="{{asset("theme-styles/images/placeholder.svg")}}" alt=""></div>
                        <span style="font-size: 12px">Allama Iqbal Town, Lahore, Pakistan.</span>
                    </li>
                    <!-- Email -->
                    <li class="d-flex flex-row align-items-center justify-content-start">
                        <div><img src="{{asset("theme-styles/images/envelope.svg")}}" alt=""></div>
                        <span style="font-size: 12px">info@gofindee.com</span>
                    </li>
                </ul>
            </div>
            <div class="ml-auto d-flex flex-row align-items-center justify-content-start">
                <div class="social">
                    <ul class="d-flex flex-row align-items-center justify-content-start">
                        <li><a target="_blank" href="https://pin.it/qhn42kjjy25ry4"><i class="fa fa-pinterest mt-2"
                                                                                       aria-hidden="true"></i></a></li>
                        <li><a target="_blank"
                               href="https://l.facebook.com/l.php?u=https%3A%2F%2Ffb.me%2Fgofindee&h=AT2NPJUWaEUEmRqM8xcdAO-LOMVwfFz8FauiiNf3pCVV6-MwXgXl2dUfkAIkfT1aNsAQPA2biOm1s7cwzbakxf92gja8zc1Z6nKpHZDF3zkaE6mWgvBo3uJEAXzhDo-bu4-0WQvN6Hj_xzqZyKBLGQ"><i
                                        class="fa fa-facebook mt-2" aria-hidden="true"></i></a></li>
                        <li><a target="_blank" href="#"><i class="fa fa-twitter mt-2" aria-hidden="true"></i></a></li>
                        <li><a target="_blank" href="#"><i class="fa fa-dribbble mt-2" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
                <div class="log_reg d-flex flex-row align-items-center justify-content-start">
                    <ul class="d-flex flex-row align-items-start justify-content-start">
                        <li>
                            <a href="#" class="nav-link dropdown-toggle top-nav-dropdown" data-toggle="dropdown">
                                <img id="login-user" src="{{asset('img/user.svg')}}"
                                     style="width: 20px; height: 20px; display: inline">
                                <span id="loginned-user" style="display: none"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" style="cursor: pointer">
                                <button id="is-not-loginned" data-toggle="modal" data-target="#sign-in-modal"
                                        class="dropdown-item top-nav-link">
                                    <span>Login</span></button>
                                <a id="is-logout" onclick="logout()" class="dropdown-item top-nav-link">
                                    <span>Logout</span></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Header Content -->
        <div class="header_content d-flex flex-row align-items-center justify-content-start">
            <div><img src="{{asset('img/logo.png')}}" style="width: 30px; height: 30px"> <span
                        class="ml-1 font-weight-bold" style="font-size: 20px">GoFindee</span></div>
            <nav class="main_nav">
                <ul class="d-flex flex-row align-items-start justify-content-start">
                    <li onclick="changeNavLink('home')" class="active" id="home"><a href="{{url('/')}}">Home</a></li>
                    <li onclick="changeInternalLink('properties')" id="home"><a href="#properties">Properties</a></li>
                    <li onclick="changeNavLink('add-property')" id="add-property"><a href="{{url('property/create')}}">Add
                            Property</a></li>
                    <li onclick="changeNavLink('about-us')" id="about-us"><a href="{{url('about-us')}}">About us</a>
                    </li>
                    <li onclick="changeNavLink('contact-us')" id="contact-us"><a
                                href="{{url('contact-us')}}">Contact</a></li>
                </ul>
            </nav>
            {{--<div class="submit ml-auto"><a href="#">submit listing</a></div>--}}
            <div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
        </div>

    </header>

    <!-- Menu -->

    <div class="menu text-right">
        <div class="menu_close"><i class="fa fa-times" aria-hidden="true"></i></div>
        <div class="menu_log_reg">
            <div class="log_reg d-flex flex-row align-items-center justify-content-end">
                <ul class="d-flex flex-row align-items-start justify-content-start">
                    <li>
                        <a href="#" class="nav-link dropdown-toggle top-nav-dropdown" data-toggle="dropdown">
                            <img id="login-user1" src="{{asset('img/black-user.svg')}}"
                                 style="width: 20px; height: 20px; color: #1e7e34">
                            <span id="loginned-user1" style="display: none"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" style="cursor: pointer">
                            <button id="is-not-loginned1" data-toggle="modal" data-target="#sign-in-modal"
                                    class="dropdown-item top-nav-link">
                                <span>Login</span></button>
                            <a id="is-logout1" onclick="logout()" class="dropdown-item top-nav-link">
                                <span>Logout</span></a>
                        </div>
                    </li>
                </ul>
            </div>
            <nav class="menu_nav">
                <ul>
                    <li onclick="changeNavLink('home')" class="active" id="home"><a href="{{url('/')}}">Home</a></li>
                    <li onclick="changeInternalLink('properties')" id="home"><a href="#properties">Properties</a></li>
                    <li onclick="changeNavLink('add-property')" id="add-property"><a href="{{url('property/create')}}">Add
                            Property</a></li>
                    <li onclick="changeNavLink('about-us')" id="about-us"><a href="{{url('about-us')}}">About us</a>
                    </li>
                    <li onclick="changeNavLink('contact-us')" id="contact-us"><a
                                href="{{url('contact-us')}}">Contact</a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>
<div>
    @yield('content')
</div>

<footer class="footer">
    <div class="footer_content">
        <div class="container">
            <div class="row">

                <!-- Footer Column -->
                <div class="col-xl-3 col-lg-6 footer_col">
                    <div class="footer_about">
                        <div class="footer_logo"><a href="#" style="color: white">GO FINDEE</a></div>
                        <div class="footer_text">
                            <p>GoFindee is a real estate company. We provide online services to people who want to sell
                                or rent their properties..</p>
                        </div>
                        <div class="social">
                            <ul class="d-flex flex-row align-items-center justify-content-start">
                                <li><a target="_blank" href="https://pin.it/qhn42kjjy25ry4"><i
                                                class="fa fa-pinterest mt-2" aria-hidden="true"></i></a></li>
                                <li><a target="_blank"
                                       href="https://l.facebook.com/l.php?u=https%3A%2F%2Ffb.me%2Fgofindee&h=AT2NPJUWaEUEmRqM8xcdAO-LOMVwfFz8FauiiNf3pCVV6-MwXgXl2dUfkAIkfT1aNsAQPA2biOm1s7cwzbakxf92gja8zc1Z6nKpHZDF3zkaE6mWgvBo3uJEAXzhDo-bu4-0WQvN6Hj_xzqZyKBLGQ"><i
                                                class="fa fa-facebook mt-2" aria-hidden="true"></i></a></li>
                                <li><a target="_blank" href="#"><i class="fa fa-twitter mt-2"
                                                                   aria-hidden="true"></i></a></li>
                                <li><a target="_blank" href="#"><i class="fa fa-dribbble mt-2"
                                                                   aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                        {{--<div class="footer_submit"><a href="#">submit listing</a></div>--}}
                    </div>
                </div>

                <!-- Footer Column -->
                <div class="col-xl-3 col-lg-6 footer_col">
                    <div class="footer_column">
                        <div class="footer_title">Information</div>
                        <div class="footer_info">
                            <ul>
                                <!-- Phone -->
                                <li class="d-flex flex-row align-items-center justify-content-start">
                                    <div><img src="{{asset("theme-styles/images/phone-call.svg")}}" alt=""></div>
                                    <span><a title="call" href="tel:+923360003604"
                                             class="call-class">+92 336 0003 604</a></span>
                                </li>
                                <!-- Address -->
                                <li class="d-flex flex-row align-items-center justify-content-start">
                                    <div><img src="{{asset("theme-styles/images/placeholder.svg")}}" alt=""></div>
                                    <span>Allama Iqbal Town, Lahore, Pakistan.</span>
                                </li>
                                <!-- Email -->
                                <li class="d-flex flex-row align-items-center justify-content-start">
                                    <div><img src="{{asset("theme-styles/images/envelope.svg")}}" alt=""></div>
                                    <span>info@gofindee.com</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Footer Column -->
                <div class="col-xl-3 col-lg-6 footer_col">
                    <div class="footer_links">
                        <div class="footer_title">Properties Types</div>
                        <ul>
                            <li><a href="http://gofindee.com/properties/get/forRent/all/all/all">Properties for rent</a>
                            </li>
                            <li><a href="http://gofindee.com/properties/get/forSale/all/all/all">Properties for sale</a>
                            </li>
                            {{--<li><a href="#">Commercial</a></li>--}}
                            {{--<li><a href="#">Homes</a></li>--}}
                        </ul>
                    </div>
                </div>

                <!-- Footer Column -->
                <div class="col-xl-3 col-lg-6 footer_col">
                    <div class="footer_links">
                        <div class="footer_title">Services</div>
                        <ul>
                            <li><a href="http://gofindee.com/agents">Agent</a></li>
                            <li><a href="http://gofindee.com/projects">Projects</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="footer_bar">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="footer_bar_content d-flex flex-md-row flex-column align-items-md-center align-items-start justify-content-start">
                        <div class="copyright order-md-1 order-2">
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                            All rights reserved
                        </div>
                        {{--<nav class="footer_nav order-md-2 order-1 ml-md-auto">--}}
                        {{--<ul class="d-flex flex-md-row flex-column align-items-md-center align-items-start justify-content-start">--}}
                        {{--<li onclick="changeNavLink('home')" class="active" id="home"><a--}}
                        {{--href="{{url('/')}}">Home</a></li>--}}
                        {{--<li onclick="changeNavLink('add-property')" id="add-property"><a--}}
                        {{--href="{{url('property/create')}}">Add Property</a></li>--}}
                        {{--<li onclick="changeNavLink('about-us')" id="about-us"><a href="{{url('about-us')}}">About--}}
                        {{--us</a></li>--}}
                        {{--<li onclick="changeNavLink('contact-us')" id="contact-us"><a--}}
                        {{--href="{{url('contact-us')}}">Contact</a></li>--}}
                        {{--</ul>--}}
                        {{--</nav>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
</body>
<div class="modal fade" id="sign-in-modal">
    <div class="modal-dialog" style="width: 350px">
        <div class="modal-content" style="background-color: #f3f7fb !important; color: black">
            <div class="modal-header" style="background-color: #f3f7fb !important; color: black">
                <h3>Login</h3>
                <button type="button" class="close" id="close-signIn-modal" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body modal-body-sub_agile">
                    <div class="col-md-12 modal_body_left modal_body_left1">
                        <div>
                            <button onclick="loginFacebook()" style="width: 290px"  href="{{ url('/auth/redirect/facebook') }}" class="form-group btn btn-primary"><i
                                        class="fa fa-facebook"></i> Facebook</button>
                        </div>
                        <div class="mt-2 mb-2 text-center">
                            <b>OR</b>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" name="email" required class="form-control" id="login-email">
                            <span class="mt-1 text-right" style="color: #007bff; float: right; cursor: pointer" onclick="forgetPassword()">forget password?</span>
                        </div>
                        <div>
                            <div class="form-group">
                                <label>Password</label>
                                <input id="login-password" type="password" name="password" required
                                       class="form-control">

                                <span></span>
                            </div>
                            <button class="form-control btn btn-info" onclick="login()">Login</button>
                            <div class="clearfix mt-2 mb-2"></div>
                            <p><b>don't have an account</b><a  href="#" data-toggle="modal" class="ml-2"
                                                       data-target="#signup-modal"
                                                       onclick="closeAuthModal()"> Register Here</a></p>
                        </div>
                    </div>
                    <div class="clearfix"></div>
            </div>
        </div>
        <!-- //Modal content-->
    </div>
</div>


<!-- The Modal -->
<div class="modal fade" id="signup-modal">
    <div class="modal-dialog" style="width: 350px">
        <div class="modal-content" style="background-color: #f3f7fb !important; color: black">
            <div class="modal-header" style="background-color: #f3f7fb !important; color: black">
                <h3>Register</h3>
                <button type="button" class="close" id="close-signUp-modal" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body modal-body-sub_agile">
                <div class="col-md-12 modal_body_left modal_body_left1">
                    <div>
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" id="name" required="" class="form-control">
                            <span></span>
                        </div>
                        <div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" id="email" required="" class="form-control">

                                <span></span>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" id="password" required="" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Phone #</label>
                                <input type="text" id="phoneNumber" required="" class="form-control">
                            </div>
                            <button style="width: 282px" class="form-control btn btn-info" onclick="saveUser()">Submit</button>
                            <div class="clearfix mt-2 mb-2"></div>
                            <p>Already have an account<a href="#" data-toggle="modal" class="ml-2"
                                                         data-target="#sign-in-modal"
                                                         onclick="closeSignupModal()"> Login Here</a></p>
                        </div>
                    </div>

                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- //Modal content-->
    </div>
</div>

<script>
    // top nav link code
    let allLinks = ['home', 'add-property', 'about-us', 'contact-us'];
    if (window.location.href.includes('property/create')) {
        changeNavLink('add-property');
    } else if (window.location.href.includes('about-us')) {
        changeNavLink('about-us');
    } else if (window.location.href.includes('contact-us')) {
        changeNavLink('contact-us');
    } else {
        changeNavLink('home');
    }

    function changeNavLink(link) {
        if (link === 'properties') {
            // window.location.href = "http://gofindee.com/#properties";
            //  return;
        }
        for (let i = 0; i < allLinks.length; i++) {
            document.getElementById(allLinks[i]).classList.remove('active');
        }
        document.getElementById(link).classList.add('active');
    }

    function changeInternalLink(link) {
        if (link === 'properties') {
            window.location.href = "http://gofindee.com/#properties";
        }
    }

    function closeAuthModal() {
        document.getElementById("close-signIn-modal").click()
    }

    function closeSignupModal() {
        document.getElementById("close-signUp-modal").click()
    }

    function saveUser() {
        let name = document.getElementById('name').value;
        let email = document.getElementById('email').value;
        let phoneNumber = document.getElementById('phoneNumber').value;
        let password = document.getElementById('password').value;
        $.ajax({
            type: "POST",  //type of method
            url: "http://gofindee.com/api/user/save",  //your page
            data: {email: email, phone: phoneNumber, password: password, name: name},// passing the values
            success: function (res) {
                res = JSON.parse(res);
                if (res.status) {
                    localStorage.setItem('id', res.id);
                    checkLoggined();
                    document.getElementById('close-signUp-modal').click();
                    successNotification(res.message);
                } else {
                    errorNotification(res.message);
                }
            }
        });
    }

    function login() {
        let email = document.getElementById('login-email').value;
        let password = document.getElementById('login-password').value;
        $.ajax({
            type: "POST",  //type of method
            url: "http://gofindee.com/api/login",  //your page
            data: {email: email, password: password},// passing the values
            success: function (res) {
                res = JSON.parse(res);
                if (res.status) {
                    localStorage.setItem('id', res.id);
                    document.getElementById('close-signIn-modal').click();
                    checkLoggined();
                    successNotification(res.message);
                } else {
                    errorNotification(res.message);
                }
            }
        });
    }

    function checkLoggined() {
        if (!localStorage.hasOwnProperty('id')) {
            document.getElementById('login-user').style.display = 'inline';
            document.getElementById('login-user1').style.display = 'inline';
            document.getElementById('loginned-user').style.display = 'none';
            document.getElementById('loginned-user1').style.display = 'none';
            document.getElementById('is-not-loginned').style.display = 'inline';
            document.getElementById('is-not-loginned1').style.display = 'inline';
            document.getElementById('is-logout').style.display = 'none';
            document.getElementById('is-logout1').style.display = 'none';
        }
        $.ajax({
            type: "GET",  //type of method
            url: `http://gofindee.com/api/user/${localStorage.getItem('id')}/get`,  //your page
            success: function (res) {
                res = JSON.parse(res);
                if (res.status) {
                    document.getElementById('login-user').style.display = 'none';
                    document.getElementById('login-user1').style.display = 'none';
                    document.getElementById('loginned-user').style.display = 'inline';
                    document.getElementById('loginned-user1').style.display = 'inline';
                    document.getElementById('loginned-user').innerHTML = res.name;
                    document.getElementById('loginned-user1').innerHTML = res.name;
                    document.getElementById('is-not-loginned').style.display = 'none';
                    document.getElementById('is-not-loginned1').style.display = 'none';
                    document.getElementById('is-logout').style.display = 'inline';
                    document.getElementById('is-logout1').style.display = 'inline';

                } else {
                    document.getElementById('login-user').style.display = 'inline';
                    document.getElementById('login-user1').style.display = 'inline';
                    document.getElementById('loginned-user').style.display = 'none';
                    document.getElementById('loginned-user1').style.display = 'none';
                    document.getElementById('is-not-loginned').style.display = 'inline';
                    document.getElementById('is-not-loginned1').style.display = 'inline';
                    document.getElementById('is-logout').style.display = 'none';
                    document.getElementById('is-logout1').style.display = 'none';

                }
            }
        });
    }

    function logout() {
        localStorage.clear();
        checkLoggined();
        window.location.reload();
    }

    function forgetPassword()
    {
        let email = document.getElementById('login-email').value;
        $.ajax({
            type: "POST",  //type of method
            url: "http://gofindee.com/api/forgetpassword",  //your page
            data: {email: email},// passing the values
            success: function (res) {
                res = JSON.parse(res);
                if (res.status) {
                    successNotification(res.message);
                } else {
                    errorNotification(res.message);
                }
            }
        });
    }

    function loginFacebook() {
        successNotification('Comming Soon!');
    }

</script>
</html>
