<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'name' => 'required|max:50',
            'email' => 'required|email',
            'birthday' => 'required',
            'phone_number' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Tên không được để trống',
            'name.max' => 'Tên không được dài quá 50 ký tự',
            'email.required' => 'Email không được để trống',
            'email.email' => 'Email phải đúng định dạng',
            'birthday.required' => 'Ngày sinh không được để trống',
            'phone_number.required' => 'Số điện thoại không được để trống'
        ];
    }
}
