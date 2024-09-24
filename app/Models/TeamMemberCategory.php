<?php

namespace App\Models;

use App\Traits\HasStatus;
use App\Transformers\Admin\TeamMemberCategoryTransformer;
use Astrotomic\Translatable\Contracts\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable as TranslatableTriat;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TeamMemberCategory extends Model implements Translatable
{
    use HasFactory , HasStatus , TranslatableTriat;
    protected $fillable = [
        'status',
        'show_in_home',
        'order',
    ];

    public $modal = "#team-member-modal";
    public $transformer = TeamMemberCategoryTransformer::class;
    public $translationModel = TeamMemberCategoryTranslation::class;
    public $translationForeignKey = "tmc_id";

    public $translatedAttributes = [
        "name",
        'tmc_id',
        'locale',
    ];

    public function members() : HasMany
    {
        return $this->hasMany(TeamMember::class , 'category_id');
    }
}
