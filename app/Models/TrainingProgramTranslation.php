<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainingProgramTranslation extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'quick_description',
        'description',
        'subtitle',
        'feature_1',
        'feature_2',
        'feature_3',
        'locale',
        'training_program_id',
    ];
}
