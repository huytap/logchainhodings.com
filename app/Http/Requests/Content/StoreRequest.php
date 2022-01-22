<?php

namespace App\Http\Requests\Content;

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
            'menu_id' => 'required',
            //'photo_upload' => 'required'
        ];
    }

    public function passes($attribute, $value)
    {
    }
    public function message()
    {
        return [
            'menu_id.required' => 'Please select a page',
            //'photo_upload.required' => 'Please select a file from your computer'
        ];
    }
}
