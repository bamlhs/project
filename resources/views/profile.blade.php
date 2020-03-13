@extends("layout.layout")

<div class="main-web">
    <!--  Main web  -->
    <div class="container container-show-data">
        {{-- <div class="alert alert-dismissible fade show bg-alert" role="alert">
            الرجاء إكمال عملية التسجيل
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div> --}}
        <div class="breadcrumb">
            <a href="#">المتجر</a>
            <a href="#">سلة التسوق</a>
            <span>بيانات المستخدم</span>

        </div>@if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


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
                    <form action="{{ route('sprofile') }}" method="post">
                        @csrf
                        @if(!empty($profile))

                        <!-- Data Personal -->
                        <div class="block-form">
                            <h4>البيانات الشخصية</h4>

                            <div class="data-block-form">

                                <div class="form-row">
                                    <div class="col">
                                    <input type="text" class="form-control" placeholder="الإسم"  name="name" id="name" value="{{ old('name', $profile->name)}}">
                                    </div>
                                    <div class="col">
                                        <input type="text" class="form-control" placeholder="رقم الجوال" name="phone" id="phone" value="{{  old('phone', $profile->phone) }}">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="col">
                                        <input type="text" name="birthdate" id="birthdate" class="form-control js-datepicker" data-provide="datepicker" placeholder="تاريخ الميلاد" value="{{  old('birthdate', $profile->birthdate) }}">
                                    </div>

                                    <div class="col">
                                        <select class="form-control" name="gender" id="gender">
                                            <option>الجنس</option>
                                            <option value="0" {{ ($profile->gender == 0 || old('phone') == 0)  ? 'selected' : ''}}>ذكر </option>
                                            <option value="1" {{ ($profile->gender == 1 || old('phone') == 1) ? 'selected' : ''}}>أنثى </option>
                                        </select>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <!-- Contact  Addess  -->
                        <div class="block-form with-title">
                            <div class="title-block-form">
                                <h4>عنوان التوصيل</h4>
                            </div>

                            <div class="data-block-form">
                                <div class="form-row">
                                    <div class="col">
                                        <input type="text" name="province" id="province" class="form-control" placeholder="المنطقة"  value="{{  old('province', $profile->province) }}">

                                    </div>
                                    <div class="col">
                                        <input type="text" name="city" id="city" class="form-control" placeholder="المدينة"  value="{{  old('city', $profile->city) }}">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col">
                                        <input type="text" name="block" id="block" class="form-control" placeholder="الحي"  value="{{  old('block', $profile->block) }}">
                                    </div>
                                    <div class="col">
                                        <input type="text" name="street" id="street" class="form-control" placeholder="الشارع"  value="{{  old('street', $profile->street) }}">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="col">
                                        <textarea name="place_extra" id="place" class="form-control"  rows="3" placeholder="تفاصيل إضافية"  value="{{  old('place', $profile->place_extra ) }}"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @else

                             <!-- Data Personal -->
                             <div class="block-form">
                                <h4>البيانات الشخصية</h4>
    
                                <div class="data-block-form">
    
                                    <div class="form-row">
                                        <div class="col">
                                        <input type="text" class="form-control" placeholder="الإسم"  name="name" id="name">
                                        </div>
                                        <div class="col">
                                            <input type="text" class="form-control" placeholder="رقم الجوال" name="phone" id="phone">
                                        </div>
                                    </div>
    
                                    <div class="form-row">
                                        <div class="col">
                                            <input type="text" name="birthdate" id="birthdate" class="form-control js-datepicker" data-provide="datepicker" placeholder="تاريخ الميلاد">
                                        </div>
    
                                        <div class="col">
                                            <select class="form-control" name="gender" id="gender">
                                                <option>الجنس</option>
                                                <option value="0">ذكر </option>
                                                <option value="1">أنثى </option>
                                            </select>
                                        </div>
    
                                    </div>
                                </div>
                            </div>
    
                            <!-- Contact  Addess  -->
                            <div class="block-form with-title">
                                <div class="title-block-form">
                                    <h4>عنوان التوصيل</h4>
                                </div>
    
                                <div class="data-block-form">
                                    <div class="form-row">
                                        <div class="col">
                                            <input type="text" name="province" id="province" class="form-control" placeholder="المنطقة">
    
                                        </div>
                                        <div class="col">
                                            <input type="text" name="city" id="city" class="form-control" placeholder="المدينة">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col">
                                            <input type="text" name="block" id="block" class="form-control" placeholder="الحي">
                                        </div>
                                        <div class="col">
                                            <input type="text" name="street" id="street" class="form-control" placeholder="الشارع">
                                        </div>
                                    </div>
    
                                    <div class="form-row">
                                        <div class="col">
                                            <textarea name="place" id="place" class="form-control"  rows="3" placeholder="تفاصيل إضافية"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                        <button class="btn btn-primary btn-send" type="submit">حفظ</button>
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


@section('extra_scripts')
    <script>
          axios.post('/post-contact',{name:'Kamal Abounaim'})
        .then((response)=>{
            console.log(response)
        }).catch((error)=>{
            console.log(error.response.data)
        })
    </script>
@endsection