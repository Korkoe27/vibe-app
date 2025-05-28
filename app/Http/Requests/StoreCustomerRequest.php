<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCustomerRequest extends FormRequest
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
            "first_name" => "required|string|max:255",
            "last_name" =>"required|string|max:255",
            "email" => "required|string|email|max:255|unique:customers,email",
            "phone"=> "required|string|max:255|unique:customers,phone",
            "address"=>"nullable|string|max:255",
            "city"=>"nullable|string|max:255",
            "state"=>"nullable|string|max:255",
            "country"=>"nullable|string|max:255",
            "profile_image" => "nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048",
        ];
    }
}
