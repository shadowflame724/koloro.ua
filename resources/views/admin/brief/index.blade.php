@extends('layouts.app')

@permission('form')
@section('main-content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Бриф</h2>
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
            <th>Услуга</th>
            <th>Маркет стратегия</th>
            <th>Бюджет проекта</th>
            <th>Срок запуска</th>
            <th>Пожелания</th>
            <th>Файлы</th>
            <th>Имя</th>
            <th>Сфера деятельности</th>
            <th>Сайт</th>
            <th>Город</th>
            <th>Телефон</th>
            <th>e-mail</th>
            <th>Откуда узнали о нас</th>
            <th width="80px">Действие</th>
        </tr>
        @foreach ($briefs as $brief)
            <tr>
                {{--<td>{{ ++$i }}</td>--}}
                <td>
                    {{ $brief->service_name }}
                </td>
                <td>
                    {{ $brief->market_strategy }}
                </td>
                <td>
                    @if (isset($brief->money))
                        <?php
                        $value = json_decode($brief->money, true);
                        if (isset($value['min']) && isset($value['max'])) {
                            echo 'от ' . $value['min'] . ' до ' . $value['max'] . ' ' . $brief->currency;
                        } elseif (isset($value['concretely'])) {
                            echo $value['concretely'] . ' ' . $brief->currency;
                        }
                        ?>
                    @endif
                </td>
                <td>
                    @if ($brief->time === null)
                        {{ 'Не торопимся' }}
                    @elseif ($brief->time == $brief->created_at)
                        {{ 'Срочно' }}
                    @else
                        {{ $brief->time = date('Y-m-d') }}
                    @endif
                </td>
                <td>{{ $brief->wishes }}</td>
                <td>
                    {{--todo controller--}}
                    <?php $files = $brief->files; ?>
                    @foreach($files as $file)
                        <a href="/files/form/{{$brief->id}}/{{$file->link}}" target="_blank">{{$file->link}}</a><br>
                    @endforeach
                </td>
                <td>{{ $brief->name }}</td>
                <td>{{ $brief->activity }}</td>
                <td>{{ $brief->site }}</td>
                <td>{{ $brief->city }}</td>
                <td>{{ $brief->phone }}</td>
                <td>{{ $brief->email }}</td>
                <td>
                    @if (isset($brief->about))
                        {{ $brief->about }}
                    @elseif (isset($brief->briefAbouts))
                        @foreach($brief->briefAbouts as $about)
                            {{ trans('messages.'.$about->name) }}<br>
                        @endforeach
                    @endif
                </td>
                <td>
                    {!! Form::open(['method' => 'DELETE','route' => ['admin.brief.destroy', $brief->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Удалить', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </table>
    {!! $briefs->render() !!}
@endsection
@endpermission