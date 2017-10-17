@extends('layouts.client')

@section('page-title', $service->meta->{'title' . $langSuf})

@section('page-meta')
    <meta name="description" content="{{ $service->meta->{'description' . $langSuf} }}">
    <meta name="keywords" content="{{ $service->meta->{'keywords' . $langSuf} }}">
@stop

@section('page-style')

    <!-- OwlCarousel -->
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/owl.theme.default.min.css">
@stop
@section('page-content')

    <!--PRELOADER!!! -->
    <div id="preloader"></div>
    @include('layouts.whiteheader')


    <!-- begin of section service-page -->
    <section id="service-page">
        <div class="bg-container top-container"
             style="background-image: url(/files/images/service/{{ $service->image->link }})">
            <div class="dark-mask">
                <div class="gl-container title-container">
                    <h1 class="top-title">{{ $service->{'name' . $langSuf} }}</h1>
                </div>

                <div class="service-price-container">
                    <div class="gl-container">
                        <div class="left-cont">
                            <p class="price-title">{{ trans('client.service.costs') }} {{ $service->{'name_parent_case' . $langSuf} }}</p>
                            <p class="price">{{ $service->price }} руб.</p>
                            <div class="btns-container">
                                <a href="/"
                                   class="gl-transparent-btn order-service-btn order-form-btn">{{ trans('client.service.order-service') }}</a>
                                <a href="#expensive-block"
                                   class="gl-transparent-btn too-expensive-btn">{{ trans('client.service.too-expensive') }}</a>
                            </div>
                            <p class="executed-time">{{ trans('client.service.time') }} {{ $service->{'time' . $langSuf}  }}</p>
                        </div>
                        <div class="right-cont">
                            <p class="price-factors-title">{{ trans('client.service.price_depends') }}</p>
                            <ol class="price-factors-list">
                                @if($service->{'price_depends' . $langSuf} != null)
                                    @foreach(json_decode($service->{'price_depends' . $langSuf}) as $value)
                                        <li class="price-factor">{{ $value }}</li>
                                    @endforeach
                                @endif
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- anchor for jump-->
        <div id="expensive-block"></div>

        <div class="expensive-block">
            <div class="gl-container">
                <p class="expensive-block-header">
                    По вашему желанию,<br> <span>цена будет снижена</span>, если:
                </p>

                <div class="expensive-items">
                    <div class="expensive-wrapper">
                        <div class="expensive-item">
                            <p class="expensive-item-title">Дешевле до</p>
                            <p class="expensive-item-percent">90%</p>
                            <p class="expensive-item-proposition">Заказать годовое сопровождение</p>

                            <div class="expensive-hover-layer">
                        <span>
                            Сопровождение - это утвердить годовой бюджет, закрепить за вами сотрудников
                        </span>
                            </div>
                        </div>
                    </div>
                    <div class="expensive-wrapper">
                        <div class="expensive-item">
                            <p class="expensive-item-title">Экономия до</p>
                            <p class="expensive-item-percent">50%</p>
                            <p class="expensive-item-proposition">Сократить объем работ <br> (меньше концептов)</p>

                            <div class="expensive-hover-layer">
                        <span>
                            Сопровождение - это утвердить годовой бюджет, закрепить за вами сотрудников
                        </span>
                            </div>
                        </div>
                    </div>
                    <div class="expensive-wrapper">
                        <div class="expensive-item">
                            <p class="expensive-item-title">Экономия до</p>
                            <p class="expensive-item-percent">25%</p>
                            <p class="expensive-item-proposition">Увеличить сроки выполнения</p>

                            <div class="expensive-hover-layer">
                        <span>
                            Сопровождение - это утвердить годовой бюджет, закрепить за вами сотрудников
                        </span>
                            </div>
                        </div>
                    </div>
                    <div class="expensive-wrapper">
                        <div class="expensive-item">
                            <p class="expensive-item-title">Рассрочка на </p>
                            <p class="expensive-item-percent">6</p>
                            <p class="expensive-item-proposition">месяцев</p>

                            <div class="expensive-hover-layer">
                        <span>
                            Сопровождение - это утвердить годовой бюджет, закрепить за вами сотрудников
                        </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="btn-hidden get-indiv-count-btn">
                    <a href="/" class="order-form-btn">
                        <span>Получить индивидуальный расчет</span>
                        <img src="/files/images/service-page/btn-cover.png">
                    </a>
                </div>
            </div>
        </div>

        <div class="info-block-container">
            <div class="gl-container">
                <div class="info-left">
                    @if( $blocks->get(0)->{'title' .$langSuf} != null)
                        <h2 class="info-left-title">{{ $blocks->get(0)->{'title' .$langSuf} }}</h2>
                    @else
                        <p></p>
                    @endif
                </div>
                <div class="info-right">
                    <p>
                        {!! $blocks->get(0)->{'content' .$langSuf} !!}
                    </p>
                </div>
            </div>
        </div>

        @if($blocks->get(1)->image_ids)
            <div class="gl-container">
                <p class="service-header">{{ trans('client.service.you_takes') }}</p>
                <div class="service-icons-container owl-carousel">
                    @foreach($blocks->get(1)->images() as $item)
                        <div class="item service-item">
                            <img src="/files/images/service-page/{{$item->link}}" alt="icon-photo">
                            <p class="service-icon-text">{{$item->{'title' . $langSuf} }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif

        <div class="info-block-container">
            <div class="gl-container">
                <div class="info-left">
                    @if( $blocks->get(2)->{'title' .$langSuf} != null)
                        <h2 class="info-left-title">{{ $blocks->get(2)->{'title' .$langSuf} }}</h2>
                    @else
                        <p></p>
                    @endif

                </div>
                <div class="info-right">
                    <!--
                    <p>
                        <span>Процесс проведения исследования делится на такие этапы.</span>
                    </p>
                Перенести
                    -->
                    @foreach($blocks->get(2)->images() as $image)
                        <div class="image-container">
                            <img src="/files/images/service-page/{{ $image->link }}">
                        </div>
                    @endforeach
                    {!! $blocks->get(2)->{'content' .$langSuf} !!}

                    <div class="service-images-slider owl-carousel owl-theme">
                        @foreach($blocks->get(3)->images() as $image)
                            <div class="service-img item">
                                <img src="/files/images/service-page/{{ $image->link }}" alt="service-picture">
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>


        <div class="order-block">
            <div class="left-cont">
                &nbsp;
            </div>
            <div class="middle-cont">
                <div class="btn-visible order-btn">
                    <a href="/brief">
                        <span class="yellow-color">{{ trans('client.service.order_project') }}</span>
                        <img src="/files/images/service-page/btn-arrow-right.png">
                    </a>
                </div>
            </div>
            <div class="right-cont">
                &nbsp;
            </div>
        </div>

        <div class="marketing-examples">
            <div class="gl-container">
                <h2 class="service-header">{{ trans('client.service.examples') }} {{ $service->{'name_parent_case' . $langSuf} }}</h2>
                @foreach($service->blogArticles() as $key => $article)

                    <div class="example-item-cont">
                        <div class="example-item"
                             style="background-image: url('/files/images/blog/@if($article->file){{ $article->file->link }}@endif')">
                            <div class="gray-mask"></div>
                            <h3 class="example-header @if($key == 0) orange-bg @elseif($key == 1) blue-bg @else pink-bg @endif">{{ $article->{'name' . $langSuf} }}</h3>
                            <p class="example-text orange-bg">
                                {!!  $article->{'description' . $langSuf} !!}
                            </p>
                            <div class="hover-layer @if($key == 0) orange-bg @elseif($key == 1) blue-bg @else pink-bg @endif">
                                <h3 class="example-header">{{ $article->{'name' . $langSuf} }}</h3>
                                <a href="/blog/{{ $article->blogcategory->slug }}/{{ $article->slug }}"
                                   class="gl-transparent-btn go-search-btn">{{ trans('client.service.go_to') }}</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>


        <div class="info-block-container">
            <div class="gl-container">

                <div class="info-left">
                    @if( $blocks->get(4)->{'title' .$langSuf} != null)
                        <h2 class="info-left-title">{{ $blocks->get(4)->{'title' .$langSuf} }}</h2>
                    @else
                        <p></p>
                    @endif
                </div>
                <div class="info-right">
                    {!! $blocks->get(4)->{'content' .$langSuf} !!}
                    @foreach($blocks->get(4)->images() as $image)
                        <div class="image-container">
                            <img src="/files/images/service-page/{{ $image->link }}">
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="gl-container">
            <p class="service-header">{{ trans('client.service.similar_services_title') }}</p>
        </div>

        <div class="additional-services-container">
            @foreach($similarServices as $item)
                <a href="/{{ $item->slug }}" target="_self" class="additional-service-item">
                    @if($item->image)
                        <img src="/files/images/service/thumb_{{ $item->image->link }}">
                    @endif
                    <p class="hover-layer">
                        <span>{{ $item->{'name' .$langSuf} }}</span>
                    </p>
                </a>
            @endforeach
        </div>

        <div class="btn-visible see-more-services-btn">
            <a href="/services">
                <span>{{ trans('client.service.show_more_services') }} !</span>
                <img src="/files/images/service-page/btn-arrow-right-yellow.png">
            </a>
        </div>

        <a href="#"
           class="gl-yellow-btn tell-us-btn order-form-btn">{{ trans('client.service.tell_us_about_yours_project') }}</a>


        <div class="info-block-container">
            <div class="gl-container">
                <div class="info-left">
                    @if( $blocks->get(5)->{'title' .$langSuf} != null)
                        <h2 class="info-left-title">{{ $blocks->get(5)->{'title' . $langSuf} }}</h2>
                    @else
                        <p></p>
                    @endif
                </div>
                <div class="info-right">
                    {!! $blocks->get(5)->{'content' . $langSuf} !!}

                    @foreach($blocks->get(5)->images() as $image)
                        <div class="image-container">
                            <img src="/files/images/service-page/{{ $image->link }}">
                        </div>
                    @endforeach
                </div>
            </div>
        </div>


        <div class="info-block-container">
            <div class="gl-container">
                <div class="info-left">
                    @if( $blocks->get(6)->{'title' .$langSuf} != null)
                        <h2 class="info-left-title">{{ $blocks->get(6)->{'title' . $langSuf} }}</h2>
                    @else
                        <p></p>
                    @endif
                </div>
                <div class="info-right">
                    {!! $blocks->get(6)->{'content' . $langSuf} !!}
                </div>
            </div>
        </div>

        <!-- begin portfolio_block -->
        <section class="portfolio_block">
            <!-- begin container -->
            <div class="container">
                <p class="name_block">{{ trans('client.widgets.jobs_examples.main_title') }}</p>
                <!-- begin image_container -->
                @widget('jobs_example')
                <!-- end image_container -->
                <!--<a href="" class="btn transparent_btn" id="show_more">Еще работы</a>-->
                <a href="#" class="gl-yellow-btn show-more-portfolio-btn"
                   id="show_more">{{ trans('client.widgets.jobs_examples.more_work') }}</a>

            </div>
            <!-- end container -->
        </section>
        <!-- end portfolio_block -->

        <div class="info-block-container">
            <div class="gl-container">
                <div class="info-left">
                    @if( $blocks->get(7)->{'title' .$langSuf} != null)
                        <h2 class="info-left-title">{{ $blocks->get(7)->{'title' . $langSuf} }}</h2>
                    @else
                        <p></p>
                    @endif
                </div>
                <div class="info-right">
                    <div class="info-right">
                        {!! $blocks->get(7)->{'content' . $langSuf} !!}
                    </div>
                </div>
            </div>
        </div>

        <div class="info-block-container">
            <div class="gl-container">
                <div class="info-left">
                    <p></p>
                </div>
                <div class="info-right">
                    <p>{{ trans('client.service.contact_info') }}:</p>
                    <p class="contact-info koloro-email">
                        <a href="mailto:{{ env('OUR_EMAIL') }}">{{ env('OUR_EMAIL') }}</a>
                    </p>
                    <p class="contact-info koloro-tel">
                        <a class="call-us-phone" href="tel:{{-- */ $data = str_replace(' ', '', env('OUR_PHONE_NUMBER')); /* --}}{{$data}}">{{ env('OUR_PHONE_NUMBER') }}</a>
                    </p>
                </div>
            </div>
        </div>

    </section>
    <!-- end of section service-page -->
@stop

@section('page-scripts')
    <!-- viewportchecker -->
    <script src="/js/viewportchecker.js"></script>
    <!-- OwlCarousel -->
    <script src="/js/owl.carousel.min.js"></script>

    <script src="/js/service-page.js"></script>
@stop
