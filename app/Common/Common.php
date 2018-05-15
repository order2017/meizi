<?php

namespace App\Common;

use Illuminate\Pagination\LengthAwarePaginator;

class Common
{
    /**
     * @var Upload
     */
    public $upload;

    /**
     * @var
     */
    public $searchKey;

    /**
     * @var PublicFunction
     */
    public $publicFunction;

    /**
     * @var TransForm
     */
    public $transForm;

    /**
     * Common constructor.
     * @param Upload $upload
     * @param SearchKey $searchKey
     * @param PublicFunction $publicFunction
     * @param TransForm $transForm
     */
    public function __construct(Upload $upload,SearchKey $searchKey,PublicFunction $publicFunction,TransForm $transForm)
    {
        $this->upload = $upload;
        $this->searchKey = $searchKey;
        $this->publicFunction = $publicFunction;
        $this->transForm = $transForm;
    }

    /**
     * 提醒弹框状态
     * success 1
     * failed 0
     * @param $remind
     * @return array
     */
    public function Remind($remind='0') {

        if ($remind=='1') {

            return array('message'=>1,'remind'=>$remind,'icon'=>6,'msg'=>'数据处理成功！');

        }else{

            return array('message'=>0,'remind'=>$remind,'icon'=>5,'msg'=>'数据处理失败！');
        }

    }

    /**
     * 设置缩略图列表
     * @param $field
     * @return string
     */
    public function Thumbnail($field) {

        if (!empty($field)) {

            if (file_exists(public_path($this->upload->uploadPath.'/'.$field))){
                $img = $field;
            }else{
                goto img_end;
            }

        }else{
            img_end:
            $img = $this->upload->logo;
        }

        return asset($this->upload->uploadPath.'/'.$img);
    }

    /**
     * 数组分页
     * @param $list
     * @param string $perPage
     * @return LengthAwarePaginator
     */
    public static function arrayPage($list,$perPage="15") {

        $page = request('page','1');

        $offset = ($page * $perPage) - $perPage;

        $list = new LengthAwarePaginator(array_slice($list,$offset,$perPage,true),count($list),$perPage,$page,['path' => request()->url(), 'query' => request()->query()]);

        return $list;

    }

}