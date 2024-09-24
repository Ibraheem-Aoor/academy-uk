<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FamProjectTranslation extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'locale',
        'project_id'
    ];
}
