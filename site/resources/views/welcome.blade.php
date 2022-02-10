@extends('layout.layout')
@section('content')
    <!--====banner====-->
    <section class="" style="background:#fafafa;">
        <div class="container ">
            <div class="baner-text py-5">
                <div class="row py-5 ">
                    <div class="col-md-7">
                        <h1 class="h1 h1-responsive">
Innovation that Ignites,
 a creation that marks <span id="typed"></span> 

<!--| (quality, value)-->
</h1>
                        <p>
                         We deliver website and mobile app development services to global businesses since 2017, with 100% project
                         delivery success. Hire the best programmers at affordable prices.
Our work spans in every direction from Consultation, Designing, Developing, Maintaining, and Optimizing your Business Process.
.
                        </p>
                        <div class="">
                            <a href="" class="btn btn-border ">Contact us</a>
                            <a href="" class="btn btn-custom">Find out how we can help you</a>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <img src="{{asset('svg/toaplex/banner.svg')}}" class="img d-none d-lg-block d-md-block" width="600">
                        </div>
                        <div class="col-md-5 mt-4">
                        <img src="{{asset('svg/toaplex/banner.svg')}}" class="img img-fluid d-none " >
                        </div>
                        
                </div>
            </div>
        </div>
    </section>
    <!--====banner====-->
    <!--========about us=================--->
    <section class="about-us  ">
        <div class="container py-5">
            <div class="row py-5">
                <div class="col-md-6 d-flex align-items-center">
                    <img src="{{ asset('svg/toaplex/about-us.svg') }}" class="img img-fluid" alt="">
                </div>
                
                <div class="col-md-6">
                    <h1 class="h1 h1-responsive pb-2 pt-4">
                       You want a partner, not a
developer
                    </h1>
                    <p class="pb-2">
                       For better understanding and workflow,
we impart our clients all the technical
knowledge required for web
development and web designing at their
best.

                    </p>
                    <p>
                      Our strategy management, designing,
and web developing teams are here to
create all you ever wanted for a healthy
user experience.

                    </p>
                    <p>
                        We make it a highlight to treat our customers and representatives with the most reliability,
                        courtesy, and regard as they were our own family.

                    </p>
                </div>
            </div>
        </div>

    </section>
    <!--========about us=================--->
    <!--==============core services============-->
    <section class="mt-5 pt-5 d-none d-md-block d-lg-block">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 text-right h-bg ">
                    <h3 class="text-white mb-0 ">Core</h3>
                </div>
                <div class="col-md-6 m-0 p-0">
                    <h3 class="mb-0 ">Services</h3>
                </div>
            </div>
        </div>

    </section>
     <div class="container-fluid h-bg d-block d-lg-none d-md-none d-sm-none  ">
                                <h3 class="text-white mb-0 ">Core Services</h3>

        </div>
    <section class="mb-5 " style="background: #FAFAFA">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-4 col-md-6  ">
                    <!-- Card -->
                    <div class="card py-4 service-card">

                        <!-- Card content -->
                        <div class="card-body" style="background-image: url('svg/service1.png')">
                            <!-- Card image -->
                            <img src="{{ asset('svg/newicons/web.svg') }}" width="" alt="Website_development">
                            <h4 class="service-card-title py-4 mb-0">Web<br>
                                Development</h4>
                            <!-- Title -->
                            <!-- Text -->
                            <p class="service-card-content pt-0 mt-0">We transform ideas into imaginative, engaging, well structured,
                            all-around developed web platforms for every kind of business whether it is a startup, a small, or a huge
                            organization....
                            <!--We maintain your website while you focus on your business.-->
