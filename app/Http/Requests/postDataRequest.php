<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class postDataRequest extends FormRequest
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
            "image" => "required | image"
        ];
    }
    public function messages()
    {
        return [
            'image.required' => 'ファイルを選択してください',
            'image.image' => '写真・画像のファイルを選択してください'
        ];
    }
}
