<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prodotto extends Model
{
    protected $table = 'products';
    protected $fillable = [
        'title', 'marca', 'materiale','img'
    ];
}
