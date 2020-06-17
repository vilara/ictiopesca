@extends('layouts.app') @section('title','Espécies') @section('content')



<div class="app-title">
	<div>
		<h1>
			<i class="fa fa-dashboard"></i> Localidade
		</h1>
		<p>{{$pesc_localidade->localidade}}</p>
	</div>
	<ul class="app-breadcrumb breadcrumb">
		<li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
		<li class="breadcrumb-item"><a href="#">Mostrar</a></li>
	</ul>
</div>
<div class="tile">

	<h3 class="tile-title">Nova Localidade</h3>
	
	<div class="tile-body">
	
		<form class="form-row" method="post" action="{{ route('pesc_localidades.update', $pesc_localidade->id) }}">
			@method('PATCH') @csrf
			
    		<div class="form-group col-md-4">
    			<label for="localidade" class="control-label">Localidade</label>
    			<input type="text"	class="form-control @error('localidade') is-invalid @enderror"	name="localidade" value="{{ $pesc_localidade->localidade }}" required autofocus> 
    			@error('localidade') 
    			<span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong></span>
    			@enderror
    		</div>
    		
    		<div class="form-group col-md-4">
    			<label  class="exampleSelect1">Município</label>					
    			<select class="form-control" id="exampleSelect1" name="municipio_id" required >
    				<option  value="" ></option>
    				@foreach($municipios as $municipio) 
    				<option  value="{{$municipio->id}}" @if($municipio->id == $pesc_localidade->municipio_id) selected  @endif >{{$municipio->municipio}}</option>
    				@endforeach
    			</select>	
    		</div>
    		
    		<div class="form-group col-md-4 align-self-end">
    			<button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Alterar</button>
    		</div>
		</form>
		
	</div>
	
</div>




















			@endsection