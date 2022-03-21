<?php

namespace App\Imports;

use App\Usaha;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Ramsey\Uuid\Uuid;

class UsahaImport implements ToModel, WithHeadingRow {
	/**
	 * @param array $row
	 *
	 * @return \Illuminate\Database\Eloquent\Model|null
	 */
	public function model(array $row) {
		return new Usaha([
			'nama_usaha' => $row['nama_usaha'],
			'nama_pemilik' => $row['nama_pemilik'],
			'nomor_izin_usaha' => $row['nomor_izin_usaha'],
			'alamat' => $row['alamat'],
			'jenis_usaha' => $row['jenis_usaha'],
			'jml_tkerja' => $row['jml_tkerja'],
			'modal' => $row['modal'],
			'omzet_bln' => $row['omzet_bln'],
			'omzet_thn' => $row['omzet_thn'],
			'telpon' => $row['telpon'],
			'kategori' => $row['kategori'],
			'uuid' => Uuid::uuid4()->getHex(),
		]);

	}

	public function headingRow(): int {
		return 1;
	}
}
