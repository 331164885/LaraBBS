<?php

namespace App\Http\Controllers;

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
}
