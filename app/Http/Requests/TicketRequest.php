<?php

namespace App\Http\Requests;

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
            'frontend.ticket.post' => [
                'first_name' => 'required|string|min:3|max:30',
                'last_name' => 'required|string|min:3|max:30',
                'pass_type_id' => 'required|integer',
                'date_of_birth' => 'required|date',
                'avatar' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            ],
        ];

        return $rules[$this->route()->getName()];
    }
}
