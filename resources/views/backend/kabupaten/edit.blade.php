@extends('layouts.app', ['activePage' => 'kabupaten', 'titlePage' => __('Edit Data Kabupaten')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form method="post" action="{{ route('kabupaten.update', $data->uuid) }}" autocomplete="off"
                        class="form-horizontal">
                        @csrf
                        @method('PATCH')

                        <div class="card ">
                            <div class="card-header bg-dark">
                                <h4 class="card-title text-white">{{ __('Edit Kabupaten') }}</h4>
                                <p class="card-category"></p>
                            </div>
                            <div class="card-body ">
                                <div class="row">
                                    <div class="col-md-12 text-right">
                                        <a href="{{ route('kabupaten.index') }}"
                                            class="btn btn-sm btn-warning">{{ __('Kembali') }}</a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label class="col-sm-2 col-form-label">{{ __('Kode Wilayah') }}</label>
                                        <div class="col-sm-7">
                                            <div class="form-group{{ $errors->has('kode') ? ' has-danger' : '' }}">
                                                <input
                                                    class="form-control{{ $errors->has('kode') ? ' is-invalid' : '' }}"
                                                    name="kode" id="input-label" type="text"
                                                    placeholder="{{ __('Masukkan kode wilayah') }}"
                                                    value="{{ old('kode', $data->kode) }}" required="true"
                                                    aria-required="true" />
                                                @if ($errors->has('kode'))
                                                    <span id="label-error" class="error text-danger"
                                                        for="input-kode">{{ $errors->first('kode') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label class="col-sm-2 col-form-label">{{ __('Label') }}</label>
                                        <div class="col-sm-7">
                                            <div class="form-group{{ $errors->has('label') ? ' has-danger' : '' }}">
                                                <input
                                                    class="form-control{{ $errors->has('label') ? ' is-invalid' : '' }}"
                                                    name="label" id="input-label" type="text"
                                                    placeholder="{{ __('Nama Tahun') }}"
                                                    value="{{ old('label', $data->label) }}" required="true"
                                                    aria-required="true" />
                                                @if ($errors->has('label'))
                                                    <span id="label-error" class="error text-danger"
                                                        for="input-label">{{ $errors->first('label') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-3">
                                        <button type="submit" class="btn btn-success">{{ __('Save') }}</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
