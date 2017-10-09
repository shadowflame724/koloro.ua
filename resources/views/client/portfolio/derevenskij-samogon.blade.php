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


<section id="derevenskij-samogon">
    <div class="bg-container top-container" style="background-image: url('/images/portfolio/derevenskij-samogon/main-picture.jpg')">
        <div class="dark-mask"></div>
        <div class="gl-container title-container">
            <h1 class="top-title">
                Деревенский самогон
            </h1>
            <h2 class="top-title-small">
                «Натуральный деревенский продукт, эталон качества и самобытного вкуса»
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
                    «Деревенский самогон» - это традиционный российский напиток, сделанный вручную в
                    медном перегонном кубе. ТМ «Деревенский самогон» - федеральная торговая марка,
                    представленная на всей территории Российской Федерации.
                </p>
                <p>
                    <span>Это совместный продукт двух компаний «Russian Spirits International» и «Русские
                        Оригинальные Напитки».</span> Russian Spirits International осуществляет непосредственное
                    производство спиртов для ЕС, которые впоследствии разливают по бутылкам в Литве.

                </p>
                <p class="for-read-more">
                    После чего они экспортируются в Россию. Компания «Русские Оригинальные Напитки»
                    осуществляет контроль за качеством продукции на каждом этапе ее производства.
                    Недавно компания приняла решение о проведении <span>редизайна существующей бутылки и
                    дизайна этикетки «Деревенского самогона»</span> для чего был проведен <span>конкурс среди
                    дизайнерских компаний</span> и брендинговых агентств.
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
                    Задачей нашей компании для данного проекта стала <span>разработка уникальной
                    геометрии бутылки и нового дизайна этикетки</span> ТМ «Деревенский Самогон»,
                    создание запоминающихся идентификационных элементов бренда и других коммуникаций с потребителем.
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
                    Поскольку ТМ «Деревенский самогон» — продукт премиального сегмента,
                    для того чтобы выделить его на фоне других конкурентных марок, важно
                    было разработать новую
                    <a class="gl-link" href="https://koloro.ua/dizajn-vodki.html" target="_blank">
                        уникальную форму бутылки
                    </a>, которая отражала бы
                    как современность продукта, так и его богатый вкус, и кроме того, была бы запоминающейся.
                    Новый дизайн этикетки должен был сохранять
                    <a class="gl-link" href="https://koloro.ua/pozicionirovanie-brenda.html" target="_blank">
                        позиционирование и УТП
                    </a> <span>торговой марки –
                    натуральный деревенский продукт, эталон качества и самобытного вкуса.</span>
                </p>
            </div>
        </div>
    </div>

    <div class="info-block-container">
        <div class="gl-container">
            <div class="info-left">
                <h3 class="info-left-title">Разработка уникальной геометрии бутылки и дизайна этикетки</h3>
            </div>
            <div class="info-right">
                <p>
                    Дизайнеры и 3D-модельеры нашей компании учли все вышеприведенные требования
                    и отразили свои уникальные идеи в трех концептах, презентованных заказчику.
                </p>
            </div>
        </div>
    </div>

    <div class="info-block-container">
        <div class="gl-container">
            <div class="info-left">
                <h3 class="info-left-title">Концепт «Колос»</h3>
            </div>
            <div class="info-right">
                <p>
                    Для данного концепта использовался следующий ассоциативный ряд: зерно,
                    урожай, дом за городом, ферма, роскошь, народность, премиальная простота.
                    <span>Форма бутылки круглая — самая востребованная форма в России.</span> На поверхность
                    нанесены объемные узоры, как раз в том месте, где берутся рукой; это увеличивает
                    восприятие и запоминаемость продукта через тактильные свойства. Форма похожая
                    на традиционную, старую бутылку для хранения самогона, используемую в России уже
                    на протяжении веков. Толстое дно указывает на эксклюзивность товара.
                </p>
                <p>
                    <span>Изюминка концепта — фактурность и тактильные свойства.</span> Через нанесенный трафарет
                    передается фактура благородного дерева. Материал этикетки структурой и цветом похож
                    на натуральные материалы.
                </p>
                <p class="for-read-more">
                    <span>Богатый узор — стилизованные колоски,</span> который служит не только для красоты, но и
                    для удобства и надежности расположения бутылки в руке – привлекает внимание покупателя
                    игрой перелива и блеска.
                </p>
                <span class="read-more-btn">Читать дальше</span>
            </div>
        </div>
    </div>
    
    <div class="image-container">
        <img src="/images/portfolio/derevenskij-samogon/samogon-picture-1.jpg" alt="samogon-picture">
    </div>

    <div class="info-block-container">
        <div class="gl-container">
            <div class="info-left">
                <h3 class="info-left-title">&nbsp;</h3>
            </div>
            <div class="info-right">
                <p>
                    <span>«Колосковая фактурность»</span> и <span>подчеркивает натуральность продукта</span>, и показывает,
                    из чего продукт изготовлен — из зерновых.
                </p>
            </div>
        </div>
    </div>

    <div class="gl-container">
        <h2 class="h2-title">Концепт «Колос»</h2>
    </div>

    <div class="image-container">
        <img src="/images/portfolio/derevenskij-samogon/samogon-picture-2.jpg" alt="samogon-picture">
    </div>

    <div class="info-block-container">
        <div class="gl-container">
            <div class="info-left">
                <h3 class="info-left-title">Концепт «Мануфактура»</h3>
            </div>
            <div class="info-right">
                <p>
                    В данном концепте была использована <span>бочковатая форма бутылки</span>, характерная
                    для дорогих напитков, таких как виски или бренди. Такая бутылка удобно лежит
                    в руке и актуальна для самогона «премиального» класса. <span>Коммуникационный посыл
                    концепта</span> можно выразить в следующих ключевых словах: <span>мощь, тракторист, урожай,
                    подлинность, авторская работа, Федор Колосков, колхоз, ностальгия, акварель.</span>
                </p>
            </div>
        </div>
    </div>

    <div class="image-container">
        <img src="/images/portfolio/derevenskij-samogon/samogon-picture-3.jpg" alt="samogon-picture">
    </div>

    <div class="info-block-container">
        <div class="gl-container">
            <div class="info-left">
                <h3 class="info-left-title">&nbsp;</h3>
            </div>
            <div class="info-right">
                <p>
                    В качестве <span>идентификационных элементов были выбраны надписи</span>, подчеркивающие
                    общее позиционирование торговой марки:
                </p>
                <ul>
                    <li>«урожай 2012 года» - как на дорогих винах;</li>
                    <li>«народная мануфактура»;</li>
                    <li>«сделано вручную в медном перегонном кубе»;</li>
                    <li>«бережный подход к традициям».</li>
                </ul>
                <p class="for-read-more">
                    А также <span>фирменный персонаж — тракторист Федор Колосков</span>. Сильный персонаж,
                    которому можно доверять, и который знает толк в «Деревенском самогоне».
                    Водка от талантливого мастера производства. Многоэтапный отбор компонентов,
                    эксклюзивный купаж и бережный подход к процессу производства — три уникальных
                    особенности бренда. Только богатые люди могут позволить себе "быть самим собой".
                </p>
                <span class="read-more-btn">Читать дальше</span>
            </div>
        </div>
    </div>

    <div class="gl-container">
        <h2 class="h2-title">Концепт «Мануфактура»</h2>
    </div>

    <div class="image-container">
        <img src="/images/portfolio/derevenskij-samogon/samogon-picture-4.jpg" alt="samogon-picture">
    </div>

    <div class="info-block-container">
        <div class="gl-container">
            <div class="info-left">
                <h3 class="info-left-title">Концепт «Гуси»</h3>
            </div>
            <div class="info-right">
                <p>
                    Привлекательность дизайна данного концепта подкрепляется
                    <span>уникальной формой бутылки в виде гуся</span>.
                </p>
                <p>
                    Такая бутылка не просто уникальна, но несет сильный эмоциональный посыл. Концепт деревенского
                    самогона «Гуси» притягивает к себе внимание еще и <span>техникой исполнения дизайна — декорированием
                    бутылки</span>. Гуси могут разгоняться и взлетать по кругу бутылки, что заставит потребителя взять ее
                    в руки и крутить продукт, что является сильным стимулятором совершения покупки. Кроме того,
                    взлетающие вверх птицы свидетельствуют и несут потребителям коммуникацию: движение, стремление
                    вверх, рост. Концепт был построен на следующих ключевых словах: легкость, полет, стая, перелет,
                    дружба, пруд, небо, деревня, перо, мягкость, раздолье.
                </p>
            </div>
        </div>
    </div>

    <div class="image-container">
        <img src="/images/portfolio/derevenskij-samogon/samogon-picture-5.jpg" alt="samogon-picture">
    </div>

    <div class="info-block-container">
        <div class="gl-container">
            <div class="info-left">
                <h3 class="info-left-title">Линейка наименований</h3>
            </div>
            <div class="info-right">
                <p>
                    <span>белый и серый, актуально для гусей, а также для самогона</span>. Многие опрошенные
                    потребители отметили, что такая бутылка смотрится очень дорого и даже как
                    сувенирная продукция. Весьма вероятно, что такую бутылку будут покупать не
                    только для себя, но и на подарок.
                </p>
            </div>
        </div>
    </div>

    <div class="gl-container">
        <h2 class="h2-title">Концепт «Гуси»</h2>
    </div>

    <div class="image-container">
        <img src="/images/portfolio/derevenskij-samogon/samogon-picture-6.jpg" alt="samogon-picture">
    </div>

    <div class="gl-container">
        <h2 class="h2-title">Геометрия бутылки для концепта «Гуси»</h2>
    </div>

    <div class="image-container">
        <img src="/images/portfolio/derevenskij-samogon/samogon-picture-7.jpg" alt="samogon-picture">
    </div>

    <div class="info-block-container">
        <div class="gl-container">
            <div class="info-left">
                <h3 class="info-left-title">Результат</h3>
            </div>
            <div class="info-right">
                <p>
                    По окончанию конкурса на разработку геометрии бутылки и нового дизайна этикетки,
                    несмотря на множество стоящих идей, компания «Русские Оригинальные Напитки» не решилась
                    на кардинальную смену образа бренда и решила сохранить прежний дизайн «Деревенского самогона».
                </p>
            </div>
        </div>
    </div>

    <div class="gl-container">
        <h2 class="h2-title">Прежний дизайн "Деревенского самогона"</h2>
    </div>

    <div class="image-container">
        <img src="/images/portfolio/derevenskij-samogon/samogon-picture-8.jpg" alt="samogon-picture">
    </div>

    <div class="info-block-container">
        <div class="gl-container">
            <div class="info-left">
                <h3 class="info-left-title">&nbsp;</h3>
            </div>
            <div class="info-right">
                <p>
                    Среди вариантов нашего брендингового агентства заказчик особо отметил и одобрил концепт «Гуси».
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
                    Брендам премиум сегмента для того чтобы сохранить и укрепить свои позиции
                    необходимо «соответствовать». Поэтому очень важно иметь «богатую»,
                    <a class="gl-link" href="https://koloro.ua/novyj-dizajn-upakovki.html" target="_blank">
                        «царскую» упаковку
                    </a> и уникальную концепцию позиционирования.
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