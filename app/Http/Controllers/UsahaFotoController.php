<?php
namespace App\Http\Controllers;
use App\Usaha;
use App\UsahaFoto;
use DB;
use File;
use Flash;
use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;

class UsahaFotoController extends Controller {
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
	public function index($id) {
		$usaha = $this->usaha->find($id);
		$galeris = $this->data->where('usaha_id', $id)->latest()->get();
		return view('backend.usaha_foto.index', compact('usaha', 'galeris'));
	}
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create($id) {
		$usaha = $this->usaha->find($id);
		return view('backend.usaha_foto.create', compact('usaha'));
	}
	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request, $id) {
		$this->validate($request, [
			'foto' => 'required|image|mimes:jpg,png,jpeg',
			// 'caption' => 'required',
			// 'id_album' => 'required',
		]);
		try {
			$galeri = new UsahaFoto();
			$galeri->uuid = Uuid::uuid4()->getHex();
			$galeri->usaha_id = $id;
			$nama = preg_replace('/\s+/', '', $galeri->uuid);
			if ($request->hasFile('foto')) {
				$file = $request->file('foto');
				$filename = $nama . '-foto.' . $file->getClientOriginalExtension();
				$path = $request->file('foto')->storeAs('public/foto-usaha', $filename, 'local');
				$galeri->foto = '/storage' . substr($path, strpos($path, '/'));
				$galeri->save();
				# code...
			}
			$galeri->save();
		} catch (Exception $e) {
			DB::rollback();
			Flash::error('Gagal Tambah Data');
		}
		// $galeris = Galeri::where('id_album', $id)->latest()->get();
		return redirect()->route('usahafoto.index', $id)->with('success', 'Image successfully added');
	}
	/**
	 * Display the specified resource.
	 *
	 * @param  \App\UsahaFoto  $usahaFoto
	 * @return \Illuminate\Http\Response
	 */
	public function show(UsahaFoto $usahaFoto) {
		return abort(404);
	}
	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\UsahaFoto  $usahaFoto
	 * @return \Illuminate\Http\Response
	 */
	public function edit(UsahaFoto $usahaFoto) {
		return abort(404);
	}
	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\UsahaFoto  $usahaFoto
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, UsahaFoto $usahaFoto) {
		return abort(404);
	}
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\UsahaFoto  $usahaFoto
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id) {
		try {
			$galeri = $this->data->find($id);
			if ($galeri->foto) {
				File::delete(public_path() . $galeri->foto);
			}
// File::delete($galeri->foto);
			$galeri->delete();
		} catch (FileNotFoundException $e) {
		}
		return redirect()->route('usahafoto.index', $galeri->usaha_id)->with('success', 'Image deleted successfully');
	}
}