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

<section id="korporaciya-razvitie">
    <div class="bg-container top-container" style="background-image: url('/images/portfolio/korporaciya-razvitie/korporaciya-razvitie-2.jpg')">
        <div class="dark-mask"></div>
        <div class="gl-container title-container">
            <h1 class="top-title">
                Корпорация «Развитие»
            </h1>
            <h2 class="top-title-small">
                «Динамическое развитие,
                новаторство и современность»
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
                    С целью разработки модели бренда, брендбука и фирменного стиля к компании
                    KOLORO  обратилось правительство Белгородской области (Россия). А именно —
                    <span>компания «Развитие», занимающаяся проектными решениями по стимулированию
                        инвестиционной деятельности на территории Белгородской области.</span>
                </p>
                <div class="for-read-more">
                    <p>
                        Цель деятельности компании - повышение уровня жизни белгородцев и создание
                        благоприятных условий для развития малого и среднего бизнеса.
                    </p>
                    <p>
                        То есть, по своим задачам «Развитие» - это компания будущего.
                    </p>
                </div>
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
                    Передовая, стремительная, развивающаяся, прогрессивная и надежная.
                    Именно такой  видят компанию «Развитие» целевые сегменты. На основе
                    данной концепции позиционирования необходимо было <span>разработать
                    <a class="gl-link" href="https://koloro.ua/sozdat-logotip.html" target="_blank">
                        несколько вариантов логотипа
                    </a> и
                    <a class="gl-link" href="https://koloro.ua/razrabotka-firmennogo-stilya.html" target="_blank">
                        фирменного стиля
                    </a> для корпорации «Развитие»,</span> которые
                    полностью раскрывали бы сформированную модель бренда: современная компания,
                    идущая в ногу со временем и прогрессом.
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
                <h3 class="info-left-title">Разработка логотипа и фирменный стиль</h3>
            </div>
            <div class="info-right">
                <p>
                    <a class="gl-link" href="https://koloro.ua/sozdat-logotip.html" target="_blank">
                        Создание логотипа
                    </a> (по пожеланию заказчика) было выполнено в двух языковых
                    вариантах — русском и английском: «Развитие» и «PROGRESS».
                </p>
            </div>
        </div>
    </div>

    <div class="info-block-container">
        <div class="gl-container">
            <div class="info-left">
                <h3 class="info-left-title">Концепт -  «Процесс развития»</h3>
            </div>
            <div class="info-right">
                <p>
                    В данном концепте переданы следующими <span>элементами фирменного стиля: постепенно
                    нарастающая волна</span>, а также <span>увеличивающиеся кольца в логотипе компании</span>,
                    цветовая насыщенность которых возрастает слева направо. Таким образом,
                    <span>все элементы фирменного стиля указывают на движение вперед</span> и стремительность компании.
                </p>
                <p class="for-read-more">
                    <span>Прямоугольная форма логотипа идеально подходит для деловой документации</span> и
                    способствует качественной корпоративной идентификации. В данном концепте
                    название компании является основным элементом логотипа, хорошо просматривается и легко читается.
                </p>
                <span class="read-more-btn">Читать дальше</span>
            </div>
        </div>
    </div>

    <div class="gl-container">
        <h2 class="h2-title">Концепт — «Процесс развития»</h2>
    </div>
    <div class="image-container">
        <img src="/images/portfolio/korporaciya-razvitie/korporaciya-razvitie-1.jpg" alt="korporaciya-razvitie-picture">
    </div>

    <div class="info-block-container">
        <div class="gl-container">
            <div class="info-left">
                <h3 class="info-left-title">Концепт - "Новаторство и современность"</h3>
            </div>
            <div class="info-right">
                <p>
                    <span>Второй концепт раскрывает динамическое развитие, новаторство и современность</span>
                    компании выражены следующими элементами фирменного стиля: <span>буква «Р», построенная
                    из линий цветов российского государственного флага</span> (красного, синего и белого),
                    напоминающая «следы от саней на снегу», <span>олицетворяющих движение вперед сквозь преграды,
                    прогресс и устремленность в будущее.</span>
                </p>
                <p class="for-read-more">
                    Кроме того, в логотипе компании присутствует  такой <span>графический элемент,
                    как «крыло»,</span> напоминающее сандалию древнегреческого бога Гермеса, и еще раз
                    <span>подчеркивающее прогрессивность компании</span>. А также вызывающее у потребителя
                    ощущение надежности и стабильности.
                </p>
                <span class="read-more-btn">Читать дальше</span>
            </div>
        </div>
    </div>

    <div class="gl-container">
        <h2 class="h2-title">Концепт — "Новаторство и современность"</h2>
    </div>
    <div class="image-container">
        <img src="/images/portfolio/korporaciya-razvitie/korporaciya-razvitie-2.jpg" alt="korporaciya-razvitie-picture">
    </div>

    <div class="info-block-container">
        <div class="gl-container">
            <div class="info-left">
                <h3 class="info-left-title">Концепт - "Прогресс"</h3>
            </div>
            <div class="info-right">
                <p>
                    В основе <span>третьего концепта лежит ассоциация слова «прогресс» с растительной
                    тематикой</span>, ведь деревья и растения действительно всегда олицетворяли развитие
                    и рост. Помимо выбранного цвета «сочной зелени», формирующего позитивное отношение
                    к компании, в графическом дизайне концепта также используется насыщенный серый,
                    что гармонично дополняет задуманный природный образ компании.
                </p>
                <p class="for-read-more">
                    <span>В логотипе присутствует такой высокоузнаваемый элемент фирменного стиля,
                        как «старая лоза»</span> и прорастающий из нее «молодой росток» в виде буквы «Р».
                    В данном случае проводится ассоциация: «старая лоза» - правительство, а
                    «прорастающий росток» - новые инвестиционные проекты, которым дает жизнь
                    правительство Белгородской области. Такой логотип прекрасно отображает и
                    идею корпорации о том, что даже от малого вклада (семени или ростка) в
                    развитие страны, в будущем обязательно будет огромный результат.
                </p>
                <span class="read-more-btn">Читать дальше</span>
            </div>
        </div>
    </div>

    <div class="gl-container">
        <h2 class="h2-title">Концепт — "Прогресс"</h2>
    </div>
    <div class="image-container">
        <img src="/images/portfolio/korporaciya-razvitie/korporaciya-razvitie-3.jpg" alt="korporaciya-razvitie-picture">
    </div>

    <div class="gl-container">
        <h2 class="h2-title">Элементы фирменного стиля для концепта "Прогресс""</h2>
    </div>
    <div class="image-container">
        <img src="/images/portfolio/korporaciya-razvitie/korporaciya-razvitie-4.jpg" alt="korporaciya-razvitie-picture">
    </div>
    <div class="image-container">
        <img src="/images/portfolio/korporaciya-razvitie/korporaciya-razvitie-5.jpg" alt="korporaciya-razvitie-picture">
    </div>

    <div class="info-block-container">
        <div class="gl-container">
            <div class="info-left">
                <h3 class="info-left-title">Концепт - "Дуб"</h3>
            </div>
            <div class="info-right">
                <p>
                    <span>Четвертый концепт</span>, так же как и третий, выдержан в <span>растительной тематике.</span>
                </p>
                <p>
                    <span>Основным элементом логотипа является дуб</span> - благородный, сдержанный и лаконичный.
                    Дуб <span>отображает серьезность и надежность компании</span>. В данном логотипе есть не только
                    приятный графический дизайн, в нем есть идея и смысл. Дуб символизирует могущество,
                    надежность, стабильный рост и непрерывное развитие. Именно это <span>должно ассоциироваться
                    с надежной корпорацией</span>: ей должны доверять, видеть в ней прогресс, быть уверенными
                    в ее будущем и в ее положительном результате.
                </p>
            </div>
        </div>
    </div>

    <div class="gl-container">
        <h2 class="h2-title">Концепт — "Дуб"</h2>
    </div>
    <div class="image-container">
        <img src="/images/portfolio/korporaciya-razvitie/korporaciya-razvitie-6.jpg" alt="korporaciya-razvitie-picture">
    </div>

    <div class="info-block-container">
        <div class="gl-container">
            <div class="info-left">
                <h3 class="info-left-title">Результат</h3>
            </div>
            <div class="info-right">
                <p>
                    <span>Все 4 концепта легко воспринимаются и запоминаются</span>. С помощью данных
                    элементов фирменного стиля можно добиться желаемой узнаваемости бренда
                    потребителем. Концепты агитируют  и призывают вкладывать средства именно
                    в эту корпорацию. К тому же, <span>все 4 концепта вызывают желание присоединится
                    и стать частью компании</span>, в составе которой можно менять и строить свое будущее.
                </p>
            </div>
        </div>
    </div>

    <div class="gl-container">
        <h2 class="h2-title">4 концепта фирменного стиля для корпорации "Развитие"</h2>
    </div>
    <div class="image-container">
        <img src="/images/portfolio/korporaciya-razvitie/korporaciya-razvitie-7.jpg" alt="korporaciya-razvitie-picture">
    </div>

    <div class="info-block-container">
        <div class="gl-container">
            <div class="info-left">
                <h3 class="info-left-title">Бренд бук</h3>
            </div>
            <div class="info-right">
                <p>
                    На основе разработанной модели бренда и концепции позиционирования был создан
                    перечень приемов, обеспечивающих единый графический фирменный стиль компании —
                    <a class="gl-link" href="https://koloro.ua/sozdanie-brendbuka.html" target="_blank">
                        брендбук
                    </a>. Была <span>подобрана цветовая гамма, шрифты, логотип и другие элементы
                    фирменного стиля для рекламной продукции</span> и материалов: фирменных бланков,
                    полиграфической продукции, сувенирной продукции и других рекламных материалов.
                    А также разработана обоснованная стратегия продвижения бренда корпорации «Развитие».
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
                    Эксклюзивный фирменный стиль подчеркнет индивидуальность и профессионализм компании,
                    повышает доверие потребителей. Если вы хотите, чтобы ваш бренд стал «королем» среди
                    брендов, тогда разработка фирменного стиля – для вас задача номер один. Ведь любая
                    «королевская особа» имеет свои «атрибуты власти» - печать, скипетр, оружие, держава
                    и корона. Ваши «атрибуты власти» — это элементы фирменного стиля.
                </p>
            </div>
        </div>
    </div>

    @include('client.portfolio._star_rating_form')

    @include('client.portfolio._form_prev_next_work')

</section>
@stop

@section('page-scripts')
    <script src="/js/portfolio-main.js"></script>
    @php($data = [
    'type' => 'portfolio',
    'id' => $portfolio->id
    ])

    @include('layouts.partials.star-rating', ['data'=>$data])
@stop