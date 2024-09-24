<?php

namespace App\Transformers\Admin;

use App\Models\TeamMember;
use League\Fractal\TransformerAbstract;

class TeamTransfromer extends TransformerAbstract
{
    /**
     * @param \App\Models\TeamMember $teamMember
     * @return array
     */
    public function transform(TeamMember $teamMember): array
    {
        return [
            'id' => $teamMember->id,
            'image' => '<img src="' . getImageUrl($teamMember->image) . '" width="100" height="100"/>',
            'name' => $teamMember->name,
            'category' => $teamMember->category->name,
            'status' => $this->getStatusColumn($teamMember),
            'created_at' => $teamMember->created_at->format('Y-m-d H:i:s'),
            'actions' => $this->getActions($teamMember),
        ];
    }

    public function getActions(TeamMember $teamMember)
    {
        return '<div class="text-end p-3">
        <a data-method="POST" data-bs-toggle="modal"
            data-header-title="' . __('general.update_team_member') . ': ' . $teamMember->name . '"
            data-bs-target="#team-modal" data-image="' . getImageUrl($teamMember->image) . '" data-name="' . $teamMember->name . '"  data-category_id="' . $teamMember->category_id . '"
            data-designation="' . $teamMember->designation . '" data-facebook="' . $teamMember->facebook . '" data-twitter="' . $teamMember->twitter . '"
            data-linkedin="' . $teamMember->linkedin . '" data-instagram="' . $teamMember->instagram . '"
            data-status="' . $teamMember->status . '"
            data-action="' . route('admin.team.update', encrypt($teamMember->id)) . '" data-method="POST"
            class="btn btn-sm btn-soft-primary"><img loading="lazy" width="10" height="10" src="' . asset('assets/common/edit.svg') . '"></a>

        <a data-bs-toggle="modal" data-bs-target="#delete-modal" data-delete-url="' . route('admin.team.destroy', encrypt($teamMember->id)) . '"
        data-message="' . __('general.confirm_delete') . '" data-name="' . $teamMember->name . '" id="row-' . $teamMember->id . '"
        class="btn btn-sm btn-danger ms-2"><img loading="lazy" width="10" height="10" src="' . asset('assets/user/libs/feather-icons/icons/trash.svg') . '"><i class="fa fa-eye"></i></a>
        </div>';
    }

    public function getStatusColumn(TeamMember $teamMember)
    {
        $is_checked = $teamMember->status ? 'checked' : null;
        $html = '<div class="form-check form-switch">
        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" name="status" ' . $is_checked . ' data-route="' . route('admin.team.toggle_status') . '" data-id="' . $teamMember->id . '" onclick="toggleStatus($(this));">
    </div>';
        return $html;
    }
}
