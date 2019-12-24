<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
{{--<link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}">--}}
<style>
    .nav-text-custom {
        color: white !important;
        font-weight: bold;
        font-size: 13px;
        text-align: center;
    }

    .top-search-bar{
        border-radius: 5px !important;
        box-shadow: white !important;
        background: white !important;
        width: 150px; !important;
        padding: 5px !important;
    }

    .active-top-link{
        background: white; border-radius: 4px; color: #002F34 !important;
    }
</style>


<nav class="navbar navbar-expand-lg navbar-light" style="background: #002F34; padding: 5px !important;">
    <a class="navbar-brand nav-text-custom" href="#" style="font-size: 15px">Finders</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item ml-5" onclick="changeNavLink('home')">
                <a class="nav-link nav-text-custom" href="{{url('/')}}" id="home" >Home</a>
            </li>
            <li class="nav-item ml-3" onclick="changeNavLink('add-property')">
                <a class="nav-link nav-text-custom" href="{{url('property/create')}}" id="add-property">Add Property</a>
            </li>
            <li class="nav-item ml-3" onclick="changeNavLink('about-us')">
                <a class="nav-link nav-text-custom" href="#" id="about-us">About Us</a>
            </li>
            <li class="nav-item ml-3" onclick="changeNavLink('contact-us')">
                <a class="nav-link nav-text-custom" href="{{url('/wizard')}}" id="contact-us">Contact Us</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="mr-sm-2 top-search-bar" type="search" placeholder="Enter Property ID" aria-label="Search">
            <button class="btn btn-outline my-2 my-sm-0" style="background: white; font-size: 12px" type="submit">Find</button>
        </form>
    </div>
</nav>

<div>
    @yield('content')
</div>
<script>
    // top nav link code
    let allLinks = ['home', 'add-property', 'about-us', 'contact-us'];
    if(window.location.href.includes('property/create')){
        changeNavLink('add-property');
    }else{
        changeNavLink('home');
    }
    function changeNavLink(link){
        for (let i=0;i<allLinks.length;i++){
            document.getElementById(allLinks[i]).classList.remove('active-top-link');
        }
        document.getElementById(link).classList.add('active-top-link');
    }
</script>
</html>
