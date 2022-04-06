<?php

namespace App\Imports;

use App\Matriks;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Ramsey\Uuid\Uuid;
use PhpOffice\PhpSpreadsheet\Shared\Date;

class MatriksImport implements ToModel, WithHeadingRow {
	/**
	 * @param array $row
	 *
	 * @return \Illuminate\Database\Eloquent\Model|null
	 */
    

	public function model(array $row)
    {
        return new Matriks([
            'matriks_3_1' => $row['matriks_3_1'],
            'matriks_3_2' => $row['matriks_3_2'],
            'matriks_3_3' => $row['matriks_3_3'],
        ]);
    }

	public function headingRow(): int {
		return 1;
	}
}
