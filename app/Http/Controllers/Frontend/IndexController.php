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
		$data['hasil'] = DB::table('hasil')->orderBy('id', 'DESC')
			->first();
		$cluster = DB::table('hasil')->select('hasil_cluster')->orderBy('id', 'DESC')
			->first();
			
		$data['uji'] = DB::table('uji')
			->first();

		$data['rekap'] = DB::table('rekap')
			->orderBy('kecamatan','asc')->get();
		// return $data;
		// dd(json_decode($data['hasil']->hasil_cluster));

		// $cluster_1 = Usaha::where('kategori', 'mikro')->count();
		// $cluster_2 = Usaha::where('kategori', 'kecil')->count();
		// $cluster_3 = Usaha::where('kategori', 'menengah')->count();
		// // $chart = Charts::database($usahas, 'bar', 'highcharts')
		// // 	->title("test Charts")
		// // 	->elemenLabel("Total Usaha")
		// // 	->dimensions(1000, 500)
		// // 	->responsive(false);
		// $borderColors = [
		// 	"rgba(255, 99, 132, 1.0)",
		// 	"rgba(22,160,133, 1.0)",
		// 	"rgba(255, 205, 86, 1.0)",
		// 	"rgba(51,105,232, 1.0)",
		// 	"rgba(244,67,54, 1.0)",
		// 	"rgba(34,198,246, 1.0)",
		// 	"rgba(153, 102, 255, 1.0)",
		// 	"rgba(255, 159, 64, 1.0)",
		// 	"rgba(233,30,99, 1.0)",
		// 	"rgba(205,220,57, 1.0)",
		// ];
		// $fillColors = [
		// 	"rgba(255, 99, 132, 0.7)",
		// 	"rgba(22,160,133, 0.7)",
		// 	"rgba(255, 205, 86, 0.7)",
		// 	"rgba(51,105,232, 0.7)",
		// 	"rgba(244,67,54, 0.7)",
		// 	"rgba(34,198,246, 0.7)",
		// 	"rgba(153, 102, 255, 0.7)",
		// 	"rgba(255, 159, 64, 0.7)",
		// 	"rgba(233,30,99, 0.7)",
		// 	"rgba(205,220,57, 0.7)",

		// ];
		// $chart = new UsahaChart;
		// $chart->labels(['Cluster 1', 'Cluster 2', 'CLuster 3']);
		// $chart->dataset('Data Jumlah UMKM', 'polarArea', [$cluster_1, $cluster_2, $cluster_3])
		// 	->color($borderColors)
		// 	->backgroundcolor($fillColors);
		// return view('frontend.index', ['UsahaChart' => $chart]);
		return view('frontend.index', $data);
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
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		//
	}
	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {
		//
	}
	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($key) {
		$data = Longsor::where('kecamatan' ,$key)->get();
		// dd($data);
		return view('frontend.detail', compact('data','key'));
	}
	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id) {
		//
	}
	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id) {
		//
	}
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id) {
		//
	}
}