@extends('layouts.client')

@section('page-title', $page->meta->{'title' . $langSuf} )

@section('page-meta')
    <meta name="description" content="{{ $page->meta->{'description' . $langSuf} }}">
    <meta name="keywords" content="{{ $page->meta->{'keywords' . $langSuf} }}">
@stop

@section('page-style')

@stop

@section('page-content')
    @php($langSuf = '_' . App::getLocale())
    @include('layouts.blackheader')

    <!-- begin container -->
    <div class="container">
        <h1 class="page_name">Блог</h1>
        <nav class="blog_nav">
            <ul class="flex">
                <li>
                    <a href="/blog" @if($categoryId == null) class="active" @endif>Все категории</a>
                </li>
                @foreach ($blogcategories as $blogcategory)
                    <li>
                        <a href="/blog/{{ $blogcategory->slug }}"
                           @if($categoryId == $blogcategory->id) class="active" @endif>{{ $blogcategory->{'name' . $langSuf} }}</a>
                    </li>
                @endforeach
            </ul>
        </nav>
        <!-- begin news_lenght -->
        @foreach ($blogs as $key => $blog)
            <section class="news_lenght">
                <!-- begin one_news -->
                <div class="one_news">

                        <a href="/blog/{{ $blog->categorySlug }}/{{$blog->slug}}" class="preview">
                            <img src="{{ ('/files/images/blog/' . $blog->imageLink) }}"
                                 data-original="{{ ('/files/images/blog/' . $blog->imageLink) }}"
                                 alt="{{ $blog->imageAlt }}"
                                 class="lazy">
                        </a>
                        <!-- begin news_description -->
                        <div class="news_description">
                            <!-- begin short_desc -->
                            <div>
                                <div class="short_desc">
                                    <a href="/blog/{{ $blog->categorySlug }}/{{$blog->slug}}" class="article_namel">
                                        <h2>{{ $blog->{'name' . $langSuf} }}</h2></a>
                                    <p class="date">{{ isset($blog->published_at) ? \Carbon\Carbon::parse($blog->published_at)->format('d/m/Y') : '' }}</p>
                                    <p>{{ $blog->{'description' . $langSuf} }}</p>
                                </div>
                                <!-- end short_desc -->

                                <!-- begin rating -->
                                <div class="rating_container">
                                    <div class="views">
                                        <i class="icon icon icon-eye"></i>
                                        <p><span>{{ $blog->views }}</span> просмотров</p>
                                    </div>
                                    <form>
                                        <input value="{{$blog->votes == 0 ? 0 : $blog->rating/$blog->votes}}"
                                               data-id="{{$blog->id}}" type="number" class="rating" min=0 max=5 step=0.5
                                               data-size="sm">
                                        <p class="reviews_count"><span>{{$blog->votes}}</span> отзыв</p>
                                    </form>
                                </div>
                                <!-- end rating -->
                            </div>
                            <!-- begin info -->
                            <div class="info">
                                <div>
                                    <p>Категория: <span>{{ $blog->{'categoryName' . $langSuf} }}</span></p>
                                    <p>Автор: <a href="/author/{{ $blog->userId }}"
                                                 class="autor_link">{{ $blog->userName }}</a></p>
                                </div>
                                <a href="/blog/{{ $blog->categorySlug }}/{{$blog->slug}}"
                                   class="yellow_button link_read">читать</a>
                            </div>
                            <!-- end info -->
                        </div>
                        <!-- end news_description -->
                </div>
            </section>
        @endforeach
        {{ $blogs->links() }}
    </div>
    <!-- end container -->
@stop

{{--@section('page-scripts')--}}

    {{--@if(isset($blog))--}}
        {{--@php($data = [--}}
{{--'type' => 'blog',--}}
{{--'id' => $blog->id--}}
{{--])--}}

        {{--@include('layouts.partials.star-rating', ['data'=>$data])--}}
    {{--@endif--}}
{{--@stop--}}
@section('page-scripts')
    <script src="/js/star-rating.js"></script>
    <link rel="stylesheet" href="/css/star-rating.css" media="all" rel="stylesheet" type="text/css"/>
    <script type="text/javascript">
        {{-- disable voting function on this page --}}
        $(".rating").rating({min: 1, max: 5, step: 0.5, size: 'sm', disabled: true}).hide();

        $('.clear-rating').hide();
        $('.caption').hide();
    </script>
@stop