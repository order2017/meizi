@extends('layouts.admin')

@section('content')

    <div class="admin-content-body">
        <div class="am-cf am-padding am-padding-bottom-0">
            <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">新闻编辑</strong> / <small>New Edit</small></div>
        </div>

        <hr>

        <div class="am-g">
            <div class="am-u-sm-12 am-u-md-4 am-u-md-push-8"></div>
            <div class="am-u-sm-12 am-u-md-8 am-u-md-pull-4">

                <form class="am-form am-form-horizontal" method="post" action="{{ url('/admin/new-edit') }}" enctype="multipart/form-data" data-am-validator>
                    {{ csrf_field() }}
                    <fieldset>
                        <div class="am-form-group">
                            <label for="new_title" class="am-u-sm-3 am-form-label">标题：</label>
                            <div class="am-u-sm-9">
                                <input type="text" id="new_title" name="new_title" value="{{$data['new_title']}}" placeholder="请输入标题" required>
                                <input type="hidden" name="new_id" value="{{ $data['new_id'] }}">
                            </div>
                        </div>

                        <div class="am-form-group">
                            <label for="new_picture" class="am-u-sm-3 am-form-label">封面：</label>
                            <div class="am-u-sm-9">
                                <div class="am-form-group am-form-file">
                                    <img id="new_picture" src="{{ app('common')->Thumbnail($data['new_picture']) }}" class="am-img-thumbnail" style="height: 160px">
                                    <input name="new_picture" id="new_picture" type="file" multiple onchange="imgPreview(this,'new_picture')">
                                </div>
                            </div>
                        </div>

                        <div class="am-form-group">
                            <label for="new_type" class="am-u-sm-3 am-form-label">类型</label>
                            <div class="am-u-sm-9">
                                <select id="new_type" name="new_type" required>
                                    <option value="">-=请选择新闻类型=-</option>
                                        <option value="1" >企业</option>
                                </select>
                            </div>
                        </div>

                        <div class="am-form-group">
                            <label for="new_content" class="am-u-sm-3 am-form-label">内容</label>
                            <div class="am-u-sm-9">
                            {{--<textarea name="new_content" rows="10" id="new_content" placeholder="输入内容">{{$data['new_content']}}</textarea>--}}
                            <!-- 编辑器容器 -->
                                <script id="container" name="new_content" type="text/plain">{!! $data['new_content'] !!}</script>
                            </div>
                        </div>

                        <div class="am-form-group">
                            <label for="new_order" class="am-u-sm-3 am-form-label">排序：</label>
                            <div class="am-u-sm-9">
                                <input type="number" id="new_order" name="new_order" value="{{$data['new_order']}}" placeholder="请输入排序" required>
                            </div>
                        </div>

                        <div class="am-form-group">
                            <div class="am-u-sm-9 am-u-sm-push-3">
                                <button type="submit" class="am-btn am-btn-primary">确定</button>
                                <a href="/admin/new-list" class="am-btn am-btn-warning">返回</a>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>

    </div>

@endsection

@section('script')
    @include('include.admin._img-preview')
    @include('include.admin._remind')

    @include('vendor.ueditor.assets')

    <!-- 实例化编辑器 -->
    <script type="text/javascript">
        var ue = UE.getEditor('container');
        ue.ready(function() {
            ue.execCommand('serverparam', '_token', '{{ csrf_token() }}'); // 设置 CSRF token.
        });
    </script>
@endsection