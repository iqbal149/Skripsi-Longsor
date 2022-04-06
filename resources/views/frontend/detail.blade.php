@extends('frontend.master')
@section('content')
    <section class="ftco-section contact-section">
        <div class="container">
            <div class="row d-flex mb-5 contact-info">
                <div class="col-md-12 mb-12 text-center">
                    <h1 class="h1">INFORMASI DATA KEJADIAN PADA KECAMATAN {{ strtoupper($key) }}</h1>
                </div>
                <hr>
                <div class="w-100"></div>
                <div class="table-responsive">
                    <table class="table display wo-warp" width="100" id="datatable">
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
                            <th class="text-center">{{ __('Actions') }}</th>
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

@endsection
