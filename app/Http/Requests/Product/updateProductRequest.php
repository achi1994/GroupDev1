<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class updateProductRequest extends FormRequest
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
            'name' => 'nullable|string|max:255',
            'price' => 'nullable|numeric|min:1',
            'description' => 'nullable|string|max:2550',
            'category' => 'nullable|string|max:255',
            'quantity' => 'nullable|integer|min:1'
        ];
    }
}
