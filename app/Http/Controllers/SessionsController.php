<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class SessionsController extends Controller
{
    /**
     * 用户登录页
     *
     * @return void
     **/
    public function create()
    {
        return view('sessions.create');
    }

    /**
     * 用户登录
     * @param Request $request Http请求
     *
     * @return void
     **/
    public function store(Request $request)
    {
        $credentials = $this->validate($request, [
            'email' => 'required|email|max:255',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            session()->flash('success', '欢迎回来！');
            return redirect()->route('users.show', [Auth::user()]);
        } else {
            session()->flash('danger', "很抱歉，您的邮箱和密码不匹配");
            return redirect()->back()->withInput();
        }
    }

    /**
     * 登出
     *
     * @return void
    **/
    public function destory()
    {

    }
}
