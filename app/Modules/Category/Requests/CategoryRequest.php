<?php

namespace App\Modules\Category\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class CategoryRequest extends FormRequest
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
        switch($request->segment(2)) {
            case 'create': 
                {
                    return [
                        'name'         => 'required|unique:tb_categories,name',
                        // 'image'        => 'required',
                    ];
                }
            case 'edit': 
                {
                    return [
                        'name'         => 'required|unique:tb_categories,name,'.$request->id,
                        // 'image'        => 'required',
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
            'name.required'    => 'The Name is required',
            // 'image.required'   => 'The Image is required',
        ];
    }
}