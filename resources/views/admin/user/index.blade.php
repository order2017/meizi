@extends('layouts.admin')

@section('content')

    <div class="admin-content-body">
        <div class="am-cf am-padding am-padding-bottom-0">
            <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">用户列表</strong> / <small>User List</small></div>
        </div>

        <hr>

        <div class="am-g">
            <div class="am-u-sm-12 am-u-md-6">
                <div class="am-btn-toolbar">
                    <div class="am-btn-group am-btn-group-xs">
                        <button type="button" class="am-btn am-btn-default"><span class="am-icon-plus"></span> 新增</button>
                        <button type="button" class="am-btn am-btn-default"><span class="am-icon-save"></span> 保存</button>
                        <button type="button" class="am-btn am-btn-default"><span class="am-icon-archive"></span> 审核</button>
                        <button type="button" class="am-btn am-btn-default"><span class="am-icon-trash-o"></span> 删除</button>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="am-g">
            <div class="am-u-sm-12">
                <form class="am-form">
                    <table class="am-table am-table-striped am-table-hover table-main">
                        <thead>
                        <tr>
                            <th class="table-check"><input type="checkbox"></th><th class="table-id">ID</th><th class="table-title">用户名</th><th class="table-type">账号</th><th class="table-author am-hide-sm-only">姓名</th><th class="table-author am-hide-sm-only">性别</th><th class="table-author am-hide-sm-only">手机</th><th class="table-author am-hide-sm-only">邮箱</th><th class="table-author am-hide-sm-only">出生日期</th><th class="table-date am-hide-sm-only">修改日期</th><th class="table-set">操作</th>
                        </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td><input type="checkbox"></td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td class="am-hide-sm-only">1</td>
                                <td class="am-hide-sm-only">1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>
                                    <div class="am-btn-toolbar">
                                        <div class="am-btn-group am-btn-group-xs">
                                            <button type="button" class="am-btn am-btn-default am-btn-xs am-text-secondary" onclick="javascript:window.location='/admin/user-edit'"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                                            <button type="button" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" onclick="del(1)"><span class="am-icon-trash-o"></span> 删除</button>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                    <div class="am-cf">

                    </div>
                </form>
            </div>

        </div>

    </div>

@endsection

@section('script')

@endsection