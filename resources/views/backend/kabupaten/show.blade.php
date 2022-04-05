@extends('layouts.app', ['activePage' => 'master-tour', 'titlePage' => __('Master Tour')])
@section('content')
<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="card card-plain">
					<div class="card-header card-header-primary">
						<h4 class="card-title">{{ __('Detail Master Tour') }}</h4>
						<p class="card-category"></p>
					</div>
					<div class="card-body ">
						<div class="row">
							<div class="col-md-12 text-right">
								<a href="{{ route('mastertour.index') }}" class="btn btn-sm btn-primary">{{ __('Kembali') }}</a>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-2">
								<label>{{ __('Nama') }}</label>
							</div>
							<div class="col-sm-1">:</div>
							<div class="col-sm-5">
								<label>{{ $mastertour->nama }}</label>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-2">
								<label>{{ __('Deskripsi') }}</label>
							</div>
							<div class="col-sm-1">:</div>
							<div class="col-sm-5">
								<label>{{ $mastertour->deskripsi }}</label>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection