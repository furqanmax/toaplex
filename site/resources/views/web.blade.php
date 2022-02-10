@extends('layout.layout')
@section('content')
    <!--About banner-->
    <section>
        <div class="container py-5">
            <div class="row py-5">
                <div class="col-md-6 ">
                    <h1 class="h1 h1-responsive " >
                     Web Development and Maintanance
        
                            </h1>
                            <p>
                          	With the cutting edge technology we help you craft a signified website, web-tools, web application development etc. with 100% project delivery.




                            </p>
                            <a href="">Consult with our Expert</a>
                </div>
                <div class="col-md-6">
                    <img src="{{asset('svg/caa.png')}}" class="img img-fluid" alt="">
                </div>
            </div>
        </div>
    
    </section>
    <!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark white" style="box-shadow: none;">
<div class="container" style="border-top:1px solid rgba(0, 0, 0, 0.336);">
  <!-- Navbar brand -->

 

  <!-- Collapsible content -->
  <div class="" id="basicExampleNav" >

    <!-- Links -->
    <ul class="navbar-nav ml-auto ">
      <li class="nav-item active">
        <a class="nav-link black-text px-3" href="#webdevelopment">Web Development
          <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link black-text px-3" href="#ourexpert">Our Expertise</a>
      </li>
      <li class="nav-item">
        <a class="nav-link black-text px-3"  href="#whytoaplex">Why Toaplex</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link black-text px-3"  href="#webprocess">Web Development Process</a>
      </li>
      <li class="nav-item">
        <a class="nav-link black-text px-3"  href="#technolgies">Web Techonologies</a>
      </li>

     

    </ul>
    <!-- Links -->

   
  </div>
  <!-- Collapsible content -->
</div>


</nav>
<!--/.Navbar-->
    <!--about banner-->
    <section class="my-5 py-5" id="webdevelopment">
      <div class="container">
          <div class="row">
              <div class="col-md-6">
                  <img src="{{asset('svg/toaplex/web-development.svg')}}" class="img img-fluid" alt="">

              </div>
              <div class="col-md-6">
                 <div class="pl-5">
                  <h1 class="pb-4">
                    Web Development And Maintanance
                  </h1>
                  <p>
Toaplex’s website developers are in the business of delivering customized, fully
integrated Web development solutions for you at an affordable cost making it the best
web development company in India.
                 </p>
                  <p>
Our responsive websites speak for themselves. With the best graphic designs,
built and tested to ensure a seamless user experience on smartphones (Android &
iOS), Tablets, Desktops, and other devices, we integrate a powerful and intuitive web
and e-commerce platform to give you more control over business workflows.                   </p>
                 </div>
              </div>
          </div>
      </div>
  </section>
    <section class="my-5" id="ourexpert">
    <div class="container">
      <h1 class="text-center pb-4">
        Our Expertise
      </h1>
      <div class="row">
                  <div class="col-lg-3 col-md-3 text-center">
            <img src="{{asset('svg/web-development/Group 262.svg')}}" >
          <h4 class="font-weight-bold " style="font-size:22px!important;">
           Dynamic CMS Website Development

          </h4>
          
        </div>
        <!--<div class="col-lg-3 col-md-3 text-center">-->
        <!--    <img src="{{asset('svg/web-development/dynamic.svg')}}"  >-->
        <!--  <h4 class="font-weight-bold " style="font-size:22px!important;">-->
        <!--    Dynamic CMS Website Development-->

        <!--  </h4>-->
          
        <!--</div>-->
        <div class="col-lg-3 col-md-3 text-center">
            <img src="{{asset('svg/web-development/static.svg
')}}" >
          <h4 class="font-weight-bold " style="font-size:22px!important;">
            Static Website<br> Development

          </h4>
          
        </div>
        <div class="col-lg-3 col-md-3 text-center">
            <img src="{{asset('svg/web-development/e-com.svg')}}"  >
          <h4 class="font-weight-bold " style="font-size:22px!important;">
           eCommerce Store Development

          </h4>
          
        </div>
        <div class="col-lg-3 col-md-3 text-center">
            <img src="{{asset('svg/web-development/web-application.svg
')}}" >
          <h4 class="font-weight-bold " style="font-size:22px!important;">
