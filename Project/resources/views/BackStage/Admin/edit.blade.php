@extends('BackStage.base.parent')
@section('content')
	<!-- Text Input -->
    <div class="block-area" id="text-input">
        <h3 class="block-title">修改管理员</h3>
        
        <p>填空修改管理员</p>
        
        <div class="row">
            <form action='/backstage/backstageadmin/{{ $ob->Admin_id }}' method='post'>
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="col-lg-4">
                    <input type="text" class="form-control m-b-10" placeholder="请输入用户名" name='Admin_name' value="{{ $ob->Admin_name }}">
                </div>
                <div class="col-lg-4">
                    <input type="text" class="form-control m-b-10" placeholder="请输入年龄" name='Admin_age' value="{{ $ob->Admin_age }}">
                </div>
                <div class="col-lg-4">
                    <select class="form-control m-b-10" name='Admin_sex'>
                        <option value='0' @if($ob->Admin_sex ==0)selected @endif>男</option>
                        <option value='1' @if($ob->Admin_sex ==1)selected @endif>女</option>
                    </select>
                </div>
                <div class="col-lg-4">
                    <input type="text" class="form-control m-b-10" placeholder="请输入密码" name='Admin_pass' value="{{ $ob->Admin_pass }}">
                </div>
                <div class="col-lg-4">
                    <input type="text" class="form-control m-b-10" placeholder="请输入邮箱" name='Admin_email' value="{{ $ob->Admin_email }}">
                </div>
                <div class="col-lg-4">
                    <input type="text" class="form-control m-b-10" placeholder="请输入QQ" name='Admin_qq' value="{{ $ob->Admin_qq }}">
                </div>
                <div class="col-lg-12">
                    <input type='submit' class="btn btn-block btn-alt" value='提交'>
                </div>
            </form>
        </div>
        <p></p>
        
    </div>
@endsection