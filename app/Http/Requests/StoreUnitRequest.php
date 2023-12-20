<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class StoreUnitRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nama_unit' => ['required', 'max:255'],
            'deskripsi_unit' => ['required', 'max:1000'],
        ];
    }

    public function messages(): array
    {
        return [
            'nama_unit.required' => 'Nama unit harus diisi',
            'deskripsi_unit.required' => 'Deskripsi harus diisi',
        ];
    }
}
