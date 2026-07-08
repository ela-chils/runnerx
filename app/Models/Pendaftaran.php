<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{

    protected $fillable = [
        'user_id',
        'event_id',
        'nama_lengkap',
        'email',
        'no_hp',
        'jenis_kelamin',
        'ukuran_jersey',
        'kode_kupon',
        'harga_awal',
        'potongan',
        'harga_bayar',
        'status'
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function event()
    {
        return $this->belongsTo(Event::class);
    }

}