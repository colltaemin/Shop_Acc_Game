<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'current_account', 'sold_account'];

    protected $table = 'products';

    public function categories()
    {
        return $this->hasMany(Category::class);
    }
}
