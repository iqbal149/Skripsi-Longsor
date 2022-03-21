@extends('layouts.app', ['activePage' => 'usaha', 'titlePage' => __('Kelola Foto Usaha')])
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-success">
            <h4 class="card-title ">{{ __('Galeri') }} - {{ $usaha->nama_usaha }}</h4>
            <p class="card-category"> {{ __('kelola foto usaha disini') }}</p>
          </div>
          <div class="card-body">
            @if($galeris->count())
            <div class="row">
              <div class="col-12 text-right">
                <a href="{{ route('usahafoto.create', $usaha->id) }}" class="btn btn-lg btn-success">{{ __('Add galeri') }}</a>
              </div>
              <!-- <div class="row text-center"> -->
              @foreach($galeris as $key => $galeri)
              <!-- <div class="text-right"> -->
              <div class="card-header card-header-image" style="width: 19.5rem; margin: 10px;">
                <img class="img" src="{{ $galeri->foto }}" alt="Card image cap">
                <div class="card-img-overlay text-right">
                  <form action="{{ route('usahafoto.destroy', $galeri->id) }}" method="post">
                    @csrf
                    @method('delete')
                    <button class="btn btn-default btn-fab btn-fab-mini btn-round" data-original-title="" title="" onclick="confirm('{{ __("Are you sure you want to delete this image?") }}') ? this.parentElement.submit() : ''">
                    <i class="material-icons">delete</i>
                    </button>
                  </form>
                </div>
              </div>
              <!-- </div> -->
              @endforeach
              <!-- </div> -->
            </div>
            @else
            <div class="col-12 text-center">
              <h3 class="title"><strong>Upsss...</strong> Sepertinya Album usaha Anda Kosong, Silahkan Tambah Terlebih Dahulu</h3>
            </div>
            <div class="col-12 text-center">
              <a href="{{ route('usahafoto.create', $usaha->id) }}" class="btn btn-lg btn-success">{{ __('Add galeri') }}</a>
            </div>
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection