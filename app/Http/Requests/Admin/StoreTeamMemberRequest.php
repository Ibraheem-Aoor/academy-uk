<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreTeamMemberRequest extends BaseAdminRequest
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
            'designation' => ['required', 'string'],
            'facebook' => ['nullable', 'url'],
            'instagram' => ['nullable', 'url'],
            'linkedin' => ['nullable', 'url'],
            'twitter' => ['nullable', 'url'],
        ];
    }
}
