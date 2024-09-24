<?php

namespace App\Models;

use App\Traits\HasStatus;
use App\Transformers\Admin\TrainingProgramCategoryTransformer;
use Astrotomic\Translatable\Contracts\Translatable;
use Astrotomic\Translatable\Translatable as TranslatableTriat;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TrainingProgramCategory extends Model implements Translatable
{
    use HasFactory , HasStatus, TranslatableTriat;
    protected $fillable = [
        'image',
        'status',
    ];
    public $translatedAttributes = [
        'name',
    ];
    public $translationForeignKey = 'tp_c_id';

    public $modal = "#program-category-modal";
    public $transformer = TrainingProgramCategoryTransformer::class;


    public function programs() : HasMany
    {
        return $this->hasMany(TrainingProgram::class , 'category_id');
    }
}
