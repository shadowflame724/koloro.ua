<ul>
    @foreach($services as $service)
        <li>

            <a href="services/{!! $service->slug !!}">{!! $service->name !!}</a>
            <div class="additional-info">
                <div class="image-container">
                    <img src="/files/images/service/slide-picture.jpg">
                </div>
                <p class="additional-info-text">
                    Кабинетные маркетинговые исследования – это сбор и анализ вторичной информации
                    по заданной теме. Цель исследования - получить точную...
                </p>
                <a href="services/service" class="additional-info-btn">Перейти к услуге</a>
            </div>

        </li>
    @endforeach
</ul>