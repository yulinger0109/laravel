<?php

namespace App\Http\Controllers\Home\My;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;

class MycollectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // 跳转收藏页
    public function index()
    {
        //
        $config = DB::table('config')->first();
        $links = DB::table('links')->get();
        $id = session('user')->User_id;
        $list = DB::table('collect')->where('Collect_uid',$id)->get();
        $data = array();
        // 遍历查询收藏商品信息
        foreach($list as $v){
            $data[] = DB::table('goods')->where('Goods_id',$v->Collect_gid)->first();
        }
        // dd($data);
        return view('Home.My.mycollect',['list'=>$data,'links'=>$links,'config'=>$config]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // 跳转添加界面
    public function create()
    {
        //
        // dd(1111);
        $config = DB::table('config')->first();
        $links = DB::table('links')->get();
        return view('Home.My.mycollect',['links'=>$links,'config'=>$config]);
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
         $row = DB::table('collect')->where('Collect_gid',$data)->first();
         // 判断是否收藏过某商品
         if(!empty($row)){
             return redirect('/ppclist')->with('msg','该物品已被收藏过');
         }
         $data['Collect_uid'] = session('user')->User_id;
         $data['Collect_time'] = time();
        // dd($data);
        $id = DB::table('collect')->insertGetId($data);
        // dd($id);
        if($id>0){
            return redirect('/ppclist')->with('msg','收藏成功');
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
    // 删除收藏
    public function destroy($id)
    {
        //
        // dd($id);
        $row = DB::table('collect')->where('Collect_gid',$id)->delete();
        if($row > 0){
            return redirect('/home/collect')->with('msg','删除成功');
        }else{
            return redirect('/home/collect')->with('msg','删除失败');
        }
    }
}
