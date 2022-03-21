<?php
namespace App\Http\Controllers;
use App\Exports\formatUMKM;
use App\Imports\UsahaImport;
use App\Usaha;
use App\UsahaFoto;
use File;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Ramsey\Uuid\Uuid;

class UsahaController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */

	public function __construct(UsahaFoto $data, Usaha $usaha) {
		$this->middleware('auth');
		$this->data = $data;
		$this->usaha = $usaha;
	}
	public function index(Request $request) {
		$usahas = Usaha::latest()->paginate(25);
		return view('backend.usaha.index', compact('usahas'))->with('i', ($request->input('page', 1) - 1) * 5);
	}
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		return view('backend.usaha.create');
	}
	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {
		$this->validate($request, [
			'nama_usaha' => 'required',
			'nama_pemilik' => 'required',
			'nomor_izin_usaha' => 'required',
			'alamat' => 'required',
			'jenis_usaha' => 'required',
			'jml_tkerja' => 'required',
			'modal' => 'required',
			'omzet_bln' => 'required',
			'omzet_thn' => 'required',
			'telpon' => 'required',
			'kategori' => 'required',
			'lat' => 'required',
			'lng' => 'required',
		]);
		// dd($request);
		$usaha = new Usaha();
		$usaha->uuid = Uuid::uuid4()->getHex();
		$usaha->nama_usaha = $request->nama_usaha;
		$usaha->nama_pemilik = $request->nama_pemilik;
		$usaha->nomor_izin_usaha = $request->nomor_izin_usaha;
		$usaha->alamat = $request->alamat;
		$usaha->jenis_usaha = $request->jenis_usaha;
		$usaha->jml_tkerja = $request->jml_tkerja;
		$usaha->modal = $request->modal;
		$usaha->omzet_bln = $request->omzet_bln;
		$usaha->omzet_thn = $request->omzet_thn;
		$usaha->telpon = $request->telpon;
		$usaha->kategori = $request->kategori;
		$usaha->lat = $request->lat;
		$usaha->lng = $request->lng;
		$usaha->save();
		return redirect()->route('usaha.index')->with('success', 'data successfully added');
	}
	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Usaha  $usaha
	 * @return \Illuminate\Http\Response
	 */
	public function show($uuid) {
		$usaha = Usaha::find($uuid);
		return view('backend.usaha.show', compact('usaha'));
	}
	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Usaha  $usaha
	 * @return \Illuminate\Http\Response
	 */
	public function edit($uuid) {
		$usaha = Usaha::find($uuid);
		// dd($usaha);
		return view('backend.usaha.edit', compact('usaha'));
	}
	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Usaha  $usaha
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $uuid) {
		$usaha = Usaha::find($uuid);
		$usaha->nama_usaha = $request->nama_usaha;
		$usaha->nama_pemilik = $request->nama_pemilik;
		$usaha->nomor_izin_usaha = $request->nomor_izin_usaha;
		$usaha->alamat = $request->alamat;
		$usaha->jenis_usaha = $request->jenis_usaha;
		$usaha->jml_tkerja = $request->jml_tkerja;
		$usaha->modal = $request->modal;
		$usaha->omzet_bln = $request->omzet_bln;
		$usaha->omzet_thn = $request->omzet_thn;
		$usaha->telpon = $request->telpon;
		$usaha->kategori = $request->kategori;
		$usaha->lat = $request->lat;
		$usaha->lng = $request->lng;
		$usaha->save();
		return redirect()->route('usaha.index')->with('success', 'data successfully updated');
	}
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Usaha  $usaha
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($uuid) {
		try {
			$usaha = Usaha::find($uuid);
			$usaha_id = $usaha->id;
			$galeri = UsahaFoto::find($usaha_id);
			// dd($usaha->hasFoto->count());
			if ($usaha->hasFoto->count() > 0) {
				File::delete(public_path() . $usaha->hasFoto->foto);
			}
			// File::delete($galeri->foto);
			$usaha->delete();
		} catch (FileNotFoundException $e) {
		}
		return redirect()->route('usaha.index')->with('success', 'Usaha deleted successfully');
	}

	public function formatExcel() {

	}
	public function generateExcelTemplate() {
		return Excel::download(new formatUMKM(), 'TemplateExcelUMKM.xlsx');
	}
	public function importExcel(Request $request) {
		// validasi untuk memastikan file yang diupload adalah excel
		$this->validate($request, ['excel' => 'required|mimes:xls,xlsx']);
		// ambil file yang baru diupload
		$excel = $request->file('excel');
		// baca sheet pertama

		// $excels = Excel::selectSheetsByIndex(0)->load($excel, function ($reader) {
		// options, jika ada
		// })->get();
		$excels = Excel::import(new UsahaImport, $excel);
		// rule untuk validasi setiap row pada file excel
		$rowRules = [
			'nama_usaha' => 'required',
			'nama_pemilik' => 'required',
			'nomor_izin_usaha' => 'required',
			'alamat' => 'required',
			'jenis_usaha' => 'required',
			'jml_tkerja' => 'required',
			'modal' => 'required',
			'omzet_bln' => 'required',
			'omzet_thn' => 'required',
			'telpon' => 'required',
			'kategori' => 'required',
			'uuid' => 'required',
		];
		// Catat semua id buku baru
		// ID ini kita butuhkan untuk menghitung total buku yang berhasil diimport
		// $data_id = [];
		// dd($data_)

		// looping setiap baris, mulai dari baris ke 2 (karena baris ke 1 adalah nama kolom)
		foreach ($excels as $row) {
			// Membuat validasi untuk row di excel
			// Disini kita ubah baris yang sedang di proses menjadi array
			$validator = Validator::make($row->toArray(), $rowRules);
			// Skip baris ini jika tidak valid, langsung ke baris selanjutnya
			if ($validator->fails()) {
				continue;
			}

			// Syntax dibawah dieksekusi jika baris excel ini valid

			$data = Usaha::create([
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
				'uuid' => $row['uuid'],
			]);
			// catat id dari buku yang baru dibuat
			array_push($data_id, $data->id);
		}
		// Ambil semua buku yang baru dibuat
		// $datas = Usaha::whereIn('id', $data_id)->get();
		// dd($datas);
		// redirect ke form jika tidak ada buku yang berhasil diimport
		// if ($datas->count() == 0) {
		// 	return redirect()->back()->with('error', 'Tidak ada data yang berhasil diImport');
		// }
		// set feedback

		// Tampilkan index buku
		return redirect()->route('usaha.index')->with('success', 'Berhasil mengimport data Usaha');
	}

	public function umkmList() {
		$usahas = Usaha::latest()->get();
		return datatables()
			->of($usahas)
			->addIndexColumn()
			->addColumn('action', function ($row) {
				$btn = '<a href="' . route('detail', $row->id) . '" data-toggle="tooltip"  data-uuid="' . $row->uuid . '" data-ket_ukerja="' . $row->id . '" data-original-title="Show" class="edit btn btn-info btn-sm ajaxshow"><i class="fa fa-eye"></i>Lihat</a>';
				return $btn;
			})
			->rawColumns(['action'])
			->make(true);
	}
}