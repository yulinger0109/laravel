<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="x-dns-prefetch-control" content="on" />
	<link rel="dns-prefetch" href="" />
	<link rel="dns-prefetch" href="" />
	<link rel="dns-prefetch" href="" />
	<title>{{ $config->Config_title }}</title>
	<meta name="keywords" content="联想中国官网,联想电脑,联想服务器，联想官方网上商城" />
	<meta name="description" content="联想官方网上商城,为您提供最新联想笔记本电脑,联想平板电脑,联想手机,联想台式机,联想一体电脑,联想服务器,联想外设数码产品,联想智能电视等产品在线购买及售后服务,您提供愉悦的网上购物体验" />
	
	

 <link rel="stylesheet" type="text/css" href="/Home/css/jquery-ui.min.css">
 <link rel='stylesheet' href='/Home/css/top.logo.foot.myicon.min_1.css'>
<link rel="stylesheet" href="/Home/css/model_framework_page_base.fade.min.fa9c8e98_2.css" />
    <link rel='stylesheet' href='/Home/css/top.logo.foot.myicon.min.css'>

<!-- 是否有导航，首页跟公共的导航有区别 -->

	<link rel='stylesheet' href='/Home/css/row-nav.min.css'>
	<link rel="stylesheet" type="text/css" href="/Home/css/icall.css">

<!-- 是否有分类 -->





<link rel="stylesheet" href="/Home/css/1eeae65fe21e461197c9170ddbf3839b.css" />
<link rel="stylesheet" href="/Home/css/model_framework_page_base.fade.min.fa9c8e98.css" />



<link rel='stylesheet' href='/Home/css/lenovo_search_header.min.css' />
<link rel='stylesheet' href='/Home/css/lenovo_search_header.min_1.css' />
    <link href="/Home/css/lenovo_search.css" type="text/css" rel="stylesheet" />	
	
	



	<style>
		.topnav{position: absolute;top: 0;right: 0;width: 1010px;height: 40px;}
		.shop_nav_c{width: 190px;}
		.shop_banner_c{width: 770px;margin:0 10px;}
		.shop_news_c{width: 220px;}
		.shop_mainhot_c{margin-top: 10px;}
		.shop_floornav_c{position: fixed;left: 50%;margin-left: -640px;top: 50%;margin-top: -98px;width: 24px;height: 196px;z-index: 999;}
		.shop_rightbar_c{position: fixed;right: 10px;}
	</style>
</head>
<body>
	
<!-- ----------------===============     top     ===============--------------- -->
@if ($config->Config_state == 0)
	<div style="align:center;font-size:30px">网站正在维护，请稍后登录!!</div>
@else

<div class="top_box">
	<div class="top_cont">

		<ul class="top_ul top_red" id="top-nav">
		    	<li><a href="">个人及家用产品</a><em></em></li>
		        <li><a href="">商用产品及解决方案</a><em></em></li>
		        <li><a href="">聚享汇会员专享</a><em></em></li>
		        <li><a href="">销售网点查询</a><em></em></li>
	    </ul>

	    <div class="top_link top_red">
	        	<div class="top_title">社交平台<a href="javascript:;" class="top_usepng top_down"></a></div>
		        <ul>
		          <li><a href="" latag="latag_pc_common_header_share_guanfangweibo"><span class="top_usepng icont_sina"></span><em>联想官方微博</em></a></li>
		          <li><a href="" latag="latag_pc_common_header_share_yangyuanqingweibo"><span class="top_usepng icont_yyq"></span><em>杨元庆微博</em></a></li>
		          <li><a href="" latag="latag_pc_common_header_share_guanfangweixin"><span class="top_usepng icont_weixin"></span><em>联想官方微信</em></a></li>
		          <li><a href="" latag="latag_pc_common_header_share_tieba"><span class="top_usepng icont_tieba"></span><em>百度贴吧联想吧</em></a></li>
		          <li><a href="" latag="latag_pc_common_header_share_xingqubuluo"><span class="top_usepng icont_xqbl"></span><em>联想兴趣部落</em></a></li>
		          <li><a href="" latag="latag_pc_common_header_share_qqzone"><span class="top_usepng icont_qzone"></span><em>联想QQ空间</em></a></li>
		          <li><a href="" latag="latag_pc_common_header_share_guanfangshequ"><span class="top_usepng icont_shequ"></span><em>联想官方社区</em></a></li>
		        </ul>
	    </div>
	    <div class="top_link top_red">
	        	<div class="top_title" onclick="window.open('http://www.lenovo.com.cn/app.html');"><span></span>手机版<a href="javascript:;" class="top_usepng top_down"></a></div>
		        <ul class="phone_ul">
		          <li class="phone_d">
		          	<em class="phoneicon"></em>
		          	<div class="t1 t">联想商城客户端</div>
		          	<img class="phones" src="Home/picture/0da8a977-593c-41eb-af5d-5fac4d3f7f52.jpg">
		          </li>
		        </ul>
	    </div>

	    <div class="top_login_r top_red">
	    	<div class="top_login_title"><a href="/cat" latag="latag_pc_common_header_shopcart">购物车</a>&nbsp;</div>
	    </div>

	    		@if(session()->has('user'))
		<div class="top_phone top_username" >
			<div class="top_phone_title">{{ session('user')->User_username }}<a href="" class=" top_usepng top_downs"></a></div>
			<ul><li class="top_usercenter" ><a href="/home/myorder" latag="latag_pc_common_header_myorder">我的订单</a></li>
				<li><a href="/home/my" latag="latag_pc_common_header_myaccount">我的商城</a></li>
                <li><a href="/logout" class="logout" latag="latag_pc_common_header_logout">退出登录</a></li>
			</ul>
		</div>
		@else
		<ul class="top_login top_red">
			        <!-- <li><a href="#">18101020964</a></li> -->
			
			<li class="top_loginbtn"><a href="/login"  latag="latag_pc_common_header_login">登录</a></li>
            <li class="top_regist"><a href="/login"  latag="latag_pc_common_header_register">注册</a></li>
		</ul>
		@endif
	</div>
