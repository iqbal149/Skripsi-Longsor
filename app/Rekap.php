<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rekap extends Model
{
    protected $table = 'rekap';
    protected $fillable = [
        'kecamatan',
        'korban',
        'kejadian',
        'kerusakan',

    ];
}
