@extends('layout.layout')


@section('content')

    <!-- End Header -->
    <div class="main-web">
        <!--  Main web  -->
        <div class="bg-img-inner">
            <div class="container block-data-top-header">
                <div class="data-top-header">

                    <div class="shear-btn">
                        <a href="#" data-toggle="modal" data-target="#shearModal">
                            <i class="fas fa-share-alt"></i>
                        </a>
                    </div>
                </div>

                <h2>قائمة الصور</h2>
            </div>
        </div>


        <div class="page-service">
            <div class="container">
                <div class="bg-inner-page services-page">
                    <div class="header-title-inner">
                        <h2>{{ __("text.gallery") }}</h2>
                    </div>
                    <section class="mbr-gallery mbr-slider-carousel cid-rPgRavP6AU" id="gallery2-9">



                        <div class="container">
                            <div>
                                <!-- Filter -->
                                <div class="mbr-gallery-filter container gallery-filter-active">
                                    <ul buttons="0">
                                        <li class="mbr-gallery-filter-all"><a class="btn btn-md btn-primary-outline active display-7" href="">All</a></li>
                                    </ul>
                                </div>
                                <!-- Gallery -->
                                <div class="mbr-gallery-row">
                                    <div class="mbr-gallery-layout-default">
                                        <div>
                                            <div>


                                                <div class="mbr-gallery-item mbr-gallery-item--1" data-tags="{{__("text.skins")}}" data-video-url="false">
                                                    <div data-toggle="modal" data-slide-to="0" href="#lb-gallery3-1">
                                                        <img title="" alt="" src="assets/images/beforeandafter/leather-dyeing-1412x2089-800x1184.jpg">
                                                        <span class="icon-focus">
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="mbr-gallery-item mbr-gallery-item--p1" data-tags="{{ __("text.carpet") }}" data-video-url="false">
                                                    <div data-toggle="modal" data-slide-to="1" href="#lb-gallery3-1">
                                                        <img title="" alt="" src="assets/images/beforeandafter/b2a1-1080x1080-800x800.jpg">
                                                        <span class="icon-focus">

                                                        </span>
                                                    </div>
                                                </div>



                                                <div class="mbr-gallery-item mbr-gallery-item--p1" data-tags="{{__("text.shoes") }}" data-video-url="false">
                                                    <div data-toggle="modal" data-slide-to="2" href="#lb-gallery3-1">
                                                        <img title="" alt="" src="assets/images/beforeandafter/b2a2-1080x1080-800x800.jpg"><span class="icon-focus"></span></div>
                                                </div>
                                                <div class="mbr-gallery-item mbr-gallery-item--p1" data-tags="{{__("text.shoes") }}" data-video-url="false">
                                                    <div data-toggle="modal" data-slide-to="3" href="#lb-gallery3-1"><img title="" alt="" src="assets/images/beforeandafter/b2a5-1080x1080-800x800.jpg">
                                                        <span class="icon-focus"></span></div>
                                                </div>
                                                <div class="mbr-gallery-item mbr-gallery-item--p1" data-tags="{{__("text.towel") }}" data-video-url="false">
                                                    <div data-toggle="modal" data-slide-to="4" href="#lb-gallery3-1"><img title="" alt="" src="assets/images/beforeandafter/b2a4-1080x1080-800x800.jpg">
                                                        <span class="icon-focus"></span></div>
                                                </div>
                                                <div class="mbr-gallery-item mbr-gallery-item--p1" data-tags="{{__("text.skins")}}" data-video-url="false">
                                                    <div data-toggle="modal" data-slide-to="5" href="#lb-gallery3-1"><img title="" alt="" src="assets/images/beforeandafter/b2a3-1080x1080-800x800.jpg">
                                                        <span class="icon-focus"></span></div>
                                                </div>
                                                <div class="mbr-gallery-item mbr-gallery-item--p1" data-tags="{{ __("text.carpet") }}" data-video-url="false">
                                                    <div data-toggle="modal" data-slide-to="6" href="#lb-gallery3-1"><img title="" alt="" src="assets/images/beforeandafter/b2a6-1080x1080-800x800.jpg">
                                                        <span class="icon-focus"></span></div>
                                                </div>


                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <!-- Lightbox -->
                                <div data-app-prevent-settings="" class="mbr-slider modal fade carousel slide" tabindex="-1" data-keyboard="true" data-interval="false" id="lb-gallery3-1">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <ol class="carousel-indicators">
                                                    <li data-app-prevent-settings="" data-target="#lb-gallery3-1" data-slide-to="0"></li>
                                                    <li data-app-prevent-settings="" data-target="#lb-gallery3-1" data-slide-to="1"></li>
                                                    <li data-app-prevent-settings="" data-target="#lb-gallery3-1" data-slide-to="2"></li>
                                                    <li data-app-prevent-settings="" data-target="#lb-gallery3-1" data-slide-to="3"></li>
                                                    <li data-app-prevent-settings="" data-target="#lb-gallery3-1" data-slide-to="4"></li>
                                                    <li data-app-prevent-settings="" data-target="#lb-gallery3-1" data-slide-to="5"></li>
                                                    <li data-app-prevent-settings="" data-target="#lb-gallery3-1" data-slide-to="6"></li>

                                                </ol>
                                                <div class="carousel-inner">
                                                    <div class="carousel-item">
                                                        <img src="assets/images/beforeandafter/leather-dyeing-1412x2089-800x1184.jpg" alt="" title=""></div>
                                                    <div class="carousel-item">
                                                        <img src="assets/images/beforeandafter/b2a1-1080x1080-800x800.jpg" alt="" title=""></div>
                                                    <div class="carousel-item">
                                                        <img src="assets/images/beforeandafter/b2a2-1080x1080-800x800.jpg" alt="" title=""></div>
                                                    <div class="carousel-item">
                                                        <img src="assets/images/beforeandafter/b2a5-1080x1080-800x800.jpg" alt="" title=""></div>
                                                    <div class="carousel-item">
                                                        <img src="assets/images/beforeandafter/b2a4-1080x1080-800x800.jpg" alt="" title=""></div>

                                                    <div class="carousel-item active"><img src="assets/images/beforeandafter/b2a3-1080x1080-800x800.jpg" alt="" title=""></div>
                                                    <div class="carousel-item active"><img src="assets/images/beforeandafter/b2a6-1080x1080-800x800.jpg" alt="" title=""></div>
                                                </div><a class="carousel-control carousel-control-prev" role="button" data-slide="prev" href="#lb-gallery3-1"><span class="mbri-left mbr-iconfont" aria-hidden="true"></span><span class="sr-only">Previous</span></a>
                                                <a class="carousel-control carousel-control-next" role="button" data-slide="next" href="#lb-gallery3-1"><span class="mbri-right mbr-iconfont" aria-hidden="true"></span><span class="sr-only">Next</span></a>
                                                <a class="close" href="#" role="button" data-dismiss="modal"><span class="sr-only">Close</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </section>
                </div>
            </div>
        </div>


    </div>
    <!-- End  Main web  -->
   
@endsection