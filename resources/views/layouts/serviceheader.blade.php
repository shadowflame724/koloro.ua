<header class="color_menu">
    <!-- begin container -->
    <div class="container">
        <a href="{{ route('client.index') }}" class="logo_link"><img src="/files/images/koloro-logo.svg" class="logo"
                                                                     width="166" height="51" alt="koloro"></a>

        <div class="menu_triger visible_on_mobile">
            <div class="first"></div>
            <div class="second"></div>
            <div class="third"></div>
        </div>

        <nav class="main_menu">
            <ul>
                <li><a href="{{ route('client.index') }}" {{setActive('/')}}>{{ trans('messages.main') }}</a></li>
                <li>
                    <a href="{{ route('client.portfolio') }}" {{setActive('portfolio')}}>{{ trans('messages.portfolio') }}</a>
                </li>
                <li><a href="{{ route('client.services') }}"
                       {{setActive('services')}} @if(isset($serviceActive)) class="active" @endif>{{ trans('messages.services') }}</a>
                </li>
                <li><a href="{{ route('client.blog.index') }}" {{setActive('blog')}}>{{ trans('messages.blog') }}</a>
                </li>
                <li><a href="{{ route('client.company') }}" {{setActive('about')}}>{{ trans('messages.company') }}</a>
                </li>
                <li>
                    <a href="{{ route('client.contacts') }}" {{setActive('contacts')}}>{{ trans('messages.contacts') }}</a>
                </li>
            </ul>
            <a href="/" target="_blank" class="btn_calculate order-form-btn">{{ trans('messages.brief') }}</a>
            <div class="languge">
                <ul>
                    @php($locale = LaravelLocalization::getCurrentLocale() )
                    <li>
                        <a rel="alternate" @if($locale == 'ru') class="active" @endif hreflang="ru"
                           href="{{ LaravelLocalization::getLocalizedURL('ru', null, [], true) }}">
                            RU
                        </a>
                    </li>
                    @if(strlen($article->{'name_ua'}) > 1)
                        <li>
                            <a rel="alternate" @if($locale == 'ua') class="active" @endif hreflang="ua"
                               href="{{ LaravelLocalization::getLocalizedURL('ua', null, [], true) }}">
                                UA
                            </a>
                        </li>
                    @endif
                </ul>
            </div>

        </nav>
    </div>
    <!-- end container -->

</header>