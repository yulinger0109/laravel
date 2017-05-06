<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class MController extends Controller
{
    //设置默认地址
    function index($address)
    {
    	// dd($address);
    	$data = array();
    	$data['User_address'] = $address;
    	$id = session('user')->User_id;
    	// dd($data);
    	$row = DB::table('user')->where('User_id',$id)->update($data);
    	return redirect('/home/myaddress');
    }
}
