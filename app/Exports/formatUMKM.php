<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;

class formatUMKM implements WithHeadings {
	/**
	 * @return \Illuminate\Support\Collection
	 */
	use Exportable;
	public function headings(): array
	{
		return [
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
		];
	}
}
