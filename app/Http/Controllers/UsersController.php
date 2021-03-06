<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\User;
use Illuminate\Http\Request;

/**
 * @author Peter的游击战 <wakeupzombieis@gmail.com>
 *
 **/
class UsersController extends Controller
{
    /**
     * 用户注册
     *
     * @return void
     **/
    public function create()
    {
        return view('users.create');
    }

    /**
     * 用户中心页
     * @param User $user 用户信息
     *
     * @return void
     */
    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    /**
     * 创建用户
     * @param Request $request Http请求
     *
     * @return void
     **/
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:50',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|confirmed|min:6'
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        Auth::login($user);
        session()->flash('success', '欢迎，您将在这里开启一段新的旅程~');
        return redirect()->route('users.show', [$user]);
    }
}
