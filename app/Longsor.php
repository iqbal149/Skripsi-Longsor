<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Longsor extends Model
{
    //
    protected $table = 'longsor';
	protected $fillable = [
		'uuid',
		'alamat',
		'kecamatan',
		'tgl',
		'kb_meninggal',
		'kb_hilang',
		'kb_luka',
		'kb_mengungsi',
		'kr_rumah_rb',
        'kr_rumah_rr',
        'kr_rumah_terendam',
		'kantor',
		'sekolah',
		't_ibadah',
		'sarana_kesehatan',
        'bangunan_lain',
		'jembatan',
        'jalan',
        'sawah',
        'hutan',
        'id_tahun',
	];

	public function tahun() {
		return $this->belongsTo('App\Tahun', 'id_tahun', 'uuid');
	}
	
}
