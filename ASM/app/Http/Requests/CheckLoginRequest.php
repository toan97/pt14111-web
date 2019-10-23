<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckLoginRequest extends FormRequest
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
            'email' => 'required|email',
            'password' => 'required|between:6,40|'
        ];
    }
     public function messages()
    {
        return
        [
            'email.required' => 'Email không được để trống',
            'email.email' => 'Email phải đúng định dạng',
            'password.required' => 'Mật khẩu không được để trống',
            'password.between' => 'Mật khẩu phải từ 6 đến 40 ký tự',
        ];
    }
}
