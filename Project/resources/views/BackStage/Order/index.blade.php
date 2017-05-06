@extends('BackStage.base.parent')
@section('content')
	<div class="block-area" id="tableHover">
        <h3 class="block-title">电脑信息列表</h3>
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
        <div class="table-responsive overflow">
        	<form action='/backstage/order' method='post' name='myform'>
        		{{ csrf_field() }}
        		{{ method_field('DELETE') }}
        	</form>

        	<form action='/backstage/order' method='get'>
        		<div class='medio-body'>
    				订单号：<input type='text' class='form-control input-sm m-b-10' name='Order_number'>
    			</div>
        		<input type='submit' class='btn' value='搜索'>
        	</form>
            <table class="table table-bordered table-hover tile">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>订单号</th>
                        <th>订单状态</th>
                        <th>商品数量</th>
                        <th>商品名称</th>
                        <th>收货人姓名</th>
                        <th>详细地址</th>
                        <th>电话</th>
                        <th>商品总计</th>
                        <th>下单时间</th>
                        <th>操作</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($list as $v)
                    	<tr>
	                        <td>{{ $v->Order_id }}</td>
	                        <td>{{ $v->Order_number }}</td>
                            <td>{{ $v->Order_state }}</td>
                            <td>{{ $v->Order_goodsnum }}</td>
                            <td>{{ $v->Order_goodsname }}</td>
                            <td>{{ $v->Order_name }}</td>
                            <td>{{ $v->Order_detail }}</td>
                            <td>{{ $v->Order_tel }}</td>
                            <td>{{ $v->Order_total }}</td>
                            <td>{{ $v->Order_time }}</td>
                            <td>
	                        	<a class="btn btn-sm btn-alt m-r-5" href='javascript:doDel({{ $v->Order_id }})'>删除</a>
	                        	<a class="btn btn-sm btn-alt m-r-5" href='/backstage/order/{{ $v->Order_id }}/edit'>修改</a>
	                        </td>
	                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $list->appends($where)->links() }}
        </div>
    </div>
    <script type="text/javascript">
        function doDel(id){
        	if(confirm('确定删除吗？')){
        		var form = document.myform;
        		form.action = '/backstage/order/'+id;
        		form.submit();
        	}
        }
    </script>
@endsection