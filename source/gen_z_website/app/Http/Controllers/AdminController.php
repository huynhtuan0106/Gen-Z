<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
    public function index() {
        return view('admin.login');
    }

    public function show_dashboard() {
        return view('admin.dashboard');
    }

    public function logining(Request $request) {
        $username = $request->username; 
        $password = $request->password;

        $info = admin::where('username',$username)->first();

        if (isset($info)) {
            if ($info -> password == $password) {
                return Redirect::to('/admin/dashboard/'.$info->username);
            }
            else {
                return Redirect::to('admin')->with('error', 'Sai tên đăng nhập hoặc mật khẩu!');
            }
        }
        else {
            return Redirect::to('admin')->with('error', 'Sai tên đăng nhập hoặc mật khẩu!');
        }
        
    }
}
