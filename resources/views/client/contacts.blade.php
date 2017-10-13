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

        <div id="kiev-map" class="koloro-map animated kiev"></div>
        <div id="moscow-map" class="koloro-map animated moscow active"></div>

        <div class="contacts-cont">
            <div class="gl-container">
                <h2 class="section-header">Контакты</h2>
            </div>
        </div>

        <!-- start of fly-block -->
        <div class="fly-block">
            <ul class="contacts-menu">
                <li class="kiev" style="display: none">Киев</li>
                <li class="moscow active">Москва</li>
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
                            <p class="phone">{{ env('OUR_PHONE_NUMBER') }}</p>
                            <p class="email">{{ env('OUR_EMAIL') }}</p>
                        </div>
                    </div>

                    <!-- photo slider starts -->
                    <div class="contacts-slider-cont">
                                <span class="arrow-left-btn">
                                    <img src="images/general/slide_left_yellow_mob.png">
                                </span>
                        <span class="arrow-right-btn">
                                    <img src="images/general/slide_right_yellow_mob.png">
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
                        Проложить маршрут
                    </a>

                    <!-- schedule-info-address starts -->
                    <div class="schedule-info">
                        <div class="schedule-info-left">
                            <p class="left-text">Адрес</p>
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
                            <p class="left-text">Время работы</p>
                        </div>
                        <div class="schedule-info-right">
                            <p class="right-text days-time">
                                <span class="col-left">Пн - Пт</span>
                                <span class="col-right">9:00 - 18:00</span>
                            </p>
                            <p class="right-text days-time">
                                <span class="col-left">Сб - Вс</span>
                                <span class="col-right red-time">выходной</span>
                            </p>
                        </div>
                    </div>
                    <!-- schedule-info-time ends -->

                    <a href="/" class="gl-yellow-btn order-form-btn">
                        Связаться
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
                            <p class="phone">{{ env('OUR_PHONE_NUMBER') }}</p>
                            <p class="email">{{ env('OUR_EMAIL') }}</p>
                        </div>
                    </div>

                    <!-- photo slider starts -->
                    <div class="contacts-slider-cont">
                                <span class="arrow-left-btn">
                                    <img src="images/general/slide_left_yellow_mob.png">
                                </span>
                        <span class="arrow-right-btn">
                                    <img src="images/general/slide_right_yellow_mob.png">
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
                        Проложить маршрут
                    </a>

                    <!-- schedule-info-address starts -->
                    <div class="schedule-info">
                        <div class="schedule-info-left">
                            <p class="left-text">Адрес</p>
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
                            <p class="left-text">Время работы</p>
                        </div>
                        <div class="schedule-info-right">
                            <p class="right-text days-time">
                                <span class="col-left">Пн - Пт</span>
                                <span class="col-right">9:00 - 18:00</span>
                            </p>
                            <p class="right-text days-time">
                                <span class="col-left">Сб - Вс</span>
                                <span class="col-right red-time">выходной</span>
                            </p>
                        </div>
                    </div>
                    <!-- schedule-info-time ends -->

                    <a href="/" class="gl-yellow-btn order-form-btn">
                        Связаться
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
        <h2 class="section-header">Наши менеджеры</h2>
        <!-- begin one_manager -->
        <div class="one_manager">
            <div class="one_manager_image">
                <img src="/files/images/contacts/manager_gema.jpg" alt="Gema photo" class="lazy">
            </div>
            <p class="name">Игорь Гема </p>
            <p class="place">Директор</p>
            <p class="phone">{{ env('OUR_PHONE_NUMBER') }}</p>
            <p class="phone">+7 (499) 677 58 69</p>
            <a href="mailto:gema@koloro.ru" class="mailto">gema@koloro.ru</a>
        </div>
        <!-- end one_manager -->
        <!-- begin one_manager -->
        <div class="one_manager">
            <div class="one_manager_image">
                <img src="/files/images/contacts/manager_baranova.jpg" alt="Baranova photo" class="lazy">
            </div>
            <p class="name">Мария Баранова</p>
            <p class="place">Менеджер по работе с клиентами</p>
            <p class="phone">{{ env('OUR_PHONE_NUMBER') }}</p>
            <p class="phone">+7 (499) 677 58 69</p>
            <a href="mailto:baranova@koloro.ru" class="mailto">baranova@koloro.ru</a>
        </div>
        <!-- end one_manager -->
        <!-- begin one_manager -->
        <div class="one_manager">
            <div class="one_manager_image">
                <img src="/files/images/contacts/manager_kostiuk.jpg" alt="Kostiuk photo" class="lazy">
            </div>
            <p class="name">Андрей Костюк</p>
            <p class="place">Менеджер по работе с клиентами</p>
            <p class="phone">{{ env('OUR_PHONE_NUMBER') }}</p>
            <p class="phone">+7 (499) 677 58 69</p>
            <a href="mailto:kostiuk@koloro.ru" class="mailto">kostiuk@koloro.ru</a>
        </div>
        <!-- end one_manager -->

        <div class="price-block">
            <span>Стоимость заказа</span>
            <a href="#" target="_blank" class="btn-calculate order-form-btn">Рассчитать</a>
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
<script type="text/javascript">
    $('.nav-tabs a').click(function (e) {
        e.preventDefault();
        $(this).tab('show');
        initMap();
    });
    $(".mobile_tab").on("click", function () {
        $("li").removeClass("active");
    });

