@extends('layouts.app', ['activePage' => 'slider', 'titlePage' => __('Manajemen Data Slider')])
@section('content')
<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="card card-plain">
					<div class="card-header card-header-primary">
						<h4 class="card-title">{{ __('Detail ' .$slider->nama) }}</
						<p class="card-category"></p>
					</div>
					<div class="card-body ">
						<div class="row">
							<div class="col-md-12 text-right">
								<a href="{{ route('slider.index') }}" class="btn btn-sm btn-primary">{{ __('Kembali') }}</a>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<img class="card-img-top" src="{{ $slider->foto }}" alt="Card image cap">
							</div>
							<div class="col-md-8">
								<div class="row">
									<div class="col-sm-2">
										<label>{{ __('Nama') }}</label>
									</div>
									<div class="col-sm-1">:</div>
									<div class="col-sm-5">
										<label>{{ $slider->nama }}</label>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-2">
										<label>{{ __('Deskripsi') }}</label>
									</div>
									<div class="col-sm-1">:</div>
									<div class="col-sm-5">
										<label>{{ $slider->deskripsi }}</label>
									</div>
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