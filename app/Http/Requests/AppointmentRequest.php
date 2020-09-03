<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AppointmentRequest extends FormRequest
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
        return [
            'name'          => 'required|min:2|max:50',
            'email'         => 'required|email|min:5|max:100',
            'procedure'     => 'required|in:pedicure,spabehandeling',
            'phone'         => 'required|min:5|max:25',
            'message'       => 'nullable|max:350',
            'opt_in'        => 'required|accepted',
        ];
    }
}
