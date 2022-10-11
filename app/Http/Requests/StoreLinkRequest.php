<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreLinkRequest extends FormRequest
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
            "title"          => "required|string|min:3",
            "author"         => "required|string|min:5",
            "resource_url"   => "required|string",
        ];
    }


    /**
     * Custom message for validation
     *
     * @return array
     */
    public function messages()
    {
        return [
            'title.required' => 'Title must at least 3 characters!',
            'author.required' => 'Author title must at least 3 characters!',
            'resource_url.required' => 'URL not formatted correctly!'
        ];
    }
}
