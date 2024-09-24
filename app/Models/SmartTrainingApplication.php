<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SmartTrainingApplication extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'phone',
        'message',
        'program_id',
        'category_id',
    ];
}
