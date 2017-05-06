@extends('Home.base.parent')
@section('content')
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
 <link rel="stylesheet" type="text/css" href="/Home/css/detail.css">
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
					<dd><a class="onlinkLink" href="javascript:void(0)" target="_blank">售前咨询，获取更多优惠<br>9:00－22:00</a></dd>
					<dt class="myicon hover_after"></dt>
					<dd><a target="_blank" href="http://robot.lenovo.com.cn/lenovo/?channel=H325">服务类售后咨询<br>00:00－24:00</a></dd>
					<dt class="myicon hover_gw"></dt>
  					<dd><a target="_blank" href="http://crm2.qq.com/page/portalpage/wpa.php?uin=4009868999&aty=0&a=0&curl=&ty=1">企业IT咨询顾问<br>4009868999</a></dd>
				</dl>
				<span class="myicon myicon_small"></span>
			</div>
    	</li>
    	<li>
    		<a href="http://appserver.lenovo.com.cn/LenovoMap/LenovoMap_Direct.aspx?intcmp=MAP20140730_1" target="_blank" class="myicon icon_block myicon_stores" title="门店">门店</a>
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
    		<a href="http://c.lenovo.com.cn/lenovo/tucao.html" target="_blank" class="myicon icon_block myicon_teasing" title="吐槽">吐槽</a>
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

	
	<div class="detail_con">
		
<!-- 面包屑上部  空白位-->

		<!-- 面包屑 -->
<script type="text/javascript">
	var productId = 'b1658d5e-0cdf-4e7f-b907-a9be46cabaa8';
	var platformCode = '4';
	var picDomain = 'http://p1.lefile.cn';
	var env ='product';//dev,test,product
					var buOwner = '40';
</script>
	<div class="clearfix"></div>
		<div class="de_location">
        	<a href="http://www.lenovo.com.cn">首页</a> > <a href="#">商品详情</a>
         > {{ $list->Goods_name }} 
     </div>



		
<!-- 面包屑下部  空白位-->

		
		<div class="detail_info clearfix">
			
			<div class="detail_info_fl">  
				
<!-- 橱窗图上部  空白位-->

				<!-- 橱窗图 --> 
            <div class="pro_img" id="imgSlider">
                <a href="javascript:;" class="pro_prev"></a>
                <a href="javascript:;" class="pro_next"></a>
                <ul class="pro_img_big" id="imgBig">
                    @foreach ($pic as $k => $v)
                        <li style="z-index:1;filter: alpha(opacity=100); opacity: 1;"
                        class="a{{ $k }}"><a href=""><!--最后效果abc.jpg  abc.w544.jpg -->
	                        <img src="/Admin/upload/{{ $v }}"  />
                        </a></li>
                    @endforeach 
                </ul>
                <div class="pro_img_small">
                    <ul class="pro_ul" id="imgSmall">
                        @foreach ($pic as $k => $v)
                            <li 
                                style="filter:alpha(opacity:100);opacity:1;"
                            ><a href="javascript:turn{{ $k }}()"><img src="/Admin/upload/{{ $v }}"  /></a></li>
                        @endforeach
                    </ul> 
                    <script>
                        function turn0(){
                            $('.a0').css('display','block');
                            $('.a1').css('display','none');
                            $('.a2').css('display','none');
                        }
                        function turn1(){
                            $('.a0').css('display','none');
                            $('.a1').css('display','block');
                            $('.a2').css('display','none');
                        }
                        function turn2(){
                            $('.a0').css('display','none');
                            $('.a1').css('display','none');
                            $('.a2').css('display','block');
                        }
                    </script>
                </div>
            </div>
            <div class="de_action clearfix">
                 <span>商品编号：ZA0V0099CN</span>
                <a href="javascript:void(0);" class="detailpng de_save" id="sc" latag="latag_pc_detail_addfavorite_58063" title="收藏">收藏</a>
                <a href="javascript:void(0);" class="detailpng de_share" id="share" title="分享">&nbsp;</a>
                <a id="share_info" title="如何参与" href="http://www.lenovo.com.cn/activity/marketing/c2c-intro/index.html" target="_blank">如何参与</a>
                <div class="share_box">
                        <!-- JiaThis Button BEGIN -->
                        <div class="jiathis_style">
                            <a class="jiathis_button_tsina" latag="latag_pc_detail_share_weibo"></a>
                            <a class="jiathis_button_qzone" latag="latag_pc_detail_share_qzone"></a>
                            <a class="jiathis_button_renren" latag="latag_pc_detail_share_renren"></a>
                            <a class="jiathis_button_weixin" latag="latag_pc_detail_share_weixin"></a>
                        </div>
                        <style type="text/css">
        .de_action {
            position: relative;
        }
        .share_box {
            display: none;
            position: absolute;
            top: 42px;
            left: 380px;
            height: 30px;
            width: 150px;
            z-index: 2;
            border: 1px solid #C29C9C;
            overflow: hidden;
            clear: both;
            background-color: #fff;
        }
            .share_box a {
                float: none;
                width: 20px;
                padding-left: 0;
                height: 20px;
                line-height: 30px;
                margin-left: 0;
            }
            .share_box span {
                width: 2px;
                padding-bottom: 5px !important;
                margin-left: 10px !important;
                margin-top: 5px !important;
            }
        .jiathis_style .jtico {
            background: url(images/mui.png) no-repeat left !important;
        }
        .jiathis_style .jtico_tsina {
            background-position: -140px -113px !important;
            _background-position: -140px -112px !important;
        }
            .jiathis_style .jtico_tsina:hover {
                background-position: -140px -133px !important;
                _background-position: -140px -132px !important;
            }
        .jiathis_style .jtico_qzone {
            background-position: -209px -113px !important;
            _background-position: -209px -112px !important;
        }
            .jiathis_style .jtico_qzone:hover {
                background-position: -209px -133px !important;
                _background-position: -209px -132px !important;
            }
        .jiathis_style .jtico_renren {
            background-position: -163px -113px !important;
            _background-position: -163px -112px !important;
        }
            .jiathis_style .jtico_renren:hover {
                background-position: -163px -133px !important;
                _background-position: -163px -132px !important;
            }
        .jiathis_style .jtico_weixin {
            background-position: -232px -113px !important;
            _background-position: -232px -112px !important;
        }
            .jiathis_style .jtico_weixin:hover {
                background-position: -232px -133px !important;
                _background-position: -232px -132px !important;
            }
    </style>
                        <script type="text/javascript" src="Home/js/jia.js" charset="utf-8"></script>
                        <!-- JiaThis Button END -->
                    </div>
            </div>



				
<!-- 橱窗图下部  空白位-->

			</div>
			
	        <div class="detail_info_fr">
	        	
				
<!-- 基本信息上部  空白位-->

	            
				<!-- 商品基础信息 -->
        <h1 class="de_proname">{{ $list->Goods_name }} </h1>
            <p class="de_description">{{ $list->Goods_body }} </p>
        <div class="de_info_main">
            <div class="de_info_price clearfix">
                <span class="de_fl">商城价：<span style="color:red;font-size:30px;">{{ $list->Goods_price }}</span></span>
                <b></b>
                <script type="text/javascript">
                    var price = "";
                    var salesType = "0";
                </script>
            </div>
            <div class="de_info_sail clearfix">
            </div>
        </div>
                <div class="de_info_app clearfix">
                <a href="javascript:;" class="de_more" id="appshow"><i class="detailpng de_down"></i><span>截屏五分好评至微信号18888888888，可获取10元返现红包</span></a>
                <div class="de_app_code"><img src="Home/picture/de_code.jpg" alt="" /></div>
                </div>



				
				
<!-- 价格下部  空白位-->

	            
				<!-- 商品规格 -->
