<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>toaplex</title>
    <!-- fav icon -->
    <link rel="icon" href="{{ asset('svg/logo.png') }}" type="image/x-icon">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Google Fonts Roboto -->
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300&display=swap" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="css/mdb.min.css">
    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
    <style>
        .dropdown:hover>.dropdown-menu {
  display: block;
}
.dropdown-toggle::after{
    display:none;
}

    </style>
<link rel="stylesheet" type="text/css" href="{{url('css/slick')}}">
  <link rel="stylesheet" type="text/css" href="./slick/slick-theme.css">

</head>

<body>
    <!--=======header=======-->
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark " style="">
        <!-- Navbar brand -->
        <div class="container">
            <a class="navbar-brand" href="{{url('/')}}">
                <img src="{{ asset('svg/logo.png') }}" alt="">
            </a>
            <!-- Collapse button -->
            <button class="navbar-toggler btn-custom" type="button" data-toggle="collapse" data-target="#basicExampleNav"
                aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Collapsible content -->
            <div class="collapse navbar-collapse" id="basicExampleNav">

                <!-- Links -->
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link pt-4" href="{{url('/')}}">Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pt-4" href="{{route('about')}}">About us</a>
                    </li>

                    <!-- Dropdown -->
      <li class="nav-item dropdown">
        <a
          class="nav-link pt-4 dropdown-toggle"
          href="{{route('all.services')}}"
          id="navbarDropdownMenuLink"
          role="button"
          data-mdb-toggle="dropdown"
          aria-expanded="false"
        >
          Services
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <li><a class="dropdown-item" href="{{route('web')}}">Web Development</a></li>
          <li><a class="dropdown-item" href="{{route('app')}}">App Development</a></li>
          <li>
            <a class="dropdown-item" href="{{route('soft')}}">Custom Software Development</a>
          </li>
          <li>
            <a class="dropdown-item" href="{{route('seo')}}">SEO And Digital Marketing</a>
          </li>
        </ul>
      </li>
                   
                    <!--<li class="nav-item">-->
                    <!--    <a class="nav-link pt-4" href="#">Solutions</a>-->
                    <!--</li>-->
                    <li class="nav-item">
                        <a class="nav-link pt-4" href="#">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{route('contact')}}">
                            <button class="btn btn-custom">Contact us</button>
                        </a>
                    </li>

                </ul>
                <!-- Links -->


            </div>
            <!-- Collapsible content -->
        </div>


    </nav>
    <!--/.Navbar-->
    <!--=======header=======-->
    @yield('content')
    <!-- Footer -->
    <footer class="page-footer font-small white py-5">
        <!-- Footer Links -->
        <div class="container py-4 footer-bg text-center text-md-left">
            <!-- Grid row -->
            <div class="row">

                <!-- Grid column -->
                <div class="col-md-4 mt-md-0 mt-3">
                    <img src="{{ asset('svg/logo.png') }}" alt="">

                    <!-- Content -->

                    <p class="pt-5"> Hyder Bagh No:1 Galli No:02, near Sharifa Masjid, Nanded, Maharashtra 431601.


</p>

                </div>
                <!-- Grid column -->

                <hr class="clearfix w-100 d-md-none pb-3">

                <!-- Grid column -->
                <div class="col-md-4 mb-md-0 mb-3">

                    <!-- Links -->
                    <h5 class=" font-28">Company</h5>

                    <ul class="list-unstyled black-text">
                        <li class="py-2">
                            <a href="#!">Home</a>
                        </li>
                        <li class="py-2">
                            <a href="{{route('about')}}">About us</a>
                        </li>
                        <li class="py-2">
                            <a href="#!">Services</a>
                        </li>
                        <li class="py-2">
                            <a href="#!">Projects</a>
                        </li>
                        <li class="py-2">
                            <a href="#!">Technologies</a>
                        </li>
                        <li class="py-2">
                            <a href="{{route('contact')}}">Contact Us</a>
                        </li>

                    </ul>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 mb-md-0 mb-3">

                    <!-- Links -->
                    <p class="font-weight-bold" style="font-size: 26px!important;">
                        Like what you see?
                        Let’s start a conversation.
                    </p>
                    <p class="font-weight-bold" style="font-size: 32px!important;">
                        +91 7767 908 979<br>
                        +91 8605 261 129
                    </p>
                    <p class="font-weight-bold" style="font-size: 32px!important;">
                        info@toaplex.com
                    </p>

                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->

        </div>
        <!-- Footer Links -->




    </footer>
    <div class="footer-link py-5">
        <div class="container py-3 ">
            <div class="row justify-content-center">
                <div class="col-md-1 col-1">
                    <div  class="social-box  text-center py-2">
                        <img src="{{ asset('svg/facebook.png') }}"  width="13" alt="">
                    </div>
                </div>
                <div class="col-md-1 col-1">
                    <div  class="social-box  text-center py-2">
                    <img src="{{ asset('svg/twitter.png') }}"  width="21" alt="">
                    </div>
                </div>
                <div class="col-md-1 col-1">
                    <div  class="social-box  text-center py-2">
                    <img src="{{ asset('svg/instagram.png') }}" width="21"  alt="">
                    </div>
                </div>
                <div class="col-md-1 col-1">
                    <div  class="social-box  text-center py-2">
                    <img src="{{ asset('svg/linkedin.png') }}" width="21"  alt="">
                    </div>
                </div>
                <div class="col-md-1 col-1">
                    <div  class="social-box  text-center py-2">
                    <img src="{{ asset('svg/github.png') }}" width="21" alt="">
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Footer -->
     <!-- Copyright -->
  <div class="footer-copyright bg text-center py-3">
      <div class="row m-0 p-0">
          <div class="col-md-4">
              
            <ul class="list-inline font-weight-bold pb-0 mb-0">
                <li class="list-inline-item"> <a href="" class=" text-white">Terms & Conditions</a> </li>
                <li class="list-inline-item"><a href="" class=" text-white">Privacy Policy</a></li>
                <li class="list-inline-item"><a href="" class=" text-white">Sitemap</a></li>
            </ul>
          </div>
          <div class="col-md-4 text-white">
            <p class="pb-0 mb-0 font-weight-bold" style="font-size:14px!important;">© 2020 <a href="" class="text-white"><u>Toaplex LLC </u> </a> rights reserved.</p>
          </div>
          <div class="col-md-4 text-white">
                <p class="pb-0 mb-0 font-weight-bold" style="font-size:14px!important;">
                    Made with love in IND 
                </p>
          </div>
      </div>
  </div>
  
  <!-- Copyright -->
</body>
<!-- jQuery -->

<script type="text/javascript" src="js/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.8/typed.min.js"></script>
<script>
$(document).ready(function(){

new Typed('#typed',{
  strings : ['excellence ','Quality','Value'],
  typeSpeed : 200,
  delaySpeed : 90,
  loop : true
});
});
</script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="js/mdb.min.js"></script>
<!-- Your custom scripts (optional) -->
<script type="text/javascript"></script>

</html>
