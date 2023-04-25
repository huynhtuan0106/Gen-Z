@extends('admin_layout')
@section('admin_content')
<div class="row" style="height: 100vh">
    <div class="col-lg-12">
        <section class="panel">
        @if (session('error'))
                <div  class="alert alert-danger" role="alert">
                    {{ session('error') }}
                </div>
	        @endif
            @if (session('success'))
                <div style="font-size: 16px" class="alert alert-success text-center" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            <header class="panel-heading">
                Chi tiết đơn hàng
                        </header>
                        <form class="col-12" action="{{URL::to('admin/updating-receipt')}}" method="POST">
                        {{ csrf_field() }}
                        <div class="panel-body">
                            <div class="position-center">

                                <form role="form">
                                @foreach($info as $value)
                                <div class="form-group">
                                    <label>Mã đơn hàng: {{$value->id}}</label>
                                    <input name="id_old" type="hidden" value="{{$value->id}}">
                                </div>
                                <div class="form-group">
                                    <label>Tên khách hàng:</label>
                                    <input class="form-control" placeholder="Customers name" name="customer_name" value=" <?php echo $value->customer_name?> "> 
                                </div>
                                <div class="form-group">
                                    <label>Số điện thoại:</label>
                                    <input class="form-control" placeholder="Customers phone" name="phone" value="{{$value->phone}}">
                                </div>
                                <div class="form-group">
                                    <label>Email:</label>
                                    <input class="form-control" placeholder="Customers email" name="email" value="{{$value->email}}">
                                </div>
                                <div class="form-group">
                                    <label>Địa chỉ:</label>
                                    <input class="form-control" placeholder="Customers address" name="address" value="{{$value->billing_address}}">
                                </div>
                                <div class="form-group">
                                    <label>Danh sách sản phẩm:</label>
                                    <table class="table table-striped b-t b-light">
                                    <thead>
                                    <tr>
                                        <th style="width:30px;"></th>
                                        <th style="color: black;">Mã</th>
                                        <th style="color: black;">Tên sản phẩm</th>
                                        <th style="color: black;">Số lượng</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($detail as $d)
                                    <tr>
                                        <td><label class="i-checks m-b-none"></label></td>
                                        <td style="color: black;">{{$d->id}}</td>
                                        <td style="color: black;">{{$d->product_name}}</td>
                                        <td style="color: black;">{{$d->quantity}}</td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                </div>
                                <div class="form-group">
                                    <label>Thành tiền: {{number_format($value->total).' đ'}}</label>
                                    
                                </div>
                                <div class="form-group">
                                    <label>Phương thức thanh toán:</label>
                                    <input class="form-control" placeholder="Total" name="pay" value="{{$value->pay}}">
                                </div>
                                @endforeach
                                <button type="submit" id="save" class="btn btn-info">Lưu</button>
                                <a href="{{URL::to('admin/all-receipt')}}" id="close" class="btn btn-info">Đóng</a>
                            
                            </div>
                            </form>
                        </div>
                        </form>
                    </section>

            </div>

@endsection