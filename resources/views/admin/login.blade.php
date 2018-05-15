<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>{{ env('APP_ADMIN') }}</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="stylesheet" href="{{  asset('/statics/amaze/css/amazeui.min.css') }}"/>
    <style>
        .header {
            text-align: center;
        }
        .header h1 {
            font-size: 200%;
            color: #333;
            margin-top: 30px;
        }
        .header p {
            font-size: 14px;
        }
    </style>
</head>
<body>

<div class="header">
    <div class="am-g">
        <h1>{{ env('APP_ADMIN') }}</h1>
    </div>
    <hr />
</div>

<div class="am-g">
    <div class="am-u-lg-6 am-u-md-8 am-u-sm-centered">
        <form method="post" action="{{ url('/admin/login') }}" class="am-form" data-am-validator>
            {{ csrf_field() }}
            <label for="admin_name">用户名:</label>
            <input type="text" name="admin_name" id="admin_name" placeholder="输入用户名" required>
            <br>
            <label for="password">密码:</label>
            <input type="password" name="password" id="password" placeholder="输入密码" required>
            <br />
            <div class="am-cf">
                <input type="submit" value="登 录" class="am-btn am-btn-primary am-btn-sm am-fl">
            </div>
        </form>
    </div>
</div>

<script src="{{ asset('/statics/amaze/js/jquery.min.js') }}"></script>
<script src="{{ asset('/statics/amaze/js/amazeui.min.js') }}"></script>
<script src="{{ asset('/statics/layer/layer.js') }}"></script>

@if(Session::has('message'))
    @if(Session::get('message')==1)
        <script>layer.msg('用户名不存在或者无权访问!'); </script>
    @elseif(Session::get('message')==0)
        <script>layer.msg('密码错误!'); </script>
    @elseif(Session::get('message')==2)
        <script>layer.msg('您无权访问该资源，请登陆！'); </script>
    @elseif(Session::get('message')==3)
        <script>layer.msg('退出成功!'); </script>
    @endif
@elseif(count($errors) > 0)
    @foreach ($errors->all() as $error)
        <script>layer.msg('{{ $error }}');</script>
    @endforeach
@endif

</body>
</html>