@extends('layouts.app', ['activePage' => 'usaha', 'titlePage' => __('usaha')])
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-success">
            <h4 class="card-title ">{{ __('Data UMKM') }}</h4>
            <p class="card-category"> {{ __('Disini kamu dapat mengelola Data UMKM') }}</p>
          </div>
          <div class="card-body">
            @if($usahas->count())
            <div class="row">
              <div class="col-12 text-right">
                <a href="{{ route('usaha.create') }}" class="btn btn-sm btn-primary">{{ __('Add UMKM') }}</a>
              </div>
            </div>
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary text-center">
                  <th>
                    {{ __('No.') }}
                  </th>
                  <th>
                    {{ __('NIB') }}
                  </th>
                  <th>
                    {{ __('Nama Usaha') }}
                  </th>
                  <th>
                    {{ __('Pemilik') }}
                  </th>
                  <th>
                    {{ __('Telepon') }}
                  </th>
                  <th>
                    {{ __('Alamat') }}
                  </th>
                  <th>
                    {{ __('Kategori') }}
                  </th>
                  <th>
                    {{ __('Creation date') }}
                  </th>
                  <th>
                    {{ __('Galeri') }}
                  </th>
                  <th class="text-center">
                    {{ __('Actions') }}
                  </th>
                </thead>
                <tbody>
                  @foreach($usahas as $key => $usaha)
                  <tr>
                    <td>
                      {{ ++$key }}
                    </td>
                    <td>
                      {{ $usaha->nomor_izin_usaha }}
                    </td>
                    <td>
                      {{ $usaha->nama_usaha }}
                    </td>
                    <td>
                      {{ $usaha->nama_pemilik }}
                    </td>
                    <td>
                      {{ $usaha->telpon }}
                    </td>
                    <td>
                      {{ $usaha->alamat }}
                    </td>
                    <td>
                      {{ $usaha->kategori }}
                    </td>
                    <td style="min-width: 100px;">
                      {{ $usaha->created_at->format('d-m-Y') }}
                    </td>
                    <td class="text-center">
                        <strong >{{ $usaha->hasFoto->count() }}</strong>
                        <br>
                        <a href="{{ route('usahafoto.index', $usaha->id) }}" class="btn btn-sm btn-success">
                          <!-- <i class="material-icons">settings_applications</i> -->
                          <div class="ripple-container"></div>
                          {{ __('Kelola') }}
                        </a>
                      </td>

                    <td class="td-actions text-center" style="min-width: 200px;">
                      <form action="{{ route('usaha.destroy', $usaha->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <a rel="tooltip" class="btn btn-md btn-info" href="{{ route('usaha.show', $usaha->id) }}" data-original-title="" title="">
                          <i class="material-icons">remove_red_eye</i>
                          <div class="ripple-container"></div>
                          Lihat
                        </a>
                        <a rel="tooltip" class="btn btn-md btn-success" href="{{ route('usaha.edit', $usaha->id) }}" data-original-title="" title="">
                          <i class="material-icons">edit</i>
                          <div class="ripple-container"></div>
                          Edit
                        </a>
                        <button type="button" class="btn btn-md btn-danger" data-original-title="" title="" onclick="confirm('{{ __("Are you sure you want to delete this usaha?") }}') ? this.parentElement.submit() : ''">
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
            <nav class="d-flex justify-content-end" aria-label="...">
              {{ $usahas->links() }}
            </nav>
            @else
            <div class="col-12 text-center">
              <h3 class="title"><strong>Upsss...</strong> Sepertinya Data Anda Kosong, Silahkan Tambah Terlebih Dahulu</h3>
            </div>
            <div class="col-12 text-center">
              <a href="{{ route('usaha.create') }}" class="btn btn-lg btn-success">{{ __('Tambah usaha') }}</a>
            </div>
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection