<?php

//友情连接信息
namespace App\Http\Controllers\Links;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;

class LinksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // 友情链接列表页
    public function index(Request $request)
    {
        //保存搜索条件
        $where = '';
        //实例化操作表
        $ob = DB::table('links');
        // 判断是否有搜索条件
        if($request->has('Links_name')){
            //获取搜索的条件
            $name = $request->input('Links_name');
            //添加到将要携带到分页的数组中
            $where['Links_name'] = $name;
            //给查询添加where条件
            $ob->where('Links_name','like',"%{$name}%");
        }
        //执行分页查询
        $list = $ob->paginate(1);
        // dd($list);
        return view('BackStage.Links.index',['list'=>$list,'where'=>$where]);
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
        return view('BackStage.Links.add');
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
        $this->validate($request,['Links_name' => 'required|max:15','Links_url' => 'required']);
        $data = $request->except('_token');
        $id = DB::table('links')->insertGetId($data);
        if($id>0){
            return redirect('backstage/links')->with('msg','添加成功');
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
    // 跳转修改界面
    public function edit($id)
    {
        //
        $data = DB::table('links')->where('Links_id',$id)->first();
        return view('BackStage.Links.edit',['ob'=>$data]);
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
        $data = $request->only('Links_name','Links_url','Links_switch');
        $row = DB::table('links')->where('Links_id',$id)->update($data);
        if($row>0){
            return redirect('backstage/links')->with('msg','修改成功');
        }else{
            return redirect('backstage/links')->with('error','修改失败');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // 删除友情链接
    public function destroy($id)
    {
        //
        $row = DB::table('links')->where('Links_id',$id)->delete();
        if($row>0){
            return redirect('backstage/links')->with('msg','删除成功');
        }else{
            return redirect('backstage/links')->with('error','删除失败');
        }
    }
}
