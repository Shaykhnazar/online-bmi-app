<?php

namespace Modules\Tasks\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

final class TasksRequest extends FormRequest
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
            'backend.tasks.store' => [
                'name' => 'required|string|unique:tasks',
                'percent' => 'required|integer|max:100|min:1',
                'deadline' => 'required|date',
            ],

            'backend.tasks.update' => [
                'name' => 'required|string|unique:tasks',
                'percent' => 'required|integer|max:100|min:1',
                'deadline' => 'required|date',
            ]
        ];

        return $rules[$this->route()->getName()];
    }

    public function attributes()
    {
        return [
            'name' =>'Topshiriq nomi',
            'percent' =>'Umumiy ulushi(% larda)',
            'deadline' =>'Bajarish muddati',
        ];
    }
}
