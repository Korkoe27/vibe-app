<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOrganizationRequest extends FormRequest
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
            'name'=>'required|string|max:255',
            'email'=>'required|string|email|max:255|unique:organizations,email',
            'phone'=>"required|string|max:255|unique:organizations,phone",
            'address'=>'nullable|string|max:255',
            'city'=>'nullable|string|max:255',
            'state'=>'nullable|string|max:255',
            'country'=>'nullable|string|max:255',
            'zip_code'=>'nullable|string|max:20',
            'logo'=>'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'website'=>'nullable|url|max:255',
        ];
    }
}
