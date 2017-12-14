@extends('layouts.master')

@section('title')
    Welcome!
@endsection

@section('content')    
    
    <!-- Main container-->
    <div class="container">

        <div class="divider-new pt-5">
            <h2 class="h2-responsive wow fadeIn" data-wow-delay="0.2s">About us</h2>
        </div>

        <!--Section: About-->
        <section id="about" class="text-center wow fadeIn" data-wow-delay="0.2s">

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit explicabo assumenda eligendi ex exercitationem harum deleniti quaerat beatae ducimus dolor voluptates magnam, reiciendis pariatur culpa tempore quibusdam quidem, saepe eius.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit explicabo assumenda eligendi ex exercitationem harum deleniti quaerat beatae ducimus dolor voluptates magnam, reiciendis pariatur culpa tempore quibusdam quidem, saepe eius.</p>

        </section>
        <!--Section: About-->

        <div class="divider-new pt-5">
            <h2 class="h2-responsive wow fadeIn">Best features</h2>
        </div>

        <!--Section: Best features-->
        <section id="best-features">

            <div class="row pt-3">

                <!--First columnn-->
                <div class="col-lg-3 mb-r">

                    <!--Card-->
                    <div class="card wow fadeIn">

                        <!--Card image-->
                        <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/Work/4-col/img%20(25).jpg" alt="Card image cap">

                        <!--Card content-->
                        <div class="card-body">
                            <!--Title-->
                            <h4 class="card-title text-center">360 Advertising</h4>
                            <hr>
                            <!--Text-->
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>

                    </div>
                    <!--/.Card-->
                </div>
                <!--First columnn-->

                <!--Second columnn-->
                <div class="col-lg-3 mb-r">
                    <!--Card-->
                    <div class="card wow fadeIn" data-wow-delay="0.2s">

                        <!--Card image-->
                        <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/Work/4-col/img%20(14).jpg" alt="Card image cap">

                        <!--Card content-->
                        <div class="card-body">
                            <!--Title-->
                            <h4 class="card-title text-center">Top-class Team</h4>
                            <hr>
                            <!--Text-->
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>

                    </div>
                    <!--/.Card-->
                </div>
                <!--Second columnn-->

                <!--Third columnn-->
                <div class="col-lg-3 mb-r">
                    <!--Card-->
                    <div class="card wow fadeIn" data-wow-delay="0.4s">

                        <!--Card image-->
                        <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/Work/4-col/img%20(21).jpg" alt="Card image cap">

                        <!--Card content-->
                        <div class="card-body">
                            <!--Title-->
                            <h4 class="card-title text-center">Top-class Team</h4>
                            <hr>
                            <!--Text-->
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>

                    </div>
                    <!--/.Card-->
                </div>
                <!--Third columnn-->

                <!--First columnn-->
                <div class="col-lg-3 mb-r">
                    <!--Card-->
                    <div class="card wow fadeIn" data-wow-delay="0.6s">

                        <!--Card image-->
                        <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/Work/4-col/img%20(37).jpg" alt="Card image cap">

                        <!--Card content-->
                        <div class="card-body">
                            <!--Title-->
                            <h4 class="card-title text-center">24/7 Support</h4>
                            <hr>
                            <!--Text-->
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>

                    </div>
                    <!--/.Card-->
                </div>
                <!--First columnn-->
            </div>

        </section>
        <!--/Section: Best features-->

        <div class="divider-new">
            <h2 class="h2-responsive wow fadeIn">Contact us</h2>
        </div>

        <!--Section: Contact-->
        <section id="contact pb-5">
            <div class="row">
                <!--First column-->
                <div class="col-md-8 mb-5">
                    <div id="map-container" class="z-depth-1 wow fadeIn" style="height: 300px"></div>
                </div>
                <!--/First column-->

                <!--Second column-->
                <div class="col-md-4">
                    <ul class="text-center list-unstyled">
                        <li class="wow fadeIn" data-wow-delay="0.2s"><i class="fa fa-map-marker teal-text fa-lg"></i>
                            <p>New York, NY 10012, USA</p>
                        </li>

                        <li class="wow fadeIn mt-5 pt-2" data-wow-delay="0.3s"><i class="fa fa-phone teal-text fa-lg"></i>
                            <p>+ 01 234 567 89</p>
                        </li>

                        <li class="wow fadeIn mt-5 pt-2" data-wow-delay="0.4s"><i class="fa fa-envelope teal-text fa-lg"></i>
                            <p>contact@mdbootstrap.com</p>
                        </li>
                    </ul>
                </div>
                <!--/Second column-->
            </div>
        </section>
        <!--Section: Contact-->

    </div>
    <!--/ Main container-->

@endsection