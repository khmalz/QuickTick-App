<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RuteRequest extends FormRequest
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
            'bus_id' => ['required'],
            'asal' => ['required', 'string', 'max:100'],
            'tujuan' => ['required', 'string', 'max:100'],
            'rute_awal' => ['required', 'string', 'max:100'],
            'rute_akhir' => ['required', 'string', 'max:100'],
            'harga' => ['required', 'numeric', 'min:0'],
            'departure' => ['required', 'string'],
        ];
    }
}