<script type="text/javascript">
	
            var specInfo = [{"gsdlist":[{"gcode":58011,"gsdId":"fa75f054-79a5-11e6-b8c7-0050569f0752"},{"gcode":58012,"gsdId":"fa5cc1b4-79a5-11e6-b8c7-0050569f0752"},{"gcode":58064,"gsdId":"fa6c873e-79a5-11e6-b8c7-0050569f0752"},{"gcode":58063,"gsdId":"fa646b59-79a5-11e6-b8c7-0050569f0752"}],"typeid":"77417799-e410-44e2-ac2b-606f23f4fdcf"}];
        var code = 58063;
        var spec=[];
   
            spec[0]="耀金"
</script>  
				<div class="de_info_section de_info_section2">
					<ul>
	    			<li class="clearfix">
		    			<span class="de_sec_label" typeid="77417799-e410-44e2-ac2b-606f23f4fdcf">YOGA BOOK：</span>
		    			<div class="de_sec_main">
								
								    			
								    			<span id="fa75f054-79a5-11e6-b8c7-0050569f0752" class="de_sec_sel click_radio2" latag="latag_pc_detail_choose_58063_YOGA BOOK_fa75f054-79a5-11e6-b8c7-0050569f0752">windows版 雅黑</span>

					    </div>
	    			</li>
			</ul>
		</div>


	            
				<!-- ThinkPad 私人订制 -->
            
<script type="text/javascript">
	var srdz={};

</script>  


				
				
<div class="de_info_section de_info_section4" style="display:none;">
    <ul>
        <li class="clearfix">
            <span class="de_sec_label">选择服务：</span>
            <div class="de_sec_main">                                 
                                  
            </div>
        </li>
    </ul>
</div>

	
				<!-- 分期文案 -->
<!-- think o2o -->
<div id="city_wrap" class="de_info_section de_info_section_city" style="display:none;"></div>

	
	
	            <div class="de_info_btn clearfix">
	                <div class="de_info_num">
	                    <label class="i_box">
	                                            
	                    </label>
	                    <span id="stock"></span>
	                </div> 
                        <form action="/cat"  name="mform" style="display:none;">
                            
                        </form>
		                      <a href="javascript:doadd({{ $list->Goods_id }})" class="de_button de_btn_car" id="jrgwc"  style="display:block;" event-name="PC端_产品详情页_加入购物车_YOGA BOOK 二合一平板电脑  耀金" latag="latag_pc_detail_addshopcart_58063" title="加入购物车">加入购物车</a>
                        <script>
                        function doadd(id)
                        {
                            // alert(id);
                            var mform = document.mform;
                            mform.action = "/cat/"+id;
                            mform.submit();
                        }
                        </script>
	            </div>
	            
				
<!-- 基本信息下部  空白位-->

	        </div>
	    </div>
		
		
<!-- 促销套餐信息上部  空白位-->
 
		
<!-- 促销套餐信息下部  空白位-->
 
		
	</div>  
	
	<div class="main">  
		<div class="box clearfix">
	        <div class="box-lt">
	        	
				
<!-- 推荐列表上部  空白位-->
 
				
				<div id="rxb"></div>

<div id="gxhtj"></div>
            
				<div id="cnxh"></div>

				

 
				
				
<!-- 推荐列表下部  空白位-->
 
			</div>
			
	        <div class="box-rt">
				
<!-- <div id='aaaaa' class="asdf" style="width:300px;height:300px;border:1px red solid;">shajshajsh</div> -->
<script type="text/javascript" src='/Home/js/jquery-1.8.3.min.js'></script>

<script type="text/javascript">
    
//     $('.asdf').click(function(){
//             $(this).css('background','pink');
//         });
</script>
				
