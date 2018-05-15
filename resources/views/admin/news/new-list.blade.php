@extends('layouts.admin')

@section('content')

    <div class="admin-content-body">
        <div class="am-cf am-padding am-padding-bottom-0">
            <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">新闻列表</strong> / <small>New List</small></div>
        </div>

        <hr>

        <div class="am-g">
            <div class="am-u-sm-12 am-u-md-6">
                <div class="am-btn-toolbar">
                    <div class="am-btn-group am-btn-group-xs">
                        <button type="button" class="am-btn am-btn-default" onclick="javascript:window.location='/admin/new-insert'"><span class="am-icon-plus"></span> 添加新闻</button>
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
                        <th class="table-title">新闻标题</th>
                        <th class="table-type">新闻类型</th>
                        <th class="table-author">新闻排序</th>
                        <th class="table-date">发布日期</th>
                        <th class="table-set">操作</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $list)
                        <tr>
                            <td>{{$list['new_title']}}</td>
                            <td>{{$list['new_type']}}</td>
                            <td>{{$list['new_order']}}</td>
                            <td>{{$list['updated_at']}}</td>
                            <td>
                                <div class="am-btn-toolbar">
                                    <div class="am-btn-group am-btn-group-xs">
                                        <button type="button" class="am-btn am-btn-default am-btn-xs am-text-secondary" onclick="javascript:window.location='/admin/new-edit/{{$list['new_id']}}'"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                                        <button type="button" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" onclick="del({{ $list['new_id'] }})"><span class="am-icon-trash-o"></span> 删除</button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="am-cf">
                    {{ $data->links() }}
                </div>
            </div>

        </div>

    </div>

@endsection

@section('script')
    @include('include.admin._remind')
    @include('include.admin._delete',['linkUrl'=>'/admin/new-del/'])
@endsection