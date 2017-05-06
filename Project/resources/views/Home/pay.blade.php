
@extends('Home.base.parent')
@section('content')
	<form action="/pay" method="post" style="display:none" name="myform">
		{{ csrf_field() }}
		{{ method_field('PUT') }}
	</form>
	<div style="float:left">
		<img src="/Home/images/pay.jpg" alt="" width="500px">
	</div>
	<div style="float:left">
		<span style="font-size:25px;">收货地址：{{ $list->User_address }}</span><br>
		<span style="font-size:25px;">共计金额：{{ $order->Order_total }}元</span><br>
		<span style="font-size:25px;">订单号：{{ $order->Order_number }}</span><br>
	</div>
	<a href="javascript:dopay({{ $Order_id }})"><input type="button" height="100px" value="付款" style="font-size:25px;clear:both;float:right;margin-right:100px"></a>
	<div style="clear:both"></div>
<script>
	function dopay(id)
	{
		if (confirm('确认付款')) {
			form = document.myform;
		form.action = "/pay/"+id;
		form.submit();
		}
	};
		
</script>
@endsection