@extends('layouts.client')

    @section('page-title', $article->{'metaTitle' . $langSuf} )

@section('page-meta')
    <meta name="description" content="{{ $article->{'metaDesc' . $langSuf} }}">
    <meta name="keywords" content="{{ $article->{'metaKeys' . $langSuf} }}">
@stop

@section('page-content')
    @include('layouts.blackheader')

    <div itemscope itemtype="http://schema.org/Article">
        <meta itemscope itemprop="mainEntityOfPage" itemType="https://schema.org/WebPage" itemid="{{ url('/blog') }}"/>
        <span itemprop="name" style="display: none">
                    {{ $article->{'name' . $langSuf} }}
        </span>

        <!-- begin container -->
        <div class="container">
            <h1 itemprop="headline" class="page_name">{{ $article->{'name' . $langSuf} }}</h1>
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
                        <p>Категория: <span>{{ $article->{'categoryName' . $langSuf} }}</span></p>
                        <p itemprop="author" itemscope itemtype="http://schema.org/Person">Автор: <a
                                    href="/author/{{ $article->userId }}"
                                    class="autor_link"><span
                                        itemprop="name">{{ $article->userName }}</span></a></p>
                        <!-- begin right_block -->
                        <div class="right_block">
                            @php
                                setlocale(LC_TIME, 'ru_RU.utf8');
                            @endphp
                            <p>
                                <meta itemprop="dateModified" content="{{ $article->updated_at }}">
                                <meta itemprop="datePublished" content="{{ $article->created_at }}">

                                <i class="icon icon-clock"></i>{{ \Carbon\Carbon::parse($article->created_at)->formatLocalized('%d / %m / %Y') }}
                            </p>
                            <p><i class="icon icon-eye"></i>{{ $article->views }} просмотров</p>
                        </div>
                        <!-- end right_block -->

                    </div>
                    <!-- end info -->
                    <form class="mstar">
                        {{--<input id="input-id" value="2" type="number" class="rating" min=0 max=5 step=0.5 data-size="md">--}}
                        <input value="{{$article->votes == 0 ? 0 : $article->rating/$article->votes}}"
                               data-id="{{$article->id}}" type="number" class="rating" min=0 max=5 step=0.5
                               data-size="md">
                    </form>

                    <div itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
                        <meta itemprop="url"
                              content="{{ url('files/images/blog/'. $article->articleImgLink ) }}">
                        <meta itemprop="width" content="300">
                        <meta itemprop="height" content="300">
                    </div>


                    <div itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
                        <div itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">
                            <meta itemprop="url" content="{{ url('files/images/logo.png') }} ">
                        </div>
                        <meta itemprop="name" content="test.koloro.com.ua">
                        <meta itemprop="url" content="{{ url('') }}">
                    </div>


                    <div itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
                        <span itemprop="ratingCount" style="display: none">{{$article->votes}}</span>
                        <span itemprop="ratingValue"
                              style="display: none">{{$article->votes == 0 ? 0 : $article->rating/$article->votes}}</span>

                        <meta itemprop="worstRating" content="0">
                        <span itemprop="bestRating" style="display: none;">5</span>
                    </div>
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
                            <a href="{{ url('/portfolio')}}/{{ $item->slug }}" class="link-to-material">
                                <img src="/images/portfolio/{{ $item->link }}"
                                     data-original="/images/portfolio/{{ $item->link }}"
                                     alt="/images/portfolio/{{ $item->alt }}" class="lazy">
                            </a>
                        @endforeach
                        <a href="#" class="btn btn_wb order-form-btn">хочу также</a>
                    </div>
                    <!-- end our_jobs -->
                    <!-- begin our_service -->
                    <div class="our_service">
                        <p>Наши услуги</p>
                        <ol>
                            @foreach($serviceCategories as $serviceCategory)
                                <li>
                                    <a href="{{ route('client.services') }}">
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
                <div class="article_container" itemprop="articleBody">
                    {!! $article->{'content' . $langSuf} !!}

                    <div class="contact-info-cont">
                        <h3>Контактная информация:</h3>
                        <p class="contact-info koloro-email">
                            <a href="mailto:{{ env('OUR_EMAIL') }}">{{ env('OUR_EMAIL') }}</a>
                        </p>
                        <p class="contact-info koloro-tel">
                            <a class="call-us-phone"
                               href="tel:{{-- */ $data = str_replace(' ', '', env('OUR_PHONE_NUMBER')); /* --}}{{$data}}">{{ env('OUR_PHONE_NUMBER') }}</a>
                        </p>
                    </div>
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
                        <div class="creator_photo">
                            <img src="/files/images/users/{{ $article->userImgLink }}"
                                 data-original="/files/images/users/{{ $article->userImgLink }}"
                                 alt="{{ $article->userImgAlt }}"
                                 class="lazy">
                        </div>
                        <div class="creator_info">
                            <p class="who">Подготовил <a
                                        href="/author/{{ $article->userId }}">{{ $article->userName }}</a>
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
                        @foreach($similarArticles as $key => $similarArticle)
                                    <div class="one_material">
                                        <a href="/blog/{{ $similarArticle->categorySlug }}/{{ $similarArticle->slug }}"
                                           target="_blank"
                                           title="{{ $similarArticle->{'name' . $langSuf} }}">

                                            <img src="/files/images/blog/{{ $similarArticle->link }}"
                                                 data-original="/files/images/blog/{{ $similarArticle->link }}"
                                                 alt="{{ $similarArticle->alt }}"
                                                 class="lazy">
                                            <p>{{ $similarArticle->{'name' . $langSuf} }}</p>
                                        </a>
                                    </div>
                        @endforeach
                        <div class="clear"></div>
                    </div>
                    <!-- end similar_material -->
                    <!-- begin hypercomments_widget -->
                    <div>
                        <div id="hypercomments_widget"></div>
                        <script type="text/javascript">
                            _hcwp = window._hcwp || [];
                            _hcwp.push({widget: "Stream", widget_id: 73852, hc_disable: 1});
                            (function () {
                                if ("HC_LOAD_INIT" in window) return;
                                HC_LOAD_INIT = true;
                                var lang = (navigator.language || navigator.systemLanguage || navigator.userLanguage || "en").substr(0, 2).toLowerCase();
                                var hcc = document.createElement("script");
                                hcc.type = "text/javascript";
                                hcc.async = true;
                                hcc.src = ("https:" == document.location.protocol ? "https" : "http") + "://w.hypercomments.com/widget/hc/73852/" + lang + "/widget.js";
                                var s = document.getElementsByTagName("script")[0];
                                s.parentNode.insertBefore(hcc, s.nextSibling);
                            })();
                        </script>
                        <a href="http://hypercomments.com" class="hc-link" title="comments widget">comments powered by
                            HyperComments</a>
                        </p>
                    </div>
                    <!-- end hypercomments_widget -->
                </div>
                <!-- end article_container -->
            </div>
            <!-- end container -->
        </section>
        <!-- Put this script tag to the <head> of your page -->

    </div>

@stop

@section('page-scripts')
    <!-- end of subscribe_form -->
    {{--<script src="/js/star-rating.js"></script>--}}
    {{--<link rel="stylesheet" href="/css/star-rating.css" media="all" rel="stylesheet" type="text/css"/>--}}

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
    @php($data = [
    'type' => 'blog',
    'id' => $article->id
    ])

    @include('layouts.partials.star-rating', ['data'=>$data])
@stop