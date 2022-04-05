<?php

namespace App\Http\Controllers;

use App\longsor;
use App\Rekap;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class RekapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Rekap::latest()->get();
        return view('backend.rekap.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function hitung()
    {
        $rekap = Rekap::count();
        if ($rekap != 0) {
            Rekap::truncate();
        }

        $data = json_decode(DB::table('longsor')
            ->select('kecamatan', DB::raw('sum(kb_meninggal)+sum(kb_hilang)+sum(kb_luka)+sum(kb_mengungsi) as korban'), DB::raw('count(tgl) as kejadian'), DB::raw('sum(kr_rumah_rb)+sum(kr_rumah_rr)+sum(kr_rumah_terendam)+sum(kantor)+sum(sekolah)+sum(t_ibadah)+sum(sarana_kesehatan)+sum(bangunan_lain)+sum(jembatan)+sum(jalan)+sum(sawah)+sum(hutan) as kerusakan'))
            ->groupBy('kecamatan')->get(), true);
        // ->pluck('total_korban', 'kecamatan');

        $jml_data = DB::table('longsor')->select('kecamatan')->groupBy('kecamatan')->get()->count();

        for ($i = 0; $i < $jml_data; $i++) {
            Rekap::insert([
                'kecamatan' => $data[$i]['kecamatan'],
                'kejadian' => $data[$i]['kejadian'],
                'korban' => $data[$i]['korban'],
                'kerusakan' => $data[$i]['kerusakan'],
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]);
        }

        return redirect()->route('rekap.index')->with('success', 'Data berhasil direkap ulang');
    }

    public function create()
    {
    //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\longsor  $longsor
     * @return \Illuminate\Http\Response
     */
    public function show(longsor $longsor)
    {
    //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\longsor  $longsor
     * @return \Illuminate\Http\Response
     */
    public function edit(longsor $longsor)
    {
    //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\longsor  $longsor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, longsor $longsor)
    {
    //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\longsor  $longsor
     * @return \Illuminate\Http\Response
     */
    public function destroy(longsor $longsor)
    {
    //
    }
}
