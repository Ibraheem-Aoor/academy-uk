<?php

namespace App\Models;

use App\Traits\HasStatus;
use App\Transformers\Admin\TrainingProgramTransformer;
use Astrotomic\Translatable\Contracts\Translatable;
use Astrotomic\Translatable\Translatable as TranslatableTriat;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TrainingProgram extends Model implements Translatable
{
    use HasFactory , HasStatus, TranslatableTriat;
    protected $fillable = [
        'image',
        'category_id',
        'theme',
        'status',
        'show_in_home',
    ];
    public $translatedAttributes = [
        'name',
        'quick_description',
        'description',
        'feature_1',
        'feature_2',
        'feature_3',
    ];
    public $translationModel = TrainingProgramTranslation::class;
    public $translationForeignKey = 'training_program_id';


    public $modal = "#program-modal";
    public $transformer = TrainingProgramTransformer::class;

    public function category() : BelongsTo
    {
        return $this->belongsTo(TrainingProgramCategory::class , 'category_id');
    }

}
