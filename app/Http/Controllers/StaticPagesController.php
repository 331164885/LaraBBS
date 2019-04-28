<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * @author Peter的游击战 <wakeupzombieis@gmail.com>
 *
 * @deprecated 静态页面
 **/
class StaticPagesController extends Controller
{
    /**
     * 主页
     *
     * @return void
     **/
    public function home()
    {
        return view('static_pages/home');
    }

    /**
     * 帮助页
     *
     * @return void
     **/
    public function help()
    {
        return view('static_pages/help');
    }

    /**
     * 关于我们页
     *
     * @return void
     **/
    public function about()
    {
        return view('static_pages/about');
    }
}
