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


<section id="guarand" class="portfolio-page non-unique-page">
    <div class="bg-container top-container" style="background-image: url('/images/portfolio/guarand/main-picture.jpg')">
        <div class="dark-mask"></div>
        <div class="gl-container title-container">
            <h1 class="top-title">
                Guarand
            </h1>
            <h2 class="top-title-small">
                «Надежность, защищенность, гарантированное качество»
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
                    <span>Авто-ателье «Комфорт Авто»</span> осуществляет полный спектр услуг авто-тюнинга,
                    индивидуализации автомобиля согласно последним требованиями комфорта и безопасности.
                    Агенству KOLORO представилась возможность <span>принять участие в запуске стартапа</span> новой
                    торговой марки от компании «Комфорт Авто» — <span>магазина аксессуаров для автомобиля.</span>
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
                    Среди заданий проекта были
                    <a class="gl-link" href="https://koloro.ua/sozdanie-brenda.html" target="_blank">
                        создание
                    </a>
                    и
                    <a class="gl-link" href="https://koloro.ua/registraciya-torgovyh-marok.html" target="_blank">
                        регистрация новой торговой марки
                    </a>, <span>разработка дизайна логотипа ТМ, а также создание дизайна упаковки</span> для
                    указанной линейки авто-аксессуаров.
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
                <h3 class="info-left-title">Нейминг и написание названия</h3>
            </div>
            <div class="info-right">
                <p>
                    Работа над проектом началась с
                    <a class="gl-link" href="https://koloro.ua/nejming.html" target="_blank">
                        разработки названия новой ТМ
                    </a> — <span>нейминг.</span>
                    Торговая марка компании «Комфорт Авто» объединяет в себе несколько видов <span>продукции
                    для автомобилей: видеорегистраторы; ксеноновый свет; сигнализация.</span>
                    У заказчика были следующие пожелания к названию: название должно быть
                    запоминающимся, узнаваемым, положительным и англоязычным; покупатель должен
                    поверить, что бренд на рынке надолго; потребитель должен думать, что данная
                    торговая марка существует в мире уже давно, но на украинском рынке появилась лишь недавно.
                </p>
                <p class="for-read-more">
                    В результате мозгового штурма специалистами различных направлений (а над проектом
                    работало 15 копирайтеров, маркетолог, дизайнер, руководитель проекта и бренд-менеджер)
                    было разработано более 200 наименований, из которых было выбрано 9 названий для презентации.
                    Выбор происходил методом опроса, а также проверкой на популярность, патентную чистоту
                    и на соответствие техническому заданию.
                </p>
                <span class="read-more-btn">Читать дальше</span>
            </div>
        </div>
    </div>

    <div class="gl-container">
        <h2 class="h2-title">9 лучших названий по результатам опроса фокус-групп:</h2>
    </div>

    <div class="info-block-container">
        <div class="gl-container">
            <div class="info-left">
                <h3 class="info-left-title">Rapture</h3>
            </div>
            <div class="info-right">
                <p>
                    1. <span>Rapture</span> — с англ. это восторг, восхищение, упоение, экстаз. Кроме того, слово
                    «rapture» созвучно со словами reptile (рептилия) а также raptor — динозавр,
                    самолет-истребитель. Поэтому, покупатель сигнализаций компании с таким названием,
                    уж точно, будет чувствовать себя не жертвой, а настоящим хищником.
                </p>
            </div>
        </div>
    </div>

    <div class="image-container">
        <img src="/images/portfolio/guarand/guarand-picture-1.jpg" alt="guarand-picture">
    </div>

    <div class="info-block-container">
        <div class="gl-container">
            <div class="info-left">
                <h3 class="info-left-title">O’ride</h3>
            </div>
            <div class="info-right">
                <p>
                    2. <span>«O’ride».</span> Ride (с англ.) — ездить. Главный посыл — безопасная поездка.
                    Название, состоящее из слова Ride (от английского – езда, прогулка, дорога,
                    всадник) и ирландской приставки O’, обозначает бренд, принадлежащий к роду
                    истинных автолюбителей, преданных дороге и своему железному коню. Кроме того,
                    такое название определенно напоминает по звучанию английское словосочетание
                    «All Right», обозначающее «все в порядке».
                </p>
            </div>
        </div>
    </div>

    <div class="image-container">
        <img src="/images/portfolio/guarand/guarand-picture-2.jpg" alt="guarand-picture">
    </div>

    <div class="info-block-container">
        <div class="gl-container">
            <div class="info-left">
                <h3 class="info-left-title">CROSSPACE</h3>
            </div>
            <div class="info-right">
                <p>
                    3. <span>CROSSPACE.</span> Придуманное слово — неологизм, объединяющий два английских
                    понятия cross (пересекать) и space (пространство). Такое название ассоциируется
                    с чем-то масштабным, большим и не имеющим ограничений для существования во
                    времени и в пространстве.
                </p>
            </div>
        </div>
    </div>

    <div class="image-container">
        <img src="/images/portfolio/guarand/guarand-picture-3.jpg" alt="guarand-picture">
    </div>

    <div class="info-block-container">
        <div class="gl-container">
            <div class="info-left">
                <h3 class="info-left-title">Fors</h3>
            </div>
            <div class="info-right">
                <p>
                    4. Fors – аналог английского слова «force» (сила, действие, смысл, интенсивность),
                    обозначающий существительное «большой».
                </p>
            </div>
        </div>
    </div>

    <div class="image-container">
        <img src="/images/portfolio/guarand/guarand-picture-4.jpg" alt="guarand-picture">
    </div>

    <div class="info-block-container">
        <div class="gl-container">
            <div class="info-left">
                <h3 class="info-left-title">СoLLossus</h3>
            </div>
            <div class="info-right">
                <p>
                    5. <span>СoLLossus (Колоссус).</span> Основа названия-неологизма — Колосс Родосский —
                    знаменитая статуя, возведенная греками на входе в гавань у острова Родос.
                    При упоминании Колосса возникают ассоциации со стражем-гигантом колоссального
                    (большого) размера. Да и сам термин «колоссальный» часто используется для
                    обозначения чего-то необъятного или величественного.
                </p>
            </div>
        </div>
    </div>

    <div class="image-container">
        <img src="/images/portfolio/guarand/guarand-picture-5.jpg" alt="guarand-picture">
    </div>

    <div class="info-block-container">
        <div class="gl-container">
            <div class="info-left">
                <h3 class="info-left-title">NEWVIEW</h3>
            </div>
            <div class="info-right">
                <p>
                    6. <span>NEWVIEW.</span> Игровое название. Срощенное из двух английских слов «new»
                    (новый) и «view» (вид, взгляд, мнение, кругозор). Название прямо раскрывает
                    выгоду и отличие продукта. Коротко, емко и символично.
                </p>
            </div>
        </div>
    </div>

    <div class="image-container">
        <img src="/images/portfolio/guarand/guarand-picture-6.jpg" alt="guarand-picture">
    </div>

    <div class="info-block-container">
        <div class="gl-container">
            <div class="info-left">
                <h3 class="info-left-title">King road</h3>
            </div>
            <div class="info-right">
                <p>
                    7. <span>«King road».</span> В переводе с английского «King of road» означает «король дорог».
                    Название «King road» заявляет о том, что продукция торговой марки позволяет
                    автолюбителю стать хозяином и королем своей дороги.
                </p>
            </div>
        </div>
    </div>

    <div class="image-container">
        <img src="/images/portfolio/guarand/guarand-picture-7.jpg" alt="guarand-picture">
    </div>

    <div class="info-block-container">
        <div class="gl-container">
            <div class="info-left">
                <h3 class="info-left-title">CarLine</h3>
            </div>
            <div class="info-right">
                <p>
                    8. <span>CarLine</span> — линия твоей дороги, дословно «автомобильная линия».
                    Жизнь у многих ассоциируется с дорогой, а дорога — это, возможно,
                    единственное место, где все должно быть железно просто и понятно.
                    Бренд с подобным именем четко определяет судьбу и предназначение бренда:
                    все для дороги, все для твоей дороги, твоя автомобильная линия.
                </p>
            </div>
        </div>
    </div>

    <div class="image-container">
        <img src="/images/portfolio/guarand/guarand-picture-8.jpg" alt="guarand-picture">
    </div>

    <div class="info-block-container">
        <div class="gl-container">
            <div class="info-left">
                <h3 class="info-left-title">Guarand</h3>
            </div>
            <div class="info-right">
                <p>
                    9. <span>Guarand.</span> Название-неологизм, созданное из двух слов: Guard
                    (гвардия, охрана, страж, защитник) и Garant (от французского «гарант»).
                    Визуально и фонетически слово также напоминает английское слово Grand
                    (великий, большой). Поскольку звучание слова знакомо русскоязычному потребителю,
                    подобное название должно вызывать у него доверие, ощущение надежности и
                    защищенности, а также ассоциироваться с качеством, ГАРАНТИРОВАННЫМ производителем.
                </p>
            </div>
        </div>
    </div>

    <div class="image-container">
        <img src="/images/portfolio/guarand/guarand-picture-9.jpg" alt="guarand-picture">
    </div>

    <div class="info-block-container">
        <div class="gl-container">
            <div class="info-left">
                <h3 class="info-left-title">&nbsp;</h3>
            </div>
            <div class="info-right">
                <p>
                    <span>«Комфорт Авто» - остановил свой выбор на последнем варианте названия,
                        - Guarand.</span> Поэтому, на следующем этапе, наши дизайнеры принялись за
                    создание дизайна логотипа для торговой марки именно с таким названием.
                    Нами было разработано более 10 разных вариантов предложений по
                    <a class="gl-link" href="https://koloro.ua/sozdat-logotip.html" target="_blank">
                        дизайну логотипа
                    </a>, из которых было отобрано три наиболее перспективных.
                </p>
            </div>
        </div>
    </div>

    <div class="gl-container">
        <h2 class="h2-title">Дизайн логотипа для ТМ "Guarand"</h2>
    </div>

    <div class="gl-container">
        <h2 class="h2-title">Логотип - Магниты</h2>
    </div>
    <div class="image-container">
        <img src="/images/portfolio/guarand/guarand-picture-10.jpg" alt="guarand-picture">
    </div>

    <div class="gl-container">
        <h2 class="h2-title">Логотип - Мигалка</h2>
    </div>
    <div class="image-container">
        <img src="/images/portfolio/guarand/guarand-picture-11.jpg" alt="guarand-picture">
    </div>

    <div class="gl-container">
        <h2 class="h2-title">Логотип — Фара — вариант одобренный заказчиком</h2>
    </div>
    <div class="image-container">
        <img src="/images/portfolio/guarand/guarand-picture-12.jpg" alt="guarand-picture">
    </div>

    <div class="info-block-container">
        <div class="gl-container">
            <div class="info-left">
                <h3 class="info-left-title">Элементы бренда — дизайн упаковки и логотип</h3>
            </div>
            <div class="info-right">
                <p>
                    Дизайнеры компании KOLORO разработали несколько вариантов дизайна упаковки,
                    которые были протестированы на фокус-группах, среди которых было отобрано
                    <span>три ярких и стильных варианта дизайна упаковки.</span>
                </p>
            </div>
        </div>
    </div>

    <div class="gl-container">
        <h2 class="h2-title">Концепт №1</h2>
    </div>
    <div class="image-container">
        <img src="/images/portfolio/guarand/guarand-picture-13.jpg" alt="guarand-picture">
    </div>

    <div class="gl-container">
        <h2 class="h2-title">Концепт №2</h2>
    </div>
    <div class="image-container">
        <img src="/images/portfolio/guarand/guarand-picture-14.jpg" alt="guarand-picture">
    </div>

    <div class="gl-container">
        <h2 class="h2-title">Концепт №3</h2>
    </div>
    <div class="image-container">
        <img src="/images/portfolio/guarand/guarand-picture-15.jpg" alt="guarand-picture">
    </div>

    <div class="info-block-container">
        <div class="gl-container">
            <div class="info-left">
                <h3 class="info-left-title">&nbsp;</h3>
            </div>
            <div class="info-right">
                <p>
                    <span>Каждый дизайн упаковки имеет невербальный посыл к автодорожной стилистике</span>
                    (что отражено в косых линиях и в нек. других графических элементах),
                    а также картинку и вербальную составляющую (название торговой марки и
                    слово "Xenon", написанные уникальными шрифтами, др. словесные элементы, текста и т.д.).

                </p>
                <p>
                    <span>Поскольку заказчик утвердил первый вариант упаковки,</span> то нами была
                    использована соответствующая такому дизайну цветовая гамма логотипа.
                </p>
            </div>
        </div>
    </div>

    <div class="gl-container">
        <h2 class="h2-title">Логотип ТМ "Guarand"</h2>
    </div>
    <div class="image-container">
        <img src="/images/portfolio/guarand/guarand-picture-16.jpg" alt="guarand-picture">
    </div>


    <div class="info-block-container">
        <div class="gl-container">
            <div class="info-left">
                <h3 class="info-left-title">Результат</h3>
            </div>
            <div class="info-right">
                <p>
                    По итогам проекта можно говорить об удачном запуске стартапа — магазина
                    авто-аксессуаров со звучным названием, оригинальным логотипом и хорошо узнаваемым
                    дизайном упаковки. Новая торговая марка была успешно зарегистрирована, и сегодня
                    Guarand — один из самый известных магазинов среди автомобилистов Украины.
                    Дизайн новой ТМ — магазина автоаксессуаров
                </p>
            </div>
        </div>
    </div>

    <div class="gl-container">
        <h2 class="h2-title">Дизайн новой ТМ — магазина автоаксессуаров</h2>
    </div>

    <div class="image-container">
        <img src="/images/portfolio/guarand/guarand-picture-17.jpg" alt="guarand-picture">
    </div>

    <div class="info-block-container">
        <div class="gl-container">
            <div class="info-left">
                <h3 class="info-left-title">Резюме</h3>
            </div>
            <div class="info-right">
                <p>
                    Название, логотип, дизайн упаковки и другие атрибуты бренда играют
                    немаловажную роль в становлении и развитии вашей торговой марки на рынке.
                    От них зависит и успех ТМ и сможет ли она заполучить "царский трон"
                    среди других конкурентов. Комплексный брендинг "с нуля" вы можете заказать у
                    <a class="gl-link" href="https://koloro.ua/contacts.html" target="_blank">
                        нас
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
