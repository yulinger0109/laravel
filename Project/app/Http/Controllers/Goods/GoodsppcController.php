<?php

namespace App\Http\Controllers\Goods;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;

class GoodsppcController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // 跳转平板商品列表页
    public function index(Request $request)
    {
    	// dd($request);
         //保存搜索条件
        $where = '';
        //实例化操作表
        $ob = DB::table('goods')->where('Goods_cate',1);
        // 判断是否有搜索条件
        if($request->has('Goods_name')){
            //获取搜索的条件
            $name = $request->input('Goods_name');
            //添加到将要携带到分页的数组中
            $where['Goods_name'] = $name;
            //给查询添加where条件
            $ob->where('Goods_name','like',"%{$name}%");
        }

        $a = $ob->get()->except('_token');
        
        //执行分页查询
        $list = $ob->paginate(1);
        // dd($list);

        return view('BackStage.Goods.index',['list'=>$list,'where'=>$where]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // 跳转添加商品页
    public function create()
    {
        //
        return view('BackStage.Goods.add');
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
        // dd(111);
       $this->validate($request,['Goods_name' => 'required|max:200']);
       $data1 = $request->except('_token');
       // dd($data1);
    	$id = DB::table('goods')->insertGetId($data1);
        if($id>0){
        	 return redirect('backstage/goodsppc')->with('msg','添加成功');
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
        $data = DB::table('goods')->where('Goods_id',$id)->first();
        // dd($data);
        return view('BackStage.Goods.edit',['ob'=>$data]);
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

         //判断是否有文件上传
    	if($request->hasFile('Goods_pic')){
    		// 判断上传的文件是否有效
    		if($request->file('Goods_pic')){
    			$data1 = $request->only('Goods_pic');
                for ($i=0;$i<count($data1['Goods_pic']);$i++){
                    // 获取上传的文件的后缀
                    $ext = $data1['Goods_pic'][$i]->getClientOriginalExtension();
                    //获取随机文件名
                    $filename[] = time().rand(1000,9999).'.'.$ext;
                    //移动临时文件到指定目录
                    $data1['Goods_pic'][$i]->move('./admin/upload',$filename[$i]);
                    //判断是哪张图片上传错误
                    if($data1['Goods_pic'][$i]->getError()>0){
                        echo"{$i}下标的图片上传失败";
                    }
                }
            }
        }
                //判断是否有文件上传
        if($request->hasFile('Goods_bigpic')){
            // 判断上传的文件是否有效
            if($request->file('Goods_bigpic')){
                $data2 = $request->only('Goods_bigpic');
                for ($i=0;$i<count($data2['Goods_bigpic']);$i++){
                    // 获取上传的文件的后缀
                    $ext = $data2['Goods_bigpic'][$i]->getClientOriginalExtension();
                    //获取随机文件名
                    $bigfilename[] = time().rand(1000,9999).'.'.$ext;
                    //移动临时文件到指定目录
                    $data2['Goods_bigpic'][$i]->move('./admin/upload',$bigfilename[$i]);
                    //判断是哪张图片上传错误
                    if($data2['Goods_bigpic'][$i]->getError()>0){
                        echo"{$i}下标的图片上传失败";
                    }
                }
                
    		}
    	}

    	// dd($filename);
        if(!empty($filename)){
            $picname = implode(',',$filename);
            // dd($picname);
            $data['Goods_pic']  = $picname;
        }
    	if(!empty($bigfilename)){
            // dd($bigfilename);
            $bigpicname = implode(',',$bigfilename);
            // dd($bigpicname);
            $data['Goods_bigpic'] = $bigpicname;
        }
        // dd($data);
        $row = DB::table('goods')->where('Goods_id',$id)->update($data);
        // dd($row);
        if($row>0){
            return redirect('backstage/goodsppc')->with('msg','修改成功');
        }else{
            return redirect('backstage/goodsppc')->with('error','修改失败');
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    // 删除商品
    public function destroy($id)
    {
        //
        $row = DB::table('goods')->where('Goods_id',$id)->delete();
        if($row>0){
            return redirect('/backstage/goodsppc')->with('msg','删除成功');
        }else{
            return redirect('/backstage/goodsppc')->with('error','删除失败');
        }
    }
}
