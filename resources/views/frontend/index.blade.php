@extends('frontend.master')
@section('content')
    <section class="home-slider">
        <div class="slider-item">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text align-items-center justify-content-center">
                    <div class="col-md-10 ftco-animate text-center">
                        <h1 class="mb-4">I love
                            <strong class="typewrite" data-period="4000"
                                data-type='[ "Tanah Longsor.", "Kalimantan Timur.", "Indonesia."]'>
                                <span class="wrap"></span>
                            </strong>
                        </h1>
                        <p>“Tanah longsor adalah perpindahan material pembentuk lereng berupa batuan, bahan rombakan, tanah,
                            atau material campuran tersebut, bergerak ke bawah atau keluar lereng.”</p>
                        <!-- <p><a href="https://vimeo.com/45830194" class="btn btn-primary btn-outline-white px-4 py-3 popup-vimeo"><span class="ion-ios-play mr-2"></span> Watch Video</a></p> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END slider -->
    {{-- <section class="ftco-section-featured ftco-animate">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="carousel owl-carousel">
          @foreach (App\Slider::latest()->get() as $i => $slider)
          <div class="item">
            <a href="#">
              <img src="{{ $slider->foto }}" class="img-fluid" alt="">
            </a>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</section> --}}
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <span class="subheading">Bencana Tanah Longsor</span>
                    <h2>KATEGORI BENCANA</h2>
                </div>
            </div>
            <div class="row justify-content-center text-center">
                <div class="col-md-4 d-flex align-self-stretch justify-content-center ftco-animate">
                    <div class="media block-6 services d-block text-center">
                        <div class="d-flex justify-content-center text-center">
                            <div class="icon color-1 d-flex justify-content-center mb-3">
                                <span class="align-self-center icon-gears"></span>
                            </div>
                        </div>
                        <div class="media-body p-2">
                            <h3 class="heading">Risiko Rendah</h3>
                            {{-- <p>Merupakan suatu badan usaha yang mempunyai kekayaan bersih dibawah Rp 50.000.000,- per bulan dalam hal tersebut pembangunan dan juga tempat usaha tidak termasuk hitungan.</p> --}}
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex align-self-stretch justify-content-center ftco-animate">
                    <div class="media block-6 services d-block text-center">
                        <div class="d-flex justify-content-center">
                            <div class="icon color-2 d-flex justify-content-center mb-3">
                                <span class="align-self-center icon-gears"></span>
                            </div>
                        </div>
                        <div class="media-body p-2">
                            <h3 class="heading">Risiko Sedang</h3>
                            {{-- <p>Merupakan sebuah usaha yang dikelola oleh perorangan dan juga bukan dengan melalui badan
                                usaha. Memiliki kekayaan bersih dibawah Rp 300.000.000,- per tahun.</p> --}}
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex align-self-stretch justify-content-center ftco-animate">
                    <div class="media block-6 services d-block text-center">
                        <div class="d-flex justify-content-center">
                            <div class="icon color-3 d-flex justify-content-center mb-3">
                                <span class="align-self-center icon-gears"></span>
                            </div>
                        </div>
                        <div class="media-body p-2">
                            <h3 class="heading">Risiko Tinggi</h3>
                            {{-- <p>Merupakan sebuah badan usaha dengan keuntungan bersih tidak lebih dari Rp 500.000.000,- per bulan. Perhitungan tidak termasuk kekayaan tanah serta juga bangunan.</p> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section-parallax">
        <div class="parallax-img d-flex align-items-center">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-10 text-center heading-section heading-section-white ftco-animate">
                        <h2 class="h1 font-weight-bold">Chart Data Longsor</h2>
                        <!-- <p><a href="#" class="btn btn-primary btn-outline-white mt-3 py-3 px-4">View more details</a></p> -->
                        <div id="app">
                            {{-- {!! $UsahaChart->container() !!} --}}
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
                    <span class="subheading">Bencana Tanah Longsor</span>
                    <h2>Data Kejadian Per Kecamatan</h2>
                </div>
                <div class="component">
                    {{-- <h2>Tabel UMKM</h2> --}}
                    {{-- <p>Rekap data UMKM Sungai Kapih &mdash; data masih dalam tahap pengumpulan.</p> --}}
                    {{-- <table id="datatable"> --}}
                    <table class="table display datatable" id="datatable">
                        <thead>
                            <tr>
                                <th>{{ __('No.') }}</th>
                                <th>{{ __('Kecamatan') }}</th>
                                <th>{{ __('Total Kejadian') }}</th>
                                <th>{{ __('Total Korban') }}</th>
                                <th>{{ __('Total Kerusakan') }}</th>
                                <th>{{ __('Detail') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $dataRekap = json_decode($rekap);
                            @endphp
                            @foreach ($dataRekap as $key => $value)
                                <tr>
                                    <td>{{ ++$key }}</td>
                                    <td class="text-left"><strong>{{ $value->kecamatan }}</strong></td>
                                    <td><strong>{{ $value->kejadian }}</strong></td>
                                    <td><strong>{{ $value->korban }}</strong></td>
                                    <td><strong>{{ $value->kerusakan }}</strong></td>
                                    <td class="text-center">
                                        <a rel="tooltip" class="btn btn-md"
                                            href="{{ route('kejadian.show', $value->kecamatan) }}" data-original-title=""
                                            title="Lihat Data Kejadian">
                                            <i class="fa-solid fa-eye"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>{{ __('No.') }}</th>
                                <th>{{ __('Kecamatan') }}</th>
                                <th>{{ __('Total Kejadian') }}</th>
                                <th>{{ __('Total Korban') }}</th>
                                <th>{{ __('Total Kerusakan') }}</th>
                                <th>{{ __('Detail') }}</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
        </div>
    </section>
    {{-- <section class="ftco-section ftco-counter ftco-degree-bg" id="section-counter">
        <div class="container">
            <div class="row justify-content-center mb-1 pb-5">
                <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
                    <h2>Jumlah UMKM di Sungai Kapih</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 text-center">
                        <div class="text"
                            style="padding: 20px 10px 20px 10px; border-radius: 10px; background-color: rgba(51, 117, 209, 0.85); min-width: 200px;">
                            <strong class="number" data-number="{{App\Usaha::where('kategori','mikro')->count()}}">0</strong>
                            <span>Kategori Mikro</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 text-center">
                        <div class="text"
                            style="padding: 20px 10px 20px 10px; border-radius: 10px; background-color: rgba(51, 117, 209, 0.85); min-width: 200px;">
                            <strong class="number" data-number="{{App\Usaha::where('kategori','kecil')->count()}}">0</strong>
                            <span>Kategori Kecil</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 text-center">
                        <div class="text"
                            style="padding: 20px 10px 20px 10px; border-radius: 10px; background-color: rgba(51, 117, 209, 0.85); min-width: 200px;">
                            <strong class="number" data-number="{{App\Usaha::where('kategori','menengah')->count()}}">0</strong>
                            <span>Kategori Menengah</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
@endsection
@section('js')
    {{--  --}}
    <script>
        $(document).ready(function() {
            $('table.datatable').DataTable({
                // responsive: true,

                "lengthMenu": [
                    [10, 25, 50, -1],
                    [10, 25, 50, "All"]
                ], // page length options

                "dom": 'Bfrtip',
                "buttons": ['copy', 'csv', 'excel', 'pdf', 'print', 'pageLength'],

            });
        });
    </script>
@endsection
