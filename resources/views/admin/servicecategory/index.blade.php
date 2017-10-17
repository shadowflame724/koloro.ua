@extends('layouts.app')

@permission('servicecategory-index')
@section('main-content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Категории услуг</h2>
            </div>
            <div class="pull-right">
                @permission('servicecategory-create')
                <a class="btn btn-success" href="{{ route('admin.servicecategory.create') }}"> Добавить</a>
                @endpermission
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-bordered">
        <tr>
            <th>Название</th>
            <th>Порядок</th>
            <th>Создано</th>
            <th width="185px">Действие</th>
        </tr>
        @foreach ($categories as $category)
            <tr>
                <td>{{ $category->{'name' . $langSuf} }}</td>
                <td>{{ $category->order }}</td>
                <td>{{ $category->created_at }}</td>
                <td>
                    <a class="btn btn-primary" href="{{ route('admin.servicecategory.edit',$category->id) }}">Изменить</a>

                    {!! Form::open(['method' => 'DELETE','route' => ['admin.servicecategory.destroy', $category->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Удалить', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </table>
@endsection
@endpermission