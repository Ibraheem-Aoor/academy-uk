<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreTeamMemberCategory extends BaseAdminRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        $unique_rule = !isset($this->id)
            ? 'unique:team_member_category_translations,name'
            : 'unique:team_member_category_translations,name,' . decrypt($this->id);
        return [
            'name' => ['required', 'string', $unique_rule],
            'order' => ['required', 'numeric'],
        ];
    }
}
