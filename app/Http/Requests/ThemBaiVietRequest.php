<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ThemBaiVietRequest extends FormRequest
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
            'txttenbv' => 'required',
            'txttomtatnoidung' => 'required',
            'txtnoidungbv' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'txttenbv.required'     =>  'Không được để trống tên bv*',
            'txttomtatnoidung.required'     =>  'Không được để trống tóm tắt nội dung *',
            'txtnoidungbv.required'     =>  'Không được để trống nội dung BV *',
        ];
    }
}
