@extends('layout.layout')


@section('content')
<div class="main-web">
    <!--  Main web  -->
    <div class="bg-img-inner">
        <div class="container block-data-top-header">
            <div class="data-top-header">
              
            </div>

        <h2>{{ __("text.HomeService") }}</h2>
        </div>
    </div>


    <div class="data-page">
        <div class="container">
            <div class="bg-inner-page">
                <div class="data-page">
                    <div class="right-page">
                    {{ __("text.our-pride") }}
                    <a href="{{ route('book') }}"> {{ __("text.reservation") }}</a>
                    </div>
                    <div class="left-page">
                        <div class="slider-page" dir="ltr">
                            <div class="item-slider-page">
                            <img src="{{ asset('assets/images/img-about.jpg') }}" />
                            </div>
                            <div class="item-slider-page">
                                <img src="{{ asset('assets/images/img-contactus.jpg') }}" />
                            </div>
                            <div class="item-slider-page">
                                <img src="{{ asset('assets/images/img-about.jpg') }}" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
<!-- End  Main web  -->
@stop