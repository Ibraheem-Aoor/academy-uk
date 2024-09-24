<?php

namespace App\Models;

use App\Traits\HasStatus;
use App\Transformers\Admin\Academic\BranchTransformer;
use App\Transformers\Admin\Academic\UniversityTransfromer;
use Astrotomic\Translatable\Contracts\Translatable;
use Astrotomic\Translatable\Translatable as TranslatableTriat;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class University extends Model implements Translatable
{
    use HasFactory, HasStatus, TranslatableTriat;

    protected $fillable = [
        'image',
        'type',
        'status',
        'show_in_home',
    ];

    public $modal = "#university-modal";
    public $transformer = UniversityTransfromer::class;
    public $translatedAttributes = [
        'name',
        'description',
        'university_id',
        'locale'
    ];

    public function subUniversities() : HasMany
    {
        return $this->hasMany(University::class, 'parent_id');
    }
}
