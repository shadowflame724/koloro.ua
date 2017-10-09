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

<section id="sretenka">
    <div class="bg-container top-container" style="background-image: url('/images/portfolio/sretenka/sretenka-2.jpg')">
        <div class="dark-mask"></div>
        <div class="gl-container title-container">
            <h1 class="top-title">
                Водка «Сретенка»
            </h1>
            <h2 class="top-title-small">
                «Классический русский напиток
                для душевного застолья»
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
                    Осень 2010 года для <span>Самарского комбината «Родник»</span> ознаменовалась расширением
                    ассортиментного портфеля и появлением <span>нового бренда водки  «Сретенка».</span>
                </p>
                <p>
                    ТМ «Сретенка» - застольный напиток, подчеркивающий самобытность русской
                    кухни и напоминающий традиции пития водки в России.
                </p>
                <p class="for-read-more">
                    Не так давно для укрепления рыночных позиций нового водочного бренда,
                    компания «Родник» приняла решение <span>обновить дизайн водки и провести редизайн
                    этикетки</span> торговой марки «Сретенка».
                </p>
                <span class="read-more-btn">Читать дальше</span>
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
                    Главной задачей проекта стал поиск уникальных идентифицирующих элементов,
                    необходимых для проведения <span>редизайна продукта</span>. А также <span>разработка уникальной
                    технологии печати этикетки</span>.
                </p>
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
                    Работа над проектом началась с проведения <span>маркетингового исследования рынка,
                    анализа конкурентных торговых марок</span> и их дизайн-концептов упаковки, а также
                    с <span>изучения предпочтений целевой аудитории</span>.
                </p>
                <p class="for-read-more">
                    <span>Дизайн водки «Сретенка» выдержан в стиле ретро</span>, обращается к русским традициям
                    душевного застолья, традициям русской кухни — «напиток, придающий особый колорит
                    сытным закускам». Данную
                    <a class="gl-link" href="https://koloro.ua/pozicionirovanie-brenda.html" target="_blank">
                        концепцию позиционирования
                    </a> <span>водочного бренда необходимо было сохранить</span>в процессе проведения
                    редизайна. А также важно было сохранить <span>главное изображение — иллюстрация
                    «праздничного застолья»</span> и текст, отражающий
                    уникальное торговое предложение водочного бренда.
                </p>
                <span class="read-more-btn">Читать дальше</span>
            </div>
        </div>
    </div>

    <div class="gl-container">
        <h2 class="h2-title">До редизайна водка «Сретенка» имела следующий вид:</h2>
    </div>
    <div class="image-container">
        <img src="/images/portfolio/sretenka/sretenka-1.jpg" alt="sretenka-picture">
    </div>

    <div class="info-block-container">
        <div class="gl-container">
            <div class="info-left">
                <h3 class="info-left-title">Новый дизайн этикетки для водочной торговой марки</h3>
            </div>
            <div class="info-right">
                <p>
                    Рестайлинг должен был обновить представление идентификационных элементов в
                    композиции этикетки, подобрать и применить новые уникальные элементы дизайна.
                </p>
                <p>
                    <span>Таким образом, рестайлинг водки включал в себя следующее:</span>
                </p>
                <ol>
                    <li>
                        <a class="gl-link" href="https://koloro.ua/razrabotka-shriftov.html" target="_blank">
                            Разработка уникальных шрифтов
                        </a>;
                    </li>
                    <li>
                        <span>Изменение узора</span> на «точечный», заменивший прежние вертикальные линии;
                    </li>
                    <li>
                        <span>Добавление нового идентификационного элемента</span> —  медалей в нижней части
                        этикетки – «заслуженная награда» традиционного русского напитка, гарантия
                        качества продукта и приятного застолья. В композиции этикетки медали заместили
                        прежний «бутерброд-канапе с селедочкой».
                    </li>
                    <li>
                        <span>Добавление золотых полосок</span> поверху и понизу этикетки, украшающих и увеличивающих
                        по высоте ее размер.
                    </li>
                </ol>
            </div>
        </div>
    </div>

    <div class="image-container">
        <img src="/images/portfolio/sretenka/sretenka-2.jpg" alt="sretenka-picture">
    </div>

    <div class="info-block-container">
        <div class="gl-container">
            <div class="info-left">
                <h3 class="info-left-title">Технология печати этикетки</h3>
            </div>
            <div class="info-right">
                <p>
                    Кроме того, заказчику была предложена <span>особая технология печати этикетки</span>.
                </p>
                <p>
                    Золотой фон можно осветить и сделать чуть светлее за счет добавления
                    прозрачного белого цвета — белого лака и тонера. Или же за счет
                    подкрашивания точек узора полупрозрачным белым или же матовым лаком.
                </p>
                <div class="for-read-more">
                    <p>
                        <span>Точки и элементы медалей (полоски) могут быть выполнены за счет:</span>
                    </p>
                    <ol>
                        <li>
                            Конгрева;
                        </li>
                        <li>
                            Конгрева с подкрашиванием  элемента (на золотых участках);
                        </li>
                        <li>
                            Конгрева с матовым лаком.
                        </li>
                    </ol>
                </div>
                <span class="read-more-btn">Читать дальше</span>
            </div>
        </div>
    </div>

    <div class="image-container">
        <img src="/images/portfolio/sretenka/sretenka-3.jpg" alt="sretenka-picture">
    </div>

    <div class="info-block-container">
        <div class="gl-container">
            <div class="info-left">
                <h3 class="info-left-title">Результат</h3>
            </div>
            <div class="info-right">
                <p>
                    Новый дизайн этикетки не изменил сути продукта, сохранил его позиционирование
                    и основные  идентификационные элементы. <span>Дизайн концепт получил одобрение и
                    был утвержден заказчиком.</span>
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
                    Дизайн бренда может быть простым, но при этом привлекательным и узнаваемым.
                    Отдельные элементы и мелкие детали складываются в единый образ вашего продукта
                    и способствуют его быстрой запоминаемости целевой аудиторией. Поэтому важно
                    продумать каждую деталь и упаковки в целом. И лучше, если этим займутся
                    профессиональные дизайнеры и маркетологи.
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