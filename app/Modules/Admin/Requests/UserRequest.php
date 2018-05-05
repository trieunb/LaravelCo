<?php

namespace App\Modules\Admin\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class UserRequest extends FormRequest
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
    public function rules(Request $request)
    {
        switch($request->segment(3)) {
            case 'create': 
                {
                    return [
                        'user_name'                 => 'required|unique:tb_users,user_name',
                        'password'                  => 'required|confirmed|min:6',
                        'password_confirmation'     => 'required|min:6',
                        'email'                     => 'required|email|unique:tb_users,email',
                        'first_name'                => 'required',
                        'is_role'                   => 'required',
                    ];
                }
            case 'edit': 
                {
                    return [
                        'user_name'     => 'required',
                        'email'         => 'required',
                        'first_name'    => 'required',
                        'last_name'     => 'required',
                        'is_role'       => 'required'
                    ];
                }
            default:break;
        }
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
