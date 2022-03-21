@extends('layouts.app', ['activePage' => 'slider', 'titlePage' => __('Manajemen Slider')])
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <form method="post" action="{{ route('slider.store') }}" autocomplete="off" class="form-horizontal" enctype="multipart/form-data">
          @csrf
          @method('post')
          <div class="card ">
            <div class="card-header card-header-info">
              <h4 class="card-title">{{ __('Tambah Slider') }}</h4>
              <p class="card-category">Slider akan ditampilkan pada halaman utama Website UMKM</p>
            </div>
            <div class="card-body ">

              <div class="row">
                <div class="col-md-12 text-right">
                  <a href="{{ route('slider.index') }}" class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-row">
                    <div class="col-sm-12">
                      <div class="form-group{{ $errors->has('nama') ? ' has-danger' : '' }}">
                        <label>{{ __('Nama') }}</label>
                        <input class="form-control{{ $errors->has('nama') ? ' is-invalid' : '' }}" name="nama" id="input-nama" type="text" placeholder="{{ __('masukan nama slider') }}" value="{{ old('nama') }}" required="true" aria-required="true"/>
                        @if ($errors->has('nama'))
                        <span id="nama-error" class="error text-danger" for="input-nama">{{ $errors->first('nama') }}</span>
                        @endif
                      </div>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="col-sm-12">
                      <div class="form-group{{ $errors->has('deskripsi') ? ' has-danger' : '' }}">
                        <label>{{ __('Deskripsi') }}</label>
                        <textarea rows="10" class="form-control{{ $errors->has('text') ? ' is-invalid' : '' }}" name="deskripsi" id="input-deskripsi" type="deskripsi" placeholder="{{ __('masukan deskripsi') }}"required>{{ old('deskripsi') }}</textarea>
                        @if ($errors->has('deskripsi'))
                        <span id="deskripsi-error" clsas="error text-danger" for="input-deskripsi">{{ $errors->first('deskripsi') }}</span>
                        @endif
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-row">
                    <div class="col-sm-6">
                      <div class="form-group{{ $errors->has('foto') ? ' has-danger' : '' }}">
                        <label>{{ __('Foto') }}</label><br>
                        <div class="fileinput fileinput-new text-center" data-provides="fileinput" data-name="foto">
                          <div class="fileinput-new img-thumbnail img-raised" style="width: 400px; height: 300px;">
                            <img data-src="holder.js/100%x100%"  alt="">
                          </div>
                          <div class="fileinput-preview fileinput-exists img-thumbnail img-raised" style="max-width: 400px; max-height: 300px;"></div>
                          <div>
                            <span class="btn btn-raised btn-round btn-rose btn-file">
                              <span class="fileinput-new">Select image</span>
                              <span class="fileinput-exists">Change</span>
                              <input class="{{ $errors->has('foto') ? ' is-invalid' : '' }}" type="file" name="foto" id="foto" required="true" aria-required="true">
                              @if ($errors->has('foto'))
                              <span id="foto-error" class="error text-danger" for="input-foto">{{ $errors->first('foto') }}</span>
                              @endif
                            </span>
                            <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput">
                            <i class="fa fa-times"></i> Remove</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


              <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-success">{{ __('Submit') }}</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  @endsection
  @section('js')
  @endsection