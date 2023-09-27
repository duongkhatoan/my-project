<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductAdminRequest extends FormRequest
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
            'name' => 'required',
            'excerpt' => 'nullable|string',
            'description' => 'nullable|string',
            'category_id' => 'array',
            'category_id.*' => 'exists:categories,id',
            'brand_id' => 'exists:brands,id',
            'discount_price' => 'numeric|min:' . ($this->input('discount_price') ?? 0),
            'sell_price' => 'numeric',
            'slug' => 'required|string',
            'variant' => 'array',
            'variants' => 'array',
        ];
    }
}
