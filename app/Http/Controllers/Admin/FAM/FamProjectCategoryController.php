<?php

namespace App\Http\Controllers\Admin\FAM;


use App\Http\Requests\Admin\StoreTrainingProgramCategoryRequest;
use App\Models\Contact;
use App\Services\ContactService;
use Illuminate\Http\Request;
use Throwable;
use App\Http\Controllers\Admin\BaseAdminController;
use App\Http\Requests\Admin\StoreBarberRequest;
use App\Http\Requests\Admin\StoreFamProjectCategoryRequest;
use App\Http\Requests\Admin\StoreTeamMemberRequest;
use App\Http\Requests\Admin\UpdateBarberRequest;
use App\Models\Service;
use App\Services\FAM\FamProjectCategoryService;
use App\Services\ServiceService;
use App\Services\TrainingProgramCategoryService;
use Illuminate\Support\Facades\Cache;

class FamProjectCategoryController extends BaseAdminController
{

    public function __construct(protected FamProjectCategoryService $service)
    {
        $this->base_view_path = 'admin.fam_college.project_category';
        $this->base_route_path = 'admin.fam_college.project_category';
        $this->title = __('general.fam_college.project_category');

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

    public function store(StoreFamProjectCategoryRequest $request)
    {
        return $this->service->create($request);
    }
    public function update($id , StoreFamProjectCategoryRequest $request)
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
