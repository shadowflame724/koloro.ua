@if (isset($errors) AND $errors->any())

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
        <p class="form-header">@lang('messages.form_header')</p>
        <p class="form-header-small">@lang('messages.form_header_small')</p>
        <div class="full-container">
            <div class="left-cont">
                <input type="text" name="name" required="required" class="user-name"
                       placeholder="@lang('messages.form_user_name')" tabindex="1">
                <input type="email" name="email" required="required" class="user-email"
                       placeholder="Ваш email" tabindex="2">
                <input type="tel" name="phone" required="required" class="user-tel"
                       placeholder="Ваш телефон" tabindex="3">
                <input type="submit" value="@lang('messages.form_send')" class="submit-btn gl-yellow-btn" tabindex="6">
            </div>
            <div class="right-cont">
                <div class="text-field-cont">
                    <textarea name="text" placeholder="@lang('messages.form-user-message')" class="text-field"></textarea>
                    <input type="file" name="files" id="file_write_us" multiple
                           data-multiple-caption="{count} files selected"
                           class="inputfile inputfile-1" style="display: none">
                    <label for="file_write_us"><span>@lang('messages.form_add-file')</span><i class="icon icon-clip-black"></i></label>
                </div>
                <a href="{{ route('brief') }}" class="gl-transparent-btn detailed-brief-btn">@lang('messages.to_brief')</a>
            </div>
        </div>
    </div>
</div>
{!! Form::close() !!}
