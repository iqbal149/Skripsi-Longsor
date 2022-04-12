<?php


use Carbon\Carbon;
use App\Models\Variabel;
use Illuminate\Support\Str;

if (! function_exists('tgl_id')) {
    function tgl_id($tgl)
    {
        $dt = new Carbon($tgl);
        setlocale(LC_TIME, 'IND');
        return $dt->formatLocalized('%d %B %Y');   
    }
}

// function clusterGet(){
//     $querycount  = DB::table('clust')
// 				->select('cluster',DB::raw('count(cluster) as countcluster'))
// 				->groupBy('cluster')
//                 ->get();    
//     return $querycount;
// }

function kejadianGet(){
    $querycount = DB::table('rekap')
    ->select('kecamatan', 'kejadian')
        ->orderBy('kecamatan', 'asc')->get();
        return $querycount;
}

function clusterGet(){
    $hasil = DB::table('hasil')->orderBy('id', 'DESC')
        ->first();
    $arr = json_decode($hasil->hasil_cluster);
    $cluster = array_count_values($arr);

    $arr = json_decode($hasil->hasil_cluster);
    foreach (array_count_values($arr) as $key => $value) {
        $jml[$key] = json_decode($value);
    }
    return $arr;
}