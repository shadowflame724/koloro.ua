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
    <link rel="stylesheet" href="/css/portfolio-main.css">

@stop


@section('page-content')

    <!--PRELOADER!!! -->
    <div id="preloader"></div>

    @include('layouts.whiteheader')

<section id="chistaya-pravda">
    <div class="bg-container top-container" style="background-image: url('/files/images/portfolio/chistaya-pravda/main-picture.jpg')">
        <div class="dark-mask"></div>
        <div class="gl-container title-container">
            <h1 class="top-title">
                Чистая правда
            </h1>
            <h2 class="top-title-small">
                «Нет ничего слаще, чем свет правды»
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
                    <span>ТМ «Чистая правда» — новый</span>
                    <a class="gl-link" href="https://koloro.ua/dizajn-vodki.html" target="_blank">
                        водочный бренд
                    </a>, задуманный как <span>локальный бренд.</span>
                    Сегодня — это перспективный и востребованный продукт на российском алкогольном рынке.
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
                    <span>Создание нового бренда</span> — непростая и дорогостоящая работа.
                    Однако, исходя из бюджета заказчика и того, что данная водка
                    будет продаваться в эконом сегменте, необходимо было разработать
                    новый бренд, <span>дизайн этикетки, концепцию позиционирования и УТП,
                    продумать укупорку бутылки</span> с минимальными затратами.
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
                <h3 class="info-left-title">Этапы разработки бренда. Ценовой сегмент - эконом</h3>
            </div>
            <div class="info-right">
                <p>
                    Проект стартовал с разработки дизайна этикетки. Исходя из ограниченного бюджета,
                    заказчику <span>была предложена готовая бутылка, находящаяся в свободной продаже,
                    стандартной округлой формы.</span> В процессе работы над проектом было создано несколько
                    вариантов дизайна этикетки и колпака.
                </p>
            </div>
        </div>
    </div>

    <div class="gl-container">
        <h2 class="h2-title">Дизайн этикетки и колпака</h2>
    </div>

    <div class="info-block-container">
        <div class="gl-container">
            <div class="info-left">
                <h3 class="info-left-title">Концепт №1 — "Полярный"</h3>
            </div>
            <div class="info-right">
                <p>
                    <span>Разработанный концепт «Полярный»</span> ориентирован на широкую категорию потребителей,
                    которых можно охарактеризовать, как <span>«Искатели приключений».</span> В качестве <span>идентифицирующих
                    элементов</span> были выбраны: <span>серо-голубоватый цвет этикетки, портрет исследователя на значке
                    вверху бутылки, иллюстрация полярной экспедиции.</span>
                </p>
                <p>
                    Опрос фокус-групп показал, что такой
                    <a class="gl-link" href="https://koloro.ua/novyj-dizajn-upakovki.html" target="_blank">
                        дизайн упаковки
                    </a> воспринимается как
                    "дизайн из прошлого", что особенно подчеркивается плакатной стилистикой
                    изображения, шрифтами "советских времен" и удачно сочетается с простой формой бутылки.
                    Ключевые слова концепта:  чистота, далекое путешествие, снег, холод,
                    мужество, неведомое, пробивная сила.
                </p>
                <div class="for-read-more">
                    <p>
                        <span>Линейка наименований:</span>
                    </p>
                    <ol>
                        <li>Полярная</li>
                        <li>Отважная</li>
                        <li>Неведомая</li>
                    </ol>
                </div>

                <span class="read-more-btn">Читать дальше</span>
            </div>
        </div>
    </div>

    <div class="gl-container">
        <h2 class="h2-title">Концепт "Полярный"</h2>
    </div>

    <div class="image-container">
        <img src="/files/images/portfolio/chistaya-pravda/vodka-picture-1.jpg" alt="chistaya-pravda-picture">
    </div>

    <div class="image-container">
        <img src="/files/images/portfolio/chistaya-pravda/vodka-picture-2.jpg" alt="chistaya-pravda-picture">
    </div>

    <div class="info-block-container">
        <div class="gl-container">
            <div class="info-left">
                <h3 class="info-left-title">Концепт №2 - "Рыбак"</h3>
            </div>
            <div class="info-right">
                <p>
                    Однако, по окончанию проекта <span>победу одержал иной концепт</span> — «Рыбак».
                    <span>Концепт «Рыбак»</span> позиционируется для широкой аудитории потребителей,
                    которым важно общение и дружеские отношения, которые хотят быть частью компании.
                    Такое позиционирование для водки - самое удачное и самое востребованное.
                    Опрос фокус-групп показал, что потребители воспринимают данный <span>концепт,
                    как «жизненный», веселый и юморной.</span> Потребители <span>описывают концепт такими
                    словами: юмор, отдых, общение, доверие.</span> Поэтому тема рыбалки выбрана нами
                    сознательно. Рыбалка - это лучший предлог для встречи и общения с друзьями.

                </p>
            </div>
        </div>
    </div>

    <div class="info-block-container">
        <div class="gl-container">
            <div class="info-left">
                <h3 class="info-left-title">Идентифицирующие элементы</h3>
            </div>
            <div class="info-right">
                <p>
                    В качестве основных идентифицирующих элементов были выбраны:
                </p>
                <ol>
                    <li>
                        <span>Картина рыбака.</span> Эмоции, передаваемые цветами, техникой изображения,
                        а также мимикой и позой героя, имеют яркий эмоциональный окрас, близкий
                        потребителям водки эконом сегмента.
                    </li>
                    <li>
                        <span>Рыбки</span> сделаны тиснением и смотрятся, как золотые рыбки, исполняющие желания.
                    </li>
                    <li>
                        <span>Бронзовый фон с примесями металла</span> — хорошо узнаваемый издалека.
                    </li>
                </ol>
                <p>
                    При прорисовке множества вариантов дизайна колпака, было решено предложить
                    заказчику в качестве <span>укупорки пробку-камю (Т-образная пробка).</span>
                </p>
            </div>
        </div>
    </div>

    <div class="info-block-container">
        <div class="gl-container">
            <div class="info-left">
                <h3 class="info-left-title">УТП (уникальное торговое предложение)</h3>
            </div>
            <div class="info-right">
                <p>
                    Для данного концепта предложено следующее
                    <a class="gl-link" href="https://koloro.ua/unikalnoe-torgovoe-predlozhenie.html" target="_blank">
                        УТП
                    </a>: технология очистки <span>«Рыбий клей КАРЛУК».</span>
                    Суть технологии: рыбий клей карлук, добавляется
                    в водку растворённым. Клей постепенно превращается в сгустки, оседает
                    и забирает на себя вредные примеси. Технология придумана на Руси в 13-15
                    веках, и имела тогда большую популярность. Но, в связи с постепенной подменой
                    дорогостоящих технологий более дешевыми, очистка водки «оклеиванием» была
                    незаслуженно позабыта русскими изготовителями водки.
                </p>
            </div>
        </div>
    </div>

    <div class="gl-container">
        <h2 class="h2-title">Концепт "Рыбак"</h2>
    </div>

    <div class="image-container">
        <img src="/files/images/portfolio/chistaya-pravda/main-picture.jpg" alt="chistaya-pravda-picture">
    </div>

    <div class="info-block-container">
        <div class="gl-container">
            <div class="info-left">
                <h3 class="info-left-title">Результат</h3>
            </div>
            <div class="info-right">
                <p>
                    Новоиспеченный водочный бренд «Чистая правда» <span>завоевал широкий круг потребителей
                    и весомую долю рынка алкогольной продукции.</span> Позитивный и душевный
                    <a class="gl-link" href="https://koloro.ua/dizajn-jetiketok.html" target="_blank">
                        дизайн этикетки
                    </a>, правильно подобранные идентифицирующие элементы и коммуникационный посыл к аудитории
                    сыграли немалую роль в привлечении покупателей и завоевании их доверия и лояльности.
                    Новый бренд получил высокие оценки экспертов.
                </p>
            </div>
        </div>
    </div>

    <div class="gl-container">
        <h2 class="h2-title">Концепт - Победитель</h2>
    </div>

    <div class="image-container">
        <img src="/files/images/portfolio/chistaya-pravda/vodka-picture-3.jpg" alt="chistaya-pravda-picture">
    </div>

    <div class="info-block-container">
        <div class="gl-container">
            <div class="info-left">
                <h3 class="info-left-title">Резюме</h3>
            </div>
            <div class="info-right">
                <p>
                    <a class="gl-link" href="https://koloro.ua/" target="_blank">
                        Создание бренда
                    </a> — нелегкая задача, но для достижения успеха - необходимая.
                    Продукт "без названия" никогда не будет пользоваться колоссальным успехом,
                    он останется незамеченным. Бренд, причем не просто зарегистрированная торговая марка,
                    а Бренд "с большой буквы" с "королевскими амбицияцими" — не просто прибыльный,
                    он — гарантированный лидер рынка!
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

    <!-- OwlCarousel -->
    <script src="/js/owl.carousel.min.js"></script>
    <!--<script src="../js/owl.lazyload.js"></script>-->

    <!-- SmoothScroll -->
    <!--<script src="../js/SmoothScroll.js"></script>-->
    <script src="../js/viewportchecker.js"></script>

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