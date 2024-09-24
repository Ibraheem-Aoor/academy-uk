<?php

namespace App\Models;

use App\Traits\HasStatus;
use App\Transformers\Admin\FAM\FamProjectCategoryTransformer;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable;
use Astrotomic\Translatable\Translatable as TranslatableTriat;
use Illuminate\Database\Eloquent\Relations\HasMany;

class FamProjectCategory extends Model implements Translatable
{
    use HasFactory , HasStatus , TranslatableTriat;

    protected $fillable = [
        'image',
        'status',
    ];

    public $modal = "#fam-project-category-modal";
    public $transformer = FamProjectCategoryTransformer::class;
    public $translationForeignKey ='fpc_id'; #fam_project_category_id

    public $translationModel = FamProjectCategoryTranslation::class;
    public $translatedAttributes = [
        'name',
        'description',
    ];

    public function projects() : HasMany
    {
        return $this->hasMany(FamProject::class);
    }
}