</p>
                            <!-- Button -->
                            <a href="{{route('web')}}" class="black-text pt-4" style="letter-spacing: 0.5rem;">EXPLORE <i
                                    class="fas fa-angle-right"></i></a>

                        </div>

                    </div>
                    <!-- Card -->

                </div>
                <div class="col-lg-4 col-md-6  ">
                    <!-- Card -->
                    <div class="card py-4 service-card">

                        <!-- Card content -->
                        <div class="card-body" style="background-image: url('svg/service1.png')">
                            <!-- Card image -->
                            <img src="{{ asset('svg/newicons/app.svg') }}" width="" alt="aaplication_development">
                            <h4 class="service-card-title py-4 mb-0">Application<br>
                                Development</h4>
                            <!-- Title -->
                            <!-- Text -->
                            <p class="service-card-content pt-0 mt-0">With the latest software technology and industry experience, 
                            we at Toaplex, design fully-equipped smartphone solutions for the evolving behavior of customers.
                            We integrate advanced features and functionalities ....
                            <!--in any Android and iOS mobile application we develop. -->

.</p>
                            <!-- Button -->
                            <a href="{{route('app')}}" class="black-text pt-4" style="letter-spacing: 0.5rem;">EXPLORE <i
                                    class="fas fa-angle-right"></i></a>

                        </div>

                    </div>
                    <!-- Card -->

                </div>
                <div class="col-lg-4 col-md-6  ">
                    <!-- Card -->
                    <div class="card py-4 service-card">

                        <!-- Card content -->
                        <div class="card-body" style="background-image: url('svg/service1.png')">
                            <!-- Card image -->
                            <img src="{{ asset('svg/newicons/Group 396.svg') }}" width="" alt="seo_and_digital_marketing">
                            <h4 class="service-card-title py-4 mb-0">Seo &<br>
                                Digital Marketing</h4>
                            <!-- Title -->
                            <!-- Text -->
                            <p class="service-card-content pt-0 mt-0">We create strategies to develop and increase the quality of your
                            website with increased organic traffic by creating natural backlinks and effective passageways to rank your
                            website highly among your competitors....
