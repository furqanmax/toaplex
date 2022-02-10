@extends('layout.layout')
@section('content')
<!---contact us--->
    <section class="">
        <div class="bg">
            <h1 class="text-center white-text py-5">Contact Us</h1>
        </div>
        <div class="container my-5 py-5" >
            <div class="row">
                <div class="col-md-6">
                    <h3 class="font-22">Have a project to discuss?<br>
                        Get in touch.</h3>
                    <form class="py-3" action="{{ route('mail')}}" method="POST">
                        @csrf
                        <input type="text" id="name" class="form-control mb-4" name="name" placeholder="Full Name*">
                        <input type="email" id="email" class="form-control mb-4" name="email" placeholder="Email*">
                        <input type="text" id="mobile" class="form-control mb-4" name="mobile" placeholder="Phone Number*">
                        <!--<select class="browser-default mb-4 custom-select">-->
                        <!--    <option selected>Select Project Type*</option>-->
                        <!--    <option value="1">One</option>-->
                        <!--    <option value="2">Two</option>-->
                        <!--    <option value="3">Three</option>-->
                        <!--</select>-->
                        <!--<select class="browser-default mb-4 custom-select">-->
                        <!--    <option selected>Approx Budge*</option>-->
                        <!--    <option value="1">One</option>-->
                        <!--    <option value="2">Two</option>-->
                        <!--    <option value="3">Three</option>-->
                        <!--</select>-->
                        <div class="form-group">
                            <textarea class="form-control rounded-0" name="message" placeholder="Enter Messege Here" id="exampleFormControlTextarea1"
                                rows="4"></textarea>
                        </div>
                        <button class="btn btn-custom btn-block" style="letter-spacing: 2px;">SUBMIT</button>
                    </form>
                </div>
                <div class="col-md-6 pl-md-5 pl-5">
                    <h3  class="font-22">
                        Connect with us now
                    </h3>
                    <p>
                       <a href=""> Chat online</a> with our  team
                    </p>
                    <p>
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                       &nbsp; Hyder Bagh No:1 Galli No:02, near Sharifa Masjid, Nanded, Maharashtra 431601.
                    </p>
                    <p>
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        &ensp; +91 860 526 1129
                        <br>
                        &ensp; &ensp; &nbsp; +91 776 790 8797
                    </p>
                    <p>
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        &ensp; info@toaplex.com
                    </p>
                </div>
            </div>
        </div>
    </section>
    
@endsection