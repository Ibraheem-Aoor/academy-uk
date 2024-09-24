<?php

namespace App\Http\Controllers\Admin\Academic;

use App\Enum\UniversityTypeEnum;
use App\Http\Requests\Admin\StoreTrainingProgramCategoryRequest;
use App\Models\Contact;
use App\Services\ContactService;
use Illuminate\Http\Request;
use Throwable;
use App\Http\Controllers\Admin\BaseAdminController;
use App\Http\Requests\Admin\StoreBarberRequest;
use App\Http\Requests\Admin\StoreBranchRequest;
use App\Http\Requests\Admin\StoreTeamMemberRequest;
use App\Http\Requests\Admin\StoreUniversityRequest;
use App\Http\Requests\Admin\UpdateBarberRequest;
use App\Models\Country;
use App\Models\CountryTranslation;
use App\Models\Service;
use App\Services\Academic\BranchService;
use App\Services\Academic\UniversityService;
use App\Services\ServiceService;
use App\Services\TrainingProgramCategoryService;
use Illuminate\Support\Facades\Cache;

class UniversityController extends BaseAdminController
{

    public function __construct(protected UniversityService $service)
    {
        $this->base_view_path = 'admin.academic_and_resarch_hub.university';
        $this->base_route_path = 'admin.academic_and_research.university';
        $this->title = __('general.academic_and_research.university');

    }
    public function index()
    {
        $data['table_data_url'] = route("{$this->base_route_path}.table");
        $data['route'] = $this->base_route_path;
        $data['view'] = $this->base_view_path;
        $data['title'] =  $this->title;
        $data['modal'] = $this->service->getModal();
        $data['types'] = UniversityTypeEnum::cases();
        return view("{$this->base_view_path}.index", $data);
    }

    public function store(StoreUniversityRequest $request)
    {
        return $this->service->create($request);
    }
    public function update($id , StoreUniversityRequest $request)
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
