<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductService extends Model
{
    use HasFactory;

    protected $table = 'product_service';

    protected $fillable = [
        'product_id',
        'current_service',
        'sold_service',
    ];
}
