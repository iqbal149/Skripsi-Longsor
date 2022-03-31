@extends('layouts.app', ['activePage' => 'perhitungan', 'titlePage' => __('Perhitungan C-Means')])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-header card-header-warning">
                                <h4 class="card-title text-dark">{{ __('Keterangan') }} </h4>
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

            <div class="row">
                <div class="col-12 text-center">
                    <a href="{{ route('perhitungan.cmeans') }}" class="btn btn-lg btn-info">
                        <i class="fa fa-solid fa-angle-right"></i>
                        {{ __('Hitung Ulang') }}</a>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header card-header-success">
                            <h4 class="card-title ">{{ __('Hasil Perhitungan C-Means ') }} </h4>
                            <p class="card-category"> {{ __('Proses perhitungan') }}</p>
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
                        <div class="card-header card-header-success">
                            <h4 class="card-title ">{{ __('Fungsi Objektif dan Nilai Error') }} </h4>
                            <p class="card-category"> {{ __('--') }}</p>
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

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-success">
                            <h4 class="card-title ">{{ __('Hasil Clustering Longsor') }} </h4>
                            <p class="card-category"> {{ __('Proses perhitungan') }}</p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table  table-lg table-stripped table-bordered datatable" id="datatable"
                                    width="100%">
                                    <thead class="text-center">
                                        <th>{{ __('Kode') }}</th>
                                        <th>{{ __('Alamat') }}</th>
                                        <th>{{ __('Kecamatan') }}</th>
                                        <th>{{ __('Tgl. Kejadian') }}</th>
                                        <th>{{ __('Korban Meninggal') }}</th>
                                        <th>{{ __('Korban Hilang') }}</th>
                                        <th>{{ __('Korban Luka') }}</th>
                                        <th>{{ __('Korban Mengungsi') }}</th>
                                        <th>{{ __('Rumah Rusak Berat') }}</th>
                                        <th>{{ __('Rumah Rusak Ringan') }}</th>
                                        <th>{{ __('Rumah Terendam') }}</th>
                                        <th>{{ __('Kantor') }}</th>
                                        <th>{{ __('Sekolah') }}</th>
                                        <th>{{ __('Tempat Ibadah') }}</th>
                                        <th>{{ __('Sarana Kesehatan') }}</th>
                                        <th>{{ __('Bangunan Lain') }}</th>
                                        <th>{{ __('Jembatan') }}</th>
                                        <th>{{ __('Jalan') }}</th>
                                        <th>{{ __('Sawah') }}</th>
                                        <th>{{ __('Hutan') }}</th>
                                        <th>{{ __('Hasil Cluster') }}</th>

                                    </thead>
                                    <tbody class="text-center">
                                        @php
                                            $hasilCluster = json_decode($hasil->hasil_cluster);
                                        @endphp
                                        @foreach ($hasilCluster as $key => $value)
                                            <tr>
                                                <td>C{{ str_pad($loop->iteration, 4, '0', STR_PAD_LEFT) }}</td>
                                                <td nowrap>{{ $longsor[$key]->alamat }}</td>
                                                <td>{{ $longsor[$key]->kecamatan }}</td>
                                                <td>{{ $longsor[$key]->tgl }}</td>
                                                <td>{{ $longsor[$key]->kb_meninggal }}</td>
                                                <td>{{ $longsor[$key]->kb_hilang }}</td>
                                                <td>{{ $longsor[$key]->kb_luka }}</td>
                                                <td>{{ $longsor[$key]->kb_mengungsi }}</td>
                                                <td>{{ $longsor[$key]->kr_rumah_rb }}</td>
                                                <td>{{ $longsor[$key]->kr_rumah_rr }}</td>
                                                <td>{{ $longsor[$key]->kr_rumah_terendam }}</td>
                                                <td>{{ $longsor[$key]->kantor }}</td>
                                                <td>{{ $longsor[$key]->sekolah }}</td>
                                                <td>{{ $longsor[$key]->t_ibadah }}</td>
                                                <td>{{ $longsor[$key]->sarana_kesehatan }}</td>
                                                <td>{{ $longsor[$key]->bangunan_lain }}</td>
                                                <td>{{ $longsor[$key]->jembatan }}</td>
                                                <td>{{ $longsor[$key]->jalan }}</td>
                                                <td>{{ $longsor[$key]->sawah }}</td>
                                                <td>{{ $longsor[$key]->hutan }}</td>
                                                <td>{{ $value }}</td>

                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-success">
                            <h4 class="card-title ">{{ __('Pengujian Silhouette Coefficient') }} </h4>
                            <p class="card-category"> {{ __('-') }}</p>
                        </div>
                        @if ($uji == null)
                            <div class="row">
                                <div class="col-12 text-center">
                                    <a href="{{ route('pengujian') }}" class="btn btn-lg btn-primary">
                                        <i class="fa fa-solid fa-angle-right"></i>Hitung
                                        Pengujian</a>
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
        </div>
    </div>
@endsection
@section('js')
    {{-- <script>
        $(function() {
            $('#datatable').DataTable({

            });
        });
    </script> --}}
    <script>
        $(document).ready(function() {
            $('table.datatable').DataTable({
                responsive: true,

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
