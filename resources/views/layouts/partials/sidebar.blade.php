<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{asset('/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image"/>
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->name }}</p>
                    <!-- Status -->
                    {{--<a href="/"><i class="fa fa-circle text-success"></i> {{ trans('adminlte_lang::message.online') }}</a>--}}
                </div>
            </div>
    @endif

    <!-- search form (Optional) -->
    {{--<form action="#" method="get" class="sidebar-form">--}}
    {{--<div class="input-group">--}}
    {{--<input type="text" name="q" class="form-control" placeholder="{{ trans('adminlte_lang::message.search') }}..."/>--}}
    {{--<span class="input-group-btn">--}}
    {{--<button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>--}}
    {{--</span>--}}
    {{--</div>--}}
    {{--</form>--}}
    <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
        {{--<li class="header">{{ trans('adminlte_lang::message.header') }}</li>--}}
        <!-- Optionally, you can add icons to the links -->
            <li><a href="{{ url('admin') }}"><i class='fa fa-home'></i> <span>{{ 'Главная' }}</span></a></li>
            <li class="treeview">
                <a href="#"><i class='fa fa-bell'></i> <span>{{ 'Обратная связь' }}</span> <i
                            class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('admin/form') }}">{{ 'Форма' }}</a></li>
                    <li><a href="{{ url('admin/callback') }}">{{ 'Перезвоните мне' }}</a></li>
                    <li><a href="{{ url('admin/brief') }}">{{ 'Бриф' }}</a></li>
                    <li><a href="{{ url('admin/subscription') }}">{{ 'Подписка' }}</a></li>
                </ul>
            </li>
            <li><a href="{{ url('admin/blog') }}"><i class='fa fa-file-text'></i> <span>{{ 'Статьи' }}</span></a></li>
            <li><a href="{{ url('admin/service') }}"><i class='fa fa-line-chart'></i> <span>{{ 'Услуги' }}</span></a></li>
            <li><a href="{{ url('admin/service-prices') }}"><i class='fa fa-usd'></i> <span>{{ 'Услуги цены' }}</span></a></li>
            <li><a href="{{ url('admin/portfolio') }}"><i class='fa fa-briefcase'></i> <span>{{ 'Портфолио' }}</span></a></li>
            <li><a href="{{ url('admin/page') }}"><i class='fa fa-file-text'></i> <span>{{ 'Страницы' }}</span></a></li>
            <li><a href="{{ url('admin/settings/edit') }}"><i class='fa fa-cogs'></i> <span>{{ 'Настройки' }}</span></a></li>
            <li class="treeview">
                <a href="#"><i class='fa fa-bookmark'></i> <span>{{ 'Категории' }}</span> <i
                            class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('admin/blogcategory') }} ">{{ 'Блог' }}</a></li>
                    <li><a href="{{ url('admin/servicecategory') }}">{{ 'Услуги' }}</a></li>
                    <li><a href="{{ url('admin/portfoliocategory') }}">{{ 'Портфолио' }}</a></li>
                </ul>
            </li>
            {{--<li><a href="{{ url('admin/meta') }}"><i class='fa fa-tags'></i> <span>{{ 'Meta-теги' }}</span></a></li>--}}
            {{--<li><a href="{{ url('admin/pages') }}"><i class='fa fa-desktop'></i> <span>{{ 'Страницы' }}</span></a></li>--}}
            <li><a href="{{ url('admin/users') }}"><i class='fa fa-user'></i> <span>{{ 'Пользователи' }}</span></a></li>
            <li><a href="{{ url('admin/managers') }}"><i class='fa fa-user'></i> <span>{{ 'Менеджеры' }}</span></a></li>
            <li><a href="{{ url('admin/roles') }}"><i class='fa fa-minus-circle'></i> <span>{{ 'Роли' }}</span></a></li>
            {{--<li><a href="#"><i class='fa fa-link'></i> <span>{{ trans('adminlte_lang::message.anotherlink') }}</span></a></li>--}}
            {{--<li class="treeview">--}}
            {{--<a href="#"><i class='fa fa-link'></i> <span>{{ 'Блог' }}</span> <i class="fa fa-angle-left pull-right"></i></a>--}}
            {{--<ul class="treeview-menu">--}}
            {{--<li><a href="#">{{ '' }}</a></li>--}}
            {{--<li><a href="#">{{ '' }}</a></li>--}}
            {{--</ul>--}}
            {{--</li>--}}
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
