@extends('layouts.client')

@section('page-title', $page->meta->{'title' . $langSuf} )

@section('page-meta')
    <meta name="description" content="{{ $page->meta->{'description' . $langSuf} }}">
    <meta name="keywords" content="{{ $page->meta->{'keywords' . $langSuf} }}">
@stop

@section('page-content')

    @include('layouts.whiteheader')

    <!--PRELOADER!!! -->
    <div id="preloader"></div>
    <!--&lt;!&ndash; begin background &ndash;&gt;-->
    <!--<section class="background" style="background-image: url('/images/company_page/company_main_1.jpg');">-->
    <!--&lt;!&ndash; begin container &ndash;&gt;-->
    <!--<div class="container">-->
    <!--<h1 class="page_name animated fadeIn">KOLORO - брендинговое агентство</h1>-->
    <!--</div>-->
    <!--&lt;!&ndash; end container &ndash;&gt;-->
    <!--</section>-->
    <!--&lt;!&ndash; end background &ndash;&gt;-->

    <section id="company-page">
        <div class="plashka"></div>
        <div class="bg-container top-container"
             style="background-image: url('/files/images/company_page/company_main_1.jpg');">
            <div class="dark-mask"></div>
            <div class="gl-container">
                <h1 class="top-title animated fadeIn">KOLORO - брендинговое агентство</h1>
            </div>
        </div>

        <div class="info-block-container">
            <div class="gl-container">
                <div class="info-left">
                    <h3 class="info-left-title animated left">Кто мы?</h3>
                </div>
                <div class="info-right animated right">
                    <p>
                        Мы — брендинговое агентство «КОЛОРО». Люди, которые любят создавать макеты,
                        придумывать слоганы, перебирать сотни названий в поисках лучшего.
                        Больше всего в работе мы ценим довольных заказчиков и корпоративные четверги:
                        успешные проекты вдохновляют, а корпоративы дают возможность увидеть руководителя
                        в костюме ниндзя.
                    </p>
                    <!--<p class="for-read-more">-->
                    <!--Брендинговое агентство KOLORO предлагает уникальные и оригинальные идеи всем, кто хочет продавать не-->
                    <!--просто товар на полке, а добиваться глобальных успехов с известным и востребованным брендом. Мы-->
                    <!--способны не только разработать красивый и узнаваемый дизайн упаковки, но и вложить в каждый бренд-->
                    <!--«душу».-->
                    <!--</p>-->
                    <!--<span class="read-more-btn">Читать дальше</span>-->
                </div>
            </div>
        </div>

        <!-- begin change_foto -->
        <div class="change_foto">

            <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAkwBADs="
                 data-original="/files/images/company_page/1.jpg" alt="name image" class="lazy">
            <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAkwBADs="
                 data-original="/files/images/company_page/2.jpg" alt="name image" class="lazy">
            <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAkwBADs="
                 data-original="/files/images/company_page/3.jpg" alt="name image" class="lazy">
            <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAkwBADs="
                 data-original="/files/images/company_page/4.jpg" alt="name image" class="lazy">

            <!--<script type="text/javascript">-->
            <!--var arr = ["1.jpg", "2.jpg", "3.jpg", "4.jpg", "1.jpg", "2.jpg", "3.jpg", "4.jpg", "1.jpg", "2.jpg", "3.jpg", "4.jpg"]; //нужен массив файлов из папки  image_block()-->
            <!--</script>-->
            <div class="clear"></div>
        </div>
        <!-- end change_foto -->

        <div class="info-block-container">
            <div class="gl-container">
                <div class="info-left">
                    <h3 class="info-left-title animated left">Какие мы?</h3>
                </div>
                <div class="info-right animated right">
                    <p>
                        Наши проекты смелые. Ровно настолько, насколько требует техническое задание.
                        УТП — провокативны. Насколько позволяет моральный кодекс среднестатистической
                        43-летней женщины. Кабинетные исследования — открыты. Ровно настолько,
                        чтобы не привлекать внимание антимонопольного комитета.
                        Очень хотелось бы написать, что мы — лучшие. Но для этого мы слишком хорошо воспитаны.
                    </p>
                </div>
            </div>
        </div>

        <div class="info-block-container">
            <div class="gl-container">
                <div class="info-left">
                    <h3 class="info-left-title animated top">Из чего мы состоим?</h3>
                </div>
                <div class="info-right animated top">
                    <p>
                        Из 22 молодых умных людей. Из офиса в прекрасном голубом здании на Трехсвятительской.
                        Из 7 лет работы на рынках Украины и России. Из десятка созданных брендов,
                        которые вышли на рынок и успешно продолжают свое существование.
                        Из опыта и энтузиазма.
                    </p>
                </div>
            </div>
        </div>

        <div class="info-block-container">
            <div class="gl-container">
                <div class="info-left">
                    <h3 class="info-left-title animated top">Зачем мы это делаем?</h3>
                </div>
                <div class="info-right animated top">
                    <p>
                        Нам нравиться искусство. Саша каждый год отправляет короткометражки на KISFF,
                        Алексей рисует аниме на уровне с Хаяо Миядзаки, Люси пишет рассказы в стол,
                        но коллектив «КОЛОРО» все-равно верит, что они очень талантливые.
                    </p>
                    <p class="for-read-more">
                        А ещё нам нравится разбираться, почему одна компания зарабатывает 1,5 млн в год,
                        а другая после полугодичной борьбы поднимает белый флаг и уходит с рынка.
                        Брендинговое агентство — это место, где маркетинг сливается с творчеством.
                        Реклама приобретает художественную ценность, а мы чувствуем себя счастливыми, занимаясь любимым
                        делом.
                    </p>
                    <span class="read-more-btn">Читать дальше</span>
                </div>
            </div>
        </div>

    </section>

    <!-- begin portfolio_block -->
    <section class="portfolio_block">
        <!-- begin container -->
        <div class="container">
            <p class="name_block">{{ trans('client.widgets.jobs_examples.main_title') }}</p>
            <!-- begin image_container -->
            @widget('jobs_example')

            <!-- end image_container -->
            <!--<a href="" class="btn transparent_btn" id="show_more">Еще работы</a>-->
            <a href="/portfolio" class="gl-yellow-btn show-more-portfolio-btn" id="show_more">Еще работы</a>

        </div>
        <!-- end container -->
    </section>
    <!-- end portfolio_block -->
@stop
@section('page-scripts')
<script src="js/company-page.js"></script>
@stop