@extends('layouts.client')

@section('page-title', $portfolio->meta->{'title' . $langSuf} )

@section('page-meta')
    <meta name="description" content="{{ $portfolio->meta->{'description' . $langSuf} }}">
    <meta name="keywords" content="{{ $portfolio->meta->{'keywords' . $langSuf} }}">
@stop

@section('page-style')

    <!-- OwlCarousel -->
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/css/portfolio-main.css">

@stop


@section('page-content')

    <!--PRELOADER!!! -->
    <div id="preloader"></div>

    @include('layouts.whiteheader')
<header class="fixmenu">
    <!-- begin container -->
    <div class="container">
        <a href="/index.html" class="logo_link">
            <img src="/files/images/portfolio/general/logo.png" class="logo white_logo" width="166" height="51" alt="coloro">
            <img src="/files/images/portfolio/general/logo2.png" class="logo color_logo" width="166" height="51" alt="coloro"
                 style="display: none;">
        </a>

        <!-- begin languge -->
        <div class="menu_triger visible_on_mobile">
            <div class="first"></div>
            <div class="second"></div>
            <div class="third"></div>
        </div>
        <!-- end languge -->
        <nav class="main_menu">
            <ul>
                <li><a href="/index.html">Главная</a></li>
                <li><a href="/portfolio.html" class="active">портфолио</a></li>
                <li><a href="/services.html">услуги</a></li>
                <li><a href="/blog.html">блог</a></li>
                <li><a href="/company_page.html">компания</a></li>
                <li><a href="/contacts.html">контакты</a></li>

            </ul>
            <a href="/" target="_blank" class="btn_calculate order-form-btn">расcчитать проект</a>
            <div class="languge">
                <ul>
                    <li>
                        <a href="">ua</a>
                    </li>
                    <li>
                        <a href="" class="active">ru</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <!-- end container -->
</header>

