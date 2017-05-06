var requestpath =  "http://www.lenovovip.com.cn"
//导航
var shopLenovo = {};
shopLenovo.nav = {
	init:function(){
		var _self = this;
		_self.timer = null;
		this.mainNav = $("#main-nav");
		this.navH = this.mainNav.find(".ns_menu-title");
		this.nav = $("#menu-nav-container");
		this.categoryMenu = $("#category-menu-content");
		this.categoryPannel = $(".ns_category-menu-pannel");
		this.categorySub = $("#category-sub-content");
		this.categorySubPannel = $(".ns_category-sub-pannel");			
		
		//三级菜单折行处理
		this.categorySubPannel.each(function(_index){
			var n_item = $(this).find(".ns_item");
			var n = n_item.length;
			var subPan = "";
			if(n>6){					
				var maxL = Math.ceil(n/6);					
				for(var t = 1;t<=maxL;t++){
					n_item.eq(t*6-1).after("<div class='ns_clear'></div>");										
				};				
			};
		});
		
		this.li = this.nav.find("li");			
		
		
		//判断是否存在二级菜单
		this.categoryPannel.each(function(_index){
			if($(this).find("li").length=0){
				_self.li.eq(_index).attr("sj","0");
			};
		});
		
		this.sub_li = this.categoryMenu.find("li");
		
		if(!this.nav.is(":visible")){
			this.navH.bind("mouseover",function(){
				_self.nav.stop().slideDown();
			});
			this.mainNav.bind("mouseleave",function(){
				_self.nav.stop().slideUp();
			});
		};			
		this.li.bind("mouseover",function(){
			clearTimeout(_self.timer);
			_self.li.removeClass("ns_on");
			$(this).addClass("ns_on");
			var _index = $(this).index();
			
			//document.title = _self.categoryPannel.eq(_index).length;
			if(_self.categoryPannel.eq(_index).length<=0){
				_self.sub_li.removeClass("ns_on");
				_self.categorySub.hide();
				_self.categoryMenu.hide();			
				_self.categoryPannel.hide();
				return false;	
			};
			//如果没有二级菜单
			if(_self.categoryPannel.eq(_index).find("li").length<=0){
				var _subIndex = 0;
				var _subTab = $(this).index()+1;
				var _subBox = $(".ns_category-"+_subTab+"-pannel-sub").find(".ns_category-sub-pannel").eq(_subIndex);
						//document.title = _subBox.is(":visible");
					if(!_subBox.is(":visible")){				
						if(_subBox.length<=0){
							_self.categorySub.hide();
						}else{					
							_self.categorySubPannel.hide();
							_subBox.show();	
							_self.categorySub.css({left:210,opacity:0});
							_self.categorySub.show();
							_self.categorySub.animate({left:226,opacity:1},250)
						};
					};
				_self.categoryMenu.hide();							
				return false;
			}
			if(_self.categoryPannel.eq(_index).is(":visible"))return false;
			_self.sub_li.removeClass("ns_on");
			_self.categorySub.hide();
			_self.categoryMenu.hide();			
			_self.categoryPannel.hide();
			_self.categoryMenu.css({left:"210px",opacity:0});
			_self.categoryMenu.hide();
			_self.categoryMenu.show();
			_self.categoryPannel.eq(_index).show();
			_self.categoryMenu.animate({left:"226px",opacity:1},250);
		});
		this.categoryMenu.bind("mouseover",function(){
			clearTimeout(_self.timer);
		});
		this.nav.bind("mouseout",function(){
			_self.timer = setTimeout(function(){
				_self.hideNav();
			},100);
		});
		this.categoryMenu.bind("mouseout",function(){
			_self.timer = setTimeout(function(){
				_self.hideNav();
			},100);
		});

		this.categorySub.bind("mouseover",function(){
			clearTimeout(_self.timer);
		});
		this.categorySub.bind("mouseout",function(){
			_self.timer = setTimeout(function(){
				_self.hideNav();
			},100);
		});

		this.sub_li.bind("mouseover",function(){
			_self.sub_li.removeClass("ns_on");
			$(this).addClass("ns_on");
			var _subIndex = $(this).index();
			var _subTab = $(this).parents(".ns_category-menu-pannel").attr("data-sub");
			var _subBox = $(".ns_category-"+_subTab+"-pannel-sub").find(".ns_category-sub-pannel").eq(_subIndex);
					//document.title = _subBox.is(":visible");
				if(!_subBox.is(":visible")){				
					if(_subBox.length<=0){
						_self.categorySub.hide();
					}else{					
						_self.categorySubPannel.hide();
						_subBox.show();	
						_self.categorySub.css({left:386,opacity:0});
						_self.categorySub.show();
						_self.categorySub.animate({left:396,opacity:1},250)
					};
				};
		});
	},
	hideNav:function(){
		var _self = this;
			_self.li.removeClass("ns_on");
			_self.categoryMenu.animate({left:200,opacity:0},250,function(){
				_self.categoryMenu.hide();
			});
			_self.categorySub.animate({left:366,opacity:0},250,function(){
				_self.categorySub.hide();				
			});
	}
};

