<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateLinkRequest extends FormRequest
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
            "id"             => "required|integer",
            "title"          => "string|min:3",
            "description"    => "string",
            "author"         => "string|min:5",
            "resource_url"   => "string",
            "status"         => "integer",
            "total_click"    => "integer",
        ];
    }
}
