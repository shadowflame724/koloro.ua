@extends('layouts.client')
@section('page-title', $page->meta->{'title' . $langSuf} )

@section('page-meta')
    <meta name="description" content="{{ $page->meta->{'description' . $langSuf} }}">
    <meta name="keywords" content="{{ $page->meta->{'keywords' . $langSuf} }}">
@stop
<!--    slider mThumbnailScroller   -->
@section('page-style')
    <link rel="stylesheet" href="/css/jquery.mThumbnailScroller.css">
@stop

@section('page-content')
    @php($langSuf = '_' . App::getLocale())
    <!--PRELOADER!!! -->
    <div id="preloader"></div>
    @include('layouts.blackheader')
    <!-- begin services -->
    <section id="services">
        <div>
            <div class="bg-white-container">
                <div class="gl-container title-container">
                    <h1 class="top-title">{{ trans('client.services.main_services') }}</h1>
                </div>
            </div>

            <div id="my-thumbs-list">
                <div class="dark-mask">
                    <ul>
                        @php($i = 0)
                        @foreach($serviceCategories as $serviceCategory)
                            <li class="slider-item" data-number={{ $i++ }}>
                                <h2 class="slide-title">{{ $serviceCategory['parentName' . $langSuf] }}</h2>
                                <h3 class="slide-title-small">{{ strip_tags($serviceCategory['parentDescription' . $langSuf]) }}</h3>

                                <div class="slide-links">
                                    <hr class="slide-hr">
                                    @foreach(array_slice($serviceCategory['services'], 0,7) as $service)
                                        <a href="/{{ $service['slug'] }}">{{ $service['name' . $langSuf] }}</a>
                                    @endforeach
                                </div>
                            </li>
                        @endforeach
                    </ul>

                    <div class="visual-wrapper">
                        <div class="visual vis-0" data-number="0">
                            <video loop class="video">
                                <source src="/files/video/identity.mp4" type="video/mp4">
                                <!--<source src="video/identity.webm" type="video/webm">-->
                                <!--<source src="video/identity.ogv" type="video/ogv">-->
                            </video>
                        </div>
                        <div class="visual" data-number="1">
                            <video loop class="video">
                                <source src="/files/video/illustration.mp4" type="video/mp4">
                            </video>
                        </div>
                        <div class="visual" data-number="2">
                            <video loop class="video">
                                <source src="/files/video/creative-ads.mp4" type="video/mp4">
                            </video>
                        </div>
                        <div class="visual" data-number="3">
                            <video loop class="video">
                                <source src="/files/video/web.mp4" type="video/mp4">
                            </video>
                        </div>
                        <div class="visual" data-number="4">
                            <video loop class="video">
                                <source src="/files/video/video.mp4" type="video/mp4">
                            </video>
                        </div>
                        <div class="visual" data-number="5">
                            <video loop class="video">
                                <source src="/files/video/illustration.mp4" type="video/mp4">
                                {{--<source src="files/video/hello-world.mp4" type="video/mp4">--}}
                            </video>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end services -->
    <!-- begin service_categories -->
    <section class="service_categories">
        <!-- begin container -->
        <div class="container">
            <!--<p class="name_block">Все Услуги</p>-->
            <h2 class="service-header">{{ trans('client.services.all_services') }}</h2>

        @foreach($serviceCategories as $item)
            <!-- begin one_category -->
                <div class="one_category clearfix">
                    {{--<div class="promo_block" style="background-image: url('/files/images/services/usluga-1.png')">--}}
                    <div class="promo_block"
                         style="background-image: url('/files/images/servicecategory/{{ $item['parentImageLink'] }}')">

                        <!--при загрузке изображений из админки установить для блока style="background-image: url("../адрес изображения")-->
                        <h5>
                            {{ $item['parentName'. $langSuf] }}
                        </h5>
                        <p>
                            {{ strip_tags($item['parentDescription'. $langSuf]) }}
                        </p>
                    </div>
                    <div class="link_block">
                        <ul>
                            @foreach($item['services'] as $service)
                                <li>
                                    <a href="/{{ $service['slug'] }}">{{ $service['name'. $langSuf ] }}</a>
                                    <div class="additional-info">
                                        <div class="image-container">
                                            @if($service['link'])
                                                <img src="/files/images/service/thumb_{{ $service['link'] }}">
                                            @else
                                                <img src="/files/images/service/slide-picture.jpg">
                                            @endif
                                        </div>
                                        <p class="additional-info-text">
                                            {!! strip_tags($service['description' . $langSuf]) !!}
                                        </p>
                                        <a href="/{{ $service['slug'] }}"
                                           class="additional-info-btn">{{ trans('client.services.go_to_service') }}</a>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
        @endforeach
        <!-- end one_category -->
        </div>
        <!-- end container -->
    </section>
    <!-- end service_categories -->

    <!-- begin portfolio_block -->
    <section class="portfolio_block">
        <!-- begin container -->
        <div class="container">
            <p class="name_block">{{ trans('client.widgets.jobs_examples.main_title') }}</p>
            <!-- begin image_container -->
            @widget('jobs_example')
            <!-- end image_container -->
            <a href="" class="gl-yellow-btn show-more-portfolio-btn"
               id="show_more">{{ trans('client.widgets.jobs_examples.more_work') }}</a>
        </div>
        <!-- end container -->
    </section>
    <!-- end portfolio_block -->
@stop


@section('page-scripts')
    <script src="/js/services.js"></script>
@stop