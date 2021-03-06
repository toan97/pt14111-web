<?php

namespace App\Http\Requests\Post;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'title' => 'required|max:100|unique:posts,title',
            'content' => 'required'
        ];
    }
    public function messages()
    {
        return
        [
            'title.required' => 'Tiêu đề không được để trống',
            'title.max' => 'Tiêu đề không vượt quá 100 ký tự',
            'title.unique' => 'Tiêu bài viết đã tồn tại vui lòng chọn tiêu đề khác',
            'content.required' => 'Nội dung bài viết không được để trống'
        ];
    }
}
