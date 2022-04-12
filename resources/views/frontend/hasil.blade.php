@extends('frontend.master')
@section('navCmeans') active @stop
@section('content')
    <section class="home-slider">
        <div class="slider-item bread-wrap" style="background-image:url(../img/bg-hasil.jpg)!important"
            data-stellar-background-ratio="0.2">
            {{-- <div class="overlay"></div> --}}
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center">
                    <div class="col-md-10 col-sm-12 ftco-animate mb-4 text-center ">
                        <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('index') }}">Home</a></span> <span
                                class="mr-2"><a href="#">Proses Perhitungan</a></span> <span>C-Means</span></p>
                        <h1 class="mb-3"><strong>Hasil Perhitungan Fuzzy C-Means</strong></h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section">
        <div class="container">
            <div class="container-fluid">
            @php
                $countHasil = json_decode($cekhasil->count());
                // dd($countHasil);
            @endphp
            @if ($countHasil != 0)
                <div class="row">
                    <div class="col-sm-12 mb-4">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-header bg-dark">
                                    <h4 class="card-title text-white">{{ __('Keterangan') }} </h4>
                                </div>
                                <div class="card-body">
                                    <table>
                                        <tr>
                                            <td>Jumlah Cluster</td>
                                            <td>: </td>
                                            <td>{{ $hasil->hasil_jumlah_cluster }}</td>
                                        </tr>
                                        <tr>
                                            <td>Maksimum Iterasi</td>
                                            <td>: </td>
                                            <td>{{ $hasil->hasil_iterasi }}</td>
                                        </tr>
                                        <tr>
                                            <td>Error Terkecil</td>
                                            <td>: </td>
                                            <td>{{ number_format(abs($hasil->hasil_error_terkecil), 6, '.', '') }}</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row mb-4">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header bg-dark">
                                <h4 class="card-title text-white">{{ __('Hasil Perhitungan C-Means ') }} </h4>
                                {{-- <p class="card-category text-white"> {{ __('Proses perhitungan') }}</p> --}}
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table datatable" width="100%" id="datatable">
                                        <thead class="text-center">

                                            <th>
                                                {{ __('Kode') }}
                                            </th>
                                            <th>
                                                {{ __('Hasil Cluster') }}
                                            </th>

                                        </thead>
                                        <tbody class="text-center">
                                            @php
                                                $hasilCluster = json_decode($hasil->hasil_cluster);
                                            @endphp
                                            @foreach ($hasilCluster as $key => $value)
                                                <tr>
                                                    <td>C{{ str_pad($loop->iteration, 4, '0', STR_PAD_LEFT) }}</td>
                                                    <td>{{ $value }}</td>

                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header bg-dark">
                                <h4 class="card-title text-white">{{ __('Fungsi Objektif dan Nilai Error') }} </h4>
                                <p class="card-category"> {{ __('') }}</p>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table datatable" width="100%" id="datatable">
                                        <thead class="text-center">
                                            <tr>
                                                <th>Iterasi</th>
                                                <th>Fungsi Objektif</th>
                                                <th>Error</th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-center">
                                            @php
                                                $hasilFungsiObjektif = json_decode($hasil->hasil_fungsi_objektif);
                                                $hasilError = json_decode($hasil->hasil_error);
                                            @endphp
                                            @foreach ($hasilFungsiObjektif as $key => $value)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $value }}</td>
                                                    <td>{{ number_format(abs($hasilError[$key]), 6, '.', '') }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header bg-dark">
                                <h4 class="card-title text-white">{{ __('Hasil Clustering Longsor') }} </h4>
                                {{-- <p class="card-category"> {{ __('Proses perhitungan') }}</p> --}}
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table display datatable table-striped" id="datatable" width="100%">
                                        <thead>
                                            <th>{{ __('Kode') }}</th>
                                            <th>{{ __('Kecamatan') }}</th>
                                            <th class="text-center">{{ __('Kejadian') }}</th>
                                            <th class="text-center">{{ __('Korban') }}</th>
                                            <th class="text-center">{{ __('Kerusakan') }}</th>
                                            <th class="text-center">{{ __('Hasil Cluster') }}</th>

                                        </thead>
                                        <tbody class="text-center">
                                            @php
                                                $hasilCluster = json_decode($hasil->hasil_cluster);
                                            @endphp

                                            @foreach ($hasilCluster as $key => $value)
                                                <tr>
                                                    <td>C{{ str_pad($loop->iteration, 4, '0', STR_PAD_LEFT) }}</td>
                                                    <td nowrap class="text-left">{{ $rekap[$key]->kecamatan }}</td>
                                                    <td nowrap class="text-center">{{ $rekap[$key]->kejadian }}</td>
                                                    <td class="text-center">{{ $rekap[$key]->korban }}</td>
                                                    <td class="text-center">{{ $rekap[$key]->kerusakan }}</td>
                                                    <td class="text-center"><strong>{{ $value }}</strong></td>

                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header bg-dark">
                                <h4 class="card-title text-white ">{{ __('Pengujian Silhouette Coefficient') }} </h4>
                            </div>
                            @if ($uji == null)
                                <div class="row">
                                    <div class="col-12 text-center">
                                        <a href="{{ route('pengujian') }}" class="btn btn-success">
                                            <i class="fa-solid fa-square-root-variable"></i> &nbsp;
                                            Hitung Pengujian</a>
                                    </div>
                                </div>
                            @else
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table datatable" width="100%" id="datatable">
                                            <thead class="text-center">
                                                <tr>
                                                    <th>Kode</th>
                                                    <th>SI</th>
                                                </tr>

                                            </thead>
                                            <tbody class="text-center">
                                                @php
                                                    $si = json_decode($uji->uji_si);
                                                @endphp
                                                @foreach ($si as $key => $value)
                                                    <tr>
                                                        <td>C{{ str_pad($loop->iteration, 4, '0', STR_PAD_LEFT) }}</td>
                                                        <td>{{ $value }}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                            <tfoot class="text-center">
                                                <tr>
                                                    <th>SI Global</th>
                                                    <th>{{ $uji->uji_si_global }}</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            @else
                <div class="card">
                    <div class="card-content">
                        <div class="card-header bg-dark">
                            <h4 class="card-title text-white">{{ __('Upsss...') }}</h4>
                        </div>

                        <div class="card-body">
                            <div class="col-12 text-center">
                                <h3>Sepertinya Data Anda
                                Kosong</h3>
                            </div>
                        </div>
                    </div>
                </div>


            @endif
        </div>
        </div>
    </section>
@section('js')
    <script>
        $(document).ready(function() {
            $('table.datatable').DataTable({
                // responsive: true,

                "lengthMenu": [
                    [10, 25, 50, -1],
                    [10, 25, 50, "All"]
                ], // page length options

                "dom": 'Bfrtip',
                "buttons": ['copy', 'csv', 'excel', 'pdf', 'print', 'pageLength'],

            });
        });
    </script>
@endsection
