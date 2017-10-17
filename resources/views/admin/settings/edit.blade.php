@extends('layouts.app')

@permission('settings-edit')
@section('main-content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
            <h2>Редактировать настройки</h2>
            </div>

        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
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
    {!! Form::model($settings, ['method' => 'post', 'route' => ['settings.update', $settings]]) !!}
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>AMOCRM Script:</strong>
            {!! Form::textarea('amocrm_script', $settings->amocrm_script, array('class' => 'form-control')) !!}
        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Сохранить</button>
    </div>
    </div>
    {!! Form::close() !!}
@endsection
@endpermission