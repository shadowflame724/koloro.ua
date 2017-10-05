@extends('layouts.app')

@permission('callback')
@section('main-content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Перезвоните мне</h2>
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
            {{--<th>№</th>--}}
            {{--<th>Имя</th>--}}
            <th>Телефон</th>
            {{--<th>Сообщение</th>--}}
            {{--<th>Файлы</th>--}}
            <th width="80px">Действие</th>
        </tr>
        @foreach ($callbacks as $callback)
            <tr>
                {{--<td>{{ ++$i }}</td>--}}
                <td>{{ $callback->phone }}</td>
                <td>
                    {!! Form::open(['method' => 'DELETE','route' => ['admin.callback.destroy', $callback->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Удалить', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </table>
    {!! $callbacks->render() !!}
@endsection
@endpermission