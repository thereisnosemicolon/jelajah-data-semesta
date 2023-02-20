<?php

namespace App\Repositories;

use App\Models\User;

class UserRepositories
{
    public function register($userdata){
        $data['name'] = $userdata->name;
        $data['email'] = $userdata->email;
        $data['password'] = bcrypt($userdata->password);
        $user = User::create($data);
        $data['token'] = $user->createToken('API Token')->accessToken;
        return $data;
    }
}


?>