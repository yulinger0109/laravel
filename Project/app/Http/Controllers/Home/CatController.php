<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class CatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // 购物车主页
    public function index()
    {
        //
        $config = DB::table('config')->first();
        $links = DB::table('links')->get();
        $list = DB::table('shopping_cart')->get();
        // var_dump($list);
        // dd($list);
        // die;
        return view('Home.Cat.cat',['catlist'=>$list,'links'=>$links,'config'=>$config]);
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
    // 加入购物车
    public function show($id)
    {
        //
        // dd($id);
        $list = DB::table('goods')->where('Goods_id',$id)->first();
        // dd($list);
        $data = array();
        $data['Cart_gid'] = $list->Goods_id;
        $data['Cart_uid'] = session('user')->User_id;
        $data['Cart_num'] = 1;
        $data['Cart_pic'] = (explode(',',$list->Goods_pic)[0]);
        $data['Cart_price'] = $list->Goods_price;
        $data['Cart_name'] = $list->Goods_name;
        // dd($data);
        $row = DB::table('shopping_cart')->insertGetId($data);
        if ($row > 0) {
            return redirect('/details/'.$id);
        }
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
    // 删除购物车
    public function destroy($id)
    {
        //
        // dd(111);
        $row = DB::table('shopping_cart')->where('Cart_id',$id)->delete();
        if ($row > 0 ) {
            return redirect('/cat');
        } else {
            return redirect('/cat');
        }
        
    }

    // 结算购物车
    public function account(Request $request){
        // dd(111);
        $a = $request->only('Cart_id','num');
        // 分割商品id成为数组
        // dd($a);
        $b = explode(',',$a['Cart_id']);
        // var_dump($b);
        // array_pop($b);
        // array_pop($b);
        $id = array_slice($b,1);
        // 分割商品数量成为数组
        $c = explode(',',$a['num']);
        // array_pop($c);
        // dd($c);
        array_pop($c);
        $num = array_slice($c,1);
        // var_dump($id);
        // dd($num);
        // var_dump($id);
        // dd($num);
        $total = 0;        
        foreach ($id as $v) {
            $ob = DB::table('shopping_cart')->where('Cart_id',$v);
            $list = $ob->get();
            foreach ($list as $v) {
                // 获取商品id
                $Cart_gid[] = $v->Cart_gid;
                // 商品价格
                $Cart_price[] = $v->Cart_price;
                // 商品图片
                $Cart_pic[] = $v->Cart_pic;
                // 商品名称
                $Cart_name[] = $v->Cart_name;
                // 用户id
                $uid = $v->Cart_uid;
                $ob2 = DB::table('user')->where('User_id',$uid);
                $list2 = $ob2->get();
                foreach ($list2 as $v) {
                    $name = $v->User_realname;
                    $address = $v->User_address;
                }
                // dd($Cart_price);
            }
            

        }
        // dd($num);
        for ($i=0; $i < count($num); $i++) { 
            $total += $num[$i]*$Cart_price[$i];
        }
        // dd($total
        // 获取订单所有信息
        $data = array();
        $data['Order_price'] = implode('|',$Cart_price);
        $data['Order_gid'] = implode('|',$Cart_gid);
        $data['Order_goodspic'] = implode('|',$Cart_pic);
        $data['Order_goodsname'] = implode('|',$Cart_name);
        $data['Order_number'] = mt_rand(10000, 9999999);
        $data['Order_goodsnum'] = implode('|',$num);
        $data['Order_total'] = $total;
        $data['Order_name'] = $name;
        $data['Order_detail'] = $address;
        $data['Order_time'] = time();
        $uid = session('user')->User_id;
        $data['Order_uid'] = $uid;
        // dd($data);
        $number = DB::table('order')->insertGetId($data);
        if ($number > 0) {
            foreach ($id as $v) {
                $row = DB::table('shopping_cart')->where('Cart_id',$v)->delete();
                
            };
            // dd(row);
                    return redirect('/pay')->with('Order_id',$number);
            
        }else{
            dd(11);
        }
    }
}
