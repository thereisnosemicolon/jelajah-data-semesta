<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Resources\RegisterResponse;
use App\Models\User;
use App\Repositories\UserRepositories;
use App\Request\StoreFormRegister;

class Register extends Controller
{
    public function regist(StoreFormRegister $request, UserRepositories $userRepositories){
        $user = $userRepositories->register($request);
        return new RegisterResponse($user);
        // return response()->json(['messages' => $user]);
    }
}