</div>



<div class="piece ad_2016_08_06_11_48_58">
<style type="text/css">
    .ad_2016_08_06_11_48_58 #hot_school {
        width: 1200px;
        margin: 0 auto;
        position: relative;
    }

        .ad_2016_08_06_11_48_58 #hot_school .hot_sch_big {
            display: block;
            width: 1200px;
            height: 400px;
            position: relative;
            overflow: hidden;
        }

        .ad_2016_08_06_11_48_58 #hot_school .hot_sch_small {
            width: 1200px;
            height: 100px;
            position: relative;
            overflow: hidden;
            display: none;
        }

        .ad_2016_08_06_11_48_58 #hot_school .sch_tomin, #hot_school .sch_close {
            position: absolute;
            right: 5px;
            top: 5px;
            display: inline-block;
            width: 20px;
            height: 20px;
            text-indent: -9999px;
            cursor: pointer;
        }

        .ad_2016_08_06_11_48_58 #hot_school .sch_tomin {
            background: url(Home/images/icon_new.png) -36px -7px;
        }

        .ad_2016_08_06_11_48_58 #hot_school .sch_close {
            background: url(Home/images/icon_new.png) -7px -7px;
            display: none;
        }
</style>
	<div id="hot_school">
	</div>
<input type="hidden" id="_le_ad_autotime" value="500"/>
</div>



<!-- ----------------===============     logo     ===============--------------- -->
<div class="logo_box">
	<h1 class="logo"><a href="http://cplenovo.com" latag="latag_pc_common_logobox">联想官方网上商城</a></h1>
	<div class="logo_text">
		<div class="search_box think_search_header">
  <div style="display: none">
    <object id="plugin0" type="application/x-rloader">
      <param name="onload" value="pluginLoaded" />
    </object>
  </div>

  <a href="javascript://" class="btn_get_machineno" id="btn_get_machineno">自动获取主机编号 |</a><a href="javascript://" class="btn_haoget_machineno" id="btn_haoget_machineno"> 如何获取主机编号</a>
	<a tag='searchButton' class="serch_box_img" latag="latag_pc_search_confirm"><span></span></a>
	<input type="text" latag="latag_pc_search_keyword" />
  <i id="remove_keyword"></i>
	<ul class="resou_keyword">

  </ul>
	<div id="suggestContainer"></div>
</div>
	</div>
