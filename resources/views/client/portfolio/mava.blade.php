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
    <link rel="stylesheet" href="/css/portfolio/portfolio-mava.css">
@stop


@section('page-content')



    <!--PRELOADER!!! -->
    <div id="preloader"></div>

    @include('layouts.blackheader')

    <section id="portfolio-mava">
        <div class="top-container">
            <img src="/images/portfolio/mava/coffee-beans-gold.png" alt="coffee-beans" class="coffee-beans-gold">
            <img src="/images/portfolio/mava/coffee-beans-1.png" alt="coffee-beans" class="coffee-beans-1">
            <img src="/images/portfolio/mava/coffee-beans-2.png" alt="coffee-beans" class="coffee-beans-2">
            <img src="/images/portfolio/mava/coffee-beans-gold-3.png" alt="coffee-beans" class="coffee-beans-gold-3">
            <div class="image-container">
                <img src="/images/portfolio/mava/main-image-banner.jpg" alt="main-image-banner.jpg">
            </div>
        </div>

        <div class="info-block-container info-history">
            <div class="gl-container">
                <div class="info-left">
                    <h3 class="info-left-title">Предыстория создания нового кофе</h3>
                </div>
                <div class="info-right">
                    <p>
                        Прежде всего, мы проанализировали названия существующих
                        компаний-конкурентов. Поскольку основным направлением
                        деятельности компании является продажа оборудования для
                        ухода за газонами и парками, мы решили сделать акцент на
                        названии, ассоциирующемся с полями и долинами.
                    </p>
                    <p class="for-read-more">
                        Прежде всего, мы проанализировали названия существующих
                        компаний-конкурентов. Поскольку основным направлением
                        деятельности компании является продажа оборудования для
                        ухода за газонами и парками, мы решили сделать акцент на
                        названии, ассоциирующемся с полями и долинами.
                    </p>
                    <span class="read-more-btn">Читать дальше</span>
                </div>
            </div>
        </div>

        <div class="bg-container image-1">
            <img src="/images/portfolio/mava/coffee-beans-gold-2.png" alt="coffee-beans" class="coffee-beans-gold-2">
            <img src="/images/portfolio/mava/coffee-beans-4.png" alt="coffee-beans" class="coffee-beans-4">
            <img src="/images/portfolio/mava/coffee-beans-3.png" alt="coffee-beans" class="coffee-beans-3">
            <img src="/images/portfolio/mava/coffee-beans-gold-4.png" alt="coffee-beans" class="coffee-beans-gold-4">
        </div>

        <div class="bg-container image-2">
            <div class="image-container">
                <img src="/images/portfolio/mava/banner-gold-beans-png.png" alt="coffee-beans" class="banner-gold-beans">
            </div>
        </div>

        <div class="info-block-container">
            <div class="gl-container">
                <div class="info-left">
                    <h3 class="info-left-title">Полноценный анализ рынка Кофе Украины и …</h3>
                </div>
                <div class="info-right">
                    <p>
                        Прежде всего, мы проанализировали названия существующих
                        компаний-конкурентов. Поскольку основным направлением
                        деятельности компании является продажа оборудования для
                        ухода за газонами и парками, мы решили сделать акцент на
                        названии, ассоциирующемся с полями и долинами.
                    </p>
                    <p class="for-read-more">
                        Прежде всего, мы проанализировали названия существующих
                        компаний-конкурентов. Поскольку основным направлением
                        деятельности компании является продажа оборудования для
                        ухода за газонами и парками, мы решили сделать акцент на
                        названии, ассоциирующемся с полями и долинами.
                    </p>
                    <span class="read-more-btn">Читать дальше</span>
                </div>
            </div>
        </div>

        <div class="two-images-container">
            <div class="image-left">
                <img src="/images/portfolio/mava/image-table-1.jpg" alt="koloro experts left photo">
            </div>
            <div class="image-right">
                <img src="/images/portfolio/mava/image-table-2.jpg" alt="koloro experts right photo">
            </div>
        </div>

        <div class="info-block-container">
            <div class="gl-container">
                <div class="info-left">
                    <h3 class="info-left-title">Построение стратегии выхода нового кофе
                        (грамаж, места, выбор предварительного позиционирования)</h3>
                </div>
                <div class="info-right">
                    <p>
                        Прежде всего, мы проанализировали названия существующих
                        компаний-конкурентов. Поскольку основным направлением
                        деятельности компании является продажа оборудования для
                        ухода за газонами и парками, мы решили сделать акцент на
                        названии, ассоциирующемся с полями и долинами.
                    </p>
                    <p class="for-read-more">
                        Прежде всего, мы проанализировали названия существующих
                        компаний-конкурентов. Поскольку основным направлением
                        деятельности компании является продажа оборудования для
                        ухода за газонами и парками, мы решили сделать акцент на
                        названии, ассоциирующемся с полями и долинами.
                    </p>
                    <span class="read-more-btn">Читать дальше</span>
                </div>
            </div>
        </div>

        <div class="two-vertical-images">
            <div class="image-container">
                <img src="/images/portfolio/mava/image-a-1.jpg" alt="experts photo">
            </div>
            <div class="image-container">
                <img src="/images/portfolio/mava/image-a-2.jpg" alt="experts photo">
            </div>
        </div>

        <div class="gl-container">
            <h2 class="h2-title header-black">Нейминг для кофе варианты:</h2>
        </div>

        <div class="info-block-container">
            <div class="gl-container">
                <div class="info-left">
                    <h3 class="info-left-title">Мозговой штурм</h3>
                </div>
                <div class="info-right">
                    <p>
                        Прежде всего, мы проанализировали названия существующих
                        компаний-конкурентов. Поскольку основным направлением
                        деятельности компании является продажа оборудования для
                        ухода за газонами и парками, мы решили сделать акцент на
                        названии, ассоциирующемся с полями и долинами.
                    </p>
                    <p class="for-read-more">
                        Прежде всего, мы проанализировали названия существующих
                        компаний-конкурентов. Поскольку основным направлением
                        деятельности компании является продажа оборудования для
                        ухода за газонами и парками, мы решили сделать акцент на
                        названии, ассоциирующемся с полями и долинами.
                    </p>
                    <span class="read-more-btn">Читать дальше</span>
                </div>
            </div>
        </div>

        <div class="two-images-container">
            <div class="image-left">
                <img src="/images/portfolio/mava/naming-1.jpg" alt="naming photo">
            </div>
            <div class="image-right">
                <img src="/images/portfolio/mava/naming-2.jpg" alt="naming photo">
            </div>
        </div>

        <div class="two-images-container">
            <div class="image-left">
                <img src="/images/portfolio/mava/naming-3.jpg" alt="naming photo">
            </div>
            <div class="image-right">
                <img src="/images/portfolio/mava/naming-4.jpg" alt="naming photo">
            </div>
        </div>

        <div class="info-block-container">
            <div class="gl-container">
                <div class="info-left">
                    <h3 class="info-left-title">Сбор  вариантов 500 шт.</h3>
                </div>
                <div class="info-right">
                    <p>
                        Прежде всего, мы проанализировали названия существующих
                        компаний-конкурентов. Поскольку основным направлением
                        деятельности компании является продажа оборудования для
                        ухода за газонами и парками, мы решили сделать акцент на
                        названии, ассоциирующемся с полями и долинами.
                    </p>
                    <p class="for-read-more">
                        Прежде всего, мы проанализировали названия существующих
                        компаний-конкурентов. Поскольку основным направлением
                        деятельности компании является продажа оборудования для
                        ухода за газонами и парками, мы решили сделать акцент на
                        названии, ассоциирующемся с полями и долинами.
                    </p>
                    <span class="read-more-btn">Читать дальше</span>
                </div>
            </div>
        </div>

        <div class="info-block-container">
            <div class="gl-container">
                <div class="info-left">
                    <h3 class="info-left-title">Тестирование на ЦА</h3>
                </div>
                <div class="info-right">
                    <p>
                        Прежде всего, мы проанализировали названия существующих
                        компаний-конкурентов. Поскольку основным направлением
                        деятельности компании является продажа оборудования для
                        ухода за газонами и парками, мы решили сделать акцент на
                        названии, ассоциирующемся с полями и долинами.
                    </p>
                    <p class="for-read-more">
                        Прежде всего, мы проанализировали названия существующих
                        компаний-конкурентов. Поскольку основным направлением
                        деятельности компании является продажа оборудования для
                        ухода за газонами и парками, мы решили сделать акцент на
                        названии, ассоциирующемся с полями и долинами.
                    </p>
                    <span class="read-more-btn">Читать дальше</span>
                </div>
            </div>
        </div>

        <div class="info-block-container">
            <div class="gl-container">
                <div class="info-left">
                    <h3 class="info-left-title">Презентация</h3>
                </div>
                <div class="info-right">
                    <p>
                        Прежде всего, мы проанализировали названия существующих
                        компаний-конкурентов. Поскольку основным направлением
                        деятельности компании является продажа оборудования для
                        ухода за газонами и парками, мы решили сделать акцент на
                        названии, ассоциирующемся с полями и долинами.
                    </p>
                    <p class="for-read-more">
                        Прежде всего, мы проанализировали названия существующих
                        компаний-конкурентов. Поскольку основным направлением
                        деятельности компании является продажа оборудования для
                        ухода за газонами и парками, мы решили сделать акцент на
                        названии, ассоциирующемся с полями и долинами.
                    </p>
                    <span class="read-more-btn">Читать дальше</span>
                </div>
            </div>
        </div>

        <div class="bg-container image-3"></div>

        <div class="info-block-container">
            <div class="gl-container">
                <div class="info-left">
                    <h3 class="info-left-title">Утвержденное название для ТМ нового кофе</h3>
                </div>
                <div class="info-right">
                    <p>
                        Прежде всего, мы проанализировали названия существующих
                        компаний-конкурентов. Поскольку основным направлением
                        деятельности компании является продажа оборудования для
                        ухода за газонами и парками, мы решили сделать акцент на
                        названии, ассоциирующемся с полями и долинами.
                    </p>
                    <p class="for-read-more">
                        Прежде всего, мы проанализировали названия существующих
                        компаний-конкурентов. Поскольку основным направлением
                        деятельности компании является продажа оборудования для
                        ухода за газонами и парками, мы решили сделать акцент на
                        названии, ассоциирующемся с полями и долинами.
                    </p>
                    <span class="read-more-btn">Читать дальше</span>
                </div>
            </div>
        </div>

        <div class="bg-container image-4"></div>

        <div class="gl-container">
            <h2 class="h2-title header-black">Создание дизайна упаковки для кофе</h2>
        </div>

        <div class="info-block-container">
            <div class="gl-container">
                <div class="info-left">
                    <h3 class="info-left-title">Варианты оформления пачки кофе</h3>
                </div>
                <div class="info-right">
                    <p>
                        Прежде всего, мы проанализировали названия существующих
                        компаний-конкурентов. Поскольку основным направлением
                        деятельности компании является продажа оборудования для
                        ухода за газонами и парками, мы решили сделать акцент на
                        названии, ассоциирующемся с полями и долинами.
                    </p>
                    <p class="for-read-more">
                        Прежде всего, мы проанализировали названия существующих
                        компаний-конкурентов. Поскольку основным направлением
                        деятельности компании является продажа оборудования для
                        ухода за газонами и парками, мы решили сделать акцент на
                        названии, ассоциирующемся с полями и долинами.
                    </p>
                    <span class="read-more-btn">Читать дальше</span>
                </div>
            </div>
        </div>

        <div class="mava-packages-cont-1">
            <div class="package-img-cont">
                <img src="/images/portfolio/mava/image-d-1.jpg" alt="mava package photo">
            </div>
            <div class="package-img-cont">
                <img src="/images/portfolio/mava/image-d-2.jpg" alt="mava package photo">
            </div>
            <div class="package-img-cont">
                <img src="/images/portfolio/mava/image-d-3.jpg" alt="mava package photo">
            </div>
            <div class="package-img-cont">
                <img src="/images/portfolio/mava/image-d-4.jpg" alt="mava package photo">
            </div>
            <div class="package-img-cont">
                <img src="/images/portfolio/mava/image-d-5.jpg" alt="mava package photo">
            </div>
            <div class="package-img-cont">
                <img src="/images/portfolio/mava/image-d-6.jpg" alt="mava package photo">
            </div>
            <div class="package-img-cont">
                <img src="/images/portfolio/mava/image-d-7.jpg" alt="mava package photo">
            </div>
            <div class="package-img-cont">
                <img src="/images/portfolio/mava/image-d-8.jpg" alt="mava package photo">
            </div>
            <div class="package-img-cont">
                <img src="/images/portfolio/mava/image-d-9.jpg" alt="mava package photo">
            </div>
        </div>

        <div class="info-block-container">
            <div class="gl-container">
                <div class="info-left">
                    <h3 class="info-left-title">Лучший концепт для нового кофе</h3>
                </div>
                <div class="info-right">
                    <p>
                        Прежде всего, мы проанализировали названия существующих
                        компаний-конкурентов. Поскольку основным направлением
                        деятельности компании является продажа оборудования для
                        ухода за газонами и парками, мы решили сделать акцент на
                        названии, ассоциирующемся с полями и долинами.
                    </p>
                    <p class="for-read-more">
                        Прежде всего, мы проанализировали названия существующих
                        компаний-конкурентов. Поскольку основным направлением
                        деятельности компании является продажа оборудования для
                        ухода за газонами и парками, мы решили сделать акцент на
                        названии, ассоциирующемся с полями и долинами.
                    </p>
                    <span class="read-more-btn">Читать дальше</span>
                </div>
            </div>
        </div>

        <div class="bg-container image-5"></div>

        <div class="image-container mava-mask-cont">
            <img src="/images/portfolio/mava/mask-mava.svg" alt="mask-mava">
        </div>

        <div class="image-container mava-logo-cont">
            <img src="/images/portfolio/mava/mava-logo.svg" alt="mava-logo">
        </div>

        <div class="info-block-container">
            <div class="gl-container">
                <div class="info-left">
                    <h3 class="info-left-title">Создание УТП и подкрепляющих текстов</h3>
                </div>
                <div class="info-right">
                    <p>
                        Прежде всего, мы проанализировали названия существующих
                        компаний-конкурентов. Поскольку основным направлением
                        деятельности компании является продажа оборудования для
                        ухода за газонами и парками, мы решили сделать акцент на
                        названии, ассоциирующемся с полями и долинами.
                    </p>
                    <p class="for-read-more">
                        Прежде всего, мы проанализировали названия существующих
                        компаний-конкурентов. Поскольку основным направлением
                        деятельности компании является продажа оборудования для
                        ухода за газонами и парками, мы решили сделать акцент на
                        названии, ассоциирующемся с полями и долинами.
                    </p>
                    <span class="read-more-btn">Читать дальше</span>
                </div>
            </div>
        </div>

        <div class="info-block-container">
            <div class="gl-container">
                <div class="info-left">
                    <h3 class="info-left-title">Создание УТП и подкрепляющих текстов</h3>
                </div>
                <div class="info-right">
                    <p>
                        Прежде всего, мы проанализировали названия существующих
                        компаний-конкурентов. Поскольку основным направлением
                        деятельности компании является продажа оборудования для
                        ухода за газонами и парками, мы решили сделать акцент на
                        названии, ассоциирующемся с полями и долинами.
                    </p>
                    <p class="for-read-more">
                        Прежде всего, мы проанализировали названия существующих
                        компаний-конкурентов. Поскольку основным направлением
                        деятельности компании является продажа оборудования для
                        ухода за газонами и парками, мы решили сделать акцент на
                        названии, ассоциирующемся с полями и долинами.
                    </p>
                    <span class="read-more-btn">Читать дальше</span>
                </div>
            </div>
        </div>

        <div class="info-block-container">
            <div class="gl-container">
                <div class="info-left">
                    <h3 class="info-left-title">Подготовка раскроя(крой упаковки)</h3>
                </div>
                <div class="info-right">
                    <p>
                        Прежде всего, мы проанализировали названия существующих
                        компаний-конкурентов. Поскольку основным направлением
                        деятельности компании является продажа оборудования для
                        ухода за газонами и парками, мы решили сделать акцент на
                        названии, ассоциирующемся с полями и долинами.
                    </p>
                    <p class="for-read-more">
                        Прежде всего, мы проанализировали названия существующих
                        компаний-конкурентов. Поскольку основным направлением
                        деятельности компании является продажа оборудования для
                        ухода за газонами и парками, мы решили сделать акцент на
                        названии, ассоциирующемся с полями и долинами.
                    </p>
                    <span class="read-more-btn">Читать дальше</span>
                </div>
            </div>
        </div>

        <div class="two-images-container mava-packages-cont-2">
            <div class="image-left">
                <img src="/images/portfolio/mava/image-e-1.jpg" alt="mava photo">
            </div>
            <div class="image-right">
                <img src="/images/portfolio/mava/image-e-2.jpg" alt="mava photo">
            </div>
        </div>

        <div class="info-block-container">
            <div class="gl-container">
                <div class="info-left">
                    <h3 class="info-left-title">Добпечатная подготовка упаковки для глубойкой печати.</h3>
                </div>
                <div class="info-right">
                    <p>
                        Прежде всего, мы проанализировали названия существующих
                        компаний-конкурентов. Поскольку основным направлением
                        деятельности компании является продажа оборудования для
                        ухода за газонами и парками, мы решили сделать акцент на
                        названии, ассоциирующемся с полями и долинами.
                    </p>
                    <p class="for-read-more">
                        Прежде всего, мы проанализировали названия существующих
                        компаний-конкурентов. Поскольку основным направлением
                        деятельности компании является продажа оборудования для
                        ухода за газонами и парками, мы решили сделать акцент на
                        названии, ассоциирующемся с полями и долинами.
                    </p>
                    <span class="read-more-btn">Читать дальше</span>
                </div>
            </div>
        </div>

        <div class="info-block-container">
            <div class="gl-container">
                <div class="info-left">
                    <h3 class="info-left-title">Авторский надзор за изготовлением (должен быть но не было)</h3>
                </div>
                <div class="info-right">
                    <p>
                        Прежде всего, мы проанализировали названия существующих
                        компаний-конкурентов. Поскольку основным направлением
                        деятельности компании является продажа оборудования для
                        ухода за газонами и парками, мы решили сделать акцент на
                        названии, ассоциирующемся с полями и долинами.
                    </p>
                    <p class="for-read-more">
                        Прежде всего, мы проанализировали названия существующих
                        компаний-конкурентов. Поскольку основным направлением
                        деятельности компании является продажа оборудования для
                        ухода за газонами и парками, мы решили сделать акцент на
                        названии, ассоциирующемся с полями и долинами.
                    </p>
                    <span class="read-more-btn">Читать дальше</span>
                </div>
            </div>
        </div>

        <div class="info-block-container">
            <div class="gl-container">
                <div class="info-left">
                    <h3 class="info-left-title">Как выглядит в жизни </h3>
                </div>
                <div class="info-right">
                    <p>
                        Прежде всего, мы проанализировали названия существующих
                        компаний-конкурентов. Поскольку основным направлением
                        деятельности компании является продажа оборудования для
                        ухода за газонами и парками, мы решили сделать акцент на
                        названии, ассоциирующемся с полями и долинами.
                    </p>
                    <p class="for-read-more">
                        Прежде всего, мы проанализировали названия существующих
                        компаний-конкурентов. Поскольку основным направлением
                        деятельности компании является продажа оборудования для
                        ухода за газонами и парками, мы решили сделать акцент на
                        названии, ассоциирующемся с полями и долинами.
                    </p>
                    <span class="read-more-btn">Читать дальше</span>
                </div>
            </div>
        </div>

        <div class="two-images-container mava-packages-cont-3">
            <div class="image-left">
                <img src="/images/portfolio/mava/image-photo-1.jpg" alt="mava photo">
            </div>
            <div class="image-right">
                <img src="/images/portfolio/mava/image-photo-2.jpg" alt="mava photo">
            </div>
        </div>
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
    <script src="/js/portfolio/portfolio-mava.js"></script>

@stop
<!-- end of subscribe_form -->
