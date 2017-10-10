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

@stop


@section('page-content')

    <!--PRELOADER!!! -->
    <div id="preloader"></div>

    @include('layouts.whiteheader')

<section id="belogor">
    <div class="bg-container top-container" style="background-image: url('/images/portfolio/belogor/belogor-6.jpg')">
        <div class="dark-mask"></div>
        <div class="gl-container title-container">
            <h1 class="top-title">
                ТМ «Белогор»
            </h1>
            <h2 class="top-title-small">
                «Подлинно Белгородский продукт»
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
                    <span>Ликероводочный завод «Люкс»</span> - производитель высококачественных водочной
                        продукции, <span>признанный одним из лучших не только в Белгородской области,</span>
                    но и далеко за ее пределами. Славится ЛВЗ «Люкс» в первую очередь качеством
                    производимой водки — только спирт класса «Люкс», рецептура с натуральными
                    добавками, настоями из растительного сырья. Сегодня ЛВЗ «Люкс» <span>выпускает
                    более 19 видов водки. Одной из них является водка «Белогор», представленная
                            на рынке г. Белгород и Белгородской области с 1998 года.</span> В последнее время
                    высококачественный продукт стал терять свои позиции из-за устаревания
                    оформления упаковки и неприметности среди огромного многообразия
                    современного рынка водки.
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
                    Главной задачей проекта стало полное <span>обновление водочной торговой марки</span> —
                    <a class="gl-link" href="https://koloro.ua/rebrending.html" target="_blank">
                        комплексный ребрендинг
                    </a>. Разработка уникального <span>дизайна бутылки,
                    редизайн этикетки, колпака и логотипа.</span> При этом необходимо было
                    превратить привычную белгородскому потребителю водку «Белогор» в
                    привлекательную новинку, харизматичный символ г. Белгород.
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
                <h3 class="info-left-title">Анализ конкурентов. Уникальная геометрия бутылки</h3>
            </div>
            <div class="info-right">
                <p>
                    Проект стартовал с маркетингового исследования конкурентных торговых марок,
                    по результатам которого была <span>начата работа по разработке уникальной формы,
                    геометрии бутылки.</span>
                </p>
                <p class="for-read-more">
                    3Д-модельеры и дизайнеры представили заказчику несколько вариантов уникальной
                    геометрии бутылки, а поскольку ранее водка «Белогор» выпускалась в круглой
                    бутылке, то одним из вариантов новой формы бутылки было усовершенствование,
                    редизайн существующей бутылки. В результате <span>бутылка стала квадратной и более
                    удобной, но главное она сохранила свою узнаваемость.</span> Далее было разработаны
                    несколько вариантов
                    <a class="gl-link" href="https://koloro.ua/dizajn-vodki.html" target="_blank">
                        дизайна этикетки и колпака
                    </a>.
                </p>
                <span class="read-more-btn">Читать дальше</span>
            </div>
        </div>
    </div>

    <div class="gl-container">
        <h2 class="h2-title">Варианты уникальной геометрии бутылки водки "Белогор"</h2>
    </div>
    <div class="image-container">
        <img src="/images/portfolio/belogor/belogor-1.jpg" alt="belogor-picture" title="Разработка формы бутылки">
    </div>

    <div class="gl-container">
        <h2 class="h2-title">Дизайн этикетки и позиционирование</h2>
    </div>

    <div class="info-block-container">
        <div class="gl-container">
            <div class="info-left">
                <h3 class="info-left-title">Концепт "Экологичный"</h3>
            </div>
            <div class="info-right">
                <p>
                    Одним из вариантов позиционирования водки «Белогор» было предложено патриотизм
                    жителей Белгорода и Белогородской области — <span>концепт «Экологичный».</span> Ведь при
                    выборе продукта мы чаще выбираем тот товар, что произведен в родном городе или
                    местности, что мы так хорошо знаем.
                </p>
                <div class="for-read-more">
                    <p>
                        В качестве <span>УТП (уникальное торговое предложение) было выбрано инвестиции в свой
                        родной город.</span> В данном концепте были использованы <span>крупные идентифицирующие
                        элементы: логотип «Белогор»,</span> написанный уникальным шрифтом с подчеркиванием,
                        узнаваемый и <span>харизматичный орнамент на значке утп.</span>
                    </p>
                    <p>
                        Этикетка выполнена в белом цвете с использованием золотого и красного цветов
                        как основных. Такое сочетание цветов ассоциируется с чистотой, доверием и безопасностью.
                    </p>
                </div>
                <span class="read-more-btn">Читать дальше</span>
            </div>
        </div>
    </div>

    <div class="gl-container">
        <h2 class="h2-title">Концепт «Экологичный»</h2>
    </div>
    <div class="image-container">
        <img src="/images/portfolio/belogor/belogor-2.jpg" alt="belogor-picture" title="Дизайн водки Белогор">
    </div>
    <div class="image-container">
        <img src="/images/portfolio/belogor/belogor-2.jpg" alt="belogor-picture" title="Этикетка водки Белогор">
    </div>

    <div class="info-block-container">
        <div class="gl-container">
            <div class="info-left">
                <h3 class="info-left-title">Концепт "Меч"</h3>
            </div>
            <div class="info-right">
                <p>
                    Второй концепт — «Меч». Дизайн данного концепта образно напоминает меч
                    либо шлем. <span>Задача данного концепта – воззвать к желанию потребителей
                    испытать азарт и стремление к риску.</span>
                </p>
                <p>
                    <span>Позиционирование водки — для искателей приключений, смелых дерзких людей,
                        легко относящихся к жизни.</span>
                </p>
                <div class="for-read-more">
                    <p>
                        Вербальный посыл второго концепта: название водки «Белогор», надпись
                        на колпаке «пропитана смелостью и азартом, наполняет жизнь вкусом
                        острых ощущений», надпись на колпаке сверху «твоя история».
                    </p>
                    <p>
                        <span>Линейка водки «Белогор» меняет только цвет</span> (синий, серебро, фиолетовый),
                        что <span>оставляет за дизайном узнаваемость,</span> и подчеркнет ее на полке среди конкурентов.
                    </p>
                </div>
                <span class="read-more-btn">Читать дальше</span>
            </div>
        </div>
    </div>

    <div class="gl-container">
        <h2 class="h2-title">Концепт «Меч»</h2>
    </div>
    <div class="image-container">
        <img src="/images/portfolio/belogor/belogor-3.jpg" alt="belogor-picture" title="Водка исторический дизайн">
    </div>
    <div class="image-container">
        <img src="/images/portfolio/belogor/belogor-4.jpg" alt="belogor-picture" title="Меч на этикетке">
    </div>

    <div class="info-block-container">
        <div class="gl-container">
            <div class="info-left">
                <h3 class="info-left-title">Концепт "Патриотизм"</h3>
            </div>
            <div class="info-right">
                <p>
                    <span>Третий концепт, одержавший победу — концепт «Патриотизм».</span> Совершенно новая
                    и <span>уникальная форма бутылки: классическая квадратная бутылка с приталенностью
                    в нижней трети,</span> уникальный рисунок в виде холмов и деревьев, идущий снизу по
                    кругу бутылки, <span>скошенные плечики и чуть округлые бока.</span>
                </p>
                <div class="for-read-more">
                    <p>
                        Позиционирование, линейка наименования и уникальное торговое предложение
                        используется такие же, как в предыдущем варианте: патриотизм и экологичность.
                        Однако во втором варианте суть утп раскрывается на главной этикетке.
                    </p>
                    <p>
                        <span>Вербальный посыл данного концепта: «натуральная водка» — косвенный намек
                            на экологичность,</span>
                        <a class="gl-link" href="https://koloro.ua/razrabotka-logotipa.html" target="_blank">
                            название-логотип
                        </a> «Белогор», написанное уникальным шрифтом,
                        «GENUINE BELGOROD PRODUCT» (подлинно Белгородский продукт) — указание на то,
                        что это Белгородский продукт, намек на то, что водка идет на экспорт.
                    </p>
                </div>
                <span class="read-more-btn">Читать дальше</span>
            </div>
        </div>
    </div>

    <div class="gl-container">
        <h2 class="h2-title">Концепт «Патриотизм»</h2>
    </div>
    <div class="image-container">
        <img src="/images/portfolio/belogor/belogor-4.jpg" alt="belogor-picture" title="Упаковка для водки Белогор">
    </div>

    <div class="info-block-container">
        <div class="gl-container">
            <div class="info-left">
                <h3 class="info-left-title">Результат</h3>
            </div>
            <div class="info-right">
                <p>
                    Новый
                    <a class="gl-link" href="https://koloro.ua/dizajn-vodki.html" target="_blank">
                        уникальный дизайн водки
                    </a> «Белогор» получился очень яркими, харизматичными
                    и узнаваемыми, что не осталось незамеченным целевой аудиторией. Водочный <span>бренд
                    «Белогор» получил «новую жизнь» и большой всплеск спроса.</span> А главное новый дизайн
                    позволил добиться признания торговой марки как «символа» Белгородской области,
                    многие специализированные российские издания отметили «Белогор» как «подлинно
                    Белгородский продукт».
                </p>
            </div>
        </div>
    </div>

    <div class="gl-container">
        <h2 class="h2-title">Концепт, одержавший победу</h2>
    </div>
    <div class="image-container">
        <img src="/images/portfolio/belogor/belogor-5.jpg" alt="belogor-picture" title="Бренд водки Белогор">
    </div>

    <div class="info-block-container">
        <div class="gl-container">
            <div class="info-left">
                <h3 class="info-left-title">Резюме</h3>
            </div>
            <div class="info-right">
                <p>
                    Бренд с харизмой и уникальным дизайном всегда узнаем и популярен.
                    Такой бренд призван носить «корону на голове» и привлекать внимание.
                    Брендинговое агентство
                    <a class="gl-link" href="https://koloro.ua" target="_blank">
                        KOLORO
                    </a> точно знает как создать оригинальный
                    бренд с «королевскими амбициями».
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
