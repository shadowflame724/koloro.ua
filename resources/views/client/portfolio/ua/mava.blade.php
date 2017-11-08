@extends('layouts.client')
@section('page-title', $portfolio->meta->{'title' . $langSuf} )

@section('page-meta')
    <meta name="description" content="{{ $portfolio->meta->{'description' . $langSuf} }}">
    <meta name="keywords" content="{{ $portfolio->meta->{'keywords' . $langSuf} }}">
    <meta property=og:image content="{{ url('images/portfolio') . '/' .$portfolio->image->link }}"/>

@stop

@section('page-style')

    <link rel="stylesheet" href="/css/portfolio-main.css">
    <link rel="stylesheet" href="/css/portfolio/portfolio-mava.css">
@stop


@section('page-content')



    <!--PRELOADER!!! -->
    <div id="preloader"></div>

    @include('layouts.blackheader')

    <section id="portfolio-mava" class="portfolio-page unique-page">
        <div class="top-container">
            <img src="/images/portfolio/mava/coffee-beans-gold.png" alt="coffee-beans" class="coffee-beans-gold">
            <img src="/images/portfolio/mava/coffee-beans-1.png" alt="coffee-beans" class="coffee-beans-1">
            <img src="/images/portfolio/mava/coffee-beans-2.png" alt="coffee-beans" class="coffee-beans-2">
            <img src="/images/portfolio/mava/coffee-beans-gold-3.png" alt="coffee-beans" class="coffee-beans-gold-3">
            <div class="image-container">
                <img src="/images/portfolio/mava/main-image-banner.jpg" alt="main-image-banner.jpg">
            </div>
        </div>

        <div class="info-block-container info-history">
            <div class="gl-container">
                <div class="info-left">
                    <h3 class="info-left-title">Предыстория создания нового кофе</h3>
                </div>
                <div class="info-right">
                    <p>
                        В агентство KOLORO обратился начинающий производитель зернового кофе.
                        Он закупил необходимое оборудование, досконально изучил технологию обжарки
                        зерен и хотел вывести на рынок новый продукт. Наша задача состояла в том,
                        чтобы создать новый бренд, провести нейминг, создать дизайн, разработать
                        позиционирование и УТП.
                    </p>
                </div>
            </div>
        </div>

        <div class="bg-container image-1">
            <img src="/images/portfolio/mava/coffee-beans-gold-2.png" alt="coffee-beans" class="coffee-beans-gold-2">
            <img src="/images/portfolio/mava/coffee-beans-4.png" alt="coffee-beans" class="coffee-beans-4">
            <img src="/images/portfolio/mava/coffee-beans-3.png" alt="coffee-beans" class="coffee-beans-3">
            <img src="/images/portfolio/mava/coffee-beans-gold-4.png" alt="coffee-beans" class="coffee-beans-gold-4">
        </div>

        <div class="bg-container image-2">
            <div class="image-container">
                <img src="/images/portfolio/mava/banner-gold-beans-png.png" alt="coffee-beans" class="banner-gold-beans">
            </div>
        </div>

        <div class="info-block-container">
            <div class="gl-container">
                <div class="info-left">
                    <h3 class="info-left-title">Полноценный анализ рынка кофе Украины</h3>
                </div>
                <div class="info-right">
                    <p>
                        Проведя маркетинговое исследование, маркетологи KOLORO сделали следующие выводы:
                    </p>
                    <ul class="for-read-more">
                        <li>зарубежные производители фасуют зерновой кофе в упаковки 0,5-1 кг, в то время как украинские выбирают упаковки 250-400 г;</li>
                        <li>в ассортименте брендов-конкурентов представлены линейки молотого кофе;</li>
                        <li>рекламные кампании производителей направлены на обеспеченных, социально активных горожан 25-45 лет;</li>
                        <li>постоянные потребители кофе обычно не изменяют любимому продукту, поэтому компании стремятся привлекать клиентов навсегда;</li>
                        <li>элитные производители предпочитают выпускать упаковки с лаконичными и минималистическими дизайнерскими решениями;</li>
                        <li>бренды из низкого и среднего ценового сегмента злоупотребляют изображениями кофейных зерен и дымящихся чашек кофе на упаковке;</li>
                        <li>выигрывают бренды, которые успешно выстраивают коммуникацию с аудиторией.</li>
                    </ul>
                    <span class="read-more-btn">Читать дальше</span>
                </div>
            </div>
        </div>

        <div class="two-images-container">
            <div class="image-left">
                <img src="/images/portfolio/mava/image-table-1.jpg" alt="koloro experts left photo">
            </div>
            <div class="image-right">
                <img src="/images/portfolio/mava/image-table-2.jpg" alt="koloro experts right photo">
            </div>
        </div>

        <div class="info-block-container">
            <div class="gl-container">
                <div class="info-left">
                    <h3 class="info-left-title">Построение стратегии выхода нового кофе</h3>
                </div>
                <div class="info-right">
                    <p>
                        Исходя из результатов исследования, мы предложили выпустить кофе в упаковках
                        по 250-400 г. Причина очевидна: украинские потребители вряд ли купят килограмм
                        кофе неизвестного бренда из средней ценовой категории.
                    </p>
                    <p class="for-read-more">
                        Предусматривалось,
                        что новый продукт будет продаваться в крупной и мелкой рознице (от сетевых
                        супермаркетов до продуктовых лавок). Вектором для разработки УТП и
                        позиционирования стало то, что кофе обжаривается вручную, по старым технологиям.
                    </p>
                    <span class="read-more-btn">Читать дальше</span>
                </div>
            </div>
        </div>

        <div class="two-vertical-images">
            <div class="image-container">
                <img src="/images/portfolio/mava/image-a-1.jpg" alt="experts photo">
            </div>
            <div class="image-container">
                <img src="/images/portfolio/mava/image-a-2.jpg" alt="experts photo">
            </div>
        </div>

        <div class="gl-container">
            <h2 class="h2-title header-black">Нейминг для кофе</h2>
        </div>

        <div class="info-block-container">
            <div class="gl-container">
                <div class="info-left">
                    <h3 class="info-left-title">Мозговой штурм</h3>
                </div>
                <div class="info-right">
                    <p>
                        Для начала креативные сотрудники KOLORO провели мозговой штурм, в ходе которого
                        определили ассоциации, связанные с кофе. Самые распространенные — утро, бодрость,
                        Париж, уличные кафе, теплота, забота, сигареты. Этот ассоциативный ряд стал
                        отправной точкой для нейминга.
                    </p>
                </div>
            </div>
        </div>

        <div class="two-images-container">
            <div class="image-left">
                <img src="/images/portfolio/mava/naming-1.jpg" alt="naming photo">
            </div>
            <div class="image-right">
                <img src="/images/portfolio/mava/naming-2.jpg" alt="naming photo">
            </div>
        </div>

        <div class="two-images-container">
            <div class="image-left">
                <img src="/images/portfolio/mava/naming-3.jpg" alt="naming photo">
            </div>
            <div class="image-right">
                <img src="/images/portfolio/mava/naming-4.jpg" alt="naming photo">
            </div>
        </div>

        <div class="info-block-container">
            <div class="gl-container">
                <div class="info-left">
                    <h3 class="info-left-title">Сбор вариантов</h3>
                </div>
                <div class="info-right">
                    <p>
                        Нейминг проходил в несколько этапов, и всего было представлено более 500 вариантов.
                        После первого этапа клиент выделил самые яркие предложения и выразил пожелания.
                        Ему понравились варианты, связанные с традициями и ритуалами Южной Америки;
                        украинские слова с экзотическим звучанием; названия, которые подчеркивают премиальность продукта.
                    </p>
                </div>
            </div>
        </div>

        <div class="info-block-container">
            <div class="gl-container">
                <div class="info-left">
                    <h3 class="info-left-title">Тестирование на ЦА</h3>
                </div>
                <div class="info-right">
                    <p>
                        Выбранный пул названий был протестирован на представителях целевой аудитории.
                        Выяснилось, что больше всего положительных ассоциаций у потенциальных потребителей
                        вызывает вариант MAVA. К тому же после тестирования был проведен опрос. Оказалось,
                        что данное название запомнили почти все участники фокус-группы.
                    </p>
                </div>
            </div>
        </div>

        <div class="info-block-container">
            <div class="gl-container">
                <div class="info-left">
                    <h3 class="info-left-title">Презентация</h3>
                </div>
                <div class="info-right">
                    <p>
                        Мы представили клиенту результаты нейминга и исследования. Заказчик согласился,
                        что название MAVA полностью соответствует его пожеланиям. Оно лаконичное,
                        но в то же время необычное и запоминающееся.
                    </p>
                </div>
            </div>
        </div>

        <div class="bg-container image-3"></div>

        <div class="info-block-container">
            <div class="gl-container">
                <div class="info-left">
                    <h3 class="info-left-title">Утвержденное название для новой ТМ кофе</h3>
                </div>
                <div class="info-right">
                    <p>
                        Название Mava уникально тем, что сочетает, казалось бы, контрастные значения.
                        С одной стороны, оно вызывает ассоциации с чем-то исконно украинским, родным
                        (слова с похожим звучанием — «кава», «мавка», «пава», «мама»). Вместе с тем
                        выбранное название таинственное, мистическое и экзотичное, приятно звучит на
                        любом языке, а правильная подача подчеркнет его особенный характер.
                    </p>
                </div>
            </div>
        </div>

        <div class="bg-container image-4"></div>

        <div class="gl-container">
            <h2 class="h2-title header-black">Создание дизайна упаковки для кофе</h2>
        </div>

        <div class="info-block-container">
            <div class="gl-container">
                <div class="info-left">
                    <h3 class="info-left-title">Варианты оформления пачки кофе</h3>
                </div>
                <div class="info-right">
                    <p>
                        Наша задача состояла в том, чтобы передать многогранность названия,
                        при этом указать на элитарность и высокое качество продукта. Безусловно,
                        в условиях, когда подделки и некачественные товары заполонили рынок,
                        особенно ценится натуральность. Кроме того, покупатели обращают внимание
                        на страну-производителя. Наибольшим спросом пользуются зерна из Бразилии, Колумбии и Вьетнама.
                    </p>
                    <p class="for-read-more">
                        Создавая варианты оформления упаковки, мы придерживались следующих принципов:
                        дизайн должен быть лаконичным и минималистическим, без вычурной декоративности
                        и подчеркивать премиальность товара. Также следует отказаться от приевшихся
                        фотографий дымящейся чашки кофе и горсти зерен. Кроме того, были разработаны
                        варианты для разного позиционирования.

                    </p>
                    <span class="read-more-btn">Читать дальше</span>
                </div>
            </div>
        </div>

        <div class="mava-packages-cont-1">
            <div class="package-img-cont">
                <img src="/images/portfolio/mava/image-d-1.jpg" alt="mava package photo">
            </div>
            <div class="package-img-cont">
                <img src="/images/portfolio/mava/image-d-2.jpg" alt="mava package photo">
            </div>
            <div class="package-img-cont">
                <img src="/images/portfolio/mava/image-d-3.jpg" alt="mava package photo">
            </div>
            <div class="package-img-cont">
                <img src="/images/portfolio/mava/image-d-4.jpg" alt="mava package photo">
            </div>
            <div class="package-img-cont">
                <img src="/images/portfolio/mava/image-d-5.jpg" alt="mava package photo">
            </div>
            <div class="package-img-cont">
                <img src="/images/portfolio/mava/image-d-6.jpg" alt="mava package photo">
            </div>
            <div class="package-img-cont">
                <img src="/images/portfolio/mava/image-d-7.jpg" alt="mava package photo">
            </div>
            <div class="package-img-cont">
                <img src="/images/portfolio/mava/image-d-8.jpg" alt="mava package photo">
            </div>
            <div class="package-img-cont">
                <img src="/images/portfolio/mava/image-d-9.jpg" alt="mava package photo">
            </div>
        </div>

        <div class="info-block-container">
            <div class="gl-container">
                <div class="info-left">
                    <h3 class="info-left-title">Лучший концепт для нового кофе</h3>
                </div>
                <div class="info-right">
                    <p>
                        По итогам обсуждений был выбран концепт «Сокровища». В верхней части на белой
                        подложке изображены серые этнические узоры, которые отсылают к древним
                        центрально- и южноамериканским цивилизациям. На их фоне представлена ритуальная
                        маска — яркий графический элемент, который привлекает внимание и запоминается.
                        По центру изображен логотип (выбран шрифт с мягким широким начертанием).
                        Ниже — кофейные зернышки с золотым напылением. Идею «Наш кофе — ценное сокровище»
                        продолжают и золотистые боковые вставки.
                    </p>
                </div>
            </div>
        </div>

        <div class="bg-container image-5"></div>

        <div class="image-container mava-mask-cont">
            <img src="/images/portfolio/mava/mask-mava.svg" alt="mask-mava">
        </div>

        <div class="image-container mava-logo-cont">
            <img src="/images/portfolio/mava/mava-logo.svg" alt="mava-logo">
        </div>

        <div class="info-block-container">
            <div class="gl-container">
                <div class="info-left">
                    <h3 class="info-left-title">Создание УТП и подкрепляющих текстов</h3>
                </div>
                <div class="info-right">
                    <p>
                        Финальный дизайн упаковки полностью соответствует выбранному УТП:
                        MAVA — элитный кофе, который попал на полки супермаркета прямиком
                        с южноамериканских плантаций. Чтобы сохранить его тонкий вкус и высокое
                        качество, применяются старые, проверенные годами технологии медленной
                        обжарки вручную. Слоган продукта — «Сокровища забытых цивилизаций».
                    </p>
                </div>
            </div>
        </div>


        <div class="info-block-container">
            <div class="gl-container">
                <div class="info-left">
                    <h3 class="info-left-title">Подготовка раскроя упаковки</h3>
                </div>
                <div class="info-right">
                    <p>
                        Упаковка изготовлена из металлизированного пропилена. Поверхность матовая
                        с полуматовыми метализированными вставками. Клиент предоставил параметры
                        пакетов, которые могут производиться на доступном ему оборудовании. Согласно
                        предоставленной информации был подготовлен раскрой упаковки, рассчитанной на
                        вес продукта 500 г.
                    </p>
                </div>
            </div>
        </div>

        <div class="two-images-container mava-packages-cont-2">
            <div class="image-left">
                <img src="/images/portfolio/mava/image-e-1.jpg" alt="mava photo">
            </div>
            <div class="image-right">
                <img src="/images/portfolio/mava/image-e-2.jpg" alt="mava photo">
            </div>
        </div>

        <div class="info-block-container">
            <div class="gl-container">
                <div class="info-left">
                    <h3 class="info-left-title">Допечатная подготовка упаковки для глубокой печати</h3>
                </div>
                <div class="info-right">
                    <p>
                        Для выпуска упаковки был выбран метод глубокой печати. Данная технология
                        позволила добиться высокой четкости изображения и воспроизвести все оттенки.
                        Она идеально подходит для изготовления средних и больших тиражей, ведь
                        позволяет сохранять первоначальную цветовую гамму от печати к печати.
                    </p>
                </div>
            </div>
        </div>

        <div class="info-block-container">
            <div class="gl-container">
                <div class="info-left">
                    <h3 class="info-left-title">Авторский надзор за изготовлением</h3>
                </div>
                <div class="info-right">
                    <p>
                        Чтобы гарантировать качественный результат, ответственный проект-менеджер
                        KOLORO контролирует все этапы, в том числе изготовление. Он поддерживает
                        контакт с технологами производства и обеспечивает оперативную реакцию,
                        если нужно быстро внести какие-либо правки. В случае с упаковкой MAVA
                        менеджер также контролировал процесс и держал заказчика в курсе событий.
                        В итоге все стороны остались довольны сотрудничеством, и на рынке появился
                        новый интересный бренд. О других успешных проектах брендингового агентства
                        KOLORO читайте на сайте в разделе «Портфолио».
                    </p>
                </div>
            </div>
        </div>

        <div class="two-images-container mava-packages-cont-3">
            <div class="image-left">
                <img src="/images/portfolio/mava/image-photo-1.jpg" alt="mava photo">
            </div>
            <div class="image-right">
                <img src="/images/portfolio/mava/image-photo-2.jpg" alt="mava photo">
            </div>
        </div>
        @include('client.portfolio._star_rating_form')

        @include('client.portfolio._form_prev_next_work')

    </section>
@stop
@section('page-scripts')

    <script src="/js/portfolio-main.js"></script>

    <!-- include own JavaScript -->
    <script src="/js/portfolio/portfolio-mava.js"></script>
    @php($data = [
    'type' => 'portfolio',
    'id' => $portfolio->id
    ])

    @include('layouts.partials.star-rating', ['data'=>$data])
@stop
<!-- end of subscribe_form -->
