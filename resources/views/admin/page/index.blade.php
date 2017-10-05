@extends('layouts.app')

@section('page-style')

@stop
@permission('page-index')
@section('main-content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Страницы</h2>
            </div>
            {{--<div class="pull-right">--}}
                {{--@permission('page-create')--}}
                {{--<a class="btn btn-success" href="{{ route('admin.page.create') }}"> Добавить</a>--}}
                {{--@endpermission--}}
            {{--</div>--}}
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
            <th>№</th>
            <th>Название</th>

            <th width="235px">Действие</th>
        </tr>
        </thead>
        @foreach ($pages as $page)
            <tr>
                <td>{{ $page->id }}</td>
                <td>{{ $page->{'name' . $langSuf} }}</td>
                <td>
                    <a class="btn btn-info" href="/{{ $page->slug }}"
                       target="_blank">Показать</a>
                    <a class="btn btn-primary" href="{{ route('admin.page.edit',$page->id) }}">Изменить</a>
                    {{--todo fix delete--}}
                    {{--{!! Form::open(['method' => 'DELETE','route' => ['admin.page.destroy', $page->id],'style'=>'display:inline']) !!}--}}
                    {{--{!! Form::submit('Удалить', ['class' => 'btn btn-danger']) !!}--}}
                    {{--{!! Form::close() !!}--}}
                </td>
            </tr>
        @endforeach
    </table>
@endsection
@endpermission
@section('page-scripts')
    {{--<!-- DataTables -->--}}


    {{--<script>--}}
        {{--$(function () {--}}
            {{--$('#blog-table').DataTable({--}}
                {{--processing: true,--}}
                {{--serverSide: true,--}}
                {{--ajax: {--}}
                    {{--url: '{!! route('blog-table') !!}',--}}
                    {{--method: 'POST'--}}
                {{--},--}}
                {{--columns: [--}}
                    {{--{data: 'name_ru', name: 'name_ru'},--}}
                    {{--{data: 'parentName', name: 'parentName', searchable: false},--}}
                    {{--{data: 'published_at', name: 'published_at', searchable: false},--}}
                    {{--{data: 'created_at', name: 'created_at', searchable: false},--}}
                    {{--{data: 'actions', name: 'actions', searchable: false, orderable: false}--}}
                {{--],--}}
                {{--order:--}}
                    {{--[[3, "asc"]],--}}
                {{--lengthMenu:--}}
                    {{--[25, 50, 100],--}}
                {{--searchDelay:--}}
                    {{--500--}}
            {{--})--}}
            {{--;--}}
        {{--});--}}
    {{--</script>--}}
@stop