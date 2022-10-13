<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelurahan extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, int, string>
     */
    protected $table = "kelurahans";
    protected $fillable = [
        'kel_id',
        'kec_id',
        'name_kel',
    ];
    protected $primaryKey = 'kel_id';

    public function getRouteKey()
    {
        return view('name_kel');
    }
}
