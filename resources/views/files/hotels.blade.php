@extends('layout.layout')


@section('content')
<div class="main-web">
    <!--  Main web  -->
    <div class="bg-img-inner">
        <div class="container block-data-top-header">
            <div class="data-top-header">
                
            </div>

        <h2>{{ __("text.catalog") }}</h2>
        </div>
    </div>


    <div class="data-page">
        <div class="container">
            <div class="bg-inner-page">
                <div class="slider-catelog" dir="ltr">
                    <div class="item-slider-catelog">
                    <img src="{{ asset('assets/images/catalog-slider.png') }}" />
                    </div>
                    <div class="item-slider-catelog">
                        <img src="{{ asset('assets/images/catalog-slider.png') }}" />
                    </div>
                    <div class="item-slider-catelog">
                        <img src="{{ asset('assets/images/catalog-slider.png') }}" />
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
<!-- End  Main web  -->
@stop