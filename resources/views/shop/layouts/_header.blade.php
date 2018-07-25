
<div class="header">
    <div class="header_top_right">
        @auth
            <ul>
        <li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{\Illuminate\Support\Facades\Auth::user()->name}} <span class="caret"></span></a>
            </li>
            <li><a href="#">注销</a></li> </ul>
        @endauth
        <ul>
            @guest
            <li><a href="#">登录</a></li>
            <li><a href="#">注册</a></li>
            @endguest
        </ul>
    </div>
    <div class="clear"></div>
    <div class="header-bot">
        <div class="logo">
            <a href="index.html"><img src="/cpts/images/logo.png" alt=""></a>
        </div>

        <div class="clear"></div>
    </div>

    <div class="clear"></div>
</div>



