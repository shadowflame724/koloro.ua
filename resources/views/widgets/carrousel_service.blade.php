<?php $i = 0; ?>
@foreach($servicecategories as $servicecategory)
    <li class="slider-item" data-number={{ $i++ }}>
        <h2 class="slide-title">{{ $servicecategory->name }}</h2>
        <h3 class="slide-title-small">{{ $servicecategory->description }}</h3>

        <div class="slide-links">
            <hr class="slide-hr">
            @foreach($services->where('category_id', $servicecategory->id)->slice(0,7) as $service)
                <a href="/services/{{ $service->slug }}">{{ $service->name }}</a>
            @endforeach
        </div>
    </li>
@endforeach