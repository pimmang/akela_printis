<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Event extends Model
{

    public function booking(): HasMany
    {
        return $this->hasMany(Booking::class);
    }

    public static function boot()
    {
        parent::boot();
        static::unguard();
        // Event diakses, otomatis perbarui status
        static::retrieved(function ($event) {
            // Cek jika event sudah berakhir dan statusnya masih aktif
            // dd(Carbon::now());
            if ($event->aktif == 1 && Carbon::now()->greaterThanOrEqualTo(Carbon::parse($event->event_berakhir_at))) {
                $event->update(['aktif' => 0]); // Ubah status menjadi selesai
                // dd($event->aktif);
            }
            if(($event->aktif == 0 && Carbon::now()->lessThan(Carbon::parse($event->event_berakhir_at)))){
                $event->update(['aktif' => 1]);
            }
        });
    }
}
