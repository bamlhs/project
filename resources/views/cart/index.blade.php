@extends('layout.layout')

@section("content")



<div class="main-web">
    <!--  Main web  -->
    <div class="container">
        <div class="breadcrumb">
            <a href="#">المتجر</a>
            <span>سلة التسوق</span>

        </div>

        <div class="row container-cart-massage">
            <div class="col-md-9 ml-auto massage-note-cart">
                <div class="note-cart">
                    الشحن المجاني للمشتريات فوق ٢٠٠ ريال. أضف المزيد من المشتريات بقيمة ٥٠ ريال للحصول على الشحن المجاني
                </div>
            </div>
        </div>

        <div class="row container-cart-data">
            <div class="col-md-9 right-details  cart-right">
                <div class="details-products-block ">
                    <div class="header-cart">
                        <div class="title-cart">سلة التسوق</div>
                        <div class="number-products">{{ Cart::count() }} منتجات</div>
                    </div>

                    <div class="details-cart">
                        <div class="form-check form-check-inline check-all">
                            <input class="form-check-input" type="checkbox" id="check-all" value="check-all">
                            <label class="form-check-label" for="check-all">تحديد جميع المنتجات</label>
                        </div>

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
                    <input type="text" class="quantity-amount number-quantity" name="" value="{{ $item->qty }}" 
                    data-id="{{ $item->rowId }}" />
                    <div class=" btn-dec-inc ">
                        <button class="increase value-button btn-inc" type="button" title="Increase Quantity">+</button>
                        <button class="decrease value-button btn-dec" type="button" title="Decrease Quantity">-</button>
                    </div>
                </div>



                <div class="price-product-cart">{{ $item->price }} ر.س</div>

                <button type="button" class="btn btn-link delete-product">
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
                    <h6>ملخص الطلب</h6>
                    <div class="desc-order-left">
                        <div class="item-desc-order">
                            <div class="lable-desc">الإجمالي المبدئي:</div>
                            <div class="fld-desc">{{ Cart::Total() }} ر.س</div>
                        </div>
                        <div class="item-desc-order">
                            <div class="lable-desc">سعر التوصيل:</div>
                            <div class="fld-desc">{{ Cart::Tax() }} ر.س</div>
                        </div>

                    </div>
                    <div class="total-price-order">
                        <div class="lable-desc">سعر التوصيل:</div>
                        <div class="fld-desc">{{ $shipping }} ر.س</div>
                    </div>
                    <div class="btn-cart-order">
                        <form action="{{ route('checkout') }}">
                        <button type="submit">
                            شراء ( <span>{{ Cart::count() }} منتجات</span> )
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
            const classname = document.querySelectorAll('.quantity-amount');

            Array.from(classname).forEach(function(element){
                element.addEventListener('change', function(){
                    const id = element.getAttribute("data-id");
                    axios.patch(`/cart-qty/${id}`,{
                        quantity: this.value
                    })
                    .then(function(response){
                        window.location.href = '{{ route("cart") }}'
                    })
                    .catch(function(error){

                    });
                })
            });
        });

    </script>


@endsection