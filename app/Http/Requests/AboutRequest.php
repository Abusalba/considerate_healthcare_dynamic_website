<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Http\Exceptions\HttpResponseException;

class AboutRequest extends FormRequest
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
      $id = $this->about;
        return [
            'title' => [
                'required',
                'string',
                'max:250',
                Rule::unique('abouts', 'title')->ignore($id),
            ],
            'description' => ['required', 'string'],
            'image' => [$id ? 'nullable' : 'required', 'file', 'mimes:jpg,jpeg,png,webp', 'max:2048'],
            'image2' => [$id ? 'nullable' : 'required', 'file', 'mimes:jpg,jpeg,png,webp', 'max:2048'],
        ];
    }
    public function messages(): array
    {
        return [
            'title.required' => 'The about title is required.',
            'title.string' => 'The about title must be a string.',
            'title.max' => 'The about title must not exceed 250 characters.',
            'title.unique' => 'This about title has already been taken.',

            'description.required' => 'The about description is required.',
            'description.string' => 'The about description must be a string.',
            'description.max' => 'The about description must not exceed 500 characters.',

            'image.required' => 'An about image is required.',
            'image2.required' => 'An about image2 is required.',
            'image.file' => 'The uploaded about image must be a file.',
            'image2.file' => 'The uploaded about image2 must be a file.',
            'image.mimes' => 'Allowed about image types are jpg, jpeg, png, and webp.',
            'image2.mimes' => 'Allowed about image2 types are jpg, jpeg, png, and webp.',
            'image.max' => 'About image must not exceed 2MB in size.',
            'image2.max' => 'About image2 must not exceed 2MB in size.',
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'status' => false,
            'errors' => $validator->errors()
        ], 201));
    }
}
