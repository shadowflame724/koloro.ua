@extends('layouts.app')

@section('page-style')

@stop
@permission('blog-index')
@section('main-content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Статьи</h2>
            </div>
            <div class="pull-right">
                @permission('blog-create')
                <a class="btn btn-success" href="{{ route('admin.blog.create') }}"> Добавить</a>
                @endpermission
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-bordered" id="blog-table">
        <thead>
        <tr>
            <th>Name</th>
            <th>Category name</th>
            <th>Created At</th>
            <th>Published At</th>
            <th>Actions</th>
        </tr>
        </thead>
    </table>
@endsection
@endpermission
@section('page-scripts')
    <!-- DataTables -->


    <script>
        $(function () {
            $('#blog-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: '{!! route('blog-table') !!}',
                    method: 'POST'
                },
                columns: [
                    {data: 'name_ru', name: 'name_ru'},
                    {data: 'parentName', name: 'parentName', searchable: false},
                    {data: 'published_at', name: 'published_at', searchable: false},
                    {data: 'created_at', name: 'created_at', searchable: false},
                    {data: 'actions', name: 'actions', searchable: false, orderable: false}
                ],
                order:
                    [[3, "DESC"]],
                lengthMenu:
                    [25, 50, 100],
                searchDelay:
                    500
            })
            ;
        });
    </script>
@stop