.</p>
                            <!-- Button -->
                            <a href="{{route('seo')}}" class="black-text pt-4" style="letter-spacing: 0.5rem;">EXPLORE <i
                                    class="fas fa-angle-right"></i></a>

                        </div>

                    </div>
                    <!-- Card -->

                </div>
            </div>
            <div class="text-center">
                <a href="{{route('contact')}}" class="btn btn-custom mt-5">Contact us</a>
            </div>
        </div>
    </section>
    <!--==============core services---============-->
    <!--==============custom software---============-->
    <section class="about-us">
        <div class="container">
            <div class="software-heading">
                <h3 class="h3 h3-responsive pb-0 mb-0 text-center">
                    Need a solution for your business problems? You got it!
                </h3>
                <p class="text-center  pt-2">
                  Meet your specific use, case, budget, and timeline with our Custom Software Development Service.

                </p>
            </div>
            <div class="software-boxes py-4">
                <div class="row">
                    <div class="col-md-4">
                        <!-- Card -->
                        <div class="card card-cascade wider reverse">

                            <!-- Card image -->
                            <div class="view view-cascade overlay">
                                <img class="card-img-top" src="{{ asset('svg/crm.png') }}" alt="">
                                <a href="#!">
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>

                            <!-- Card content -->
                            <div class="card-body card-body-cascade py-4">

                                <!-- Title -->
                                <h4 class="font-weight-bold service-card-title">CRM</h4>
                                <!-- Subtitle -->
                                <!-- Text -->
                                <p class="card-text service-card-content py-2">We help you build a customer-centric business that fancies solid customer relationships to create a customer experience that will lead to outstanding growth by making more informed and better decisions based on real-time sales and marketing data.

                                </p>
                                <div class="">
                                    <a href="" class="btn btn-border font-weight-bold">View more</a>
                                </div>
                            </div>

                        </div>
                        <!-- Card -->
                    </div>
                     <div class="col-md-4">
                        <!-- Card -->
                        <div class="card card-cascade wider reverse">

                            <!-- Card image -->
                            <div class="view view-cascade overlay">
                                <img class="card-img-top" src="{{ asset('svg/toaplex/food.svg') }}" alt="">
                                <a href="#!">
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>

                            <!-- Card content -->
                            <div class="card-body card-body-cascade py-4">

                                <!-- Title -->
                                <h4 class="font-weight-bold service-card-title">Food and Beverages</h4>
                                <!-- Subtitle -->
                                <!-- Text -->
                                <p class="card-text service-card-content py-2">Manage the streamline of your Food and Beverage orders 
                                quickly and with ease. You can track vital details and at the same time can share them with your client and staff members.

                                </p>
                                <div class="">
                                    <a href="" class="btn btn-border font-weight-bold">View more</a>
                                </div>
                            </div>

                        </div>
                        <!-- Card -->
                    </div>
                     <div class="col-md-4">
                        <!-- Card -->
                        <div class="card card-cascade wider reverse">

                            <!-- Card image -->
                            <div class="view view-cascade overlay">
                                <img class="card-img-top" src="{{ asset('svg/toaplex/e-learning.svg ') }}" alt="">
                                <a href="#!">
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>

                            <!-- Card content -->
                            <div class="card-body card-body-cascade py-4">

                                <!-- Title -->
                                <h4 class="font-weight-bold service-card-title">E-learning</h4>
                                <!-- Subtitle -->
                                <!-- Text -->
                                <p class="card-text service-card-content py-2">We are here to give you the best platform, an optimal
                                balance of impactful design and up-to-date technology so that none of your knowledge shines apart. 
 
                                </p>
                                <div class="">
                                    <a href="" class="btn btn-border font-weight-bold">View more</a>
                                </div>
                            </div>

                        </div>
                        <!-- Card -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==============custom software---============-->
    <!--Portfolio-->
    <section class="mt-5 pt-5 d-none d-md-block d-lg-block">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 text-right h-bg ">
                    <h3 class="text-white mb-0 ">Portfolio that </h3>
                </div>
                <div class="col-md-6 m-0 p-0">
                    <h3 class="mb-0 ">speak!</h3>
                </div>
            </div>
        </div>
        

    </section>
    <div class="container-fluid h-bg d-block d-lg-none d-md-none d-sm-none  ">
                                <h3 class="text-white mb-0 text-center">Portfolio that speak!</h3>

        </div>
    <section>
        <div class="row m-0 p-0">
            <div class="col-md-4 " style="border-right:4px solid #fafafa;">
                <img src="{{ asset('svg/caa.png') }}" class="img img-fluid">
            </div>
            <div class="col-md-4 " style="border-right:4px solid #fafafa;">
                <img src="{{ asset('svg/concordway.png') }}" class="img img-fluid">
            </div>
            <div class="col-md-4 " style="" >
                <img src="{{ asset('svg/crc-ops.png') }}" class="img img-fluid">
            </div>
        </div>
    </section>
<!--    <section class="">-->
<!--         <div class="py-5">-->
<!--           <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">-->
<!--  <div class="carousel-inner">-->
<!--    <div class="carousel-item active">-->
<!--       <div class="row px-5 m-0">-->
                        
<!--                        <div class="col-md-6 ">-->
<!--                            <h3>-->
<!--                                The Space Mark-->
<!--                            </h3>-->
<!--                            <p class="py-3">-->
<!--                                We give the utmost importance to understand and document client’s inputs, design, and-->
<!--                                branding preferences. And clarify all the open-ended points to establish a precise and clear-->
<!--                                idea about both clients’ and project’s goals. We work in a collaborative approach involving-->
<!--                                key stakeholders to bring alignment in the business process.-->
<!--                            </p>-->
<!--                            <div class="">-->
<!--                                <a href="" class="btn btn-custom text-uppercase">View Portfolio</a>-->
<!--                                <a href="" class="btn btn-border text-uppercase">Contact us</a>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="col-md-6">-->
<!--                            <img src="{{ asset('svg/tsm.png') }}" class="img img-fluid" alt="">-->

<!--                        </div>-->
<!--                    </div>-->
<!--    </div>-->
<!--    <div class="carousel-item">-->
<!--      <div class="row px-5 m-0">-->
                        
<!--                        <div class="col-md-6 ">-->
                            
