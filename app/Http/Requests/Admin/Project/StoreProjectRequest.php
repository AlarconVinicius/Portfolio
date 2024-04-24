<?php

namespace App\Http\Requests\Admin\Project;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreProjectRequest extends FormRequest
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
            'title' => [
                'required',
                'string',
                'min:3',
                'max:200',
                Rule::unique('projects', 'title')->ignore($this->id, 'id')
            ],
            'description' => [
                'required',
                'string',
                'min:3',
                'max:255'
            ],
            'language' => [
                'required',
                'string',
                'min:2',
                'max:100'
            ],
            'link' => [
                'required',
                'url'
            ],
        ];
    }
}
