<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
    Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- bootstrap-css -->
    <link rel="stylesheet" href="{{asset('public/backend/css/bootstrap.min.css')}}" >
    <!-- //bootstrap-css -->
    <!-- Custom CSS -->
    <link href="{{asset('public/backend/css/style.css')}}" rel='stylesheet' type='text/css' />
    <link href="{{asset('public/backend/css/style-responsive.css')}}" rel="stylesheet"/>
    <!-- font CSS -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <!-- font-awesome icons -->
    <link rel="stylesheet" href="{{asset('public/backend/css/font.css')}}" type="text/css"/>
    <link href="{{asset('public/backend/css/font-awesome.css')}}" rel="stylesheet"> 
    <link rel="stylesheet" href="{{asset('public/backend/css/morris.css')}}" type="text/css"/>
    <!-- calendar -->
    <link rel="stylesheet" href="{{asset('public/backend/css/monthly.css')}}">
    <!-- //calendar -->
    <!-- //font-awesome icons -->
    <script src="{{asset('public/backend/js/jquery2.0.3.min.js')}}"></script>
    <script src="{{asset('public/backend/js/raphael-min.js')}}"></script>
    <script src="{{asset('public/backend/js/morris.js')}}"></script>
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{asset('public/frontend/css/style.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('public/frontend/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('public/frontend/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('public/frontend/css/themify-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('public/frontend/css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('public/frontend/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('public/frontend/css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('public/frontend/css/jquery-ui.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('public/frontend/css/slicknav.min.css')}}" type="text/css">

</head>
<body>
    <section id="container" style="background-color: white;">
    <!--header start-->
    <header class="header fixed-top clearfix"  style="background-color: white;" >

    	<div class="header-top">
            <div class="container">
			<div class="col-lg-2 col-md-2">
                        <div class="logo">
                            <a href="{{URL::to('index.html')}}"><img style="width:1700px; height: 50px" src="{{asset('public/frontend/img/logo-1.png')}}"
                                    height="25" alt=""></a>
                        </div>
                    </div>
                <div class="ht-right">
                    <a class="login-panel"><i class="fa fa-user"></i>Admin</a>
                    <div class="top-social">
                        <a href=""><i class="ti-facebook"></i></a>
                        <a href=""><i class="ti-twitter-alt"></i></a>
                        <a href=""><i class="ti-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>

		<div class="nav-item">
            <div class="container">
                <div class="nav-depart">
                    <div class="depart-btn">
                        <i class="ti-menu"></i>
                        <span>ADMIN</span>
                        
                    </div>
                </div>
                <nav class="nav-menu mobile-menu">
                    <ul>
                        <li class="active">
                        <a href="dashboard">TỔNG QUAN</a></li>
                        <li><a href="">QUẢN LÝ</a></li>
                        <li><a href="">BÁO CÁO</a></li>
                        <li><a href="">CÀI ĐẶT</a></li>
						<li><a href="">HỆ THỐNG</a></li>
                    </ul>
                </nav>
                <div id="mobile-menu-wrap">

                </div>
            </div>
        </div>
    
	</header>
<!--header end-->
<!--sidebar start-->

    <aside style="padding-top:45px;">
        <div id="sidebar" class="nav-collapse">
            <!-- sidebar menu start-->
            <div class="leftside-navigation" style="background-color: white;">
                <ul class="sidebar-menu" id="nav-accordion">
                    <li>
                        <a href="{{URL::to('admin/dashboard')}}">
                            <i class="fa fa-dashboard" style="color: #191919;"></i>
                            <span style="color: #191919;">TỔNG QUAN</span>
                        </a>
					</li>
					
					<li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-book" style="color: #191919;"></i>
                            <span style="color: #191919;">SẢN PHẨM</span>
                        </a>
						<ul class="sub">
							<li><a href="{{URL::to('admin/all-product')}}" style="color: #191919;">TẤT CẢ SẢN PHẨM</a></li>
							<li><a href="{{URL::to('admin/add-product')}}" style="color: #191919;">THÊM SẢN PHẨM</a></li>
						</ul>
					</li>

                    <li class="sub-menu">
                        <a href="{{URL::to('admin/all-receipt')}}" >
                            <i class="fa fa-envelope" style="color: #191919;"></i>
                            <span style="color: #191919;">ĐƠN HÀNG</span>
                        </a>
					</li>

                        
                </ul>            
            </div>
            <!-- sidebar menu end-->
        </div>
    </aside>
<!--sidebar end-->
<!--main content start-->
    <section id="main-content">
	<section class="wrapper">
		@yield('admin_content')
    </section>

    <div class="footer" style="background-color: #191919;">
        <div class="copyright-text" style="color: white;">
            Copyright ©
            <script>document.write(new Date().getFullYear());</script> Genz | All Rights Reserved. <i class="fa fa-heart-0" aria-hidden="true"></i>
        </div>
	</div>
</body>

    <script src="{{asset('public/frontend/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('public/frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('public/frontend/js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('public/frontend/js/jquery.countdown.min.js')}}"></script>
    <script src="{{asset('public/frontend/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('public/frontend/js/jquery.zoom.min.js')}}"></script>
    <script src="{{asset('public/frontend/js/jquery.dd.min.js')}}"></script>
    <script src="{{asset('public/frontend/js/jquery.slicknav.js')}}"></script>
    <script src="{{asset('public/frontend/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('public/frontend/js/main.js')}}"></script>   



</html>
