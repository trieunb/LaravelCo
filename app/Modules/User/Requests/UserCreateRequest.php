<?php

namespace App\Modules\User\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserCreateRequest extends FormRequest
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
            'user_cd'       => 'required|unique:tb_user,user_cd',
            'password'      => 'required',
            'email'         => 'required|email|unique:tb_user,email',
            'first_name'    => 'required'
        ];
    }
    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'user_cd.required'      => 'The UserName is required',
            'password.required'     => 'The Password is required',
            'email.required'        => 'The Email is required',
            'first_name.required'   => 'The First name is required',
        ];
    }
}
