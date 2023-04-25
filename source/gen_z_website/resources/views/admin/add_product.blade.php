@extends('admin_layout')
@section('admin_content')
<div class="row" style="height: 100vh">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Thêm sản phẩm
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                <form role="form" method="POST" enctype="multipart/form-data">
                                    @csrf
                                <div class="form-group">
                                    <label for="exampleInputFile">Hình ảnh:</label>
                                    <input name="thumbnail" type="file" id="exampleInputFile">
                                </div>
                                <div class="form-group">
                                    <label>Tên:</label>
                                    <input name="product_name" class="form-control" placeholder="Product name">
                                </div>
                                <div class="form-group">
                                    <label>Đơn giá:</label>
                                    <input type="number" name="product_price" class="form-control" placeholder="Product price">
                                </div>
                                <div class="form-group">
                                    <label>Số lượng:</label>
                                    <input type="number" name="product_quantity" class="form-control" placeholder="Product quantity">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mô tả:</label>
                                    <textarea name="product_description" class="form-control" placeholder="Product description"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Tên danh mục:</label></br>
                                    <select name="category_id" id="">
                                        <option value="-1">Chọn tên danh mục</option>
                                        @foreach ($product_category_list as $product_category_item)
                                            <option value="{{$product_category_item['id']}}">{{$product_category_item['name']}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-info">Thêm</button>
                            </form>
                            </div>
                        </div>
                    </section>

            </div>

@endsection