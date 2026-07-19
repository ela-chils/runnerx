<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JenisEvent extends Model
{
    protected $fillable = [
        'nama_jenis'
    ];


    public function events()
    {
        return $this->hasMany(Event::class);
    }
}