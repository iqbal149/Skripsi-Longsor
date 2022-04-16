<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Phpml\Math\Distance\Euclidean;

class PerhitunganController extends Controller
{
    public function index()
    {
        $data['cekhasil'] = DB::table('hasil')->orderBy('id', 'DESC')
            ->get();
        $data['hasil'] = DB::table('hasil')->orderBy('id', 'DESC')
            ->first();
        $data['uji'] = DB::table('uji')
            ->first();
        $data['rekap'] = DB::table('rekap')
            ->get();
        $data['pci'] = DB::table('pci')
            ->first();

        return view('backend.perhitungan.index', $data);
    }
    public function cmeans(Request $request)
    {
        $cek_hasil = DB::table('hasil')->count();
        if ($cek_hasil != 0) {
            DB::table('hasil')->truncate();
            DB::table('uji')->truncate();
        }

        $jumlahCluster = $request->jumlah_cluster;
        $maksIter = $request->iterasi;
        $errorTerkecil = $request->error_terkecil;

        $dataset = DB::table('rekap')->get();
        // dd($dataset);
        $matriksPartAwal = $this->matriksPartisiAwal($jumlahCluster, count($dataset));
        // dd($matriksPartAwal);
        $matriksPartU = [];
        $p[0] = 0;
        $fungsiObjektif = [];
        $error = [];

        for ($j = 0; $j < $maksIter; $j++) {
            $p[$j + 1] = 0;
            if ($j == 0) {
                $c = [];
                $sumC = [];
                $pusatC = [];

                $L = [];
                $sumL = [];

                $ML = [];
                $sumML = [];

                for ($i = 0; $i < $jumlahCluster; $i++) {
                    foreach ($dataset as $key => $value) {
                        $mu2 = pow(str_replace(',', '.', $matriksPartAwal[$key][$i]), 2);
                        $c[$i][$key] = [
                            '𝝁i^2' => $mu2,
                            '𝝁i^2*x1' => $mu2 * $value->kejadian,
                            '𝝁i^2*x2' => $mu2 * $value->korban,
                            '𝝁i^2*x3' => $mu2 * $value->kerusakan,
                        ];
                        $sumC[$i] = [
                            '∑𝝁i^2' => 0,
                            '∑𝝁i^2*x1' => 0,
                            '∑𝝁i^2*x2' => 0,
                            '∑𝝁i^2*x3' => 0,
                        ];
                    }
                }

                for ($i = 0; $i < $jumlahCluster; $i++) {
                    foreach ($dataset as $key => $value) {
                        $sumC[$i]['∑𝝁i^2'] += $c[$i][$key]['𝝁i^2'];
                        $sumC[$i]['∑𝝁i^2*x1'] += $c[$i][$key]['𝝁i^2*x1'];
                        $sumC[$i]['∑𝝁i^2*x2'] += $c[$i][$key]['𝝁i^2*x2'];
                        $sumC[$i]['∑𝝁i^2*x3'] += $c[$i][$key]['𝝁i^2*x3'];
                    }

                    $pusatC[$i]['∑𝝁i^2*x1'] = $sumC[$i]['∑𝝁i^2*x1'] / $sumC[$i]['∑𝝁i^2'];
                    $pusatC[$i]['∑𝝁i^2*x2'] = $sumC[$i]['∑𝝁i^2*x2'] / $sumC[$i]['∑𝝁i^2'];
                    $pusatC[$i]['∑𝝁i^2*x3'] = $sumC[$i]['∑𝝁i^2*x3'] / $sumC[$i]['∑𝝁i^2'];

                }

                foreach ($dataset as $key => $value) {
                    $sumL[$key] = 0;
                    $sumML[$key] = 0;
                }

                for ($i = 0; $i < $jumlahCluster; $i++) {
                    foreach ($dataset as $key => $value) {
                        $L[$i][$key] = (
                            (pow($value->kejadian - $pusatC[$i]['∑𝝁i^2*x1'], 2)) +
                            (pow($value->korban - $pusatC[$i]['∑𝝁i^2*x2'], 2)) +
                            (pow($value->kerusakan - $pusatC[$i]['∑𝝁i^2*x3'], 2)) *
                            $c[$i][$key]['𝝁i^2']
                            );

                        $sumL[$key] += $L[$i][$key];
                        $ML[$i][$key] = (pow((
                            (pow($value->kejadian - $pusatC[$i]['∑𝝁i^2*x1'], 2)) +
                            (pow($value->korban - $pusatC[$i]['∑𝝁i^2*x2'], 2)) +
                            (pow($value->kerusakan - $pusatC[$i]['∑𝝁i^2*x3'], 2))), -1)
                            );

                        $sumML[$key] += $ML[$i][$key];
                    }

                }

                for ($i = 0; $i < $jumlahCluster; $i++) {
                    foreach ($dataset as $key => $value) {
                        $matriksPartU[$i][$key] = $ML[$i][$key] / $sumML[$key];
                    }

                }

                foreach ($dataset as $key => $value) {
                    $p[$j + 1] += $sumL[$key];
                }
            }
            else {
                $c = [];
                $sumC = [];
                $pusatC = [];

                $L = [];
                $sumL = [];

                $ML = [];
                $sumML = [];

                for ($i = 0; $i < $jumlahCluster; $i++) {
                    foreach ($dataset as $key => $value) {
                        $mu2 = pow($matriksPartU[$i][$key], 2);
                        $c[$i][$key] = [
                            '𝝁i^2' => $mu2,
                            '𝝁i^2*x1' => $mu2 * $value->kejadian,
                            '𝝁i^2*x2' => $mu2 * $value->korban,
                            '𝝁i^2*x3' => $mu2 * $value->kerusakan,
                        ];
                        $sumC[$i] = [
                            '∑𝝁i^2' => 0,
                            '∑𝝁i^2*x1' => 0,
                            '∑𝝁i^2*x2' => 0,
                            '∑𝝁i^2*x3' => 0,
                        ];
                    }
                }

                for ($i = 0; $i < $jumlahCluster; $i++) {
                    foreach ($dataset as $key => $value) {
                        $sumC[$i]['∑𝝁i^2'] += $c[$i][$key]['𝝁i^2'];
                        $sumC[$i]['∑𝝁i^2*x1'] += $c[$i][$key]['𝝁i^2*x1'];
                        $sumC[$i]['∑𝝁i^2*x2'] += $c[$i][$key]['𝝁i^2*x2'];
                        $sumC[$i]['∑𝝁i^2*x3'] += $c[$i][$key]['𝝁i^2*x3'];
                    }

                    $pusatC[$i]['∑𝝁i^2*x1'] = $sumC[$i]['∑𝝁i^2*x1'] / $sumC[$i]['∑𝝁i^2'];
                    $pusatC[$i]['∑𝝁i^2*x2'] = $sumC[$i]['∑𝝁i^2*x2'] / $sumC[$i]['∑𝝁i^2'];
                    $pusatC[$i]['∑𝝁i^2*x3'] = $sumC[$i]['∑𝝁i^2*x3'] / $sumC[$i]['∑𝝁i^2'];

                }

                foreach ($dataset as $key => $value) {
                    $sumL[$key] = 0;
                    $sumML[$key] = 0;
                }

                for ($i = 0; $i < $jumlahCluster; $i++) {
                    foreach ($dataset as $key => $value) {
                        $L[$i][$key] = (
                            (pow($value->kejadian - $pusatC[$i]['∑𝝁i^2*x1'], 2)) +
                            (pow($value->korban - $pusatC[$i]['∑𝝁i^2*x2'], 2)) +
                            (pow($value->kerusakan - $pusatC[$i]['∑𝝁i^2*x3'], 2)) *
                            $c[$i][$key]['𝝁i^2']
                            );

                        $sumL[$key] += $L[$i][$key];
                        $ML[$i][$key] = (pow((
                            (pow($value->kejadian - $pusatC[$i]['∑𝝁i^2*x1'], 2)) +
                            (pow($value->korban - $pusatC[$i]['∑𝝁i^2*x2'], 2)) +
                            (pow($value->kerusakan - $pusatC[$i]['∑𝝁i^2*x3'], 2))), -1)
                            );

                        $sumML[$key] += $ML[$i][$key];
                    }
                }

                for ($i = 0; $i < $jumlahCluster; $i++) {
                    foreach ($dataset as $key => $value) {
                        $matriksPartU[$i][$key] = $ML[$i][$key] / $sumML[$key];
                    }

                }

                foreach ($dataset as $key => $value) {
                    $p[$j + 1] += $sumL[$key];
                }

            }
            $fungsiObjektif[$j] = $p[$j + 1];
            $error[$j] = $p[$j + 1] - $p[$j];
            if ((abs($p[$j + 1] - $p[$j]) <= $errorTerkecil)) {
                break;
            }
        }

        $hasilCluster = [];
        $hasilL = [];
        $hasilLT = [];
        for ($i = 0; $i < $jumlahCluster; $i++) {
            foreach ($dataset as $key => $value) {
                $hasilCluster[$key][$i] = $matriksPartU[$i][$key];
                $hasilL[$key][$i] = $L[$i][$key];
            }
        }
        $mHasilCluster = [];
        foreach ($dataset as $key => $value) {
            $mHasilCluster[$key] = (array_search(max($hasilCluster[$key]), $hasilCluster[$key])) + 1;
            $hasilLT[$key] = $sumL[$key];
        }

        $simpan = [
            'hasil_jumlah_cluster' => $jumlahCluster,
            'hasil_iterasi' => $maksIter,
            'hasil_error_terkecil' => $errorTerkecil,
            'hasil_cluster_hitung' => json_encode($hasilCluster),
            'hasil_L' => json_encode($hasilL),
            'hasil_LT' => json_encode($hasilLT),
            'hasil_cluster' => json_encode($mHasilCluster),
            'hasil_fungsi_objektif' => json_encode($fungsiObjektif),
            'hasil_error' => json_encode($error)
        ];
        //    dd($simpan);
        DB::table('hasil')->insert($simpan);

        return redirect('perhitungan')->with('success', 'Data berhasil dihitung ulang');

    }

