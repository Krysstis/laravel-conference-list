<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ConferenceRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'date' => 'required|date',
            'address' => 'required|string|max:255',
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => __('conferences.validation.title_required'),
            'title.max' => __('conferences.validation.title_max'),
            'description.required' => __('conferences.validation.description_required'),
            'date.required' => __('conferences.validation.date_required'),
            'date.date' => __('conferences.validation.date_date'),
            'address.required' => __('conferences.validation.address_required'),
            'address.max' => __('conferences.validation.address_max'),
        ];
    }
}
