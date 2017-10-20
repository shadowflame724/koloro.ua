@extends('layouts.app')

@section('main-content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Менеджеры</h2>
            </div>
            @permission('user-create')
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('admin.managers.create') }}"> Добавить</a>
            </div>
            @endpermission
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
            <th>Имя</th>
            <th>Email</th>
            <th>Должность</th>
            <th width="60px">Фото</th>
            <th width="190px">Действие</th>
        </tr>
        @foreach ($managers as $i => $manager)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $manager->name }}</td>
                <td>{{ $manager->email }}</td>
                <td>{{ $manager->position }}</td>
                @if (!empty($manager->image->link))
                    <td>{{ Html::image('files/images/managers/' . $manager->image->link, null, array('style'=>'height:10%')) }}</td>
                @elseif(empty($manager->image->link))
                    <td>-</td>
                @endif

                <td>
                    {{--<a class="btn btn-info" href="{{ route('admin.users.show',$user->id) }}">Показать</a>--}}
                    @if(Auth::user()->can('user-edit'))
                        <a class="btn btn-primary" href="{{ route('admin.managers.edit', $manager->id) }}">Изменить</a>
                        {!! Form::open(['method' => 'DELETE','route' => ['admin.managers.destroy', $manager],'style'=>'display:inline']) !!}
                        {!! Form::submit('Удалить', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                    @endif
                </td>
            </tr>
        @endforeach
    </table>
@endsection
