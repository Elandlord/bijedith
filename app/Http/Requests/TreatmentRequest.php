<?php

namespace App\Http\Requests;

use App\Treatment;
use Illuminate\Foundation\Http\FormRequest;

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
            'category'    => 'required|in:' . Treatment::CATEGORY_BEHANDELING . ',' . Treatment::CATEGORY_SPA,
            'name'        => 'required|max:100',
            'description' => 'required|max:2000',
            'image'       => $imageRule . '|image|mimes:png,jpg,jpeg|max:5120',
        ];
    }
}
