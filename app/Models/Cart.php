<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'prod_id',
        'prod_qty'
    ];
    private mixed $prod_id;
    private mixed $user_id;
    private mixed $prod_qty;
}
