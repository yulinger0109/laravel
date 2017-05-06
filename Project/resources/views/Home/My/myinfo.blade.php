@extends('Home.base.parent')
@section('content')

<!--------------左部导航栏开始-------------------->
    <div class="user_location" style="width: 1188px;margin: 0 auto;margin-top: 0px;margin-right: auto;margin-bottom: 0px;margin-left: auto;height: 32px;line-height: 32px;font-size: 14px;background: #eee;background-image: initial;background-position-x: initial;background-position-y: initial;background-size: initial;background-repeat-x: initial;background-repeat-y: initial;background-attachment: initial;background-origin: initial;background-clip: initial;background-color: rgb(238, 238, 238);padding-left: 12px;">
    <a href="" title="">首页</a>&gt;<a href="">会员中心</a>
    <p style="display: inline-block; padding-right: 15px; float: right;" id="complet_mess">
    <a href="" style="color:red;" id="ledounum">首次完善个人信息，送50乐豆!</a></p>
    </div>
    <div class="user_main clearfix" style="zoom: 1;width: 1200px;margin: 28px auto 35px;
    margin-top: 28px;margin-right: auto;margin-bottom: 35px;margin-left: auto;">
    <!-- menu -->
    <div class="user_leftbar" style="width: 150px;border: 1px solid #d9d8d6;border-top-width: 1px;border-right-width: 1px;border-bottom-width: 1px;border-left-width: 1px;border-top-style: solid;border-right-style: solid;border-bottom-style: solid;border-left-style: solid;border-top-color: rgb(217, 216, 214);border-right-color: rgb(217, 216, 214);border-bottom-color: rgb(217, 216, 214);border-left-color: rgb(217, 216, 214);-moz-border-top-colors: none;-moz-border-right-colors: none;-moz-border-bottom-colors: none;-moz-border-left-colors: none;border-image-source: none;border-image-slice: 100% 100% 100% 100%;border-image-width: 1 1 1 1;border-image-outset: 0 0 0 0;border-image-repeat: stretch stretch;float: left;">
        <style type="text/css">
