<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GameServiceSellSilver extends Model
{
    use HasFactory;

    protected $table = 'game_service_sell_silver';

    protected $fillable = [
        'productService_id',
        'sever',
        'multiplier',
    ];
}
