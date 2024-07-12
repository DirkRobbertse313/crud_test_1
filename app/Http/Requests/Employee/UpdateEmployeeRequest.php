<?php

namespace App\Http\Requests\Employee;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEmployeeRequest extends FormRequest
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
            'first_name'    =>  'required|string|max:60',
            'last_name'     =>  'required|string|max:60',
            'email'         =>  'required|email|max:60',
            'phone'         =>  'required|string|max:20',
            'address'       =>  'required|string|max:255',
            'city'          =>  'required|string|max:60',
            'state'         =>  'required|string|max:60',
            'postal_code'   =>  'required|string|max:20',
            'country'       =>  'required|string|max:60',
            'date_of_birth' =>  'required|string|max:60',
            'position'      =>  'required|string|max:30',
            'salary'        =>  'required|numeric|min:0',
            'date_hired'    =>  'required|date',
        ];
    }
}
