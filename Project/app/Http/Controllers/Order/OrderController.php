<?php

namespace App\Http\Controllers\Order;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // 跳转订单列表页
    public function index(Request $request)
    {
         //保存搜索条件
        $where = '';
        //实例化操作表
        $ob = DB::table('order');
        //判断是否有搜索条件
        if($request->has('Order_number')){
            //获取搜索的条件
            $name = $request->input('Order_number');
            //添加到将要携带到分页中的数组中
            $where['Order_number'] = $name;
            //给查询添加where条件
            $ob->where('Order_number','like',"%{$name}%");
        }
        //执行分页查询
        $list = $ob->paginate(4);
        return view('backstage.Order.index',['list'=>$list,'where'=>$where]);
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
    // 跳转订单修改页
    public function edit($id)
    {
        //
        $data = DB::table('order')->where('Order_id',$id)->first();
        return view('backstage.order.edit',['ob'=>$data]);
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
        $row = DB::table('order')->where('Order_id',$id)->update($data);
        if($row>0){
            return redirect('backstage/order')->with('msg','修改成功');
        }else{
            return redirect('backstage/order')->with('error','修改失败');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // 删除订单
    public function destroy($id)
    {
        //
        $row = DB::table('order')->where('Order_id',$id)->delete();
        if($row>0){
            return redirect('backstage/order')->with('msg','删除成功');
        }else{
            return redirect('backstage/order')->with('error','删除失败');
        }
    }
}
