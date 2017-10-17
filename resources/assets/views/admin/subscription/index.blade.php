@extends('layouts.app')

@permission('subscription')
@section('main-content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Подписка</h2>
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
            <th width="80px">Действие</th>
        </tr>
        @foreach ($subscriptions as $subscription)
            <tr>
                {{--<td>{{ ++$i }}</td>--}}
                <td>{{ $subscription->name }}</td>
                <td>{{ $subscription->email }}</td>
                <td>
                    {!! Form::open(['method' => 'DELETE','route' => ['admin.subscription.destroy', $subscription->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Удалить', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </table>
    {!! $subscriptions->render() !!}
@endsection
@endpermission