function mySlider(){function a(a,b){return 1==a.currentStyle?a.currentStyle[b]:getComputedStyle(a,!1)[b]}function b(a,b){for(var c=a.getElementsByTagName("*"),d=[],e=0;e<c.length;e++)c[e].className==b&&d.push(c[e]);return d}function c(b,c,d){clearInterval(b.timer),b.timer=setInterval(function(){var e=0;e="opacity"==c?Math.round(100*parseFloat(a(b,c))):parseInt(a(b,c));var f=(d-e)/6;f=f>0?Math.ceil(f):Math.floor(f),e==d?clearInterval(b.timer):"opacity"==c?(b.style.filter="alpha(opacity:"+(e+f)+")",b.style.opacity=(e+f)/100):b.style[c]=e+f+"px"},30)}function d(){l[n].style.zIndex=m++;for(var a=0;a<j.length;a++)c(j[a],"opacity",50),c(l[a],"opacity",0);c(j[n],"opacity",100),c(l[n],"opacity",100),j.length<6?c(i,"left",0):0==n?c(i,"left",0):n==j.length-1?c(i,"left",-(n-4)*(j[0].offsetWidth+16)):n==j.length-2?c(i,"left",-(n-3)*(j[0].offsetWidth+16)):n==j.length-3?c(i,"left",-(n-2)*(j[0].offsetWidth+16)):c(i,"left",-(n-1)*(j[0].offsetWidth+16))}var e=document.getElementById("imgSlider"),f=b(e,"pro_prev")[0],g=b(e,"pro_next")[0],h=b(e,"pro_img_small")[0],i=h.getElementsByTagName("ul")[0],j=h.getElementsByTagName("li"),k=b(e,"pro_img_big")[0],l=k.getElementsByTagName("li"),m=2,n=0;if(!(j.length<1)){i.style.width=j.length*(j[0].offsetWidth+16)+"px";for(var o=0;o<j.length;o++)j[o].index=o,j[o].onclick=function(){this.index!=n&&(n=this.index,d())},j[o].onmouseover=function(){c(j[n],"opacity",100)},j.onmouseout=function(){this.index!=n&&c(j[n],"opacity",50)};j.length<5?(f.onclick=function(){},g.onclick=function(){}):(f.onclick=function(){n--,-1==n&&(n=j.length-1),d()},g.onclick=function(){n++,n==j.length&&(n=0),d()})}}function ns_tab(a,b,c,d){for(var e=1;d>=e;e++)$("#"+a+e).removeClass("ns_on"),$("#"+b+e).hide();$("#"+a+c).addClass("ns_on"),$("#"+b+c).show()}function hideService(){$(".selectContainer").each(function(){var a=($(this).find(".selectOption"),$(this).find(".selectOption").attr("sort")),b=$(this).find("li");for(i=0;i<b.length;i++)b.eq(i).attr("sort")==a&&b.eq(i).hide().siblings().show()})}function shareInit(){var a=navigator.userAgent,b=null==a.match("lenovomallapp")?0:1;b||($(".share_box").after($(".share_box").clone().addClass("share_box_unlogin").hide()),$(".share_box_unlogin").click(function(){passport.show(),$(".share_box").hide()}),$(".de_share").hover(function(){clearTimeout(share_timer),passport.isLogin()?(jiathis_config={url:"http://"+window.location.host+window.location.pathname+"?sharecode="+passport.cookie.lenovoId+"&promotionType=0",title:$(".de_proname").text(),summary:$(".de_info_main").prev().text(),pic:$("#imgBig li").eq(0).find("img").attr("src")},$(".share_box").show(),$(".share_box_unlogin").hide()):$(".share_box_unlogin").show()},function(){share_timer=setTimeout(function(){$(".share_box").hide()},300)}),$(".share_box").hover(function(){clearTimeout(share_timer)},function(){share_timer=setTimeout(function(){$(".share_box").hide()},300)}))}function getEvaluateLable(){$.ajax({url:config_grq[env][4].pl+"comment/getlables.do",dataType:"jsonp",jsonp:"jsonpcallback",timeout:1e3,data:{gcode:code},success:function(a){"000000"==a.code&&a.data.length>0&&($("#sppl_lable").remove(),$("#sppl_list").before($("#sppl_lable_tmpl").tmpl(a)))},error:function(){},complete:function(a,b){"timeout"==b&&pd.log("获取评价列表标签请求超时")}})}function makeCity(){function a(){$("#city_wrap").find(".city_tab").hide(),$("#city_wrap").find(".city_title").removeClass("open")}$(document).on("click",function(){var b=$("div.city_title","#city_wrap");b.hasClass("open")&&a()}),$("#city_wrap").on("click",function(){return!1}),$("#city_wrap").delegate(".city_title","mouseenter",function(){$("#city_wrap").find(".city_tab").show(),$("#city_wrap").find(".city_title").addClass("open")}),$("#city_wrap").delegate(".city_close","click",a),$("#city_wrap").delegate(".city_tab_title_province","click",function(){$("#city_wrap").find(".city_tab_province").show(),$("#city_wrap").find(".city_tab_city").hide(),$(this).addClass("active").siblings("dd").removeClass("active")}),$("#city_wrap").delegate(".city_tab_title_city","click",function(){var a=$("#city_wrap").find(".city_tab_title_province").attr("data-province");$("#city_wrap").find(".city_tab_province").hide(),$("#city_wrap").find(".city_tab_city[data-province='"+a+"']").show().siblings(".city_tab_body").hide(),$(this).addClass("active").siblings("dd").removeClass("active")}),$("#city_wrap").delegate(".city_tab_province dd","click",function(){var a=$(this),b=$(".city_tab_title_province"),c=$(".city_tab_title_city"),d=a.find("span:first").text(),e=a.attr("data-province");a.addClass("o2o-now").siblings("dd").removeClass("o2o-now"),b.find("span").text(d),b.attr("data-province",e),b.removeClass("active"),c.addClass("active");var f="请选择",g=0;c.show().attr("data-city",g),c.find("span").text(f),$("#city_wrap").find(".city_tab_province").hide();var h=$(" dl.city_tab_city[data-province = '"+e+"']");h.find("dd.o2o-now").removeClass("o2o-now").end().show()}),$("#city_wrap").delegate(".city_tab_city dd","click",function(){var b=$(this);if(b.find("span:first").hasClass("gray"))return!1;var c=b.attr("data-city"),d=b.find("span:first").text(),e=$(".city_tab_title_city");b.addClass("o2o-now").siblings("dd.o2o-now").removeClass("o2o-now"),e.find("span").text(d),e.attr("data-city",c);var f=$(".city_tab_title_province span").text(),g=$(".city_tab_title_province").attr("data-province");$(".city_title span").text(f+("请选择"==d?"":d)),$(".city_title").attr("data-province",g),$(".city_title").attr("data-city",c),a()})}function ShopLenovoFocusImg(a){this.box=$("#"+a.boxId),this.childN=a.childN||"li",this.li=this.box.find(this.childN),this.tagN=a.tageN||"i",this._type=a._type||"fade",this.loop=a.loop||!1,this.v=a.v||5;var b="";if(this.minL=this.li.length,this.loop&&this.minL>this.v)for(var c=0;c<this.v;c++)this.box.append(this.li.eq(c).clone(!0));if(this.li=this.box.find(this.childN),this.l=this.li.length,this.li.bind("mouseover",function(){clearInterval(e.timer)}),this.li.bind("mouseleave",function(){e.autoPlay()}),0!=this.numBox){this.numBox=$("#"+a.numBox);for(var d=0;d<this.l;d++)b+="<"+this.tagN+" t='"+d+"' class='ns_num"+(d+1)+"'></"+this.tagN+">";this.numBox.html(b),this.numA=this.numBox.find(this.tagN)}0==a.isAuto?this.isAuto=!1:this.isAuto=!0;var e=this;this.moveLi=a.moveLi||!1,e.c=0,this.timer=null,this.t=a.t||3e3,this.moveLi&&(this.w=this.li.outerWidth(!0),this.maxL=this.l-this.v,this.box.width(this.l*this.w),this.l=this.maxL+1),"move"!=this._type||this.moveLi||(this.w=100/this.l,this.box.width(100*this.l+"%"),this.li.width(this.w+"%")),0!=this.numBox&&this.numA.bind("mouseover",function(){return clearInterval(e.timer),$(this).attr("t")==e.c?!1:(e.c=$(this).attr("t"),void e.showi(1))}),a.btnP&&(this.btnP=$("#"+a.btnP),this.li.length<4?this.btnP.unbind("click"):this.btnP.bind("click",function(){clearInterval(e.timer),e.loop?(e.c<=0&&(e.c=e.l-1,e.box.css({left:-e.c*e.w})),e.c--):e.c>0?e.c--:e.c=e.l,e.showi(1)})),a.btnN&&(this.btnN=$("#"+a.btnN),this.li.length<4?this.btnN.unbind("click"):this.btnN.bind("click",function(){clearInterval(e.timer),e.loop?(e.c>=e.l-1&&(e.box.css({left:0}),e.c=0),e.c++):e.c<e.l?e.c++:e.c=0,e.showi(1)})),this.showi(),this.autoPlay()}function makeFocusImg(){new ShopLenovoFocusImg({boxId:"ns_scroll_box-1",btnN:"ns_scroll_box_next-1",btnP:"ns_scroll_box_pre-1",t:5e3,_type:"move",moveLi:!0,isAuto:!1,v:4}),new ShopLenovoFocusImg({boxId:"ns_scroll_box-2",btnN:"ns_scroll_box_next-2",btnP:"ns_scroll_box_pre-2",t:5e3,_type:"move",moveLi:!0,isAuto:!1,v:5}),new ShopLenovoFocusImg({boxId:"ns_scroll_box-3",btnN:"ns_scroll_box_next-3",btnP:"ns_scroll_box_pre-3",t:5e3,_type:"move",moveLi:!0,isAuto:!1,v:5}),new ShopLenovoFocusImg({boxId:"ns_scroll_box-4",btnN:"ns_scroll_box_next-4",btnP:"ns_scroll_box_pre-4",t:5e3,_type:"move",moveLi:!0,isAuto:!1,v:5}),new ShopLenovoFocusImg({boxId:"ns_scroll_box-5",btnN:"ns_scroll_box_next-5",btnP:"ns_scroll_box_pre-5",t:5e3,_type:"move",moveLi:!0,isAuto:!1,v:5}),new ShopLenovoFocusImg({boxId:"ns_scroll_box-6",btnN:"ns_scroll_box_next-6",btnP:"ns_scroll_box_pre-6",t:5e3,_type:"move",moveLi:!0,isAuto:!1,v:5}),new ShopLenovoFocusImg({boxId:"ns_scroll_box-7",btnN:"ns_scroll_box_next-7",btnP:"ns_scroll_box_pre-7",t:5e3,_type:"move",moveLi:!0,isAuto:!1,v:5})}var gmsl=5,Detail=function(){var a={};return a.active=function(){$(".click_radio").click(function(){var a=$(this),b=a.attr("index");a.hasClass("active")&&(a.removeClass("active"),$(".tab_body>.tab_list").eq(b).find("ul li").each(function(a,b){$(b).removeClass("active")}),$p.srdz())}),$(".click_checkbox").click(function(){$(this).toggleClass("active");var a=parseFloat($p.price),b=0,c=0;$(".xjds_box").find(".ns_scroll .click_checkbox.active").each(function(d,e){a+=parseFloat($(e).attr("data-price")),b+=parseFloat($(e).attr("data-discount")),c+=1}),$(".xjds_box .ns_title").html("已搭配："+c+"件"),$(".xjds_box .ns_info_red").html("搭售价：<b>¥ "+(a-b).toFixed(2)+"</b>"),$(".xjds_box .ns_info_discount").html("优惠了：<b style='font-size: 16px;'>¥ "+b.toFixed(2)+"</b>"),0==c||0==$p.stock?$(".xjds_box .ns_btn-add").addClass("disable"):$(".xjds_box .ns_btn-add").removeClass("disable")}),$("#zpkx .click_father").click(function(){var a=$(this).parent(".de_sail_sel");a.hasClass("active")?a.removeClass("active"):a.addClass("active").siblings(".de_sail_sel").removeClass("active"),$p.kxzp=[],$("#zpkx .de_sail_sel.active").each(function(a,b){$p.kxzp.push($(b).attr("data-code"))})})},a.more=function(){$("#de_more").click(function(){$(this).find("i").hasClass("de_down")?($(this).find("i").removeClass("de_down").addClass("de_up"),$(this).find("span").html("收起"),$(".de_sail_bottom").show()):($(this).find("i").removeClass("de_up").addClass("de_down"),$(this).find("span").html("查看更多"),$(".de_sail_bottom").hide())})},a.app=function(){$("#appshow").click(function(){$(this).find("i").hasClass("de_down")?($(this).find("i").removeClass("de_down").addClass("de_up"),$(this).addClass("active"),$(".de_app_code").show()):($(this).find("i").removeClass("de_up").addClass("de_down"),$(this).removeClass("active"),$(".de_app_code").hide())})},a.num=function(){$(".J_input").on("input",function(){var a=$(this).val(),b=parseInt($p.newProcode["code"+code].salesNumber);if(isNaN(a)&&""!=$.trim(a))$(".J_input").val(1);else if(parseInt(a)>gmsl||parseInt(a)>b){var c=gmsl>b?b:gmsl;$(".J_input").val(c),alert("已经到达最大购买数量")}else 1>a&&""!=$.trim(a)?$(".J_input").val(1):""==$.trim(a)||$(this).val(parseInt(a))}),$(".J_input").blur(function(){var a=$(this).val();""==$.trim(a)&&$(".J_input").val(1)}),$(".i_box .J_add").bind("click",function(){var a=parseInt($p.newProcode["code"+code].salesNumber),b=parseInt($(this).siblings(".J_input").attr("value"));b++;try{if(b>gmsl||b>a)return void alert("已经到达最大购买数量")}catch(c){}return $(this).siblings(".J_input").attr("value",b),!1}),$(".i_box .J_minus").bind("click",function(){var a=parseInt($(this).siblings(".J_input").attr("value"));return a--,1>a?(a=1,$(this).siblings(".J_input").attr("value","1")):$(this).siblings(".J_input").attr("value",a),!1})},a.tab=function(a){var b=$(a).find(".tab_title"),c=$(a).find(".tab_body"),d=0,e=this;e.tabclass=a,b.find(".tab_btn").mouseenter(function(){d=$(this).index();try{var a=c.find(".tab_list").eq(d);a.show(),void 0===a.attr("_loadImg")&&(a.find("ul img").each(function(a,b){b=$(b),b.attr("src",b.attr("_src"))}),a.attr("_loadImg","true"))}catch(b){}}),b.find(".tab_btn").mouseleave(function(){d=$(this).index(),c.find(".tab_list").eq(d).hide()}),c.find(".tab_list").mouseenter(function(){$(this).show()}),c.find(".tab_list").mouseleave(function(){$(this).hide()})},a.order=function(){$(".de_sel_detail").find("li").hover(function(){var a=$(this).find("img").attr("src");$(this).parent("ul").siblings(".de_sel_bigimg").show().find("img").attr("src",a)},function(){$(this).parent("ul").siblings(".de_sel_bigimg").hide()})},a.tabDetail=function(){var a=$("#tab li"),b=$("#content ul"),c=0;a.click(function(){var d=$(this);c=d.index(),a.removeClass("current"),d.addClass("current"),b.hide(),"pingjia_title"==d.attr("id")&&($p.pjsd(1,0),getEvaluateLable(),$("#sppl_list").delegate("a.clickpl","click",function(){})),b.eq(c).show()})},a.makeEvaluateImg=function(){$("#sppl_box").delegate(".sppl_simg_list>li","click",function(){var a=$(this),b=a.index();a.hasClass("active")&&a.parent(".sppl_simg_list").data("isShow")?(a.parents(".sppl_user_imgbox").find(".sppl_bimg_box").slideUp(0),a.removeClass("active"),a.parent(".sppl_simg_list").data("isShow",0)):(a.parent(".sppl_simg_list").data("isShow")||a.parents(".sppl_user_imgbox").find(".sppl_bimg_box").slideDown(),a.parents(".sppl_user_imgbox").find(".sppl_bimg_box").find("li").eq(b).show().siblings().hide(),a.toggleClass("active").siblings().removeClass("active"),a.parent(".sppl_simg_list").data("isShow",1))}),$("#sppl_box").delegate(".sppl_bimg_list>li>img","click",function(){var a=$(this).parents(".sppl_user_imgbox");a.find(".sppl_bimg_box").slideUp(0),a.find(".sppl_simg_box").find("li").removeClass("active"),a.find(".sppl_simg_list").data("isShow",0)}),$("#sppl_box").delegate(".sppl_bimg_box .sppl_imgbt_left","click",function(){var a=$(this).parents(".sppl_user_imgbox"),b=a.find(".sppl_simg_list").find("li").length-1,c=a.find(".sppl_simg_list").find(".active").index()||0;0==c?c=b:c--,a.find(".sppl_simg_box").find("li").eq(c).addClass("active").siblings().removeClass("active"),a.find(".sppl_bimg_box").find("li").eq(c).show().siblings().hide()}),$("#sppl_box").delegate(".sppl_bimg_box .sppl_imgbt_right","click",function(){var a=$(this).parents(".sppl_user_imgbox"),b=a.find(".sppl_simg_list").find("li").length-1,c=a.find(".sppl_simg_list").find(".active").index()||0;c==b?c=0:c++,a.find(".sppl_simg_box").find("li").eq(c).addClass("active").siblings().removeClass("active"),a.find(".sppl_bimg_box").find("li").eq(c).show().siblings().hide()}),$("#sppl_box").delegate("#sppl_title dd","click",function(){var a=$(this),b=a.attr("data-level");$("#sppl_list").empty(),a.addClass("active").siblings("dd").removeClass("active"),$("#sppl_lable dd").removeClass("active"),$p.pjsd(1,b)}),$("#sppl_box").delegate("#sppl_lable dd","click",function(){var a=$(this),b=a.attr("data-label");a.addClass("active").siblings("dd").removeClass("active"),$("#sppl_title dd").eq(0).addClass("active").siblings("dd").removeClass("active"),$p.pjsd(1,0,b)})},a.bindCheckSN=function(){$("#checkSNcode_bt").click(function(){$p.checkSNcode()})},a.bindClossCheckSN=function(){$("#checkSNcode_box .close").click(function(){$("#checkSNcode_box").hide(),$("#SNcode").val("")})},a}(jQuery,Detail);jQuery.fn.select=function(a){return this.each(function(){var a=$(this),b=(a.find(".shows"),a.find(".selectOption"),a.find("ul > li"));a.hover(function(){$(this).addClass("zIndex"),$(this).children("ul").addClass("dis")},function(){$(this).removeClass("zIndex"),$(this).children("ul").removeClass("dis")}),b.bind("click",function(){var a=$(this);a.parent().parent().find(".selectOption").html(a.html()),a.parent().parent().find(".selectOption").attr({sort:a.attr("sort"),"data-code":a.attr("data-code"),latag:a.attr("latag")}),a.parent("ul").removeClass("dis"),a.parent().parent().find(".click_checkbox").addClass("active"),hideService()})})};var jiathis_config,share_timer;$(function(){Detail.num(),Detail.tab(".de_tab"),Detail.order(),Detail.tabDetail(),Detail.bindCheckSN(),Detail.bindClossCheckSN(),hideService(),makeCity(),Detail.makeEvaluateImg(),$(".selectContainer").select(),mySlider(),shareInit(),getEvaluateLable()}),ShopLenovoFocusImg.prototype={autoPlay:function(){var a=this;return a.isAuto?void(this.timer=setInterval(function(){a.c<a.l-1?a.c++:a.c=0,a.showi()},this.t)):!1},showi:function(a){var b=this;"fade"==this._type?(this.li.fadeOut(),this.li.removeClass("ns_on"),this.li.eq(this.c).addClass("ns_on"),this.li.eq(this.c).fadeIn(300,function(){a&&b.autoPlay()})):"move"==this._type&&(this.moveLi?this.box.stop().animate({left:-this.w*this.c},function(){a&&b.autoPlay()}):this.box.stop().animate({left:-100*this.c+"%"},function(){a&&b.autoPlay()})),0!=this.numBox&&(this.numA.removeClass("ns_on"),this.numA.eq(this.c).addClass("ns_on"))}};