</div>



	<div class="nav_index">
			<div class="ad">
				<a href="http://copylenovo.com"><img src="/Home/picture/2b6bc6a8-2f16-45ee-8f96-741fc25054cd_1.gif"></a>
	</div>

		<div class="nav_box">
	<ul>
				<li class="nav_namebox">
					<a  href=""  
					class="nav_name" latag="latag_pc_common_navmain_1_http://www.lenovo.com.cn/series/product/59482.html">小新Air13 Pro</a>					
				</li>	
				<li class="nav_namebox">
					<a  href=""  
					class="nav_name" latag="latag_pc_common_navmain_2_http://www.lenovo.com.cn/xiaoxin.html">小新铺子</a><span class="nav_usepng nav_new"></span>					
				</li>	
				<li class="nav_namebox">
					<a  href=""  
					class="nav_name" latag="latag_pc_common_navmain_3_http://www.lenovo.com.cn/c2c/new/c2c_center.html">合伙人</a><span class="nav_usepng nav_hot"></span>					
				</li>	
				<li class="nav_namebox">
					<a  href=""  
					class="nav_name" latag="latag_pc_common_navmain_4_http://www.lenovo.com.cn/stryout/tryhtml/index.html">0元试用</a>					
				</li>	
				<li class="nav_namebox">
					<a  href=""  
					class="nav_name" latag="latag_pc_common_navmain_5_http://www.lenovo.com.cn/oldchangenew/oldchangenew.html">以旧换新</a>					
				</li>	
				<li class="nav_namebox">
					<a  href=""  
					class="nav_name" latag="latag_pc_common_navmain_6_http://www.lenovo.com.cn/lenovomaker/index">私人定制</a>					
				</li>	
				<li class="nav_namebox">
					<a  href=""   
					class="nav_name" latag="latag_pc_common_navmain_7_http://www.lenovo.com.cn/activity/thinkmarketing/jsd/index.html">急速达</a>					
				</li>	
				<li class="nav_namebox">
					<a  href=""   
					class="nav_name" latag="latag_pc_common_navmain_8_http://support.lenovo.com.cn/lenovo/wsi/index.html">服务</a>					
						<div class="nav_text">
								<p><a href="" latag="latag_pc_common_navmain_81_http://appserver.lenovo.com.cn/Lenovo_Service_Index.html">服务支持</a></p>
								<p><a href="" latag="latag_pc_common_navmain_82_http://support1.lenovo.com.cn/lenovo/wsi/Modules/NewDrive.aspx">驱动下载</a></p>
								<p><a href="" latag="latag_pc_common_navmain_83_http://iknow.lenovo.com/">联想知识库</a></p>
						</div>
				</li>	
				<li style="padding-right:0px;" class="nav_namebox">
					<a  href=""   
					class="nav_name" latag="latag_pc_common_navmain_9_http://club.lenovo.com.cn/">社区</a>					
				</li>	
	</ul>
</div>

	</div>


