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
    <link rel="stylesheet" href="/css/rusalka.css">

@stop


@section('page-content')

<!--PRELOADER!!! -->
<div id="preloader"></div>

@include('layouts.whiteheader')

<section id="rusalka">
    <div class="bg-container top-container">
        <div class="gl-container title-container">
            <h1 class="top-title">Русалка</h1>
            <h2 class="top-title-small">
                «...Минуя водные пучины, в объятьях  длинновласых фей,
                ты обернешься господином всех океанов и морей...»
            </h2>
        </div>
    </div>

    <div class="company-aims">
        <div class="image-container rusalka-logo-container">
            <img src="/files/images/rusalka/rusalka-logo.png" alt="photo-image" class="rusalka-logo">
        </div>

        <img src="/files/images/rusalka/bottle-rusalka.png" alt="photo-image" class="bottle-rusalka">
        <img src="/files/images/rusalka/fish-logo.png" alt="photo-image" class="fish-logo">

        <img src="/files/images/rusalka/bulba-1.png" alt="photo-image" class="bulba-1">
        <img src="/files/images/rusalka/bulba-4.png" alt="photo-image" class="bulba-4">
        <img src="/files/images/rusalka/bulba-5.png" alt="photo-image" class="bulba-5">

        <img src="/files/images/rusalka/bulba-2.png" alt="photo-image" class="bulba-2">
        <img src="/files/images/rusalka/bulba-3.png" alt="photo-image" class="bulba-3">

        <div class="info-block-container info-history">
            <div class="gl-container">
                <div class="info-left">
                    <h3 class="info-left-title">Предыстория</h3>
                </div>
                <div class="info-right">
                    <p>
                        Водка «Русалка» - новый бренд от ООО «Самарский комбинат «Родник», крупнейшего
                        производителя крепких спиртных напитков в Самарской области. Уникальная инфраструктура,
                        технологическая база, новейшее оборудование от ведущих мировых производителей позволяет
                        СК «Родник» выпускать высококачественную и перспективную продукцию. Новый бренд от
                        СК «Родник», водка «Русалка» — это достояние вековых самарских традиций производства
                        алкогольной продукции.чеством и соответствовала принятым стандартам, однако она никогда
                        не имела идентификационных элементов, по которым ее мог бы узнавать потребитель.
                        Продукция всегда выпускалась в утвержденной государством упаковке и оставалась
                        неприметной для целевой аудитории. Однако быстро растущий уровень конкуренции привел
                        руководство ХСЗ к решению о создании торговой марки и проведению ребрендинга продукции
                        на экспорт в такие страны как Армения, Казахстан, Грузия, Латвия, Германия, Мексика
                        и США. Кроме того, создает локальные водочные бренды для г. Самары и Самарской области.
                        Одной из новых водочных торговых марок от ООО СК «Родник» стала водка «Мировая традиция».<br>
                    </p>
                    <p class="for-read-more">
                        Водка «Русалка» - новый бренд от ООО «Самарский комбинат «Родник», крупнейшего
                        производителя крепких спиртных напитков в Самарской области. Уникальная инфраструктура,
                        технологическая база, новейшее оборудование от ведущих мировых производителей позволяет
                        СК «Родник» выпускать высококачественную и перспективную продукцию. Новый бренд от
                        СК «Родник», водка «Русалка» — это достояние вековых самарских традиций производства
                        алкогольной продукции.чеством и соответствовала принятым стандартам, однако она никогда
                        не имела идентификационных элементов, по которым ее мог бы узнавать потребитель.
                        Продукция всегда выпускалась в утвержденной государством упаковке и оставалась
                        неприметной для целевой аудитории. Однако быстро растущий уровень конкуренции привел
                        руководство ХСЗ к решению о создании торговой марки и проведению ребрендинга продукции
                        на экспорт в такие страны как Армения, Казахстан, Грузия, Латвия, Германия, Мексика
                        и США. Кроме того, создает локальные водочные бренды для г. Самары и Самарской области.
                        Одной из новых водочных торговых марок от ООО СК «Родник» стала водка «Мировая традиция».<br>
                    </p>
                    <span class="read-more-btn">Читать дальше</span>
                </div>
            </div>
        </div>

        <div class="info-block-container info-aim">
            <div class="gl-container">
                <div class="info-left">
                    <h3 class="info-left-title">Задача</h3>
                </div>
                <div class="info-right">
                    <p>
                        Создание нового водочного бренда «с нуля». Разработка уникальной геометрии бутылки,
                        линейки наименований продукта. Дизайн этикетки и упаковки новой торговой марки.
                        А также формирование концепции позиционирования и уникального торгового предложения бренда.
                    </p>
                    <p class="for-read-more">
                        Создание нового водочного бренда «с нуля». Разработка уникальной геометрии бутылки,
                        линейки наименований продукта. Дизайн этикетки и упаковки новой торговой марки.
                        А также формирование концепции позиционирования и уникального торгового предложения бренда.
                    </p>
                    <span class="read-more-btn">Читать дальше</span>
                </div>
            </div>
        </div>

        <div class="fishes-container">
            <img src="/files/images/rusalka/fish-1.png" alt="photo-image" class="fish-1">
            <img src="/files/images/rusalka/fish-2.png" alt="photo-image" class="fish-2">
            <img src="/files/images/rusalka/fish-3.png" alt="photo-image" class="fish-3">
            <img src="/files/images/rusalka/fish-4.png" alt="photo-image" class="fish-4">
            <img src="/files/images/rusalka/fish-5.png" alt="photo-image" class="fish-5">
            <img src="/files/images/rusalka/fish-6.png" alt="photo-image" class="fish-6">
            <img src="/files/images/rusalka/fish-7.png" alt="photo-image" class="fish-7">
        </div>

        <h2 class="h2-title header-white decision-header">Решение</h2>

        <div class="info-block-container info-analysis">
            <div class="gl-container">
                <div class="info-left">
                    <h3 class="info-left-title">Анализ российского <br> рынка водки</h3>
                </div>
                <div class="info-right">
                    <p>
                        Работа над разработкой нового бренда стартовала с проведения маркетинговых исследований
                        российского рынка водки, анализа предпочтений целевой аудитории (мужчины в возрасте 35-55 лет),
                        а также с изучения уже представленных в среднеценовом сегменте торговых марок водки.
                        По результатам исследования было выявлено, что большинство водочных торговых марок России
                        используют в дизайне бренда изображения и идентификационные элементы, которые непосредственно
                        связаны с названием водки. Например: водка «Добрый медведь» — изображение бурого медведя,
                        водка «Перепелка» — изображение птицы перепелки, ТМ «Снежный барс» — иллюстрации снежного
                        барса и т.д. Кроме того, исследование показало, что 90% водочных брендов России используют
                        цилиндрическую форму. Геометрия штоф  также вызывает немалый интерес у потребителя
                        еще раз подчеркивающее позиционирование товара  как экологически чистого продукта.
                    </p>
                    <p class="for-read-more">
                        Работа над разработкой нового бренда стартовала с проведения маркетинговых исследований
                        российского рынка водки, анализа предпочтений целевой аудитории (мужчины в возрасте 35-55 лет),
                        а также с изучения уже представленных в среднеценовом сегменте торговых марок водки.
                        По результатам исследования было выявлено, что большинство водочных торговых марок России
                        используют в дизайне бренда изображения и идентификационные элементы, которые непосредственно
                        связаны с названием водки. Например: водка «Добрый медведь» — изображение бурого медведя,
                        водка «Перепелка» — изображение птицы перепелки, ТМ «Снежный барс» — иллюстрации снежного
                        барса и т.д. Кроме того, исследование показало, что 90% водочных брендов России используют
                        цилиндрическую форму. Геометрия штоф  также вызывает немалый интерес у потребителя
                        еще раз подчеркивающее позиционирование товара  как экологически чистого продукта.
                    </p>
                    <span class="read-more-btn">Читать дальше</span>
                </div>
            </div>
        </div>

        <div class="info-block-container info-dev-geom">
            <div class="gl-container">
                <div class="info-left">
                    <h3 class="info-left-title">Разработка геометрии <br>
                        бутылки. <br>
                        Дизайн этикетки водки
                    </h3>
                </div>
                <div class="info-right">
                    <p>
                        При разработке дизайна этикетки и формы бутылки важно было учесть не только результаты
                        маркетинговых исследований, но и пожелания заказчика:<br>
                        Сохранить название водочного бренда — «Русалка», написание названия английскими буквами;<br>
                        Название водки должно быть крупным и легко читабельным с большого расстояния;<br>
                        Линейка наименований торговой марки должна состоять из трех позиций;<br>
                    </p>
                    <p class="for-read-more">
                        В композиции этикетки должно быть отведено специальное место для указания названия
                        водки из линейки наименований — не менее 1/5 от общего пространства этикетки;<br>
                        Каждый дизайн-концепт должен содержать уникальный элемент дизайна, который позволил
                        бы потребителю легко узнать бренд среди конкурентов.<br>
                        Специалистами нашей компании было разработано пять уникальных и совершенно
                        разных концептов дизайна нового бренда изображения и идентификационные элементы,
                        которые непосредственно связаны с названием водки. Например: водка «Добрый медведь» —
                        изображение бурого медведя, водка «Перепелка» — изображение птицы перепелки,
                        ТМ «Снежный барс» — иллюстрации снежного барса и т.д.<br>
                        Кроме того, исследование показало, что 90% водочных брендов России используют
                        цилиндрическую форму. Геометрия штоф  также вызывает немалый интерес у потребителя
                        еще раз подчеркивающее позиционирование товара  как экологически чистого продукта.
                    </p>
                    <span class="read-more-btn">Читать дальше</span>
                </div>
            </div>
        </div>
    </div>

    <div class="bottles-container">
        <div class="bottle-cont">
            <img src="/files/images/rusalka/render-bottle-1.jpg" alt="photo-img">
        </div>
        <div class="bottle-cont">
            <img src="/files/images/rusalka/render-bottle-2.jpg" alt="photo-img">
        </div>
        <div class="bottle-cont">
            <img src="/files/images/rusalka/render-bottle-3.jpg" alt="photo-img">
        </div>
        <div class="bottle-cont">
            <img src="/files/images/rusalka/render-bottle-4.jpg" alt="photo-img">
        </div>
        <div class="bottle-cont">
            <img src="/files/images/rusalka/render-bottle-5.jpg" alt="photo-img">
        </div>
        <div class="bottle-cont">
            <img src="/files/images/rusalka/render-bottle-6.jpg" alt="photo-img">
        </div>
        <div class="bottle-cont">
            <img src="/files/images/rusalka/render-bottle-7.jpg" alt="photo-img">
        </div>
        <div class="bottle-cont">
            <img src="/files/images/rusalka/render-bottle-8.jpg" alt="photo-img">
        </div>
    </div>

    <div class="concepts-info concept-1">
        <div class="gl-container">
            <h2>Концепт 1 - Маяк</h2>
        </div>
    </div>

    <div class="bg-wrapper">
        <div class="bg-container concept-1-container"></div>
    </div>

    <div class="company-aims-2">
        <div class="info-block-container info-concept-mayak">
            <div class="gl-container">
                <div class="info-left">
                    <h3 class="info-left-title">Концепт «Маяк»</h3>
                </div>
                <div class="info-right">
                    <p>
                        Главный коммуникационный посыл концепта передан в линейке наименований: «Тихая гавань»,
                        «Легкий бриз», «Уютный дом». Такие наименования вызывают у потребителя следующий
                        ассоциативный ряд: душевность, семейный уют, спокойствие, семья, близкие люди.
                        В качестве ключевых слов концепта были использованы следующие: маяк, золото, морской
                        залив, постоянство, луч света, спасение, ориентир, основательность, встреча.
                    </p>
                    <p class="for-read-more">
                        Главный коммуникационный посыл концепта передан в линейке наименований: «Тихая гавань»,
                        «Легкий бриз», «Уютный дом». Такие наименования вызывают у потребителя следующий
                        ассоциативный ряд: душевность, семейный уют, спокойствие, семья, близкие люди.
                        В качестве ключевых слов концепта были использованы следующие: маяк, золото, морской
                        залив, постоянство, луч света, спасение, ориентир, основательность, встреча.
                    </p>
                    <span class="read-more-btn">Читать дальше</span>
                </div>
            </div>
        </div>

        <div class="info-block-container info-key-words-1">
            <div class="gl-container">
                <div class="info-left">
                    <h3 class="info-left-title">Ключевые слова</h3>
                </div>
                <div class="info-right">
                    <p>
                        Маяк, золото, морской залив, постоянство, луч света, спасение, ориентир,
                        основательность, встреча.
                    </p>
                </div>
            </div>
        </div>

        <div class="info-block-container info-communication">
            <div class="gl-container">
                <div class="info-left">
                    <h3 class="info-left-title">Коммуникация через линейку</h3>
                </div>
                <div class="info-right">
                    <p>
                        душевность, семейный уют, спокойствие, семья, близкие люди.
                    </p>
                </div>
            </div>
        </div>

        <div class="lineage-imgs-cont">
            <div class="gl-container">
                <div class="image-container lineyka-up-cont">
                    <img src="/files/images/rusalka/concept-1-lineyka-up.jpg" alt="photo-img" class="lineyka-up">
                </div>

                <div class="lineages-conts">
                    <div class="lineage-cont lineyka-left-cont">
                        <img src="/files/images/rusalka/concept-1-lineyka-middle-1.jpg" alt="photo-img" class="lineyka-middle-1">
                        <img src="/files/images/rusalka/concept-1-lineyka-down-1.jpg" alt="photo-img" class="lineyka-down-1">
                    </div>
                    <div class="lineage-cont lineyka-middle-cont">
                        <img src="/files/images/rusalka/concept-1-lineyka-middle-2.jpg" alt="photo-img" class="lineyka-middle-2">
                        <img src="/files/images/rusalka/concept-1-lineyka-down-2.jpg" alt="photo-img" class="lineyka-down-2">
                    </div>
                    <div class="lineage-cont lineyka-right-cont">
                        <img src="/files/images/rusalka/concept-1-lineyka-middle-3.jpg" alt="photo-img" class="lineyka-middle-3">
                        <img src="/files/images/rusalka/concept-1-lineyka-down-3.jpg" alt="photo-img" class="lineyka-down-3">
                    </div>
                </div>
            </div>
        </div>

        <div class="info-block-container info-box-elemnts">
            <div class="gl-container">
                <div class="info-left">
                    <h3 class="info-left-title">Элементы упаковки</h3>
                </div>
                <div class="info-right">
                    <p>
                        Логотип – высокий и уникальный шрифт. На последней букве дублируется эффект тени на маяке. <br>
                        Перевод названия Русалка вынесен на стекло бутылки.
                        У основания - скалистый силуэт. <br>
                        Бутылка может быть доработана. Цель – чтобы напоминало маяк (башню).<br>
                    </p>
                    <p class="for-read-more">
                        Логотип – высокий и уникальный шрифт. На последней букве дублируется эффект тени на маяке. <br>
                        Перевод названия Русалка вынесен на стекло бутылки.
                        У основания - скалистый силуэт. <br>
                        Бутылка может быть доработана. Цель – чтобы напоминало маяк (башню).<br>
                    </p>
                    <span class="read-more-btn">Читать дальше</span>
                </div>
            </div>
        </div>

        <div class="two-images-container">
            <div class="gl-container">
                <div class="image-left">
                    <img src="/files/images/rusalka/concept-1-logo.jpg" alt="photo-image" class="logo-left">
                </div>
                <div class="image-right">
                    <img src="/files/images/rusalka/concept-1-logo-down-bottle.jpg" alt="photo-image" class="logo-right">
                </div>
            </div>
        </div>

        <div class="info-block-container info-concept-technology">
            <div class="gl-container">
                <div class="info-left">
                    <h3 class="info-left-title">Технология концепта Маяк</h3>
                </div>
                <div class="info-right">
                    <p>
                        Изюминка концепта – фактурность и тактильные свойства.<br>
                        Каждый участок выполнен разной технологией, можно долго любоваться и чувствовать на ощупь.
                    </p>
                </div>
            </div>
        </div>

        <div class="image-container bottle-concept-1-cont">
            <div class="gl-container">
                <img src="/files/images/rusalka/bottle-concept-1.png" alt="photo-image" class="bottle-concept-1">
            </div>
        </div>

        <div class="info-block-container info-box-elemnts">
            <div class="gl-container">
                <div class="info-left">
                    <h3 class="info-left-title">Коммуникация <br> концепта Маяк</h3>
                </div>
                <div class="info-right">
                    <p>
                        Отсутствие изображения русалки и живописный пейзаж заставляют потребителя задуматься
                        и повоображать. <br>
                        Посыл не прямой и может восприниматься каждым по-разному, но в рамках заданного нами коридора.<br>
                        Такая игра усиливает восприятие и запоминаемость.
                        Потребитель может себе представить:
                        Маяк – сам по себе положительный объект.
                    </p>
                    <p class="for-read-more">
                        Отсутствие изображения русалки и живописный пейзаж заставляют потребителя задуматься
                        и повоображать. <br>
                        Посыл не прямой и может восприниматься каждым по-разному, но в рамках заданного нами коридора.<br>
                        Такая игра усиливает восприятие и запоминаемость.
                        Потребитель может себе представить:
                        Маяк – сам по себе положительный объект.
                    </p>
                    <span class="read-more-btn">Читать дальше</span>
                </div>
            </div>
        </div>

        <div class="info-block-container info-verbal-msg-1">
            <div class="gl-container">
                <div class="info-left">
                    <h3 class="info-left-title">Вербальный посыл</h3>
                </div>
                <div class="info-right">
                    <p>
                        RUSALKA – Лишь она нам нужна, как холоду свет, как суше вода!
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="concepts-info concept-2">
        <div class="gl-container">
            <h2>Концепт 2 - Волна</h2>
        </div>
    </div>

    <div class="bg-wrapper">
        <div class="bg-container concept-2-container"></div>
    </div>

    <div class="company-aims-3">
        <div class="info-block-container info-concept-volna">
            <div class="gl-container">
                <div class="info-left">
                    <h3 class="info-left-title">Концепт «Волна»</h3>
                </div>
                <div class="info-right">
                    <p>
                        В качестве логотипа в данном концепте выбран уникальный абстрактный объект, сочетающий
                        в себе черты морской раковины с жемчужиной и маски аквалангиста.<br>
                        Бутылка выполнена в голубоватом цвете, с оттенком зеленого.<br>
                        На донышке бутылки выдавлена морская звезда.<br>
                    </p>
                    <p class="for-read-more">
                        Концепт интересен тем, что бутылка не прозрачная, а имеет легкий зеленый оттенок,
                        что нехарактерно для водочных брендов. Это однозначно выделяет новую торговую марку
                        среди конкурентов.<br>
                        Главный коммуникационный посыл концепта: заставить потребителя почувствовать себя частью
                        бушующей свежестью морской стихии, ощутить чистоту и легкость вкуса нового бренда.<br>
                        Ключевые слова концепта: волна, лирика, свежесть, легкость, чистота, гребень, прибой,
                        сила природы, стихия, дно морское, чайки, жемчужина.<br>
                        Линейка наименований из трех позиций дополнительно подчеркивает вербальный посыл:
                        «Тихая», «Мягкая», «Свежая».
                    </p>
                    <span class="read-more-btn">Читать дальше</span>
                </div>
            </div>
        </div>

        <div class="info-block-container info-key-words-2">
            <div class="gl-container">
                <div class="info-left">
                    <h3 class="info-left-title">Ключевые слова</h3>
                </div>
                <div class="info-right">
                    <p>
                        Волна, лирика, свежесть, легкость, чистота, гребень, прибой, сила природы,
                        стихия, дно морское, чайки, жемчужина.
                    </p>
                </div>
            </div>
        </div>

        <h2 class="h2-title header-blue">Линейка наименований</h2>

        <div class="three-images-container">
            <div class="gl-container">
                <div class="image-left">
                    <img src="/files/images/rusalka/concept-2-lineyka-1.png" alt="photo-image" class="">
                </div>
                <div class="image-middle">
                    <img src="/files/images/rusalka/concept-2-lineyka-2.png" alt="photo-image" class="">
                </div>
                <div class="image-right">
                    <img src="/files/images/rusalka/concept-2-lineyka-3.png" alt="photo-image" class="">
                </div>
            </div>
        </div>

        <h2 class="h2-title header-blue">Вербальный посыл</h2>

        <div class="image-container slogan-concept-2-cont">
            <img src="/files/images/rusalka/slogan-concept-2.png" alt="photo-img" class="slogan-concept-2">
        </div>

        <div class="info-block-container info-key-words-2">
            <div class="gl-container">
                <div class="info-left">
                    <h3 class="info-left-title">Элементы дизайна</h3>
                </div>
                <div class="info-right">
                    <p>
                        Логотип – это уникальный абстрактный объект.
                    </p>
                </div>
            </div>
        </div>

        <div class="image-container concept-2-logo-cont">
            <img src="/files/images/rusalka/concept-2-logo.jpg" alt="photo-img" class="concept-2-logo">
        </div>

        <div class="info-block-container info-bottle">
            <div class="gl-container">
                <div class="info-left">
                    <h3 class="info-left-title">Бутылка</h3>
                </div>
                <div class="info-right">
                    <p>
                        Планируется, что бутылка будет голубоватого цвета, либо с оттенком зеленого
                        (как Боржоми). <br>
                        Волны идут по всей бутылке вокруг, а волнообразный низ этикетки подчеркивает дизайн бутылки.
                    </p>
                </div>
            </div>
        </div>

        <div class="image-container bottle-concept-2-cont">
            <div class="gl-container">
                <img src="/files/images/rusalka/bottle-concept-2.png" alt="photo-img" class="bottle-concept-2">
            </div>
        </div>

        <div class="info-block-container info-concept-2-element">
            <div class="gl-container">
                <div class="info-left">
                    <h3 class="info-left-title"></h3>
                </div>
                <div class="info-right">
                    <p>
                        В донышке будет выдавлена морская звезда.
                    </p>
                    <div class="image-container">
                        <img src="/files/images/rusalka/concept-2-element.jpg" alt="photo-img" class="info-concept-2">
                    </div>
                </div>
            </div>
        </div>

        <div class="info-block-container info-communication-mayak">
            <div class="gl-container">
                <div class="info-left">
                    <h3 class="info-left-title">Коммуникация концепта Маяк</h3>
                </div>
                <div class="info-right">
                    <p>
                        Концепт интересен тем, что бутылка не прозрачная, а немного зеленого оттенка.
                        Это нехарактерно водочным брендам, что однозначно выделит новую торговую марку
                        на полке среди конкурентов.<br>
                    </p>
                    <p class="for-read-more">
                        Концепт интересен тем, что бутылка не прозрачная, а немного зеленого оттенка.
                        Это нехарактерно водочным брендам, что однозначно выделит новую торговую марку
                        на полке среди конкурентов.<br>
                    </p>
                    <span class="read-more-btn">Читать дальше</span>
                </div>
            </div>
        </div>

        <div class="info-block-container info-verbal-msg-2">
            <div class="gl-container">
                <div class="info-left">
                    <h3 class="info-left-title">Вербальный посыл</h3>
                </div>
                <div class="info-right">
                    <p>
                        RUSALKA – шум прибоя в каждой капле!
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="concepts-info concept-3">
        <div class="gl-container">
            <h2>Концепт 3 - Рыбы</h2>
        </div>
    </div>

    <div class="bg-wrapper">
        <div class="bg-container concept-3-container"></div>
    </div>

    <div class="company-aims-4">
        <div class="info-block-container info-concept-fish">
            <div class="gl-container">
                <div class="info-left">
                    <h3 class="info-left-title">Концепт «Рыбы»</h3>
                </div>
                <div class="info-right">
                    <p>
                        Третий концепт, который был выбран заказчиком — концепт «Рыбы».<br>
                        Главный вербальный посыл концепта — раскрытие темы экологичности и природности:
                        «Продукт экологически чист».<br>
                        Линейка наименований также говорит о прозрачности и чистоте воды в основе водки:
                        «Кристальная», «Серебряная», «Лазурная».<br>
                        Для создания харизматичного фона этикетки были выбраны следующие ключевые слова:
                        рыбы, стая, групповой разум, стремительность, течение, глубина, блики на воде, суровость.
                    </p>
                    <p class="for-read-more">
                        А также такие элементы идентификации как:<br>
                        - Чешуя;<br>
                        - Волны;<br>
                        - Водоворот.<br>
                        Главный элемент дизайна этикетки – косяк рыбы, передающий ощущение сплоченности,
                        единства, а также целенаправленности. Подчеркивают красоту и богатство морского
                        дна – золотым переливом чешуи рыбьей стаи.
                        «Тихая», «Мягкая», «Свежая».
                    </p>
                    <span class="read-more-btn">Читать дальше</span>
                </div>
            </div>
        </div>

        <div class="info-block-container info-key-words-3">
            <div class="gl-container">
                <div class="info-left">
                    <h3 class="info-left-title">Ключевые слова</h3>
                </div>
                <div class="info-right">
                    <p>
                        Маяк, золото, морской залив, постоянство, луч света, спасение,
                        ориентир, основательность, встреча.
                    </p>
                </div>
            </div>
        </div>

        <div class="info-block-container info-lineage-3">
            <div class="gl-container">
                <div class="info-left">
                    <h3 class="info-left-title">Линейка наименований</h3>
                </div>
                <div class="info-right">
                    <p>
                        говорит о прозрачности и чистоте воды, основе водки.
                    </p>
                </div>
            </div>
        </div>

        <div class="three-images-container">
            <div class="gl-container">
                <div class="image-left">
                    <img src="/files/images/rusalka/concept-3-lineyka-1.jpg" alt="photo-image" class="">
                </div>
                <div class="image-middle">
                    <img src="/files/images/rusalka/concept-3-lineyka-2.jpg" alt="photo-image" class="">
                </div>
                <div class="image-right">
                    <img src="/files/images/rusalka/concept-3-lineyka-3.jpg" alt="photo-image" class="">
                </div>
            </div>
        </div>

        <div class="info-block-container info-verbal-msg-3">
            <div class="gl-container">
                <div class="info-left">
                    <h3 class="info-left-title">Вербальный посыл</h3>
                </div>
                <div class="info-right">
                    <p>
                        подчеркивает тему природности и экологичности.
                    </p>
                </div>
            </div>
        </div>

        <div class="image-container concept-3-slogan-cont">
            <div class="gl-container">
                <img src="/files/images/rusalka/concept-3-slogan-1.png" alt="photo-img" class="slogan-1">
                <img src="/files/images/rusalka/concept-3-slogan-2.png" alt="photo-img" class="slogan-2">
                <img src="/files/images/rusalka/concept-3-slogan-3.png" alt="photo-img" class="slogan-3">
            </div>
        </div>

        <div class="info-block-container info-design-elements">
            <div class="gl-container">
                <div class="info-left">
                    <h3 class="info-left-title">Элементы дизайна</h3>
                </div>
                <div class="info-right">
                    <p>
                        Со всех сторон на бутылке выпуклые элементы, что пользуется сейчас большой популярностью.<br>
                        Поясок оборачивает бутылку по всему периметру. Состоит из двух этикеток с нахлёстом.
                    </p>
                </div>
            </div>
        </div>

        <div class="image-container bottle-concept-3-cont">
            <div class="gl-container">
                <img src="/files/images/rusalka/bottle-concept-3.png" alt="photo-img" class="bottle-concept-3">
            </div>
        </div>

        <div class="gl-container">
            <h2 class="h2-title header-blue">
                Объектом идентификации<br>
                служит харизматичный фон:<br>
                Чешуя<br>
                Волны<br>
                Водоворот<br>
            </h2>
        </div>
    </div>

    <div class="bg-container pattern-concept-3">
        <div class="image-container logo-concept-3-cont">
            <img src="/files/images/rusalka/logo-concept-3.png" alt="photo-img" class="logo-concept-3">
        </div>
        <div class="image-container">
            <img src="/files/images/rusalka/fish-concept-3.png" alt="photo-img" class="fish-concept-3">
        </div>
    </div>

    <div class="company-aims-5">

        <img src="/files/images/rusalka/bulba-1.png" alt="photo-image" class="bulba-1">
        <img src="/files/images/rusalka/bulba-4.png" alt="photo-image" class="bulba-4">
        <img src="/files/images/rusalka/bulba-5.png" alt="photo-image" class="bulba-5">

        <img src="/files/images/rusalka/bulba-2.png" alt="photo-image" class="bulba-2">
        <img src="/files/images/rusalka/bulba-3.png" alt="photo-image" class="bulba-3">

        <div class="info-block-container">
            <div class="gl-container">
                <div class="info-left">
                    <h3 class="info-left-title">Коммуникация концепта Рыбы</h3>
                </div>
                <div class="info-right">
                    <p>
                        Рыбы, когда собираются в косяк, становятся единым целым и более разумным созданием.
                        Они держатся вместе и тем самым повышают свои шансы на выживание.<br>
                        Кроме сплоченности и целенаправленного движения, люди также отмечают данный концепт
                        схожестью с удачной рыбалкой и хорошим уловом. Всем приятно возвращаться домой с
                        богатым уловом.<br>
                        Итак, бренд выделяется на полке среди конкурентов. При вторичном контакте – тактильном –
                        упаковка продукта будет вызывать приятные эмоции.<br>
                    </p>
                    <p class="for-read-more">
                        Рыбы, когда собираются в косяк, становятся единым целым и более разумным созданием.
                        Они держатся вместе и тем самым повышают свои шансы на выживание.<br>
                        Кроме сплоченности и целенаправленного движения, люди также отмечают данный концепт
                        схожестью с удачной рыбалкой и хорошим уловом. Всем приятно возвращаться домой с
                        богатым уловом.<br>
                        Итак, бренд выделяется на полке среди конкурентов. При вторичном контакте – тактильном –
                        упаковка продукта будет вызывать приятные эмоции.<br>
                        упаковка продукта будет вызывать приятные эмоции.<br>
                    </p>
                    <span class="read-more-btn">Читать дальше</span>
                </div>
            </div>
        </div>

        <div class="fishes-container">
            <img src="/files/images/rusalka/fish-1.png" alt="photo-image" class="fish-1">
            <img src="/files/images/rusalka/fish-2.png" alt="photo-image" class="fish-2">
            <img src="/files/images/rusalka/fish-3.png" alt="photo-image" class="fish-3">
            <img src="/files/images/rusalka/fish-4.png" alt="photo-image" class="fish-4">
            <img src="/files/images/rusalka/fish-5.png" alt="photo-image" class="fish-5">
            <img src="/files/images/rusalka/fish-6.png" alt="photo-image" class="fish-6">
            <img src="/files/images/rusalka/fish-7.png" alt="photo-image" class="fish-7">
        </div>

        <h2 class="h2-title header-white">RUSALKA –<br>Вместе мы сильнее!</h2>

        <div class="info-block-container info-result">
            <div class="gl-container">
                <div class="info-left">
                    <h3 class="info-left-title">Результат</h3>
                </div>
                <div class="info-right">
                    <p>
                        Однако, безусловным лидером среди концептов стал выбранный заказчиком — концепт,
                        акцентирующий экологичность и чистоту продукции ХСЗ.
                    </p>
                    <p class="for-read-more">
                        Однако, безусловным лидером среди концептов стал выбранный заказчиком — концепт,
                        акцентирующий экологичность и чистоту продукции ХСЗ.
                    </p>
                    <span class="read-more-btn">Читать дальше</span>
                </div>
            </div>
        </div>

        <div class="info-block-container info-cv">
            <div class="gl-container">
                <div class="info-left">
                    <h3 class="info-left-title">Резюме</h3>
                </div>
                <div class="info-right">
                    <p>
                        Высокий уровень конкуренции на рынке водочных торговых марок заставляет производителей
                        приложить немало усилий при разработке формы бутылки, дизайна этикетки, концепции
                        позиционирования бренда и УТП. Не имея опыта работы с рынком алкогольной продукции
                        практически невозможно создать прибыльный бренд, именно поэтому большинство производителей
                        доверяют эту работу только профессионалам.<br>
                        Понравилась работа?

                    </p>
                    <p class="for-read-more">
                        Высокий уровень конкуренции на рынке водочных торговых марок заставляет производителей
                        приложить немало усилий при разработке формы бутылки, дизайна этикетки, концепции
                        позиционирования бренда и УТП. Не имея опыта работы с рынком алкогольной продукции
                        практически невозможно создать прибыльный бренд, именно поэтому большинство производителей
                        доверяют эту работу только профессионалам.<br>
                        Понравилась работа?
                    </p>
                    <span class="read-more-btn">Читать дальше</span>
                </div>
            </div>
        </div>

        <div class="bg-container bg-underworld"></div>

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
    </div>

</section>
@stop

@section('page-scripts')

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
<script src="/js/rusalka.js"></script>

@stop