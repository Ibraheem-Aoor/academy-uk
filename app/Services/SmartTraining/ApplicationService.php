<?php
namespace App\Services\SmartTraining;

use App\Jobs\NewBookingJob;
use App\Models\Admin;
use App\Models\Barber;
use App\Models\Booking;
use App\Models\Contact;
use App\Models\Service;
use App\Models\ServiceBooking;
use App\Models\Setting;
use App\Models\SmartTrainingApplication;
use App\Models\WorkHours;
use App\Services\BaseModelService;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Throwable;
use Yajra\DataTables\Facades\DataTables;

class ApplicationService extends BaseModelService
{

    public function __construct()
    {
        parent::__construct(new SmartTrainingApplication());
        $this->allow_all_records = true;
    }



    public function create(Request $request)
    {
        try {
            $data = $this->getModelAttributes($request);
            $this->model->create($data);
        } catch (Throwable $e) {
            dd($e);
            Log::error("Fail with Creation in Model : " . get_class($this) . " erorr:" . $e->getMessage());
            return generateResponse(status: false, message: __('response.faild_created'));
        }
        return generateResponse(status: true, message: __('response.success_created'), reload: true);

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
            $model->update([
                'status' => !$model->status,
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
        $data['category_id'] = $data['category'];
        $data['program_id'] = $data['program'];
        return $data;
    }

    /**
     * reutrn the table data for view
     */
    public function getTableData(Request $request)
    {
        $query = $this->model::query()
            ->with(['barber', 'services'])
            ->when($request->has('booking_id'), function ($query) use ($request) {
                getAuthUser('admin')->unReadNotifications()->find($request->query('amp;notification_id'))?->markAsRead();
                $query->where('id', $request->query('booking_id'));
            });
        return DataTables::of($query)
            ->setTransformer($this->model->transformer)
            ->make(true);
    }



}
