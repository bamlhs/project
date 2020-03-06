<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>


        



        @guest


    <!-- Modal Login  -->
    <div class="modal fade login-modal" id="loginModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="block-login-modal">
            <div class="modal-dialog" role="document">
                <div class="modal-content">

                    <div class="modal-body">

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>

                        <div class="logo-login">
                            <img src="assets/images/logo-v2.svg" />
                        </div>

                        <div class="data-login-block">
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" data-toggle="tab" href="#login-tab" role="tab" aria-controls="login-tab" aria-selected="true">تسجيل الدخول </a>

                                <a class="nav-item nav-link" data-toggle="tab" href="#register-tab" role="tab" aria-controls="register-tab" aria-selected="false">تسجيل جديد</a>

                            </div>
                            <div class="tab-content content-login" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="login-tab" role="tabpanel" aria-labelledby="nav-home-tab">

                                    <form action="{{ route('login') }}" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="البريد الإلكتروني">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="كلمة المرور">
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-login">تسجيل الدخول</button>
                                    </form>
                                    <div class="info-login">
                                        <div class="forget-password"><a href="#"> نسيت كلمة المرور؟</a></div>
                                        <div class="no-register">أو يمكنك الإكمال بدون تسجيل، <a href="#">كضيف.</a>
                                        </div>
                                    </div>



                                </div>

                                <div class="tab-pane fade" id="register-tab" role="tabpanel" aria-labelledby="register-tab">


                                    <form action="{{ route('register') }}" method="post">
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="البريد الإلكتروني">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="كلمة المرور">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="إعادة كلمة المرور">
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-login">تسجيل</button>
                                    </form>

                                </div>
                            </div>
                        </div>



                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal Login  -->



        @endguest
    </div>
</body>
</html>
