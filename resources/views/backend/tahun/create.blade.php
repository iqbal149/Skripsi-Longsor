@extends('layouts.app', ['activePage' => 'tahun', 'titlePage' => __('Tahun Kejadian ')])
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <form method="post" action="{{ route('tahun.store') }}" autocomplete="off" class="form-horizontal" enctype="multipart/form-data">
          @csrf
          @method('post')
          <div class="card ">
            <div class="card-header card-header-success">
              <h4 class="card-title">{{ __('Tambah Tahun') }}</h4>
              <p class="card-category"></p>
            </div>
            <div class="card-body ">
              <div class="row">
                <div class="col-md-12 text-right">
                  <a href="{{ route('tahun.index') }}" class="btn btn-sm btn-warning">{{ __('Back to list') }}</a>
                </div>
              </div>
              
              <div class="form-row">
                <div class="col-sm-12">
                    <div class="form-group {{ $errors->has('label') ? ' has-danger' : '' }}">
                        <label>{{ __('label') }}</label>
                        <input
                            class="form-control{{ $errors->has('label') ? ' is-invalid' : '' }}"
                            name="label" id="input-label" type="text"
                            placeholder="{{ __('Masukan Tahun') }}"
                            value="{{ old('label') }}" required="true" aria-required="true" />
                        @if ($errors->has('label'))
                        <span id="label-error" class="error text-danger"
                            for="input-label">{{ $errors->first('label') }}</span>
                        @endif
                    </div>
                </div>
            </div>

              <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-success ">{{ __('Tambah') }}</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  @endsection