<!-- 详情配置上部  空白位-->
 
				<div class="tab-hd">
	                
	                <ul id="tab"> 
						<!-- 商品详情配置评价tab --> 

					<li class="current" latag="latag_pc_detail_tab_商品详情_58063" onclick="do1()">商品详情</li>


        		<li latag="latag_pc_detail_tab_配置信息_58063" onclick="do2()">配置信息</li>

	<li id="pingjia_title" latag="latag_pc_detail_tab_商品评论_58063" onclick="do3()">商品评价</li>


 
	                </ul>
	            </div>
	            
	            <div id="content">
	            	
					<!-- 商品详情 -->
			        <ul class="rt-box" id="picture">
                        @foreach ($bigpic as $v)
			            <p><img class="lazy" src="/Admin/upload/{{ $v }}" data-original="http://p1.lefile.cn/product/adminweb/2016/09/20/uNg7kkUHJYySk04mDbuP1iJEd-2755.jpg" style=""/></p>
                        @endforeach
			        </ul>	
                </div>
            
					<!-- 配置信息 -->


	<ul style="display: none;" id="info">
    <div class="ns_attributes-list">                         
        <div class="ns_hd">
                商品编号：ZA0V0099CN
    	</div>                         
	    <div class="ns_bd">                             
	        <table cellpadding="0" cellspacing="1" border="0">                                 
	            <tbody>
	            
	                            <tr>                                         
	                                <th colspan="2" style=" font-weight:900; font-size:15px;">处理器</th>                     
	                            </tr>
	                                                    <tr> 
	                                                        <th>
	                                                            CPU类型                                         
	                                                        </th>                                        
	                                                        <td>
	                                                            Intel Atom x5-Z8550处理器                                     
	                                                        </td>                                        
	                                                    </tr>
	                                                    <tr> 
	                                                        <th>
	                                                            CPU主频                                         
	                                                        </th>                                        
	                                                        <td>
	                                                            2.4 GHz                                     
	                                                        </td>                                        
	                                                    </tr>
	                                                    <tr> 
	                                                        <th>
	                                                            核心数量                                         
	                                                        </th>                                        
	                                                        <td>
	                                                            四核                                     
	                                                        </td>                                        
	                                                    </tr>
	                        
	                            <tr>                                         
	                                <th colspan="2" style=" font-weight:900; font-size:15px;">操作系统</th>                     
	                            </tr>
	                                                    <tr> 
	                                                        <th>
	                                                            操作系统                                         
	                                                        </th>                                        
	                                                        <td>
	                                                            Android 6.0                                     
	                                                        </td>                                        
	                                                    </tr>
	                        
	                            <tr>                                         
	                                <th colspan="2" style=" font-weight:900; font-size:15px;">内存	</th>                     
	                            </tr>
	                                                    <tr> 
	                                                        <th>
	                                                            系统内存                                         
	                                                        </th>                                        
	                                                        <td>
	                                                            4GB                                     
	                                                        </td>                                        
	                                                    </tr>
	                                                    <tr> 
	                                                        <th>
	                                                            存储容量                                         
	                                                        </th>                                        
	                                                        <td>
	                                                            64GB                                     
	                                                        </td>                                        
	                                                    </tr>
	                        
	                            <tr>                                         
	                                <th colspan="2" style=" font-weight:900; font-size:15px;">显示屏幕	</th>                     
	                            </tr>
	                                                    <tr> 
	                                                        <th>
	                                                            屏幕尺寸                                         
	                                                        </th>                                        
	                                                        <td>
	                                                            10.1英寸                                     
	                                                        </td>                                        
	                                                    </tr>
	                                                    <tr> 
	                                                        <th>
	                                                            屏幕分辨率                                         
	                                                        </th>                                        
	                                                        <td>
	                                                            1200x1920                                     
	                                                        </td>                                        
	                                                    </tr>
	                                                    <tr> 
	                                                        <th>
	                                                            屏幕类型                                         
	                                                        </th>                                        
	                                                        <td>
	                                                            IPS，FHD                                     
	                                                        </td>                                        
	                                                    </tr>
	                        
	                            <tr>                                         
	                                <th colspan="2" style=" font-weight:900; font-size:15px;">网络/连接	</th>                     
	                            </tr>
	                                                    <tr> 
	                                                        <th>
	                                                            WiFi功能                                         
	                                                        </th>                                        
	                                                        <td>
	                                                            802.11a/​b/​g/​n/​ac                                     
	                                                        </td>                                        
	                                                    </tr>
	                                                    <tr> 
	                                                        <th>
	                                                            蓝牙功能                                         
	                                                        </th>                                        
	                                                        <td>
	                                                            BT 4.0                                     
	                                                        </td>                                        
	                                                    </tr>
	                        
	                            <tr>                                         
	                                <th colspan="2" style=" font-weight:900; font-size:15px;">端口	</th>                     
	                            </tr>
	                                                    <tr> 
	                                                        <th>
	                                                            视频接口                                         
	                                                        </th>                                        
	                                                        <td>
	                                                            Micro HDMI                                     
	                                                        </td>                                        
	                                                    </tr>
	                                                    <tr> 
	                                                        <th>
	                                                            数据接口                                         
	                                                        </th>                                        
	                                                        <td>
	                                                            1x micro-USB                                     
	                                                        </td>                                        
	                                                    </tr>
	                        
	                            <tr>                                         
	                                <th colspan="2" style=" font-weight:900; font-size:15px;">多媒体	</th>                     
	                            </tr>
	                                                    <tr> 
	                                                        <th>
	                                                            摄像头像素                                         
	                                                        </th>                                        
	                                                        <td>
	                                                            200万像素前置摄像头+800万自动对焦后置摄像头                                     
	                                                        </td>                                        
	                                                    </tr>
	                                                    <tr> 
	                                                        <th>
	                                                            扬声器                                         
	                                                        </th>                                        
	                                                        <td>
	                                                            2 x 扬声器                                     
	                                                        </td>                                        
	                                                    </tr>
	                                                    <tr> 
	                                                        <th>
	                                                            麦克风                                         
	                                                        </th>                                        
	                                                        <td>
	                                                            2 x 麦克风 支持降噪                                     
	                                                        </td>                                        
	                                                    </tr>
	                                                    <tr> 
	                                                        <th>
	                                                            重力感应                                         
	                                                        </th>                                        
	                                                        <td>
	                                                            支持                                     
	                                                        </td>                                        
	                                                    </tr>
	                                                    <tr> 
	                                                        <th>
	                                                            光线感应                                         
	                                                        </th>                                        
	                                                        <td>
	                                                            支持                                     
	                                                        </td>                                        
	                                                    </tr>
	                                                    <tr> 
	                                                        <th>
	                                                            内置感应                                         
	                                                        </th>                                        
	                                                        <td>
	                                                            线性马达、距离传感器、霍尔效应传感器                                     
	                                                        </td>                                        
	                                                    </tr>
	                        
	                            <tr>                                         
	                                <th colspan="2" style=" font-weight:900; font-size:15px;">电源	</th>                     
	                            </tr>
	                                                    <tr> 
	                                                        <th>
	                                                            电池容量                                         
	                                                        </th>                                        
	                                                        <td>
	                                                            8500mAh                                     
	                                                        </td>                                        
	                                                    </tr>
	                        
	                            <tr>                                         
	                                <th colspan="2" style=" font-weight:900; font-size:15px;">规格	</th>                     
	                            </tr>
	                                                    <tr> 
	                                                        <th>
	                                                            型号                                         
	                                                        </th>                                        
	                                                        <td>
	                                                            YOGA BOOK                                     
	                                                        </td>                                        
	                                                    </tr>
	                                                    <tr> 
	                                                        <th>
	                                                            颜色                                         
	                                                        </th>                                        
	                                                        <td>
	                                                            耀金                                     
	                                                        </td>                                        
	                                                    </tr>
	                                                    <tr> 
	                                                        <th>
	                                                            尺寸                                         
	                                                        </th>                                        
	                                                        <td>
	                                                            256.6 x 170.8 x 9.6 mm                                     
	                                                        </td>                                        
	                                                    </tr>
	                                                    <tr> 
	                                                        <th>
	                                                            净重                                         
	                                                        </th>                                        
	                                                        <td>
	                                                            690g                                     
	                                                        </td>                                        
	                                                    </tr>
	                        
	            </tbody>                             
	        </table>                         
	    </div>                     
    </div>

