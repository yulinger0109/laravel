<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<script src="Home/js/jquery-1.11.1.min.js" type="text/javascript"></script>
<script type="text/javascript" src='jquery-1.8.3.min.js'></script>
<script src="Home/js/jquery.tmpl.min.js" type="text/javascript"></script>
<script type="text/javascript">
var global_ajaxdomain = 'https://buy.lenovo.com.cn/';
var global_resource = 'http://cart.lenovo.com.cn/pc/';
var global_ajax = 'http://cart.lenovovip.com.cn/';
var global_product = 'http://www.lenovovip.com.cn';
var global_productresource = 'http://css.lenovovip.com.cn';
var plat = '$plat';
var imgUrl = '//m1.lefile.cn/trade/cn/cart/pc';
var terminal = '1';
var shopId = '1';
var type_t ='';
var car_url = 'https://buy.lenovo.com.cn/';
var lid = '$lid';
var productDetail = 'http://www.lenovo.com.cn/product';
var pcCssHomeModule = '//m1.lefile.cn/trade/cn/cart/pc';
var product_index = 'http://www.lenovo.com.cn/';
var product_index_https = '//www.lenovo.com.cn/';
//var collectionUrl = '$collectionUrl'
var addCollectionUrl = '//www.lenovo.com.cn/api/myfavorites/addfavorites';
var queryCollectionUrl = '//www.lenovo.com.cn/api/myfavorites/findfavorites';
var cartSingleRowLimit = '$cartSingleRowLimit';
</script>
<script src="Home/js/common.js" type="text/javascript"></script>
<script type="text/javascript" src="Home/js/common_1.js"></script>
<script type="text/javascript" src="Home/js/common_2.js"></script>






<script src="Home/js/5ae8b6b0370a494597e5a4e7c9c300fd.js"></script>

 
<link rel="stylesheet" type="text/css" href="Home/css/common.css">
    <link href="Home/css/common_1.css" type="text/css" rel="stylesheet">
    <link href="Home/css/style.css" type="text/css" rel="stylesheet">
    <script src="Home/js/footer.js" type="text/javascript"></script>   




<link href="Home/css/headb.css" type="text/css" rel="stylesheet">

        <script type="text/javascript">
var global_ajaxdomain = 'https://buy.lenovo.com.cn/';
var global_resource = 'http://cart.lenovo.com.cn/pc/';
var global_ajax = 'http://cart.lenovovip.com.cn/';
var global_product = 'http://www.lenovovip.com.cn';
var global_productresource = 'http://css.lenovovip.com.cn';
var plat = '$plat';
var imgUrl = '//m1.lefile.cn/trade/cn/cart/pc';
var terminal = '1';
var shopId = '1';
var type_t ='';
var car_url = 'https://buy.lenovo.com.cn/';
var lid = '$lid';
var productDetail = 'http://www.lenovo.com.cn/product';
var pcCssHomeModule = '//m1.lefile.cn/trade/cn/cart/pc';
var product_index = 'http://www.lenovo.com.cn/';
var product_index_https = '//www.lenovo.com.cn/';
//var collectionUrl = '$collectionUrl'
var addCollectionUrl = '//www.lenovo.com.cn/api/myfavorites/addfavorites';
var queryCollectionUrl = '//www.lenovo.com.cn/api/myfavorites/findfavorites';
var cartSingleRowLimit = '$cartSingleRowLimit';
</script>

<div class="top_box">
    <div class="top_cont">

        <div class="top_login_r top_red">
		
        </div>
        

            
            @if(session()->has('user'))

       <div class="top_phone top_username" >
            <div class="top_phone_title">{{ session('user')->User_username }}<a href="" class=" top_usepng top_downs"></a></div>
            <ul><li class="top_usercenter" ><a href="/my/myorder" latag="latag_pc_common_header_myorder">我的订单</a></li>
                <li><a href="/home/my" latag="latag_pc_common_header_myaccount">我的商城</a></li>
                <li><a href="/logout" class="logout" latag="latag_pc_common_header_logout">退出登录</a></li>
            </ul>
        </div>
        @else
        <ul class="top_login top_red" > 
                    <!-- <li><a href="#">18101020964</a></li> -->
            
            <li class="top_loginbtn" id="LoginID" >
                <a href="login">登录</a>
            </li>
            <li class="top_regist" id="RegisterID" >
                <a href="regedit" >注册</a>
            </li>
        </ul>
        @endif
            

        

        <ul class="top_login top_red">
            <!-- <li><a href="#">18101020964</a></li> -->
            <li style="border-left:none;"><a href="/">返回首页</a></li>
        </ul>


    </div>
