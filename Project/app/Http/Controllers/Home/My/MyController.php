<?php

namespace App\Http\Controllers\Home\My;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class MyController extends Controller
{
    //
    // 跳转个人信息主页
    public function index()
    {
        $config = DB::table('config')->first();
        $links = DB::table('links')->get();
    	$order = DB::table('order')->where('Order_state',2)->get();
    	$id = session('user')->User_id;
    	// dd($id);
    	$ob = DB::table('collect')->where('Collect_uid',$id)->limit(5)->get()->all();
        // var_dump($ob);die;
    	$collect = array();
        // 遍历查询商品信息
    	foreach($ob as $v){
    		$collect[] = DB::table('goods')->where('Goods_id',$v->Collect_gid)->get()->all(); 
    		// dd($collect);
    	};
        $asd = array();
        foreach($collect as $v)
        {
            foreach($v as $v){
               $asd[] = $v;
            }
        }
        $user = DB::table('user')->where('User_id',$id)->first();
    	// dd($order);
        // dd($asd);
    	return view('Home.index',['order'=>$order,'collect'=>$asd,'links'=>$links,'config'=>$config,'user'=>$user]);
    }
}
