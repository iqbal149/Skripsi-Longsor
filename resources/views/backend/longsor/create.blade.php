@extends('layouts.app', ['activePage' => 'longsor', 'titlePage' => __('Tambah UMKM')])
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
                                <a class="nav-link active btn btn-light" data-toggle="tab" href="#link1"
                                    role="tablist" aria-expanded="true">
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
                                <a href="{{ route('tahun.longsor.index', $uuid) }}"
                                    class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                            </div>
                        </div>
                        <div class="tab-content tab-space">
                            <div class="tab-pane active" id="link1" aria-expanded="true">
                                <form method="post" action="{{ route('tahun.longsor.store', $uuid) }}" autocomplete="off"
                                    class="form-horizontal" enctype="multipart/form-data">
                                    @csrf
                                    @method('post')
                                    <div class="form-row">
                                        <div
                                            class="col-md-6 form-group {{ $errors->has('alamat') ? ' has-danger' : '' }}">
                                            <label>{{ __('Alamat') }}</label>
                                            <input class="form-control{{ $errors->has('alamat') ? ' is-invalid' : '' }}"
                                                name="alamat" id="input-alamat" type="text"
                                                placeholder="{{ __('Masukan Alamat Kejadian') }}"
                                                value="{{ old('alamat') }}" required="true" aria-required="true" />
                                            @if ($errors->has('alamat'))
                                            <span id="alamat-error" class="error text-danger"
                                                for="input-alamat">{{ $errors->first('alamat') }}</span>
                                            @endif
                                        </div>

                                        <div
                                            class="col-md-6 form-group {{ $errors->has('kecamatan') ? ' has-danger' : '' }}">
                                            <label>{{ __('Kecamatan') }}</label>
                                                <select class="form-control" id="foralamat" name="kecamatan">
                                                    <option disabled>Pilih Kecamatan</option>
                                                    <!-- Samarinda -->
                                                    <option value="Kec. Samarinda Ulu">Kec. Samarinda Ulu</option>
                                                    <option value="Kec. Samarinda Ilir">Kec. Samarinda llir</option>
                                                    <option value="Kec. Samarinda Utara">Kec. Samarinda Utara</option>
                                                    <option value="Kec. Samarinda Kota">Kec. Samarinda Kota</option>
                                                    <option value="Kec. Sungai Kunjang">Kec. Sungai Kunjang</option>
                                                    <option value="Kec. Sungai Pinang">Kec. Sungai Pinang</option>
                                                    <option value="Kec. Palaran">Kec. Palaran</option>
                                                    <option value="Kec. Loa Janan Ilir">Kec. Loa Janan Ilir</option>
                                                    <option value="Kec. Sambutan">Kec. Sambutan</option>
                                                    <option value="Kec. Samarinda Seberang">Kec. Samarinda Seberang</option>
                                                    <!-- Balikpapan -->
                                                    <option value="Kec. Balikpapan Utara">Kec. Balikpapan Utara</option>
                                                    <option value="Kec. Balikpapan Kota">Kec. Balikpapan Kota</option>
                                                    <option value="Kec. Balikpapan Barat">Kec. Balikpapan Barat</option>
                                                    <option value="Kec. Balikpapan Tengah">Kec. Balikpapan Tengah</option>
                                                    <option value="Kec. Balikpapan Selatan">Kec. Balikpapan Selatan</option>
                                                    <option value="Kec. Balikpapan Timur">Kec. Balikpapan Timur</option>
                                                    <!-- kukar -->
                                                    <option value="Kec. Anggana">Kec. Anggana</option>
                                                    <option value="Kec. Kembang Janggut">Kec. Kembang Janggut</option>
                                                    <option value="Kec. Kenohan">Kec. Kenohan</option>
                                                    <option value="Kec. Kota Bangun">Kec. Kota Bangun</option>
                                                    <option value="Kec. Kota Bangun Darat">Kec. Kota Bangun Darat</option>
                                                    <option value="Kec. Loa Kulu">Kec. Loa Kulu</option>
                                                    <option value="Kec. Loa Janan">Kec. Loa Janan</option>
                                                    <option value="Kec. Marang Kayu">Kec. Marang Kayu</option>
                                                    <option value="Kec. Muara Jawa">Kec. Muara Jawa</option>
                                                    <option value="Kec. Muara Muntai">Kec. Muara Muntai</option>
                                                    <option value="Kec. Muara Badak">Kec. Muara Badak</option>
                                                    <option value="Kec. Muara Kaman">Kec. Muara Kaman</option>
                                                    <option value="Kec. Muara Wis">Kec. Muara Wis</option>
                                                    <option value="Kec. Samboja">Kec. Samboja</option>
                                                    <option value="Kec. Samboja Barat">Kec. Samboja Barat</option>
                                                    <option value="Kec. Sanga-Sanga">Kec. Sanga-Sanga</option>
                                                    <option value="Kec. Sebulu">Kec. Sebulu</option>
                                                    <option value="Kec. Tabang">Kec. Tabang</option>
                                                    <option value="Kec. Tenggarong">Kec. Tenggarong</option>
                                                    <option value="Kec. Tenggarong Seberang">Kec. Tenggarong Seberang</option>
                                                    <option value="Kec. Long Bangun">Kec. Long Bangun</option>

                                              
                                                    <!-- kutim -->
                                                    <option value="Kec. Batu Ampar">Kec. Batu Ampar</option>
                                                    <option value="Kec. Bengalon">Kec. Bengalon</option>
                                                    <option value="Kec. Busang">Kec. Busang</option>
                                                    <option value="Kec. Kaliorang">Kec. Kaliorang</option>
                                                    <option value="Kec. Karangan">Kec. Karangan</option>
                                                    <option value="Kec. Kaubun">Kec. Kaubun</option>
                                                    <option value="Kec. Kombeng">Kec. Kombeng</option>
                                                    <option value="Kec. Long Mesangat">Kec. Long Mesangat</option>
                                                    <option value="Kec. Muara Ancalong">Kec. Muara Ancalong</option>
                                                    <option value="Kec. Muara Wahau">Kec. Muara Wahau</option>
                                                    <option value="Kec. Muara Bengkal">Kec. Muara Bengkal</option>
                                                    <option value="Kec. Rantau Pulung">Kec. Rantau Pulung</option>
                                                    <option value="Kec. Sandaran">Kec. Sandaran</option>
                                                    <option value="Kec. Sangatta Selatan">Kec. Sangatta Selatan</option>
                                                    <option value="Kec. Sangatta Utara">Kec. Sangatta Utara</option>
                                                    <option value="Kec. Sangkulirang">Kec. Sangkulirang</option>
                                                    <option value="Kec. Telen">Kec. Telen</option>
                                                    <option value="Kec. Teluk Pandan">Kec. Teluk Pandan</option>
                                                    
                                                    
                                                    <!-- paser -->
                                                    
                                                    
                                                    <option value="Kec. Batu Engau">Kec. Batu Engau</option>
                                                    <option value="Kec. Batu Sopang">Kec. Batu Sopang</option>
                                                    <option value="Kec. Kuaro">Kec. Kuaro</option>
                                                    <option value="Kec. Long Ikis">Kec. Long Ikis</option>
                                                    <option value="Kec. Long Kali">Kec. Long Kali</option>
                                                    <option value="Kec. Muara Komam">Kec. Muara Komam</option>
                                                    <option value="Kec. Muara Samu">Kec. Muara Samu</option>
                                                    <option value="Kec. Paser Belengkong">Kec. Paser Belengkong</option>
                                                    <option value="Kec. Tanah Grogot">Kec. Tanah Grogot</option>
                                                    <option value="Kec. Tanjung Harapan">Kec. Tanjung Harapan</option>

                                                    <!-- berau     -->
                                                    <option value="Kec. Makajang">Kec. Makajang</option>
                                                    <option value="Kec. Batu Putih">Kec. Batu Putih</option>
                                                    <option value="Kec. Biatan">Kec. Biatan</option>
                                                    <option value="Kec. Biduk-Biduk">Kec. Biduk-Biduk</option>
                                                    <option value="Kec. Gunung Tabur">Kec. Gunung Tabur</option>  
                                                    <option value="Kec. Kelay">Kec. Kelay</option>
                                                    <option value="Kec. Maratua">Kec. Maratua</option>
                                                    <option value="Kec. Pulau Derawan">Kec. Pulau Derawan</option>
                                                    <option value="Kec. Sambaliung">Kec. Sambaliung</option>
                                                    <option value="Kec. Segah">Kec. Segah</option>
                                                    <option value="Kec. Tabalar">Kec. Tabalar</option>
                                                    <option value="Kec. Talisayan">Kec. Tabalar</option>
                                                    <option value="Kec. Tanjung Redeb">Kec. Tanjung Redeb</option>
                                                    <option value="Kec. Teluk Bayur">Kec. Teluk Bayur</option>
                                                    <!-- tarakan   -->
                                                    <option value="Kec. Tarakan Tengah">Kec. Tarakan Tengah</option>
                                                    <option value="Kec. Tarakan Timur">Kec. Tarakan Timur</option>
                                                    <option value="Kec. Tarakan Barat">Kec. Tarakan Barat</option>
                                                    <!-- bulungan -->
                                                    <option value="Kec. Sekatak">Kec. Sekatak</option>
                                                    <option value="Kec. Tanjung Palas">Kec. Tanjung Palas</option>
                                                    <!-- bontang -->
                                                    <option value="Kec. Bontang Barat">Kec. Bontang Barat</option>
                                                    <option value="Kec. Bontang Utara">Kec. Bontang Utara</option>
                                                    <option value="Kec. Bontang Selatan">Kec. Bontang Selatan</option>
                                                    <!-- kubar -->
                                                    <option value="Kec. Barong Tongkok">Kec. Barong Tongkok</option>
                                                    <option value="Kec. Bentian Besar">Kec. Bentian Besar</option>
                                                    <option value="Kec. Bongan">Kec. Bongan</option>
                                                    <option value="Kec. Damai">Kec. Damai</option>
                                                    <option value="Kec. Jempang">Kec. Jempang</option>
                                                    <option value="Kec. Linggang Bigung">Kec. Linggang Bigung</option>
                                                    <option value="Kec. Long Iram">Kec. Long Iram</option>
                                                    <option value="Kec. Melak">Kec. Melak</option>
                                                    <option value="Kec. Mook Manaar bulatn">Kec. Mook Manaar bulatn</option>
                                                    <option value="Kec. Muara Lawa">Kec. Muara Lawa</option>
                                                    <option value="Kec. Muara Pahu">Kec. Muara Pahu</option>
                                                    <option value="Kec. Nyuatan">Kec. Nyuatan</option>
                                                    <option value="Kec. Penyinggahan">Kec. Penyinggahan</option>
                                                    <option value="Kec. Sekolaq Darat">Kec. Sekolaq Darat</option>
                                                    <option value="Kec. Siluq Ngurai">Kec. Siluq Ngurai</option>
                                                    <option value="Kec. Tering">Kec. Tering</option>
                                                    <!-- PPU -->
                                                    <option value="Kec. Babulu">Kec. Babulu</option>
                                                    <option value="Kec. Penajam">Kec. Penajam</option>
                                                    <option value="Kec. Sepaku">Kec. Sepaku</option>
                                                    <option value="Kec. Waru">Kec. Waru</option>

                                                </select>
                                            @if ($errors->has('kecamatan'))
                                            <span id="kecamatan-error" class="error text-danger"
                                                for="input-kecamatan">{{ $errors->first('kecamatan') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-sm-6">
                                            <div class="form-group {{ $errors->has('tgl') ? ' has-danger' : '' }}">
                                                <label>{{ __('Tanggal Kejadian') }}</label>
                                                <input
                                                    class="form-control{{ $errors->has('tgl') ? ' is-invalid' : '' }}"
                                                    name="tgl" id="input-tgl" type="Date"
                                                    placeholder="{{ __('Masukan Tanggal') }}"
                                                    value="{{ old('tgl') }}" required="true" aria-required="true" />
                                                @if ($errors->has('tgl'))
                                                <span id="tgl-error" class="error text-danger"
                                                    for="input-tgl">{{ $errors->first('tgl') }}</span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div
                                                class="form-group {{ $errors->has('kb_meninggal') ? ' has-danger' : '' }}">
                                                <label>{{ __('Korban Meninggal') }}</label>
                                                <input
                                                    class="form-control{{ $errors->has('kb_meninggal') ? ' is-invalid' : '' }}"
                                                    name="kb_meninggal" id="input-kb_meninggal" type="text"
                                                    placeholder="{{ __('Masukan Jumlah Korban Meninggal') }}"
                                                    value="{{ old('kb_meninggal') }}" required="true"
                                                    aria-required="true" />
                                                @if ($errors->has('kb_meninggal'))
                                                <span id="kb_meninggal-error" class="error text-danger"
                                                    for="input-kb_meninggal">{{ $errors->first('kb_meninggal') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-sm-6">
                                            <div
                                                class="form-group {{ $errors->has('kb_hilang') ? ' has-danger' : '' }}">
                                                <label>{{ __('Korban Hilang') }}</label>
                                                <input
                                                    class="form-control{{ $errors->has('kb_hilang') ? ' is-invalid' : '' }}"
                                                    name="kb_hilang" id="input-kb_hilang" type="text"
                                                    placeholder="{{ __('Masukan Jumlah Korban Hilang') }}"
                                                    value="{{ old('kb_hilang') }}" required="true"
                                                    aria-required="true" />
                                                @if ($errors->has('kb_hilang'))
                                                <span id="kb_hilang-error" class="error text-danger"
                                                    for="input-kb_hilang">{{ $errors->first('kb_hilang') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group {{ $errors->has('kb_luka') ? ' has-danger' : '' }}">
                                                <label>{{ __('Korban Luka') }}</label>
                                                <input
                                                    class="form-control{{ $errors->has('kb_luka') ? ' is-invalid' : '' }}"
                                                    name="kb_luka" id="input-kb_luka" type="text"
                                                    placeholder="{{ __('Masukan Jumlah Korban Luka') }}"
                                                    value="{{ old('kb_luka') }}" required="true" aria-required="true" />
                                                @if ($errors->has('kb_luka'))
                                                <span id="kb_luka-error" class="error text-danger"
                                                    for="input-kb_luka">{{ $errors->first('kb_luka') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-sm-6">
                                            <div
                                                class="form-group {{ $errors->has('kb_mengungsi') ? ' has-danger' : '' }}">
                                                <label>{{ __('Korban Mengungsi') }}</label>
                                                <input
                                                    class="form-control{{ $errors->has('kb_mengungsi') ? ' is-invalid' : '' }}"
                                                    name="kb_mengungsi" id="input-kb_mengungsi" type="text"
                                                    placeholder="{{ __('Masukan Jumlah Korban Mengungsi') }}"
                                                    value="{{ old('kb_mengungsi') }}" required="true"
                                                    aria-required="true" />
                                                @if ($errors->has('kb_mengungsi'))
                                                <span id="kb_mengungsi-error" class="error text-danger"
                                                    for="input-kb_mengungsi">{{ $errors->first('kb_mengungsi') }}</span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div
                                                class="form-group {{ $errors->has('kr_rumah_rb') ? ' has-danger' : '' }}">
                                                <label>{{ __('Rumah Rusak Berat') }}</label>
                                                <input
                                                    class="form-control{{ $errors->has('kr_rumah_rb') ? ' is-invalid' : '' }}"
                                                    name="kr_rumah_rb" id="input-kr_rumah_rb" type="text"
                                                    placeholder="{{ __('Masukan Jumlah Rumah Rusak Berat') }}"
                                                    value="{{ old('kr_rumah_rb') }}" required="true"
                                                    aria-required="true" />
                                                @if ($errors->has('kr_rumah_rb'))
                                                <span id="kr_rumah_rb-error" class="error text-danger"
                                                    for="input-kr_rumah_rb">{{ $errors->first('kr_rumah_rb') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-sm-6">
                                            <div
                                                class="form-group {{ $errors->has('kr_rumah_rr') ? ' has-danger' : '' }}">
                                                <label>{{ __('Rumah Rusak Ringan') }}</label>
                                                <input
                                                    class="form-control{{ $errors->has('kr_rumah_rr') ? ' is-invalid' : '' }}"
                                                    name="kr_rumah_rr" id="input-kr_rumah_rr" type="text"
                                                    placeholder="{{ __('Masukan Jumlah Rumah Rusak Ringan') }}"
                                                    value="{{ old('kr_rumah_rr') }}" required="true"
                                                    aria-required="true" />
                                                @if ($errors->has('kr_rumah_rr'))
                                                <span id="kr_rumah_rr-error" class="error text-danger"
                                                    for="input-kr_rumah_rr">{{ $errors->first('kr_rumah_rr') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div
                                                class="form-group {{ $errors->has('kr_rumah_terendam') ? ' has-danger' : '' }}">
                                                <label>{{ __('Rumah Terendam') }}</label>
                                                <input
                                                    class="form-control{{ $errors->has('kr_rumah_terendam') ? ' is-invalid' : '' }}"
                                                    name="kr_rumah_terendam" id="input-kr_rumah_terendam" type="text"
                                                    placeholder="{{ __('Masukan Jumlah Rumah Terendam') }}"
                                                    value="{{ old('kr_rumah_terendam') }}" required="true"
                                                    aria-required="true" />
                                                @if ($errors->has('kr_rumah_terendam'))
                                                <span id="kr_rumah_terendam-error" class="error text-danger"
                                                    for="input-kr_rumah_terendam">{{ $errors->first('kr_rumah_terendam') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-sm-6">
                                            <div class="form-group {{ $errors->has('kantor') ? ' has-danger' : '' }}">
                                                <label>{{ __('Kantor') }}</label>
                                                <input
                                                    class="form-control{{ $errors->has('kantor') ? ' is-invalid' : '' }}"
                                                    name="kantor" id="input-kantor" type="text"
                                                    placeholder="{{ __('Masukan Jumlah Kantor') }}"
                                                    value="{{ old('kantor') }}" required="true" aria-required="true" />
                                                @if ($errors->has('kantor'))
                                                <span id="kantor-error" class="error text-danger"
                                                    for="input-kantor">{{ $errors->first('kantor') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group {{ $errors->has('sekolah') ? ' has-danger' : '' }}">
                                                <label>{{ __('Sekolah') }}</label>
                                                <input
                                                    class="form-control{{ $errors->has('sekolah') ? ' is-invalid' : '' }}"
                                                    name="sekolah" id="input-sekolah" type="text"
                                                    placeholder="{{ __('Masukan Jumlah Sekolah') }}"
                                                    value="{{ old('sekolah') }}" required="true" aria-required="true" />
                                                @if ($errors->has('sekolah'))
                                                <span id="sekolah-error" class="error text-danger"
                                                    for="input-sekolah">{{ $errors->first('sekolah') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-sm-6">
                                            <div class="form-group {{ $errors->has('t_ibadah') ? ' has-danger' : '' }}">
                                                <label>{{ __('Tempat Ibadah') }}</label>
                                                <input
                                                    class="form-control{{ $errors->has('t_ibadah') ? ' is-invalid' : '' }}"
                                                    name="t_ibadah" id="input-t_ibadah" type="text"
                                                    placeholder="{{ __('Masukan Jumlah Tempat Ibadah') }}"
                                                    value="{{ old('t_ibadah') }}" required="true"
                                                    aria-required="true" />
                                                @if ($errors->has('t_ibadah'))
                                                <span id="t_ibadah-error" class="error text-danger"
                                                    for="input-t_ibadah">{{ $errors->first('t_ibadah') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div
                                                class="form-group {{ $errors->has('sarana_kesehatan') ? ' has-danger' : '' }}">
                                                <label>{{ __('Sarana Kesehatan') }}</label>
                                                <input
                                                    class="form-control{{ $errors->has('sarana_kesehatan') ? ' is-invalid' : '' }}"
                                                    name="sarana_kesehatan" id="input-sarana_kesehatan" type="text"
                                                    placeholder="{{ __('Masukan Jumlah Sarana Kesehatan') }}"
                                                    value="{{ old('sarana_kesehatan') }}" required="true"
                                                    aria-required="true" />
                                                @if ($errors->has('sarana_kesehatan'))
                                                <span id="sarana_kesehatan-error" class="error text-danger"
                                                    for="input-sarana_kesehatan">{{ $errors->first('sarana_kesehatan') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-sm-6">
                                            <div
                                                class="form-group {{ $errors->has('bangunan_lain') ? ' has-danger' : '' }}">
                                                <label>{{ __('Bangunan Lain') }}</label>
                                                <input
                                                    class="form-control{{ $errors->has('bangunan_lain') ? ' is-invalid' : '' }}"
                                                    name="bangunan_lain" id="input-bangunan_lain" type="text"
                                                    placeholder="{{ __('Masukan Jumlah Bangunan Lain') }}"
                                                    value="{{ old('bangunan_lain') }}" required="true"
                                                    aria-required="true" />
                                                @if ($errors->has('bangunan_lain'))
                                                <span id="bangunan_lain-error" class="error text-danger"
                                                    for="input-bangunan_lain">{{ $errors->first('bangunan_lain') }}</span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group {{ $errors->has('jembatan') ? ' has-danger' : '' }}">
                                                <label>{{ __('Jembatan') }}</label>
                                                <input
                                                    class="form-control{{ $errors->has('jembatan') ? ' is-invalid' : '' }}"
                                                    name="jembatan" id="input-jembatan" type="text"
                                                    placeholder="{{ __('Masukan Jumlah Jembatan') }}"
                                                    value="{{ old('jembatan') }}" required="true"
                                                    aria-required="true" />
                                                @if ($errors->has('jembatan'))
                                                <span id="jembatan-error" class="error text-danger"
                                                    for="input-jembatan">{{ $errors->first('jembatan') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-sm-6">
                                            <div class="form-group {{ $errors->has('jalan') ? ' has-danger' : '' }}">
                                                <label>{{ __('Jalan') }}</label>
                                                <input
                                                    class="form-control{{ $errors->has('jalan') ? ' is-invalid' : '' }}"
                                                    name="jalan" id="input-jalan" type="text"
                                                    placeholder="{{ __('Masukan Jumlah Jalan') }}"
                                                    value="{{ old('jalan') }}" required="true" aria-required="true" />
                                                @if ($errors->has('jalan'))
                                                <span id="jalan-error" class="error text-danger"
                                                    for="input-jalan">{{ $errors->first('jalan') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group {{ $errors->has('sawah') ? ' has-danger' : '' }}">
                                                <label>{{ __('Sawah') }}</label>
                                                <input
                                                    class="form-control{{ $errors->has('sawah') ? ' is-invalid' : '' }}"
                                                    name="sawah" id="input-sawah" type="text"
                                                    placeholder="{{ __('Masukan Jumlah Sawah') }}"
                                                    value="{{ old('sawah') }}" required="true" aria-required="true" />
                                                @if ($errors->has('sawah'))
                                                <span id="sawah-error" class="error text-danger"
                                                    for="input-sawah">{{ $errors->first('sawah') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-sm-6">
                                            <div class="form-group {{ $errors->has('hutan') ? ' has-danger' : '' }}">
                                                <label>{{ __('Hutan') }}</label>
                                                <input
                                                    class="form-control{{ $errors->has('hutan') ? ' is-invalid' : '' }}"
                                                    name="hutan" id="input-hutan" type="text"
                                                    placeholder="{{ __('Masukan Jumlah Hutan') }}"
                                                    value="{{ old('hutan') }}" required="true" aria-required="true" />
                                                @if ($errors->has('hutan'))
                                                <span id="hutan-error" class="error text-danger"
                                                    for="input-hutan">{{ $errors->first('hutan') }}</span>
                                                @endif
                                            </div>
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
                                            template
                                            excel
                                            dibawah ini, kemudian silahkan isi datanya. Kemudian anda dapat mengupload
                                            kembali file
                                            tersebut dibawah ini. </p>
                                        <div class="form-group">
                                            <label>{{ __('Unduh Template') }}</label><br>
                                            <a href="{{ route('template.longsor') }}"
                                                class="btn btn-md btn-success">{{ __('Unduh') }}</a>
                                        </div>
                                    </div>
                                </div>
                                <form method="post" action="{{ route('tahun.longsor.import', $uuid) }}" autocomplete="off"
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
        <script>
            var map = new google.maps.Map(document.getElementById('map-container-google-11'), {
                center: {
                    lat: -0.4574384,
                    lng: 117.1528078
                },
                zoom: 15
            });
            var marker = new google.maps.Marker({
                position: {
                    lat: -0.4574384,
                    lng: 117.1528078
                },
                map: map,
                draggable: true
            });
            google.maps.event.addListener(marker, 'position_changed', function () {
                var lat = marker.getPosition().lat();
                var lng = marker.getPosition().lng();
                $('#latitude').val(lat);
                $('#longitude').val(lng);
            });

        </script>
        @endsection
