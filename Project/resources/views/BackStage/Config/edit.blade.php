@extends('BackStage.base.parent')
@section('content')
	<!-- Text Input -->
    <div class="block-area" id="text-input">
        <h3 class="block-title">修改商品电脑信息</h3>
        
        <p>填空修改电脑信息</p>
        
        <div class="row">
            <form action='/backstage/config/{{ $ob->Config_id }}' method='post' enctype='multipart/form-data'>
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="col-lg-4">
                    <input type="text" class="form-control m-b-10" placeholder="请输入网站标题" name='Config_title' value="{{ $ob->Config_title }}">
                </div>
                <div class="col-lg-4">
                    <input type="text" class="form-control m-b-10" placeholder="请输入网站关键字" name='Config_keys' value="{{ $ob->Config_keys }}">
                </div>
                <div class="col-lg-4">
                    <input type="text" class="form-control m-b-10" placeholder="请输入网站描述" name='Config_desn' value="{{ $ob->Config_desn }}">
                </div>
                <div class="col-lg-4">
                    <select class="form-control m-b-10" name='Config_state'>
                        <option value='1' @if($ob->Config_state ==1)selected @endif>开</option>
                        <option value='0' @if($ob->Config_state ==0)selected @endif>关</option>
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