//获取窗口高宽
shopLenovo.getW = function(){
    var client_h,client_w,scrollTop;
        client_h = document.documentElement.clientHeight || document.body.clientHeight;
        client_w = document.documentElement.clientWidth || document.body.clientWidth;
        scrollTop = document.documentElement.scrollTop || document.body.scrollTop;
        return o = {w:client_w,h:client_h,s:scrollTop};
}

//var isIe6=false;				
//if($.browser.msie && parseInt($.browser.version)==6){				
//	isIe6=true;					
//};

// 右侧浮动栏
/*
 显示区域的宽度<1280: 始终在屏幕的右侧,right:0;
 显示区域的宽度>1280: 居中的位置,向右侧偏移  -(1200/2+30)
 */
shopLenovo.bar = {
	init:function(){
		var mb_outer = "";
		mb_outer += "<div class='ns_mui-mbar-outer' id='J_MUIMallbar'>",
			mb_outer += "<ul class='ns_parentBox'>",
			//	mb_outer += "<li class='ns_mbar-tab ns_mbar-my'> <a href='"+"#"+"' class='ns_h'>会员中心</a></li>",
			mb_outer += "<li class='ns_mbar-tab ns_mbar-qq'> <a href='javascript:;' class='ns_h'>客服咨询</a>",
			mb_outer += "<div class='ns_qq-box ns_mbar-li' style='height:150px;display:none;'>",
			mb_outer += "<div class='ns_mbar-inner'>",
			mb_outer += "<a href='http://srv.shop.lenovo.com.cn/live/p.do?c=1&g=11&p=22' target='_blank'>",
			mb_outer += "<div class='ns_t1'>",
			mb_outer += "<div class='ns_p1'>lenovo PC商品</div>",
			mb_outer += "</div>",
			mb_outer += "</a>",
			mb_outer += "<a href='http://srv.shop.lenovo.com.cn/live/p.do?c=1&g=11&p=22' target='_blank'>",
			mb_outer += "<div class='ns_t1'>",
			mb_outer += "<div class='ns_p1'>lenovo 平板商品</div>",
			mb_outer += "</div>",
			mb_outer += "</a>",
			mb_outer += "<a href='http://srv.shop.lenovo.com.cn/live/p.do?c=1&g=13&p=22' target='_blank'>",
			mb_outer += "<div class='ns_t1'>",
			mb_outer += "<div class='ns_p1'>lenovo 服务商品</div>",
			mb_outer += "</div>",
			mb_outer += "</a>",
			mb_outer += "</div>",
			mb_outer += "</div>",
			mb_outer += "</li>",
			mb_outer += "<li class='ns_mbar-tab ns_mbar-service'> <a href='javascript:;' class='ns_h'>客服热线</a>",
			mb_outer += "<div class='ns_service-box ns_mbar-li' style='height:auto;padding-bottom:5px;display:none;'>",
			mb_outer += "<div class='ns_mbar-inner'>",
			mb_outer += "<div class='ns_t2'>",
			mb_outer += "<div class='ns_p1'>聚享汇服务热线</div>",
			mb_outer += "<div class='ns_p2'>400-818-8336</div>",
			mb_outer += "</div>",
			mb_outer += "<div class='ns_t2'>",
			mb_outer += "<div class='ns_p1'>lenovo 服务商品</div>",
			mb_outer += "<div class='ns_p2'>400-890-1566</div>",
			mb_outer += "</div>",
			mb_outer += "</div>",
			mb_outer += "</div>",
			mb_outer += "</li>",
		//	mb_outer += "<li class='ns_mbar-tab ns_mbar-survey'> <a href='' class='ns_h'>用户调研</a></li>",
			mb_outer += "<li class='ns_mbar-tab ns_mbar-totop'> <a href='#site-nav' class='ns_h' id='totop'  style='display:none'>返回顶部</a></li>",
			mb_outer += "</ul>",
			mb_outer += "</div>";
		$("body").append(mb_outer);
		this.box = $("#J_MUIMallbar");
		this.tab = this.box.find(".ns_mbar-tab");
		var _self = this;
		this.timer;
		this.box.bind("mouseover",function(){
			clearTimeout(_self.timer);
		});		
		
		var setWinTimer = null;
		$(window).bind("resize",function(){
			setWinTimer = setTimeout(function(){
				setWin();
			},200);
		});
			
		$(window).bind("scroll",function(){		
			timer = setTimeout(function(){
				var p = document.body.scrollTop || document.documentElement.scrollTop;							
//				if(isIe6){
//					_self.box.stop().animate({top:shopLenovo.getW().h/2+p});
//				};
				
			},100);
		});
		
		function setWin(){
			var win = shopLenovo.getW();
			//TODO:显示区域的宽度<1280: 始终在屏幕的右侧,right:0;显示区域的宽度>1280: 居中的位置,向右侧偏移  -(1200/2+30)
			if(win.w<=1280){
				_self.box.removeClass("ns_mui-mbar-outer_state1").addClass('ns_mui-mbar-outer_state2');
				$("#J-floor-nav-box").addClass("ns_floor-nav-box_on");
			}else{
				_self.box.removeClass("ns_mui-mbar-outer_state2").addClass('ns_mui-mbar-outer_state1');
				$("#J-floor-nav-box").removeClass("ns_floor-nav-box_on");

			};
			$("#J-collection-box").css({height:win.h-2,"margin-top":-win.h/2+47});					
			$("#J-collection-box").find(".ns_mbar-inner").css({height:win.h-4});
		};
		setWin();			
		$("#J-collection-box .ns_btnUp").bind("click",function(){
				$("#J-collection-box .ns_mbar-inner").animate({
					scrollTop:0},500
				);
		});			
		this.tab.bind("mouseover",function(){
			//document.title = 1;		
			//clearTimeout(_self.timer);
			if($(this).find(".ns_mbar-li").is(":visible"))return false;
			_self.box.find(".ns_mbar-li").hide();
			$(this).find(".ns_mbar-li").css({opacity:0,right:42});				
			$(this).find(".ns_mbar-li").animate({"right":"52px",opacity:1},250);;				
			$(this).find(".ns_mbar-li").show();
		});			
		this.tab.bind("mouseleave",function(){				
			var obj = $(this).find(".ns_mbar-li");	
				_self.timer = setTimeout(function(){						
					obj.animate({"right":"42px","opacity":0},250,function(){
						obj.hide();
					});
				},200);
		});
		function showToTop(){
			var scrollValue=$(window).scrollTop();
			scrollValue > 100 ? $('#totop').fadeIn():$('#totop').fadeOut();
		}
		$(window).scroll( function() {
			showToTop();
		} );	
		$('#totop').bind("click",function(){
			$("html,body").animate({scrollTop:0},600);
			return false;
		});
		showToTop();
	}
};

