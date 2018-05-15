<?php

namespace App\Http\Controllers\Admin;

use App\Common\Common;
use App\ProductType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * @param $data
     * @param int $pid
     * @return array
     */
    protected function data($data,$pid=0){
        $newArr=array();
        foreach ($data as $key => $value) {
            if ($value->product_type_pid==$pid) {
                $newArr[$value->product_type_id]=$value;
                $newArr[$value->product_type_id]->parent=$this->data($data,$value->product_type_id);
            }
        }
        return $newArr;
    }

    /**
     * 产品类型列表
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function ProductTypeList(){

        $type = ProductType::all();

        $arr = $this->data($type,$pid=0);

        $newArr = Common::arrayPage($arr);

        return view('admin.product.product-type-list',['data'=>$newArr]);

    }

    /**
     * 产品类型添加
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function ProductTypeInsert(){

        return view('admin.product.product-type-insert');

    }

    /**
     * 产品类型添加--存储
     * @param Request $request
     * @param Common $common
     * @return \Illuminate\Http\RedirectResponse
     */
    public function ProductTypeInsertStore(Request $request,Common $common){

        $data = ProductType::create($request->all());

        if ($data) {

            return redirect('/admin/product-type-list')->with($common->Remind(1));

        }else{

            return back()->with($common->Remind());

        }

    }

    /**
     * 产品类型编辑
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|\Illuminate\View\View
     */
    public function ProductTypeEdit(Request $request) {

        if (empty($request->get('product_type_id')) && empty($request->get('product_type_name'))){

            return redirect('/admin/product-type-list');

        }else{

            return view('admin.product.product-type-edit');

        }

    }

    /**
     * 产品类型编辑--更新
     * @param Request $request
     * @param Common $common
     * @return \Illuminate\Http\RedirectResponse
     */
    public function ProductTypeEditStore(Request $request,Common $common) {

        $res =  ProductType::where('product_type_id',$request->get('product_type_id'))->update(['product_type_name'=>$request->get('product_type_name')]);

        if ($res){

            return redirect('/admin/product-type-list')->with($common->Remind(1));

        }else{

            return back()->with($common->Remind());

        }
    }

    /**
     * 产品类型删除
     * @param $id
     * @return string
     */
    public function ProductTypeDelete($id)
    {
        $result = DB::delete("delete from product_types where product_type_id=$id or product_type_path like '%,$id,%'");

        if ($result) {

            return "1";

        } else {

            return "0";

        }

    }

}
