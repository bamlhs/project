
    <header>
        <!-- header-top -->
        <div class="header-top">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="top-menu">
                            <ul>
                                <li><a href="{{ route('laundry') }}">
                                   {{ __("text.Laundries") }}
                                </a></li>
                                <li><a href="{{ route('tools') }}">{{ __("text.Tools") }}</a></li>
                                <li><a href="{{ route('hotels') }}">{{ __("text.Hotels") }}</a></li>
                            <li><a href="{{ route('shop') }}">{{ __("text.Store") }}</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="header-left">
                            <!-- header home -->
                            <div class="header-home">
                                <ul class="data-header-left">
                                    <li>
                                    <span><img src="{{ asset('assets/images/icon_phone.svg') }}" /> {{ __("text.Application") }} </span>
                                    </li>
                                    <li><img src="{{ asset('assets/images/support.svg')}}" />920006848</li>
                                    

                                </ul>
                            </div>

                            <!-- header login -->
                            <div class="header-login">
                                <ul>
                                    <li><img src="{{ asset('assets/images/support.svg') }}" />920006848</li>
                                    
                                    @yield('aimeos_head')

                                   
                                    <li class="users-header">
                                       @if (!Auth::check())
                                        <img class="icon-user" src="{{ asset('assets/images/icon-user.svg')}}" />
                                        <a href="#" data-toggle="modal" data-target="#loginModal"> {{ __("text.Register") }} </a>
                                        <span>/</span>
                                        <a href="#" data-toggle="modal" data-target="#loginModal"> {{ __("text.Signin") }}</a>
                                        @else
                                        <i class="fa fa-user"></i> 
                                            <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('frm-logout').submit();">Logout</a>    
                                            <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                          
@endif
                                    </li>

                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ِend header-top -->

        <!-- header-main -->
        <div class="header-main">
            <div class="container-fluid">
                <div class="row row-header-mobile">
                    <div class="col-md-3 logo">
                        <a href="{{ route('main') }}">
                            <img src="{{ asset('assets/images/Logo.svg') }}" />
                        </a>
                    </div>
                    <div class="col-md-9 left-header">
                        <!-- main-menu-block -->
                        <div class="main-menu-block mobile-header-nav">
                            <ul class="main-menu">
                                <li><a href="{{ route('main') }}">{{ __("text.Home") }}</a></li>
                                <li class="dropdown">
                                    <a href="#">{{ __("text.Services") }}</a>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown">
                                            <a href="{{ route('laundry') }}">{{ __("text.Laundries") }}</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="{{ route('tools') }}">{{ __("text.Tools") }}</a></li>
                                                <li><a href="{{ route('hotels') }}">{{ __("text.Hotels") }}</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">{{ __("text.Tools") }}</a></li>
                                        <li><a href="#">{{ __("text.Hotels") }}</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ route('home') }}">{{ __("text.HouseService") }}</a></li>
                                <li><a href="#" data-toggle="modal" data-target="#contactUsModal">{{ __("text.Contact") }}</a></li>
                            </ul>
                        </div>

                        {{-- <!-- search block -->
                        <div class="search">
                            <form>
                                <input class="search-input" type="search" placeholder="البحث">
                            </form>
                        </div> --}}

                        @yield('aimeos_nav')

                        @section('aimeos_head')
                        @stop
                        
                        <a class="mobile-menu-toggle js-toggle-menu hamburger-menu" href="#">
                            <span class="menu-item"></span>
                            <span class="menu-item"></span>
                            <span class="menu-item"></span>
                        </a>

                    </div>
                </div>
            </div>
        </div>
        <!-- end header-main -->
    </header>