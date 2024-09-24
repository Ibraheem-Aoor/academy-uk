<?php
namespace App\Services;

use App\Models\Barber;
use App\Models\Contact;
use App\Models\Service;
use App\Models\TeamMember;
use App\Models\TrainingProgram;
use App\Models\TrainingProgramCategory;
use App\Services\BaseModelService;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Throwable;
use Yajra\DataTables\Facades\DataTables;

class TrainingProgramService extends BaseModelService
{

    public function __construct()
    {
        parent::__construct(new TrainingProgram());
        $this->allow_all_records = true;
    }



    public function delete($id)
    {
        try {
            $model = $this->find($id);
            $model->delete();
        } catch (Throwable $e) {
            Log::error("Fail with Deleted in Model : " . get_class($this) . " erorr:" . $e->getMessage());
            return generateResponse(false, 500, message: __('response.faild_delete'));
        }
        return generateResponse(true, 200, message: __('response.success_delete'), modal_to_hide: '#delete-modal', table_reload: true, table: '#myTable', row_to_delete: $id, is_deleted: true);
    }


    public function toggleStatus($id)
    {
        try {
            $model = $this->find($id);
            $data = request()->toArray();
            $input = isset($data['status']) ? 'status' : 'show_in_home';
            $model->update([
                $input => !$model->$input,
            ]);
            $response = generateResponse(status: true, message: __('response.success_updated'));
        } catch (Throwable $e) {
            Log::error("Fail with " . __FUNCTION__ . " in Model : " . get_class($this) . " erorr:" . $e->getMessage());
            $response = generateResponse(status: false, message: __('response.error'));
        }
        return $response;
    }



    protected function getModelAttributes($request)
    {
        $data = $request->toArray();
        if ($request->hasFile('image')) {
            $data['image'] = saveImage('training_programs', $request->file('image'));
        }
        $data[getCurrentLocale()] = [
            'name' => $data['name'],
            'feature_1' => $data['feature_1'],
            'feature_2' => $data['feature_2'],
            'feature_3' => $data['feature_3'],
            'quick_description' => $data['quick_description'],
            'description' => $data['description'],
        ];
        $data['status'] = @$data['status'] == 'on';
        return $data;
    }

    /**
     * reutrn the table data for view
     */
    public function getTableData(Request $request)
    {
        $query = $this->model::query()->when($request->has('status'), function ($query) use ($request) {
            $query->where('status', $request->query('status'));
        });
        return DataTables::of($query)
            ->setTransformer($this->model->transformer)
            ->make(true);
    }

    public function getIconOptions()
    {
        return [
            ['value' => 'fa-chalkboard-teacher', 'label' => '&#xf51e; Training'],   // U+F51E for chalkboard-teacher
            ['value' => 'fa-chalkboard', 'label' => '&#xf51b; Lecture'],           // U+F51B for chalkboard
            ['value' => 'fa-book', 'label' => '&#xf02d; Book'],                    // U+F02D for book
            ['value' => 'fa-book-open', 'label' => '&#xf518; Course'],             // U+F518 for book-open
            ['value' => 'fa-graduation-cap', 'label' => '&#xf19d; Graduation Cap'], // U+F19D for graduation-cap
            ['value' => 'fa-certificate', 'label' => '&#xf0a3; Certificate'],       // U+F0A3 for certificate
            ['value' => 'fa-university', 'label' => '&#xf19c; University'],         // U+F19C for university
            ['value' => 'fa-school', 'label' => '&#xf549; School'],                // U+F549 for school
            ['value' => 'fa-pencil-alt', 'label' => '&#xf303; Pencil'],            // U+F303 for pencil-alt
        ];
    }



}
