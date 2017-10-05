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
    <link rel="stylesheet" href="/css/led-rodnik.css">

@stop


@section('page-content')

    <!--PRELOADER!!! -->
    <div id="preloader"></div>

    @include('layouts.whiteheader')

<section id="absolute-standard">
    <div class="bg-container top-container" style="background-image: url('/files/images/portfolio/absolute-standard/absolute-standard-3.jpg')">
        <div class="dark-mask"></div>
        <div class="gl-container title-container">
            <h1 class="top-title">
                Absolute Standard
            </h1>
            <h2 class="top-title-small">
                «Абсолютное качество. Абсолютный
                стандарт. Абсолютная водка»
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
                    Торговая марка «Absolute Standard» обязана своим появлением на свет крупнейшему
                    производителю алкогольной продукции - предприятию «Абсолютный Стандарт».
                    <span>21 марта 2004 года компания выпустила первую партию водки, сегодня «Абсолютный Стандарт»</span>
                    выпускает более 10 наименований водочной продукции. В процессе производства продукции
                    используется только спирт класса «Люкс» и вода из собственной артезианской скважины
                    в экологически чистой зоне Прикарпатья, проходящая 4 степени очистки.
                    <span>«Абсолютный Стандарт» — национальный украинский продукт</span>, пользующийся
                    спросом в десятках стран мира.
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
                    <a class="gl-link" href="https://koloro.ua/sozdanie-brenda.html" target="_blank">
                        Создание бренда
                    </a>
                    <span>«Absolute Standard»</span> проходило с учетом пожелания заказчика
                    получить <span>нестандартный и красивый продукт с продуманной до мелочей легендой
                    бренда и правильным позиционированием</span>. Ведь, несмотря на то, что водочная
                    продукция крайне распространена на алкогольном рынке, действительно уважаемые
                    бренды, выделяющиеся из общей массы предложения, запросто можно перечислить
                    на пальцах одной руки. Необходимо было создать новую водку для ценителей
                    истинно крепких напитков!
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
                <h3 class="info-left-title">Дизайн водки и позиционирование</h3>
            </div>
            <div class="info-right">
                <p>
                    Чтобы попасть в категорию лидеров на алкогольном рынке, продукту теперь мало
                    просто обладать высоким качеством. Ему нужна
                    <a class="gl-link" href="https://koloro.ua/dizajn-vodki.html" target="_blank">
                        продуманная разработка дизайна упаковки
                    </a>, которая бы четко заявляла о позиционировании бренда и сразу определяла
                    его лидирующие позиции в нужном сегменте.
                </p>
                <div class="for-read-more">
                    <p>
                        Необходимо было звучно заявить отличительные черты новой водки в бренд-дизайне.
                        <span>Ультра современность, уникальная геометрия бутылки, мягкие полутона, прозрачность,</span>
                        и в то же время, присутствие некой консервативности во взглядах на дизайн. Подобный
                        образ обязательно привлечет покупателя и пробудит в нем желание рассмотреть продукт
                        ближе. Отметим, что столь <span>необычный дизайн водки продиктовала особая технология ее
                        очистки — Total Fluid Control.</span>
                    </p>
                    <p>
                        Технология подала идею визуализировать метод очистки, объединив в бутылке
                        качества традиционности и инноваций. Так, рождение водки, полученной в ходе
                        флюидной фильтрации, отобразилось в плавном переходе <span>от красного и синего
                        свечения — к абсолютной чистоте и прозрачности верхней части бутылки.</span>
                    </p>
                </div>
                <span class="read-more-btn">Читать дальше</span>
            </div>
        </div>
    </div>

    <div class="gl-container">
        <h2 class="h2-title">Дизайн упаковки для водки Absolute Standard</h2>
    </div>
    <div class="image-container">
        <img src="/files/images/portfolio/absolute-standard/absolute-standard-1.jpg" alt="absolute-standard-picture">
    </div>

    <div class="info-block-container">
        <div class="gl-container">
            <div class="info-left">
                <h3 class="info-left-title">&nbsp;</h3>
            </div>
            <div class="info-right">
                <p>
                    Оригинальная разработка дизайна упаковки для водки высокой (silver)
                    и сверхвысокой (gold) фильтрации сполна отобразила выбранную идею,
                    а красивая <span>этикетка в стиле минимализм аккуратно завершила образ</span>,
                    не перетягивая на себя все внимание. Поэтому и бутылка, и этикетка, и
                    <a class="gl-link" href="https://koloro.ua/razrabotka-firmennogo-stilya.html" target="_blank">
                        фирменный стиль
                    </a> <span>водочного колпака с логотипом Absolute Standard смотрятся,
                    как единое целое — монолитный стандарт стиля и качества.</span>
                </p>
            </div>
        </div>
    </div>

    <div class="info-block-container">
        <div class="gl-container">
            <div class="info-left">
                <h3 class="info-left-title">Слоган</h3>
            </div>
            <div class="info-right">
                <p>
                    Исходя из этого, был разработан звучный
                    <a class="gl-link" href="https://koloro.ua/slogan-dlya-reklamy.html" target="_blank">
                        слоган бренда
                    </a>— <span>«Абсолютное качество.
                    Абсолютный стандарт. Абсолютная водка».</span>
                </p>
            </div>
        </div>
    </div>

    <div class="info-block-container">
        <div class="gl-container">
            <div class="info-left">
                <h3 class="info-left-title">Результат</h3>
            </div>
            <div class="info-right">
                <p>
                    В ближайшее время водка «Absolute Standard» появиться в свободной продаже с новым
                    <a class="gl-link" href="https://koloro.ua/dizajn-jetiketok.html" target="_blank">
                        дизайном упаковки и этикетки
                    </a>. Обладая огромным потенциалом, она
                    имеет все шансы стать одним из <span>лидеров в сегменте премиум, завоевать признание
                    и любовь потребителей как «истинно качественного украинского продукта».</span>
                </p>
            </div>
        </div>
    </div>

    <div class="gl-container">
        <h2 class="h2-title">Новый водочный бренд — Absolute Standard</h2>
    </div>
    <div class="image-container">
        <img src="/files/images/portfolio/absolute-standard/absolute-standard-2.jpg" alt="absolute-standard-picture">
    </div>

    <div class="gl-container">
        <h2 class="h2-title">Дизайн бутылки водки "Абсолютный Стандарт"</h2>
    </div>
    <div class="image-container">
        <img src="/files/images/portfolio/absolute-standard/absolute-standard-3.jpg" alt="absolute-standard-picture">
    </div>

    <div class="gl-container">
        <h2 class="h2-title">Дизайн этикетки и колпака водки Absolute Standard</h2>
    </div>
    <div class="image-container">
        <img src="/files/images/portfolio/absolute-standard/absolute-standard-4.jpg" alt="absolute-standard-picture">
    </div>

    <div class="info-block-container">
        <div class="gl-container">
            <div class="info-left">
                <h3 class="info-left-title">Резюме</h3>
            </div>
            <div class="info-right">
                <p>
                    Для того чтобы занять лидирующие позиции на рынке,  а еще лучше завоевать
                    «царскую корону» среди брендов, продукту мало просто обладать высоким качеством.
                    Ему необходим грамотный дизайн упаковки, необычная подача и позиционирование,
                    которые и определят его лидерство на рынке. Именно такие бренды и создают наши специалисты.
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
    <script src="/js/viewportchecker.js"></script>

    <!-- OwlCarousel -->
    <script src="/js/owl.carousel.min.js"></script>
    <!--<script src="../js/owl.lazyload.js"></script>-->

    <!-- SmoothScroll -->
    <!--<script src="../js/SmoothScroll.js"></script>-->

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
