{!! Form::open(['route' => 'subscription_store', 'class' => 'koloro-form subscribe-form']) !!}
<div class="form-wrapper vertical-align">
    <div class="gl-container">
        <div class="close-btn">
            <i class="icon icon-close-btn"></i>
            <i class="icon icon-close-btn-hover"></i>
        </div>

        <p class="form-header">понравились наши статьи?</p>
        <p class="form-header-small">наши новости понравятся тоже !</p>

        {!! Form::text('name', null, ['required','placeholder' => 'Ваше имя', 'class' => 'user-name', 'tabindex' => '1']) !!}
        {!! Form::email('email', null, ['required','placeholder' => 'Ваш email','class' => 'user-email', 'tabindex' => '2']) !!}

        <div class="checkboxes-container">
            <div class="checkbox-item">
                <input id="checkbox-design" type="checkbox" name="category" value="design" tabindex="3">
                <label for="checkbox-design"><span>дизайн</span></label>
            </div>
            <div class="checkbox-item">
                <input id="checkbox-marketing" type="checkbox" name="category" value="marketing" tabindex="4"
                       checked="checked">
                <label for="checkbox-marketing"><span>маркетинг</span></label>
            </div>
            <div class="checkbox-item">
                <input id="checkbox-sites" type="checkbox" name="category" value="sites" tabindex="5">
                <label for="checkbox-sites"><span>сайты</span></label>
            </div>
        </div>

        <input type="submit" value="Подписаться" class="submit-btn gl-yellow-btn" tabindex="6">
    </div>
</div>
{!! Form::close() !!}