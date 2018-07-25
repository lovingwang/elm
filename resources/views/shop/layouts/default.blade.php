<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <link href="/cpts/css/style.css" rel="stylesheet" type="text/css" media="all" />

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>@yield("title","title")</title>

    <!-- Bootstrap -->
    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim 和 Respond.js 是为了让 IE8 支持 HTML5 元素和媒体查询（media queries）功能 -->
    <!-- 警告：通过 file:// 协议（就是直接将 html 页面拖拽到浏览器中）访问页面时 Respond.js 不起作用 -->
    <!--[if lt IE 9]>
    <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style type="text/css">
        *{ margin:0px; padding:0px;}
        #nav{ width:600px; height:40px; margin:0 auto;}
        #na ul{ list-style:none;}
        #na ul li{ float:left; line-height:40px; text-align:center; position:relative;}
        #na ul li a{ text-decoration:none; color:#000; display:block;padding:0px 10px;}
        #na ul li a:hover{ color:#FFF; background:#333}
        #na ul li ul{ position:absolute; display:none;}
        #na ul li ul li{ float:none; line-height:30px; text-align:left;}
        #na ul li ul li a{ width:100%;}
        #na ul li ul li a:hover{ background-color:#06f;}
        #na ul li:hover ul{ display:block}
    </style>


</head>
<body>

<div class="wrap">
    <div class="total">
@include('shop.layouts._header')
        <div class="menu">
            <div class="top-nav">
                <ul>
                    <li ><a href="{{route('user.index0')}}">首页</a></li>
                    <li><a href="{{route('menu_categories.index')}}">菜品管理</a></li>
                    <li ><a href="{{route('menu.index')}}">菜单管理</a></li>
                    <li><a href="{{route('user.index1')}}">简介</a></li>
                    <li><a href="{{route('user.index2')}}">关于我们</a></li>
                    <li><a href="{{route('user.index3')}}">联系我们</a></li>
                </ul>
                <div class="clear"></div>
            </div>
        </div>
        <div class="main">
            <div class="prod">
                @include("shop.layouts._errors")
                @include("shop.layouts._msg")
                @yield("content")
                <div class="clear"></div>
            </div>


            <div class="content-last">
                <div class="col_1_of_4 span_1_of_4">
                    <img src="/cpts/images/glass.png" alt="">
                    <h3>Lorem Ipsum is simply</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                    <button class="btn1 btn-8 btn-8a">Read More</button>
                </div>
                <div class="col_1_of_4 span_1_of_4">
                    <img src="/cpts/images/plate.png" alt="">
                    <h3>Lorem Ipsum is simply</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                    <button class="btn1 btn-8 btn-8a">Read More</button>
                </div>
                <div class="col_1_of_4 span_1_of_4">
                    <img src="/cpts/images/icecream.png" alt="">
                    <h3>Lorem Ipsum is simply</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                    <button class="btn1 btn-8 btn-8a">Read More</button>
                </div>
                <div class="col_1_of_4 span_1_of_4">
                    <img src="/cpts/images/leaf.png" alt="">
                    <h3>Lorem Ipsum is simply</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                    <button class="btn1 btn-8 btn-8a">Read More</button>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>
</div>
@include('shop.layouts._footer')


</body>
</html>