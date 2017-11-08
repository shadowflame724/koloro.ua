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

<section id="ukrainka" class="portfolio-page non-unique-page">
    <div class="bg-container top-container" style="background-image: url('/images/portfolio/ukrainka/ukrainka-picture-5.jpg')">
        <div class="dark-mask"></div>
        <div class="gl-container title-container">
            <h1 class="top-title">
                Украинка
            </h1>
            <h2 class="top-title-small">
                «Современный продукт, чтящий
                украинские традиции производства»
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
                    Завод «Атлантис», где  на свет появилась водка «Украинка», оснащен
                    высокотехнологическим оборудованием и отличается тщательным контролем
                    за производственным процессом. Для производства водки «Украинка»
                    используются спирты 2-х спиртзаводов: Залозецкого и Новоселковского.
                </p>
                <p>
                    Среди 10-ти заводов Украины продукция  этих спиртзаводов показала лучшие
                    вкусовые качества путем закрытой дегустации. Не так давно <span>руководство
                    компании «Атлантис» приняло решение
                    <a class="gl-link" href="https://koloro.ua/rebrending.html" target="_blank">
                        провести ребрендинг
                    </a> и обновить этикетку ТМ «Украинка».</span>
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
                    Главной задачей стала <span>разработка нового дизайна этикетки водочного бренда
                    «Украинка».</span> Однако в процессе редизайна этикетки необходимо было продемонстрировать
                    три важные отличительные черты бренда, выявленные путем исследования целевой
                    аудитории: <span>ТМ «Украинка» — современный продукт,</span> который <span>чтит украинские
                    традиции производства водки;</span> это городская (урбанистическая) водка; это бренд
                    <span>с акцентом не на национальную принадлежность</span> — акцент ставится на высочайшее
                    качество отечественного сырья, из которого изготавливается продукт.
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
                <h3 class="info-left-title">Дизайн этикетки водочного бренда</h3>
            </div>
            <div class="info-right">
                <p>
                    Дизайнеры KOLORO разработали более 10 вариантов
                    <a class="gl-link" href="https://koloro.ua/dizajn-jetiketok.html" target="_blank">
                        дизайна этикетки для водки
                    </a> "Українка". Но, поскольку, по договоренности с заказчиком, на
                    презентации должно было быть представлено только 3 концепта, все
                    разработанные варианты были протестированы фокус-группами; так
                    определились наиболее перспективные направления.
                </p>
            </div>
        </div>
    </div>

    <div class="info-block-container">
        <div class="gl-container">
            <div class="info-left">
                <h3 class="info-left-title">Концепт «Ленточка»</h3>
            </div>
            <div class="info-right">
                <p>
                    Ленточка с орнаментом – одно из самых <span>харизматичных украшений в Украине.</span> Орнамент
                    на ленточках более характерен для Правобережья, но такие ленточки с удовольствием
                    используют в праздничных нарядах, заплетают в волосы и крепят к цветочным венкам
                    по всей Украине. <span>Ленты, как атрибутика,</span> присутствуют в большинстве украинских
                    праздников и обрядов. Ленточка на этикетке несет в себе положительные ассоциации
                    и <span>идентифицирует дизайн с украинскими традициями,</span> преподнесенными в современном виде.
                </p>
                <p class="for-read-more">
                    Узор на ленте повторяет узор на бутылке. Основной функционал и суть данного концепта
                    − <span>фактурный голубоватый фон, который должен выделить продукт</span> на полке цветом и яркостью.
                    В целом, концепт выглядит современным и соответствует геометрии и орнаментальному узору
                    бутылки. Его можно охарактеризовать, как технологичный и современный.
                    Ключевые слова:  народность, технологичность, фактурность, современность.
                </p>
                <span class="read-more-btn">Читать дальше</span>
            </div>
        </div>
    </div>

    <div class="gl-container">
        <h2 class="h2-title">Концепт «Ленточка»</h2>
    </div>
    <div class="image-container">
        <img src="/images/portfolio/ukrainka/ukrainka-picture-1.jpg" alt="ukrainka-picture">
    </div>
    <div class="image-container">
        <img src="/images/portfolio/ukrainka/ukrainka-picture-2.jpg" alt="ukrainka-picture">
    </div>

    <div class="info-block-container">
        <div class="gl-container">
            <div class="info-left">
                <h3 class="info-left-title">Концепт «Тюльпан»</h3>
            </div>
            <div class="info-right">
                <p>
                    <span>Концепт «Тюльпан»</span> —  это благородная и яркая этикетка. Данный <span>концепт удивляет
                    своей неоднозначностью.</span> С одной стороны, <span>геометрия этикетки напоминает тюльпан</span>
                    и удачно объединяет название женского рода - «Украинка» со строгостью форм бутылки и этикетки.
                </p>
                <div class="for-read-more">
                    <p>
                        С другой стороны, <span>потребитель может увидеть в форме этикетки щит с государственным
                        гербом Украины.</span> Щит сообщает потребителю о безопасности и гарантии качества.
                    </p>
                    <p>
                        С третьей стороны - <span>этикетка похожа на корону,</span> и, наконец, концепт должен был
                        быть запущен в год проведения в Украине чемпионата Европы по футболу (Евро-2012),
                        ввиду чего дизайн, выполненный в стиле, похожем на дизайн футбольной формы сборной
                        Украины, хорошо бы закрепил ассоциации данного продукта с радостным для Украины событием.
                    </p>
                    <p>
                        Ключевые слова: солидность, статус, гарантия, доверие, значимость.
                    </p>
                </div>
                <span class="read-more-btn">Читать дальше</span>
            </div>
        </div>
    </div>

    <div class="gl-container">
        <h2 class="h2-title">Концепт «Тюльпан»</h2>
    </div>
    <div class="image-container">
        <img src="/images/portfolio/ukrainka/ukrainka-picture-3.jpg" alt="ukrainka-picture">
    </div>
    <div class="image-container">
        <img src="/images/portfolio/ukrainka/ukrainka-picture-4.jpg" alt="ukrainka-picture">
    </div>

    <div class="info-block-container">
        <div class="gl-container">
            <div class="info-left">
                <h3 class="info-left-title">&nbsp;</h3>
            </div>
            <div class="info-right">
                <p>
                    Вся <span>поверхность этикетки покрывается золотой фольгой,</span> основная задача
                    чего — внушить доверие и солидность. Заливка ромбовидного элемента,
                    отвечающего за наименование, сделана в виде развевающегося флага.
                    Красные галочки внизу и вверху этикетки повторяют вырез бутылки у ее основания.
                </p>
            </div>
        </div>
    </div>

    <div class="info-block-container">
        <div class="gl-container">
            <div class="info-left">
                <h3 class="info-left-title">Концепт «Достояние Украины»</h3>
            </div>
            <div class="info-right">
                <p>
                    <span>На этикетке изображены</span> всем знакомые <span>украинские достопримечательности.</span>
                    Эти места "заякорены" в сознании потребителя, как образы с положительными
                    эмоциями, и <span>ассоциируются с путешествиями и отдыхом.</span>
                    <a class="gl-link" href="https://koloro.ua/dizajn-jetiketok.html" target="_blank">
                        Этикетка
                    </a> содержит крупные
                    графические элементы для того, чтобы внимание потребителя сконцентрировалось
                    на главных коммуникационных посылах бренда — на
                    <a class="gl-link" href="https://koloro.ua/registraciya-torgovyh-marok.html" target="_blank">
                        названии ТМ
                    </a>
                    и на ее символах,
                    являющихся национальным достоянием!
                </p>
                <div class="for-read-more">
                    <p>
                        <span>Цель концепта - воззвать к чувству патриотичности,</span> но, при этом, концепт выполнен
                        в современном европейском стиле, что наталкивает на приятные мысли — о динамичности
                        развития государства и бренда. Ключевые фигуры концепта (Богдан Хмельницкий и
                        киевская княжна Лыбидь с братьями) повернуты вправо, что также говорит о
                        движении вперед и о развитии.
                    </p>
                    <p>
                        Ключевые слова: родная, достопримечательности, современный продукт.
                    </p>
                </div>
                <span class="read-more-btn">Читать дальше</span>
            </div>
        </div>
    </div>

    <div class="gl-container">
        <h2 class="h2-title">Концепт «Достояние Украины»</h2>
    </div>
    <div class="image-container">
        <img src="/images/portfolio/ukrainka/ukrainka-picture-5.jpg" alt="ukrainka-picture">
    </div>
    <div class="image-container">
        <img src="/images/portfolio/ukrainka/ukrainka-picture-6.jpg" alt="ukrainka-picture">
    </div>

    <div class="info-block-container">
        <div class="gl-container">
            <div class="info-left">
                <h3 class="info-left-title">&nbsp;</h3>
            </div>
            <div class="info-right">
                <p>
                    <span>Все три концепта уникальны и необычны,</span> кроме того сохраняют и подчеркивают
                    УТП и концепцию позиционирования бренда.
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
                    К сожалению, заказчик не одобрил ни один из разработанных нами концептов,
                    и, в данный момент, водка торговой марки «Украинка» имеет следующий вид:
                </p>
            </div>
        </div>
    </div>

    <div class="gl-container">
        <h2 class="h2-title">Водка торговой марки «Украинка»</h2>
    </div>
    <div class="image-container">
        <img src="/images/portfolio/ukrainka/ukrainka-picture-7.jpg" alt="ukrainka-picture">
    </div>

    <div class="info-block-container">
        <div class="gl-container">
            <div class="info-left">
                <h3 class="info-left-title">Резюме</h3>
            </div>
            <div class="info-right">
                <p>
                    Сохранение узнаваемости и запоминающихся элементов бренда при проведении
                    ребрендинга - важная и достаточно сложная задача, которую необходимо выполнить,
                    чтобы не потерять доверие со стороны лояльных потребителей.
                    <a class="gl-link" href="https://koloro.ua/" target="_blank">
                        Брендинговое агентство KOLORO
                    </a>
                    поможет вам провести <span>комплексный ребрендинг и редизайн упаковки</span> с сохранением
                    главной идеи бренда.
                </p>
            </div>
        </div>
    </div>

    @include('client.portfolio._star_rating_form')



    @include('client.portfolio._form_prev_next_work')

</section>
@stop
@section('page-scripts')

    <!-- include own JavaScript -->
    <script src="/js/portfolio-main.js"></script>
    @php($data = [
    'type' => 'portfolio',
    'id' => $portfolio->id
    ])

    @include('layouts.partials.star-rating', ['data'=>$data])
@stop