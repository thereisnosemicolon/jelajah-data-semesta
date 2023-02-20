<?php

namespace App\Http\Controllers\Auth;

use App\Activity\LoginActivity;
use App\Http\Controllers\Controller;
use App\Request\StoreFormLogin;

class Login extends Controller
{
    public function login(StoreFormLogin $request, LoginActivity $loginActivity){
        $login = $loginActivity->authorize($request);
        return response()->json(['messages' => $login], 200);
    }
}
