<?php

namespace App\Http\Controllers;

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
}
