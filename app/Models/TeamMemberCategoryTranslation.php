<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamMemberCategoryTranslation extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        'tmc_id',
        'locale',
    ];
}
