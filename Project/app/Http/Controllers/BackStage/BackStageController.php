<?php

namespace App\Http\Controllers\BackStage;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;

class BackStageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // 后台用户管理
    public function index(Request $request)
    {
        //保存搜索条件
        $where = '';
        //实例化操作表
        $ob = DB::table('user');
        //判断是否有搜索条件
        if($request->has('User_sex')){
            //获取搜索的条件
            $sex = $request->input('User_sex');
            //添加到将要携带到分页中的数组中
            $where['User_sex'] = $sex;
            //给查询添加where条件
            $ob->where('User_sex',$sex);
        }
        if($request->has('User_username')){
            //获取搜索的条件
            $name = $request->input('User_username');
            //添加到将要携带到分页中的数组中
            $where['User_username'] = $name;
            //给查询添加where条件
            $ob->where('User_username','like',"%{$name}%");
        }
        //执行分页查询
        $list = $ob->paginate(5);
        return view('backstage.User.index',['list'=>$list,'where'=>$where]);
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
        $data = DB::table('user')->where('User_id',$id)->first();
        return view('backstage.user.edit',['ob'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // 修改用户信息
    public function update(Request $request, $id)
    {
        //
        // dd($request);
        $data = $request->only('User_username','User_age','User_sex','User_realname','User_uemail','User_tel','User_qq','User_age');
        $row = DB::table('user')->where('User_id',$id)->update($data);
        if($row>0){
            return redirect('backstage/user')->with('msg','修改成功');
        }else{
            return redirect('backstage/user')->with('error','修改失败');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // 删除用户
    public function destroy($id)
    {
        //
        // var_dump($id);
        // exit;
        $row = DB::table('user')->where('User_id',$id)->delete();
        if($row>0){
            return redirect('backstage/user')->with('msg','删除成功');
        }else{
            return redirect('backstage/user')->with('error','删除失败');
        }
    }
}