<style type="text/css">
.rightbar{width: 36px;border-top: 1px solid #e6e6e6;position: fixed;z-index:9999;right: 50%;top: 48%;margin-right: -650px;margin-top: -115px;}
.rightbar .totop{display: block;width: 36px;height: 22px;background-position: -254px -491px;margin-top: 4px;text-indent: -9999px;}
.rightbar li{position: relative;}
.rightbar li .icon_block{background-color: #fff;display: block;width: 34px;height: 34px;text-align: center;line-height: 34px;border: 1px solid #e6e6e6;border-top: 0;color: #fff;text-indent: -9999px;}
.rightbar li .myicon_hotline{background-position: -4px -485px;}
.rightbar li .myicon_ask{background-position: -49px -485px;}
.rightbar li .myicon_stores{background-position: -98px -486px;}
.rightbar li .myicon_phone{line-height: 17px;line-height: 14px;height: 30px;padding-top: 4px;background-position: -144px -486px;}
.rightbar li .myicon_teasing{background-position: -192px -486px;}
.rightbar li .icon_block:hover,.rightbar li.active .icon_block{text-indent: 0;background: #7ecef4;}
.rightbar li .rightbar_show{width: 200px;position: absolute;right: 35px;top: -1px;border: 1px solid #e6e6e6;border-bottom: 0; background: #fff;z-index: 9999;display: none;}
.rightbar li.active .rightbar_show{display: block;}
.rightbar .rightbar_show .myicon_small{position: absolute;right: -5px;top: 13px;display: block;width: 5px;height: 8px;background-position: -61px -464px;}
.rightbar .rightbar_show dt,.rightbar .rightbar_show dd{float: left;border-bottom: 1px solid #e6e6e6;}
.rightbar .rightbar_show dt{width: 65px;height: 45px;}
.rightbar .rightbar_show dd{width: 130px;padding:7px 0 0 5px;height: 38px;line-height: 16px;color: #6f7170;}
.rightbar .rightbar_show dd a{color: #6f7170;}
.rightbar .rightbar_show_ask dt{width: 55px;}
.rightbar .rightbar_show_ask dd{width: 140px;}
.rightbar .rightbar_show_hotline .hover_lenovo{background-position: -1px -527px;}
.rightbar .rightbar_show_hotline .hover_thinkpad{background-position: -66px -526px;}
.rightbar .rightbar_show_hotline .hover_phone{background-position: -129px -525px;}
.rightbar .rightbar_show_hotline .hover_service{background-position: -196px -525px;}
.rightbar .rightbar_show_hotline .hover_TV{background-position: -260px -525px;}
.rightbar .rightbar_show_hotline .hover_shangyong{background-position: -318px -525px;}
.rightbar .rightbar_show_hotline .hover_tongxin{background-position: -356px -480px;}
.rightbar .rightbar_show_ask .hover_before{background-position: -329px -526px;}
.rightbar .rightbar_show_ask .hover_after{background-position: -395px -526px;}
.rightbar .rightbar_show_ask .hover_gw{background-position: -58px -700px;}
.rightbar li .rightbar_show_phone{width: 250px;}
.rightbar .rightbar_show_phone h3{text-align: center;font-size: 13px;color: #e2231a;font-weight: normal;padding: 15px 0;}
.rightbar .rightbar_show_phone ul{border-bottom: 1px solid #e6e6e6;padding: 0 19px 15px 19px;}
.rightbar .rightbar_show_phone li{float: left;text-align: center;width: 76px;padding: 0 15px;}
.rightbar .rightbar_show_phone li i{display: block;width: 76px;height: 76px;}
.rightbar .rightbar_show_phone li .icon_wap{background-position: -4px -592px;}
.rightbar .rightbar_show_phone li .icon_app{background-position: -88px -592px;}
.rightbar .rightbar_show_phone li span{display: block;padding-top: 5px;}
#rightIcon{width: 16px;height: 36px;position: fixed;right: 0;top: 50%;margin-top: -101px;z-index: 999;cursor: pointer;display: none;background-position: -328px -476px;}
#twoDimentionCode{display:none}
.twoDimentionCode{display:none;padding:2px;position:fixed;left:50%;bottom:50px;margin-left:612px;z-index:999;border:solid 1px #ccc;background:#fff;text-align:center;}
.twoDimentionCode em{background-position:-88px -592px;display:block;width:76px;height:76px;margin:0 auto;margin-bottom:5px}
.twoDimentionCode span{line-height:12px;}
.twoDimentionCode .red{color:#e2231a}
.ewm_red{color: red;}
</style>
<div class="rightbar" id="rightbar">
    <ul>
    	<li class="rightbar_hover">
    		<a href="javascript:;" class="myicon icon_block myicon_hotline" title="热线">热线</a>
			<div class="rightbar_show rightbar_show_hotline">
				<dl class="clearfix">
					<dt class="myicon hover_lenovo"></dt>
					<dd><a href="javascript:;">商城服务热线<br>4000-888-222</a></dd>
					<dt class="myicon hover_thinkpad"></dt>
					<dd><a href="javascript:;">商城服务热线<br>4000-888-222</a></dd>
					<dt class="myicon hover_phone"></dt>
					<dd><a href="javascript:;">手机频道服务热线<br>400-818-8818</a></dd>
					<dt class="myicon hover_service"></dt>
					<dd><a href="javascript:;">电脑增值服务热线<br>400-890-1566</a></dd>
				
                    <dt class="myicon hover_shangyong"></dt>
                    <dd><a href="javascript:;">联想商用客户热线<br>400-813-6161</a></dd>
                    <dt class="myicon hover_tongxin"></dt>
                    <dd><a href="javascript:;">通信卡服务热线<br>400-641-0041</a></dd>
				</dl>
				<span class="myicon myicon_small"></span>
			</div>
    	</li>
    	<li class="rightbar_hover">
    		<a href="javascript:;" class="myicon icon_block myicon_ask" title="咨询">咨询</a>
    		<div class="rightbar_show rightbar_show_ask">
				<dl class="clearfix">
					<dt class="myicon hover_before"></dt>
					<dd><a class="onlinkLink" href="javascript:void(0)"  >售前咨询，获取更多优惠<br>9:00－22:00</a></dd>
					<dt class="myicon hover_after"></dt>
					<dd><a   href="">服务类售后咨询<br>00:00－24:00</a></dd>
					<dt class="myicon hover_gw"></dt>
  					<dd><a   href="">企业IT咨询顾问<br>4009868999</a></dd>
				</dl>
				<span class="myicon myicon_small"></span>
			</div>
    	</li>
    	<li>
    		<a href="" class="myicon icon_block myicon_stores" title="门店">门店</a>
    	</li>
    	<!--li class="rightbar_hover">
    		<a href="javascript:;" class="myicon icon_block myicon_phone" title="门店">手机版</a>
    		<div class="rightbar_show rightbar_show_phone">
    			<h3>商城客户端，首次下单立减10元</h3>
    			<ul class="clearfix">
    				<li>
    					<i class="myicon icon_wap"></i>
    					<span>商城WAP端</span>
    				</li>
    				<li>
    					<i class="myicon icon_app"></i>
    					<span>商城客户端</span>
    				</li>
    			</ul>
    			<span class="myicon myicon_small"></span>
    		</div>
    	</li-->
    	<li>
    		<a href="" class="myicon icon_block myicon_teasing" title="吐槽">吐槽</a>
    	</li>
    </ul>
    <a href="javascript:;" class="myicon totop" id="totop" title="返回顶部">返回顶部</a>
</div>
<!-- <div id="rightIcon" class="myicon"></div>
<div class="twoDimentionCode" id="twoDimentionCode">
    <em class="myicon"></em>
    <span>商城客户端</span><br />
    <span class="ewm_red">首单立减10元</span>
</div> -->
<section >
	@yield('content')
</section>
<!-- ----------------===============    foot     ===============--------------- -->
<!-- footer -->
<style type="text/css">.ns_p4 .ns_footer_line {
	width: 1200px;
	width: 1200px;
	box-sizing: border-box;
	margin: 0 auto;
}</style>
<div id="foot_div" style="clear:both;">
<!--服务列表-->
<div class="ns_Services-list ns_fixClear" id="Services-list">
    <div class="ns_w">
    	<img width="1200" height="83" src="/Home/images/111.jpg" class="lazy_img"/>
        <ul>
            <li class="ns_services-1">官方品质保障 <em>the official quality guarantee</em></li>
            <li class="ns_services-2">1对1客户式服务<em>one-to-one customer</em></li>
            <li class="ns_services-3">个性化定制服务<em>personalized customer service</em></li>
            <li class="ns_services-4">全场免费速递<em>full free delivery</em></li>
            <li class="ns_services-5">无忧完美服务<em>perfect customer service</em></li>
            <li class="ns_services-6">精美专利包装<em>patent packaging</em></li>
            <li class="ns_services-7">新品抢先体验<em>new experience</em></li>
        </ul>
    </div>
</div>
<!--服务列表-->
<!--页脚-->
<div id="footer">
    <div class="ns_p2">
        <div class="ns_w ns_fixClear">
            <dl>
                <dt> <a>购物指南 </a></dt>
                <dd> <a   href="">服务商信息</a> <a   href="">购买流程</a> <a   href="">注册登录</a></dd>
            </dl>
            <dl>
                <dt> <a>配送方式</a></dt>
                <dd> <a   href="">配送方式</a> <a   href="">配送方式信息</a> <a   href="">签收原则</a> <a   href="">物流查询</a></dd>
            </dl>
            <dl>
                <dt> <a>支付方式  </a></dt>
                <dd> <a   href="">支付方式</a> <a   href="">支付问题</a><a   href="">分期支付</a></dd>
            </dl>
            <dl>
                <dt> <a>订单信息  </a></dt>
                <dd> <a   href="">订单信息</a> <a   href="">其它频道订单发票</a><a   href="">手机频道订单发票</a> </dd>
            </dl>
            <dl>
                <dt> <a>售后服务  </a></dt>
                <dd> <a   href="">售后政策总则</a><a   href="">手机售后政策总则</a><a   href="">24小时在线客服</a></dd>
            </dl>
            <dl style="padding-right:0;">
                <dt> <a>其他说明  </a></dt>
                <dd> <a   href="">服务承诺</a> <a   href="//">账户安全</a> <a   href="">产品安全</a><!-- <a style="cursor: pointer;" id="bank_btn" href="javascript:void(0);">银行分期</a> --></dd>
                <div class="gj_img">
                    <div class="gq_box" id="gq_box" style="display: none;">
                        <ul>
                            <li><a href="">Algeria</a></li>
                            <li><a href="">Angola</a></li>
                            <li><a href="">Argentina</a></li>
                            <li><a href="">Australia</a></li>
                            <li><a href="">Austria</a></li>
                            <li><a href="">Bahrain</a> </li>
                            <li><a href="">Bangladesh</a> </li>
                            <li><a href="">Belgium</a> </li>
                            <li><a href="">Benin</a> </li>
                            <li><a href="">Bolivia</a></li>
                            <li><a href="">Botswana</a> </li>
                            <li><a href="">Brazil</a></li>
                            <li><a href="">Bulgaria</a>  </li>
                            <li><a href="">Burkina</a>  </li>
                            <li><a href="">Burundi</a>  </li>
                            <li><a href="">Cameroon</a> </li>
                            <li><a href="">Canada - English</a> </li>
                            <li><a href="">Canada - Fran?ais</a>   </li>
                            <li><a href="">Cape Verde</a> </li>
                            <li><a href="">Central African Republic</a>   </li>
                            <li><a href="">Central America</a>    </li>
                            <li><a href="">Chad</a>  </li>
                            <li><a href="">Chile</a> </li>
                            <li><a href="">China</a>   </li>
                            <li><a href="">Colombia</a>      </li>
                            <li><a href="">Comoros</a> </li>
                            <li><a href="">Congo, Dem. Rep. (Kinshasa)</a></li>
                            <li><a href="">Congo, Rep. (Brazzaville)</a></li>
                            <li><a href="">Croatia</a></li>
                            <li><a href="">Czech Republic</a> </li>
                            <li><a href="">C?te d'Ivoire (Ivory Coast)</a></li>
                            <li><a href="">Denmark</a></li>
                            <li><a href="">Deutschland</a></li>
                            <li><a href="">Djibouti</a></li>
                            <li><a href="">Ecuador</a></li>
                            <li><a href="">Egypt</a></li>
                            <li><a href="">Equatorial Guinea</a></li>
                            <li><a href="">Eritrea</a></li>
                            <li><a href="JavaScript:;">Estonia</a></li>
                            <li><a href="">Ethiopia</a></li>
                            <li><a href="">Finland</a></li>
                            <li><a href="">France</a></li>
                            <li><a href="">Gabon</a></li>
                            <li><a href="">Gambia, The</a></li>
                            <li><a href="">Ghana</a></li>
                            <li><a href="">Greece</a></li>
                            <li><a href="">Guinea</a></li>
                            <li><a href="">Guinea-Bissau</a></li>
                            <li><a href="">Hong Kong S.A.R of China - English</a></li>
                            <li><a href="">Hong Kong S.A.R of China - 繁體中文</a></li>
                            <li><a href="">Hungary</a></li>
                            <li><a href="">India</a></li>
                            <li><a href="">Indonesia</a></li>
                            <li><a href="">Ireland</a></li>
                            <li><a href="">Israel</a></li>
                            <li><a href="">Italy</a></li>
                            <li><a href="">Japan</a></li>
                            <li><a href="">Jordan</a></li>
                            <li><a href="">Kazakhstan</a></li>
                            <li><a href="">Kenya</a></li>
                            <li><a href="">Korea</a></li>
                            <li><a href="">Kuwait</a></li>
                            <li><a href="JavaScript:{ }">Lebanon</a></li>
                            <li><a href="">Lesotho</a></li>
                            <li><a href="">Liberia</a></li>
                            <li><a href="">Libya</a></li>
                            <li><a href="JavaScript:{ }">Lithuania</a></li>
                            <li><a href="">Madagascar</a></li>
                            <li><a href="">Malawi</a></li>
                            <li><a href="">Malaysia</a></li>
                            <li><a href="">Mali</a></li>
                            <li><a href="">Mauritania</a></li>
                            <li><a href="">Mauritius</a></li>
                            <li><a href="">Mexico</a></li>
                            <li><a href="">Morocco</a></li>
                            <li><a href="">Mozambique</a></li>
                            <li><a href="">Myanmar</a></li>
                            <li><a href="">Namibia</a></li>
                            <li><a href="">Netherlands</a></li>
                            <li><a href="">New Zealand</a></li>
                            <li><a href="">Niger</a></li>
                            <li><a href="">Nigeria</a></li>
                            <li><a href="">Norway</a></li>
                            <li><a href="">Oman</a></li>
                            <li><a href="">Paraguay</a></li>
                            <li><a href="">Peru</a></li>
                            <li><a href="">Philippines</a></li>
                            <li><a href="">Poland</a></li>
                            <li><a href="">Qatar</a></li>
                            <li><a href="">Romania</a></li>
                            <li><a href="">Russian Federation</a></li>
                            <li><a href="">Rwanda</a></li>
                            <li><a href="">Réunion</a></li>
                            <li><a href="">Saint Helena</a></li>
                            <li><a href="">Saudi Arabia</a></li>
                            <li><a href="">Senegal</a></li>
                            <li><a href="">Serbia</a></li>
                            <li><a href="">Seychelles</a></li>
                            <li><a href="">Sierra Leone</a></li>
                            <li><a href="">Singapore</a></li>
                            <li><a href="">Slovakia</a></li>
                            <li><a href="">Slovenia</a></li>
                            <li><a href="">Somalia</a></li>
                            <li><a href="">South Africa</a></li>
                            <li><a href="">South Sudan</a></li>
                            <li><a href="">Spain</a></li>
                            <li><a href="">Sri Lanka</a></li>
                            <li><a href="">Sudan</a></li>
                            <li><a href="">Swaziland</a></li>
                            <li><a href="">Sweden</a></li>
                            <li><a href="">Switzerland - Deutsch</a></li>
                            <li><a href="">Switzerland - Fran?ais</a></li>
                            <li><a href="">S?o Tomé and Príncipe</a></li>
                            <li><a href="">Taiwan</a></li>
                            <li><a href="">Tanzania</a></li>
                            <li><a href="">Thailand</a></li>
                            <li><a href="">Togo</a></li>
                            <li><a href="">Tunisia</a></li>
                            <li><a href="">Turkey</a></li>
                            <li><a href="">Uganda</a></li>
                            <li><a href="">Ukraine</a></li>
                            <li><a href="">United Arab Emirates</a></li>
                            <li><a href="">United Kingdom</a></li>
                            <li><a href="">United States</a></li>
                            <li><a href="">Uruguay</a></li>
                            <li><a href="">Venezuela</a></li>
                            <li><a href="">Vietnam</a></li>
                            <li><a href="">Western Sahara</a> </li>
                            <li><a href="">Zambia</a></li>
                            <li><a href="">Zimbabwe</a></li>
                        </ul>
                    </div>
                    <div id="b_bit"></div>
                </div>
                <!--
                <ul class="ns_bank" id="ns_bank">
                    <span class="jt_top"></span>
                    <li><a href="">招商旗舰店</a></li>
                    <li><a href="">中信旗舰店</a></li>
                    <li><a style="border-bottom:0;" href="">工行旗舰店</a></li>
                </ul>
                -->
            </dl>
        </div>
    </div>

</div>
 
<div class="ns_box">
    <div class="ns_p4 ns_fixClear">
        <div class="ns_w">
          <div class="ns_footer_line">
          @foreach ($links as $v)
          @if($v->Links_switch == 0)
          @else
            <a href="{{ $v->Links_url }}"  title="{{ $v->Links_name }}"  >{{ $v->Links_name }}</a><span>&nbsp;&nbsp;</span>
          @endif
          @endforeach
			<!--<a href="" title="分类大全"  >分类大全</a><span>|</span>
          	<a href="" title="联想产品大全"  >联想产品大全</a><span>|</span>-->
            </div>
          <div class="ns_footer_line">版权所有：1998-2016 {{ $config->Config_keys }}<span>|</span><a href="" title="法律公告"  >法律公告</a><span>|</span><a href="" title="隐私保护"  >隐私保护</a><span>|</span><a href=""  >京ICP备11035381</a><span>|</span><i style="font-style:normal;">京公网安备110108007970号</i><span>|</span><a href="" title="营业执照"  >营业执照：110000410127232</a><span>|</span><a href="" title=" 销售网点"  ><em class="usepng icon_addr1"></em>销售网点</a><span>|</span><a href="" title=" "  ><em class="usepng icon_addr2"></em>{{ $config->Config_desn }}</a></div>
        </div>
    </div>  
</div>
<!--页脚-->
</div>

</body>
		





<script type="text/javascript" src="/Home/js/df57c9226f904284a1b89409b8132399.js"></script>
<script src="/Home/js/juicer-min.lenovo-plugin-need.loadjs.unslider.lazy.asynloadinc.min.72aa3653.js"></script>





		<!--隐藏特色购代码-->
		
	 		<script>
			    (function(){
			
			        String.prototype.trim=function() {
			            return this.replace(/(^\s*)|(\s*$)/g, '');
			        }
			
			        function getCookie(key){
			            if(!document.cookie){
			                return "";
			            }
			            var arr = document.cookie.split(';');
			
			            var item = "";
			            for(var i=0;i<arr.length;i++){
			                var tmp1 = arr[i].split('=')[0].trim();
			                if(tmp1 == key){
			                    item = arr[i].split('=')[1].trim();
			                    break;
			                }
			            }
			            return item;
			        }
			
			        function setCookie(val){
			            document.cookie= "tesegouKey="+val;
			        }
			
			        function hideTeSeGou(){
			        	if($("#tsghidden").length<=0){
					 		$(".tsg_2016_06_16_18_21_41").hide();
						}
			        }
			        function showTeSeGou(){
			            $(".tsg_2016_06_16_18_21_41").show();
			        }
			
			        var bl = getCookie("tesegouKey");
			        
			        if(bl == "true"){
			            showTeSeGou();
			        }else if(bl == "false") {
			            hideTeSeGou();
			        }else{
			            var ran = Math.ceil(Math.random()*100)%2;
			            if(ran == 0){
			                setCookie("true");
			            }else{
			                hideTeSeGou();
			                setCookie("false");
			            }
			        }
			    })();
			</script>
		<!--隐藏特色购止-->
		
		
		
		
		<script type="text/javascript">
var _lenovo_is_need_yfxjs=1;//0-不需要易分析js  1-需要易分析js
if (_lenovo_is_need_yfxjs && _lenovo_is_need_yfxjs==1) {
	var _trackDataType = 'web';
	var _Schannel_website_id = 'lenovoshop_pc';
}
</script>
<!--统计代码-->

<!--易分析-->
<script type="text/javascript">
passport.isLogin();
function loadScript(url, callback) {
    var script = document.createElement("script"),callback = callback || function(){};
    script.type = "text/javascript";
    if (script.readyState) { //IE 
        script.onreadystatechange = function () {
            if (script.readyState == "loaded" ||
            script.readyState == "complete") {
                script.onreadystatechange = null;
                callback();
            }
        };
    } else { //Others: Firefox, Safari, Chrome, and Opera 
        script.onload = function () {
            callback();
        };
    }
    script.src = url;
    document.body.appendChild(script);
}
if(_lenovo_is_need_yfxjs && _lenovo_is_need_yfxjs==1) {
	/*------------------20150821监控代码------------------*/
//var _trackDataType = 'web'; //标记数据来源，参数是web和wap，可以为空，默认是web
//var _Schannel_website_id = '';//分站编号，不存在可不写此变量或者留空
var _Schannel_webshop_id = '';//商铺编号，不存在可不写此变量或者留空
var _trackData = _trackData || [];//必须为全局变量，假如之前并没有声明，请加此行代码；

function _lenovo_yfx_loadScript(url, callback) {
    var script = document.createElement("script"),callback = callback || function(){};
    script.type = "text/javascript";
    if (script.readyState) { //IE 
        script.onreadystatechange = function () {
            if (script.readyState == "loaded" ||
            script.readyState == "complete") {
                script.onreadystatechange = null;
                callback();
            }
        };
    } else { //Others: Firefox, Safari, Chrome, and Opera 
        script.onload = function () {
            callback();
        };
    }
    script.src = url;
    document.body.appendChild(script);
}

var laurl = '//m1.lefile.cn/la/la.min.js?v20160602';

$(function () {
    _lenovo_yfx_loadScript(laurl, function () {
        if (typeof (la_callback) != 'undefined' && la_callback) {
            //la_callback();
        }
    });
});
}
</script>


		
	<script type="text/javascript" src="/Home/js/prdplatinfo.js" ></script>
    <script type="text/javascript">
        function fn1(){
            var p_fn1 = '';
            try{
                if(typeof(this.scope.pc) != "undefined"){
                    p_fn1 = '￥'+ this.scope.pc;
                };
            }catch(e){};
            this.innerHTML = p_fn1;
        }
    </script>
	
</html>
@endif