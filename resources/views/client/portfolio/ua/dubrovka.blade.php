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


    <section id="dubrovka" class="portfolio-page non-unique-page">
    <div class="bg-container top-container" style="background-image: url('/images/portfolio/dubrovka/dubrovka-8.jpg')">
        <div class="dark-mask"></div>
        <div class="gl-container title-container">
            <h1 class="top-title">
                Водка Дубровка
            </h1>
            <h2 class="top-title-small">
                «Юмор – самый лучший способ
                заинтересовать потребителя»
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
                    <span>История торговой марки «Дубровка» напрямую связана с группой компаний
                        «Торал-Групп»</span>, основанной в 1998 году. «Торал-Групп» — известный импортер
                    крепкого алкоголя и иностранных вин, компания является дистрибьютором
                    алкогольных напитков из Шотландии, Испании, Франции, Аргентины, Германии
                    и других стран. Несколько лет назад <span>«Торал-Групп» представил отечественному
                    рынку ряд собственных  водочных торговых марок</span>, таких как <span>«Nord Standard»,
                    «Пшеничный дар» и «Дубровка»</span>. Новинки  стали весьма перспективными торговыми
                    марками благодаря современным технологиям производства, профессионализму
                    и техническому арсеналу компании-производителя.
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
                    Руководство компании «Торал-Групп» приняло решение о создании нового бренда
                    и даже предпринимало попытки по разработке дизайна водки, кроме того было
                    точно определено название нового продукта — «Дубровка». Необходим был
                    <span>брендинг «с нуля» — создать колоритный народный бренд, подчеркнув
                        экологичность продукта</span>. Разработать
                    <a class="gl-link" href="https://koloro.ua/novyj-dizajn-upakovki.html" target="_blank">
                        дизайн упаковки
                    </a> и <span>концепцию позиционирования</span>,
                    <a class="gl-link" href="https://koloro.ua/nejming.html" target="_blank">
                        создать линейку наименований
                    </a> и получить успешный востребованный бренд.
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
                <h3 class="info-left-title">Изучения целевой аудитории. Анализ конкурентов</h3>
            </div>
            <div class="info-right">
                <p>
                    Работа над проектом началась с
                    <a class="gl-link" href="https://koloro.ua/razrabotka-marketingovoj-strategii.html" target="_blank">
                        исследования рынка
                    </a> и <span>изучения предпочтений современного потребителя на рынке алкогольной
                    продукции</span>. Результаты исследований
                    показали, что отечественные <span>потребители лояльны к водочным торговым маркам с
                    национальными</span> и близкими по колориту нашему народу <span>мотивами</span>. Кроме того,
                    наш <span>потребитель ищет натуральный природный продукт.</span>
                </p>
            </div>
        </div>
    </div>

    <div class="info-block-container">
        <div class="gl-container">
            <div class="info-left">
                <h3 class="info-left-title">Дизайн упаковки и позиционирование</h3>
            </div>
            <div class="info-right">
                <p>
                    В процессе выполнения работы было предложено несколько концептов дизайна упаковки
                    и вариантов позиционирования бренда.
                </p>
                <p>
                    Дизайн-концепт с использованием изображения многолетнего могучего дуба,
                    мудрого и вечного, такого традиционного для нашего народа и ностальгический
                    концепт по мотивам советских кинофильмов получили немалый отклик аудитории.
                </p>
            </div>
        </div>
    </div>

    <div class="info-block-container">
        <div class="gl-container">
            <div class="info-left">
                <h3 class="info-left-title">Концепт №1 - "Ностальгический"</h3>
            </div>
            <div class="info-right">
                <p>
                    <span>Ключевые слова концепта</span>:  ностальгия, кино-классика,
                    такси на дубровку, флирт, отдых, стиляги.
                </p>
                <p>
                    Согласно проведенному опросу, "ностальгическая" упаковка навевает потребителю
                    ассоциации с фильмом «Бриллиантовая рука» 60-е года и со стилем субкультуры
                    «стиляги» конца 50-х годов. <span>Ностальгическую тему дополняет форма бутылки</span>,
                    которая соответствует советской эпохе.
                </p>
            </div>
        </div>
    </div>

    <div class="info-block-container">
        <div class="gl-container">
            <div class="info-left">
                <h3 class="info-left-title">Идентифицирующие элементы:</h3>
            </div>
            <div class="info-right">
                <ol>
                    <li>
                        Основной идентифицирующий элемент <span>желто-зеленоватый фон</span> — это уникальный цвет,
                        который выделяет продукт на полке.  Похожее сочетание цветов не использует никто
                        из конкурентов. Водка дубровка будет выделяться на полке среди конкурентов.
                    </li>
                    <li>
                        <span>Автомобиль «Волга», таксист и красивая девушка.</span> Стилистика и сюжет изображения
                        обращают нас в прошлое. Также есть ассоциации с фильмом «Бриллиантовая рука».
                    </li>
                    <li>
                        <span>Написание названия на цветной сменной полоске.</span> Поможет потребителю четко
                        идентифицировать каждую из позиций линейки на витрине.
                    </li>
                </ol>
            </div>
        </div>
    </div>

    <div class="info-block-container">
        <div class="gl-container">
            <div class="info-left">
                <h3 class="info-left-title">Линейка наименований:</h3>
            </div>
            <div class="info-right">
                <p>
                    Наименования линейки  — это слова, которые соответствуют духу советской эпохи,
                    а также относятся к географии, где будет распространяться продукт.
                </p>
                <ol>
                    <li>
                        Буфетная
                    </li>
                    <li>
                        Светская
                    </li>
                    <li>
                        Комиссионная
                    </li>
                </ol>
            </div>
        </div>
    </div>

    <div class="gl-container">
        <h2 class="h2-title">Концепт "Ностальгический"</h2>
    </div>
    <div class="image-container">
        <img src="/images/portfolio/dubrovka/dubrovka-1.jpg" alt="dubrovka-picture">
    </div>
    <div class="image-container">
        <img src="/images/portfolio/dubrovka/dubrovka-2.jpg" alt="dubrovka-picture">
    </div>

    <div class="info-block-container">
        <div class="gl-container">
            <div class="info-left">
                <h3 class="info-left-title">Концепт №2 — "Дерево"</h3>
            </div>
            <div class="info-right">
                <p>
                    В основу концепта заложен следующий <span>ассоциативный ряд: природа, экология, дуб, натуральный.</span>
                </p>
                <p>
                    Продукт, направленный на мужчин мягких, чутких, ценящих близость к природе.
                    Для них наиболее ценными являются такие качества продукта, как экологическая
                    чистота, натуральность продукта,  а также традиционность рецептуры изготовления.
                </p>
                <p>
                    <span>Центральными элементом на этикетке выступает зеленый дуб.</span> Данный элемент
                    в сознании русского человека <span>ассоциируется с вечностью, мудростью, традициями,
                    стабильностью, мощностью, долголетием и мужской силой.</span>
                </p>
            </div>
        </div>
    </div>

    <div class="info-block-container">
        <div class="gl-container">
            <div class="info-left">
                <h3 class="info-left-title">Идентифицирующие элементы:</h3>
            </div>
            <div class="info-right">
                <ol>
                    <li>
                        Уникальный <span>рисунок дуба.</span>
                    </li>
                    <li>
                        Уникальное написание названия с <span>использованием оригинального шрифта.</span>
                    </li>
                    <li>
                        <span>Фактурная основа этикетки</span> — необычный фон, площадка для полиграфических «наворотов».
                    </li>
                </ol>
            </div>
        </div>
    </div>

    <div class="info-block-container">
        <div class="gl-container">
            <div class="info-left">
                <h3 class="info-left-title">Линейка наименований:</h3>
            </div>
            <div class="info-right">
                <p>
                    Представленная линейка наименований полностью отражает настроение, которое создано
                    этикеткой — вечность, природность, традиционность, мудрость.
                </p>
                <ol>
                    <li>
                        Мягкая;
                    </li>
                    <li>
                        Золотая;
                    </li>
                    <li>
                        Классическая.
                    </li>
                </ol>
            </div>
        </div>
    </div>

    <div class="gl-container">
        <h2 class="h2-title">Концепт "Дерево"</h2>
    </div>
    <div class="image-container">
        <img src="/images/portfolio/dubrovka/dubrovka-3.jpg" alt="dubrovka-picture">
    </div>
    <div class="image-container">
        <img src="/images/portfolio/dubrovka/dubrovka-4.jpg" alt="dubrovka-picture">
    </div>

    <div class="info-block-container">
        <div class="gl-container">
            <div class="info-left">
                <h3 class="info-left-title">&nbsp;</h3>
            </div>
            <div class="info-right">
                <p>
                    Однако по результатам тестирования на фокус-группах
                    <span>бесспорным лидером стал концепт «Кабанчик и желуди».</span>
                </p>
            </div>
        </div>
    </div>

    <div class="info-block-container">
        <div class="gl-container">
            <div class="info-left">
                <h3 class="info-left-title">Концепт №3 — "Кабанчик и желуди"</h3>
            </div>
            <div class="info-right">
                <p>Для создания этого <span>богатого, колоритного, оптимистичного и дорогостоящего концепта
                    были выбраны следующие ключевые слова: дуб, желудь, кабан, лес, природа.</span> Проходя
                    такую цепочку ассоциаций, у потребителя, через необходимость обдумывания увиденного,
                    усиливается степень восприятия текстовой информации и названия, и, тем самым, запоминаемость. В основу концепта заложен следующий ассоциативный ряд: природа, экология, дуб, натуральный.
                </p>
                <div class="for-read-more">
                    <p>
                        При разработке визуальной идентификации нового бренда необходимо было подчеркнуть
                        его самобытность и природную чистоту продукта.  Сегодня потребитель предъявляет
                        серьезные требования к натуральности и экологичности алкогольной продукции. Именно
                        поэтому настроение природности, которое создают желуди, дополняет зеленый дубовый лист.
                    </p>
                    <p>
                        <span>Изображение «веселой свинки», используемое в дизайне <span>предает концепту юмористический
                            оттенок. Юмор – самый лучший способ заинтересовать потребителя.</span> Ведь информация о
                        бренде, сделанном с юмором, лучше передается по «сарафанному радио» народных предпочтений.
                    </p>
                    <p>
                        Дополнительную коммуникацию с потребителем создает <span>бирка на горлышке бутылки –
                        ароматизированный «сувенир»,</span> привлекающий внимание потребителей и провоцирующий
                        повторную покупку. <span>Фактурная рябь на фоне этикетки</span> — уникальна и запоминающаяся,
                        разработанная также для дальнейшего использования в рекламе и
                        <a class="gl-link" href="https://koloro.ua/pos-materialy.html" target="_blank">
                            пос-материалах
                        </a>. При разработке дизайн-концепта за основу была взята готовая бутылка из свободной
                        продажи с укупоркой колпаком типа «кепка».
                    </p>
                </div>
                <span class="read-more-btn">Читать дальше</span>
            </div>
        </div>
    </div>

    <div class="gl-container">
        <h2 class="h2-title">Концепт "Кабанчик и желуди"</h2>
    </div>
    <div class="image-container">
        <img src="/images/portfolio/dubrovka/dubrovka-5.jpg" alt="dubrovka-picture">
    </div>
    <div class="image-container">
        <img src="/images/portfolio/dubrovka/dubrovka-6.jpg" alt="dubrovka-picture">
    </div>

    <div class="gl-container">
        <h2 class="h2-title">POS-материалы для водки "Дубровка"</h2>
    </div>
    <div class="image-container">
        <img src="/images/portfolio/dubrovka/dubrovka-7.jpg" alt="dubrovka-picture">
    </div>

    <div class="info-block-container">
        <div class="gl-container">
            <div class="info-left">
                <h3 class="info-left-title">УТП (уникальное торговое предложение)</h3>
            </div>
            <div class="info-right">
                <p>
                    <a class="gl-link" href="https://koloro.ua/unikalnoe-torgovoe-predlozhenie.html" target="_blank">
                        Концепция позиционирования и УТП
                    </a> были построены на идее <span>использования
                    желудевой муки в качестве природного бонификатора вкуса,</span> либо возможность
                    применения желудей, как основного сырья для водки вместо зерновых. Сами по
                    себе желуди имеют огромное количество полезных свойств, таким образом, УТП
                    по концепту «Кабанчик и желудь» имеет реально осязаемые технологические
                    перспективы для разработки выгодной технологии массового производства.
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
                    Новый водочный бренд «Дубровка» уже находится в свободной продаже.
                    Несмотря на «молодость» торговой марки, она успела завоевать признание
                    потребителей и почетное место на российском рынке алкогольной продукции.
                    <span>Новизна и самобытность бренда привлекла большое число лояльных потребителей.
                        Эксперты отмечают ТМ «Дубровку» как «технологически революционный» и перспективный бренд.</span>
                </p>
            </div>
        </div>
    </div>

    <div class="gl-container">
        <h2 class="h2-title">Концепт — Победитель</h2>
    </div>
    <div class="image-container">
        <img src="/images/portfolio/dubrovka/dubrovka-8.jpg" alt="dubrovka-picture">
    </div>

    <div class="gl-container">
        <h2 class="h2-title">Этикетки для водки Дубровка</h2>
    </div>
    <div class="image-container">
        <img src="/images/portfolio/dubrovka/dubrovka-9.jpg" alt="dubrovka-picture">
    </div>

    <div class="gl-container">
        <h2 class="h2-title">Бутылка водки "Дубровка"</h2>
    </div>
    <div class="image-container">
        <img src="/images/portfolio/dubrovka/dubrovka-10.JPG" alt="dubrovka-picture">
    </div>

    <div class="info-block-container">
        <div class="gl-container">
            <div class="info-left">
                <h3 class="info-left-title">Резюме</h3>
            </div>
            <div class="info-right">
                <p>
                    Юмористический оттенок, как в дизайне упаковки, так и в концепции
                    позиционирования бренда в целом — не новый, но практически всегда
                    успешный вариант. Создать самобытный и колоритный бренд вам с
                    удовольствием помогут специалисты компании
                    <a class="gl-link" href="https://koloro.ua/" target="_blank">
                        KOLORO
                    </a>.
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