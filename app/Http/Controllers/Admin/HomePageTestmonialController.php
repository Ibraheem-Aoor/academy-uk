<?php

namespace App\Http\Controllers\Admin;


use App\Models\Contact;
use App\Services\ContactService;
use Illuminate\Http\Request;
use Throwable;
use App\Http\Controllers\Admin\BaseAdminController;
use App\Http\Requests\Admin\HomePageTestmoinalRequest;
use App\Http\Requests\Admin\StoreBarberRequest;
use App\Http\Requests\Admin\StoreTeamMemberRequest;
use App\Http\Requests\Admin\UpdateBarberRequest;
use App\Models\Service;
use App\Services\HomePageTestmonialService;
use App\Services\TeamService;
use App\Services\ServiceService;
use Illuminate\Support\Facades\Cache;

class HomePageTestmonialController extends BaseAdminController
{

    public function __construct(protected HomePageTestmonialService $service)
    {
        $this->base_view_path = 'admin.pages.home.testmonials';
        $this->base_route_path = 'admin.page.home.testmonials';
        $this->title = __('general.home_page_testmonial');

    }
    public function index()
    {
        $data['table_data_url'] = route("{$this->base_route_path}.table");
        $data['route'] = $this->base_route_path;
        $data['view'] = $this->base_view_path;
        $data['title'] =  $this->title;
        $data['modal'] = str_replace('#' , '' , $this->service->getModel()->modal);
        return view("{$this->base_view_path}.index", $data);
    }

    public function store(HomePageTestmoinalRequest $request)
    {
        Cache::forget('home_page_testmonials');
        return $this->service->create($request);
    }
    public function update($id , UpdateBarberRequest $request)
    {
        Cache::forget('barbers');
        return $this->service->update(decrypt($id) , $request);
    }

    public function destroy($id)
    {
        Cache::forget('barbers');
        return $this->service->delete(decrypt($id));
    }

    public function toggleStatus(Request $request)
    {
        $response = $this->service->toggleStatus($request->id);
        return response()->json($response);
    }


    public function getTableData(Request $request)
    {
        if ($request->ajax()) {
            return $this->service->getTableData($request);
        }
        return response()->json(['error' => 'Not a valid request'], 400);
    }
}
