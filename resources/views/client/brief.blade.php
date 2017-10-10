@extends('layouts.client')

@section('page-title', $page->meta->{'title' . $langSuf} )

@section('page-meta')
    <meta name="description" content="{{ $page->meta->{'description' . $langSuf} }}">
    <meta name="keywords" content="{{ $page->meta->{'keywords' . $langSuf} }}">
@stop
@section('page-content')

    @include('layouts.blackheader')
    <!-- begin container_small -->
    <div class="container_small">
        <h1 class="page_name">Бриф</h1>
        <p class="under_page_name">
            Заполните, пожалуйста, этот бриф, чтобы мы смогли оценить ваши потребности и сформировать
            Это займет 3 минуты.
        </p>

    {!! Form::open(['route' => 'brief_store', 'class' => 'brif', 'files' => true]) !!}
    <!-- begin one_block -->
        <div class="one_block animated">
            <!-- begin  -->
            <div class="left_colum">
                Какая услуга вас интересует?
            </div>
            <!-- end  -->
            <!-- begin right_colum -->
            <div class="right_colum custom">
                <fieldset>
                    @foreach($briefservices as $briefservice)
                        <input id="{{$briefservice->name}}" type="checkbox" name="briefservices[]"
                               value="{{$briefservice->name}}" unchecked hidden/>
                        <label for="{{$briefservice->name}}">{{trans('messages.'.$briefservice->name)}}</label>
                    @endforeach
                </fieldset>
            </div>
            <!-- end right_colum -->
        </div>
        <!-- end one_block -->
        <!-- begin one_block -->
        <div class="one_block animated">
            <!-- begin  -->
            <div class="left_colum">
                Какой бюджет проекта?
            </div>
            <!-- end  -->
            <!-- begin right_colum -->
            <div class="right_colum">
                <fieldset>
                    <input id="about" name="group1" type="radio" data-class="money money-about" hidden/> {{--checked--}}
                    <label for="about">Примерно</label>
                    <div class="padding_left">
                        <div class="inputs-container clearfix">
                            <div class="input-box change_on_resize">
                                <label for="minCost" class="custom_label">от</label>
                                {!! Form::number('money_min', null, ['class' => 'custom_input', 'id'=>'minCost', 'min'=>1, 'max'=>1000000]) !!}
                            </div>

                            <div class="input-box change_on_resize">
                                <label for="maxCost" class="custom_label">до</label>
                                {!! Form::number('money_max', null, ['class' => 'custom_input', 'id'=>'maxCost', 'min'=>1, 'max'=>1000000]) !!}
                            </div>

                            <div class="input-box change_on_resize">
                                <!--<label for="currency" class="custom_label">&nbsp;</label>-->
                                <select id="currency" name="currency" class="currency-select custom_input">
                                    <!--<option value disabled>Выберите валюту</option>-->
                                    <option value="1" selected>&#36;</option>
                                    <option value="2">&#8364;</option>
                                    <option value="3">&#8372;</option>
                                    <option value="4">&#8381;</option>
                                </select>
                                <div class="fake-block"></div>
                            </div>
                        </div>

                    </div>
                    <div id="slider"></div>
                    <input id="concretely" name="group1" type="radio"/> {{--unchecked--}}
                    <label for="concretely">Конкретная сумма</label>
                    {!! Form::number('money_concretely', null, ['class' => 'custom_input full greyplace_holder', 'id'=>'onlyCost', 'min'=>1, 'max'=>1000000]) !!}

                </fieldset>
            </div>
            <!-- end right_colum -->
        </div>
        <!-- end one_block -->
        <!-- begin one_block -->
        <div class="one_block animated">
            <!-- begin  -->
            <div class="left_colum">
                Какой желаемый<br>
                срок запуска проекта?
            </div>
            <!-- end  -->
            <!-- begin right_colum -->
            <div class="right_colum">
                <input id="quickly" name="group2" type="radio" value="quickly" data-class="quickly" unchecked hidden/>
                <label for="quickly">Срочно (на вчера)</label>
                <input id="when" name="group2" type="radio" value="when" data-class="time" unchecked hidden/>
                <label for="when">Необходимо сделать до</label>

                {{--<input type="date" id="deadline" value="" placeholder="Дата дедлайна"--}}
                {{--class="custom_input full greyplace_holder"/>--}}
                {!! Form::text('time', null, ['class' => 'time datepicker-here custom_input full greyplace_holder', 'id'=>'deadline', 'disabled'=>true]) !!}
                <label for="deadline"></label>

                <input id="no_hurry" name="group2" type="radio" value="no_hurry" data-class="no_hurry" checked hidden/>
                <label for="no_hurry">Не торопимся</label>
            </div>
            <!-- end right_colum -->
        </div>
        <!-- end one_block -->
        <!-- begin one_block -->
        <div class="one_block animated">
            <!-- begin  -->
            <div class="left_colum">
                Дополнительные пожелания
            </div>
            <!-- end  -->
            <!-- begin right_colum -->
            <div class="right_colum">
                {!! Form::textarea('wishes', null, [
                'required',
                'placeholder' => 'О да, расскажите на подробнее о своем проекте! Мы хотим знать всё!',
                'class' => 'custom_input full textarea greyplace_holder'
                ]) !!}
            </div>
            <!-- end right_colum -->
        </div>
        <!-- end one_block -->
        <!-- begin one_block -->
        <div class="one_block animated">
            <!-- begin  -->
            <div class="left_colum">
                Загрузите материалы<br>
                для ознакомления
            </div>
            <!-- end  -->
            <!-- begin right_colum -->
            <div class="right_colum">
                <div class="custom-file-upload">
                    <!--<label for="file">File: </label>-->
                    {!! Form::file('files[]', ['multiple'=>true, 'id' => 'file']) !!}
                </div>

            </div>
            <!-- end right_colum -->
        </div>
        <!-- end one_block -->
        <!-- begin one_block -->
        <div class="one_block animated">
            <!-- begin  -->
            <div class="left_colum">
                Контактное лицо (Ф.И.О.)
            </div>
            <!-- end  -->
            <!-- begin right_colum -->
            <div class="right_colum">
                {!! Form::text('name', null, [
                'required',
                'placeholder' => 'Дарт Вейдер',
                'class' => 'custom_input full greyplace_holder'
                ]) !!}
            </div>
            <!-- end right_colum -->
        </div>
        <!-- end one_block -->
        <!-- begin one_block -->
        <div class="one_block animated">
            <!-- begin  -->
            <div class="left_colum">
                Сфера деятельности
            </div>
            <!-- end  -->
            <!-- begin right_colum -->
            <div class="right_colum">
                {!! Form::text('activity', null, [
                'required',
                'placeholder' => 'Служба темной стороне Силы',
                'class' => 'custom_input full greyplace_holder'
                ]) !!}
            </div>
            <!-- end right_colum -->
        </div>
        <!-- end one_block -->
        <!-- begin one_block -->
        <div class="one_block animated">
            <!-- begin  -->
            <div class="left_colum">
                Ваш сайт (если есть)
            </div>
            <!-- end  -->
            <!-- begin right_colum -->
            <div class="right_colum">
                {!! Form::text('site', null, [
                    'placeholder' => 'http://darkside.com',
                    'class' => 'custom_input full greyplace_holder'
                ]) !!}
            </div>
            <!-- end right_colum -->
        </div>
        <!-- end one_block -->
        <!-- begin one_block -->
        <div class="one_block animated">
            <!-- begin  -->
            <div class="left_colum">
                Где вы находитесь?
            </div>
            <!-- end  -->
            <!-- begin right_colum -->
            <div class="right_colum">
                {!! Form::text('city', null, [
                    'required',
                    'placeholder' => 'Татуин, Галактическая Империя',
                    'class' => 'custom_input full greyplace_holder'
                ]) !!}
            </div>
            <!-- end right_colum -->
        </div>
        <!-- end one_block -->
        <!-- begin one_block -->
        <div class="one_block animated">
            <!-- begin  -->
            <div class="left_colum">
                Ваш номер телефона
            </div>
            <!-- end  -->
            <!-- begin right_colum -->
            <div class="right_colum">
                {!! Form::text('phone', null, [
                    'required',
                    'placeholder' => '(999) 123 45 67',
                    'class' => 'custom_input full greyplace_holder'
                ]) !!}
            </div>
            <!-- end right_colum -->
        </div>
        <!-- end one_block -->
        <!-- begin one_block -->
        <div class="one_block animated">
            <!-- begin  -->
            <div class="left_colum">
                Ваш e-mail
            </div>
            <!-- end  -->
            <!-- begin right_colum -->
            <div class="right_colum">
                {!! Form::email('email', null, [
                    'required',
                    'placeholder' => 'adam.smith@gmail.com',
                    'class' => 'custom_input full greyplace_holder'
                ]) !!}
            </div>
            <!-- end right_colum -->
        </div>
        <!-- end one_block -->
        <!-- begin one_block -->
        <div class="one_block animated">
            <!-- begin  -->
            <div class="left_colum">
                Откуда вы узнали о KOLORO?
            </div>
            <!-- end  -->
            <!-- begin right_colum -->
            <div class="right_colum">
                @foreach($briefabouts as $briefabout)
                    <input id="{{$briefabout->name}}" name="briefabouts[]" type="radio" value="{{$briefabout->name}}"
                           data-class="{{$briefabout->name}}" unchecked hidden/>
                    <label for="{{$briefabout->name}}">{{trans('messages.'.$briefabout->name)}}</label>
                @endforeach
                <input id="other" name="briefabouts[]" type="radio" data-class="other" unchecked hidden/>
                <label for="other">Другое</label>
                {!! Form::text('about', null, ['class' => 'other custom_input full', 'disabled' => true]) !!}
            </div>
            <!-- end right_colum -->
        </div>
        <!-- end one_block -->
        <p class="vse_norm">Все правильно заполнили? Тогда присылайте!</p>
        {{--<input type="button" name="send" value="отправить" class="yellow_button">--}}
        {!! Form::submit('Отправить', ['class' => 'gl-yellow-btn submit-btn']) !!}
        {!! Form::close() !!}
    </div>
    <!-- end container_small -->

    <!-- begin portfolio_block -->
    <section class="portfolio_block">
        <!-- begin container -->
        <div class="container">
            <p class="name_block">Примеры наших работ</p>
            <!-- begin image_container -->
            <div class="image_container">
                @widget('jobs_example')
            </div>
            <!-- end image_container -->
            <!--<a href="" class="btn transparent_btn" id="show_more">Еще работы</a>-->
            <a href="/portfolio" class="gl-yellow-btn show-more-portfolio-btn">Еще работы</a>

        </div>
        <!-- end container -->
    </section>
    <!-- end portfolio_block -->
