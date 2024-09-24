<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreFamProjectCategoryRequest extends BaseAdminRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        $is_image_required = isset($this->id) ? 'nullable' : 'required';
        return [
            'image' => [$is_image_required, 'image'],
            'name' => ['required', 'string'],
        ];
    }
}
