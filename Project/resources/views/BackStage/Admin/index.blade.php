@extends('BackStage.base.parent')
@section('content')
	<div class="block-area" id="tableHover">
        <h3 class="block-title">管理员信息列表</h3>
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
        	<form action='/backstageadmin' method='post' name='myform'>
        		{{ csrf_field() }}
        		{{ method_field('DELETE') }}
        	</form>

        	<form action='/backstage/backstageadmin' method='get'>
        		<div class='medio-body'>
    				姓名：<input type='text' class='form-control input-sm m-b-10' name='Admin_name'>
    			</div>
        		<div>
        			性别：<select name='Admin_sex' class='form-control input-sm m-b-10'>
        				<option value=''>--请选择--</option>
        				<option value='0'>--男--</option>
        				<option value='1'>--女--</option>
        			</select>
        		</div>
        		<input type='submit' class='btn' value='搜索'>
        	</form>
            <table class="table table-bordered table-hover tile">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>用户名</th>
                        <th>真实姓名</th>
                        <th>密码</th>
                        <th>性别</th>
                        <th>年龄</th>
                        <th>电话</th>
                        <th>邮箱</th>
                        <th>QQ</th>
                        <th>操作</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($list as $v)
                    	<tr>
	                        <td>{{ $v->Admin_id }}</td>
	                        <td>{{ $v->Admin_name }}</td>
	                        <td>{{ $v->Admin_realname }}</td>
	                        <td>{{ $v->Admin_pass }}</td>
	                        <td>{{ ($v->Admin_sex == 0)?'男':'女' }}</td>
                            <td>{{ $v->Admin_age }}</td>
	                        <td>{{ $v->Admin_tel }}</td>
	                        <td>{{ $v->Admin_email }}</td>
	                        <td>{{ $v->Admin_qq }}</td>
	                        <td>
	                        	<a class="btn btn-sm btn-alt m-r-5" href='javascript:doDel({{ $v->Admin_id }})'>删除</a>
	                        	<a class="btn btn-sm btn-alt m-r-5" href='/backstage/backstageadmin/{{ $v->Admin_id }}/edit'>修改</a>
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
        		form.action = 'backstageadmin/'+id;
        		form.submit();
        	}
        }
    </script>
@endsection



	