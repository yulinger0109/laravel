@extends('BackStage.base.parent')
@section('content')
    <div class="block-area" id="tableHover">
        <h3 class="block-title">用户信息列表</h3>
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
            <form action='/backstage' method='post' name='myform'>
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
            </form>

            <form action='/backstage/user' method='get'>
                <div class='medio-body'>
                    姓名：<input type='text' class='form-control input-sm m-b-10' name='User_username'>
                </div>
                <div>
                    性别：<select name='User_sex' class='form-control input-sm m-b-10'>
                        <option value=''>--请选择--</option>
                        <option value='1'>--男--</option>
                        <option value='2'>--女--</option>
                    </select>
                </div>
                <input type='submit' class='btn' value='搜索'>
            </form>
            <table class="table table-bordered table-hover tile">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>用户名</th>
                        <th>姓名</th>
                        <th>密码</th>
                        <th>年龄</th>
                        <th>性别</th>
                        <th>Email</th>
                        <th>电话</th>
                        <th>QQ</th>
                        <th>操作</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($list as $v)
                        <tr>
                            <td>{{ $v->User_id }}</td>
                            <td>{{ $v->User_username }}</td>
                            <td>{{ $v->User_realname }}</td>
                            <td>{{ $v->User_pass }}</td>
                            <td>{{ $v->User_age }}</td>
                            <td>{{ ($v->User_sex == 1)?'男':'女' }}</td>
                            <td>{{ $v->User_uemail }}</td>
                            <td>{{ $v->User_tel }}</td>
                            <td>{{ $v->User_qq }}</td>                            
                            <td>
                                <a class="btn btn-sm btn-alt m-r-5" href='javascript:doDel({{ $v->User_id }})'>删除</a>
                                <a class="btn btn-sm btn-alt m-r-5" href='/backstage/user/{{ $v->User_id }}/edit'>修改</a>
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
            // alert(id);
            // die; 
            if(confirm('确定删除吗？')){
                var form = document.myform;
                form.action = '/backstage/user/'+id;
                form.submit();
            }
        }
    </script>
@endsection