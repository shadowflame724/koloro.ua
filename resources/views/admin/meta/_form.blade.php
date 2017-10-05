<div class="col-xs-12 col-sm-12 col-md-12">
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#meta_ru_tab">RU</a></li>
        <li><a data-toggle="tab" href="#meta_ua_tab">UA</a></li>
    </ul>
    <div class="tab-content">
        <div id="meta_ru_tab" class="tab-pane fade in active">
            <div class="form-group">
                <strong>Seo Title[RU]:</strong>

                {!! Form::text('meta[title_ru]',null, ['class' => 'form-control']) !!}

            </div>
            <div class="form-group">
                <strong>Seo Description[RU]:</strong>
                {!! Form::text('meta[description_ru]',null, ['class' => 'form-control']) !!}

            </div>
            <div class="form-group">
                <strong>Seo Keywords[RU]:</strong>
                {!! Form::text('meta[keywords_ru]', null, ['class' => 'form-control']) !!}
            </div>
        </div>

        <div id="meta_ua_tab" class="tab-pane fade">
            <div class="form-group">
                <strong>Seo Title[UA]:</strong>

                {!! Form::text('meta[title_ua]',null, ['class' => 'form-control']) !!}

            </div>
            <div class="form-group">
                <strong>Seo Description[UA]:</strong>
                {!! Form::text('meta[description_ua]',null, ['class' => 'form-control']) !!}

            </div>
            <div class="form-group">
                <strong>Seo Keywords[UA]:</strong>
                {!! Form::text('meta[keywords_ua]', null, ['class' => 'form-control']) !!}
            </div>
        </div>
    </div>
</div>