</ul>
                                                                           
 
<ul style="display: none;" id="reply">
<div align="center"><span style="font-size:15px;">好评</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:15px;">中评</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:15px;">差评</span></div>
  <div class="ns_comment ns_fixClear" id="div3">
        <div id="pager_divdiv3" class="ns_discusspager" style="disblock;">
            <div class="rate-score" style="width: 75px;padding: 0 20px;border-right: 1px dotted #ddd;text-align: center;display: inline-block;vertical-align: top;">
                <h4 style="color: #404040;font-size: 12px;font-weight: 100;">与描述相符</h4>
                <strong style="color: #f60;
                font-family: arial;
                font-size: 32px;
                line-height: 32px;
                margin: 0 2px;">4.8</strong>
            </div>
        <div class="rate-tag-box" style="width: 630px;display: inline-block;vertical-align: top;">
            <div class="rate-tag-label" style="color: #ccc;width: 16px;height: 61px;margin-top: 4px;fontsize: 11px;line-height: 12px;padding: 0 12px 0 25px;background: url(//img.alicdn.com/tps/i3/T12eC3XklrXXXXXXXX-15-52.png) right center no-repeat;display: inline-block;vertical-align: top;">
            <span style="color: #ccc;
            font-size: 11px;
            line-height: 12px;">大家都写到</span>
            </div>
            <div style="display: inline-block;vertical-align: top;">
                <div style="font-family: tahoma,arial,微软雅黑,sans-serif;">
                    <span style="float: left;height: 22px;margin: 7px 6px 6px;"><p style="color: #b10000;border-color: #ffd7dd;position: relative;float: left;border-radius: 2px;line-height: 18px;padding: 1px 10px;background: #fff;box-shadow: 2px 2px 1px #f2f2f2;border: 1px solid #d3f4e4;white-space: nowrap;">质量很好</p></span>
                    <span style="float: left;height: 22px;margin: 7px 6px 6px;"><p style="color: #b10000;border-color: #ffd7dd;position: relative;float: left;border-radius: 2px;line-height: 18px;padding: 1px 10px;background: #fff;box-shadow: 2px 2px 1px #f2f2f2;border: 1px solid #d3f4e4;white-space: nowrap;">跟描述一致</p></span>
                </div>
            </div>
        </div>
    </div>
    <div class="ns_comment-inner" id="sppl_box">
        <dl id="sppl_list" class="clearfix">
            <ul style="font-size:16px;">
            @foreach ($reply as $v)
               会员 {{ $v->Reply_replayer }} 评价:<li>{{ $v->Reply_rcontent }}</li>
            @endforeach
            </ul>
        </dl>
    </div>
  </div>
