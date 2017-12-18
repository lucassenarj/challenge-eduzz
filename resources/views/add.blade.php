@extends('layouts.master')

@section('content')
        <form method="POST" action="{{ URL::to('/') }}/home?access_token={{ $_GET['access_token'] }}">
            <input name="_method" type="hidden" value="POST">
            <input name="photo" type="hidden" value="http://us.yuneec.com/c.4198727/sca-dev-vinson/img/no_image_available.jpeg">

            <div class="divider-new pt-5">
                <h2 class="h2-responsive wow fadeIn">Create candidate</h2>
            </div>

            <!--Section: Best features-->
            <section id="best-features" style="width: 80%; margin:0 auto;">
                <div class="row wow fadeIn">

                    <!--Card image-->
                    <div class="col-xs-12 col-sm-4 col-md-4 pull-left">
                        <img class="img-fluid" src="http://us.yuneec.com/c.4198727/sca-dev-vinson/img/no_image_available.jpeg" alt="Card image cap" style="float:left; margin-right:25px;">
                    </div>

                    <!--Card content-->
                    <div class="card-body col-xs-12 col-sm-8 col-md-8 pull-right">
                        <!--Name-->
                        <div class="input-group" style="margin:0 0 15px;">
                            <span class="input-group-addon" style="width:40px;"><i class="fa fa-user"></i></span>
                            <input id="name" type="text" class="form-control" name="name" placeholder="Name" style="padding-left:15px;">
                        </div>
                        <!--Birth-->
                        <div class="input-group" style="margin:0 0 15px;">
                            <span class="input-group-addon" style="width:40px;"><i class="fa fa-globe"></i></span>
                            <input id="birth" type="text" class="form-control" name="birth" placeholder="City" style="padding-left:15px;">
                        </div>
                        <!--Age-->
                        <div class="input-group" style="margin:0 0 15px;">
                            <span class="input-group-addon" style="width:40px;"><i class="fa fa-id-card"></i></span>
                            <input id="age" type="number" class="form-control" name="age" placeholder="Age" style="padding-left:15px;">
                        </div>
                        <!--Portfolio-->
                        <div class="input-group" style="margin:0 0 15px;">
                            <span class="input-group-addon" style="width:40px;"><i class="fa fa-github"></i></span>
                            <input id="portfolio" type="text" class="form-control" name="portfolio" placeholder="Portfolio" style="padding-left:15px;">
                        </div>
                        <!--Email-->
                        <div class="input-group" style="margin:0 0 15px;">
                            <span class="input-group-addon" style="width:40px;"><i class="fa fa-envelope"></i></span>
                            <input id="email" type="email" class="form-control" name="email" placeholder="Email" style="padding-left:15px;">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" rows="5" id="bio" name="bio" style="height:150px; padding:10px;" placeholder="Biography"></textarea>
                        </div>
                    </div>
                    
                </div>

                <div class="row wow fadein">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <button type="submit" class="btn btn-success pull-right">Add</button>
                    </div>
                </div>
                
            </section>
            <!--/Section: Best features-->
        </form>