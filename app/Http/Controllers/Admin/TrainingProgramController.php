<?php

namespace App\Http\Controllers\Admin;

use App\Enum\TrainingProgramThemeEnum;
use App\Http\Requests\Admin\StoreTrainingProgramCategoryRequest;
use App\Models\Contact;
use App\Services\ContactService;
use Illuminate\Http\Request;
use Throwable;
use App\Http\Controllers\Admin\BaseAdminController;
use App\Http\Requests\Admin\StoreBarberRequest;
use App\Http\Requests\Admin\StoreTeamMemberRequest;
use App\Http\Requests\Admin\StoreTrainingProgramRequest;
use App\Http\Requests\Admin\UpdateBarberRequest;
use App\Models\Service;
use App\Services\ServiceService;
use App\Services\TrainingProgramCategoryService;
use App\Services\TrainingProgramService;
use Illuminate\Support\Facades\Cache;
use Illuminate\View\View;

class TrainingProgramController extends BaseAdminController
{

    public function __construct(protected TrainingProgramService $service , protected TrainingProgramCategoryService $training_program_category_service)
    {
        $this->base_view_path = 'admin.training.program';
        $this->base_route_path = 'admin.training.program';
        $this->title = __('general.training.program');

    }
    public function index()
    {
        $data['table_data_url'] =  route("{$this->base_route_path}.table" , request()->query());
        $data['route'] = $this->base_route_path;
        $data['view'] = $this->base_view_path;
        $data['title'] =  $this->title;
        $data['modal'] = $this->service->getModal();
        $data['categories'] = $this->training_program_category_service->get(paginate:0);
        $data['icons'] = $this->service->getIconOptions();
        $data['themes'] = TrainingProgramThemeEnum::cases();
        return view("{$this->base_view_path}.index", $data);
    }



    public function store(StoreTrainingProgramRequest $request)
    {
        return $this->service->create($request);
    }
    public function update($id , UpdateBarberRequest $request)
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
