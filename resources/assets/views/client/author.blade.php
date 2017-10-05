@extends('layouts.client')

@section('page-title', $page->meta->{'title' . $langSuf} )

@section('page-meta')
    <meta name="description" content="{{ $page->meta->{'description' . $langSuf} }}">
    <meta name="keywords" content="{{ $page->meta->{'keywords' . $langSuf} }}">
@stop
@section('page-content')

    @include('layouts.blackheader')
    <!--PRELOADER!!! -->
    <div id="preloader"></div>

    <!-- begin container -->
    <div class="container">
        <h1 class="page_name">Блог</h1>
        <nav class="blog_nav">
            <ul class="flex">
                <li>
                    <a href="#" class="active">Все категории</a>
                </li>
                @foreach($blogCategories as $blogCategory)

                <li>
                    <a href="#">{{ $blogCategory->{'name' . $langSuf} }}</a>
                </li>

                @endforeach


            </ul>
        </nav>
        <!-- begin autor_info -->
        <section class="autor_info">
            <!-- begin container -->
            <div class="container">
                <!-- begin autor_ava -->
                <div class="autor_ava">
                    <img src="/files/images/users/@if($user->file){{ $user->file->link }}"
                         data-original="/files/images/users/{{ $user->file->link }}" alt="{{ $user->file->alt }}@endif" class="lazy">
                </div>
                <!-- end autor_ava -->

                <!-- begin  about_autor-->
                <div class="about_autor">
                    <p class="name">{{ $user->name }}</p>
                    <p class="views"><i class="icon icon-eye"></i> {{ $articles->sum('views') }} общих просмотров</p>
                    <form>
                        <input id="input-id" value="2" type="number" class="rating" min=0 max=5 step=0.5 data-size="md">
                    </form>
                    <p>Общий рейтинг</p>
                    <p class="voice">
                        <span>10522</span> голосов
                    </p>
                </div>
                <!-- end about_autor -->
            </div>
            <!-- end container -->
        </section>
        <!-- end autor_info -->
        <!-- begin news_lenght -->
        <section class="news_lenght">
            <!-- begin one_news -->
            @foreach($articles as $article)
                <div class="one_news">
                    <div class="preview">
                        <img src="/files/images/blog/@if($article->file){{ $article->file->link }}"
                             data-original="/files/images/blog/{{ $article->file->link }}" alt="{{ $article->file->alt }}" @endif class="lazy">
                    </div>
                    <!-- begin news_description -->
                    <div class="news_description">
                        <!-- begin short_desc -->
                        <div>
                            <div class="short_desc">
                                <h2>{{ $article->{'name' . $langSuf} }}</h2>
                                <p class="date">{{ $article->created_at->diffForHumans() }}</p>
                                <p>
                                    {{ $article->{'description' . $langSuf} }}
                                </p>
                            </div>
                            <!-- end short_desc -->

                            <!-- begin rating -->
                            <div class="rating_container">
                                <div class="views">
                                    <i class="icon icon icon-eye"></i>
                                    <p><span>{{ $article->views }}</span> просмотров</p>
                                </div>
                                <form>
                                    <input id="input-id" value="2" type="number" class="rating" min=0 max=5 step=0.5
                                           data-size="sm">
                                </form>
                                <p class="reviews_count"><span>0</span> отзыв</p>


                            </div>
                            <!-- end rating -->
                        </div>
                        <!-- begin info -->
                        <div class="info">
                            <div>
                                <p>Категория: <span>{{ $article->blogcategory->{'name' . $langSuf} }}</span></p>
                                <p>Автор: <a href="/author/{{ $user->id }}" class="autor_link">{{ $user->name }}</a></p>
                            </div>
                            <a href="/blog/{{ $article->blogCategory->slug }}/{{ $article->slug }}" class="yellow_button link_read">читать</a>
                        </div>
                        <!-- end info -->
                    </div>
                    <!-- end news_description -->
                </div>
                <!-- end one_news -->
            @endforeach
        </section>
        <!-- end news_lenght -->
        <!-- begin pagination -->
    {!! $articles->links() !!}

    <!-- end pagination -->
    </div>
    <!-- end container -->
@stop

@section('page-scripts')
    <script src="/js/star-rating.js"></script>
    <link rel="stylesheet" href="/css/star-rating.css" media="all" rel="stylesheet" type="text/css"/>
    <script type="text/javascript">
        $(".rating").rating({min: 1, max: 5, step: 0.5, size: 'sm'}).hide();

        $('.clear-rating').hide();
        $('.caption').hide();
    </script>
@stop
