@extends('layouts.admin')

@section('content')

    <div class="admin-content-body">
        <div class="am-cf am-padding am-padding-bottom-0">
            <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">添加类型</strong> / <small>Insert Type</small></div>
        </div>

        <hr>

        <div class="am-g">
            <div class="am-u-sm-12 am-u-md-4 am-u-md-push-8"></div>
            <div class="am-u-sm-12 am-u-md-8 am-u-md-pull-4">

                <form class="am-form am-form-horizontal" method="post" action="{{ url('/admin/product-type-insert') }}" enctype="multipart/form-data" data-am-validator>
                    {{ csrf_field() }}
                    <fieldset>
                        <div class="am-form-group">
                            <label for="product_type_name" class="am-u-sm-3 am-form-label">类型名称：</label>
                            <div class="am-u-sm-9">
                                <input type="text" id="product_type_name" name="product_type_name" placeholder="请输入类型名称" required>
                                <input type="hidden" name="product_type_pid" value="{{ request('product_type_pid','0') }}" >
                                <input type="hidden" name="product_type_path" value="<?php echo isset($_GET['product_type_path']) ? $_GET['product_type_path'].',' : '0,'; ?>" >
                            </div>
                        </div>

                        <div class="am-form-group">
                            <div class="am-u-sm-9 am-u-sm-push-3">
                                <button type="submit" class="am-btn am-btn-primary">确定</button>
                                <a href="/admin/product-type-list" class="am-btn am-btn-warning">返回</a>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>

    </div>

@endsection

@section('script')
    @include('include.admin._remind')
@endsection