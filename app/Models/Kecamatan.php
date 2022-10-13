<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $table = "kecamatans";
    protected $fillable = [
        'kec_id',
        'kota_id',
        'name_kec',
    ];
    protected $primaryKey = 'kec_id';

    public function getRouteKey()
    {
        return view('name_kec');
    }

}
