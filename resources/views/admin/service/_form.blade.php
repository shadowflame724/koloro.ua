<div class="col-xs-12 col-sm-12 col-md-12">
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#name_ru_tab">RU</a></li>
        <li><a data-toggle="tab" href="#name_ua_tab">UA</a></li>
    </ul>


    <div class="tab-content">
        <div id="name_ru_tab" class="tab-pane fade in active">

            <div class="form-group">
                
                <strong>Название[RU]:</strong>
                {!! Form::text('name_ru', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                <strong>Название в Род. падеже[RU]:</strong>
                {!! Form::text('name_parent_case_ru', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                <strong>Описание[RU]:</strong>

                {!! Form::textarea('description_ru', null, ['class' => 'form-control','style'=>'height:200px']) !!}
            </div>

        </div>
        <div id="name_ua_tab" class="tab-pane fade">
            <div class="form-group">
                <strong>Название[UA]:</strong>
                {!! Form::text('name_ua', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                <strong>Название в Род. падеже[UA]:</strong>
                {!! Form::text('name_parent_case_ua', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                <strong>Описание[UA]:</strong>

                {!! Form::textarea('description_ua', null, ['class' => 'form-control','style'=>'height:200px']) !!}

            </div>

        </div>
    </div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Цена:</strong>
        {!! Form::number('price', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Адрес:</strong>
        {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Если не заполнен, будет сгенерирован автоматически']) !!}
    </div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="btn btn-box-tool" id="add_price_depends"><i class="fa fa-plus"></i></div>
    <div id="price_depends_data">
        @if(isset($service->price_depends_ru))
            @php
                $dependsRu = json_decode($service->price_depends_ru, true);
                $dependsUa = json_decode($service->price_depends_ua, true);
            @endphp
            @foreach($dependsRu as $i => $value)
                <div>
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#price_depends_{{ $i }}_ru_tab">RU</a></li>
                        <li><a data-toggle="tab" href="#price_depends_{{ $i }}_ua_tab">UA</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="price_depends_{{ $i }}_ru_tab" class="tab-pane fade in active">
                            <div class="form-group">
                                <strong>Цена зависит от[RU]:</strong>
                                {!! Form::text('price_depends_ru['.$i.']', $dependsRu[$i], ['class' => 'form-control']) !!}
                            </div>
                        </div>

                        <div id="price_depends_{{ $i }}_ua_tab" class="tab-pane fade">
                            <div class="form-group">
                                <strong>Цена зависит от[UA]:</strong>
                                {!! Form::text('price_depends_ua['.$i.']', $dependsUa[$i], ['class' => 'form-control']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="btn btn-box-tool"><i class="fa fa-minus remove-price-depends"></i></div>
                </div>
            @endforeach
        @else
            <div>
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#price_depends_{{ $i }}_ru_tab">RU</a></li>
                    <li><a data-toggle="tab" href="#price_depends_{{ $i }}_ua_tab">UA</a></li>
                </ul>
                <div class="tab-content">
                    <div id="price_depends_{{ $i }}_ru_tab" class="tab-pane fade in active">
                        <div class="form-group">
                            <strong>Цена зависит от[RU]:</strong>
                            {!! Form::text('price_depends_ru['.$i.']', null, ['class' => 'form-control']) !!}

                        </div>
                    </div>

                    <div id="price_depends_{{ $i }}_ua_tab" class="tab-pane fade">
                        <div class="form-group">
                            <strong>Цена зависит от[UA]:</strong>
                            {!! Form::text('price_depends_ua['.$i.']', null, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                </div>
                <div class="btn btn-box-tool"><i class="fa fa-minus remove-price-depends"></i></div>
            </div>
        @endif
    </div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#time_ru_tab">RU</a></li>
        <li><a data-toggle="tab" href="#time_ua_tab">UA</a></li>
    </ul>
    <div class="tab-content">
        <div id="time_ru_tab" class="tab-pane fade in active">
            <div class="form-group">
                <strong>Срок[RU]:</strong>
                {!! Form::text('time_ru', null, ['class' => 'form-control']) !!}
            </div>
        </div>
        <div id="time_ua_tab" class="tab-pane fade">
            <div class="form-group">
                <strong>Срок[UA]:</strong>
                {!! Form::text('time_ua', null, ['class' => 'form-control']) !!}
            </div>
        </div>

    </div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Категория:</strong>
        {{ Form::select('category_id', $categories, null, ['class' => 'form-control']) }}
    </div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Статьи:</strong>
        <select multiple name="blog_ids[]" class="form-control selectpicker" data-show-subtext="true"
                data-live-search="true">
            @if(isset($service->blog_ids))
                @foreach(explode(',', $service->blog_ids) as $blogId)
                    @foreach($blog as $key => $value)
                        <option value="{{ $key }}" @if($key == $blogId) selected @endif>{{ $value }}</option>
                    @endforeach
                @endforeach
            @else
                @foreach($blog as $key => $value)
                    <option value="{{ $key }}">{{ $value }}</option>
                @endforeach
            @endif
        </select>
    </div>
</div>

@include('admin.meta._form')

<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Изображение (фоновое):</strong>
        @if(isset($service) AND $service->image)
            <img src="/files/images/service/{{ $service->image->link }}" class="preview">
        @endif
        {!! Form::file('image', null, ['class' => 'form-control']) !!}
        @if(isset($service) AND $service->image)
            <input name="image_alt" value="{{ $service->image->alt }}" type="text" class="form-control"
                   placeholder="ALT">
        @else
            <input name="image_alt" type="text" class="form-control" placeholder="ALT">
        @endif
    </div>
</div>





