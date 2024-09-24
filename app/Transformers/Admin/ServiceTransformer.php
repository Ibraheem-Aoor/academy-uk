<?php

namespace App\Transformers\Admin;

use App\Models\Service;
use League\Fractal\TransformerAbstract;

class ServiceTransformer extends TransformerAbstract
{
    /**
     * @param \App\Models\AccountTree $service
     * @return array
     */
    public function transform(Service $service): array
    {
        return [
            'id' => $service->id,
            'image' => '<img src="'.getImageUrl($service->image).'" width="32" height="32"/>',
            'title' => $service->title,
            'description' => \Str::limit($service->description , 30, '...' ),
            'price' => formatPrice($service->price),
            'status' => $this->getStatusColumn($service),
            'created_at' => date($service->created_at),
            'actions' => $this->getActions($service),
        ];
    }


    #<img loading="lazy" width="10" height="10" src="' . asset('assets/user/libs/feather-icons/icons/edit.svg') . '">
    public function getActions($service)
    {
        return '<div class="text-end p-3">
        <a data-method="POST"  data-bs-toggle="modal"
            data-header-title="'.__('general.update_service').': ' . $service->title . '"
            data-bs-target="#service-modal" data-image="' . getImageUrl($service->image) . '" data-title="' . $service->title . '"
            data-description="' . $service->description . '" data-price="' . formatPrice($service->price , false) . '" data-status="' . $service->status . '" data-time-between-bookings="' . $service->time_between_bookings . '"
            data-action="'.route('admin.service.update' , encrypt($service->id)).'" data-method="POST"
            class="btn btn-sm btn-soft-primary"><img loading="lazy" width="10" height="10" src="' . asset('assets/common/edit.svg') . '"></a>

        <a data-bs-toggle="modal" data-bs-target="#delete-modal" data-delete-url="' . route('admin.service.destroy', encrypt($service->id)) . '"
        data-message="' . __('general.confirm_delete') . '" data-name="' . $service->name . '" id="row-' . $service->id . '"
        href="#" class="btn btn-sm btn-danger ms-2"><img loading="lazy" width="10" height="10" src="' . asset('assets/user/libs/feather-icons/icons/trash.svg') . '"><i class="fa fa-eye"></i></a>
        </div>';
    }

    public function getStatusColumn($service)
    {
        $is_checked = $service->status ? 'checked' : null;
        $html = '<div class="form-check form-switch">
        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" name="status"  ' . $is_checked . ' data-route="' . route('admin.service.toggle_status') . '" data-id="' . $service->id . '" onclick="toggleStatus($(this));">
    </div>';
        return $html;
    }


}
