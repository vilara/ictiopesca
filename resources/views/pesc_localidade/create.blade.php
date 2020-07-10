@extends('layouts.app')
@section('title','Ictiopesca')
@section('content')

<div class="app-title">
	<div>
		<h1>
			<i class="fa fa-dashboard"></i> Localidade de pesca
		</h1>
	</div>
	
	<ul class="app-breadcrumb breadcrumb">
		<li class="breadcrumb-item"><a href="/home"><i
				class="fa fa-home fa-lg"></i></a></li>
		<li class="breadcrumb-item"><a href="#">Cadastro de nova localidade</a></li>
	</ul>
	
</div>

<div class="row">
	<div class="col-md-12">

		@if(session('success'))

		<div class="row">
			<div class="col-lg-12">
				<div class="alert alert-dismissible alert-success">
					<button class="close" type="button" data-dismiss="alert">×</button>
					<p>{{session('success')}}</p>
				</div>
			</div>
		</div>

		@endif
		@can('delete')
		<div class="tile">
			<h3 class="tile-title">Nova Localidade</h3>
			
			<div class="tile-body">
			
				<form class="form-row" method="POST"
					action="{{ route('pesc_localidades.store') }}">
					@csrf
					
					<div class="form-group col-md-4">
						<label class="control-label">Localidade</label> <input
							id="localidade" type="text"
							class="form-control @error('localidade') is-invalid @enderror"
							name="localidade" value="{{ old('localidade') }}" required
							autocomplete="off" autofocus> @error('localidade')
						<div class="alert alert-danger">{{ $message }}</div>
						@enderror
					</div>

					<div class="form-group col-md-4">
						<label class="exampleSelect1">Município</label> <select
							class="form-control" id="exampleSelect1" name="municipio_id"
							required>
							<option value=""></option> @foreach($municipios as $municipio)
							<option value="{{$municipio->id}}">{{$municipio->municipio}}</option>
							@endforeach
						</select>
					</div>
					
					<div class="form-group col-md-4 align-self-end">
						<button class="btn btn-primary" type="submit">
							<i class="fa fa-fw fa-lg fa-check-circle"></i>Cadastrar
						</button>
					</div>
					
				</form>
				
			</div>
			
		</div>

		@endcan
		<hr>


		<div class="tile">
			<h3 class="tile-title">Localidades</h3>
			<div class="table-responsive">
				<table class="table">
					<thead>
						<tr>
							<th>#</th>
							<th>Localidade</th>
							<th>Município</th>
							<th style="text-align: center; vertical-align: middle;">Ação</th>
						</tr>
					</thead>
					<tbody>
						@foreach($localidades as $localidade)
						@can('view', $localidade)
						<tr>
							<td>{{$localidade->id}}</td>
							<td><a href="{{ route('pesc_localidades.show',$localidade->id)}}"
								style="color: inherit;">{{ $localidade->loc }}</a></td>
							<td>{{$localidade->pesc_municipio['municipio']}}</td>
							<td>
								<div class="row">
									<div class="col-md-6 text-right pr-0" style="width: 70px;">
											@can('delete')
										<a class="text-right"
											href="{{ route('pesc_localidades.edit',$localidade->id) }}"
											style="text-decoration: none; color: black;">
											<i	class="fa fa-pencil" aria-hidden="true"></i>
										</a>
											@endcan
											&nbsp;&nbsp;&nbsp;&nbsp;|
									</div>

									<div class="col-md-6 text-left pl-0" style="width: 10px; height: 20px">
										<form class="form-group"
											action="{{ route('pesc_localidades.destroy',$localidade->id) }}"
											method="post">
											@method('DELETE') 
											@csrf 
											
											@can('delete')
											<button class="text-left border-0 bg-transparent" type="submit"	onclick="return confirm('Deseja mesmo excluir esta localidade?')">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-trash-o"	aria-hidden="true"></i></button>
											@endcan
										</form>
									</div>

								</div>
							</td>
						</tr>
						@endcan
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

@endsection



