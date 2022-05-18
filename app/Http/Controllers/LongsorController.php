<?php

namespace App\Http\Controllers;
use App\Imports\LongsorImport;
use App\Exports\formatLongsor;
use App\Longsor;
use App\Tahun;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;
use Maatwebsite\Excel\Facades\Excel;




class LongsorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $uuid)
    {
		// dd($uuid);
        $tahun = Tahun::whereUuid($uuid)->firstOrFail();
        $longsors = Longsor::where('id_tahun', $tahun->uuid)->get();
		// dd(count($longsors));
		return view('backend.longsor.index', compact('longsors','tahun'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($uuid)
    {
        //
        return view('backend.longsor.create', compact('uuid'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $tahun)
    {
        // dd($request);

        $this->validate($request, [
			'alamat' => 'required',
			'kecamatan' => 'required',
			'tgl' => 'required',
			'kb_meninggal' => 'required',
            'kb_hilang' => 'required',
			'kb_luka' => 'required',
            'kb_mengungsi' => 'required',
			'kr_rumah_rb' => 'required',
			'kr_rumah_rr' => 'required',
			'kr_rumah_terendam' => 'required',
			'kantor' => 'required',
			'sekolah' => 'required',
			't_ibadah' => 'required',
			'sarana_kesehatan' => 'required',
			'bangunan_lain' => 'required',
            'jembatan' => 'required',
            'jalan' => 'required', 
            'sawah' => 'required',  
            'hutan' => 'required',
		]);
        // dd($uuid);

        $longsor = new Longsor();
		$longsor->id_tahun = $tahun;
		$longsor->uuid = Uuid::uuid4()->getHex();
		$longsor->alamat = $request->alamat;
		$longsor->kecamatan = $request->kecamatan;
		$longsor->tgl = $request->tgl;
		$longsor->kb_meninggal = $request->kb_meninggal;
		$longsor->kb_hilang = $request->kb_hilang;
		$longsor->kb_luka = $request->kb_luka;
		$longsor->kb_mengungsi = $request->kb_mengungsi;
		$longsor->kr_rumah_rb = $request->kr_rumah_rb;
		$longsor->kr_rumah_rr = $request->kr_rumah_rr;
		$longsor->kr_rumah_terendam = $request->kr_rumah_terendam;
		$longsor->kantor = $request->kantor;
		$longsor->sekolah = $request->sekolah;
		$longsor->t_ibadah = $request->t_ibadah;
        $longsor->sarana_kesehatan = $request->sarana_kesehatan;
        $longsor->bangunan_lain = $request->bangunan_lain;
        $longsor->jembatan = $request->jembatan;
        $longsor->jalan = $request->jalan;
        $longsor->sawah = $request->sawah;
        $longsor->hutan = $request->hutan;

		// dd($longsor);
		$longsor->save();
		return redirect()->route('tahun.longsor.index', $tahun)->with('success', 'data successfully added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Longsor  $longsor
     * @return \Illuminate\Http\Response
     */
    public function show(Longsor $longsor, $uuid)
    {
        //
        $longsor = Longsor::find($uuid);
		return view('backend.longsor.show', compact('longsor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Longsor  $longsor
     * @return \Illuminate\Http\Response
     */
    public function edit($idtahun, $idlongsor)
    {
        //
		$tahun = Tahun::whereUuid($idtahun)->firstOrFail();
		// dd($tahun);
        $longsor = Longsor::whereUuid($idlongsor)->firstOrFail();
		// dd($longsor);
		return view('backend.longsor.edit', compact('longsor','tahun'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Longsor  $longsor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idtahun, $idlongsor)
    {
        // dd($request);
		$this->validate($request, [
			'alamat' => 'required',
			'kecamatan' => 'required',
			'tgl' => 'required',
			'kb_meninggal' => 'required',
			'kb_hilang' => 'required',
			'kb_luka' => 'required',
			'kb_mengungsi' => 'required',
			'kr_rumah_rb' => 'required',
			'kr_rumah_rr' => 'required',
			'kr_rumah_terendam' => 'required',
			'kantor' => 'required',
			'sekolah' => 'required',
			't_ibadah' => 'required',
			'sarana_kesehatan' => 'required',
			'bangunan_lain' => 'required',
			'jembatan' => 'required',
			'jalan' => 'required',
			'sawah' => 'required',
			'hutan' => 'required',
		]);
        $data = Longsor::whereUuid($idlongsor)->firstOrFail();
		// dd($data);
		// $input = $request->all();

		$data->alamat = request('alamat');
		$data->kecamatan = request('kecamatan');
		$data->tgl = request('tgl');
		$data->kb_meninggal = request('kb_meninggal');
		$data->kb_hilang = request('kb_hilang');
		$data->kb_luka = request('kb_luka');
		$data->kb_mengungsi = request('kb_mengungsi');
		$data->kr_rumah_rb = request('kr_rumah_rb');
		$data->kr_rumah_rr = request('kr_rumah_rr');
		$data->kr_rumah_terendam = request('kr_rumah_terendam');
		$data->kantor = request('kantor');
		$data->sekolah = request('sekolah');
		$data->t_ibadah = request('t_ibadah');
		$data->sarana_kesehatan = request('sarana_kesehatan');
		$data->bangunan_lain = request('bangunan_lain');
		$data->jembatan = request('jembatan');
		$data->jalan = request('jalan');
		$data->sawah = request('sawah');
		$data->hutan = request('hutan');
		// $data->save('data');
		// $data->update($input);
		// Longsor::whereUuid($idlongsor)->update($data);
		$data->update();
		// dd($data);

		return redirect()->route('tahun.longsor.index', $idtahun)->with('success', 'data successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Longsor  $longsor
     * @return \Illuminate\Http\Response
     */
    public function destroy($idtahun, $idlongsor)
    {
        try {
			$longsor = Longsor::whereUuid($idlongsor);
			$longsor->delete();
		} catch (FileNotFoundException $e) {
		}
		return redirect()->route('tahun.longsor.index', $idtahun)->with('success', 'Data deleted successfully');
    }


    public function generateExcelTemplate() {
		return Excel::download(new formatLongsor(), 'TemplateExcelLongsor.xlsx');
	}


	public function importExcel(Request $request, $tahun) {
		// dd($tahun);
		// validasi untuk memastikan file yang diupload adalah excel
		$this->validate($request, ['excel' => 'required|mimes:xls,xlsx']);
		// ambil file yang baru diupload
		$excel = $request->file('excel');
		// baca sheet pertama

		// $excels = Excel::selectSheetsByIndex(0)->load($excel, function ($reader) {
		// options, jika ada
		// })->get();
		$excels = Excel::import(new LongsorImport($tahun), $excel);
		// rule untuk validasi setiap row pada file excel
		$rowRules = [
			'alamat' => 'required',
			'kecamatan' => 'required',
			'tgl' => 'required',
			'kb_meninggal' => 'required',
            'kb_hilang' => 'required',
			'kb_luka' => 'required',
            'kb_mengungsi' => 'required',
			'kr_rumah_rb' => 'required',
			'kr_rumah_rr' => 'required',
			'kr_rumah_terendam' => 'required',
			'kantor' => 'required',
			'sekolah' => 'required',
			't_ibadah' => 'required',
			'sarana_kesehatan' => 'required',
			'bangunan_lain' => 'required',
            'jembatan' => 'required',
            'jalan' => 'required', 
            'sawah' => 'required',  
            'hutan' => 'required',   
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
				'alamat' => $row['alamat'],
				'kecamatan' => $row['kecamatan'],
				'tgl' => $row['tgl'],
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
				'bangunan_lain' => $row['bangunan_lain'],
				'jembatan' => $row['jembatan'],
				'jalan' => $row['jalan'],
				'sawah' => $row['sawah'],
				'hutan' => $row['hutan'],
				'uuid' => Uuid::uuid4()->getHex(),
				// 'id_tahun' => $tahun,

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
		return redirect()->route('tahun.longsor.index', $tahun)->with('success', 'Berhasil mengimport data Longsor');
	}
}
