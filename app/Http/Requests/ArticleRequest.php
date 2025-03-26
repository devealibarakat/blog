<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class ArticleRequest extends FormRequest
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
        $locales = array_keys(LaravelLocalization::getSupportedLocales());
        $rules = [
            'tags' => 'required|array',
            'tags.*' => 'exists:tags,id'
        ];

        foreach ($locales as $locale) {
            $rules["title.$locale"] = ['required', 'string', 'max:255'];
            $rules["short_description.$locale"] = ['nullable', 'string', 'max:500'];
            $rules["description.$locale"] = ['nullable', 'string'];
            $rules["meta_keywords.$locale"] = ['nullable', 'string', 'max:255'];
        }

        return $rules;
    }
}
