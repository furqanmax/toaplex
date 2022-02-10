@extends('layout.layout')
@section('content')
<!--About banner-->
    <section>
        <div class="container py-5">
            <div class="row py-5">
                <div class="col-md-6 d-flex align-items-center">
                    <h1 class="h1 h1-responsive" style="font-size: 70px!important;">
                       The goal is to build your
business          
                            </h1>
                </div>
                <div class="col-md-6">
                    <img src="{{asset('svg/newicon/about.svg')}}" class="img img-fluid" alt="">
                </div>
            </div>
        </div>
    
    </section>
    <!--about banner-->
    <!--mission vision-->
    <section class="my-5">
        <div class="container py-5">
            <div class="row">
                <!--First column-->
      <div class="col-md-6 mb-4">

        <!-- Card -->
        <a href="#!" class="card hoverable service-card">
          
          <!-- Card content -->
          <div class="card-body">

          	<div class="media">
              <span class="card-img-100 d-inline-flex justify-content-center align-items-center rounded-circle grey lighten-4 mr-4">
               <img src="{{asset('svg/newicons/about-us/mission.svg')}}">
              </span>
              <div class="media-body">
                <h5 class="dark-grey-text mb-3 font-32">Our Mission</h5>
                <p class="font-weight-light text-muted mb-0">To enable our clients through technological means which can make them thrive in their areas of desire. </p>
              </div>
            </div>
            
          </div>

        </a>
        <!-- Card -->

      </div>
      <!--First column-->
      <div class="col-md-6 mb-4">

        <!-- Card -->
        <a href="#!" class="card hoverable service-card">
          
          <!-- Card content -->
          <div class="card-body">

          	<div class="media">
              <span class="card-img-100 d-inline-flex justify-content-center align-items-center rounded-circle grey lighten-4 mr-4">
               <img src="{{asset('svg/newicons/about-us/vision.svg')}}">
              </span>
              <div class="media-body">
                <h5 class="font-32 dark-grey-text mb-3">Our Vision</h5>
                <p class="font-weight-light text-muted mb-0">Mastery for filling gaps between demand and supply. Developing a new outlook towards web based services which can enhance user experience across the board. </p>
              </div>
            </div>
            
          </div>

        </a>
        <!-- Card -->

      </div>
            </div>
        </div>
    </section>
    <!--story-->
    <section class="my-5 py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{asset('svg/whyus/story.svg')}}" class="img img-fluid" alt="">

                </div>
                <div class="col-md-6">
                   <div class="pl-5">
                    <h1 class="pb-4">
                        Our Story
                    </h1>
                    <p>
Toaplex is one of the best website development and maintenance companies.
We expertise in mobile application development and are well-known for premium 
user experience with custom software solutions. We set a new high of success in the business of their customers.
                   </p>
                    <p>
                    </p>
                   </div>
                </div>
            </div>
        </div>
    </section>
     <!--addition features-->
    <section class=" py-4" style="background:#f8f9fa;">
        <div class="features py-5">
            <h3 class="text-center pb-4">Why Choose Us</h3>
                        <!--<img src="https://kstatic.googleusercontent.com/files/dff77e92453f637ade83c0a630299ab95992ab1516063ed0ca9431118eaadd3e89cec4fcf7188c76c1fa4c824383bb76d641e52cfb81b878f3c1b69bf5351fbd" style="position:absolute;">-->

            <div class="row m-0 px-5 py-3 lighten-3">
                <div class="col-lg-4 col-md-4 ">
                    <img src=" {{asset('svg/why-choose/creativity.svg')}}" class="mb-2">
                    <h4 class="font-weight-bold mb-3 " style="font-size:22px!important;">Creativity never Esc</h4>
                    <p class="text-muted  ">
The goal is to create, adapt, develop and test applications that fulfill client’s specific needs.
The perfect combination of our technology and techniques to manage the development, support, 
and modernization of applications exceed all your expectations with a guaranteed level of quality.
                  </p>
                  </div>
                <div class="col-lg-4 col-md-4 ">
                                        <img src=" {{asset('svg/why-choose/we-can-do-it-right.svg')}}" class="mb-2">

                    <h4 class="font-weight-bold mb-3 " style="font-size:22px!important;">We do it right when no one is looking</h4>
                    <p class="text-muted  ">
We deliver our services cost-effectively within the time of captivity. We raise the bar of business.
We aim to keep your website secure and updated, which our maintenance programs ensure so that your
website would not be a challenge for your business growth.
We include all kinds of website maintenance and support services.
We ensure both the short and long-term success of your online marketing.

 </p>
                    
                  </div>
                <div class="col-lg-4 col-md-4 ">
                    <img src=" {{asset('svg/why-choose/rule-of-thumb.svg')}}" class="mb-2">

                    <h4 class="font-weight-bold mb-3 " style="font-size:22px!important;"> Our rule of thumb is to build a site for users, not spiders
</h4>
                    <p class="text-muted">
We provide you with fresh content with updated frequencies to boost your ranking on Major Search Engines
(like Google, Yahoo, Bing, etc.). The SEO prefers the updated content and makes your website rank higher than your competitors.
</p>
                  </div>
            </div>
        </div>
    </section>
    <!--addition features-->
@endsection