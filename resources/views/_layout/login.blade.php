<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Cloud Admin | Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- STYLESHEETS --><!--[if lt IE 9]>
    <script src="{{ asset('CloudAdmin/js/flot/excanvas.min.js') }}"></script>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="{{ asset('CloudAdmin/css/cloud-admin.css') }}" >

    <link href="{{ asset('CloudAdmin/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- DATE RANGE PICKER -->
    <link rel="stylesheet" type="text/css" href="{{ asset('CloudAdmin/js/bootstrap-daterangepicker/daterangepicker-bs3.css') }}" />
    <!-- UNIFORM -->
    <link rel="stylesheet" type="text/css" href="{{ asset('CloudAdmin/js/uniform/css/uniform.default.min.css') }}" />
    <!-- ANIMATE -->
    <link rel="stylesheet" type="text/css" href="{{ asset('CloudAdmin/css/animatecss/animate.min.css') }}" />
    <!-- FONTS -->
    <link href='http://fonts.useso.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
</head>
<body class="login">
<!-- PAGE -->
<section id="page">
    <!-- HEADER -->
    <header>
        <!-- NAV-BAR -->
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div id="logo">
                        <a href="index.html"><img src="{{ asset('CloudAdmin/img/logo/logo-alt.png') }}" height="40" alt="logo name" /></a>
                    </div>
                </div>
            </div>
        </div>
        <!--/NAV-BAR -->
    </header>
    <!--/HEADER -->
    <!-- LOGIN -->
    <section id="login" class="visible">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="login-box-plain">
                        <h2 class="bigintro">agimadei~~</h2>
                        <div class="divide-40"></div>
                        <form role="form">
                            <div class="form-group">
                                <label for="exampleInputEmail1">用户名</label>
                                <i class="fa fa-user"></i>
                                <input type="text" class="form-control" id="username" >
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">密码</label>
                                <i class="fa fa-lock"></i>
                                <input type="password" class="form-control" id="password" >
                            </div>
                            <div class="form-actions">
                                <label class="checkbox"> <input type="checkbox" class="uniform" value=""> 记住我</label>
                                <button type="button" class="btn btn-danger" onclick="login()">登陆</button>
                            </div>
                        </form>
                        <div class="login-helpers">
                            <a href="#" onclick="swapScreen('forgot');return false;">忘记密码?</a> <br>
                            Don't have an account with us? <a href="#" onclick="swapScreen('register');return false;">马上注册!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/LOGIN -->
    <!-- REGISTER -->
    <section id="register">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="login-box-plain">
                        <h2 class="bigintro">注册新员工</h2>
                        <div class="divide-40"></div>
                        <form role="form">
                            <div class="form-group">
                                <label for="exampleInputUsername">用户名</label>
                                <i class="fa fa-user"></i>
                                <input type="text" class="form-control" id="exampleInputUsername" >
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">密码</label>
                                <i class="fa fa-lock"></i>
                                <input type="password" class="form-control" id="exampleInputPassword1" >
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword2">重复密码</label>
                                <i class="fa fa-check-square-o"></i>
                                <input type="password" class="form-control" id="exampleInputPassword2" >
                            </div>
                            <div class="form-actions">
                                <button type="submit" class="btn btn-success">注册</button>
                            </div>
                        </form>

                        <div class="login-helpers">
                            <a href="#" onclick="swapScreen('login');return false;"> 返回登陆</a> <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/REGISTER -->
    <!-- FORGOT PASSWORD -->
    <section id="forgot">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="login-box-plain">
                        <h2 class="bigintro">Reset Password</h2>
                        <div class="divide-40"></div>
                        <form role="form">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Enter your Email address</label>
                                <i class="fa fa-envelope"></i>
                                <input type="email" class="form-control" id="exampleInputEmail1" >
                            </div>
                            <div class="form-actions">
                                <button type="submit" class="btn btn-info">Send Me Reset Instructions</button>
                            </div>
                        </form>
                        <div class="login-helpers">
                            <a href="#" onclick="swapScreen('login');return false;">Back to Login</a> <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- FORGOT PASSWORD -->
</section>
<!--/PAGE -->
<!-- JAVASCRIPTS -->
<!-- Placed at the end of the document so the pages load faster -->
<!-- JQUERY -->
<script src="{{ asset('CloudAdmin/js/jquery/jquery-2.0.3.min.js') }}"></script>
<!-- JQUERY COOKIE-->
<script src="{{ asset('CloudAdmin/js/jquery-Cookie/jquery.cookie.min.js') }}"></script>
<!-- JQUERY UI-->
<script src="{{ asset('CloudAdmin/js/jquery-ui-1.10.3.custom/js/jquery-ui-1.10.3.custom.min.js') }}"></script>
<!-- BOOTSTRAP -->
<script src="{{ asset('CloudAdmin/bootstrap-dist/js/bootstrap.min.js') }}"></script>


<!-- UNIFORM -->
<script type="text/javascript" src="{{ asset('CloudAdmin/js/uniform/jquery.uniform.min.js') }}"></script>
<!-- CUSTOM SCRIPT -->
<script src="{{ asset('CloudAdmin/js/script.js') }}"></script>
<script>
    jQuery(document).ready(function() {
        App.setPage("login");  //Set current page
        App.init(); //Initialise plugins and elements
    });
</script>
<script type="text/javascript">
    function swapScreen(id) {
        jQuery('.visible').removeClass('visible animated fadeInUp');
        jQuery('#'+id).addClass('visible animated fadeInUp');
    }
</script>
<!-- /JAVASCRIPTS -->
<script>
    $(function(){
    });

    function login(){
        var username = $("#username").val();
        var password = $("#password").val();
        $.ajax({
            url:'doLogin',
            dataType:'json',
            data:{
                username:username,
                password:password
            },
            type:'get',
            timeout:10000,
            error:function(){
                alert('请求超时！请检查网络，稍后重试！');
            },
            success:function(jsonData){
                if(jsonData.result){
                    setCookie(jsonData.user);
                    window.location.href='home';
                }
            }
        });

        function setCookie(user){
            $.cookie('user',JSON.stringify(user), { expires: 7, path: '/' });
        }
    }
</script>
</body>
</html>