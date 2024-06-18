<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEstateRequest extends FormRequest
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
            'kategoria' => ['required', 'exists:kategoriak,id'],
            'leiras' => ['string','max:500'],
            'hirdetesDatuma' => ['required', 'date'],
            'tehermentes' => ['required','boolean'],
            'ar' => ['required', 'numeric'],
            'kepUrl' => ['string','max:200'],
        ];
    }
}
