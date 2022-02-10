@extends('layout.layout')
@section('content')
<!--About banner-->
    <section>
        <div class="container py-5">
            <div class="row py-5">
                <div class="col-md-6 d-flex align-items-center">
                    <h1 class="h1 h1-responsive " style="font-size: 70px!important;">
                       Incredible Service, Incredible right.
                            </h1>
                            
                </div>
                <div class="col-md-6">
                    <img src="{{asset('svg/services.svg')}}" class="img img-fluid" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="bg" style="background:;">
        <div class="container py-5">
            <div class="row py-5">
                <div class="col-md-6">
                 <div class="text-white">
                  <h1 class="pb-4">
                    Web Development And Maintanance
                  </h1>
                  <p>
We transform ideas into imaginative, engaging, well structured, all-around developed web platforms for every kind of business
whether it is a startup, a small, or a huge organization. We maintain your website while you focus on your business.                 </p>
                  <a class="btn btn-white waves-effect waves-light" href="{{route('web')}}">See More</a>
                  
                 </div>
              </div>
                <div class="col-md-6">
                    <img src="{{asset('svg/toaplex/web-development.svg')}}" class="img img-fluid" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="" style="background:;">
        <div class="container py-5">
            <div class="row py-5">
                  <div class="col-md-6">
                    <img src="{{asset('svg/toaplex/application.svg')}}" class="img img-fluid" alt="">
                </div>
                <div class="col-md-6">
                 <div class="text-black">
                  <h1 class="pb-4">
                    Appilcation Development And Maintanance
                  </h1>
                  <p>
With the latest software technology and industry experience, we at Toaplex, design fully-equipped smartphone solutions 
for the evolving behavior of customers. 
We integrate advanced features and functionalities in any Android and iOS mobile application we develop. .
                  </p>
                  <a href="{{route('app')}}" class="btn btn-custom waves-effect waves-light">See More</a>
                  
                 </div>
              </div>
              
            </div>
        </div>
    </section>
    <section class="bg" style="background:;">
        <div class="container py-5">
            <div class="row py-5">
                <div class="col-md-6">
                 <div class="text-white">
                  <h1 class="pb-4">
                    Custom Software Development
                  </h1>
                  <p>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore ut maiores ipsa perspiciatis rerum quis provident placeat inventore nemo animi officia itaque, sunt cupiditate. Sit culpa blanditiis necessitatibus beatae dolor.
                  </p>
                  <a class="btn btn-white waves-effect waves-light" href="{{route('soft')}}">See More</a>
                  
                 </div>
              </div>
                <div class="col-md-6">
                    <img src="{{asset('svg/toaplex/custom-software.svg')}}" class="img img-fluid" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="" style="background:;">
        <div class="container py-5">
            <div class="row py-5">
                 <div class="col-md-6">
                    <img src="{{asset('svg/toaplex/search-engine-optimization.svg')}}" class="img img-fluid" alt="">
                </div>
                <div class="col-md-6">
                 <div class="">
                  <h1 class="pb-4">
                    Seo & Digital Marketing
                  </h1>
                  <p>
We create strategies to develop and increase the quality of your website with increased organic traffic by creating
natural backlinks and effective passageways to rank your website highly among your competitors .  </p>
                  <a href="{{route('seo')}}" class="btn btn-custom waves-effect waves-light">See More</a>
                  
                 </div>
              </div>
               
            </div>
        </div>
    </section>
    @endsection