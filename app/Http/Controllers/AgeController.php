<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgeController extends Controller
{
    public function index()
    {
        return view('age.index');
    }

    public function post(Request $request)
    {
        $age = $request->age;
        return view('age.post')
            ->with([
                'age' => $age,
            ]);
    }
}
