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
    <div class="msg_right" style="float: right;width: 1032px;">
        <!-- top -->
        <div class="content_right_top" style="width: 100%;height: 190px;">
            <!-- top_left -->
            <div class="top_left" style="width: 510px;height: 190px;border: 1px solid #d2d2d2;border-top-color: rgb(210, 210, 210);border-top-style: solid;border-top-width: 1px;border-right-color: rgb(210, 210, 210);border-right-style: solid;border-right-width: 1px;border-bottom-color: rgb(210, 210, 210);border-bottom-style: solid;border-bottom-width: 1px;border-left-color: rgb(210, 210, 210);border-left-style: solid;border-left-width: 1px;border-image-source: initial;border-image-slice: initial;border-image-width: initial;border-image-outset: initial;border-image-repeat: initial;float: left;border-radius: 5px;border-top-left-radius: 5px;border-top-right-radius: 5px;border-bottom-right-radius: 5px;border-bottom-left-radius: 5px;">
                <!-- head and 收货信息 -->
                <div class="top_left_up" style="width: 100%;height: 160px;float: left;margin-left: 10px;">
                    <!-- head img -->   
                    <div class="user_head" style="width: 150px;padding: 13px 0;padding-top: 13px;padding-right: 0px;padding-bottom: 13px;padding-left: 0px;text-align: center;float: left;margin-left: 30px;">
                        <div style="width: 106px;margin-left: 21px;" onmouseover="document.getElementById('editmask').style.display='block';" onmouseout="document.getElementById('editmask').style.display='none';">
                            <img src="/Home/upload/{{ $user->User_pic }}" alt="" width="106px" height="106px"/>
                            <a href="/home/myinfo/{{ session('user')->User_id }}/edit"><div id="editmask" style="display:none">编辑资料</div></a>
                        </div>
                        <p title="">{{ $user->User_username }}</p>
                    </div>
                    <div class="vline" style="border-left: 2px dotted #d2d2d2;border-left-width: 2px;border-left-style: dotted;border-left-color: rgb(210, 210, 210);height: 150px;margin-top: 20px;margin-left: 45px;float: left;"></div>
                    <!-- 收货信息 -->
                    <div class="shouhuoxinxi" style="float: left;height: 160px;width: 245px;margin-left: 15px;">
                        <ul class="shouhuoxinxi_list" style="height: 66px;padding-left: 20px;padding-top: 20px;">
                            <li style="width: 97px;height: 54px;float: left;margin-right: 10px;text-align: center;cursor: pointer;"><a href="/home/myorder/create">
                                <span class="url" style="width: 30px;height: 26px;display: block;padding-bottom: 12px;margin-left: 30px;"></span>
                                <p style="list-style: none;font-family: arial,"微软雅黑",sans-serif;font-size: 12px;">待付款<i id="unPay"></i></p></a>
                            </li>
                            <li class="ico_b" style="border-right: none;width: 97px;height: 54px;float: left;margin-right: 10px;text-align: center;cursor: pointer;"><a href="/home/myorder/1">
                                <b class="url" style="width: 30px;height: 26px;display: block;padding-bottom: 12px;margin-left: 30px;"></b>
                                <p style="list-style: none;font-family: arial,"微软雅黑",sans-serif;font-size: 12px;">待发货<i id="unShipped"></i></p></a>
                            </li>
                        </ul>
                        
                        <ul class="shouhuoxinxi_list" style="height: 66px;padding-left: 20px;padding-top: 20px;">
                        <form action="/home/myorder" method="post" name="pform" style="display:none">
                            {{ csrf_field() }}
                        </form>
                            <li style="width: 97px;height: 54px;float: left;margin-right: 10px;text-align: center;cursor: pointer;"><a href="javascript:doreply(1)">
                                <span class="url" style="width: 30px;height: 26px;display: block;padding-bottom: 12px;margin-left: 30px;"></span>
                                <p style="list-style: none;font-family: arial,"微软雅黑",sans-serif;font-size: 12px;">待评价<i id="unPay"></i></p></a>
                            </li>
                            <script>
                                function doreply(id)
                                {  
                                    // alert(11);
                                    var form  = document.pform;
                                    form.action = "/home/myorder";
                                    form.submit();
                                }
                            </script>
                            <li class="ico_b" style="border-right: none;width: 97px;height: 54px;float: left;margin-right: 10px;text-align: center;cursor: pointer;"><a href="/home/myorder/1/edit">
                                <b class="url" style="width: 30px;height: 26px;display: block;padding-bottom: 12px;margin-left: 30px;"></b>
                                <p style="list-style: none;font-family: arial,"微软雅黑",sans-serif;font-size: 12px;">待收货<i id="unShipped"></i></p></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- notice -->
                <div class="top_left_down" style="width: 100%;height: 30px;float: left;line-height: 30px;">
                    <a id="msgs" href="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<em class="url"></em></a>
                </div>
            </div>
            <!-- top_model -->
            <div class="top_model" style="width: 208px;height: 190px;border: 1px solid #d2d2d2;margin-left: 14px;float: left;border-radius: 5px;">
                <div class="top_model_up" style="width: 100%;height: 28px;border-bottom: 1px solid #d2d2d2;line-height: 14px;">
                    <h3 style="height: 14px;padding-left: 12px;border-left: 2px solid red;margin-top: 12px;margin-left: 12px;font-size: 14px;font-weight: 700;">我的资产</h3>
                </div>
                <div class="top_model_down" style="">
                    <div class="top_model_bottom_t clearfix"style="margin-top:15px;">
                        <a href="http://coupon.lenovo.com.cn/lenovo/saleCoupons.jhtm">
                            <p class="pl" style="width: 90px;height: 100%;float: left;"><span class="url" style="width: 16px;height: 16px;display: inline-block;background-position: -156px 0;vertical-align: middle;"></span>可用优惠券</p>
                            <p class="pr" style="float: right;width: 60px;text-align: right;"><i id="counpon">0</i> 张</p>
                        </a>
                    </div>
                    <div class="top_model_bottom_t clearfix" style="margin-top:15px;">
                        <a href="http://coupon.lenovo.com.cn/lenovo/saleCoupons.jhtm">
                            <p class="pl" style="width: 90px;height: 100%;float: left;"><span class="url" style="width: 16px;height: 16px;display: inline-block;background-position: -156px 0;vertical-align: middle;"></span>可用乐豆</p>
                            <p class="pr" style="float: right;width: 60px;text-align: right;"><i id="counpon">300</i> 个</p>
                        </a>
                    </div>
                    <div class="top_model_bottom_t clearfix"style="margin-top:15px;">
                        <a href="http://coupon.lenovo.com.cn/lenovo/saleCoupons.jhtm">
                            <p class="pl" style="width: 90px;height: 100%;float: left;"><span class="url" style="width: 16px;height: 16px;display: inline-block;background-position: -156px 0;vertical-align: middle;"></span>可用黑点</p>
                            <p class="pr" style="float: right;width: 60px;text-align: right;"><i id="counpon">0</i> 个</p>
                        </a>
                    </div>
                </div>
            </div>
            <!-- top_right -->
            <div class="top_right" style="width: 278px;height: 190px;border: 1px solid #d2d2d2;margin-left: 16px;float: left;border-radius: 5px;">
                <div class="top_model_up clearfix" style="width: 100%;height: 28px;border-bottom: 1px solid #d2d2d2;border-bottom-width: 1px;border-bottom-style: solid;border-bottom-color: rgb(210, 210, 210);line-height: 14px;">
                    <h3 style="height: 14px;padding-left: 12px;border-left: 2px solid red;margin-top: 12px;margin-left: 12px;font-size: 14px;font-weight: 700;"><a href="http://coupon.lenovo.com.cn/lenovo/saleCoupons.jhtm">我的优惠券</a></h3>
                    <a href="http://coupon.lenovo.com.cn/lenovo/saleCoupons.jhtm"><i class="url"></i></a>
                </div>
                <div class="top_right_down" style="width: 278px;height: 150px;position: relative;">
                    <div class="top_right_down_dialog" style="display:none;"></div>
                    <div class="top_right_down_none" style="width: 100%;height: 150px;text-align: center;line-height: 150px;display: block;font-size: 14px;">您还没有优惠券！</div>
                    <div class="banner_box">
                      <ul class="banner_img" style="width: 708px;">
                       </ul>
                       <div class="banner_bt_box">
                         <a href="javascript:;"><span class="banner_prev url"></span></a>
                         <a href="javascript:;"><span class="banner_next url"></span></a>
                      </div>  
                    </div>
                </div>
            </div>
        </div>
        <!-- middle -->
        <div class="content_right_middle" style="width: 100%;height: auto;border: 1px solid #d2d2d2;margin-top: 16px;border-radius: 5px;">
            <div class="middle_top clearfix" style="width: 100%;height: 42px;border-bottom: 1px solid #d2d2d2;border-bottom-width: 1px;border-bottom-style: solid;border-bottom-color: rgb(210, 210, 210);">
                <div class="left" style="width: 106px;height: 16px;float: left;margin-left: 16px;">
                  <h3 style="width: 100%;height: 100%;border-left: 2px solid red;font-size: 14px;font-weight: bold;margin-top: 12px;padding-left: 12px;line-height: 16px;">我的订单</h3>
                </div>
                <!-- TODO -->
                <div class="right" style="width: 94px;height: 16px;float: right;margin-right: 10px;margin-top: 12px;text-align: right;">查看全部订单&gt;&gt;</a></div>
            </div>
            @if (!empty($order))
                <div class="middle_bottom clearfix">
                    <div class="middle_bottom_left_none" style="width: 98%;margin-left: 16px;line-height: 100px;text-align: center;font-size: 14px;">
                    <table>

                @foreach($order as $v)
                        <tr style="width: 90%;">
                            <td width="100px"><img src="/Admin/upload/{{ $v->Order_goodspic }}" width="90px" height="90px"></td>
                            <td>{{ $v->Order_goodsname }}</td>
                            <td width="100px">{{ $v->Order_number }}</td>
                            <td width="100px"><a href="">收货</a></td>
                        </tr>

                @endforeach
                    </table>
                    </div>
                    <div class="middle_bottom_left_dialog"></div>
                </div>
            @else
                <div class="middle_bottom clearfix">
                    <div class="middle_bottom_left_none" style="width: 98%;height: 100px;margin-left: 16px;line-height: 100px;text-align: center;font-size: 14px;">(⊙︿⊙)，您买的东西太少了，这里都空空的，快去挑选合适的商品吧！
                    </div>
                    <div class="middle_bottom_left_dialog"></div>
                </div>
            @endif
        </div>

        <!--bottom-->
        <div class="content_right_middle" style="width: 100%;height: auto;border: 1px solid #d2d2d2;margin-top: 16px;border-radius: 5px;">
            <div class="middle_top clearfix" style="width: 100%;height: 42px;border-bottom: 1px solid #d2d2d2;border-bottom-width: 1px;border-bottom-style: solid;border-bottom-color: rgb(210, 210, 210);">
                <div class="left" style="width: 106px;height: 16px;float: left;margin-left: 16px;">
                  <h3 style="width: 100%;height: 100%;border-left: 2px solid red;font-size: 14px;font-weight: bold;margin-top: 12px;padding-left: 12px;line-height: 16px;">我关注的商品</h3>
                </div>
                <!-- TODO -->
                <div class="right" style="width: 94px;height: 16px;float: right;margin-right: 10px;margin-top: 12px;text-align: right;">查看全部关注&gt;&gt;</a></div>
            </div>
            @if(!empty($collect))
            <div class="middle_bottom clearfix">
                <div class="middle_bottom_left_none" style="width: 98%;height: 100px;margin-left: 16px;line-height: 100px;text-align: center;font-size: 14px;">
                @foreach($collect as $v)
                    <img src="/Admin/upload/{{ explode(',',$v->Goods_pic)[0] }}" width="100px"height="100px">
                @endforeach
                </div>
                <div class="middle_bottom_left_dialog"></div>
            </div>
            @else
            <div class="middle_bottom clearfix">
                <div class="middle_bottom_left_none" style="width: 98%;height: 100px;margin-left: 16px;line-height: 100px;text-align: center;font-size: 14px;">(⊙︿⊙)，您还没有关注商品，快去挑选合适的商品吧！
                </div>
                <div class="middle_bottom_left_dialog"></div>
            </div>
            @endif
        </div>
</div>
</div>



@endsection