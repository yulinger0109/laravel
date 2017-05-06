@extends('BackStage.base.parent')
@section('content')
	<!-- Text Input -->
    <div class="block-area" id="text-input">
        <h3 class="block-title">修改用户</h3>
        
        <p>填空修改用户</p>
        
        <div class="row">
            <form action='/backstage/user/{{ $ob->User_id }}' method='post'>
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="col-lg-4">
                    <input type="text" class="form-control m-b-10" placeholder="请输入用户名" name='User_username' value="{{ $ob->User_username }}">
                </div>
                <div class="col-lg-4">
                    <input type="text" class="form-control m-b-10" placeholder="请输入真实姓名" name='User_realname' value="{{ $ob->User_realname }}">
                </div>
                <div class="col-lg-4">
                    <input type="text" class="form-control m-b-10" placeholder="请输入年龄" name='User_age' value="{{ $ob->User_age }}">
                </div>
                <div class="col-lg-4">
                    <select class="form-control m-b-10" name='User_sex'>
                        <option value='1' @if($ob->User_sex ==1)selected @endif>男</option>
                        <option value='2' @if($ob->User_sex ==2)selected @endif>女</option>
                    </select>
                </div>
                <div class="col-lg-4">
                    <input type="text" class="form-control m-b-10" placeholder="请输入email" name='User_uemail' value="{{ $ob->User_uemail }}">
                </div>
                <div class="col-lg-4">
                    <input type="text" class="form-control m-b-10" placeholder="请输入电话号" name='User_tel' value="{{ $ob->User_tel }}">
                </div>
                <div class="col-lg-4">
                    <input type="text" class="form-control m-b-10" placeholder="请输入QQ号" name='User_qq' value="{{ $ob->User_qq }}">
                </div>
                
                <div class="col-lg-12">
                    <input type='submit' class="btn btn-block btn-alt" value='提交'>
                </div>
            </form>
        </div>
        <p></p>
        
    </div>
@endsection