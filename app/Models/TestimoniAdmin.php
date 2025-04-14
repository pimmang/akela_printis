<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Model;

class TestimoniAdmin extends Testimoni
{
    protected static function booted()
    {
        static::unguard();
    }
}
