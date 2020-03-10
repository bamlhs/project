@extends('layout.layout')


@section('content')
<div class="main-web">
    <!--  Main web  -->
    <div class="container">
        <div class="breadcrumb">
            <a href="#">المتجر</a>
            <a href="#">سلة التسوق</a>
            <span>بيانات المستخدم</span>

        </div>


        <div class="row">
            <div class="col-md-4 right-profile-block">

                <!-- Right Menu Profile -->
                <div class="right-profile">
                    <div class="menu-profile">
                        <ul>
                            <li>
                                <a href="#">
                                    <img src="assets/images/profile.svg" /> البيانات الشخصية
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="assets/images/icons-requests.svg" /> طلباتي
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="assets/images/shipping.svg" /> عناوين الشحن
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="assets/images/payment.svg" /> طرق الدفع
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="assets/images/language.svg" /> اللغة
                                </a>
                            </li>
                        </ul>

                    </div>

                    <div class="menu-profile">
                        <ul>
                            <li>
                                <a href="#">
                                    <img src="assets/images/support-icon.svg" /> خدمة العملاء
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="assets/images/privacy.svg" /> سياسة الخصوصية
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="assets/images/discuss-issue.svg" /> الأسئلة الشائعة
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="assets/images/check-form.svg" /> الشروط و الأحكام
                                </a>
                            </li>
                        </ul>

                    </div>
                </div>
                <!-- End Right Menu Profile -->


            </div>

            <div class="col-md-8 left-profile-block">
                <div class="left-profile">

                    <!-- Data Personal -->
                    <div class="block-form with-btn-update">
                        <div class="header-bloks">
                            <h4>طلباتي</h4>
                            <button type="submit" class="btn-delete ">
                                <img src="assets/images/delete.svg" />
                            </button>
                        </div>

                        <div class="item-order-details-block">
                            @if ($products == null )
                            @foreach ($products as $product)
                            @php
                                $image = json_decode($product->image);
                            @endphp
                            <!-- Item -->
                            <div class="item-order-details">
                                <div class="col-md-1  checkbox-input">
                                    <input class="checkbox-item" type="checkbox" value="option2">
                                </div>

                                <div class="col-md-2 img-pro-cart">
                                <img src="{{ URL::asset('storage/'.$image[0]) }}" height="100" width="100" />
                                </div>

                                <div class="col-md-5 products-name-data">
                                    <div class="name-product"> {{ $product->name }} </div>
                                </div>
                                
                                <div class="col-md-2 quantity-numner-details"><span> {{ $product->quantity }} </span></div>
                                <div class="col-md-2 price-product-order">{{ $product->price }} ر.س</div>
                            </div>
                            <!-- Item -->

                            @endforeach
                            @else
                                <p class="p-4">There is no items in your list.</p>
                            @endif
                        

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
    <!-- End service shop block -->

</div>
<!-- End  Main web  -->
@endsection