<section id="chistaya-pravda">
    <div class="bg-container top-container" style="background-image: url('/files/images/portfolio/serebroff/serebroff-picture-1.jpg')">
        <div class="dark-mask"></div>
        <div class="gl-container title-container">
            <h1 class="top-title">
                SEREBROFF
            </h1>
            <h2 class="top-title-small">
                «Водка с крепким «характером»,
                эталон благородного стиля и вкуса»
            </h2>
        </div>
    </div>

    <div class="info-block-container">
        <div class="gl-container">
            <div class="info-left">
                <h3 class="info-left-title">Предыстория</h3>
            </div>
            <div class="info-right">
                <p>
                    <span>Водочный бренд «Сереброфф» — «дитя» ОАО «Белвино»,</span> производителя
                    алкогольной продукции с 45-летним стажем. Начиная свою работу в 1960
                    году как завод вторичного виноделия, сегодня ОАО «Белвино» стало одним
                    из самых технологически оснащенных предприятий, использующих последние
                    передовые технологии приготовления алкогольных напитков, постоянно наращивающих
                    и развивающих свое производство. Водка «Serebroff» была выпущена предприятием
                    как локальный белгородский бренд и сегодня потребовала
                    <a class="gl-link" href="https://koloro.ua/rebrending.html" target="_blank">
                        ребрендинга
                    </a>.
                </p>
            </div>
        </div>
    </div>

    <div class="info-block-container">
        <div class="gl-container">
            <div class="info-left">
                <h3 class="info-left-title">Задача</h3>
            </div>
            <div class="info-right">
                <p>
                    Разработка красивого образа для бренда, <span>редизайн логотипа и разработка этикеток
                    для белгородской водки  «Сереброфф»</span> стало основной задачей проекта.
                </p>
            </div>
        </div>
    </div>

    <div class="gl-container">
        <h2 class="h2-title">Решение</h2>
    </div>

    <div class="info-block-container">
        <div class="gl-container">
            <div class="info-left">
                <h3 class="info-left-title">Этапы разработки бренда. Стратегия бренда</h3>
            </div>
            <div class="info-right">
                <p>
                    Особая технология очистки делает <span>водку «Сереброфф» оригинальным продуктом —
                    эталоном мужества, уверенности в себе,</span> благородного стиля и вкуса.
                </p>
                <p>
                    Именно эти качества требовалось графически подчеркнуть дизайнерам. Для донесения
                    покупателю указанной информации дизайнерам были доверены редизайн логотипа, дизайн
                    бутылок, создание этикеток и визуальная разработка бренда.
                </p>
                <p class="for-read-more">
                    По окончанию работы над геометрией бутылок был получен оригинальный, стройный,
                    легкий и стильный дизайн бутылки, подчёркивающий благородство, мужественность и
                    аристократизм бренда. <span>Редизайн бутылки – статусный и фундаментальный.
                    Такой коммуникативный образ отлично отображает крепость и чистоту напитка.</span>
                </p>
                <span class="read-more-btn">Читать дальше</span>
            </div>
        </div>
    </div>

    <div class="info-block-container">
        <div class="gl-container">
            <div class="info-left">
                <h3 class="info-left-title">Логотип</h3>
            </div>
            <div class="info-right">
                <p>
                    <a class="gl-link" href="https://koloro.ua/razrabotka-logotipa.html" target="_blank">
                        Редизайн логотипа бренда
                    </a>
                    также заслуживает отдельного внимания. Ведь <span>новый
                    логотип – украшенная императорской короной фирменная анаграмма «SF»</span> —
                    краеугольным камнем вписался в арочный декор этикетки и бутылки бренда.
                    К тому же, создание этикетки по особой технологии не потребовало от заказчика
                    огромных затрат, при этом позволив передать абсолютно все идеи бренд-дизайна!
                </p>
            </div>
        </div>
    </div>

    <div class="gl-container">
        <h2 class="h2-title">Редизайн этикетки водки "Сереброфф"</h2>
    </div>

    <div class="image-container">
        <img src="/files/images/portfolio/serebroff/serebroff-picture-1.jpg" alt="serebroff-picture">
    </div>

    <div class="info-block-container">
        <div class="gl-container">
            <div class="info-left">
                <h3 class="info-left-title">&nbsp;</h3>
            </div>
            <div class="info-right">
                <p>
                    Большая часть <span>прозрачной этикетки покрыта дифракционной фольгой,</span> поверх которой
                    наложено пять наименований цветов. Полупрозрачные краски, покрывающие фольгу,
                    обеспечивают особое свечение и глубину фона. За счет этого шрифты, логотип и
                    орнамент этикетки кажутся объемными и буквально парящими над фоновой основой.
                </p>
                <p class="for-read-more">
                    <span>Когда берешь такую бутылку, большой палец оказывается прямо на "кнопке" с
                        надписью «Silver Filtered»</span> (фильтрована серебром), по исполнению напоминающей
                    отпечаток пальца на стекле. Эта же рельефная «кнопка» этикетки служит дополнительным
                    фиксатором бутылки в руке. Оттого идея надежности и удобства премиум упаковки в
                    данном случае выглядит еще более реалистично.
                </p>
                <span class="read-more-btn">Читать дальше</span>
            </div>
        </div>
    </div>

    <div class="gl-container">
        <h2 class="h2-title">Фирменный стиль</h2>
    </div>

    <div class="gl-container">
        <h2 class="h2-title">POS-материалы для водки "Сереброфф"</h2>
    </div>

    <div class="image-container">
        <img src="/files/images/portfolio/serebroff/serebroff-picture-2.jpg" alt="serebroff-picture">
    </div>

    <div class="info-block-container">
        <div class="gl-container">
            <div class="info-left">
                <h3 class="info-left-title">Результат</h3>
            </div>
            <div class="info-right">
                <p>
                    В итоге, наш заказчик получил <span>многократно защищенную от подделок красивую упаковку,</span>
                    выгодно подчеркивающую
                    <a class="gl-link" href="https://koloro.ua/legenda-brenda.html" target="_blank">
                        легенду бренда
                    </a> и улучшающую его коммуникацию. Поэтому водка
                    сразу понравилась крепким и решительным характером людям – лидерам, на которых и
                    рассчитан данный премиум сегмент. <span>Сейчас «Serebroff» не только успешно продается в
                    России, но, и с недавнего времени, регулярно импортируется в США.</span> Особо же приятно,
                    что клиент получил не только опыт и удовольствие от сотрудничества, но и <span>стабильно
                    растущий доход от продаж.</span>
                </p>
            </div>
        </div>
    </div>

    <div class="gl-container">
        <h2 class="h2-title">Ребрендинг ТМ "Serebroff"</h2>
    </div>
    <div class="image-container">
        <img src="/files/images/portfolio/serebroff/serebroff-picture-3.jpg" alt="serebroff-picture">
    </div>

    <div class="gl-container">
        <h2 class="h2-title">Дизайн водки «Serebroff»</h2>
    </div>
    <div class="image-container">
        <img src="/files/images/portfolio/serebroff/serebroff-picture-4.jpg" alt="serebroff-picture">
    </div>

    <div class="gl-container">
        <h2 class="h2-title">Водка "Serebroff"</h2>
    </div>
    <div class="image-container">
        <img src="/files/images/portfolio/serebroff/serebroff-picture-5.jpg" alt="serebroff-picture">
    </div>

    <div class="info-block-container">
        <div class="gl-container">
            <div class="info-left">
                <h3 class="info-left-title">Резюме</h3>
            </div>
            <div class="info-right">
                <p>
                    С течением времени каждый бренд  успешно «правящий на рынке» и долгое время
                    «удерживающий царскую корону», требует проведения ребрендинга, в связи с
                    устареванием дизайна упаковки и потерей прежней привлекательности. <span>Качественный
                    редизайн упаковки и комплексный ребрендинг</span> вы можете
                    <a class="gl-link" href="https://koloro.ua/contacts.html" target="_blank">
                        заказать у нас
                    </a>.
                </p>
            </div>
        </div>
    </div>

    <!-- begin like_it -->
    <div class="like_it">
        <!-- begin raiting_container -->
        <div class="rating_container">
            <form>
                <input id="input-id" value="2" type="number" class="rating" min=0 max=5 step=0.5 data-size="md">
            </form>
            <p class="voice"><span class="yellow">10522</span> голосов</p>
        </div>
        <!-- end raiting_container -->
        <!-- begin qwestion -->
        <div class="qwestion">
            <i class="icon icon-animation_arrow animated infinite pulse"></i>
            <i class="icon icon-animation_top hidden_arrow animated infinite pulse"></i>
            <span>Понравилась работа?<br>Оставьте свой голос:)</span>
        </div>
        <!-- end qwestion -->
    </div>
    <!-- end like_it -->



    @include('client.portfolio._form_prev_next_work')

</section>
@stop
@section('page-scripts')

    <!-- OwlCarousel -->
    <script src="/js/owl.carousel.min.js"></script>
    <!--<script src="../js/owl.lazyload.js"></script>-->

    <!-- SmoothScroll -->
    <!--<script src="../js/SmoothScroll.js"></script>-->
    <script src="../js/viewportchecker.js"></script>

    <!-- star rating -->
    <script src="/js/star-rating.js"></script>
    <link rel="stylesheet" href="/css/star-rating.css" media="all" type="text/css"/>
    <script type="text/javascript">
        $(".rating").rating({min:1, max:5, step:0.5, size:'sm'});

        $('.clear-rating').hide();
        $('.caption').hide();
    </script>


    <!-- include own JavaScript -->
    <script src="/js/portfolio-main.js"></script>

@stop