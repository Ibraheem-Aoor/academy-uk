<?php

namespace App\Models;

use App\Traits\HasStatus;
use App\Transformers\Admin\BusinessInnovation\ConsultingServiceTransformer;
use Astrotomic\Translatable\Contracts\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable as TranslatableTriat;
class ConsultingService extends Model implements Translatable
{
    use HasFactory , HasStatus , TranslatableTriat;

    protected $fillable = [
        'image',
        'status',
    ];

    public $modal = "#consulting-modal";
    public $transformer = ConsultingServiceTransformer::class;
    public $translationForeignKey ='cs_id';

    public $translationModel = ConsultingServiceTranslation::class;
    public $translatedAttributes = [
        'name',
        'description',
    ];
}
