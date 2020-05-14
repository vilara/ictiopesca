@extends('layouts.app') @section('title','Usuários') @section('content')




<div class="container">
	<div class="row justify-content-center">

		<div class="col-md-8" >




			<div class="card">
			
			<div class="card-header ">
					<div class="row">
						<div class="col-md-10">
							<h3>{{ __('Edição do perfil de: ') }}{{$profiles->user->name}}</h3>
						</div>
						<div class="col-md-2 py-auto">
							<a href="/usuarios" class="btn btn-success">Voltar</a>
						</div>
					</div>
				</div>
				
				
				<div class="card-body">
				
							<form  class="form-horizontal" method="POST" action="{{ route('profiles.store') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="instituicao" class="col-md-4 col-form-label text-md-right">{{ __('Instituição') }}</label>

                            <div class="col-md-6">
                                <input id="instituicao" type="text" class="form-control @error('instituicao') is-invalid @enderror" name="instituicao" value="{{ old('instituicao') ?? $profiles->instituicao }}" disabled="disabled"  autocomplete="instituicao" autofocus>

                                @error('instituicao')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        
                        <div class="form-group row">
                            <label for="perfil" class="col-md-4 col-form-label text-md-right">{{ __('Perfil') }}</label>

                            <div class="col-md-6">
                                <input id="perfil" type="text" class="form-control @error('perfil') is-invalid @enderror" name="perfil" value="{{ old('perfil') ?? $profiles->perfil }}" disabled="disabled"   autocomplete="perfil" autofocus>

                                @error('perfil')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        
                        <div class="row justify-content-md-center">
							<div class="col-md-2">
								<a href="{{ route('profiles.edit',$profiles->id) }}" type="submit"
									class="btn btn-success"> {{ __('Editar') }} </a>
							</div>
						
						</div>
                        
				</form>
				
				</div>
			</div>
			
			
		</div>
	</div>
</div>
@endsection
