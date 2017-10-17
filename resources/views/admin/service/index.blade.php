@extends('layouts.app')

@permission('service-index')
@section('main-content')
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Услуги</h2>
            </div>
            <div class="pull-right">
                @permission('service-create')
                <a class="btn btn-success" href="{{ route('admin.service.create') }}"> Добавить</a>
                @endpermission
            </div>
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
            {{--<th>№</th>--}}
            <th>Название</th>
            <th>Цена</th>
            <th>Категория</th>
            <th>Создано</th>
            <th width="235px">Действие</th>
        </tr>
        </thead>
        @foreach ($services as $service)
            <tr>
                <td>{{ $service->{'name' . $langSuf} }}</td>
                <td>{{ $service->price }}</td>
                <td>{{ $service->{'parentName' . $langSuf} }}</td>
                <td>{{ $service->created_at }}</td>
                <td>
                    <a class="btn btn-info" href="/{{  $service->slug }}"
                       target="_blank">Показать</a>
                    <a class="btn btn-primary" href="{{ route('admin.service.edit',$service->id) }}">Изменить</a>
                    {{--todo fix delete--}}
                    {!! Form::open(['method' => 'DELETE','route' => ['admin.service.destroy', $service->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Удалить', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </table>


@endsection
@endpermission
@section('page-scripts')
    <script>
        $(document).ready(function () {
            $('#myTable').DataTable({
                "columnDefs": [
                    {"orderable": false, "targets": 4}
                ]
            });
        });

        {{--$('.glyphicon-chevron-up').each(function () {--}}
            {{--$(this).on('click', function () {--}}
                {{--var upButton = $(this);--}}
                {{--var serviceId = upButton.data('serviceid');--}}
                {{--$.ajax({--}}
                    {{--url: '{{ route('increment-count') }}',--}}
                    {{--method: 'POST',--}}
                    {{--data: {--}}
                        {{--id: serviceId--}}
                    {{--},--}}
                    {{--success: function () {--}}
                        {{--oldCountElement = $('#count_' + serviceId);--}}
                        {{--oldCount = parseInt(oldCountElement.html());--}}
                        {{--oldCount++;--}}
                        {{--oldCountElement.html(oldCount);--}}
                    {{--}--}}

                {{--});--}}

            {{--})--}}
        {{--})--}}
    </script>
@endsection