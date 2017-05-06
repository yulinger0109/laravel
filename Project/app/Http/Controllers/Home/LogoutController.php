<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LogoutController extends Controller
{
    //退出登录
    public function logout(){
    	session()->forget('user');
    	return redirect('/');
    }
}
