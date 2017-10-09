@extends('layouts.client')

@if($article->meta)
    @section('page-title', $article->meta->{'title' . $langSuf} )

@section('page-meta')
    <meta name="description" content="{{ $article->meta->{'description' . $langSuf} }}">
    <meta name="keywords" content="{{ $article->meta->{'keywords' . $langSuf} }}">
@stop
@endif

@section('page-content')
    @include('layouts.blackheader')

    <!-- begin container -->
    <div class="container">
        <h1 class="page_name">{{ $article->{'name' . $langSuf} }}</h1>
    </div>
    <!-- end container -->
    <!-- begin article_info -->
    <div class="article_info">
        <!-- begin container -->
        <div class="container">
            <!-- begin article_container -->
            <div class="article_container">
                <!-- begin info -->
                <div class="info">
                    <p>Категория: <span>{{ $article->blogcategory->{'name' . $langSuf} }}</span></p>
                    <p>Автор: <a href="/author/{{ $article->user->id }}"
                                 class="autor_link">@if($article->user){{ $article->user->name }}@endif</a></p>
                    <!-- begin right_block -->
                    <div class="right_block">
                        <p><i class="icon icon-clock"></i>{{ $article->created_at->diffForHumans() }}</p>
                        <p><i class="icon icon-eye"></i>{{ $article->views }} просмотров</p>
                    </div>
                    <!-- end right_block -->

                </div>
                <!-- end info -->
                <form class="mstar">
                    {{--<input id="input-id" value="2" type="number" class="rating" min=0 max=5 step=0.5 data-size="md">--}}
                    <input value="{{$article->votes == 0 ? 0 : $article->rating/$article->votes}}"
                           data-id="{{$article->id}}" type="number" class="rating" min=0 max=5 step=0.5 data-size="md">
                </form>
            </div>
            <!-- end article_container -->
        </div>
        <!-- end container -->
    </div>
    <!-- end article_info -->
    <!-- begin article -->
    <section class="article">
        <!-- begin container -->
        <div class="container">
            <!-- begin right_sidebar -->
            <div class="right_sidebar">
                <h2 class="name_block">Мы специализируемся на бренд-дизайне</h2>
                <!-- begin our_jobs -->
                <div class="our_jobs">
                    <p>Наши работы</p>
                    @foreach($portfolios as $item)
                        <img src="/files/images/portfolio/{{ $item->link }}"
                             data-original="/files/images/portfolio/{{ $item->link }}"
                             alt="/files/images/portfolio/{{ $item->alt }}" class="lazy">
                    @endforeach
                    <a href="#" class="btn btn_wb">хочу также</a>
                </div>
                <!-- end our_jobs -->
                <!-- begin our_service -->
                <div class="our_service">
                    <p>Наши услуги</p>
                    <ol>
                        @foreach($serviceCategories as $serviceCategory)
                            <li>
                                <a href="/services">
                                    {{ $serviceCategory->{'name' . $langSuf} }}
                                </a>
                            </li>
                        @endforeach
                    </ol>
                </div>
                <!-- end our_service -->
                <!-- begin popular -->
                <div class="popular">
                    <p>Популярные материалы</p>
                    <!-- begin tabs -->
                    <ul class="nav nav-tabs">
                        <li class="active">
                            <a href="#month" data-toggle="tab" class="triger_tab active">
                                Месяц
                            </a>
                        </li>
                        <li>
                            <a href="#3month" data-toggle="tab" class="triger_tab">
                                3 Месяца
                            </a>
                        </li>

                    </ul>
                    <!-- end tabs -->
                    <!-- begin tab_target -->
                    <div class="tab-content">

                        <ol class="tab-pane animated active" id="month">
                            @foreach($montharticles as $populararticle)
                                <li>
                                    <a href="/blog/{{$populararticle->blogcategory->slug}}/{{$populararticle->slug}}">
                                        {{$populararticle->{'name' . $langSuf} }}
                                    </a>
                                </li>
                            @endforeach
                        </ol>

                        <ol class="tab-pane animated" id="3month">
                            @foreach($twomontharticles as $populararticle)
                                <li>
                                    <a href="/blog/{{$populararticle->blogcategory->slug}}/{{$populararticle->slug}}">
                                        {{$populararticle->{'name' . $langSuf} }}
                                    </a>
                                </li>
                            @endforeach
                        </ol>
                    </div>
                    <!-- end tab_target -->


                </div>
                <!-- end popular -->
            </div>
            <!-- end right_sidebar -->
            <!-- begin article_container -->
            <div class="article_container">
                {!! $article->{'content' . $langSuf} !!}
            </div>
            <!-- end article_container -->

        </div>
        <!-- end container -->
    </section>
    <!-- end article -->
    <!-- begin after_article -->
    <section class="after_article">
        <!-- begin container -->
        <div class="container">
            <!-- begin article_container -->
            <div class="article_container flex">
                <!-- begin creator -->
                <div class="creator">
                    <img src="/files/images/users/@if($user->file){{ $user->file->link }}"
                         data-original="/files/images/users/{{ $user->file->link }}" alt="{{ $user->file->alt }}@endif"
                         class="lazy">
                    <div class="creator_info">
                        <p class="who">Подготовил <a
                                    href="/author/{{ $user->id }}">@if($article->user){{ $article->user->name }}@endif</a>
                        </p>
                        <p>Копирайтер</p>
                    </div>
                </div>
                <!-- end creator -->
                <!-- begin like_it -->
                <div class="like_it">
                    <!-- begin raiting_container -->
                    <div class="rating_container">
                        <form>
                            {{--<input id="input-id" value="2" type="number" class="rating" min=0 max=5 step=0.5 data-size="md">--}}
                            <input value="{{$article->votes == 0 ? 0 : $article->rating/$article->votes}}"
                                   data-id="{{$article->id}}" type="number" class="rating" min=0 max=5 step=0.5
                                   data-size="md">
                        </form>
                        <p class="voice"><span class="yellow">{{$article->votes}}</span> голосов</p>
                    </div>
                    <!-- end raiting_container -->
                    <!-- begin qwestion -->
                    <div class="qwestion">
                        <i class="icon icon-animation_arrow animated infinite pulse"></i>
                        <i class="icon icon-animation_top hidden_arrow animated infinite pulse"></i>
                        <span>Понравилась статья?<br>Оставьте свой голос:)</span>
                    </div>
                    <!-- end qwestion -->
                </div>
                <!-- end like_it -->
            </div>
            <!-- end article_container -->
            <!-- begin article_container -->
            <div class="article_container">
                <div class="social_likes">
                    <div class="fb-like" data-href="{{Request::url()}}" data-layout="standard" data-action="like"
                         data-size="small" data-show-faces="true" data-share="true"></div>
                    <a href="https://www.pinterest.com/pin/create/button/">
                        <img src="//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_gray_20.png"/>
                    </a>
                {{--<img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAkwBADs=" data-original="/images/like.png" alt="name image" class="lazy" >--}}
                <!--
                http://web-icon.com.ua/articles/seo-promotion/%D0%B4%D0%BE%D0%B1%D0%B0%D0%B2%D0%BB%D1%8F%D0%B5%D0%BC-%D0%BD%D0%B0-%D1%81%D0%B0%D0%B9%D1%82-%D0%BB%D0%B0%D0%B9%D0%BA%D0%B8-%D0%B2%D0%BA%D0%BE%D0%BD%D1%82%D0%B0%D0%BA%D1%82%D0%B5-facebook-google
                нужно ставить уже на работающий сайт привязывать к url, получать id...
                -->
                </div>
                <!-- begin similar_material -->
                <div class="similar_material">
                    <p class="name_block">Похожие материалы</p>
                    <!-- begin one_material -->
                    @foreach($category->blog as $key => $similarArticle)
                        @if($similarArticle->id != $article->id)
                            @if($key < 4)
                                <div class="one_material">
                                    <a href="/blog/{{ $similarArticle->blogcategory->slug }}/{{ $similarArticle->slug }}"
                                       target="_blank"
                                       title="{{ $similarArticle->{'name' . $langSuf} }}">

                                        <img src="/files/images/blog/@if($similarArticle->file){{ $similarArticle->file->link }}"
                                             data-original="/files/images/blog/{{ $similarArticle->file->link }}"
                                             alt="{{ $similarArticle->file->alt }}@endif"
                                             class="lazy">
                                        <p>{{ $similarArticle->{'name' . $langSuf} }}</p>
                                    </a>
                                </div>
                            @endif
                        @endif
                    @endforeach
                    <div class="clear"></div>
                </div>
                <!-- end similar_material -->
                <!-- begin comment_widget -->
                <div class="comment_widget">
                    <div id="disqus_thread"></div>
                    <script>

                        /**
                         *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                         *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
                        /*
                         var disqus_config = function () {
                         this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                         this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                         };
                         */
                        (function () { // DON'T EDIT BELOW THIS LINE
                            var d = document, s = d.createElement('script');
                            s.src = 'https://testkoloro.disqus.com/embed.js';
                            s.setAttribute('data-timestamp', + new Date());
                            (d.head || d.body).appendChild(s);
                        })();
                    </script>
                    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments
                            powered by Disqus.</a></noscript>
                </div>
                <!-- end comment_widget -->
            </div>
            <!-- end article_container -->
        </div>
        <!-- end container -->
    </section>
    <!-- Put this script tag to the <head> of your page -->

@stop

@section('page-scripts')
    <!-- end of subscribe_form -->
    <script src="/js/star-rating.js"></script>
    <link rel="stylesheet" href="/css/star-rating.css" media="all" rel="stylesheet" type="text/css"/>

    <script src="/js/tabs.js"></script>
    <script type="text/javascript">
        $('.nav-tabs a').click(function (e) {
            e.preventDefault();
            $(this).tab('show');
        })
    </script>

    {{--facebook--}}
    <div id="fb-root"></div>
    <script>(function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v2.9";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>

    {{--pinterest--}}
    <script
            type="text/javascript"
            async defer
            src="//assets.pinterest.com/js/pinit.js"
    ></script>

    @include('layouts.partials.star-rating', ['data'=>$article])
@stop