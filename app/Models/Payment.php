<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Payment extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'customers_id',
        'cat_sitting_id',
        'subtotal',
        'total_payment',
        'payment_method',
        'payment_status',
        'discount',
        'tips',
    ];
}