<!--                            <h3>-->
<!--                                Late Night Pizza-->
<!--                            </h3>-->
<!--                            <p class="py-3">-->
<!--                                We give the utmost importance to understand and document client’s inputs, design, and-->
<!--                                branding preferences. And clarify all the open-ended points to establish a precise and clear-->
<!--                                idea about both clients’ and project’s goals. We work in a collaborative approach involving-->
<!--                                key stakeholders to bring alignment in the business process.-->
<!--                            </p>-->
<!--                            <div class="">-->
<!--                                <a href="" class="btn btn-custom text-uppercase">View Portfolio</a>-->
<!--                                <a href="" class="btn btn-border text-uppercase">Contact us</a>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="col-md-6">-->
<!--                            <img src="{{ asset('svg/latenightpizza.png') }}" class="img img-fluid" alt="">-->

<!--                        </div>-->
<!--                    </div>-->
<!--    </div>-->
    <!--<div class="carousel-item">-->
      
    <!--</div>-->
<!--  </div>-->
<!--  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide=Now is the Time to
"prev">-->
<!--    <span class="carousel-control-prev-icon" aria-hidden="true"></span>-->
<!--    <span class="sr-only">Previous</span>-->
<!--  </a>-->
<!--  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">-->
<!--    <span class="carousel-control-next-icon" aria-hidden="true"></span>-->
<!--    <span class="sr-only">Next</span>-->
<!--  </a>-->
<!--</div>-->
         
