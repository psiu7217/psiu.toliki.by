<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */


    public function index()
    {
        /**
         * Если пользователь не авторизирован
         * То мы показываем ему страницу приветсвия с информацией о сайте
         */
        if (!Auth::user()) {
            return view('welcome');
        }

        $data = [];





        return view('home',$data);
    }
}
