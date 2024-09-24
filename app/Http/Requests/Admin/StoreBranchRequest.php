<?php

namespace App\Http\Requests\Admin;

use App\Models\Country;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Cache;
use Illuminate\Validation\Rule;

class StoreBranchRequest extends BaseAdminRequest
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
            'location' => ['required', 'url'],
            'country_id' => ['required', Rule::in(array_keys(Cache::get('countries_'.getCurrentLocale())))],
        ];
    }
}
