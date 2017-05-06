<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class DetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        // dd($request->except('_token'));
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
    // 详情页跳转
    public function show($id)
    {
        //
        
        // dd($id);
        $config = DB::table('config')->first();
        $links = DB::table('links')->get();
        $list = DB::table('goods')->where('Goods_id',$id)->first();
        $reply = DB::table('reply')->where('Reply_gid',$id)->get();
        // dd($reply);
        // dd($reply);
        // dd($list->Goods_pic);
        $pic = explode(',', $list->Goods_pic);
        $bigpic = explode(',',$list->Goods_bigpic);
        // dd($pic);
        return view('home.Details.details',['list'=>$list,'pic'=>$pic,'bigpic'=>$bigpic,'reply'=>$reply,'links'=>$links,'config'=>$config]);
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
