<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SuaChuyenMucRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'txttencm' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'txttencm.required'     =>  'Không được để trống tên chuyên mục*',
        ];
    }
}
