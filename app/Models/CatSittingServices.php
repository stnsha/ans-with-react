<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CatSittingServices extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'category',
        'service'
    ];
}
