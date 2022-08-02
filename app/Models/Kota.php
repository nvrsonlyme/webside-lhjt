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
        'id',
        'name',
    ];

    public function getRouteKey()
    {
        return 'name';
    }

}
