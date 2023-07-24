<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductAdminRequest extends FormRequest
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
        $discountPrice = $this->input('discount_price') ?? 0;
        return [
            'name' => 'required',
            'excerpt' => 'nullable|string',
            'description' => 'nullable|string',
            'category_id' => 'array',
            'category_id.*' => 'exists:categories,id',
            'discount_price' => 'nullable|numeric',
            'sell_price' => 'nullable|numeric|min:' . ($this->input('discount_price') ?? 0),
        ];
    }
}
