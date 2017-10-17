<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <label for="exampleFormControlSelect1">Показывать на главной?</label>
        <select name="on_main_page" class="form-control" id="exampleFormControlSelect1">
            <option @if(isset($portfolio) AND $portfolio->on_main_page == 0) selected @endif value="0">НЕТ</option>
            <option @if(isset($portfolio) AND $portfolio->on_main_page == 1) selected @endif value="1">ДА</option>
        </select>
    </div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">

    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#ru_tab">RU</a></li>
        <li><a data-toggle="tab" href="#ua_tab">UA</a></li>
    </ul>

    <div class="tab-content">
        <div id="ru_tab" class="tab-pane fade in active">
            <div class="form-group">
                <strong>Название[RU]:</strong>
                {!! Form::text('title_ru', null, array('class' => 'form-control')) !!}
            </div>
            <div class="form-group">
                <strong>Описание[RU]:</strong>
                {!! Form::textarea('short_desc_ru', null, array('class' => 'form-control','style'=>'height:100px')) !!}
            </div>
            <div class="form-group">
                <strong>Контент[RU]:</strong>
                {!! Form::textarea('text_ru', null, array('class' => 'form-control ckeditor','style'=>'height:200px')) !!}
            </div>
        </div>
        <div id="ua_tab" class="tab-pane fade">
            <div class="form-group">
                <strong>Название[UA]:</strong>
                {!! Form::text('title_ua', null, array('class' => 'form-control')) !!}
            </div>
            <div class="form-group">
                <strong>Описание[UA]:</strong>
                {!! Form::textarea('short_desc_ua', null, array('class' => 'form-control','style'=>'height:100px')) !!}
            </div>
            <div class="form-group">
                <strong>Контент[UA]:</strong>
                {!! Form::textarea('text_ua', null, array('class' => 'form-control ckeditor','style'=>'height:200px')) !!}
            </div>
        </div>
    </div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Адрес:</strong>
        {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Если не заполнен, будет сгенерирован автоматически']) !!}
    </div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Категории:</strong>
        <select multiple name="category_ids[]" class="form-control selectpicker">
            @if(isset($portfolio->category_ids))
                @foreach(explode(',', $portfolio->category_ids) as $catId)
                    @foreach($categories as $key => $value)
                        <option value="{{ $key }}" @if($key == $catId) selected @endif>{{ $value }}</option>
                    @endforeach
                @endforeach
            @else
                @foreach($categories as $key => $value)
                    <option value="{{ $key }}">{{ $value }}</option>
                @endforeach
            @endif
        </select>
    </div>
</div>

@include('admin.meta._form')
<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Backgroud color:</strong>
        <div id="cp2" class="input-group colorpicker-component">
            <input type="text" name="bg_color" @if(isset($portfolio)) value="{{ $portfolio->bg_color }}" @else value="#00AABB" @endif class="form-control"/>
            <span class="input-group-addon"><i></i></span>
        </div>
    </div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Изображение (фоновое):</strong>
        @if(isset($portfolio) AND $portfolio->image)
            <img src="/files/images/portfolio/{{ $portfolio->image->link }}" class="preview">
        @endif
        {!! Form::file('image', null, ['class' => 'form-control']) !!}
        @if(isset($portfolio) AND $portfolio->image)
            <input name="image_alt" value="{{ $portfolio->image->alt }}" type="text" class="form-control"
                   placeholder="ALT">
        @else
            <input name="image_alt" type="text" class="form-control" placeholder="ALT">
        @endif
    </div>
</div>



