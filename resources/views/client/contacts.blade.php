@extends('layouts.client')

@section('page-title', $page->meta->{'title' . $langSuf} )

@section('page-meta')
    <meta name="description" content="{{ $page->meta->{'description' . $langSuf} }}">
    <meta name="keywords" content="{{ $page->meta->{'keywords' . $langSuf} }}">
@stop

@section('page-style')
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/owl.theme.default.min.css">
@stop


@section('page-content')
    @include('layouts.whiteheader')

    <!--PRELOADER!!! -->
    <div id="preloader"></div>

    <!-- start of contacts page -->
    <section id="contacts">
        <!-- begin plashka -->
        <div class="plashka"></div>
        <!-- end plashka -->

        <div class="maps-container">
            <p class="maska"></p>

            <div id="kiev-map" class="koloro-map animated kiev active"></div>
            <div id="moscow-map" class="koloro-map animated moscow"></div>

            <div class="contacts-cont">
                <div class="gl-container">
                    <h2 class="section-header">@lang('message.contact')</h2>
                </div>
            </div>

            <!-- start of fly-block -->
            <div class="fly-block">
                <ul class="contacts-menu">
                    <li class="kiev active">@lang('messages.kiev')</li>
                    <li class="moscow">@lang('messages.moscow')</li>
                </ul>

                <span class="close-contacts-btn">
                <i class="icon icon-cross-yellow"></i>
            </span>

                <div class="tab-panel">
                    <!-- start of kiev tab-pane -->
                    <div class="tab-pane animated kiev">
                        <div class="main-info">
                            <div class="city-cont">
                                <i class="icon icon-kiev"></i>
                            </div>
                            <div class="contact-info">
                                <p class="phone">
                                    <a class="call-us-phone"
                                       href="tel:{{-- */ $data = str_replace(' ', '', env('OUR_PHONE_NUMBER')); /* --}}{{$data}}">{{ env('OUR_PHONE_NUMBER') }}</a>
                                </p>
                                <p class="email">
                                    <a href="mailto:{{ env('OUR_EMAIL') }}">{{ env('OUR_EMAIL') }}</a>
                                </p>
                            </div>
                        </div>

                        <!-- photo slider starts -->
                        <div class="contacts-slider-cont">
                                <span class="arrow-left-btn">
                                    <img src="/images/general/slide_left_yellow_mob.png">
                                </span>
                            <span class="arrow-right-btn">
                                    <img src="/images/general/slide_right_yellow_mob.png">
                                </span>

                            <div id="kiev-slider" class="contacts-slider owl-carousel owl-theme">
                                <div class="item slider-item">
                                    <img src="/files/images/contacts/slide1_contacts.png" alt="photo-image">
                                </div>
                                <div class="item slider-item">
                                    <img src="/files/images/contacts/slide2_contacts.png" alt="photo-image">
                                </div>
                                <div class="item slider-item">
                                    <img src="/files/images/contacts/slide3_contacts.png" alt="photo-image">
                                </div>
                            </div>
                        </div>
                        <!-- photo slider ends -->

                        <a href="/" class="gl-transparent-btn route-btn">
                            @lang('messages.road_calculate')
                        </a>

                        <!-- schedule-info-address starts -->
                        <div class="schedule-info">
                            <div class="schedule-info-left">
                                <p class="left-text">@lang('messages.address')</p>
                            </div>
                            <div class="schedule-info-right">
                                <p class="right-text">
                                    {!! trans('messages.adress') !!}
                                </p>
                            </div>
                        </div>
                        <!-- schedule-info-address ends -->

                        <!-- schedule-info-time starts -->
                        <div class="schedule-info">
                            <div class="schedule-info-left">
                                <p class="left-text">@lang('messages.work_time')</p>
                            </div>
                            <div class="schedule-info-right">
                                <p class="right-text days-time">
                                    <span class="col-left">Пн - Пт</span>
                                    <span class="col-right">9:00 - 18:00</span>
                                </p>
                                <p class="right-text days-time">
                                    <span class="col-left">@lang('messages.st-wd')</span>
                                    <span class="col-right red-time">@lang('messages.weekend')</span>
                                </p>
                            </div>
                        </div>
                        <!-- schedule-info-time ends -->

                        <a href="/" class="gl-yellow-btn order-form-btn">
                            @lang('messages.contact_us')
                        </a>
                    </div>
                    <!-- end of kiev tab-pane -->

                    <!-- start of moscow tab-pane -->
                    <div class="tab-pane animated moscow active">
                        <div class="main-info">
                            <div class="city-cont">
                                <i class="icon icon-moscow"></i>
                            </div>
                            <div class="contact-info">
                                <p class="phone">
                                    <a class="call-us-phone"
                                       href="tel:{{-- */ $data = str_replace(' ', '', env('OUR_PHONE_NUMBER')); /* --}}{{$data}}">{{ env('OUR_PHONE_NUMBER') }}</a>
                                </p>
                                <p class="email">
                                    <a href="mailto:{{ env('OUR_EMAIL') }}">{{ env('OUR_EMAIL') }}</a>
                                </p>
                            </div>
                        </div>

                        <!-- photo slider starts -->
                        <div class="contacts-slider-cont">
                                <span class="arrow-left-btn">
                                    <img src="/images/general/slide_left_yellow_mob.png">
                                </span>
                            <span class="arrow-right-btn">
                                    <img src="/images/general/slide_right_yellow_mob.png">
                                </span>

                            <div id="moscow-slider" class="contacts-slider owl-carousel owl-theme">
                                <div class="item slider-item">
                                    <img src="/files/images/contacts/slide1_contacts.png" alt="photo-image">
                                </div>
                                <div class="item slider-item">
                                    <img src="/files/images/contacts/slide2_contacts.png" alt="photo-image">
                                </div>
                                <div class="item slider-item">
                                    <img src="/files/images/contacts/slide3_contacts.png" alt="photo-image">
                                </div>
                            </div>
                        </div>
                        <!-- photo slider ends -->

                        <a href="/" class="gl-transparent-btn route-btn">
                            @lang('messages.road_calculate')
                        </a>

                        <!-- schedule-info-address starts -->
                        <div class="schedule-info">
                            <div class="schedule-info-left">
                                <p class="left-text">@lang('messages.address')</p>
                            </div>
                            <div class="schedule-info-right">
                                <p class="right-text">
                                    {!! trans('messages.adress') !!}
                                </p>
                            </div>
                        </div>
                        <!-- schedule-info-address ends -->

                        <!-- schedule-info-time starts -->
                        <div class="schedule-info">
                            <div class="schedule-info-left">
                                <p class="left-text">@lang('messages.work_time')</p>
                            </div>
                            <div class="schedule-info-right">
                                <p class="right-text days-time">
                                    <span class="col-left">Пн - Пт</span>
                                    <span class="col-right">9:00 - 18:00</span>
                                </p>
                                <p class="right-text days-time">
                                    <span class="col-left">@lang('messages.st-wd')</span>
                                    <span class="col-right red-time">@lang('messages.weekend')</span>
                                </p>
                            </div>
                        </div>
                        <!-- schedule-info-time ends -->

                        <a href="/" class="gl-yellow-btn order-form-btn">
                            @lang('messages.contact_us')
                        </a>
                    </div>
                    <!-- end of moscow tab-pane -->
                </div>
            </div>
            <!-- end of fly-block -->

        </div>
    </section>
    <!-- end of contacts page -->

    <!-- begin our_manager -->
    <section class="our_manager">
        <!-- begin container -->
        <div class="container">
            <!--<p class="name_block">Наши менеджеры</p>-->
            <h2 class="section-header">@lang('messages.our_managers')</h2>
        @foreach($managers as $manager)
            <!-- begin one_manager -->
                <div class="one_manager">
                    <div class="one_manager_image">
                        <img src="/files/images/managers/{{ $manager->image->link }}" alt="Gema photo" class="lazy">
                    </div>
                    <p class="name">{{ $manager->name }}</p>
                    <p class="place">{{ $manager->{'position' .$langSuf} }}</p>
                    <p class="phone">
                        <a class="call-us-phone"
                           href="tel:{{ $manager->phone }}">{{ $manager->phone }}</a>
                    </p>
                    <p class="phone">
                        <a class="call-us-phone" href="tel:{{ $manager->add_phone }}">{{ $manager->add_phone }}</a>
                    </p>
                    <a href="mailto:gema@koloro.ru" class="mailto">{{ $manager->email }}</a>
                </div>
                <!-- end one_manager -->
            @endforeach


            <div class="price-block">
                <span>@lang('messages.order_price')</span>
                <a href="#" target="_blank" class="btn-calculate order-form-btn">@lang('messages.calculate')</a>
            </div>

        </div>
        <!-- end container -->
    </section>
    <!-- end our_manager -->
@stop

@section('page-scripts')
    <script src="/js/tabs.js"></script>

    <!-- OwlCarousel -->
    <script src="/js/owl.carousel.min.js"></script>

    <!-- only this page -->

    <!-- black Google maps, via API, starts -->
    <!--You need to include this script tag on any page that has a Google Map.-->
    <!--After you sign up, use the following script tag with YOUR_GOOGLE_API_KEY replaced with your actual key.-->
    <!--<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_GOOGLE_API_KEY"></script>-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAxp0_tlV4Dc7H80AVmFWO4yEVoeQckEpI">
    </script>
    <!-- black Google maps, via API, ends-->

    <script src="/js/contacts.js"></script>

    <!-- only this page -->

@stop