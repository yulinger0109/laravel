<?php

namespace App\Http\Controllers\Home\My;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;

class MyaddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // 跳转地址列表页
    public function index()
    {
        //
        $config = DB::table('config')->first();
        $links = DB::table('links')->get();
        $a = session('user')->User_id;
         //dd($a);
        $list = DB::table('address')->where('Address_uid',$a)->get();
         // dd($list);
        return view('Home.My.myaddress',['list' => $list,'links'=>$links,'config'=>$config]);
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
    // 跳转修改界面
    public function edit($id)
    {
        //
        // dd($id);
        $config = DB::table('config')->first();
        $links = DB::table('links')->get();
        $data = DB::table('address')->where('Address_id',$id)->first();
        // dd($data);
        return view('Home.My.editaddress',['ob' => $data,'links'=>$links,'config'=>$config]);


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    // 修改地址
    public function update(Request $request, $id)
    {
        // dd($request);
        $data = $request->except('_token','_method');
        // dd($data);
        $row = DB::table('address')->where('Address_id',$id)->update($data);
        // dd($row);
        if($row>0){
            return redirect('home/myaddress/'.$id.'/edit')->with('msg','修改成功');
        }else{
            return redirect('home/myaddress/'.$id.'/edit')->with('error','修改失败');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // 删除地址
    public function destroy($id)
    {
        //
        $row = DB::table('address')->where('Address_id',$id)->delete();
        if($row>0){
            return redirect('home/myaddress');
        }else{
            return redirect('home/myaddress');
        }
    }
}
