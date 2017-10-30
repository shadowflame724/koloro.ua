<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Имя Фамилия:</strong>
        {!! Form::text('name', null, array('class' => 'form-control')) !!}
    </div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Должность [RU]:</strong>
        {!! Form::text('position_ru', null, array('class' => 'form-control')) !!}
    </div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Должность [UA]:</strong>
        {!! Form::text('position_ua', null, array('class' => 'form-control')) !!}
    </div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Email:</strong>
        {!! Form::text('email', null, array('class' => 'form-control')) !!}
    </div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Телефон:</strong>
        {!! Form::text('phone', null, array('class' => 'form-control')) !!}
    </div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Доп. телефон:</strong>
        {!! Form::text('add_phone', null, array('class' => 'form-control')) !!}
    </div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Изображение:</strong>
        {!! Form::file('image', null, ['class' => 'form-control']) !!}
    </div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Порядок:</strong>
        {!! Form::number('order_by', null, array('class' => 'form-control')) !!}
    </div>
</div>