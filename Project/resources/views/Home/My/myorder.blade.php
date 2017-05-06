@extends('Home.base.parent')
@section('content')
<!--------------左部导航栏开始-------------------->
    <div class="user_location" style="width: 1188px;margin: 0 auto;margin-top: 0px;margin-right: auto;margin-bottom: 0px;margin-left: auto;height: 32px;line-height: 32px;font-size: 14px;background: #eee;background-image: initial;background-position-x: initial;background-position-y: initial;background-size: initial;background-repeat-x: initial;background-repeat-y: initial;background-attachment: initial;background-origin: initial;background-clip: initial;background-color: rgb(238, 238, 238);padding-left: 12px;">
    <a href="" title="">首页</a>&gt;<a href="">会员中心</a>&gt;<a href="">订单中心</a>
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
        <div class="user_list">
            <h3 class="clearfix"><span>订单中心</i></h3>
            <ul>
                <li><a href="/home/myorder" mcode="de2d855aafa7">我的订单</a></li>
            </ul>
            <ul>
                <li><a href="" mcode="e6724325d481">我的团购</a></li>
            </ul>
            <ul>
                <li><a href="javascript:doreply(1)" mcode="b7d8746a5d6f">评价晒单</a></li>
            </ul>
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
         <div class="user_list">
            <h3 class="clearfix"><span>我的信箱</i></h3>
            <ul>
                <li><a href="" mcode="dfff3c6a9652">我的站内信</a></li>
            </ul>
        </div>
        
        
</div>
 
                </div>
<!--------------左部导航栏结束--------------------> 
      <div class="collect_right" style="float: right;width: 1032px;border: 1px solid #d9d8d6;border-top-width: 1px;border-right-width: 1px;border-bottom-width: 1px;border-left-width: 1px;border-top-style: solid;border-right-style: solid;border-bottom-style: solid;border-left-style: solid;border-top-color: rgb(217, 216, 214);border-right-color: rgb(217, 216, 214);border-bottom-color: rgb(217, 216, 214);border-left-color: rgb(217, 216, 214);-moz-border-top-colors: none;-moz-border-right-colors: none;-moz-border-bottom-colors: none;-moz-border-left-colors: none;border-image-source: none;border-image-slice: 100% 100% 100% 100%;border-image-width: 1 1 1 1;border-image-outset: 0 0 0 0;border-image-repeat: stretch stretch;">
        <div class="collect_right_title" style="height: 37px;background: #eeeeee;background-color: rgb(238, 238, 238);background-image: none;background-repeat: repeat;background-attachment: scroll;background-clip: border-box;background-origin: padding-box;background-position-x: 0%;background-position-y: 0%;background-size: auto auto;border-bottom: 1px solid #d9d8d6;border-bottom-width: 1px;border-bottom-style: solid;border-bottom-color: rgb(217, 216, 214);padding-left: 20px;padding-right: 20px;line-height: 36px;">
