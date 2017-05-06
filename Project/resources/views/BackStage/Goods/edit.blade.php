@extends('BackStage.base.parent')
@section('content')
	<!-- Text Input -->
    <div class="block-area" id="text-input">
        <h3 class="block-title">修改平板电脑信息</h3>
        
        <p>填空修改平板电脑信息</p>
        
        <div class="row">
            <form action='/backstage/goodsppc/{{ $ob->Goods_id }}' method='post' enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="col-lg-4">
                    <input type="text" class="form-control m-b-10" placeholder="请输入平板名称" name='Goods_name' value="{{ $ob->Goods_name }}">
                </div>
                <div class="col-lg-4">
                    <input type="text" class="form-control m-b-10" placeholder="请输入平板价格" name='Goods_price' value="{{ $ob->Goods_price }}">
                </div>
                <div class="col-lg-4">
                    <input type="text" class="form-control m-b-10" placeholder="请输入平板特价" name='Goods_bprice' value="{{ $ob->Goods_bprice }}">
                </div>
                    <div class="col-lg-4">
                    <input type="file" class="form-control m-b-10" name='Goods_pic[]' value="{{ $ob->Goods_pic }}">
                    <input type="file" class="form-control m-b-10" name='Goods_pic[]' value="{{ $ob->Goods_pic }}">
                    <input type="file" class="form-control m-b-10" name='Goods_pic[]' value="{{ $ob->Goods_pic }}">
                </div>
                <div class="col-lg-4">
                    <input type="file" class="form-control m-b-10" name='Goods_bigpic[]' value="{{ $ob->Goods_bigpic }}">
                    <input type="file" class="form-control m-b-10" name='Goods_bigpic[]' value="{{ $ob->Goods_bigpic }}">
                    <input type="file" class="form-control m-b-10" name='Goods_bigpic[]' value="{{ $ob->Goods_bigpic }}">
                </div>
                <div class="col-lg-4">
                    <input type="text" class="form-control m-b-10" placeholder="请输入库存" name='Goods_store' value="{{ $ob->Goods_store }}">
                </div>
                <div class="col-lg-4">
                    <select class="form-control m-b-10" name='Goods_hot_id'>
                        <option value='0' @if($ob->Goods_hot_id == 0)selected @endif>不推荐</option>
                        <option value='1' @if($ob->Goods_hot_id == 1)selected @endif>一级推荐</option>
                        <option value='2' @if($ob->Goods_hot_id == 2)selected @endif>二级推荐</option>
                        <option value='3' @if($ob->Goods_hot_id == 3)selected @endif>三级推荐</option>
                    </select>
                </div>
                
                <div class="col-lg-4">
                    <input type="text" class="form-control m-b-10" placeholder="商品介绍" name='Goods_body' value="{{ $ob->Goods_body }}">
                </div>
                <div class="col-lg-4">
                    <select class="form-control m-b-10" name='Goods_under'>
                        <option value='0' @if($ob->Goods_under == 0)selected @endif>下架</option>
                        <option value='1' @if($ob->Goods_under == 1)selected @endif>上架</option>
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