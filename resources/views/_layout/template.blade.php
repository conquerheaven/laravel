<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Cloud Admin | Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" type="text/css" href="{{ asset('CloudAdmin/css/cloud-admin.css') }}" >
    <link rel="stylesheet" type="text/css"  href="{{ asset('CloudAdmin/css/themes/default.css') }}" id="skin-switcher" >
    <link rel="stylesheet" type="text/css"  href="{{ asset('CloudAdmin/css/responsive.css') }}" >
    <link href="{{ asset('CloudAdmin/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- ANIMATE -->
    <link rel="stylesheet" type="text/css" href="{{ asset('CloudAdmin/css/animatecss/animate.min.css') }}" />
    <!-- DATE RANGE PICKER -->
    <link rel="stylesheet" type="text/css" href="{{ asset('CloudAdmin/js/bootstrap-daterangepicker/daterangepicker-bs3.css') }}" />
    <!-- TODO -->
    <link rel="stylesheet" type="text/css" href="{{ asset('CloudAdmin/js/jquery-todo/css/styles.css') }}" />
    <!-- FULL CALENDAR -->
    <link rel="stylesheet" type="text/css" href="{{ asset('CloudAdmin/js/fullcalendar/fullcalendar.min.css') }}" />
    <!-- GRITTER -->
    <link rel="stylesheet" type="text/css" href="{{ asset('CloudAdmin/js/gritter/css/jquery.gritter.css') }}" />
    <!-- FONTS -->
    <!-- JQUERY UI-->
    <link rel="stylesheet" type="text/css" href="{{ asset('CloudAdmin/js/jquery-ui-1.10.3.custom/css/custom-theme/jquery-ui-1.10.3.custom.min.css') }}" />
    <!-- JQGRID -->
    <link rel="stylesheet" type="text/css" href="{{ asset('CloudAdmin/js/jqgrid/css/ui.jqgrid.min.css') }}" />
    <!-- SELECT2 -->
    <link rel="stylesheet" type="text/css" href="{{ asset('CloudAdmin/js/select2/select2.min.css') }}" />
    <!-- DATE Time PICKER -->
    <link rel="stylesheet" type="text/css" href="{{ asset('CloudAdmin/js/bootstrap-datetimepicker/bootstrap-datetimepicker.min.css') }}" />
    <!-- DATA TABLES -->
    <link rel="stylesheet" type="text/css" href="{{ asset('CloudAdmin/js/datatables/media/css/jquery.dataTables.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('CloudAdmin/js/datatables/media/assets/css/datatables.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('CloudAdmin/js/datatables/extras/TableTools/media/css/TableTools.min.css') }}" />

    <!-- JAVASCRIPTS -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- JQUERY -->
    <script src="{{ asset('CloudAdmin/js/jquery/jquery-2.0.3.min.js') }}"></script>
    <!-- JQUERY UI-->
    <script src="{{ asset('CloudAdmin/js/jquery-ui-1.10.3.custom/js/jquery-ui-1.10.3.custom.min.js') }}"></script>
    <!-- BOOTSTRAP -->
    <script src="{{ asset('CloudAdmin/bootstrap-dist/js/bootstrap.min.js') }}"></script>


    <!-- DATE RANGE PICKER -->
    <script src="{{ asset('CloudAdmin/js/bootstrap-daterangepicker/moment.min.js') }}"></script>

    <script src="{{ asset('CloudAdmin/js/bootstrap-daterangepicker/daterangepicker.min.js') }}"></script>
    <!-- SLIMSCROLL -->
    <script type="text/javascript" src="{{ asset('CloudAdmin/js/jQuery-slimScroll-1.3.0/jquery.slimscroll.min.js') }}"></script>
    <!-- SLIMSCROLL -->
    <script type="text/javascript" src="{{ asset('CloudAdmin/js/jQuery-slimScroll-1.3.0/jquery.slimscroll.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('CloudAdmin/js/jQuery-slimScroll-1.3.0/slimScrollHorizontal.min.js') }}"></script>
    <!-- BLOCK UI -->
    <script type="text/javascript" src="{{ asset('CloudAdmin/js/jQuery-BlockUI/jquery.blockUI.min.js') }}"></script>
    <!-- SPARKLINES -->
    <script type="text/javascript" src="{{ asset('CloudAdmin/js/sparklines/jquery.sparkline.min.js') }}"></script>
    <!-- EASY PIE CHART -->
    <script src="{{ asset('CloudAdmin/js/jquery-easing/jquery.easing.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('CloudAdmin/js/easypiechart/jquery.easypiechart.min.js') }}"></script>
    <!-- TODO -->
    <script type="text/javascript" src="{{ asset('CloudAdmin/js/jquery-todo/js/paddystodolist.js') }}"></script>
    <!-- TIMEAGO -->
    <script type="text/javascript" src="{{ asset('CloudAdmin/js/timeago/jquery.timeago.min.js') }}"></script>
    <!-- FULL CALENDAR -->
    <script type="text/javascript" src="{{ asset('CloudAdmin/js/fullcalendar/fullcalendar.min.js') }}"></script>
    <!-- COOKIE -->
    <script type="text/javascript" src="{{ asset('CloudAdmin/js/jQuery-Cookie/jquery.cookie.min.js') }}"></script>
    <!-- GRITTER -->
    <script type="text/javascript" src="{{ asset('CloudAdmin/js/gritter/js/jquery.gritter.min.js') }}"></script>
    <!-- CUSTOM SCRIPT -->
    <script src="{{ asset('CloudAdmin/js/script.js') }}"></script>
    <!-- JQGRID -->
    <script type="text/javascript" src="{{ asset('CloudAdmin/js/jqgrid/js/grid.locale-en.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('CloudAdmin/js/jqgrid/js/jquery.jqGrid.min.js') }}"></script>
    <!-- SELECT2 -->
    <script type="text/javascript" src="{{ asset('CloudAdmin/js/select2/select2.min.js') }}"></script>
    <!--jquery-validate-->
    <script type="text/javascript" src="{{ asset('CloudAdmin/js/jquery-validate/jquery.validate.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('CloudAdmin/js/jquery-validate/additional-methods.min.js') }}"></script>
    <!-- DATE TIME PICKER -->
    <script src="{{ asset('CloudAdmin/js/bootstrap-datetimepicker/bootstrap-datetimepicker.js') }}"></script>
    <script src="{{ asset('CloudAdmin/js/bootstrap-datetimepicker/bootstrap-datetimepicker.zh-CN.js') }}"></script>

    <!-- DATA TABLES -->
    <script type="text/javascript" src="{{ asset('CloudAdmin/js/datatables/media/js/jquery.dataTables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('CloudAdmin/js/datatables/media/assets/js/datatables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('CloudAdmin/js/datatables/extras/TableTools/media/js/TableTools.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('CloudAdmin/js/datatables/extras/TableTools/media/js/ZeroClipboard.min.js') }}"></script>
