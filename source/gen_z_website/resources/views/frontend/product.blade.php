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
    <link rel="stylesheet" href="{{asset('public/frontend/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('public/frontend/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('public/frontend/css/themify-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('public/frontend/css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('public/frontend/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('public/frontend/css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('public/frontend/css/jquery-ui.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('public/frontend/css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('public/frontend/css/style.css')}}" type="text/css">
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
                            <option value="yt" data-image="{{asset('public/frontend/img/flag-2.jpg')}}" data-imagecss="flag yu" data-title="English">
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
                            <a href="{{URL::to('index.html')}}"><img style="width:1700px; height: 50px" src="{{asset('public/frontend/img/logo-1.png')}}"
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
                                        <a href="{{URL::to('shopping-cart')}}" class="primary-btn view-card">Giỏ hàng</a>
                                        <a href="{{URL::to('check-out')}}" class="primary-btn checkout-btn">Đặt hàng</a>
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

    <!-- Product shop section begin -->
    <section class="product-shop spad page-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-10">
                    <div class="row">
                    @foreach($product as $value)
                                
                        <div class="col-lg-6">
                            <div class="product-pic-zoom">
                                <img class="product-big-img" src="{{URL::to('public/uploads/'.$value->thumbnail)}}" alt="">
                                <div class="zoom-icon">
                                    <i class="fa fa-search-plus"></i>
                                </div>
                            </div>
                            
                        </div>
                        <div class="col-lg-6">
                            <div class="product-details">
                                
                                <div class="pd-title">
                                    <h3>{{$value->name}}</h3>
                                    <a href="#" class="heart-icon"><i class="icon_heart_alt"></i></a>
                                </div>
                                <div class="pd-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-full"></i>
                                    <span>(4.5/5)</span>
                                </div>
                                <div class="pd-desc">
                                    <?php
                                        $str = $value->description;
                                        $length = strlen($str);
                                        $new1 = substr($str,0,460);
                                        $new2 = substr($str,460,-1);
                                       
                                    ?>
                                    <p style="text-align:justify">{{$new1}} <span id="dots"></span><span id="more"> {{$new2}}</span></p>
                                    <button onclick="myFunction()" id="myBtn" class="btn btn-secondary">Thu gọn</button> 
                                    <?php
                                        $v = $value->price;
                                        $v = $v/1000;
                                        $price = "$v".".000"."đ";
                                    ?>
                                    
                                    <h4><br>{{$price}}</h4>
                                </div>
                                
                                
                                <form action="{{URL::to('save-cart')}}" method="POST">
                                    {{ csrf_field() }}
                                    <input name="id_hidden" type="hidden" value="{{$value->id}}">
                                <div class="quantity">
                                    <div class="pro-qty">
                                        
                                        <input name="qty" type="text" value="1">
                                    </div>
                                    <button type="submit" class="primary-btn pd-cart">Thêm vào giỏ hàng</button>
                                </div>
                                </form>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="footer-left">
                        <div class="footer-logo">
                            <a href="index">
                                <img src="{{asset('public/frontend/img/logo.jpg')}}" height="50" alt="">
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
                            <img src="{{asset('public/frontend/img/payment-method.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <!-- Js Plugins -->
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
    <script src="{{asset('public/frontend/js/read.js')}}"></script>
</body>

</html>
