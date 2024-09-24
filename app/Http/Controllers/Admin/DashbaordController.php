<?php

namespace App\Http\Controllers\Admin;

use App\Enums\WebshopEnum;
use App\Http\Controllers\Controller;
use App\Models\Barber;
use App\Models\Booking;
use App\Models\Contact;
use App\Models\Service;
use App\Models\Webshop;
use App\Services\Api\BolService;
use Illuminate\Http\Request;

class DashbaordController extends Controller
{
    public function dashboard()
    {
        $data['service_count'] = 1;#Service::query()->count();
        $data['barber_count'] = 1;#Barber::query()->count();
        $data['booking_count'] = 1;#Booking::query()->count();
        $data['contact_message_count'] = 1;#Contact::query()->count();
        return view('admin.dashboard' , $data);
    }
}
