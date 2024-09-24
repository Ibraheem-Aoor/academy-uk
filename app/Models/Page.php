<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Page extends Model
{
    use HasFactory;

    protected $guarded = ['id' , '__token', 'parent_id'];

    public function parent() : BelongsTo
    {
        return $this->belongsTo(self::class, 'parent_id');
    }
}
