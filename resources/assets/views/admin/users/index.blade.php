@extends('layouts.app')

@permission('user-index')
@section('main-content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Пользователи</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('admin.users.create') }}"> Добавить</a>
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
            <th>Имя</th>
            <th>Email</th>
            <th>Должность</th>
            <th width="60px">Фото</th>
            <th width="100px">Роль</th>
            <th width="190px">Действие</th>
        </tr>
        @foreach ($users as $user)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                @if (!empty($user->post))
                    <td>{{ $user->post }}</td>
                @elseif(empty($user->post))
                    <td>-</td>
                @endif
                @if (!empty($user->file->link))
                    {{--todo remove height 10%--}}
                    <td>{{ Html::image('files/images/users/' . $user->file->link, null, array('style'=>'height:10%')) }}</td>
                @elseif(empty($user->file->link))
                    <td>-</td>
                @endif
                <td>
                    @if(!empty($user->roles))
                        @foreach($user->roles as $v)
                            <label class="label label-success">{{ $v->display_name }}</label>
                        @endforeach
                    @endif
                </td>
                <td>
                    {{--<a class="btn btn-info" href="{{ route('admin.users.show',$user->id) }}">Показать</a>--}}
                    <a class="btn btn-primary" href="{{ route('admin.users.edit',$user->id) }}">Изменить</a>
                    {!! Form::open(['method' => 'DELETE','route' => ['admin.users.destroy', $user->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Удалить', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </table>
    {!! $users->render() !!}
@endsection
@endpermission