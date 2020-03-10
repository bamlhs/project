    <!-- Contact Us Modal -->
    <div class="modal fade" id="contactUsModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="container">
            <div class="modal-dialog  contactUsModal" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="bg-inner-page">
                            <div class="data-page with-img">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <div class="right-page right-page-img">
                                    <div class="data-contactus">
                                        <p>
{{ __('text.work-time') }}
                                        </p>
                                        <div class="contactus-data">
                                            <span class="phone">
                                                <img src="assets/images/support.svg" />
                                                920006848
                                            </span>

                                            <span class="email-w">
                                                <img src="assets/images/email-w.svg" />
                                                info@alrahden.com
                                            </span>

                                            <span class="download-w">
                                                <img src="assets/images/download-w.svg" />
                                                12345
                                            </span>
                                        </div>
                                    </div>

                                </div>
                                <div class="left-page">
                                    <div class="form-booking form-contactUs">
                                        <form>
                                            <div class="row">
                                                <div class="col form-group">
                                                    <label>{{ __('text.Name') }}</label>
                                                    <input type="text" class="form-control" placeholder=">{{ __('text.Name') }}">
                                                </div>
                                                <div class="col form-group">
                                                    <label>{{ __('text.phone') }}</label>
                                                    <input type="text" class="form-control" placeholder="{{ __('text.phone') }}">
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col form-group">
                                                    <label>{{ __('text.Mail') }}</label>
                                                    <input type="email" class="form-control" placeholder="{{ __('text.Mail') }}">
                                                </div>
                                                <div class="col form-group">
                                                    <label>{{ __('text.msg-title') }}</label>
                                                    <input type="text" class="form-control" placeholder="{{ __('text.msg-title') }}">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="inputState">{{ __('text.message') }}</label>message
                                                <textarea class="form-control" rows="3" placeholder="{{ __('text.your-message') }}"></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-primary btn-booking">{{ __('text.send') }}</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact Us Modal -->

