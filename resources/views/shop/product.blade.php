@extends('layout.layout')

@section("content")

    

<div class="main-web">
        <!--  Main web  -->
        <div class="container">
            <div class="breadcrumb">
                <a href="#">{{ __("text.Store") }}</a>
                <span>
                     @if (app()->getLocale() == "en")
                    {{ $product->name }}
                    @else
                    {{ $product->name_ar }}
                    @endif
                 </span>

            </div>

            <div class="row content-data-products">
                <div class="col-md-9 right-details">
                    <!-- slider-producst-details block -->
                    <div class="details-products-block">
                        <div class="title-products">
                            <h4>
                                @if (app()->getLocale() == "en")
                                {{ $product->name }}
                                @else
                                {{ $product->name_ar }}
                                @endif
                            </h4>
                            
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
                        <h2>{{ __("text.product_desc") }}</h2>
                        @if (app()->getLocale() == "en")
                        {!! $product->description !!}
                        @else
                        {!! $product->description_ar !!}
                        @endif
                        

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
                                <button type="submit">{{ __("text.addtocart") }}</button>
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
                    <img src="{{ asset("assets/images/connecting-icon.svg") }}" />
                <h3>{{ __("text.get_branch") }}</h3>
                    <p>{{ __("text.free_shipping") }}</p>
                </div>

                <div class="col-md-3 items-service-shop wow zoomIn animated " data-wow-delay="0.4s">
                    <img src="{{ asset("assets/images/return.svg") }}" />
                    <h3>{{ __("text.refund") }}</h3>
                    <p>{{ __("text.refund_policy") }}</p>
                </div>

                <div class="col-md-3 items-service-shop wow zoomIn animated " data-wow-delay="0.6s">
                    <img src="{{ asset("assets/images/security-icon.svg") }}" />
                <h3>{{ __("text.secure-payment") }}</h3>
                <p>{{ __("text.accepted-cards") }}</p>
                </div>

                <div class="col-md-3 items-service-shop wow zoomIn animated " data-wow-delay="0.8s">
                    <img src="{{ asset("assets/images/client-service.svg") }}" />
                    <h3>{{ __("text.customer-service") }}</h3>
                    <p>{{ __("text.available-247") }}</p>
                </div>
            </div>
        </div>
    </div>
    <!-- End service shop block -->

 
@endsection