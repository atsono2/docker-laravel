<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

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

    public function search(Request $request)
    {
        $action = $request->get('action', 'back');
        $input = $request->except('action');

        if($request->action === 'back') {
            return view('test/menu');
        }

        return view('test.search');
    }

    public function update(Request $request)
    {
        $action = $request->get('action', 'back');
        $input = $request->except('action');

        if ($request->action == 'update') {
            // authserviceproviderでdefineしたadminルールを実行
            if (Gate::allows('admin')) {
                $response = $request->input('inputdata');
                return view('test.complete')->with(['input' => $response]);
            } else {
                session()->flash('adminmsg', 'あんた更新できないよ！');
                return view('test.update');
            }
        }

        if($request->action === 'back') {
            return view('test/menu');
        }

        return view('test.update');
    }

    public function complete(Request $request )
    {
        $action = $request->get('action', 'back');
        $input = $request->except('action');

        if($request->action === 'back') {
            return view('test/menu');
        }

        return view('test.complete')
            ->with([
                'input' => $input,
            ]);
    }
}
