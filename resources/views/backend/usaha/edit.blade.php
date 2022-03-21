@extends('layouts.app', ['activePage' => 'usaha', 'titlePage' => __('Data usaha')])
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <form method="post" action="{{ route('usaha.update', $usaha->id) }}" autocomplete="off" class="form-horizontal" enctype="multipart/form-data">
          @csrf
          @method('PATCH')
          <div class="card ">
            <div class="card-header card-header-success">
              <h4 class="card-title">{{ __('Tambah usaha') }}</h4>
              <p class="card-category"></p>
            </div>
            <div class="card-body ">
              <div class="row">
                <div class="col-md-12 text-right">
                  <a href="{{ route('usaha.index') }}" class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                </div>
              </div>
              <div class="row">
                <label class="col-sm-2 col-form-label">{{ __('Nama Usaha') }}</label>
                <div class="col-sm-7">
                  <div class="form-group {{ $errors->has('nama_usaha') ? ' has-danger' : '' }}">
                    <input class="form-control{{ $errors->has('nama_usaha') ? ' is-invalid' : '' }}" name="nama_usaha" id="input-nama_usaha" type="text" placeholder="{{ __('Masukan Nama Usaha') }}" value="{{ old('nama_usaha', $usaha->nama_usaha) }}" required="true" aria-required="true"/>
                    @if ($errors->has('nama_usaha'))
                    <span id="nama_usaha-error" class="error text-danger" for="input-nama_usaha">{{ $errors->first('nama_usaha') }}</span>
                    @endif
                  </div>
                </div>
              </div>
              <div class="row">
                <label class="col-sm-2 col-form-label">{{ __('Nama Pemilik') }}</label>
                <div class="col-sm-7">
                  <div class="form-group {{ $errors->has('nama_pemilik') ? ' has-danger' : '' }}">
                    <input class="form-control{{ $errors->has('nama_pemilik') ? ' is-invalid' : '' }}" name="nama_pemilik" id="input-nama_pemilik" type="text" placeholder="{{ __('Masukan Nama Pemilik') }}" value="{{ old('nama_pemilik', $usaha->nama_pemilik) }}" required="true" aria-required="true"/>
                    @if ($errors->has('nama_pemilik'))
                    <span id="nama_pemilik-error" class="error text-danger" for="input-nama_pemilik">{{ $errors->first('nama_pemilik') }}</span>
                    @endif
                  </div>
                </div>
              </div>
              <div class="row">
                <label class="col-sm-2 col-form-label">{{ __('Nama Izin Berusaha') }}</label>
                <div class="col-sm-7">
                  <div class="form-group {{ $errors->has('nomor_izin_usaha') ? ' has-danger' : '' }}">
                    <input class="form-control{{ $errors->has('nomor_izin_usaha') ? ' is-invalid' : '' }}" name="nomor_izin_usaha" id="input-nomor_izin_usaha" type="text" placeholder="{{ __('Masukan Nomor Izin Berusaha') }}" value="{{ old('nomor_izin_usaha', $usaha->nomor_izin_usaha) }}" required="true" aria-required="true"/>
                    @if ($errors->has('nomor_izin_usaha'))
                    <span id="nomor_izin_usaha-error" class="error text-danger" for="input-nomor_izin_usaha">{{ $errors->first('nomor_izin_usaha') }}</span>
                    @endif
                  </div>
                </div>
              </div>
              <div class="row">
                <label class="col-sm-2 col-form-label foralamat">{{ __('Alamat') }}</label>
                <div class="col-sm-7">
                  <div class="form-group {{ $errors->has('alamat') ? ' has-danger' : '' }}">
                    <textarea rows="3" class="form-control{{ $errors->has('alamat') ? ' is-invalid' : '' }}" name="alamat" id="input-alamat" type="text" placeholder="{{ __('Masukan Alamat') }}" required="true" aria-required="true">{{ old('alamat', $usaha->alamat) }}</textarea>
                    @if ($errors->has('alamat'))
                    <span id="alamat-error" class="error text-danger" for="input-alamat">{{ $errors->first('alamat') }}</span>
                    @endif
                  </div>
                </div>
              </div>
              <div class="row">
                <label class="col-sm-2 col-form-label" for="foralamat">{{ __('Jenis Usaha') }}</label>
                <div class="col-sm-7">
                  <div class="form-group {{ $errors->has('jenis_usaha') ? ' has-danger' : '' }}">
                    <select class="form-control" data-style="btn btn-link" id="foralamat" name="jenis_usaha" value="{{ old('jenis_usaha', $usaha->jenis_usaha) }}">
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
              <div class="row">
                <label class="col-sm-2 col-form-label">{{ __('Jumlah Tenaga Kerja') }}</label>
                <div class="col-sm-7">
                  <div class="form-group {{ $errors->has('jml_tkerja') ? ' has-danger' : '' }}">
                    <input class="form-control{{ $errors->has('jml_tkerja') ? ' is-invalid' : '' }}" name="jml_tkerja" id="input-jml_tkerja" type="text" placeholder="{{ __('Masukan Jumlah Tenaga Kerja') }}" value="{{ old('jml_tkerja', $usaha->jml_tkerja) }}" required="true" aria-required="true"/>
                    @if ($errors->has('jml_tkerja'))
                    <span id="jml_tkerja-error" class="error text-danger" for="input-jml_tkerja">{{ $errors->first('jml_tkerja') }}</span>
                    @endif
                  </div>
                </div>
              </div>
              <div class="row">
                <label class="col-sm-2 col-form-label">{{ __('Modal Usaha (Rp)') }}</label>
                <div class="col-sm-7">
                  <div class="form-group {{ $errors->has('modal') ? ' has-danger' : '' }}">
                    <input class="form-control{{ $errors->has('modal') ? ' is-invalid' : '' }}" name="modal" id="input-modal" type="text" placeholder="{{ __('Masukan Jumlah Modal Usaha') }}" value="{{ old('modal',$usaha->modal) }}" required="true" aria-required="true"/>
                    @if ($errors->has('modal'))
                    <span id="modal-error" class="error text-danger" for="input-modal">{{ $errors->first('modal') }}</span>
                    @endif
                  </div>
                </div>
              </div>
              <div class="row">
                <label class="col-sm-2 col-form-label">{{ __('Omzet per Bulan (Rp)') }}</label>
                <div class="col-sm-7">
                  <div class="form-group {{ $errors->has('omzet_bln') ? ' has-danger' : '' }}">
                    <input class="form-control{{ $errors->has('omzet_bln') ? ' is-invalid' : '' }}" name="omzet_bln" id="input-omzet_bln" type="text" placeholder="{{ __('Masukan Jumlah Omzet per Bulan') }}" value="{{ old('omzet_bln', $usaha->omzet_bln) }}" required="true" aria-required="true"/>
                    @if ($errors->has('omzet_bln'))
                    <span id="omzet_bln-error" class="error text-danger" for="input-omzet_bln">{{ $errors->first('omzet_bln') }}</span>
                    @endif
                  </div>
                </div>
              </div>
              <div class="row">
                <label class="col-sm-2 col-form-label">{{ __('Omzet per Tahun (Rp)') }}</label>
                <div class="col-sm-7">
                  <div class="form-group {{ $errors->has('omzet_thn') ? ' has-danger' : '' }}">
                    <input class="form-control{{ $errors->has('omzet_thn') ? ' is-invalid' : '' }}" name="omzet_thn" id="input-omzet_thn" type="text" placeholder="{{ __('Masukan Jumlah Omzet per Tahun') }}" value="{{ old('omzet_thn', $usaha->omzet_thn) }}" required="true" aria-required="true"/>
                    @if ($errors->has('omzet_thn'))
                    <span id="omzet_thn-error" class="error text-danger" for="input-omzet_thn">{{ $errors->first('omzet_thn') }}</span>
                    @endif
                  </div>
                </div>
              </div>
              <div class="row">
                <label class="col-sm-2 col-form-label">{{ __('Telepon') }}</label>
                <div class="col-sm-7">
                  <div class="form-group {{ $errors->has('telpon') ? ' has-danger' : '' }}">
                    <input class="form-control{{ $errors->has('telpon') ? ' is-invalid' : '' }}" name="telpon" id="input-telpon" type="text" placeholder="{{ __('Masukan Nomor Telepon') }}" value="{{ old('telpon', $usaha->telpon) }}" required="true" aria-required="true"/>
                    @if ($errors->has('telpon'))
                    <span id="telpon-error" class="error text-danger" for="input-telpon">{{ $errors->first('telpon') }}</span>
                    @endif
                  </div>
                </div>
              </div>
              <div class="row">
                <label class="col-sm-2 col-form-label" for="">{{ __('Kategori UMKM') }}</label>
                <div class="col-sm-7">
                  <div class="form-group {{ $errors->has('kategori') ? ' has-danger' : '' }}">
                    <select name="kategori" class="form-control"  value="{{ old('kategori', $usaha->kategori) }}">
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
              </div>
              <div class="row">
                <label class="col-sm-2 col-form-label">{{ __('Lokasi') }}</label>
                <div class="col-sm-5">
                  <div class="form-group{{ $errors->has('lat') ? ' has-danger' : '' }}">
                    <input class="form-control{{ $errors->has('text') ? ' is-invalid' : '' }}" name="lat" id="latitude" type="lat" placeholder="{{ __('Masukkan Lattitude') }}" value="{{ old('lat', $usaha->lat) }}" required/>
                    @if ($errors->has('lat'))
                    <span id="lat-error" clsas="error text-danger" for="input-lat">{{ $errors->first('lat') }}</span>
                    @endif
                  </div>
                </div>
                <div class="col-sm-5">
                  <div class="form-group{{ $errors->has('lng') ? ' has-danger' : '' }}">
                    <input class="form-control{{ $errors->has('text') ? ' is-invalid' : '' }}" name="lng" id="longitude" type="lng" placeholder="{{ __('Masukkan Longitude') }}" value="{{ old('lng', $usaha->lng) }}" required/>
                    @if ($errors->has('lng'))
                    <span id="lng-error" clsas="error text-danger" for="input-lng">{{ $errors->first('lng') }}</span>
                    @endif
                  </div>
                </div>
              </div>
              <div class="row">
                <label class="col-sm-2 col-form-label">{{ __('') }}</label>
                <div class="col-lg-10">
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
                  height:100%;
                  width:50%;
                  position:absolute;
                  }
                  </style>
                  <br>
                </div>
              </div>
              <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-primary">{{ __('Update Usaha') }}</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  @endsection
  @section('js')
  <script>
  var datalat = {!! json_encode($usaha->lat) !!};
  var datalng = {!! json_encode($usaha->lng) !!};
  if(datalat == null){
  var datalat = -0.4574384;
  var datalng = 117.1528078;
  }
  var map = new google.maps.Map(document.getElementById('map-container-google-11'),{
  center:{
  lat: datalat,
  lng: datalng
  },
  zoom:15
  });
  var marker = new google.maps.Marker({
  position:{
  lat:datalat,
  lng:datalng
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