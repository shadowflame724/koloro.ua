@extends('layouts.client')

@section('page-title', $portfolio->meta->{'title' . $langSuf} )

@section('page-meta')
    <meta name="description" content="{{ $portfolio->meta->{'description' . $langSuf} }}">
    <meta name="keywords" content="{{ $portfolio->meta->{'keywords' . $langSuf} }}">
    <meta property=og:image content="{{ url('images/portfolio') . '/' .$portfolio->image->link }}"/>

@stop

@section('page-style')
    <link rel="stylesheet" href="/css/portfolio-main.css">
@stop


@section('page-content')

    <!--PRELOADER!!! -->
    <div id="preloader"></div>

    @include('layouts.whiteheader')

<section id="russkiy-element">
    <div class="bg-container top-container" style="background-image: url('/images/portfolio/russkiy-element/russkiy-element-4.jpg')">
        <div class="dark-mask"></div>
        <div class="gl-container title-container">
            <h1 class="top-title">
                Русский Элемент
            </h1>
            <h2 class="top-title-small">
                «Традиционный, искусно выполненный
                и чистый продукт без излишеств»
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
                    Одним из лучших производителей качественной водочной продукции в Белгородской
                    области является <span>ликероводочный завод «Люкс».</span> Такое звание завод получил в
                    первую очередь благодаря  высокому качеству продукции изготавливаемой только
                    из спирта класса «Люкс» и растительного сырья. Не так давно ЛВЗ «Люкс» <span>решил
                    пополнить свой портфель продукции и выпустить новую торговую марку — водку «Русский элемент».</span>
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
                    Нашим вкладом в появление и развитие нового бренда стало <span>полноценное
                    создание торговой марки, от начала – и до успеха.</span> То есть, от концепции
                    позиционирования товара на рынке — до разработки и печати таких элементов
                    фирменного стиля, как оригинальный узорчатый колпак, этикетка и сопутствующие
                    продукции <span>рекламные POS-материалы.</span>
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
                <h3 class="info-left-title">Анализ ситуации на рынке. Составление портрета потребителя</h3>
            </div>
            <div class="info-right">
                <p>
                    Прежде чем, приступить к реализации проекта по
                    <a class="gl-link" href="https://koloro.ua/dizajn-vodki.html" target="_blank">
                        дизайну водки
                    </a>, было проведено
                    <span>маркетинговое исследование с целью изучить предпочтения белгородских потребителей.</span>
                    По результатам исследования оказалось, что для <span>отечественного потребителя нет
                    ничего приятнее</span>для души и роднее, чем <span>«истинно русская водка».</span>Водка – русский
                    напиток, и он должен оставаться таким во всем, в том числе в позиционировании
                    и дизайне. Кроме того,
                    <a class="gl-link" href="https://koloro.ua/nejming.html" target="_blank">
                        название торговой марки
                    </a> еще раз подчеркивает эту концепцию.
                </p>
            </div>
        </div>
    </div>

    <div class="info-block-container">
        <div class="gl-container">
            <div class="info-left">
                <h3 class="info-left-title">Этапы разработки бренда. Ценовой сегмент - Эконом</h3>
            </div>
            <div class="info-right">
                <p>
                    Так как новый водочный бренд планировалось запустить для потребителей
                    сегмента Эконом, то создание торговой марки и ее дизайна проводилось с минимальными затратами:
                </p>
                <ol>
                    <li>
                        <span>Бутылка была подобрана из свободного ассортимента</span> стекольного завода.
                        Следовательно, нам не потребовалось индивидуальное изготовление формкомплекта,
                        а это позволило существенно сэкономить.
                    </li>
                    <li>
                        <span>Универсальный колпак</span> на всю линейку наименований также сократил стоимость водки,
                        а значит и количество ее остатков на складе!
                    </li>
                    <li>
                        <span>Дизайн этикетки на бутылки</span> был выполнен с использованием элементов старорусской
                        орнаментальной вязи, безусловно украшающей любой российский продукт.
                    </li>
                </ol>
            </div>
        </div>
    </div>

    <div class="gl-container">
        <h2 class="h2-title">Дизайн нового водочного бренда "Русский элемент"</h2>
    </div>
    <div class="image-container">
        <img src="/images/portfolio/russkiy-element/russkiy-element-1.jpg" alt="russkiy-element-picture">
    </div>

    <div class="info-block-container">
        <div class="gl-container">
            <div class="info-left">
                <h3 class="info-left-title">&nbsp;</h3>
            </div>
            <div class="info-right">
                <p>
                    <span>Уникальная технология печати</span>, реализованная с минимальными затратами, <span>озволила
                    создать фактурную и эмоционально наполненную этикетку</span>, формирующую позитивный
                    образ бренда в воображении целевой аудитории.
                </p>
            </div>
        </div>
    </div>

    <div class="info-block-container">
        <div class="gl-container">
            <div class="info-left">
                <h3 class="info-left-title">Фирменный стиль</h3>
            </div>
            <div class="info-right">
                <p>
                    <a class="gl-link" href="https://koloro.ua/pos-materialy.html" target="_blank">
                        POS-материалы
                    </a>, изготовление которых также доверили нам, удачно довершили
                    создание торговой марки. Напомним, аббревиатура «POS» определяет рекламную
                    полиграфию для размещения в point of sales — непосредственных точках продаж
                    (воблеры, стопперы, ценники, шелфтокеры и т.п.).
                </p>
            </div>
        </div>
    </div>

    <div class="gl-container">
        <h2 class="h2-title">POS-материалы для ТМ "Русский элемент"</h2>
    </div>
    <div class="image-container">
        <img src="/images/portfolio/russkiy-element/russkiy-element-2.jpg" alt="russkiy-element-picture">
    </div>
    <div class="image-container">
        <img src="/images/portfolio/russkiy-element/russkiy-element-3.jpg" alt="russkiy-element-picture">
    </div>

    <div class="info-block-container">
        <div class="gl-container">
            <div class="info-left">
                <h3 class="info-left-title">&nbsp;</h3>
            </div>
            <div class="info-right">
                <p>
                    В итоге, перед покупателем предстал <span>традиционный, искусно выполненный,
                    чистый и красивый продукт без излишеств.</span> Так, старорусский орнамент,
                    вписанный в
                    <a class="gl-link" href="https://koloro.ua/dizajn-jetiketok.html" target="_blank">
                        дизайн этикетки на бутылку
                    </a> и колпак, а также эмоционально
                    направленная технология печати наклейки — стали победоносной смесью для
                    успеха водки в сегменте эконом.
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
                    Появившись на алкогольном рынке, новый бренд — «Русский Элемент»,
                    за первые месяцы по количеству продаж обогнал все местные торговые
                    марки в сегменте эконом. А <span>«русские» мотивы использованные в дизайне
                    получили немалый положительный отклик от целевой аудитории.</span>
                </p>
            </div>
        </div>
    </div>

    <div class="gl-container">
        <h2 class="h2-title">Водка "Русский Элемент"</h2>
    </div>
    <div class="image-container">
        <img src="/images/portfolio/russkiy-element/russkiy-element-4.jpg" alt="russkiy-element-picture">
    </div>

    <div class="info-block-container">
        <div class="gl-container">
            <div class="info-left">
                <h3 class="info-left-title">Резюме</h3>
            </div>
            <div class="info-right">
                <p>
                    Использование в концепции позиционирования водочного бренда "русских" мотивов,
                    всегда воспринимается рынком на "ура", несмотря на огромное количество уже
                    существующих интерпретаций. Бренд, любимый народом — все равно что "царский"
                    бренд с "короной" на голове.
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



    <!-- include own JavaScript -->
    <script src="/js/portfolio-main.js"></script>

@stop