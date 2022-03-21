<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tahun extends Model
{
    //
    protected $table = 'tahun';
	protected $fillable = [
		'uuid',
		'label',
		
	];

	public function hasLongsor() {
		return $this->hasMany('App\Longsor', 'id_tahun', 'uuid');
	}
}
