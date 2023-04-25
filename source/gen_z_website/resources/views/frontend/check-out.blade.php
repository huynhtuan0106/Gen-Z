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
    <link rel="stylesheet" href="public/frontend/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="public/frontend/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="public/frontend/css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="public/frontend/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="public/frontend/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="public/frontend/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="public/frontend/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="public/frontend/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="public/frontend/css/style.css" type="text/css">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/checkout/">
    <link href="public/frontend/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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

    <body class="bg-light">
        <div class="container">
    <div class="py-5 text-center">
    </div>
    <form class="col-12" action="{{URL::to('order')}}" method="POST">
    {{ csrf_field() }}
    <div class="row">
    
        
        
        <div class="col-md-8 ">
        <h4 class="mb-3">Địa chỉ nhận hàng</h4>
        
            <div class="row">
            <div class="col-md-12">
                <label for="name">Họ & tên</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="" value="" required>
            <div class="invalid-feedback">
                Vui lòng nhập họ tên.
            </div>
            </div>
            </div>

            </br>

            <div class="mb-3">
            <label for="phone">Số điện thoại</label>
            <input type="text" name="phone" class="form-control" id="phone" >
            <div class="invalid-feedback">
                Vui lòng nhập số điện thoại.
            </div>
            </div>

            <div class="mb-3">
            <label for="phone">Email</label>
            <input type="email" name="email" class="form-control" id="email" >
            <div class="invalid-feedback">
                Vui lòng nhập email.
            </div>
            </div>

            <div class="mb-3">
            <label for="address">Địa chỉ</label>
            <input type="text" name="address" class="form-control" id="address" placeholder="" required>
            <div class="invalid-feedback">
                Vui lòng nhập địa chỉ.
            </div>
            </div>

            
            <hr class="mb-4">

            <h4 class="mb-3">Phương thức thanh toán</h4>

            <div class="d-block my-3">
            <div class="custom-control custom-radio">
                <input id="cod" name="paymentMethod" value="COD" type="radio" class="custom-control-input" checked required>
                <label class="custom-control-label" for="cod">Thanh toán khi nhận hàng</label>
            </div>
            </br>

            <div class="custom-control custom-radio">
                <input id="credit" name="paymentMethod" value="CARD" type="radio" class="custom-control-input"  required>
                <label class="custom-control-label" for="credit">Thẻ ngân hàng</label>
            </div>

            <div class="row">
            <div class="col-md-6 mb-3">
                <label for="cc-name">Tên chủ thẻ</label>
                <input type="text" class="form-control"  placeholder="" >
                
            </div>
            <div class="col-md-6 mb-3">
                <label for="cc-number">Số thẻ</label>
                <input type="text" class="form-control"  placeholder="" >
                
            </div>
            </div>
            </div>
            </div>
        
            <div class="col-md-4 ">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Giỏ hàng</span>
        </h4>
        <ul class="list-group mb-3">
            @foreach($cart as $value)
            <li class="list-group-item d-flex justify-content-between lh-condensed">
            <div>
            <?php
                $str = $value->name;
                $length = strlen($str);
                if ($length > 50) {
                    $new = substr($str,0,50)."...";
                }
                else {
                    $new = $str;
                }
            ?>
                <h8 class="my-0">{{$new}}</h8><br>
                <small class="text-muted">Số lượng: {{$value->quantity}}</small>
            </div>
            <span class="text-muted">
                <?php 
                    $v = $value->price;
                    $q = $value->quantity;
                    $total = (int)$v*(int)$q;
                    $total = $total;
                    echo number_format($total);
                ?>
            </span>
            </li>
            @endforeach
            <li class="list-group-item d-flex justify-content-between bg-light">
            <li class="list-group-item d-flex justify-content-between">
            <span>Tổng tiền (VNĐ)</span>
            <strong>
                <?php 
                    $sum = 0;
                    foreach ($cart as $value) {
                        global $sum;
                        $sum = $sum + $value->price*$value->quantity;
                    }
                    echo number_format($sum).' đ';
                ?>
            </strong>
            </li>
        
        </ul>

        
        
            <div >
                <button type="submit" class="btn btn-secondary" style="width: 350px;">Đặt hàng</button>
                
            </div><br>
            
        

        </div>
        </div>
        
        </form>
    </div>


    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="https://getbootstrap.com/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
            <script src="https://getbootstrap.com/docs/4.3/examples/checkout/form-validation.js"></script></body>

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