<style>
    .clearfix:after {
    display: block;
    clear: both;
    height: 0px;
    visibility: hidden;
    font-size: 0px;
    line-height: 0;
    content: "";
}
.user_tab .tab_title .active {
    background: none repeat scroll 0% 0% #FFF;
    color: #E2231A;
    border-right: 1px solid #D9D8D6;
    border-left: 1px solid #D9D8D6;
    border-bottom: 1px solid #FFF;
    margin-left: -1px;
}
</style>
        <div class="tab_title list_title clearfix" style="display:block;" >

            <a class="tab_btn active"   style="font-size:17px" href="/home/myorder">所有订单 </a>&nbsp;
            <a class="tab_btn"  href="/home/myorder/create" style="font-size:17px">未付款 </a>&nbsp;
            <a class="tab_btn"  href="/home/myorder/1" style="font-size:17px">待发货 </a>&nbsp;
            <a class="tab_btn"  href="/home/myorder/1/edit" style="font-size:17px">待收货 </a>&nbsp;
            <form action="/my/myorder" method="post" name="yform" style="display:none">
                {{ csrf_field() }}
            </form>
            <a class="tab_btn" href="javascript:doreply(1)" style="font-size:17px">待评价 </a>&nbsp;
            <script>
            function doreply(id)
            {
                var form  = document.yform;
                form.action = "/home/myorder";
                form.submit();
            }
            </script>
            <div class="list_search clearfix"></div>
        </div>
        <div class="product_tab" style="position:relative;">
		<input type="hidden" id="sts" value="e40e7004-4c8a-4963-8564-31271a8337d8">
		<input type="hidden" id="producturl" value="http://www.lenovo.com.cn/">
		<input type="hidden" id="productplat" value="1">
		<input type="hidden" id="mallType" value="1">
		<input type="hidden" id="productdetail" value="product">
            <div class="product_tab_1" style="background: #fff;background-color: rgb(255, 255, 255);background-image: none;background-repeat: repeat;background-attachment: scroll;background-clip: border-box;background-origin: padding-box;background-position-x: 0%;background-position-y: 0%;background-size: auto auto;">   
                <div class="product_tabcon" id="myFavoriteDiv" width="500px;" >
                <table width="1000px">
                <tr style="font-size:15px;">
                    <th>商品图片</th>
                    <th>商品名称</th>
                    <th>商品单价</th>
                    <th>商品数量</th>
                    <th>商品总价</th>
                    <th>商品状态</th>  
                </tr>
                <form action="/my/myform" method="post" name="aaform" style="display:none">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                </form>
                <form action="/pay"  style="display:none" name="payform">
                </form>
                @foreach ($list as $v)
                <tr>
                    <td align="center" width="220px">@for($i = 0;$i < count(explode('|',($v->Order_goodspic)));$i++)
                    <img src="/Admin/upload/{{ (explode('|',($v->Order_goodspic)))[$i] }}" width="100px" height="100px">
                    @endfor</td>
                    <td align="center">{{ $v->Order_goodsname}}</td>
                    <td align="center">{{ $v->Order_price }}</td>
                    <td align="center">{{ $v->Order_goodsnum }}</td>
                    <td align="center">{{ $v->Order_total }}</td>
                    <td align="center">@if( $v->Order_state ==0) 未付款<br><a href="javascript:dopay({{ $v->Order_id }})">付款</a>
                            @elseif( $v->Order_state ==1) 待发货
                            @elseif( $v->Order_state ==2) 待收货<br><a href="javascript:doget({{ $v->Order_id }})">确认收货</a>
                            @elseif( $v->Order_state ==3) 待评价<br><a href="/home/appraise/{{ $v->Order_id }}">评价</a>
                            @else  已评价
                            @endif</td>
                </tr>
                @endforeach
                <script>
                    function doget(id)
                    {
                        // alert(111);
                        var form = document.aaform;
                        form.action = "/home/myorder/"+id;
                        form.submit();
                    }
                    function dopay(id)
                    {
                        var pform = document.payform;
                        pform.action = "/pay/"+id
                        pform.submit();
                    }
                </script>
                  <!-- <form action="" method="post" name="myform" enctype="multipart/form-data">
                  	<input type="hidden" name="hidden">
                  	<img style="height:160px;width:160px;margin-top:8px;" src="">

                  </form> -->
                </table>
                <ul style="clear:both;float:right;">
                    <li style="display:inline;"><a href="http://copylenovo.com/home/myorder?page=1">首页</a></li>
                    @for($i = 0;$i < $count;$i++)
                    <li style="display:inline;"><a href="http://copylenovo.com/home/myorder?page={{ $i+1 }}">{{ $i+1 }}</a></li>
                    @endfor
                    
                    <li style="display:inline;"><a href="http://copylenovo.com/home/myorder?page={{ $count }}">尾页</a></li>
                 </ul>
                </div>
            </div>
        </div>
        <div class="collect_right_fenye" style="position: relative;
margin-top: 2em;
height: 50px;">
        <div class="page_number" id="pager" style="position: absolute;
right: 14px;
bottom: 18px;
font-size: 13px;"></div>
        </div>
    </div>

@endsection