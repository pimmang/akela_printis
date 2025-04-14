<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Booking extends Model
{
    public function event(): BelongsTo
    {
        return $this->belongsTo(Event::class);
    }
    protected static function booted()
    {
        static::unguard();
    }
}
