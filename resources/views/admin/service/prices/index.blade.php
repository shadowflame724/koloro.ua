@extends('layouts.app')

{{--@permission('service-prices-index')--}}
@section('main-content')
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Услуги. цены</h2>
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table id="myTable" class="table table-bordered">
        <thead>
        <tr>
            <th>Название</th>
            <th>Цена</th>
        </tr>
        </thead>
        @foreach ($services as $service)
            <tr>
                <td>{{ $service->{'name' . $langSuf} }}</td>
                <td>
                    {!! Form::model($service, ['method' => 'PATCH','files' => true,'route' => ['admin.service-prices.set-price', $service->id]]) !!}
                    <div class="input-group">
                        <input type="number" value="{{ $service->price }}" class="form-control"
                               aria-describedby="basic-addon1">
                        <span class="input-group-addon">$</span>
                    </div>
                    <button type="submit" class="btn btn-primary">Сохранить</button>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </table>


@endsection
{{--@endpermission--}}
