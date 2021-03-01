<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class login_req extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'username' => 'required|max:50|email|bail',
            'password' => 'required|min:6'


        ];
    }


    public function messages(){
        return [

            'username.required' => "can't left empty...",
            'password.required' =>"can't left empty..."
        ];
    }
}
