<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Event extends Model
{
    use HasFactory;


    protected $fillable = [
        'nama_event',
        'jenis_event',
        'tanggal',
        'kota',
        'harga',
        'kuota_peserta',
        'deskripsi',
    ];



    public function registrations()
    {
        return $this->hasMany(Registration::class);
    }

}