<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MenuController extends Controller
{
    public function menu()
    {
        // ログインしていなかったらログイン画面に遷移
        if (Auth::check()) {
            return view('test.menu');
        } else {
            return view('auth.login');
        }

    }
}
