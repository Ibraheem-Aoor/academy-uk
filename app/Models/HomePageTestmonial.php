<?php

namespace App\Models;

use App\Traits\HasStatus;
use App\Transformers\Admin\HomePageTestmonialTransformer;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomePageTestmonial extends Model
{
    use HasFactory , HasStatus;
    protected $fillable = [
        'image',
        'name',
        'location',
        'feedback',
        'status'
    ];


    public $modal = "#home-testmonials";
    public $transformer = HomePageTestmonialTransformer::class;
}
