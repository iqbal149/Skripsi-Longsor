<?php

namespace App\Imports;

use App\Longsor;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Ramsey\Uuid\Uuid;
use PhpOffice\PhpSpreadsheet\Shared\Date;

class LongsorImport implements ToModel, WithHeadingRow {
	/**
	 * @param array $row
	 *
	 * @return \Illuminate\Database\Eloquent\Model|null
	 */
    public function  __construct($tahun)
    {
        $this->tahun= $tahun;
    }

	public function model(array $row) {
		return new Longsor([
			'alamat' => $row['alamat'],
            'kecamatan' => $row['kecamatan'],
            'tgl' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['tgl']),
            'kb_meninggal' => $row['kb_meninggal'],
            'kb_hilang' => $row['kb_hilang'],
            'kb_luka' => $row['kb_luka'],
            'kb_mengungsi' => $row['kb_mengungsi'],
            'kr_rumah_rb' => $row['kr_rumah_rb'],
            'kr_rumah_rr' => $row['kr_rumah_rr'],
            'kr_rumah_terendam' => $row['kr_rumah_terendam'],
            'kantor' => $row['kantor'],
            'sekolah' => $row['sekolah'],
            't_ibadah' => $row['t_ibadah'],
            'sarana_kesehatan' => $row['sarana_kesehatan'],
            'bangunan_lain' => $row[ 'bangunan_lain'],
            'jembatan' => $row['jembatan'],
            'jalan' => $row['jalan'],
            'sawah' => $row['sawah'],
            'hutan' => $row['hutan'],
			'uuid' => Uuid::uuid4()->getHex(),
			'id_tahun' => $this->tahun,
		]);

	}

	public function headingRow(): int {
		return 1;
	}
}
