<?php

namespace App\Http\Controllers\Api;

use App\Common\Common;
use App\Common\TransForm;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    protected $common;

    /**
     * IndexController constructor.
     * @param $common
     */
    public function __construct(Common $common)
    {
        $this->common = $common;
    }

    /**
     * 来个测试数据
     */
    public function index() {

        $data = [
            ['id'=>1,'name'=>'陈小龙','phone'=>'13480731740','desc'=>'三能数码科技工作室']
        ];

        if (count($data)) {

            return $this->common->transForm->transform($data);

        }else{

            return $this->common->transForm->transform('没有数据','failed',TransForm::CODE_TWO);

        }

    }
}
