<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;

class Country extends Model implements TranslatableContract
{
    use HasFactory,Translatable , SoftDeletes;
    protected $fillable=['added_by' , 'code' , 'zip_code' , 'is_active' , 'image' , 'deleted_at','tax'];
    protected $with = ['translations'];
    public $translatedAttributes = ['name'];

    public function admin(): BelongsTo
    {
        return $this->belongsTo(Admin::class, 'added_by', 'id');
    }

    public function cities()
    {
        return $this->hasMany(City::class, 'country_id', 'id');
    }
}
