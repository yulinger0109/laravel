<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // 页面跳转
    public function index()
    {
        //
        return view('Home.log');
    }
    


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // 登录
    public function store(Request $request)
    {
        //
        // $a = $request->only('');
        $name = $request->input('User_username');
        // dd($name);
        $ob = DB::table('user')->where('User_username',$name)->first();
        if ($ob) {
            if(md5($request->input('User_pass')) == $ob->User_pass){
                session(['user'=>$ob]);
                // dd(session('user')->User_username);
                 // dd((session()->all())['user']->User_username);
                
                return redirect('/');
            }else{
                return back()->with('msg','登录失败：密码不正确');
            }
        } else {
            return back()->with('msg','登录失败：不存在该用户');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // 注册
    public function update(Request $request, $id)
    {
        //注册占用位置
        
        $ob = $request->except('_token');
        if ($ob['User_pass'] == $ob['User_pass2']) {
            $data['User_username'] = $ob['User_username'];
            $data['User_pass'] = md5($ob['User_pass']);
            // dd($data);
            $id = DB::table('user')->insertGetId($data);
            if ($id > 0 ) {
                return redirect('/login')->with('msg','注册成功，请进行登录');
            }else{
                return back()->with('msg','发生未知错误，请稍后重新注册,谢谢');
            }
        }else{
            return back()->with('msg','两次输入的密码不一致，请重新输入');
        }
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
