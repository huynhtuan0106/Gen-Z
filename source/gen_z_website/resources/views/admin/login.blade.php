<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{asset('public/frontend/css/style.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('public/frontend/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('public/frontend/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('public/frontend/css/themify-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('public/frontend/css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('public/frontend/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('public/frontend/css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('public/frontend/css/jquery-ui.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('public/frontend/css/slicknav.min.css')}}" type="text/css">    
    <title>Login</title>
</head>
<body>
        <div class="container login-form-container d-flex align-items-center justify-content-center h-100 w-100">
    
        <div class="row d-flex justify-content-center">
            
            
            <form action="{{URL::to('admin/logining')}}" method="POST" class="admin-login-form px-5">
            {{ csrf_field() }}
                <h1 class="text-center mb-4 mt-5">ĐĂNG NHẬP HỆ THỐNG</h1>
                <div class="form-group d-flex justify-content-center">
                    <input class="w-75 py-2 mb-2" type="text" name="username" placeholder="Nhập tên tài khoản" class="box" required>
                </div>
                
                <div class="form-group d-flex justify-content-center">  
                    <input class="w-75 py-2 mb-2" type="password" name="password" placeholder="Nhập mật khẩu" class="box" required>
                </div>
                <div>
                @if (session('error'))
                    <div style="font-size: 16px; margin-left: 52px; color:brown" >
                    {{ session('error') }} 
                    </div>
                @endif
                </div>
                <div class="text-center">
                    <input type="submit" value="ĐĂNG NHẬP" name="submit-btn" class="btn btn-info mt-3 px-4 py-2 mb-5">
                </div>
            </form>
        </div>
    </div>
</body>
</html>