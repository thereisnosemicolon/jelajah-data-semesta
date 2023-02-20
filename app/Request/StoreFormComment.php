<?php

namespace App\Request;

use Illuminate\Foundation\Http\FormRequest;

class StoreFormComment extends FormRequest 
{

    public function authorize(){
        return 'true';
    }

    public function rules(){
        return [
            'news_id' => 'required|exists:jdm_management_news,id',
            'comments' => 'required',
        ];
    }

    public function messages(){
        return [
            'news_id.required' => 'Please input your news id',
            'news_id.exists' => 'This news is not exist',
            'comments.required' => 'Please input your comments',
        ];
    }

}

?>