#user_leftbar{width: 150px;font-family:arial,"微软雅黑",sans-serif;font-size: 12px;color: #000;}
#user_leftbar *{margin: 0;padding: 0;}
#user_leftbar ul,#user_leftbar li{ob-style: none;}
#user_leftbar a{text-decoration: none;}
#user_leftbar .user_logo{padding: 13px 0;text-align: center;}
#user_leftbar .user_logo img{width: 106px;height: 106px;border-radius: 106px;}
#user_leftbar .user_logo p{color: #959595;height: 16px;line-height: 16px;overflow: hidden;margin-top: 8px;}
#user_leftbar h3{border-top: 1px solid #d9d8d6;height: 32px;line-height: 32px;background: #eee;padding-left: 32px;font-size: 14px;font-weight: normal;cursor: pointer;}
#user_leftbar h3 span{float: left;display: block;height: 32px;line-height: 32px;}
#user_leftbar h3 i{float: left;display: block;width: 9px;height: 6px;background-image: url(http://m4.lefile.cn/cerp_member/static/icons/usericon.png);margin: 13px 0 0 10px;}
#user_leftbar h3 .user_up{background-position: -3px -3px;}
#user_leftbar h3 .user_down{background-position: -16px -3px;}
#user_leftbar ul{cursor: pointer;}
#user_leftbar li{height: 31px;line-height: 31px;padding-left: 32px;font-size: 13px;border-top: 1px solid #d9d8d6;}
#user_leftbar li a{color: #6f7170;}   
#user_leftbar .red_bg a{color: #fff;} 
#user_leftbar .red_bg{background-color:#d62f26;}  
#user_leftbar{border:#fff;}  
body{background:#fff}
</style>  
     <div id="user_leftbar" style="float:left;border:1 solid black;">
        <div class="user_ob" style="border:1 solid black;">
            <h3 class="clearfix"><span>账户中心</span></h3>
            <ul>
                <li><a href="/home/myinfo/{{ session('user')->User_id }}/edit" mcode="611f8c79c4dc">个人信息</a></li>
            </ul>
            <ul>
                <li><a href="/home/mypass/{{ session('user')->User_id }}/edit" >修改密码</a></li>
            </ul>
            <ul>
              <li><a href="" mcode="10c210c70d72">账户绑定</a></li>
            </ul> 
        </div>
        <div class="user_ob">
            <h3 class="clearfix"><span>订单中心</i></h3>
            <ul>
                <li><a href="/home/myorder" mcode="de2d855aafa7">我的订单</a></li>
            </ul>
            <ul>
                <li><a href="" mcode="e6724325d481">我的团购</a></li>
            </ul>
            <form action="/my/myorder" method="post" name="yform" style="display:none">
                {{ csrf_field() }}
            </form>
            <ul>
                <li><a href="javascript:doreply(1)" mcode="b7d8746a5d6f">评价晒单</a></li>
            </ul>
            <script>
            function doreply(id)
            {
                var form  = document.yform;
                form.action = "/home/myorder";
                form.submit();
            }
            </script>
            <ul>
                <li><a href=""  mcode="fb47bb1bc927">我的吐槽</a></li>
            </ul>
            <ul>
                <li><a href="/home/myaddress" mcode="f212417cda71">收货地址</a></li>
            </ul>
            <ul>
                <li><a href="/home/collect" mcode="7e209107c62c">我的收藏</a></li>
            </ul>
            <ul>
                <li><a href="" mcode="8057f5d860d3">我的预约</a></li>
            </ul>
            <ul>
                <li><a href="" mcode="88ce27b1f0ce">我的退换货</a></li>
            </ul>
            <ul>
                <li><a href="" mcode="a9c8cac27d82">以旧换新</a></li>
            </ul>
            <ul>
                <li><a href="" mcode="8dae5db6db3b">我的众筹</a></li>
            </ul>
        </div>
         <div class="user_ob">
            <h3 class="clearfix"><span>我的信箱</i></h3>
            <ul>
                <li><a href="" mcode="dfff3c6a9652">我的站内信</a></li>
            </ul>
        </div>
        
        
</div>
 
                </div>
<!--------------左部导航栏结束--------------------> 
    <!-- 个人信息 -->
    <div class="msg_right" style="float: right;
width: 1032px;">
    	<!-- 个人资料 -->
       <div class="msg_box" style="border: 1px solid #d9d8d6;border-top-width: 1px;border-right-width: 1px;border-bottom-width: 1px;border-left-width: 1px;border-top-style: solid;border-right-style: solid;border-bottom-style: solid;border-left-style: solid;border-top-color: rgb(217, 216, 214);border-right-color: rgb(217, 216, 214);border-bottom-color: rgb(217, 216, 214);border-left-color: rgb(217, 216, 214);-moz-border-top-colors: none;-moz-border-right-colors: none;-moz-border-bottom-colors: none;-moz-border-left-colors: none;border-image-source: none;border-image-slice: 100% 100% 100% 100%;border-image-width: 1 1 1 1;border-image-outset: 0 0 0 0;border-image-repeat: stretch stretch;">
            <div class="msg_title" style="height: 38px;line-height: 38px;border-bottom: 1px solid #d9d8d6;background: #eee;">
                <p style="font-size: 15px;padding-left: 22px;"><a href=""></a>个人信息</p>
            </div>
           @if(session('msg'))
            <div class="alert alert-success alert-icon">
            {{ session('msg') }}
            <i class="icon"></i>
            </div>
        @endif
        @if(session('error'))
            <div class="alert alert-warning alert-icon">
            {{ session('error') }}
            <i class="icon"></i>
            </div>
        @endif
          
            <div class="msg_main clearfix" style="padding-left: 22px;padding-top: 20px;">

            	<form id="infoform" action="/home/myinfo/{{ $ob->User_id }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
	                <ul class="clearfix msg_ul" style="float: left;border-right: 1px dashed #d9d8d6;padding-right: 40px;">
	                	<input type="hidden" name="User_id" value="{{ $ob->User_id }}">
	                	<input type="hidden" name="User_uemail" value="{{ $ob->User_uemail }}">
	                    <li class="clearfix msg_li" style="line-height: 24px;margin-top: 20px;">
	                        <p class="msg_name" style="float:left;width: 80px;font-size: 13px;color: #000;text-align: right;">会员账号：</p>
	                        <p >{{ $ob->User_uemail }}</p>
	                    </li>
	                    <li class="clearfix msg_li" style="line-height: 24px;margin-top: 20px;">
	                        <p class="msg_name" style="float:left;width: 80px;font-size: 13px;color: #000;text-align: right;"><span class="msg_red" style="color: #e2231a;">* </span>会员昵称：</p>
	                        <p style=" float:left;ob-style: none;ob-style-type: none;ob-style-image: none;ob-style-position: outside;font-family: arial,"微软雅黑",sans-serif;font-size: 12px;"><input type="text" id="username" name="User_username" class="msg_input_w" value="{{ $ob->User_username }}" style="width: 153px;height: 22px;border: 1px solid #d2d2d2;border-top-width: 1px;border-right-width: 1px;border-bottom-width: 1px;border-left-width: 1px;border-top-style: solid;border-right-style: solid;border-bottom-style: solid;border-left-style: solid;border-top-color: rgb(210, 210, 210);border-right-color: rgb(210, 210, 210);border-bottom-color: rgb(210, 210, 210);border-left-color: rgb(210, 210, 210);-moz-border-top-colors: none;-moz-border-right-colors: none;-moz-border-bottom-colors: none;-moz-border-left-colors: none;border-image-source: none;border-image-slice: 100% 100% 100% 100%;border-image-width: 1 1 1 1;border-image-outset: 0 0 0 0;border-image-repeat: stretch stretch;margin-right: 34px;">
	                        </p>
	                        <p class="msg_text" style="float:left;font-size: 11px;color: #6f7170;">4-20个字符，可由中英文、数字、“_”、“-”组成</p>
	                    </li>
	                    <li class="clearfix msg_sex msg_li" style="line-height: 24px;margin-top: 20px;">
	                        <p class="msg_name" style="float:left;width: 80px;font-size: 13px;color: #000;text-align: right;"><span class="msg_red" style="color: #e2231a;">* </span>性别：</p>
	                        <p style="float:left;">
                                
	                        	<input type="radio" name="User_sex" id="sex-man" value="0"  style="float: left;margin-top: 5px;" @if($ob->User_sex == 0) checked @endif><label for="sex-man" style="float: left;margin-left: 6px;margin-right: 36px;">男</label> 
	                        	<input type="radio" name="User_sex" id="sex-woman" value="1"  style="float: left;margin-top: 5px;" @if($ob->User_sex == 1) checked @endif><label for="sex-woman" style="float: left;margin-left: 6px;margin-right: 36px;">女</label>	
	                        	</p>
	                    </li>

	                    <li class="clearfix msg_li" style="line-height: 24px;margin-top: 20px;">
	                        <p class="msg_name" style="float:left;width: 80px;font-size: 13px;color: #000;text-align: right;"><span class="msg_red"> </span>真实姓名：</p>
	                        <p style="float:left;">
	                        	<input type="text" name="User_realname" id="realname" class="msg_input_w" value="{{ $ob->User_realname }}" style="width: 153px;height: 22px;border: 1px solid #d2d2d2;border-top-width: 1px;border-right-width: 1px;border-bottom-width: 1px;border-left-width: 1px;border-top-style: solid;border-right-style: solid;border-bottom-style: solid;border-left-style: solid;border-top-color: rgb(210, 210, 210);border-right-color: rgb(210, 210, 210);border-bottom-color: rgb(210, 210, 210);border-left-color: rgb(210, 210, 210);-moz-border-top-colors: none;-moz-border-right-colors: none;-moz-border-bottom-colors: none;-moz-border-left-colors: none;border-image-source: none;border-image-slice: 100% 100% 100% 100%;border-image-width: 1 1 1 1;border-image-outset: 0 0 0 0;border-image-repeat: stretch stretch;margin-right: 34px;">
	                        </p>
	                        <p class="msg_text" style="ob-style: none;ob-style-type: none;ob-style-image: none;ob-style-position: outside;font-family: arial,"微软雅黑",sans-serif;">英文长度:4-20 ，中文长度:2-10</p>
	                    </li>
	                    <li class="clearfix msg_li" style="line-height: 24px;margin-top: 20px;">
	                        <p class="msg_name" style="float:	left;width: 80px;font-size: 13px;color: #000;text-align: right;"><span class="msg_red" style="color: #e2231a;">* </span>电话号码：</p>
	                        <p style="float:left;">
	                            <div class="selectContainer msg_select" style="float: left;margin-right: 10px;position: relative;font-size: 13px;ine-height: 22px;text-align: left;">  
	                                <input type="text" name="User_tel" id="realname" class="msg_input_w" value="{{ $ob->User_tel }}" style="width: 153px;height: 22px;border: 1px solid #d2d2d2;border-top-width: 1px;border-right-width: 1px;border-bottom-width: 1px;border-left-width: 1px;border-top-style: solid;border-right-style: solid;border-bottom-style: solid;border-left-style: solid;border-top-color: rgb(210, 210, 210);border-right-color: rgb(210, 210, 210);border-bottom-color: rgb(210, 210, 210);border-left-color: rgb(210, 210, 210);-moz-border-top-colors: none;-moz-border-right-colors: none;-moz-border-bottom-colors: none;-moz-border-left-colors: none;border-image-source: none;border-image-slice: 100% 100% 100% 100%;border-image-width: 1 1 1 1;border-image-outset: 0 0 0 0;border-image-repeat: stretch stretch;margin-right: 34px;" placeholder="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;请&nbsp;输&nbsp;入&nbsp;电&nbsp;话&nbsp;&nbsp;&nbsp;">
	                            </div>
	                        </p>
	                    </li>
	                    <li class="clearfix msg_li" style="line-height: 24px;margin-top: 20px;">
	                        <p class="msg_name" style="float:left;width: 80px;font-size: 13px;color: #000;text-align: right;"><span class="msg_red"> </span>详细地址：</p>
	                        <p style="float:left;height: 22px;margin-right: 34px;"><input type="text" name="User_address" id="residecommunity" class="msg_input_w" style="height:22px;width:412px;font-size: 12px;font-family: arial,"微软雅黑",sans-serif;color: #000;" maxlength="100" value="{{ $ob->User_address }}"></p>
	                    </li>
	                    </ul>
                
                <dl style="text-align: center;padding-top: 60px;">
                   
                    <dt style="ob-style: none;ob-style-type: none;ob-style-image: none;ob-style-position: outside;font-family: arial,"微软雅黑",sans-serif;font-size: 12px;"><a href="javascript:void(0);" style="cursor: pointer;text-decoration: none;text-decoration-color: currentcolor;text-decoration-line: none;text-decoration-style: solid;"><img src="{{ asset('home/upload').'/'.$ob->User_pic }}" width='150' height='150'></a></dt>
                    <br>
                    <dd><input type="file"  value="{{ $ob->User_pic }}" name="User_pic"></dd>
                </dl>
            </div>
            

            <div class="msg_likes_mains" style="padding-left: 22px;padding-top: 32px;padding-right: 22px;padding-bottom: 25px;">
                <div class="msg_likes_main clearfix" style="font-size: 12px;font-family: "微软雅黑";">
                    <div class="msg_likes_mainl">
                        <p>&nbsp;</p>
                    </div>
                    <div class="msg_likes_btn" >
                        <ul>
                            <li id="pushedit" style="width:117px;height:30px;text-align:center;line-height:30px;margin-left:200px;cursor: pointer;border-radius:5px;">
                            <input type="submit"  value="&nbsp;&nbsp;修&nbsp;&nbsp;&nbsp;&nbsp;改&nbsp;&nbsp;">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </form>
        </div> 

		<!-- 兴趣资料 -->
        </div>
@endsection

