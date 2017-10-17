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
    <link rel="stylesheet" href="/css/gremuchaya-smes.css">
@stop


@section('page-content')

    <!--PRELOADER!!! -->
    <div id="preloader"></div>

    @include('layouts.blackheader')

<section id="gremuchaya-smes">
    <div class="bg-container top-container">
        <div class="gl-container title-container">
            <h1 class="top-title">Гремучая смесь</h1>
            <h2 class="top-title-small">
                «Звучное название торговой марки родентицидного средства»
            </h2>
        </div>
    </div>

    <div class="info-block-container">
        <div class="gl-container">
            <div class="info-left">
                <h3 class="info-left-title">Задание на проект</h3>
            </div>
            <div class="info-right">
                <p>
                    В KOLORO обратился руководитель маркетингового отдела ООО «ВИСТА» с запросом на
                    создание нового бренда для рынка родентицидных средств. Пока что безымянная приманка
                    для грызунов должна была стать аналогом популярного средства «Крысиная смерть».
                </p>
                <div class="for-read-more">
                    <p>
                        Задачей стала <span>разработка названия</span> для будущей <span>зонтичной торговой марки</span>,
                        объединяющей различные средства для борьбы с огородными вредителями
                        (кротами, тлей, муравьями, слизнями и т.д.). Поэтому название нового бренда
                        не должно напрямую ассоциироваться с грызунами.
                    </p>
                    <p>
                        После нейминга требовалось разработать упаковку для приманки. В отличие от названия,
                        упаковка должна была стать уникальной. Объединять зонтичный бренд должен только логотип.
                        Формат упаковки — 200-граммовая гибкая пачка. Территория сбыта — Россия и Украина.
                    </p>
                </div>
                <span class="read-more-btn">Читать дальше</span>
            </div>
        </div>
    </div>

    <div class="info-block-container work-plan">

        <div class="two-images-container packages-cont">
            <div class="gl-container">
                <div class="image-left">
                    <img src="/files/images/portfolio/gremuchaya-smes/packaging-1-front.png" alt="pencil-image" class="">
                </div>
                <div class="image-right">
                    <img src="/files/images/portfolio/gremuchaya-smes/packaging-1-back.png" alt="pencil-image" class="">
                </div>
            </div>
        </div>

        <div class="gl-container">
            <div class="info-left">
                <h3 class="info-left-title">План работ</h3>
            </div>
            <div class="info-right">
                <ol>
                    <li>
                        <span>Анализ рынка родентицидных средств,</span> чтобы выявить свободные ниши и детально
                        изучить решения конкурентов.
                    </li>
                    <li>
                        <span>Нейминг отравы</span> — 2 этапа, презентация лучшей десятки. Выбор одного названия.
                    </li>
                    <li>
                        <span>Разработка дизайна упаковки.</span>Более 100 вариантов в формате набросков и
                        4 финальных варианта для презентации. Затем — выбор лучшего варианта и его доработка.
                    </li>
                    <li>
                        <span>Разработка УТП</span> (уникального торгового предложения) с его отображением на упаковке.
                    </li>
                </ol>

            </div>
        </div>
    </div>

    <div class="gl-container">
        <h2 class="h2-title header-black">Этап I. Анализ рынка родентицидных средств</h2>
    </div>

    <div class="info-block-container">
        <div class="gl-container">
            <div class="info-left">
                <h3 class="info-left-title">Выводы исследования</h3>
            </div>
            <div class="info-right">
                <p>
                    Химический состав яда аналогичен многим другим производителям. Поэтому нашей
                    целью стало создание дополнительной ценности бренда. Названия <span>существующих</span>
                    родентицидных средств можно разбить на несколько категорий:
                </p>
                <ul>
                    <li>
                        <span>агрессивные</span> названия, которые крутятся вокруг военных терминов и личностей;
                    </li>
                    <li>
                        названия, которые <span>обыгрывают химический состав</span> препарата;
                    </li>
                    <li>
                        интересные названия, которые <span>не прямо связаны с продуктом.</span>
                    </li>
                </ul>
                <div class="for-read-more">
                    <p>
                        <span>В дизайне упаковки превалируют</span> такие мотивы:
                    </p>
                    <ul>
                        <li>
                            <span>кричащие цвета,</span> обыгрывание смерти насекомых;
                        </li>
                        <li>
                            <span>аккуратный дизайн,</span> который мысленно отсылает к белоснежным лабораториям и исследователям.
                        </li>
                    </ul>
                    <p>
                        Многие производители <span>используют военную символику</span> в дизайне, например, рисуя
                        вредителя в центре прицела.
                    </p>
                    <p>
                        Целевая аудитория продукта — <span>мужчины и женщины от 40-45 лет,</span> жители
                        частного сектора, которые сталкиваются с грызунами круглый год, и дачники.
                    </p>
                </div>
                <span class="read-more-btn">Читать дальше</span>
            </div>
        </div>
    </div>

    <div class="bg-wrapper">
        <div class="bg-container mouses-cat-container"></div>
    </div>

    <div class="gl-container">
        <h2 class="h2-title header-black">Этап II. Разработка названия средства от крыс</h2>
    </div>

    <div class="naming-slider-cont">
        <span class="arrow-left-btn">
            <img src="/files/images/portfolio/general/slide_left_white.png">
        </span>
        <span class="arrow-right-btn">
            <img src="/files/images/portfolio/general/slide_right_white.png">
        </span>

        <div class="owl-carousel owl-theme naming-slider">
            <!--<img src="/files/images/portfolio/gremuchaya-smes/naming-1.jpg" alt="naming-photo">-->
            <div class="item">
                <div class="bg-container" style="background-image: url('/files/images/portfolio/gremuchaya-smes/naming-1.jpg')">
                    <div class="info-text">
                        <div class="gl-container">
                            <p>
                                <span>«Страж»</span> — простое односложное название, которое легко запоминается и
                                ассоциируется с надежностью. «Страж» — уверенность в каждом дне, он
                                не оставит вредителям шансов на выживание. Это название фокус-группа
                                оценила как надежное и внушающее доверие.<br>
                            </p>
                            <p>
                                «Страж. Урожай в безопасности.»
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="bg-container" style="background-image: url('/files/images/portfolio/gremuchaya-smes/naming-2.jpg')">
                    <div class="info-text">
                        <div class="gl-container">
                            <p>
                                Слово <span>«выкуси»</span> — эмоциональное просторечное обращение, которое
                                употребляется в спорах. Его значение — перебьешься, обойдешься.
                                Еще один вариант употребления слова — «накося выкуси», что значит
                                «ничего не получишь», «ничего не выйдет». Опрошенные охарактеризовали
                                название как юморное и эмоционально окрашенное.
                            </p>
                            <p>
                                «Выкусите грызуны!»
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="bg-container" style="background-image: url('/files/images/portfolio/gremuchaya-smes/naming-3.jpg')">
                    <div class="info-text">
                        <div class="gl-container">
                            <p>
                                <span>«Ночной дозор»</span> — название с тройным смыслом. Во-первых, это отсылка
                                к популярной одноименной серии книг и их экранизации, где силы добра
                                сражались против сил зла. Во-вторых, оно ассоциируется с надежностью,
                                и дает уверенность в том, что ночью вредители не побеспокоят хозяйство.
                                В третьих, словосочетание связано с популярной фразой «ночной дожор»,
                                которую используют чтобы описать ночные вылазки к холодильнику. Ассоциативно
                                это накладывается на ночную защиту и говорит потребителю, что мышиный
                                ночной дожор не пройдет, потому что на страже «Ночной дозор».
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="info-block-container">
        <div class="gl-container">
            <div class="info-left">
                <h3 class="info-left-title">Выбранное название</h3>
            </div>
            <div class="info-right">
                <p>
                    Среди названий, которые мы показали заказчику было еще одно. «Гремучая смесь» —
                    расхожая фраза, которую употребляют описывая убойный продукт. Это яркое название,
                    с четкой эмоциональной окраской. Также это название отсылает к гремучей змее —
                    опасному типу пресмыкающихся. Название торговой марки получилось крайне удачным:
                    с одной стороны оно подойдет для любого родентицидного средства, с другой —
                    змеи поедают мышей, поэтому оно подкрепляет образ продукта.
                </p>
                <p class="for-read-more">
                    Заказчик остановился на последнем варианте, так как оно звучное и не содержит
                    негативных коннотаций. Негативно-шутливые настроение «Выкуси» он отклонил,
                    вариант «Страж» счел слишком простым, такое название сложно наполнить смыслом,
                    а «Ночной дозор» хоть и был свободен для регистрации, но мог столкнуться с
                    претензиями правообладателей.
                </p>
                <span class="read-more-btn">Читать дальше</span>
            </div>
        </div>
    </div>

    <div class="info-block-container">
        <div class="gl-container">
            <div class="info-left">
                <h3 class="info-left-title">
                    Техническое задание на дизайн упаковки
                </h3>
            </div>
            <div class="info-right">
                <p>
                    Упаковка должна была зафиксировать впечатление от имени. Требовалось отразить
                    на упаковке силу действия препарата и сделать ее яркой.
                </p>
                <p>
                    Второй задачей было отстроится от конкурентов, которые используют воинственные
                    элементы и китчевые кричащие образы.
                </p>
                <p>
                    Так как в имени мы не использовали названий действующих веществ, то
                    от «лабораторного образа» в дизайне тоже решили отказаться.
                </p>

            </div>
        </div>
    </div>

    <div class="two-images-container mouses-traps-cont">
        <div class="image-left">
            <img src="/files/images/portfolio/gremuchaya-smes/image-2.jpg" alt="mouses-photo">
        </div>
        <div class="image-right">
            <img src="/files/images/portfolio/gremuchaya-smes/image-3.jpg" alt="traps-photo">
        </div>
    </div>

    <div class="gl-container">
        <h2 class="h2-title header-black">Этап III. Создание дизайна упаковки</h2>
    </div>

    <div class="info-block-container">
        <div class="gl-container">
            <div class="info-left">
                <h3 class="info-left-title color-pink">
                    Концепт I — «Гипноз»
                </h3>
            </div>
            <div class="info-right">
                <p>
                    Фишка первого концепта — гипнотизирующий градиент. Темно-синий цвет постепенно
                    перетекает в фиолетовый, который сменяется ярко-розовым и завершается глубоким
                    красным. Глубокий оттенок синего символизирует спокойствие, красный — борьбу и
                    агрессию. Эти цвета появились не случайно: форма выпуска продукта — красные и
                    синие порционные пакетики вещества.
                </p>
                <div class="for-read-more">
                    <p>
                        В левой части упаковки нарисована мышь, которая направляется в сторону приманки,
                        как под гипнозом. В центре упаковки мы развиваем эту идею, используя гипнотический
                        образ-узор. Упаковка выглядит яркой и не похожа на продукты конкурентов, что
                        выделяет ее на фоне остальных!
                    </p>
                    <p>
                        В основу концепта заложены такие ключевые слова: смешание, гипноз, воздействие, притяжение.
                    </p>
                </div>
                <span class="read-more-btn">Читать дальше</span>
            </div>
        </div>
    </div>

    <div class="image-container concept-1-cont">
        <div class="gl-container">
            <img src="/files/images/portfolio/gremuchaya-smes/packaging-concept-1.png" alt="packaging-concept-photo">
        </div>
    </div>

    <div class="info-block-container">
        <div class="gl-container">
            <div class="info-left">
                <h3 class="info-left-title color-blue">
                    Концепт II — «Гремучая змея»
                </h3>
            </div>
            <div class="info-right">
                <p>
                    Второй концепт лаконичный. Его особенность — элементы, которые видны издалека.
                    Круглая змея повторяет идею предыдущего концепта, но интерпретирует ее по-другому.
                    Второй узнаваемый элемент — текстово-иллюстративный блок с приманкой. Для него
                    мы выбрали стереотипное изображение мыши и сыра и подкрепили текстами-характеристиками
                    аппетитного кусочка, который стереотипно привлекателен для мышей.
                </p>

                <div class="for-read-more">
                    <p>
                        Также в раскрое упаковки мы предусмотрели смотровое окно, которое демонстрирует
                        продукт. Это позволяет потребителю сразу же понять какой тип яда перед ним и
                        и не задавать лишних вопросов о форме выпуска приманки.
                    </p>
                    <p>
                        Ключевые слова концепта: гремучая змея, выжидание, приманка, уничтожение,
                        очищение, избавление, приманка, гипнотические круги.
                    </p>
                </div>
                <span class="read-more-btn">Читать дальше</span>
            </div>
        </div>
    </div>

    <div class="image-container concept-2-cont">
        <div class="gl-container">
            <img src="/files/images/portfolio/gremuchaya-smes/packaging-concept-2.png" alt="packaging-concept-photo">
        </div>
    </div>

    <div class="info-block-container">
        <div class="gl-container">
            <div class="info-left">
                <h3 class="info-left-title color-red">
                    Концепт III — «Мертвая мышь»
                </h3>
            </div>
            <div class="info-right">
                <p>
                    «Мертвая мышь» — концепт-победитель. Красный цвет упаковки — яркий, он привлекает
                    внимание, притягивает взгляд.
                </p>
                <p>
                    В качестве основных элементов дизайна выбраны:
                </p>
                <ul>
                    <li>шрифт, который создает ощущение динамики;</li>
                    <li>двухкомпонентная стрелка (графическая часть лого), нацеленная в голову;</li>
                    <li>мотив двухцветной таблетки (красный и синий цвета);</li>
                    <li>мертвая мышь (которую можно принять и за крысу).</li>
                    <li>фоновый узор, который центрирует взгляд смотрящего.</li>
                </ul>
                <div class="for-read-more">
                    <p>
                        Концепт сочетает в себе 2 преимущества. Во-первых, он комичный, а значит,
                        вызывает эмоцию, что связывает потребителя с брендом. Во-вторых, он четко
                        показывает результат, которого помогает достичь препарат.
                    </p>
                    <p>
                        В верхней части упаковки мы разместили текст, который указывает,
                        что средство подходит для мышей и крыс.
                    </p>
                </div>
                <span class="read-more-btn">Читать дальше</span>
            </div>
        </div>
    </div>

    <div class="logo-utp-cont">

        <div class="image-container concept-3-cont">
            <div class="gl-container">
                <img src="/files/images/portfolio/gremuchaya-smes/packaging-concept-3.png" alt="packaging-concept-photo">
            </div>
        </div>

        <div class="gl-container">
            <h2 class="h2-title header-white">Логотип</h2>

            <div class="image-container logo-cont">
                <img src="/files/images/portfolio/gremuchaya-smes/logo.png" alt="logo-photo">
            </div>
        </div>

        <div class="info-block-container">
            <div class="gl-container">
                <div class="info-left">
                    <h3 class="info-left-title">
                        Уникальное торговое предложение
                    </h3>
                </div>
                <div class="info-right">
                    <p>
                        Акцент сделан на двухкомпонентность родентицидного средства. Это заверяет потребителей
                        в эффективности средства. Отразить концепцию помогли визуальные элементы
                        (двухцветная таблетка-иллюстрация и инфографика) и подкрепляющие тексты.
                    </p>
                    <p>
                        Упаковка не только яркая и запоминающаяся, она также в полной мере передает
                        ключевое сообщение покупателю, отражает концепцию позиционирования товара,
                        обращает внимание на продукт, а также располагает человека к покупке.
                    </p>
                    <div class="for-read-more">
                        <p>
                            В основе дизайна упаковки лежит следующий ассоциативный ряд: поражение,
                            прицельное уничтожение, карикатура, смерть, 2 таблетки, возможность выбора,
                            двухкомпонентность, неизбежный финал.
                        </p>
                        <p>
                            На обратной стороне упаковки изображена иллюстрация: мышиная семья,
                            которая покидает насиженное место, убираясь восвояси. Она сопровождается
                            подкрепляющим текстом: «Грызуны больше не вернутся!». Такое сочетание
                            тексто-графических элементов подчеркивает позиционирование продукта и
                            делает его преимущества понятными потребителю, упрощая восприятие информации.
                        </p>
                    </div>
                    <span class="read-more-btn">Читать дальше</span>
                </div>
            </div>
        </div>

        <div class="gl-container">
            <div class="image-container infographic-1-cont">
                <img src="/files/images/portfolio/gremuchaya-smes/infographic-1.png" alt="infographic-photo">
            </div>
        </div>

        <div class="info-block-container">
            <div class="gl-container">
                <div class="info-left">
                    <div class="image-container infographic-2-cont">
                        <img src="/files/images/portfolio/gremuchaya-smes/infographic-2.png" alt="infographic-photo">
                    </div>
                </div>
                <div class="info-right">
                    <p>
                        Иллюстрация в виде мышиной семьи, которая покидает привычное место, сопровождается
                        подкрепляющим текстм "Грызуны больше не вернутся!". Такое сочетание тексто-графических
                        элементов не только подчеркивает позиционирование продукта, но и делает его уникальные
                        свойства более понятными потребителю, упрощает восприятие информации.
                    </p>
                    <p class="for-read-more">
                        Таким образом, упаковка не только яркая и запоминающаяся, она также в
                        полной мере передает ключевое сообщение покупателю, отражает концепцию
                        позиционирования товара, обращает внимание на продукт, а также располагает
                        человека к покупке.
                    </p>
                    <span class="read-more-btn">Читать дальше</span>
                </div>
            </div>
        </div>
    </div>

    <div class="info-block-container">
        <div class="gl-container">
            <div class="info-left">
                <h3 class="info-left-title">
                    Результат
                </h3>
            </div>
            <div class="info-right">
                <p>
                    Новый бренд для рынка родентицидных средств получился оригинальным,
                    комичным и самобытным. Торговая марка «Гремучая смесь» уже появилась в
                    специализированных точках продажи и интернет магазинах. Она смогла показать
                    высокие результаты в продажах, потеснив конкурентные марки.
                </p>
            </div>
        </div>
    </div>

    <div class="info-block-container">
        <div class="gl-container">
            <div class="info-left">
                <h3 class="info-left-title">
                    Резюме
                </h3>
            </div>
            <div class="info-right">
                <p>
                    Заказать дизайн упаковки, который будет узнаваемым и не похожим на
                    конкурентные продукты, вы можете к KOLORO. Также мы специализируемся
                    на цепляющем нейминге и работающем УТП.
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
    <!--скрипты для всех страниц конец-->

    <script src="/js/viewportchecker.js"></script>

    <!-- OwlCarousel -->
    <script src="/js/owl.carousel.min.js"></script>
    <!--<script src="../js/owl.lazyload.js"></script>-->

    <!-- SmoothScroll -->
    <script src="/js/SmoothScroll.js"></script>

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
    <script src="/js/gremuchaya-smes.js"></script>
@stop