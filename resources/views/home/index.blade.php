<html lang="zh-CN"><head>
    <meta charset="UTF-8">
    <meta name="baidu-site-verification" content="173oOEe7Tg">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="陈小龙">
    <meta name="description" content="陈小龙">
    <title>{{ env('APP_NAME') }}</title>
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway';
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }
        .full-height {
            height: 100vh;
        }
        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }
        .position-ref {
            position: relative;
        }
        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }
        .content {
            text-align: center;
        }
        .title {
            font-size: 84px;
        }
        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 16px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
        }
        .m-b-md {
            margin-bottom: 30px;
        }
        .title a img {
            max-height: none!important;
            width: 120px;
            height: 120px;
            overflow: hidden;
            border-radius: 50%;
            background: #FFF;
            box-shadow: rgba(255,255,255,1) 0 0 0 5px,rgba(0,0,0,1) 0 0 5px 4px;
            -webkit-transition: -webkit-transform 600ms;
            -moz-transition: -moz-transform 600ms;
            transition: transform 600ms;
        }
        .title a img:hover {
            -webkit-transform: rotate(360deg);
            -moz-transform: rotate(360deg);
            transform: rotate(360deg);
        }
    </style>
</head>
<body>

<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            <a href="/">
                <img src="{{ asset('/uploads/cxl.jpg') }}" alt="陈小龙">
            </a>
        </div>
        <div class="links" style="padding-bottom: 20px;">
            <a href="javascript:;">{{ env('APP_NAME') }}</a>
        </div>
        <div class="links">
            <a target="_blank" rel="noreferrer noopener" href="http://www.ymc9.com">义门陈文化研究会</a>
            <a target="_blank" rel="noreferrer noopener" href="http://www.ymc9.com/home">江州义门陈文化社区</a>
            <a target="_blank" rel="noreferrer noopener" href="http://snsm.ymc9.cn">三能数码科技工作室</a>
        </div>
    </div>
</div>

</body>
</html>