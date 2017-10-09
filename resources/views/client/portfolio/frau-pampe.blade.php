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
    <link rel="stylesheet" href="/css/portfolio/portfolio-frau-pampe.css">
@stop


@section('page-content')



<!--PRELOADER!!! -->
<div id="preloader"></div>

@include('layouts.whiteheader')

<section id="frau-pampe">
    <!--class="portfolio_block"-->

    <div class="image-container top-container">
        <img src="/images/portfolio/frau-pampe/coc-9.png" alt="photo-image" class="cereals-1">
        <img src="/images/portfolio/frau-pampe/coc-1.png" alt="photo-image" class="cereals-2">
        <img src="/images/portfolio/frau-pampe/coc-2.png" alt="photo-image" class="cereals-3">

        <div class="container title-container">
            <h1 class="top-title">Frau Pampe</h1>
            <h2 class="top-title-small">Новый бренд популярной линейки каш быстрого приготовления</h2>
        </div>

        <div class="boxes-imgs-container owl-carousel">
            <div class="item box-item">
                <img src="/images/portfolio/frau-pampe/white-box1.png" alt="photo-image">
            </div>
            <div class="item box-item">
                <img src="/images/portfolio/frau-pampe/white-box2.png" alt="photo-image">
            </div>
            <div class="item box-item">
                <img src="/images/portfolio/frau-pampe/white-box3.png" alt="photo-image">
            </div>
            <div class="item box-item">
                <img src="/images/portfolio/frau-pampe/white-box4.png" alt="photo-image">
            </div>
            <div class="item box-item">
                <img src="/images/portfolio/frau-pampe/white-box5.png" alt="photo-image">
            </div>
            <div class="item box-item">
                <img src="/images/portfolio/frau-pampe/white-box6.png" alt="photo-image">
            </div>
        </div>

    </div>

    <div class="company-aims">
        <img src="/images/portfolio/frau-pampe/coc-7.png" alt="photo-image" class="cereals-4">
        <img src="/images/portfolio/frau-pampe/coc-9.png" alt="photo-image" class="cereals-5">

        <img src="/images/portfolio/frau-pampe/coc-1.png" alt="photo-image" class="cereals-6">
        <img src="/images/portfolio/frau-pampe/coc-2.png" alt="photo-image" class="cereals-7">
        <img src="/images/portfolio/frau-pampe/coc-4.png" alt="photo-image" class="cereals-8">
        <img src="/images/portfolio/frau-pampe/cherry-89.png" alt="photo-image" class="chery-1">
        <img src="/images/portfolio/frau-pampe/coc-3.png" alt="photo-image" class="cereals-9">

        <div class="info-block-container info-history">
            <div class="gl-container">
                <div class="info-left">
                    <h3 class="info-left-title">Предыстория</h3>
                </div>
                <div class="info-right">
                    <p>
                        ТМ Добродия продолжительное время выпускает линию каш быстрого приготовления.
                        До ребрендинга дизайн упаковки выглядел так: <br>
                    </p>
                    <p class="for-read-more">
                        ТМ Добродия продолжительное время выпускает линию каш быстрого приготовления.
                        До ребрендинга дизайн упаковки выглядел так:
                    </p>
                    <span class="read-more-btn">Читать дальше</span>
                </div>
            </div>
        </div>
        <div class="info-block-container info-aim">
            <div class="gl-container">
                <div class="info-left">
                    <h3 class="info-left-title">Задача</h3>
                </div>
                <div class="info-right">
                    <p>
                        Создание нового бренда. <br>
                        Разработка названия ТМ.  <br>
                        Создание логотипа.  <br>
                        Дизайн упаковки.  <br>
                        Уникальное позиционирование.  <br>
                        УТП (Уникальное Торговое Предложение).  <br>
                    </p>
                    <p class="for-read-more">
                        Создание нового бренда. <br>
                        Разработка названия ТМ.  <br>
                        Создание логотипа.  <br>
                        Дизайн упаковки.  <br>
                        Уникальное позиционирование.  <br>
                        УТП (Уникальное Торговое Предложение).  <br>
                    </p>
                    <span class="read-more-btn">Читать дальше</span>
                </div>
            </div>
        </div>
    </div>

    <div class="company-aims-2">
        <img src="/images/portfolio/frau-pampe/coc-6.png" alt="photo-image" class="cereals-10">
        <img src="/images/portfolio/frau-pampe/abrikos.png" alt="photo-image" class="abrikos">
        <img src="/images/portfolio/frau-pampe/coc-5.png" alt="photo-image" class="cereals-11">
        <img src="/images/portfolio/frau-pampe/metr.png" alt="photo-image" class="metr">

        <img src="/images/portfolio/frau-pampe/box-lezhachiy.png" alt="photo-image" class="box-horizontal">

        <img src="/images/portfolio/frau-pampe/coc-3.png" alt="photo-image" class="cereals-12">

        <div class="info-block-container info-solution">
            <div class="gl-container">
                <div class="info-left">
                    <h3 class="info-left-title">Описание компании <br> Добродия Фудз</h3>
                </div>
                <div class="info-right">
                    <p>
                        ТМ Добродия предоставляет широкий ассортимент нефасованной продукции овсяных хлопьев,
                        смесей злаковых культур, а также мюсли и крупы. Сегодня компания Добродия Фудз выпускает
                        более 50 видов и 150 наименований продукции по всей Украине. <br>
                        Из фасованных продуктов компания выпускает под ТМ Добродия следующую линейку наименований: <br>
                        Супер Геркулес. <br>
                        Супер Геркулес с овсяными отрубями. <br>
                    </p>
                    <p class="for-read-more">
                        ТМ Добродия предоставляет широкий ассортимент нефасованной продукции овсяных хлопьев,
                        смесей злаковых культур, а также мюсли и крупы. Сегодня компания Добродия Фудз выпускает
                        более 50 видов и 150 наименований продукции по всей Украине. <br>
                        Из фасованных продуктов компания выпускает под ТМ Добродия следующую линейку наименований:
                    </p>
                    <span class="read-more-btn">Читать дальше</span>
                </div>
            </div>
        </div>

        <div class="info-block-container info-analysis">
            <div class="gl-container">
                <div class="info-left">
                    <h3 class="info-left-title">Анализ существующего бренда</h3>
                </div>
                <div class="info-right">
                    <p>
                        Отсутствие запоминающегося образа бренда (позиционирование). <br>
                        Неуникальное название (большое количество брендов построено вокруг корня ДОБРО). <br>
                        Отсутствие УТП. <br>
                    </p>
                    <p class="for-read-more">
                        Отсутствие запоминающегося образа бренда (позиционирование). <br>
                        Неуникальное название (большое количество брендов построено вокруг корня ДОБРО). <br>
                        Отсутствие УТП.
                    </p>
                    <span class="read-more-btn">Читать дальше</span>
                </div>
            </div>
        </div>

        <div class="graphity-image-container">
            <div class="graphity-image">
                <img src="/images/portfolio/frau-pampe/featured-4-7.png" alt="photo-image" class="paper-graphity">
                <img src="/images/portfolio/frau-pampe/featured-4-1.png" alt="photo-image" class="paper-1">
                <img src="/images/portfolio/frau-pampe/featured-4-2.png" alt="photo-image" class="paper-2">
                <img src="/images/portfolio/frau-pampe/featured-4-6.png" alt="photo-image" class="pencil-1">
                <img src="/images/portfolio/frau-pampe/featured-4-3.png" alt="photo-image" class="pencil-2">
                <img src="/images/portfolio/frau-pampe/featured-4-4.png" alt="photo-image" class="elastic">
                <img src="/images/portfolio/frau-pampe/featured-4-5.png" alt="photo-image" class="apple">
                <img src="/images/portfolio/frau-pampe/pomada.png" alt="photo-image" class="pomade">
            </div>
        </div>
    </div>

    <div class="company-aims-3">

        <img src="/images/portfolio/frau-pampe/coc-7.png" alt="photo-image" class="cereals-13">
        <img src="/images/portfolio/frau-pampe/coc-9.png" alt="photo-image" class="cereals-14">
        <img src="/images/portfolio/frau-pampe/coc-5.png" alt="photo-image" class="cereals-15">

        <img src="/images/portfolio/frau-pampe/coc-2.png" alt="photo-image" class="cereals-16">
        <img src="/images/portfolio/frau-pampe/coc-1.png" alt="photo-image" class="cereals-17">
        <img src="/images/portfolio/frau-pampe/coc-4.png" alt="photo-image" class="cereals-18">

        <div class="info-block-container info-prices">
            <div class="gl-container">
                <div class="info-left">
                    <h3 class="info-left-title">Ценовая категория продукта</h3>
                </div>
                <div class="info-right">
                    <p>
                        среднеценовой  плюс сегмент (выше среднего).
                    </p>
                </div>
            </div>
        </div>

        <div class="info-block-container info-market">
            <div class="gl-container">
                <div class="info-left">
                    <h3 class="info-left-title">Рынок сбыта</h3>
                </div>
                <div class="info-right">
                    <p>
                        вся Украина.
                    </p>
                </div>
            </div>
        </div>

        <div class="info-block-container info-auditory">
            <div class="gl-container">
                <div class="info-left">
                    <h3 class="info-left-title">Целевая аудитория</h3>
                </div>
                <div class="info-right">
                    <p>
                        массовый потребитель, ядро - женщины в возрасте 30-45 лет.  Ведут активный образ жизни.
                    </p>
                </div>
            </div>
        </div>

        <div class="info-block-container info-execution">
            <div class="gl-container">
                <div class="info-left">
                    <h3 class="info-left-title">Выполнение проекта</h3>
                </div>
                <div class="info-right">
                    <p>
                        Работа над проектом стартовала с маркетингового исследования рынка хлопьев быстрого приготовления.
                        Основной вывод исследования, что 90% конкурентных торговых марок используют аппетитные изображения готового продукта, как центральный элемент дизайна упаковки.
                        Исходя из необходимости отстроиться от конкурентов, было принято решение искать позиционирование в эмоциональном образе, а не в аппетитной упаковке.
                        Заказчику было предоставлено на рассмотрение 3 разных варианта концепта. <br>
                    </p>
                    <p class="for-read-more">
                        Работа над проектом стартовала с маркетингового исследования рынка хлопьев быстрого приготовления.
                        Основной вывод исследования, что 90% конкурентных торговых марок используют аппетитные изображения готового продукта, как центральный элемент дизайна упаковки.
                        Исходя из необходимости отстроиться от конкурентов, было принято решение искать позиционирование в эмоциональном образе, а не в аппетитной упаковке.
                        Заказчику было предоставлено на рассмотрение 3 разных варианта концепта.
                    </p>
                    <span class="read-more-btn">Читать дальше</span>
                </div>
            </div>
        </div>
    </div>

    <div class="concepts-info">
        <img src="/images/portfolio/frau-pampe/coc-3.png" alt="photo-image" class="cereals-19">

        <div class="gl-container">
            <h2>Концепт: Девушка (Frau)</h2>
        </div>

        <div class="info-block-container info-key-words">
            <div class="image-container">
                <img src="/images/portfolio/frau-pampe/frau-box.png" alt="photo-image" class="frau-box">
            </div><!--
            --><div class="info-right">
                <h2>Ключевые слова:</h2>

                <p>
                    утонченность, леди, изящность,  эксперт питания, фитнес, красота, молодость,
                    Германия, натуральность. <br>
                    Модный «Флэт» стиль, который пока уникален среди конкурентов.
                    Теплые приглушенные цвета, контрастны по отношению друг к другу – смотрятся ярко, но уютно. <br>
                    На упаковке есть «псевдо» окошко, через которое видна сама каша. Каша будет нарисована,
                    поэтому всегда аппетитна. Демонстрация качественного продукта, повышает лояльность аудитории <br>
                    Мы предлагаем потребителям создать свой вкус и цвет каши, залив жидкостью на свое усмотрение.
                    Показав фото готового продукта на <br>
                </p>
                <p class="for-read-more">
                    утонченность, леди, изящность,  эксперт питания, фитнес, красота, молодость,
                    Германия, натуральность. <br>
                    Модный «Флэт» стиль, который пока уникален среди конкурентов.
                    Теплые приглушенные цвета, контрастны по отношению друг к другу – смотрятся ярко, но уютно. <br>
                    На упаковке есть «псевдо» окошко, через которое видна сама каша. Каша будет нарисована,
                    поэтому всегда аппетитна. Демонстрация качественного продукта, повышает лояльность аудитории <br>
                    Мы предлагаем потребителям создать свой вкус и цвет каши, залив жидкостью на свое усмотрение.
                    Показав фото готового продукта на
                </p>
                <span class="read-more-btn">Читать дальше</span>
            </div>

        </div>

        <h2 class="h2-title header-white">Логотип</h2>

        <div class="logo-container">
            <img src="/images/portfolio/frau-pampe/logo-frau.png" alt="photo-image" class="logo-frau">
        </div>

        <div class="info-block-container info-graphic">
            <div class="gl-container">
                <div class="info-left">
                    <h3 class="info-left-title">Инфографика:</h3>
                </div>
                <div class="info-right">
                    <p>
                        1.	Схематическое отображение фруктов во флэт стиле,  мгновенно сообщает о вкусовой начинке. <br>
                        2.	Есть время приготовления, 3 минуты – это классно, это быстро. <br>
                        3.	В интуитивно понятной форме потребителю предлагаются варианты, чем можно залить кашу. <br>
                        Иногда люди даже не задумываются, и не догадываются, что можно сделать из обычной каши на
                        воде, настоящий десерт – кашу на йогурте! <br>
                    </p>
                    <p class="for-read-more">
                        1.	Схематическое отображение фруктов во флэт стиле,  мгновенно сообщает о вкусовой начинке. <br>
                        2.	Есть время приготовления, 3 минуты – это классно, это быстро. <br>
                        3.	В интуитивно понятной форме потребителю предлагаются варианты, чем можно залить кашу. <br>
                        Иногда люди даже не задумываются, и не догадываются, что можно сделать из обычной каши на
                        воде, настоящий десерт – кашу на йогурте! <br>
                    </p>
                    <span class="read-more-btn">Читать дальше</span>
                </div>
            </div>
        </div>

        <div class="clock-container">
            <img src="/images/portfolio/frau-pampe/clock.png" alt="photo-image" class="clock">
        </div>

        <div class="food-icons-container">
            <div class="food-icon">
                <img src="/images/portfolio/frau-pampe/sik.png" alt="photo-image" class="food-title sik-title">
                <img src="/images/portfolio/frau-pampe/sik-ikonka.jpg" alt="photo-image" class="food-img">
            </div><!--
            --><div class="food-icon">
                <img src="/images/portfolio/frau-pampe/yogurt.png" alt="photo-image" class="food-title yogurt-title">
                <img src="/images/portfolio/frau-pampe/yogurt-ikonka.jpg" alt="photo-image" class="food-img">
            </div><!--
            --><div class="food-icon">
                <img src="/images/portfolio/frau-pampe/voda.png" alt="photo-image" class="food-title voda-title">
                <img src="/images/portfolio/frau-pampe/voda-ikonka.jpg" alt="photo-image" class="food-img">
            </div><!--
            --><div class="food-icon">
                <img src="/images/portfolio/frau-pampe/moloko.png" alt="photo-image" class="food-title moloko-title">
                <img src="/images/portfolio/frau-pampe/moloko-ikonka.jpg" alt="photo-image" class="food-img">
            </div>
        </div>

    </div>

    <div class="company-aims-4">

        <div class="food-items-container">
            <div class="food-item">
                <img src="/images/portfolio/frau-pampe/carrot.png" alt="photo-image" class="carrot">
            </div>
            <div class="food-item">
                <img src="/images/portfolio/frau-pampe/abrikos-2.png" alt="photo-image" class="abrikos-2">
            </div>
            <div class="food-item">
                <img src="/images/portfolio/frau-pampe/cherry.png" alt="photo-image" class="cherry">
            </div>
            <div class="food-item">
                <img src="/images/portfolio/frau-pampe/peach-2.png" alt="photo-image" class="peach-2">
            </div>
            <div class="food-item">
                <img src="/images/portfolio/frau-pampe/zerno.png" alt="photo-image" class="zerno">
            </div>
            <div class="food-item">
                <img src="/images/portfolio/frau-pampe/apple.png" alt="photo-image" class="apple">
            </div>

        </div>

        <div class="info-block-container info-identify">
            <div class="gl-container">
                <div class="info-left">
                    <h3 class="info-left-title">Идентифицирующий элемент </h3>
                </div>
                <div class="info-right">
                    <p>
                        Центральный элемент – это огромный круг, притягивающий внимание уникальной формой
                        и комбинацией цветов. Максимально подкрепляющий название FRAU, что обеспечит лучшую
                        запоминаемость. <br>
                        Двоение головы сделано цветами  флага германии. Что в комбинации с названием
                        на подсознательном уровне говорит о качестве, пользе, отличном вкусе. <br>
                        Девушка стройная  и красивая (волосы, кожа, губы). Она может быть как домохозяйкой,
                        так  и успешной бизнес леди. <br>
                    </p>
                    <p class="for-read-more">
                        Центральный элемент – это огромный круг, притягивающий внимание уникальной формой
                        и комбинацией цветов. Максимально подкрепляющий название FRAU, что обеспечит лучшую
                        запоминаемость. <br>
                        Двоение головы сделано цветами  флага германии. Что в комбинации с названием
                        на подсознательном уровне говорит о качестве, пользе, отличном вкусе. <br>
                        Девушка стройная  и красивая (волосы, кожа, губы). Она может быть как домохозяйкой,
                        так  и успешной бизнес леди. <br>
                    </p>
                    <span class="read-more-btn">Читать дальше</span>
                </div>
            </div>
        </div>

        <div class="logo-frau-big-container">
            <img src="/images/portfolio/frau-pampe/logo-frau-big.png" alt="photo-image" class="logo-frau-big">
            <img src="/images/portfolio/frau-pampe/peach.png" alt="photo-image" class="peach">
            <img src="/images/portfolio/frau-pampe/coc-8.png" alt="photo-image" class="cereals-19">
        </div>

        <div class="info-block-container info-utp">
            <div class="gl-container">
                <div class="info-left">
                    <h3 class="info-left-title">УТП</h3>
                </div>
                <div class="info-right">
                    <p>
                        1.	Додай, що подобається (инфографика).  Похожих предложений на рынке нет. <br>
                        2.	Значок «Зерно Украины» придает продукту надежности и повышает доверие,
                        демонстрирует высокое качество продукта отечественного производства. <br>
                        3.	Значок «Європейський стандарт» подкрепляет посыл о высоком качестве продукта. <br>
                    </p>
                    <p class="for-read-more">
                        1.	Додай, що подобається (инфографика).  Похожих предложений на рынке нет. <br>
                        2.	Значок «Зерно Украины» придает продукту надежности и повышает доверие,
                        демонстрирует высокое качество продукта отечественного производства. <br>
                        3.	Значок «Європейський стандарт» подкрепляет посыл о высоком качестве продукта. <br>
                    </p>
                    <span class="read-more-btn">Читать дальше</span>
                </div>
            </div>
        </div>

        <div class="image-container">
            <img src="/images/portfolio/frau-pampe/dodavay.png" alt="photo-image" class="dodavay">
        </div>
    </div>

    <div class="company-aims-5">

        <img src="/images/portfolio/frau-pampe/cherry-89.png" alt="photo-image" class="chery-2">
        <img src="/images/portfolio/frau-pampe/coc-9.png" alt="photo-image" class="cereals-20">
        <img src="/images/portfolio/frau-pampe/coc-6.png" alt="photo-image" class="cereals-21">

        <img src="/images/portfolio/frau-pampe/coc-6-small.png" alt="photo-image" class="cereals-22">
        <img src="/images/portfolio/frau-pampe/coc-4.png" alt="photo-image" class="cereals-23">
        <img src="/images/portfolio/frau-pampe/coc-3.png" alt="photo-image" class="cereals-24">

        <div class="info-block-container info-result">
            <div class="gl-container">
                <div class="info-left">
                    <h3 class="info-left-title">Результат</h3>
                </div>
                <div class="info-right">
                    <p>
                        В результате работы с ТМ Добродия был создан эффективный бренд линейки каш быстрого приготовления,
                        которая теперь имеет весомое преимущество в конкурентной борьбе на современном рынке. <br>
                    </p>
                    <p class="for-read-more">
                        В результате работы с ТМ Добродия был создан эффективный бренд линейки каш быстрого приготовления,
                        которая теперь имеет весомое преимущество в конкурентной борьбе на современном рынке.
                    </p>
                    <span class="read-more-btn">Читать дальше</span>
                </div>
            </div>
        </div>

        <div class="info-block-container info-cv">
            <div class="gl-container">
                <div class="info-left">
                    <h3 class="info-left-title">Резюме</h3>
                </div>
                <div class="info-right">
                    <p>
                        Брендинговое агенство KOLORO провело комплексную работу по созданию нового бренда.
                        Был разработан эмоциональный дизайн и эффективное УТП. <br>
                        Если Вам понравился проект, Вы можете обратиться к нам и команда профессионалов
                        создаст для Вас эффективный бренд с уникальным позиционированием. <br>
                        Понравилась работа? <br>
                    </p>
                    <p class="for-read-more">
                        Брендинговое агенство KOLORO провело комплексную работу по созданию нового бренда.
                        Был разработан эмоциональный дизайн и эффективное УТП. <br>
                        Если Вам понравился проект, Вы можете обратиться к нам и команда профессионалов
                        создаст для Вас эффективный бренд с уникальным позиционированием. <br>
                        Понравилась работа?
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

    <script src="/js/portfolio-main.js"></script>
    <!-- include own JavaScript -->
    <script src="/js/portfolio/portfolio-frau-pampe.js"></script>

@stop
<!-- end of subscribe_form -->
