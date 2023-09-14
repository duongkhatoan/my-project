<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function showLoginForm()
    {
        // $admin = auth('admin')->user();
        // dd($admin);
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        $remember = $request->has('remember');
        if (auth()->guard('admin')->attempt($credentials, $remember)) {
            // Đăng nhập thành công, chuyển hướng đến trang admin
            return redirect()->intended(route('admin.dashboard'))->with('success', 'Đăng nhập thành công!');
        }

        // Đăng nhập không thành công, chuyển hướng trở lại trang đăng nhập với thông báo lỗi
        return redirect()->route('admin.login')->with('error', 'Invalid credentials');
    }

    public function logout(Request $request)
    {
        auth()->guard('admin')->logout();

        return redirect()->route('admin.login');
    }
    public function index()
    {
        $admin = auth('admin')->user();
        return view('admin.dashboard');
    }
}
