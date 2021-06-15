<?php

namespace Modules\Ticket\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

final class TicketRequest extends FormRequest
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
            'backend.tickets.store' => [
                'pass_type_id' => 'required|integer',
                'user_id' => 'required|integer',
                'params' => 'nullable',
            ],

            'backend.tickets.update' => [
                'pass_type_id' => 'required|integer',
                'user_id' => 'required|integer',
                'params' => 'nullable',
            ]
        ];

        return $rules[$this->route()->getName()];
    }
}