<!--        </div>-->
<!--    </section>-->
    <!--<section>-->
    <!--    <div class="portfolio">-->
    <!--        <ul class="nav nav-tabs" id="myTab" role="tablist">-->
    <!--            <li class="nav-item">-->
    <!--                <a class="nav-link tabs-link active p-0 m-0" id="portfolio-tab" data-toggle="tab" href="#portfolio"-->
    <!--                    role="tab" aria-controls="portfolio" aria-selected="true">-->
    <!--                    <img src="{{ asset('svg/tsm.png') }}" width="250" alt="">-->
    <!--                </a>-->
    <!--            </li>-->
    <!--            <li class="nav-item ">-->
    <!--                <a class="nav-link tabs-link m-0 p-0" id="portfolio2-tab" data-toggle="tab" href="#portfolio2"-->
    <!--                    role="tab" aria-controls="portfolio2" aria-selected="false">-->
    <!--                    <img src="{{ asset('svg/udial.png') }}" width="250" alt="">-->
    <!--                </a>-->
    <!--            </li>-->
    <!--            <li class="nav-item ">-->
    <!--                <a class="nav-link tabs-link m-0 p-0" id="portfolio3-tab" data-toggle="tab" href="#portfolio3"-->
    <!--                    role="tab" aria-controls="portfolio3" aria-selected="false">-->
    <!--                    <img src="{{ asset('svg/ziroot.png') }}" width="250" alt="">-->
    <!--                </a>-->
    <!--            </li>-->
    <!--            <li class="nav-item ">-->
    <!--                <a class="nav-link tabs-link m-0 p-0" id="portfolio5-tab" data-toggle="tab" href="#portfolio5"-->
    <!--                    role="tab" aria-controls="portfolio5" aria-selected="false">-->
    <!--                    <img src="{{ asset('svg/crc.png') }}" width="250" alt="">-->
    <!--                </a>-->
    <!--            </li>-->
    <!--            <li class="nav-item ">-->
    <!--                <a class="nav-link tabs-link m-0 p-0" id="portfolio6-tab" data-toggle="tab" href="#portfolio6"-->
    <!--                    role="tab" aria-controls="portfolio6" aria-selected="false">-->
    <!--                    <img src="{{ asset('svg/latenightpizza.png') }}" width="250" alt="">-->
    <!--                </a>-->
    <!--            </li>-->
    <!--            <li class="nav-item ">-->
    <!--                <a class="nav-link tabs-link m-0 p-0" id="portfolio4-tab" data-toggle="tab" href="#portfolio4"-->
    <!--                    role="tab" aria-controls="portfolio4" aria-selected="false">-->
    <!--                    <img src="{{ asset('svg/quick.png') }}" width="250" alt="">-->
    <!--                </a>-->
    <!--            </li>-->

    <!--        </ul>-->
    <!--        <div class="tab-content py-5" style="background: #F0F4FF;" id="myTabContent">-->
    <!--            <div class="tab-pane fade show active" id="portfolio" role="tabpanel" aria-labelledby="portfolio-tab">-->
    <!--                <div class="row px-5 m-0">-->
    <!--                    <div class="col-md-5">-->
    <!--                        <img src="{{ asset('svg/tsm.png') }}" class="img img-fluid" alt="">-->

    <!--                    </div>-->
    <!--                    <div class="col-md-6 ">-->
    <!--                        <h3>-->
    <!--                            The Space Mark-->
    <!--                        </h3>-->
    <!--                        <p class="py-3">-->
    <!--                            We give the utmost importance to understand and document client’s inputs, design, and-->
    <!--                            branding preferences. And clarify all the open-ended points to establish a precise and clear-->
    <!--                            idea about both clients’ and project’s goals. We work in a collaborative approach involving-->
    <!--                            key stakeholders to bring alignment in the business process.-->
    <!--                        </p>-->
    <!--                        <div class="">-->
    <!--                            <a href="" class="btn btn-custom text-uppercase">View Portfolio</a>-->
    <!--                            <a href="" class="btn btn-border text-uppercase">Contact us</a>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->

    <!--            </div>-->
    <!--        </div>-->
    <!--</section>-->
    <!--Portfolio-->
    <!--Our Process-->
    <section class="my-5 py-5">
        <div class="container">
            <h3 class=" text-center pb-3">
                Our process
            </h3>

            <div class="row ">
                <div class="col-md-3">
                    <ul class="nav nav-tabs tab-process" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link  nav-process py-3 active" id="home-tab" data-toggle="tab" href="#home"
                                role="tab" aria-controls="home" aria-selected="true">1. Exploring Workshop </a>
                                </li>
                        <li class="nav-item">
                            <a class="nav-link nav-process py-3" id="Planning-tab" data-toggle="tab" href="#Planning"
                                role="tab" aria-controls="Planning" aria-selected="false">2. Planning </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-process py-3" id="Designing-tab" data-toggle="tab" href="#Designing"
                                role="tab" aria-controls="Designing" aria-selected="false">3. Designing </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-process py-3" id="Developing-tab" data-toggle="tab" href="#Developing"
                                role="tab" aria-controls="Developing" aria-selected="false">4. Developing </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-process py-3" id="Testing-tab" data-toggle="tab" href="#Testing"
                                role="tab" aria-controls="Testing" aria-selected="false">5. Testing </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-process py-3" id="Maintenance-tab" data-toggle="tab" href="#Maintenance"
                                role="tab" aria-controls="Maintenance" aria-selected="false">6. Maintenance </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-9">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row">
                                <div class="col-md-5 m-0 p-0 d-flex align-items-center" style="background:#fafafa;">
                                    <img src="{{ asset('svg/toaplex/explore-workshop.svg') }}"  class="img img-fluid"
                                        alt="">
                                </div>

                                <div class="col-md-7 m-0 p-0">
                                    <div class="card p-5 service-card">
                                        <h3 class="font-32">EXPLORING WORKSHOP</h3>
                                        <p class="font-16 py-3">
                                           Exploring our client’s preferences and ideas are the building blocks for any of our projects. A crystal
