<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Repositories\UserRepository;
use App\User;

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
}
