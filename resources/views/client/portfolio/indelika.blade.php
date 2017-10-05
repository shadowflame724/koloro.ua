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
    <link rel="stylesheet" href="/css/indelika.css">
@stop


@section('page-content')

    <!--PRELOADER!!! -->
    <div id="preloader"></div>

    @include('layouts.whiteheader')


<section id="indelika">
    <!--class="portfolio_block"-->
    <div class="bg-container image-top">
        <div class="dark-mask top-mask"></div>

        <div class="gl-container">
            <h1 class="top-title">Інделіка <br> "Продукт із м'яса індички"</h1>
        </div>

    </div>

    <!--<div class="bg-container image-second"></div>-->

    <div class="image-container logo-container">
        <img src="/files/images/indelika/logo-indelika.png" alt="photo-image" class="big-image image-2">
    </div>

    <div class="info-block-container info-history">
        <div class="gl-container">
            <div class="info-left">
                <h3 class="info-left-title">Предыстория</h3>
            </div>
            <div class="info-right">
                <p>
                    Торговая марка «Інделіка» не первый год представлена на украинском мясном рынке.
                    Компания производит продукцию из мяса индейки,
                    <span>которая считается самой полезной и диетической птицей.</span>
                    Производством под этой торговой маркой занимается подразделение Группы "Рамбурс"
                    — Племптицесовхоз "Броварской", расположенный в Броварском районе Киевской области. <br>
                </p>
                <p class="for-read-more">
                    Торговая марка «Інделіка» не первый год представлена на украинском мясном рынке.
                    Компания производит продукцию из мяса индейки, которая считается самой полезной и
                    диетической птицей. Производством под этой торговой маркой занимается подразделение
                    Группы "Рамбурс" — Племптицесовхоз "Броварской", расположенный в Броварском районе Киевской области.
                </p>
                <span class="read-more-btn">Читать дальше</span>
            </div>
        </div>
    </div>

    <div class="bg-container image-3"></div>

    <div class="info-block-container info-aim">
        <div class="gl-container">
            <div class="info-left">
                <h3 class="info-left-title">Задача</h3>
            </div>
            <div class="info-right">
                <p>
                    Задачей нашей компании стала разработка нового дизайна упаковки и
                    этикетки для ТМ «Інделіка», которые не только будут соответствовать
                    фирменному стилю бренда, концепции позиционирования и транслировать
                    ключевой коммуникационный посыл потребителю,
                    <span>но и выгодно выделят продукцию компании на фоне конкурентов.</span> <br>
                </p>
                <p class="for-read-more">
                    Торговая марка «Інделіка» не первый год представлена на украинском мясном рынке.
                    Компания производит продукцию из мяса индейки, которая считается самой полезной и диети-
                </p>
                <span class="read-more-btn">Читать дальше</span>
            </div>
        </div>
    </div>

    <div class="bg-container image-4"></div>

    <div class="info-block-container info-solution">
        <div class="gl-container">
            <div class="info-left">
                <h3 class="info-left-title">Решение</h3>
            </div>
            <div class="info-right">
                <p>
                    Перед созданием дизайна упаковки и этикетки, маркетологи и дизайнеры
                    компании KOLORO проанализировали бренд-платформу ТМ «Інделіка».
                    В основе позиционирования бренда —
                    <span> сохранение натуральности и пользы мясной продукции,
                        высокое качество изделий без потери вкуса.
                    </span>
                    <br> «Інделіка» позиционирует себя как производитель натуральных продуктов,
                    которые по вкусу и качеству не уступают домаш-  <br>
                </p>
                <p class="for-read-more">
                    Торговая марка «Інделіка» не первый год представлена на украинском мясном рынке.
                    Компания производит продукцию из мяса индейки, которая считается самой полезной и диети-
                </p>
                <span class="read-more-btn">Читать дальше</span>
            </div>
        </div>
    </div>

    <div class="bg-container image-5"></div>

    <div class="stickers-container">
        <div class="gl-container">
            <h2>Шрифты этикетки</h2>
            <div class="image-container fonts-container">
                <img src="/files/images/indelika/font-1.png" alt="photo-image" class="font-1">
                <img src="/files/images/indelika/font-2.png" alt="photo-image" class="font-2">
                <img src="/files/images/indelika/font-3.png" alt="photo-image" class="font-3">
            </div>
        </div>
    </div>

    <div class="stickers-colors-container">
        <div class="gl-container">
            <h2>Цвета этикетки</h2>

            <div class="color-left">
                <div class="color-container">
                    <h3>Pantone Black 6 С</h3>
                    <div class="pointer-container black">
                        <span class="circle"></span>
                        <span class="line"></span>
                        <span class="big-circle"></span>
                    </div>
                    <p>Основной фон</p>
                </div>
                <div class="color-container">
                    <h3>Золотое тиснение</h3>
                    <div class="pointer-container gold-black">
                        <span class="circle"></span>
                        <span class="line"></span>
                        <span class="big-circle"></span>
                    </div>
                    <p>Основной текст, <br>
                        декоративные елементы</p>
                </div>
                <div class="color-container">
                    <h3>Pantone 7407 C</h3>
                    <div class="pointer-container gold">
                        <span class="circle"></span>
                        <span class="line"></span>
                        <span class="big-circle"></span>
                    </div>
                    <p>Текст, <br> второстепенные елементы</p>
                </div>
            </div>
            <div class="color-right">
                <div class="color-container">
                    <h3>Pantone 7621 C</h3>
                    <div class="pointer-container red">
                        <span class="circle"></span>
                        <span class="line"></span>
                        <span class="big-circle"></span>
                    </div>
                    <p>Цвет линейки, красный</p>
                </div>
                <div class="color-container">
                    <h3>Pantone 7731 C</h3>
                    <div class="pointer-container green">
                        <span class="circle"></span>
                        <span class="line"></span>
                        <span class="big-circle"></span>
                    </div>
                    <p>Цвет линейки, зеленый</p>
                </div>
                <div class="color-container">
                    <h3>Pantone 7455 C</h3>
                    <div class="pointer-container blue">
                        <span class="circle"></span>
                        <span class="line"></span>
                        <span class="big-circle"></span>
                    </div>
                    <p>Цвет линейки, синий </p>
                </div>
            </div>
        </div>

    </div>

    <div class="concepts-info">
        <div class="gl-container">
            <h2>Вариации Концептов</h2>
            <p>
                Сгенерировав и согласовав все идеи с копирайтерами, маркетологами и
                психологами, дизайнеры бренд-студии KOLORO приступили к отрисовке логотипа.
                Вот 5 вариантов, которые были отправлены заказчику для выбора и утверждения.
            </p>
        </div>
    </div>

    <!--**************** SLIDER **********************-->

    <div class="owl-carousel owl-theme">
        <div class="item">
            <!--<img src="/files/images/indelika/indelika-concept-1.jpg" alt="photo-image" class="img-right">-->
            <div class="bg-container-right img-1"></div>
            <div class="gl-container">
                <h2>Концепт № 1 - Павлиний хвост</h2>

                <div class="info-text">
                    <p>
                        <span>В основе третьего концепта — </span> узор с изображением золотых павлиньих перьев. <br>
                        <span>Ключевые слова:</span> блеск, роскошь, солидность, натуральность.
                        Основные цвета — золотой и темно-коричневый, а также дополнительные цветные
                        элементы (красный, зеленый, синий) на разных видах продуктов из линейки.
                        Золото с черным  — одно из самых удачных сочетаний. Тем более что эти цвета
                        преобладают в логотипе. Использование золотого цвета вызывает четкую ассоциацию
                        с богатством, роскошью, высоким качеством, а значит, продукция торговой марки
                        будет восприниматься как элемент премиум сегмента.
                        Отличительная особенность этого концепта — яркий идентифицирующий элемент в
                        виде золотых павлиньих перьев. Распущенные перья создают ауру легкости и комфорта.
                        Изображение перьев как нельзя лучше транслирует потребителю особенности товара,
                        вызывая ассоциации с птицей. Кроме того, узор отлично сочетается с логотипом компании
                        и делает этикетку визуально привлекательной для покупателя.
                        Опрос показал, что продукт с такой этикеткой воспринимается как премиальный,
                        внушающий доверие. Ничего лишнего, все по правилам и стандартам.
                        Помимо традиционной упаковки, заказчику было предложено нанести узор
                        из золотых перьев на прозрачную обертку колбасных изделий. Такое дизайнерское
                        решение сделало упаковку оригинальной и нестандартной, подчеркнуло качество колбасной
                        продукции, и представило бренд  компании в новом свете.
                        Инделика — доступная роскошь!


                    </p>
                    <!--<p class="for-read-more">-->
                    <!--Первым этапом работы над проектом стало проведение маркетингового исследования рынка водки-->
                    <!--в г. Самаре и Самарского региона, анализа потребителей и конкурентов. По результатам исследований-->
                    <!--были выбраны следующие идеи позиционирования бренда: традиции питья, традиции изготовления водки,-->
                    <!--и традиции путешествия. Для каждого концепта было предложено несколько вариантов идентифицирующих-->
                    <!--элементов (в конечном итоге – были выбраны чаша, колосья пшеницы и воздушный шар).-->
                    <!--</p>-->
                    <!--<span class="read-more-btn">Читать дальше</span>-->
                </div>
            </div>
        </div>
        <div class="item">
            <!--<img src="/files/images/indelika/indelika-concept-2.jpg" alt="photo-image" class="img-right">-->
            <div class="bg-container-right img-2"></div>
            <div class="gl-container">
                <h2>Концепт № 2 - Павлиний хвост</h2>

                <div class="info-text">
                    <p>
                        <span>В основе третьего концепта — </span> узор с изображением золотых павлиньих перьев. <br>
                        <span>Ключевые слова:</span> блеск, роскошь, солидность, натуральность.
                        Основные цвета — золотой и темно-коричневый, а также дополнительные цветные
                        элементы (красный, зеленый, синий) на разных видах продуктов из линейки.
                        Золото с черным  — одно из самых удачных сочетаний. Тем более что эти цвета
                        преобладают в логотипе. Использование золотого цвета вызывает четкую ассоциацию
                        с богатством, роскошью, высоким качеством, а значит, продукция торговой марки
                        будет восприниматься как элемент премиум сегмента.
                        Отличительная особенность этого концепта — яркий идентифицирующий элемент в
                        виде золотых павлиньих перьев. Распущенные перья создают ауру легкости и комфорта.
                        Изображение перьев как нельзя лучше транслирует потребителю особенности товара,
                        вызывая ассоциации с птицей. Кроме того, узор отлично сочетается с логотипом компании
                        и делает этикетку визуально привлекательной для покупателя.
                        Опрос показал, что продукт с такой этикеткой воспринимается как премиальный,
                        внушающий доверие. Ничего лишнего, все по правилам и стандартам.
                        Помимо традиционной упаковки, заказчику было предложено нанести узор
                        из золотых перьев на прозрачную обертку колбасных изделий. Такое дизайнерское
                        решение сделало упаковку оригинальной и нестандартной, подчеркнуло качество колбасной
                        продукции, и представило бренд  компании в новом свете.
                        Инделика — доступная роскошь!


                    </p>
                    <!--<p class="for-read-more">-->
                    <!--Первым этапом работы над проектом стало проведение маркетингового исследования рынка водки-->
                    <!--в г. Самаре и Самарского региона, анализа потребителей и конкурентов. По результатам исследований-->
                    <!--были выбраны следующие идеи позиционирования бренда: традиции питья, традиции изготовления водки,-->
                    <!--и традиции путешествия. Для каждого концепта было предложено несколько вариантов идентифицирующих-->
                    <!--элементов (в конечном итоге – были выбраны чаша, колосья пшеницы и воздушный шар).-->
                    <!--</p>-->
                    <!--<span class="read-more-btn">Читать дальше</span>-->
                </div>
            </div>
        </div>
        <div class="item">
            <!--<img src="/files/images/indelika/indelika-concept-3.jpg" alt="photo-image" class="img-right">-->
            <div class="bg-container-right img-3"></div>
            <div class="gl-container">
                <h2>Концепт № 3 - Павлиний хвост</h2>

                <div class="info-text">
                    <p>
                        <span>В основе третьего концепта — </span> узор с изображением золотых павлиньих перьев. <br>
                        <span>Ключевые слова:</span> блеск, роскошь, солидность, натуральность.
                        Основные цвета — золотой и темно-коричневый, а также дополнительные цветные
                        элементы (красный, зеленый, синий) на разных видах продуктов из линейки.
                        Золото с черным  — одно из самых удачных сочетаний. Тем более что эти цвета
                        преобладают в логотипе. Использование золотого цвета вызывает четкую ассоциацию
                        с богатством, роскошью, высоким качеством, а значит, продукция торговой марки
                        будет восприниматься как элемент премиум сегмента.
                        Отличительная особенность этого концепта — яркий идентифицирующий элемент в
                        виде золотых павлиньих перьев. Распущенные перья создают ауру легкости и комфорта.
                        Изображение перьев как нельзя лучше транслирует потребителю особенности товара,
                        вызывая ассоциации с птицей. Кроме того, узор отлично сочетается с логотипом компании
                        и делает этикетку визуально привлекательной для покупателя.
                        Опрос показал, что продукт с такой этикеткой воспринимается как премиальный,
                        внушающий доверие. Ничего лишнего, все по правилам и стандартам.
                        Помимо традиционной упаковки, заказчику было предложено нанести узор
                        из золотых перьев на прозрачную обертку колбасных изделий. Такое дизайнерское
                        решение сделало упаковку оригинальной и нестандартной, подчеркнуло качество колбасной
                        продукции, и представило бренд  компании в новом свете.
                        Инделика — доступная роскошь!
                    </p>
                    <!--<p class="for-read-more">-->
                    <!--Первым этапом работы над проектом стало проведение маркетингового исследования рынка водки-->
                    <!--в г. Самаре и Самарского региона, анализа потребителей и конкурентов. По результатам исследований-->
                    <!--были выбраны следующие идеи позиционирования бренда: традиции питья, традиции изготовления водки,-->
                    <!--и традиции путешествия. Для каждого концепта было предложено несколько вариантов идентифицирующих-->
                    <!--элементов (в конечном итоге – были выбраны чаша, колосья пшеницы и воздушный шар).-->
                    <!--</p>-->
                    <!--<span class="read-more-btn">Читать дальше</span>-->
                </div>
            </div>
        </div>
    </div>

    <div class="gl-container">
        <h2 class="summary-header">Клиент долго думает... и наконец выбирает один из вариантов.</h2>
    </div>

    <!--<div class="image-container">-->
        <!--<img src="/files/images/ИНДЕЛИКА-ВИЗ-3.jpg" alt="photo-image" class="big-image fourth-image">-->
    <!--</div>-->

    <div class="bg-container image-6"></div>

    <div class="info-block-container info-result">
        <div class="gl-container">
            <div class="info-left">
                <h3 class="info-left-title">Результат</h3>
            </div>
            <div class="info-right">
                <p>
                    После изучения всех представленных вариантов, заказчик остановил свой
                    выбор на концепте № 3 - Павлиний хвост. Колбасные изделия торговой
                    марки «Інделіка» скоро появятся на полках супермаркетов в обновленной
                    упаковке, и мы надеемся, что украинские покупатели смогут по достоинству
                    оценить не только качество продукта, но и новый красивый и  <br>
                </p>
                <p class="for-read-more">
                    Торговая марка «Інделіка» не первый год представлена на украинском мясном рынке.
                    Компания производит продукцию из мяса индейки, которая считается самой полезной и диети-
                </p>
                <span class="read-more-btn">Читать дальше</span>
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
    <!--скрипты для всех страниц конец-->

    <script src="/js/viewportchecker.js"></script>

    <!-- OwlCarousel -->
    <script src="/js/owl.carousel.min.js"></script>
    <!--<script src="../js/owl.lazyload.js"></script>-->

    <!-- SmoothScroll -->
    <script src="/js/SmoothScroll.js"></script>

    <!-- star rating -->
    <script src="/js/star-rating.js"></script>
    <link rel="stylesheet" href="/css/star-rating.css" media="all" type="text/css"/>
    <script type="text/javascript">
        $(".rating").rating({min:1, max:5, step:0.5, size:'sm'});

        $('.clear-rating').hide();
        $('.caption').hide();
    </script>

    <!-- include own JavaScript -->
    <script src="/js/indelika.js"></script>
@stop
<!-- end of subscribe_form -->
