<?php

namespace App\Http\Controllers\Admin\BusinessInnovation;

use Illuminate\Http\Request;
use Throwable;
use App\Http\Controllers\Admin\BaseAdminController;
use App\Http\Requests\Admin\StoreConsultingServiceRequest;
use App\Services\BusinessInnovation\ConsultingServiceService;

class ConsultingServiceController extends BaseAdminController
{

    public function __construct(protected ConsultingServiceService $service)
    {
        $this->base_view_path = 'admin.business_and_innovatio_ecosystem.consulting_services';
        $this->base_route_path = 'admin.business_and_innovatio_ecosystem.consulting_services';
        $this->title = __('general.business_and_innovation_ecosystem.consultinces');

    }
    public function index()
    {
        $data['table_data_url'] = route("{$this->base_route_path}.table");
        $data['route'] = $this->base_route_path;
        $data['view'] = $this->base_view_path;
        $data['title'] =  $this->title;
        $data['modal'] = $this->service->getModal();
        return view("{$this->base_view_path}.index", $data);
    }

    public function store(StoreConsultingServiceRequest $request)
    {
        return $this->service->create($request);
    }
    public function update($id , StoreConsultingServiceRequest $request)
    {
        return $this->service->update(decrypt($id) , $request);
    }

    public function destroy($id)
    {
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
