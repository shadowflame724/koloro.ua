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
                {!! Form::textarea('description_ru', null, array('class' => 'form-control','style'=>'height:100px')) !!}
            </div>
            <div class="form-group">
                <strong>Контент[RU]:</strong>
                {!! Form::textarea('content_ru', null, array('class' => 'form-control ckeditor','style'=>'height:200px')) !!}
            </div>
        </div>
        <div id="ua_tab" class="tab-pane fade">
            <div class="form-group">
                <strong>Название[UA]:</strong>
                {!! Form::text('name_ua', null, array('class' => 'form-control')) !!}
            </div>
            <div class="form-group">
                <strong>Описание[UA]:</strong>
                {!! Form::textarea('description_ua', null, array('class' => 'form-control','style'=>'height:100px')) !!}
            </div>
            <div class="form-group">
                <strong>Контент[UA]:</strong>
                {!! Form::textarea('content_ua', null, array('class' => 'form-control ckeditor','style'=>'height:200px')) !!}
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
        <strong>Автор:</strong>
        {{ Form::select('user_id', $users, null, ['class' => 'form-control']) }}
    </div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Категория:</strong>
        {{ Form::select('category_id', $categories, null, ['class' => 'form-control']) }}
    </div>
</div>

@include('admin.meta._form')

<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Изображение:</strong>
        @if(isset($blog) AND $blog->file)
            <img src="/files/images/blog/{{ $blog->file->link }}" class="preview">

        @endif
        {!! Form::file('image', null, ['class' => 'form-control']) !!}
    </div>
</div>
