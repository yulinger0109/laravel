<?php

namespace App\Http\Controllers\Backstage;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;

class RegisterController extends Controller
{
    //
    public function index()
    {
    	return view('BackStage.register');
    }

    public function doregister(Request $request)
    {
    	// dd($request);
    	$name = $request->input('Admin_name');
    	// var_dump($name);
    	$pass = $request->input('Admin_pass');
    	// var_dump($pass);
    	$newpass = $request->input('NewAdmin_pass');
    	// dd($newpass);
    	//查询数据库中是否有此用户名
    	$ob = DB::table('admin')->where('Admin_name',$name)->first();
    	// dd($ob);
		if($ob){
			return "注册失败，该用户名已存在";
		}else{
			//判断两次输入密码是否一致，一致则注册
			if(md5($pass) == md5($newpass)){
				$data = $request->except('_token','NewAdmin_pass');
				// dd($data);
				$a = md5($data['Admin_pass']);
				$data['Admin_pass'] = $a;
				$id = DB::table('admin')->insertGetId($data);
				if($id>0){
					return redirect('backstage/login')->with('msg','Register is OK, please Login');
				}
			}else{
				return "密码不一致，请从新输入";
			}
		}
    }
}
