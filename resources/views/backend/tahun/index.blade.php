@extends('layouts.app', ['activePage' => 'tahun', 'titlePage' => __('Data Longsor')])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-dark">
                            <h4 class="card-title text-white">{{ __('Data per Tahun') }}</h4>
                            <p class="card-category"> {{ __('Menampilkan data longsor berdasarkan tahun') }}</p>
                        </div>
                        <div class="card-body">
                            @if ($tahuns->count())
                                <div class="row">
                                    <div class="col-12 text-right">
                                        <a href="{{ route('tahun.create') }}"
                                            class="btn btn-md btn-success">{{ __('Tambah tahun') }}</a>
                                    </div>
                                    <!-- <div class="row text-center"> -->
                                    <div class="col-12">

                                        <div class="table-responsive">
                                            <table class="table display" id="datatable">
                                                <thead class="text-center">
                                                    <th>{{ __('No.') }}</th>
                                                    <th>{{ __('Tahun') }}</th>
                                                    <th>{{ __('Data') }}</th>
                                                    <th>{{ __('Kelola') }}</th>
                                                    <th>{{ __('Terahkir Diupdate') }}</th>
                                                    @if (auth()->user()->admin == 1)
                                                        <th>{{ __('Aksi') }}</th>
                                                    @endif
                                                </thead>
                                                <tbody class="text-center">
                                                    @foreach ($tahuns as $key => $tahun)
                                                        <tr>
                                                            <td>{{ ++$key }}</td>

                                                            <td>
                                                                <strong>{{ $tahun->label }}</strong>
                                                            </td>
                                                            <td class="text-center">
                                                                {{ $tahun->hasLongsor->count() }}

                                                            </td>
                                                            <td><a href="{{ route('tahun.longsor.index', $tahun->uuid) }}"
                                                                    class="btn btn-sm btn-success">
                                                                    <i class="fa-solid fa-gears"></i>
                                                                </a>
                                                            </td>
                                                            <td>{{ $tahun->updated_at->diffForhumans() }}</td>
                                                            @if (auth()->user()->admin == 1)
                                                                <td class="td-actions text-center">
                                                                    <form
                                                                        action="{{ route('tahun.destroy', $tahun->id) }}"
                                                                        method="post">
                                                                        @csrf
                                                                        @method('delete')
                                                                        {{-- <a rel="tooltip" class="btn btn-md btn-info"
                                                                        href="{{ route('tahun.show', $tahun->id) }}"
                                                                        data-original-title="" title="">
                                                                        <i class="material-icons">remove_red_eye</i>
                                                                        <div class="ripple-container"></div>
                                                                        Lihat
                                                                    </a> --}}
                                                                        <a rel="tooltip" class="btn btn-md btn-success"
                                                                            href="{{ route('tahun.edit', $tahun->id) }}"
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
                                                            @endif
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                                {{-- <tfoot class="text-center">
                                                    <th></th>
                                                    <th>Total Data</th>
                                                    <th>{{ $tahuns->tahun->hasLongsor->count() }}</th>
                                                </tfoot> --}}
                                                <tfoot align="center">
                                                    <tr>
                                                        <th></th>
                                                        <th>TOTAL</th>
                                                        <th></th>
                                                        <th></th>
                                                        <th></th>
                                                        <th></th>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                @else
                                    <div class="col-12 text-center">
                                        <h3 class="title"><strong>Upsss...</strong> Sepertinya Album tahun Anda
                                            Kosong, Silahkan Tambah Terlebih Dahulu</h3>
                                    </div>
                                    <div class="col-12 text-center">
                                        <a href="{{ route('tahun.create') }}"
                                            class="btn btn-lg btn-success">{{ __('Add tahun') }}</a>
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
            // jQuery.fn.dataTable.Api.register('sum()', function() {
            //     return this.flatten().reduce(function(a, b) {
            //         var x = parseFloat(a) || 0;
            //         var y = parseFloat($(b).attr('data')) || 0;
            //         return x + y
            //     }, 0);
            // });

            $(function() {
                $('#datatable').DataTable({
                    "footerCallback": function(row, data, start, end, display) {
                        var api = this.api();

                        // Remove the formatting to get integer data for summation
                        var intVal = function(i) {
                            return typeof i === 'string' ?
                                i.replace(/[\$,]/g, '') * 1 :
                                typeof i === 'number' ?
                                i : 0;
                        };

                        // Total over all pages
                        total = api
                            .column(2)
                            .data()
                            .reduce(function(a, b) {
                                return intVal(a) + intVal(b);
                            }, 0);

                        // Total over this page
                        pageTotal = api
                            .column(2, {
                                page: 'current'
                            })
                            .data()
                            .reduce(function(a, b) {
                                return intVal(a) + intVal(b);
                            }, 0);

                        // Update footer
                        $(api.column(2).footer()).html(
                            pageTotal + ' Data'
                        );
                    }
                });
            });
        </script>
    @endsection
