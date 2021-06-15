<?php

namespace Modules\Passport\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

final class PassportRequest extends FormRequest
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
    public function rules(): array
    {
        $rules = [
            'backend.passports.store' => [
                'code' => [
                    'required',
                    'max:100',
                    Rule::unique('passports', 'code'),
                ],
                'type_id' => 'required|integer',
                'user_id' => 'required|integer',
                'expired_at' => 'required|date',
                'params' => 'nullable',
            ],

            'backend.passports.update' => [
                'code' => [
                    'required',
                    'max:100',
                    Rule::unique('passports', 'code')->ignore($this->id),
                ],
                'type_id' => 'required|integer',
                'user_id' => 'required|integer',
                'expired_at' => 'required|date',
                'params' => 'nullable',
            ]
        ];

        return $rules[$this->route()->getName()];
    }
}
