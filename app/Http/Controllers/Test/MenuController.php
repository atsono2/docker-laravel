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

    public function search(Request $request)
    {
        $action = $request->get('action', 'back');
        $input = $request->except('action');

        if($request->action === 'back') {
            return view('test/menu');
        }

        return view('test.search');
    }

    public function update(Request $request )
    {
        $action = $request->get('action', 'back');
        $input = $request->except('action');

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
