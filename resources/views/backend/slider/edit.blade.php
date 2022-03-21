@extends('layouts.app', ['activePage' => 'slider', 'titlePage' => __('Manajemen Data Slider')])
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <form method="post" action="{{ route('slider.update', $slider->id) }}" autocomplete="off" class="form-horizontal" enctype="multipart/form-data">
          @csrf
          @method('PATCH')
          <div class="card ">
            <div class="card-header card-header-primary">
              <h4 class="card-title">{{ __('Edit Data Slider') }}</h4>
              <p class="card-category"></p>
            </div>
            <div class="card-body ">
              <div class="row">
                <div class="col-md-12 text-right">
                  <a href="{{ route('slider.index') }}" class="btn btn-sm btn-primary">{{ __('Kembali') }}</a>
                </div>
              </div>
              <div class="row">
                <label class="col-sm-2 col-form-label">{{ __('Nama') }}</label>
                <div class="col-sm-7">
                  <div class="form-group{{ $errors->has('nama') ? ' has-danger' : '' }}">
                    <input class="form-control{{ $errors->has('nama') ? ' is-invalid' : '' }}" name="nama" id="input-nama" type="text" placeholder="{{ __('Nama') }}" value="{{ old('nama', $slider->nama) }}" required="true" aria-required="true"/>
                    @if ($errors->has('nama'))
                    <span id="nama-error" class="error text-danger" for="input-nama">{{ $errors->first('nama') }}</span>
                    @endif
                  </div>
                </div>
              </div>
              <div class="row">
                <label class="col-sm-2 col-form-label">{{ __('Deskripsi') }}</label>
                <div class="col-sm-7">
                  <div class="form-group{{ $errors->has('deskripsi') ? ' has-danger' : '' }}">
                    <textarea rows="7" class="form-control{{ $errors->has('deskripsi') ? ' is-invalid' : '' }}" name="deskripsi" id="input-deskripsi" type="text" placeholder="{{ __('Deskripsi') }}" value="" required>{{ old('deskripsi', $slider->deskripsi) }}</textarea>
                    @if ($errors->has('deskripsi'))
                    <span id="deskripsi-error" class="error text-danger" for="input-deskripsi">{{ $errors->first('deskripsi') }}</span>
                    @endif
                  </div>
                </div>
              </div>
              <div class="row">
                <label class="col-sm-2 col-form-label">{{ __('Foto') }}</label>
                <div class="col-sm-7">
                  <div class="fileinput fileinput-exists text-center" data-provides="fileinput">
                    <div class="fileinput-new img-thumbnail img-raised" style="width: 400px; height: 300px;">
                      <img data-src="holder.js/100%x100%"  alt="">
                    </div>
                    <div class="fileinput-preview fileinput-exists img-thumbnail img-raised" style="max-width: 400px; max-height: 300px;">
                      <img src="{{ $slider->foto }}"/>
                    </div>
                    <div>
                      <span class="btn btn-raised btn-round btn-rose btn-file">
                        <span class="fileinput-new">Select image</span>
                        <span class="fileinput-exists">Change</span>
                        <input type="file" name="foto" id="imagetest">
                      </span>
                      <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput">
                      <i class="fa fa-times"></i> Remove</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  @endsection
  @push('js')
<script type="text/javascript">
function readImage(input){
if (input.files && input.files[0]) {
var reader = new FileReader();
reader.onload = function(e){
$('#image-tag').attr('src', e.target.result);
}
reader.readAsDataURL(input.files[0]);
console.log(reader);
}
}
$("#imagetest").change(function(){
readImage(this);
});
function readIcon(input){
if (input.files && input.files[0]) {
var reader = new FileReader();
reader.onload = function(e){
$('#icon-tag').attr('src', e.target.result);
}
reader.readAsDataURL(input.files[0]);
console.log(reader);
}
}
$("#icontest").change(function(){
readIcon(this);
});
function readIconMarker(input){
if (input.files && input.files[0]) {
var reader = new FileReader();
reader.onload = function(e){
$('#icon-marker-tag').attr('src', e.target.result);
}
reader.readAsDataURL(input.files[0]);
console.log(reader);
}
}
$("#icon-marker").change(function(){
readIconMarker(this);
});
</script>
@endpush