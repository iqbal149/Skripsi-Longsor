<?php

namespace App\Http\Controllers;

use App\Matriks;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\formatMatriks;
use App\Imports\MatriksImport;


class MatriksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Matriks::all();
        // dd($data);
        return view('backend.matriks.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.matriks.create');

    }

    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Matriks  $matriks
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Matriks  $matriks
     * @return \Illuminate\Http\Response
     */
    public function edit(Matriks $matriks)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Matriks  $matriks
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Matriks $matriks)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Matriks  $matriks
     * @return \Illuminate\Http\Response
     */
    public function destroy(Matriks $matriks)
    {
        //
    }

    public function deleteall(){
        Matriks::truncate();
        return redirect()->route('matriks.index')->with('success', 'Berhasil Hapus Semua Data');
    }
    public function generateExcelTemplate()
    {
        return Excel::download(new formatMatriks(), 'TemplateExcelMatriks.xlsx');
    }


    public function importExcel(Request $request)
    {
        // dd($tahun);
        // validasi untuk memastikan file yang diupload adalah excel
        $this->validate($request, ['excel' => 'required|mimes:xls,xlsx']);
        // ambil file yang baru diupload
        $excel = $request->file('excel');
        // baca sheet pertama

        // $excels = Excel::selectSheetsByIndex(0)->load($excel, function ($reader) {
        // options, jika ada
        // })->get();
        $excels = Excel::import(new MatriksImport, $excel);
        // rule untuk validasi setiap row pada file excel
        $rowRules = [
            'matriks_3_1' => 'required',
            'matriks_3_2' => 'required',
            'matriks_3_3' => 'required',
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

            $data = Matriks::create([
                'matriks_3_1' => $row['matriks_3_1'],
                'matriks_3_2' => $row['matriks_3_2'],
                'matriks_3_3' => $row['matriks_3_3'],
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
        return redirect()->route('matriks.index')->with('success', 'Berhasil mengimport data Matriks');
    }
}
