<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kabupaten extends Model
{
    protected $table = 'kabupaten';
	protected $fillable = [
		'kode',
		'label',
		
	];

	public function hasKecamatan()
	{
		return $this->hasMany('App\Kecamatan', 'id_kabupaten', 'uuid');
	}
	public function users()
	{
		return $this->hasOne(App\User::class);
	}
}
