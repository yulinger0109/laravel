<?php

namespace App\Http\Controllers\Home\My;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // 跳转地址添加界面
    public function create()
    {
        //
        $config = DB::table('config')->first();
        $links = DB::table('links')->get();
        return view('Home.My.address',['links'=>$links,'config'=>$config]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // 执行添加
    public function store(Request $request)
    {
        //
        // dd($request);
        $data = $request->except('_token');
        $data['Address_uid'] = session('user')->User_id;
        // dd($data);
        $id = DB::table('address')->insertGetId($data);
        // dd($id);
        if($id>0){
            return redirect('/home/myaddress');
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
