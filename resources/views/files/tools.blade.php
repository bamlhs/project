@extends('layout.layout')

@section('content')


<div class="main-web">
    <!--  Main web  -->
    <!-- main slider -->
    <div class="main-slider" dir="ltr">
        <div>
            <img src="{{ asset('assets/images/slider.jpg')  }}" />
        </div>
        <div>
            <img src="{{ asset('assets/images/slider2.jpg') }}" />
        </div>
        <div>
            <img src="{{ asset('assets/images/slider2.jpg') }}" />
        </div>
    </div>
    <!-- End main slider -->

    <!-- Projects  -->
    <div class="projects-block-home">
        <div class="container">
            <h2>Completed Projects</h2>
            <div class="projects-block">
                <div class="item-projects">
                    <a href="#" target="_blank">
                        <img src="{{ asset('assets/images/slider-project.png') }}" />
                        <h3>SaudiOger Company - Riyadh - Jeddah - AL-Dammam - Mecca</h3>
                    </a>
                </div>
                <div class="item-projects">
                    <a href="#" target="_blank">
                        <img src="{{ asset('assets/images/slider-project.png') }}" />
                        <h3>SaudiOger Company - Riyadh - Jeddah - AL-Dammam - Mecca</h3>
                    </a>
                </div>
                <div class="item-projects">
                    <a href="#" target="_blank">
                        <img src="{{ asset('assets/images/slider-project.png') }}" />
                        <h3>SaudiOger Company - Riyadh - Jeddah - AL-Dammam - Mecca</h3>
                    </a>
                </div>
                <div class="item-projects">
                    <a href="#" target="_blank">
                        <img src="{{ asset('assets/images/slider-project.png') }}" />
                        <h3>SaudiOger Company - Riyadh - Jeddah - AL-Dammam - Mecca</h3>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- End Projects  -->


    <!-- Videos Slider -->
    <div class="booking-service videos-slider-block">
        <div class="container wow  fadeInUp animated" data-wow-delay="0.3s">
            <h2>Videos</h2>

            <div class="videos-slider wow zoomIn animated " data-wow-delay="0.8s" dir="ltr">
                <div class="item-video">
                    <a href="https://www.youtube.com/embed/mrc_UtM2UsA" target="_blank">
                        <iframe width="100%" height="270" src="https://www.youtube.com/embed/mrc_UtM2UsA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </a>
                </div>

                <div class="item-video">
                    <a href="https://www.youtube.com/embed/mrc_UtM2UsA" target="_blank">
                        <iframe width="100%" height="270" src="https://www.youtube.com/embed/mrc_UtM2UsA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </a>
                </div>
                <div class="item-video">
                    <a href="https://www.youtube.com/embed/mrc_UtM2UsA" target="_blank">
                        <iframe width="100%" height="270" src="https://www.youtube.com/embed/mrc_UtM2UsA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </a>
                </div>

                <div class="item-video">
                    <a href="https://www.youtube.com/embed/mrc_UtM2UsA" target="_blank">
                        <iframe width="100%" height="270" src="https://www.youtube.com/embed/mrc_UtM2UsA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </a>
                </div>

            </div>
        </div>
    </div>
    <!-- ِEnd Videos Slider -->




    <!-- Customers Bolck -->
    <div class="customers tools-customers">
        <div class="container">
            <h2>our clients</h2>
            <div class="customers-service wow zoomIn animated " data-wow-delay="0.8s" dir="ltr">
                <div class="item-custom">
                    <a href="#" target="_blank">
                        <img src="{{ asset('./assets/images/coustom1.png') }}" />
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
                        <img src="{{ asset('./assets/images/coustom4.png') }}" />
                    </a>

                </div>

                <div class="item-custom">
                    <a href="#" target="_blank">
                        <img src="{{ asset('./assets/images/coustom5.png') }}" />
                    </a>

                </div>

                <div class="item-custom">
                    <a href="#" target="_blank">
                        <img src="{{ asset('./assets/images/coustom6.png') }}" />
                    </a>

                </div>

                <div class="item-custom">
                    <a href="#" target="_blank">
                        <img src="{{ asset('./assets/images/coustom7.png') }}" />
                    </a>

                </div>

                <div class="item-custom">
                    <a href="#" target="_blank">
                        <img src="{{ asset('./assets/images/coustom4.png') }}" />
                    </a>

                </div>

                <div class="item-custom">
                    <a href="#" target="_blank">
                        <img src="{{ asset('./assets/images/coustom2.png') }}" />
                    </a>

                </div>

                <div class="item-custom">
                    <a href="#" target="_blank">
                        <img src="{{ asset('./assets/images/coustom3.png') }}" />
                    </a>

                </div>


            </div>

        </div>
    </div>
    <!-- End Customers Bolck -->


    <!-- Our Agents Bolck -->
    <div class="customers our-agents">
        <div class="container">
            <h2>Our agents
            </h2>
            <div class="our-agents-service wow zoomIn animated " data-wow-delay="0.8s" dir="ltr">
                <div class="item-custom">
                    <a href="#" target="_blank">
                        <img src="{{ asset('./assets/images/Image56.png') }}" />
                    </a>

                </div>

                <div class="item-custom">
                    <a href="#" target="_blank">
                        <img src="{{ asset('./assets/images/Image57.png') }}" />
                    </a>

                </div>

                <div class="item-custom">
                    <a href="#" target="_blank">
                        <img src="{{ asset('./assets/images/Image58.png') }}" />
                    </a>

                </div>

                <div class="item-custom">
                    <a href="#" target="_blank">
                        <img src="{{ asset('./assets/images/Image57.png') }}" />
                    </a>

                </div>



                <div class="item-custom">
                    <a href="#" target="_blank">
                        <img src="{{ asset('./assets/images/Image58.png') }}" />
                    </a>

                </div>

                <div class="item-custom">
                    <a href="#" target="_blank">
                        <img src="{{ asset('./assets/images/coustom4.png') }}" />
                    </a>

                </div>

                <div class="item-custom">
                    <a href="#" target="_blank">
                        <img src="{{ asset('./assets/images/coustom2.png') }}" />
                    </a>

                </div>

                <div class="item-custom">
                    <a href="#" target="_blank">
                        <img src="{{ asset('./assets/images/Image57.png')  }}" />
                    </a>

                </div>


            </div>

        </div>
    </div>
    <!-- Our Agents Bolck -->

    <!-- Mailing list right -->
    <div class="mailing-list-right  animatable bounceInRight">
        <div class="btn-colse-mail">X</div>
        <div class="desc-mail-right">Subcsribe to get our offers</div>
        <form>
        <input type="email" class="form-control" placeholder="{{ __("text.emailOrphone") }}" />
            <button type="submit" class="btn btn-primary">Subcsribe</button>
        </form>
    </div>
    <!-- End Mailing list right -->


    <!-- footer -->
</div>
<!-- End  Main web  -->


@stop