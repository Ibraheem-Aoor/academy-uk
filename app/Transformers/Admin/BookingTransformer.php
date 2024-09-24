<?php

namespace App\Transformers\Admin;

use App\Models\Booking;
use App\Models\Service;
use League\Fractal\TransformerAbstract;

class BookingTransformer extends TransformerAbstract
{
    /**
     * @param \App\Models\AccountTree $booking
     * @return array
     */
    public function transform(Booking $booking): array
    {
        return [
            'id' => $booking->id,
            'barber' => $booking->barber->name,
            'client_name' => $booking->client_name,
            'client_phone' => $booking->client_phone,
            'date' => $booking->date,
            'time' => $booking->time,
            'created_at' => date($booking->created_at),
            'actions' => $this->getActions($booking),
        ];
    }


    public function getActions($booking)
    {
        $services = htmlspecialchars(json_encode($booking->services), ENT_QUOTES, 'UTF-8');

        return '<div class="text-end p-3">
        <a data-method="POST"  data-bs-toggle="modal"

            data-bs-target="#booking-modal" data-services="' . $services. '" data-header-title="' . __('general.booking_services_with_barber' , ['barber' => $booking->barber->name]).'"
            class="btn btn-sm btn-soft-primary"><img loading="lazy" width="10" height="10" src="' . asset('assets/user/libs/feather-icons/icons/eye-line.svg') . '"></a>

        <a data-bs-toggle="modal" data-bs-target="#delete-modal" data-delete-url="' . route('admin.booking.destroy', encrypt($booking->id)) . '"
        data-message="' . __('general.confirm_delete') . '" data-name="' . $booking->name . '" id="row-' . $booking->id . '"
        href="#" class="btn btn-sm btn-danger ms-2"><img loading="lazy" width="10" height="10" src="' . asset('assets/user/libs/feather-icons/icons/trash.svg') . '"><i class="fa fa-eye"></i></a>
        </div>';
    }


}
