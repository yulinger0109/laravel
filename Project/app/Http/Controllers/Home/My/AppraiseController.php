<?php

namespace App\Http\Controllers\Home\My;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class AppraiseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        
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
    // 执行评价添加并修改订单状态
    public function store(Request $request)
    {
        //
        $data = $request->except('_token','Order_id');
        $data['Reply_uid'] = session('user')->User_id;
        $data['Reply_replayer'] = session('user')->User_username;
        // dd($data);
        $row = DB::table('reply')->insertGetId($data);
        // 判断评价是否添加成功
        if ($row > 0) {
            // 如果成功更改订单状态
            $id = $request->only('Order_id');
            $data1 = array();
            $data1['Order_state'] = 4;
            $Row = DB::table('order')->where('Order_id',$id)->update($data1);
            if ($Row > 0) {
                return redirect('/home/myorder');
            }
           
        }else{
            return back;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // 跳转订单添加界面
    public function show($id)
    {
        //
        // dd($id);
        $config = DB::table('config')->first();
        $links = DB::table('links')->get();
        $ob = DB::table('order')->where('Order_id',$id)->first();
        return view('Home.My.appraise',['gid'=>$ob->Order_gid,'id'=>$ob->Order_id,'links'=>$links,'config'=>$config]);
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
    public function update(Request $request, $id)
    {
        //
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
