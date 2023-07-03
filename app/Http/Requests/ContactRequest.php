<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'email' => 'required|email|min:5|max:100',
            'title' => 'required|min:5|max:100',
            'message' => 'required|min:15|max:2000',
        ];
    }

    public function messages()
    {
        return
            [
                'name.required' => "Поле ім'я є обов'язковим!",
                'email.required' => "Поле email є обов'язковим!",
                'title.required' => "Поле тема є обов'язковим!",
                'message.required' => "Поле повідомлення є обов'язковим!",
            ];
    }
}
