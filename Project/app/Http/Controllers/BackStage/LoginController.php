<?php

namespace App\Http\Controllers\BackStage;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\Admin;

use Gregwar\Captcha\CaptchaBuilder;

class LoginController extends Controller
{
    //跳转登录界面
    public function index()
    {
    	return view('BackStage.login');
    }
    //执行登录
    public function dologin(Request $request)
    {
    	//
    	//获取session中的验证码的内容
    	$mycode = session('mycode');
    	//判断用户输入的验证码和session中的内容是否一致
    	if($mycode != $request->input('mycode')){
    		return back()->with('msg','Failure login: the captcha is error');
    	}
    	//实例化模型
    	$user = new Admin();
    	//调用模型中的验证用户的方法
    	$ob = $user->checkAdmin($request);
    	// dd($ob);
    	if($ob){
        session(['adminuser'=>$ob]);
    		return redirect('backstage');
    	}else{
    		return back()->with('msg','Failure login: username or password is error');
    	}
    }
    //获取验证码信息
	public function captch($tmp)
	{
		//
		//生成验证码图片的builder对象
		$builder = new CaptchaBuilder;
		//设置验证码的宽高字体
		$builder->build(200,42,null);
		//获取验证码中的内容
		$data = $builder->getPhrase();
		//把验证码的内容闪存到session中
		session()->flash('mycode',$data);
		return response($builder->output())->header('Content-type','image/jpeg');
	}  
    //管理员退出
	  public function over()
	  {
	  	session()->forget('adminuser');
	  	return redirect('backstage/login');
	  }
      //跳转注册界面
      public function change()
      {
        return view('BackStage.register');
      }

}
