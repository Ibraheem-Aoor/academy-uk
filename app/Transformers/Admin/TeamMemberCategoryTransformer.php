<?php

namespace App\Transformers\Admin;

use App\Models\Branch;
use App\Models\TeamMember;
use App\Models\TeamMemberCategory;
use App\Models\TrainingProgram;
use App\Models\TrainingProgramCategory;
use League\Fractal\TransformerAbstract;

class TeamMemberCategoryTransformer extends TransformerAbstract
{
    /**
     * @param \App\Models\TeamMember $teamMember
     * @return array
     */
    public function transform(TeamMemberCategory $teamMember): array
    {
        return [
            'id' => $teamMember->id,
            'name' => $teamMember->name,
            'order' => $teamMember->order,
            'status' => $this->getStatusColumn($teamMember , 'status'),
            'created_at' => $teamMember->created_at->format('Y-m-d H:i:s'),
            'actions' => $this->getActions($teamMember),
        ];
    }

    public function getActions(TeamMemberCategory $teamMember)
    {
        return '<div class="text-end p-3">
        <a data-method="POST" data-bs-toggle="modal"
            data-header-title="' . __('general.training.update_program_category') . ': ' . $teamMember->name . '"
            data-bs-target="'.$teamMember->modal.'"  data-name="' . $teamMember->name . '"  data-order="' . $teamMember->order . '" data-status="' . $teamMember->status . '"
            data-action="' . route('admin.team.category.update', encrypt($teamMember->id)) . '" data-method="POST"
            class="btn btn-sm btn-soft-primary"><img loading="lazy" width="10" height="10" src="' . asset('assets/common/edit.svg') . '"></a>

        <a data-bs-toggle="modal" data-bs-target="#delete-modal" data-delete-url="' . route('admin.team.category.destroy', encrypt($teamMember->id)) . '"
        data-message="' . __('general.confirm_delete') . '" data-name="' . $teamMember->name . '" id="row-' . $teamMember->id . '"
        class="btn btn-sm btn-danger ms-2"><img loading="lazy" width="10" height="10" src="' . asset('assets/user/libs/feather-icons/icons/trash.svg') . '"><i class="fa fa-trash"></i></a>
        </div>';
    }

    public function getStatusColumn(TeamMemberCategory $teamMember, string $bool_column)
    {
        $is_checked = $teamMember->$bool_column ? 'checked' : null;
        $html = '<div class="form-check form-switch">
        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" name="'.$bool_column.'" ' . $is_checked . ' data-route="' . route('admin.team.category.toggle_status') . '" data-id="' . $teamMember->id . '" onclick="toggleStatus($(this));">
    </div>';
        return $html;
    }
}
