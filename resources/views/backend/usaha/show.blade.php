@extends('layouts.app', ['activePage' => 'usaha', 'titlePage' => __('Detail UMKM')])
@section('css')
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
@endsection
@section('content')
<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 text-right">
				<a href="{{ route('usaha.index') }}" class="btn btn-md btn-success">{{ __('Kembali') }}</a>
			</div>
			<div class="col-md-12">
				<div class="card">
					<div class="card-header card-header-info">
						<h4 class="card-title">{{ __('Detail UMKM ') }}<strong>{{$usaha->nama_usaha}}</strong></h4>
						<p class="card-category"><strong>NIB.</strong> {{ $usaha->nomor_izin_usaha }}</p>
					</div>
					<div class="card-body ">
						<div class="row">
							<div class="col-md-8">
								<div class="row">
									<div class="col-sm-3">
										<h4 class="title">{{ __('Nama Usaha') }}</h4>
									</div>
									<div class="col-sm-1"><h4>:</h4></div>
									<div class="col-sm-5">
										<h4>{{ $usaha->nama_usaha }}</h4>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-3">
										<h4>{{ __('Nama Pemilik') }}</h4>
									</div>
									<div class="col-sm-1">:</div>
									<div class="col-sm-5">
										<h4>{!! $usaha->nama_pemilik !!}</h4>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-3">
										<h4>{{ __('Alamat') }}</h4>
									</div>
									<div class="col-sm-1"><h4><h4>:</h4></h4></div>
									<div class="col-sm-5">
										<h4>{!! $usaha->alamat !!}</h4>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-3">
										<h4>{{ __('Jenis Usaha') }}</h4>
									</div>
									<div class="col-sm-1"><h4>:</h4></div>
									<div class="col-sm-5">
										<h4>{!! $usaha->jenis_usaha !!}</h4>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-3">
										<h4>{{ __('Jumlah Tenaga Kerja') }}</h4>
									</div>
									<div class="col-sm-1"><h4>:</h4></div>
									<div class="col-sm-5">
										<h4>{!! $usaha->jml_tkerja !!} Orang</h4>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-3">
										<h4>{{ __('Modal') }}</h4>
									</div>
									<div class="col-sm-1"><h4>:</h4></div>
									<div class="col-sm-5">
										<h4>Rp {!! $usaha->modal !!}</h4>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-3">
										<h4>{{ __('Omzet per Bulan') }}</h4>
									</div>
									<div class="col-sm-1"><h4>:</h4></div>
									<div class="col-sm-5">
										<h4>Rp {!! $usaha->omzet_bln !!}</h4>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-3">
										<h4>{{ __('Omzet per Tahun') }}</h4>
									</div>
									<div class="col-sm-1"><h4>:</h4></div>
									<div class="col-sm-5">
										<h4>Rp {!! $usaha->omzet_thn !!}</h4>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-3">
										<h4>{{ __('No. Telepon') }}</h4>
									</div>
									<div class="col-sm-1"><h4>:</h4></div>
									<div class="col-sm-5">
										<h4>+62-{!! $usaha->telpon !!}</h4>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-3">
										<h4>{{ __('Kategori Usaha') }}</h4>
									</div>
									<div class="col-sm-1"><h4>:</h4></div>
									<div class="col-sm-5">
										<h4>{!! $usaha->kategori !!}</h4>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<img class="card-img-top" src="{{ $usaha->foto }}" alt="Card image cap">
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-12">
				<div class="card">
					<div class="card-header card-header-text card-header-info">
						<div class="card-text">
							<h4 class="card-title">Maps Lokasi</h4>
						</div>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="map-canvas" id="map" style="height: 350px;"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
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