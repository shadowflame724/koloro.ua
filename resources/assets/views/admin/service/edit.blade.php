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

        @include('admin.service._form_blocks')

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Сохранить</button>
        </div>

    </div>
    {!! Form::close() !!}
@endsection
@endpermission
@section('page-scripts')
    @include('admin.service._js')
@endsection