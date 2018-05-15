<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginSigninRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'admin_name' => 'required',
            'admin_name' => 'exists:administrators',
            'password' => 'required|min:6',
        ];
    }

    /**
     * @return array
     */
    public function messages()
    {
        return [
            'admin_name.required' => '用户名必填',
            'admin_name.exists' => '用户名不存在或者无权访问',
            'password.required' => '用户名或密码错误',
            'password.min' => '密码不够六位数',
        ];
    }
}
