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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "firstname" => "required|min:3",
            "email" => "email|unique:contact",
            "status" => "required"
        ];
    }

    public function messages() : array
    {
        return [
            "firstname.required" => "The firstname is required",
            "email.email" => "The email is not correct",
            "email.unique" => "This email is already used",
            "status.required" => "the status is required" 
        ];
    }
}
