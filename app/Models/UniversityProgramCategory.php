<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable as TranslatableTriat;
use Astrotomic\Translatable\Contracts\Translatable;
use Illuminate\Database\Eloquent\Relations\HasMany;

class UniversityProgramCategory extends Model implements Translatable
{
    use HasFactory, TranslatableTriat;


    protected $guarded = ['id'];
    public $translatedAttributes = [
        'name',
        'description'
    ];
    public $translationForeignKey = 'cat_id';
    public $translationModel = UniversityProgramCategoryTranslation::class;

    public function programs():HasMany
    {
        return $this->hasMany(UniversityProgram::class ,  'category_id');
    }

}
