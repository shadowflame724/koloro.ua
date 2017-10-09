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

    <link rel="stylesheet" href="/css/portfolio/portfolio-lanshmit.css">

@stop


@section('page-content')
@include('layouts.whiteheader')
<!--PRELOADER!!! -->
<div id="preloader"></div>

<!-- section lanshmit starts -->
<section id="lanshmit">

    <div class="bg-container top-container">
        <div class="dark-mask top-mask"></div>

        <div class="gl-container title-container">
            <h1 class="top-title">Ланшмит</h1>
            <h2 class="top-title-small">"дизайн этикетки колбасы за неделю"</h2>
        </div>
    </div>

    <div class="info-block-container">
        <div class="gl-container">
            <div class="info-left">
                <h3 class="info-left-title">Предыстория и задача</h3>
            </div>
            <div class="info-right">
                <p>
                    Компания «Инко-Фуд» была основана в 2001 году, и уже через год она выпустила
                    первую партию мясных продуктов. Сегодня это большое предприятие, которое
                    производит продукцию под двумя марками – «Инко-Фуд» и «Белорусские традиции».
                </p>
                <p class="for-read-more">
                    Представители Бердичевского филиала компании «Инко-Фуд» обратились в
                    брендинговое агентство KOLORO с интересным заданием – разработать дизайн
                    этикетки колбасы и стратегию выхода на рынок всего за 10 дней. Это был
                    сложный и интересный вызов, который мы решили принять.
                </p>
                <span class="read-more-btn">Читать дальше</span>
            </div>
        </div>
    </div>

    <div class="bg-wrapper">
        <div class="bg-container picture-1 height-50-vh"></div>
    </div>

    <div class="info-block-container">
        <div class="gl-container">
            <div class="info-left">
                <h3 class="info-left-title">Этап I – анализ</h3>
            </div>
            <div class="info-right">
                <p>
                    Проект мы традиционно начали с
                    <a class="gl-link" target="_blank" href="https://koloro.ua/kabinetnue-marketingovue-issledovaniya.html">
                        маркетингового исследования
                    </a>
                    колбасного рынка.
                    Колбаса «Ланшмит» относится к эконом-сегменту, так что мы анализировали
                    <a class="gl-link" target="_blank" href="https://koloro.ua/dizajn-upakovki-i-etiketki.html">
                        дизайн этикетки
                    </a>
                    , позиционирование и стратегию продвижения марок в этом сегменте.
                    Оказалось, что большинство колбасных брендов эконом-сегмента используют
                    красный цвет (от светлого до бордового), фасуют продукцию в прозрачную
                    вакуумную гибкую упаковку и наносят узор из
                    <a class="gl-link" target="_blank" href="https://koloro.ua/sozdat-logotip.html">
                        логотипов
                    </a>
                    на всю ее поверхность.
                </p>
                <p class="for-read-more">
                    Ланшмит – бренд с Западной Украины, и у компании широкий рынок сбыта
                    в этом регионе. Поэтому в анализе мы рассмотрели и региональные бренды,
                    которые там распространены.
                </p>
                <span class="read-more-btn">Читать дальше</span>
            </div>
        </div>
    </div>

    <div class="two-images-container up-block-imgs">
        <div class="image-left">
            <img src="/images/portfolio/lanshmit/picture-CA-1.jpg" alt="graphity-image" class="picture-ca">
        </div>
        <div class="image-right">
            <div class="two-images-container">
                <div class="image-left">
                    <img src="/images/portfolio/lanshmit/picture-CA-2.jpg" alt="graphity-image" class="picture-ca">
                </div>
                <div class="image-right">
                    <img src="/images/portfolio/lanshmit/picture-CA-3.jpg" alt="graphity-image" class="picture-ca">
                </div>
            </div>

            <div class="two-images-container">
                <div class="image-left">
                    <img src="/images/portfolio/lanshmit/picture-CA-4.jpg" alt="graphity-image" class="picture-ca">
                </div>
                <div class="image-right">
                    <img src="/images/portfolio/lanshmit/picture-CA-5.jpg" alt="graphity-image" class="picture-ca">
                </div>
            </div>
        </div>
    </div>

    <div class="two-images-container down-block-imgs">
        <div class="image-left">
            <div class="two-images-container">
                <div class="image-left">
                    <img src="/images/portfolio/lanshmit/picture-CA-6.jpg" alt="graphity-image" class="picture-ca">
                </div>
                <div class="image-right">
                    <img src="/images/portfolio/lanshmit/picture-CA-7.jpg" alt="graphity-image" class="picture-ca">
                </div>
            </div>
        </div>

        <div class="image-right">
            <img src="/images/portfolio/lanshmit/picture-CA-8.jpg" alt="graphity-image" class="picture-ca">
        </div>
    </div>

    <div class="info-block-container">
        <div class="gl-container">
            <div class="info-left">
                <h3 class="info-left-title">Этап II – разработка стратегии выхода на рынок</h3>
            </div>
            <div class="info-right">
                <p>
                    Заказчик поставил задачу охватить широкую аудиторию: мужчины и женщины
                    с достатком «средний» и «ниже среднего» от 20 до 65 лет. Чтобы понравиться
                    такой широкой аудитории, мы решили действовать нестандартно.
                    <a class="gl-link" target="_blank" href="https://koloro.ua/blog/brending-i-marketing/kak-sozdat-silnyj-myasnoj-brend-5-proverennyh-sposobov.html">
                        Большинство производителей колбасы
                    </a>
                    эконом-сегмента делают ставку на кричащий красный
                    цвет и простой внешний вид. Мы выбрали другой подход.
                </p>
                <p class="for-read-more">
                    В эконом-сегменте колбасного рынка Украины практически отсутствуют
                    интересные визуальные решения. Мы решили, что дешево – не обязательно
                    значит безвкусно и кричаще. «Ланшмит» – бренд в европейской ретро-стилистике,
                    который вызывает ассоциации с небольшой домашней мясной лавкой. Подчеркнуть
                    эти особенности помогает полосатый паттерн, комбинация белого и красного и
                    улыбчивый мясник в колпаке. Завершает «европейский» образ надпись «smacznego»
                    (с польского – «приятного аппетита»).
                </p>
                <span class="read-more-btn">Читать дальше</span>
            </div>
        </div>
    </div>

    <div class="bg-wrapper">
        <div class="bg-container picture-2 height-50-vh"></div>
    </div>

    <div class="info-block-container">
        <div class="gl-container">
            <div class="info-left">
                <h3 class="info-left-title">Разработка персонажа для логотипа колбасы</h3>
            </div>
            <div class="info-right">
                <p>
                    <a class="gl-link" target="_blank" href="https://koloro.ua/razrabotka-logotipa.html">
                        Логотип
                    </a>
                    сосисок и сарделек «Ланшмит» – стилизованный портрет мясника.
                    Под ним располагается название марки и текстовое пожелание «smacznego».
                    Благодаря такому решению в сознании клиента создается четкая связь между
                    приветливым лицом мастера-мясника и названием бренда. Это способствует
                    налаживанию коммуникации между брендом и потребителем.
                </p>
                <p class="for-read-more">
                    Образом мясника мы хотели подтвердить натуральность продукции «Инко-Фуд»,
                    создать стойкую ассоциацию с домашним качеством, наделить бренд лицом.
                </p>
                <span class="read-more-btn">Читать дальше</span>
            </div>
        </div>
    </div>
    
    <div class="image-container graphity-image-container">
        <div class="graphity-image">
            <img src="/images/portfolio/lanshmit/picture-paper.png" alt="graphity-image" class="picture-paper">
            <img src="/images/portfolio/lanshmit/pencil.png" alt="pencil-image" class="pencil">
        </div>
    </div>

    <div class="image-container logo-animation-cont">
        <img src="/images/portfolio/lanshmit/logo-1.png" alt="pencil-image" class="logo-img">
    </div>

    <div class="info-block-container">
        <div class="gl-container">
            <div class="info-left">
                <h3 class="info-left-title">Разработка концепции дизайна серии этикеток</h3>
            </div>
            <div class="info-right">
                <p>
                    В серии «Ланшмит» предусмотрено 3 вида колбасы и 3 вида сосисок. Для того,
                    чтобы человек мог быстро отличить детскую колбасу от молочной, мы предусмотрели цветовое различие.
                </p>
                <p>
                    Внизу каждой этикетки сосисок и колбасы добавлен паттерн из двухцветных
                    вертикальных линий. Есть комбинация:
                </p>
                <ul>
                    <li>желтого с белым;</li>
                    <li>синего с белым;</li>
                    <li>зеленого с белым.</li>
                </ul>
                <p class="for-read-more">
                    Полосатый узор не выбивается из общей стилистики этикетки и не загромождает пространство.
                </p>
                <span class="read-more-btn">Читать дальше</span>
            </div>
        </div>
    </div>

    <div class="bg-wrapper">
        <div class="bg-container picture-3 height-50-vh"></div>
    </div>

    <div class="bg-container picture-4 height-50-vh">
        <img src="/images/portfolio/lanshmit/logo-4.png" alt="pencil-image" class="logo-4">
    </div>

    <div class="info-block-container red-block-container">
        <div class="gl-container">
            <div class="info-left">
                <h3 class="info-left-title">Авторский надзор за изготовлением первого тиража этикетки</h3>
            </div>
            <div class="info-right">
                <p>
                    Мы предоставляем услугу выезда на производство, чтобы проконтролировать
                    качество первого тиража этикеток и избежать ошибок. Вместе с технологами
                    мы отвечаем за результат – правильно напечатанную
                    <a class="gl-link" target="_blank" href="https://koloro.ua/dizajn-upakovki-i-jetiketki-dlja-linejki.html">
                        серию этикеток
                    </a>.
                </p>
                <p class="for-read-more">
                    Подробнее об этой услуге вы можете прочесть
                    <a class="gl-link" target="_blank" href="https://koloro.ua/pechat-pervogo-tiraja.html">
                        здесь
                    </a>.
                </p>
                <span class="read-more-btn">Читать дальше</span>
            </div>
        </div>
    </div>

    <div class="info-block-container">
        <div class="gl-container">
            <div class="info-left">
                <h3 class="info-left-title">Результаты спустя год</h3>
            </div>
            <div class="info-right">
                <p>
                    Обновленный колбасный бренд «Ланшмит» хорошо стартовал на рынке. Он вырос на
                    9% в продажах и увеличил долю рынка на 7%. Опросы показывают, что бренд нравится
                    потребителям, так как хорошо смотрится на фоне конкурентов.
                </p>
                <p class="for-read-more">
                    Упаковка отлично справляется с задачей мистификации: улыбчивый мясник,
                    удачное сочетание белого и красного, надпись «smacznego», легкая ретро-стилистика –
                    все складывается в завершенный образ качественной колбасы с иностранными корнями.
                    «Ланшмит» значительно отличается от эконом-сегмента украинского колбасного рынка, поэтому
                    продажи растут.
                </p>
                <span class="read-more-btn">Читать дальше</span>
            </div>
        </div>
    </div>

    <div class="bg-wrapper">
        <div class="bg-container picture-5 height-50-vh"></div>
    </div>

    <div class="two-images-container sausages-img-cont">
        <div class="image-left">
            <img src="/images/portfolio/lanshmit/picture-6.jpg" alt="pencil-image" class="picture-6">
        </div>
        <div class="image-right">
            <img src="/images/portfolio/lanshmit/picture-7.jpg" alt="pencil-image" class="picture-7">
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

    <!-- include own JavaScript -->
    <script src="/js/portfolio-main.js"></script>
    <script src="/js/portfolio/portfolio-lanshmit.js"></script>
@stop

