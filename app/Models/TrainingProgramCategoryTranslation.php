<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainingProgramCategoryTranslation extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'tp_c_id',
        'locale',
    ];
}
