<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePostAdminRequest extends FormRequest
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
            'category_id' => 'array',
            'category_id.*' => 'exists:post_categories,id',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'slug' => 'required|alpha_dash|max:255',
            'excerpt' => 'nullable|string',
            'description' => 'nullable|string',
        ];
    }
}
