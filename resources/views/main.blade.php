@extends("layout.layout")

@section('content')
 
<style>
    .items-service {
        position: relative;
    }
    
    .items-service .overlay:after {
        position: absolute;
        content: '';
        z-index: 6;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        opacity: 0;
        transition: 0.3s;
    }
    
    .items-service .content {
        position: absolute;
        content: '';
        z-index: 7;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        opacity: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        transition: 0.5s all ease;
    }
    
    .items-service .content h2 {
        color: white;
        font-size: 1.4rem;
    }
    
    .items-service:hover .content {
        opacity: 1;
    }
    
    .items-service .content h2 {
        display: block;
        color: #fff;
        position: relative;
        z-index: 8;
        transition-duration: 1s;
        transform: translateY(50px) scale(0.6);
    }
    
    .items-service:hover .content h2 {
        transform: translateY(0) scale(1);
    }
    
    .items-service:hover .overlay:after {
        background: rgba(0, 0, 0, 0.65);
        opacity: 1;
    }
    
    .items-service:hover img {
        -webkit-transform: scale(1.2);
        transform: scale(1.2);
    }
</style>

</head>

<body>
  
<!-- End Header -->
<div class="main-web">
    <!--  Main web  -->
    <!-- main slider -->
    <div class="main-slider" dir="ltr">
        <div>
            <img src="assets/images/slider.jpg" />
        </div>
        <div>
            <img src="assets/images/slider2.jpg" />
        </div>
        <div>
            <img src="assets/images/slider2.jpg" />
        </div>
    </div>
    <!-- End main slider -->

    <!-- service home -->
    <div class="service-home  wow zoomIn animated " data-wow-delay="0.3s">
        <div class="items-service wow zoomIn animated " data-wow-delay="0.2s">
            <a href="#">
                <img src="assets/new/imags/carpet_washing.jpg" />
                <div class="desc-item-service">
                    <div class="icon-service">
                        <img src="assets/images/icon-service.svg" />
                    </div>
                <h2>{{ __("text.carpets") }}</h2>
                </div>

            </a>
            <div class="overlay">

            </div>
            <div class="content">
                <h2>{{ __("text.carpets") }} </h2>

            </div>
        </div>
        <div class="items-service wow zoomIn animated " data-wow-delay="0.4s">
            <a href="#">
                <img src="assets/new/imags/ironing_shirts.jpg" />
                <div class="desc-item-service">
                    <div class="icon-service">
                        <img src="assets/images/service2.svg" />
                    </div>
                    <h2>{{ __("text.clothes") }}</h2>
                </div>
            </a>
            <div class="overlay">

            </div>
            <div class="content">
                <h2>{{ __("text.clothes") }} </h2>

            </div>
        </div>
        <div class="items-service wow zoomIn animated " data-wow-delay="0.6s">
            <a href="#">
                <img src="assets/new/imags/washing_gowns.jpg" />
                <div class="desc-item-service">
                    <div class="icon-service">
                        <img src="assets/images/service3.svg" />
                    </div>
                    <h2>{{ __("text.ibayas") }}</h2>
                </div>
            </a>
            <div class="overlay">

            </div>
            <div class="content">
                <h2>{{ __("text.ibayas") }}</h2>

            </div>
        </div>
        <div class="items-service wow zoomIn animated " data-wow-delay="0.8s">
            <a href="#">
                <img src="assets/new/imags/washing_towels.jpg" />
                <div class="desc-item-service">
                    <div class="icon-service">
                        <img src="assets/images/shop-icon.svg" />
                    </div>
                    <h2>{{ __("text.towels") }}</h2>
                </div>

            </a>
            <div class="overlay">

            </div>
            <div class="content">
                <h2>{{ __("text.towels") }}</h2>
            </div>
        </div>
    </div>
    <!-- End service home -->


    <!-- Booking a home service -->
    <div class="booking-service">
        <div class="container wow  fadeInUp animated" data-wow-delay="0.3s">
        <h2>{{ __("text.HouseService") }}</h2>
            <p>
            {{  __("text.our-pride") }}
            </p>
            
            <form class="form-booking-home"  method="post" action="{{ route("StoreHome") }}">
                @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
                <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
            <input type="text" lass="form-control" placeholder="{{ __('text.Name')}}"  name="name" id="name" value="{{ old("name") }}">
                <input type="text" name="phone" id="phone" class="form-control" placeholder="{{ __('text.phone')}}" value="{{ old("phone") }}">
                <input type="text" class="form-control" placeholder="{{ __('text.address') }}"  name="address" id="address" value="{{ old("address") }}">
            <button type="submit" class="btn btn-primary" >{{ __("text.Reserve-Now") }}</button>
            </form>
        </div>
    </div>
    <!-- ِEnd Booking a home service -->


    <!-- Alrahden Now -->
    <div class="alrahden-now ">
        <div class="container">
            <h2>الرهدن الآن</h2>
            <div class="data-alrahden">
                <div class="item-now wow zoomIn animated " data-wow-delay="0.2s">
                    <img src="./assets/images/user-tie.svg" />
                    <div class="acount-number-now">1</div>
                <div class="title-now"> {{ __('text.quality') }}</div>
                </div>

                <div class="item-now wow zoomIn animated " data-wow-delay="0.4s">
                    <img src="./assets/images/emp.svg" />
                    <div class="acount-number-now">30</div>
                <div class="title-now">{{ __("text.experience-year") }}</div>
                </div>

                <div class="item-now wow zoomIn animated " data-wow-delay="0.6s">
                    <img src="./assets/images/icon_location.svg" />
                    <div class="acount-number-now">5</div>
                    <div class="title-now">{{ __("text.differenet-region") }}</div>
                </div>

                <div class="item-now wow zoomIn animated " data-wow-delay="0.8s">
                    <img src="./assets/images/order-icon.svg" />
                    <div class="acount-number-now">5000</div>
                <div class="title-now">{{ __("text.requests") }}</div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Alrahden Now -->

    <!-- Customers Bolck -->
    <div class="customers">
        <div class="container">
        <h2>{{ __("text.our-clients") }}</h2>
            <div class="customers-service wow zoomIn animated " data-wow-delay="0.8s" dir="ltr">
                <div class="item-custom">
                    <a href="#" target="_blank">
                        <img src="./assets/images/coustom1.png" />
                    </a>

                </div>

                <div class="item-custom">
                    <a href="#" target="_blank">
                    <img src="{{ asset('./assets/images/coustom2.png') }}" />
                    </a>

                </div>

                <div class="item-custom">
                    <a href="#" target="_blank">
                    <img src="{{ asset('/assets/images/coustom3.png') }}" />
                    </a>

                </div>

                <div class="item-custom">
                    <a href="#" target="_blank">
                        <img src="./assets/images/coustom4.png" />
                    </a>

                </div>

                <div class="item-custom">
                    <a href="#" target="_blank">
                        <img src="./assets/images/coustom5.png" />
                    </a>

                </div>

                <div class="item-custom">
                    <a href="#" target="_blank">
                        <img src="./assets/images/coustom6.png" />
                    </a>

                </div>

                <div class="item-custom">
                    <a href="#" target="_blank">
                        <img src="./assets/images/coustom7.png" />
                    </a>

                </div>

                <div class="item-custom">
                    <a href="#" target="_blank">
                        <img src="./assets/images/coustom4.png" />
                    </a>

                </div>

                <div class="item-custom">
                    <a href="#" target="_blank">
                        <img src="./assets/images/coustom2.png" />
                    </a>

                </div>

                <div class="item-custom">
                    <a href="#" target="_blank">
                        <img src="./assets/images/coustom3.png" />
                    </a>

                </div>


            </div>

        </div>
    </div>
    <!-- End Customers Bolck -->

    <!-- Mailing list right -->
    <div class="mailing-list-right  animatable bounceInRight">
        <div class="btn-colse-mail">X</div>
    <div class="desc-mail-right">{{ __("text.subscribe-offers") }}</div>
        <form>
        <input type="email" class="form-control" placeholder="{{ __('text.emailOrphone') }}" />
            <button type="submit" class="btn btn-primary">إشترك</button>
        </form>
    </div>
    <!-- End Mailing list right -->


    <!-- footer -->
</div>


@endsection