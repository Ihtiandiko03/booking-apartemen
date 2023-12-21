<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;


class StoreFaqRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // return false;

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
            'question' => ['required'],
            'answer' => ['required'],
            'order' => ['required'],
        ];
    }

    public function messages(): array
    {
        return [
            'question.required' => 'Pertanyaan harus diisi',
            'answer.required' => 'Jawaban harus diisi',
            'order.required' => 'Urutan harus diisi',
        ];
    }
}
