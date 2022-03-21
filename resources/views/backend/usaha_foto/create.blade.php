@extends('layouts.app', ['activePage' => 'usaha', 'titlePage' => __('Tambah Foto ')])
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <form method="post" action="{{ route('usahafoto.store', $usaha->id) }}" autocomplete="off" class="form-horizontal" enctype="multipart/form-data">
          @csrf
          @method('post')
          <div class="card ">
            <div class="card-header card-header-success">
              <h4 class="card-title">{{ __('Tambah Foto') }}</h4>
              <p class="card-category"></p>
            </div>
            <div class="card-body ">
              <div class="row">
                <div class="col-md-12 text-right">
                  <a href="{{ route('usahafoto.index', $usaha->id) }}" class="btn btn-sm btn-warning">{{ __('Back to list') }}</a>
                </div>
              </div>
              <div class="row">
                <label class="col-sm-2 col-form-label">{{ __('Foto') }}</label>
                <div class="col-sm-6">
                  <div class="form-group{{ $errors->has('foto') ? ' has-danger' : '' }}">
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
              <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-success ">{{ __('Tambah galeri') }}</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  @endsection