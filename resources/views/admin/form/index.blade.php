@extends('layouts.app')

@permission('form')
@section('main-content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Форма</h2>
                <a class="btn btn-primary" href="{{ route('form-export') }}">Export BD to .xls</a>
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
            <th>Имя</th>
            <th>email</th>
            <th>Телефон</th>
            <th>Контакт</th>
            <th>Сообщение</th>
            <th>Файлы</th>
            <th width="80px">Действие</th>
        </tr>
        @foreach ($forms as $form)
            <tr>
                {{--<td>{{ ++$i }}</td>--}}
                <td>{{ $form->name }}</td>
                <td>{{ $form->email }}</td>
                <td>{{ $form->phone }}</td>
                <td>{{ $form->contact }}</td>
                <td>{{ $form->text }}</td>
                <td>
                    {{--todo controller--}}
                    <?php $files = $form->files; ?>
                    @foreach($files as $file)
                    <a href="/files/form/{{$form->id}}/{{$file->link}}" target="_blank">{{$file->link}}</a><br>
                    @endforeach
                </td>
                <td>
                    {!! Form::open(['method' => 'DELETE','route' => ['admin.form.destroy', $form->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Удалить', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </table>
    {!! $forms->render() !!}
@endsection
@endpermission