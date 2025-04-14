<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected static function booted()
    {
        static::unguard();
    }
}
