@extends('layouts.admin')

@section('content')

    <div class="admin-content-body">
        <div class="am-cf am-padding am-padding-bottom-0">
            <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">产品类型列表</strong> / <small>Product Type List</small></div>
        </div>

        <hr>

        <div class="am-g">
            <div class="am-u-sm-12 am-u-md-6">
                <div class="am-btn-toolbar">
                    <div class="am-btn-group am-btn-group-xs">
                        <button type="button" class="am-btn am-btn-default" onclick="javascript:window.location='/admin/product-type-insert'"><span class="am-icon-plus"></span> 添加类型</button>
                    </div>
                </div>
            </div>
        </div>
        <br>

        <div class="am-g">
            <div class="am-u-sm-12">
                <table class="am-table am-table-striped am-table-hover table-main">
                    <thead>
                    <tr>
                        <th class="table-title">类别名称</th>
                        <th class="table-type">所属类别</th>
                        <th class="table-author">添加二级类别</th>
                        <th class="table-date">日期</th>
                        <th class="table-set">操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $list)
                        <tr>
                            <td>{{ $list->product_type_name }}</td>
                            <?php $arr=explode(',',$list->product_type_path); $tot=count($arr)-2; ?>
                            <td>{{str_repeat("|===",$tot)}}{{$list->product_type_name}}</td>
                            <td><a href="/admin/product-type-insert?product_type_pid={{ $list->product_type_id }}&product_type_path={{ $list->product_type_path }}{{ $list->product_type_id }}">添加二级子类</a></td>
                            <td>{{ $list->updated_at }}</td>
                            <td>
                                <div class="am-btn-toolbar">
                                    <div class="am-btn-group am-btn-group-xs">
                                        <button type="button" class="am-btn am-btn-default am-btn-xs am-text-secondary" onclick="javascript:window.location='/admin/product-type-edit?product_type_id={{ $list->product_type_id }}&product_type_name={{ $list->product_type_name }}'"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                                        <button type="button" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" onclick="del({{ $list->product_type_id }})"><span class="am-icon-trash-o"></span> 删除</button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @foreach($list->parent as $line)
                            <tr>
                                <td>{{ $line->product_type_name }}</td>
                                <?php $arr=explode(',',$line->product_type_path); $tot=count($arr)-2; ?>
                                <td>{{str_repeat("|===",$tot)}}{{$line->product_type_name}}</td>
                                <td>{{--<a href="/admin/product-type-insert?product_type_pid={{ $line->product_type_id }}&product_type_path={{ $line->product_type_path }}{{ $line->product_type_id }}">添加二级子类</a>--}}</td>
                                <td>{{ $line->updated_at }}</td>
                                <td>
                                    <div class="am-btn-toolbar">
                                        <div class="am-btn-group am-btn-group-xs">
                                            <button type="button" class="am-btn am-btn-default am-btn-xs am-text-secondary" onclick="javascript:window.location='/admin/product-type-edit?product_type_id={{ $line->product_type_id }}&product_type_name={{ $line->product_type_name }}'"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                                            <button type="button" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" onclick="del({{ $line->product_type_id }})"><span class="am-icon-trash-o"></span> 删除</button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    @endforeach
                    </tbody>
                </table>
            </div>

        </div>

    </div>

@endsection

@section('script')
    @include('include.admin._remind')
    @include('include.admin._delete',['linkUrl'=>'/admin/product-type-del/'])
@endsection