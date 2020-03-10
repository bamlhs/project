 @extends('layout.layout')
 
@section("content")
<div class="main-web">
    <!--  Main web  -->
    <div class="container">
        <div class="breadcrumb">
            <a href="#">{{ __("text.Store") }}</a>
            <a href="#">{{ __("text.cart") }}</a>
            <span> {{ __("text.confirm_order") }}</span>

        </div>

        <div class="row">
            <div class="confirm-massege">
                <img src="{{ asset("assets/images/icon-ok.svg")}}" />
                <p>{{ __("text.thanks_shopping") }}</p>
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


</div>
<!-- End  Main web  -->

@endsection