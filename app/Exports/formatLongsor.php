<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;

class formatLongsor implements WithHeadings {
	/**
	 * @return \Illuminate\Support\Collection
	 */
	use Exportable;
	public function headings(): array
	{
		return [
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
		];
	}
}
