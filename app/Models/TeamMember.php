<?php

namespace App\Models;

use App\Traits\HasStatus;
use App\Transformers\Admin\TeamTransfromer;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use PhpOffice\PhpSpreadsheet\Calculation\Category;

class TeamMember extends Model
{
    use HasFactory, HasStatus;

    protected $fillable = [
        'image',
        'name',
        'category_id',
        'designation',
        'facebook',
        'twitter',
        'linkedin',
        'instagram',
        'status'
    ];


    public $modal = "#team-modal";
    public $transformer = TeamTransfromer::class;


    public function category() : BelongsTo
    {
        return $this->belongsTo(TeamMemberCategory::class, 'category_id');
    }
}
