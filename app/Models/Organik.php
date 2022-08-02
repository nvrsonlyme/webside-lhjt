<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;


class Organik extends Model
{
    use HasFactory;
    protected $table = 'organik';
    // protected $fillabel = [];
    // protected $fillabel = ['','']; bisa satu" label
    protected $guarded = [];

    // public function getCreateAtAtribute(){
    //     return Carbon::parse($this->attributes['created_at'])
    //     ->translatedFormat('l, d F Y, h:mm');
    // }
}
