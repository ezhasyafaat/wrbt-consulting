<?php

namespace App\Http\Requests\Ahli;

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
            'name' => [
                'required',
                'string',
            ],
            'image' => [
                'mimes:png,jpg,jpeg',
                'max:10000',
            ],
            'position' => [
                'required',
                'string',
            ],
            'about' => [
                'required',
                'string',
            ],
            'short_desc' => [
                'required',
                'string',
            ]
        ];
    }
}
