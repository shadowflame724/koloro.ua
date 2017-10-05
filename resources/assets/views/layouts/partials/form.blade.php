@if ($errors->any())

    @foreach ($errors->all() as $error)
        <script>
            console.log('{{ $error }}');  <!-- ERROR TEXT -->
        </script>
    @endforeach

@endif
{!! Form::open(['route' => 'form_store', 'class' => 'koloro-form order-form','files' => true]) !!}
<div class="form-wrapper vertical-align">
    <div class="gl-container">
        <div class="close-btn">
            <i class="icon icon-close-btn"></i>
            <i class="icon icon-close-btn-hover"></i>
        </div>
        <p class="form-header">Расскажите нам о своем проекте</p>
        <p class="form-header-small">Получите консультацию уже сейчас!</p>
        <div class="full-container">
            <div class="left-cont">
                <input type="text" name="user-name" required="required" class="user-name"
                       placeholder="Ваше имя" tabindex="1">
                <input type="email" name="user-email" required="required" class="user-email"
                       placeholder="Ваш email" tabindex="2">
                <input type="tel" name="user-tel" required="required" class="user-tel"
                       placeholder="Ваш телефон" tabindex="3">
                <input type="submit" value="Отправить" class="submit-btn gl-yellow-btn" tabindex="6">
            </div>
            <div class="right-cont">
                <div class="text-field-cont">
                    <textarea name="user-text" placeholder="Ваше сообщение" class="text-field"></textarea>
                    <input type="file" name="user-file" id="file_write_us" multiple
                           data-multiple-caption="{count} files selected"
                           class="inputfile inputfile-1" style="display: none">
                    <label for="file_write_us"><span>Добавить файл</span><i class="icon icon-clip-black"></i></label>
                </div>
                <a href="/brief" class="gl-transparent-btn detailed-brief-btn">заполнить детальный бриф</a>
            </div>
        </div>
    </div>
</div>
{!! Form::close() !!}
