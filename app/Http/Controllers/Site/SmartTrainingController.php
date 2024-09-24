<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\Site\ContactRequest;
use App\Http\Requests\Site\SmartTrainingApplyRequest;
use App\Models\Contact;
use App\Models\Page;
use App\Models\SmartTrainingApplication;
use App\Services\SmartTraining\ApplicationService;
use App\Services\TrainingProgramCategoryService;
use App\Services\TrainingProgramService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Throwable;

class SmartTrainingController extends BaseSiteController
{

    public function __construct(
        protected TrainingProgramService $training_program_service,
        protected TrainingProgramCategoryService $training_program_category_service
    ) {

    }
    public function index(Request $request, $theme): View
    {
        $data['programs_categories'] = $this->training_program_category_service->get(paginate:0 , relations:['programs' => function($query)use($theme){
            $query->whereTheme($theme);
        }]);
        $data['page'] = $this->getPageModel($theme);
        return view('site.smart_training.index' , $data);
    }



    public function apply($theme = 'smart-training-apply') :View
    {
        $data['page'] = $this->getPageModel($theme);
        $data['programs_categories'] = $this->training_program_category_service->get(paginate:0 , relations:['programs']);
        return view('site.smart_training.apply' , $data);
    }
    public function applySubmit(SmartTrainingApplyRequest $request , ApplicationService $application_service)
    {
        return $application_service->create($request);
    }
}
