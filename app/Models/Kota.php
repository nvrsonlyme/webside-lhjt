<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kota extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = "kotas";
    protected $fillable = [
        'kota_id',
        'name_kota',
    ];
    protected $primaryKey = 'kota_id';

    public function getRouteKey()
    {
        return view('name_kota');
    }

}