</head>
<body>
<!-- HEADER -->
<header class="navbar clearfix" id="header">
    <div class="container">
        <div class="navbar-brand">
            <!-- COMPANY LOGO -->
            <a href="index.html">
                <img src="{{ asset('CloudAdmin/img/logo/logo.png')}}" alt="Cloud Admin Logo" class="img-responsive" height="30" width="120">
            </a>
            <!-- /COMPANY LOGO -->
            <!-- TEAM STATUS FOR MOBILE -->
            <div class="visible-xs">
                <a href="#" class="team-status-toggle switcher btn dropdown-toggle">
                    <i class="fa fa-users"></i>
                </a>
            </div>
            <!-- /TEAM STATUS FOR MOBILE -->
            <!-- SIDEBAR COLLAPSE -->
            <div id="sidebar-collapse" class="sidebar-collapse btn">
                <i class="fa fa-bars"
                   data-icon1="fa fa-bars"
                   data-icon2="fa fa-bars" ></i>
            </div>
            <!-- /SIDEBAR COLLAPSE -->
        </div>

        <!-- /NAVBAR LEFT -->
        <!-- BEGIN TOP NAVIGATION MENU -->
        <ul class="nav navbar-nav pull-right">
            <!-- BEGIN USER LOGIN DROPDOWN -->
            <li class="dropdown user" id="header-user">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <img alt="" src="{{ asset('CloudAdmin/img/avatars/avatar3.jpg') }}" />
                    <span class="username" id="username">admin</span>
                    <i class="fa fa-angle-down"></i>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="#"><i class="fa fa-user"></i> 我的资料</a></li>
                    <li><a href="#" onclick="Logout()"><i class="fa fa-power-off"></i> 登出</a></li>
                </ul>
            </li>
            <!-- END USER LOGIN DROPDOWN -->
        </ul>
        <!-- END TOP NAVIGATION MENU -->
    </div>