</script>
<script type="text/javascript">
    $(".maska").on("click", function (e) {
        $(".maska").css("z-index", "-1");
    });
    $("div:not('#YMapsID')").on("click", function (e) {
        $(".maska").css("z-index", "2");
    });


</script>
<script type="text/javascript">
    $("#toggleFeedback, .l-message .close").on("click",
        function () {
            $(this).parents(".message-wrapper").toggleClass("flipped");

        });

</script>

<!-- black Google maps, via API, starts -->
<!--You need to include this script tag on any page that has a Google Map.-->
<script type="text/javascript">

    var kievMap;
    var moscowMap;

    function initMap() {
        var myLatLngKiev = {lat: parseFloat("50.453122"), lng: parseFloat("30.525794")};
        var myLatLngMoscow = {lat: parseFloat("55.752873"), lng: parseFloat("37.599039")};

        var kievMapOptions = {
            // How zoomed in you want the map to start at (always required)
            zoom: 15,

            // The latitude and longitude to center the map (always required)
            center: myLatLngKiev, // Трехсвятительская 5

            // How you would like to style the map.
            // This is where you would paste any style found on Snazzy Maps.
            styles: [{"stylers": [{"hue": "#ff1a00"}, {"invert_lightness": true}, {"saturation": -100}, {"lightness": 33}, {"gamma": 0.5}]}, {
                "featureType": "water",
                "elementType": "geometry",
                "stylers": [{"color": "#2D333C"}]
            }]
        };

        var moscowMapOptions = {
            // How zoomed in you want the map to start at (always required)
            zoom: 15,

            // The latitude and longitude to center the map (always required)
            center: myLatLngMoscow, // Новый Арбат

            // How you would like to style the map.
            // This is where you would paste any style found on Snazzy Maps.
            styles: [{"stylers": [{"hue": "#ff1a00"}, {"invert_lightness": true}, {"saturation": -100}, {"lightness": 33}, {"gamma": 0.5}]}, {
                "featureType": "water",
                "elementType": "geometry",
                "stylers": [{"color": "#2D333C"}]
            }]
        };

        kievMap = new google.maps.Map(document.getElementById('kiev-map'), kievMapOptions);

        var kievMarker = new google.maps.Marker({
            position: myLatLngKiev,
            map: kievMap,
            title: "KOLORO in Kiev"
        });
        kievMarker.setMap(kievMap);

        moscowMap = new google.maps.Map(document.getElementById('moscow-map'), moscowMapOptions);

        var moscowMarker = new google.maps.Marker({
            position: myLatLngMoscow,
            map: moscowMap,
            title: "KOLORO in Moscow"
        });
        moscowMarker.setMap(moscowMap);
    }
</script>
<!--After you sign up, use the following script tag with YOUR_GOOGLE_API_KEY replaced with your actual key.-->
<!--<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_GOOGLE_API_KEY"></script>-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAxp0_tlV4Dc7H80AVmFWO4yEVoeQckEpI&callback=initMap">
</script>
<!-- black Google maps, via API, ends-->

<script src="/js/contacts.js"></script>

<!-- only this page -->

@stop