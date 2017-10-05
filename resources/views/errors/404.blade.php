@extends('layouts.client')

@section('page-title', 'УПС... 404' )

{{--@section('page-meta')
    <meta name="description" content="{{ $page->meta->{'description' . $langSuf} }}">
    <meta name="keywords" content="{{ $page->meta->{'keywords' . $langSuf} }}">
@stop--}}

@section('page-content')
    @include('layouts.blackheader')


    <!--PRELOADER!!! -->
    <div id="preloader"></div>
    <!-- begin error -->
    <section class="error">
        <!-- begin container -->
        <div class="container">
            <h1 class="page_name">Ошибка 404</h1>
            <p>Страница, которую вы ищете не доступна по одной из этих причин:</p>
            <p>
                1. Ссылка на эту страницу может быть неверной или устаревшей.<br>
                2. Вы могли сделать закладку на страницу, которая перемещена
            </p>
            <a href="/" class="btn yellow_button">вернутся на главную</a>
        </div>
        <!-- end container -->
    </section>
    <!-- end error -->
    <!-- begin of section about_koloro -->
    <section class="about-koloro">
        <div class="gl-container">
            <div class="icon-icon_crown animated bounce"></div>
            <h2 class="section-header">Брендинговое агентство <span>KOLORO</span></h2>
            <hr>
            <p class="about_koloro-text">
                Услуги KOLORO ориентированы на лидеров, либо желающих ими стать.
                Ежегодная выручка от продаж брендов, <span>созданных KOLORO,</span> составляет более 1 миллиарда
                долларов.
                Что превышает годовые бюджеты некоторых стран мира!
            </p>
            <p class="about_koloro-text for-read-more">
                <span>Залог успеха</span> – это <span>создание</span> информативного,
                <span>«говорящего» дизайна</span>, в котором каждый изгиб упаковки и каждая
                растровая точка <span>несет</span> свой уникальный <span>посыл</span>,
                <span>обладает пользой и удобством для пользователя</span>,
                объединенный общей коммуникацией позиционирования.
            </p>
            <span class="read-more-btn">Больше</span>
        </div>
    </section>
    <!-- end of section about_koloro -->

    <!-- begin portfolio_block -->
    <section class="portfolio_block">
        <!-- begin container -->
        <div class="container">
            <p class="name_block">Примеры наших работ</p>
            <!-- begin image_container -->
            @widget('jobs-example')
            <!-- end image_container -->
            <!--<a href="" class="btn transparent_btn" id="show_more">Еще работы</a>-->
            <a href="#" class="gl-yellow-btn show-more-portfolio-btn" id="show_more">Еще работы</a>

        </div>
        <!-- end container -->
    </section>
    <!-- end portfolio_block -->

@stop