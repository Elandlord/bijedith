<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class TreatmentRequest extends FormRequest
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
        $imageRule = $this->isMethod('post') ? 'required' : 'nullable';

        return [
            'type'        => 'required|in:pedicure,spa',
            'name'        => [
                'required',
                'min:2',
                'max:255',
                Rule::unique('treatments', 'name')->ignore($this->route('treatment')),
            ],
            'description' => 'required',
            'image'       => $imageRule . '|image|max:4096',
        ];
    }
}
