<?php

namespace App\Activity;

use App\Models\User;
use Illuminate\Http\Request;

class LoginActivity {

    protected function credentials(Request $request){
        $credentials = $request->only('email', 'password');
        return $credentials;
    }

    public function authorize($userdata){
        $credentials = $this->credentials($userdata);
        if (!auth()->attempt($credentials)) {
            $error = 'Please check your credentials';
            return $error;
        }
        return $this->adminOrNot($userdata);
    }

    public function adminOrNot($userdata){
        $user = User::where('email', $userdata->email)->first();
        if($userdata->email == 'admin@gmail.com'){
            $data['is_admin'] = true;
            $token = auth()->user()->createToken('API Token')->accessToken;
            $user->update($data);
            return $token;
        } else {
            $token = auth()->user()->createToken('API Token')->accessToken;
            return $token;    
        }
    }

}


?>
