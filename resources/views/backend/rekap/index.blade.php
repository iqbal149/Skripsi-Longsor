@extends('layouts.app', ['activePage' => 'rekap', 'titlePage' => __('Rekap Data Kejadian')])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-dark">
                            <h4 class="card-title text-white">{{ __('Data Rekap') }}</h4>
                            <p class="card-category"> {{ __('Menampilkan rekap data kejadian berdasarkan kecamatan') }}
                            </p>
                        </div>
                        <div class="card-body">
                            @if ($data->count())
                                <div class="row">
                                    <div class="col-12 text-right">
                                        <a href="{{ route('rekap.hitung') }}"
                                            class="btn btn-md btn-success show_confirm">{{ __('Rekap Kejadian') }}</a>
                                    </div>
                                    <!-- <div class="row text-center"> -->
                                    <div class="col-12">

                                        <div class="table-responsive">
                                            <table class="table display datatable" id="datatable">
                                                <thead class="text-center">
                                                    <th>{{ __('No.') }}</th>
                                                    <th>{{ __('Kecamatan') }}</th>
                                                    <th>{{ __('Total Kejadian') }}</th>
                                                    <th>{{ __('Total Korban') }}</th>
                                                    <th>{{ __('Total Kerusakan') }}</th>
                                                    <th>{{ __('Terahkir Diupdate') }}</th>
                                                </thead>
                                                <tbody class="text-center">
                                                    @foreach ($data as $key => $value)
                                                        <tr>
                                                            <td>
                                                                {{ ++$key }}
                                                            </td>
                                                            <td class="text-left">
                                                                <strong>{{ $value->kecamatan }}</strong>
                                                            </td>
                                                            <td>
                                                                <strong>{{ $value->kejadian }}</strong>
                                                            </td>
                                                            <td>
                                                                <strong>{{ $value->korban }}</strong>
                                                            </td>
                                                            <td>
                                                                <strong>{{ $value->kerusakan }}</strong>
                                                            </td>
                                                            <td>{{ $value->updated_at->diffForhumans() }}</td>
                                                            {{-- <td class="td-actions text-center">
                                                                <form
                                                                    action="{{ route('rekap.destroy', $value->id) }}"
                                                                    method="post">
                                                                    @csrf
                                                                    @method('delete')
                                                                    <a rel="tooltip" class="btn btn-md btn-info"
                                                                        href="{{ route('rekap.show', $value->id) }}"
                                                                        data-original-title="" title="">
                                                                        <i class="material-icons">remove_red_eye</i>
                                                                        <div class="ripple-container"></div>
                                                                        Lihat
                                                                    </a>
                                                                    <a rel="tooltip" class="btn btn-md btn-success"
                                                                        href="{{ route('rekap.edit', $value->id) }}"
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
                                                            </td> --}}
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
                                        <a href="{{ route('rekap.hitung') }}"
                                            class="btn btn-lg btn-success">{{ __('Mulai Rekap') }}</a>
                                    </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
    @section('js')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
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
        <script type="text/javascript">
            $('.show_confirm').on('click', function(event) {
                event.preventDefault();
                const url = $(this).attr('href');
                swal({
                    title: 'Apakah anda Yakin?',
                    text: 'Data ini akan di rekap ulang dan menghapus data yang lama!',
                    icon: 'warning',
                    buttons: ["Batal", "Iya!"],
                }).then(function(value) {
                    if (value) {
                        window.location.href = url;
                    }
                });
            });
        </script>
    @endsection
