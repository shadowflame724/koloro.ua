<div class="col-xs-12 col-sm-12 col-md-12">
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#ru_tab">RU</a></li>
        <li><a data-toggle="tab" href="#ua_tab">UA</a></li>
    </ul>
    <div class="tab-content">
        <div id="ru_tab" class="tab-pane fade in active">
            <div class="form-group">
                <strong>Название[RU]:</strong>
                {!! Form::text('name_ru', null, array('class' => 'form-control')) !!}
            </div>
        </div>
        <div id="ua_tab" class="tab-pane fade">
            <div class="form-group">
                <strong>Название[UA]:</strong>
                {!! Form::text('name_ua', null, array('class' => 'form-control')) !!}
            </div>
        </div>
    </div>
</div>

@include('admin.meta._form')