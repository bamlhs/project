
@extends('layout.layout')

 

@section("content")


<div class="main-web">
    <!--  Main web  -->
    <div class="container">
        <div class="breadcrumb">
            <a href="#">المتجر</a>
            <a href="#">سلة التسوق</a>
            <span>تأكيد الطلب</span>

        </div>

        <div class="row container-confirm-form">
            <div class="col-md-9 right-details  confirm-right confirm-form">
                <!-- Prosnal data Block -->
                <div class="block-form">
                    <h4>البيانات الشخصية</h4>
                    <div class="data-block-form">
                        <div class="form-row">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="الإسم">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="رقم الجوال">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Contact  Addess  -->
                <div class="block-form">
                    <h4>عنوان التوصيل</h4>
                    <div class="data-block-form">
                        <div class="form-row">
                            <div class="col">
                                <select class="form-control" id="exampleFormControlSelect1">
                                    <option selected>المنطقة</option>
                                    <option>1 المنطقة</option>
                                    <option>2 المنطقة</option>
                                    <option>3 المنطقة</option>
                                    <option>4 المنطقة</option>
                                    <option>5 المنطقة</option>
                                </select>
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="المدينة">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="الحي">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="الشارع">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col">
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="تفاصيل إضافية"></textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Payment Method  -->
                <div class="block-form wiht-out-bgheader">
                    <h4>طريقة الدفع</h4>
                    <div class="data-block-form">

                        <div class="form-row">
                            <div class="col">
                                <input type="radio" id="pamyment1" name="pamyment" class="custom-control-input">
                                <label class="custom-control-label" for="pamyment1">الدفع كاش عند الإستلام</label>
                            </div>
                            <div class="col">
                                <input type="radio" id="pamyment2" name="pamyment" class="custom-control-input">
                                <label class="custom-control-label" for="pamyment2">
                                    الدفع أونلاين عن طريق بطاقة فيزا أو مدى
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- visa data Block -->
                <div class="block-form">
                    <h4>تفاصيل البطاقة</h4>
                    <div class="data-block-form">
                        <div class="form-row">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="إسم حامل البطاقة">
                            </div>
                            {{-- <div class="col">
                                <input type="text" class="form-control" placeholder="رقم البطاقة">
                            </div> --}}
                        </div>

                        <div class="form-row">
                                            
                            <?php
 /*
                            $pt = new paytabs("amiranis2012@gmail.com", "gMa3YRRsruaesOmWkBKRwB696vasLx12kb5i3WKurVIUK4Q4GBWcc2mixwLj4MloYrH2oswPneJ8jAcZb8cnayGI5s29enxdOffc");
                            $pt->create_pay_page(
                                array(
                                    "merchant_email" => "amiranis2012@gmail.com",
                                    "secret_key" => "gMa3YRRsruaesOmWkBKRwB696vasLx12kb5i3WKurVIUK4Q4GBWcc2mixwLj4MloYrH2oswPneJ8jAcZb8cnayGI5s29enxdOffc",
                                    "site_url" => "http://127.0.0.1:8000/checkout",
                                    "return_url" => "http://localhost/gateway",
                                    "title" => "JohnDoe And Co.",
                                    "cc_first_name" => "John",
                                    "cc_last_name" => "Doe",
                                    "cc_phone_number" => "00973",
                                    "phone_number" => "123123123456",
                                    "email" => "johndoe@example.com",
                                    "products_per_title" => "MobilePhone || Charger || Camera",
                                    "unit_price" => "12.123 || 21.345 || 35.678 ",
                                    "quantity" => "2 || 3 || 1",
                                    "other_charges" => "12.123",
                                    "amount" => "136.082",
                                    "discount" => "10.123",
                                    "currency" => "SAR",
                                    "reference_no" => "ABC-123",
                                    "ip_customer" =>"1.1.1.0",
                                    "ip_merchant" =>"1.1.1.0",
                                    "billing_address" => "Flat 3021 Manama Bahrain",
                                    "city" => "Manama",
                                    "state" => "Manama",
                                    "postal_code" => "12345",
                                    "country" => "SA",
                                    "shipping_first_name" => "John",
                                    "shipping_last_name" => "Doe",
                                    "address_shipping" => "Flat 3021 Manama Bahrain",
                                    "state_shipping" => "Manama",
                                    "city_shipping" => "Manama",
                                    "postal_code_shipping" => "1234",
                                    "country_shipping" => "BHR",
                                    "msg_lang" => "English",
                                    )); 
                          
                          */
                                    ?>

                        {{-- <div class="form-row">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="السنه">
                            </div>
                            <div class="col">
                                <select class="form-control" id="exampleFormControlSelect1">
                                    <option selected>الشهر</option>
                                    <option>1 شهر</option>
                                    <option>2 شهر</option>
                                    <option>3 شهر</option>
                                    <option>4 شهر</option>
                                    <option>5 شهر</option>
                                </select>
                            </div>
                        </div> --}}
{{-- 
                        <div class="form-row">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="رقم الأمان">
                            </div>
                            <div class="col">
                            </div>
                        </div> --}}

                    </div>
                </div>

                <!-- details-order-blocks -->
                <div class="details-order-blocks">
                    <div class="order-blocks">
                        <h4>تفاصيل الطلب</h4>

                        <div class="item-order-details-block">
                            <!-- Item -->
                            <div class="item-order-details">
                                <div class="col-md-2 img-pro-cart">
                                    <img src="assets/images/img-inner-cart.jpg" />
                                </div>

                                <div class="col-md-6 products-name-data">
                                    <div class="name-product"> الرهدن للملابس البيضاء 6 كجم </div>
                                    <div class="desc-details-product">6 كجم</div>
                                </div>
                                <div class="col-md-2 quantity-numner-details"><span> 1 </span></div>
                                <div class="col-md-2 price-product-order">79 ر.س</div>
                            </div>

                        </div>
                    </div>
                    <div class="totlal-order-bootom">
                        الإجمالي: <span>{{ Cart::Total() }} ر.س</span>
                    </div>

                </div>


            </div>


         
        </div>
   <!-- Left Cart -->
   <div class="col-md-3 left-details cart-left  confirm-left">
    <div class="details-products-block-left  left-cart-block left-confirm-block  block-coupon">
        <h6>لديك كوبون؟</h6>
        <form method="post" action="{{ route('add_coupon') }}">
            @csrf
            <div class="form-group">
                <input type="text" name="coupon_code" id="coupon_code" class="form-control" placeholder="الرجاء إدخال الكوبون">
            </div>
            <button type="submit" class="btn btn-primary btn-link-confirm">تفعيل الكوبون</button>
        </form>

    </div>
    <div class="details-products-block-left  left-cart-block left-confirm-block block-total-confirm ">
        @if (Session()->has("coupon"))
        
        <div class="total-confirm">التخفيض: {{ Session()->get("coupon")['name']}} <span class="price-total-confirm">{{ Session()->get("coupon")['discount']}} ر.س</span></div>
        @endif
        <div class="total-confirm">التوصيل: <span class="price-total-confirm">{{ $shipping }} ر.س</span></div>

        <div class="total-confirm">الإجمالي: <span class="price-total-confirm">{{ $newTotal }} ر.س</span></div>
        <p>بالضغط على تأكيد الطلب أقر بأنني قرأت وفهمت كل ما يتعلق بالشروط و الأحكام.</p>
    <a class="btn-link-confirm" href="{{ route('confirm') }}">تأكيد الطلب</a>

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



