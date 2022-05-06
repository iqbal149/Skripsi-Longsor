@extends('layouts.app', ['activePage' => 'kecamatan', 'titlePage' => __('Data Kecamatan')])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-dark">
                            <h4 class="card-title text-white">{{ __('Data Kecamatan di ') }} {{ $kab->label }}</h4>
                            <p class="card-category"> {{ __('Menampilkan Data Kecamatan') }}</p>
                        </div>
                        <div class="card-body">
                            @if ($data->count())
                                <div class="row">
                                    <div class="col-12 text-right">
                                        <a href="{{ route('kabupaten.kecamatan.create', $kab->uuid) }}"
                                            class="btn btn-md btn-success">{{ __('Tambah data') }}</a>
                                    </div>
                                    <!-- <div class="row text-center"> -->
                                    <div class="col-12">

                                        <div class="table-responsive">
                                            <table class="table display datatable" id="datatable">
                                                <thead class="text-center">
                                                    <th>
                                                        {{ __('No.') }}
                                                    </th>
                                                    <th>
                                                        {{ __('Nama Kecamatan') }}
                                                    </th>
                                                    <th>
                                                        {{ __('Terahkir Diupdate') }}
                                                    </th>
                                                    <th>
                                                        {{ __('Aksi') }}
                                                    </th>
                                                </thead>
                                                <tbody class="text-center">
                                                    @foreach ($data as $key => $value)
                                                        <tr>
                                                            <td>
                                                                {{ ++$key }}
                                                            </td>
                                                            {{-- <td>
                                                                <strong>{{ $value->kode }}</strong>
                                                            </td> --}}
                                                            <td class="text-center">
                                                                <strong>{{ $value->label }}</strong>
                                                            </td>
                                                            <td>{{ $value->updated_at->diffForhumans() }}</td>
                                                            <td class="td-actions text-center">
                                                                <form
                                                                    action="{{ route('kabupaten.kecamatan.destroy', [$kab->uuid,$value->uuid]) }}"
                                                                    method="post">
                                                                    @csrf
                                                                    @method('delete')
                                                                    {{-- <a rel="tooltip" class="btn btn-md btn-info"
                                                                        href="{{ route('kabupaten.show', $value->uuid) }}"
                                                                        data-original-title="" title="">
                                                                        <i class="material-icons">remove_red_eye</i>
                                                                        <div class="ripple-container"></div>
                                                                        Lihat
                                                                    </a> --}}
                                                                    <a rel="tooltip" class="btn btn-md btn-success"
                                                                        href="{{ route('kabupaten.kecamatan.edit', [$kab->uuid,$value->uuid]) }}"
                                                                        data-original-title="" title="">
                                                                        <i class="material-icons">edit</i>
                                                                        <div class="ripple-container"></div>
                                                                        Edit
                                                                    </a>
                                                                    <button type="button" class="btn btn-md btn-danger"
                                                                        data-original-title="" title=""
                                                                        onclick="confirm('{{ __('Are you sure you want to delete this usaha?') }}') ? this.parentElement.submit() : ''">
                                                                        <i class="material-icons">close</i>
                                                                        <div class="ripple-container"></div>
                                                                        Hapus
                                                                    </button>
                                                                </form>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                @else
                                    <div class="col-12 text-center">
                                        <h3 class="title"><strong>Upsss...</strong> Sepertinya Data Anda
                                            Kosong, Silahkan Tambah Terlebih Dahulu</h3>
                                    </div>
                                    <div class="col-12 text-center">
                                        <a href="{{ route('kabupaten.kecamatan.create', $kab->uuid) }}"
                                            class="btn btn-lg btn-success">{{ __('Tambah Data') }}</a>
                                    </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
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
