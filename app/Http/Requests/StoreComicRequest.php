<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
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
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'thumb' => 'nullable|string|max:255',
            'price' => 'required|numeric',
            'series' => 'required|string|max:255',
            'sale_date' => 'nullable|date',
            'type' => 'required|string|max:255',
        ];
    }

    /**
     * Get custom messages for validator errors.
     *
     * @return array
     */
    public function messages(): array
    {
        return [
            'title.required' => 'Il titolo è obbligatorio.',
            'description.string' => 'La descrizione deve essere un testo.',
            'thumb.string' => 'Il campo poster deve essere un testo.',
            'price.required' => 'Il prezzo è obbligatorio.',
            'price.numeric' => 'Il prezzo deve essere un numero.',
            'series.required' => 'La serie è obbligatoria.',
            'series.string' => 'La serie deve essere un testo.',
            'sale_date.date' => 'La data di riedizione deve essere una data valida.',
            'type.required' => 'La tipologia è obbligatoria.',
            'type.string' => 'La tipologia deve essere un testo.',
        ];
    }
}
