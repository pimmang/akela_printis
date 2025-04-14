<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimoni extends Model
{
    protected static function booted()
    {
        static::unguard();
    }

}
