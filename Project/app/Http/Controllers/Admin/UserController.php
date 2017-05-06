<?php


namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //管理员信息显示
    public function index(Request $request)
    {
        //保存搜索条件
        $where = '';
        //实例化操作表
        $ob = DB::table('admin');
        // 判断是否有搜索条件
        if($request->has('Admin_sex')){
            //获取搜索条件
            $sex = $request->input('Admin_sex');
            //添加到将要携带到分页中的数组中
            $where['Admin_sex'] = $sex;
            //给查询添加where条件
            $ob->where('Admin_sex',$sex);
        }

        if($request->has('Admin_name')){
            //获取搜索的条件
            $name = $request->input('Admin_name');
            //添加到将要携带到分页的数组中
            $where['Admin_name'] = $name;
            //给查询添加where条件
            $ob->where('Admin_name','like',"%{$name}%");
        }
        //执行分页查询
        $list = $ob->paginate(1);
        // dd($list);
        return view('BackStage.Admin.index',['list'=>$list,'where'=>$where]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('BackStage.Admin.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // 向管理员表中添加数据
    public function store(Request $request)
    {
        // 限制条件
        $this->validate($request,['Admin_name' => 'required|max:15','Admin_age' => 'integer|max:150|min:0']);
        $data = $request->except('_token');
        // dd($data);
        // 密码加密
        $a = md5($data['Admin_pass']);
        $data['Admin_pass'] = $a;
        // dd($data);
        // 向管理员表中添加数据
        $id = DB::table('admin')->insertGetId($data);
        if($id>0){
            return redirect('backstage/backstageadmin')->with('msg','添加成功');
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
        $data = DB::table('admin')->where('Admin_id',$id)->first();
        return view('BackStage.Admin.edit',['ob'=>$data]);
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
        $data = $request->only('Admin_name','Admin_age');
        $row = DB::table('admin')->where('Admin_id',$id)->update($data);
        if($row>0){
            return redirect('backstage/backstageadmin')->with('msg','修改成功');
        }else{
            return redirect('backstage/backstageadmin')->with('error','修改失败');
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
        $row = DB::table('admin')->where('Admin_id',$id)->delete();
        if($row>0){
            return redirect('/backstage/backstageadmin')->with('msg','删除成功');
        }else{
            return redirect('/backstage/backstageadmin')->with('error','删除失败');
        }
    }
}
