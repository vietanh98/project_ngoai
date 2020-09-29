<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\User;
use App\UserProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\loginRequest;

class accountController extends Controller
{
    public function login()
    {
        return view('Login.login');
    }

    public function postLogin(loginRequest $request)
    {
        try {
            Log::info('Start postLogin');
            $userName = $request->input('name');
            $password = $request->input('password');
            $valid = Auth::attempt(['user_name' => $userName, 'password' => $password]);
            if ($valid) {
                $active = Auth::user()->is_active;
                if ($active == '1') {
                    return redirect()->route('trangchu');
                } elseif ($active == '2') {
                    return redirect()->route('xemvideo');
                }
            } else {
                return redirect()->back()->with('status', 'Tên đăng nhập hoặc mật khẩu không chính xác');
            }
        } catch (\Exception $e) {
            Log::info('Start postLogin');
            Log::error($e->getMessage());
            return response()->json([
                'success' => true,
                'message' => $e->getMessage(),
            ], 400);
        }
    }
    public function Register()
    {
        return view('Login.register');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('dangnhap');
    }
}
