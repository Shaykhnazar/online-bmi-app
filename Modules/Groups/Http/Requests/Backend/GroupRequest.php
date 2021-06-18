<?php

namespace Modules\Groups\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

final class GroupRequest extends FormRequest
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
            'backend.groups.store' => [
                'group_name' => 'required|string|unique:groups',
            ],

            'backend.groups.update' => [
                'group_name' => ['required', 'string', Rule::unique('groups', 'group_name')->ignore($this->id)],
            ]
        ];

        return $rules[$this->route()->getName()];
    }
}