</div>
<!-- ----------------===============     logo     ===============--------------- -->
<div class="top_logob">
    <img src="Home/picture/pic-13.jpg" class="top_logob_imga">
    
</div>

<script type="text/javascript">

    $(function(){
		var ticket = "e40e7004-4c8a-4963-8564-31271a8337d8";
		
        navTopDown();
		
		
		passport.init({
		ticket: ticket,
		drawUserInfo: function(){
			$("#UserNameID").text(passport.cookie.loginName);
			$("#UserNameID").show();
			$("#headorderID_a").show();
			$("#RegisterID").hide();
			$("#LoginID").hide();
			$("#LogOutID").show();
			$("#UserInfo").show();
		},
		logout:function(){
			$("#UserNameID").text('');
			$("#UserNameID").hide();
			$("#headorderID_a").hide();
			$("#UserInfo").hide();
			$("#RegisterID").show();
			$("#LoginID").show();
			$("#LogOutID").hide();
		},
		loginRedirect:window.location.href
		})
		
		$('body').delegate('.login','click',function(){
			passport.show();
		}).delegate('.logout','click',function(){
			passport.doLogout();
		}).delegate('.regist','click',function(){
			passport.hide();
			regist.init(ticket);
		}).delegate('.forgetPwd','click',function(){
			passport.hide();
			recover.init(ticket);
		})
		
		var ssoReload = $('body').attr('ssoReload');
		if(ssoReload != undefined && ssoReload != null && ssoReload == "0"){
			passport.loginRedirect = false;
			
		}
		
		
		
    })
    function navTopDown(){
        $('.top_title').bind('mouseenter',function(){
            $(this).siblings('ul').stop(true,true).slideDown(300);
            $(this).find('a').removeClass('.top_down').addClass('top_up');
        });
        $('.top_link').bind('mouseleave',function(){
            $(this).find('ul').stop(true,true).slideUp(300);
            $(this).find('.top_title').find('a').removeClass('top_up').addClass('top_down');
        });


        $('.top_phone_title').bind('mouseenter',function(){
            $(this).siblings('ul').stop(true,true).slideDown(300);
            $(this).find('a').removeClass('.top_downs').addClass('top_ups');
        });
        $('.top_phone').bind('mouseleave',function(){
            $(this).find('ul').stop(true,true).slideUp(300);
            $(this).find('.top_phone_title').find('a').removeClass('top_ups').addClass('top_downs');
        });


    };




</script>    
<body id="mainframe">
    
<style type="text/css">
    *{
        margin: 0;
        padding: 0;
    }
    .wrong_box{
        width: 1200px;
        margin: 0 auto;
        height: 330px;
        padding-top: 70px;
    }
    .wrong_box dl dt{
        float: left;
    }
    .wrong_box dl{
        width: 600px;
        margin:0 auto;
    }
    .wrong_box dl dd h3{
        font-size: 18px;
        font-weight: normal;
        font-family: "微软雅黑";
        line-height: 30px;
        padding-top: 20px;
    }
    .wrong_box dl dd p{
        font-size: 14px;
        font-family: "微软雅黑";
        height:40px;
        overflow: hidden;
    }
    .wrong_btn{
        width: 120px;
        height: 28px;
        border-radius: 5px;
        border: 1px solid #b8b8b8;
        background: url(images/bg.jpg) repeat-x;
        margin-left: 524px;
        margin-top: 30px;
        text-align: center;
    }
    .wrong_btn a {
        font-size: 14px;
        text-decoration: none;;
        line-height: 30px;
        font-family: "微软雅黑";
        color: #000
    }
     #footer .ns_p2 dl {
         float: left;
         padding: 0px 148px 0 0;
         border-right: 0px solid #D9D8D6;
         height: 122px;
         position: relative;
     }
