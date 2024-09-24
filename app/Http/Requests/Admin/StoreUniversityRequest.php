<?php

namespace App\Http\Requests\Admin;

use App\Models\Country;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Cache;
use Illuminate\Validation\Rule;

class StoreUniversityRequest extends BaseAdminRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        $is_image_required = isset($this->university) ? 'nullable' : 'required';
        return [
            'image' => [$is_image_required, 'image'],
            'name' => ['required', 'string'],
            'type' => ['required', 'string'],
            'description' => ['required', 'string'],
        ];
    }
}