</ul>
<script>
    function do1(){
        $('#content').css('display','block');
        $('#info').css('display','none');
        $('#reply').css('display','none');
        $('#content').css('background','white');
        $('#info').css('background','gray');
        $('#reply').css('background','gray');
    }
    function do2(){
        // alert(111);
        $('#content').css('display','none');
        $('#info').css('display','block');
        $('#reply').css('display','none');
        $('#content').css('background','gray');
        $('#info').css('background','white');
        $('#reply').css('background','gray');
    }
    function do3(){
        $('#content').css('display','none');
        $('#info').css('display','none');
        $('#reply').css('display','block');
        $('#info').css('background','gray');
        $('#content').css('background','gray');
        $('#reply').css('background','white');
    }
</script>




 


 
<script src="/Home/js/jquery-1.8.3.min.js"></script>






<script src="/Home/js/51c6b553e2a141a484ef6b6dae5136f7.js"></script>

<script src='/Home/js/login.top.footer.bar.min.js'></script>

<!-- 是否有导航 -->

<script src='/Home/js/nav.min.js'></script>


<!-- 是否有分类 -->



<!-- 是否有弹屏广告 -->



<script src="Home/js/juicer-min.lenovo-plugin-need.loadjs.unslider.lazy.asynloadinc.min.db41a4b6.js"></script>



<script src='/Home/js/lenovo_search_header.min.js'></script>
@endsection