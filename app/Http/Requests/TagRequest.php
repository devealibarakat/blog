<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class TagRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }
    public function rules(): array
    {
        $locales = array_keys(LaravelLocalization::getSupportedLocales());

        foreach ($locales as $locale) {
            $rules['name.' . $locale] = ['required', 'string', 'max:255'];
        }

        return $rules;
    }
}
