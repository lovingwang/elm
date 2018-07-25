<header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>A</b>LT</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>菜鸟联盟</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- Messages: style can be found in dropdown.less-->

                <!-- Notifications: style can be found in dropdown.less -->

                <!-- Tasks: style can be found in dropdown.less -->

                    {{--<ul class="dropdown-menu">--}}
                        {{--<li class="header">You have 9 tasks</li>--}}
                        {{--<li>--}}
                            {{--<!-- inner menu: contains the actual data -->--}}
                            {{--<ul class="menu">--}}
                                {{--<li><!-- Task item -->--}}
                                    {{--<a href="#">--}}
                                        {{--<h3>--}}
                                            {{--Design some buttons--}}
                                            {{--<small class="pull-right">20%</small>--}}
                                        {{--</h3>--}}
                                        {{--<div class="progress xs">--}}
                                            {{--<div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"--}}
                                                 {{--aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">--}}
                                                {{--<span class="sr-only">20% Complete</span>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                                {{--<!-- end task item -->--}}
                                {{--<li><!-- Task item -->--}}
                                    {{--<a href="#">--}}
                                        {{--<h3>--}}
                                            {{--Create a nice theme--}}
                                            {{--<small class="pull-right">40%</small>--}}
                                        {{--</h3>--}}
                                        {{--<div class="progress xs">--}}
                                            {{--<div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar"--}}
                                                 {{--aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">--}}
                                                {{--<span class="sr-only">40% Complete</span>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                                {{--<!-- end task item -->--}}
                                {{--<li><!-- Task item -->--}}
                                    {{--<a href="#">--}}
                                        {{--<h3>--}}
                                            {{--Some task I need to do--}}
                                            {{--<small class="pull-right">60%</small>--}}
                                        {{--</h3>--}}
                                        {{--<div class="progress xs">--}}
                                            {{--<div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar"--}}
                                                 {{--aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">--}}
                                                {{--<span class="sr-only">60% Complete</span>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                                {{--<!-- end task item -->--}}
                                {{--<li><!-- Task item -->--}}
                                    {{--<a href="#">--}}
                                        {{--<h3>--}}
                                            {{--Make beautiful transitions--}}
                                            {{--<small class="pull-right">80%</small>--}}
                                        {{--</h3>--}}
                                        {{--<div class="progress xs">--}}
                                            {{--<div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar"--}}
                                                 {{--aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">--}}
                                                {{--<span class="sr-only">80% Complete</span>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                                {{--<!-- end task item -->--}}
                            {{--</ul>--}}
                        {{--</li>--}}
                        {{--<li class="footer">--}}
                            {{--<a href="#">View all tasks</a>--}}
                        {{--</li>--}}
                    {{--</ul>--}}
                </li>

                @auth
                    <li>
                        <a href="#" data-toggle="control-sidebar">欢迎你!   {{ \Illuminate\Support\Facades\Auth::guard('admin')->user()->name}}</a>
                    </li>

                    <li>
                        <a href="{{route('admin.logout')}}" >注销</a>
                    </li>
                @endauth

                @guest
                    <li class="dropdown user user-menu">
                        <a href="{{route('admin.login')}}" >登录</a>
                        </a>

                    </li>
            @endguest


                <!-- User Account: style can be found in dropdown.less -->

                <!-- Control Sidebar Toggle Button -->

            </ul>
        </div>
    </nav>
</header>