@stop

@section('page-scripts')
    <!-- end of success-form -->

    <!-- только для этой страницы  настройки в файле brifinput.js (который в src/js)-->
    <script src="/js/brifinput.js"></script>
    <!-- только для этой страницы  настройки в файле brifinput.js-->

    <!-- air datepicker -->
    <link href="/css/datepicker.min.css" rel="stylesheet" type="text/css">
    <script src="/js/datepicker.min.js"></script>
    {{--radio--}}
    <script>
        //    $(function () {
        //        $(":radio").on("click", function () {
        //            var dataClass = $(this).data("class");
        //            $(".money").each(function () {
        //                this.disabled = !$(this).hasClass(dataClass);
        //            });
        //            $(".slider").each(function () {
        //                this.hidden = !$(this).hasClass(dataClass);
        //            });
        //        });
        //    });
        $(function () {
            $(":radio").on("click", function () {
                var dataClass = $(this).data("class");
                $(".time").each(function () {
                    this.disabled = !$(this).hasClass(dataClass);
                });
            });
        });
        $(function () {
            $(":radio").on("click", function () {
                var dataClass = $(this).data("class");
                $(".other").each(function () {
                    this.disabled = !$(this).hasClass(dataClass);
                });
            });
        });
        //    todo 10 2'error'0
        //    $('.money').on("change, keyup", function() { if (+$('#maxCost').val() !== 0 && +$('#minCost').val() !== 0 && +$('#minCost').val() >= +$('#maxCost').val()) {
        //            alert('Значение "от" (' + $('#minCost').val() + ') должно быть меньше, чем "до" (' + $('#maxCost').val() + ')');
        //        }
        //    });
    </script>
@stop