<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CatSitting extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'customers_id',
        'start_date',
        'end_date',
        'total_days',
        'price',
        'frequency',
        'total_cats',
        'mileage',
        'cage_uncage',
        'events_id',
        'cat_sitting_Services_id',
    ];
}
