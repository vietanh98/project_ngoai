<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class pageController extends Controller
{
    //funtion hien thi trang nguoi dung
    public function showPage(){
        $userName = Auth::user()->user_name;
        $email = Auth::user()->email;
        $active = Auth::user()->is_active;
        return view('Page.trangChu',['userName' => $userName, 'email' => $email, 'active' => $active]);
    }
    public function showPageWatchVideo(){
        $userName = Auth::user()->user_name;
        $email = Auth::user()->email;
        $active = Auth::user()->is_active;
        return view('Page.xemVideo',['userName' => $userName, 'email' => $email, 'active' => $active]);
    }
    public function ruttien(){
        $userName = Auth::user()->user_name;
        $email = Auth::user()->email;
        $active = Auth::user()->is_active;
        return view('Page.ruttien',['userName' => $userName, 'email' => $email, 'active' => $active]);
    }
    public function showError(){
        return view('Page.errorVideo');
    }
    public function showHomeRef(){
        return view('Page.homeRef');
    }
}
