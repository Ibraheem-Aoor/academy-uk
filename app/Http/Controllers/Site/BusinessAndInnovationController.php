<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\Site\ContactRequest;
use App\Models\Contact;
use App\Models\Page;
use App\Services\Academic\BranchService;
use App\Services\Academic\UniversityService;
use App\Services\BusinessInnovation\ConsultingServiceService;
use App\Services\TrainingProgramCategoryService;
use App\Services\TrainingProgramService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Throwable;

class BusinessAndInnovationController extends BaseSiteController
{

    public function __construct(
        protected ConsultingServiceService $consulting_service_service,

    ) {
        $this->base_view_path = 'site.business_and_innovation_ecosystem';
    }
    public function consultingServices(Request $request, $theme): View
    {
        $data['services'] = $this->consulting_service_service->get(
            paginate: 0,
            conditions: [['status', '=', '1']],
        );
        $data['page'] = Page::query()->select(['intro_image', 'title', 'theme' , 'content'])->whereSlug($theme)->first();
        return view($this->base_view_path.'.consulting_services.index', $data);
    }
}
