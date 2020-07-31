<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function login(){
        return view('login.login');
    }

    /**
     * Requset
     */
    public function index(){

        //接受值
        $username=request()->input('username');
        $username=request()->input('password');


        //把值传到api里面去




    }

    /**
     * 注册
     */
    public function add(){
        return view('login.index');
    }
}
