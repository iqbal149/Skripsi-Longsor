<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;

class formatMatriks implements WithHeadings {
	/**
	 * @return \Illuminate\Support\Collection
	 */
	use Exportable;
	public function headings(): array
	{
		return [
			'matriks_3_1',
			'matriks_3_2',
			'matriks_3_3',
		];
	}
}
