<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    //
    protected $table = 'admin';
    public function checkAdmin($request)
    {
    	//获取用户登录的用户名
    	$name = $request->input('Admin_name');
    	// dd($name);
    	//通过用户名查询数据库有没有这个用户
    	$ob = $this->where('Admin_name',$name)->first();
        // dd(md5($request->input('Admin_pass')));
    	//如果有用户则验证密码
    	if($ob){
    		if(md5($request->input('Admin_pass')) == $ob->Admin_pass){
    			return $ob;
    		}else{
    			return null;
    		}
    	}else{
    		return null;
    	}
    }
}
