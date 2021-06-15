<?php

namespace Modules\Passport\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

final class PassportTypeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [
            'backend.passport_types.store' => [
                'name' => [
                    'required',
                    'string',
                    'max:50',
                    Rule::unique('passport_type', 'name'),
                ],
            ],

            'backend.passport_types.update' => [
                'name' => [
                    'required',
                    'string',
                    'max:50',
                    Rule::unique('passport_type', 'name')->ignore($this->id),
                ],
            ]
        ];

        return $rules[$this->route()->getName()];
    }
}
