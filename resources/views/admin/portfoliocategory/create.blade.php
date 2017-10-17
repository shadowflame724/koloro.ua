@extends('layouts.app')

{{--@permission('porfoliocategory-create')--}}
@section('main-content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Новая категория портфолио</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('admin.portfoliocategory.index') }}"> Назад</a>
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
    {!! Form::open(array('route' => 'admin.portfoliocategory.store','method'=>'POST','files' => true)) !!}
    <div class="row">
        @include('admin.portfoliocategory._form')

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Сохранить</button>
        </div>
    </div>
    {!! Form::close() !!}
@endsection
{{--@endpermission--}}