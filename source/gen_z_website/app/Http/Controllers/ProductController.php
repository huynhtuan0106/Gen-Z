<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product_category;
use App\Models\product;
use Illuminate\Support\Facades\Redirect;

class ProductController extends Controller
{
    public function add_product()
    {
        $product_category_list = product_category::all()->toArray();
        return view('admin.add_product', compact('product_category_list'));
    }

    public function update_product($id)
    {
        $product = product::with('product_category')->find($id)->toArray();
        $product_category_list = product_category::all()->toArray();

        return view('admin.update_product', compact('product', 'product_category_list'));
    }

    public function all_product()
    {
        $product_list = product::with('product_category')->orderBy('product.created_at', 'desc')->paginate(5);
        return view('admin.all_product', compact('product_list'));
    }

    public function add_product_post(Request $request)
    {
        $product = new product();

        $product_thumbnail = $request->file('thumbnail')->getClientOriginalName();
        $request->thumbnail->move(public_path('uploads'), $product_thumbnail);

        $product->name = $request->input('product_name');
        $product->price = $request->input('product_price');
        $product->quantity = $request->input('product_quantity');
        $product->description = $request->input('product_description');
        $product->thumbnail = $product_thumbnail;
        $product->status = 1;
        $product->category_id = $request->input('category_id');

        $product->save();

        return redirect()->route('admin.all_product')->with('success', 'Thêm mới sản phẩm thành công!');
    }

    public function update_product_post(Request $request, $id)
    {
        $product = product::find($id);

        $product->name = $request->input('product_name');
        $product->price = $request->input('product_price');
        $product->quantity = $request->input('product_quantity');
        $product->description = $request->input('product_description');
        $product->status = 1;
        $product->category_id = $request->input('category_id');

        if ($request->hasFile('thumbnail')) {
            $product_thumbnail = $request->file('thumbnail')->getClientOriginalName();
            $request->thumbnail->move(public_path('uploads'), $product_thumbnail);
            $product->thumbnail = $product_thumbnail;
        }

        $product->save();

        return Redirect::to('admin/update-product/' . $id)->with('success', 'Chỉnh sửa sản phẩm thành công!');
    }

    public function delete_product($id)
    {
        $product = product::find($id);

        if ($product) {
            product::destroy($id);
        }

        return back()->with('success', 'Xóa danh mục sản phẩm thành công!');
    }
}
