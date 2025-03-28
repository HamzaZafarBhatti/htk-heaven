<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AccidentClaimRequest extends FormRequest
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
            'email' => 'required|email',
            'full_name' => 'required|string',
            'phone' => 'required|string',
            'accident_date' => 'required|date',
            'car_registration_number' => 'required|string',
            'accident_fault' => 'required|string',
            // 'accident_location' => 'required|string',
            'accident_postcode' => 'required|string',
            'is_car_roadworthy' => 'required|string',
            'pictures' => 'array',
            'pictures.*' => 'image|mimes:jpg,jpeg,png|max:2048',
            'privacy_policy_accepted' => 'required|boolean',
        ];
    }
}
