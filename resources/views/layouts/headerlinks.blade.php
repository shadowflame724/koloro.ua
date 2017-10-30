<div class="menu_triger visible_on_mobile">
    <div class="first"></div>
    <div class="second"></div>
    <div class="third"></div>
</div>

<nav class="main_menu">
    <ul>
        <li><a href="{{ route('client.index') }}" {{setActive('/')}}>{{ trans('messages.main') }}</a></li>
        <li><a href="{{ route('client.portfolio') }}" {{setActive('portfolio')}}>{{ trans('messages.portfolio') }}</a>
        </li>
        <li><a href="{{ route('client.services') }}"
               {{setActive('services')}} @if(isset($serviceActive)) class="active" @endif>{{ trans('messages.services') }}</a>
        </li>
        <li><a href="{{ route('client.blog.index') }}" {{setActive('blog')}}>{{ trans('messages.blog') }}</a></li>
        <li><a href="{{ route('client.company') }}" {{setActive('about')}}>{{ trans('messages.company') }}</a></li>
        <li><a href="{{ route('client.contacts') }}" {{setActive('contacts')}}>{{ trans('messages.contacts') }}</a></li>
    </ul>
    <a href="/" target="_blank" class="btn_calculate order-form-btn">{{ trans('messages.brief') }}</a>
    @if(Request::is('blog' . '*') OR Request::is('search' . '*'))

    @else
        <div class="languge">
            <ul>
                @php($locale = LaravelLocalization::getCurrentLocale() )
                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)

                    <li>
                        <a rel="alternate" @if($locale == $localeCode) class="active"
                           @endif hreflang="{{ $localeCode }}"
                           href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                            {{ $properties['native'] }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>

    @endif

</nav>