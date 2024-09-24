<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreTrainingProgramRequest extends BaseAdminRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'image' => ['required', 'image'],
            'category_id' => ['required'],
            'feature_1' => ['required', 'string'],
            'feature_2' => ['required', 'string'],
            'feature_3' => ['required', 'string'],
            'quick_description' => ['required', 'string'],
            'description' => ['required', 'string'],
            'theme' => ['required', 'string'],
        ];
    }
}
