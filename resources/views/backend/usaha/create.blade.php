@extends('layouts.app', ['activePage' => 'usaha', 'titlePage' => __('Tambah UMKM')])
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card ">
          <div class="card-header card-header-info ">
            <h4 class="card-title">{{ __('Tambah usaha') }}</h4>
            <p class="card-category"></p>
            <ul class="nav nav-pills nav-pills-primary" role="tablist">
              <li class="nav-item">
                <a class="nav-link active btn btn-success" data-toggle="tab" href="#link1" role="tablist" aria-expanded="true">
                  Form Manual
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link btn btn-success" data-toggle="tab" href="#link2" role="tablist" aria-expanded="false">
                  Import Data
                </a>
              </li>
            </ul>
          </div>
          <div class="card-body ">
            <div class="row">
              <div class="col-md-12 text-right">
                <a href="{{ route('usaha.index') }}" class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
              </div>
            </div>
            <div class="tab-content tab-space">
              <div class="tab-pane active" id="link1" aria-expanded="true">
                <form method="post" action="{{ route('usaha.store') }}" autocomplete="off" class="form-horizontal" enctype="multipart/form-data">
                  @csrf
                  @method('post')
                  <div class="form-row">
                    <!-- <div class="col-sm-7"> -->
                    <div class="col-md-6 form-group {{ $errors->has('nama_usaha') ? ' has-danger' : '' }}">
                      <label>{{ __('Nama Usaha') }}</label>
                      <input class="form-control{{ $errors->has('nama_usaha') ? ' is-invalid' : '' }}" name="nama_usaha" id="input-nama_usaha" type="text" placeholder="{{ __('Masukan Nama Usaha') }}" value="{{ old('nama_usaha') }}" required="true" aria-required="true"/>
                      @if ($errors->has('nama_usaha'))
                      <span id="nama_usaha-error" class="error text-danger" for="input-nama_usaha">{{ $errors->first('nama_usaha') }}</span>
                      @endif
                    </div>
                    <!-- </div> -->
                    <!-- </div> -->
                    <!-- <div class="row"> -->
                    <!-- <div class="col-sm-7"> -->
                    <div class="col-md-6 form-group {{ $errors->has('nama_pemilik') ? ' has-danger' : '' }}">
                      <label>{{ __('Nama Pemilik') }}</label>
                      <input class="form-control{{ $errors->has('nama_pemilik') ? ' is-invalid' : '' }}" name="nama_pemilik" id="input-nama_pemilik" type="text" placeholder="{{ __('Masukan Nama Pemilik') }}" value="{{ old('nama_pemilik') }}" required="true" aria-required="true"/>
                      @if ($errors->has('nama_pemilik'))
                      <span id="nama_pemilik-error" class="error text-danger" for="input-nama_pemilik">{{ $errors->first('nama_pemilik') }}</span>
                      @endif
                    </div>
                    <!-- </div> -->
                  </div>
                  <div class="form-row">
                    <div class="col-sm-4">
                      <div class="form-group {{ $errors->has('nomor_izin_usaha') ? ' has-danger' : '' }}">
                        <label>{{ __('Nama Izin Berusaha') }}</label>
                        <input class="form-control{{ $errors->has('nomor_izin_usaha') ? ' is-invalid' : '' }}" name="nomor_izin_usaha" id="input-nomor_izin_usaha" type="text" placeholder="{{ __('Masukan Nomor Izin Berusaha') }}" value="{{ old('nomor_izin_usaha') }}" required="true" aria-required="true"/>
                        @if ($errors->has('nomor_izin_usaha'))
                        <span id="nomor_izin_usaha-error" class="error text-danger" for="input-nomor_izin_usaha">{{ $errors->first('nomor_izin_usaha') }}</span>
                        @endif
                      </div>
                    </div>
                    <!-- </div> -->
                    <!-- <div class="row"> -->
                    <div class="col-sm-4">
                      <div class="form-group {{ $errors->has('telpon') ? ' has-danger' : '' }}">
                        <label>{{ __('Telepon') }}</label>
                        <input class="form-control{{ $errors->has('telpon') ? ' is-invalid' : '' }}" name="telpon" id="input-telpon" type="text" placeholder="{{ __('Masukan Nomor Telepon') }}" value="{{ old('telpon') }}" required="true" aria-required="true"/>
                        @if ($errors->has('telpon'))
                        <span id="telpon-error" class="error text-danger" for="input-telpon">{{ $errors->first('telpon') }}</span>
                        @endif
                      </div>
                    </div>
                    <!-- </div> -->
                    <!-- <div class="row"> -->
                    <div class="col-sm-4">
                      <div class="form-group {{ $errors->has('jml_tkerja') ? ' has-danger' : '' }}">
                        <label>{{ __('Jumlah Tenaga Kerja') }}</label>
                        <input class="form-control{{ $errors->has('jml_tkerja') ? ' is-invalid' : '' }}" name="jml_tkerja" id="input-jml_tkerja" type="text" placeholder="{{ __('Masukan Jumlah Tenaga Kerja') }}" value="{{ old('jml_tkerja') }}" required="true" aria-required="true"/>
                        @if ($errors->has('jml_tkerja'))
                        <span id="jml_tkerja-error" class="error text-danger" for="input-jml_tkerja">{{ $errors->first('jml_tkerja') }}</span>
                        @endif
                      </div>
                    </div>
                    <!-- </div> -->
                  </div>
                  <!-- <div class="row"> -->
                  <div class="form-row">
                    <!-- <div class="row"> -->
                    <div class="col-sm-6">
                      <div class="form-group {{ $errors->has('kategori') ? ' has-danger' : '' }}">
                        <label>{{ __('Kategori UMKM') }}</label>
                        <select name="kategori" class="form-control">
                          <option disabled>Kategori UMKM</option>
                          <option value="Mikro">Mikro</option>
                          <option value="Kecil">Kecil</option>
                          <option value="Menengah">Menengah</option>
                        </select>
                        @if ($errors->has('jenis_usaha'))
                        <span id="kategori-error" class="error text-danger" for="input-kategori">{{ $errors->first('kategori') }}</span>
                        @endif
                      </div>
                    </div>
                    <!-- </div> -->
                    <div class="col-sm-6">
                      <div class="form-group {{ $errors->has('jenis_usaha') ? ' has-danger' : '' }}">
                        <label>{{ __('Jenis Usaha') }}</label>
                        <select class="form-control" id="foralamat" name="jenis_usaha">
                          <option disabled>Pilih Jenis Usaha</option>
                          <option value="Usaha Kuliner">Usaha Kuliner</option>
                          <option value="Usaha Bidang Fashion">Usaha Bidang Fashion</option>
                          <option value="Usaha Dibidang Pendidikan">Usaha Dibidang Pendidikan</option>
                          <option value="Usaha Dibidang Otomotif">Usaha Dibidang Otomotif</option>
                          <option value="Usaha Agrobisnis">Usaha Agrobisnis</option>
                          <option value="Usaha Dibidang Tekonologi Internet">Usaha Dibidang Tekonologi Internet</option>
                          <option value="Usaha Kerajinan Tangan">Usaha Kerajinan Tangan</option>
                          <option value="Usaha Elektronik dan Gadget">Usaha Elektronik dan Gadget</option>
                        </select>
                        @if ($errors->has('jenis_usaha'))
                        <span id="jenis_usaha-error" class="error text-danger" for="input-jenis_usaha">{{ $errors->first('jenis_usaha') }}</span>
                        @endif
                      </div>
                    </div>
                  </div>
                  <div class="form-row">
                    <!-- <div class="col-sm-7"> -->
                    <div class="col-md-12 form-group {{ $errors->has('alamat') ? ' has-danger' : '' }}">
                      <label>{{ __('Alamat') }}</label>
                      <textarea rows="3" class="form-control{{ $errors->has('alamat') ? ' is-invalid' : '' }}" name="alamat" id="input-alamat" type="text" placeholder="{{ __('Masukan Alamat') }}" required="true" aria-required="true">{{ old('alamat') }}</textarea>
                      @if ($errors->has('alamat'))
                      <span id="alamat-error" class="error text-danger" for="input-alamat">{{ $errors->first('alamat') }}</span>
                      @endif
                      <!-- </div> -->
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="col-sm-4">
                      <div class="form-group {{ $errors->has('modal') ? ' has-danger' : '' }}">
                        <label>{{ __('Modal Usaha (Rp)') }}</label>
                        <input class="form-control{{ $errors->has('modal') ? ' is-invalid' : '' }}" name="modal" id="input-modal" type="text" placeholder="{{ __('Masukan Jumlah Modal Usaha') }}" value="{{ old('modal') }}" required="true" aria-required="true"/>
                        @if ($errors->has('modal'))
                        <span id="modal-error" class="error text-danger" for="input-modal">{{ $errors->first('modal') }}</span>
                        @endif
                      </div>
                    </div>
                  <!-- </div>
                  <div class="row"> -->
                    <div class="col-sm-4">
                      <div class="form-group {{ $errors->has('omzet_bln') ? ' has-danger' : '' }}">
                        <label>{{ __('Omzet per Bulan (Rp)') }}</label>
                        <input class="form-control{{ $errors->has('omzet_bln') ? ' is-invalid' : '' }}" name="omzet_bln" id="input-omzet_bln" type="text" placeholder="{{ __('Masukan Jumlah Omzet per Bulan') }}" value="{{ old('omzet_bln') }}" required="true" aria-required="true"/>
                        @if ($errors->has('omzet_bln'))
                        <span id="omzet_bln-error" class="error text-danger" for="input-omzet_bln">{{ $errors->first('omzet_bln') }}</span>
                        @endif
                      </div>
                    </div>
                  <!-- </div>
                  <div class="row"> -->
                    <div class="col-sm-4">
                      <div class="form-group {{ $errors->has('omzet_thn') ? ' has-danger' : '' }}">
                        <label>{{ __('Omzet per Tahun (Rp)') }}</label>
                        <input class="form-control{{ $errors->has('omzet_thn') ? ' is-invalid' : '' }}" name="omzet_thn" id="input-omzet_thn" type="text" placeholder="{{ __('Masukan Jumlah Omzet per Tahun') }}" value="{{ old('omzet_thn') }}" required="true" aria-required="true"/>
                        @if ($errors->has('omzet_thn'))
                        <span id="omzet_thn-error" class="error text-danger" for="input-omzet_thn">{{ $errors->first('omzet_thn') }}</span>
                        @endif
                      </div>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="col-sm-12">
                      <label>{{ __('Koordinat Lokasi') }}</label>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group{{ $errors->has('lat') ? ' has-danger' : '' }}">
                        <label>{{ __('Latitude') }}</label>
                        <input class="form-control{{ $errors->has('text') ? ' is-invalid' : '' }}" name="lat" id="latitude" type="lat" placeholder="{{ __('Masukkan Lattitude') }}" value="{{ old('lat') }}" required/>
                        @if ($errors->has('lat'))
                        <span id="lat-error" clsas="error text-danger" for="input-lat">{{ $errors->first('lat') }}</span>
                        @endif
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group{{ $errors->has('lng') ? ' has-danger' : '' }}">
                        <label>{{ __('Longitude') }}</label>
                        <input class="form-control{{ $errors->has('text') ? ' is-invalid' : '' }}" name="lng" id="longitude" type="lng" placeholder="{{ __('Masukkan Longitude') }}" value="{{ old('lng') }}" required/>
                        @if ($errors->has('lng'))
                        <span id="lng-error" clsas="error text-danger" for="input-lng">{{ $errors->first('lng') }}</span>
                        @endif
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <!--Google map-->
                      <div id="map-container-google-11" class="z-depth-1-half map-container-6" style="height: 400px">
                        <iframe src="https://maps.google.com/maps?q=new%20delphi&t=&z=13&ie=UTF8&iwloc=&output=embed"
                        frameborder="0" style="border:0" allowfullscreen></iframe>
                      </div>
                      <style type="text/css">
                      .map-container-6{
                      overflow:hidden;
                      padding-bottom:56.25%;
                      position:relative;
                      height:0;
                      }
                      .map-container-6 iframe{
                      left:0;
                      top:0;
                      height:50%;
                      width:100%;
                      position:absolute;
                      }
                      </style>
                      <br>
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
                    <p>Untuk mempermudah memasukan data secara kolektif, anda dapat mengunduh template excel dibawah ini, kemudian silahkan isi datanya. Kemudian anda dapat mengupload kembali file tersebut dibawah ini. </p>
                    <div class="form-group">
                      <label>{{ __('Unduh Template') }}</label><br>
                      <a href="{{ route('template.usaha') }}" class="btn btn-md btn-success">{{ __('Unduh') }}</a>
                    </div>
                  </div>
                </div>
                <form method="post" action="{{ route('usaha.import') }}" autocomplete="off" class="form-horizontal" enctype="multipart/form-data" files="true">
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
                          <span class="btn btn-sm btn-raised btn-danger  fileinput-exists" data-dismiss="fileinput">
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
    <script>
    var map = new google.maps.Map(document.getElementById('map-container-google-11'),{
    center:{
    lat:-0.4574384,
    lng:117.1528078
    },
    zoom:15
    });
    var marker = new google.maps.Marker({
    position:{
    lat:-0.4574384,
    lng:117.1528078
    },
    map: map,
    draggable : true
    });
    google.maps.event.addListener(marker, 'position_changed', function(){
    var lat = marker.getPosition().lat();
    var lng = marker.getPosition().lng();
    $('#latitude').val(lat);
    $('#longitude').val(lng);
    });
    </script>
    @endsection