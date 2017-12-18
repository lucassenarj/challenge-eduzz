@extends('layouts.master')

@section('content')

        <div class="divider-new pt-5">
            <h2 class="h2-responsive wow fadeIn">Candidates</h2>
        </div>

        <!--Section: Best features-->
        <section id="best-features" style="width:90%; margin:0 auto;">

            <div class="row pt-3">

                @foreach($candidates as $candidate)

                <!--First columnn-->
                <div class="col-lg-3 mb-r">

                    <!--Card-->
                    <div class="card wow fadeIn" style="min-height:550px;">

                        <!--Card image-->
                        <img class="img-fluid" src="{!! $candidate->photo  !!}" alt="Card image cap">

                        <!--Card content-->
                        <div class="card-body">
                            <!--Title-->
                            <h4 class="card-title text-center"><a href="{{ URL::to('/') }}/candidate/{!! $candidate->id !!}?access_token={{ $_GET['access_token'] }}">{!! $candidate->name !!}, {!! $candidate->age !!}</a></h4>
                            <hr>
                            <!--Text-->
                            <p class="card-text">{!! $candidate->bio !!}</p>
                        </div>

                    </div>
                    <!--/.Card-->
                </div>
                <!--First columnn-->

                @endforeach
            </div>

        </section>
        <!--/Section: Best features-->