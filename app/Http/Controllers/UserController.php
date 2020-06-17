<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Repositories\UserRepository;
use App\User;
use Illuminate\Support\Facades\Cache;

class UserController extends Controller
{
    protected $user_repository;

    public function __construct(UserRepository $users)
    {
        $this->user_repository = $users;
    }

    public function show ($id = 1)
    {
        $user = $this->user_repository->find($id);

        return view('user.index')
            ->with([
                'user' => $user,
            ]);
    }

    public function storeCache ()
    {
        // Dockerfileにmemcachedインストールの記述を追加 pecl install memcached が必要
        Cache::put('cachedName', 'atsushi', 600);

        return 'ok';
    }

    public function showCache ()
    {
        $name = Cache::get('cachedName');

        return $name;
    }
}