Website Applications Development
          </h4>
          
        </div>
      </div>
    </div>
  </section>
  <section class="my-5 py-5" id="whytoaplex">
      <div class="container">
          <div class="row">
              
              <div class="col-md-6">
                 <div class="">
                  <h1 class="pb-4">
                    Why Toaplex 
                  </h1>
                  <p>
Innovate your business with Toaplex for consistent high-quality results with a robust team, highly cost-effective world-class solutions, and transparent project management with maximum adherence to deadline.
                  </p>
                  <p>
By initiating your business with Toaplex you’ll get a personalized and skilled team backing you up round the clock. Customer-oriented process, designed to reduce the business operation costing, and offering you a competitive edge. Starting from a deep research on the requirement to continuous support and update after the launch of the product.
                  </p>
                 </div>
              </div>
              <div class="col-md-6">
                  <img src="{{asset('svg/whyus/web.svg')}}" class="img img-fluid" alt="">

              </div>
          </div>
      </div>
  </section>
  <!--process-->
      <section class="my-5" id="webprocess">
    <div class="container">
      <h1 class="text-center pb-4">
        Web Development Process
      </h1>
       <div class="row">
    <div class="col-md-3">
      <div class="card card-process m-auto text-center">
        <img class="m-auto " src="{{asset('svg/web-development/planing.svg')}}" style="width:70px;" alt="Sketch &amp; Design">
      </div>
      <div class="content text-center">
          <h6 style="font-size:28px!important;" class="pt-3">
              Planning
          </h6>
            <p>
                  To find the best possible solution for your requirement with the updated technology.

            </p>
      </div>
      
    </div>
    <div class="col-md-3">
      <div class="card card-process m-auto text-center">
        <img class="m-auto " src="{{asset('svg/web-development/desiging.svg')}}" style="width:70px;" alt="Sketch &amp; Design">
      </div>
      <div class="content text-center">
          <h6 style="font-size:28px!important;" class="pt-3">
              Designing
          </h6>
            <p>
                 We don’t use pencils to sketch, code is what we do. We turn the software specifications into a design plan. “What do you want?”

            </p>
      </div>
      
    </div>
    <div class="col-md-3">
      <div class="card card-process m-auto text-center">
        <img class="m-auto " src="{{asset('svg/web-development/development.svg')}}" style="width:70px;" alt="Sketch &amp; Design">
      </div>
      <div class="content text-center">
          <h6 style="font-size:28px!important;" class="pt-3">
              Development
          </h6>
            <p>
                  Implementing the greatest possible solution to fulfill your requirements at its best.


            </p>
      </div>
      
    </div>
    <div class="col-md-3">
      <div class="card card-process m-auto text-center">
        <img class="m-auto " src="{{asset('svg/web-development/launch.svg')}}" style="width:70px;" alt="Sketch &amp; Design">
      </div>
      <div class="content text-center">
          <h6 style="font-size:28px!important;" class="pt-3">
              Launch
          </h6>
            <p>
                  Successfully launching the website. With complete maintenance cycle and support 24*7.


            </p>
      </div>
      
    </div>
  </div>
      </div>
      </section>

  <!--technologies-->
  <section class="my-5 py-5" style="background:#FAFAFA;" id="technolgies">
    <div class="container py-3">
      <div class="row">
        <div class="col-md-2">
          <img src="https://azper.ca/images/nutech/technology/php-logo.png" width="80" alt="">
          
        </div>
        <div class="col-md-2">
          <img src="https://azper.ca/images/nutech/technology/Vector.png" width="80" alt="">
          
        </div>
        <div class="col-md-2">
          <img src="https://azper.ca/images/nutech/technology/wordpress.png" width="80" alt="">
          
        </div>
        <div class="col-md-2">
          <img src="https://azper.ca/images/nutech/technology/prestashop%20logo.png"  width="80"alt="">
          
        </div>
        <div class="col-md-2">
          <img src="https://azper.ca/images/nutech/technology/nodejs.png" alt="" width="80">
          
        </div>
        <div class="col-md-2">
          <img src="https://azper.ca/images/nutech/technology/react%20native%20logo%201.png" width="80" alt="">
          
        </div>
      </div>
    </div>
  </section>
<!-- JQuery -->
@endsection