interpretation of these is a must for customer satisfaction and overall success. Thus we embrace all the
ideas that a customer brings by ascertaining end objectives as well as a clear blueprint. 
                                        </p>
                                        <div>
                                            <a href="" class="btn btn-border">Get in Touch</a>

                                        </div>

                                    </div>

                                </div>
                            </div>
                            <img src="{{ asset('svg/back-img.png') }}" class="layer-img d-none d-md-block d-lg-block" alt="">


                        </div>
                        <div class="tab-pane fade" id="Planning" role="tabpanel" aria-labelledby="Planning-tab">
                            <div class="row">
                                <div class="col-md-5 m-0 p-0 d-flex align-items-center" style="background:#fafafa;">
                                    <img src="{{ asset('svg/toaplex/planning.svg') }}"  class="img img-fluid"
                                        alt="">
                                </div>

                                <div class="col-md-7 m-0 p-0">
                                    <div class="card p-5 service-card">
                                        <h3 class="font-32">Planning</h3>
                                        <p class="font-16 py-3">
                                           As said multiple times we believe that web development is an evolutionary process. Thus at this level we ascertain customer’s imagination and preferences and create a blueprint along with demarcated ends and objectives for better clarity. The first crucial step is to set the genesis point and then to set a clear objective.  A strategy is then ascertained for reaching the end point. Various models of planning are discussed in detail before finalization of the desired goal chart. Throughout the process customer preference is heeded to the greatest extent possible.
                                        </p>
                                        <div>
                                            <a href="" class="btn btn-border">Get in Touch</a>

                                        </div>

                                    </div>

                                </div>
                            </div>
                          </div>
                        <div class="tab-pane fade" id="Designing" role="tabpanel" aria-labelledby="Designing-tab"><div class="row">
                                 <div class="col-md-5 m-0 p-0 d-flex align-items-center" style="background:#fafafa;">
                                    <img src="{{ asset('svg/toaplex/designing.svg') }}"  class="img img-fluid"
                                        alt="">
                                </div>

                                <div class="col-md-7 m-0 p-0">
                                    <div class="card p-5 service-card">
                                        <h3 class="font-32">Designing</h3>
                                        <p class="font-16 py-3">
                                           This is the place where the first lines are drawn. Apart from designing a platform which is engaging and attractive. Emphasis is made to make it more relevant for specific jobs or customer needs which finally enhance user experience in the long run.  Designers pay attention to minutest details as well as their ramifications. A lot of prototypes are tested before reaching at the final theme and design theory. Apart from taking aesthetics as a guiding light other factors like relevance, usefulness and user reactions are heeded.
                                        </p>
                                        <div>
                                            <a href="" class="btn btn-border">Get in Touch</a>

                                        </div>

                                    </div>

                                </div>
                            </div>
                            </div>
                              <div class="tab-pane fade" id="Developing" role="tabpanel" aria-labelledby="Developing-tab"><div class="row">
                                 <div class="col-md-5 m-0 p-0 d-flex align-items-center" style="background:#fafafa;">
                                    <img src="{{ asset('svg/toaplex/developing.svg') }}"  class="img img-fluid"
                                        alt="">
                                </div>

                                <div class="col-md-7 m-0 p-0">
                                    <div class="card p-5 service-card">
                                        <h3 class="font-32">Developing</h3>
                                        <p class="font-16 py-3">
                                           Other features apart from aesthetics are taken into consideration like smooth working and easy access and synchronization options. Numerous factors are taken into consideration so as to exploit every opportunity and eliminate every prospective challenge. The user interface is hand refined and codes are filtered for making the best in class product. In this part too various prototypes are made to select the absolute best. Codes are revised again and again by expert team members to ensure sustainability and seamless experience.
                                        </p>
                                        <div>
                                            <a href="" class="btn btn-border">Get in Touch</a>

                                        </div>

                                    </div>

                                </div>
                            </div>
                            </div>
                              <div class="tab-pane fade" id="Testing" role="tabpanel" aria-labelledby="Testing-tab"><div class="row">
                                 <div class="col-md-5 m-0 p-0 d-flex align-items-center" style="background:#fafafa;">
                                    <img src="{{ asset('svg/toaplex/testing.svg') }}"  class="img img-fluid"
                                        alt="">
                                </div>

                                <div class="col-md-7 m-0 p-0">
                                    <div class="card p-5 service-card">
                                        <h3 class="font-32">Testing</h3>
                                        <p class="font-16 py-3">
                                           After the work in majorly abstract terms it is time for practical usage. For this our testing experts nit-pick each corner of every product. They spend hours to detect any flaw. All the portions go through a robust screening process and amendments are made whenever required even at the smallest level. Even after adding or discarding some features or logarithms emphasis is given to find out their overall effects in the software. In case of discrepancies immediate action is taken.
                                        </p>
                                        <div>
                                            <a href="" class="btn btn-border">Get in Touch</a>

                                        </div>

                                    </div>

                                </div>
                            </div>
                            </div>
                              <div class="tab-pane fade" id="Maintenance" role="tabpanel" aria-labelledby="Maintenance-tab"><div class="row">
                                 <div class="col-md-5 m-0 p-0 d-flex align-items-center" style="background:#fafafa;">
                                    <img src="{{ asset('svg/toaplex/maintanance.svg') }}"  class="img img-fluid"
                                        alt="">
                                </div>

                                <div class="col-md-7 m-0 p-0">
                                    <div class="card p-5 service-card">
                                        <h3 class="font-32">Maintenance</h3>
                                        <p class="font-16 py-3">
                                           We strive relentlessly to set a benchmark in this area of product development. After a warm farewell we take care of our clients through our maintenance squad. Which keeps on visiting the software handles so in order to detect any prospective or existing fallacy. Apart from that changes are made to make it relevant with the latest technology or user friendly options and ahead of its competitors. 
                                        </p>
                                        <div>
                                            <a href="" class="btn btn-border">Get in Touch</a>

                                        </div>

                                    </div>

                                </div>
                            </div>
                            </div>
                    </div>
                </div>
            </div>


        </div>
    </section>
    <!--Our Process-->
    <!--our experties-->
    <!--<section class="my-5">-->
    <!--    <div class="container">-->
    <!--        <h3 class="text-center">-->
    <!--            Our experties-->
    <!--        </h3>-->
    <!--        <div class="experties py-5">-->
    <!--            <div class="row">-->
    <!--                <div class="col-md-4">-->
                        <!-- Card -->
    <!--                    <div class="card" style="box-shadow: none">-->

                            <!-- Card image -->
    <!--                        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/43.jpg"-->
    <!--                            alt="Card image cap">-->

                            <!-- Card content -->
    <!--                        <div class="card-body px-0">-->

                                <!-- Title -->
    <!--                            <h4 class="card-title font-22"><a>Shopping & E-Commerce</a></h4>-->
                                <!-- Text -->
    <!--                            <p class="card-text fon-14">We design & develop user-engaging eCommerce applications that-->
    <!--                                improve ROI, increase brand exposure, and skyrocket your online business</p>-->
                                <!-- Button -->

    <!--                        </div>-->

    <!--                    </div>-->
                        <!-- Card -->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->

    <!--    </div>-->
    <!--</section>-->
    <!--our experties-->
    <!--Testimomial-->
    <section class="my-5 ">
        <div class="container">
            <h3 class="text-center pb-3">
                Testimonial
            </h3>
            <div class="d-none d-md-block d-lg-block">
                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div>
                        <div class="row p-3 justify-content-md-center">
        
        
                          <div class="col-md-4">
                          <img src="{{asset('svg/testi1.png')}}" class="" alt="">
                          </div>
                          <div class="col-md-6 mt-5 pt-4">
                            <!-- Card -->
                            <div class="card p-5 card-testimonilas text-black">
                              <!-- Card content -->
                              <div class="card-body">
        
                                <!-- Title -->
                                <h4 class="card-title font-weight-bold font-26">Clients Testimonials</h4>
                                <!-- Text -->
                                <p class="card-text py-2 font-16">“I belong to a small town named Nanded. I didn’t have much idea but had a dream of creating something
