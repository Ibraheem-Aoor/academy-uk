<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\Site\ContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;
use Throwable;

class ContactController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function store(ContactRequest $request)
    {
        try {
            Contact::create($request->validated());
            $response = generateResponse(status: true, message: __('response.we_will'), reload: true);
        } catch (Throwable $e) {
            dd($e);
            $response = generateResponse(status: false, message: __('response.error'));
        }
        return response()->json($response);
    }
}
