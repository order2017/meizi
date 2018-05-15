<?php

namespace App\Common;


class TransForm
{

    /**
     * 定义常规状态码
     */
    const SUCCESS = '200';
    const ACCESS_DENIED = '403';
    const BAD_REQUEST = '400';
    const CONFLICT = '409';
    const GONE = '410';
    const HTTP_EXCEPTION = '500';
    const LENGTH_REQUIRED = '411';
    const METHOD_NOT_ALLOWED = '405';
    const NOT_ACCEPTABLE = '406';
    const NOT_FOUND = '404';
    const PRECONDITION_FAILED= '412';
    const PRECONDITION_REQUIRED= '428';
    const SERVICE_UNAVAILABLE= '503';
    const TOO_MANY_REQUESTS= '429';
    const UNAUTHORIZED= '401';
    const UNSUPPORTED_MEDIA_TYPE= '415';

    /**
     * @return array
     */
    public static function StatusList() {

        return [
            self::SUCCESS => '请求成功',
            self::ACCESS_DENIED => '禁止访问',
            self::BAD_REQUEST => '请求无效',
            self::CONFLICT => '资源冲突',
            self::GONE => '永远不可用',
            self::HTTP_EXCEPTION => '内部服务器错误',
            self::LENGTH_REQUIRED => '请求出错',
            self::METHOD_NOT_ALLOWED => '资源被禁止',
            self::NOT_ACCEPTABLE => '无法接受',
            self::NOT_FOUND => '无法找到文件',
            self::PRECONDITION_FAILED => '前提条件失败',
            self::PRECONDITION_REQUIRED => '客户端解析错误',
            self::SERVICE_UNAVAILABLE => '服务不可用',
            self::TOO_MANY_REQUESTS => '运行时错误',
            self::UNAUTHORIZED => '未授权',
            self::UNSUPPORTED_MEDIA_TYPE => '不支持的媒体类型',
        ];

    }

    /**
     * 定义数据错误码
     */
    const CODE_ONE = '0000';
    const CODE_TWO = '3010';

    /**
     * @return array
     */
    public static function CodeList() {

        return [
            self::CODE_ONE => '请求数据成功',
            self::CODE_TWO => '请求数据失败',
        ];

    }

    /**
     * 简单封装转化Json
     * @param $data
     * @param string $mge
     * @param string $code
     * @param string $status
     * @param string $type
     * @return $this
     */
    public function transform($data,$mge='success',$code='0000',$status='200',$type='application/json') {

        $result = [
            'data' => $data,
            'message' => $mge,
            'code' => $code,
        ];

        return response()->json($result,$status)->header('Content-Type', $type);
    }

}