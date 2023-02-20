<?php

namespace App\Request;

use Illuminate\Foundation\Http\FormRequest;

class StoreFormRegister extends FormRequest 
{

    public function authorize(){
        return 'true';
    }

    public function rules(){
        return [
            'name' => 'required',
            'email' => 'required|email:dns',
            'password' => 'required'
        ];
    }

    public function messages(){
        return [
            'name.required' => 'Please input your name',
            'email.required' => 'Please input your email',
            'email.email' => 'Your email must be your valid email',
            'password.required' => 'Please input your password'
        ];
    }

}

?>