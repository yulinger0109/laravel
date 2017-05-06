<?php

namespace App\Http\Controllers\Config;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;

class ConfigController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // 跳转网站配置详情页
    public function index(Request $request)
    {
        //保存搜索条件
        $where = '';
        //实例化操作表
        $ob = DB::table('config');
        //执行分页查询
        $list = $ob->paginate(1);
        return view('backstage.config.index',['list'=>$list]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    // 跳转添加网站配置界面
    public function create()
    {
        //
        return view('backstage.config.add');

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
        $data = $request->except('_token');
        $id = DB::table('config')->insertGetId($data);
        if($id>0){
            return redirect('backstage/config')->with('msg','添加成功');
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
    // 跳转修改
    public function edit($id)
    {
        //
        $data = DB::table('config')->where('Config_id',$id)->first();
        return view('backstage.config.edit',['ob'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // 执行修改
    public function update(Request $request, $id)
    {
        //
         $data = $request->except('_token','_method');
         $row = DB::table('config')->where('Config_id',$id)->update($data);
        if($row>0){
            return redirect('backstage/config')->with('msg','修改成功');
        }else{
            return redirect('backstage/config')->with('error','修改失败');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // 删除网配
    public function destroy($id)
    {
        //
        $row = DB::table('config')->where('Config_id',$id)->delete();
        if($row>0){
            return redirect('backstage/config')->with('msg','删除成功');
        }else{
            return redirect('backstage/config')->with('error','删除失败');
        }
    }
}
