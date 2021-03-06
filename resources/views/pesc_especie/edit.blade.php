@extends('layouts.app') @section('title','Espécies') @section('content')



<div class="app-title">
	<div>
		<h1>
			<i class="fa fa-dashboard"></i> Espécie
		</h1>
		<p>{{$pesc_especie->cat}}</p>
	</div>
	<ul class="app-breadcrumb breadcrumb">
		<li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
		<li class="breadcrumb-item"><a href="#">Mostrar</a></li>
	</ul>
</div>
<div class="row">
	<div class="col-md-12">
		<div class="tile">
			<h3 class="tile-title"><p>Espécie {{$pesc_especie->cat}}</p></h3>
			<div class="tile-body">

					<form class="form-horizontal" method="post"
						action="{{ route('pesc_especies.update', $pesc_especie->id) }}">
						@method('PATCH') @csrf


						<div class="form-group row">
							<label for="cat" class="col-md-4 col-form-label text-md-right">{{
								__('Categoria') }}</label>

							<div class="col-md-6">
								<input id="cat" type="text"
									class="form-control @error('cat') is-invalid @enderror"
									name="cat" value="{{ $pesc_especie->cat }}"
									required autofocus> @error('name') <span class="invalid-feedback"
									role="alert"> <strong>{{ $message }}</strong>
								</span> @enderror
							</div>
						</div>

						<div class="form-group row">
							<label for="cat_trof"
								class="col-md-4 col-form-label text-md-right">{{ __('Cat trof')
								}}</label>

							<div class="col-md-6">
								<input id="cat_trof" type="text"
									class="form-control @error('cat_trof') is-invalid @enderror"
									name="cat_trof" value="{{ $pesc_especie->cat_trof }}"
									autofocus> @error('cat_trof') <span
									class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong>
								</span> @enderror
							</div>
						</div>
						
						<div class="form-group col-md-4 align-self-end">
						<button class="btn btn-primary" type="submit">
							<i class="fa fa-fw fa-lg fa-check-circle"></i>Alterar
						</button>
					</div>

						
					






					</form>


				</div>
			</div>




















			@endsection