<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Anorganik extends Model
{
    use HasFactory;
    protected $table = 'anorganiks';
    protected $primaryKey = 'id_anorganik';
    // protected $fillabel = [];
    // protected $fillabel = ['','']; bisa satu" label
    protected $guarded = [];

    // public function getCreatedAtAttribute()
    // {
    //     return Carbon::parse($this->attributes['created_at'])
    //     ->translatedFormat('l, d F Y');
    // }

    public function kota(){
        return $this->belongsTo(Kota::class, 'kota_id');
    }
    public function kecamatan(){
        return $this->belongsTo(Kecamatan::class, 'kec_id');
    }
    public function kelurahan(){
        return $this->belongsTo(Kelurahan::class, 'kel_id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
