<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FamProjectCategoryTranslation extends Model
{
    use HasFactory;
    protected $fillable =[
        'name',
        'locale',
        'fpc_id',
    ];
}
