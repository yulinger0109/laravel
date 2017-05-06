@extends('Home.base.parent')
@section('content')
<!-- location start -->
<div class="search_location">
    <a href="/">首页</a>&gt;<a href="">笔记本</a>&gt;<span>"笔记本"</span>
</div>
<!-- location end -->

<!-- location end -->
<div class="search_main clearfix search_tab"  style="display:block;">
    <div class="search_right">
        <div class="search_result">
            <div class="search_result_left">
                <a href="/">全部结果</a><span class="search_result_nav"></span>
<!--                <span class="searchKeyRed"style="display: none;"><em class="globalSearchKey"></em><i class="del"></i></span>-->
            </div>
            <div class="search_result_right">共<span id="searchProCount" class="searchResultCountColor searchCount"></span>款产品</div>
        </div>
        <div class="tab_body">
            <!-- 过滤条件部分 -->
            <form action="/pclist" method="get">
                    <div class="tab_body"><div class="le_sel tab_list" tag="293"><ul><li class="clearfix le_sel_line1" style="display: none;"><div class="le_sel_con1">已选条件:</div><div class="le_sel_con2"><a href="javascript:;" class="le_allcancel">全部撤销</a></div></li><li class="clearfix"><div class="le_sel_con1" data-name="笔记本" data-type="-1">电脑：</div><div class="le_sel_con2"><input  type="text" name="Goods_name" placeholder="请输入电脑名称"></div></li><li class="clearfix"><div class="le_sel_con1" data-name="价格" data-type="1066">价格：</div><div class="le_sel_con2"><div style="float:left;"><label><input class="le_low" type="text" name="Goods_price[]"><span></span><input class="le_high" type="text" name="Goods_price[]"><input type="submit" value="确定"  type="button"><span class="errorMsg"></span></label></div></div></li>
				</form>
        </div>
        <div class="search_protitle clearfix">
            <div class="search_protitle_left">
                <a latag="latag_pc_search_result_orderby_综合排序" val="0" tag="proFilterSort">综合</a>
                <a latag="latag_pc_search_result_orderby_价格" val="3" tag="proFilterSort">按价格由高到低</a>
                <a latag="latag_pc_search_result_orderby_价格" val="4" tag="proFilterSort" style="border-right:0;">按价格由低到高</a>
                <label><input type="checkbox" id="checkStock"  /><em>有库存</em></label>
            </div>
            <div class="search_protitle_center">
                <input id="keyInResult" type="text" latag="latag_pc_search_result_input" placeholder="在结果中搜索" />
                <input id="searchproductsButton" latag="latag_pc_search_result_inputconfirm" type="button" value="确定"/>
            </div>  
        </div>
        <div class="search_pro">
            <div class="search_pro_con">
                <ul class="clearfix" >
                    <form action="/home/collect" method="post" name="myform">
                    {{ csrf_field() }}
                    <input type="hidden" name="Collect_gid" value="">
                    </form>
                <!-- 商品遍历列表页 -->
                @foreach ($list as $v)
                <li style="font-size:11px;"><img src="/admin/upload/{{ explode(',',($v->Goods_pic))[0] }}" width="200" height="200" alt=""><div>商品名:{{ $v->Goods_name }}</div><div>商品简介:<br>{{ $v->Goods_body }}</div><div style="color:red;">商品价格:{{ $v->Goods_price }}</div><div><a href="/details/{{ $v->Goods_id }}">查看详情</a> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<a href="javascript:doStore({{ $v->Goods_id }})">收藏</a></div></li>
                @endforeach

                </ul>
            </div>
        </div>
        <div style="float:right;margin:0px;display:inline-block;padding-left:0px;" >
        <ul>
        	<li style="display:inline;"><a href="http://cplenovo.com/pclist?@if(!empty($where['Goods_name']))Goods_name={{ $where['Goods_name'] }} &@endif @if(!empty($where['Goods_price']))Goods_price[]={{ $where['Goods_price'][0] }}&Goods_price[]={{ $where['Goods_price'][1] }} &@endif page=1"><<</a></li>
        	@for($i = 0;$i < $count;$i++)
        	<li style="display:inline;"><a href="http://cplenovo.com/pclist?@if(!empty($where['Goods_name']))Goods_name={{ $where['Goods_name'] }} &@endif @if(!empty($where['Goods_price']))Goods_price[]={{ $where['Goods_price'][0] }}&Goods_price[]={{ $where['Goods_price'][1] }}&@endif page={{ $i+1 }}">{{ $i+1 }}</a></li>
        	@endfor
        	
        	<li style="display:inline;"><a href="http://cplenovo.com/pclist?@if(!empty($where['Goods_name']))Goods_name={{ $where['Goods_name'] }} &@endif @if(!empty($where['Goods_price']))Goods_price[]={{ $where['Goods_price'][0] }}&Goods_price[]={{ $where['Goods_price'][1] }}&@endif page={{ $count }}">>></a></li>
        </ul>
        <!-- {{ $list->appends($where)->links() }} -->
        </div>
    </div>
</div>


<div class="search_main clearfix search_nolist">
    <div class="noresut_tipinfo"></div>
    <div class="noresult_sugguest">
        <ul>

        </ul>
        <div class="clearfix"></div>
    </div>
</div>
<script type="text/javascript">
    function doStore(id){
            if(confirm('确定收藏吗？')){
                $('input[name="Collect_gid"]').val(id);
                var form = document.myform;
                form.action = "/home/collect";
                form.submit();
           };
        };
</script>
@endsection