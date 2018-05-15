@extends('layouts.admin')

@section('content')

    <div class="admin-content-body">
        <div class="am-cf am-padding am-padding-bottom-0">
            <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">用户编辑</strong> / <small>User Edit</small></div>
        </div>

        <hr>

        <div class="am-g">
            <div class="am-u-sm-12 am-u-md-4 am-u-md-push-8"></div>
            <div class="am-u-sm-12 am-u-md-8 am-u-md-pull-4">

                <form class="am-form am-form-horizontal" method="post" action="{{ url('/admin/user-edit') }}" enctype="multipart/form-data" data-am-validator>
                    {{ csrf_field() }}
                    <fieldset>
                        <div class="am-form-group">
                            <label for="user_name" class="am-u-sm-3 am-form-label">用户名：</label>
                            <div class="am-u-sm-9">
                                <input type="text" id="user_name" name="user_name" value="" placeholder="用户名" disabled>
                                <input type="hidden" name="user_id" value="">
                            </div>
                        </div>

                        <div class="am-form-group">
                            <label class="am-u-sm-3 am-form-label">头像：</label>
                            <div class="am-u-sm-9">
                                <div class="am-form-group am-form-file">
                                    <img id="user_avatar" src="" class="am-img-thumbnail" style="height: 160px">
                                    <input name="user_avatar" id="file" type="file" multiple onchange="">
                                </div>
                            </div>
                        </div>

                        <div class="am-form-group">
                            <label for="user_account" class="am-u-sm-3 am-form-label">账号：</label>
                            <div class="am-u-sm-9">
                                <input type="text" id="user_account" name="user_account" value="" placeholder="账号" disabled>
                            </div>
                        </div>

                        <div class="am-form-group">
                            <label for="user_real_name" class="am-u-sm-3 am-form-label">真实姓名：</label>
                            <div class="am-u-sm-9">
                                <input type="text" id="user_real_name" name="user_real_name" value="" placeholder="真实姓名" required>
                            </div>
                        </div>

                        <div class="am-form-group">
                            <label for="user_sex" class="am-u-sm-3 am-form-label">性别</label>
                            <div class="am-u-sm-9">
                                <select id="user_sex" name="user_sex" required>
                                    <option value="">-=请选择性别=-</option>

                                        <option value="" >00</option>

                                </select>
                            </div>
                        </div>

                        <div class="am-form-group">
                            <label for="user_birthday" class="am-u-sm-3 am-form-label">出生：</label>
                            <div class="am-u-sm-9">
                                <input type="text" id="user_birthday" name="user_birthday" value="" placeholder="出生" data-am-datepicker readonly required>
                            </div>
                        </div>

                        <div class="am-form-group">
                            <label for="user_phone" class="am-u-sm-3 am-form-label">手机：</label>
                            <div class="am-u-sm-9">
                                <input type="text" id="user_phone" name="user_phone" value="" placeholder="手机" required>
                            </div>
                        </div>

                        <div class="am-form-group">
                            <label for="user_email" class="am-u-sm-3 am-form-label">邮箱：</label>
                            <div class="am-u-sm-9">
                                <input type="text" id="user_email" name="user_email" value="" placeholder="邮箱" required>
                            </div>
                        </div>

                        <div class="am-form-group">
                            <label for="password" class="am-u-sm-3 am-form-label">密码：</label>
                            <div class="am-u-sm-9">
                                <input type="text" id="password" name="password" placeholder="密码">
                            </div>
                        </div>

                        <div class="am-form-group">
                            <label for="password_confirmation" class="am-u-sm-3 am-form-label">确认密码：</label>
                            <div class="am-u-sm-9">
                                <input type="text" id="password_confirmation" name="password_confirmation" placeholder="确认密码">
                            </div>
                        </div>

                        <div class="am-form-group">
                            <div class="am-u-sm-9 am-u-sm-push-3">
                                <button type="submit" class="am-btn am-btn-primary">确定</button>
                                <a href="/admin/user-list" class="am-btn am-btn-warning">返回</a>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>

    </div>

@endsection

@section('script')


@endsection