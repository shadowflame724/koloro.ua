@extends('layouts.client')

@section('page-title', $sitePage->meta->{'title' . $langSuf} )

@section('page-meta')
    <meta name="description" content="{{ $sitePage->meta->{'description' . $langSuf} }}">
    <meta name="keywords" content="{{ $sitePage->meta->{'keywords' . $langSuf} }}">
@stop
@section('page-content')

    @include('layouts.blackheader')

    <!--PRELOADER!!! -->
    <div id="preloader"></div>

    <section class="search-result-page">
        <div class="gl-container">
            <h1 class="page_name">Поиск</h1>
        </div>

        <!--  start of news-items-cont -->
        <div class="news-items-container">

            <!-- start of search-result-form -->
            <form class="search-result-form" action="/search" id="search_from">
                <h2 class="search-result-title">РЕЗУЛЬТАТЫ ПОИСКА ПО ЗАПРОСУ <span>"{{ $query }}"</span></h2>

                <div class="inputs-container">

                    <div class="left-cont">
                        <div class="input-box">
                            <input type="text" name="query" required="required" class="search-text"
                                   placeholder="Пошук" tabindex="1">
                        </div>

                        <div class="input-box">
                            <select name="category" class="search-category" tabindex="4">
                                <option value disabled>Выберите категорию</option>
                                <option value="all" selected>Все</option>
                                <option value="portfolio">Портфолио</option>
                                <option value="blog">Блог</option>
                                <option value="services">Услуги</option>
                            </select>
                            <div class="fake-block"></div>
                        </div>

                        <div class="checkboxes-container">
                            <div class="checkbox-item">
                                <input id="checkbox-in-header" type="checkbox" name="search-condition"
                                       value="in-header" tabindex="2">
                                <label for="checkbox-in-header"><span>в заголовке</span></label>
                            </div>
                            <div class="checkbox-item">
                                <input id="checkbox-in-text" type="checkbox" name="search-condition"
                                       value="in-text" checked="checked" tabindex="3">
                                <label for="checkbox-in-text"><span>в тексте</span></label>
                            </div>
                        </div>
                    </div>

                    <div class="right-cont">
                        <div class="input-box">
                            <input type="submit" value="Поиск" class="submit-btn gl-yellow-btn" tabindex="3">
                        </div>
                    </div>

                </div>
            </form>
            <!-- end of search-result-form -->

            <div class="container">
                @foreach($results as $result)

                    @if($result instanceof \App\Models\Blog)
                        <div class="news-item-cont article-item-cont">
                            <h2 class="news-item-header">{{ $result->{'name' . $langSuf} }}</h2>
                            <div class="news-item">
                                <div class="left-cont">
                                    <a href="/blog/{{ $result->blogcategory->slug }}/{{ $result->slug }}"
                                       class="preview"
                                       target="_self">
                                        <div class="preview-bg-image"
                                             style="background-image: url('/files/images/blog/@if($result->file){{ $result->file->link }}@endif');"></div>
                                    </a>
                                </div>
                                <div class="right-cont">
                                    <div class="left-side">
                                        @php(\Carbon\Carbon::setLocale('ru'))
                                        <p class="date">{{ $result->created_at->diffForHumans() }}</p>
                                        <p class="text">
                                            {{ strip_tags($result->{'description' . $langSuf}) }}
                                        </p>
                                    </div>
                                    <div class="right-side">
                                        <div class="raiting-cont">
                                            <div class="views">
                                                <i class="icon icon-eye"></i>
                                                <p>{{ $result->views }} просмотров</p>
                                            </div>
                                            <form class="stars">
                                                <input value="{{$result->votes == 0 ? 0 : $result->rating/$result->votes}}"
                                                       data-id="{{$result->id}}" type="number" class="rating" min=0 max=5 step=0.5
                                                       data-size="md">
                                                <p class="reviews-count"><span>{{ $result->votes }}</span> отзыв</p>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="bottom-side">
                                        <div class="info-block">
                                            <p class="article-category">Категория:
                                                <a href="/blog/{{ $result->blogcategory->slug }}"
                                                   class="link">{{ $result->blogcategory->{'name' . $langSuf} }}</a>
                                            </p>
                                            <p class="article-author">Автор:
                                                <a href="/author/{{ $result->user->id }}"
                                                   class="link">@if($result->user){{ $result->user->name }}@endif</a>
                                            </p>
                                        </div>
                                        <div class="info-btn">
                                            <a href="/blog/{{ $result->blogcategory->slug }}" class="gl-yellow-btn">больше информации</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif


                    @if($result instanceof \App\Models\Service)
                        <div class="news-item-cont service-item-cont">
                            <h2 class="news-item-header">{{ $result->{'name' . $langSuf} }}</h2>
                            <div class="news-item">
                                <div class="left-cont">
                                    <a href="/{{ $result->slug }}" class="preview" target="_self">
                                        <div class="preview-bg-image"
                                             style="background-image: url('/files/images/service/@if($result->image){{ $result->image->link }}@endif');"></div>
                                    </a>
                                </div>
                                <div class="right-cont">
                                    <div class="left-side">
                                        <p class="service-price">{{ $result->price }} грн</p>
                                        <p class="text">
                                            {{ strip_tags($result->{'description' . $langSuf}) }}
                                        </p>
                                    </div>
                                    <div class="right-side">
                                        <div class="raiting-cont">
                                            <div class="views">
                                                <i class="icon icon-eye"></i>
                                                <p>{{ rand(100,200) }} просмотров</p>
                                            </div>
                                        </div>
                                        <div class="executed-works">
                                            <p class="quantity">{{ $result->work_count }}</p>
                                            <p>выполненных работ</p>
                                        </div>
                                    </div>
                                    <div class="bottom-side">
                                        <div class="info-block">
                                            <p class="service-category">Категория:
                                                <a href="/services"
                                                   class="link">{{ $result->serviceCategory->{'name' . $langSuf} }}</a>
                                            </p>
                                        </div>
                                        <div class="info-btn">
                                            <a href="/{{ $result->slug }}" class="gl-yellow-btn">больше информации</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif

                    @if($result instanceof \App\Models\Portfolio)
                        <div class="news-item-cont portfolio-item-cont">
                            <h2 class="news-item-header">{{ $result->{'title' . $langSuf} }}</h2>
                            <div class="news-item">
                                <div class="left-cont">
                                    <a href="/portfolio/{{ $result->slug }}" class="preview" target="_self">
                                        <div class="preview-bg-image"
                                             style="background-image: url('/images/portfolio/@if($result->image){{ $result->image->link }}@endif');"></div>
                                    </a>
                                </div>
                                <div class="right-cont">
                                    <div class="left-side">
                                        <p class="text">
                                            {{ strip_tags($result->{'short_desc' . $langSuf}) }}
                                        </p>
                                    </div>
                                    <div class="right-side">
                                        <div class="raiting-cont">
                                            <div class="views">
                                                <i class="icon icon-eye"></i>
                                                <p>{{ $result->views }} просмотров</p>
                                            </div>
                                            <form class="stars">
                                                <input value="{{$result->votes == 0 ? 0 : $result->rating/$result->votes}}"
                                                       data-id="{{$result->id}}" type="number" class="rating" min=0 max=5 step=0.5
                                                       data-size="md">
                                                <p class="reviews-count"><span>{{ $result->votes }}</span> отзыв</p>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="bottom-side">
                                        <div class="info-block">
                                            <a href="/portfolio/{{ $result->slug }}" class="portfolio-category">Портфолио</a>
                                        </div>
                                        <div class="info-btn">
                                            <a href="/portfolio/{{ $result->slug }}" class="gl-yellow-btn">больше
                                                информации</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach

                {!!  $results->appends(\Illuminate\Support\Facades\Input::except('page'))->links()  !!}
            </div>
        </div>

        <!-- end pagination -->

    </section>


@stop

@section('page-scripts')
    <script type="text/javascript">
        {{-- disable voting function on this page --}}
        $(".rating").rating({min: 0, max: 5, step: 0.5, size: 'sm', disabled: true}).hide();

        $('.clear-rating').hide();
        $('.caption').hide();
    </script>
    <script>

        $('#search_from').on('submit', function () {
            var checkboxInHeader = $('#checkbox-in-header');
            var checkboxInText = $('#checkbox-in-text');
            if (checkboxInHeader.is(':checked') && checkboxInText.is(':checked')) {
                $("input[name='search-condition']").val("all");
            }
        })
    </script>
@stop