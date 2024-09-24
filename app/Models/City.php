<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Illuminate\Database\Eloquent\SoftDeletes;

class City extends Model implements TranslatableContract
{
    use HasFactory, Translatable , SoftDeletes;

    protected $fillable = ['added_by', 'is_active', 'country_id'];

    public $translatedAttributes = ['name'];
    protected $table='cities';
    protected $with = ['translations'];

    public function country()
{
    return $this->belongsTo(Country::class, 'country_id', 'id');
}

}
