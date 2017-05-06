<?php

namespace App\Http\Controllers\PcList;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;

class PcListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // 跳转电脑商品列表页
    public function index(Request $request)
    {
        //保存搜索条件
        $where = '';
        // 实例化操作表
        $ob = DB::table('goods')->where('Goods_cate','0');
        // dd($ob);
        // 是否有搜索条件
        if ($request->has('Goods_name')) {
            // 获取搜索条件
            $pcname = $request->input('Goods_name');
            // 添加到搜索条件数组中
            $where['Goods_name'] = $pcname;
            // 给查询添加where条件
            $ob->where('Goods_name' ,'like',"%{$pcname}%");
        }
        // $a = $ob->get()->except('_token');
        
        /*for ($i=0; $i <count($a) ; $i++) { 
            $a[$i]->Goods_pic = explode(',',$a[$i]->Goods_pic);
            $a[$i]->Goods_bigpic = explode(',',$a[$i]->Goods_bigpic);
        }*/
        // dd($a[3]);
        // 执行分页查询
        $list = $ob->paginate(3);
        return view('backstage.Pc.index',['list'=>$list,'where'=>$where]);
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
        return view('backstage.Pc.add');
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
        // dd($data);
        $id = DB::table('goods')->insertGetId($data);
        if($id>0){
            return redirect('backstage/pclist')->with('msg','添加成功');
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
        // dd($id);
        $data = DB::table('goods')->where('Goods_id',$id)->first();
        return view('backstage.pc.edit',['ob'=>$data]);
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
        // dd($data);
        // var_dump($request->except('_token'));
        // 批量上传小图
        if($request->hasFile('Goods_pic')){
            // dd(data);
            // 判断上传的文件是否有效
            if($request->file('Goods_pic')){
                $data1 = $request->only('Goods_pic');
                // dd($data1);
                for ($i=0; $i < count($data1['Goods_pic']); $i++) { 
                    // dd($i);
                    // dd($data1['Goods_pic'][0]);
                    // 获取后缀
                    $ext = $data1['Goods_pic'][$i]->getClientOriginalExtension();
                    // dd($ext);
                    // 获取随机文件名
                    $filename[] = time().rand('1000','9999').'.'.$ext;
                    // dd($filename[$i]);
                    // 移动临时文件到指定目录
                    $data1['Goods_pic'][$i]->move('./admin/upload',$filename[$i]);

                    // 判断是哪张图片上传错误
                    if($data1['Goods_pic'][$i]->getError()>0){
                        echo "{$i}下标的图片上传失败";
                    }
                }
            }
        }
        // 批量上传大图
        if($request->hasFile('Goods_bigpic')){
            if($request->file('Goods_bigpic')){
                    $data2 = $request->only('Goods_bigpic');
                    // dd($data1);
                    for ($i=0; $i < count($data2['Goods_bigpic']); $i++) { 
                    // dd($i);
                    // dd($data1['Goods_pic'][0]);
                    // 获取后缀
                    $ext = $data2['Goods_bigpic'][$i]->getClientOriginalExtension();
                    // dd($ext);
                    // 获取随机文件名
                    $filebigname[] = time().rand('1000','9999').'.'.$ext;
                    // dd($filename[$i]);
                    // 移动临时文件到指定目录
                    $data2['Goods_bigpic'][$i]->move('./admin/upload',$filebigname[$i]);

                    // 判断是哪张图片上传错误
                    if($data2['Goods_bigpic'][$i]->getError()>0){
                        echo "{$i}下标的图片上传失败";
                    }
                }
                // dd($filebigname);
            }
        }
        // 获取上传之后图片名
        if (!empty($filename)) {
            $picname = implode(',',$filename);
            // dd($picname);
            $data['Goods_pic'] = $picname;
        }
        if (!empty($filebigname)) {
            $bigpicname = implode(',',$filebigname);
            $data['Goods_bigpic'] = $bigpicname;
        }
        
        // dd($data);
        $row = DB::table('goods')->where('Goods_id',$id)->update($data);
        if($row>0){
            return redirect('backstage/pclist')->with('msg','修改成功');
        }else{
            return redirect('backstage/pclist')->with('error','修改失败');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    // 删除电脑商品
    public function destroy($id)
    {
        //
        $row = DB::table('goods')->where('Goods_id',$id)->delete();
        if($row>0){
            return redirect('backstage/pclist')->with('msg','删除成功');
        }else{
            return redirect('backstage/pclist')->with('error','删除失败');
        }
    }
}
