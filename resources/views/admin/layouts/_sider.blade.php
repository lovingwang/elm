<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="/bootstrap/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>主人！您好</p>
                <a href="javascript:;"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="javascript:;" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active treeview">
                <a href="javascript:;">
                    <i class="fa fa-dashboard"></i> <span>系统管理平台</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="{{route('admin.index')}}"><i class="fa fa-circle-o"></i> 管理员管理</a></li>
                    <li ><a href="{{route('shop_category.index')}}"><i class="fa fa-circle-o"></i> 商家分类管理</a></li>
                    <li><a href="{{route('shop.index')}}"><i class="fa fa-circle-o"></i> 商家信息管理</a></li>
                    <li><a href="{{route('user.index')}}"><i class="fa fa-circle-o"></i> 商家管理</a></li>
                    <li><a href="{{route('article.index')}}"><i class="fa fa-circle-o"></i> 活动管理</a></li>
                </ul>
            </li>


            <li class="treeview">
                <a href="javascript:;">
                    <i class="fa fa-pie-chart"></i>
                    <span>新闻</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>

            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-laptop"></i>
                    <span>休闲</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>

            </li>
            <li class="treeview">
                <a href="javascript:;">
                    <i class="fa fa-edit"></i> <span>娱乐</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>

            <li class="treeview">
                <a href="javascript:;">
                    <i class="fa fa-table"></i> <span>Tables</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>

            </li>
            <li>

            </li>
            <li>

                    <i class="fa fa-envelope"></i> <span>Mailbox</span>

                </a>
            </li>
            <li class="treeview">
                <a href="javascript:;">
                    <i class="fa fa-folder"></i> <span>Examples</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>

            </li>
            <li class="treeview">
                <a href="javascript:;">
                    <i class="fa fa-share"></i> <span>Multilevel</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="javascript:;"><i class="fa fa-circle-o"></i> Level One</a></li>
                    <li class="treeview">
                        <a href="javascript:;"><i class="fa fa-circle-o"></i> Level One
                            <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="javascript:;"><i class="fa fa-circle-o"></i> Level Two</a></li>
                            <li class="treeview">
                                <a href="javascript:;"><i class="fa fa-circle-o"></i> Level Two
                                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="javascript:;"><i class="fa fa-circle-o"></i> Level Three</a></li>
                                    <li><a href="javascript:;"><i class="fa fa-circle-o"></i> Level Three</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="javascript:;"><i class="fa fa-circle-o"></i> Level One</a></li>
                </ul>
            </li>
            <li><a href="javascript:;"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
            <li class="header">LABELS</li>
            <li><a href="javascript:;"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
            <li><a href="javascript:;"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
            <li><a href="javascript:;"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>