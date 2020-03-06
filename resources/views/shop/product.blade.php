@extends('layout.layout')

@section("content")

    

<div class="main-web">
        <!--  Main web  -->
        <div class="container">
            <div class="breadcrumb">
                <a href="#">المتجر</a>
                <span>الصوابين الأوتوماتيك</span>

            </div>

            <div class="row content-data-products">
                <div class="col-md-9 right-details">
                    <!-- slider-producst-details block -->
                    <div class="details-products-block">
                        <div class="title-products">
                            <h4>{{ $product->name }}</h4>
                            <a herf="#" data-toggle="modal" data-target="#shearModal">
                                <i class="fas fa-share-alt"></i>
                            </a>
                        </div>
                        <!-- slider-producst-details -->
                        
                        <div class="slider-producst-details" dir="ltr">
                            @php
                            $image = json_decode($product->image);
                            @endphp
                            @foreach($image as $img)

                            <div class="item-slider-details">
                                <img src="{{ URL::asset('storage/'.$img) }}" />
                            </div>
                           
                            @endforeach
                        </div>
                    </div>


                    <div class="details-products-block block-details">
                        <h2>وصف المنتج:</h2>
                        {!! $product->description !!}
                        

                    </div>

                </div>
                <div class="col-md-3 left-details">
                    <div class="details-products-block-left ">
                        <!--  Price Block -->
                        <div class="price-details-left">
                            {{-- <div class="price-before">
                                <span class="w-price-before">قبل:</span>
                                <span class="class-number">115 ر.س.</span>
                            </div> --}}

                            <div class="price-now-left">
                                <div class="w-now">الآن:</div>
                                <div class="price-now">{{ $product->price }} ر.س.</div>
                                {{-- <div class="w-offter">وفر 21%</div> --}}
                            </div>

                            <div class="note-price">الأسعار تشمل ضريبة القيمة المضافة</div>

                        </div>

                        <!-- Size -->

                        <div class="add-to-cart">
                            <form action="{{ route('addtocart') }}" method="post">
                                @csrf
                                <img src="{{ asset('assets/images/add-cart.svg') }}" />
                            <input type="hidden" name="id" id="id" value="{{ $product->id }}">
                                <button type="submit">أضف للعربة</button>
</form>
                        </div>


                    </div>

                </div>
            </div>
        </div>

    </div>
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

@endsection