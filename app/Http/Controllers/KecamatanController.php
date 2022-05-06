<?php

namespace App\Http\Controllers;

use App\Kecamatan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Kabupaten;
use Ramsey\Uuid\Uuid;


class KecamatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $uuid)
    {
        $kab = Kabupaten::whereUuid($uuid)->firstOrFail();
        $data = Kecamatan::where('id_kabupaten', $kab->uuid)->get();
        // dd(count($longsors));
        return view('backend.kecamatan.index', compact('kab', 'data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($uuid)
    {
        return view('backend.kecamatan.create', compact('uuid'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $uuid)
    {
        $this->validate($request, [
            'label' => 'required',

        ]);
        $data = new Kecamatan();
        $data->id_kabupaten = $uuid;
        $data->uuid = Uuid::uuid4()->getHex();
        $data->label = $request->label;
        $data->save();
        return redirect()->route('kabupaten.kecamatan.index', $uuid)->with('success', 'data successfully added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Kecamatan  $kecamatan
     * @return \Illuminate\Http\Response
     */
    public function show($longsor, $uuid)
    {
        //
        $data = Kabupaten::find($uuid);
        return view('backend.kabupaten.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kecamatan  $kecamatan
     * @return \Illuminate\Http\Response
     */
    public function edit($idkab, $idkec)
    {
        //
        $kabupaten = Kabupaten::whereUuid($idkab)->firstOrFail();
        // dd($tahun);
        $kecamatan = Kecamatan::whereUuid($idkec)->firstOrFail();
        // dd($longsor);
        return view('backend.kecamatan.edit', compact('kabupaten', 'kecamatan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kecamatan  $kecamatan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idkab, $idkec)
    {
        $data = Kecamatan::whereUuid($idkec)->firstOrFail();
        $data->label = $request->label;
        $data->save();
        return redirect()->route('kabupaten.kecamatan.index', $idkab)->with('success', 'data successfully updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kecamatan  $kecamatan
     * @return \Illuminate\Http\Response
     */
    public function destroy($idkab, $idkec)
    {
        try {
            $data = Kecamatan::whereUuid($idkec);
            $data->delete();
        }
        catch (FileNotFoundException $e) {
        }
        return redirect()->route('kabupaten.kecamatan.index', $idkab)->with('success', 'Data deleted successfully');
    }
}
