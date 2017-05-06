<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class PayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // 结算界面跳转
    public function index()
    {
        // 
        $config = DB::table('config')->first();
        $links = DB::table('links')->get();
        // dd(session('Order_id'));
        $id = session('Order_id');
        $order = DB::table('order')->where('Order_id',$id)->first();
        // dd($id);
        $uid = session('user')->User_id;
        $list = DB::table('user')->where('User_id',$uid)->first();
        return view('Home.pay',['Order_id'=>$id,'list'=>$list,'links'=>$links,'config'=>$config,'order'=>$order]);
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
        // dd(111111);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // 订单页跳转结算页
    public function show($id)
    {
        //
        // dd($id);
        return redirect('/pay')->with('Order_id',$id);
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
    // 结算
    public function update(Request $request, $id)
    {
        //
        $data = array();
        $data['Order_state'] = 1;
        $row = DB::table('order')->where('Order_id',$id)->update($data);
        if ($row > 0) {
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
    }
}
