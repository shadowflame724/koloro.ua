@extends('layouts.client')

@section('page-title', $page->meta->{'title' . $langSuf} )

@section('page-meta')
    <meta name="description" content="{{ $page->meta->{'description' . $langSuf} }}">
    <meta name="keywords" content="{{ $page->meta->{'keywords' . $langSuf} }}">
@stop

@section('page-style')
    <link href="/css/libs/jquery.bxslider.min.css" rel="stylesheet"/>
    <!-- OwlCarousel -->
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/owl.theme.default.min.css">
@stop

@php($langSuf = '_' . App::getLocale())    <!--  INCLUDE IN MAIN LAYOUT  -->

@section('page-content')
    @include('layouts.blackheader')

    <!-- begin container -->
    <div class="container">
        <h1 class="page_name">@lang('messages.portfolio')</h1>
        <nav class="blog_nav">
            <ul class="flex">
                <li>
                    <a href="{{ route('client.portfolio') }}" @if($categoryId == null) class="active" @endif>@lang('messages.all_works')</a>
                </li>
                @foreach($categories as $category)
                    <li>
                        <a href="{{ route('client.portfoliocategory', ['category' => $category->slug]) }}" @if($categoryId == $category->id) class="active" @endif>{{ $category->{'name' . $langSuf} }}</a>
                    </li>
                @endforeach
            </ul>
        </nav>
    </div>
    <!-- end container -->
    <!-- begin portfolio_block -->
    <section class="portfolio_block on_portfolio_page">
        <!-- begin container -->
        <div class="container">
            <!-- begin image_container -->
            <div class="image_container image_conatainer_full">
                @foreach($portfolios as $portfolio)
                    <a href="{{ route('client.portfoliopage', ['portfolio' => $portfolio->slug]) }}" class="one_block animated">
                        <img src="/images/portfolio/{{ $portfolio->link }}"
                             data-original="/images/portfolio/{{ $portfolio->link }}"
                             alt="{{ $portfolio->alt }}"
                             class="lazy">
                        <!-- begin hidden_content -->
                        <div class="hidden_content" style="background-color: {{ $portfolio->bg_color }}">
                            <p class="name_content">{{ $portfolio->{'title' . $langSuf} }}</p>
                            <p class="desc_content">{{ $portfolio->{'short_desc' . $langSuf} }}</p>
                            <i class="icon icon-portolio_row"></i>
                        </div>
                        <!-- end hidden_content -->
                    </a>
                @endforeach
            </div>
            <!-- end image_container -->
            <section class="manager_connect">
                <a href="#" class="gl-yellow-btn order-form-btn">@lang('messages.want_same')</a>
            </section>
        </div>
        <!-- end container -->
    </section>
    <!-- end portfolio_block -->

@stop

@section('page-scripts')
    <script type="text/javascript">
        resizeheight = function () {
            var img_height = $(".image_container .one_block img").outerHeight();
            var block_height = img_height * 3;
            $(".image_container").css('max-height', block_height);

        };
    </script>
@stop