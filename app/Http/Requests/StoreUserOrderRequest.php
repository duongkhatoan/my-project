<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserOrderRequest extends FormRequest
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

        // dd($this->all());
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => ['required', 'regex:/^(84|0[3|5|7|8|9])([0-9]{8,9})\b/'],
            'province' => 'string|nullable',
            'district' => 'string|nullable',
            'ward' => 'string|nullable',
            'address' => 'string|nullable',
            'remember' =>'boolean',
            'cartItems' =>'required|json'
            // 'shipping_address' => 'required|string',
            // 'billing_address' => 'nullable|string',
            // 'payment_method' => 'required|string|max:255',
            // 'shipping_method' => 'required|string|max:255',
            // Các quy tắc validation cho các trường khác
        ];
    }
}
