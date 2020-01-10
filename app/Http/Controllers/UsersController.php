<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public function index() {
        $data = [];

        $data['user_info'] = \Auth::user();

        return view('user.profile',$data);
    }

    public function addCoin(Request $request) {

        return User::addCoins($request->get('count'));

    }
}
