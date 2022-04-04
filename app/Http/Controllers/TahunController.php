<?php

namespace App\Http\Controllers;

use App\Tahun;
use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;

class TahunController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request) {
		$tahuns = tahun::latest()->get();
		// $tahuns = tahun::first();
        // dd($tahuns->hasLongsor->count());
		return view('backend.tahun.index', compact('tahuns'));
	}
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend.tahun.create');
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
        // dd($request);
        $this->validate($request, [
			'label' => 'required',
			  
		]);
        $tahun = new tahun();
		$tahun->uuid = Uuid::uuid4()->getHex();
		$tahun->label = $request->label;
		$tahun->save();
		return redirect()->route('tahun.index')->with('success', 'data successfully added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tahun  $tahun
     * @return \Illuminate\Http\Response
     */
    public function show(Tahun $tahun)
    {
        //
        $tahun = Tahun::find($uuid);
		return view('backend.tahun.show', compact('tahun'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tahun  $tahun
     * @return \Illuminate\Http\Response
     */
    public function edit($uuid)
    {
        //
        $tahun = Tahun::find($uuid);
		// dd($tahun);
		return view('backend.tahun.edit', compact('tahun'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tahun  $tahun
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $uuid)
    {
        //
        $tahun = Tahun::whereUuid($uuid)->firstOrFail();
        // dd($tahun);

		$tahun->label = $request->label;
		$tahun->save();
		return redirect()->route('tahun.index')->with('success', 'data successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tahun  $tahun
     * @return \Illuminate\Http\Response
     */
    public function destroy($uuid)
    {
        //
        $tahun = tahun::find($uuid);
        $tahun->delete();
		return redirect()->route('tahun.index')->with('success', 'tahun deleted successfully');
    }
}
