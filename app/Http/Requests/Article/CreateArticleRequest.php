<?php

namespace App\Http\Requests\Article;

use App\Facades\Article;
use Illuminate\Foundation\Http\FormRequest;

class CreateArticleRequest extends FormRequest
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
            'title' => 'required|string',
            'image' => 'required|image|mimes:jpg,webp,png,jpeg,gif,svg|max:10240|dimensions:min_width=100,min_height=100,max_width=10000,max_height=10000',
            'preview_text' => 'required|string|min:3|max:50',
            'detail_text' => 'required|string'
        ];
    }

}
