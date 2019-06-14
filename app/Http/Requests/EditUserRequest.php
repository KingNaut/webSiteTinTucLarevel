<?php

namespace App\Http\Requests;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class EditUserRequest extends FormRequest
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
            'email' => 'required|email',
            'txtlever'=>'required',
        ];
    }
    public function messages()
    {
        return [
            'txtname.required'     =>  'Không được để trống tên*',
            'email.required'     =>  'Không được để trống email*',
            'email.email'   =>  'Phải là định dạng email xxx@xxx.xxx *',
            'txtlever.required'     =>  'Không được để trống level*',
        ];
    }

}
