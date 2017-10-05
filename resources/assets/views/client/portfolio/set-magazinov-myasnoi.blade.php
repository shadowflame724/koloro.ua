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
    <link rel="stylesheet" href="/css/set-magazinov-myasnoi.css">

@stop


@section('page-content')
    <div id="preloader"></div>

    @include('layouts.whiteheader')

<section id="set-magazinov-myasnoi">
    <div class="bg-container top-container">
        <div class="gl-container title-container">
            <h1 class="top-title">
                СЕТЬ МАГАЗИНОВ «МЯСНОЙ»
            </h1>
            <h2 class="top-title-small">
                САМОБЫТНЫЙ УКРАИНСКИЙ БРЕНД
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
                    Владелец сети МК «Мясной» начинал с торговли мясом под чужой торговой маркой
                    («Роганский мясокомбинат»). Однако в 2014-м году, после того, как одна торговая
                    точка переросла в сеть из нескольких, он решил, что <span>хочет отстроиться от
                    конкурентов и создать свой бренд.</span> С идеей владелец, Александр Скорик,
                    пришел в KOLORO. Начинать деятельность планировалось в Харькове, так
                    как там уже были точки продажи, затем нужно было расширяться на Запад (в том числе и в Киев).

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
                    От КОЛОРО требовалось создать дополнительную ценность для нового розничного
                    мясного бренда. Работать планировалось в эконом-сегменте, и фирменный стиль
                    должен был отображать эту направленность. В сферу задач входили:
                </p>
                <ul>
                    <li>
                        <a class="gl-link" target="_blank" href="https://koloro.ua/nejming.html">
                            разработка названия</a> торговой марки и его регистрация;
                    </li>
                    <li>
                        разработка
                        <a class="gl-link" target="_blank" href="https://koloro.ua/sozdat-logotip.html">
                            логотипа</a> для сети мясных магазинов;
                    </li>
                    <li>
                        создание фирменного стиля;
                    </li>
                    <li>
                        создание легенды бренда;
                    </li>
                    <li>
                        разработка
                        <a class="gl-link" target="_blank" href=" https://koloro.ua/pozicionirovanie-brenda.html">
                            позиционирования бренда</a> и коммуникационного посыла;
                    </li>
                    <li>
                        оформление витрин и дизайн магазина.
                    </li>
                </ul>
                <div class="for-read-more">
                    <p>
                        Заказчик прописал в техническом задании 3 требования к неймингу сети магазинов:
                    </p>

                    <ul>
                        <li>
                            80 процентов вариантов должны содержать корень «Мяс»;
                        </li>
                        <li>
                            95% предложенных вариантов названий должны быть в одно слово;
                        </li>
                        <li>
                            название может быть как на русском, так и на украинском языке.
                        </li>
                    </ul>

                    <p>
                        Распространятся продукция должна была на всей территории Украины, но начинать
                        планировалась с востока, так как компания родом из Харькова.
                    </p>
                </div>
                <span class="read-more-btn">Читать дальше</span>
            </div>
        </div>
    </div>

    <div class="info-block-container">
        <div class="gl-container">
            <div class="info-left">
                <h3 class="info-left-title">Решение</h3>
            </div>
            <div class="info-right">
                <p>
                    Мы начали с
                    <a class="gl-link" target="_blank" href="https://koloro.ua/kabinetnue-marketingovue-issledovaniya.html">
                        кабинетного исследования</a> рынка мясной и колбасной продукции, проанализировав:
                </p>
                <ul>
                    <li>
                        целевую аудиторию;
                    </li>
                    <li>
                        потенциальных конкурентов заказчика;
                    </li>
                    <li>
                        текущие тенденции в фирменном стиле.
                    </li>
                </ul>
                <p>
                    На основе проведенного исследования мы предложили 4
                    <a class="gl-link" target="_blank" href="https://koloro.ua/blog/brending-i-marketing/8-vyiigryishnyih-strategiy-pozitsionirovaniya-brenda.html">
                        варианта позиционирования</a> торговой марки.
                </p>
                <div class="for-read-more">
                    <ol>
                        <li>
                            <span>Доступная, честная цена</span> (оптимальное соотношение показателей цена/качество).
                        </li>
                        <li>
                            <span>Связь с вековыми традициями,</span> украинскими корнями (мясо — продукт, который всегда
                            был в рационе украинцев и в 2017-м году все еще считается обязательной позицией
                            в украинской продуктовой корзине).
                        </li>
                        <li>
                            <span>Достаток</span> (мясо как признак праздничного, богатого, стола).
                        </li>
                        <li>
                            <span>Создание образа вокруг человека</span> — хозяина компании. Для этого можно обыграть его фамилию.
                        </li>
                    </ol>
                    <p>
                        Ориентируясь на них, мы приступили к следующему этапу.
                    </p>
                </div>
                <span class="read-more-btn">Читать дальше</span>
            </div>
        </div>
    </div>

    <div class="stage-info stage-1">
        <div class="gl-container">
            <h2>Шаг 1. Нейминг</h2>
            <p class="stage-info-text">
                Мы провели анализ названий существующих компаний-конкурентов. С учетом всех требований
                заказчика, к предварительной презентации нами были подготовлены и обоснованы следующие
                варианты названий: <span>«Мясно», «Мясотека», «Мяссорти», «Всемясия» и «Охоче»,</span> а также
                некоторые другие варианты, более подробно о них
                <a class="gl-link" target="_blank" href="https://koloro.ua/blog/brending-i-marketing/kak-nazvat-myasnoj-magazin-ili-idei-nejminga-dlya-myasnoj-torgovoj-marki-ot-koloro.html">
                    читайте в нашей статье</a>. Ниже вы можете увидеть несколько вариантов нейминга
                и визуальный ассоциативный ряд для них.
            </p>
        </div>
    </div>

    <div class="gl-container">
        <div class="naming-slider-cont">
        <span class="arrow-left-btn">
            <img src="/files/images/portfolio/general/slide_left_black.png">
        </span>
            <span class="arrow-right-btn">
            <img src="/files/images/portfolio/general/slide_right_black.png">
        </span>

            <div class="owl-carousel owl-theme naming-slider">
                <div class="item">
                    <div class="gl-container">
                        <div class="image-container">
                            <img src="/files/images/portfolio/set-magazinov-myasnoi/naming-1.jpg" alt="naming-photo">
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="gl-container">
                        <div class="image-container">
                            <img src="/files/images/portfolio/set-magazinov-myasnoi/naming-1.jpg" alt="naming-photo">
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="gl-container">
                        <div class="image-container">
                            <img src="/files/images/portfolio/set-magazinov-myasnoi/naming-1.jpg" alt="naming-photo">
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="gl-container">
                        <div class="image-container">
                            <img src="/files/images/portfolio/set-magazinov-myasnoi/naming-1.jpg" alt="naming-photo">
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <p class="stage-info-text grey-color">
            Клиент долго думает ... и наконец выбирает один из вариантов. Пишем легенду для
            названия, и переходим ко второму этапу.
        </p>
    </div>

    <div class="stage-info stage-2">
        <div class="gl-container">
            <h2>Шаг 2. Логотип</h2>
            <p class="stage-info-text">
                После утверждения заказчиком названия, мы подобрали <span>около тысячи референсов</span> и
                приступили к поиску идеи для логотипа магазина. Ниже вы можете увидеть 3 финальных
                варианта, которые мы презентовали заказчику.
            </p>
        </div>
    </div>

    <div class="concept-slider-cont">
        <span class="arrow-left-btn">
            <img src="/files/images/portfolio/general/slide_left_white.png">
        </span>
        <span class="arrow-right-btn">
            <img src="/files/images/portfolio/general/slide_right_white.png">
        </span>

        <div class="owl-carousel owl-theme concept-slider">
            <div class="item">
                <div class="bg-container" style="background-image: url('/files/images/portfolio/set-magazinov-myasnoi/picture-concept-1.jpg')">
                    <div class="info-text">
                        <div class="gl-container">
                            <div class="image-container">
                                <img src="/files/images/portfolio/set-magazinov-myasnoi/logo-concept-1.png" alt="logo-concept">
                            </div>
                            
                            <h2 class="info-text-header">Концепт I. «Семейные ценности»</h2>
                            <p>
                                Первый концепт частично отражает ситуацию потребления продукции.
                                К размашистому шрифту добавлен графический элемент — кастрюля/горщик.
                                Мы выбрали <span>насыщенный красный цвет</span> и разместили название под наклоном.
                                Логотип получился довольно эмоциональным и теплым, он хорошо передает
                                настроение, которое мы хотели вложить в ТМ.

                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="bg-container" style="background-image: url('/files/images/portfolio/set-magazinov-myasnoi/picture-concept-1.jpg')">
                    <div class="info-text">
                        <div class="gl-container">
                            <div class="image-container">
                                <img src="/files/images/portfolio/set-magazinov-myasnoi/logo-concept-1.png" alt="logo-concept">
                            </div>

                            <h2 class="info-text-header">Концепт II. «Украинский»</h2>
                            <p>
                                Графический логотип с вышивкой — ответ на «украинский тренд» в упаковке.
                                Букву «М» мы составили из графических элементов которые напоминают
                                изогнутую ленту и геометрические фигуры.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="bg-container" style="background-image: url('/files/images/portfolio/set-magazinov-myasnoi/picture-concept-1.jpg')">
                    <div class="info-text">
                        <div class="gl-container">
                            <div class="image-container">
                                <img src="/files/images/portfolio/set-magazinov-myasnoi/logo-concept-1.png" alt="logo-concept">
                            </div>

                            <h2 class="info-text-header">Концепт III. «Украинский, вариант 2»</h2>
                            <p>
                                В сине-красном концепте соединились два момента: <span>вышивка и геометрические
                                элементы.</span> Здесь буква «М» помещена в центр.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="gl-container">
        <h2 class="summary-header">Клиент долго думает ... и наконец выбирает один из вариантов</h2>
        
        <div class="image-container">
            <img src="/files/images/portfolio/set-magazinov-myasnoi/logo-chosen.png" alt="logo-chosen" class="logo-chosen">
        </div>
    </div>

    <div class="image-container pattern-logo-cont">
        <img src="/files/images/portfolio/set-magazinov-myasnoi/pattern-logo.png" alt="pattern-logo">
    </div>

    <div class="stage-info stage-2">
        <div class="gl-container">
            <h2>Шаг 3. Фирменный стиль</h2>
            <p class="stage-info-text">
                После того, как заказчик определился с логотипом, <span>мы доработали его и перешли
                к адаптации для разных носителей</span> а также выбору цветовой гаммы (вариантов подложек).<br><br>
                Кроме того, все варианты дизайна логотипа были визуализированы на вывесках разных
                форматов и
                <a class="gl-link" target="_blank" href="https://koloro.ua/pos-materialy.html">
                    POS-материалах</a>, униформе сотрудников, документации и фасаде магазина.<br><br>
                Логотип «Мясного» — зарегестрированній торговый знак, все права на него — защищены.
            </p>
        </div>
    </div>

    <div class="image-container">
        <img src="/files/images/portfolio/set-magazinov-myasnoi/picture-mjasnoy-1.jpg" alt="picture-mjasnoy">
    </div>

    <div class="two-images-container pictures-mjasnoy-cont">
        <div class="image-left">
            <img src="/files/images/portfolio/set-magazinov-myasnoi/picture-mjasnoy-2.jpg" alt="picture-mjasnoy">
        </div>
        <div class="image-right">
            <img src="/files/images/portfolio/set-magazinov-myasnoi/picture-mjasnoy-3.jpg" alt="picture-mjasnoy">
        </div>
    </div>

    <div class="image-container">
        <img src="/files/images/portfolio/set-magazinov-myasnoi/picture-mjasnoy-4.jpg" alt="picture-mjasnoy">
    </div>

    <div class="two-images-container pictures-mjasnoy-cont-2">
        <div class="image-left">
            <img src="/files/images/portfolio/set-magazinov-myasnoi/picture-mjasnoy-5.jpg" alt="picture-mjasnoy">
        </div>
        <div class="image-right">
            <img src="/files/images/portfolio/set-magazinov-myasnoi/picture-mjasnoy-6.jpg" alt="picture-mjasnoy">
        </div>
    </div>

    <div class="info-block-container">
        <div class="gl-container">
            <div class="info-left">
                <h3 class="info-left-title">Результат</h3>
            </div>
            <div class="info-right">
                <p>
                    Сеть мясных магазинов «Мясной» уже расширила свое присутствие за пределы
                    Харьковской области, покрыв розничными магазинами практически всю территорию
                    Украины (кроме Харькова точки есть в Черкассах, Сумах, Киеве, Днепропетровске,
                    Полтаве, Запорожье и др.). Украинские мотивы и простой узнаваемый фирменный
                    стиль помогли новому бренду в завоевании сердец покупателей.
                </p>
            </div>
        </div>
    </div>

    <div class="info-block-container">
        <div class="gl-container">
            <div class="info-left">
                <h3 class="info-left-title">Резюме</h3>
            </div>
            <div class="info-right">
                <p>
                    В 21 веке магазин это место, где потребитель переживает новые эмоции и впечатления,
                    приобретает опыт, черпает вдохновение. Разработка

                    <a class="gl-link" target="_blank" href="https://koloro.ua/firmennyj-stil-seti-magazinov.html">
                        ритейл-бренда для сети магазинов</a> позволяет:
                </p>
                <ul>
                    <li>создать правильную атмосферу и задать нужный тон;</li>
                    <li>закрепить общую концепцию оформления и стиля бренда.</li>
                </ul>
                <p>
                    Заказать создание бренда в сфере ритейл вы можете в KOLORO. Здесь вы найдете то, что давно искали.
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
    <!-- section lanshmit ends -->
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
    <script src="/js/set-magazinov-myasnoi.js"></script>
@stop


