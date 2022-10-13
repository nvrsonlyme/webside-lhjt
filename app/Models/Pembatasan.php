<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembatasan extends Model
{
    use HasFactory;
    protected $table = 'pembatasans';
    // protected $fillabel = [];
    // protected $fillabel = ['','']; bisa satu" label
    protected $guarded = [];

    public function kota(){
        return $this->belongsTo(Kota::class, 'kota_id');
    }
    public function kecamatan(){
        return $this->belongsTo(Kecamatan::class, 'kec_id');
    }
    public function kelurahan(){
        return $this->belongsTo(Kelurahan::class, 'kel_id');
    }
}
