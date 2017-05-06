@extends('BackStage.base.parent')
@section('content')
	<!-- Text Input -->
    <div class="block-area" id="text-input">
        <h3 class="block-title">修改轮播图片</h3>
        

        <div class="row">
            <form action='/backstage/rotation/{{ $ob->Rotation_id }}' method='post' enctype='multipart/form-data'>
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="col-lg-4">
                    <input type="file" class="form-control m-b-10" placeholder="请插入图片" name='Rotation_name' value="{{ $ob->Rotation_name }}">
                </div>
                <div class="col-lg-12">
                    <input type='submit' class="btn btn-block btn-alt" value='修改'>
                </div>
            </form>
        </div>
        <p></p>
        
    </div>
@endsection