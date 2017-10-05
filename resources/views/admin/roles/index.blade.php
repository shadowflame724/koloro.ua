@extends('layouts.app')

@permission('role-index')
@section('main-content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Управления ролями</h2>
            </div>
            <div class="pull-right">
                @permission('role-create')
                <a class="btn btn-success" href="{{ route('admin.roles.create') }}"> Добавить</a>
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
            <th>№</th>
            <th>Название</th>
            <th>Описание</th>
            <th width="280px">Действие</th>
        </tr>
        @foreach ($roles as $role)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $role->display_name }}</td>
                <td>{{ $role->description }}</td>
                <td>
                    <a class="btn btn-info" href="{{ route('admin.roles.show',$role->id) }}">Показать</a>
                    @permission('role-edit')
                    <a class="btn btn-primary" href="{{ route('admin.roles.edit',$role->id) }}">Изменить</a>
                    @endpermission
                    @permission('role-delete')
                    {!! Form::open(['method' => 'DELETE','route' => ['admin.roles.destroy', $role->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Удалить', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                    @endpermission
                </td>
            </tr>
        @endforeach
    </table>
    {!! $roles->render() !!}
@endsection
@endpermission