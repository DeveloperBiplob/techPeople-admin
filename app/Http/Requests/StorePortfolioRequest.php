<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePortfolioRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'category_id' => ['required'],
            'title' => ['required', 'unique:portfolios', 'max:100'],
            'link' => ['required', 'string'],
            'description' => ['required', 'string'],
            'image' => ['required','mimes:png,jpg, jpeg']
        ];
    }
}
