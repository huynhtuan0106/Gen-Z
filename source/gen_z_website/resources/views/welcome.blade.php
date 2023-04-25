
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="codelean Template">
    <meta name="keywords" content="codelean, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GEN Z</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{asset('public/frontend/css/style.css')}}" type="text/css">
    <link rel="stylesheet" href="public/frontend/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="public/frontend/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="public/frontend/css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="public/frontend/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="public/frontend/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="public/frontend/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="public/frontend/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="public/frontend/css/slicknav.min.css" type="text/css">

</head>

<body>
    <!-- Start coding here -->
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="header-top">
            <div class="container">

                <div class="ht-right">
                    <div class="login-panel"><i class="fa fa-user"></i>Customer</div>
                    <div class="lan-selector">
                        <select class="language_drop" name="countries" id="countries" style="width:300px;">
                            <option value="yt" data-image="public/frontend/img/flag-2.jpg" data-imagecss="flag yu" data-title="English">
                                VN</option>
                        </select>
                    </div>
                    <div class="top-social">
                        <a href=""><i class="ti-facebook"></i></a>
                        <a href=""><i class="ti-twitter-alt"></i></a>
                        <a href=""><i class="ti-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="inner-header">
                <div class="row">
                    <div class="col-lg-2 col-md-2">
                        <div class="logo">
                            <a href="index.html"><img style="width:1700px; height: 50px" src="public/frontend/img/logo-1.png"
                                    height="25" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7">
                        <div class="advanced-search">
                            <button type="button" class="category-btn">SALE THẢ GA</button>

                            <div class="input-group">
                                <input type="text" placeholder="Nhập sản phẩm bạn muốn tìm">
                                <button type="button"> <i class="ti-search"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 text-right">
                        <ul class="nav-right">
                            <li class="heart-icon">
                                <a href="#">
                                    <i class="icon_heart_alt"></i>
                                </a>
                            </li>
                            <li class="cart-icon">
                                <a href="#">
                                    <i class="icon_bag_alt"></i>
                                </a>
                                <div class="cart-hover">
                                    <div class="select-button">
                                        <a href="shopping-cart" class="primary-btn view-card">Giỏ hàng</a>
                                        <a href="check-out" class="primary-btn checkout-btn">Đặt hàng</a>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="nav-item">
            <div class="container">
                <div class="nav-depart">
                    <div class="depart-btn">
                        <i class="ti-menu"></i>
                        <span>Danh mục</span>
                        <ul class="depart-hover">
                            @foreach ($danhmuc as $dm)
                            <li><a href="{{URL::to('danhmuc/'.$dm->slug.'/'.$dm->id)}}">{{$dm->name}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <nav class="nav-menu mobile-menu">
                    <ul>
                        <li class="active"><a href="index.html">Trang chủ</a></li>
                        <li><a >Khuyến mãi</a></li>
                        <li><a >Sản phẩm mới</a></li>
                        <li><a >Liên hệ</a></li>
                        <li><a >Giới thiệu</a></li>
                    </ul>
                </nav>
                <div id="mobile-menu-wrap">

                </div>
            </div>
        </div>

    </header>
    <!-- Header Section End -->

    <!-- Hero section begin -->
    <section class="hero-section">
        <div class="hero-items owl-carousel">
            <div class="single-hero-items set-bg" data-setbg="public/frontend/img/out_banner.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <h1 style="color:white">Black friday</h1>
                        </div>
                    </div>
                    <div class="off-card">
                        <h2>Sale <span>50%</span></h2>
                    </div>
                </div>
            </div>
            <div class="hero-items owl-carousel">
                <div class="single-hero-items set-bg" data-setbg="public/frontend/img/genz1.png">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5">
                                <h1 style="color:#f3af66">Tháng 12 rực rỡ</h1>
                            </div>
                        </div>
                        <div class="off-card">
                            <h2>Sale <span>20%</span></h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero-items owl-carousel">
                <div class="single-hero-items set-bg" data-setbg="public/frontend/img/genz2.png">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- Banner section begin -->
    <div class="banner-section spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="single-banner">
                        <img src="public/frontend/img/banner-1.jpg" alt="">
                        <div class="inner-text">
                            <h4>Quý ông</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-banner">
                        <img src="public/frontend/img/banner-2.jpg" alt="">
                        <div class="inner-text">
                            <h4>Phụ nữ</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-banner">
                        <img src="public/frontend/img/banner-3.jpg" alt="">
                        <div class="inner-text">
                            <h4>Trẻ em</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Women banner section begin -->
    <section class="women-banner spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="product-large set-bg" data-setbg="public/frontend/img/products/women-large.jpg">
                        <h2>Best Seller</h2>
                    </div>
                </div>
                <div class="col-lg-8 offset-lg-1">
                    <div class="filter-control">
                        <ul>
                            <li class="active">Sản phẩm bán chạy</li>
                        </ul>
                    </div>
                    <div class="product-slider owl-carousel">
                        @foreach($ao as $value)
                        <div class="product-item">
                            <div class="pi-pic" >
                                <?php
                                    $v = $value->thumbnail;
                                    $pic = "public/uploads/"."$v";
                                ?>
                                <a href="{{URL::to('/product/'.$value->id)}}"><img src={{$pic}} alt=""></a>
                                <div class="sale">Sale</div>
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <form action="{{URL::to('save-cart')}}" method="POST">
                                    {{ csrf_field() }}
                                <ul>
                                    <input name="id_hidden" type="hidden" value="{{$value->id}}">
                                    <input name="qty" type="hidden" value="1">
                                    <button style="border: solid white;"><li class="w-icon active"><a> <i class="icon_bag_alt"></i></a></li></button>
                                    <button style="border: solid white;"><li class="w-icon"><a> <i class="fa fa-random"></i></a></li></button>
                                </ul>
                                </form>
                            </div>
                            <div class="pi-text">
                                <a href="">
                                    <?php
                                        $str = $value->name;
                                        $length = strlen($str);
                                        if ($length > 65) {
                                            $new = substr($str,0,65)."...";
                                        }
                                        else {
                                            $new = $str;
                                        }
                                    ?>
                                    <a href="{{URL::to('/product/'.$value->id)}}"><h6>{{$new}}</h6></a>
                                </a>
                                <div class="product-price">
                                    <?php
                                        $v = $value->price;
                                        $v = $v/1000;
                                        $price = "$v".".000"."đ";
                                    ?>
                                    {{$price}}
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--deal of the week section begin -->
    <section class="deal-of-week set-bg spad" data-setbg="public/uploads/banner.jpg">
    <div class="container">
            <div class="col-lg-6 text-center admin-login-form px-5" style="background-color: gray;">
                <div class="section-title" >
                    <br>
                    <h2 >Ưu đãi tháng 12</h2>
                    <p></p>
                    <div class="product-price">
                        <h4 style="color: #f3af66; size: 35px;">Áo Thun Local Brand Unisex Teelab Cyberpunk TS143</h4>
                        <p></p>
                        100.000₫
                    </div>
                </div>
                <div class="countdown-timer" id="countdown">
                    <div class="cd-item">
                        <span>30</span>
                        <span>Ngày</span>
                    </div>
                    <div class="cd-item">
                        <span>12</span>
                        <span>Giờ</span>
                    </div>
                    <div class="cd-item">
                        <span>40</span>
                        <span>Phút</span>
                    </div>
                    <div class="cd-item">
                        <span>30</span>
                        <span>Giây</span>
                    </div>
                </div>
                <form action="{{URL::to('save-cart')}}" method="POST">
                                    {{ csrf_field() }}

                                    
                                    <input name="id_hidden" type="hidden" value="202">
                                    <input name="qty" type="hidden" value="1">
                            
                                    <button type="submit" class="btn btn-secondary" style="background-color:#f3af66">Thêm vào giỏ hàng</button>
                                    <br><br>
                                
                                </form>
            </div>
        </div>

    </section>
    <!-- Man Banner Section Begin -->
    <section class="man-banner spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8">
                    <div class="filter-control">
                        <ul>
                            <li class="active">Phụ kiện mới</li>
                        </ul>
                    </div>
                    <div class="product-slider owl-carousel">
                        @foreach($phukien as $value)
                        <div class="product-item">
                            <div class="pi-pic">
                                <?php
                                    $v = $value->thumbnail;
                                    $pic = "public/uploads/"."$v";
                                ?>
                                <a href="{{URL::to('/product/'.$value->id)}}"><img src={{$pic}} alt=""></a>
                                <div class="sale">Sale</div>
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <form action="{{URL::to('save-cart')}}" method="POST">
                                    {{ csrf_field() }}
                                <ul>
                                    <input name="id_hidden" type="hidden" value="{{$value->id}}">
                                    <input name="qty" type="hidden" value="1">
                                    <button style="border: solid white;"><li class="w-icon active"><a> <i class="icon_bag_alt"></i></a></li></button>
                                    <button style="border: solid white;"><li class="w-icon"><a> <i class="fa fa-random"></i></a></li></button>
                                </ul>
                                </form>
                            </div>
                            <div class="pi-text">
                                <a href="">
                                    <?php
                                        $str = $value->name;
                                        $length = strlen($str);
                                        if ($length > 30) {
                                            $new = substr($str,0,30)."...";
                                        }
                                        else {
                                            $new = $str;
                                        }
                                    ?>
                                    <a href="{{URL::to('/product/'.$value->id)}}"><h6>{{$new}}</h6></a>
                                </a>
                                <div class="product-price">
                                    <?php
                                        $v = $value->price;
                                        $v = $v/1000;
                                        $price = "$v".".000"."đ";
                                    ?>
                                    {{$price}}
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1">
                    <div class="product-large set-bg" data-setbg="public/frontend/img/products/men.jpg">
                        <h2>New Arrivals</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Partner Logo Section Begin -->
    <div class="partner-logo">
        <div class="container">
            <div class="logo-carousel owl-carousel">
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="public/frontend/img/logo-carousel/logo-1.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="public/frontend/img/logo-carousel/logo-2.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="public/frontend/img/logo-carousel/logo-3.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="public/frontend/img/logo-carousel/logo-4.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="public/frontend/img/logo-carousel/logo-5.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="footer-left">
                        <div class="footer-logo">
                            <a href="index.html">
                                <img src="public/frontend/img/logo.jpg" height="50" alt="">
                            </a>
                        </div>
                        <ul>
                            <li>Quận 7 - TP.HCM</li>
                            <li>Phone: +84 66.77.88.999</li>
                            <li>Email: quanaogenz@gmail.com</li>
                        </ul>
                        <div class="footer-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 offset-lg-1">
                    <div class="footer-widget">
                        <h5>Information</h5>
                        <ul>
                            <li><a href=""></a>About us</li>
                            <li><a href=""></a>Checkout</li>
                            <li><a href=""></a>Contact</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="footer-widget">
                        <h5>My Account</h5>
                        <ul>
                            <li><a href=""></a>My Account</li>
                            <li><a href=""></a>Contact</li>
                            <li><a href=""></a>Shopping Cart</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="newslatter-item">
                        <h5>Join our Newsletter Now</h5>
                        <p>Get E-mail updates about our latest shop and special offers</p>
                        <form action="#" class="subscribe-form">
                            <input type="text" placeholder="Enter Your Mail">
                            <button type="button">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-reserved">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright-text">
                            Copyright ©
                            <script>document.write(new Date().getFullYear());</script> Genz | All Rights Reserved. <i class="fa fa-heart-0" aria-hidden="true"></i>
                        </div>
                        <div class="payment-pic">
                            <img src="public/frontend/img/payment-method.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Js Plugins -->
    <script src="public/frontend/js/jquery-3.3.1.min.js"></script>
                            <script src="public/frontend/js/bootstrap.min.js"></script>
                            <script src="public/frontend/js/jquery-ui.min.js"></script>
                            <script src="public/frontend/js/jquery.countdown.min.js"></script>
                            <script src="public/frontend/js/jquery.nice-select.min.js"></script>
                            <script src="public/frontend/js/jquery.zoom.min.js"></script>
                            <script src="public/frontend/js/jquery.dd.min.js"></script>
                            <script src="public/frontend/js/jquery.slicknav.js"></script>
                            <script src="public/frontend/js/owl.carousel.min.js"></script>
                            <script src="public/frontend/js/main.js"></script>
</body>

</html>
