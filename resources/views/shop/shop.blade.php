@extends('layout.layout')

@section("content")

<div class="main-web">
        <!--  Main web  -->

        <!-- service shop block -->
        <div class="service-shop-block">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 items-service-shop wow zoomIn animated " data-wow-delay="0.2s">
                        <img src="assets/images/connecting-icon.svg" />
                        <h3>إستلم من أي فرع</h3>
                        <p>أو توصيل مجاني عند الطلب بمبلغ أكثر من ٢٠٠ ريال</p>
                    </div>

                    <div class="col-md-3 items-service-shop wow zoomIn animated " data-wow-delay="0.4s">
                        <img src="assets/images/return.svg" />
                        <h3>إرجاع مجاني</h3>
                        <p>سياسة إرجاع في حال لم يعجبك المنتج</p>
                    </div>

                    <div class="col-md-3 items-service-shop wow zoomIn animated " data-wow-delay="0.6s">
                        <img src="assets/images/security-icon.svg" />
                        <h3>دفع مباشر آمن</h3>
                        <p>نقبل جميع البطاقات الإتمانيه أو بطاقات مدى</p>
                    </div>

                    <div class="col-md-3 items-service-shop wow zoomIn animated " data-wow-delay="0.8s">
                        <img src="assets/images/client-service.svg" />
                        <h3>مركز خدمة العملاء</h3>
                        <p>متواجدين على مدار الساعه</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- End service shop block -->

        <!-- Banner shop -->
        <div class="container">
            <div class="banner-shop">
                <img src="assets/images/banner.jpg" />
            </div>
        </div>
        <!-- End Banner shop -->

        <!-- main shop -->
        <div class="main-shop">
            <div class="container container-main-shop">
                <!-- content-shop -->
                <div class="content-shop">
                    <!-- product-dept-shop -->
                    <div class="product-dept-shop">
                        <h2>الأقسام</h2>
                        <div class="row">
                            @foreach($products as $product)
                            @php
                            $image = json_decode($product->image);
                            @endphp
                            <div class="col-md-6 item-product-dept">
                                <a href="{{ route('single', $product->id) }}">
                                    <img src="{{ URL::asset('storage/'.$image[0]) }}" />
                                    <h3>{{  $product->name }}</h3>
                                </a>
                            </div>

                            @endforeach

                        </div>
                    </div>
                    <!-- End product-dept-shop -->
                    <div class="center-banner-shop">
                        <img src="assets/images/main-banner-shop.jpg" />
                        <div class="data-banner">
                            <h1>صابون الرهدن</h1>
                            <p>رجعها جديدة </p>
                            <a href="#">تسوق الآن</a>
                        </div>
                    </div>

                    <!-- banner bottom shop -->
                    <div class="banner-bottom-shop">
                        <div class="row">
                            <!-- banner bottom offer right -->
                            <div class="col-md-6 banner-bottom-offer-right">
                                <div class="offer-banner-right">
                                    <img src="assets/images/banner-bottom-right.jpg" />
                                    <div class="data-banner-right">
                                        <img src="assets/images/deal.svg" />
                                        <h2>صفقة اليوم</h2>
                                        <p>* شحن مجاني</p>
                                    </div>
                                </div>

                            </div>

                            <!-- banner bottom offer left -->
                            <div class="col-md-6 banner-bottom-offer-left">
                                <div class="offer-banner-left">
                                    <img src="assets/images/banner-bottom-2.jpg" />
                                    <div class="offer-block-price">
                                        <div class="price-offers"> 79 ر.س</div>
                                        <div class="word-offer">فقط </div>
                                    </div>
                                    <div class="data-bootm-banner">
                                        <h2>صابون الرهدن الحجم العائلي</h2>
                                        <a href="#">تسوق الآن</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- End content-shop -->
            </div>

        </div>
        <!-- End main shop -->



        <!-- service shop block -->
        <div class="service-shop-block service-footer-shop">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3 items-service-shop wow zoomIn animated " data-wow-delay="0.2s">
                        <img src="assets/images/connecting-icon.svg" />
                        <h3>إستلم من أي فرع</h3>
                        <p>أو توصيل مجاني عند الطلب بمبلغ أكثر من ٢٠٠ ريال</p>
                    </div>

                    <div class="col-md-3 items-service-shop wow zoomIn animated " data-wow-delay="0.4s">
                        <img src="assets/images/return.svg" />
                        <h3>إرجاع مجاني</h3>
                        <p>سياسة إرجاع في حال لم يعجبك المنتج</p>
                    </div>

                    <div class="col-md-3 items-service-shop wow zoomIn animated " data-wow-delay="0.6s">
                        <img src="assets/images/security-icon.svg" />
                        <h3>دفع مباشر آمن</h3>
                        <p>نقبل جميع البطاقات الإتمانيه أو بطاقات مدى</p>
                    </div>

                    <div class="col-md-3 items-service-shop wow zoomIn animated " data-wow-delay="0.8s">
                        <img src="assets/images/client-service.svg" />
                        <h3>مركز خدمة العملاء</h3>
                        <p>متواجدين على مدار الساعه</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- End service shop block -->


    </div>
    <!-- End  Main web  -->

@endsection