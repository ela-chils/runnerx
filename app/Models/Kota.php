<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Kota extends Model
{
    protected $fillable = [
        'nama_kota',
    ];

    /**
     * Satu kota memiliki banyak event.
     */
    public function events(): HasMany
    {
        return $this->hasMany(Event::class);
    }
}