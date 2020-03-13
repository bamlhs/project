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
                                <img src="{{ asset("assets/images/logo-v2.svg") }}" />
                            </div>
    
                            <div class="data-login-block">
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active" data-toggle="tab" href="#login-tab" role="tab" aria-controls="login-tab" aria-selected="true">{{ __("text.Signin") }} </a>
    
                                    <a class="nav-item nav-link" data-toggle="tab" href="#register-tab" role="tab" aria-controls="register-tab" aria-selected="false">{{ __("text.Register") }}</a>
    
                                </div>
                                <div class="tab-content content-login" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="login-tab" role="tabpanel" aria-labelledby="nav-home-tab">
                                        <form class="overlay-login-form" method="POST" action="{{ route('login') }}">
                                            @csrf
                                            <div class="form-group">
                                                <input type="email" class="form-control  @error('email') is-invalid @enderror" placeholder="{{ __("text.Mail") }}" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control  @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="{{ __("text.Password") }}">
                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    
                                                        <label class="form-check-label" for="remember">
                                                            {{ __('Remember Me') }}
                                                        </label>
                                                    </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary btn-login">{{ __('Login') }}</button>
                                   
                                        </form>
                                        <div class="info-login">
                                            @if (Route::has('password.request'))
                                            <div class="forget-password"><a href="{{ route('password.request') }}"> {{ __('Forgot Your Password?') }} </a></div>
                                            @endif
                                            <div class="no-register">{{ __("text.guest") }}                                            </div>
                                        </div>
    
    
    
                                    </div>
    
                                    <div class="tab-pane fade" id="register-tab" role="tabpanel" aria-labelledby="register-tab">
                                        <form method="POST" action="{{ route('register') }}">
                                            @csrf
                                            <div class="form-group">

                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="{{ __('text.Name') }}">

                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>


                                            <div class="form-group">
                                                <input id="email"  type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="{{ __('text.mail') }}" >
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                          
                                            <div class="form-group">
                                                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="{{ __('text.Password') }}">
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                            <input id="password-confirm" type="password" class="form-control"  name="password_confirmation" required autocomplete="new-password" placeholder="{{ __('text.re-password') }}">
                                            </div>

                                            <button type="submit" class="btn btn-primary btn-login">{{ __('Register') }}</button>
                                         
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