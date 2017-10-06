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
    <link rel="stylesheet" href="/css/globino.css">

@stop


@section('page-content')

    <!--PRELOADER!!! -->
    <div id="preloader"></div>

    @include('layouts.whiteheader')
    <!-- begin background -->
    <section class="background portfolio_page"
             style="background-image: url('/files/images/globino/main_back_chease.jpg');">
        <!-- begin container -->
        <div class="container">
            <h1 class="page_name">новый зонтичный молочный бренд “Глобино”</h1>
            <p class="slogan">“Молока більше, ніж у молоці”</p>
        </div>
        <!-- end container -->
    </section>
    <!-- end background -->
    <div class="fake_div"></div>
    <!-- begin for_paralax -->
    <div class="for_paralax">
        <!-- begin preambles -->
        <section class="preambles">
            <!-- begin container -->
            <div class="container">
                <p class="task">В брендинговое агентство KOLORO обратилась компания Глобино с интересной задачей:
                    разработать новый молочный бренд. Мы с энтузиазмом принялись за выполнение столь непростой задачи и
                    с блеском завершили ее.</p>
            </div>
            <!-- end container -->
            <!-- begin showcase -->
            <div class="showcase">
                <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAkwBADs="
                     data-original="/files/images/globino/gauda.png" alt="name image" class="lazy">
                <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAkwBADs="
                     data-original="/files/images/globino/russians.png" alt="name image" class="lazy">
                <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAkwBADs="
                     data-original="/files/images/globino/edam.png" alt="name image" class="lazy">
            </div>
            <!-- end showcase -->
            <!-- begin some_text -->
            <section class="some_text big_padding">
                <!-- begin container -->
                <div class="container">
                    <!-- begin left_container animated -->
                    <div class="left_container animated fade">
                        <h2>Как появился молочный<br> бренд Глобино?</h2>
                    </div>
                    <!-- end left_container animated -->

                    <!-- begin text_block animated -->
                    <div class="text_block animated fade">
                        <p>
                            Компания Глобино входит в тройку лидеров производителей мяса и мясной продукции в Украине.
                            Продукция Глобино не раз отмечалась многочисленными наградами, и что гораздо важнее - всегда
                            получала признание среди украинских потребителей.
                        </p>
                        <!-- begin  for_read_more-->
                        <div class="for_read_more">
                            Брендинговое агентство KOLORO предлагает уникальные и оригинальные идеи всем, кто хочет
                            продавать не просто товар на полке, а добиваться глобальных успехов с известным и
                            востребованным брендом. Мы способны не только разработать красивый и узнаваемый дизайн
                            упаковки, но и вложить в каждый бренд «душу».
                        </div>
                        <!-- end  for_read_more-->
                        <span class="button_read_more">
							<span class="animated fadeIn active">Читать дальше</span>
							<span class="">Скрыть</span>
						</span>
                    </div>
                    <!-- end text_block animated -->
                </div>
                <!-- end container -->
            </section>
            <!-- end some_text -->
            <div class="first_paralax" id="paralax_showcase_1">
            </div>
            <div class="second_paralax" id="paralax_showcase_2">
            </div>
            <div class="third_paralax" id="paralax_showcase_3">
            </div>
        </section>
        <!-- end preambles -->

        <!-- begin some_text -->
        <section class="some_text padding_this_page">
            <!-- begin container -->
            <div class="container">
                <!-- begin left_container animated -->
                <div class="left_container animated left">
                    <h2>Задача: создать зонтичный молочный бренд Глобино</h2>
                </div>
                <!-- end left_container animated -->

                <!-- begin text_block animated -->
                <div class="text_block animated right">
                    <p>
                        Необходимо разработать зонтичный бренд, который бы объеденил:<br>
                        плавленные сырки<br>
                        сливочное масло<br>
                        твердые сыры<br>
                    </p>
                </div>
                <!-- end text_block animated -->
            </div>
            <!-- end container -->
        </section>
        <!-- end some_text -->
        <!-- begin showcase2 -->
        <section class="showcase2">
            <!-- begin container -->
            <div class="container">
                <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAkwBADs="
                     data-original="/files/images/globino/smetankoviy.jpg" alt="name image" class="lazy">
                <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAkwBADs="
                     data-original="/files/images/globino/zvenigorodskiy.jpg" alt="name image" class="lazy">
                <div class="second_paralax" id="showcase2_1"></div>
                <div class="first_paralax" id="showcase2_2"></div>
                <div class="third_paralax" id="showcase2_3"></div>
                <p class="text_showcase">
                    это нынешний вид сыров до редизайна. Продукция успешно продается, но в условиях падения
                    потребительскго спроса, есть желание занять убедительную позицию и даже увеличить продажи. <br>
                    Под разработкой зонтичного бренда стоит понимать:<br>
                    Привести к единому стилю всю молочную продукцию Глобино. Создать такой набор объектов идентификации
                    (фирменный стиль), которые можно было бы “натянуть” на любую новую молочную продукцию, которую
                    Глобино захочет выпускать в будущем.<br>
                    Это должно обеспечить узнаваемость ТМ.

                </p>
                <!-- begin  for_read_more-->
                <div class="for_read_more">
                    Брендинговое агентство KOLORO предлагает уникальные и оригинальные идеи всем, кто хочет продавать не
                    просто товар на полке, а добиваться глобальных успехов с известным и востребованным брендом. Мы
                    способны не только разработать красивый и узнаваемый дизайн упаковки, но и вложить в каждый бренд
                    «душу».
                </div>
                <!-- end  for_read_more-->
                <span class="button_read_more">
				<span class="animated fadeIn active">Читать дальше</span>
				<span class="">Скрыть</span>
			</span>
            </div>
            <!-- end container -->
        </section>
        <!-- end showcase2 -->
        <!-- begin works_whith_brand -->
        <section class="works_whith_brand">
            <!-- begin container -->
            <div class="container">
                <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAkwBADs="
                     data-original="/files/images/globino/globino_logo.png" alt="name image" class="lazy clientlogo">
                <p class="intro">
                    Работа по созданию молочного бренда началась на примере дизайна твердых сыров.
                </p>
            </div>
            <!-- end container -->
            <!-- begin some_text -->
            <section class="some_text small_padding">
                <!-- begin container -->
                <div class="container">
                    <!-- begin left_container animated -->
                    <div class="left_container animated fade">
                        <h2>Этап 1 - Анализ рынка<br> твердых сыров</h2>
                    </div>
                    <!-- end left_container animated -->

                    <!-- begin text_block animated -->
                    <div class="text_block animated fade">
                        <p>
                            Аудит бренда:<br>
                            * Ценовой сегмент:<br>
                            Средний, среди ДСТУ сыров.<br>
                            * Рынок сбыта (Украина области):<br>
                            Вся Украина<br>
                            * Места продаж:<br>
                            Крупная розница (супермаркеты, гипермаркеты, сетевые магазины), мелкая розница (маленькие
                            магазины, рынки и т.д.)
                            Производство на собственном заводе с богатой историей по тому самому ДСТП, что нравится всем

                        </p>
                        <!-- begin  for_read_more-->
                        <div class="for_read_more">
                            Особенности создания дизайна линейки упаковок:<br>
                            Дизайн должен иметь общую тематику для поддержания линейки продуктов, но при этом быть
                            персонализированным под каждый вид продукта, что обеспечить узнаваемость каждого продукта
                            отдельно и принадлежность к линейке в целом.
                        </div>
                        <!-- end  for_read_more-->
                        <span class="button_read_more">
							<span class="animated fadeIn active">Читать дальше</span>
							<span class="">Скрыть</span>
						</span>
                    </div>
                    <!-- end text_block animated -->
                </div>
                <!-- end container -->
            </section>
            <!-- end some_text -->
            <!-- begin some_text -->
            <section class="some_text small_padding">
                <!-- begin container -->
                <div class="container">
                    <!-- begin left_container animated -->
                    <div class="left_container animated fade">
                        <h2>Тенденции в оформлении:</h2>
                    </div>
                    <!-- end left_container animated -->

                    <!-- begin text_block animated -->
                    <div class="text_block animated fade">
                        <p>
                            ВЕРШИНА ДИЗАЙНА МОЛОЧНОЙ УПАКОВКИ<br><br>
                            Ларс Г. Валентин (Lars G. Wallentin), благодаря 40-летнему опыту, включающему в себя работу
                            в компании Nestlé в качестве дизайнера, преподавание в области маркетинга и международную
                            лекторскую деятельность, – это тот человек, кто может научить искусству коммуникации
                            посредством правильного дизайна упаковки. В настоящее время он является спикером, получившим
                            признание в среде технических специалистов, специалистов по маркетингу и дизайнерских
                            агентств. Многие называют его богом в области упаковки! В настоящей статье, заказанной
                            специально для читателей новостной рассылки компании Ecolean, он делится своим
                            представлением о том, каким должен быть превосходный дизайн упаковки.<br><br>
                            Вот что, по мнению Ларса, требует наибольшего внимания при разработке дизайна упаковки:

                        </p>
                        <!-- begin  for_read_more-->
                        <div class="for_read_more">
                            «С самого начала компания должна уделить внимание следующим моментам:
                            бренд должен иметь ЧЕТКУЮ позицию;
                            дизайн упаковки должен:
                            – иметь свою идею/концепцию!
                            – быть в конечном итоге безупречным и уникальным;
                            дизайн должен рассматриваться в расширенном контексте, т.е. он должен быть частью ОБЩЕЙ
                            коммуникации; упаковка – с использованием материалов, обеспечивающих продолжительное
                            складское хранение – вторичная упаковка – POS материалы и т.д.»
                            ВЕРШИНА ДИЗАЙНА МОЛОЧНОЙ УПАКОВКИ
                            А существует ли такая вершина? Да, конечно! И не одна, а несколько, поскольку здесь все
                            зависит от типа упаковки (формы, материала и т.д.), культурной среды и канала сбыта. За 50
                            лет работы в сфере разработки дизайна молочной упаковкой от Китая до Бразилии и от Франции
                            до Индонезии у меня сформировались некоторые рекомендации.
                            Индивидуальный подход к каждому из компонентов дизайна упаковки является эффективным
                            способом анализа упаковки в целом. Существует 9 основных компонентов:
                            1. Выбор цвета (цветов)
                            2. Бренд
                            3. Молочные символы
                            4. Свежесть
                            5. Натуральность/чистота
                            6. Полезная информация
                            7. История/рассказ
                            8. Местное производство
                            9. Дифференциация
                            Когда каждый компонент оптимизирован, остается соединить все компоненты воедино, и здесь уже
                            заметную роль играет тип упаковки. Я выделяю следующие типы упаковки:
                            пластиковая, например, ECOLEAN (2 информационные панели)
                            картонная, например, Tetra brick, Combibloc и т.д. (4 информационные панели)
                            Старую, добрую стеклянную бутылку сейчас уже можно забыть, хотя для многих англосаксонских
                            рынков она играла значительную роль при продвижении идеи доставки молока на дом. Знаменитая,
                            первая четырехгранная упаковка, без сомнения, по-прежнему применяется, но в настоящее время
                            больше используется для сливок, чем для молока.

                            1. ЦВЕТА
                            Лучший цвет для молочной упаковки – это его отсутствие, т.е. белый как само молоко. Основной
                            вопрос здесь – насколько много. Слишком мало белого – и упаковка выглядит недостаточно
                            свежей и чистой. Слишком много белого снизит эффективность выкладки товара, т.е. речь идет о
                            низком контрасте и привлекательности для покупателя. Потом, существует чисто-белый цвет и
                            белый с примесью (т.е. грязнобелый). Контраст важен, поскольку он усиливает белый цвет.
                            Второй цвет – либо зеленый (свежий ярко-зеленый, не оливковый), либо голубой (свежий
                            небесно-голубой, не темно-синий).

                            Я бы сказал, что дизайн 80% всех молочных упаковок имеет в своей основе это базовое трио
                            цветов. Дополнительный цвет – это красный, который используется для увеличения степени
                            воздействия на покупателя и с целью информирования его о чем-то особенном. Да, есть
                            исключения, поскольку существует множество решений для получения превосходных вариантов
                            дизайна.

                            2. БРЕНД
                            Здесь я бы сказал, что молочный бренд в основном следует вышеописанным правилам. Я лично
                            участвовал в разработке логотипа Nestlé для молочной категории, который по результатам
                            тестирования получил очень высокую оценку. К сожалению, я узнал, что в настоящее время от
                            него отказались, и я действительно сожалею об этом. Если в категорию молочных продуктов
                            внедряется признанный бренд, совершенно очевидно, что его цветовая гамма может кардинально
                            отличаться от упомянутой выше.

                            3. МОЛОЧНЫЕ СИМВОЛЫ

                            С дизайнерской точки зрения, наличие большого количества образов делает эту категорию очень
                            интересной и разнообразной: зеленые поля, старинные фляги для перевозки молока, голова
                            коровы, молочный всплеск, коровий колокольчик, цветочные рисунки и т.д.

                            Упомянув об этом, к сожалению, следует отметить, что многие из этих образов не включены в
                            дизайн, а просто налеплены, как декорация, без предварительной интеграции, оптимизации и они
                            не используются во всех других средствах коммуникации. Здесь по-прежнему широкие возможности
                            для совершенствования!

                            4. ОЩУЩЕНИЯ СВЕЖЕСТИ МОЖНО ДОБИТЬСЯ ПРИ ПОМОЩИ:

                            сочетания цветов;
                            материала, т.е. насколько холодной кажется упаковка, когда покупатель берет ее в руку;
                            капелек воды (как и для безалкогольных напитков);
                            изображения зеленых полей и травы, которые заставляют забыть о том, что это продукт
                            промышленного производства.
                            5. НАТУРАЛЬНОСТЬ/ЧИСТОТА
                            Здесь, в основном, те же комментарии, что и для свежести, но в данном случае это больше
                            вопрос удостоверения качества продукта – «знак качества» (например, одобрение каким-либо
                            институтом) и зеленых листьев. Используемые слова и цифры имеют огромное значение, как,
                            например, 100% и т.д.

                            6. ПОЛЕЗНАЯ ИНФОРМАЦИЯ

                            Большинство покупателей знают, что в молоке содержится кальций, но хуже не будет, если эта
                            информация будет продублирована на упаковке. Не следует делать слишком большой акцент на
                            витаминах, поскольку это создает образ «искусственного» молочного продукта, что в настоящее
                            время не ценится. Далее см. раздел «Местное производство».

                            Очевидно, что информация о жирности продукта является важной, поскольку это понятно для
                            покупателя. Задняя информационная панель упаковки, которую я называю «служебной панелью»,
                            может быть двух типов:

                            информация о продукте (см. ниже);
                            информация, представляющая особый интерес и необязательно имеющая отношение к молоку. Это
                            то, в чем так преуспела компания Arla из Швеции. Без сомнения можно сказать, что «служебная
                            панель» на молочной упаковке Arla вызывает такой же интерес, как и ежедневная газета!

                            7. ИСТОРИЯ/РАССКАЗ

                            Ну, все удачные дизайны упаковок «рассказывают» какую-нибудь интересную историю. Для этой
                            статьи я выбрал историю йогурта Danone во Франции, в которой рассказывается о «молоке от
                            наших фермеров». Обратите внимание на:

                            листья травы;
                            божью коровку, приносящую удачу;
                            использование стеклянной баночки, хотя сам йогурт продается в пластиковом стаканчике.
                            Продукт в стеклянной баночке воспринимается как более естественный и свежий;
                            фермера зовут Норманди.
                            Поздравляю! Это превосходная коммуникация и идея, которую все мы разделяем. Она уносит нас
                            далеко…

                            8.МЕСТНОЕ ПРОИЗВОДСТВО

                            Чем ближе к месту проживания, тем свежее продукт! Я могу покупать молоко, которое
                            производится “La Gruyere”, известной своим сыром, так и в районе Женевского озера, где я
                            живу.

                            9. ВЫДЕЛЕНИЕ ГЛАВНОГО

                            IЧтобы с точностью донести до покупателя информацию о различных типах молока, лучше всего
                            использовать слова – не маленькие слова, а большие! Напиток, Легкий, Не содержит лактозу и
                            т.д. Если эти слова поддержаны цветовой символикой, вы в безопасности, но следите за тем,
                            чтобы цветовая символика не убила свежесть, заменив белый другим цветом!

                            Здесь я могу добавить еще одну – десятую рекомендацию – рекомендацию по уровню ДИЗАЙНА.
                            Опытный дизайнер работает в 3D (см илл. от Arla без лактозы), т.е. он разрешает элементам
                            дизайна накладываться друг на друга или даже продолжаться на другой стороне. Такой опытный
                            дизайнер понимает также ценность символического словарного (знак качества) и визуального
                            языка (фермер Винсент).

                            Я очень надеюсь, что приведенные выше рекомендации окажутся полезными как для производителей
                            молока, так и для дизайнеров!

                            Lars Wallentin

                            ВЕРШИНА ДИЗАЙНА МОЛОЧНОЙ УПАКОВКИ
                            1. – Выбор цвета (цветов)
                            2. – Бренд
                            3. – Молочные символы
                            4. – Свежесть
                            5. – Натуральность/чистота
                            6. – Полезная информация
                            7. – История/рассказ
                            8. – Местное производство
                            9. – Дифференциация
                        </div>
                        <!-- end  for_read_more-->
                        <span class="button_read_more">
							<span class="animated fadeIn active">Читать дальше</span>
							<span class="">Скрыть</span>
						</span>
                    </div>
                    <!-- end text_block animated -->
                </div>
                <!-- end container -->
            </section>
            <!-- end some_text -->
            <!-- begin some_text -->
            <section class="some_text big_padding">
                <!-- begin container -->
                <div class="container">
                    <!-- begin left_container animated -->
                    <div class="left_container animated left">
                        <h2>Анализ конкурентов<br> по молочно сырной продукции</h2>
                    </div>
                    <!-- end left_container animated -->

                    <!-- begin text_block animated -->
                    <div class="text_block animated right">
                        <p>
                            Рассказать про конкурентов подробней. Больше инфы с картинками, с перечнем всего что входит
                            в зонтичный бренд. Успехи. Но очень емко.
                        </p>
                    </div>
                    <!-- end text_block animated -->
                </div>
                <!-- end container -->
            </section>
            <!-- begin some_text -->
            <section class="some_text padding_customer">
                <!-- begin container -->
                <div class="container">
                    <!-- begin left_container animated -->
                    <div class="left_container animated fade">
                        <h2>О потребителях</h2>
                    </div>
                    <!-- begin text_block animated -->
                    <div class="text_block animated fade">
                        <p>
                            Кто покупатель?
                        </p>
                    </div>
                    <!-- end text_block animated -->
                </div>
                <!-- end container -->
            </section>
            <!-- begin some_text -->
            <!-- begin some_text -->
            <section class="some_text padding_twostep">
                <!-- begin container -->
                <div class="container">
                    <!-- begin left_container animated -->
                    <div class="left_container">
                        <h2>Этап 2 - Разработка главной концепции дизайна<br> твердых сыров </h2>
                    </div>
                    <!-- begin text_block animated -->
                    <div class="text_block">
                        <p>
                            Сыры будут фасоваться в удобную 220 г. паску. и большими кусками по 10 5 и 2 кг. Куски будут
                            разных форм.
                            Поскольку потребитель чаще всего будет сталкиваться непосредственно с мелкими фасовками (на
                            прилавке, дома в холодильнике), то разработку концепции мы начали именно с этого формата.
                            <br><br>

                            Сначала мы мыслили как все (стериотипно):
                        </p>
                    </div>
                    <!-- end text_block animated -->
                </div>
                <!-- end container -->
            </section>
            <!-- begin some_text -->
            <!-- begin showcase_stereotip -->
            <div class="showcase_stereotip">
                <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAkwBADs="
                     data-original="/files/images/globino/russians_hard.png" alt="name image" class="lazy">
                <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAkwBADs="
                     data-original="/files/images/globino/globino_chease.png" alt="name image" class="lazy">
                <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAkwBADs="
                     data-original="/files/images/globino/globino_chease2.png" alt="name image" class="lazy">
                <div class="first_paralax" id="showcase_stereotip_1"></div>
                <div class="second_paralax" id="showcase_stereotip_2"></div>
                <div class="third_paralax" id="showcase_stereotip_3"></div>
            </div>
            <!-- end showcase_stereotip -->
        </section>
        <!-- end works_whith_brand -->
        <!-- begin conception -->
        <section class="conception_one">
            <!-- begin some_text -->
            <section class="some_text">
                <!-- begin container -->
                <div class="container">
                    <!-- begin left_container animated -->
                    <div class="left_container animated left">
                        <h2>Тенденции в оформлении:</h2>
                    </div>
                    <!-- begin text_block animated -->
                    <div class="text_block animated right">
                        <p>
                            Концепт 1: Домашний<br>
                            Ключевые слова: Скатерть, вышиванка, уют, забота, традиции.
                            Матовый белый это основной цвет упаковки, а это цвет молока.
                            Концепт получился легким, стильным, не навязчивым. Просто, но со вкусом… молока.<br>
                            Узоры, напоминающие украинский орнамент, вызывают патриотические эмоции, что сейчас является
                            высоким стимулом к покупке. Узоры – это мощный идентифицирующий элемент, с помощью которых
                            пачка сыров Глобино будет узнаваться даже на 80% накрытая чем-то сверху.<br>
                            Коммуникация: «В кращих традиціях сироваріння, від найбільшого національного виробника!»<br>
                            Посыл состоит из двух частей:<br>
                            1. Вековые традиции приготовления сыра, что подкрепляется классическим дизайном
                            2. Перенос авторитета ТМ в колбасном сегменте на сырный.
                        </p>
                        <!-- begin  for_read_more-->
                        <div class="for_read_more">
                            Концепт 2 - Экологичность
                            Ключевые слова: деревня, экономия, СССР, мануфактура, экологичность.
                            Как же делают сыр? А вот так, как нарисовано на картинке. Все очень просто и традиционно:
                            коровы на чистом лугу, и экологически чистое производство.<br>
                            По результатам опроса, такой образ возникает в голове покупателей
                            Темы: сохранение природы и экономия на упаковке, согласно исследований, пользуется высокой
                            популярностью.<br><br>

                            Концепт 3 – довольная корова<br>
                            Ключевые слова: молоко, вкусно, современно, движение.<br>
                            Основной идентифицирующий элемент – это голова коровы. Объект обладает высокой
                            узнаваемостью.<br>
                            Необычная и динамичная геометрия смотрового окна, может быть продлена на боковую и тыльную
                            часть упаковки.<br>
                            Динамичный логотип Глобино удачно дополняет эмоциональность концепта.
                            Зубчики вверху упаковки – дополнительный элемент идентификации, который поможет отыскать
                            присыпанную упаковку на торговой полке.<br>
                            Корова облизывается, говоря нам о том, что она либо вкусно поела, либо рекомендует очень
                            вкусный сыр.<br>
                            Преобладание белого цвета подчеркивает «молочность» продукта.
                            Коммуникация: «Из натурального молока», что подкрепляется
                        </div>
                        <!-- end  for_read_more-->
                        <span class="button_read_more">
							<span class="animated fadeIn active">Читать дальше</span>
							<span class="">Скрыть</span>
						</span>
                    </div>
                    <!-- end text_block animated -->
                </div>
                <!-- end container -->
            </section>
            <!-- end some_text -->
            <!-- begin showcase_stereotip -->
            <div class="showcase_stereotip bigger_padding">
                <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAkwBADs="
                     data-original="/files/images/globino/russians_backside.png" alt="name image" class="lazy">
                <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAkwBADs="
                     data-original="/files/images/globino/russians_on_concept.png" alt="name image" class="lazy">
                <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAkwBADs="
                     data-original="/files/images/globino/russians_backside2.png" alt="name image" class="lazy">
                <div class="first_paralax" id="showcase_stereotip_4"></div>
                <div class="second_paralax" id="showcase_stereotip_5"></div>
                <div class="third_paralax" id="showcase_stereotip_6"></div>
            </div>
            <!-- end showcase_stereotip -->
            <!-- begin what_element -->
            <section class="what_element">
                <!-- begin container -->
                <div class="container">
                    <p class="from_what">
                        Из каких элементов состоит дизайн упаковки (коммуникация) сыров от Глобинского молочного
                        комбината
                    </p>
                    <!-- begin circle moremilk -->
                    <div class="circle moremilk">

                    </div>
                    <!-- end circle moremilk -->
                    <p class="color_identefication">
                        Смотровое окно - самый главный элемент особенно для сыров. Потребитель толком не помнит названия
                        сыров, и вообще он часто эксперементирует. Так вот выбор делает по цвету, по дыркам и по
                        матовости либо глянцевости (слизь).

                    </p>
                    <!-- begin infografic -->
                    <div class="infografic">
                        <!-- begin circle blot -->
                        <div class="circle blot">

                        </div>
                        <!-- end circle blot -->
                        <p>Подкрепляющие текста и<br> инфорафика</p>
                    </div>
                    <!-- end infografic -->
                    <!-- begin important_info -->
                    <div class="important_info">
                        <!-- begin circle netto -->
                        <div class="circle netto">
                        </div>
                        <!-- end circle netto -->
                        <p>
                            Важное чтиво. Обеспечивает повторную покупку. Ведь самая главная цель - это проджи.
                            Дополняет позиционирование. Увеличивает вес восприятия продукта. Покупатели таким фразам
                            доверяют, если не видят очевидных возвражений.
                        </p>
                    </div>
                    <!-- end important_info -->
                    <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAkwBADs="
                         data-original="/files/images/globino/globino_blue_logo.png" alt="name image"
                         class="lazy clientlogo animated fade">
                </div>
                <!-- end container -->
            </section>
            <!-- end what_element -->
        </section>
        <!-- end conception -->
        <!-- begin unique -->
        <section class="unique">
            <!-- begin wave_block -->
            <div class="wave_block">
                <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAkwBADs="
                     data-original="/files/images/globino/globino_white_logo.png" alt="name image"
                     class="lazy clientlogo animated top">
                <div class="first_paralax" id="paralax_on_wave_1"></div>
                <div class="second_paralax" id="paralax_on_wave_2"></div>
                <div class="third_paralax" id="paralax_on_wave_3"></div>
                <!-- begin some_text -->
                <section class="some_text">
                    <!-- begin container -->
                    <div class="container">
                        <!-- begin left_container animated -->
                        <div class="left_container animated fade">
                            <h2>Уникальное торговое предложение</h2>
                        </div>
                        <!-- begin text_block animated -->
                        <div class="text_block animated fade">
                            <p>
                                Необычный ход (нестандартное мышление) - удел победителей (как-то так. тут нужна яркая
                                цитата)<br>
                                УТП должно быть уникально. Оно не должно вызывать сомнений. Должно подчеркивать основную
                                коммуникацию и позиционирование.<br>
                                Мы решили заявить противоречие. что привлечет внимание, обеспечит запоминаемость
                            </p>
                        </div>
                        <!-- end text_block animated -->
                    </div>
                    <!-- end container -->
                </section>
                <!-- end some_text -->

                <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAkwBADs="
                     data-original="/files/images/globino/cards.png" alt="name image" class="lazy cards">
                <p class="text_globino">
                    Поскольку производство сыра осуществляется по ДСТУ ГОСТАМ и фиксированным стандартам у нас появилась
                    идея высветить очевидную информацию, но как ни странно ни кем еще не использованную. Что на
                    производство 1 кг идет 10,5 литров…
                </p>
                <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAkwBADs="
                     data-original="/files/images/globino/sketch.jpg" alt="name image" class="lazy sketch">
                <!-- begin container -->
                <div class="container">
                    <!-- begin flex_container -->
                    <div class="flex_container">
                        <!-- begin transpaernt_pontone -->
                        <div class="transparent_pantone">
                            <p class="pantone"></p>
                            <p class="under_pantone">pantone</p>
                        </div>
                        <!-- end transpaernt_pontone -->
                        <!-- begin light_blue_pantone -->
                        <div class="light_blue_pantone">
                            <p class="pantone"></p>
                            <p class="under_pantone">pantone</p>
                        </div>
                        <!-- end light_blue_pantone -->
                        <!-- begin blue_pantone -->
                        <div class="blue_pantone">
                            <p class="pantone"></p>
                            <p class="under_pantone">pantone</p>
                        </div>
                        <!-- end blue_pantone -->
                        <!-- begin beige_pantone -->
                        <div class="beige_pantone">
                            <p class="pantone"></p>
                            <p class="under_pantone">pantone</p>
                        </div>
                        <!-- end beige_pantone -->
                    </div>
                    <!-- end flex_container -->
                </div>
                <!-- end container -->
                <!-- begin some_text -->
                <section class="some_text text_color">
                    <!-- begin container -->
                    <div class="container">
                        <!-- begin left_container animated -->
                        <div class="left_container animated top">
                            <h2>Авторский надзор за изготовлением первого тиража упаковки</h2>
                        </div>
                        <!-- begin text_block animated -->
                        <div class="text_block animated top">
                            <p>
                                Способ печати: глубокая печать. <br>
                                Подготовили оригинал-макеты. Выполнили допечатную подготовку. <br>
                                На приладке в типографии утвердили самый важный элемент бренда - идентифицирующий цвет.
                                Теперь молочное Глобино будет выглядить так.
                            </p>

                        </div>
                        <!-- end text_block animated -->
                    </div>
                    <!-- end container -->
                </section>
                <!-- end some_text -->
                <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAkwBADs="
                     data-original="/files/images/globino/all_production_on_screen.jpg" alt="name image"
                     class="lazy fullpage">

            </div>
            <!-- end wave_block -->
        </section>
        <!-- end unique -->
        <!-- begin other_package -->
        <section class="other_package">
            <h2 class="name_block">Перенос концепции на другие форматы упаковки</h2>
            <!-- begin some_text -->
            <section class="some_text small_padding">
                <!-- begin container -->
                <div class="container">
                    <!-- begin left_container animated -->
                    <div class="left_container animated left">
                        <h2>Разработка других элементов фирменного стиля</h2>
                    </div>
                    <!-- begin text_block animated -->
                    <div class="text_block animated right">
                        <p>
                            Имея на руках адаптивный фирменный стиль, несложно перенести его на основные носители, с
                            которыми сталкивается потребитель.Например:
                        <ul class="no_list_style">
                            <li>ценники;</li>
                            <li>пакеты;</li>
                            <li>корпоративный транспорт;</li>
                            <li>одежда для персонала;</li>
                        </ul>
                        Все элементы соответствуют главной идее и отражают концепцию позиционирования.
                        </p>
                    </div>
                    <!-- end container -->

            </section>
            <!-- end some_text -->
            <!-- begin gallery -->
            <div class="gallery">
                <!-- begin left_column -->
                <div class="left_column">
                    <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAkwBADs="
                         data-original="/files/images/globino/manvschease.jpg" alt="name image" class="lazy">
                    <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAkwBADs="
                         data-original="/files/images/globino/productions.jpg" alt="name image" class="lazy">
                </div>
                <!-- end left_column -->


                <!-- begin right_column -->
                <div class="right_column">
                    <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAkwBADs="
                         data-original="/files/images/globino/milkvschease.jpg" alt="name image" class="lazy">
                    <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAkwBADs="
                         data-original="/files/images/globino/naturmort.jpg" alt="name image" class="lazy">
                </div>
                <!-- end right_column -->
                <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAkwBADs="
                     data-original="/files/images/globino/nice_chease.jpg" alt="name image" class="lazy nicechease">
                <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAkwBADs="
                     data-original="/files/images/globino/plungervschease.jpg" alt="name image" class="lazy plung">
                <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAkwBADs="
                     data-original="/files/images/globino/car.jpg" alt="name image" class="lazy">
                <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAkwBADs="
                     data-original="/files/images/globino/uniform.jpg" alt="name image" class="lazy uniform">
                <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAkwBADs="
                     data-original="/files/images/globino/uniform_front.jpg" alt="name image"
                     class="lazy uniform_front">


            </div>
            <!-- end gallery -->
            <div class="clear"></div>
        </section>
        <!-- end other_package -->
        <!-- begin some_text -->
        <section class="some_text this_padding">
            <!-- begin container -->
            <div class="container">
                <!-- begin left_container animated -->
                <div class="left_container animated left">
                    <h2>Над проектом работали</h2>
                </div>
                <!-- begin text_block animated -->
                <div class="text_block animated right">
                    <p>
                        Со стороны КОЛОРО: Руководитель проекта, Аккаунт-менеджер, 2 дизайнера, 2 маркетолога,
                        копирайтер.<br>
                        Со стороны Клиента: дизайнер, технолог, ОТК и 2 ТОП менеджера. <br>
                        Приблизительный срок реализации проекта от обсуждения ТЗ до печати упаковки = 4 месяца<br>
                    </p>
                    <!-- begin  for_read_more-->
                    <div class="for_read_more">
                        C каждым новым проектом мы учимся чему-то новому, становимся опытнее и креативнее!. За это мы
                        благодарны своим клиентам и партнерам. Без чуйки и опыта руководителей Глобино данного чуда бы
                        не случилось.
                    </div>
                    <!-- end  for_read_more-->
                    <span class="button_read_more">
							<span class="animated fadeIn active">Читать дальше</span>
							<span class="">Скрыть</span>
						</span>
                </div>
                <!-- end text_block animated -->
            </div>
            <!-- end container -->
        </section>
        <!-- end some_text -->
        <!-- begin some_text -->
        <section class="some_text result_padding">
            <!-- begin container -->
            <div class="container">
                <!-- begin left_container animated -->
                <div class="left_container animated fade">
                    <h2>Итоги</h2>
                </div>
                <!-- begin text_block animated -->
                <div class="text_block animated fade">
                    <p>
                        С момента выхода продажи пошли вверх.
                        Старых покупателей мы не потеряли. Начинают появляться новые, которых привлек современный дизайн
                        и УТП<br>
                        Для молочного направления был разработана собственный фирменный стиль, который перекликается с
                        мясным. <br>
                        Что еще хорошего? Как обогатился Глобино?
                    </p>
                    <!-- begin  for_read_more-->
                    <div class="for_read_more">

                    </div>
                    <!-- end  for_read_more-->
                    <span class="button_read_more">
							<span class="animated fadeIn active">Читать дальше</span>
							<span class="">Скрыть</span>
						</span>
                </div>
                <!-- end text_block animated -->
            </div>
            <!-- end container -->
        </section>
        <!-- end some_text -->
    @include('client.portfolio._form_prev_next_work')
    @stop

    <!-- end of subscribe_form -->
    @section('page-scripts')

        <!-- OwlCarousel -->
            <script src="/js/owl.carousel.min.js"></script>
            <!--<script src="../js/owl.lazyload.js"></script>-->

            <!-- SmoothScroll -->
            <!--<script src="../js/SmoothScroll.js"></script>-->
            <script src="../js/viewportchecker.js"></script>
            <script src="/js/SmoothScroll.js"></script>

            <!-- star rating -->
            <script src="/js/star-rating.js"></script>
            <link rel="stylesheet" href="/css/star-rating.css" media="all" type="text/css"/>
            <script type="text/javascript">
                $(".rating").rating({min: 1, max: 5, step: 0.5, size: 'sm'});

                $('.clear-rating').hide();
                $('.caption').hide();
            </script>


            <!-- include own JavaScript -->
            <script src="/js/globino.js"></script>

@stop
