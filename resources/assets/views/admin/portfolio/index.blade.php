@extends('layouts.app')

@section('page-style')
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
@stop
@permission('portfolio-index')
@section('main-content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Портфолио</h2>
            </div>
            <div class="pull-right">
                @permission('portfolio-create')
                <a class="btn btn-success" href="{{ route('admin.portfolio.create') }}"> Добавить</a>
                @endpermission
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-bordered" id="portfolio-table">
        <thead>
        <tr>
            <th>Name</th>
            <th>Category name</th>
            <th>Actions</th>
        </tr>
        </thead>
    </table>
@endsection
@endpermission
@section('page-scripts')
    <!-- DataTables -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>


    <script>
        $(function () {
            $('#portfolio-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: '{!! route('portfolio-table') !!}',
                    method: 'POST'
                },
                columns: [
                    {data: 'title_ru', name: 'title_ru'},
                    {data: 'categories', name: 'categories', searchable: false},
                    {data: 'actions', name: 'actions', searchable: false, orderable: false}
                ],
                order:
                    [[1, "asc"]],
                lengthMenu:
                    [25, 50, 100],
                searchDelay:
                    500
            })
            ;
        });
    </script>
@stop