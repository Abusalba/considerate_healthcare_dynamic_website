<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Http\Exceptions\HttpResponseException;

class ProfileRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:250'],
            'email' => [
                'required',
                'email',
                'max:250',
                'string',
                Rule::unique('users', 'email')->ignore(auth()->id()),
            ],
            'password' => ['nullable', 'string', 'min:6', 'max:50'],
           'confirm_password' => [
                'required_with:password',
                'same:password'
            ],
        ];
    }
    /**
     * Custom message for validation
     *
     * @return array
     */
  public function messages(): array
    {
        return [
            'name.required' => 'The name field is required.',
            'name.string' => 'The name must be a valid string.',
            'name.max' => 'The name may not be greater than 250 characters.',

            'email.required' => 'The email field is required.',
            'email.email' => 'The email must be a valid email address.',
            'email.max' => 'The email may not be greater than 250 characters.',
            'email.string' => 'The email must be a valid string.',
            'email.unique' => 'This email address is already taken.',

            'password.string' => 'The password must be a string.',
            'password.min' => 'The password must be at least 6 characters.',
            'password.max' => 'The password may not be greater than 50 characters.',

            'confirm_password.same' => 'The confirm password must match the password.',
            'confirm_password.string' => 'The confirm password must be a string.',
            'confirm_password.min' => 'The confirm password must be at least 6 characters.',
            'confirm_password.max' => 'The confirm password may not be greater than 50 characters.',
            'confirm_password.required_with' => 'The confirm password is required when password is present.',
            'confirm_password.same' => 'The confirm password must match the password.',
        ];
    }

    /**
     * Handle a failed validation attempt.
     */
    protected function failedValidation(Validator $validator){
        throw new HttpResponseException(response()->json([
            'status' => false,
            'errors' => $validator->errors()
        ], 201));
    }
}
