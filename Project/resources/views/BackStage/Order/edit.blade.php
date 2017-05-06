@extends('BackStage.base.parent')
@section('content')
	<!-- Text Input -->
    <div class="block-area" id="text-input">
        <h3 class="block-title">修改商品电脑信息</h3>
        
        <p>填空修改电脑信息</p>
        
        <div class="row">
            <form action='/backstage/order/{{ $ob->Order_id }}' method='post' enctype='multipart/form-data'>
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="col-lg-4">
                    <input type="text" class="form-control m-b-10" placeholder="请输入订单号" name='Order_number' value="{{ $ob->Order_number }}">
                </div>
                <div class="col-lg-4">
                    <select class="form-control m-b-10" name='Order_state'>
                        <option value='0' @if($ob->Order_state ==0)selected @endif>待付款</option>
                        <option value='1' @if($ob->Order_state ==1)selected @endif>待发货</option>
                        <option value='2' @if($ob->Order_state ==2)selected @endif>待收货</option>
                        <option value='3' @if($ob->Order_state ==3)selected @endif>交易成功</option>
                        <option value='4' @if($ob->Order_state ==4)selected @endif>已评价</option>
                    </select>
                </div>
                <div class="col-lg-4">
                    <input type="text" class="form-control m-b-10" placeholder="商品数量" name='Order_goodsnum' value="{{ $ob->Order_goodsnum }}">
                </div>
                <div class="col-lg-4">
                    <input type="text" class="form-control m-b-10" placeholder="商品名称" name='Order_goodsname' value="{{ $ob->Order_goodsname }}">
                </div>
                <div class="col-lg-4">
                    <input type="text" class="form-control m-b-10" placeholder="收货人姓名" name='Order_name' value="{{ $ob->Order_name }}">
                </div>
                <div class="col-lg-4">
                    <input type="text" class="form-control m-b-10" placeholder="详细地址" name='Order_detail' value="{{ $ob->Order_detail }}">
                </div>
                <div class="col-lg-4">
                    <input type="text" class="form-control m-b-10" placeholder="请输入电话号" name='Order_tel' value="{{ $ob->Order_tel }}">
                </div>
                <div class="col-lg-4">
                    <input type="text" class="form-control m-b-10" placeholder="请输入订单内otal商品总计" name='Order_total' value="{{ $ob->Order_total }}">
                </div>
                <div class="col-lg-4">
                    <input type="text" class="form-control m-b-10" placeholder="请输入下单时间" name='Order_time' value="{{ $ob->Order_time }}">
                </div>
                <div class="col-lg-12">
                    <input type='submit' class="btn btn-block btn-alt" value='提交'>
                </div>
            </form>
        </div>
        <p></p>
        
    </div>
@endsection