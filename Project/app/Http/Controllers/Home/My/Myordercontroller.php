<?php

namespace App\Http\Controllers\Home\My;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class Myordercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //显示返回我的订单
    public function index()
    {
        //
        $config = DB::table('config')->first();
        $links = DB::table('links')->get();
        $uid = session('user')->User_id;
        // dd($uid);
        $ob = DB::table('order')->where('Order_uid',$uid);
        $a= $ob->get();
        // dd($a);
        $count = ceil(count($a)/4);
        $list = $ob->paginate(4);
        return view('Home.My.myorder',['list'=>$list,'count'=>$count,'links'=>$links,'config'=>$config]);
    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // 查询待付款
    public function create()
    {
        //查询待付款
        // dd(22);
        $config = DB::table('config')->first();
        $links = DB::table('links')->get();
        $uid = session('user')->User_id;
        $ob = DB::table('order')->where([['Order_state',0],['Order_uid',$uid]]);
        $a= $ob->get();
        $count = ceil(count($a)/4);
        $list = $ob->paginate(4);
        return view('Home.My.myorder',['list'=>$list,'count'=>$count,'links'=>$links,'config'=>$config]); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // 查询待评价
    public function store(Request $request)
    {
        //查询待评价
        // dd(33);
        $config = DB::table('config')->first();
        $links = DB::table('links')->get();
        $uid = session('user')->User_id;
        $ob = DB::table('order')->where([['Order_state',3],['Order_uid',$uid]]);
        $a= $ob->get();
        $count = ceil(count($a)/4);
        $list = $ob->paginate(4);
        return view('Home.My.myorder',['list'=>$list,'count'=>$count,'links'=>$links,'config'=>$config]); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    // 查询待发货
    public function show($id)
    {
        //查询待发货
        $config = DB::table('config')->first();
        $links = DB::table('links')->get();
        $uid = session('user')->User_id;
        $ob = DB::table('order')->where([['Order_state',1],['Order_uid',$uid]]);
        $a= $ob->get();
        $count = ceil(count($a)/4);
        $list = $ob->paginate(4);
        return view('Home.My.myorder',['list'=>$list,'count'=>$count,'links'=>$links,'config'=>$config]); 
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
        //查询待收货
        $config = DB::table('config')->first();
        $links = DB::table('links')->get();
        $uid = session('user')->User_id;
        $ob = DB::table('order')->where([['Order_state',2],['Order_uid',$uid]]);
        $a= $ob->get();
        $count = ceil(count($a)/4);
        $list = $ob->paginate(4);
        return view('Home.My.myorder',['list'=>$list,'count'=>$count,'links'=>$links,'config'=>$config]); 
    }
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //修改我的订单状态信息
    public function update(Request $request, $id)
    {
        //
        // dd($id);
        $data = array();
        $data['Order_state'] = 3;
        $Row = DB::table('order')->where('Order_id',$id)->update($data);
        if ($Row > 0) {
            return redirect('/home/myorder');
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
        // dd(7);
    }
}
