@extends('layouts.client')

@section('page-title', $page->meta->{'title' . $langSuf} )

@section('page-meta')
    <meta name="description" content="{{ $page->meta->{'description' . $langSuf} }}">
    <meta name="keywords" content="{{ $page->meta->{'keywords' . $langSuf} }}">
@stop

@section('page-style')
    <link href="/css/libs/jquery.bxslider.min.css" rel="stylesheet"/>

    <!-- OwlCarousel -->
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/owl.theme.default.min.css">
@stop


@section('page-content')

    @include('layouts.whiteheader')

    {{--<!-- main portfolio slider starts -->--}}
    {{--<ul class="bxslider main-slider-container">--}}

        {{--@foreach($portfolioWorks as $work)--}}
            {{--<li>--}}
                {{--<div class="bg-container" style="background-image:--}}
                {{--@if($work->image) url('/files/images/portfolio/img/{{ $work->image->link }}')--}}
                {{--@else url('/files/images/portfolio/img/{{ $work->img }}')--}}
                {{--@endif">--}}
                    {{--<!-- NEED TO FIX -->--}}
                    {{--<div class="dark-mask"></div>--}}
                    {{--<div class="gl-container">--}}
                        {{--<h2 class="main-slider-header">{{ $work->{'title' . $langSuf} }}</h2>--}}
                        {{--<div class="order-btns">--}}
                            {{--<a href="/portfolio/{{ $work->slug }}"--}}
                               {{--class="gl-yellow-btn view-work-btn animated">{{trans('messages.show_work')}}</a>--}}
                            {{--<a href="/" class="gl-transparent-btn want-expertise-btn order-form-btn">--}}
                                {{--{{trans('messages.free_exp')}}--}}
                            {{--</a>--}}
                        {{--</div>--}}
                        {{--<div class="special-offer">--}}
                            {{--<div class="left-block">--}}
                                {{--<p class="special-offer-bonus">{{ $work->slogan_num }}</p>--}}
                            {{--</div>--}}
                            {{--<div class="right-block">--}}
                                {{--<p class="special-offer-text">{{ $work->{'slogan' . $langSuf} }}</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</li>--}}
        {{--@endforeach--}}

    {{--</ul>--}}
    {{--<!-- main portfolio slider ends -->--}}

    <!-- main portfolio slider starts -->
    <ul class="bxslider main-slider-container">
        <li>
            <div class="bg-container" style="background-image: url('images/main/slide-koloro-ua-1.jpg')">
                <div class="dark-mask"></div>
                <div class="gl-container">
                    <h2 class="main-slider-header">Новый зонтичный молочный бренд “Глобино”</h2>
                    <div class="order-btns">
                        <a href="/portfolio/globino.html" class="gl-yellow-btn view-work-btn animated bounce">Посмотреть работу</a>
                        <a href="/" class="gl-transparent-btn want-expertise-btn order-form-btn">
                            Хочу бесплатную <br>быструю экспертизу
                        </a>
                    </div>
                    <div class="special-offer">
                        <div class="left-block">
                            <p class="special-offer-bonus">+12%</p>
                        </div>
                        <div class="right-block">
                            <p class="special-offer-text">
                                к продажам <br>после ребрендинга
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li>
            <div class="bg-container" style="background-image: url('images/main/slide-koloro-ua-2.jpg')">
                <div class="dark-mask"></div>
                <div class="gl-container">
                    <h2 class="main-slider-header">Традиционный вкус с современным дизайном. Колбаса "Ланшмит"</h2>
                    <div class="order-btns">
                        <a href="/portfolio/lanshmit.html" class="gl-yellow-btn view-work-btn animated bounce">Посмотреть работу</a>
                        <a href="/" class="gl-transparent-btn want-expertise-btn order-form-btn">
                            Хочу бесплатную <br>быструю экспертизу
                        </a>
                    </div>
                    <div class="special-offer">
                        <div class="left-block">
                            <p class="special-offer-bonus">+8,7%</p>
                        </div>
                        <div class="right-block">
                            <p class="special-offer-text">к среднемесячной прибыли</p>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li>
            <!--<div class="bg-container" style="background-image: url('images/main/slide-koloro-ua-3.jpg')">-->
            <!--<div class="dark-mask"></div>-->
            <!--<div class="gl-container">-->
            <!--<h2 class="main-slider-header">Frau Pampe. Свежий взгляд на каши</h2>-->
            <!--<div class="order-btns">-->
            <!--<a href="/portfolio/frau-pampe.html" class="gl-yellow-btn view-work-btn animated bounce">Посмотреть работу</a>-->
            <!--<a href="/" class="gl-transparent-btn want-expertise-btn order-form-btn">-->
            <!--Хочу бесплатную <br>быструю экспертизу-->
            <!--</a>-->
            <!--</div>-->
            <!--<div class="special-offer">-->
            <!--<div class="left-block">-->
            <!--<p class="special-offer-bonus"></p>-->
            <!--</div>-->
            <!--<div class="right-block">-->
            <!--<p class="special-offer-text">Создание нового позиционирования на узком рынке</p>-->
            <!--</div>-->
            <!--</div>-->
            <!--</div>-->
            <!--</div>-->
            <div class="bg-container" style="background-image: url('images/main/slide-koloro-ua-3.jpg')">
                <div class="dark-mask"></div>
                <div class="gl-container">
                    <h2 class="main-slider-header">СЕТЬ МАГАЗИНОВ «МЯСНОЙ» <br>САМОБЫТНЫЙ УКРАИНСКИЙ БРЕНД</h2>
                    <div class="order-btns">
                        <a href="/portfolio/set-magazinov-myasnoi.html" class="gl-yellow-btn view-work-btn animated bounce">Посмотреть работу</a>
                        <a href="/" class="gl-transparent-btn want-expertise-btn order-form-btn">
                            Хочу бесплатную <br>быструю экспертизу
                        </a>
                    </div>
                    <div class="special-offer">
                        <div class="left-block">
                            <p class="special-offer-bonus">2000</p>
                        </div>
                        <div class="right-block">
                            <p class="special-offer-text">киосков за полгода</p>
                        </div>
                    </div>
                </div>
            </div>

        </li>
        <li>
            <div class="bg-container" style="background-image: url('images/main/slide-koloro-ua-4.jpg')">
                <div class="dark-mask"></div>
                <div class="gl-container">
                    <h2 class="main-slider-header">«Мировая традиция» — <br>бренд-путешественник</h2>
                    <div class="order-btns">
                        <a href="/portfolio/mirovaya-tradicia.html" class="gl-yellow-btn view-work-btn animated bounce">Посмотреть работу</a>
                        <a href="/" class="gl-transparent-btn want-expertise-btn order-form-btn">
                            Хочу бесплатную <br>быструю экспертизу
                        </a>
                    </div>
                    <div class="special-offer">
                        <div class="left-block">
                            <p class="special-offer-bonus">+7%</p>
                        </div>
                        <div class="right-block">
                            <p class="special-offer-text">Завоевание доли рынка</p>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li>
            <div class="bg-container" style="background-image: url('images/main/slide-koloro-ua-5.jpg')">
                <div class="dark-mask"></div>
                <div class="gl-container">
                    <h2 class="main-slider-header">«Инделика». Мясо — индейки,<br> этикетка — КОЛОРО</h2>
                    <div class="order-btns">
                        <a href="/portfolio/indelika.html" class="gl-yellow-btn view-work-btn animated bounce">Посмотреть работу</a>
                        <a href="/" class="gl-transparent-btn want-expertise-btn order-form-btn">
                            Хочу бесплатную <br>быструю экспертизу
                        </a>
                    </div>
                    <div class="special-offer">
                        <div class="left-block">
                            <p class="special-offer-bonus">+8%</p>
                        </div>
                        <div class="right-block">
                            <p class="special-offer-text">к узнаваемости бренда</p>
                        </div>
                    </div>
                </div>
            </div>
        </li>
    </ul>
    <!-- main portfolio slider ends -->


    <!-- begin of section about_koloro -->
    <section class="about-koloro">
        <div class="gl-container">
            <div class="icon-icon_crown animated bounce"></div>
            <h2 class="section-header">Брендинговое агентство <span>KOLORO</span></h2>
            <hr>
            <p class="about_koloro-text">
                Услуги KOLORO ориентированы на лидеров, либо желающих ими стать.
                Ежегодная выручка от продаж брендов, <span>созданных KOLORO,</span> составляет более 1 миллиарда
                долларов.
                Что превышает годовые бюджеты некоторых стран мира!
            </p>
            <p class="about_koloro-text for-read-more">
                <span>Залог успеха</span> – это <span>создание</span> информативного,
                <span>«говорящего» дизайна</span>, в котором каждый изгиб упаковки и каждая
                растровая точка <span>несет</span> свой уникальный <span>посыл</span>,
                <span>обладает пользой и удобством для пользователя</span>,
                объединенный общей коммуникацией позиционирования.
            </p>
            <span class="read-more-btn">{{trans('messages.more')}}</span>
        </div>
    </section>
    <!-- end of section about_koloro -->

    <!-- begin portfolio_block -->
    <section class="portfolio_block">
        <!-- begin container -->
        <div class="container">
            <p class="name_block">{{trans('messages.work_examples')}}</p>
            <!-- begin image_container -->
            <div class="image_container">
                @widget('jobs_example')
            </div>
            <!-- end image_container -->
            {{--<a href="" class="btn transparent_btn" id="show_more">{!! trans('messages.more_work') !!}</a>--}}
            <a href="" class="gl-yellow-btn show-more-portfolio-btn"
               id="show_more">{!! trans('messages.more_work') !!}</a>
        </div>
        <!-- end container -->
    </section>
    <!-- end portfolio_block -->

    <!-- begin download-book-form -->
    {!! Form::open(['route' => 'subscription_store', 'class' => 'download-book-form', 'id'=>'download-book-form']) !!}
    <div class="gl-container">
        <h2 class="download-book-header">Давайте сделаем что-то вместе!</h2>
        <div class="wrapper">
            <div class="left-block">
                <img src="files/images/main/book.png" alt="koloro book" class="book">
            </div>
            <div class="center-block">
                <p class="download-book-text mobile-visible">Ваши данные в безопасности. Никакого SPAM!</p>
                {!! Form::text('name', null, ['required','placeholder' => 'Ваше имя', 'class' => 'download-book-phone', 'tabindex' => '1']) !!}
                {!! Form::email('email', null, ['required','placeholder' => 'Ваш email','class' => 'download-book-email', 'tabindex' => '2']) !!}
                <p class="download-book-text mobile-hidden">Ваши данные в безопасности. Никакого SPAM!</p>
            </div>
            <div class="right-block">
                <p class="download-book-text no-margin">Не теряйте время, жмите на кнопку!</p>
                <input type="submit" value="скачать" class="download-book-btn" tabindex="3">
                <p class="download-book-text orange-life-hucks">12 лайфхаков маркетологов нового поколения</p>
            </div>
        </div>
    </div>
    {!! Form::close() !!}
    <!-- end download-book-form -->

    <!-- begin of section Create and develop -->
    <section class="create-and-dev">
        <div class="gl-container">
            <h2 class="section-header">
                {!! trans('messages.create_develop') !!}
            </h2>
            <div class="gallery">
                <div class="gallery-item">
                    <div class="gallery-img-cont">
                        <img src="/files/images/main/shops-icon.png" alt="create icon photo" class="shops-icon">
                    </div>
                    <p class="name color-1">{!! trans('messages.shops') !!}</p>
                </div>
                <div class="gallery-item">
                    <div class="gallery-img-cont">
                        <img src="/files/images/main/sites-icon.png" alt="create icon photo" class="sites-icon">
                    </div>
                    <p class="name color-2">{!! trans('messages.sites_apps') !!}</p>
                </div>
                <div class="gallery-item">
                    <div class="gallery-img-cont">
                        <img src="/files/images/main/package-icon.png" alt="create icon photo" class="package-icon">
                    </div>
                    <p class="name color-3">{{trans('messages.packaging')}}</p>
                </div>
            </div>
        </div>
    </section>
    <!-- end of section Create and develop -->

    <!-- begin call-back-form -->
    {!! Form::open(['route' => 'callback_store', 'class' => 'call-back-form']) !!}
    <div class="gl-container">
        <h2 class="call-back-header">{!! trans('messages.form') !!}</h2>
        <div class="left-block">
            <!--<img src="images/handset.png" alt="handset-img" class="handset-img">-->
            <i class="icon icon-phone_tube animated"></i>
        </div>
        <div class="center-block">
            {!! Form::text('phone', null, ['required','class' => 'call-back-phone', 'placeholder' => 'Ваш телефон', 'tabindex' => '1']) !!}
            <input type="submit" value="{{trans('messages.callback')}}" class="call-back-btn" tabindex="2">
        </div>
        <p class="call-us-text">{{trans('messages.callback_or')}}: <span
                    class="call-us-phone">{{ env('OUR_PHONE_NUMBER') }}</span>
        </p>
    </div>
    {!! Form::close() !!}
    <!-- end call-back-form -->

    <!-- begin section our-clients -->
    <section class="our-clients">
        <div class="gl-container">
            <h2 class="section-header">{{trans('messages.our_clients')}}</h2>
            <h3 class="koloro-history">
                <span>KOLORO – международная компания, которая уже более 7 лет на рынке.</span>
                Нам доверили создание и развитие своего бренда команды из Украины,
                Австрии, России, Беларуси и Азербайджана.
            </h3>
            <div class="our-clients-gallery">
                <div class="client-img-cont mob-vis">
                    <img src="/files/images/main/globino-logo.png" alt="client-img">
                </div>
                <div class="client-img-cont">
                    <img src="/files/images/main/raffhiezen-logo.png" alt="client-img">
                </div>
                <div class="client-img-cont mob-vis">
                    <img src="/files/images/main/kulinichi-logo.png" alt="client-img">
                </div>
                <div class="client-img-cont">
                    <img src="/files/images/main/obolonj-logo.png" alt="client-img">
                </div>
                <div class="client-img-cont">
                    <img src="/files/images/main/kievstar-logo.png" alt="client-img">
                </div>
                <div class="client-img-cont mob-vis">
                    <img src="/files/images/main/velmart-logo.png" alt="client-img">
                </div>
                <div class="client-img-cont">
                    <img src="/files/images/main/saltovskiy-logo.png" alt="client-img">
                </div>
                <div class="client-img-cont">
                    <img src="/files/images/main/myasnoy-logo.png" alt="client-img">
                </div>
            </div>
            <a href="/" class="client-btn order-form-btn">хочу стать клиентом</a>
        </div>
    </section>
    <!-- end section our-clients -->

    <!-- begin of section our-services-->
    <section class="services">
        <div class="gl-container">
            <h2 class="section-header">Услуги</h2>
            <nav class="services-menu">
                <ul>
                    <li class="active">
                        <a href="#" data-category="all-services"><span>Основные услуги</span></a>
                    </li>

                    @foreach($serviceCategories as $serviceCategory)
                        <li>
                            <a href="#"
                               data-category="{{ $serviceCategory->id }}"><span>{{ $serviceCategory->{'name' . $langSuf} }}</span></a>
                        </li>
                    @endforeach
                </ul>
            </nav>
        </div>
        <div class="services-gallery">
            <div class="services-item-cont" data-category="creating-new-tm">
                <div class="services-item">
                    <video autoplay loop muted>
                        <source src="video/1_cut.mp4" type="video/mp4">
                    </video>
                    <div class="poster-img-cont">
                        <img src="images/main/services-poster-1.jpg" alt="services-poster">
                    </div>
                    <div class="hover-layer">
                        <p class="achievments clearfix">
                            <span class="price">162 000 грн</span>
                            <span class="executed-works">102 выполненных работ</span>
                        </p>
                        <p class="header">Дизайн упаковки</p>
                        <p class="info">
                            Дизайн упаковки – один из основных компонентов успешного бренда.
                            Сегодня упаковка товара является важнейшим маркетинговым инструментом и
                            каналом коммуникации бренда с потребителями (как лояльными, так и потенциальными).
                        </p>
                        <a href="https://koloro.ua/novyj-dizajn-upakovki.html" class="go-service-btn">Перейти к
                            услуге</a>
                    </div>
                </div>
            </div>
            <div class="services-item-cont" data-category="brand-design-packaging">
                <div class="services-item">
                    <video autoplay loop muted>
                        <source src="video/2_cut.mp4" type="video/mp4">
                    </video>
                    <div class="poster-img-cont">
                        <img src="images/main/services-poster-2.jpg" alt="services-poster">
                    </div>
                    <div class="hover-layer">
                        <p class="achievments clearfix">
                            <span class="price">132 300 грн</span>
                            <span class="executed-works">56 выполненных работ</span>
                        </p>
                        <p class="header">Брендинг (разработка бренда)</p>
                        <p class="info">
                            Брендинг – процесс создания и развития бренда.
                            Он включает все этапы: от создания продукта – до продвижения и рекламы.
                        </p>
                        <a href="https://koloro.ua/brending.html" class="go-service-btn">Перейти к услуге</a>
                    </div>
                </div>
            </div>
            <div class="services-item-cont" data-category="brand-design-packaging">
                <div class="services-item">
                    <video autoplay loop muted>
                        <source src="video/3_cut.mp4" type="video/mp4">
                    </video>
                    <div class="poster-img-cont">
                        <img src="images/main/services-poster-3.jpg" alt="services-poster">
                    </div>
                    <div class="hover-layer">
                        <p class="achievments clearfix">
                            <span class="price">90 000 грн</span>
                            <span class="executed-works">11 выполненных работ</span>
                        </p>
                        <p class="header">Создание брендбука</p>
                        <p class="info">
                            Брендбук – это внутрикорпоративный документ, который систематизирует
                            все идеологические элементы бренда, формирует его комплексную картину,
                            а также содержит свод правил по использованию графических и вербальных компонентов бренда.
                        </p>
                        <a href="https://koloro.ua/sozdanie-brendbuka.html" class="go-service-btn">Перейти к услуге</a>
                    </div>
                </div>
            </div>
            <div class="services-item-cont" data-category="creating-new-tm">
                <div class="services-item">
                    <video autoplay loop muted>
                        <source src="video/4_cut.mp4" type="video/mp4">
                    </video>
                    <div class="poster-img-cont">
                        <img src="images/main/services-poster-4.jpg" alt="services-poster">
                    </div>
                    <div class="hover-layer">
                        <p class="achievments clearfix">
                            <span class="price">40 500 грн</span>
                            <span class="executed-works">36 выполненных работ</span>
                        </p>
                        <p class="header">Стратегия бренда (продвижение бренда компании)</p>
                        <p class="info">
                            Создали бренд, а что делать дальше Вы не знаете?
                            Что включает комплексное продвижение бренда? Как увеличить его активы?
                        </p>
                        <a href="https://koloro.ua/strategiya-brenda.html" class="go-service-btn">Перейти к услуге</a>
                    </div>
                </div>
            </div>
            <div class="services-item-cont" data-category="corporate-retail-branding">
                <div class="services-item">
                    <video autoplay loop muted>
                        <source src="video/5_cut.mp4" type="video/mp4">
                    </video>
                    <div class="poster-img-cont">
                        <img src="images/main/services-poster-5.jpg" alt="services-poster">
                    </div>
                    <div class="hover-layer">
                        <p class="achievments clearfix">
                            <span class="price"> 121 500 грн</span>
                            <span class="executed-works">10 выполненных работ</span>
                        </p>
                        <p class="header">Ритейл-брендинг</p>
                        <p class="info">
                            Ритейл-брендинг – это разработка бренда для торгово-розничной сети.
                            Он включает комплекс работ по созданию графических и вербальных компонентов бренда.
                        </p>
                        <a href="https://koloro.ua/ritejl-brending.html" class="go-service-btn">Перейти к услуге</a>
                    </div>
                </div>
            </div>
            <div class="services-item-cont" data-category="website-development">
                <div class="services-item">
                    <video autoplay loop muted>
                        <source src="video/6_cut.mp4" type="video/mp4">
                    </video>
                    <div class="poster-img-cont">
                        <img src="images/main/services-poster-6.jpg" alt="services-poster">
                    </div>
                    <div class="hover-layer">
                        <p class="achievments clearfix">
                            <span class="price">75 000 грн</span>
                            <span class="executed-works">31 выполненных работ</span>
                        </p>
                        <p class="header">Разработка сайта компании</p>
                        <p class="info">
                            Разработка корпоративного сайта – это возможность для компании получить
                            онлайн-представительство своего бизнеса. Успешный корпоративный сайт
                            будет актуальным продолжительное время и позволит активно вовлекать клиентов,
                            повышая их уровень лояльности.
                        </p>
                        <a href="https://koloro.ua/razrabotka-sayta-companii.html" class="go-service-btn">Перейти к
                            услуге</a>
                    </div>
                </div>
            </div>
            <div class="services-item-cont" data-category="creating-new-tm">
                <div class="services-item">
                    <video autoplay loop muted>
                        <source src="video/7_cut.mp4" type="video/mp4">
                    </video>
                    <div class="poster-img-cont">
                        <img src="images/main/services-poster-7.jpg" alt="services-poster">
                    </div>
                    <div class="hover-layer">
                        <p class="achievments clearfix">
                            <span class="price">61 600 грн</span>
                            <span class="executed-works">56 выполненных работ</span>
                        </p>
                        <p class="header">Нейминг (разработка названия бренда)</p>
                        <p class="info">
                            Понятие «нейминг» является производным от английского слова «name» - имя,
                            название или наименование. Naming (нейминг) – процесс разработки названия для чего-либо.
                            Нейминг бренда – это соединение креатива и маркетинга.
                        </p>
                        <a href="https://koloro.ua/nejming.html" class="go-service-btn">Перейти к услуге</a>
                    </div>
                </div>
            </div>
            <div class="services-item-cont" data-category="creating-new-tm">
                <div class="services-item">
                    <video autoplay loop muted>
                        <source src="video/8_cut.mp4" type="video/mp4">
                    </video>
                    <div class="poster-img-cont">
                        <img src="images/main/services-poster-8.jpg" alt="services-poster">
                    </div>
                    <div class="hover-layer">
                        <p class="achievments clearfix">
                            <span class="price">7900 грн</span>
                            <span class="executed-works">3 004 выполненных работ</span>
                        </p>
                        <p class="header">Кабинетные маркетинговые исследования</p>
                        <p class="info">
                            Кабинетные маркетинговые исследования – это сбор и анализ вторичной
                            информации по заданной теме. Цель исследования - получить точную информацию для
                            принятия правильных бизнес-решений.
                        </p>
                        <a href="https://koloro.ua/kabinetnue-marketingovue-issledovaniya.html" class="go-service-btn">Перейти
                            к услуге</a>
                    </div>
                </div>
            </div>
            <div class="services-item-cont" data-category="">
                <div class="services-item">
                    <video autoplay loop muted>
                        <source src="video/9_cut.mp4" type="video/mp4">
                    </video>
                    <div class="poster-img-cont">
                        <img src="images/main/services-poster-9.jpg" alt="services-poster">
                    </div>
                    <div class="hover-layer">
                        <p class="achievments clearfix">
                            <span class="price">30 800 грн</span>
                            <span class="executed-works">54 выполненных работ</span>
                        </p>
                        <p class="header">Уникальное торговое предложение (УТП)</p>
                        <p class="info">
                            Уникальное торговое предложение (УТП) – это лучший способ донести информацию
                            о продукте до потенциального клиента. В условиях современной сумасшедшей конкуренции,
                            он работает гораздо эффективнее обычного рекламного текста.
                        </p>
                        <a href="https://koloro.ua/unikalnoe-torgovoe-predlozhenie.html" class="go-service-btn">Перейти
                            к
                            услуге</a>
                    </div>
                </div>
            </div>

        </div>
        <a href="/services" class="see-more-services-btn">
            <span>показать другие услуги</span>
            <i class="icon icon-round_arrows"></i>
        </a>
    </section>
    <!-- end of section our-services-->

    <!-- begin of section our-advantages-->
    <section class="our-advantages">
        <div class="gl-container">
            <h2 class="section-header">Почему нас выбирают</h2>
            <div class="our-advantages-gallery">

                <div class="advantage-item" data-index="0">
                    <i class="icon advantage-icon-1"></i>
                    <div class="advantage-block" data-index="0">
                        <h3 class="advantage-header color-1">Большой <br> опыт</h3>
                        <p class="advantage-text">
                            Многолетний опыт работы с водочными и колбасными брендами создал нам имя.
                            Сегодня мы работаем с компаниями из различных сфер B2C и В2В.
                        </p>
                        <button class="advantage-up-btn">
                            <i class="icon icon-service-arrow-up-yellow"></i>
                        </button>
                    </div>
                </div>
                <div class="advantage-item" data-index="1">
                    <i class="icon advantage-icon-2"></i>
                    <div class="advantage-block" data-index="1">
                        <h3 class="advantage-header color-2">Маркетинговые <br> исследования</h3>
                        <p class="advantage-text">
                            Попадаем точно в цель. <span> Основываемся на маркетинговых исследованиях и соцопросах.
                        Каждый проект построен на цифрах, </span> поэтому дизайн упаковки, фирменный стиль компании
                            или позиционирование всегда метят в свою ЦА.
                        </p>
                        <button class="advantage-up-btn">
                            <i class="icon icon-service-arrow-up-green"></i>
                        </button>
                    </div>
                </div>
                <div class="advantage-item" data-index="2">
                    <i class="icon advantage-icon-3"></i>
                    <div class="advantage-block" data-index="2">
                        <h3 class="advantage-header color-3">Создаем тренды <br> в дизайне</h3>
                        <p class="advantage-text">
                            <span>Мы эксперты в трендах дизайна и сами создаем их.</span>
                            При этом мы не концентрируемся на быстротечных микротрендах,
                            а выделяем макротренды. Поэтому <span>наш дизайн актуальный,</span> но не однодневный.
                        </p>
                        <button class="advantage-up-btn">
                            <i class="icon icon-service-arrow-up-blue"></i>
                        </button>
                    </div>
                </div>
                <div class="advantage-item" data-index="3">
                    <i class="icon advantage-icon-4"></i>
                    <div class="advantage-block" data-index="3">
                        <h3 class="advantage-header color-4">Прибыльные <br> бренды</h3>
                        <p class="advantage-text">
                            Наши работы увеличивают продажи и <span>приносят нашим клиентам прибыль.</span>
                        </p>
                        <button class="advantage-up-btn">
                            <i class="icon icon-service-arrow-up-navy-blue"></i>
                        </button>
                    </div>
                </div>
                <div class="advantage-item" data-index="4">
                    <i class="icon advantage-icon-5"></i>
                    <div class="advantage-block" data-index="4">
                        <h3 class="advantage-header color-5">Слаженная <br> команда </h3>
                        <p class="advantage-text">
                            У нас не случается проблем с пониманием задач.
                            Желания и ожидания клиентов оправдываются, когда они видят результат работы.
                        </p>
                        <button class="advantage-up-btn">
                            <i class="icon icon-service-arrow-up-pink"></i>
                        </button>
                    </div>
                </div>
                <div class="advantage-item" data-index="5">
                    <i class="icon advantage-icon-6"></i>
                    <div class="advantage-block" data-index="5">
                        <h3 class="advantage-header color-6">Клиент-сервис</h3>
                        <p class="advantage-text">
                            <span>Хорошее звено менеджеров,</span> которые умеют работать с клиентами.
                            За каждым проектом закреплен менеджер.
                        </p>
                        <button class="advantage-up-btn">
                            <i class="icon icon-service-arrow-up-red"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="our-advantages-texts">
                <div class="advantage-block" data-index="0">
                    <h3 class="advantage-header color-1">Большой <br> опыт</h3>
                    <p class="advantage-text">
                        Многолетний опыт работы с водочными и колбасными брендами создал нам имя.
                        Сегодня мы работаем с компаниями из различных сфер B2C и В2В.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- end of section our-advantages-->
@stop

@section('page-scripts')
    <script src="/js/order_form.js"></script>
    <script src="/js/success_form.js"></script>
    <!-- include viewportchecker.js -->
    <!--<script src="js/viewportchecker.js"></script>-->

    <!--скрипты для всех страниц конец-->
    <!-- start of order-form -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.js"></script>
    {{--<script>--}}
    {{--jQuery(function($){--}}
    {{--$("[name='phone']").mask("(380)999999999?999", {"placeholder": ""});--}}
    {{--});--}}
    {{--</script>--}}

    <!-- end of subscribe_form -->

    <!-- скрипты только для этой страницы начало-->

    {{--subscription--}}
    @include('layouts.partials.subscriptionpost')
    {{--ALERT 'SUCCESS' AFTER SUBSCRIPT--}}
    {{--end subscription--}}

    <!-- bxSlider Javascript file -->
    <script src="/js/libs/jquery.bxslider.min.js"></script>

    <script src="/js/index.js"></script>

    <!-- скрипты только для этой страницы конец-->
@stop