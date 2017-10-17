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
    <link rel="stylesheet" href="/css/portfolio/portfolio-globino-maslo.css">

@stop


@section('page-content')

    <!--PRELOADER!!! -->
    <div id="preloader"></div>

    @include('layouts.blackheader')

    <section id="globino-maslo">
        <div class="top-container">

            <div class="container title-container">
                <h1 class="top-title">Молочный зонтичный бренд <br>"Глобино":</h1>
                <h2 class="top-title-small">сливочное масло и сырки</h2>
            </div>

            <div class="image-container clearfix top-images-cont">
                <div class="trees-left-cont">
                    <img src="/images/portfolio/globino-maslo/trees-slide-left1.png" alt="photo-image">
                </div><!--
            -->
                <div class="flower-cont">
                    <img src="/images/portfolio/globino-maslo/flower-slide.png" alt="photo-image">
                </div><!--
            -->
                <div class="camp-cont">
                    <img src="/images/portfolio/globino-maslo/camp-slide.png" alt="photo-image">
                </div><!--
            -->
                <div class="rabbit-cont">
                    <img src="/images/portfolio/globino-maslo/rabbit-slide.png" alt="photo-image">
                </div><!--
            -->
                <div class="trees-right-cont">
                    <img src="/images/portfolio/globino-maslo/trees-slide-right1.png" alt="photo-image">
                </div>
            </div>

            <div class="image-container volna-container">
                <img src="/images/portfolio/globino-maslo/volna.png" alt="photo-image" class="volna">
            </div>
        </div>

        <div class="company-aims">
            <div class="gl-container">
                <h2 class="header-text header-blue">”Молока більше, ніж у молоці”</h2>
            </div>

            <div class="info-block-container info-company">
                <div class="gl-container">
                    <div class="info-left">
                        <h3 class="info-left-title">Компания Глобино</h3>
                    </div>
                    <div class="info-right">
                        <p>
                            Один из ведущих производителей мясных и колбасных изделий на украинском рынке.
                            Кроме мясных изделий компания занимается производством молочной продукции.
                            Для продвижения бренда компании у продукции должен быть узнаваемый фирменный стиль и дизайн.
                            <br>
                        </p>
                        <p class="for-read-more">
                            Один из ведущих производителей мясных и колбасных изделий на украинском рынке.
                            Кроме мясных изделий компания занимается производством молочной продукции.
                            Для продвижения бренда компании у продукции должен быть узнаваемый фирменный стиль и дизайн.
                            <br>
                        </p>
                        <span class="read-more-btn">Читать дальше</span>
                    </div>
                </div>
            </div>

            <div class="image-container trees-cont">
                <img src="/images/portfolio/globino-maslo/trees.png" alt="photo-image">
            </div>

            <div class="two-images-container">
                <div class="gl-container">
                    <div class="image-left">
                        <img src="/images/portfolio/globino-maslo/sirok-drujba.png" alt="photo-image"
                             class="sirok-drujba">
                    </div>
                    <div class="image-right">
                        <img src="/images/portfolio/globino-maslo/sirok-smetanka.png" alt="photo-image"
                             class="sirok-smetanka">
                    </div>
                </div>
            </div>

            <div class="info-block-container info-task">
                <div class="gl-container">
                    <div class="info-left">
                        <h3 class="info-left-title">Задание на разработку дизайна <br> сырков и сливочного масла</h3>
                    </div>
                    <div class="info-right">
                        <p>
                            - сформировать неординарный фирменный стиль; <br>
                            - повысить узнаваемость бренда; <br>
                            - укрепить позиции на молочном рынке Украины; <br>
                            - повысить продажи. <br>
                        </p>
                        <p class="for-read-more">
                            - сформировать неординарный фирменный стиль; <br>
                            - повысить узнаваемость бренда; <br>
                            - укрепить позиции на молочном рынке Украины; <br>
                            - повысить продажи. <br>
                        </p>
                        <span class="read-more-btn">Читать дальше</span>
                    </div>
                </div>
            </div>

            <div class="image-container splash-1-cont">
                <div class="gl-container">
                    <img src="/images/portfolio/globino-maslo/picture-splash-1.png" alt="photo-image"
                         class="picture-splash-1">
                </div>
            </div>

        </div>

        <div class="company-stage-1">
            <div class="image-container splash-granica-cont">
                <img src="/images/portfolio/globino-maslo/splash-granica.jpg" alt="photo-image">
            </div>

            <div class="animation-imgs-cont">
                <img src="/images/portfolio/globino-maslo/patterns-left.png" alt="photo-image" class="patterns-left">
                <img src="/images/portfolio/globino-maslo/patterns-right.png" alt="photo-image" class="patterns-right">
            </div>

            <div class="container stage-header-cont">
                <h2 class="stage-header">Этап 1. Анализ рынка <br>
                    сливочного масла и плавленых сырков
                </h2>
            </div>

            <div class="info-block-container info-portrait">
                <div class="gl-container">
                    <div class="info-left">
                        <h3 class="info-left-title">Портрет потребителя</h3>

                        <div class="image-container portrait-cont">
                            <img src="/images/portfolio/globino-maslo/portrait1.png" alt="photo-image"
                                 class="portrait1">
                        </div>
                    </div>
                    <div class="info-right">
                        <p>
                            Чтобы разработать дизайн упаковки необходимо составить портрет потребителя продукции.
                            Согласно исследованиям, сливочное масло в Украине в основном покупают женщины в возрасте
                            от 30 лет. Чаще всего масло покупают для всей семьи: супружескую пару и детей.
                            Поэтому новый дизайн должен был быть привлекательным для всех возрастов.
                        </p>
                        <p class="for-read-more">
                            Чтобы разработать дизайн упаковки необходимо составить портрет потребителя продукции.
                            Согласно исследованиям, сливочное масло в Украине в основном покупают женщины в возрасте
                            от 30 лет. Чаще всего масло покупают для всей семьи: супружескую пару и детей.
                            Поэтому новый дизайн должен был быть привлекательным для всех возрастов.
                        </p>
                        <span class="read-more-btn">Читать дальше</span>
                    </div>
                </div>
            </div>

            <div class="info-block-container info-trend">
                <div class="gl-container">
                    <div class="info-left">
                        <h3 class="info-left-title">Тенденции дизайна <br>
                            плавленных сырков и <br>
                            сливочного масла
                        </h3>
                    </div>
                    <div class="info-right">
                        <p>
                            Для дизайна молочных продуктов среднего ценового сегмента чаще всего используют белый цвет.
                            Это подчеркивает то, что продукт создан из натурального молока. Изображения сельских
                            животных
                            на упаковке также призваны показать происхождение продукции. Надписи на упаковке несут
                            важную для потребителя информацию (количество полезных веществ и витаминов, жирность).
                        </p>
                        <p class="for-read-more">
                            Их, как и название продукта, выделяют заметными цветами и шрифтами.
                            Плавленые сырки покупают мужчины и женщины в возрасте от 20 лет.
                            Студенты и работники часто перекусывают ими на обеде. Дети едят плавленые
                            сырки во время перекусов в течение учебного дня. Для приготовления блюд их
                            используют реже. Поэтому дизайн плавленых сырков может быть более игривым, ярким и веселым.
                            Ценовой сегмент обоих продуктов: средний. <br>

                            Несомненным плюсом стала многолетняя история «Глобинского маслсырзавода» и
                            доказанное качество его продукции. Эти факты можно было использовать,
                            создавая новый дизайн упаковки. <br>

                            Работа над созданием нового дизайна упаковки для сливочного масла и плавленых
                            сырков длилась 4 месяца.
                        </p>
                        <span class="read-more-btn">Читать дальше</span>
                    </div>
                </div>
            </div>

            <div class="info-block-container info-situation-1">
                <div class="gl-container">
                    <div class="info-left">
                        <h3 class="info-left-title">Ситуация покупки <br>
                            плавленных сырков и <br>
                            сливочного масла
                        </h3>
                    </div>
                    <div class="info-right">
                        <p>
                            Для дизайна молочных продуктов среднего ценового сегмента чаще всего используют белый цвет.
                            Это подчеркивает то, что продукт создан из натурального молока. Изображения сельских
                            животных
                            на упаковке также призваны показать происхождение продукции. Надписи на упаковке несут
                            важную для потребителя информацию (количество полезных веществ и витаминов, жирность).
                        </p>
                        <p class="for-read-more">
                            Их, как и название продукта, выделяют заметными цветами и шрифтами.
                            Плавленые сырки покупают мужчины и женщины в возрасте от 20 лет.
                            Студенты и работники часто перекусывают ими на обеде. Дети едят плавленые
                            сырки во время перекусов в течение учебного дня. Для приготовления блюд их
                            используют реже. Поэтому дизайн плавленых сырков может быть более игривым, ярким и веселым.
                            Ценовой сегмент обоих продуктов: средний. <br>

                            Несомненным плюсом стала многолетняя история «Глобинского маслсырзавода» и
                            доказанное качество его продукции. Эти факты можно было использовать,
                            создавая новый дизайн упаковки. <br>

                            Работа над созданием нового дизайна упаковки для сливочного масла и плавленых
                            сырков длилась 4 месяца.
                        </p>
                        <span class="read-more-btn">Читать дальше</span>
                    </div>
                </div>
            </div>

            <div class="info-block-container info-situation-2">
                <div class="gl-container">
                    <div class="info-left">
                        <h3 class="info-left-title">Ситуация потребления <br>
                            плавленных сырков и <br>
                            сливочного масла <br>
                        </h3>
                    </div>
                    <div class="info-right">
                        <p>
                            Для дизайна молочных продуктов среднего ценового сегмента чаще всего используют белый цвет.
                            Это подчеркивает то, что продукт создан из натурального молока. Изображения сельских
                            животных
                            на упаковке также призваны показать происхождение продукции. Надписи на упаковке несут
                            важную для потребителя информацию (количество полезных веществ и витаминов, жирность).
                        </p>
                        <p class="for-read-more">
                            Их, как и название продукта, выделяют заметными цветами и шрифтами.
                            Плавленые сырки покупают мужчины и женщины в возрасте от 20 лет.
                            Студенты и работники часто перекусывают ими на обеде. Дети едят плавленые
                            сырки во время перекусов в течение учебного дня. Для приготовления блюд их
                            используют реже. Поэтому дизайн плавленых сырков может быть более игривым, ярким и веселым.
                            Ценовой сегмент обоих продуктов: средний. <br>

                            Несомненным плюсом стала многолетняя история «Глобинского маслсырзавода» и
                            доказанное качество его продукции. Эти факты можно было использовать,
                            создавая новый дизайн упаковки. <br>

                            Работа над созданием нового дизайна упаковки для сливочного масла и плавленых
                            сырков длилась 4 месяца.
                        </p>
                        <span class="read-more-btn">Читать дальше</span>
                    </div>
                </div>
            </div>

            <div class="container animation-arrow-cont">
                <h2 class="header-text header-white">Исходный материал - Разработанный нами ранее <br>
                    фирменный стиль зонтичного бренда Глобино
                </h2>
                <img src="/images/portfolio/globino-maslo/arrow-1.png" alt="photo-image" class="arrow-1">
            </div>

            <div class="image-container animation-landscape-cont">
                <img src="/images/portfolio/globino-maslo/landscape-painting.png" alt="photo-image"
                     class="landscape-painting">
            </div>
        </div>

        <div class="company-stage-2">
            <a href="globino" class="pachka-cheese-link">
                <img src="/images/portfolio/globino-maslo/pachka-cheese.png" alt="photo-image" class="pachka-cheese">
            </a>

            <div class="container stage-header-cont">
                <h2 class="stage-header header-blue">Этап 2. Разработка концепции <br>
                    дизайна упаковки плавленого сыра
                </h2>
            </div>

            <div class="info-block-container info-search-idea">
                <div class="gl-container">
                    <div class="info-left">
                        <h3 class="info-left-title">Поиск идеи</h3>
                    </div>
                    <div class="info-right">
                        <p>
                            На этом этапе дизайнеры сразу <span>отказались</span> от использования
                            <span>традиционных мотивов.</span>
                            Выигрышное сочетание голубого и белого цветов было использовано и в дизайне
                            упаковки плавленых сырков. В отличие от масла, целевая аудитория такого продукта
                            более молодая. Поэтому мы решили использовать игровые элементы. Другие производители
                            делают ставку на «советский» тяжеловесный дизайн
                        </p>
                        <p class="for-read-more">
                            На этом этапе дизайнеры сразу <span>отказались</span> от использования
                            <span>традиционных мотивов.</span>
                            Выигрышное сочетание голубого и белого цветов было использовано и в дизайне
                            упаковки плавленых сырков. В отличие от масла, целевая аудитория такого продукта
                            более молодая. Поэтому мы решили использовать игровые элементы. Другие производители
                            делают ставку на «советский» тяжеловесный дизайн
                        </p>
                        <span class="read-more-btn">Читать дальше</span>
                    </div>
                </div>
            </div>

            <div class="two-images-container">
                <div class="image-left papers-cont">
                    <img src="/images/portfolio/globino-maslo/paper-down.png" alt="photo-image" class="paper-down">
                    <img src="/images/portfolio/globino-maslo/paper-up.png" alt="photo-image" class="paper-up">
                </div>
                <div class="image-right splash-2-cont">
                    <img src="/images/portfolio/globino-maslo/picture-splash-2.png" alt="photo-image"
                         class="picture-splash-2">
                </div>
            </div>

            <div class="info-block-container info-best-idea">
                <div class="gl-container">
                    <div class="info-left">
                        <h3 class="info-left-title">Лучшая идея процесс</h3>
                    </div>
                    <div class="info-right">
                        <p>
                            На этом этапе дизайнеры сразу <span>отказались</span> от использования
                            <span>традиционных мотивов.</span>
                            Выигрышное сочетание голубого и белого цветов было использовано и в дизайне
                            упаковки плавленых сырков. В отличие от масла, целевая аудитория такого продукта
                            более молодая. Поэтому мы решили использовать игровые элементы. Другие производители
                            делают ставку на «советский» тяжеловесный дизайн
                        </p>
                        <p class="for-read-more">
                            На этом этапе дизайнеры сразу <span>отказались</span> от использования
                            <span>традиционных мотивов.</span>
                            Выигрышное сочетание голубого и белого цветов было использовано и в дизайне
                            упаковки плавленых сырков. В отличие от масла, целевая аудитория такого продукта
                            более молодая. Поэтому мы решили использовать игровые элементы. Другие производители
                            делают ставку на «советский» тяжеловесный дизайн
                        </p>
                        <span class="read-more-btn">Читать дальше</span>
                    </div>
                </div>
            </div>

            <div class="info-block-container info-final-result">
                <div class="gl-container">
                    <div class="info-left">
                        <h3 class="info-left-title">Финальный результат</h3>
                    </div>
                    <div class="info-right">
                        <p>
                            На этом этапе дизайнеры сразу <span>отказались</span> от использования
                            <span>традиционных мотивов.</span>
                            Выигрышное сочетание голубого и белого цветов было использовано и в дизайне
                            упаковки плавленых сырков. В отличие от масла, целевая аудитория такого продукта
                            более молодая. Поэтому мы решили использовать игровые элементы. Другие производители
                            делают ставку на «советский» тяжеловесный дизайн
                        </p>
                        <p class="for-read-more">
                            На этом этапе дизайнеры сразу <span>отказались</span> от использования
                            <span>традиционных мотивов.</span>
                            Выигрышное сочетание голубого и белого цветов было использовано и в дизайне
                            упаковки плавленых сырков. В отличие от масла, целевая аудитория такого продукта
                            более молодая. Поэтому мы решили использовать игровые элементы. Другие производители
                            делают ставку на «советский» тяжеловесный дизайн
                        </p>
                        <span class="read-more-btn">Читать дальше</span>
                    </div>
                </div>
            </div>

            <div class="image-container animation-sirki-cont">
                <img src="/images/portfolio/globino-maslo/rabbit-pattern.jpg" alt="photo-image" class="rabbit-pattern">

                <img src="/images/portfolio/globino-maslo/sirok-drujba-2.png" alt="photo-image" class="sirok-drujba-2">
                <img src="/images/portfolio/globino-maslo/sirok-smetanka-2.png" alt="photo-image"
                     class="sirok-smetanka-2">
            </div>

            <div class="image-container forest-pattern-cont">
                <img src="/images/portfolio/globino-maslo/forest-pattern.png" alt="photo-image" class="forest-pattern">
            </div>

            <div class="info-block-container info-dev-lineage">
                <div class="gl-container">
                    <div class="info-left">
                        <h3 class="info-left-title">Разработка линейки <br> наименований</h3>
                    </div>
                    <div class="info-right">
                        <p>
                            На этом этапе дизайнеры сразу <span>отказались</span> от использования
                            <span>традиционных мотивов.</span>
                            Выигрышное сочетание голубого и белого цветов было использовано и в дизайне
                            упаковки плавленых сырков. В отличие от масла, целевая аудитория такого продукта
                            более молодая. Поэтому мы решили использовать игровые элементы. Другие производители
                            делают ставку на «советский» тяжеловесный дизайн
                        </p>
                        <p class="for-read-more">
                            На этом этапе дизайнеры сразу <span>отказались</span> от использования
                            <span>традиционных мотивов.</span>
                            Выигрышное сочетание голубого и белого цветов было использовано и в дизайне
                            упаковки плавленых сырков. В отличие от масла, целевая аудитория такого продукта
                            более молодая. Поэтому мы решили использовать игровые элементы. Другие производители
                            делают ставку на «советский» тяжеловесный дизайн
                        </p>
                        <span class="read-more-btn">Читать дальше</span>
                    </div>
                </div>
            </div>

            <div class="info-block-container info-dev-lineage">
                <div class="gl-container">
                    <div class="info-left">
                        <h3 class="info-left-title">Разработка названия <br> сырка - Сметанка</h3>
                    </div>
                    <div class="info-right">
                        <p>
                            На этом этапе дизайнеры сразу <span>отказались</span> от использования
                            <span>традиционных мотивов.</span>
                            Выигрышное сочетание голубого и белого цветов было использовано и в дизайне
                            упаковки плавленых сырков.
                        </p>
                        <p class="for-read-more">
                            На этом этапе дизайнеры сразу <span>отказались</span> от использования
                            <span>традиционных мотивов.</span>
                            Выигрышное сочетание голубого и белого цветов было использовано и в дизайне
                            упаковки плавленых сырков.
                        </p>
                        <span class="read-more-btn">Читать дальше</span>
                    </div>
                </div>
            </div>

            <div class="utp-container">
                <div class="utp-inner-cont">
                    <div class="left-cont">
                        <h2>УТП</h2>
                    </div>
                    <div class="right-cont">
                        <img src="/images/portfolio/globino-maslo/icon-utp.png" alt="photo-image"
                             class="icon-utp icon-utp-animate">
                    </div>
                </div>
            </div>

            <div class="container stage-header-cont">
                <h2 class="stage-header header-blue">Все концепты плавленных сырков</h2>
            </div>

            <div class="image-container animation-arrow-2-cont">
                <img src="/images/portfolio/globino-maslo/arrow-2.png" alt="photo-image" class="arrow-2">
            </div>

            <div class="boxes-container">
                <div class="box-item">
                    <img src="/images/portfolio/globino-maslo/sirok-4.png" alt="photo-image" class="sirok-4">
                </div>
                <div class="box-item">
                    <img src="/images/portfolio/globino-maslo/sirok-7.png" alt="photo-image" class="sirok-7">
                </div>
                <div class="box-item">
                    <img src="/images/portfolio/globino-maslo/sirok-10.png" alt="photo-image" class="sirok-10">
                </div>
                <div class="box-item">
                    <img src="/images/portfolio/globino-maslo/sirok-13.png" alt="photo-image" class="sirok-13">
                </div>
                <div class="box-item">
                    <img src="/images/portfolio/globino-maslo/sirok-16.png" alt="photo-image" class="sirok-16">
                </div>
                <div class="box-item">
                    <img src="/images/portfolio/globino-maslo/sirok-3.png" alt="photo-image" class="sirok-3">
                </div>
                <div class="box-item">
                    <img src="/images/portfolio/globino-maslo/sirok-6.png" alt="photo-image" class="sirok-6">
                </div>
                <div class="box-item">
                    <img src="/images/portfolio/globino-maslo/sirok-9.png" alt="photo-image" class="sirok-9">
                </div>
                <div class="box-item">
                    <img src="/images/portfolio/globino-maslo/sirok-12.png" alt="photo-image" class="sirok-12">
                </div>
                <div class="box-item">
                    <img src="/images/portfolio/globino-maslo/sirok-15.png" alt="photo-image" class="sirok-15">
                </div>
                <div class="box-item">
                    <img src="/images/portfolio/globino-maslo/sirok-2.png" alt="photo-image" class="sirok-2">
                </div>
                <div class="box-item">
                    <img src="/images/portfolio/globino-maslo/sirok-5.png" alt="photo-image" class="sirok-5">
                </div>
                <div class="box-item">
                    <img src="/images/portfolio/globino-maslo/sirok-8.png" alt="photo-image" class="sirok-8">
                </div>
                <div class="box-item">
                    <img src="/images/portfolio/globino-maslo/sirok-11.png" alt="photo-image" class="sirok-11">
                </div>
                <div class="box-item">
                    <img src="/images/portfolio/globino-maslo/sirok-14.png" alt="photo-image" class="sirok-14">
                </div>
                <div class="box-item sirok-1-cont">
                    <img src="/images/portfolio/globino-maslo/sirok-1.png" alt="photo-image" class="sirok-1">
                </div>

            </div>

            <div class="image-container splash-3-cont">
                <img src="/images/portfolio/globino-maslo/picture-splash-3.png" alt="photo-image"
                     class="picture-splash-3">
            </div>
        </div>

        <div class="company-stage-3">
            <div class="container stage-header-cont">
                <h2 class="stage-header header-blue">Этап 3. Разработка концепции <br>
                    дизайна упаковки сливочного масла
                </h2>
            </div>

            <div class="info-block-container info-search-concept">
                <div class="gl-container">
                    <div class="info-left">
                        <h3 class="info-left-title">Поиск концепции <br> дизайна для масла</h3>
                    </div>
                    <div class="info-right">
                        <p>
                            На этом этапе дизайнеры сразу <span>отказались</span> от использования
                            <span>традиционных мотивов.</span>
                            Выигрышное сочетание голубого и белого цветов было использовано и в дизайне
                            упаковки плавленых сырков. В отличие от масла, целевая аудитория такого продукта
                            более молодая. Поэтому мы решили использовать игровые элементы. Другие производители
                            делают ставку на «советский» тяжеловесный дизайн
                        </p>
                        <p class="for-read-more">
                            На этом этапе дизайнеры сразу <span>отказались</span> от использования
                            <span>традиционных мотивов.</span>
                            Выигрышное сочетание голубого и белого цветов было использовано и в дизайне
                            упаковки плавленых сырков. В отличие от масла, целевая аудитория такого продукта
                            более молодая. Поэтому мы решили использовать игровые элементы. Другие производители
                            делают ставку на «советский» тяжеловесный дизайн
                        </p>
                        <span class="read-more-btn">Читать дальше</span>
                    </div>
                </div>
            </div>

            <div class="two-images-container maslo-container">
                <div class="gl-container">
                    <div class="image-left">
                        <img src="/images/portfolio/globino-maslo/maslo-1.png" alt="photo-image" class="maslo-1">
                    </div>
                    <div class="image-right">
                        <img src="/images/portfolio/globino-maslo/maslo-2.png" alt="photo-image" class="maslo-2">
                    </div>
                </div>
            </div>

            <div class="container stage-header-cont">
                <h2 class="stage-header header-blue">Выбранный концепт</h2>
            </div>

            <div class="image-container animation-arrow-3-cont">
                <img src="/images/portfolio/globino-maslo/arrow-2.png" alt="photo-image" class="arrow-3">
            </div>

            <div class="two-images-container maslo-2-container">
                <div class="gl-container">
                    <div class="image-left">
                        <img src="/images/portfolio/globino-maslo/maslo-lineyka-1.png" alt="photo-image"
                             class="maslo-lineyka-1">
                    </div>
                    <div class="image-right">
                        <img src="/images/portfolio/globino-maslo/maslo-lineyka-2.png" alt="photo-image"
                             class="maslo-lineyka-2">
                    </div>
                </div>
            </div>

            <div class="info-block-container info-approved-concept">
                <div class="gl-container">
                    <div class="info-left">
                        <h3 class="info-left-title">Утвержденный Концепт <br>
                            дизайна линейки масла
                        </h3>
                    </div>
                    <div class="info-right">
                        <p>
                            При разработке первых концептов дизайна упаковки мы решили акцентировать внимание
                            на натуральности сливочного масла. Цветовая гамма выдержана в спокойных тонах:
                            кремовая упаковка с голубыми и оранжевыми вкраплениями. При выборе цветов дизайнеры
                            опирались на исследования в области психологии: голубой цвет ассоциируется у людей со
                            свежестью, а оранжевый – со здоровьем.дизайн упаковки сыра. Поэтому необычные решения
                            позволяют моментально выделиться. <br>
                        </p>
                        <p class="for-read-more">
                            Дизайнерам нужно было разработать несколько вариантов упаковки (для линейки).
                            На плавленый сыр «Сметанка» поместили забавного зайца, украшенного геометрическим
                            орнаментом.
                            Зверек выглядит привлекательно для потребителей всех возрастов. Сыр «Дружба» обычно покупают
                            люди среднего возраста. Поэтому на нем разместили более сдержанное изображение: несколько
                            разных деревьев. Это изображение несет несколько смысловых подтекстов. Во-первых,
                            символизирует чистый экологический продукт без добавок. Во-вторых, в нем зашифровано
                            название сыра. Хотя деревья принадлежат к разным видам, они соединены в один лес.
                            Так и самых разных людей объединяет дружба. Общим для дизайна всех упаковок остается
                            сочетание цветов и характерный молочный всплеск.
                            Их, как и название продукта, выделяют заметными цветами и шрифтами.
                            Плавленые сырки покупают мужчины и женщины в возрасте от 20 лет.
                            Студенты и работники часто перекусывают ими на обеде. Дети едят плавленые сырки во
                            время перекусов в течение учебного дня. Для приготовления блюд их используют реже.
                            Поэтому дизайн плавленых сырков может быть более игривым, ярким и веселым.
                            Ценовой сегмент обоих продуктов: средний. <br>

                            Несомненным плюсом стала многолетняя история «Глобинского маслсырзавода» и доказанное
                            качество его продукции. Эти факты можно было использовать, создавая новый дизайн упаковки.
                            <br>

                            Работа над созданием нового дизайна упаковки для сливочного масла и плавленых сырков длилась
                            4 месяца.
                        </p>
                        <span class="read-more-btn">Читать дальше</span>
                    </div>
                </div>
            </div>

            <div class="container stage-header-cont">
                <h2 class="stage-header header-blue">Старый дизайн</h2>
            </div>

            <div class="image-container maslo-korobka-old-cont">
                <img src="/images/portfolio/globino-maslo/maslo-korobka-old.png" alt="photo-image"
                     class="maslo-korobka-old">
            </div>

            <div class="container stage-header-cont">
                <h2 class="stage-header header-blue">Новый дизайн</h2>
            </div>

            <div class="image-container maslo-korobka-new-cont">
                <img src="/images/portfolio/globino-maslo/maslo-korobka-new.png" alt="photo-image"
                     class="maslo-korobka-new">
            </div>

            <div class="container stage-header-cont">
                <h2 class="stage-header header-blue">Паттерн</h2>
            </div>

            <!--<div class="image-container pattern-flowers-cont">-->
            <!--<img src="/images/portfolio/globino-maslo/pattern-flowers.png" alt="photo-image" class="pattern-flowers">-->
            <!--</div>-->

            <div class="bg-container pattern-flowers"></div>

            <div class="info-block-container info-development">
                <div class="gl-container">
                    <div class="info-left">
                        <h3 class="info-left-title">Разработка дизайна оборотной <br>
                            стороны упаковки
                        </h3>
                    </div>
                    <div class="info-right">
                        <p>
                            Для создания УТП маркетологи провели исследование рынка молочной продукции Украины.
                            Нужно было понять, что предлагают потребителям конкурирующие компании, и какова их
                            особенность.
                            Благодаря исследованиям маркетологи брендингового агентства KOLORO мы выяснили, что для
                            создания 1 кг масла или сыра необходимо переработать 10,5 л молока.
                            Так возникло УТП для молочного зонтичного бренда «Глобино»: «Молока більше, ніж у молоці».
                            Сначала УТП было придумано для твердого сыра, а затем перенесено на остальную продукцию.
                            Необычное УТП привлекает внимание и легко запоминается. Дизайнеры смогли придать ему
                            графическое выражение и создали инфографику. Она в простой и наглядной форме объясняет,
                            в чем преимущество молочной продукции компании «Глобино».Поэтому необычные решения позволяют
                            моментально выделиться. <br>
                        </p>
                        <p class="for-read-more">
                            Дизайнерам нужно было разработать несколько вариантов упаковки (для линейки).
                            На плавленый сыр «Сметанка» поместили забавного зайца, украшенного геометрическим
                            орнаментом.
                            Зверек выглядит привлекательно для потребителей всех возрастов. Сыр «Дружба» обычно покупают
                            люди среднего возраста. Поэтому на нем разместили более сдержанное изображение: несколько
                            разных деревьев. Это изображение несет несколько смысловых подтекстов. Во-первых,
                            символизирует чистый экологический продукт без добавок. Во-вторых, в нем зашифровано
                            название сыра. Хотя деревья принадлежат к разным видам, они соединены в один лес.
                            Так и самых разных людей объединяет дружба. Общим для дизайна всех упаковок остается
                            сочетание цветов и характерный молочный всплеск.
                            Их, как и название продукта, выделяют заметными цветами и шрифтами.
                            Плавленые сырки покупают мужчины и женщины в возрасте от 20 лет. Студенты и работники
                            часто перекусывают ими на обеде. Дети едят плавленые сырки во время перекусов в течение
                            учебного дня. Для приготовления блюд их используют реже. Поэтому дизайн плавленых сырков
                            может быть более игривым, ярким и веселым. <br>

                            Ценовой сегмент обоих продуктов: средний.

                            Несомненным плюсом стала многолетняя история «Глобинского маслсырзавода» и доказанное
                            качество его продукции. Эти факты можно было использовать, создавая новый дизайн упаковки.
                            <br>

                            Работа над созданием нового дизайна упаковки для сливочного масла и плавленых сырков
                            длилась 4 месяца.
                        </p>
                        <span class="read-more-btn">Читать дальше</span>
                    </div>
                </div>
            </div>

            <div class="image-container maslo-back-cont">
                <img src="/images/portfolio/globino-maslo/maslo-back.png" alt="photo-image" class="maslo-back">
            </div>

            <div class="info-block-container info-approved-concept">
                <div class="gl-container">
                    <div class="info-left">
                        <h3 class="info-left-title">Итоги проекта по <br>
                            бренд-дизайну:
                        </h3>
                    </div>
                    <div class="info-right">
                        <p>
                            Для создания УТП маркетологи провели исследование рынка молочной продукции Украины.
                            Нужно было понять, что предлагают потребителям конкурирующие компании, и какова их
                            особенность.
                            Благодаря исследованиям маркетологи брендингового агентства KOLORO мы выяснили, что для
                            создания 1 кг масла или сыра необходимо переработать 10,5 л молока.
                            Так возникло УТП для молочного зонтичного бренда «Глобино»: «Молока більше, ніж у молоці».
                            Сначала УТП было придумано для твердого сыра, а затем перенесено на остальную продукцию.
                            Необычное УТП привлекает внимание и легко запоминается. Дизайнеры смогли придать ему
                            графическое выражение и создали инфографику. Она в простой и наглядной форме объясняет,
                            в чем преимущество молочной продукции компании «Глобино».Поэтому необычные решения позволяют
                            моментально выделиться. <br>
                        </p>
                        <p class="for-read-more">
                            Дизайнерам нужно было разработать несколько вариантов упаковки (для линейки).
                            На плавленый сыр «Сметанка» поместили забавного зайца, украшенного геометрическим
                            орнаментом.
                            Зверек выглядит привлекательно для потребителей всех возрастов. Сыр «Дружба» обычно покупают
                            люди среднего возраста. Поэтому на нем разместили более сдержанное изображение: несколько
                            разных деревьев. Это изображение несет несколько смысловых подтекстов. Во-первых,
                            символизирует чистый экологический продукт без добавок. Во-вторых, в нем зашифровано
                            название сыра. Хотя деревья принадлежат к разным видам, они соединены в один лес.
                            Так и самых разных людей объединяет дружба. Общим для дизайна всех упаковок остается
                            сочетание цветов и характерный молочный всплеск.
                            Их, как и название продукта, выделяют заметными цветами и шрифтами.
                            Плавленые сырки покупают мужчины и женщины в возрасте от 20 лет. Студенты и работники
                            часто перекусывают ими на обеде. Дети едят плавленые сырки во время перекусов в течение
                            учебного дня. Для приготовления блюд их используют реже. Поэтому дизайн плавленых сырков
                            может быть более игривым, ярким и веселым. <br>

                            Ценовой сегмент обоих продуктов: средний.

                            Несомненным плюсом стала многолетняя история «Глобинского маслсырзавода» и доказанное
                            качество его продукции. Эти факты можно было использовать, создавая новый дизайн упаковки.
                            <br>

                            Работа над созданием нового дизайна упаковки для сливочного масла и плавленых сырков
                            длилась 4 месяца.
                        </p>
                        <span class="read-more-btn">Читать дальше</span>
                    </div>
                </div>
            </div>
        </div>
        @include('client.portfolio._star_rating_form')
        @include('client.portfolio._form_prev_next_work')
    </section>
@stop

@section('page-scripts')
    <!--скрипты для всех страниц конец-->
    <script src="/js/portfolio-main.js"></script>
    <!-- include own JavaScript -->
    <script src="/js/portfolio/portfolio-globino-maslo.js"></script>

    @php($data = [
    'type' => 'portfolio',
    'id' => $portfolio->id
    ])

    @include('layouts.partials.star-rating', ['data'=>$data])
@stop