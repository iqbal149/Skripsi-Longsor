<?php
namespace App\Http\Controllers\Frontend;
use App\Charts\UsahaChart;
use App\Http\Controllers\Controller;
use App\Longsor;
use App\Rekap;
use Datatables;
use Illuminate\Http\Request;
use Response;
use DB;

class IndexController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index(Request $request) {
		
		$data['cekhasil'] = DB::table('hasil')->orderBy('id', 'DESC')
			->get();
		
		$cluster = DB::table('hasil')->select('hasil_cluster')->orderBy('id', 'DESC')
			->first();
			
		$data['uji'] = DB::table('uji')
			->first();

		$data['rekap'] = DB::table('rekap')
			->orderBy('kecamatan','asc')->get();
		
		return view('frontend.index', $data);
	}
	public function hasil(){
		$data['cekhasil'] = DB::table('hasil')->orderBy('id', 'DESC')
            ->get();
        $data['hasil'] = DB::table('hasil')->orderBy('id', 'DESC')
            ->first();
        $data['uji'] = DB::table('uji')
            ->first();
        $data['rekap'] = DB::table('rekap')
            ->get();
        
        return view('frontend.hasil', $data);
	}
	
	public function show($key) {
		$data = Longsor::where('kecamatan' ,$key)->get();
		// dd($data);
		return view('frontend.detail', compact('data','key'));
	}
	
}