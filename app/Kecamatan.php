<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    protected $table = 'kecamatan';
	protected $fillable = [
		'uuid',
		'label',
		'id_kabupaten',
		
	];
    public function kabupaten()
    {
        return $this->belongsTo('App\Kabupaten', 'id_kabupaten', 'uuid');
    }
}
