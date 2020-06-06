<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Myclass;

class ServiceController extends Controller
{
    public function index ()
    {
        app()->bind('myName', function() {
            return 'Ono';
        });

        return resolve('myName');
    }

    public function call(Myclass $myclass)
    {
        // AppServiceProviderでbindている
        // サービスコンテナにbindしたため、Slackクラスへの依存解決は自動で行ってくれる
        // 下記コードで、Myclassのrunメソッドが呼ばれる
        return resolve('myclass')->run();
    }
}
