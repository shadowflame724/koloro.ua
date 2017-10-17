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

    <link rel="stylesheet" href="/css/portfolio/portfolio-led-rodnik.css">
@stop


@section('page-content')

    <!--PRELOADER!!! -->
    <div id="preloader"></div>

@include('layouts.blackheader')

<section id="led-rodnik" class="portfolio-page unique-page">
    <div class="bg-container top-container">
        <div class="gl-container title-container">
            <h1 class="top-title">Ледяной родник</h1>
            <h2 class="top-title-small">
                «Леденящий вкус из сердца земли»
            </h2>
        </div>

        <img src="/images/portfolio/led-rodnik/bottle-slide.png" alt="photo-image" class="bottle-slide">
        <img src="/images/portfolio/led-rodnik/clouds-1.png" alt="photo-image" class="clouds-1">

    </div>

    <div class="company-aims">

        <div class="info-block-container info-history">
            <div class="gl-container">
                <div class="info-left">
                    <h3 class="info-left-title">Предыстория</h3>
                </div>
                <div class="info-right">
                    <p>
                        Своим появлением на свет торговая марка «Ледяной родник» обязана предприятию ООО СК «Родник»,
                        одному из крупнейших производителей алкогольной продукции европейского качества,
                        расположенному в г. Самара.  ООО «СК «Родник» осуществляет производство алкогольной продукции
                        не только для большинства регионов России, но и для экспорта в такие страны как Армения,
                        Грузия, Германия, Латвия, Казахстан, Израиль, Мексика, США. Не так давно руководством
                        предприятия было принято решение разработать локальный самарский водочный бренд.
                        Благодаря передовым технологиям, высококачественному сырью, современному оборудованию
                        и автоматизированной системе контроля за производственным процессом ООО «СК «Родник»
                        можно было с большой вероятностью рассчитывать на успех.ставленная на всей территории
                        Российской Федерации. Это совместный продукт двух компаний «Russian Spirits International»
                        и «Русские Оригинальные Напитки». <br>
                    </p>
                    <p class="for-read-more">
                        Russian Spirits International осуществляет непосредственное
                        производство спиртов для ЕС, которые впоследствии разливают по бутылкам в Литве. После чего
                        они экспортируются в Россию. Компания «Русские Оригинальные Напитки» осуществляет контроль
                        за качеством продукции на каждом этапе ее производства. Недавно компания приняла решение о
                        проведении редизайна существующей бутылки и дизайна этикетки «Деревенского самогона» для
                        чего был проведен конкурс среди дизайнерских компаний и брендинговых агентств.тура,
                        технологическая база, новейшее оборудование от ведущих мировых производителей позволяет
                        СК «Родник» выпускать высококачественную и перспективную продукцию. Новый бренд от СК «Родник»,
                        водка «Русалка» — это достояние вековых самарских традиций производства алкогольной
                        продукции.чеством и соответствовала принятым стандартам, однако она никогда не имела
                        идентификационных элементов, по которым ее мог бы узнавать потребитель. Продукция всегда
                        выпускалась в утвержденной государством упаковке и оставалась неприметной для целевой
                        аудитории. Однако быстро растущий уровень конкуренции привел руководство ХСЗ к решению о
                        создании торговой марки и проведению ребрендинга продукции.на экспорт в такие страны как
                        Армения, Казахстан, Грузия, Латвия, Германия, Мексика и США. Кроме того, создает
                        локальные водочные бренды для г. Самары и Самарской области. Одной из новых водочных
                        торговых марок от ООО СК «Родник» стала водка «Мировая традиция».<br>
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
                        Сжатые сроки и ограниченность бюджета заказчика создавали «экстремальные»
                        условия для разработки дизайна этикетки и колпака нового водочного бренда,
                        логотипа, создания концепции позиционирования и поиска идеи для УТП
                        (уникального торгового предложения). <br>
                    </p>
                    <p class="for-read-more">
                        Причем необходимо было создать «особенный» и самобытный бренд,
                        подчеркнув экологическую чистоту продукта.
                    </p>
                    <span class="read-more-btn">Читать дальше</span>
                </div>
            </div>
        </div>

        <div class="bg-wrapper">
            <div class="bg-container led-rodnik-1-container"></div>
        </div>

        <h2 class="h2-title header-black decision-header">Решение</h2>

        <div class="info-block-container info-design">
            <div class="gl-container">
                <div class="info-left">
                    <h3 class="info-left-title">Дизайн этикетки.<br>Укупорка бутылки</h3>
                </div>
                <div class="info-right">
                    <p>
                        Работа над проектом началась с создания дизайна этикетки и разработки вариантов укупорки бутылки.
                        Для данной торговой марки бутылка была подобрана из свободной продажи: стандартной круглой формы.
                        Такая форма — самая популярная в России. Дизайнерами было разработано несколько вариантов дизайна,
                        но, исходя из бюджета, для презентации заказчику был направлен один вариант дизайна этикетки и
                        колпака с двумя возможными вариантами логотипа. Название и УТП торговой марки – натуральный
                        деревенский продукт, эталон качества и самобытного вкуса.<br>
                    </p>
                    <p class="for-read-more">
                        Бренды изображения и идентификационные элементы,
                        которые непосредственно связаны с названием водки. Например: водка «Добрый медведь» — изображение
                        бурого медведя, водка «Перепелка» — изображение птицы перепелки, ТМ «Снежный барс» — иллюстрации
                        снежного барса и т.д. Кроме того, исследование показало, что 90% водочных брендов России
                        используют цилиндрическую форму. Геометрия штоф  также вызывает немалый интерес у потребителя.
                        еще раз подчеркивающее позиционирование товара  как экологически чистого продукта.
                    </p>
                    <span class="read-more-btn">Читать дальше</span>
                </div>
            </div>
        </div>

    </div>

    <div class="bg-container led-rodnik-2-container">
        <img src="/images/portfolio/led-rodnik/snow-1.png" alt="photo-image" class="snow-1">
        <img src="/images/portfolio/led-rodnik/snow-2.png" alt="photo-image" class="snow-2">
        <img src="/images/portfolio/led-rodnik/snow-3.png" alt="photo-image" class="snow-3">
        <img src="/images/portfolio/led-rodnik/snow-4.png" alt="photo-image" class="snow-4">

        <img src="/images/portfolio/led-rodnik/snow-glow-1.png" alt="photo-image" class="snow-glow-1">
        <img src="/images/portfolio/led-rodnik/snow-glow-2.png" alt="photo-image" class="snow-glow-2">
        <img src="/images/portfolio/led-rodnik/snow-glow-3.png" alt="photo-image" class="snow-glow-3">
    </div>

    <div class="info-block-container info-dev-logo">
        <div class="gl-container">
            <div class="info-left">
                <h3 class="info-left-title">Разработка логотипа - <br> Концепт «Кристалл»</h3>
            </div>
            <div class="info-right">
                <p>
                    Концепт основан на природности и экологичности торговой марки. Тема натуральности очень актуальна,
                    поскольку Самарский регион, где планировалась реализация товара, — это уникальное сочетание
                    природных богатств. «Ледяной родник» — это водка эконом сегмента. Тематика экологичности будет
                    актуальна еще много лет, а дизайн водки с такой тематикой должен обеспечить товару лидирующие
                    позиции в эконом сегменте.<br>
                </p>
                <p class="for-read-more">
                    Тема натуральности раскрывается стереотипным изображением дикой природы.
                    Картинка стилизована под дополнительную коммуникацию — тему кристальности, которая выделяет наш
                    продукт на фоне аналогичных. Кроме того, исследование показало, что 90% водочных брендов
                    России используют цилиндрическую форму. Геометрия штоф  также вызывает немалый интерес у
                    потребителя. Eще раз подчеркивающее позиционирование товара  как экологически чистого продукта.
                </p>
                <span class="read-more-btn">Читать дальше</span>
            </div>
        </div>
    </div>

    <div class="bg-container led-rodnik-3-container"></div>

    <div class="company-aims-2">

        <div class="info-block-container info-identify">
            <div class="gl-container">
                <div class="info-left">
                    <h3 class="info-left-title">Идентифицирующие<br>элементы</h3>
                </div>
                <div class="info-right">
                    <p>
                        Главные атрибуты бренда и идентифицирующие элементы: <br>
                        - Небо — верхняя часть изображения (голубоватый кристалл) — это двухсторонняя контрэтикетка
                        (сэндвич), которая просвечивается сквозь бутылку; <br>
                        - Главное изображение лицевой этикетки (горы, лес, вода), выполненное тактильным
                        (трафаретным объемным) лаком, что создает дополнительные тактильные ощущения. <br>
                    </p>
                    <p class="for-read-more">
                        Лицевая этикетка была распечатана на дифракционной (голографической) фольге.фикационные
                        элементы, которые непосредственно связаны с названием водки.<br>
                        Например: водка «Добрый медведь» — изображение бурого медведя, водка «Перепелка» —
                        изображение птицы перепелки, ТМ «Снежный барс» — иллюстрации снежного барса и т.д.<br>
                        Кроме того, исследование показало, что 90% водочных брендов России используют
                        цилиндрическую форму. Геометрия штоф  также вызывает немалый интерес у потребителя.
                        Eще раз подчеркивающее позиционирование товара  как экологически чистого продукта.
                    </p>
                    <span class="read-more-btn">Читать дальше</span>
                </div>
            </div>
        </div>

        <div class="image-container bottle-concept-1-cont">
            <div class="gl-container">
                <img src="/images/portfolio/led-rodnik/bottle.png" alt="photo-image" class="bottle-concept-1">
            </div>
        </div>

        <div class="info-block-container info-lineage">
            <div class="gl-container">
                <div class="info-left">
                    <h3 class="info-left-title">Линейка <br> наименований</h3>
                </div>
                <div class="info-right">
                    <p>
                        Далее была разработана следующая линейка наименований водки ТМ «Ледяной родник»:
                        дыханье гор — серая подложка; свежесть рек — синяя подложка; чистота росы — зеленая подложка.
                        Поэтичные наименования еще раз подкрепляют коммуникационный посыл торговой марки и служат
                        завершающим штрихом образа бренда. <br>
                    </p>
                    <p class="for-read-more">
                        Далее была разработана следующая линейка наименований водки ТМ «Ледяной родник»:
                        дыханье гор — серая подложка; свежесть рек — синяя подложка; чистота росы — зеленая подложка.
                        Поэтичные наименования еще раз подкрепляют коммуникационный посыл торговой марки и служат
                        завершающим штрихом образа бренда. <br>
                    </p>
                    <span class="read-more-btn">Читать дальше</span>
                </div>
            </div>
        </div>

    </div>

    <div class="two-images-container">
        <div class="image-left">
            <img src="/images/portfolio/led-rodnik/photo-1.jpg" alt="photo-image" class="photo-1">
        </div>
        <div class="image-right">
            <img src="/images/portfolio/led-rodnik/photo-2.jpg" alt="photo-image" class="photo-2">
        </div>
    </div>

    <div class="two-images-container">
        <div class="image-left">
            <img src="/images/portfolio/led-rodnik/photo-3.jpg" alt="photo-image" class="photo-3">
        </div>
        <div class="image-right">
            <img src="/images/portfolio/led-rodnik/photo-4.jpg" alt="photo-image" class="photo-4">
        </div>
    </div>

    <div class="company-aims-3">

        <div class="info-block-container info-result">
            <div class="gl-container">
                <div class="info-left">
                    <h3 class="info-left-title">Результат</h3>
                </div>
                <div class="info-right">
                    <p>
                        Торговая марка «Ледяной родник» уже находиться в свободной продаже на российском рынке.
                        Водочная новинка получила немалый спрос среди потребителей эконом сегмента Самарской области,
                        положительные отзывы экспертов и заняла крепкие позиции среди конкурентных марок. <br>
                    </p>
                    <p class="for-read-more">
                        Чистый  «ледяной» продукт — душевно близок нашему потребителю, поэтому успех торговой
                        марки был заранее спрогнозирован.<br>
                        Дизайн упаковки для водочного бренда "Ледяной родник"лась на кардинальную смену образа
                        бренда и решила сохранить прежний дизайн «Деревенского самогона».
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
                        Грамотная концепция позиционирования и красивая упаковка, подчеркивающая УТП продукта,
                        позволяют завоевать даже самых прихотливых потребителей. Потому как продукт затрагивает
                        главные ценности и предпочтения целевой аудитории. Брендинговое агентство KOLORO поможет
                        вам создать не просто оригинальную упаковку, а настоящий «королевский» бренд со всеми
                        «атрибутами власти», не забывая подчеркнуть «душевность» продукта, которую так любит
                        потребитель.<br>
                    </p>
                    <p class="for-read-more">
                        Понравилась работа?
                    </p>
                    <span class="read-more-btn">Читать дальше</span>
                </div>
            </div>
        </div>
    </div>

    @include('client.portfolio._star_rating_form')


    @include('client.portfolio._form_prev_next_work')


</section>
@stop
@section('page-scripts')
    <script src="/js/portfolio-main.js"></script>

    <script src="/js/portfolio/portfolio-led-rodnik.js"></script>
    @php($data = [
    'type' => 'portfolio',
    'id' => $portfolio->id
    ])

    @include('layouts.partials.star-rating', ['data'=>$data])
@stop