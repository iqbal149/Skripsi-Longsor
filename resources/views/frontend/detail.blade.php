@extends('frontend.master')
@push('css')
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.4.0/dist/leaflet.css" integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA==" crossorigin=""/>
<style type="text/css">
#map {
height: 100%;
width: 100%;
}
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
@endpush
@section('content')
<section class="home-slider ftco-degree-bg">
  <div class="slider-item bread-wrap" data-stellar-background-ratio="1">
    <div class="overlay"></div>
    <div class="container">
      <div class="row slider-text justify-content-center align-items-center">
        <div class="col-md-10 col-sm-12 ftco-animate mb-4 text-center">
          <p class="breadcrumbs"><span class="mr-2"><a href="/">Home</a></span> <span>Detail</span></p>
          <h1 class="mb-3 bread" style="text-transform: uppercase;">"{{ $usaha->nama_usaha}}"</h1>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="ftco-section contact-section">
  <div class="container bg-light">
    <div class="row d-flex mb-5 contact-info">
      <div class="col-md-12 mb-12 text-center">
        <h1 class="h1">INFORMASI DETAIL UMKM</h1>
      </div>
      <hr>
      <div class="w-100"></div>
      <div class="col-md-12">
        <div class="row">
          <div class="col-sm-4">
            <h4 class="title">{{ __('Nama Usaha') }}</h4>
          </div>
          <div class="col-sm-1"><h4>:</h4></div>
          <div class="col-sm-5">
            <h4>{{ $usaha->nama_usaha }}</h4>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4">
            <h4 class="title">{{ __('Nama Pemilik Usaha') }}</h4>
          </div>
          <div class="col-sm-1"><h4>:</h4></div>
          <div class="col-sm-5">
            <h4>{{ $usaha->nama_pemilik }}</h4>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4">
            <h4 class="title">{{ __('Nomor Izin Berusaha') }}</h4>
          </div>
          <div class="col-sm-1"><h4>:</h4></div>
          <div class="col-sm-5">
            <h4>{{ $usaha->nomor_izin_usaha }}</h4>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4">
            <h4 class="title">{{ __('Alamat') }}</h4>
          </div>
          <div class="col-sm-1"><h4>:</h4></div>
          <div class="col-sm-5">
            <h4>{{ $usaha->alamat }}</h4>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4">
            <h4 class="title">{{ __('Jenis Usaha') }}</h4>
          </div>
          <div class="col-sm-1"><h4>:</h4></div>
          <div class="col-sm-5">
            <h4>{{ $usaha->jenis_usaha }}</h4>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4">
            <h4 class="title">{{ __('Jumlah Tenaga Kerja') }}</h4>
          </div>
          <div class="col-sm-1"><h4>:</h4></div>
          <div class="col-sm-5">
            <h4>{{ $usaha->jml_tkerja }} Orang</h4>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4">
            <h4 class="title">{{ __('Modal Usaha') }}</h4>
          </div>
          <div class="col-sm-1"><h4>:</h4></div>
          <div class="col-sm-5">
            <h4>Rp {{ number_format($usaha->modal, 2) }}</h4>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4">
            <h4 class="title">{{ __('Omzet per Bulan') }}</h4>
          </div>
          <div class="col-sm-1"><h4>:</h4></div>
          <div class="col-sm-5">
            <h4>Rp {{ number_format($usaha->omzet_bln, 2) }}</h4>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4">
            <h4 class="title">{{ __('Omzet per Tahun') }}</h4>
          </div>
          <div class="col-sm-1"><h4>:</h4></div>
          <div class="col-sm-5">
            <h4>Rp {{ number_format($usaha->omzet_thn, 2) }}</h4>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4">
            <h4 class="title">{{ __('Nomor Telpon') }}</h4>
          </div>
          <div class="col-sm-1"><h4>:</h4></div>
          <div class="col-sm-5">
            <h4>{{ $usaha->telpon }}</h4>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4">
            <h4 class="title">{{ __('Kategori Usaha') }}</h4>
          </div>
          <div class="col-sm-1"><h4>:</h4></div>
          <div class="col-sm-5">
            <h4>{{ $usaha->kategori }}</h4>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="ftco-section testimony-section">
  <div class="container">
    <div class="row justify-content-center mb-5 pb-5">
      <div class="col-md-7 text-center heading-section ftco-animate">
        <span class="subheading label">Galeri</span>
        <h2>Galeri UMKM {{ $usaha->nama_usaha}}</h2>
      </div>
    </div>
    <div class="row ftco-animate">
      <div class="col-md-12">
        <div class="carousel-testimony owl-carousel ftco-owl">
          <div class="item text-center">
            <div class="img col-sm-12 col-lg-12 order-last">
              <img src="{{ asset('img/sld2.jpg')}}">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="ftco-section testimony-section">
  <div class="container">
    <div class="row justify-content-center pb-5">
      <div class="col-md-7 text-center heading-section ftco-animate">
        <span class="subheading">Maps</span>
        <h2>Lokasi UMKM "{{ $usaha->nama_usaha}}"</h2>
      </div>
    </div>
    <div class="">
      <div class="map-canvas" id="map" style="height: 550px;"></div>
    </div>
  </div>
</section>
@endsection
@section('js')
<script src="https://unpkg.com/leaflet@1.4.0/dist/leaflet.js" integrity="sha512-QVftwZFqvtRNi0ZyCtsznlKSWOStnDORoefr1enyq5mVL4tmKB3S/EnC3rRJcxCPavG10IcrVGSmPh6Qw5lwrg==" crossorigin=""></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet.pm/2.0.2/leaflet.pm.min.js"></script>
<script>
var listAudio = new Array();
var listMarker = new Array();
var map = L.map('map',{
center: ["{{ $usaha->lat }}","{{ $usaha->lng }}"],
zoom: 30,
});
var marker = L.marker(["{{ $usaha->lat }}","{{ $usaha->lng }}"]
).addTo(map);
marker.bindPopup("<h4><b>{{ $usaha->nama_usaha }}</b></h4>Pemilik \t <b>{{ $usaha->nama_pemilik }}</b><br>Telepon \t<b>{{$usaha->telpon}}</b><br>").openPopup();
L.tileLayer('https://{s}.tile.osm.org/{z}/{x}/{y}.png', {
attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);
</script>
@endsection