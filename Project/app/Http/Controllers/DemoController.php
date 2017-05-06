<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    //
    // 跳转后台首页
    public function index (Request $request) {
    	return view('Backstage.index');
    	
    }
}
