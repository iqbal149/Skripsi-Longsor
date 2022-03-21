<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsahaFoto extends Model {
	protected $table = 'foto_usaha';
	protected $fillable = [
		'uuid',
		'foto',
		'usaha_id',
	];
	public function usaha() {
		return $this->belongsTo('App\Usaha', 'usaha_id', 'id');
	}
}
