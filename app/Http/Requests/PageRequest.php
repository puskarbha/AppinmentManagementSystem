<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PageRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title.en' => 'required|string',
            'description.en' => 'required|string',
            'title.np' => 'required|string',
            'description.np' => 'required|string',
            'status' => 'nullable'
        ];
    }
}
