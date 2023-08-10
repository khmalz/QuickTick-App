<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BusRequest extends FormRequest
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
            'company_id' => ['required'],
            'kode1' => ['required', 'string', 'max:10'],
            'kode2' => ['required', 'numeric', 'digits_between:1,6'],
            'kode' => ['required', 'string'],
            'name' => ['required', 'string', 'max:255'],
            'seat' => ['required', 'numeric', 'digits_between:1,3'],
        ];
    }
}
