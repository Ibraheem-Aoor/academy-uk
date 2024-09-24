<?php

namespace App\Models;

use App\Traits\HasStatus;
use App\Transformers\Admin\FAM\FamProjectCategoryTransformer;
use App\Transformers\Admin\FAM\FamProjectTransformer;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable;
use Astrotomic\Translatable\Translatable as TranslatableTriat;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FamProject extends Model implements Translatable
{
    use HasFactory , HasStatus , TranslatableTriat;

    protected $fillable = [
        'image',
        'category_id',
        'status',
        'show_in_home',
    ];

    public $modal = "#fam-project-modal";
    public $transformer = FamProjectTransformer::class;
    public $translationForeignKey ='project_id'; #fam_project_category_id

    public $translationModel = FamProjectTranslation::class;
    public $translatedAttributes = [
        'name',
        'description',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(FamProjectCategory::class);
    }
}
