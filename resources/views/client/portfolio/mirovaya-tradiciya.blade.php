@extends('layouts.client')

@section('page-title', $portfolio->meta->{'title' . $langSuf} )

@section('page-meta')
    <meta name="description" content="{{ $portfolio->meta->{'description' . $langSuf} }}">
    <meta name="keywords" content="{{ $portfolio->meta->{'keywords' . $langSuf} }}">
    <meta property=og:image content="{{ url('images/portfolio') . '/' .$portfolio->image->link }}"/>

@stop

@section('page-style')

    <!-- OwlCarousel -->
    <link rel="stylesheet" href="/css/portfolio-main.css">

    <link rel="stylesheet" href="/css/portfolio/portfolio-mirovaya-tradicia.css">

@stop


@section('page-content')
    <div id="preloader"></div>

    @include('layouts.whiteheader')
    <!--PRELOADER!!! -->

    <section id="mirovaya-tradicia">
        <!--class="portfolio_block"-->
        <div class="image-container top-container">
            <div class="dark-mask top-mask"></div>
            <img src="/images/portfolio/mirovaya-tradiciya/logo.png" alt="photo-image" class="big-image logo-image">

            <div class="gl-container">
                <h1 class="top-title">Мировая традиция, <br> «Отборная рецептура и лучшие традиции со всего мира»</h1>
            </div>

            <img src="/images/portfolio/mirovaya-tradiciya/cloud-back-1.png" alt="photo-image"
                 class="cloud-back-1 cloud-back-1-animate">
            <img src="/images/portfolio/mirovaya-tradiciya/cloud-n1.png" alt="photo-image" class="cloud-N1">
            <img src="/images/portfolio/mirovaya-tradiciya/ballon.png" alt="photo-image" class="ballon-right">
        </div>

        <div class="company-aims">
            <div class="info-block-container info-history">
                <div class="gl-container">
                    <div class="info-left">
                        <h3 class="info-left-title">Предыстория</h3>
                    </div>
                    <div class="info-right">
                        <p>
                            Крупный производитель алкогольной отрасли России — ООО СК «Родник»,
                            производит немало крепкого алкоголя не только для большинства российских
                            регионов и продукцию на экспорт в такие страны как Армения, Казахстан, Грузия,
                            Латвия, Германия, Мексика и США. Кроме того, создает локальные водочные бренды
                            для г. Самары и Самарской области. Одной из новых водочных торговых марок от
                            ООО СК «Родник» стала водка «Мировая традиция». <br>
                        </p>
                        <p class="for-read-more">
                            Крупный производитель алкогольной отрасли России — ООО СК «Родник»,
                            производит немало крепкого алкоголя не только для большинства российских регионов и
                            продукцию
                        </p>
                        <span class="read-more-btn">Читать дальше</span>
                    </div>
                </div>
            </div>

            <div class="image-container plane-container">
                <!--plane-animate-->
                <img src="/images/portfolio/mirovaya-tradiciya/plane.png" alt="photo-image" class="big-image plane">
                <img src="/images/portfolio/mirovaya-tradiciya/cloud-n2.png" alt="photo-image" class="cloud-N2">
            </div>

            <div class="info-block-container info-aim">
                <div class="gl-container">
                    <div class="info-left">
                        <h3 class="info-left-title">Задача</h3>
                    </div>
                    <div class="info-right">
                        <p>
                            Проект предусматривал разработку серии водок «Мировая традиция» для любителей
                            попутешествовать
                            по бескрайним просторам России, европейским странам и загадочному восточному краю. Для
                            молодого
                            душой потребителя, с юношеским максимализмом и душой нараспашку. Необходимо было разработать
                            запоминающийся логотип, яркий дизайн этикетки и варианты укупорки бутылки.
                        </p>
                        <p class="for-read-more">
                            Проект предусматривал разработку серии водок «Мировая традиция» для любителей
                            попутешествовать
                            по бескрайним просторам России, европейским странам и загадочному восточному краю. Для
                            молодого
                            душой потребителя, с юношеским максимализмом и душой нараспашку. Необходимо было разработать
                            запоминающийся логотип, яркий дизайн этикетки и варианты укупорки бутылки.

                        </p>
                        <span class="read-more-btn">Читать дальше</span>
                    </div>
                </div>
            </div>

            <h2 class="h2-title header-white execution-header">Выполнение проекта</h2>

            <div class="info-block-container info-analysis">
                <div class="gl-container">
                    <div class="info-left">
                        <h3 class="info-left-title">Этап 1: Анализ рынка <br>водки Самары</h3>
                    </div>
                    <div class="info-right">
                        <p>
                            Первым этапом работы над проектом стало проведение маркетингового исследования рынка водки
                            в г. Самаре и Самарского региона, анализа потребителей и конкурентов. По результатам
                            исследований
                            были выбраны следующие идеи позиционирования бренда: традиции питья, традиции изготовления
                            водки,
                            и традиции путешествия. Для каждого концепта было предложено несколько вариантов
                            идентифицирующих
                            элементов (в конечном итоге – были выбраны чаша, колосья пшеницы и воздушный шар).
                        </p>
                        <p class="for-read-more">
                            Первым этапом работы над проектом стало проведение маркетингового исследования рынка водки
                            в г. Самаре и Самарского региона, анализа потребителей и конкурентов. По результатам
                            исследований
                            были выбраны следующие идеи позиционирования бренда: традиции питья, традиции изготовления
                            водки,
                            и традиции путешествия. Для каждого концепта было предложено несколько вариантов
                            идентифицирующих
                            элементов (в конечном итоге – были выбраны чаша, колосья пшеницы и воздушный шар).
                        </p>
                        <span class="read-more-btn">Читать дальше</span>
                    </div>
                </div>
            </div>

        </div>

        <div class="bg-container bottles"></div>

        <div class="concepts-info">
            <div class="gl-container">
                <h2>Другие варианты концептов</h2>
            </div>
        </div>

        <!--**************** SLIDER **********************-->

        <div class="owl-carousel owl-theme">
            <div class="item">
                <img src="/images/portfolio/mirovaya-tradiciya/bottle-chasha.png" alt="photo-image" class="img-left">
                <img src="/images/portfolio/mirovaya-tradiciya/bottle-chasha-2.png" alt="photo-image" class="img-right">

                <div class="gl-container">
                    <h2>Концепт «Чаша»</h2>

                    <div class="info-text">
                        <p>
                            Концепт «Чаша» был построен на традициях пития чисто русского алкогольного напитка – водки.
                            <span>Центральный элемент — это чаша (кубок, рюмка), из которой раньше было принято употреблять
                        водку (что также является традицией). </span>Кубок размещен в визуальном центре этикетки и
                            выглядит как кнопка, расположенная под большим пальцем, когда бутылка лежит в руке.
                            Исследование выявило, что элементы имеющие вид кнопки, сильно привлекают внимание
                            потребителя, провоцируя их взять продукт в руки и рассмотреть "кнопку" поближе.
                            Восприятие старорусской стилистики без труда подводит к общему восприятию упаковки,
                            как продукта, связанного с историей и традицией, рожденного на Руси. <br>
                            Концепт был построен на следующих ключевых словах: чаша, кубок, традиции, питие,
                            застолье, русское застолье, исконность, надежность.
                            Главные элементы дизайна: <br>
                            Кнопка. Должна обладать тактильными свойствами. <br>
                            Название Мировая Традиция. Уносит в прошлое своим харизматичным написанием. <br>
                            Полоска под кнопкой. <br>
                            Двухцветная заливка этикетки (сплошная и со старорусским узором). <br>
                            Цель - запомниться по комбинации цветов и фактуры. <br>
                            Вербальный посыл концепта: <br>
                            В лучших мировых традициях пития.
                            (Питие — устаревшее слово, актуально для Руси тех времен). <br>
                            Исконно-русский подход. (Подход к питию, к производству). <br>
                        </p>
                        <!--<p class="for-read-more">-->
                        <!--Первым этапом работы над проектом стало проведение маркетингового исследования рынка водки-->
                        <!--в г. Самаре и Самарского региона, анализа потребителей и конкурентов. По результатам исследований-->
                        <!--были выбраны следующие идеи позиционирования бренда: традиции питья, традиции изготовления водки,-->
                        <!--и традиции путешествия. Для каждого концепта было предложено несколько вариантов идентифицирующих-->
                        <!--элементов (в конечном итоге – были выбраны чаша, колосья пшеницы и воздушный шар).-->
                        <!--</p>-->
                        <!--<span class="read-more-btn">Читать дальше</span>-->
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="/images/portfolio/mirovaya-tradiciya/bottle-kolos.png" alt="photo-image" class="img-left">
                <img src="/images/portfolio/mirovaya-tradiciya/bottle-kolos-2.png" alt="photo-image" class="img-right">
                <div class="gl-container">
                    <h2>Концепт «Чаша»</h2>

                    <div class="info-text">
                        <p>
                            Концепт «Чаша» был построен на традициях пития чисто русского алкогольного напитка – водки.
                            <span>Центральный элемент — это чаша (кубок, рюмка), из которой раньше было принято употреблять
                        водку (что также является традицией).</span> Кубок размещен в визуальном центре этикетки и
                            выглядит как кнопка, расположенная под большим пальцем, когда бутылка лежит в руке.
                            Исследование выявило, что элементы имеющие вид кнопки, сильно привлекают внимание
                            потребителя, провоцируя их взять продукт в руки и рассмотреть "кнопку" поближе.
                            Восприятие старорусской стилистики без труда подводит к общему восприятию упаковки,
                            как продукта, связанного с историей и традицией, рожденного на Руси. <br>
                            Концепт был построен на следующих ключевых словах: чаша, кубок, традиции, питие,
                            застолье, русское застолье, исконность, надежность.
                            Главные элементы дизайна: <br>
                            Кнопка. Должна обладать тактильными свойствами. <br>
                            Название Мировая Традиция. Уносит в прошлое своим харизматичным написанием. <br>
                            Полоска под кнопкой. <br>
                            Двухцветная заливка этикетки (сплошная и со старорусским узором). <br>
                            Цель - запомниться по комбинации цветов и фактуры. <br>
                            Вербальный посыл концепта: <br>
                            В лучших мировых традициях пития.
                            (Питие — устаревшее слово, актуально для Руси тех времен). <br>
                            Исконно-русский подход. (Подход к питию, к производству). <br>
                        </p>
                        <!--<p class="for-read-more">-->
                        <!--Первым этапом работы над проектом стало проведение маркетингового исследования рынка водки-->
                        <!--в г. Самаре и Самарского региона, анализа потребителей и конкурентов. По результатам исследований-->
                        <!--были выбраны следующие идеи позиционирования бренда: традиции питья, традиции изготовления водки,-->
                        <!--и традиции путешествия. Для каждого концепта было предложено несколько вариантов идентифицирующих-->
                        <!--элементов (в конечном итоге – были выбраны чаша, колосья пшеницы и воздушный шар).-->
                        <!--</p>-->
                        <!--<span class="read-more-btn">Читать дальше</span>-->
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="/images/portfolio/mirovaya-tradiciya/bottle-shar.png" alt="photo-image" class="img-left">
                <img src="/images/portfolio/mirovaya-tradiciya/bottle-2.png" alt="photo-image" class="img-right">
                <div class="gl-container">
                    <h2>Концепт «Чаша»</h2>

                    <div class="info-text">
                        <p>
                            Концепт «Чаша» был построен на традициях пития чисто русского алкогольного напитка – водки.
                            <span>Центральный элемент — это чаша (кубок, рюмка), из которой раньше было принято употреблять
                        водку (что также является традицией).</span> Кубок размещен в визуальном центре этикетки и
                            выглядит как кнопка, расположенная под большим пальцем, когда бутылка лежит в руке.
                            Исследование выявило, что элементы имеющие вид кнопки, сильно привлекают внимание
                            потребителя, провоцируя их взять продукт в руки и рассмотреть "кнопку" поближе.
                            Восприятие старорусской стилистики без труда подводит к общему восприятию упаковки,
                            как продукта, связанного с историей и традицией, рожденного на Руси. <br>
                            Концепт был построен на следующих ключевых словах: чаша, кубок, традиции, питие,
                            застолье, русское застолье, исконность, надежность.
                            Главные элементы дизайна: <br>
                            Кнопка. Должна обладать тактильными свойствами. <br>
                            Название Мировая Традиция. Уносит в прошлое своим харизматичным написанием. <br>
                            Полоска под кнопкой. <br>
                            Двухцветная заливка этикетки (сплошная и со старорусским узором). <br>
                            Цель - запомниться по комбинации цветов и фактуры. <br>
                            Вербальный посыл концепта: <br>
                            В лучших мировых традициях пития.
                            (Питие — устаревшее слово, актуально для Руси тех времен). <br>
                            Исконно-русский подход. (Подход к питию, к производству). <br>
                        </p>
                        <!--<p class="for-read-more">-->
                        <!--Первым этапом работы над проектом стало проведение маркетингового исследования рынка водки-->
                        <!--в г. Самаре и Самарского региона, анализа потребителей и конкурентов. По результатам исследований-->
                        <!--были выбраны следующие идеи позиционирования бренда: традиции питья, традиции изготовления водки,-->
                        <!--и традиции путешествия. Для каждого концепта было предложено несколько вариантов идентифицирующих-->
                        <!--элементов (в конечном итоге – были выбраны чаша, колосья пшеницы и воздушный шар).-->
                        <!--</p>-->
                        <!--<span class="read-more-btn">Читать дальше</span>-->
                    </div>
                </div>
            </div>
        </div>

        <div class="summary-header">
            <div class="gl-container">
                <h2>Клиент долго думает... и наконец выбирает один из вариантов.</h2>
            </div>
        </div>

        <div class="bg-container bottles-2"></div>

        <div class="company-aims-2">
            <img src="/images/portfolio/mirovaya-tradiciya/cloud-n3.png" alt="photo-image" class="cloud-N3">
            <img src="/images/portfolio/mirovaya-tradiciya/cloud-back-2.png" alt="photo-image"
                 class="cloud-back-2 cloud-back-2-animate">

            <h2 class="h2-title header-white">Логотип</h2>

            <div class="image-container logo-container-2">
                <img src="/images/portfolio/mirovaya-tradiciya/logo-2.png" alt="photo-image" class="logo-2 logo-2-animate">
            </div>
        </div>

        <div class="lineage-container">
            <h2 class="h2-title header-white">Линейка</h2>

            <div class="gl-container">
                <div class="lineage-item">
                    <img src="/images/portfolio/mirovaya-tradiciya/evropa.png" alt="photo-image"
                         class="lineage-item-animate">
                </div>
                <div class="lineage-item">
                    <img src="/images/portfolio/mirovaya-tradiciya/otechestvo.png" alt="photo-image"
                         class="lineage-item-animate">
                </div>
                <div class="lineage-item">
                    <img src="/images/portfolio/mirovaya-tradiciya/vostok.png" alt="photo-image"
                         class="lineage-item-animate">
                </div>
            </div>

            <img src="/images/portfolio/mirovaya-tradiciya/cloud-back-3.png" alt="photo-image"
                 class="cloud-back-3 cloud-back-3-animate">

        </div>

        <div class="company-aims-3">
            <!--<div class="info-block-container info-average">
                <div class="gl-container">
                    <div class="info-left">
                        <h3 class="info-left-title">Концепт «Чаша»</h2>
                    </div>
                    <div class="info-right">
                        <p>
                            Концепт «Чаша» был построен на традициях пития чисто русского алкогольного напитка – водки.
                            Центральный элемент — это чаша (кубок, рюмка), из которой раньше было принято употреблять водку
                            (что также является традицией). Кубок размещен в визуальном центре этикетки и выглядит как кнопка,
                            расположенная под большим пальцем, когда бутылка лежит в руке. Исследование выявило,
                            что элементы имеющие вид кнопки, сильно привлекают внимание потребителя,
                            провоцируя их взять продукт в руки и рассмотреть "кнопку" поближе.
                            Восприятие старорусской стилистики без труда подводит к общему восприятию упаковки, как продукта,
                            связанного с историей и традицией, рожденного на Руси.
                        </p>
                        <p class="for-read-more">
                            Концепт был построен на следующих ключевых словах: чаша, кубок, традиции,  питие,  застолье,
                            русское застолье, исконность, надежность.
                            Главные элементы дизайна:
                            Кнопка.  Должна обладать тактильными свойствами.
                            Название Мировая Традиция. Уносит в прошлое своим харизматичным написанием.
                            Полоска под кнопкой.
                            Двухцветная заливка этикетки (сплошная и со старорусским узором). Цель -  запомниться по комбинации цветов и фактуры.
                            Вербальный посыл концепта:
                            В лучших мировых традициях пития.  (Питие  — устаревшее слово, актуально для Руси тех времен).
                            Исконно-русский подход. (Подход к питию, к производству).
                            Русский продукт.элементов (в конечном итоге – были выбраны чаша, колосья пшеницы и воздушный шар).
                        </p>
                        <span class="read-more-btn">Читать дальше</span>
                    </div>
                </div>
            </div>-->

            <div class="info-block-container info-legend">
                <div class="gl-container">
                    <div class="info-left">
                        <h3 class="info-left-title">Легенда</h3>
                    </div>
                    <div class="info-right">
                        <p>
                            Была разработана легенда бренда: «Испокон веков люди отправлялись в путешествия в
                            дальние страны в поисках приключений и новых вкусовых ощущений.
                            <span> Водка "Мировые Традиции" открывает завесу тайн, и дарит вам
                            завораживающе необычайные вкусовые качества водки».
                        </span>
                        </p>
                        <p class="for-read-more">
                            Была разработана легенда бренда: «Испокон веков люди отправлялись в путешествия в
                            дальние страны в поисках приключений и новых вкусовых ощущений. Водка "Мировые Традиции"
                            открывает завесу тайн, и дарит вам завораживающе необычайные вкусовые качества водки».
                        </p>
                        <span class="read-more-btn">Читать дальше</span>
                    </div>
                </div>
            </div>

            <div class="image-container parallax-container">
                <img src="/images/portfolio/mirovaya-tradiciya/birds.png" alt="photo-image" class="birds birds-animate">
                <img src="/images/portfolio/mirovaya-tradiciya/ballon-small.png" alt="photo-image" class="ballon-small">
                <img src="/images/portfolio/mirovaya-tradiciya/cloud-n4.png" alt="photo-image" class="cloud-N4">
            </div>

            <div class="info-block-container info-result">
                <div class="gl-container">
                    <div class="info-left">
                        <h3 class="info-left-title">Результат</h3>
                    </div>
                    <div class="info-right">
                        <p>
                            В результате получили оригинальный водочный бренд, выгодно выделяющийся на полке.
                            Такой необычный и самобытный продукт быстро получил отклик целевой аудитории и получил
                            признание потребителя, что
                            <span> подтверждают высокие уровни продаж и растущая популярность бренда. </span>
                        </p>
                        <p class="for-read-more">
                            В результате получили оригинальный водочный бренд, выгодно выделяющийся на полке.
                            Такой необычный и самобытный продукт быстро получил отклик целевой аудитории и получил
                            признание потребителя, что подтверждают высокие уровни продаж и растущая популярность
                            бренда.
                            Концепт, выбранный Заказчиком
                        </p>
                        <span class="read-more-btn">Читать дальше</span>
                    </div>
                </div>

                <div class="image-container">
                    <img src="/images/portfolio/mirovaya-tradiciya/cloud-n5.png" alt="photo-image" class="cloud-N5">
                </div>
            </div>

            <div class="info-block-container info-cv">
                <div class="gl-container">
                    <div class="info-left">
                        <h3 class="info-left-title">Резюме</h3>
                    </div>
                    <div class="info-right">
                        <p>
                            Что отличает бренд, заполучивший «царскую корону», от других продуктов,
                            представленных на рынке? Любовь «народа».
                            <span>
                            Для того, чтобы ваш бренд был признан и любим целевой аудиторией,
                            он должен отражать в себе главные ценности и предпочтения потребителей.
                        </span>
                        </p>
                        <p class="for-read-more">
                            В результате получили оригинальный водочный бренд, выгодно выделяющийся на полке.
                            Такой необычный и самобытный продукт быстро получил отклик целевой аудитории и получил
                            признание потребителя, что подтверждают высокие уровни продаж и растущая популярность
                            бренда.
                            Концепт, выбранный Заказчиком
                        </p>
                        <span class="read-more-btn">Читать дальше</span>
                    </div>
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

    <!-- include own JavaScript -->
    <script src="/js/portfolio-main.js"></script>
    <script src="/js/portfolio/portfolio-mirovaya-tradicia.js"></script>
@stop

