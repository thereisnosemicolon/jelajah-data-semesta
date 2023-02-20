<?php

namespace App\Request;

use Illuminate\Foundation\Http\FormRequest;

class StoreNews extends FormRequest 
{
    public function authorize(){
        return 'true';
    }

    public function rules(){
        return [
            'name' => 'required|unique:jdm_management_news',
            'image' => 'sometimes|required',
        ];
    }

    public function messages()
    {
        return [
            'unique' => 'Your news name already exist',
        ];
    }

}

?>