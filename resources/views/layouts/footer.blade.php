<footer>
    <!-- desktop-footer starts -->
    <div class="gl-container desktop-footer">
        <div class="footer-col">
            <div class="footer-img">
                <a href="/" target="_self">
                    <img src="/files/images/logo_footer.png" alt="KOLORO footer logo">
                </a>
            </div>
        </div>

        <div class="footer-col">
            <p class="col-name">{{ trans('messages.start_build') }}</p>
            <a href="/" class="footer-btn footer-calculate-btn order-form-btn">{{ trans('messages.brief') }}</a>
        </div>

        <div class="footer-col footer-contacts">
            <p class="col-name">{{ trans('messages.contacts') }}</p>

            <div class="contact-info">
                <p class="contact-telephone">{{ env('OUR_PHONE_NUMBER') }}</p>
                <p class="contact-email">{{ env('OUR_EMAIL') }}</p> {{-- todo trans ru+ua --}}
            </div>

            <div class="contact-info">
                <p class="contact-address">{!! trans('messages.adress') !!}</p>
            </div>

            <div class="contact-info">
                <p class="shedule-1">{!! trans('messages.worktime') !!}</p>
                <p class="shedule-2">{!! trans('messages.worktime_weekend') !!}</p>
            </div>
        </div>

        <div class="footer-col">
            <p class="col-name">{{ trans('messages.subscribe_get') }}</p>
            <a href="/" class="footer-btn footer-subscribe-btn">{{ trans('messages.subscribe') }}</a>
        </div>
    </div>
    <!-- desktop-footer ends -->

    <!-- mobile-footer starts -->
    <div class="gl-container mobile-footer">
        <div class="footer-col">
            <p class="col-name">{{ trans('messages.start_build') }}</p>
            <a href="/" class="footer-btn footer-calculate-btn order-form-btn">{{ trans('messages.brief') }}</a>
        </div>

        <div class="footer-col footer-contacts">
            <p class="col-name">{{ trans('messages.contacts') }}</p>

            <div class="contact-info">
                <p class="contact-telephone">{{ env('OUR_PHONE_NUMBER') }}</p>
                <p class="contact-email">{{ env('OUR_EMAIL') }}</p> {{-- todo trans ru+ua --}}
            </div>

            <div class="contact-info">
                <p class="contact-address">{!! trans('messages.adress') !!}</p>
            </div>

            <div class="contact-info">
                <p class="shedule-1">{!! trans('messages.worktime') !!}</p>
                <p class="shedule-2">{!! trans('messages.worktime_weekend') !!}</p>
            </div>
        </div>

        <div class="footer-col">
            <p class="col-name">{{ trans('messages.subscribe_get') }}</p>
            <a href="/#download-book-form" class="footer-btn footer-subscribe-btn">{{ trans('messages.subscribe') }}</a>
        </div>

        <div class="footer-col">
            <div class="footer-img">
                <a href="/" target="_self">
                    <img src="/files/images/logo_footer.png" alt="KOLORO footer logo">
                </a>
            </div>
        </div>
    </div>
    <!-- mobile-footer ends -->

    <div class="copy_right">
        <p>
            {{ trans('messages.bottom_text') }}
        </p>
    </div>
</footer>