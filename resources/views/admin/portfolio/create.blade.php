@extends('layouts.app')
@section('page-style')
    {{ Html::style('//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/css/bootstrap-select.min.css') }}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.5.1/css/bootstrap-colorpicker.min.css" rel="stylesheet">

@stop
@permission('portfolio-create')
@section('main-content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Новая работа</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('admin.portfolio.index') }}"> Назад</a>
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
    {!! Form::open(array('route' => 'admin.portfolio.store','method'=>'POST','files' => true)) !!}
    <div class="row">
        @include('admin.portfolio._form')

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Сохранить</button>
        </div>
    </div>
    {!! Form::close() !!}
@endsection
@endpermission
@section('page-scripts')
    {{ Html::script('js/bootstrap.min.js') }}
    {{ Html::script('//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js') }}
    {{--{{ Html::script('ckeditor/ckeditor.js') }}--}}

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.5.1/js/bootstrap-colorpicker.min.js"></script>
    <script>
        $(function() {
            $('#cp2').colorpicker();
        });
    </script>
@endsection