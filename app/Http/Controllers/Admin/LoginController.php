<?php

namespace App\Http\Controllers\Admin;

use App\Administrator;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\LoginSigninRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    /**
     * 管理员登录
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|\Illuminate\View\View
     */
    public function login() {

        if (session('admin_user')){

            return redirect('/admin/index');

        }

        return view('admin.login');

    }

    /**
     * @param LoginSigninRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function loginCheck(LoginSigninRequest $request) {

        $admin = Administrator::where('admin_name',$request->get('admin_name'))->first();

        if (!Hash::check($request->get('password'),$admin['password'])){

            return redirect('/admin/login')->with('message','0');

        }

        session(['admin_user' => $admin]);

        return redirect('/admin/index')->with('message','1');

    }

    /**
     * 管理员退出
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout() {

        session()->forget('admin_user');
        return redirect('admin/login')->with('message','3');

    }

}
