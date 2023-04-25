@extends('admin_layout')
@section('admin_content')

<div class="table-agile-info" style="height: 120vh">
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
      Tất cả sản phẩm
    </div>
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th style="width:10px;"></th>
            <th style="width:30px; color: black;">STT</th>
            <th style="color: black;">Tên sản phẩm</th>
            <th style="color: black;">Ảnh đại diện</th>
            <th style="color: black;">Giá bán</th>
            <th style="color: black;">Số lượng</th>
            <th style="color: black;">Tên danh mục</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
        @foreach ($product_list as $key => $product_item)
			<tr>
        <td style="color: black;"><label class="i-checks m-b-none"></label></td>
        <td style="color: black;">{{($product_list->currentPage() - 1) * $product_list->perPage() + $key + 1}}</td>
				<td style="color: black;">{{$product_item['name']}}</td>
				<td>
					<img src="{{asset('public/uploads/'.$product_item['thumbnail'])}}" width="100px" alt="">
				</td>
				<td style="color: black;">{{number_format($product_item['price'], 0, '', ',').'đ'; }}</td>
				<td style="color: black;">{{$product_item['quantity']}}</td>
				<td style="color: black;">{{$product_item['product_category']['name']}}</td>
				<td style="width: 170px">
				<a href="update-product/{{$product_item['id']}}" class="btn-info btn btn-sm">Chỉnh sửa</a>
				<a href="#" data-id="{{$product_item['id']}}" class="btn-danger btn btn-sm delete-product-btn-new" data-toggle="modal" data-target="#delete-product-modal-new">Xóa</a>
				</td>
			  </tr>
      	@endforeach
        </tbody>
      </table>
    </div>
    <footer class="panel-footer">
      <div class="row">
        {{ $product_list->links() }}
        <div class="col-sm-5 text-center">
          <small class="text-muted inline m-t-sm m-b-sm"></small>
        </div>
        <div class="col-sm-7 text-right text-center-xs">                
          {{-- <ul class="pagination pagination-sm m-t-none m-b-none">
            <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
            <li><a href="">1</a></li>
            <li><a href="">2</a></li>
            <li><a href="">3</a></li>
            <li><a href="">4</a></li>
            <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
          </ul> --}}
        </div>
      </div>
    </footer>
  </div>
</div>

<div class="modal" id="delete-product-modal-new">
  <div class="modal-dialog">
    <div class="modal-content">
    <!-- Modal Header -->
    <div class="modal-header">
      <h4 class="modal-title">Xóa sản phẩm</h4>
      <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>
    <!-- Modal body -->
    <div class="modal-body">
      Bạn có chắc chắn muốn xóa sản phẩm này?
    </div>
    <!-- Modal footer -->
    <div class="modal-footer">        
      <a href="{{route('admin.delete_product',['id' => 0])}}" class="btn btn-primary btn-modal-delete-product-new">Đồng ý</a>
      <button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button>
    </div>
    </div>
  </div>
</div>

@endsection