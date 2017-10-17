@extends('layouts.app')

@if($user->id == Auth::user()->id OR Auth::user()->can('user-edit'))

@section('main-content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Изменить пользователя</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('admin.users.index') }}"> Назад</a>
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
    {!! Form::model($user, ['method' => 'PATCH','route' => ['admin.users.update', $user->id],'files' => true]) !!}
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Имя:</strong>
                {!! Form::text('name', null, array('class' => 'form-control')) !!}
            </div>
        </div>
        {{--<div class="col-xs-12 col-sm-12 col-md-12">--}}
        {{--<div class="form-group">--}}
        {{--<strong>Фамилия:</strong>--}}
        {{--{!! Form::text('surname', null, array('class' => 'form-control')) !!}--}}
        {{--</div>--}}
        {{--</div>--}}
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email:</strong>
                {!! Form::text('email', null, array('class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Пароль:</strong>
                {!! Form::password('password', array('class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Подтвердить пароль:</strong>
                {!! Form::password('confirm-password', array('class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Должность:</strong>
                {!! Form::text('post', null, array('class' => 'form-control')) !!}
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
                <strong>GooglePlus:</strong>
                {!! Form::url('google', null, array('placeholder' => 'URL','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>О себе:</strong>
                {!! Form::textarea('about', null, array('class' => 'form-control', 'style'=>'height:100px')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Изображение:</strong>
                {!! Form::file('image', null, ['class' => 'form-control']) !!}
            </div>
        </div>
        @if(Auth::user()->can('user-edit'))
            <div class="col-xs-12 col-sm-12 col-md-4">
                <div class="form-group">
                    <strong>Роль:</strong>
                    {!! Form::select('roles[]', $roles,$userRole, array('class' => 'form-control','multiple')) !!}
                </div>
            </div>
        @endif
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Сохранить</button>
        </div>
    </div>
    {!! Form::close() !!}
@endsection
@endif