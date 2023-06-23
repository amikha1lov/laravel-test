<?php

namespace App\Http\Requests\Article;

use Illuminate\Foundation\Http\FormRequest;

class UpdateArticleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'string',
            'image' => 'image|mimes:jpg,webp,png,jpeg,gif,svg|max:10240|dimensions:min_width=100,min_height=100,max_width=10000,max_height=10000',
            'preview_text' => 'string|min:3|max:50',
            'detail_text' => 'string'
        ];
    }
}
