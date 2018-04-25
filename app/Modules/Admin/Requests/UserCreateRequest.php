<?php

namespace App\Modules\Admin\Requests;

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
            'user_name'     => 'required|unique:tb_users,user_name',
            'password'      => 'required',
            'email'         => 'required|email|unique:tb_users,email',
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
            'user_name.required'    => 'The UserName is required',
            'password.required'     => 'The Password is required',
            'email.required'        => 'The Email is required',
            'first_name.required'   => 'The First name is required',
        ];
    }
}