</header>
<!--/HEADER -->
<!-- PAGE -->
<section id="page">
    <!-- SIDEBAR -->
    <div id="sidebar" class="sidebar">
        <div class="sidebar-menu nav-collapse">
            <div class="divide-20"></div>
            <!-- SEARCH BAR -->
            <div id="search-bar">
                <input class="search" type="text" placeholder="Search"><i class="fa fa-search search-icon"></i>
            </div>
            <!-- /SEARCH BAR -->

            <!-- SIDEBAR QUICK-LAUNCH -->
            <!-- <div id="quicklaunch">
            <!-- /SIDEBAR QUICK-LAUNCH -->

            <!-- SIDEBAR MENU -->
            <ul>
                <li class="" id="home">
                    <a href="/home">
                        <i class="fa fa-tachometer fa-fw"></i> <span class="menu-text">仪表盘</span>
                        <span class="selected"></span>
                    </a>
                </li>
                <li class="has-sub" id="UserManage">
                    <a href="javascript:;" class="">
                        <i class="fa fa-bookmark-o fa-fw"></i> <span class="menu-text">客户管理</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li id="queryKehu"><a class="" href="/UserManage/queryKehu"><span class="sub-menu-text">查询客户信息</span></a></li>
                        <li id="addKehu"><a class="" href="/UserManage/addKehu"><span class="sub-menu-text">添加客户信息</span></a></li>
                    </ul>
                </li>
                <li class="has-sub" id="StaffManage">
                    <a href="javascript:;" class="">
                        <i class="fa fa-bookmark-o fa-fw"></i> <span class="menu-text">人事管理</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li id="bmzwManage"><a class="" href="/StaffManage/bmzwManage"><span class="sub-menu-text">部门职位管理</span></a></li>
                        <li id="addStaff"><a class="" href="/StaffManage/addStaff"><span class="sub-menu-text">员工录入</span></a></li>
                        <li id="queryStaff"><a class="" href="/StaffManage/queryStaff"><span class="sub-menu-text">员工列表</span></a></li>
                    </ul>
                </li>
                <li class="has-sub" id="SaleManage">
                    <a href="javascript:;" class="">
                        <i class="fa fa-bookmark-o fa-fw"></i> <span class="menu-text">销售管理</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li id="followUp"><a class="" href="/SaleManage/followUp"><span class="sub-menu-text">客户跟踪</span></a></li>
                        <li id="addOrder"><a class="" href="/SaleManage/addOrder"><span class="sub-menu-text">下单</span></a></li>
                        <li><a class="" href="#"><span class="sub-menu-text">二级菜单3</span></a></li>
                    </ul>
                </li>
                <li class="has-sub">
                    <a href="javascript:;" class="">
                        <i class="fa fa-bookmark-o fa-fw"></i> <span class="menu-text">一级菜单4</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="#"><span class="sub-menu-text">二级菜单1</span></a></li>
                        <li><a class="" href="#"><span class="sub-menu-text">二级菜单2</span></a></li>
                        <li><a class="" href="#"><span class="sub-menu-text">二级菜单3</span></a></li>
                    </ul>
                </li>
            </ul>
            <!-- /SIDEBAR MENU -->
        </div>
    </div>
    <!-- /SIDEBAR -->
    <div id="main-content">
        <div class="container">
            <div class="row">
                <div id="content" class="col-lg-12">
                    <!-- PAGE HEADER-->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-header">
                                <!-- STYLER -->

                                <!-- /STYLER -->
                                <!-- BREADCRUMBS -->
                                @yield('header')

                            </div>
                        </div>
                    </div>
                    <!-- /PAGE HEADER -->
                    <!-- DASHBOARD CONTENT -->
                    @yield('content')
                    <!-- /CALENDAR & CHAT -->
                    <div class="footer-tools">
							<span class="go-top">
								<i class="fa fa-chevron-up"></i> Top
							</span>
                    </div>
                </div><!-- /CONTENT-->
            </div>
        </div>
    </div>
</section>
<!--/PAGE -->

<script>
    var user = $.parseJSON($.cookie('user'));
    jQuery(document).ready(function() {
        App.setPage("index");  //Set current page
        App.init(); //Initialise plugins and elements
        $("#username").val(user['name']);
    });

    function Logout(){
        $.cookie('user',null, { expires: 7, path: '/' });
        $.ajax({
            url:'/doLogout',
            type:'get',
            success:function(jsonData){
                window.location.href='/login';
            }
        });
    }
</script>
<!-- /JAVASCRIPTS -->
</body>
</html>