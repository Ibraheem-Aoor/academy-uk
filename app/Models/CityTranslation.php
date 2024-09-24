<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CityTranslation extends Model
{
    use HasFactory  , SoftDeletes;

    protected $fillable = ['name' , 'locale' , 'city_id' , 'deleted_at'];
}