for my society. Toaplex’s exploring workshops helped me to understand the nuances of web
development and web designing as well as develop a perfect one for myself. Undoubtedly it is the best
web development company in India. ”</p>
                                <!-- Button -->
                                <p style="font-size: 13px!important;" class="font-weight-bold mb-0 pb-0">
                                  MOHAMMED JUNAID
                                </p>
                                <p style="font-size: 13px!important;">
                                  Udials
                                </p>
                              </div>
        
                            </div>
                            <!-- Card -->
                          </div>
                        </div>
                      </div>
                  </div>
                  
                </div>
                <!--<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">-->
                <!--  <span class="carousel-control-prev-icon" aria-hidden="true"></span>-->
                <!--  <span class="sr-only">Previous</span>-->
                <!--</a>-->
                <!--<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">-->
                <!--  <span class="carousel-control-next-icon" aria-hidden="true"></span>-->
                <!--  <span class="sr-only">Next</span>-->
                <!--</a>-->
              </div>

            </div>  
            <div class="d-block d-lg-none d-md-block d-sm-none">
                             <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div>
                          <div class="card    text-black" style="box-shadow:0 2px 5px 0 rgb(0 0 0 / 16%), 0 2px 10px 0 rgb(0 0 0 / 12%);">
                              <!-- Card content -->
                              <div class="card-body">
                                  <img src="{{asset('svg/testi1.png')}}" class="rounded-circle" width="200" height="200" alt="">

                                <!-- Title -->
                                <h4 class="card-title font-weight-bold font-26">Clients Testimonials</h4>
                                <!-- Text -->
                                <p class="card-text py-2 font-16">“I belong to a small town named Nanded. I didn’t have much idea but had a dream of creating something
