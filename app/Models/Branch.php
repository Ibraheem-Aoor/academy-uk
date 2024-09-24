<?php

namespace App\Models;

use App\Transformers\Admin\Academic\BranchTransformer;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Branch extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'location',
        'country_id',
        'status',
    ];
    public $modal = "#branch-modal";
    public $transformer = BranchTransformer::class;

    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class, 'country_id');
    }
}
