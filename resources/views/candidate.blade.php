@extends('layouts.master')

@section('content')

        <div class="divider-new pt-5">
            <h2 class="h2-responsive wow fadeIn">{!! $candidate->name !!}, {!! $candidate->age !!} years old</h2>
        </div>

        <!--Section: Best features-->
        <section id="best-features">
            <div class="wow fadeIn" style="width: 70%; margin:0 auto;">

                <!--Card image-->
                <img class="img-fluid" src="{!! $candidate->photo  !!}" alt="Card image cap" width="400" style="float:left; margin-right:25px;">

                <!--Card content-->
                <div class="card-body">
                    <!--Title-->
                    <h4 class="card-title text-left">From: {!! $candidate->birth !!} | <a href="{{ URL::to('/') }}/candidate/edit/{!! $candidate->id !!}?access_token={{ $_GET['access_token'] }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a> <a href="{{ URL::to('/') }}/candidate/delete/{!! $candidate->id !!}?access_token={{ $_GET['access_token'] }}"><i class="fa fa-times" aria-hidden="true"></i></a></h4>
                    <hr>
                    <!--Text-->
                    <p class="card-text">{!! $candidate->bio !!}</p>
                    <p>Portfolio: <a href="{!! $candidate->portfolio !!}">{!! $candidate->portfolio !!}</a></p>
                    <p>Contact: <a href="mailto:{!! $candidate->email !!}">{!! $candidate->email !!}</a></p>
                </div>

            </div>
        </section>
        <!--/Section: Best features-->