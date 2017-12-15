@extends('layouts.master')

@section('content')
        <form>
            <div class="divider-new pt-5">
                <h2 class="h2-responsive wow fadeIn">{!! $candidate->name !!}, {!! $candidate->age !!} years old</h2>
            </div>

            <!--Section: Best features-->
            <section id="best-features">
                <div class="wow fadeIn" style="width: 70%; margin:0 auto;">

                    <!--Card image-->
                    <div style="width:40%; float:left;">
                        <img class="img-fluid" src="{!! $candidate->photo  !!}" alt="Card image cap" style="float:left; margin-right:25px;">
                    </div>

                    <!--Card content-->
                    <div class="card-body" style="float:left; width:60%;">
                        <!--Title-->
                        <h4 class="card-title text-left"><input type="text" name="name" value="{!! $candidate->name !!}"></h4>
                        <hr>
                        <!--Text-->
                        <p class="card-text"><input type="number" name="age" value="{!! $candidate->age !!}"></p>
                        <p class="card-text"><input type="text" name="portfolio" value="{!! $candidate->portfolio !!}"></p>
                        <p class="card-text"><input type="email" name="email" value="{!! $candidate->email !!}"></p>
                        <p class="card-text"><textarea name="bio" id="bio" style="height:150px;">{!! $candidate->bio !!}</textarea></p>
                    </div>
                    
                </div>
                
            </section>
            <!--/Section: Best features-->
        </form>