<?php

namespace App\Http\Controllers\Home\My;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;

class MyinfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        // dd(session('user')->User_id);
        // $id = $request->input('User_id');
        // dd($id);
        // $list = DB::table('user')->get()->where('User_id', $id);

        //  $data = DB::table('user')->where('User_id',$id)->first();
        // // dd($data);
        // return view('Home.My.myinfo',['ob' => $data]);
        // return view('Home.My.myinfo');
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
    public function show( Request $request,$id)
    {
        
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // 跳转修改界面
    public function edit(Request $request,$id)
    {
        //获取网站配置信息
        $config = DB::table('config')->first();
        //获取友情链接信息
        $links = DB::table('links')->get();
        //获取用户信息
        $data = DB::table('user')->where('User_id',$id)->first();
        // dd($data);
        return view('Home.My.myinfo',['ob' => $data,'links'=>$links,'config'=>$config]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // 执行修改个人信息
    public function update(Request $request, $id)
    {
        //
        // dd($request->all());
        $data = $request->except('_token','_method');
        // dd($data);
         // 判断是否有文件上传
        if($request->hasFile('User_pic')){
            // 判断上传的文件是否有效
            if($request->file('User_pic')->isValid()){
                // 获取上传的文件对象
                $data1 = $request->file('User_pic');
                // dd($data);
                // 获取上传的文件的后缀
                $ext = $data1->getClientOriginalExtension();
                // dd($ext);
                // 拼装出你需要使用的文件名
                $picname = time().rand(1000,9999).'.'.$ext;
                // dd($picname);
                // 移动临时文件，生成新文件到指定目录下
                $data1->move('./home/upload',$picname);
                // dd($data1);
                if($data1->getError()>0){
                    echo '上传失败';
                }
            }
            $data['User_pic'] = $picname;
        }

        $row = DB::table('user')->where('User_id',$id)->update($data);
        // dd($row);
        if($row>0){
             // dd($data);
            return redirect('home/myinfo/'.$id.'/edit')->with('msg','修改成功');
        }else{
            return redirect('home/myinfo/'.$id.'/edit')->with('error','修改失败');
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
    }
}
