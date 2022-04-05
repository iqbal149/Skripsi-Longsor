<?php

namespace App\Http\Controllers;

use App\Kabupaten;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;


class KabupatenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Kabupaten::latest()->get();
		return view('backend.kabupaten.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.kabupaten.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
			'label' => 'required',
			'kode' => 'required',
			  
		]);
        $data = new kabupaten();
		$data->uuid = Uuid::uuid4()->getHex();
		$data->label = $request->label;
		$data->kode = $request->kode;
		$data->save();
		return redirect()->route('kabupaten.index')->with('success', 'data successfully added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Kabupaten  $kabupaten
     * @return \Illuminate\Http\Response
     */
    public function show(Kabupaten $kabupaten)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kabupaten  $kabupaten
     * @return \Illuminate\Http\Response
     */
    public function edit($uuid)
    {
        $data = Kabupaten::whereUuid($uuid)->firstOrFail();
        // dd($data);
        return view('backend.kabupaten.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kabupaten  $kabupaten
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $uuid)
    {
        $data = Kabupaten::whereUuid($uuid)->firstOrFail();
        // dd($data);

        $data->label = $request->label;
        $data->kode = $request->kode;
        $data->save();
        return redirect()->route('kabupaten.index')->with('success', 'data successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kabupaten  $kabupaten
     * @return \Illuminate\Http\Response
     */
    public function destroy($uuid)
    {
        $data = Kabupaten::whereUuid($uuid)->firstOrFail();

        $data->delete();
		return redirect()->route('kabupaten.index')->with('success', 'tahun deleted successfully');
    }
}
