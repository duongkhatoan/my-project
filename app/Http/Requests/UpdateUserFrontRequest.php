<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserFrontRequest extends FormRequest
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
        $rules = [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'nullable|string|min:8|confirmed',
            'current_password' => 'nullable|string',
            'phone' => ['required', 'regex:/^(84|0[3|5|7|8|9])([0-9]{8,9})\b/'],
            'province' => 'string|nullable',
            'district' => 'string|nullable',
            'ward' => 'string|nullable',
            'address' => 'string|nullable',
        ];
        if ($this->input('email') && $this->input('email') !== $this->user()->email) {
            $rules['email'] = 'required|string|email|max:255|unique:users';
        } else {
            // Nếu email không thay đổi, loại bỏ quy tắc unique
            $rules['email'] = 'required|string|email|max:255';
        }
        // dd($this->input('province'));
        return $rules;

    }
    public function messages()
    {
        return [
            'phone.regex' => 'Số điện thoại không hợp lệ.',
            // Thêm các thông báo xác thực khác tại đây
        ];
    }
}
