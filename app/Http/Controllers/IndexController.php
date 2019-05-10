<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    // 首页
    public function home(){
        return view('index.layouts.index');
    }
    /**
     * @return string 帮助
     */
    public function help(){
        return '帮助';
    }

    /**
     * @return string //联系我们
     */
    public function content(){
        return '联系我们';
    }



}