@section('extra_scripts')
    <script>

        (function(){
                    // Create a Stripe client.
var stripe = Stripe('pk_test_oAfrMNbwX7nC03o4bUUaR2iT0066r3OVQl');

// Create an instance of Elements.
var elements = stripe.elements();

// Custom styling can be passed to options when creating an Element.
// (Note that this demo uses a wider set of styles than the guide below.)
var style = {
  base: {
    color: '#32325d',
    fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
    fontSmoothing: 'antialiased',
    fontSize: '16px',
    '::placeholder': {
      color: '#aab7c4'
    }
  },
  invalid: {
    color: '#fa755a',
    iconColor: '#fa755a'
  }
};

// Create an instance of the card Element.
var card = elements.create('card', {style: style});

// Add an instance of the card Element into the `card-element` <div>.
card.mount('#card-element');

// Handle real-time validation errors from the card Element.
card.addEventListener('change', function(event) {
  var displayError = document.getElementById('card-errors');
  if (event.error) {
    displayError.textContent = event.error.message;
  } else {
    displayError.textContent = '';
  }
});

// Handle form submission.
var form = document.getElementById('payment-form');
form.addEventListener('submit', function(event) {
  event.preventDefault();

  stripe.createToken(card).then(function(result) {
    if (result.error) {
      // Inform the user if there was an error.
      var errorElement = document.getElementById('card-errors');
      errorElement.textContent = result.error.message;
    } else {
      // Send the token to your server.
      stripeTokenHandler(result.token);
    }
  });
});

// Submit the form with the token ID.
function stripeTokenHandler(token) {
  // Insert the token ID into the form so it gets submitted to the server
  var form = document.getElementById('payment-form');
  var hiddenInput = document.createElement('input');
  hiddenInput.setAttribute('type', 'hidden');
  hiddenInput.setAttribute('name', 'stripeToken');
  hiddenInput.setAttribute('value', token.id);
  form.appendChild(hiddenInput);

  // Submit the form
  form.submit();
}
        });


    </script>
@endsection