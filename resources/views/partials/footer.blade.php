

   <!-- Footer  -->
   <footer>
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-md-4 footer-block">
                <h2>{{ __("text.Contact") }}</h2>
                    <div class="data-contact">
                        <div class="address">
                            <img src="{{ asset('assets/images/address.svg')}}" /> {{ __("text.Riyadh-saudi") }}
                        </div>
                        <div class="phone">
                            <img src="{{ asset('assets/images/support-footer.svg')}}" /> 920006848
                        </div>
                        <div class="download-no">
                            <img src="{{ asset('assets/images/download-icon.svg')}}" /> 12345
                        </div>
                        <div class="email">
                            <img src="{{ asset('assets/images/icon-mail.svg')}}" /> info@alrahden.com
                        </div>
                    </div>

                    <div class="social-media">
                        <ul>
                            <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-youtube"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-snapchat-ghost"></i></a></li>
                        </ul>
                    </div>
                 
                </div>
                <div class="col-md-4 footer-block">
                <h2>{{ __("text.related-links") }}</h2>
                    <ul class="footer-menu">
                    <li><a href="{{ route('laundry') }}">{{ __("text.Laundries") }}</a></li>
                        <li><a href="{{ route('tools') }}">{{ __("text.Tools") }}</a></li>
                        <li><a href="{{ route('hotels') }}">{{ __("text.Hotels") }}</a></li>
                        <li><a href="{{ route('shop') }}">{{ __("text.Store") }}</a></li>
                        <li><a href="{{ route('home') }}">{{ __("text.HouseService") }}</a></li>
                    </ul>

                </div>
                <div class="col-md-4 footer-block">
                    <h2>{{ __("text.getOurOffers") }}</h2>
                    <div class="maill-list">
                        <div class="note-mail">
{{ __("text.be-aware") }}                        </div>
                        <form>
                            <input type="email" class="form-control" placeholder="{{ __("text.emailOrphone") }}" />
                            <button type="submit" class="btn btn-primary">{{ __("text.subscribe") }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <ul>
            <li><a href="#">{{ __("text.privacy") }}</a></li>
            <li><a href="#">{{  __("text.Mail") }}</a></li>
        </ul>
    <div class="copy-right">{{ __("text.reserved") }}</div>
    </div>
</footer>
