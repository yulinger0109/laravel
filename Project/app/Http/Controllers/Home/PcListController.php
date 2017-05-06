<?php

namespace App\Http\Controllers\Home;

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
    // 列表页跳转
    public function index(Request $request)
    {
        //
        $config = DB::table('config')->first();
        $links = DB::table('links')->get();
        $where = '';

        $ob = DB::table('goods')->where([['Goods_cate','0'],['Goods_under','1']]);
        // dd($request->except('_token'));
        if ($request->has('Goods_name')) {
            // 获取搜索条件
            $pcname = $request->input('Goods_name');
            // 添加到搜索条件数组中
            $where['Goods_name'] = $pcname;
            // 给查询添加where条件
            $ob->where('Goods_name' ,'like',"%{$pcname}%");
        }
        $a = $request->only('Goods_price');
        // dd($a);
        if (!empty($a['Goods_price'][0]) || !empty($a['Goods_price'][1])) {
            if(empty($a['Goods_price'][0])){ $a['Goods_price'][0] = 0;}
            if (empty($a['Goods_price'][1])) {
                $a['Goods_price'][1] = 9999999999;

            }
            // dd($a);
            // dd($b);
            $where['Goods_price'] = [$a['Goods_price'][0],$a['Goods_price'][1]] ;
            // dd($where);
            $ob->whereBetween('Goods_price',[$where['Goods_price']]);
        }
        // dd($list);
        $b = DB::table('goods')->get();
        // dd($b);
        // 分页
        $a = ceil(count($b)/4);
        $count = $a;
        // die;
        $list = $ob->paginate(4);
        // dd($where);
        return view('home.pclist.index',['list'=>$list,'where'=>$where,'count'=>$count,'links'=>$links,'config'=>$config]);
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
    public function destroy($id)
    {
        //
    }
}
