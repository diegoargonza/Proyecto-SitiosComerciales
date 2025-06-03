<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSaleRequest extends FormRequest
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
            'name' => 'required | min:3 | max:255',
            'category_id' => 'required',
            'fecha' => 'required | date',
            'subtotal' => 'required',
            'iva' => 'required',
            'cantidad' => 'required',
            'total' => 'required',
            'observaciones' => '',
            'is_status' => ''
        ];
    }
}
