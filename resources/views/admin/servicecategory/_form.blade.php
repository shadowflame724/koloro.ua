<div class="col-xs-12 col-sm-12 col-md-12">

    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#ru_tab">RU</a></li>
        <li><a data-toggle="tab" href="#ua_tab">UA</a></li>
    </ul>
    <div class="tab-content">
        <div id="ru_tab" class="tab-pane fade in active">

            <div class="form-group">
                <strong>Название[RU]:</strong>
                {!! Form::text('name_ru', null, array('class' => 'form-control')) !!}
            </div>

            <div class="form-group">
                <strong>Описание[RU]:</strong>
                {!! Form::text('description_ru', null, array('class' => 'form-control')) !!}
            </div>
        </div>
        <div id="ua_tab" class="tab-pane fade">

            <div class="form-group">
                <strong>Название[RU]:</strong>
                {!! Form::text('name_ua', null, array('class' => 'form-control')) !!}
            </div>

            <div class="form-group">
                <strong>Описание[UA]:</strong>
                {!! Form::text('description_ua', null, array('class' => 'form-control')) !!}
            </div>
        </div>

    </div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Порядок:</strong>
        {!! Form::number('order', null, array('class' => 'form-control')) !!}
    </div>
</div>


{{--<div class="col-xs-12 col-sm-12 col-md-12">--}}
{{--<div class="form-group">--}}
{{--<strong>Изображение (фоновое):</strong>--}}
{{--@if(isset($serviceCategory) AND $serviceCategory->image)--}}
{{--<img src="/files/images/servicecategory/{{ $serviceCategory->image->link }}" class="preview">--}}
{{--@endif--}}
{{--{!! Form::file('image', null, ['class' => 'form-control']) !!}--}}
{{--@if(isset($serviceCategory) AND $serviceCategory->image)--}}
{{--<input name="image_alt" value="{{ $serviceCategory->image->alt }}" type="text" class="form-control"--}}
{{--placeholder="ALT">--}}
{{--@else--}}
{{--<input name="image_alt" type="text" class="form-control" placeholder="ALT">--}}
{{--@endif--}}
{{--</div>--}}
{{--</div>--}}