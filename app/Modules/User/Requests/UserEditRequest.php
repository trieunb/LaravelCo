<?php

namespace App\Modules\User\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserEditRequest extends FormRequest
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
            'user_cd'       => 'required',
            'email'         => 'required',
            'first_name'    => 'required',
            'last_name'     => 'required'
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
            'user_cd.required'      => 'A user name attribute is required',
            'email.required'        => 'An email attribute is required',
            'first_name.required'   => 'An first name attribute is required',
            'last_name.required'    => 'An last name attribute is required',
        ];
    }
}
