@extends('layouts.app', ['activePage' => 'matriks', 'titlePage' => __('Data Matriks')])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-dark">
                            <h4 class="card-title text-white">{{ __('Data Matriks ') }}</h4>
                            {{-- <p class="card-category text-white"> {{ __('Disini kamu dapat mengelola Data longsor') }}</p> --}}
                        </div>
                        <div class="card-body">
                            @if ($data->count())
                                <div class="row">
                                    <div class="col-12 text-right">
                                        <a href="{{ route('matriks.create') }}"
                                            class="btn btn-sm btn-success">{{ __('Import Matriks') }}</a>
                                        <a href="{{ route('matriks.deleteall') }}"
                                            class="btn btn-sm btn-danger show_confirm">{{ __('Hapus Semua') }}</a>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table display wo-warp datatable" id="datatable">
                                        <thead class="text-center">
                                            <th>{{ __('No.') }}</th>
                                            <th>{{ __('Matriks_3_1') }}</th>
                                            <th>{{ __('Matriks_3_2') }}</th>
                                            <th>{{ __('Matriks_3_3') }}</th>
                                            <th class="text-center">{{ __('Actions') }}</th>
                                        </thead>
                                        <tbody class="text-center">
                                            @foreach ($data as $key => $value)
                                                <tr>
                                                    <td>
                                                        {{ ++$key }}
                                                    </td>
                                                    <td>{{ $value->matriks_3_1 }}</td>
                                                    <td>{{ $value->matriks_3_2 }}</td>
                                                    <td>{{ $value->matriks_3_3 }}</td>
                                                    <td>    </td>
                                                
                                                    {{-- <td nowrap class="text-center">
                                                        <a rel="tooltip" class="btn btn-sm btn-info"
                                                            href="{{ route('matriks.show', $value->matriks_3_id) }}"
                                                            data-original-title="" title="">
                                                            <i class="material-icons">remove_red_eye</i>
                                                            <div class="ripple-container"></div>

                                                        </a>
                                                        <a rel="tooltip" class="btn btn-sm btn-success"
                                                            href="{{ route('matriks.edit', $value->matriks_3_id) }}"
                                                            data-original-title="" title="">
                                                            <i class="material-icons">edit</i>
                                                            <div class="ripple-container"></div>
                                                        </a>

                                                        <form
                                                            action="{{ route('matriks.destroy', $value->matriks_3_id) }}"
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
                                                    </td> --}}
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
                                    <a href="{{ route('matriks.create') }}"
                                        class="btn btn-lg btn-success">{{ __('Tambah Data') }}</a>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
        <script>
            $(document).ready(function() {
                $('table.datatable').DataTable({
                    // responsive: true,

                    "lengthMenu": [
                        [25, 50, -1],
                        [25, 50, "All"]
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
                    text: 'Data ini akan dihapus keseluruhan!',
                    icon: 'warning',
                    buttons: ["Batal", "Hapus!"],
                }).then(function(value) {
                    if (value) {
                        window.location.href = url;
                    }
                });
            });
        </script>
@endsection