for my society. Toaplex’s exploring workshops helped me to understand the nuances of web
development and web designing as well as develop a perfect one for myself. Undoubtedly it is the best
web development company in India. ”</p>
                                <!-- Button -->
                                <p style="font-size: 13px!important;" class="font-weight-bold mb-0 pb-0">
                                  MOHAMMED JUNAID
                                </p>
                                <p style="font-size: 13px!important;">
                                  Udials
                                </p>
                              </div>
        
                            </div>
                      </div>
                  </div>
                  
                </div>
                <!--<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">-->
                <!--  <span class="carousel-control-prev-icon" aria-hidden="true"></span>-->
                <!--  <span class="sr-only">Previous</span>-->
                <!--</a>-->
                <!--<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">-->
                <!--  <span class="carousel-control-next-icon" aria-hidden="true"></span>-->
                <!--  <span class="sr-only">Next</span>-->
                <!--</a>-->
              </div>
            </div>
        </div>
    </section>
    <!--Testimomial-->
    <!--contact us-->
    <section class="my-5">
        <div class="container">
            <div class="contact">
                <div class="row">
                    <div class="col-md-5">
                        <h3 class="font-22">Have a project to discuss?<br>
                            Get in touch.</h3>
                        <form class="py-3">
                            <input type="text" id="name" class="form-control mb-4" placeholder="Full Name*">
                            <input type="email" id="email" class="form-control mb-4" placeholder="Email*">
                            <input type="text" id="mobile" class="form-control mb-4" placeholder="Phone Nuber*">
                            <select class="browser-default mb-4 custom-select">
                                <option selected>Select Project Type*</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                            <!--<select class="browser-default mb-4 custom-select">-->
                            <!--    <option selected>Approx Budge*</option>-->
                            <!--    <option value="1">One</option>-->
                            <!--    <option value="2">Two</option>-->
                            <!--    <option value="3">Three</option>-->
                            <!--</select>-->
                            <div class="form-group">
                                <textarea class="form-control rounded-0" placeholder="Enter Messege Here" id="exampleFormControlTextarea1"
                                    rows="4"></textarea>
                            </div>
                            <button class="btn btn-custom btn-block" style="letter-spacing: 2px;">SUBMIT</button>
                        </form>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-6   contact-info">
                        <div class="">
                            <div class="card p-4 card-contact d-none d-lg-block d-md-block">
                                <div class="contact-content">
                                    <h3 class="font-32">Now is the Time to <br>
                                        Craft Brilliance Together</h3>   
                                        
                                        <p>
                                            Get in touch with our experts and let us turn your idea into an exceptional mobile app.
                                        </p>
                                </div>
                            </div>
                            <div class="card p-4 card-contact d-block d-lg-none d-md-none d-sm-none" style="margin-left:0px!important;width:auto!important;">
                                <div class="contact-content">
                                    <h3 class="font-32">Now is the Time to <br>
                                        Craft Brilliance Together</h3>   
                                        
                                        <p>
                                            Get in touch with our experts and let us turn your idea into an exceptional mobile app.
                                        </p>
                                </div>
                            </div>
                            
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </section>

@endsection
