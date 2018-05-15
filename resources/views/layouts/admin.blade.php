<!doctype html>
<html class="no-js fixed-layout">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ env('APP_ADMIN') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="stylesheet" href="{{ asset('/statics/amaze/css/amazeui.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('/statics/amaze/css/admin.css') }}">

    @yield('style')

</head>
<body>

<header class="am-topbar am-topbar-inverse admin-header" style="z-index:1;">
    <div class="am-topbar-brand">
        <strong>{{ env('APP_ADMIN') }}</strong> <small>后台管理</small>
    </div>

    <div class="am-collapse am-topbar-collapse" id="topbar-collapse">

        <ul class="am-nav am-nav-pills am-topbar-nav am-topbar-right admin-header-list">
            <li class="am-dropdown" data-am-dropdown>
                <a class="am-dropdown-toggle" data-am-dropdown-toggle href="javascript:;">
                    <span class="am-icon-users"></span> 管理员 <span class="am-icon-caret-down"></span>
                </a>
                <ul class="am-dropdown-content">
                    <li><a href="/admin/logout"><span class="am-icon-power-off"></span> 退出</a></li>
                </ul>
            </li>
            <li class="am-hide-sm-only"><a href="javascript:;" id="admin-fullscreen"><span class="am-icon-arrows-alt"></span> <span class="admin-fullText">开启全屏</span></a></li>
        </ul>

    </div>
</header>

<div class="am-cf admin-main">
    <!-- sidebar start -->
    <div class="admin-sidebar am-offcanvas" id="admin-offcanvas">
        @include('include.admin._left-nav')
    </div>
    <!-- sidebar end -->

    <!-- content start -->
    <div class="admin-content">

        @yield('content')

        <footer class="admin-content-footer">
            <hr>
            <p class="am-padding-left">© 2018 {{ env('APP_ADMIN') }}</p>
        </footer>
    </div>
    <!-- content end -->

</div>

<script src="{{ asset('/statics/amaze/js/jquery.min.js') }}"></script>
<script src="{{ asset('/statics/amaze/js/amazeui.min.js') }}"></script>
<script src="{{ asset('/statics/amaze/js/app.js') }}"></script>
<script src="{{ asset('/statics/layer/layer.js') }}"></script>

<script>
    $('#user-nav').collapse();
    $('#product-nav').collapse();
    $('#order-nav').collapse();
    $('#news-nav').collapse();
    $('#picture-nav').collapse();
    $('#other-nav').collapse();
</script>

@yield('script')

</body>
</html>