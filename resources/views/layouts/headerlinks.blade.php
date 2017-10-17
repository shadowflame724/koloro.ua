<div class="menu_triger visible_on_mobile">
    <div class="first"></div>
    <div class="second"></div>
    <div class="third"></div>
</div>

<nav class="main_menu">
    <ul>
        <li><a href="/" {{setActive('/')}}>{{ trans('messages.main') }}</a></li>
        <li><a href="/portfolio" {{setActive('portfolio')}}>{{ trans('messages.portfolio') }}</a></li>
        <li><a href="/services" {{setActive('services')}}>{{ trans('messages.services') }}</a></li>
        <li><a href="/blog" {{setActive('blog')}}>{{ trans('messages.blog') }}</a></li>
        <li><a href="/about" {{setActive('about')}}>{{ trans('messages.company') }}</a></li>
        <li><a href="/contacts" {{setActive('contacts')}}>{{ trans('messages.contacts') }}</a></li>

    </ul>
    <a href="/" target="_blank" class="btn_calculate order-form-btn">{{ trans('messages.brief') }}</a>
    {{-- hide languages tabs on koloro.RU, russian lang just only! --}}
    {{--<div class="languge">--}}
        {{--<ul>--}}
            {{--<li>--}}
                {{--<a href="{{ '/setlocale/ua' }}" {{localeActive('ua')}}>ua</a>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<a href="{{ '/setlocale/ru' }}" {{localeActive('ru')}}>ru</a>--}}
            {{--</li>--}}
        {{--</ul>--}}
    {{--</div>--}}

</nav>