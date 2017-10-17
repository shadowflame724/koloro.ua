@extends('layouts.app')

@section('page-style')

@stop
@permission('portfoliocategory-index')
@section('main-content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Категории для портфолио</h2>
            </div>
            <div class="pull-right">
                @permission('portfoliocategory-create')
                <a class="btn btn-success" href="{{ route('admin.portfoliocategory.create') }}"> Добавить</a>
                @endpermission
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-bordered" id="portfoliocategory-table">
        <thead>
        <tr>
            <th>Name</th>
            <th>Actions</th>
        </tr>
        </thead>
    </table>
@endsection
@endpermission
@section('page-scripts')
    <!-- DataTables -->
    <script>
        console.log($('#portfoliocategory-table'));
        $(function () {
            $('#portfoliocategory-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: '{!! route('portfoliocategory-table') !!}',
                    method: 'POST'
                },
                columns: [
                    {data: 'name_ru', name: 'name_ru'},
                    {data: 'actions', name: 'actions', searchable: false, orderable: false}
                ],
                order:
                    [[1, "asc"]],
                lengthMenu:
                    [10, 25, 50],
                searchDelay:
                    500
            })
            ;
        });
    </script>
@stop