<?php

namespace App\Common;


class PublicFunction
{

    /**
     * 编辑更新文本图片通用方法
     * @param $database
     * @param $id
     * @param $picture
     * @return bool
     */
    public function EditUpdatePicture($database,$id,$picture) {

        try {

            $data = request()->except('_token');

            if ($img = app('common')->upload->UploadImg($picture)) {

                $data[$picture] = $img;

                if ($delImg = $database::find($data[$id])[$picture]){

                    app('common')->upload->DelPicture($delImg);

                }

            }

            if ($database::where($id,$data[$id])->update($data)){

                return true;

            }

        } catch(\Exception $e) {

            return false;

        }

    }

}