</style>
<body>
<style>
    .buycart {
    margin-top: 40px;
    background: none repeat scroll 0% 0% #FFF;
    color: #000;}
    .w1200, .ns_w {
    width: 1200px;
    margin: 0px auto;}
    .buycart .bc_option {
    position: relative;}
    .bc_option .bc_all {
    float: left;
    position: absolute;
    left: 22px;
    top: 11px;}
    .bc_option .bc_all a, .bc_num .bc_all a {
    float: left;
    margin: 1px 5px 0px 0px;}
    .buycart .bc_table table {
    width: 100%;
    border-width: 1px 1px 0px;
    border-style: solid solid none;
    border-color: #D9D8D6 #D9D8D6 -moz-use-text-color;
    -moz-border-top-colors: none;
    -moz-border-right-colors: none;
    -moz-border-bottom-colors: none;
    -moz-border-left-colors: none;
    border-image: none;
    margin-bottom: 10px;}
    .buycart .bc_table table {
    width: 100%;
    border-width: 1px 1px 0px;
    border-style: solid solid none;
    border-color: #D9D8D6 #D9D8D6 -moz-use-text-color;
    -moz-border-top-colors: none;
    -moz-border-right-colors: none;
    -moz-border-bottom-colors: none;
    -moz-border-left-colors: none;
    border-image: none;
    margin-bottom: 10px;}
    .bc_table tr td {
    font-size: 14px;
    padding: 0px;}
    .bc_table tr th, .bc_table tr td {
    text-align: center;
    border-bottom: 1px solid #D9D8D6;}
  .bc_table tr .bc_red {
    color: #E2231A;}
    .buycart .bc_num {
    border: 1px solid #D9D8D6;
    background: none repeat scroll 0% 0% #F8F8F8;
    margin-top: 15px;
    padding: 14px 15px;}
    .buycart .bc_probtn {
    padding: 15px 0px 55px;}
    .buycart .bc_probtn a {
    float: right;
    width: 160px;
    height: 38px;
    line-height: 38px;
    background: none repeat scroll 0% 0% #E2231A;
    border: 1px solid #D9D8D6;
    border-radius: 5px;
    text-align: center;
    color: #FFF;
    font-size: 20px;}
    .buycart .bc_prolist {
    border: 1px solid #D9D8D6;
    margin-bottom: 20px;}
    .bc_table tr .i_box input[type="button"] {
    width: 20px;
    height: 20px;
    background: none repeat scroll 0% 0% #EEE;
    float: left;
    border: 1px solid #D2D2D2;
}
.ns_body, .ns_body input, .ns_body select, .ns_body button, .ns_body textarea {
    font-size: 12px;
    font-family: arial,"微软雅黑",宋体,sans-serif;
}
.ns_body fieldset, .ns_body html, body, .ns_body p, .ns_body ul, .ns_body ol, .ns_body li, .ns_body dl, .ns_body dt, .ns_body dd, .ns_body h1, .ns_body h2, .ns_body h3, .ns_body h4, .ns_body h5, .ns_body h6, .ns_body form, .ns_body input, .ns_body select, .ns_body button, .ns_body textarea, .ns_body iframe, .ns_body table, .ns_body th, .ns_body td, .ns_body em {
    margin: 0px;
    padding: 0px;
    list-style: none outside none;
}
input {
    outline: medium none;
}

</style>
    @if(!empty($catlist))
            <div class="buycart w1200">
        <div id="cart_main">
        <div class="bc_option clearfix">
            <div class="bc_all clearfix"><a href="javascript:;" id="chooseall"></a><span>全选</span></div>
        </div>
        <div class="bc_table" id="main_table">

            <table cellpadding="0" cellspacing="0">
                    <tbody>
                                        <tr>
                            <th colspan="3" width="462">商品</th>
                            <th width="163">规格</th>
                            <th width="152">单价</th> <!-- 152 -->
                            <th width="152">数量</th><!-- 152 -->
                            <th width="152">金额</th><!-- 152 -->
                            <th width="117">操作</th><!-- 117 -->
                        </tr>
                                    </tbody>
            </table>

                            
            <form style='display:none' action='/cat' method='post' name='myform'>
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
            </form>
            <table cellpadding="0" cellspacing="0">
            <form action="/cat" method="post" name="myform1">
                {{ csrf_field() }}
                <input type="hidden" name="Cart_id" />
                <input type="hidden" name="num" />
            </form>
            {{ csrf_field() }}
            @foreach($catlist as $v)
                <!--带服务-->
            <tr class=" active" gcode="59823" stock="9">
                <td width="57" class="bc_table_sel lll">
                    <input type="checkbox" onclick="docheck(this)" />
                    <input type="hidden" name="cartid" value="{{ $v->Cart_id }}" />
                </td>
                <td width="148" class="bc_table_img">
                    <a href="" target="_blank"><img src="/admin/upload/{{ $v->Cart_pic }}" alt=""  / width="200px" height="200px"></a>
                    <div class="bc_zhezhao"></div>
                </td>
                <td width="257" class="bc_proname bc_name_gift">
                    <a href="" target="_blank">{{ $v->Cart_name }}</a>
                    <div class="bc_service">

                    </div>
                </td>
                <td width="163"></td>
                <td width="152" style="position:relative;" class="price">
                        <span class="current_price" >{{ $v->Cart_price }}</span>
                    <!--满减-->
                        </td>
                <td width="152" class='demo1'><!-- -->
                    <div style="float:left;width:30px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
                    <div style="float:left;width:20px;height:20px;">
                        <input class="pro_less J_minus" type="button" value="-" latag="latag_pc_shopcart_carNumDel_59823" onclick="operation(this)" style="width:20px;">
                    </div>
                    <div style="float:left;" class='demo'>
                        <input class="pro_num J_input" maxNum="5" type="text" value="1"  val="1"/ style="width:25px;" name="a">
                    </div>
                    <div style="float:left;">
                        <input class="pro_add J_add" maxNum="5" type="button" value="+"  onclick="operation(this)">
                    </div>
                </td>
                <td  width="152" class="bc_red asd">{{ $v->Cart_price }}</td> <!-- -->
                <td  width="117" style="text-align:left"><!-- -->
                    <a href="javascript:doDel({{ $v->Cart_id }})" style="color: #000" title="删除">删除</a>
                                <br/>
                        <a href="javascript:;"  style="color: #000"  title="收藏" onclick=conllectionFun('59823')>移入收藏夹</a>
                </td>
            </tr>
            @endforeach
            <script>
                
                function doDel(id)
                {
                    if(confirm("你确定要删除吗？")){
                        var form = document.myform;
                        // alert(id);
                        form.action = '/cat/'+id;
                        form.submit();
                        return false;
                    }
                }
            </script>
          </table>
        </div>
        <div class="bc_num clearfix" id="p">
            <div class="bc_num_fl" style="float:left;">
                <div class="bc_all clearfix"><a href="javascript:;"></a><button>全选</button></div>
            </div>
            <ul class="bc_num_fr" style="float:right;">
                <li style="font-size:25px;">合计：<span class="bc_red" id="totalmoneyf">0</span>元</li>
            </ul>
        </div>
        @if(session('msg'))
        <script>
        alert({{ session('msg') }});
        </script>
        @endif
        <script type="text/javascript">
         function sam(){
           var asd = {{ count($catlist) }};
           var qqq = 0;
           $('.asd').each(function(){
            // alert($(this).siblings('.lll').children('input').attr('checked'));
            if ($(this).siblings('.lll').children('input').attr('checked') == 'checked') {
                qqq += parseInt($(this).html());
            };
            
           });
           // alert(qqq);
           $('#totalmoneyf').html(qqq);
        }

        $('button').click(function(){           
            $('input:checkbox').attr('checked',true);     
        });
        
        // alert($(a).parents('.demo1').siblings('.bc_red').innerHTML);
        function operation(a){
            // alert($(a).parent().parent().siblings('.bc_red').text());
            switch(a.value){
                case '-':
                    // alert(11);
                    b = (($(a).parent().siblings('.demo').children('input').val())-1);
                    // alert(b);
                    if (b < 1) {b = 1};
                    $(a).parent().siblings('.demo').children('input').val(b);
                    // alert(111);
                    // j = ($(a).parent().siblings('.demo').children('input').val())*(price.innerHTML);
                    // alert(j);
                    // 添加至单个商品总价中
                    $(a).parent().parent().siblings('.bc_red').html($(a).parent().siblings('.demo').children('input').val()*($(a).parents('.demo1').siblings('.price').children('span').html()));
                    sam();
                break;
                case '+':
                    c = ($(a).parent().siblings('.demo').children('input').val());
                    if (c > 5) {
                        c = 5;
                    }else{
                        c++;
                        if(c > 5){
                            c=5;
                        }
                    };
                    $(a).parent().siblings('.demo').children('input').val(c);
                    $(a).parent().parent().siblings('.bc_red').html($(a).parent().siblings('.demo').children('input').val()*($(a).parents('.demo1').siblings('.price').children('span').html()));
                    sam();
                break;
            }
        }
        // var sum = 0;
         function docheck(z){
            
            sam();
            // sum();
            // alert($(z).attr);
            // 获取选中属性
            var checkedOfAll=$(z).prop("checked"); 
            
            if (checkedOfAll) {
                sam();
            };
            
            // alert(sum);
            if (!checkedOfAll) {
                sam();
            };
         }
                
        
    </script>
        <div class="bc_probtn clearfix"><a href="javascript:doaccount()" title="去结算" id="submit"  event-name="PC端_去结算">去结算</a></div>
        <script>
        function doaccount(){
            var id = '' ;
            var num = '';
                function pass(){
                    $('input[type="checkbox"]').each(function(){
                        // alert($(this).attr('checked'));
                    if(($(this).attr('checked')) == 'checked'){
                       id = id+','+$(this).next().val();
                       num = num + ',' + $(this).parent().siblings('.demo1').children('.demo').children('input').val();
                        };
                    });
                    // alert(id);
                    // alert(num);
                }
            pass();
            // alert(id);
            $('input[name="Cart_id"]').val(id);
            $('input[name="num"]').val(num);
            var form = document.myform1;
            form.action = '/cat';
            form.submit();
        }
        </script>
    @else
    <div class="wrong_box">
        <dl>
            <dt><img src="Home/picture/pic_01.jpg"></dt>
            <dd>
                <h3>哎呀，购物车空了！</h3>
                    <p>回到主页，去购物吧！！！</p>
                                                    </dd>
        </dl>
        <div class="wrong_btn">
                        <a href="/">返回首页</a>
                    </div>
    </div>
    @endif
</body>




    <link rel='stylesheet' href='css/top.logo.foot.myicon.min.css'>

<!-- 是否有导航，首页跟公共的导航有区别 -->

	<link rel='stylesheet' href='css/row-nav.min.css'>


<!-- 是否有分类 -->






<link rel="stylesheet" href="Home/css/model_framework_page_base.fade.min.fa9c8e98.css" />



<link rel='stylesheet' href='css/lenovo_search_header.min.css' />
    <div id="foot_div">
    
<!-- ----------------===============    foot     ===============--------------- -->
<!-- footer -->
<style type="text/css">.ns_p4 .ns_footer_line {
    width: 1200px;
    width: 1200px;
    box-sizing: border-box;
    margin: 0 auto;
}</style>
<div id="foot_div">
<!--服务列表-->
<div class="ns_Services-list ns_fixClear" id="Services-list">
    <div class="ns_w">
        <img width="1200" height="83" src="http://www.lenovo.com.cnpicture/tempimage.gif" _src="http://p3.lefile.cn/product/adminweb/2016/04/25/8518047e-a59d-4123-ad1f-4a68391ec161.jpg" class="lazy_img"/>
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
          <div class="ns_footer_line"><a href="" title="关于联想" >关于联想</a><span>|</span><a href="" title="联系我们" >联系我们</a><span>|</span><a href="" title="工作机会">工作机会</a><span>|</span><a href="" title="新闻中心"  >新闻中心</a><span style="display:none;">|</span><a href="" style="display:none;" title="商城移动版"  >商城移动版</a><span>|</span>
            <a href=""  title="聚享汇会员专享"  >聚享汇会员专享</a><span>|</span>
            <a href=""  title="联想社区"  >联想社区</a><span>|</span>
            <a href=""  title="NBD"  >NBD</a><span>|</span>
            <a href=""  title="联想超融合"  >联想超融合</a><span>|</span>
            <a href="" title="联想官网热搜榜"  >联想官网热搜榜</a><span>|</span>
            <a href="" title="分类大全"  >分类大全</a><span>|</span>
            <a href="" title="联想产品大全"  >联想产品大全</a><span>|</span>
            <a href="" title="智慧医疗"  >智慧医疗</a>
            <!--<a href="" title="分类大全"  >分类大全</a><span>|</span>
            <a href="" title="联想产品大全"  >联想产品大全</a><span>|</span>-->
            </div>
          <div class="ns_footer_line">版权所有：1998-2016 联想集团<span>|</span><a href="" title="法律公告"  >法律公告</a><span>|</span><a href="" title="隐私保护"  >隐私保护</a><span>|</span><a href=""  >京ICP备11035381</a><span>|</span><i style="font-style:normal;">京公网安备110108007970号</i><span>|</span><a href="" title="营业执照"  >营业执照：110000410127232</a><span>|</span><a href="" title=" 销售网点"  ><em class="usepng icon_addr1"></em>销售网点</a><span>|</span><a href="" title=" 服务网点"  ><em class="usepng icon_addr2"></em>服务网点</a></div>
        </div>
    </div>  
</div>
<!--页脚-->
</div>

</body>
        





<script type="text/javascript" src="Home/js/df57c9226f904284a1b89409b8132399.js"></script>
<script src="Home/js/juicer-min.lenovo-plugin-need.loadjs.unslider.lazy.asynloadinc.min.72aa3653.js"></script>





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


        
    <script type="text/javascript" src="Home/js/prdplatinfo.js" ></script>
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
