<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usaha extends Model {
	protected $table = 'usaha';
	protected $fillable = [
		'uuid',
		'nama_usaha',
		'nama_pemilik',
		'nomor_izin_usaha',
		'alamat',
		'jenis_usaha',
		'jml_tkerja',
		'modal',
		'omzet_bln',
		'omzet_thn',
		'telpon',
		'kategori',
		'lat',
		'lng',
	];

	public function hasFoto() {
		return $this->hasMany('App\UsahaFoto', 'usaha_id');
	}
}
