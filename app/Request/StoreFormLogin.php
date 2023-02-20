<?php

namespace App\Request;

use Illuminate\Foundation\Http\FormRequest;

class StoreFormLogin extends FormRequest 
{

    public function authorize(){
        return 'true';
    }

    public function rules(){
        return [
            'email' => 'required|email:dns',
            'password' => 'required'
        ];
    }

    public function messages(){
        return [
            'email.required' => 'Please input your email',
            'email.email' => 'Your email must be your valid email',
            'password.required' => 'Please input your password'
        ];
    }

}

?>