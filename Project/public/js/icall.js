$(function() {
	if (buOwner == 90) {
		var random = "",prule="",pagesize="",pageindex="",levelCode="";//级别
		/**
		 * 获得套餐描述信息
		 */
		function getDesc(tckey) {
			$.ajax({
				type : "GET",
				url : "/cache/query",
				data : {
					m : 'hget',
					k : 'cac_package',
					f : tckey
				},
				dataType : "json",
				success : function(r) {
					var desc = "";
					if ($.isArray(r.data) && r.data.length > 0)
						desc = r.data[0].productDesc;
					$("#tcDesc").empty().html(desc);
				}
			});
		}
		/**
		 * 获得列表
		 */
		function getList(target,list,style){
			if($.isArray(list)&&list.length>0){
				var type ="";
				if(style=='calltc')
				{
					type ="套餐";
					history_package = list[0].value;
				}
				else if(style=='callnet')
				{
					type = '网络';
					history_net = list[0].value;
				}
				for (var i = 0; i < list.length; i++) {
					var a = list[i];
					if (i == 0){
						target.append('<span code="'
								+ a.key
								+ '" class="de_sec_sel  '+style+' active"'
								+'latag="latag_pc_detail_choose_'+code+'_'+type+'_'+a.value+'">'
								+ a.value
								+ '</span>');
					}
					else{
						target.append('<span code="'
								+ a.key
								+ '" class="de_sec_sel  '+style+'"'
								+'latag="latag_pc_detail_choose_'+code+'_'+type+'_'+a.value+'">'
								+ a.value
								+ '</span>');
					}
				}
			}
		}
		/**
		 * 获取级别
		 */
		function getLevel(goodsid){
			$.ajax({
				type : "GET",
				url : "/cache/query",
				async:false,
				data : {
					m : 'hget',
					k : 'understand_goodsinfoes',
					f : goodsid
				},
				dataType : "json",
				success : function(r) {
					if(r.data){
						levelCode = r.data[0]["levelCode"];
						pd.log('async false');
					}
				}
			});
			pd.log('async true');
			return levelCode;
		}
		/**
		 * 获取价格  套餐信息  goodsid
		 */
		function getbytc(key) {
			var icallPar = {
				m : 'hget',
				k : 'understand_communication',
				f : code
			};
			var wl = $("div.de_info_section1 .de_sec_main").eq(0).find(
					"span.active").attr("code");
			icallPar.f = [ icallPar.f, $("#cityname").attr("code"), wl, key ]
					.join("_");
			$.ajax({
				type : "GET",
				url : "/cache/query?m=hmget&k=product_price&ss="
						+ new Date().getMilliseconds(),
				data : {
					f : key
				},
				dataType : "json",
				success : function(r) {
					var price = 0;
					if ($.isArray(r.data) && r.data.length > 0)
						price = r.data[0].pc;
					$(".de_info_price>b").text(
							"¥" + parseFloat(price).toFixed(2));
				}
			});
			getDesc(key);
			/******获取goodsid*************/
			$.ajax({
				type : "GET",
				url : "/cache/query",
				data : icallPar,
				dataType : "json",
				success : function(r) {
					$("#showpop").attr("goodsid", r.data[0]);
					pd.log('goodsid is--'+r.data[0]);
				}
			});
		}
		/**
		 * 网络绑定
		 */
		var history_net ="";
		function bindnet() {
			$("div.de_info_section1 .de_sec_main").eq(0).delegate(
							"span",
							"click",
							function() {
								try{
									var val = $(this).html();
										if(history_net!=val){
											$('#showpop').val('');
											history_net = val;
										}
								}catch (e){

								}
								var icallPar = {
									m : 'hget',
									k : 'understand_communication',
									f : code
								};
								icallPar.f = icallPar.f + "_"
										+ $("#cityname").attr("code") + "_"
										+ $(this).attr("code");
								$.ajax({
											type : "GET",
											url : "/cache/query",
											data : icallPar,
											dataType : "json",
											success : function(r) {
												var gg = $(
														"div.de_info_section1 .de_sec_main")
														.eq(1);
												gg.empty();
												var ary = r.data[0];
												if($.isArray(ary)&&ary.length>0){
													getList(gg,ary,'calltc');
													getbytc(ary[0].key);
												}
											}
										});
							});
		}
		/**
		 * 套餐绑定
		 */
		var history_package='';
		function bindtc() {
			$("div.de_info_section1 .de_sec_main").eq(1).delegate("span",
					"click", function() {
						try{
							var val = $(this).html();
								if(history_package!=val){
									$('#showpop').val('');
									history_package = val;
								}
						}catch (e){

						}
						var key = $(this).attr("code");
						getbytc(key);
					});
		}
		var history_city='';
		function init_icall() {
			/*$(".de_giftname").each(function(){//gift can't buy
				$(this).attr('href','javascript:void(0);');
			});*/
			$(".btnconfirm").attr("latag","latag_pc_detail_choose_"+code+"_号码_confirm");
			$("#num_search").attr("latag","latag_pc_detail_choose_"+code+"_号码_search");
			$("#num_change").attr("latag","latag_pc_detail_choose_"+code+"_号码_numchange");
			$("a.closeIcon").attr("latag","latag_pc_detail_choose_"+code+"_号码_close");
			$("#showpop").attr("latag","latag_pc_detail_choose_"+code+"_号码");
			var icall_frame =  $("#icall_gg").html(),gg;
			$("div.de_info_num").hide();//隐藏库存
			var ljgm = $('#ljgm');
			if(ljgm.text()!='非独立销售商品'&&ljgm.text()!='商品已下架')
			$("#ljgm").text("立即购买").removeClass("disable").unbind().bind(
					"click", $p.ljgm);
			$("#ljgm").css("margin-left", "21%");
			 $("#jrgwc").unbind().hide();
			$("#icall_gg").remove();
			$("div.de_info_section2").after(icall_frame);
			$("#showpop").attr("goodsid", goodsid);
			/*************城市下拉*************/
			if(typeof cities!='undefined'&&cities.length>0){
				for (var i = 0,len=cities.length; i < len; i++) {
					cities[i]["code"] =code;
				}
				$("#cityname").html(cities[0].value);
				history_city = cities[0].value;
				$("#cityname").attr("code", cities[0].key);
				$("#cityname").attr("latag", "latag_pc_detail_choose_"+cities[0].key+"_入网地址_"+cities[0].value+"");
				$("#cityTmpl").tmpl({
					data : cities
				}).appendTo('#cityList');
			}else{
				$('.de_info_section1 ul li').eq(0).hide();
			}

			/****************入网地址***************/
			gg = $("div.de_info_section1 .de_sec_main").eq(0).empty();
			if(networks!==null){
				getList(gg,networks,'callnet');
				bindnet();
			}
			else
				$('.de_info_section1 ul li').eq(1).hide();
			/****************套餐***************/
			 gg = $("div.de_info_section1 .de_sec_main").eq(1).empty();
			if(packages!=null)
			{
				getList(gg,packages,'calltc');
			}
			else
			{
				$('.de_info_section1 ul li').eq(2).hide();
				$('.de_info_section1 ul li').eq(3).hide();
				$('.de_info_section1 ul li').eq(4).hide();
			}
			try {
				getbytc(packages[0]["key"]);
				if (typeof packageInfo !== 'undefined')
					$(".de_info_price>b").text(
							"¥" + parseFloat(packageInfo.productPrice).toFixed(2));
			} catch (e) {
				pd.log('init page pagckages Array first element is fail'
						+ e.message);
			}
			bindtc();
		}
		if(typeof cities!='undefined'&&cities!=null)
{
	init_icall();
}else
{
	return;
}
		/**
		 * span红色边框
		 */
		$("div.de_info_section1 .de_sec_main").delegate("span", "click",
				function() {
					var _t = $(this);
					_t.parent().find("span").each(function(i, ele) {
						$(ele).removeClass("active");
					})
					$(this).addClass("active");
				});
		//选择号码
		$("#showpop").on("click", function() {
			$("#role").show();
			$("#last_num").show();
			$("#numRule").hide();
			$('#rolename').html('请选择规则');
			var goodsid =$("#showpop").attr("goodsid"); 
			getLevel(goodsid);
			if(levelCode!=0){//靓号
				$("#role").hide();
				//$("#last_num").hide();
				$("#numRule").show();
					$.ajax({
						type : "GET",
						url : "/api/products/getnumRuleBynumLevel",
						data : {numLevel:levelCode},
						dataType : "json",
						success : function(r) {
							if ($.isArray(r)){
								var target = $("#numRuleList ul").eq(0);
								target.empty();
								$('#numRulename').html('请选择规则');
								target.append('<li code="">请选择规则</li>');
								for (var i = 0,len=r.length; i < len; i++) {
									target.append('<li code="'+r[i]+'">'+r[i]+'</li>');
								}
							}
						}
					});
			}
			var icallPar = {productCode : goodsid,
							numLevel:levelCode
							};
			$.ajax({
				type : "GET",
				url : "/api/products/getTelStockResult",
				data : icallPar,
				dataType : "json",
				success : function(r) {
					r = r.result;
					if (!$.isArray(r.telNumList))
						return;
					random = r.random;
					prule = r.prule;
					pageindex = r.pageIndex;
					pagesize = r.pageSize;
					r = r.telNumList;
					var a = [];
					$("#tbody").empty();
					if (r.length > 0) {
						var len = r.length;
						var d = len / 5;
						if (r % 5 > 0)
							d += 1;
						for (var j = 0; j < d; j++) {
							a.push(r.slice(j * 5, (j + 1) * 5));
						}
					}
					$("#numberTmpl").tmpl({
						packageselects : a
					}).appendTo('#tbody');
					$(".selected_number").html("");
					$("#tbody").delegate("span", "click", function() {
						$("#tbody li span").siblings().removeClass("selected");
						$(this).addClass("selected");
						$(".selected_number").html($(this).html());
					});
				}
			});
			$(".D").toggle();
		});
		/**
		 * 号码查询
		 */
		$("#num_search").on("click", function() {
			var n = $("#rolename").attr("code"),
				l = $("#last_num").val(),
				numrule = $("#numRulename").attr("code");
			if (l != "" && l.length < 3) {
				alert('尾号请输入3-4位');
				return;
			}
			$.ajax({
				type : "GET",
				url : "/api/products/getTelStockResult",
				data : {
					productCode: $("#showpop").attr("goodsid"),
					endWith : n,
					end8Patten : l,
					numRule:numrule,
					numLevel:levelCode,
					pageSize:pagesize,
					pageIndex:pageindex,
					random : random,
					prule:prule
				},
				dataType : "json",
				success : function(r) {
					r = r.result;
					if (!$.isArray(r.telNumList))
						return;
					random = r.random;
					prule = r.prule;
					pageindex = r.pageIndex;
					pagesize = r.pageSize;
					r = r.telNumList;
					var a = [];
					$("#tbody").empty();
					if (r.length > 0) {
						var len = r.length;
						var d = len / 5;
						if (r % 5 > 0)
							d += 1;
						for (var j = 0; j < d; j++) {
							a.push(r.slice(j * 5, (j + 1) * 5));
						}
					}
					$("#numberTmpl").tmpl({
						packageselects : a
					}).appendTo('#tbody');
				}
			});
		});
		/**
		 * 换一批号码
		 */
		$("#num_change").on("click", function() {
			var n = $("#rolename").attr("code"),
			l = $("#last_num").val(),
			numrule = $("#numRulename").attr("code");
			$.ajax({
				type : "GET",
				url : "/api/products/getTelStockResult",
				data : {
					productCode: $("#showpop").attr("goodsid"),
					endWith : n,
					end8Patten : l,
					numRule:numrule,
					numLevel:levelCode,
					pageSize:pagesize,
					pageIndex:pageindex,
					random : random,
					prule:prule
				},
				dataType : "json",
				success : function(r) {
					r = r.result;
					if (!$.isArray(r.telNumList))
						return;
					random = r.random;
					prule = r.prule;
					pageindex = r.pageIndex;
					pagesize = r.pageSize;
					r = r.telNumList;
					var a = [];
					$("#tbody").empty();
					if (r.length > 0) {
						var len = r.length;
						var d = len / 5;
						if (r % 5 > 0)
							d += 1;
						for (var j = 0; j < d; j++) {
							a.push(r.slice(j * 5, (j + 1) * 5));
						}
					}
					$("#numberTmpl").tmpl({
						packageselects : a
					}).appendTo('#tbody');
				}
			});
		});
		$("#sheng").delegate("#cityname", "click", function() {
			$("#cityList").slideToggle(50).toggleClass("active");
		});
		$("#cityList")
				.delegate(
						"span",
						"click",
						function() {//联动
							var _t = $(this);
							_t.addClass("selected").siblings("span")
									.removeClass();
							$("#cityname").attr("latag",_t.attr("latag"));
							$("#cityname").attr("code", _t.attr("code")).html(
									_t.html());
							$("#cityList").slideToggle(200).removeClass(
									"active");
							var icallPar = {
								m : 'hget',
								k : 'understand_communication',
								f : code
							};
							icallPar.f = icallPar.f + "_"
									+ $(this).attr("code");
							$.ajax({
										type : "GET",
										url : "/cache/query",
										data : icallPar,
										dataType : "json",
										success : function(r) {
											var gg = $("div.de_info_section1 .de_sec_main").eq(0);
											gg.empty();
											var ary = r.data[0];
											if (ary.length > 0) {
												getList(gg,ary,'callnet');
												gg.find("span").eq(0).trigger("click");
											}
											try{
												var val = _t.html();
												if(history_city!=val){
													$('#showpop').val('');
													history_city= val;
												}
											}catch (e){

											}
										}
									});
						});
		$("#shengdown").on("click", function() {
			$("#cityList").slideToggle(200).toggleClass("active");
		});
		/*************号码选择规则*************/
		$("#role").delegate("#rolename", "click", function() {
			$("#roleList").slideToggle(50).toggleClass("active");
		});
		$("#roledown").on("click", function() {
			$("#roleList").slideToggle(200).toggleClass("active");
		});
		$("#roleList ul").delegate(
				"li",
				"click",
				function() {
					$("#roleList ul li").siblings().removeClass("actived");
					$(this).addClass("actived");
					$("#rolename").attr("code", $(this).attr("code")).html(
							$(this).html());
					$("#roleList").slideToggle(200);
				});
		/*************选择规则*************/
		/*************靓号选择规则*************/
		$("#numRule").delegate("#numRulename", "click", function() {
			$("#numRuleList").slideToggle(50).toggleClass("active");
		});
		$("#numRuledown").on("click", function() {
			$("#numRuleList").slideToggle(200).toggleClass("active");
		});
		$("#numRuleList ul").delegate(
				"li",
				"click",
				function() {
					$("#numRuleList ul li").siblings().removeClass("actived");
					$(this).addClass("actived");
					$("#numRulename").attr("code", $(this).attr("code")).html(
							$(this).html());
					$("#numRuleList").slideToggle(200);
				});
		/*************靓号选择规则*************/
		//确认提交
		$(".btnconfirm").on(
				"click",
				function() {
					var num = $(".selected_number").html();
					if(num==null||num=="")
						{
						alert('请选择号码');
							return false;
						}
					$("#showpop").val(num);
					$(".D").toggle();
				});
		$("a.closeIcon").on("click", function() {
			$(".D").toggle();
		});
		/*************只能输入数字3-4位*****************/
		$("#last_num").keyup(function() {
			var val = $(this).val();
			if (val.length > 4)
				$(this).val(val.substr(0, 4).replace(/[^\d.]/g, ''));
			else
				$(this).val(val.replace(/[^\d.]/g, ''));
		});
	}
});