<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Http\Exceptions\HttpResponseException;

class BlogRequest extends FormRequest
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
        $id = $this->blog;
        return [
            'title' => [
                'required',
                'string',
                'max:250',
                Rule::unique('blogs', 'title')->ignore($id),
            ],
            'description' => ['required', 'string'],
            'image' => [$id ? 'nullable' : 'required', 'file', 'mimes:jpg,jpeg,png,webp', 'max:2048'],
            'date' => ['required', 'date'],
        ];
    }
     public function messages(): array
    {
        return [
            'title.required' => 'The blog title is required.',
            'title.string' => 'The blog title must be a string.',
            'title.max' => 'The blog title must not exceed 250 characters.',
            'title.unique' => 'This blog title has already been taken.',
            
            'description.required' => 'The description is required.',
            'description.string' => 'The description must be a string.',
            'description.max' => 'The description must not exceed 500 characters.',

            'image.required' => 'An image is required.',
            'image.file' => 'The uploaded image must be a file.',
            'image.mimes' => 'Allowed image types are jpg, jpeg, png, and webp.',
            'image.max' => 'Image must not exceed 2MB in size.',

            'date.required' => 'The publish date is required.',
            'date.date' => 'The date must be a valid date.',
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
