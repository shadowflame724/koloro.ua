<div class="image_container">
    @php($langSuf = '_' . App::getLocale())
    @foreach($portfolio as $item)
        <a href="/portfolio/{{ $item->slug }}" class="one_block animated">
            <img src="/files/images/portfolio/{{ $item->link }}"
                 data-original="/files/images/portfolio/{{ $item->link }}" alt="{{ $item->link }}" class="lazy">
            <!-- begin hidden_content -->
            <div class="hidden_content" style="background-color: {{ $item->bg_color }}">
                <p class="name_content">{{ $item->{'title' . $langSuf} }}</p>
                <p class="desc_content">{{ $item->{'short_desc' . $langSuf} }}</p>
                <i class="icon icon-portolio_row"></i>
            </div>
            <!-- end hidden_content -->
        </a>
    @endforeach
</div>
