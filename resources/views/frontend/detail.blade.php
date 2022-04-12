@extends('frontend.master')
@section('navHome') active @stop
@section('content')
    <section class="home-slider">
        <div class="slider-item bread-wrap" style="background-image:url(../img/bg-login.jpg)!important"
            data-stellar-background-ratio="0.2">
            {{-- <div class="overlay"></div> --}}
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center">
                    <div class="col-md-10 col-sm-12 ftco-animate mb-4 text-center ">
                        <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('index') }}">Home</a></span> <span
                                class="mr-2"><a href="#">Daftar</a></span> <span>Kejadian</span></p>
                        <h1 class="mb-3"><strong>{{ strtoupper($key) }}</strong></h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section">
        <div class="container">
            <div class="row d-flex mb-5 contact-info">
                <div class="col-md-12 mb-12 text-center">
                    <h1 class="h1">INFORMASI DATA KEJADIAN PADA KECAMATAN {{ strtoupper($key) }}</h1>
                </div>
                <hr>
                <div class="w-100"></div>
                <div class="table-responsive">
                    <table class="table display datatable" id="datatable">
                        <thead class="text-center">
                            <th>{{ __('No.') }}</th>
                            <th>{{ __('Alamat') }}</th>
                            <th>{{ __('Kecamatan') }}</th>
                            <th>{{ __('Tanggal Kejadian') }}</th>
                            <th>{{ __('Korban Meninggal') }}</th>
                            <th>{{ __('Korban Hilang') }}</th>
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
                            <th>{{ __('Creation date') }}</th>
                        </thead>
                        <tbody class="text-center">
                            @foreach ($data as $key => $longsor)
                                <tr>
                                    <td>
                                        {{ ++$key }}
                                    </td>
                                    <td nowrap class="text-left">
                                        {{ $longsor->alamat }}
                                    </td>
                                    <td>
                                        {{ $longsor->kecamatan }}
                                    </td>
                                    <td>
                                        {{ $longsor->tgl }}
                                    </td>
                                    <td>
                                        {{ $longsor->kb_meninggal }}
                                    </td>
                                    <td>
                                        {{ $longsor->kb_hilang }}
                                    </td>
                                    <td>
                                        {{ $longsor->kb_mengungsi }}
                                    </td>
                                    <td>
                                        {{ $longsor->kr_rumah_rb }}
                                    </td>
                                    <td>
                                        {{ $longsor->kr_rumah_rr }}
                                    </td>
                                    <td>
                                        {{ $longsor->kr_rumah_terendam }}
                                    </td>
                                    <td>
                                        {{ $longsor->kantor }}
                                    </td>
                                    <td>
                                        {{ $longsor->sekolah }}
                                    </td>
                                    <td>
                                        {{ $longsor->t_ibadah }}
                                    </td>
                                    <td>
                                        {{ $longsor->sarana_kesehatan }}
                                    </td>
                                    <td>
                                        {{ $longsor->bangunan_lain }}
                                    </td>
                                    <td>
                                        {{ $longsor->jembatan }}
                                    </td>
                                    <td>
                                        {{ $longsor->jalan }}
                                    </td>
                                    <td>
                                        {{ $longsor->sawah }}
                                    </td>
                                    <td>
                                        {{ $longsor->hutan }}
                                    </td>
                                    <td style="min-width: 100px;">
                                        {{ $longsor->updated_at->diffForhumans() }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
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
