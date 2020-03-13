@extends('layout.layout')

@section('content')

<div class="main-web">
    <!--  Main web  -->
    <div class="bg-img-inner">
        <div class="container block-data-top-header">
            <div class="data-top-header">
               
            </div>

            <h2>{{ __("text.HomeService") }}</h2>
        </div>
    </div>

    <div class="data-page">
        <div class="container">
            <div class="bg-inner-page booking-service-home">
                <div class="data-page with-img">
                    <div class="right-page right-page-img"> </div>
                    <div class="left-page">
                        <div class="form-booking">
                            <form method="post" action="{{ action('ServiceController@StoreHome') }}">
                                <div class="form-group">
                                    <label>{{ __("text.Name") }}</label>
                                <input type="text" class="form-control" placeholder="{{ __("text.Name") }}"  name="name" id="name" value="{{ old('name') }}">
                                </div>
                                <input name="_token" type="hidden" value="{{ csrf_token() }}"/>

                                <div class="form-group">
                                    <label> {{ __("text.phone") }}</label>
                                <input type="text" class="form-control" placeholder="{{ __("text.phone") }}"  name="phone" id="phone"  value="{{ old('phone') }}">
                                </div>
                                <div class="form-group">
                                    <label>{{ __("text.address") }}</label>
                                    <input type="text" class="form-control" placeholder="{{ __("text.address") }}"  name="address" id="address"  value="{{ old('address') }}">
                                </div>
                                 
                                <button type="submit" class="btn btn-primary btn-booking">{{ __("text.send") }}</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- End  Main web  -->
@stop