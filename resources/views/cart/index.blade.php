@extends('layout.layout')

@section("content")



<div class="main-web">
    <!--  Main web  -->
    <div class="container">
        <div class="breadcrumb">
            <a href="#">{{ __("text.Store")}}</a>
            <span>{{ __("text.cart")}}</span>

        </div>

        <div class="row container-cart-massage">
            {{-- <div class="col-md-9 ml-auto massage-note-cart">
                <div class="note-cart">
                    الشحن المجاني للمشتريات فوق ٢٠٠ ريال. أضف المزيد من المشتريات بقيمة ٥٠ ريال للحصول على الشحن المجاني
                </div>
            </div> --}}
        </div>

        <div class="row container-cart-data">
            <div class="col-md-9 right-details  cart-right">
                <div class="details-products-block ">
                    <div class="header-cart">
                        <div class="title-cart"> {{ __("text.cart") }}</div>
                        <div class="number-products"><span class="counter">{{ Cart::count() }}</span> {{ __("text.products") }}</div>
                    </div>
                    
                    <div class="details-cart">
                         
                        @if (Cart::count() == 0)
                          <p style="padding: 15px 20px;">{{ __("text.empty_cart") }}</p>
                        @endif


                        <div class="products-cart-details">

                @foreach(Cart::content() as $item)
                @php
                            $image = json_decode($item->model->image);
                 @endphp
            <!--  details-item-cart -->
            <div class="details-item-cart">
                <div class="checkbox-input">
                    <input class="checkbox-item" type="checkbox" value="option2">
                </div>
                <div class="img-pro-cart">
                    
                    <img src="{{ URL::asset('storage/'.$image[0]) }}" />
                </div>

                <div class="products-name-data">
                    <div class="name-product">{{ $item->name }} </div>
                 </div>

                <div class="quantity-container quantity-block-number">
                    <input type="number" class="quantity-amount number-quantity" name="" value="{{ $item->qty }}" 
                    data-id="{{ $item->rowId }}" />
                    <div class=" btn-dec-inc ">
                        <button class="increase value-button btn-inc" type="button" title="Increase Quantity">+</button>
                        <button class="decrease value-button btn-dec" type="button" title="Decrease Quantity">-</button>
                    </div>
                </div>



                <div class="price-product-cart">{{ $item->price }} {{ __("text.sr") }}</div>

                <button type="button" class="btn btn-link delete-product" data-id="{{ $item->rowId }}" >
                    <img src="assets/images/delete.svg" />
                </button>
            </div>




                @endforeach


                        </div>
                    </div>
                </div>
            </div>


            <!-- Left Cart -->
            <div class="col-md-3 left-details cart-left">
                <div class="details-products-block-left left-cart-block ">
                    <h6>{{ __("") }}</h6>
                    <div class="desc-order-left">
                        <div class="item-desc-order">
                            <div class="lable-desc">{{ __("text.initial_total") }}</div>
                            <div class="fld-desc"><span class="fld-total">{{ Cart::Total() }}</span> {{ __("text.sr") }}</div>
                        </div>
                       

                    </div>
                    <div class="total-price-order">
                    <div class="lable-desc">{{ __("text.delivery_price") }}</div>
                        <div class="fld-desc"><span class="fld-shipping"><span class="ship">{{ $shipping }}</span></span>  {{ __("text.sr") }}</div>
                    </div>
                    <div class="btn-cart-order">
                        <form action="{{ route('checkout') }}">
                        <button type="submit">
                            شراء ( <span><span class="counter">{{ Cart::count() }}</span> {{ __("text.products")}}</span> )
                         </a>
                    </div>
                </form>

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



</div>
<!-- End  Main web  -->
    
@endsection


@section('extra_scripts')
    

    <script type="application/javascript">
 
 jQuery(document).ready(function() { 

$('.value-button').each(function() { 
    $(this).on("click", function() {
                let qty_amount = $(this).parent().parent().find(".quantity-amount");

                const id = qty_amount.data("id");
                console.log(id);
                if(qty_amount.val() < 1){
                    qty_amount.val(1)
                }
                axios.patch(`/qty/${id}`,{
                    quantity: qty_amount.val()
                })
                .then(function(response){
                    console.log(response.data.total);
                    $('.fld-total').text(response.data.total);
                    $('.counter').text(response.data.counter);
                    $('.ship').text(response.data.shipping);
                    $(".number-item-cart").text(response.data.counter);
                    // window.location.href = '{{ route("cart") }}'
                })
                .catch(function(error){
                    console.log(error);
                }); 
                 
            });
});

$('.delete-product').each(function() { 
    $(this).on("click", function() {
                var product_id = $(this).data("id");

                axios.delete(`/product/delete/${product_id}`)
                .then(function(response){
                    console.log(response.data.total);
                    $('.fld-total').text(response.data.total);
                    $('.counter').text(response.data.counter);
                    $('.ship').text(response.data.shipping);
                    $(".number-item-cart").text(response.data.counter);
                    // window.location.href = '{{ route("cart") }}'
                    location.reload(true);
                })
                .catch(function(error){
                    console.log(error);
                });
                 
            });
});

            $(".quantity-amount").on('change keydown keypress keyup mousedown click mouseup', function(){
                console.log('change');

            });
        });
       
 

    </script>


@endsection