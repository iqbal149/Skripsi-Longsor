@extends('frontend.master')
@section('content')
<section class="home-slider ftco-degree-bg">
  <div class="slider-item">
    <div class="overlay"></div>
    <div class="container">
      <div class="row slider-text align-items-center justify-content-center">
        <div class="col-md-10 ftco-animate text-center">
          <h1 class="mb-4">I love
          <strong class="typewrite" data-period="4000" data-type='[ "Samarinda.", "Kalimantan Timur.", "Indonesia."]'>
          <span class="wrap"></span>
          </strong>
          </h1>
          <p>“Bahan terpenting adalah dengan melakukan sesuatu. Banyak orang punya ide, tapi hanya sedikit orang yang memutuskan untuk melakukan sesuatu terhadap ide-ide tersebut. Bukan besok. Tidak minggu depan. Tapi hari ini. Pengusaha sejati adalah pelaku, bukan pemimpi.”</p>
          <!-- <p><a href="https://vimeo.com/45830194" class="btn btn-primary btn-outline-white px-4 py-3 popup-vimeo"><span class="ion-ios-play mr-2"></span> Watch Video</a></p> -->
        </div>
      </div>
    </div>
  </div>
</section>
<!-- END slider -->
<section class="ftco-section-featured ftco-animate">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="carousel owl-carousel">
          @foreach(App\Slider::latest()->get() as $i => $slider)
          <div class="item">
            <a href="portfolio.html">
              <img src="{{ $slider->foto }}" class="img-fluid" alt="">
            </a>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</section>
<section class="ftco-section ftco-degree-bg">
  <div class="container">
    <div class="row justify-content-center mb-5 pb-5">
      <div class="col-md-7 text-center heading-section ftco-animate">
        <span class="subheading">Usaha Mikro Kecil dan Menengah</span>
        <h2>KATEGORI UMKM</h2>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-6 col-lg-4 d-flex align-self-stretch ftco-animate">
        <div class="media block-6 services d-block text-center">
          <div class="d-flex justify-content-center"><div class="icon color-1 d-flex justify-content-center mb-3"><span class="align-self-center icon-layers"></span></div></div>
          <div class="media-body p-2">
            <h3 class="heading">Usaha Mikro</h3>
            <p>Merupakan suatu badan usaha yang mempunyai kekayaan bersih dibawah Rp 50.000.000,- per bulan dalam hal tersebut pembangunan dan juga tempat usaha tidak termasuk hitungan.</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 d-flex align-self-stretch ftco-animate">
        <div class="media block-6 services d-block text-center">
          <div class="d-flex justify-content-center"><div class="icon color-2 d-flex justify-content-center mb-3"><span class="align-self-center icon-gears"></span></div></div>
          <div class="media-body p-2">
            <h3 class="heading">Usaha Kecil</h3>
            <p>Merupakan sebuah usaha yang dikelola oleh perorangan dan juga bukan dengan melalui badan usaha. Memiliki kekayaan bersih dibawah Rp 300.000.000,- per tahun.</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 d-flex align-self-stretch ftco-animate">
        <div class="media block-6 services d-block text-center">
          <div class="d-flex justify-content-center"><div class="icon color-3 d-flex justify-content-center mb-3"><span class="align-self-center icon-paper-plane"></span></div></div>
          <div class="media-body p-2">
            <h3 class="heading">Usaha Menengah</h3>
            <p>Merupakan sebuah badan usaha dengan keuntungan bersih tidak lebih dari Rp 500.000.000,- per bulan. Perhitungan tidak termasuk kekayaan tanah serta juga bangunan.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="ftco-section-parallax ftco-degree-bg">
  <div class="parallax-img d-flex align-items-center">
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="col-md-10 text-center heading-section heading-section-white ftco-animate">
          <h2 class="h1 font-weight-bold">Chart Data UMKM Sungai Kapih</h2>
          <!-- <p><a href="#" class="btn btn-primary btn-outline-white mt-3 py-3 px-4">View more details</a></p> -->
          <div id="app">
            {!! $UsahaChart->container() !!}
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="ftco-section">
  <div class="container-fluid">
    <div class="row no-gutters justify-content-center mb-5 pb-5">
      <div class="col-md-7 text-center heading-section ftco-animate">
        <span class="subheading">Data</span>
        <h2>Data UMKM Sungai Kapih</h2>
      </div>
      <div class="component">
        <h2>Tabel UMKM</h2>
        <p>Rekap data UMKM Sungai Kapih &mdash; data masih dalam tahap pengumpulan.</p>
        <table id="laravel_datatable">
          <thead>
            <tr>
              <th>NIB</th>
              <th>Nama Usaha</th>
              <th>Pemilik</th>
              <th>Alamat</th>
              <th>Jenis Usaha</th>
              <th>Kategori</th>
              <th></th>
            </tr>
          </thead>
          <tfoot>
          <tr>
            <th>NIB</th>
            <th>Nama Usaha</th>
            <th>Pemilik</th>
            <th>Alamat</th>
            <th>Jenis Usaha</th>
            <th>Kategori</th>
            <th></th>
          </tr>
          </tfoot>
        </table>
      </div>
    </div>
  </div>