//tab
function ns_tab(tabId,conId,n,l){
	for(var i = 1;i<=l;i++){
		$("#"+tabId+i).removeClass("ns_on");	
		$("#"+conId+i).hide();	
	};
	$("#"+tabId+n).addClass("ns_on");	
	$("#"+conId+n).show();		
};	

//公共的弹窗方法
function showAlert(time) {
    var alert_w = $(".alert").width();
    $(".alert").fadeIn();
    $(".alert").css({ "margin-left": -alert_w / 2 });
    setTimeout(function () {
        $(".alert").fadeOut();
    }, time)
}

//公共的弹窗方法
var imgPath = "http://style.lenovo.com/images";
function showMessage(time, text, url) {
    var $newdiv = $("<div class='alert'></div>");
    var div_html = '';
    div_html += '<div class="alert_body">';
    div_html += '<b>&nbsp;&nbsp;</b>&nbsp;&nbsp;';
    div_html += '<span>' + text + '</span>';
    div_html += '</div>';
    $newdiv.append(div_html);
    $('body').append($newdiv);
    var alert_w = $newdiv.width();
    $newdiv.fadeIn();
    $newdiv.css({ "margin-left": -alert_w / 2 });
    setTimeout(function () {
        $newdiv.fadeOut(function () { $newdiv.remove(); });
        if (url) {
            window.location.href = url;
        }
    }, time);
}	

//初始化
$(function(){
	// 导航
	// shopLenovo.nav.init();		
});