    function matriksPartisiAwal($jumlahCluster, $jumlahData)
    {
        $matriks = [];
        $data = DB::table('matriks_3')->get();
        // dd($data);
        for ($i = 0; $i < $jumlahData; $i++) {
            $matriks[$i] = [
                $data[$i]->matriks_3_1,
                $data[$i]->matriks_3_2,
                $data[$i]->matriks_3_3,
            ];
        }

        return $matriks;
    }

    public function validasi()
    {
        DB::table('pci')->truncate();

        $hasil = DB::table('hasil')
            // ->where('hasil_id', $id)
            ->first();
        $clusterHitung = json_decode($hasil->hasil_cluster_hitung);
        $cluster = json_decode($hasil->hasil_cluster);
        $dataUji = [];
        $sumData = [];
        $pci = [];

        for ($i = 0; $i <= 3; $i++) {
            $sumData[$i] = 0;
        }
        for ($i = 0; $i < 3; $i++) {
            foreach ($clusterHitung as $key => $value) {
                // for ($i = 0; $i < 3; $i++) {

                $dataUji[$key][$i] = pow($clusterHitung[$key][$i], 2);
                $sumData[$i] += $dataUji[$key][$i];
            //  $pci[$key] = 1 / count($clusterHitung) * ($sumData);
            // dd($sumData[$i]);
            }
        }
        // dd(json_encode($dataUji));
        $pci = 1 / count($clusterHitung) * ($sumData[0] + $sumData[1] + $sumData[2]);
        // return $pci;
        $simpan = [
            'hasil' => json_encode($pci),
            'data_uji' => json_encode($dataUji),
        ];

        DB::table('pci')->insert($simpan);

        return redirect('perhitungan');
    }
    public function pengujian()
    {
        $hasil = DB::table('hasil')
            // ->where('hasil_id', $id)
            ->first();
        $clusterHitung = json_decode($hasil->hasil_cluster_hitung);
        $cluster = json_decode($hasil->hasil_cluster);
        $dataUji = [];
        foreach ($clusterHitung as $key => $value) {
            array_push($dataUji, [
                'data' => $value,
                'cluster' => $cluster[$key]
            ]);
        }

        $jumlahCluster = [];
        $jumlahClusterLuar = [];
        $dataCluster = [];
        $dataClusterLuar = [];
        $clusterLuar = [];

        foreach ($dataUji as $key => $value) {
            for ($i = 1; $i <= $hasil->hasil_jumlah_cluster; $i++) {
                if ($value['cluster'] == $i) {
                    $jumlahCluster[$i] = 0;
                    $dataCluster[$i] = [];
                }
                else {
                    $clusterLuar[$key] = [];
                    $jumlahClusterLuar[$i] = 0;
                    $dataClusterLuar[$i] = [];
                }
            }
        }
        foreach ($dataUji as $key => $value) {
            for ($i = 1; $i <= $hasil->hasil_jumlah_cluster; $i++) {
                if ($value['cluster'] == $i) {
                    $jumlahCluster[$i]++;
                    array_push($dataCluster[$i], $value);
                }
                else {
                    $jumlahClusterLuar[$i]++;
                    array_push($dataClusterLuar[$i], $value);
                    array_push($clusterLuar[$key], $i);
                }
            }
        }

        $a = [];
        $d = [];
        $b = [];
        $si = [];
        $euclidean = new Euclidean();
        foreach ($dataUji as $key => $value) {
            $_a = 0;
            $v2 = [];
            foreach ($dataCluster[$value['cluster']] as $key2 => $value2) {
                $v2[$key] = $value2;
                $_a += $euclidean->distance($value['data'], $value2['data']);
                $a[$key] = 1 / count($dataUji) * ($_a);
            }

            $__d[$key] = 0;
            $avg[$key] = [];
            foreach ($dataClusterLuar[$value['cluster']] as $key3 => $value3) {
                if ($value3['cluster'] != $value['cluster']) {
                    foreach ($clusterLuar[$key] as $key4 => $value4) {
                        if ($value3['cluster'] == $value4) {
                            $__d[$key] += $euclidean->distance($v2[$key]['data'], $value3['data']);
                            $_d[$key4][$key3] = $__d[$key];
                            $d[$key][$key4][$key3] = 1 / ($jumlahCluster[$value3['cluster']]) * ($_d[$key4][$key3]);
                        }
                    }
                }
            }
            foreach ($d[$key] as $key5 => $value5) {
                $average = array_sum($value5) / count($value5);
                array_push($avg[$key], $average);
            }
            $b[$key] = min($avg[$key]);
            $si[$key] = ($b[$key] - $a[$key]) / max($a[$key], $b[$key]);
        }

        $simpan = [
            // 'uji_hasil_id' => $id,
            'uji_si' => json_encode($si),
            'uji_si_global' => array_sum($si) / count($si)
        ];

        DB::table('uji')->insert($simpan);

        return redirect('perhitungan');

    }
}
