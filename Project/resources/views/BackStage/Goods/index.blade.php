@extends('BackStage.base.parent')
@section('content')
    <div class="block-area" id="tableHover">
        <h3 class="block-title">平板电脑信息列表</h3>
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
            <form action='/goodsppc' method='post' name='myform'>
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
            </form>

            <form action='/backstage/goodsppc' method='get'>
                <div class='medio-body'>
                    平板名称：<input type='text' class='form-control input-sm m-b-10' name='Goods_name'>
                </div>
                <input type='submit' class='btn' value='搜索'>
            </form>
            <table class="table table-bordered table-hover tile">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>平板电脑名称</th>
                        <th>平板电脑价格</th>
                        <th>平板电脑特价</th>
                        <th>展示图片</th>
                        <th>展示大图片</th>
                        <th>库存</th>
                        <th>推荐级别</th>
                        <th>商品介绍</th>
                        <th>商品状态</th>
                        <th>商品操作</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($list as $v)
                        <tr>
                            <td>{{ $v->Goods_id }}</td>
                            <td>{{ $v->Goods_name }}</td>
                            <td>{{ $v->Goods_price }}</td>
                            <td>{{ $v->Goods_bprice }}</td>
                            <td><img src="/admin/upload/@if(!empty($v->Goods_pic)){{ explode(',',($v->Goods_pic))[0] }} @endif" width="50" height="50"><img src="/admin/upload/@if(!empty($v->Goods_pic)){{ explode(',',($v->Goods_pic))[1] }} @endif" width="50" height="50"><img src="/admin/upload/@if(!empty($v->Goods_pic)){{ explode(',',($v->Goods_pic))[2] }} @endif" width="50" height="50"></td>
                            <td><img src="/admin/upload/@if(!empty($v->Goods_bigpic)){{ explode(',',($v->Goods_bigpic))[0] }} @endif" width="50" height="50"><img src="/admin/upload/@if(!empty($v->Goods_bigpic)){{ explode(',',($v->Goods_bigpic))[1] }} @endif" width="50" height="50"><img src="/admin/upload/@if(!empty($v->Goods_bigpic)){{ explode(',',($v->Goods_bigpic))[2] }} @endif" width="50" height="50"></td>
                            <td>{{ $v->Goods_store }}</td>
                            <td> @if($v->Goods_hot_id == 0)
                                    不推荐
                                @elseif($v->Goods_hot_id == 1)
                                    一级推荐
                                @elseif($v->Goods_hot_id == 2)
                                    二级推荐
                                @else
                                    三级推荐
                                @endif
                            </td>
                            <td>{{ $v->Goods_body }}</td>
                            <td>{{ $v->Goods_under }}</td>
                            <td>
                                <a class="btn btn-sm btn-alt m-r-5" href='javascript:doDel({{ $v->Goods_id }})'>删除</a>
                                <a class="btn btn-sm btn-alt m-r-5" href='/backstage/goodsppc/{{ $v->Goods_id }}/edit'>修改</a>
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
                form.action = 'goodsppc/'+id;
                form.submit();
            }
        }
    </script>
@endsection



	