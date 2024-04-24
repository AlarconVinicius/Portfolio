<?php

namespace App\Http\Requests\Admin\ProfileInformation;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreProfileInformationRequest extends FormRequest
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
            'about' => [
                'required',
                'string',
                'min:3',
            ],
            'specialty_text' => [
                'required',
                'string',
                'min:3',
            ],
            'specialty' => [
                'required',
                'string',
                'min:2',
                'max:255'
            ],
            'contact_me' => [
                'required',
                'string',
                'min:3',
            ],
            'name' => [
                'required',
                'string',
                'min:3',
                'max:100'
            ],
            'address' => [
                'required',
                'string',
                'min:3',
                'max:100'
            ],
            'email' => [
                'required',
                'email',
                'min:3',
                'max:100'
            ],
            'resume_link' => [
                'required',
                'url'
            ],
            'linkedin_link' => [
                'required',
                'url'
            ],
            'user_id' => [
                'required',
                'exists:users,id',
                Rule::unique('profile_information', 'user_id')->ignore($this->id, 'id')
            ]
        ];
    }
}
