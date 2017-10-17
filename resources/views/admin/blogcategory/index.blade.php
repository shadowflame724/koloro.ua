@extends('layouts.app')

@permission('blogcategory-index')
@section('main-content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Категории блога</h2>
            </div>
            <div class="pull-right">
                @permission('blogcategory-create')
                <a class="btn btn-success" href="{{ route('admin.blogcategory.create') }}"> Добавить</a>
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
            {{--<th>№</th>--}}
            <th>Название</th>
            {{--<th>Описание</th>--}}
            <th>Создано</th>
            <th width="280px">Действие</th>
        </tr>
        @foreach ($categories as $category)
            <tr>
                {{--<td>{{ ++$i }}</td>--}}
                <td>{{ $category->name_ru }}</td>
                {{--<td>{{ $category->description }}</td>--}}
                <td>{{ $category->created_at }}</td>
                <td>
                    {{--                    <a class="btn btn-info" href="{{ route('admin.blogcategory.show',$category->id) }}">Показать</a>--}}
                    <a class="btn btn-primary" href="{{ route('admin.blogcategory.edit',$category->id) }}">Изменить</a>

                    {!! Form::open(['method' => 'DELETE','route' => ['admin.blogcategory.destroy', $category->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Удалить', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </table>
    {!! $categories->render() !!}
@endsection
@endpermission