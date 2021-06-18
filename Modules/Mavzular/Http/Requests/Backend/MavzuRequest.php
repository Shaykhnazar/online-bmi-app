<?php

namespace Modules\Mavzular\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

final class MavzuRequest extends FormRequest
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
            'backend.mavzular.store' => [
                'mavzu' => ['required', 'string', Rule::unique('mavzular', 'mavzu'), 'max:100'],
            ],

            'backend.mavzular.update' => [
                'mavzu' => ['required', 'string', Rule::unique('mavzular', 'mavzu')->ignore($this->id)],
            ]
        ];

        return $rules[$this->route()->getName()];
    }
}