</div>
</section>
<section class="ftco-section ftco-counter ftco-degree-bg" id="section-counter">
<div class="container">
  <div class="row justify-content-center mb-1 pb-5">
    <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
      <h2>Jumlah UMKM di Sungai Kapih</h2>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
      <div class="block-18 text-center">
        <div class="text" style="padding: 20px 10px 20px 10px; border-radius: 10px; background-color: rgba(51, 117, 209, 0.85); min-width: 200px;">
          <strong class="number" data-number="{{App\Usaha::where('kategori','mikro')->count()}}">0</strong>
          <span>Kategori Mikro</span>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
      <div class="block-18 text-center">
        <div class="text" style="padding: 20px 10px 20px 10px; border-radius: 10px; background-color: rgba(51, 117, 209, 0.85); min-width: 200px;">
          <strong class="number" data-number="{{App\Usaha::where('kategori','kecil')->count()}}">0</strong>
          <span>Kategori Kecil</span>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
      <div class="block-18 text-center">
        <div class="text" style="padding: 20px 10px 20px 10px; border-radius: 10px; background-color: rgba(51, 117, 209, 0.85); min-width: 200px;">
          <strong class="number" data-number="{{App\Usaha::where('kategori','menengah')->count()}}">0</strong>
          <span>Kategori Menengah</span>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
@endsection
@section('js')
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready( function () {
$.ajaxSetup({
headers: {
'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
}
});
$('#laravel_datatable').DataTable({
processing: true,
serverSide: true,
ajax: {
url: "{{ url('umkm-list') }}",
type: 'GET',
},
columns: [
{ data: 'nomor_izin_usaha', name: 'nomor_izin_usaha' },
{ data: 'nama_usaha', name: 'nama_usaha' },
{ data: 'nama_pemilik', name: 'nama_pemilik' },
{ data: 'alamat', name: 'alamat' },
{ data: 'jenis_usaha', name: 'jenis_usaha' },
{ data: 'kategori', name: 'kategori' },
{ data: 'action', name: 'action' }
],
columnDefs: [ { "orderable": false, "targets": 0 },{ "orderable": false, "targets": -1 } ],
autofill: true,
"fnRowCallback" : function(nRow, aData, iDisplayIndex){
// $('td:eq(0)', nRow).html( '<label class="container"><input type="checkbox"><span class="checkmark"></span></label>' );
},
responsive: true,
buttons: true,
length: 10,
/*exporting */
dom: 'Bfrtip',
buttons: [
'copy', 'csv', 'excel', 'pdf', 'print','pageLength'
],
select: {
style:    'multi',
selector: 'td:first-child'
},
});
});
$('#btnFiterSubmitSearch').click(function(){
$('#laravel_datatable').DataTable().draw(true);
});
</script>
{{-- ChartScript --}}
@if($UsahaChart)
{!! $UsahaChart->script() !!}
@endif
@endsection