<?php

namespace App\Http\Controllers\Admin;

use App\Common\Common;
use App\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    /**
     * 新闻列表
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function newList() {

        $data = News::orderBy('new_order','desc')->paginate(News::PAGE_LIMIT);

        return view('admin.news.new-list',['data'=>$data]);

    }

    /**
     * 新闻添加
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function newInsert() {

        return view('admin.news.new-insert');

    }

    /**
     * 新闻添加--存储
     * @param Request $request
     * @param Common $common
     * @return \Illuminate\Http\RedirectResponse
     */
    public function newInsertStore(Request $request,Common $common) {

        try {

            News::create(array_merge($request->except('new_picture'),['new_picture'=>$common->upload->UploadImg('new_picture')]));

            return redirect('/admin/new-list')->with($common->Remind(1));

        } catch (\Exception $e) {

            return back()->with($common->Remind());

        }

    }

    /**
     * 新闻编辑
     * @param $new_id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function newEdit($new_id) {

        $data = News::find($new_id);

        return view('admin.news.new-edit',['data'=>$data]);

    }

    /**
     * 新闻编辑--存储
     * @param Common $common
     * @return \Illuminate\Http\RedirectResponse
     */
    public function newEditStore(Common $common) {

        $result = $common->publicFunction->EditUpdatePicture('\App\News','new_id','new_picture');

        if ($result) {

            return redirect('/admin/new-list')->with($common->Remind(1));

        }else{

            return back()->with($common->Remind());

        }

    }

    /**
     * 新闻编辑--删除
     * @param $new_id
     * @return string
     */
    public function NewsDel($new_id){

        $res = News::find($new_id);

        if ($res->delete()) {

            app('common')->upload->DelPicture($res['new_picture']);

            return "1";

        } else {

            return "0";

        }

    }

    public function newTypeList() {

        return view('admin.news.new-type-list');

    }
}
