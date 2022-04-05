@extends('layouts.app', ['activePage' => 'perhitungan', 'titlePage' => __('Perhitungan C-Means')])
@section('content')
    <div class="content">
        <div class="container-fluid">
            @php
                $countHasil = json_decode($cekhasil->count());
                // dd($countHasil);
            @endphp
            @if ($countHasil != 0)
                <div class="row">
                    <div class="col-sm-12">
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

                <div class="row">
                    <div class="col-12 text-center">

                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
                            <i class="fa-solid fa-square-root-variable"></i>
                            &nbsp; Hitung Ulang
                        </button>
                    </div>
                </div>

                <!-- Button trigger modal -->



                <div class="row">
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

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header bg-dark">
                                <h4 class="card-title text-white">{{ __('Hasil Clustering Longsor') }} </h4>
                                {{-- <p class="card-category"> {{ __('Proses perhitungan') }}</p> --}}
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table display datatable table-striped" id="datatable" width="100%">
                                        <thead class="text-center">
                                            <th>{{ __('Kode') }}</th>
                                            <th>{{ __('Kecamatan') }}</th>
                                            <th>{{ __('Kejadian') }}</th>
                                            <th>{{ __('Korban') }}</th>
                                            <th>{{ __('Kerusakan') }}</th>
                                            <th>{{ __('Hasil Cluster') }}</th>

                                        </thead>
                                        <tbody class="text-center">
                                            @php
                                                $hasilCluster = json_decode($hasil->hasil_cluster);
                                            @endphp
                                            @foreach ($hasilCluster as $key => $value)
                                                <tr>
                                                    <td>C{{ str_pad($loop->iteration, 4, '0', STR_PAD_LEFT) }}</td>
                                                    <td nowrap class="text-left">{{ $rekap[$key]->kecamatan }}</td>
                                                    <td nowrap>{{ $rekap[$key]->kejadian }}</td>
                                                    <td>{{ $rekap[$key]->korban }}</td>
                                                    <td>{{ $rekap[$key]->kerusakan }}</td>
                                                    <td><strong>{{ $value }}</strong></td>

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
                            <div class="card-header bg-dark">
                                <h4 class="card-title text-white ">{{ __('Pengujian Silhouette Coefficient') }} </h4>
                                <p class="card-category"> {{ __('-') }}</p>
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
                                Kosong, Silahkan Hitung Terlebih Dahulu</h3>
                                <button type="button" class="btn btn-success" data-toggle="modal"
                                    data-target="#exampleModal">
                                    Hitung Ulang
                                </button>
                            </div>
                        </div>
                    </div>
                </div>


            @endif
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form method="post" action="{{ route('perhitungan.cmeans') }}" autocomplete="off" class="form-horizontal"
                    enctype="multipart/form-data">
                    @csrf
                    @method('post')
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Inisiasi Perhitungan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <fieldset class="form-group">
                            <label for="basicInput">Jumlah Cluster</label><br>
                            <select name="jumlah_cluster" class="form-control">
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </fieldset>
                        <fieldset class="form-group">
                            <label for="basicInput">Maksimum Iterasi</label><br>
                            <input type="number" name="iterasi" required class="form-control">
                        </fieldset>
                        <fieldset class="form-group">
                            <label for="basicInput">Error Terkecil</label><br>
                            <input type="number" step="any" name="error_terkecil" required class="form-control"
                                placeholder="0.000001">
                        </fieldset>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-success">Hitung</button>
                    </div>
                </form>
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
