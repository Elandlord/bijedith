<?php

namespace App\Http\Requests\Api;

use App\Models\Treatment;
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
        $required = $this->isMethod('POST') ? 'required' : 'sometimes';

        return [
            'category'        => [$required, Rule::in([Treatment::CATEGORY_PEDICURE, Treatment::CATEGORY_SPA])],
            'name'            => [$required, 'string', 'max:255'],
            'description'     => [$required, 'string'],
            'image_path'      => ['nullable', 'string', 'max:255'],
            'webp_image_path' => ['nullable', 'string', 'max:255'],
            'position'        => ['sometimes', 'integer', 'min:0'],
        ];
    }
}
