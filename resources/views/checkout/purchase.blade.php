 
@extends('layout.layout')

@section('extra_styles')
    <style>

        .PT_open_iframe {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
        }

        </style>
@endsection



@section("content")
 

<div class="main-web">
    <!--  Main web  -->
    <div class="container">
        <div class="breadcrumb">
            <a href="#">المتجر</a>
            <a href="#">سلة التسوق</a>
            <span>الدفع </span>

        </div>

        <div class="row">
            <div class="confirm-massege">
                <img src="assets/images/icon-ok.svg" />
                <p>بقي خطوة واحدة لتصلك منتجاتنا </p>
                <script src="https://www.paytabs.com/express/v4/paytabs-express-checkout.js"
                    id="paytabs-express-checkout"
                    data-secret-key="gMa3YRRsruaesOmWkBKRwB696vasLx12kb5i3WKurVIUK4Q4GBWcc2mixwLj4MloYrH2oswPneJ8jAcZb8cnayGI5s29enxdOffc"
                    data-merchant-id="10054241"
                    data-url-redirect="http://127.0.0.1:8000/gateway"
                    data-amount="{{ $order->billling_total }}"
                    data-currency="SAR"
                    data-title="{{ $order->name }}"
                    data-product-names="{{ $items }}"
                    data-order-id="{{ $order->id }}"
                    data-customer-phone-number="{{ $order->phone }}"
                    data-customer-email-address="{{(Auth::user() ? Auth::user()->email : 'anonymous@alrahden.com.sa')}}"
                    data-is-mada='1'
                    >
                </script>
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
