<?php

namespace App\Http\Requests\Admin\Project;

class UpdateProjectRequest extends StoreProjectRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $rules = parent::rules();

        //Example
        // $rules['password'] =
        // [
        //     'nullable',
        //     'min:6',
        //     'max:12'
        // ];
        return $rules;
    }
}
