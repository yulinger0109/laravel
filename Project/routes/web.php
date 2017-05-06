<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//前台主页跳转
Route::resource('/', 'Home\IndexController');
//后台首页跳转
Route::get('/backstage', function(){
	return view('BackStage.index');
})->middleware('login');
//后台路由群组
Route::group(['prefix' => 'backstage','middleware'=>'login'],function(){
	//后台用户管理
	Route::resource('/backstageadmin','Admin\UserController');
	//后台友链管理
	Route::resource('/links','Links\LinksController');
	//用户退出
	Route::get('over','BackStage\LoginController@over');
	//商品管理平板电脑类
	Route::resource('/goodsppc','Goods\GoodsppcController');
	//轮播图片管理
	Route::resource('/rotation','Rotation\RotationController');
	// 后台用户表
	Route::resource('/user','BackStage\BackStageController');
	// 后台电脑详情表
	Route::resource('/pclist','PcList\PcListController');
	// 后台订单详情
	Route::resource('/order','Order\OrderController');
	// 后台网站配置管理
	Route::resource('/config','Config\ConfigController');

});
//后台登录
Route::get('backstage/login','BackStage\LoginController@index');
Route::post('backstage/dologin','BackStage\LoginController@dologin');
//验证码
Route::get('backstage/captch/{tmp}','BackStage\LoginController@captch');
//后台注册管理员
Route::get('backstage/register','BackStage\RegisterController@index');
Route::post('backstage/doregister','BackStage\RegisterController@doregister');
Route::get('backstage/change','BackStage\LoginController@change');
	
//前台个人中心路由群组
Route::group(['prefix' => 'home', 'middleware' => 'log'],function(){
		//前台个人中心跳转
	Route::get('/my','Home\My\MyController@index');
	//前台个人信息
	Route::resource('/myinfo','Home\My\MyinfoController');
	// Route::get('myinfo/id','Home\My\MyinfoController@show');
	//前台密码修改
	Route::resource('/mypass','Home\My\MypassController');
	//前台收货地址
	Route::resource('/myaddress','Home\My\MyaddressController');
	Route::resource('/address','Home\My\AddressController');
	//前台我的收藏
	Route::resource('/collect','Home\My\MycollectController');
	//前提评价晒单
	Route::resource('/appraise','Home\My\MyappraiseController');
	// 我的订单
	Route::resource('/myorder','Home\My\MyorderController');
	// 评价晒单
	Route::resource('/appraise','Home\My\AppraiseController');
});
// 前台电脑商品列表页
Route::resource('/pclist','Home\PcListController');
// 前台登录注册页跳转
Route::Resource('/login','Home\LoginController');
// 前台退出
Route::get('/logout','Home\LogoutController@logout');
// 购物车
Route::resource('/cat','Home\CatController');
Route::post('/cat','Home\CatController@account');
// 详情页
Route::resource('/details','Home\DetailsController');
// 支付页
Route::resource('/pay','Home\PayController');

//前台平板电脑列表页
Route::resource('/ppclist','Home\Ppclist\PpclistController');
//默认地址
Route::get('/home/aaddress/{address}','Home\MController@index');


