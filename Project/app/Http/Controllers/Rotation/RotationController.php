<?php

namespace App\Http\Controllers\Rotation;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;

class RotationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // 跳转轮播图列表页
    public function index()
    {
        //保存搜索条件
        $where = '';
        //实例化操作表
        $ob = DB::table('rotation');
        // dd($ob);
        //执行分页查询
        $list = $ob->paginate(1);
        // dd($list);
        return view('BackStage.Rotation.index',['list'=>$list,'where'=>$where]);
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
        return view('BackStage.Rotation.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // 执行添加 上传图片
    public function store(Request $request)
    {
        // dd($request);
        //判断是否有文件上传
        if($request->hasFile('Rotation_name')){
            // 判断上传的文件是否有效
            if($request->file('Rotation_name')->isValid()){
                // 获取上传的文件对象
                $data = $request->file('Rotation_name');
                // dd($data);
                // 获取上传的文件的后缀
                $ext = $data->getClientOriginalExtension();
                // 拼装出你需要使用的文件名
                $picname = time().rand(1000,9999).'.'.$ext;
                // 移动临时文件，生成新文件到指定目录下
                $data->move('./admin/upload',$picname);
                if($data->getError()>0){
                    echo '上传失败';
                }
            }
        }
        //实例化操作表
        $data1 = $request->only('Rotation_name');
        // dd($data1);
        $data1['Rotation_name'] = $picname;
        $id = DB::table('rotation')->insertGetId($data1);
        // dd($id);
        if($id>0){
            return redirect('backstage/rotation')->with('msg','添加成功');
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
        $data = DB::table('rotation')->where('Rotation_id',$id)->first();
        // dd($data);
        return view('BackStage.Rotation.edit',['ob'=>$data]);
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
        // dd($id);
        $data = $request->only('Rotation_name');
        // dd($data);
        //判断是否有文件上传
        if($request->hasFile('Rotation_name')){
            // 判断上传的文件是否有效
            if($request->file('Rotation_name')->isValid()){
                // 获取上传的文件对象
                $data1 = $request->file('Rotation_name');
                // dd($data1);
                // 获取上传的文件的后缀
                $ext = $data1->getClientOriginalExtension();
                // 拼装出你需要使用的文件名
                $picname = time().rand(1000,9999).'.'.$ext;
                // 移动临时文件，生成新文件到指定目录下
                $data1->move('./admin/upload',$picname);
                if($data1->getError()>0){
                    echo '上传失败';
                }
            }
        }
        $data['Rotation_name'] = $picname;
        $row = DB::table('rotation')->where('Rotation_id',$id)->update($data);
        if($row>0){
            return redirect('backstage/rotation')->with('msg','修改成功');
        }else{
            return redirect('backstage/rotation')->with('error','修改失败');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // 删除轮播图片
    public function destroy($id)
    {
        //
        $row = DB::table('rotation')->where('Rotation_id',$id)->delete();
        if($row>0){
            return redirect('backstage/rotation')->with('msg','删除成功');
        }else{
            return redirect('backstage/rotation')->with('error','删除失败');

        }
    }
}
