@extends('layouts.app')
@section('page-style')
    {{ Html::style('//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/css/bootstrap-select.min.css') }}
@stop
@permission('service-edit')
@section('main-content')
    <style>
        .img-wrap {
            position: relative;
        ...
        }
        .img-wrap .close {
            position: absolute;
            top: 2px;
            right: 2px;
            z-index: 100;
            color: red;
        ...
        }
    </style>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            {{--<div class="pull-left">--}}
            {{--<h2>Изменить</h2>--}}
            {{--</div>--}}
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('admin.service.index') }}"> Назад</a>
            </div>
        </div>
    </div>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {!! Form::model($service, ['method' => 'PATCH','files' => true,'route' => ['admin.service.update', $service->id]]) !!}
    <div class="row">
        @php
            $count = 0;
            $i = 0;
        @endphp
        @include('admin.service._form')

        {{--@include('admin.service._form_blocks')--}}
        <!-- Service blocks management -->
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h3>Контент</h3>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"
                                   aria-expanded="true" aria-controls="collapseOne">
                                    Блок #1
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                            <div class="panel-body">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a data-toggle="tab" href="#block_one_tab_ru">RU</a></li>
                                    <li><a data-toggle="tab" href="#block_one_tab_ua">UA</a></li>
                                </ul>

                                @if(isset($blocks) AND $blocks->get(0))
                                    {!! Form::hidden('blocks[0][id]', $blocks->get(0)->id) !!}
                                @endif
                                <div class="tab-content">
                                    <div id="block_one_tab_ru" class="tab-pane fade in active">
                                        <div class="form-group">
                                            <strong>Заголовок[RU]:</strong>
                                            {!! Form::text('blocks[0][title_ru]', null, ['class' => 'form-control']) !!}
                                        </div>

                                        <div class="form-group">
                                            <strong>Текст[RU]:</strong>
                                            {!! Form::textarea('blocks[0][content_ru]', null, ['id' => 'my-editor', 'class' => 'form-control ckeditor','style'=>'height:200px']) !!}
                                        </div>
                                    </div>

                                    <div id="block_one_tab_ua" class="tab-pane fade">
                                        <div class="form-group">
                                            <strong>Заголовок[UA]:</strong>
                                            {!! Form::text('blocks[0][title_ua]', null, ['class' => 'form-control']) !!}
                                        </div>

                                        <div class="form-group">
                                            <strong>Текст[UA]:</strong>
                                            {!! Form::textarea('blocks[0][content_ua]', null, ['class' => 'form-control ckeditor','style'=>'height:200px']) !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                   href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Блок #2 (1 slider)
                                </a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="panel-body" id="carousel_panel">
                                <div class="btn btn-box-tool" id="add_carousel"><i class="fa fa-plus"></i></div>
                                @if(isset($blocks)  AND $blocks->get(1))
                                    {!! Form::hidden('blocks[1][id]', $blocks->get(1)->id) !!}
                                    {!! Form::hidden('blocks[1][image_ids]', $blocks->get(1)->image_ids, ['id' => 'blocks_1_image_ids']) !!}
                                    @php($scBlockImg = $blocks->get(1)->images())

                                    @for($count; $count<count($scBlockImg); $count++)
                                        <div class="add-carousel-data">
                                            <ul class="nav nav-tabs">
                                                <li class="active"><a data-toggle="tab" href="#block_two_{{ $count }}_tab_ru">RU</a>
                                                </li>
                                                <li><a data-toggle="tab" href="#block_two_{{ $count }}_tab_ua">UA</a></li>
                                            </ul>

                                            <div class="tab-content">
                                                <div id="block_two_{{ $count }}_tab_ru" class="tab-pane fade in active">
                                                    <div class="form-group">
                                                        <strong>Заголовок[RU]:</strong>
                                                        <div class="input-group">
                                                            <input name="blocks[1][{{ $count }}][title_ru]"
                                                                   value="{{ $scBlockImg[$count]->title_ru }}" type="text"
                                                                   class="form-control"/>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div id="block_two_{{ $count }}_tab_ua" class="tab-pane fade">
                                                    <div class="form-group">
                                                        <strong>Заголовок[UA]:</strong>
                                                        <div class="input-group">
                                                            <input name="blocks[1][{{ $count }}][title_ua]"
                                                                   value="{{ $scBlockImg[$count]->title_ua }}" type="text"
                                                                   class="form-control"/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="img-wrap" data-fileId="{{ $scBlockImg[$count]->id }}"
                                                 data-serviceBlockId="1">
                                                <img src="/files/images/service-page/{{ $scBlockImg[$count]->link }}">
                                            </div>
                                            {!! Form::hidden('blocks[1]['. $count .'][image_id]', $scBlockImg[$count]->id) !!}
                                            {!! Form::file('blocks[1]['. $count .'][image]', ['class' => 'form-control']) !!}
                                            {!! Form::text('blocks[1]['. $count .'][image_alt]', $scBlockImg[$count]->alt, ['class' => 'form-control', 'placeholder' => 'ALT']) !!}

                                            <div class="btn btn-box-tool"><i class="fa fa-minus remove-carousel"></i></div>
                                        </div>
                                    @endfor
                                @else
                                    <div class="add-carousel-data">
                                        <ul class="nav nav-tabs">
                                            <li class="active"><a data-toggle="tab" href="#block_two_{{ $count }}_tab_ru">RU</a>
                                            </li>
                                            <li><a data-toggle="tab" href="#block_two_{{ $count }}_tab_ua">UA</a></li>
                                        </ul>

                                        <div class="tab-content">
                                            <div id="block_two_tab_{{ $count }}_ru" class="tab-pane fade in active">
                                                <div class="form-group">
                                                    <strong>Заголовок[RU]:</strong>
                                                    <div class="input-group">
                                                        <input name="blocks[1][{{ $count }}][title_ru]" type="text"
                                                               class="form-control"/>
                                                    </div>
                                                </div>
                                            </div>

                                            <div id="block_two_{{ $count }}_tab_ua" class="tab-pane fade">
                                                <div class="form-group">
                                                    <strong>Заголовок[UA]:</strong>
                                                    <div class="input-group">
                                                        <input name="blocks[1][{{ $count }}][title_ua]" type="text"
                                                               class="form-control"/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        {!! Form::file('blocks[1]['. $count .'][image]', ['class' => 'form-control']) !!}
                                        {!! Form::text('blocks[1]['. $count .'][image_alt]', null, ['class' => 'form-control', 'placeholder' => 'ALT']) !!}

                                        <div class="btn btn-box-tool"><i class="fa fa-minus remove-carousel"></i></div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                   href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Блок #3
                                </a>
                            </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="panel-body">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a data-toggle="tab" href="#block_three_tab_ru">RU</a></li>
                                    <li><a data-toggle="tab" href="#block_three_tab_ua">UA</a></li>
                                </ul>
                                @if(isset($blocks) AND $blocks->get(2))
                                    {!! Form::hidden('blocks[2][id]', $blocks->get(2)->id) !!}
                                @endif

                                <div class="tab-content">
                                    <div id="block_three_tab_ru" class="tab-pane fade in active">

                                        <div class="form-group">
                                            <strong>Заголовок[RU]:</strong>
                                            {!! Form::text('blocks[2][title_ru]', null, ['class' => 'form-control']) !!}
                                        </div>

                                        <div class="form-group">
                                            <strong>Текст[RU]:</strong>
                                            {!! Form::textarea('blocks[2][content_ru]', null, ['class' => 'form-control ckeditor','style'=>'height:200px']) !!}
                                        </div>
                                    </div>
                                    <div id="block_three_tab_ua" class="tab-pane fade">

                                        <div class="form-group">
                                            <strong>Заголовок[UA]:</strong>
                                            {!! Form::text('blocks[2][title_ua]', null, ['class' => 'form-control']) !!}
                                        </div>

                                        <div class="form-group">
                                            <strong>Текст[UA]:</strong>
                                            {!! Form::textarea('blocks[2][content_ua]', null, ['class' => 'form-control ckeditor','style'=>'height:200px']) !!}
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingFour">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                   href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Блок #4 (2 slider)
                                </a>
                            </h4>
                        </div>
                        <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                            <div class="panel-body">
                                <div class="form-group">
                                    <strong>Фотографии:</strong>
                                    @if(isset($blocks)  AND $blocks->get(3))
                                        {!! Form::hidden('blocks[3][id]', $blocks->get(3)->id) !!}

                                        {!! Form::hidden('blocks[3][image_ids]', $blocks->get(3)->image_ids, ['id' => 'blocks_3_image_ids']) !!}

                                        @foreach($blocks->get(3)->images() as $image)
                                            <div class="img-wrap" data-fileId="{{ $image->id }}" data-serviceBlockId="3">
                                                <span class="close">X</span>
                                                <img src="/files/images/service-page/{{ $image->link }}">
                                            </div>
                                        @endforeach
                                    @endif
                                    {!! Form::file('blocks[3][image][]', ['class' => 'form-control', 'multiple']) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingFive">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                   href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Блок #5
                                </a>
                            </h4>
                        </div>
                        <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                            <div class="panel-body">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a data-toggle="tab" href="#block_five_tab_ru">RU</a></li>
                                    <li><a data-toggle="tab" href="#block_five_tab_ua">UA</a></li>
                                </ul>
                                @if(isset($blocks) AND $blocks->get(4))
                                    {!! Form::hidden('blocks[4][id]', $blocks->get(4)->id) !!}
                                @endif
                                <div class="tab-content">
                                    <div id="block_five_tab_ru" class="tab-pane fade in active">

                                        <div class="form-group">
                                            <strong>Заголовок[RU]:</strong>
                                            {!! Form::text('blocks[4][title_ru]', null, ['class' => 'form-control']) !!}
                                        </div>

                                        <div class="form-group">
                                            <strong>Текст[RU]:</strong>
                                            {!! Form::textarea('blocks[4][content_ru]', null, ['class' => 'form-control ckeditor','style'=>'height:200px']) !!}
                                        </div>
                                    </div>
                                    <div id="block_five_tab_ua" class="tab-pane fade">

                                        <div class="form-group">
                                            <strong>Заголовок[UA]:</strong>
                                            {!! Form::text('blocks[4][title_ua]', null, ['class' => 'form-control']) !!}
                                        </div>

                                        <div class="form-group">
                                            <strong>Текст[UA]:</strong>
                                            {!! Form::textarea('blocks[4][content_ua]', null, ['class' => 'form-control ckeditor','style'=>'height:200px']) !!}
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingSix">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                   href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    Блок #6
                                </a>
                            </h4>
                        </div>
                        <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
                            <div class="panel-body">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a data-toggle="tab" href="#block_six_tab_ru">RU</a></li>
                                    <li><a data-toggle="tab" href="#block_six_tab_ua">UA</a></li>
                                </ul>

                                <div class="tab-content">
                                    <div id="block_six_tab_ru" class="tab-pane fade in active">

                                        @if(isset($blocks) AND $blocks->get(5))
                                            {!! Form::hidden('blocks[5][id]', $blocks->get(5)->id) !!}
                                        @endif
                                        <div class="form-group">
                                            <strong>Заголовок[RU]:</strong>
                                            {!! Form::text('blocks[5][title_ru]', null, ['class' => 'form-control']) !!}
                                        </div>

                                        <div class="form-group">
                                            <strong>Текст[RU]:</strong>
                                            {!! Form::textarea('blocks[5][content_ru]', null, ['class' => 'form-control ckeditor','style'=>'height:200px']) !!}
                                        </div>
                                    </div>
                                    <div id="block_six_tab_ua" class="tab-pane fade">

                                        <div class="form-group">
                                            <strong>Заголовок[UA]:</strong>
                                            {!! Form::text('blocks[5][title_ua]', null, ['class' => 'form-control']) !!}
                                        </div>

                                        <div class="form-group">
                                            <strong>Текст[UA]:</strong>
                                            {!! Form::textarea('blocks[5][content_ua]', null, ['class' => 'form-control ckeditor','style'=>'height:200px']) !!}
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingSeven">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                   href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                    Блок #7
                                </a>
                            </h4>
                        </div>
                        <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
                            <div class="panel-body">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a data-toggle="tab" href="#block_seven_tab_ru">RU</a></li>
                                    <li><a data-toggle="tab" href="#block_seven_tab_ua">UA</a></li>
                                </ul>

                                <div class="tab-content">
                                    <div id="block_seven_tab_ru" class="tab-pane fade in active">

                                        @if(isset($blocks) AND $blocks->get(6))
                                            {!! Form::hidden('blocks[6][id]', $blocks->get(6)->id) !!}
                                        @endif
                                        <div class="form-group">
                                            <strong>Заголовок[RU]:</strong>
                                            {!! Form::text('blocks[6][title_ru]', null, ['class' => 'form-control']) !!}
                                        </div>

                                        <div class="form-group">
                                            <strong>Текст[RU]:</strong>
                                            {!! Form::textarea('blocks[6][content_ru]', null, ['class' => 'form-control ckeditor','style'=>'height:200px']) !!}
                                        </div>
                                    </div>
                                    <div id="block_seven_tab_ua" class="tab-pane fade">

                                        <div class="form-group">
                                            <strong>Заголовок[UA]:</strong>
                                            {!! Form::text('blocks[6][title_ua]', null, ['class' => 'form-control']) !!}
                                        </div>

                                        <div class="form-group">
                                            <strong>Текст[UA]:</strong>
                                            {!! Form::textarea('blocks[6][content_ua]', null, ['class' => 'form-control ckeditor','style'=>'height:200px']) !!}
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingEight">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                   href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                    Блок #8
                                </a>
                            </h4>
                        </div>
                        <div id="collapseEight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEight">
                            <div class="panel-body">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a data-toggle="tab" href="#block_eight_tab_ru">RU</a></li>
                                    <li><a data-toggle="tab" href="#block_eight_tab_ua">UA</a></li>
                                </ul>

                                <div class="tab-content">
                                    <div id="block_eight_tab_ru" class="tab-pane fade in active">

                                        @if(isset($blocks) AND $blocks->get(7))
                                            {!! Form::hidden('blocks[7][id]', $blocks->get(7)->id) !!}
                                        @endif
                                        <div class="form-group">
                                            <strong>Заголовок[RU]:</strong>
                                            {!! Form::text('blocks[7][title_ru]', null, ['class' => 'form-control']) !!}
                                        </div>

                                        <div class="form-group">
                                            <strong>Текст[RU]:</strong>
                                            {!! Form::textarea('blocks[7][content_ru]', null, ['class' => 'form-control ckeditor','style'=>'height:200px']) !!}
                                        </div>
                                    </div>
                                    <div id="block_eight_tab_ua" class="tab-pane fade">

                                        <div class="form-group">
                                            <strong>Заголовок[UA]:</strong>
                                            {!! Form::text('blocks[7][title_ua]', null, ['class' => 'form-control']) !!}
                                        </div>

                                        <div class="form-group">
                                            <strong>Текст[UA]:</strong>
                                            {!! Form::textarea('blocks[7][content_ua]', null, ['class' => 'form-control ckeditor','style'=>'height:200px']) !!}
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Сохранить</button>
        </div>

    </div>
    {!! Form::close() !!}
@endsection
@endpermission
@section('page-scripts')
    {{--@include('admin.service._js')--}}
    <script>

        function removeImage() {
            $('.close').each(function () {
                $(this).on('click', function () {
                    var imageDiv = $(this).parent();
                    var fileId = imageDiv.data('fileid').toString();
                    var serviceBlockId = imageDiv.data('serviceblockid');
                    var hiddenField = $('#blocks_' + serviceBlockId + '_image_ids');
                    var imgArr = hiddenField.val().split(',');
                    var index = imgArr.indexOf(fileId);
                    if (index > -1) {
                        imgArr.splice(index, 1);
                    }
                    var newHiddenVal = imgArr.join();
                    hiddenField.val(newHiddenVal);
                    imageDiv.remove();
                })
            })
        }

        function removePriceDepends() {
            $('.remove-price-depends:not(:first)').each(function () {
                $(this).on('click', function () {
                    $(this).parent().parent().remove();
                })
            })
        }

        var countPriceDepends = '{{ $i }}';

        function removeCarouselItem() {
            var count = 0;
            $('.remove-carousel').each(function () {
                count++;
                $(this).on('click', function () {
                    var imageDiv = $(this).parents('.add-carousel-data').children('.img-wrap');
                    if (typeof imageDiv.data('fileid') !== "undefined") {
                        var fileId = imageDiv.data('fileid').toString();
                        var serviceBlockId = imageDiv.data('serviceblockid');
                        var hiddenField = $('#blocks_' + serviceBlockId + '_image_ids');
                        var imgArr = hiddenField.val().split(',');
                        var index = imgArr.indexOf(fileId);
                        if (index > -1) {
                            imgArr.splice(index, 1);
                        }
                        var newHiddenVal = imgArr.join();
                        hiddenField.val(newHiddenVal);
                    }
                    $(this).parent().parent().remove();
                    count--;
                    removeCarouselItem();

                })
            })
        }

        $('#add_price_depends').on('click', function () {
            countPriceDepends++;
            $('#price_depends_data').append(
                '<div>\n' +
                '            <ul class="nav nav-tabs">\n' +
                '                <li class="active"><a data-toggle="tab" href="#price_depends_' + countPriceDepends + '_ru_tab">RU</a></li>\n' +
                '                <li><a data-toggle="tab" href="#price_depends_' + countPriceDepends + '_ua_tab">UA</a></li>\n' +
                '            </ul>\n' +
                '            <div class="tab-content">\n' +
                '                <div id="price_depends_' + countPriceDepends + '_ru_tab" class="tab-pane fade in active">\n' +
                '                    <div class="form-group">\n' +
                '                        <strong>Цена зависит от[RU]:</strong>\n' +
                '<input type="text" name="price_depends_ru[' + countPriceDepends + ']" class="form-control">' +
                '\n' +
                '                    </div>\n' +
                '                </div>\n' +
                '\n' +
                '                <div id="price_depends_' + countPriceDepends + '_ua_tab" class="tab-pane fade">\n' +
                '                    <div class="form-group">\n' +
                '                        <strong>Цена зависит от[UA]:</strong>\n' +
                '<input type="text" name="price_depends_ua[' + countPriceDepends + ']" class="form-control">\n' +
                '                    </div>\n' +
                '                </div>\n' +
                '            </div>\n' +
                '            <div class="btn btn-box-tool"><i class="fa fa-minus remove-price-depends"></i></div>\n' +
                '        </div>');
            removePriceDepends();
        });

        var count = '{{ $count }}';

        $('#add_carousel').on('click', function () {
            count++;

            $('#carousel_panel').append(
                '<div class="add-carousel-data">\n' +
                '                        <ul class="nav nav-tabs">\n' +
                '                            <li class="active"><a data-toggle="tab" href="#block_two_' + count + '_tab_ru">RU</a></li>\n' +
                '                            <li><a data-toggle="tab" href="#block_two_' + count + '_tab_ua">UA</a></li>\n' +
                '                        </ul>\n' +
                '\n' +
                '                        <div class="tab-content">\n' +
                '                            <div id="block_two_' + count + '_tab_ru" class="tab-pane fade in active">\n' +
                '                                <div class="form-group">\n' +
                '                                        <strong>Заголовок[RU]:</strong>\n' +
                '                                        <div class="input-group">\n' +
                '                                            <input name="blocks[1][' + count + '][title_ru]" type="text" class="form-control"/>\n' +
                '                                        </div>\n' +
                '                                </div>\n' +
                '                            </div>\n' +
                '\n' +
                '                            <div id="block_two_' + count + '_tab_ua" class="tab-pane fade">\n' +
                '                                <div class="form-group">\n' +
                '                                        <strong>Заголовок[UA]:</strong>\n' +
                '                                        <div class="input-group">\n' +
                '                                            <input name="blocks[1][' + count + '][title_ua]" type="text" class="form-control"/>\n' +
                '                                        </div>\n' +
                '                                </div>\n' +
                '                            </div>\n' +
                '                        </div>\n' +
                '\n' +
                '<input name="blocks[1][' + count + '][image_id]" type="hidden" class="form-control">' +
                '<input name="blocks[1][' + count + '][image]" type="file" class="form-control">' +
                '<input name="blocks[1][' + count + '][image_alt]" type="text" class="form-control" placeholder="ALT">' +
                '                        <div class="btn btn-box-tool"><i class="fa fa-minus remove-carousel"></i></div>\n' +
                '                    </div>');
            removeCarouselItem();
        });

        removePriceDepends();
        removeCarouselItem();
        removeImage();

        var token = $('meta[name="csrf-token"]').attr('content');
        var options = {
            //filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
            filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=' + token,
            //filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
            filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token=' + token
//        allowedContent: 'img[!src,alt]  ;'
        };


        $('.ckeditor').each(function (index, el) {
            CKEDITOR.replace(el, options);
            CKEDITOR.on('dialogDefinition', function (ev) {
                var image;
                // Take the dialog name and its definition from the event data
                var dialogName = ev.data.name;
                var dialogDefinition = ev.data.definition;
                var editor = ev.editor;
                if (dialogName == 'image') {
                    dialogDefinition.onLoad = function (ev) {
                    };
                    dialogDefinition.onOk = function (e) {
                        //var imageAlt = image[2].alt;
                        var imageSrcUrl = e.sender.originalElement.$.src;
                        //console.log(ev.sender.originalElement.$.currentSrc);
                        image = $('a').find('img');
                        var imageTag = $("img[src='"+imageSrcUrl+"']");
                        var imageAlt = imageTag["0"].alt;
                        var imgHtml;
                        var imageTitle = imageTag["0"].title;
                        var str = "<img src=\'" + imageSrcUrl + "\' alt=\'" + imageAlt + "\' title=\'image\'/>";
                        if (imageTitle) {
                            imgHtml = CKEDITOR.dom.element.createFromHtml(str);
                        } else {
                            imgHtml = CKEDITOR.dom.element.createFromHtml("<div class='image-container'>"+str+"</div>");
                        }
                        editor.insertElement(imgHtml);
                    };
                }
            })
        });
    </script>
@endsection