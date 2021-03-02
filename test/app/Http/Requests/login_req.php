<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class login_req extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'username' => 'required|max:50|email',
            'password' => 'required|min:6|max:8'


        ];
    }


    public function messages(){
        return [

            'username.required' => "can't left empty...",
            'password.required' =>"can't left empty...",
            'username.exists' =>"email not found",
            'password.exists' =>"password not match"

        ];
    }
}
