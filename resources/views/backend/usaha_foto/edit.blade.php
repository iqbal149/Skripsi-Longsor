@extends('layouts.app', ['activePage' => 'galeri', 'titlePage' => __('Galeri')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form method="post" action="{{ route('album.update', $album->id) }}" autocomplete="off" class="form-horizontal">
            @csrf
            @method('PATCH')

            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('Edit Master Tour') }}</h4>
                <p class="card-category"></p>
              </div>
              <div class="card-body ">
                <div class="row">
                  <div class="col-md-12 text-right">
                      <a href="{{ route('album.index') }}" class="btn btn-sm btn-primary">{{ __('Kembali') }}</a>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Judul') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('judul') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('judul') ? ' is-invalid' : '' }}" name="judul" id="input-judul" type="text" placeholder="{{ __('judul') }}" value="{{ old('judul', $album->judul) }}" required="true" aria-required="true"/>
                      @if ($errors->has('judul'))
                        <span id="judul-error" class="error text-danger" for="input-judul">{{ $errors->first('judul') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
              <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection