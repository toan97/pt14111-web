<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
            'title' => 'required|max:100|unique:posts,title'
        ];
    }
    public function messages()
    {
        return
        [
            'title.required' => 'Tiêu đề không được để trống',
            'title.max' => 'Tiêu đề không vượt quá 100 ký tự',
            'title.unique' => 'Tiêu bài viết đã tồn tại vui lòng chọn tên khác'
        ];
    }
}
