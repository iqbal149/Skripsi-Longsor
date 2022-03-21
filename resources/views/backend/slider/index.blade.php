@extends('layouts.app', ['activePage' => 'slider', 'titlePage' => __('Slider')])
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-info">
            <h4 class="card-title ">{{ __('Data slider') }}</h4>
            <p class="card-category"> {{ __('Disini kamu dapat mengelola Data slider') }}</p>
          </div>
          <div class="card-body">
            @if($sliders->count())
            <div class="row">
              <div class="col-12 text-right">
                <a href="{{ route('slider.create') }}" class="btn btn-sm btn-success">{{ __('Tambah Slider') }}</a>
              </div>
            </div>
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary text-center">
                  <th>
                    {{ __('No.') }}
                  </th>
                  <th>
                    {{ __('Foto') }}
                  </th>
                  <th>
                    {{ __('Nama') }}
                  </th>
                  <th>
                    {{ __('Deskripsi') }}
                  </th>
                  <th>
                    {{ __('Creation date') }}
                  </th>
                  <th>
                    {{ __('Actions') }}
                  </th>
                </thead>
                <tbody class="text-center">
                  @foreach($sliders as $key => $slider)
                  <tr>
                    <td>
                      {{ ++$key }}
                    </td>
                    <td>
                      <img src="{{ $slider->foto }}" style="width: 100px;">
                    </td>
                    <td>
                      {{ $slider->nama }}
                    </td>
                    <td>
                      {{ $slider->deskripsi }}
                    </td>
                    <td>
                      {{ $slider->created_at->format('d-m-Y') }}
                    </td>
                    <td class="td-actions text-right">
                      <form action="{{ route('slider.destroy', $slider->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <a rel="tooltip" class="btn btn-md btn-info" href="{{ route('slider.show', $slider->id) }}" data-original-title="" title="">
                          <i class="material-icons">remove_red_eye</i>
                          <div class="ripple-container"></div>
                          Lihat
                        </a>
                        <a rel="tooltip" class="btn btn-md btn-success" href="{{ route('slider.edit', $slider->id) }}" data-original-title="" title="">
                          <i class="material-icons">edit</i>
                          <div class="ripple-container"></div>
                          Edit
                        </a>
                        <button type="button" class="btn btn-md btn-danger" data-original-title="" title="" onclick="confirm('{{ __("Are you sure you want to delete this slider?") }}') ? this.parentElement.submit() : ''">
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
              {{ $sliders->links() }}
            </nav>
            @else
            <div class="col-12 text-center">
              <h3 class="title"><strong>Upsss...</strong> Sepertinya Slider Anda Kosong, Silahkan Tambah Terlebih Dahulu</h3>
            </div>
            <div class="col-12 text-center">
              <a href="{{ route('slider.create') }}" class="btn btn-lg btn-success">{{ __('Tambah Slider') }}</a>
            </div>
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection