<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ThemUserRequest extends FormRequest
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
            'txtname' => 'required',//->bắt buộc nhap
            'txtemail' => 'required|email|unique:users,email',
            'txtlever'=>'required',
            'txtmatkhau'=>'required|min:6',
            'txtnlmatkhau'=>'same:txtmatkhau',
        ];
    }
    public function messages()
    {
        return [
            'txtname.required'     =>  'Không được để trống tên*',
            'txtemail.required'     =>  'Không được để trống email*',
            'txtemail.unique'     =>  'email phải là duy nhất*',
            'txtemail.email'   =>  'Phải là định dạng email xxx@xxx.xxx *',
            'txtlever.required'     =>  'Không được để trống level*',
            'txtmatkhau.required'=> 'Không được để trống Mật Khẩu ',
            'txtmatkhau.min' => 'Mật khẩu tối thiểu 6 ký tự',
            'txtnlmatkhau.same'=>'Không Trùng Khớp',
        ];
    }
}


