<?php

namespace App\Models;

use App\Traits\HasStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable as TranslatableTriat;
use Astrotomic\Translatable\Contracts\Translatable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UniversityProgram extends Model implements Translatable
{
    use HasFactory , HasStatus , TranslatableTriat;

    protected $guarded = ['id'];
    public $translatedAttributes = [
        'name',
        'description'
    ];
    public $translationForeignKey = 'program_id';
    public $translationModel = UniversityProgramTranslation::class;

    public function category() : BelongsTo
    {
        return $this->belongsTo(UniversityProgramCategory::class  , 'category_id');
    }
    public function relatedPrograms() 
    {
        return $this->category->programs;
    }
}
