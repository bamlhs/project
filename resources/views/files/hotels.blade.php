@extends('layout.layout')


@section('content')

<div class="main-web">
    <!--  Main web  -->
    <div class="bg-img-inner">
        <div class="container block-data-top-header">
            <div class="data-top-header">
               
            </div>

        <h2>{{ __("text.service-list") }}</h2>
        </div>
    </div>


    <div class="page-service">
        <div class="container">
            <div class="bg-inner-page services-page">
                <div class="header-title-inner">
                    <h2>{{ __("text.services")}} </h2>
                </div>

                <div class="data-page">
                    <div class="block-item-service">
                        <div class="col-md-4 item-service">
                            <!-- item-service -->
                            <a href="#">
                            <img src="{{ asset('/assets/images/service-icon.png') }}" />
                                <h3>مفارش المطاعم</h3>
                            </a>
                        </div>
                        <div class="col-md-4 item-service">
                            <!-- item-service -->
                            <a href="#">
                                <img src="{{ asset('/assets/images/service-icon.png') }}" />
                                <h3>مفارش غرف الفنادق</h3>
                            </a>
                        </div>
                        <div class="col-md-4 item-service">
                            <!-- item-service -->
                            <a href="#">
                                <img src="{{ asset('/assets/images/service-icon.png') }}" />
                                <h3>مناشف حمامات الفنادق</h3>
                            </a>
                        </div>

                        <div class="col-md-4 item-service">
                            <!-- item-service -->
                            <a href="#">
                                <img src="{{ asset('/assets/images/service-icon.png') }}" />
                                <h3>مفارش المطاعم</h3>
                            </a>
                        </div>
                        <div class="col-md-4 item-service">
                            <!-- item-service -->
                            <a href="#">
                                <img src="{{ asset('/assets/images/service-icon.png') }}" />
                                <h3>مفارش غرف الفنادق</h3>
                            </a>
                        </div>
                        <div class="col-md-4 item-service">
                            <!-- item-service -->
                            <a href="#">
                                <img src="{{ asset('/assets/images/service-icon.png') }}" />
                                <h3>مناشف حمامات الفنادق</h3>
                            </a>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>


</div>
<!-- End  Main web  -->

@stop