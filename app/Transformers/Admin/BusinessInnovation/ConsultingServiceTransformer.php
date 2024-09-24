<?php

namespace App\Transformers\Admin\BusinessInnovation;

use App\Models\Branch;
use App\Models\ConsultingService;
use App\Models\TeamMember;
use App\Models\TrainingProgram;
use App\Models\TrainingProgramCategory;
use App\Models\University;
use League\Fractal\TransformerAbstract;

class ConsultingServiceTransformer extends TransformerAbstract
{
    /**
     * @param \App\Models\TeamMember $teamMember
     * @return array
     */
    public function transform(ConsultingService $teamMember): array
    {
        return [
            'id' => $teamMember->id,
            'image' => '<img src="' . getImageUrl($teamMember->image) . '" width="100" height="100"/>',
            'name' => $teamMember->name,
            'status' => $this->getStatusColumn($teamMember, 'status'),
            'created_at' => $teamMember->created_at->format('Y-m-d H:i:s'),
            'actions' => $this->getActions($teamMember),
        ];
    }

    public function getActions(ConsultingService $teamMember)
    {
        return '<div class="text-end p-3">
        <a data-method="POST" data-bs-toggle="modal"
            data-header-title="' . __('general.training.update_program_category') . ': ' . $teamMember->name . '"
            data-bs-target="#consulting-modal" data-image="' . getImageUrl($teamMember->image) . '" data-name="' . $teamMember->name . '"
            data-status="' . $teamMember->status . ' " data-description="' . $teamMember->description . '"
            data-action="' . route('admin.business_and_innovatio_ecosystem.consulting_services.update', encrypt($teamMember->id)) . '" data-method="POST"
            class="btn btn-sm btn-soft-primary"><img loading="lazy" width="10" height="10" src="' . asset('assets/common/edit.svg') . '"></a>

        <a data-bs-toggle="modal" data-bs-target="#delete-modal" data-delete-url="' . route('admin.business_and_innovatio_ecosystem.consulting_services.destroy', encrypt($teamMember->id)) . '"
        data-message="' . __('general.confirm_delete') . '" data-name="' . $teamMember->name . '" id="row-' . $teamMember->id . '"
        class="btn btn-sm btn-danger ms-2"><img loading="lazy" width="10" height="10" src="' . asset('assets/user/libs/feather-icons/icons/trash.svg') . '"><i class="fa fa-trash"></i></a>
        </div>';
    }

    public function getStatusColumn(ConsultingService $teamMember, string $bool_column)
    {
        $is_checked = $teamMember->$bool_column ? 'checked' : null;
        $html = '<div class="form-check form-switch">
        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" name="' . $bool_column . '" ' . $is_checked . ' data-route="' . route('admin.business_and_innovatio_ecosystem.consulting_services.toggle_status') . '" data-id="' . $teamMember->id . '" onclick="toggleStatus($(this));">
    </div>';
        return $html;
    }
}
