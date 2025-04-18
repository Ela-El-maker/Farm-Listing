<?php

namespace App\Http\Requests\Rentee;

use Illuminate\Foundation\Http\FormRequest;

class RenteeProfileRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    // public function authorize(): bool
    // {
    //     return false;
    // }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "name" => "required|string",
            "email" => "required|email",
            "phone" => "required|string",
            "profile_image" => "mimes:png,jpeg,jpg,webp|max:4000",
            "banner" => "mimes:png,jpeg,jpg,webp|max:4000",
            "title" => "required|string",
        ];

    }
}
