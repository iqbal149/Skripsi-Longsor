@extends('layouts.app', ['activePage' => 'longsor', 'titlePage' => __('data longsor')])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-dark">
                            <h4 class="card-title text-white">{{ __('Data longsor Tahun ') }} {{ $tahun->label }}</h4>
                            <p class="card-category text-white"> {{ __('Disini kamu dapat mengelola Data longsor') }}</p>
                        </div>
                        <div class="card-body">
                            @if ($longsors->count())
                                <div class="row">
                                    <div class="col-12 text-right">
                                        <a href="{{ route('tahun.longsor.create', $tahun->uuid) }}"
                                            class="btn btn-sm btn-success">{{ __('Tambah data') }}</a>
                                    </div>
                                </div>
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
                                            @foreach ($longsors as $key => $longsor)
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


                                                    <td nowrap class="text-center">
                                                        <a rel="tooltip" class="btn btn-sm btn-info"
                                                            href="{{ route('tahun.longsor.show', [$tahun->uuid, $longsor->uuid]) }}"
                                                            data-original-title="" title="">
                                                            <i class="material-icons">remove_red_eye</i>
                                                            <div class="ripple-container"></div>

                                                        </a>
                                                        <a rel="tooltip" class="btn btn-sm btn-success"
                                                            href="{{ route('tahun.longsor.edit', [$tahun->uuid, $longsor->uuid]) }}"
                                                            data-original-title="" title="">
                                                            <i class="material-icons">edit</i>
                                                            <div class="ripple-container"></div>
                                                        </a>

                                                        <form
                                                            action="{{ route('tahun.longsor.destroy', [$tahun->uuid, $longsor->uuid]) }}"
                                                            method="post">
                                                            @csrf
                                                            @method('delete')
                                                            <button type="button" class="btn btn-sm btn-danger"
                                                                data-original-title="" title=""
                                                                onclick="confirm('{{ __('Are you sure you want to delete this longsor?') }}') ? this.parentElement.submit() : ''">
                                                                <i class="material-icons">close</i>
                                                                <div class="ripple-container"></div>
                                                            </button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            @else
                                <div class="col-12 text-center">
                                    <h3 class="title"><strong>Upsss...</strong> Sepertinya Data Anda Kosong,
                                        Silahkan Tambah Terlebih Dahulu</h3>
                                </div>
                                <div class="col-12 text-center">
                                    <a href="{{ route('tahun.longsor.create', $tahun->uuid) }}"
                                        class="btn btn-lg btn-success">{{ __('Tambah longsor') }}</a>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        $(function() {
            $('#datatable').DataTable({

            });
        });
    </script>
@endsection
