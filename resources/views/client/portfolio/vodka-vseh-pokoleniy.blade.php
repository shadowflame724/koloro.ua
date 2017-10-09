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


<section id="vodka-vseh-pokoleniy">
    <div class="bg-container top-container" style="background-image: url('/images/portfolio/vodka-vseh-pokoleniy/vodka-vseh-pokoleniy-4.jpg')">
        <div class="dark-mask"></div>
        <div class="gl-container title-container">
            <h1 class="top-title">
                Водка Всех Поколений, «ВВП»
            </h1>
            <h2 class="top-title-small">
                «Лидерство, качество и
                технологическое превосходство»
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
                    <span>Федеральная продуктовая компания</span> — молодая, современная и динамично
                    развивающаяся — значимый игрок на рынке алкогольной продукции России
                    и <span>ведущая компания Ленинградской области и города Санкт-Петербург.</span>
                    В своем продуктовом портфеле компания имеет немало известных водочных,
                    винных, коньячных и других алкогольных брендов — «Скандинавия». «Тысяча озер»,
                    «Национальный лидер» и т.д. <span>Одной из последних новинок компании стал водочных
                    бренд ВВП (Водка Всех Поколений).</span>
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
                    <a class="gl-link" href="https://koloro.ua/sozdanie-brenda.html" target="_blank">
                        Создание бренда с нуля
                    </a>
                    всегда требует приложения больших усилий.
                    Это и маркетинговые исследования рынка, <span>проведение опросов, разработка
                    дизайна этикетки, колпака, логотипа и геометрии бутылки, уникального
                    торгового предложения и позиционирования, и многое другое.</span>
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
                <h3 class="info-left-title">Дизайн бутылки водочного бренда</h3>
            </div>
            <div class="info-right">
                <p>
                    Работа над проектом началась с создания
                    <a class="gl-link" href="https://koloro.ua/dizajn-vodki.html" target="_blank">
                        дизайна бутылки водки</a> <span>ВВП</span>,
                    которая подчеркивает статус, благородство и величие продукта. После
                    того как была разработана форма бутылки, было создано <span>3 варианта дизайна
                    этикетки.</span> Каждый дизайн имеет свое уникальное торговое предложение и
                    позиционирование. Под каждый концепт была создана <span>уникальная линейка наименований и свой логотип.</span>
                </p>
            </div>
        </div>
    </div>

    <div class="gl-container">
        <h2 class="h2-title">Дизайн бутылки водки ВВП</h2>
    </div>
    <div class="image-container">
        <img src="/images/portfolio/vodka-vseh-pokoleniy/vodka-vseh-pokoleniy-1.jpg" alt="vodka-vseh-pokoleniy-picture"
             title="Дизайн бутылки водки">
    </div>

    <div class="gl-container">
        <h2 class="h2-title">Дизайн этикетки и УТП (уникальное торговое предложение)</h2>
    </div>

    <div class="info-block-container">
        <div class="gl-container">
            <div class="info-left">
                <h3 class="info-left-title">Концепт "Народный"</h3>
            </div>
            <div class="info-right">
                <p>
                    Концепт «Народный» <span>основан на потребности единения с природой.</span> Этот вариант
                    дизайна этикетки указывает на натуральность и природность продукта.
                </p>
                <p>
                    <span>В качестве элементов дизайна,</span> которые задают единую коммуникацию концепту, были выбраны:
                </p>
                <div class="for-read-more">
                    <ol>
                        <li>
                            <span>Концентрические кольца дерева</span> — говорят о годах и поколениях;
                        </li>
                        <li>
                            <span>Акварельные краски</span> — природность и естественность;
                        </li>
                        <li>
                            <span>Крупное название «Водка всех поколений»</span> — как заголовок книги о легендах;
                        </li>
                        <li>
                            <span>Природные фактуры и заливки</span> всех плашек и площадок дизайна;
                        </li>
                        <li>
                            <span>Логотип в виде листа/дерева.</span>
                        </li>
                    </ol>
                    <p>
                        <a class="gl-link" href="https://koloro.ua/unikalnoe-torgovoe-predlozhenie.html" target="_blank">
                            Уникальное торговое предложение:
                        </a> «на мягких сортах пшеницы»,
                        «выдержка на дубовой коре». Опрос фокус-групп показал, что
                        потребители отмечают данный концепт как ностальгический и душевный.
                    </p>
                </div>
                <span class="read-more-btn">Читать дальше</span>
            </div>
        </div>
    </div>

    <div class="gl-container">
        <h2 class="h2-title">Концепт «Народный»</h2>
    </div>
    <div class="image-container">
        <img src="/images/portfolio/vodka-vseh-pokoleniy/vodka-vseh-pokoleniy-2.jpg" alt="vodka-vseh-pokoleniy-picture"
             title="Деревья на этикетке">
    </div>

    <div class="info-block-container">
        <div class="gl-container">
            <div class="info-left">
                <h3 class="info-left-title">Концепт "Время"</h3>
            </div>
            <div class="info-right">
                <p>
                    Концепт «Время» <span>призван зацепить эмоции, связанные с желанием потребителей быть
                    экспертами,</span> знатоками.
                    <a class="gl-link" href="https://koloro.ua/pozicionirovanie-brenda.html" target="_blank">
                        Позиционирование продукта</a> – для интеллигентов, тех, кто
                    считает себя мудрым, проницательным, или тех, кто просто доволен качеством своей жизни.
                </p>
                <div class="for-read-more">
                    <p>
                        <span>Линейка наименований: классика и модерн.</span> Крупным <span>идентифицирующим элементом</span> на
                        этикетке и пятаке колпака <span>является циферблат часов,</span> цифры которого меняются в
                        линейке. <span>Часы – это узнаваемый и нетривиальный элемент.</span>
                    </p>
                    <p>
                        Притягивает на себя внимание фон этикетки, выполненный в виде ромбовидной сетки.
                        <span>Фон этикетки – объемный и обладает тактильными свойствами.</span> Для большего привлечения
                        внимания можно выполнить данный фон контрастом матового и глянцевого лака, либо
                        поднять сетку конгревом, либо скомбинировать оба метода. Название написано большими
                        контрастными буквами, благодаря чему легко читается даже на большом расстоянии.
                    </p>
                </div>
                <span class="read-more-btn">Читать дальше</span>
            </div>
        </div>
    </div>

    <div class="gl-container">
        <h2 class="h2-title">Концепт «Время»</h2>
    </div>
    <div class="image-container">
        <img src="/images/portfolio/vodka-vseh-pokoleniy/vodka-vseh-pokoleniy-3.jpg" alt="vodka-vseh-pokoleniy-picture"
             title="Дизайн водки часы">
    </div>

    <div class="info-block-container">
        <div class="gl-container">
            <div class="info-left">
                <h3 class="info-left-title">&nbsp;</h3>
            </div>
            <div class="info-right">
                <p>
                    Оба концепта хороши и уникальны, однако <span>заказчик утвердил концепт Кубок.</span>
                </p>
            </div>
        </div>
    </div>

    <div class="info-block-container">
        <div class="gl-container">
            <div class="info-left">
                <h3 class="info-left-title">Концепт "Кубок"</h3>
            </div>
            <div class="info-right">
                <p>
                    Данный <span>концепт основан на первенстве и лидерстве.</span> Позиционирование водки — для людей,
                    ориентированных на статус. Дизайн этикетки выглядит современным. <span>Этикетка выполнена в
                    виде кубка.</span> Такая длинная этикетка, блеск и контраст цветов однозначно привлекут
                    внимание потребителей на полке.
                </p>
                <div class="for-read-more">
                    <p>
                        <span>Центральным элементом этикетки является огромная единица.</span> Опрос фокус-групп показал,
                        что потребители воспринимают дизайн продукта как строгий и деловой. Многократно
                        прозвучало слово «президентская».
                    </p>
                    <p>
                        <span>Ключевым моментом концепта может стать тактильное восприятие продукта.</span>
                        Половина этикетки — это текстура, которую необходимо делать рельефной
                        и объемной, для прочного позиционирования продукта как технологичного,
                        качественного, обладающего неоспоримым доверием.
                    </p>
                    <p>
                        <span>Цвет этикетки – цвет драгоценных металлов</span> (золото, серебро) — максимально
                        подчеркивает тему лидерства и успеха. Цвет находит свое продолжение в линейке
                        наименований: золотая, серебряная. Все элементы этикетки дополняют друг друга,
                        создают сильную коммуникацию «лидерства и технологического превосходства».
                        Такая коммуникация уникальна и соответствует потребностям.
                    </p>
                </div>
                <span class="read-more-btn">Читать дальше</span>
            </div>
        </div>
    </div>

    <div class="gl-container">
        <h2 class="h2-title">Концепт "Кубок"</h2>
    </div>
    <div class="image-container">
        <img src="/images/portfolio/vodka-vseh-pokoleniy/vodka-vseh-pokoleniy-4.jpg" alt="vodka-vseh-pokoleniy-picture"
             title="Дизайн водки ВВП">
    </div>

    <div class="info-block-container">
        <div class="gl-container">
            <div class="info-left">
                <h3 class="info-left-title">Результат</h3>
            </div>
            <div class="info-right">
                <p>
                    Новый водочный бренд «ВВП» уже находится в свободной продаже на территории
                    Ленинградской области и города Санкт-Петербурга. <span>Водка Всех Поколений —
                    статусная и качественная водка-лидер</span> получила не только признание со стороны
                    потребителей, но и высокие оценки российских экспертов.
                </p>
            </div>
        </div>
    </div>

    <div class="gl-container">
        <h2 class="h2-title">Концепт — Победитель</h2>
    </div>
    <div class="image-container">
        <img src="/images/portfolio/vodka-vseh-pokoleniy/vodka-vseh-pokoleniy-5.jpg" alt="vodka-vseh-pokoleniy-picture"
             title="Водка ВВП дизайн">
    </div>

    <div class="info-block-container">
        <div class="gl-container">
            <div class="info-left">
                <h3 class="info-left-title">Резюме</h3>
            </div>
            <div class="info-right">
                <p>
                    Сегодня брендинг — та самая волшебная палочка, которая превращает обыкновенный
                    продукт в бренд «с королевскими амбициями». Наше
                    <a class="gl-link" href="https://koloro.ua" target="_blank">
                        брендинговое агентство KOLORO
                    </a> с удовольствием поможет вам в создании успешного бренда-лидера!
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