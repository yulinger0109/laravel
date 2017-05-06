@extends('BackStage.base.parent')
@section('content')
	<!-- Text Input -->
    <div class="block-area" id="text-input">
        <h3 class="block-title">添加商品</h3>
        
        <p>填空添加商品</p>
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="row">
            <form action='/backstage/goodsppc' method='post' enctype='multipart/form-data'>
                {{ csrf_field() }}
                <div class="col-lg-4">
                    <input type="text" class="form-control m-b-10" placeholder="请输入平板电脑名称" name='Goods_name'>
                </div>
                <div class="col-lg-4">
                    <input type="text" class="form-control m-b-10" placeholder="请输入平板电脑价格" name='Goods_price'>
                </div>
                <div class="col-lg-4">
                    <input type="text" class="form-control m-b-10" placeholder="请输入平板电脑特价" name='Goods_bprice'>
                </div>
                <div class="col-lg-4">
                    <select class="form-control m-b-10" name='Goods_hot_id'>
                        <option>--推荐级别--</option>
                        <option value='0'>不推荐</option>
                        <option value='1'>一级推荐</option>
                        <option value='2'>二级推荐</option>
                        <option value='3'>三级推荐</option>
                    </select>
                </div>
                <div class="col-lg-4">
                    <input type="text" class="form-control m-b-10" placeholder="平板电脑介绍" name='Goods_body'>
                </div>
                <div class="col-lg-4">
                    <select class="form-control m-b-10" name='Goods_under'>
                        <option>--商品状态--</option>
                        <option value='0'>下架</option>
                        <option value='1'>上架</option>
                    </select>
                </div>
                <div class="col-lg-4">
                    <select class="form-control m-b-10" name='Goods_cate'>
                        <option>--商品分类--</option>
                        <option value='0'>电脑</option>
                        <option value='1'>平板电脑</option>
                    </select>
                </div>
                <div class="col-lg-12">
                    <input type='submit' class="btn btn-block btn-alt" value='提交'>
                </div>
            </form>
        </div>
        <p></p>
        
    </div>
@endsection