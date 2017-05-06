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
        	<form action='/backstage/config' method='post' name='myform'>
        		{{ csrf_field() }}
        		{{ method_field('DELETE') }}
        	</form>
            <table class="table table-bordered table-hover tile">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>网站标题</th>
                        <th>网站关键字</th>
                        <th>网站描述</th>
                        <th>网站开关</th>
                        <th>操作</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($list as $v)
                    	<tr>
                            <td>{{ $v->Config_id }}</td>
	                        <td>{{ $v->Config_title }}</td>
	                        <td>{{ $v->Config_keys }}</td>
	                        <td>{{ $v->Config_desn }}</td>
                            <td>{{ ($v->Config_state==1)?'开':'关' }}</td>
	                        <td>
	                        	<a class="btn btn-sm btn-alt m-r-5" href='javascript:doDel({{ $v->Config_id }})'>删除</a>
	                        	<a class="btn btn-sm btn-alt m-r-5" href='/backstage/config/{{ $v->Config_id }}/edit'>修改</a>
	                        </td>
	                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $list->links() }}
        </div>
    </div>
    <script type="text/javascript">
        function doDel(id){
        	if(confirm('确定删除吗？')){
        		var form = document.myform;
        		form.action = '/backstage/config/'+id;
        		form.submit();
        	}
        }
    </script>
@endsection