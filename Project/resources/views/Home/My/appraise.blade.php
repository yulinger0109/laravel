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
#user_leftbar ul,#user_leftbar li{list-style: none;}
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
        <div class="user_list" style="border:1 solid black;">
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

<div class="user_right" style="float: right;width: 1032px;border: 1px solid #d9d8d6;">
    <div style="border:1px solid le;float: left; width:350px;height:350px;">
    <img src="/Home/images/meinv.png" style="width:300px;height:300px; margin-top:25px; margin-left:25px;">
    </div>
    <div class="appraise" style="float:left;width:650px;height:300px;margin-top:25px; margin-left:25px;">
        <ul style="float:left;margin-top:15px;margin-left:0px;">
            <li style="font-size: 20px;font-weight: normal;color: #3a3a3a;">&nbsp;&nbsp;&nbsp;其他买家需要你的建议哦！</li>
            <li>
                <div style="margin-top:15px;margin-left:20px;width:600px;height:230px;">
                    <form action="/home/appraise" method="post">
                    {{ csrf_field() }}
                        <textarea name="Reply_rcontent" style="width:550px;height:150px;resize:none"></textarea>
                        <input type="hidden" name="Reply_gid" value="{{ $gid }}">
                        <input type="hidden" name="Order_id" value="{{ $id }}">
                        <br>
                        <br>
                        <br>
                        <input type="submit" value="&nbsp;提&nbsp;交&nbsp;评&nbsp;价&nbsp;" style="background: 0 0;color: #3a3a3a;cursor: pointer;border-radius: 7px;background-color: #d9d8d6;">
                    </form>
                </div>
            </li>
        </ul>
    </div>
</div>
<div style="float: right;width: 1032px;border: 1px solid #d9d8d6;height:100px;margin-top:10px;">
    <ul style="float:left;margin-top:15px;">
        <li>
            <p style="margin-top:5px;margin-left:20px;font-size: 20px;font-weight: normal;color: #3a3a3a;">商品评价列表</p>
            <hr style="width:1032px; border: 0.3px solid #d9d8d6;">
        </li>
        <li>
            <div>
                <span style="margin-top:15px;margin-left:20px;font-size: 15px;color: #3a3a3a;">评价内容</span>
                <hr style="width:1032px; border: 0.3px dashed #d9d8d6;">
            </div>
        </li>
    </ul>
</div>

	
@endsection