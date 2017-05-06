
@extends('Home.base.parent')
@section('content')

	<h1 style="float:left; margin-left:-10000px">联想官方网上商城</h1>
	<div class="back" makeurl="//admin.lenovo.com.cn/cms/fk/make?tp=shoppc/home/shoppcindex.ftl&fileName=index.html&hp=shoppc&rjson=1" htmlurl="//www.lenovo.com.cn/index.html" prevurl="//admin.lenovo.com.cn/cms/fk/view?modelpath=shoppc/home/shoppcindex&pn=/shoppc&isMake=1">
		<div class="wrap1200 relative">
			<div class="clear_rx">
				<div class="fl_rx shop_nav_c floor_cntr">
					<div class="piece list_nav">
	<ul>
			<li>
				<div class="list_name">
					<a href="/pclist"  class="list_nm" style="height:10.56px;line-height:10.56px" latag="latag_pc_common_navcategory_1_Lenovo 电脑" >Lenovo 电脑
						<span class="list_usepng list_icona"></span>
					</a>
				</div>
			</li>
			<li>
				<div class="list_name">
					<a href=""  class="list_nm" style="height:10.56px;line-height:10.56px" latag="latag_pc_common_navcategory_2_ThinkPad 电脑" >ThinkPad 电脑
						<span class="list_usepng list_icona"></span>
					</a>
				</div>
			</li>
			<li>
				<div class="list_name">
					<a href="/ppclist"  class="list_nm" style="height:10.56px;line-height:10.56px" latag="latag_pc_common_navcategory_3_平板电脑" >平板电脑
						<span class="list_usepng list_icona"></span>
					</a>
				</div>
			</li>
			<li>
				<div class="list_name">
					<a href="" class="list_nm" style="height:10.56px;line-height:10.56px" latag="latag_pc_common_navcategory_4_手机" >手机
					</a>
				</div>
			</li>
			<li>
				<div class="list_name">
					<a href="" class="list_nm" style="height:10.56px;line-height:10.56px" latag="latag_pc_common_navcategory_5_通信卡" >通信卡
						<span class="list_usepng list_icona"></span>
					</a>
				</div>
			</li>
			<li>
				<div class="list_name">
					<a href=""  class="list_nm" style="height:10.56px;line-height:10.56px" latag="latag_pc_common_navcategory_6_打印机" >打印机
						<span class="list_usepng list_icona"></span>
					</a>
				</div>
			</li>
			<li>
				<div class="list_name">
					<a href=""  class="list_nm" style="height:10.56px;line-height:10.56px" latag="latag_pc_common_navcategory_7_选件" >选件
						<span class="list_usepng list_icona"></span>
					</a>
				</div>
			</li>
			<li>
				<div class="list_name">
					<a href=""  class="list_nm" style="height:10.56px;line-height:10.56px" latag="latag_pc_common_navcategory_8_智慧家庭" >智慧家庭
						<span class="list_usepng list_icona"></span>
					</a>
				</div>
			</li>
			<li>
				<div class="list_name">
					<a href=""  class="list_nm" style="height:10.56px;line-height:10.56px" latag="latag_pc_common_navcategory_9_电脑升级" >电脑升级
						<span class="list_usepng list_icona"></span>
					</a>
				</div>
			</li>
	</ul>
	
</div>
				</div>
				<div class="fl_rx shop_banner_c floor_cntr" bid="b_homepc_0012" ptype="3">
									<div class="nav_top piece_cntr back_h300 fixed along noremove" f_h="365" fid="877e2596-502e-456a-97f1-0e51ae780d28" ordnum="1"><div class="piece shoppc_index_banner_770_365 btn_cntr_in_piece" datatype="2" sort="0" b_i="770,365,100">	<style>		.shoppc_index_banner_770_365 .lunbo_fade{height : 365px;width:770px;overflow:hidden;}		.shoppc_index_banner_770_365 .lunbo_fade li img{height : 365px;width:770px;}				.shoppc_index_banner_770_365 .lunbo_arrow_btn {background-image: url(Home/images/cmbzd1zmc-6akzbpaadv05ucizq915.png);background-repeat: no-repeat;cursor:pointer;}		.shoppc_index_banner_770_365 .lunbo_left_btn {float: left;width: 41px;height: 69px;position: absolute;left: 0px;top: 148px;z-index: 10;background-position: -88px -192px}		.shoppc_index_banner_770_365 .lunbo_right_btn {float: right;width: 41px;height: 69px;position: absolute;right: 0;top: 148px;z-index: 10;background-position: -130px -192px}			</style>	<!--floorId="877e2596-502e-456a-97f1-0e51ae780d28"-->	<div class="lenovoplugin lunbo_fade" optp='{"container_width":770,"container_height":365,"direct":"right","dots_show":true,"dot_align":"center","auto_play":true,"move_pause":true,"test":false,"arrow_btn_show":true,"arrow_btn_align":"center"}'>		<div class="wrap">			<ul>
										<!-- 轮播图遍历位置 -->
										@foreach ($pic as $v)
					     				<li class="nohid" align="center">						<a   href="">						<img src="/Admin/upload/{{ $v->Rotation_name }}"/></a>					</li>
										@endforeach
					     				<!-- 轮播图遍历结束位置 -->
																				</ul>		</div>	</div>	</div></div>
									<div class="nav_top piece_cntr back_h300 fixed along noremove" f_h="365" fid="fe99720d-f00f-4e83-ae0f-b4b515b60e4a" ordnum="2"></div>
				</div>
				<div class="fl_rx shop_news_c floor_cntr" bid="b_homepc_0013" ptype="4">
									<div class="nav_top piece_cntr back_h200 fixed along noremove" fid="fcc236bd-f591-4cc1-9302-9641f955d6bd" ordnum="1"><div class="piece shop_index_horn_218_67 btn_cntr_in_piece clear_rx"
	datatype="4" sort="0">
	<style type="text/css">
.shop_index_horn_218_67 div {
	font-family: "微软雅黑";
}

.shop_index_horn_218_67 a,li {
	text-decoration: none;
	list-style: none;
}

.shop_index_horn_218_67 .horn_box {
	width: 220px;
	background: #fff;
	position: relative;
	float: left;
}

.shop_index_horn_218_67 .horn_box a:hover {
	color: #e2231a;
}

.shop_index_horn_218_67 .horn_cont {
	border: 1px solid #e6e6e6;
	padding-left: 10px;
	padding-right: 10px;
	padding-top: 3px;
	padding-bottom: 2px;
	position: relative;
	height: 61px;
}

.shop_index_horn_218_67 .horn_cont .horn_ring {
	position: absolute;
	top: 6px;
	width: 16px;
	height: 13px;
	background:
		url(Home/images/cmbzd1zynuyaunwjaagn0mxlsoi703.png)
		-299px -320px;
}

.shop_index_horn_218_67 .horn_cont ul {
	height: 60px;
	overflow: hidden;
}

.shop_index_horn_218_67 .horn_cont ul li {
	text-indent: 20px;
	height: 60px;
	line-height: 20px;
	overflow: hidden;
}

.shop_index_horn_218_67 .horn_cont ul li a {
	color: #000;
	font-size: 12px;
}
</style>
	<div class="horn_box">
		<div class="horn_cont">
			<div class="horn_ring"></div>
			<ul id="horns_div_pchome">
				 
				<li><a 
						href="" >尊敬的用户，商城平板电脑4月2-4日的订单，将会在5日进行发货，给您带来的不便敬请谅解！</a></li> 
				<li><a 
						href="" >乐豆抽奖大战开始啦，赶快戳我抽取大奖，miix平板等着你！</a></li>  
			</ul>
		</div>
	</div>
	<div class="jsurl hid_rx">//m1.lefile.cn/gl/js/components/home_index_horn.js</div>
</div>
</div>
				</div>
				<div class="fl_rx shop_news_c floor_cntr" bid="b_homepc_0014" ptype="4">
									<div class="nav_top piece_cntr back_h200 fixed along noremove" fid="c10aa77a-351e-4079-9f0e-53fa8f91235b" ordnum="1"><div class="piece horn_main_xxx  btn_cntr_in_piece clear_rx edit" datatype="4" sort="0">	
