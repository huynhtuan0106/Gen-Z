@extends('admin_layout')
@section('admin_content')

<div class="table-agile-info" style="height: 110vh">
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
  <div class="panel panel-default">
    <div class="panel-heading">
      Tất cả đơn hàng
    </div>
    <br>
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th style="width:30px;"></th>
            <th style="color: black;">Mã đơn</th>
            <th style="color: black;">Ngày lập</th>
            <th style="width: 200px; color: black;">Danh sách sản phẩm</th>
            <th style="color: black;">Tên khách hàng</th>
            <th style="color: black;">Số điện thoại</th>
            <th style="color: black;">Tổng tiền</th>
            <th style="color: black;">Thanh toán</th>
            <th style="width: 170px;"></th>
          </tr>
        </thead>
        <tbody>
        @foreach($donhang as $tmp => $value)
          <tr>
            <td style="color: black;"><label class="i-checks m-b-none"></label></td>
            <td style="color: black;">{{$value['id']}}</td>
            <td style="color: black;">{{$value['created_at']}}</td>
            <?php
                $chitiet = App\Models\order_product::find($value['id'])->chitiet;
                $str = "";
                foreach ($chitiet as $tmp) {
                  $str = $str . $tmp->product_name . "; ";
                }
                if ($str > 30) {
                  $str = substr($str,0,30) . " ...";
                }
                ?>
            <td style="color: black;">{{$str}}</td>
            <td style="color: black;">{{$value['customer_name']}}</td>
            <td style="color: black;">{{$value['phone']}}</td>
            <td style="color: black;">{{number_format($value['total']).' đ'}}</td>
            <td style="color: black;">{{$value['pay']}}</td>
            <td style="width: 120px">
              <a href="{{URL::to('admin/view-receipt/'.$value['id'])}}" class="btn-info btn btn-sm">Xem</a>
              <a href="{{URL::to('admin/update-receipt/'.$value['id'])}}" class="btn-info btn btn-sm">Sửa</a>
              <a href="#" data-id="{{$value['id']}}" class="btn-danger btn btn-sm delete-product-btn" data-toggle="modal" data-target="#delete-product-modal">Xóa</a>
            </td>
          </tr>
        @endforeach  
        </tbody>
      </table>
    </div>
    <footer class="panel-footer">
    </footer>
        
        
  </div>
</div>

<div class="modal" id="delete-product-modal">
              <div class="modal-dialog">
                <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                  <h4 class="modal-title">Xóa đơn hàng</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                  Bạn có chắc chắn muốn xóa đơn hàng này?
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">        
                <a href="{{URL::to('admin/remove-receipt',['id'=>0])}}" class="btn btn-primary btn-modal-delete-product">Đồng ý</a>
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button>
                </div>
                </div>
              </div>
            </div>


@endsection