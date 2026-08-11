<?php

namespace App\Http\Requests;

use App\Treatment;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class AppointmentRequest extends FormRequest
{
    /**
     * Fallback options used when no Treatment records exist yet, so the
     * form never hard-fails validation for a customer.
     *
     * @var array
     */
    private const FALLBACK_PROCEDURES = ['pedicure', 'spabehandeling'];

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
        $procedures = Treatment::pluck('name')->all() ?: self::FALLBACK_PROCEDURES;

        return [
            'name'          => 'required|min:2|max:50',
            'email'         => 'required|email|min:5|max:100',
            'procedure'     => ['required', Rule::in($procedures)],
            'phone'         => 'required|min:5|max:25|regex:/^[0-9+\-\s()]+$/',
            'message'       => 'nullable|max:350',
            'opt_in'        => 'required|accepted',
        ];
    }
}
