<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class HomePageTestmoinalRequest extends BaseAdminRequest
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
            'name' => ['required', 'string'],
            'location' => ['required', 'string'],
            'feedback' => ['required', 'string'],
        ];
    }
}
