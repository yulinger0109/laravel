/**
 * Created by wupeng5 on 2015/10/21.
 */

String.prototype.trim=function() {
    return this.replace(/(^\s*)|(\s*$)/g,'');
};
Array.prototype.unique = function(){
    var res = [];
    var json = {};
    for(var i = 0; i < this.length; i++){
        if(!json[this[i]]){
            res.push(this[i]);
            json[this[i]] = 1;
        }
    }
    return res;
}
function getLeid(){
    var res = "";
    var arr = document.cookie.split(';');
    for(var i=0;i<arr.length;i++){
        if(arr[i].split('=')[0].trim() == "leid"){
            res = arr[i].split('=')[1];
            break;
        }
    }
    return res;
}

var searchController = function(){
    var that = this;

    this.plat = "4";
    this.from = "fromhomepage";

    function getQueryString(name) {
        var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)", "i");
        var r = window.location.search.substr(1).match(reg);
        if (r != null) return decodeURIComponent(r[2]); return "";
    }

    this.globalKey = "";
    this.index = ""; 
    this._type = "";
    this.paramsConteiner = $("div.tab_body .le_sel.tab_list li.clearfix.le_sel_line1 div.le_sel_con2");
    this.sortNumber =2;

    this.pageSize = 20;
    this.pageIndex = 1;
    this.filtersForInit = "";
    this.filterArr = [];//筛选条件窗口

    //产品列表容器
    this.container = $("#productList");
    //查询出来的数据总条数
    this.allPageCount = 0;

    //私有方法，获取最上侧的已选条件的key和value
    function getItemsParams(){
        var res = {items:""};
        var params = "";
        //if(!that.paramsConteiner) {
        //    return res;
        //}
        //var _c = $("a.le_clickdel");
        //for(var i=0;i<_c.length;i++){
        //    params += $(_c[i]).attr("data-key")+"@";
        //}

        if (that.filterArr.length > 0) {
            params = that.filterArr.join("@");
        }


        //if(params != ""){
        //    params = params.substring(0,params.length-1);
        //}
        res.items = params.replace(/~/g, "-").replace(/\^/g, ",");
        return res;
    }
    //私有方法，重新设置分页页码样式
    function setPagingClass(){
        if(that.pageIndex == 1){
            $(".search_prev").removeClass("active");
        }
        else{
            $(".search_prev").addClass("active");
        }

        if(that.allPageCount>1) {
            $(".search_next").addClass("active");
            $("span[pageCountTag=pageCount]").text(that.allPageCount);
        }else{
            $(".search_next").removeClass("active");
            $("span[pageCountTag=pageCount]").text(1);
        }

        if(that.pageIndex == that.allPageCount){
            $(".search_next").removeClass("active");
        }
    }

    //私有方法，重新设置销量 时间 价格等样式
    function setSortClass(el){
        $(el).siblings().removeClass("active");
        $(el).addClass("active");
    }

    this.tabChangedEvent = function(){
        $("body").delegate("li.tab_btn","click",function(){
            var index = $(this).attr("tag");
            if (!$(this).hasClass("active")) {
                if (document.URL.indexOf('s.lenovo.com.cn') > -1) {
                    //window.location.href = $GRUNTCONFIG.PRODUCTION.lenovoSearchUrl + "?index=" + index + "&key=" + encodeURIComponent(that.globalKey);
                    window.location.href = $GRUNTCONFIG.PRODUCTION.lenovoSearchUrl + "?index=" + index;
                }
                else {
                    //window.location.href = $GRUNTCONFIG.UAT.lenovoSearchUrl + "?index=" + index + "&key=" + encodeURIComponent(that.globalKey);
                    window.location.href = $GRUNTCONFIG.UAT.lenovoSearchUrl + "?index=" + index;
                }
            }
        })
    }

    this.currentContainer = null;

    this.setNaviAndSearchItemsCss = function(index){
        if(index){
            this._type = index;
        }
    }

    this.moreItemsEvent = function(){
        $("body").delegate("div.le_sel_con3","click",function(){
            $(this).parent().toggleClass("le_sel_active");
        })
    }

    this.cancelItemEvent = function(){
        $("body").delegate("input.le_btn_cancel","click",function(){
            $(this).parent().parent().parent().removeClass("le_sel_active");
        })
    }

    //撤销一个已选条件项
    this.removeSelectedItems = function(){
        $("body").delegate("a.seriesCls", "click", function () {
            //var key = $(this).attr("data-key").split(':')[0];

            //var container = $(this).parent().parent().parent().siblings();

            //container.each(function () {
            //    var _key = $(this).find("div.le_sel_con1").attr("data-type");
            //    if (_key == key) {
            //        $(this).show();
            //        $(this).removeClass("le_sel_active");
            //        $(this).find("a.le_clickone.le_clickmore").removeClass("active");
            //    }
            //})
            //if ($(this).parent().find("a.le_clickdel").length == 1) {
            //    $(this).parent().parent().hide();
            //}

            //$(this).parent().parent().parent().siblings("a.le_sel_down").hide();
            //$(this).parent().parent().parent().siblings("a.le_sel_up").show();
            //$(this).remove();

            ////show all not choose Li list
            //var notChooseLis = getNotChooseLis().notChooseLis;
            //for (var i = 0; i < notChooseLis.length; i++) {
            //    $(notChooseLis[i]).show();
            //}

            that.removeLeaveSeries($(this).attr("data-key"));

            resetPageIndex();
            that.loadDataByParamsForInit();
        });
    }

    this.removeLeaveSeries = function (keyval) {
        for (var i = 0; i < that.filterArr.length; i++) {
            if (that.filterArr[i] == keyval) {
                that.filterArr.splice(i, 1);
                break;
            }
        }
    }


    this.setLeaveSeries = function () {
        if (that.filterArr.length > 0) {
            for (var i = 0; i < that.filterArr.length; i++) {
                var temp = that.filterArr[i].split(":");
                var key = temp[0];
                var val = temp[1];
                that.getDefaultParamsFromUrl(key, val);
            }
        }
    }

    //全部撤销
    this.cancelAllSelected = function(){
        $("body").delegate("a.le_allcancel","click",function(){
            //var li = $(this).parent().parent();
            //li.hide();
            //li.siblings().removeClass("le_sel_active").show();
            //li.siblings().find("a.le_clickone.le_clickmore").removeClass("active");

            //$(this).parent().parent().parent().siblings("a.le_sel_down").hide();
            //$(this).parent().parent().parent().siblings("a.le_sel_up").show();

            //$(this).parent().children("a.le_clickdel").remove();
            that.filterArr = [];
            resetPageIndex();
            that.loadDataByParamsForInit();
        })
    }

    //添加已选项到条件容器里
    this.appendSelectToContainer = function(el){
        var currentDiv = $(el).parent().prev();
        var type = currentDiv.attr("data-type");
        var nameCN = currentDiv.attr("data-name");
        var li = $(el).parent().parent().parent().children().eq("0");
        var val = $(el).attr("data-value");
        var name = $(el).attr("data-name");
        var chooseMoreTag = $(el).parent().parent().hasClass("le_sel_active");

        if(chooseMoreTag){
            if($(el).hasClass("active")){
                $(el).removeClass("active");
            }else{
                $(el).addClass("active");
            }
        }
        else{
            var data_key = type + ":" + val;
            that.filterArr.push(data_key);
            //var html = "<a class='le_clickdel seriesCls' data-key='"+data_key+"'><span>"+nameCN+"：</span><em>"+name+"</em><i tag='delSelected'></i></a>";

            //dealShowMore($(el).parent().parent().parent());

            //$(el).parent().parent().parent().find("li.le_sel_line1 div.le_sel_con2").prepend($(html));
            //$(el).parent().parent().hide();
            //li.show();
        }
    }

    function dealShowMore(ul){
        //处理更多选项
        if($(ul).siblings("a.le_sel_up").css("display") == "none"){
            var cel = getLastShowItems(ul);
            var cid = cel.find("div.le_sel_con1").attr("data-type");
            var notChooseLis = getNotChooseLis().notChooseLis;
            var chooseIndex =getChooseIndex(cid,getNotChooseLis().notChooseIds);
            if(notChooseLis.length == 4 ){
                that.currentDiv.find("a.le_sel_down").hide();
            }
            $(notChooseLis[chooseIndex + 1]).show();
        }
    }

    function getChooseIndex(id,ids){
        var index = -1;
        for(var i=0;i<ids.length;i++){
            if(id == ids[i]){
                index = i;
                break;
            }
        }
        return index;
    }

    function getNotChooseLis(){
        var  ids = getAllChoosedIds();
        that.currentDiv = null;
        $("div.le_sel.tab_list").each(function(){
            if($(this).css("display") != "none") {
                that.currentDiv =$(this);
            }
        })

        var notChooseLis = [];
        var notChooseIds = [];
        that.currentDiv.find("li").not(".le_sel_line1").each(function(){
            if(checkIdInChooseIds($(this).find("div").eq(0).attr("data-type"),ids) == false){
                notChooseLis.push($(this));
                notChooseIds.push($(this).find("div").eq(0).attr("data-type"));
            }
        })
        return {notChooseLis:notChooseLis,notChooseIds:notChooseIds};
    }

    function getLastShowItems(ul){
        var showLis = [];
        $(ul).find("li").not(".le_sel_line1").each(function(){
            if($(this).css("display")!= "none"){
                showLis.push($(this));
            }
        })
        return showLis[showLis.length-1];
    }

    //选择单个item
    this.selectedPriceEvent = function(){
        $("body").delegate("a.le_clickone.le_clickmore.le_clickprice", "click", function () {
            if ($(this).parent().prev().attr("data-type") == "-1") {
                var cat = "";
                if ($.trim(that._type) == "") {
                    cat = $(".tab_body .tab_list").attr("tag") + "-" + $(this).attr("data-value");
                } else {
                    cat = that._type + "-" + $(this).attr("data-value");
                }

                if (document.URL.indexOf('s.lenovo.com.cn') > -1) {
                    window.location = "http://s.lenovo.com.cn?key=" + that.globalKey + "&index=" + cat;
                } else {
                    window.location = "http://s.lenovouat.com?key=" + that.globalKey + "&index=" + cat;
                }
            } else if ($(this).parent().prev().attr("data-type") == "-2") {
                var catlist = that._type.split("-");
                catlist[catlist.length - 1] = $(this).attr("data-value");
                var cat = catlist.join("-");
                if (document.URL.indexOf('s.lenovo.com.cn') > -1) {
                    window.location = "http://s.lenovo.com.cn?key=" + that.globalKey + "&index=" + cat;
                } else {
                    window.location = "http://s.lenovouat.com?key=" + that.globalKey + "&index=" + cat;
                }
            } else {
                that.appendSelectToContainer(this);
                if (!$(this).parent().parent().hasClass("le_sel_active")) {
                    that.setType();
                    resetPageIndex();
                    that.loadDataByParamsForInit();
                }
            }
        })
    }

    //自定义价格的按钮事件
    this.selectPriceButton = function(){
        $("body").delegate("input.le_btn_sure.le_input_btn","click",function(){

            var priceLow = $(this).parent().find(".le_low").val().trim();
            var priceHigh = $(this).parent().find(".le_high").val().trim();

            if(parseInt(priceHigh)<=parseInt(priceLow)){
                alert("价格区间输入错误!");
                return;
            }

            if(!/^\d+$/.test(priceLow) || !/^\d+$/.test(priceHigh)){
                alert("请输入合法的价格!");
                return;
            }

            if(priceLow == "" || priceHigh == ""){
                alert("价格不允许为空!");
                return;
            }
            var currentDiv = $(this).parent().parent().prev();
            var type = currentDiv.attr("data-type");
            var nameCN = currentDiv.attr("data-name");
            var li = $(this).parent().parent().parent().parent().children().eq("0");
            var val = priceLow + "~"+ priceHigh;
            //var html = "<a class='le_clickdel seriesCls' data-key="+type+":"+val+"><span>"+nameCN+"：</span><em>"+val+"</em><i tag='delSelected'></i></a>";
            //var appendDivContainer = li.find("div.le_sel_con2");

            that.setType();
            var keyval = type + ":" + val;
            that.filterArr.push(keyval);

            //dealShowMore($(this).parent().parent().parent().parent());

            //appendDivContainer.prepend($(html));

            //$(this).parent().parent().parent().hide();
            //li.show();
            resetPageIndex();
            that.loadDataByParamsForInit();
        })
    }

    //其他选项的确定按钮事件
    this.selectOtherButton = function(){
        $("body").delegate("input.le_btn_sure","click",function(){
            if(!$(this).hasClass("le_input_btn")){
               var aList = $(this).parent().parent().find("a.active");
                if(aList.length == 0) return;
                var currentDiv = $(this).parent().parent().prev();
                var type = currentDiv.attr("data-type");
                var nameCN = currentDiv.attr("data-name");
                var li = $(this).parent().parent().parent().parent().children().eq("0");
                var appendDicContainer = li.find("div.le_sel_con2");
                var val = "";
                var name = "";

                for(var i =0;i<aList.length;i++){
                    val += $(aList[i]).attr("data-value") + "^";
                    name += $(aList[i]).attr("data-name") + ",";
                }
                val = val.substring(0,val.length-1);
                //name = name.substring(0,name.length-1);
                //var oldVal = name;

                //name.length >15 ? name = name.substring(0,12)+"...":name=name;
                //var html = "<a title='" + oldVal + "' class='le_clickdel seriesCls' data-key='" + type + ":" + val + "'><span>" + nameCN + "：</span><em>" + name + "</em><i tag='delSelected'></i></a>";

                that.setType();
                var keyval = type + ":" + val;
                that.filterArr.push(keyval);

                //dealShowMore($(this).parent().parent().parent().parent());

                //if(appendDicContainer.html().indexOf(val) == -1){
                //    appendDicContainer.prepend($(html));
                //}
                //$(this).parent().parent().parent().hide();
                //li.show();
                resetPageIndex();
                that.loadDataByParamsForInit();
            }
        })
    }

    this.delGlobalKey = function(){
        $("body").delegate("span.searchKeyRed","click",function(){
            if(that.index){
                window.location.href = $GRUNTCONFIG.PRODUCTION.lenovoSearchUrl+"?index="+that.index;
            }
            else{
                window.location.href = $GRUNTCONFIG.PRODUCTION.lenovoSearchUrl;
            }
        })
    }

    this.filterCharArray = ["Lenovo笔记本", "Think笔记本", "台式机", "平板电脑", "智能电视",  "智能数码", "打印机","我要服务"];

    function filterGlobalKey(key){
        var res = key;

        for(var i=0;i<that.filterCharArray.length;i++){
            if(res.toLowerCase() == that.filterCharArray[i].toLowerCase()){
                res = "";
                break;
            }
        }
        return res;
    }

    //init
    this.init = function(){
        this.globalKey = getQueryString("key").trim().replace(/[~'!<>@#$%^&*()-+_=:]/g, "");
        this.index = getQueryString("index").replace(/[~'!<>@#$%^&*()-+_=:]/g, "");

        //that.globalKey = filterGlobalKey(that.globalKey);

        if (this.globalKey) {
            document.title = that.globalKey + "- 联想商城搜索";
            $(".searchKeyRed").show();
        }else{
            $(".searchKeyRed").hide();
        }
        //$(".globalSearchKey").text(this.globalKey);


        this.setNaviAndSearchItemsCss(this.index);
        this.regEvent();

        that.setFiltersForInit();
        that.loadDataByParamsForFistInit();
        //that.fixPosition();
    }

    //排序
    this.sortEvent = function(){
        $("body").delegate("a[tag=proFilterSort]","click",function(){
            setSortClass($(this));
            that.sortNumber = $(this).attr("val");
            resetPageIndex();
            that.loadDataByParams();
        })
    }

    //获取所有已选的项的id集合
    function getAllChoosedIds(){
        var choosedIds = [];
        $("li.le_sel_line1 a.le_clickdel").each(function(){
            choosedIds.push($(this).attr("data-key").split(':')[0]);
        })
        return choosedIds;
    }

    function checkIdInChooseIds(id,ids){
        ids = ids.join(',');
        var bl = false;
        ids.indexOf(id) == -1 ? bl= false:bl= true;
        return bl;
    }

    this.showMoreLi = function(){
        $("body").delegate(".le_sel_down","click",function(){
            var arrIds = [];
            var ids = getAllChoosedIds();
            $(this).prev().find("li").not(".le_sel_line1").each(function(){
                arrIds.push($(this).children().eq(0).attr("data-type"));
                if(checkIdInChooseIds($(this).children().eq(0).attr("data-type"),ids) == false){
                    $(this).show();
                }
            })
            $(".le_sel_up").show();
            $(this).hide();
        })

        $("body").delegate(".le_sel_up","click",function(){
            var hideLis = [];
            $(this).prev().prev().find("li").not(".le_sel_line1").each(function(i){
                if($(this).css("display") != "none"){
                    hideLis.push($(this));
                }
            })

            for(var i=0;i<hideLis.length;i++){
                if(i<3){
                    $(hideLis[i]).show();
                }
                else{
                    $(hideLis[i]).hide();
                }
            }

            $(".le_sel_down").show();
            $(this).hide();
        })
    }

    this.paging = function(){
        //上一页
        $("body").delegate(".search_prev","click",function(){
            if(that.pageIndex <= 1){
                $(".search_prev").removeClass("active");
                return;
            }else{
                if($(".search_prev").hasClass("active") == false){
                    $(".search_prev").addClass("active");
                }
                that.pageIndex -= 1;
            }
            that.loadDataByParams();
        })

        //下一页
        $("body").delegate(".search_next","click",function(){
            if(that.pageIndex >= that.allPageCount){
                $(".search_next").removeClass("active");
                return;
            }else{
                if($(".search_next").hasClass("active") == false){
                    $(".search_next").addClass("active");
                }
                that.pageIndex += 1;
            }
            that.loadDataByParams();
        });

        //首页
        $("body").delegate(".first_page","click",function(){
            that.pageIndex = 1;
            that.loadDataByParams();
        });

        //尾页
        $("body").delegate(".last_page","click",function(){
            that.pageIndex = that.allPageCount;
            that.loadDataByParams();
        });
    }

    //是否有库存
    this.checkStock = function(){
        $("body").delegate("#checkStock","click",function(){
            resetPageIndex();
            that.loadDataByParamsForInit();
        });
    }

    //收藏
    this.storePro = function(){
        var flag = true;
        $("body").delegate("a[tag=storePro]","click",function(){
            if(flag == false) {
                return;
            }
            flag = false;
            var that = this;
            var isLogin = passport.isLogin();

            var isActive = $(this).hasClass("active");
            var gCode = $(this).attr("gcode");

            var plat = $(this).attr("platid");

            var furl = "";
            //if(plat == "8"){
            //    furl = $GRUNTCONFIG.PRODUCTION.favoriteThinkUrl;
            //}
            //if(plat == "4"){
            //    furl = $GRUNTCONFIG.PRODUCTION.favoriteLenovoUrl;
            //}
            furl = $GRUNTCONFIG.PRODUCTION.favoriteLenovoUrl;

            if(!isLogin){
                passport.show();
            }else{
                //取消收藏
                if(isActive){
                    $.ajax({
                        url:furl + "myfavorites/deletefavorites?gcode="+gCode + "&plat="+ plat,
                        type:"GET",
                        jsonp: "callbackparam",
                        dataType:"jsonp",
                        success:function(data) {
                            if(!data) return;
                            if(data.rc == "0"){
                                $(that).removeClass("active");
                            }
                            else{
                                alert("取消失败!");
                            }
                        }
                    });
                }
                //添加收藏
                else{
                    $.ajax({
                        url:furl + "myfavorites/addfavorites?gcode="+gCode + "&plat="+ plat,
                        type:"GET",
                        jsonp: "callbackparam",
                        dataType:"jsonp",
                        success:function(data) {
                            if(!data) return;
                            if(data.rc == "0"){
                                $(that).addClass("active");
                            }
                            else if(data.rc == "1"){
                                alert("赠品不可收藏!");
                            }
                            else{
                                alert("收藏失败!");
                            }
                        }
                    });
                }
            }
            window.setTimeout(function(){
                flag = true;
            },1000);
        });
    }

    //所有的事件注册
    this.regEvent = function(){
        this.tabChangedEvent();
        this.moreItemsEvent();
        this.cancelItemEvent();
        this.selectedPriceEvent();
        this.selectPriceButton();
        this.selectOtherButton();
        this.removeSelectedItems();
        this.cancelAllSelected();
        this.sortEvent();
        this.paging();
        this.innerKeyEvent();
        this.addCartEvent();
        this.productDetail();
        this.regCheckPriceNumber();
        this.checkStock();
        this.storePro();
        this.selectAll();
        this.delGlobalKey();
        this.showMoreLi();
    }

    this.selectAll = function(){
        $(".search_nav_con h1").css("cursor","pointer");
        $("body").delegate(".search_nav_con h1","click",function(){
            if(that.globalKey){
                window.location.href = $GRUNTCONFIG.PRODUCTION.lenovoSearchUrl+"?key="+encodeURIComponent(that.globalKey);
            }else{
                window.location.href = $GRUNTCONFIG.PRODUCTION.lenovoSearchUrl;
            }
        })
    }

    this.regCheckPriceNumber = function(){
        $("body").delegate(".le_low,.le_high","blur",function(e){
            var _span = $(this).parent().find("span.errorMsg");
            var fp = $(".le_sel.tab_list[tag=" + that.index + "]").find(".le_low").val().trim();
            var lp = $(".le_sel.tab_list[tag=" + that.index + "]").find(".le_high").val().trim();

            if(fp == "" && lp == ""){
                _span.hide().text("");
            }else if(fp != "" && lp == ""){
                if(!/^\d+$/.test(fp)){
                    _span.show().text("请输入合法的价格!");
                    //$(this).val("").focus();
                    return;
                }else{
                    _span.hide().text("");
                    $(this).val(parseInt(v));
                }
            }else if(fp == "" &&lp != ""){
                if(!/^\d+$/.test(lp)){
                    _span.show().text("请输入合法的价格!");
                    //$(this).val("").focus();
                    return;
                }else{
                    _span.hide().text("");
                    $(this).val(parseInt(v));
                }
            }else if(fp != "" &&lp != ""){
                if(!/^\d+$/.test(lp) || !/^\d+$/.test(fp)){
                    _span.show().text("请输入合法的价格!");
                    //$(this).val("").focus();
                    return;
                }else{
                    _span.hide().text("");
                    $(this).val(parseInt(v));
                }
            }
        })
    }

    function convertStar(num){
        num = parseFloat(num);
        return ((num*20)/100).toFixed(2)*100 + "%";
    }

    //获取文件名，无后缀
    function getFileName(o){
        var pos = o.lastIndexOf(".");
        return o.substring(0,pos);
    }

    //获取文件后缀
    function getFileextention(o) {
        var pos = o.lastIndexOf(".");
        return o.substring(pos);
    }


    //产品列表渲染方法
    this.render = function(data){
        this.container.html("");
        var html = "";
        for(var i =0;i<data.length;i++){

            var _tmp = "";
            if (document.URL.indexOf('s.lenovo.com.cn') > -1) {
                _tmp = $GRUNTCONFIG.PRODUCTION.lenovoDetail + data[i].code + ".html";
                if (data[i].detailType == "1") {
                    _tmp = $GRUNTCONFIG.PRODUCTION.thinkPadDetail + data[i].code + ".html";
                }
            }
            else {
                _tmp = $GRUNTCONFIG.UAT.lenovoDetail + data[i].code + ".html";
                if (data[i].detailType == "1") {
                    _tmp = $GRUNTCONFIG.UAT.thinkPadDetail + data[i].code + ".html";
                }
            }

            if (data[i].pcDetailUrl && $.trim(data[i].pcDetailUrl).length > 0) {//后端产生的url
                _tmp = data[i].pcDetailUrl;
            }

            html += "<li>";
            html += "<a href='"+_tmp+"' target='_blank' title='' latag='latag_pc_search_result_clickpic_"+data[i].code+"' class='search_pro_img'>";
            if(data[i].path){
                html += "<img style='cursor: pointer;' target='_blank' src='http://p1.lefile.cn" + getFileName(data[i].path) + ".w160xh160" + getFileextention(data[i].path) + "' gcode='" + data[i].code + "' platid='" + data[i].goodsPlat + "' alt='' /></a><div class='search_pro_name'>";
            }else{
                html += "<img style='cursor: pointer;' target='_blank' src='http://p1.lefile.cn/g1/M00/00/87/CmBZEFZgOc2ATUeIAAAJwF5r7O8764.jpg' platid='"+data[i].goodsPlat+"' gcode='"+data[i].code+"' alt='' /></a><div class='search_pro_name'>";
            }
            html += "<a href='"+_tmp+"' latag='latag_pc_search_result_clickname_"+data[i].code+"' target='_blank' style='cursor: pointer;' gcode='"+data[i].code+"'>"+data[i].name+"</a></div><div class='search_pro_mes'>";
            html += "<a target='_blank'>"+data[i].brief+"</a></div>";
            //html += "<div class='search_pro_price' style='font-size: 12px;color:gray;text-decoration:line-through;height:20px;'>媒体价: "+data[i].marketPrice+"</div>";
            if (data[i].isShowPrice == "1") {
                html += "<div class='search_pro_price' style='font-size: 14px;'>商城价: " + data[i].pcPrice + "</div><div class='search_pro_comment clearfix'>";
            } else if (data[i].isShowPrice == "0") {
                html += "<div class='search_pro_price' style='font-size: 14px;'>商城价: 暂无报价</div><div class='search_pro_comment clearfix'>";
            }
            //html += "<div class='search_pro_star'><div style='width:"+convertStar(data[i].evaluateNum)+";'></div></div>";
            //html += "<span class='search_blue'>已有"+data[i].commentNum+"人评价</span>";
            html += "</div><div class='search_pro_btn clearfix'>";
            if(parseInt(data[i].stockNum) ==0) {
                html += "<a latag='latag_pc_search_result_addcart_" + data[i].code + "' class='search_btn_car' style='cursor: pointer;color:#dadada;background-image: url();' salestype='" + data[i].salesType + "' activityType='" + data[i].activityType + "' detailType='" + data[i].detailType + "'  mallType='" + data[i].mallType + "' isOldForNew='" + data[i].isOldForNew + "' gcode='" + data[i].code + "'>暂无库存</a>";
                html += "<a favtag='1' gcode='"+data[i].code+"' latag='latag_pc_search_result_addfavorite_"+data[i].code+"' tag='storePro' platid='"+data[i].goodsPlat+"' class='search_btn_focus' >收藏</a>";
            }else{
                //html += "<a latag='latag_pc_search_result_addcart_" + data[i].code + "' class='search_btn_car addcartCls' salestype='" + data[i].salesType + "' activityType='" + data[i].activityType + "' detailType='" + data[i].detailType + "'  mallType='" + data[i].mallType + "' isOldForNew='" + data[i].isOldForNew + "' gcode='" + data[i].code + "' platid='" + data[i].goodsPlat + "' tag='addCart'>加入购物车</a>";
                //html += "<a favtag='1' gcode='"+data[i].code+"' latag='latag_pc_search_result_addfavorite_"+data[i].code+"' tag='storePro' platid='"+data[i].goodsPlat+"' class='search_btn_focus'>收藏</a>";
                html += "<a href='" + _tmp + "' target='_blank'  class='search_btn_car addcartCls' style='background-image:url();' >查看详情</a>";
                html += "<a favtag='1' gcode='" + data[i].code + "' latag='latag_pc_search_result_addfavorite_" + data[i].code + "' tag='storePro' platid='" + data[i].goodsPlat + "' class='search_btn_focus' >收藏</a>";
            }


            //html += "<a class='search_btn_compare active'>对比</a>"; 
            html += "</div>";
            if (data[i].saleReduce == "1") {
                html += "<img src='css/icons/lijian.png' class='markimg' />";
            } else if (data[i].fullReduce == "1") {
                html += "<img src='css/icons/manjian.png' class='markimg' />";
            } else if (data[i].pcCoupon == "1") {
                html += "<img src='css/icons/youhuiquan.png' class='markimg' />";
            } else if (data[i].isGift == "1") {
                html += "<img src='css/icons/zengpin.png' class='markimg' />";
            }
            html += "</li>";
        }
        $(this.container).append($(html));
    }

    //产品列表渲染方法
    this.renderForEmpty = function (data) {
        var html = "";
        for (var i = 0; i < data.length; i++) {

            var _tmp = "";
            if (document.URL.indexOf('s.lenovo.com.cn') > -1) {
                _tmp = $GRUNTCONFIG.PRODUCTION.lenovoDetail + data[i].code + ".html";
                if (data[i].detailType == "1") {
                    _tmp = $GRUNTCONFIG.PRODUCTION.thinkPadDetail + data[i].code + ".html";
                }
            }
            else {
                _tmp = $GRUNTCONFIG.UAT.lenovoDetail + data[i].code + ".html";
                if (data[i].detailType == "1") {
                    _tmp = $GRUNTCONFIG.UAT.thinkPadDetail + data[i].code + ".html";
                }
            }

            if (data[i].pcDetailUrl && $.trim(data[i].pcDetailUrl).length > 0) {//后端产生的url
                _tmp = data[i].pcDetailUrl;
            }

            html += "<li>";
            html += "<a href='" + _tmp + "' target='_blank' title='' latag='latag_pc_search_result_clickpic_" + data[i].code + "' class='search_pro_img'>";
            if (data[i].path) {
                html += "<img style='cursor: pointer;' target='_blank' src='http://p1.lefile.cn" + getFileName(data[i].path) + ".w160xh160" + getFileextention(data[i].path) + "' gcode='" + data[i].code + "' platid='" + data[i].goodsPlat + "' alt='' /></a><div class='search_pro_name'>";
            } else {
                html += "<img style='cursor: pointer;' target='_blank' src='http://p1.lefile.cn/g1/M00/00/87/CmBZEFZgOc2ATUeIAAAJwF5r7O8764.jpg' platid='" + data[i].goodsPlat + "' gcode='" + data[i].code + "' alt='' /></a><div class='search_pro_name'>";
            }
            html += "<a href='" + _tmp + "' latag='latag_pc_search_result_clickname_" + data[i].code + "' target='_blank' style='cursor: pointer;' gcode='" + data[i].code + "'>" + data[i].name + "</a></div>";
            if (data[i].isShowPrice == "1") {
                html += "<div class='search_pro_price' style='font-size: 14px;'>￥" + data[i].pcPrice + "</div><div class='search_pro_comment clearfix'></div>";
            } else if (data[i].isShowPrice == "0") {
                html += "<div class='search_pro_price' style='font-size: 14px;'>暂无报价</div><div class='search_pro_comment clearfix'></div>";
            }

            if (data[i].saleReduce == "1") {
                html += "<img src='css/icons/lijian.png' class='markimg' />";
            } else if (data[i].fullReduce == "1") {
                html += "<img src='css/icons/manjian.png' class='markimg' />";
            } else if (data[i].pcCoupon == "1") {
                html += "<img src='css/icons/youhuiquan.png' class='markimg' />";
            } else if (data[i].isGift == "1") {
                html += "<img src='css/icons/zengpin.png' class='markimg' />";
            }
            html += "</li>";
        }
        $(".noresult_sugguest ul").html(html);
    }



    this.addCartEvent = function(){
        $("body").delegate("a[tag=addCart]","click",function(){
            var _self = this;
            var mallType = $(this).attr("mallType");
            var detailType = $(this).attr("detailType");
            var activityType = $(this).attr("activityType");
            var isOldForNew = $(this).attr("isOldForNew");

            if ($(this).attr("salestype") == "0" && activityType == "0" && isOldForNew == "0") {
                var addUrl = "";
                //if (mallType == "2") {
                //    if (document.URL.indexOf('s.lenovo.com.cn') > -1) {
                //        addUrl = $GRUNTCONFIG.PRODUCTION.thinkCartUrl;
                //    } else {
                //        addUrl = $GRUNTCONFIG.UAT.thinkCartUrl;
                //    }
                //}
                //else {
                //    if (document.URL.indexOf('s.lenovo.com.cn') > -1) {
                //        addUrl = $GRUNTCONFIG.PRODUCTION.lenovoCartUrl;
                //    } else {
                //        addUrl = $GRUNTCONFIG.UAT.lenovoCartUrl;
                //    }
                //}
                if (document.URL.indexOf('s.lenovo.com.cn') > -1) {
                    addUrl = $GRUNTCONFIG.PRODUCTION.lenovoCartUrl;
                } else {
                    addUrl = $GRUNTCONFIG.UAT.lenovoCartUrl;
                }

                $.ajax({
                    type: "GET",
                    url: addUrl + "additemtocart.jhtml?ran=" + new Date().getMilliseconds(),
                    data: {
                        itemtype: 0,
                        gcodes: $(_self).attr("gcode"),
                        icount: 1
                    },
                    dataType: "jsonp",
                    jsonp: 'callbackparam',
                    success: function (data) {
                        if (data.rc == 0) {
                            if (addUrl == "") {
                                return;
                            }
                            window.location.href = addUrl + "getcart.jhtml?plat=" + that.plat;
                        }
                    }
                })

            }else{
                if (detailType == "1") {
                    if (document.URL.indexOf('s.lenovo.com.cn') > -1) {
                        window.location.href = $GRUNTCONFIG.PRODUCTION.thinkPadDetail + $(this).attr("gcode") + ".html";
                    }
                    else {
                        window.location.href = $GRUNTCONFIG.UAT.thinkPadDetail + $(this).attr("gcode") + ".html";
                    }

                    //window.location.href = $GRUNTCONFIG.PRODUCTION.thinkPadDetail + $(this).attr("gcode") + ".html";
                }
                else {
                    if (document.URL.indexOf('s.lenovo.com.cn') > -1) {
                        window.location.href = $GRUNTCONFIG.PRODUCTION.lenovoDetail + $(this).attr("gcode") + ".html";
                    }
                    else {
                        window.location.href = $GRUNTCONFIG.UAT.lenovoDetail + $(this).attr("gcode") + ".html";
                    }
                }
            }
        })
    }

    this.productDetail = function(){
        $("body").delegate("[tag=detail]","click",function(){
            var plat = $(this).attr("platid");
            var gcode = $(this).attr("gcode");
            if(plat == "8"){
                window.location.href = $GRUNTCONFIG.PRODUCTION.thinkPadDetail + gcode + ".html";
            }else{
                window.location.href = $GRUNTCONFIG.PRODUCTION.lenovoDetail + gcode + ".html";
            }
        });
    }

    this.innerKeyEvent = function(){
        $("body").delegate("#searchproductsButton","click",function(){
            if($(this).val().trim() == ""){
                return;
            }
            else{
                $("span[pageindextag=pageIndex]").text(1);
                that.pageIndex = 1;
                that.loadDataByParams();
            }
        })
    }

    function resetPageIndex(){
        $("span[pageindextag=pageIndex]").text(1);
        $("#keyInResult").val("");
        that.pageIndex = 1;
    }

    this.setType = function () {//设置分类
        if ($.trim(that._type) == "") {
            that._type = $(".le_sel.tab_list").attr("tag");
        }
    }


    this.getParameters = function () {
        var result = getItemsParams();
        var data = {
            specifiedType: 0,
            shopid: 1,
            key: that.globalKey,
            innerKey: $("#keyInResult").val(),
            filterV2: result.items,
            stort: that.sortNumber,
            cat: that._type,
            page: that.pageIndex,
            pageSize: that.pageSize,
            isStock: $("#checkStock").get(0).checked,
            leid: getLeid(),
            plat: 4
        }
        return data;
    }

    this.loadDataByParams = function () {

        var url = "/search/v2";
        var data = that.getParameters();
        data.refresh = false;

        $.ajax({
            url: url,
            type: "get",
            data: data,
            dataType: "json",
            //async: false,
            success: function (d) {
                d = eval("("+d+")");
                if(d.rc != "0"){
                    $("#searchProCount").text(0);
                    $("span[pageCountTag=pageCount]").text(1);
                    $("span[pageindextag=pageIndex]").text(1);
                    that.container.html("<h1 style='margin-left: 10px;text-align: center;color: red;'>服务器异常，工程师正在努力排查中....</h1>");
                    return;
                }

                //$("div.tab_body").html(d.filter);//过滤条件

                if(d.items.length == 0){
                    $("#searchProCount").text(0);
                    $("span[pageCountTag=pageCount]").text(1);
                    that.container.html("<h1 style='margin-left: 10px;text-align: center;color: red;'>抱歉，没有找到相关的商品！</h1>");
                    return;
                }
                that.render(d.items);
                $("span[pageIndexTag=pageIndex]").text(that.pageIndex);
                $("#searchProCount").text(d.totalNum);
                var count  = 0;
                parseInt(d.totalNum)%that.pageSize == 0?count = parseInt(d.totalNum)/that.pageSize:count = parseInt(parseInt(d.totalNum)/that.pageSize)+1;
                that.allPageCount = count;
                setPagingClass();

                $(".searchCount").text(d.totalNum);

                //收藏
                var gCodes = getgCode(d.items).join(',');

                //登录状态显示是否登录
                if(passport.isLogin()){
                    $.ajax({
                        url:$GRUNTCONFIG.PRODUCTION.favoriteLenovoUrl + "myfavorites/findallfavorites?gcodes="+gCodes + "&plat="+ that.plat + "&ran="+Math.random(),
                        type:"GET",
                        jsonp: "callbackparam",
                        dataType:"jsonp",
                        success:function(data) {
                            if(data){
                                resetFavoriteClass(data);
                            }
                        }
                    });
                }
            },
            error:function(){
                that.container.html("<h1 style='margin-left: 10px;text-align: center;color: red;'>出错啦，工程师正在努力解决中....</h1>");
            }
        })
    }


    this.loadDataByParamsForInit = function () {
        var url = "/search/v2";
        var data = that.getParameters();
        //data.filterV2 = that.filtersForInit;
        data.refresh = true;

        $.ajax({
            url: url,
            type: "get",
            data: data,
            dataType: "json",
            async: false,
            success: function (d) {
                d = eval("(" + d + ")");
                if (d.rc != "0") {
                    $("#searchProCount").text(0);
                    $("span[pageCountTag=pageCount]").text(1);
                    $("span[pageindextag=pageIndex]").text(1);
                    that.container.html("<h1 style='margin-left: 10px;text-align: center;color: red;'>服务器异常，工程师正在努力排查中....</h1>");
                    $(".search_tab,.hot_container").show();
                    return;
                }

                //$(".search_result_nav").html(that.setSearchResultNav(d.crumb, d.crumbIndex));//搜索条件导航
                $("div.tab_body").html(d.filter);//过滤条件

                if (d.items.length == 0 || d.totalNum == 0) {
                    $("#searchProCount").text(0);
                    $("span[pageCountTag=pageCount]").text(1);
                    that.container.html("<h1 style='margin-left: 10px;text-align: center;color: red;'>抱歉，没有找到相关的商品！</h1>");
                    $(".search_tab,.hot_container").show();

                    that.setLeaveSeries();
                    return;
                }
                $(".search_tab,.hot_container").show();
                that.render(d.items);
                $("span[pageIndexTag=pageIndex]").text(that.pageIndex);
                $("#searchProCount").text(d.totalNum);
                var count = 0;
                parseInt(d.totalNum) % that.pageSize == 0 ? count = parseInt(d.totalNum) / that.pageSize : count = parseInt(parseInt(d.totalNum) / that.pageSize) + 1;
                that.allPageCount = count;
                setPagingClass();

                $(".searchCount").text(d.totalNum);

                that.setLeaveSeries();

                //收藏
                var gCodes = getgCode(d.items).join(',');

                //登录状态显示是否登录
                if (passport.isLogin()) {
                    $.ajax({
                        url: $GRUNTCONFIG.PRODUCTION.favoriteLenovoUrl + "myfavorites/findallfavorites?gcodes=" + gCodes + "&plat=" + that.plat + "&ran=" + Math.random(),
                        type: "GET",
                        jsonp: "callbackparam",
                        dataType: "jsonp",
                        success: function (data) {
                            if (data) {
                                resetFavoriteClass(data);
                            }
                        }
                    });
                }
            },
            error: function () {
                that.container.html("<h1 style='margin-left: 10px;text-align: center;color: red;'>出错啦，工程师正在努力解决中....</h1>");
                $(".search_tab,.hot_container").show();
            }
        });
    }


    this.loadDataByParamsForFistInit = function () {
        var url = "/search/v2";
        var data = that.getParameters();
        //data.filterV2 = that.filtersForInit;
        data.refresh = true;

        $.ajax({
            url: url,
            type: "get",
            data: data,
            dataType: "json",
            async: false,
            success: function (d) {
                d = eval("(" + d + ")");
                if (d.rc != "0") {
                    $("#searchProCount").text(0);
                    $("span[pageCountTag=pageCount]").text(1);
                    $("span[pageindextag=pageIndex]").text(1);
                    that.container.html("<h1 style='margin-left: 10px;text-align: center;color: red;'>服务器异常，工程师正在努力排查中....</h1>");
                    $(".search_tab,.hot_container").show();
                    return;
                }

                $(".search_result_nav").html(that.setSearchResultNav(d.crumb, d.crumbIndex));//搜索条件导航
                $("div.tab_body").html(d.filter);//过滤条件

                if (d.items.length == 0 || d.totalNum == 0) {
                    if (that.index == "") {
                        var resultType = d.resultType;
                        var emptyTitle = "抱歉！没有找到与<span>" + that.globalKey + "</span>相关的商品，您可以看看联想商城正在热卖的商品：";
                        if (resultType == "1") {
                            emptyTitle = that.globalKey + "商品正在赶来的路上... 去 <a href='http://www.zuk.com/store/?hmsr=lenovosearch' target='_blank'>手机商城</a> 查看 或者 看看联想商城正在热卖的商品："
                        } else if (resultType == "0") {
                            if (that.globalKey == "昭阳") {
                                emptyTitle = that.globalKey + "商品正在赶来的路上... 去 <a href='http://appserver.lenovo.com.cn/Lenovo_Brand_List.aspx?CategoryID=14' target='_blank'>联想产品库</a> 查看 或者 看看联想商城正在热卖的商品："
                            } else if (that.globalKey == "扬天") {
                                emptyTitle = that.globalKey + "商品正在赶来的路上... 去 <a href='http://appserver.lenovo.com.cn/Lenovo_Brand_List.aspx?CategoryID=10' target='_blank'>联想产品库</a> 查看 或者 看看联想商城正在热卖的商品："
                            } else if (that.globalKey == "启天") {
                                emptyTitle = that.globalKey + "商品正在赶来的路上... 去 <a href='http://appserver.lenovo.com.cn/Lenovo_Brand_List.aspx?CategoryID=16' target='_blank'>联想产品库</a> 查看 或者 看看联想商城正在热卖的商品："
                            } else if (that.globalKey == "ThinkStation") {
                                emptyTitle = that.globalKey + "商品正在赶来的路上... 去 <a href='http://appserver.lenovo.com.cn/Lenovo_Brand_List.aspx?CategoryID=11' target='_blank'>联想产品库</a> 查看 或者 看看联想商城正在热卖的商品："
                            }
                        }

                        $(".search_nolist .noresut_tipinfo").html(emptyTitle);

                        $.ajax({
                            url: "/search/selHotGoods",
                            type: "get",
                            dataType: "json",
                            data: { plat: 4, resultType: resultType },
                            success: function (res) {
                                res = eval("(" + res + ")");
                                if (res.rc == 0) {
                                    if (res.items.length > 0) {
                                        that.renderForEmpty(res.items);
                                    }
                                }
                            }
                        });

                        $(".search_nolist").show();
                    } else {
                        $("#searchProCount").text(0);
                        $("span[pageCountTag=pageCount]").text(1);
                        that.container.html("<h1 style='margin-left: 10px;text-align: center;color: red;'>抱歉，没有找到相关的商品！</h1>");
                        $(".search_tab,.hot_container").show();
                        return;
                    }
                    that.setLeaveSeries();
                    return;
                }
                $(".search_tab,.hot_container").show();
                that.render(d.items);
                $("span[pageIndexTag=pageIndex]").text(that.pageIndex);
                $("#searchProCount").text(d.totalNum);
                var count = 0;
                parseInt(d.totalNum) % that.pageSize == 0 ? count = parseInt(d.totalNum) / that.pageSize : count = parseInt(parseInt(d.totalNum) / that.pageSize) + 1;
                that.allPageCount = count;
                setPagingClass();

                $(".searchCount").text(d.totalNum);
                that.setLeaveSeries();

                //收藏
                var gCodes = getgCode(d.items).join(',');

                //登录状态显示是否登录
                if (passport.isLogin()) {
                    $.ajax({
                        url: $GRUNTCONFIG.PRODUCTION.favoriteLenovoUrl + "myfavorites/findallfavorites?gcodes=" + gCodes + "&plat=" + that.plat + "&ran=" + Math.random(),
                        type: "GET",
                        jsonp: "callbackparam",
                        dataType: "jsonp",
                        success: function (data) {
                            if (data) {
                                resetFavoriteClass(data);
                            }
                        }
                    });
                }
            },
            error: function () {
                that.container.html("<h1 style='margin-left: 10px;text-align: center;color: red;'>出错啦，工程师正在努力解决中....</h1>");
                $(".search_tab,.hot_container").show();
            }
        });
    }


    this.setSearchResultNav = function (crumbname, crumbIndex) {
        var html = ">";
        if (crumbname && crumbIndex && crumbname!="null" && crumbIndex!="null"  &&  $.trim(crumbname) != "" && $.trim(crumbIndex) != "") {
            var crumbname_list = crumbname.split(">");
            var crumbindex_list = crumbIndex.split(",");
            if (crumbindex_list.length > 0 && crumbname_list.length > 0) {
                for (var i = 0; i < crumbindex_list.length ; i++) {
                    html += "<a href='/?index=" + crumbindex_list[i] + "&key=" + that.globalKey + "'>" + crumbname_list[i] + "</a>>";
                }
                //html += crumbname_list[crumbname_list.length - 1] + ">";
            }
        }
        if (that.globalKey != "") {
            html += '"' + that.globalKey + '"';
        } else {
            if (html != ">") {
                html = html.substring(0, html.length - 1);
            }

        }

        if (html == ">") {
            html = "";
        }

        return html;
    }


    this.checkParamsValid = function(key){
        var bl = false;
        var container = getCurrentSeriesContainer();
        container.find("div.le_sel_con1").each(function(){
            if(key == $(this).attr("data-type")){
                bl = true;
                return false;
            }
        })
        return bl;
    }


    this.setFiltersForInit = function () {
        var url = window.location.href;
        if (url.indexOf('?') == -1) return;
        var params = url.substring(url.indexOf('?') + 1).split('&');
        var parameters = "";
        for (var i = 0; i < params.length; i++) {
            var key = params[i].split('=')[0];
            if (key && key != "index" && key != "key" && key != "from" && key != "fromoldsearch" && key != "fromhomepage") {
                that.filterArr.push(that.getParamsFromUrlForInit(key, decodeURIComponent(params[i].split('=')[1])));
                //this.appendSelectToContainer(el);
            }
        }
    }

    this.getParamsFromUrlForInit = function (key, val) {
        var keyVal = key + ":" + val.replace(/\|/g, ",");
        return keyVal;
    }


    this.fixPosition = function(){
        //var url = window.location.href;
        //if(url.indexOf('?')==-1) return;
        //var params = url.substring(url.indexOf('?')+1).split('&');
        //for(var i=0;i<params.length;i++){
        //    var key = params[i].split('=')[0];
        //    if (key && key != "index" && key != "key" && key != "from" && key != "fromoldsearch" && this.checkParamsValid(key)) {
        //        var el = getDefaultParamsFromUrl(key,decodeURIComponent(params[i].split('=')[1]));
        //        //this.appendSelectToContainer(el);
        //    }
        //}

        var url = window.location.href;
        if(url.indexOf('?')==-1) return;
        var params = url.substring(url.indexOf('?') + 1).split('&');
        for(var i=0;i<params.length;i++){
            var key = params[i].split('=')[0];
            if (key && key != "index" && key != "key" && key != "from" && key != "fromoldsearch" && key != "fromhomepage") {
                var el = that.getDefaultParamsFromUrl(key, decodeURIComponent(params[i].split('=')[1])) + "@";
                //this.appendSelectToContainer(el);
            }
        }
    }

    this.getDefaultParamsFromUrl=function(key, val) {
        if(key == that.from || val == "undefined"){
            return;
        }
        var vals = [];
        if(val.indexOf('^') == -1){
            vals.push(val);
        }
        else{
            vals = val.split('^');
        }

        var serType = "";
        //根据name获取value
        var _cval = [];
        var container = $(".tab_body").find("div.tab_list");
        $("div.tab_list li.clearfix").each(function () {
            if (key == $(this).find("div.le_sel_con1").attr("data-type")) {
                serType = $(this).find("div.le_sel_con1").attr("data-name")
                $(this).find("div.le_sel_con2 a").each(function () {
                    _cval.push({ key: $(this).attr("data-name"), val: $(this).attr("data-value") });
                })
            }
        });
        var str = [];
        for(var i=0;i<vals.length;i++){
            for (var j = 0; j < _cval.length; j++) {
                if (_cval[j].val == vals[i].replace(/\|/g, "^")) {
                    str.push(_cval[j].key);
                }
            }
        }

        //append to container
        var keyVal = key + ":" + val.replace(/\|/g, "^");
        var html = "";
        if (val.indexOf("~") > -1) {
            html = "<a title='" + str.join(',') + "' class='le_clickdel seriesCls' data-key='" + keyVal + "'>";
            html += "<span>价格：</span><em>" + val + "元</em><i tag='delSelected'></i></a>";
        } else {
            html = "<a title='" + str.join(',') + "' class='le_clickdel seriesCls' data-key='" + keyVal + "'>";
            html += "<span>" + serType + "：</span><em>" + str.unique().join(',') + "</em><i tag='delSelected'></i></a>";
        }
        var el = container;
        el.find("li.le_sel_line1").show();
        el.find("li.le_sel_line1 div.le_sel_con2").prepend($(html));

        //hide this series
        el.find("li.clearfix").each(function(){
            if($(this).find("div.le_sel_con1").attr("data-type") == key){
                $(this).hide();
            }
        })
    }

    function getCurrentSeriesContainer(){
        var el  = null;
        $(".tab_list").each(function(){
            if($(this).css("display") == "block"){
                el = $(this);
                return false;
            }
        })
        return el;
    }

    function resetFavoriteClass(data){
        $("#productList").find("a[favtag=1]").each(function(i){
            if(data[i].rc == "0"){
                $(this).addClass("active");
            }
        })
    }

    function getgCode(data){
        var res = [];
        for(var i=0;i<data.length;i++){
            res.push(data[i].code);
        }
        return res;
    }
}

var ctl = new searchController();
ctl.init();

