@extends('layouts.app', ['activePage' => 'tahun', 'titlePage' => __('Kelola Tahun')])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-success">
                            <h4 class="card-title ">{{ __('Data Tahun') }}</h4>
                            <p class="card-category"> {{ __('Data Longsor Berdasarkan Tahun') }}</p>
                        </div>
                        <div class="card-body">
                            @if ($tahuns->count())
                                <div class="row">
                                    <div class="col-12 text-right">
                                        <a href="{{ route('tahun.create') }}"
                                            class="btn btn-lg btn-success">{{ __('Add tahun') }}</a>
                                    </div>
                                    <!-- <div class="row text-center"> -->
                                    <div class="col-12">

                                        <div class="table-responsive">
                                            <table class="table display" id="datatable">
                                                <thead class="text-center">
                                                    <th>
                                                        {{ __('No.') }}
                                                    </th>
                                                    <th>
                                                        {{ __('Tahun') }}
                                                    </th>
                                                    <th>
                                                        {{ __('Data') }}
                                                    </th>
                                                    <th>
                                                        {{ __('Terahkir Diupdate') }}
                                                    </th>
                                                    <th>
                                                        {{ __('Aksi') }}
                                                    </th>
                                                </thead>
                                                <tbody class="text-center">
                                                    @foreach ($tahuns as $key => $tahun)
                                                        <tr>
                                                            <td>
                                                                {{ ++$key }}
                                                            </td>
                                                            <td>
                                                                <strong>{{ $tahun->label }}</strong>
                                                            </td>
                                                            <td class="text-center">
                                                                <strong>{{ $tahun->hasLongsor->count() }}</strong> Data
                                                                <br>
                                                                <a href="{{ route('longsor.index', $tahun->uuid) }}"
                                                                    class="btn btn-sm btn-success">
                                                                    <!-- <i class="material-icons">settings_applications</i> -->
                                                                    <div class="ripple-container"></div>
                                                                    {{ __('Kelola') }}
                                                                </a>
                                                            </td>
                                                            <td>{{ $tahun->updated_at }}</td>
                                                            <td class="td-actions text-center">
                                                                <form action="{{ route('tahun.destroy', $tahun->id) }}"
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
                                                        </tr>
                                                    @endforeach
                                                </tbody>
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
            $(function() {
                $('#datatable').DataTable({

                });
            });
        </script>
    @endsection
