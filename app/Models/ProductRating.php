<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductRating extends Model
{
    use HasFactory;
    protected $fillable = [
        'rate',
        'comment',
        'product_id',
        'user_id'
    ];
}
