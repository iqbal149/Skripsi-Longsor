@extends('layouts.app', ['activePage' => 'matriks', 'titlePage' => __('Import Matriks')])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card ">
                        <div class="card-header bg-dark ">
                            <h4 class="card-title text-white">{{ __('Tambah longsor') }}</h4>
                            <p class="card-category"></p>
                            <ul class="nav nav-pills nav-pills-primary" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active btn btn-light" data-toggle="tab" href="#link1" role="tablist"
                                        aria-expanded="true">
                                        Form Manual
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link btn btn-light" data-toggle="tab" href="#link2" role="tablist"
                                        aria-expanded="false">
                                        Import Data
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-md-12 text-right">
                                    <a href="{{ route('matriks.index') }}"
                                        class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                                </div>
                            </div>
                            <div class="tab-content tab-space">
                                <div class="tab-pane active" id="link1" aria-expanded="true">
                                    <form method="post" action="{{ route('matriks.store') }}" autocomplete="off"
                                        class="form-horizontal" enctype="multipart/form-data">
                                        @csrf
                                        @method('post')
                                        <div class="row">
                                            <div class="col-md-4 form-group {{ $errors->has('matriks_3_1') ? ' has-danger' : '' }}">
                                                <label>{{ __('Matriks 3 1') }}</label>
                                                <input
                                                    class="form-control{{ $errors->has('matriks_3_1') ? ' is-invalid' : '' }}"
                                                    name="matriks_3_1" id="input-matriks_3_1" type="text"
                                                    placeholder="{{ __('Masukan matriks_3_1 Kejadian') }}"
                                                    value="{{ old('matriks_3_1') }}" required="true"
                                                    aria-required="true" />
                                                @if ($errors->has('matriks_3_1'))
                                                    <span id="matriks_3_1-error" class="error text-danger"
                                                        for="input-matriks_3_1">{{ $errors->first('matriks_3_1') }}</span>
                                                @endif
                                            </div>
                                        
                                            <div class="col-md-4 form-group {{ $errors->has('matriks_3_2') ? ' has-danger' : '' }}">
                                                <label>{{ __('Matriks 3 2') }}</label>
                                                <input
                                                    class="form-control{{ $errors->has('matriks_3_2') ? ' is-invalid' : '' }}"
                                                    name="matriks_3_2" id="input-matriks_3_2" type="text"
                                                    placeholder="{{ __('Masukan matriks_3_2 Kejadian') }}"
                                                    value="{{ old('matriks_3_2') }}" required="true"
                                                    aria-required="true" />
                                                @if ($errors->has('matriks_3_2'))
                                                    <span id="matriks_3_2-error" class="error text-danger"
                                                        for="input-matriks_3_2">{{ $errors->first('matriks_3_2') }}</span>
                                                @endif
                                            </div>
                                        
                                            <div class="col-md-4 form-group {{ $errors->has('matriks_3_3') ? ' has-danger' : '' }}">
                                                <label>{{ __('Matriks 3 3') }}</label>
                                                <input
                                                    class="form-control{{ $errors->has('matriks_3_3') ? ' is-invalid' : '' }}"
                                                    name="matriks_3_3" id="input-matriks_3_3" type="text"
                                                    placeholder="{{ __('Masukan matriks_3_3 Kejadian') }}"
                                                    value="{{ old('matriks_3_3') }}" required="true"
                                                    aria-required="true" />
                                                @if ($errors->has('matriks_3_3'))
                                                    <span id="matriks_3_3-error" class="error text-danger"
                                                        for="input-matriks_3_3">{{ $errors->first('matriks_3_3') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="card-footer ml-auto mr-auto">
                                            <button type="submit" class="btn btn-success">{{ __('Submit') }}</button>
                                        </div>



                                    </form>
                                </div>


                                <div class="tab-pane" id="link2" aria-expanded="false">
                                    <div class="form-row">
                                        <div class="col-sm-10">
                                            <p>Untuk mempermudah memasukan data secara kolektif, anda dapat mengunduh
                                                template excel dibawah ini, kemudian silahkan isi datanya. Kemudian anda dapat mengupload kembali file tersebut dibawah ini. </p>
                                            <div class="form-group">
                                                <label>{{ __('Unduh Template') }}</label><br>
                                                <a href="{{ route('template.matriks') }}"
                                                    class="btn btn-md btn-success">{{ __('Unduh') }}</a>
                                            </div>
                                        </div>
                                    </div>
                                    <form method="post" action="{{ route('matriks.import') }}" autocomplete="off"
                                        class="form-horizontal" enctype="multipart/form-data" files="true">
                                        @csrf
                                        @method('post')
                                        <div class="form-row">

                                            <div class="col-sm-7">
                                                <label>{{ __('Upload File') }}</label>
                                                <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                                    <div class="form-control" data-trigger="fileinput">
                                                        <span class="fileinput-filename"></span>
                                                    </div>
                                                    <span class="input-group-append">
                                                        <span class="btn btn-sm btn-raised btn-danger  fileinput-exists"
                                                            data-dismiss="fileinput">
                                                            Remove
                                                        </span>
                                                        <span class="btn btn-sm btn-raised btn-rose btn-file">
                                                            <span class="fileinput-new ">Select file</span>
                                                            <span class="fileinput-exists">Change</span>
                                                            <input type="file" name="excel" multiple>
                                                        </span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer ml-auto mr-auto">
                                            <button type="submit" class="btn btn-success">{{ __('Import') }}</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
        @section('js')
        @endsection
