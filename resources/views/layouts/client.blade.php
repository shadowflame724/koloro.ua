<!doctype html>
<html lang="EN">
<head>
    <script>
        //function removeImgsSrc(){for(var a=document.querySelectorAll("img"),b=document.querySelectorAll("div"),c=0;c<a.length;c++){var d=a[c];d.dataset.original=d.getAttribute("data-original"),d.setAttribute("data-original",d.dataset.original.replace("images/","images/mobile/"))}for(var e=0;e<b.length;e++){var f=b[e];style=f.getAttribute("style"),null!=style&&f.setAttribute("style",style.replace("images/","images/mobile/"))}}document.addEventListener("readystatechange",function(){"interactive"===document.readyState&&(width=window.innerWidth,window.innerWidth<768&&removeImgsSrc())});//change url on mobile
    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('page-meta')

    <link rel="shortcut icon" href="/files/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="/css/main.css"> <!-- CSS reset -->
    <link rel="stylesheet" href="/css/animate.css"> <!-- animate.css -->
    <title>@yield('page-title')</title>

    <!--    slider mThumbnailScroller   -->
    <link rel="stylesheet" href="/css/jquery.mThumbnailScroller.css">

    @yield('page-style')

</head>
<body>
@php($langSuf = '_' . App::getLocale())
@yield('page-content', $langSuf)

@include('layouts.social')

@include('layouts.footer')

@include('layouts.partials.up_but_search')
<!-- arrows UP and SEARCH start -->

<script src="/js/font_loader.js"></script> <!-- font_loader.js -->
<script src="{{ asset('/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>
<script src="/js/main.js"></script>
<!-- include subscribe_form.js -->
<script src="/js/subscribe_form.js"></script>
<!-- include viewportchecker.js -->
<!--<script src="js/viewportchecker.js"></script>-->

<script type="text/javascript">
    $(document).ready(function () {
        //отложенная загрузка изображений
        $(function () {
            $(".lazy").lazyload({
                effect: "fadeIn",
                threshold: 400
            });
        });
        showmore();
    });
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
<!--скрипты для всех страниц конец-->
<!-- start of subscribe_form -->
@include('layouts.partials.form')

@include('layouts.partials.subscription')

<!--    slider mThumbnailScroller   -->
<script src="/js/jquery.mThumbnailScroller.min.js"></script>

@yield('page-scripts')

</body>
</html>