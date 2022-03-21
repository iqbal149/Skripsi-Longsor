<?php

namespace App\Http\Controllers;

use App\Slider;
use DB;
use File;
use Flash;
use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;

class SliderController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index(Request $request) {
		$sliders = Slider::latest()->paginate(5);
		return view('backend.slider.index', compact('sliders'))->with('i', ($request->input('page', 1) - 1) * 5);
	}
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		return view('backend.slider.create');
	}
	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {
		$this->validate($request, [
			'nama' => 'required',
			'deskripsi' => 'required',
			'foto' => 'file|image|mimes:jpeg,png,jpg|max:2048',
		]);
		// dd($request->file('foto'));
		try {
			$slider = new Slider();
			$slider->nama = $request->nama;
			$slider->deskripsi = $request->deskripsi;
			$slider->uuid = Uuid::uuid4()->getHex();
			$nama = preg_replace('/\s+/', '', $slider->nama);

			if ($request->hasFile('foto')) {
				$file = $request->file('foto');
				$filename = $nama . '-foto.' . $file->getClientOriginalExtension();
				$path = $request->file('foto')->storeAs('public/foto-slider', $filename, 'local');
				$slider->foto = '/storage' . substr($path, strpos($path, '/'));
				$slider->save();
				# code...
			}
			$slider->save();
		} catch (Exception $e) {
			DB::rollback();
			Flash::error('Gagal Tambah Data');
		}
		return redirect()->route('slider.index')->with('success', 'Slider successfully added');
	}
	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id) {
		$slider = Slider::find($id);
		return view('backend.slider.show', compact('slider'));
	}
	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id) {
		$slider = Slider::find($id);
		return view('backend.slider.edit', compact('slider'));
	}
	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id) {
		$this->validate($request, [
			'nama' => 'required',
			'deskripsi' => 'required',
			'foto' => 'file|image|mimes:jpeg,png,jpg|max:2048',
		]);
		$slider = Slider::find($id);
		$slider->nama = $request->nama;
		$slider->deskripsi = $request->deskripsi;
		$nama = preg_replace('/\s+/', '', $slider->nama);

		if ($request->hasFile('foto')) {
			$file = $request->file('foto');
			$filename = $nama . '-foto.' . $file->getClientOriginalExtension();
			$path = $request->file('foto')->storeAs('public/foto-slider', $filename, 'local');
			$slider->foto = '/storage' . substr($path, strpos($path, '/'));
			if ($slider->foto) {
				$old_foto = $slider->foto;
				$old_foto_path = '/storage' . DIRECTORY_SEPARATOR . 'foto-slider' . DIRECTORY_SEPARATOR . $slider->foto;
				try {
					File::delete($old_foto_path);
				} catch (FileNotFoundException $e) {
					#file not found
				}
			}
			$slider->save();
		}
		$slider->save();
		return redirect()->route('slider.index')->with('success', 'Slider updated successfully');
	}
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id) {
		try {
			$slider = slider::find($id);
			File::delete(public_path() . $slider->foto);
			$slider->delete();
		} catch (FileNotFoundException $e) {
		}
		return redirect()->route('slider.index')->with('success', 'Slider deleted successfully');
	}
}
