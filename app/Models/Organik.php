<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

// use DB;


class Organik extends Model
{
    use HasFactory;
    protected $table = 'organiks';
    // protected $fillabel = [];
    // protected $fillabel = ['','']; bisa satu" label
    protected $guarded = [];


    // public function getCreateAtAtribute(){
    //     return Carbon::parse($this->attributes['created_at'])
    //     ->translatedFormat('l, d F Y, h:mm');
    // }

    // public function roleuser(){
    //     $this->db->where('user.id', $this->session->userdata('id'));
    //     return $this->db->get('organik')->result();
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

}
