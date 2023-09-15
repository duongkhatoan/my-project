<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginUserRequest;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserFrontRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login(LoginUserRequest $request)
    {
        $credentials = $request->only('email', 'password');

        // Thực hiện đăng nhập với Remember Me
        if (Auth::attempt($credentials, $request->has('remember_me'))) {
            // Đăng nhập thành công
            // Bạn có thể thực hiện các hành động cho người dùng đã đăng nhập ở đây

            // Chuyển hướng hoặc trả về trang mong muốn sau khi đăng nhập thành công
            return response()->json(['success' => 'Đăng nhập thành công']);
        } else {
            // Đăng nhập thất bại
            // Bạn có thể hiển thị thông báo lỗi cho người dùng và chuyển hướng hoặc trả về trang đăng nhập với thông báo lỗi
            return response()->json(['fail' => 'Đăng nhập thất bại. Vui lòng kiểm tra lại email và mật khẩu.']);
        }
    }
    public function register(StoreUserRequest $request)
    {
        $user = new User([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);
        $user->save();
        // @TODO : consider verify and add phone number
        Auth::login($user);
        return response()->json(['success' => 'Đăng ký thành công']);
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('index');
    }

    public function index()
    {
        $provinces = load_all_provinces();
        $districts ='';
        $wards = '';
        $user = Auth::user();
        if ($user->province) {
            $districts = load_district_base_on_provinces($user->province);
            if ($user->district) {
                $wards = load_wards_base_on_districts($user->district);
            }
        }
        return view('front.user.my_account', compact('provinces', 'districts', 'wards'));
    }

    public function update(UpdateUserFrontRequest $request, User $user)
    {
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'province' => $request->province,
            'district' => $request->district,
            'ward' => $request->ward,
        ]);
        if ($request->filled('current_password') && !Hash::check($request->current_password, $user->password)) {
            return back()->with('error', 'Mật khẩu cũ không đúng.');
        }
        if ($request->filled('password')) {
            $user->update([
                'password' => Hash::make($request->password),
            ]);
        }
        return redirect()->back()->with('success', 'Update successful');
    }
}
