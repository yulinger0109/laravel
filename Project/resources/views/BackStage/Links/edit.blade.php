@extends('BackStage.base.parent')
@section('content')
	<!-- Text Input -->
    <div class="block-area" id="text-input">
        <h3 class="block-title">修改友链</h3>
        
        <p>填空修改友链</p>
        
        <div class="row">
            <form action='/backstage/links/{{ $ob->Links_id }}' method='post'>
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="col-lg-4">
                    <input type="text" class="form-control m-b-10" placeholder="请输入友链名称" name='Links_name' value="{{ $ob->Links_name }}">
                </div>
                <div class="col-lg-4">
                    <input type="text" class="form-control m-b-10" placeholder="请输入友链URL" name='Links_url' value="{{ $ob->Links_url }}">
                </div>
                <div class="col-lg-4">
                    <select class="form-control m-b-10" name='Links_switch'>
                        <option value='0' @if($ob->Links_switch ==0)selected @endif>关</option>
                        <option value='1' @if($ob->Links_switch ==1)selected @endif>开</option>
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