<style type="text/css">		
	.horn_main_xxx *{			
		margin: 0;			
		padding: 0;		
	}		
	.horn_main_xxx div{			
		font-family: "微软雅黑";		
	}		
	.horn_main_xxx a,li{			
		text-decoration: none;			
		list-style: none;		
	}		
	.horn_main_xxx a img{			
		border: 0px;		
	}		
	.horn_main_xxx .clearfix:after{display: block;clear: both;height: 0;visibility: hidden;font-size: 0;line-height: 0;content: "";}		
	.horn_main_xxx .clearfix{zoom:1;}		
	.horn_main_xxx .horn_main a:hover{			
		color: #e2231a;		
	}		
	.horn_main_xxx .horn_main{			
		width: 218px;			
		border-left: 1px solid #e6e6e6;			
		border-right: 1px solid #e6e6e6;			
		border-bottom: 1px solid #e6e6e6;			
		padding-bottom: 12px		
	}		
	.horn_main_xxx .horn_main h2{			
		font-size: 15px;			
		font-weight: normal;			
		line-height: 36px;			
		border-bottom: 1px dashed #e6e6e6;			
		padding-left: 9px;			
		padding-right: 9px;							
	}		
	.horn_main_xxx .horn_main h2 span{			
		float: left;		
	}		
	.horn_main_xxx .horn_main h2 a{			
		float: right;			
		color: #000;			
		font-size: 12px;		
	}		
	.horn_main_xxx .horn_main ul{		
		padding-top: 9px;		
		padding-right: 7px;		
		padding-left: 3px;		
		background: url(Home/images/cmbzefzceaeachfvaaag-2b8lny220.gif) no-repeat center center;		
	}		
	.horn_main_xxx .horn_main ul li img{			
		/* vertical-align: middle; */			
		margin-right: 7px;			
		float: left;			
		margin-top: 7px;				
	}		
	.horn_main_xxx .horn_main ul li{			
		overflow: hidden;			 
		background: #fff;				
	}		
	.horn_main_xxx .horn_main ul li a{			
		font-size: 12px;			
		color: #000;			
		height: 30px;			
		display: block;			
		overflow: hidden;			
		line-height: 34px;			
		height: 34px;				
	}				
	.horn_main_xxx .horn_btm a:hover{color: #e2231a;}		
	.horn_main_xxx .horn_btm{			
		width: 218px;			
		border: 1px solid #e6e6e6;			
		height: 36px;			
		line-height: 36px;			
		text-align: center;					
	}				
	.horn_main_xxx .horn_btm a{			
		color: #6f7170;			
		font-size: 13px;			
		border-left: 1px solid #6f7170;			
		padding: 0 9px;			
		float: left;			
		height: 18px;line-height: 18px;			
		margin-top: 8px;		
	}	
	</style>	
	<div class="horn_main clearfix">		
		<h2 class="clearfix">
			<span>社区精彩讨论</span>
			<a   href="">更多 ></a></h2>		
			<ul class="hunter_horns">			
										<li><a   href="" >【福利】拯救者送Dota亚洲邀请赛门票</a></li>				
						<li><a   href="" >【IC.TECH】创刊号 |关于 Audio ABC</a></li>				
						<li><a   href="" >【同城会】你来了，连绵阴雨也走开了</a></li>				
						<li><a   href="" >【晒单】拥有海贼王小新Air什么体验？</a></li>				
						<li><a   href="" >【讨论】摩粉深夜独白：红，就要趁早</a></li>				
						<li><a   href="" >【玩机】K10STAT让K10架构性能飞涨</a></li>				
						<li><a   href="" >【技巧】拯救者如何正确重装Win10</a></li>				
			</ul>	
	</div>
</div>
</div>
				</div>
			</div>
			
			<div class="shop_mainhot_c floor_cntr" bid="b_homepc_0015" ptype="3" floor_max_num="3">
								<div class="piece_cntr back_h300 fixed along noremove" fid="a5530879-ae74-4530-bd67-33b37d7f1dd4" ordnum="1"><div class="piece shop_index_pic_1200_160">	<style>		.shop_index_pic_1200_160 .lunbo_slide > ul > li img{height: 160px;width: 252px;}		.shop_index_pic_1200_160 .lunbo_slide li{float:left;}		.shop_index_pic_1200_160 .pic_box{position:relative;padding-left:192px;margin-top:10px;margin-bottom:30px;}		.shop_index_pic_1200_160 .lunbo_arrow_btn {background-image: url(Home/images/cmbzd1zynuyaunwjaagn0mxlsoi703.png);background-repeat: no-repeat;cursor:pointer;}		.shop_index_pic_1200_160 .lunbo_left_btn {float: left;width: 41px;height: 69px;position: absolute;left: 0px;top: 45px;z-index: 10;background-position: -88px -192px}		.shop_index_pic_1200_160 .lunbo_left_btn:hover {background-position: -88px -192px}		.shop_index_pic_1200_160 .lunbo_right_btn {float: right;width: 41px;height: 69px;position: absolute;right: 0;top: 45px;z-index: 10;background-position: -130px -192px}		.shop_index_pic_1200_160 .lunbo_right_btn:hover {background-position: -130px -192px}			</style>	<div class="pic_box">					<div class="relative btn_cntr_in_piece" datatype="5" sort="1" b_i="192,159,12" style="position: absolute; width: 192px; height: 159px; left: 0;">															<img src="Home/picture/tempimage.gif" _src="http://pic.shop.lenovo.com.cn/g1/M00/01/4C/CmBZD1aXk7qAQgetAAAQAdMVMFM526.jpg" class="lazy_img"/>												</div>							<div class="lenovoplugin lunbo_slide btn_cntr_in_piece" datatype="2" sort="0" b_i="252,159,100" optp='{"container_width":1008,"container_height":159,"auto_play":false,"direct":"left","dots_show":false,"dot_align":"center","move_pause":true,"arrow_btn_show":true,"show_num":4,"slide_num":1,"arrow_btn_xiguan":false,"test":false,"arrow_btn_align":"center","arrow_btn_mouse_in_out":true}'>				<div class="wrap">					<ul class="clear_rx">			        					        					        		<li latag="latag_home_MD532_a5530879-ae74-4530-bd67-33b37d7f1dd4_p1_goods_code_no_exists"><a   href=""><img src="Home/picture/bad59919-90b2-4da3-8a31-995165595558_1.jpg" _src="Home/picture/bad59919-90b2-4da3-8a31-995165595558_1.jpg"/></a></li>				        											        					        		<li latag="latag_home_MD532_a5530879-ae74-4530-bd67-33b37d7f1dd4_p2_goods_code_no_exists"><a   href=""><img src="Home/picture/ef937f43-a452-4844-8342-0bbf56124446_1.jpg" _src="Home/picture/ef937f43-a452-4844-8342-0bbf56124446_1.jpg"/></a></li>				        											        					        		<li latag="latag_home_MD532_a5530879-ae74-4530-bd67-33b37d7f1dd4_p3_goods_code_no_exists"><a   href=""><img src="Home/picture/69834f20-9f19-4c5e-852f-fc010f3335ef_1.jpg" _src="Home/picture/69834f20-9f19-4c5e-852f-fc010f3335ef_1.jpg"/></a></li>				        											        					        		<li latag="latag_home_MD532_a5530879-ae74-4530-bd67-33b37d7f1dd4_p4_goods_code_no_exists"><a   href=""><img src="Home/picture/d5a7a865-c534-4a03-a884-b028c69efaa2_1.jpg" _src="Home/picture/d5a7a865-c534-4a03-a884-b028c69efaa2_1.jpg"/></a></li>				        											        					        		<li latag="latag_home_MD532_a5530879-ae74-4530-bd67-33b37d7f1dd4_p5_goods_code_no_exists"><a   href=""><img src="Home/picture/cmbzd1zyxoaabheeaaaerqxbp14680.gif" _src="http://pic.shop.lenovo.com.cn/g1/M00/01/52/CmBZEFacuV-AepLDAABw0evDhK4881.jpg"/></a></li>				        											        					        		<li latag="latag_home_MD532_a5530879-ae74-4530-bd67-33b37d7f1dd4_p6_goods_code_no_exists"><a   href=""><img src="Home/picture/cmbzd1zyxoaabheeaaaerqxbp14680.gif" _src="http://p4.lefile.cn/product/adminweb/2016/12/16/9fd552ba-3ab5-401d-af5f-a63f20321f22_1.png"/></a></li>				        												</ul>				</div>			</div>			</div></div></div>								
			</div>
			<div class="shop_mainhot_c floor_cntr nav_floor_item" id="J-star-box" bid="b_homepc_0016" ptype="2" floor_max_num="3">
								<div class="piece_cntr back_h300 fixed along noremove" fid="26fc5123-cbb9-46bc-b2b6-cb59b5de1f63" ordnum="1"><div class="piece shop_index_star_1200_340 btn_cntr_in_piece" p_h="340" datatype="3" sort="0" b_i="180,180,20">	<style>		.shop_index_star_1200_340 .lunbo_slide .wrap {height:299px;width:1200px;position:relative;overflow:hidden;}		.shop_index_star_1200_340 .star_box{margin: 0 auto;padding-bottom: 35px;}		.shop_index_star_1200_340 .star_box h3{height: 42px;line-height: 42px;font-size: 20px;font-weight: normal;position: relative;}		.shop_index_star_1200_340 .star_box h3 a{width: 18px;height: 18px;}		.shop_index_star_1200_340 .lunbo_arrow_btn{display: inline-block;background-image: url(Home/images/cmbzd1zyvqkaayhzaadar4afzua168.png);background-repeat: no-repeat;cursor:pointer;}		.shop_index_star_1200_340 .lunbo_left_btn{position: absolute;right: 28px;top: -27px;width: 18px;height: 18px;background-position: -143px -31px;}		.shop_index_star_1200_340 .lunbo_right_btn{position: absolute;right: 1px;top: -27px;width: 18px;height: 18px;background-position: -117px -31px;}		.shop_index_star_1200_340 .star_main{width: 1200px;height: 297px;position: relative;}		.shop_index_star_1200_340 .star_main ul{list-style: none;padding: 0px;margin: 0px;width: 9999px;position: absolute;top: 0;left: 0;}		.shop_index_star_1200_340 .star_main ul li{border: 1px solid #e6e6e6;width: 199px;height: 297px;text-align: center;float: left;}		.shop_index_star_1200_340 .star_main ul li:hover{border-top:1px solid red;}		.shop_index_star_1200_340 .star_main ul li img{width: 180px;height: 180px;margin-top: 15px;margin-bottom: 28px;}		.shop_index_star_1200_340 .star_main ul li p{line-height: 20px;width: 179px;overflow: hidden;height: 20px;margin: 0px;padding: 0px 10px;}		.shop_index_star_1200_340 .star_main ul li p a{font-size: 13px;color: #6f7170;}		.shop_index_star_1200_340 .star_main ul li .star_name a{color: #000;}		.shop_index_star_1200_340 .star_main ul li .star_price a{color: #e2231a; font-size: 14px;}		.shop_index_star_1200_340 .star_main ul  .star_red{border-top: 2px solid #e2231a;padding-top: 0px;}	</style>	<!--<div class="jsurl hid_rx" delay_time="1500">http://m1.lenovouat.cn/comp/js/shop_index_star.js</div>-->	<div class="star_box">	    	    		    <h3>	        <span>明星单品</span>	    </h3>	    <div class="star_main lenovoplugin lunbo_slide" optp='{"container_width":1188,"li_border_value":1,"container_height":297,"auto_play":false,"direct":"left","dots_show":false,"dot_align":"center","move_pause":true,"arrow_btn_show":true,"show_num":6,"slide_num":1,"arrow_btn_xiguan":false,"test":false}'>	    	<div class="wrap">		        <ul class="star_cont clear_rx" id="star_cont">		        			        		<li latag="latag_home_MD532_26fc5123-cbb9-46bc-b2b6-cb59b5de1f63_p5_53381">			                <a   href="">			                				                		<img src="Home/picture/jeo8ueaxncxyor5vdgu9oehi6-3309.w180.jpg" _src="Home/picture/jeo8ueaxncxyor5vdgu9oehi6-3309.w180.jpg" alt="小新 Air 13 Pro-13ISK 13.3英寸超轻薄笔记本 金色 80W00008CD"  />			                				                				                				                </a>			                <p class="star_name"><a   href="">小新 Air 13 Pro-13ISK 13.3英寸超轻薄笔记本 金色 80W00008CD</a></p>			                <p><a   href="">好评晒单送延保+帆布包</a></p>			                <p class="star_price"><a   href="">5,299元</a></p>		            	</li>			        		        		<li latag="latag_home_MD532_26fc5123-cbb9-46bc-b2b6-cb59b5de1f63_p10_52617">			                <a   href="">			                				                		<img src="Home/picture/6hqkp5rz6dhhctjgshwfevoyr-9015.w180.jpg" _src="Home/picture/6hqkp5rz6dhhctjgshwfevoyr-9015.w180.jpg" alt="小新 700-15ISK 15.6英寸游戏笔记本 黑色 80SH0009CD"  />			                				                				                				                </a>			                <p class="star_name"><a   href="">小新 700-15ISK 15.6英寸游戏笔记本 黑色 80SH0009CD</a></p>			                <p><a   href="">主流配置 经典游戏</a></p>			                <p class="star_price"><a   href="">4,999元</a></p>		            	</li>			        		        		<li latag="latag_home_MD532_26fc5123-cbb9-46bc-b2b6-cb59b5de1f63_p22_59232">			                <a   href="">			                				                		<img src="Home/picture/iwfjak3c0rtv2mtfwhtsvi3zo-4374.w180.jpg" _src="Home/picture/iwfjak3c0rtv2mtfwhtsvi3zo-4374.w180.jpg" alt="ThinkPad New S2 2017 笔记本电脑 银色 20J3A009CD"  />			                				                				                				                </a>			                <p class="star_name"><a   href="">ThinkPad New S2 2017 笔记本电脑 银色 20J3A009CD</a></p>			                <p><a   href="">触屏商务 效率出众</a></p>			                <p class="star_price"><a   href="">7,499元</a></p>		            	</li>			        		        		<li latag="latag_home_MD532_26fc5123-cbb9-46bc-b2b6-cb59b5de1f63_p33_59520">			                <a   href="">			                				                		<img src="Home/picture/gvkqf89dje0md2jvd3zwohfca-1441.w180.jpg" _src="Home/picture/gvkqf89dje0md2jvd3zwohfca-1441.w180.jpg" alt="拯救者 R720-15IKB 15.6英寸游戏笔记本 黑色 80WW0009CD"  />			                				                				                				                </a>			                <p class="star_name"><a   href="">拯救者 R720-15IKB 15.6英寸游戏笔记本 黑色 80WW0009CD</a></p>			                <p><a   href="">强悍配置 畅爽游戏</a></p>			                <p class="star_price"><a   href="">5,999元</a></p>		            	</li>			        		        		<li latag="latag_home_MD532_26fc5123-cbb9-46bc-b2b6-cb59b5de1f63_p34_53584">			                <a   href="">			                				                		<img src="Home/picture/312abf6f-97b0-467a-ad7b-354bf122daad_1.jpg" _src="Home/picture/312abf6f-97b0-467a-ad7b-354bf122daad_1.jpg" alt="ZUK Z2 Pro 尊享版 6GB+128GB"  />			                				                				                				                </a>			                <p class="star_name"><a   href="">ZUK Z2 Pro 尊享版 6GB+128GB</a></p>			                <p><a   href="">直降600</a></p>			                <p class="star_price"><a   href="">2,099元</a></p>		            	</li>			        		        		<li latag="latag_home_MD532_26fc5123-cbb9-46bc-b2b6-cb59b5de1f63_p35_59367">			                <a   href="">			                				                		<img src="Home/picture/xwhhedq0ifwfd1jbzzcu7dvve-9208.w180.jpg" _src="Home/picture/xwhhedq0ifwfd1jbzzcu7dvve-9208.w180.jpg" alt="联想（Lenovo）小新智能投影仪 T1"  />			                				                				                				                </a>			                <p class="star_name"><a   href="">联想（Lenovo）小新智能投影仪 T1</a></p>			                <p><a   href="">不伤眼的大屏电视</a></p>			                <p class="star_price"><a   href="">2,599元</a></p>		            	</li>			        		        		<li latag="latag_home_MD532_26fc5123-cbb9-46bc-b2b6-cb59b5de1f63_p37_53475">			                <a   href="">			                				                		<img src="Home/picture/cmbzd1zyxoaabheeaaaerqxbp14680.gif" _src="http://p4.lefile.cn/product/adminweb/2016/08/24/ERNAeyHh3wIKB4CEyS4jIf0wv-6372.w180.jpg" alt="联想UM10C直播版手机麦克风 苹果安卓手机主播K歌话筒 玫瑰金"  />			                				                				                				                </a>			                <p class="star_name"><a   href="">联想UM10C直播版手机麦克风 苹果安卓手机主播K歌话筒 玫瑰金</a></p>			                <p><a   href="">立体混响 更有主播范</a></p>			                <p class="star_price"><a   href="">399元</a></p>		            	</li>			        		        		<li latag="latag_home_MD532_26fc5123-cbb9-46bc-b2b6-cb59b5de1f63_p38_51318">			                <a   href="">			                				                		<img src="Home/picture/cmbzd1zyxoaabheeaaaerqxbp14680.gif" _src="http://p2.lefile.cn/product/adminweb/2016/01/27/2b4POAeHdJKapyA3ioi5hPlm0-7558.w180.jpg" alt="联想（lenovo）300M无线路由器R3210（黑色）"  />			                				                				                				                </a>			                <p class="star_name"><a   href="">联想（lenovo）300M无线路由器R3210（黑色）</a></p>			                <p><a   href="">6折优惠，就是这么任性</a></p>			                <p class="star_price"><a   href="">69元</a></p>		            	</li>			        		        		<li latag="latag_home_MD532_26fc5123-cbb9-46bc-b2b6-cb59b5de1f63_p40_51704">			                <a   href="">			                				                		<img src="Home/picture/cmbzd1zyxoaabheeaaaerqxbp14680.gif" _src="http://p2.lefile.cn/g1/M00/01/EA/CmPJi1V6z1KADaiIAABwJXLLvMY256.w180.jpg" alt="联想至尊安全U盘（16G）"  />			                				                				                				                </a>			                <p class="star_name"><a   href="">联想至尊安全U盘（16G）</a></p>			                <p><a   href="">保护数据安全的U盘</a></p>			                <p class="star_price"><a   href="">59元</a></p>		            	</li>			        		        		<li latag="latag_home_MD532_26fc5123-cbb9-46bc-b2b6-cb59b5de1f63_p70_58056">			                <a   href="">			                				                		<img src="Home/picture/cmbzd1zyxoaabheeaaaerqxbp14680.gif" _src="http://p3.lefile.cn/product/adminweb/2016/09/19/TY78ivFhkD5uyvNQ0O9GLewCw-5468.w180.jpg" alt="YOGA710-14银 (I5/Windows 10 家庭版/4G/256G SSD)"  />			                				                				                				                </a>			                <p class="star_name"><a   href="http://www.lenovo.com.cn/product/58056.html">YOGA710-14银 (I5/Windows 10 家庭版/4G/256G SSD)</a></p>			                <p><a   href="http:">固态硬盘 快速读写 </a></p>			                <p class="star_price"><a   href="">6,099元</a></p>		            	</li>			        		        		<li latag="latag_home_MD532_26fc5123-cbb9-46bc-b2b6-cb59b5de1f63_p80_52663">			                <a   href="">			                				                		<img src="Home/picture/cmbzd1zyxoaabheeaaaerqxbp14680.gif" _src="http://p2.lefile.cn/product/adminweb/2016/08/16/0VI374vmQqVNdnpGraQHDgsrF-5614.w180.jpg" alt="拯救者15-ISK i5领先版"  />			                				                				                				                </a>			                <p class="star_name"><a   href="">拯救者15-ISK i5领先版</a></p>			                <p><a   href="">游戏性能 开机快速</a></p>			                <p class="star_price"><a   href="">5,899元</a></p>		            	</li>			        		        		<li latag="latag_home_MD532_26fc5123-cbb9-46bc-b2b6-cb59b5de1f63_p100_50849">			                <a   href="">			                				                		<img src="Home/picture/cmbzd1zyxoaabheeaaaerqxbp14680.gif" _src="http://pic.shop.lenovo.com.cn/180/g1/M00/03/92/CmBZEFY3AZmARbNpAACb0p9NejA542.jpg" alt="天逸100-15英寸(i5 1G独显 DVD)"  />			                				                				                				                </a>			                <p class="star_name"><a   href="">天逸100-15英寸(i5 1G独显 DVD)</a></p>			                <p><a   href="">轻薄时尚  性能强劲</a></p>			                <p class="star_price"><a   href="">3,399元</a></p>		            	</li>			        		        		<li latag="latag_home_MD532_26fc5123-cbb9-46bc-b2b6-cb59b5de1f63_p110_50503">			                <a   href="">			                				                		<img src="Home/picture/cmbzd1zyxoaabheeaaaerqxbp14680.gif" _src="http://pic.shop.lenovo.com.cn/180/g1/M00/02/63/CmPJilWxmXGAJvjkAASTwrtzt0s355.png" alt="联想新小七 7英寸8G-WiFi版 黑色"  />			                				                				                				                </a>			                <p class="star_name"><a   href="">联想新小七 7英寸8G-WiFi版 黑色</a></p>			                <p><a   href="">单手持握性价比之选</a></p>			                <p class="star_price"><a   href="">458元</a></p>		            	</li>			        		        		<li latag="latag_home_MD532_26fc5123-cbb9-46bc-b2b6-cb59b5de1f63_p120_50670">			                <a   href="">			                				                		<img src="Home/picture/cmbzd1zyxoaabheeaaaerqxbp14680.gif" _src="http://pic.shop.lenovo.com.cn/180/g1/M00/00/19/CmBZD1Xl4W-AChhvAAHd0rjoDAo905.jpg" alt="ThinkPad T450 20BVA00YCD"  />			                				                				                				                </a>			                <p class="star_name"><a   href="">ThinkPad T450 20BVA00YCD</a></p>			                <p><a   href="">购机即送定制服务及原装包鼠</a></p>			                <p class="star_price"><a   href="">7,299元</a></p>		            	</li>			        		        </ul>		    </div>	    </div>	    	</div></div></div>								
			</div>
			<!--<div class="shop_mainhot_c floor_cntr nav_floor_item" id="J-like-box" bid="b_homepc_0017" ptype="2" floor_max_num="3">
								<div class="piece_cntr back_h300 fixed along noremove" fid="d613e9ee-e13a-4a8b-9977-1828cb3c2ef7" ordnum="1"></div>								
			</div>-->
		</div>
		
		<!--增加特色购-->
		<!--<div class="wrap1200 relative">
			<div class="shop_mainhot_c floor_cntr nav_floor_item" id="J-tsg-box" bid="b_homepc_00172016_06_14_15_31_06"  >
						<div class="piece_cntr back_h300 fixed along noremove" fid="f_0001" ordnum="1"></div>
			</div>
			
		</div>-->
		
		<div style="background:#f5f5f5;padding:30px 0;min-width: 1200px;">
			<div class="wrap1200">
				<div class="floor_cntr nav_floor_item" id="J-computer-box" bid="b_homepc_fl_0001" ptype="2">
								<div class="piece_cntr back_h200 fixed along noremove config_btn_show" fid="9f1edcb1-6b77-4863-8a4b-ef1d77bd3087" ordnum="1"><div class="piece shop_index_floor_l1_r8">	<style type="text/css">			.shop_index_floor_l1_r8 body,p,ul,h1,h2,h3,h4,h5,h6,dl,dd,dt{margin:0;padding:0;list-style: none;font-family:arial,"微软雅黑",sans-serif;font-size:12px;}		.shop_index_floor_l1_r8 a{text-decoration: none;}		.shop_index_floor_l1_r8 .clearfix:after{display: block;clear: both;height: 0;visibility: hidden;font-size: 0;line-height: 0;content: "";}		.shop_index_floor_l1_r8 .clearfix{zoom:1;}		.shop_index_floor_l1_r8 .myicon{display: inline-block;background-image: url(Home/images/cmbzd1zynuyaunwjaagn0mxlsoi703.png);background-repeat: no-repeat;}		.shop_index_floor_l1_r8 .floor_label{background-image: url(Home/images/cmbzd1zynuyaunwjaagn0mxlsoi703.png);}			.shop_index_floor_l1_r8 .floor{background: #f5f5f5;padding: 30px 0;}		.shop_index_floor_l1_r8 .floor_section a,.floor_section a:focus{outline:none !important;text-decoration: none;color: #000;}		.shop_index_floor_l1_r8 .floor_section img,.floor_section a img{border: 0;vertical-align: top;}		.shop_index_floor_l1_r8 .floor_section{width: 1200px;margin:0 auto 30px;color: #000;}		.shop_index_floor_l1_r8 .floor_section .floor_title{height: 48px;}		.shop_index_floor_l1_r8 .floor_section .floor_title h3{float: left;height: 48px;line-height: 48px;font-size: 20px;font-weight: normal;width: 240px;}		.shop_index_floor_l1_r8 .floor_section .floor_links{float: right;width: 960px;text-align: right;padding-top: 20px;}		.shop_index_floor_l1_r8 .floor_section .floor_links a{color: #6f7170;margin-left: 12px;}		.shop_index_floor_l1_r8 .floor_section .floor_links .floor_more{background-position:-12px -433px;width:24px;height:16px;display: inline-block;padding-right: 20px;}		/*左一右八布局*/		.shop_index_floor_l1_r8 .floor_l1_r8 .floor_img{width: 1200px;}		.shop_index_floor_l1_r8 .floor_l1_r8 .floor_left{float: left;width: 240px;height: 535px;overflow: hidden;}		.shop_index_floor_l1_r8 .floor_l1_r8 .floor_left img{width: 240px;height: 535px;}		.shop_index_floor_l1_r8 .floor_l1_r8 .floor_right{float: right;width: 960px;border-top: 1px solid #dedede;}		.shop_index_floor_l1_r8 .floor_l1_r8 .floor_item{width: 239px;height: 266px;border-right: 1px solid #dedede;border-bottom: 1px solid #dedede;float: left;position: relative;background: #fff;text-align: center;}		.shop_index_floor_l1_r8 .floor_l1_r8 .floor_item a{display: block;}		.shop_index_floor_l1_r8 .floor_l1_r8 .floor_item .pro_img{overflow: hidden;padding: 12px 0;}		.shop_index_floor_l1_r8 .floor_l1_r8 .floor_item .pro_img img{height: 164px;}		.shop_index_floor_l1_r8 .floor_l1_r8 .floor_item .pro_name{font-size: 14px;height: 22px;line-height: 22px;overflow: hidden;padding: 0 14px;}		.shop_index_floor_l1_r8 .floor_l1_r8 .floor_item .pro_description{color: #6f7170;height: 20px;line-height: 20px;overflow: hidden;padding: 0 12px;}		.shop_index_floor_l1_r8 .floor_l1_r8 .floor_item .pro_price{font-size: 14px;color: #e2231a;height: 22px;line-height: 22px;overflow: hidden;}		.shop_index_floor_l1_r8 .floor_l1_r8 .floor_item .floor_label{display:block;width: 54px;height: 54px;position: absolute;right: 0;top: 0;}		.shop_index_floor_l1_r8 .floor_l1_r8 .floor_item .floor_label1{background-position: 0 -700px;}		.shop_index_floor_l1_r8 .floor_l1_r8 .floor_item .floor_label2{background-position: 0 -760px;}		.shop_index_floor_l1_r8 .floor_l1_r8 .floor_item .floor_label3{background-position: 0 -820px;}		.shop_index_floor_l1_r8 .floor_l1_r8 .floor_item .floor_label4{background-position: 0 -880px;}		.shop_index_floor_l1_r8 .floor_l1_r8 .floor_item .floor_label5{background-position: 0 -940px;}		.shop_index_floor_l1_r8 .floor_l1_r8 .floor_item .floor_label6{background-position: 0 -1000px;}		.shop_index_floor_l1_r8 .floor_l1_r8 .floor_item .floor_label7{background-position: 0 -1060px;}		.shop_index_floor_l1_r8 .floor_l1_r8 .floor_item .floor_label8{background-position: 0 -1120px;}		.shop_index_floor_l1_r8 .floor_l1_r8 .floor_item .floor_label9{background-position: 0 -1180px;}	</style>	
								<div class="floor_section floor_l1_r8">		        	    
								<div class="floor_title clearfix">	        
								<h3>1F Lenovo 电脑</h3>	        <div class="floor_links">	        		        		        			        		        		            <a href="/pclist" title="" class="myicon floor_more">更多</a>	        </div>	    </div>	    <div class="floor_img clearfix">	    	        		            



								<!-- 遍历电脑显示图部分 -->
								@foreach ($pclist as $v)
								@if ($v->Goods_under == 1)
								<div class="floor_item btn_cntr_in_piece" datatype="3" sort="2" b_i="164,164,10">	            		         		        				        	<a   href="/details/{{ $v->Goods_id }}" latag="latag_home_MD532_9f1edcb1-6b77-4863-8a4b-ef1d77bd3087_p2_59391" title="" class="pro_img">		                    <img width="164" height="164" src="/admin/upload/{{ explode(',',($v->Goods_pic))[0] }}"  alt="" class="lazy_img" />		                </a>		                <a   href="/details/{{ $v->Goods_id }}" latag="latag_home_MD532_9f1edcb1-6b77-4863-8a4b-ef1d77bd3087_p2_59391" title="" class="pro_name">{{ $v->Goods_name }}</a>		                <a   href="/details/{{ $v->Goods_id }}" latag="latag_home_MD532_9f1edcb1-6b77-4863-8a4b-ef1d77bd3087_p2_59391" title="" class="pro_price">{{ $v->Goods_price }}</a>		  		                	          </div>
								@endif
								@endforeach
								
								           <!--  遍历结束-->
				</div>
				<div class="floor_cntr nav_floor_item" id="J-Think-box" bid="b_homepc_fl_0002" ptype="2">
								<div class="piece_cntr back_h200 fixed along noremove config_btn_show" fid="c0a80e57-d488-4f19-b169-8e101a8e4e4f" ordnum="1"><div class="piece shop_index_floor_l1_r8">	<style type="text/css">			.shop_index_floor_l1_r8 body,p,ul,h1,h2,h3,h4,h5,h6,dl,dd,dt{margin:0;padding:0;list-style: none;font-family:arial,"微软雅黑",sans-serif;font-size:12px;}		.shop_index_floor_l1_r8 a{text-decoration: none;}		.shop_index_floor_l1_r8 .clearfix:after{display: block;clear: both;height: 0;visibility: hidden;font-size: 0;line-height: 0;content: "";}		.shop_index_floor_l1_r8 .clearfix{zoom:1;}		.shop_index_floor_l1_r8 .myicon{display: inline-block;background-image: url(Home/images/cmbzd1zynuyaunwjaagn0mxlsoi703.png);background-repeat: no-repeat;}		.shop_index_floor_l1_r8 .floor_label{background-image: url(Home/images/cmbzd1zynuyaunwjaagn0mxlsoi703.png);}			.shop_index_floor_l1_r8 .floor{background: #f5f5f5;padding: 30px 0;}		.shop_index_floor_l1_r8 .floor_section a,.floor_section a:focus{outline:none !important;text-decoration: none;color: #000;}		.shop_index_floor_l1_r8 .floor_section img,.floor_section a img{border: 0;vertical-align: top;}		.shop_index_floor_l1_r8 .floor_section{width: 1200px;margin:0 auto 30px;color: #000;}		.shop_index_floor_l1_r8 .floor_section .floor_title{height: 48px;}		.shop_index_floor_l1_r8 .floor_section .floor_title h3{float: left;height: 48px;line-height: 48px;font-size: 20px;font-weight: normal;width: 240px;}		.shop_index_floor_l1_r8 .floor_section .floor_links{float: right;width: 960px;text-align: right;padding-top: 20px;}		.shop_index_floor_l1_r8 .floor_section .floor_links a{color: #6f7170;margin-left: 12px;}		.shop_index_floor_l1_r8 .floor_section .floor_links .floor_more{background-position:-12px -433px;width:24px;height:16px;display: inline-block;padding-right: 20px;}		/*左一右八布局*/		.shop_index_floor_l1_r8 .floor_l1_r8 .floor_img{width: 1200px;}		.shop_index_floor_l1_r8 .floor_l1_r8 .floor_left{float: left;width: 240px;height: 535px;overflow: hidden;}		.shop_index_floor_l1_r8 .floor_l1_r8 .floor_left img{width: 240px;height: 535px;}		.shop_index_floor_l1_r8 .floor_l1_r8 .floor_right{float: right;width: 960px;border-top: 1px solid #dedede;}		.shop_index_floor_l1_r8 .floor_l1_r8 .floor_item{width: 239px;height: 266px;border-right: 1px solid #dedede;border-bottom: 1px solid #dedede;float: left;position: relative;background: #fff;text-align: center;}		.shop_index_floor_l1_r8 .floor_l1_r8 .floor_item a{display: block;}		.shop_index_floor_l1_r8 .floor_l1_r8 .floor_item .pro_img{overflow: hidden;padding: 12px 0;}		.shop_index_floor_l1_r8 .floor_l1_r8 .floor_item .pro_img img{height: 164px;}		.shop_index_floor_l1_r8 .floor_l1_r8 .floor_item .pro_name{font-size: 14px;height: 22px;line-height: 22px;overflow: hidden;padding: 0 14px;}		.shop_index_floor_l1_r8 .floor_l1_r8 .floor_item .pro_description{color: #6f7170;height: 20px;line-height: 20px;overflow: hidden;padding: 0 12px;}		.shop_index_floor_l1_r8 .floor_l1_r8 .floor_item .pro_price{font-size: 14px;color: #e2231a;height: 22px;line-height: 22px;overflow: hidden;}		.shop_index_floor_l1_r8 .floor_l1_r8 .floor_item .floor_label{display:block;width: 54px;height: 54px;position: absolute;right: 0;top: 0;}		.shop_index_floor_l1_r8 .floor_l1_r8 .floor_item .floor_label1{background-position: 0 -700px;}		.shop_index_floor_l1_r8 .floor_l1_r8 .floor_item .floor_label2{background-position: 0 -760px;}		.shop_index_floor_l1_r8 .floor_l1_r8 .floor_item .floor_label3{background-position: 0 -820px;}		.shop_index_floor_l1_r8 .floor_l1_r8 .floor_item .floor_label4{background-position: 0 -880px;}		.shop_index_floor_l1_r8 .floor_l1_r8 .floor_item .floor_label5{background-position: 0 -940px;}		.shop_index_floor_l1_r8 .floor_l1_r8 .floor_item .floor_label6{background-position: 0 -1000px;}		.shop_index_floor_l1_r8 .floor_l1_r8 .floor_item .floor_label7{background-position: 0 -1060px;}		.shop_index_floor_l1_r8 .floor_l1_r8 .floor_item .floor_label8{background-position: 0 -1120px;}		.shop_index_floor_l1_r8 .floor_l1_r8 .floor_item .floor_label9{background-position: 0 -1180px;}	</style>	<div class="floor_section floor_l1_r8">		        	    
				
				<div class="floor_cntr nav_floor_item" id="J-Tablet-box" bid="b_homepc_fl_0004" ptype="2">
								<div class="piece_cntr back_h200 fixed along noremove config_btn_show" fid="5891b8a6-229b-4551-b86e-a0d1071aebde" ordnum="1"><div class="piece shop_index_floor_l1_r8">	<style type="text/css">			.shop_index_floor_l1_r8 body,p,ul,h1,h2,h3,h4,h5,h6,dl,dd,dt{margin:0;padding:0;list-style: none;font-family:arial,"微软雅黑",sans-serif;font-size:12px;}		.shop_index_floor_l1_r8 a{text-decoration: none;}		.shop_index_floor_l1_r8 .clearfix:after{display: block;clear: both;height: 0;visibility: hidden;font-size: 0;line-height: 0;content: "";}		.shop_index_floor_l1_r8 .clearfix{zoom:1;}		.shop_index_floor_l1_r8 .myicon{display: inline-block;background-image: url(Home/images/cmbzd1zynuyaunwjaagn0mxlsoi703.png);background-repeat: no-repeat;}		.shop_index_floor_l1_r8 .floor_label{background-image: url(Home/images/cmbzd1zynuyaunwjaagn0mxlsoi703.png);}			.shop_index_floor_l1_r8 .floor{background: #f5f5f5;padding: 30px 0;}		.shop_index_floor_l1_r8 .floor_section a,.floor_section a:focus{outline:none !important;text-decoration: none;color: #000;}		.shop_index_floor_l1_r8 .floor_section img,.floor_section a img{border: 0;vertical-align: top;}		.shop_index_floor_l1_r8 .floor_section{width: 1200px;margin:0 auto 30px;color: #000;}		.shop_index_floor_l1_r8 .floor_section .floor_title{height: 48px;}		.shop_index_floor_l1_r8 .floor_section .floor_title h3{float: left;height: 48px;line-height: 48px;font-size: 20px;font-weight: normal;width: 240px;}		.shop_index_floor_l1_r8 .floor_section .floor_links{float: right;width: 960px;text-align: right;padding-top: 20px;}		.shop_index_floor_l1_r8 .floor_section .floor_links a{color: #6f7170;margin-left: 12px;}		.shop_index_floor_l1_r8 .floor_section .floor_links .floor_more{background-position:-12px -433px;width:24px;height:16px;display: inline-block;padding-right: 20px;}		/*左一右八布局*/		.shop_index_floor_l1_r8 .floor_l1_r8 .floor_img{width: 1200px;}		.shop_index_floor_l1_r8 .floor_l1_r8 .floor_left{float: left;width: 240px;height: 535px;overflow: hidden;}		.shop_index_floor_l1_r8 .floor_l1_r8 .floor_left img{width: 240px;height: 535px;}		.shop_index_floor_l1_r8 .floor_l1_r8 .floor_right{float: right;width: 960px;border-top: 1px solid #dedede;}		.shop_index_floor_l1_r8 .floor_l1_r8 .floor_item{width: 239px;height: 266px;border-right: 1px solid #dedede;border-bottom: 1px solid #dedede;float: left;position: relative;background: #fff;text-align: center;}		.shop_index_floor_l1_r8 .floor_l1_r8 .floor_item a{display: block;}		.shop_index_floor_l1_r8 .floor_l1_r8 .floor_item .pro_img{overflow: hidden;padding: 12px 0;}		.shop_index_floor_l1_r8 .floor_l1_r8 .floor_item .pro_img img{height: 164px;}		.shop_index_floor_l1_r8 .floor_l1_r8 .floor_item .pro_name{font-size: 14px;height: 22px;line-height: 22px;overflow: hidden;padding: 0 14px;}		.shop_index_floor_l1_r8 .floor_l1_r8 .floor_item .pro_description{color: #6f7170;height: 20px;line-height: 20px;overflow: hidden;padding: 0 12px;}		.shop_index_floor_l1_r8 .floor_l1_r8 .floor_item .pro_price{font-size: 14px;color: #e2231a;height: 22px;line-height: 22px;overflow: hidden;}		.shop_index_floor_l1_r8 .floor_l1_r8 .floor_item .floor_label{display:block;width: 54px;height: 54px;position: absolute;right: 0;top: 0;}		.shop_index_floor_l1_r8 .floor_l1_r8 .floor_item .floor_label1{background-position: 0 -700px;}		.shop_index_floor_l1_r8 .floor_l1_r8 .floor_item .floor_label2{background-position: 0 -760px;}		.shop_index_floor_l1_r8 .floor_l1_r8 .floor_item .floor_label3{background-position: 0 -820px;}		.shop_index_floor_l1_r8 .floor_l1_r8 .floor_item .floor_label4{background-position: 0 -880px;}		.shop_index_floor_l1_r8 .floor_l1_r8 .floor_item .floor_label5{background-position: 0 -940px;}		.shop_index_floor_l1_r8 .floor_l1_r8 .floor_item .floor_label6{background-position: 0 -1000px;}		.shop_index_floor_l1_r8 .floor_l1_r8 .floor_item .floor_label7{background-position: 0 -1060px;}		.shop_index_floor_l1_r8 .floor_l1_r8 .floor_item .floor_label8{background-position: 0 -1120px;}		.shop_index_floor_l1_r8 .floor_l1_r8 .floor_item .floor_label9{background-position: 0 -1180px;}	</style>	<div class="floor_section floor_l1_r8">		        	    <div class="floor_title clearfix">	        <h3>2F 平板电脑</h3>	        <div class="floor_links">	        		        		        			        		        		            <a href="/ppclist" title="" class="myicon floor_more">更多</a>	        </div>	    </div>	    <div class="floor_img clearfix">	  


								<!-- 遍历平板电脑的图片展示 -->
								@foreach ($ppclist as $v)
								@if ($v->Goods_under == 1)
				      	        <div>	            <div class="floor_item btn_cntr_in_piece" datatype="3" sort="2" b_i="164,164,10">	            		        				        	<a   href="/details/{{ $v->Goods_id }}" latag="latag_home_MD532_5891b8a6-229b-4551-b86e-a0d1071aebde_p2_59253" title="" class="pro_img">		                    <img width="164" height="164" src="/admin/upload/{{ explode(',',($v->Goods_pic))[0] }}"  alt="" class="lazy_img" />		                </a>		                <a   href="" latag="latag_home_MD532_5891b8a6-229b-4551-b86e-a0d1071aebde_p2_59253" title=">" class="pro_name">{{ $v->Goods_name }}</a>		                		                <p class="prod" gcode="59253" >		                	<a   href="/details/{{ $v->Goods_id }}" latag="latag_home_MD532_5891b8a6-229b-4551-b86e-a0d1071aebde_p2_59253" title="" class="pro_price red price" controller="fn1">{{ $v->Goods_price }}</a>		                </p>		                		                	<span class=""></span>		                	            		            </div>
				      	        
		                		<span class=""></span>		        </div>
		                		@endif
		                		@endforeach
		                		<!-- 图片展示结束 -->	        
		                		</div>	    </div>		</div></div></div>
				</div>
				
				<div class="floor_cntr nav_floor_item" id="J-Mobile-box" bid="b_homepc_fl_0003" ptype="2">
								<div class="piece_cntr back_h200 fixed along noremove config_btn_show" fid="ac0a7aed-aecf-429d-8adb-287a88d89e1a" ordnum="1"><div class="piece shop_index_floor_l1_r8">	<style type="text/css">			.shop_index_floor_l1_r8 body,p,ul,h1,h2,h3,h4,h5,h6,dl,dd,dt{margin:0;padding:0;list-style: none;font-family:arial,"微软雅黑",sans-serif;font-size:12px;}		.shop_index_floor_l1_r8 a{text-decoration: none;}		.shop_index_floor_l1_r8 .clearfix:after{display: block;clear: both;height: 0;visibility: hidden;font-size: 0;line-height: 0;content: "";}		.shop_index_floor_l1_r8 .clearfix{zoom:1;}		.shop_index_floor_l1_r8 .myicon{display: inline-block;background-image: url(Home/images/cmbzd1zynuyaunwjaagn0mxlsoi703.png);background-repeat: no-repeat;}		.shop_index_floor_l1_r8 .floor_label{background-image: url(Home/images/cmbzd1zynuyaunwjaagn0mxlsoi703.png);}			.shop_index_floor_l1_r8 .floor{background: #f5f5f5;padding: 30px 0;}		.shop_index_floor_l1_r8 .floor_section a,.floor_section a:focus{outline:none !important;text-decoration: none;color: #000;}		.shop_index_floor_l1_r8 .floor_section img,.floor_section a img{border: 0;vertical-align: top;}		.shop_index_floor_l1_r8 .floor_section{width: 1200px;margin:0 auto 30px;color: #000;}		.shop_index_floor_l1_r8 .floor_section .floor_title{height: 48px;}		.shop_index_floor_l1_r8 .floor_section .floor_title h3{float: left;height: 48px;line-height: 48px;font-size: 20px;font-weight: normal;width: 240px;}		.shop_index_floor_l1_r8 .floor_section .floor_links{float: right;width: 960px;text-align: right;padding-top: 20px;}		.shop_index_floor_l1_r8 .floor_section .floor_links a{color: #6f7170;margin-left: 12px;}		.shop_index_floor_l1_r8 .floor_section .floor_links .floor_more{background-position:-12px -433px;width:24px;height:16px;display: inline-block;padding-right: 20px;}		/*左一右八布局*/		.shop_index_floor_l1_r8 .floor_l1_r8 .floor_img{width: 1200px;}		.shop_index_floor_l1_r8 .floor_l1_r8 .floor_left{float: left;width: 240px;height: 535px;overflow: hidden;}		.shop_index_floor_l1_r8 .floor_l1_r8 .floor_left img{width: 240px;height: 535px;}		.shop_index_floor_l1_r8 .floor_l1_r8 .floor_right{float: right;width: 960px;border-top: 1px solid #dedede;}		.shop_index_floor_l1_r8 .floor_l1_r8 .floor_item{width: 239px;height: 266px;border-right: 1px solid #dedede;border-bottom: 1px solid #dedede;float: left;position: relative;background: #fff;text-align: center;}		.shop_index_floor_l1_r8 .floor_l1_r8 .floor_item a{display: block;}		.shop_index_floor_l1_r8 .floor_l1_r8 .floor_item .pro_img{overflow: hidden;padding: 12px 0;}		.shop_index_floor_l1_r8 .floor_l1_r8 .floor_item .pro_img img{height: 164px;}		.shop_index_floor_l1_r8 .floor_l1_r8 .floor_item .pro_name{font-size: 14px;height: 22px;line-height: 22px;overflow: hidden;padding: 0 14px;}		.shop_index_floor_l1_r8 .floor_l1_r8 .floor_item .pro_description{color: #6f7170;height: 20px;line-height: 20px;overflow: hidden;padding: 0 12px;}		.shop_index_floor_l1_r8 .floor_l1_r8 .floor_item .pro_price{font-size: 14px;color: #e2231a;height: 22px;line-height: 22px;overflow: hidden;}		.shop_index_floor_l1_r8 .floor_l1_r8 .floor_item .floor_label{display:block;width: 54px;height: 54px;position: absolute;right: 0;top: 0;}		.shop_index_floor_l1_r8 .floor_l1_r8 .floor_item .floor_label1{background-position: 0 -700px;}		.shop_index_floor_l1_r8 .floor_l1_r8 .floor_item .floor_label2{background-position: 0 -760px;}		.shop_index_floor_l1_r8 .floor_l1_r8 .floor_item .floor_label3{background-position: 0 -820px;}		.shop_index_floor_l1_r8 .floor_l1_r8 .floor_item .floor_label4{background-position: 0 -880px;}		.shop_index_floor_l1_r8 .floor_l1_r8 .floor_item .floor_label5{background-position: 0 -940px;}		.shop_index_floor_l1_r8 .floor_l1_r8 .floor_item .floor_label6{background-position: 0 -1000px;}		.shop_index_floor_l1_r8 .floor_l1_r8 .floor_item .floor_label7{background-position: 0 -1060px;}		.shop_index_floor_l1_r8 .floor_l1_r8 .floor_item .floor_label8{background-position: 0 -1120px;}		.shop_index_floor_l1_r8 .floor_l1_r8 .floor_item .floor_label9{background-position: 0 -1180px;}	</style>	<div class="floor_section floor_l1_r8">		        	    
				<div class="floor_cntr nav_floor_item" id="J-Accessories-box" bid="b_homepc_fl_0005" ptype="2">
								<div class="piece_cntr back_h200 fixed along noremove config_btn_show" fid="073818f8-3519-4f06-bcf1-0d1aee62e147" ordnum="1"><div class="piece shop_index_floor_l1_r8">	<style type="text/css">			.shop_index_floor_l1_r8 body,p,ul,h1,h2,h3,h4,h5,h6,dl,dd,dt{margin:0;padding:0;list-style: none;font-family:arial,"微软雅黑",sans-serif;font-size:12px;}		.shop_index_floor_l1_r8 a{text-decoration: none;}		.shop_index_floor_l1_r8 .clearfix:after{display: block;clear: both;height: 0;visibility: hidden;font-size: 0;line-height: 0;content: "";}		.shop_index_floor_l1_r8 .clearfix{zoom:1;}		.shop_index_floor_l1_r8 .myicon{display: inline-block;background-image: url(Home/images/cmbzd1zynuyaunwjaagn0mxlsoi703.png);background-repeat: no-repeat;}		.shop_index_floor_l1_r8 .floor_label{background-image: url(Home/images/cmbzd1zynuyaunwjaagn0mxlsoi703.png);}			.shop_index_floor_l1_r8 .floor{background: #f5f5f5;padding: 30px 0;}		.shop_index_floor_l1_r8 .floor_section a,.floor_section a:focus{outline:none !important;text-decoration: none;color: #000;}		.shop_index_floor_l1_r8 .floor_section img,.floor_section a img{border: 0;vertical-align: top;}		.shop_index_floor_l1_r8 .floor_section{width: 1200px;margin:0 auto 30px;color: #000;}		.shop_index_floor_l1_r8 .floor_section .floor_title{height: 48px;}		.shop_index_floor_l1_r8 .floor_section .floor_title h3{float: left;height: 48px;line-height: 48px;font-size: 20px;font-weight: normal;width: 240px;}		.shop_index_floor_l1_r8 .floor_section .floor_links{float: right;width: 960px;text-align: right;padding-top: 20px;}		.shop_index_floor_l1_r8 .floor_section .floor_links a{color: #6f7170;margin-left: 12px;}		.shop_index_floor_l1_r8 .floor_section .floor_links .floor_more{background-position:-12px -433px;width:24px;height:16px;display: inline-block;padding-right: 20px;}		/*左一右八布局*/		.shop_index_floor_l1_r8 .floor_l1_r8 .floor_img{width: 1200px;}		.shop_index_floor_l1_r8 .floor_l1_r8 .floor_left{float: left;width: 240px;height: 535px;overflow: hidden;}		.shop_index_floor_l1_r8 .floor_l1_r8 .floor_left img{width: 240px;height: 535px;}		.shop_index_floor_l1_r8 .floor_l1_r8 .floor_right{float: right;width: 960px;border-top: 1px solid #dedede;}		.shop_index_floor_l1_r8 .floor_l1_r8 .floor_item{width: 239px;height: 266px;border-right: 1px solid #dedede;border-bottom: 1px solid #dedede;float: left;position: relative;background: #fff;text-align: center;}		.shop_index_floor_l1_r8 .floor_l1_r8 .floor_item a{display: block;}		.shop_index_floor_l1_r8 .floor_l1_r8 .floor_item .pro_img{overflow: hidden;padding: 12px 0;}		.shop_index_floor_l1_r8 .floor_l1_r8 .floor_item .pro_img img{height: 164px;}		.shop_index_floor_l1_r8 .floor_l1_r8 .floor_item .pro_name{font-size: 14px;height: 22px;line-height: 22px;overflow: hidden;padding: 0 14px;}		.shop_index_floor_l1_r8 .floor_l1_r8 .floor_item .pro_description{color: #6f7170;height: 20px;line-height: 20px;overflow: hidden;padding: 0 12px;}		.shop_index_floor_l1_r8 .floor_l1_r8 .floor_item .pro_price{font-size: 14px;color: #e2231a;height: 22px;line-height: 22px;overflow: hidden;}		.shop_index_floor_l1_r8 .floor_l1_r8 .floor_item .floor_label{display:block;width: 54px;height: 54px;position: absolute;right: 0;top: 0;}		.shop_index_floor_l1_r8 .floor_l1_r8 .floor_item .floor_label1{background-position: 0 -700px;}		.shop_index_floor_l1_r8 .floor_l1_r8 .floor_item .floor_label2{background-position: 0 -760px;}		.shop_index_floor_l1_r8 .floor_l1_r8 .floor_item .floor_label3{background-position: 0 -820px;}		.shop_index_floor_l1_r8 .floor_l1_r8 .floor_item .floor_label4{background-position: 0 -880px;}		.shop_index_floor_l1_r8 .floor_l1_r8 .floor_item .floor_label5{background-position: 0 -940px;}		.shop_index_floor_l1_r8 .floor_l1_r8 .floor_item .floor_label6{background-position: 0 -1000px;}		.shop_index_floor_l1_r8 .floor_l1_r8 .floor_item .floor_label7{background-position: 0 -1060px;}		.shop_index_floor_l1_r8 .floor_l1_r8 .floor_item .floor_label8{background-position: 0 -1120px;}		.shop_index_floor_l1_r8 .floor_l1_r8 .floor_item .floor_label9{background-position: 0 -1180px;}	</style>	<div class="floor_section floor_l1_r8">		        	   
				<div class="floor_cntr nav_floor_item" id="J-Services-box" bid="b_homepc_fl_0006" ptype="2">
								<div class="piece_cntr back_h200 fixed along noremove config_btn_show" fid="e702e4a8-db91-4ff8-a8c5-b41ed1f928af" ordnum="1"><div class="piece shop_index_floor_l1_r9">	<style type="text/css">			.shop_index_floor_l1_r9 body,p,ul,h1,h2,h3,h4,h5,h6,dl,dd,dt{margin:0;padding:0;list-style: none;font-family:arial,"微软雅黑",sans-serif;font-size:12px;}		.shop_index_floor_l1_r9 a{text-decoration: none;}		.shop_index_floor_l1_r9 .clearfix:after{display: block;clear: both;height: 0;visibility: hidden;font-size: 0;line-height: 0;content: "";}		.shop_index_floor_l1_r9 .clearfix{zoom:1;}		.shop_index_floor_l1_r9 .myicon{display: inline-block;background-image: url(Home/images/cmbzd1zynuyaunwjaagn0mxlsoi703.png);background-repeat: no-repeat;}		.shop_index_floor_l1_r9 .floor_label{background-image: url(Home/images/cmbzd1zynuyaunwjaagn0mxlsoi703.png);}				.shop_index_floor_l1_r9 .floor{background: #f5f5f5;padding: 30px 0;}		.shop_index_floor_l1_r9 .floor_section a,.floor_section a:focus{outline:none !important;text-decoration: none;color: #000;}		.shop_index_floor_l1_r9 .floor_section img,.floor_section a img{border: 0;vertical-align: top;}		.shop_index_floor_l1_r9 .floor_section{width: 1200px;margin:0 auto 30px;color: #000;}		.shop_index_floor_l1_r9 .floor_section .floor_title{height: 48px;}		.shop_index_floor_l1_r9 .floor_section .floor_title h3{float: left;height: 48px;line-height: 48px;font-size: 20px;font-weight: normal;width: 240px;}		.shop_index_floor_l1_r9 .floor_section .floor_links{float: right;width: 960px;text-align: right;padding-top: 20px;}		.shop_index_floor_l1_r9 .floor_section .floor_links a{color: #6f7170;margin-left: 12px;}		.shop_index_floor_l1_r9 .floor_section .floor_links .floor_more{background-position:-12px -433px;width:24px;height:16px;display: inline-block;padding-right: 20px;}		/*左一右九布局*/		.shop_index_floor_l1_r9 .floor_l1_r9 .floor_img{width: 1200px;}		.shop_index_floor_l1_r9 .floor_l1_r9 .floor_left{float: left;width: 240px;height: 535px;overflow: hidden;}		.shop_index_floor_l1_r9 .floor_l1_r9 .floor_left img{width: 240px;height: 535px;}		.shop_index_floor_l1_r9 .floor_l1_r9 .floor_right{float: right;width: 960px;border-top: 1px solid #dedede;}		.shop_index_floor_l1_r9 .floor_l1_r9 .floor_item{width: 239px;height: 266px;border-right: 1px solid #dedede;border-bottom: 1px solid #dedede;float: left;position: relative;background: #fff;text-align: center;}		.shop_index_floor_l1_r9 .floor_l1_r9 .floor_item a,.floor_l1_r9 .floor_item_small a{display: block;}		.shop_index_floor_l1_r9 .floor_l1_r9 .floor_item .pro_img{overflow: hidden;padding: 12px 0;}		.shop_index_floor_l1_r9 .floor_l1_r9 .floor_item .pro_img img{height: 164px;}		.shop_index_floor_l1_r9 .floor_l1_r9 .floor_item .pro_name,.floor_l1_r9 .floor_item_small .pro_name{font-size: 14px;height: 22px;line-height: 22px;overflow: hidden;}		.shop_index_floor_l1_r9 .floor_l1_r9 .floor_item .pro_name{padding: 0 14px;}		.shop_index_floor_l1_r9 .floor_l1_r9 .floor_item .pro_description,.floor_l1_r9 .floor_item_small .pro_description{color: #6f7170;height: 20px;line-height: 20px;overflow: hidden;}		.shop_index_floor_l1_r9 .floor_l1_r9 .floor_item .pro_description{padding: 0 12px;}		.shop_index_floor_l1_r9 .floor_l1_r9 .floor_item .pro_price,.floor_l1_r9 .floor_item_small .pro_price{font-size: 14px;color: #e2231a;height: 22px;line-height: 22px;overflow: hidden;}		.shop_index_floor_l1_r9 .floor_l1_r9 .floor_label{display:block;width: 54px;height: 54px;position: absolute;right: 0;top: 0;}		.shop_index_floor_l1_r9 .floor_l1_r9 .floor_label1{background-position: 0 -700px;}		.shop_index_floor_l1_r9 .floor_l1_r9 .floor_label2{background-position: 0 -760px;}		.shop_index_floor_l1_r9 .floor_l1_r9 .floor_label3{background-position: 0 -820px;}		.shop_index_floor_l1_r9 .floor_l1_r9 .floor_label4{background-position: 0 -880px;}		.shop_index_floor_l1_r9 .floor_l1_r9 .floor_label5{background-position: 0 -940px;}		.shop_index_floor_l1_r9 .floor_l1_r9 .floor_label6{background-position: 0 -1000px;}		.shop_index_floor_l1_r9 .floor_l1_r9 .floor_label7{background-position: 0 -1060px;}		.shop_index_floor_l1_r9 .floor_l1_r9 .floor_label8{background-position: 0 -1120px;}		.shop_index_floor_l1_r9 .floor_l1_r9 .floor_label9{background-position: 0 -1180px;}		.shop_index_floor_l1_r9 .floor_l1_r9 .floor_item_small{width: 239px;border-right: 1px solid #dedede;border-bottom: 1px solid #dedede;float: left;position: relative;background: #fff;text-align: left;}		.shop_index_floor_l1_r9 .floor_l1_r9 .small_top{height: 133px;}		.shop_index_floor_l1_r9 .floor_l1_r9 .small_bottom{height: 132px;}		.shop_index_floor_l1_r9 .floor_l1_r9 .floor_item_small .pro_img{float: right;text-align: center;padding: 16px 0;width: 120px;overflow: hidden;}		.shop_index_floor_l1_r9 .floor_l1_r9 .floor_item_small .pro_img img{height: 100px;}		.shop_index_floor_l1_r9 .floor_l1_r9 .floor_item_small .floor_item_txt{float: left;width: 104px;padding: 30px 0 0 15px;}	</style>	<div class="floor_section floor_l1_r9">		        
				<div class="floor_cntr nav_floor_item" id="J-Social-box" bid="b_homepc_fl_0007" ptype="2">
								<div class="piece_cntr back_h200 fixed along noremove config_btn_show" fid="d0b5f419-c154-4dc9-87db-72b29a7f81a7" ordnum="1"><div class="piece a2015112411" p_h="258">
	<style>
		*{margin: 0;padding: 0;}
		.a2015112411 div{font-family: "微软雅黑";}
		.a2015112411 a,li{text-decoration: none;list-style: none;}
		.a2015112411 .seven_box{background: #f5f5f5;}
		.a2015112411 .seven_main{width: 1200px;margin: 0 auto;}
		.a2015112411 .seven_main h3{height: 42px;line-height: 42px;font-size: 20px;font-weight: normal;position: relative;}
		.a2015112411 .seven_main ul{display: inline-block;padding: 0;margin: 0;}
		.a2015112411 .seven_main ul li{float: left;margin-right: 12px;}
		.a2015112411 .seven_pic{position: relative;width: 190px;height: 212px; }
		.a2015112411 .seven_pic a{display: block;}
		.a2015112411 .seven_pic:hover{box-shadow: 0 0 14px 1px #333;}
		.a2015112411 .seven_opacity{position: absolute;bottom: 0;width: 190px;height: 43px;}
		.a2015112411 .seven_cola{background: #060d19;opacity: 0.5;filter: alpha(opacity:50);}
		.a2015112411 .seven_colb{background: #060d19;opacity: 0.5;filter: alpha(opacity:50);}
		.a2015112411 .seven_colc{background: #060d19;opacity: 0.5;filter: alpha(opacity:50);}
		.a2015112411 .seven_cold{background: #060d19;opacity: 0.5;filter: alpha(opacity:50);}
		.a2015112411 .seven_cole{background: #060d19;opacity: 0.5;filter: alpha(opacity:60);}
		.a2015112411 .seven_colf{background: #060d19;opacity: 0.5;filter: alpha(opacity:50);}
		.a2015112411 .seven_text{position: absolute;bottom: 0;width: 170px;height: 40px;padding-left: 10px;padding-right: 10px;padding-top: 3px;}
		.a2015112411 .seven_usepng{display: inline-block;background-image: url(Home/images/cmbzd1zynuyaunwjaagn0mxlsoi703.png);background-repeat: no-repeat;}
		.a2015112411 .seven_a{width: 44px;height: 22px;background-position: -170px -72px;margin-top: 11px;float: left;}
		.a2015112411 .seven_b{width: 37px;height: 34px;background-position: -227px -67px;float: left;}
		.a2015112411 .seven_c{width: 36px;height: 32px;background-position: -170px -106px;margin-top: 3px;float: left;}
		.a2015112411 .seven_d{width: 28px;height: 28px;background-position: -220px -109px;margin-top: 8px;float: left;}
		.a2015112411 .seven_e{width: 37px;height: 30px;background-position: -264px -107px;margin-top: 5px;float: left;}
		.a2015112411 .seven_f{width: 32px;height: 27px;background-position: -276px -67px;margin-top: 7px;float: left;}
		.a2015112411 .seven_text span{float: right;color: #fff;font-size: 15px;padding-top: 15px;}
	</style>
	<div class="seven_box">
		<div class="seven_main">
				<h3>
			        <span>3F 社交平台</span>
			    </h3>
			    <ul>
			    	<li>
			    		<div class="seven_pic btn_cntr_in_piece" datatype="5" sort="1" b_i="190,212,30" >
					    			<a   href="" latag="latag_home_MD532_d0b5f419-c154-4dc9-87db-72b29a7f81a7_p1_goods_code_no_exists"><img width="190" height="212" src="Home/picture/tempimage.gif" _src="http://p1.lefile.cn/product/adminweb/2017/02/06/fc913c4d-7db0-42c3-a38a-e1e9872c9888_1.jpg"  class="lazy_img"></a>
					    			<div class="seven_opacity seven_cola"></div>
					    			<div class="seven_text">
					    				<em class="seven_usepng seven_a" style="background-image: url(Home/images/cmbzd1zynuyaunwjaagn0mxlsoi703.png);"></em>
					    				<span>联想社区</span>
					    			</div>
			    		</div>
			    	</li>
			    	<li>
			    		<div class="seven_pic btn_cntr_in_piece" datatype="5" sort="2" b_i="190,212,30" >
					    			<a   href="" latag="latag_home_MD532_d0b5f419-c154-4dc9-87db-72b29a7f81a7_p2_goods_code_no_exists"><img width="190" height="212" src="Home/picture/tempimage.gif" _src="http://p3.lefile.cn/product/adminweb/2016/10/17/3599f394-3384-4aac-9500-1c8b36cec511.jpg"  class="lazy_img"></a>
					    			<div class="seven_opacity seven_colb"></div>
					    			<div class="seven_text">
					    				<em class="seven_usepng seven_b" style="background-image: url(Home/images/cmbzd1zynuyaunwjaagn0mxlsoi703.png);"></em>
					    				<span>官方微信</span>
					    			</div>
			    		</div>
			    	</li>
			    	<li>
			    		<div class="seven_pic btn_cntr_in_piece" datatype="5" sort="3" b_i="190,212,30" >
					    			<a   href="" latag="latag_home_MD532_d0b5f419-c154-4dc9-87db-72b29a7f81a7_p3_goods_code_no_exists"><img width="190" height="212" src="Home/picture/tempimage.gif" _src="http://p2.lefile.cn/product/adminweb/2016/10/18/05173a19-dd5c-42b2-b7aa-e0b7938f0e0b.jpg"  class="lazy_img"></a>
					    			<div class="seven_opacity seven_colc"></div>
					    			<div class="seven_text">
					    				<em class="seven_usepng seven_b" style="background-image: url(Home/images/cmbzd1zynuyaunwjaagn0mxlsoi703.png);"></em>
					    				<span>微信服务</span>
					    			</div>
			    		</div>
			    	</li>
			    	<li>
			    		<div class="seven_pic btn_cntr_in_piece" datatype="5" sort="4" b_i="190,212,30" >
					    			<a   href="" latag="latag_home_MD532_d0b5f419-c154-4dc9-87db-72b29a7f81a7_p4_goods_code_no_exists"><img width="190" height="212" src="Home/picture/tempimage.gif" _src="http://p1.lefile.cn/product/adminweb/2016/10/17/f8f08d27-5b4a-41d0-8cf4-c284c777a1c9.jpg"  class="lazy_img"></a>
					    			<div class="seven_opacity seven_cold"></div>
					    			<div class="seven_text">
					    				<em class="seven_usepng seven_d" style="background-image: url(Home/images/cmbzd1zynuyaunwjaagn0mxlsoi703.png);"></em>
					    				<span>百度贴吧</span>
					    			</div>
			    		</div>
			    	</li>
			    	<li>
			    		<div class="seven_pic btn_cntr_in_piece" datatype="5" sort="5" b_i="190,212,30" >
			    					<a   href="" latag="latag_home_MD532_d0b5f419-c154-4dc9-87db-72b29a7f81a7_p5_goods_code_no_exists"><img width="190" height="212" src="Home/picture/tempimage.gif" _src="http://p1.lefile.cn/product/adminweb/2016/10/17/333a7f2d-df53-4603-b89d-3e950093406e.jpg"  class="lazy_img"></a>
					    			<div class="seven_opacity seven_cole"></div>
					    			<div class="seven_text">
					    				<em class="seven_usepng seven_e" style="background-image: url(Home/images/cmbzd1zynuyaunwjaagn0mxlsoi703.png);"></em>
					    				<span>官方微博</span>
					    			</div>
			    		</div>
			    	</li>
			    	<li style="margin-right:0px;">
			    		<div class="seven_pic btn_cntr_in_piece" datatype="5" sort="6" b_i="190,212,30" >
			    					<a   href="" latag="latag_home_MD532_d0b5f419-c154-4dc9-87db-72b29a7f81a7_p6_goods_code_no_exists"><img width="190" height="212" src="Home/picture/tempimage.gif" _src="http://p2.lefile.cn/product/adminweb/2016/10/17/4091f4bd-ca11-4d66-8fca-ab4f132c280c.jpg"  class="lazy_img"></a>
					    			<div class="seven_opacity seven_colf"></div>
					    			<div class="seven_text">
					    				<em class="seven_usepng seven_f" style="background-image: url(Home/images/cmbzd1zynuyaunwjaagn0mxlsoi703.png);"></em>
					    				<span>兴趣部落</span>
					    			</div>
			    		</div>
			    	</li>
			    </ul>
		</div>
	</div>
</div>
</div>
				</div>
			</div>
		</div>
	</div>
	
	<script type="text/template" id="query_pieces_tpl">
	</script>
	<!--  ----------------------- floorNav  ---------------------------  -->
	<div class="piece floor_nav">
		<style type="text/css">
			.floor_nav .ns_floor-nav-box {position: fixed;left: 50%;margin-left: -650px;z-index: 99;width: 30px;top: 50%;margin-top: -166px;text-align: center;display:none;}
			.floor_nav .ns_floor-nav-box_on {right: 0;margin-right: 0;}
			.floor_nav .ns_floor-nav-box .ns_line {width: 10px;height: 0;font-size: 0;border-bottom: 1px solid #e5e5e5;margin: 5px auto;line-height: 0;}
			.floor_nav .ns_floor-nav-box li {margin: 0;}
			.floor_nav .ns_floor-nav-box a {text-decoration: none;font-size: 12px;width: 30px;display: block;margin: 0 auto;height: 26px;line-height: 26px;-webkit-transition: none;-moz-transition: none;-o-transition: none;transition: none;}
			.floor_nav .ns_floor-nav-box a em {display: none;}
			.floor_nav .ns_floor-nav-box a.ns_thisscroll {height: auto;}
			.floor_nav .ns_floor-nav-box a.ns_on,.ns_floor-nav-box a:hover,.ns_floor-nav-box a.active {line-height: 13px;}
			.floor_nav .ns_floor-nav-box a.ns_on em,.ns_floor-nav-box a:hover em{display: block;font-style: normal;color: #2a2a2a;}
			.floor_nav .ns_floor-nav-box a.active em {display: block;font-style: normal;color: #4ac0e0;}
			.floor_nav .ns_floor-nav-box a.ns_on span,.ns_floor-nav-box a:hover span,.ns_floor-nav-box a.active span {display: none;}
			.floor_nav .ns_floor-nav-box a .ns_star ,.ns_floor-nav-box a .ns_like{line-height: 0;width: 18px;height: 26px;top: 1px;}
			.floor_nav .ns_floor-nav-box a .ns_star{background-position: -4px -455px;}
			.floor_nav .ns_floor-nav-box a .ns_like{background-position: -32px -455px;}
			.floor_nav .ns_floor-nav-box .ns_mui-top,.rsp {top: 0;}
			.floor_nav .ns_floor-nav-box a span {color: #666;}
			.floor_nav .ns_floor-nav-box a.ns_on .ns_star,.ns_floor-nav-box a:hover .ns_star,.ns_floor-nav-box a.ns_on .ns_like,.ns_floor-nav-box a:hover .ns_like{display: block;margin: 0 auto;}
			.floor_nav #J-floor-nav-box li a.ns_on span.ns_star,#J-floor-nav-box li a:hover span.ns_star,#J-floor-nav-box li a.ns_on span.ns_like,#J-floor-nav-box li a:hover span.ns_like{display: none;}
			.floor_nav #J-floor-nav-box li a:hover span.ns_star,#J-floor-nav-box li a:hover span.ns_like {background: 0 0;}
		</style>
		<div class="ns_floor-nav-box" id="J-floor-nav-box">
		    <ul>
		        <li>
		            <a href="#J-star-box" data-scroll="#J-star-box">
		                <span class="myicon ns_star"></span><em>明星<br>单品</em>
		            </a>
		        </li>
		        <!--<li class="ns_line"></li>
		        <li class="hunter">
		            <a href="#J-like-box" data-scroll="#J-like-box">
		                <span class="myicon ns_like"></span><em>猜你<br>喜欢</em>
		            </a>
		        </li>-->
		        <li class="ns_line hunter"></li>
		        <li>
		            <a href="#J-computer-box" data-scroll="#J-computer-box">
		                <span>1F</span><em>lenovo<br>电脑</em>
		            </a>
		        </li>
		        <li class="ns_line"></li>
		        <li class="ns_l2">
		            <a href="#J-Tablet-box" data-scroll="#J-Tablet-box">
		                <span>2F</span><em>平板<br>电脑</em>
		            </a>
		        </li>
		        <li class="ns_l2">
		            <a href="#J-Social-box" data-scroll="#J-Social-box">
		                <span>3F</span><em>社交<br>平台</em>
		            </a>
		        </li>
		        <li class="ns_line"></li>
		    </ul>
		</div>
		 <div class="jsurl hid_rx">//m1.lefile.cn/gl/js/components/floorNav.js</div>
	</div>
	@endsection