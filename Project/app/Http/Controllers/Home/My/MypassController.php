<?php

namespace App\Http\Controllers\Home\My;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;

class MypassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //跳转修改密码界面
    public function index()
    {
        //获取网站配置信息
        $config = DB::table('config')->first();
        $links = DB::table('links')->get();
        return view('Home.My.mypass',['links'=>$links,'config'=>$config]);
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
    public function store(Request $request)
    {
        //
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
    //修改密码
    public function edit($id)
    {
        //
        // dd($id);
        $config = DB::table('config')->first();
        $links = DB::table('links')->get();
        $data = DB::table('user')->where('User_id',$id)->first();
        // dd($data);
        return view('Home.My.mypass',['ob'=>$data,'links'=>$links,'config'=>$config]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //确认修改密码
    public function update(Request $request, $id)
    {
        // dd($request);
        // dd($id);
        $data = $request->except('_token','_method');
        // dd($data);
        $a = md5($data['User_pass']);
        $b = DB::table('user')->where('User_id',$id)->first();
        // dd($b);
        if($a == $b->User_pass){
            if($data['User_newpass'] == $data['User_renewpass']){
                $c = array();
                $c['User_pass'] = md5($data['User_newpass']);
                // dd($c);
                $row = DB::table('user')->where('User_id',$id)->update($c);
                // dd($row);
                if($row>0){
                    // dd(111);
                    return redirect('login');
                }else{
                    return back()->with('error','密码输入错误，修改失败');
                }
            }else{
                return back()->with('error','两次密码不一致，请重新输入');
            }
        }else{
            return back();
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
