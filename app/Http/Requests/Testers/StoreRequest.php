<?php

namespace App\Http\Requests\Testers;

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
            'name' => 'required',
            'photo_upload' => 'required',
            'content' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Vui lòng nhập tên máy xét nghiệm',
            'photo_upload.required' => 'Vui lòng chọn hình ảnh',
            'content.required' => 'Vui lòng nhập nội dung'
        ];
    }
}
