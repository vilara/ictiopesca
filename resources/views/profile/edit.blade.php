@extends('layouts.app') @section('title','Usuários') @section('content')




<div class="container">
	<div class="row justify-content-center">

		<div class="col-md-8" >




			<div class="card">
			
			<div class="card-header ">
					<div class="row">
						<div class="col-md-10">
							<h3>{{ __('Edição do perfil de: ') }} {{$profiles->user->username}}</h3>
						</div>
						<div class="col-md-2 py-auto">
							<a href="/usuarios" class="btn btn-success">Voltar</a>
						</div>
					</div>
				</div>
				
				
				<div class="card-body">
				
							<form class="form-horizontal" method="post" action="{{ route('profiles.update', $profiles->id) }}">
       @method('PATCH') @csrf
                        <div class="form-group row">
                            <label for="instituicao" class="col-md-4 col-form-label text-md-right">{{ __('Instituição') }}</label>

                            <div class="col-md-6">
                                <input id="instituicao" type="text" class="form-control @error('instituicao') is-invalid @enderror" name="instituicao" value="{{ $profiles->instituicao }}" autocomplete="instituicao" autofocus>

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
                                <input id="perfil" type="text" class="form-control @error('perfil') is-invalid @enderror" name="perfil" value="{{ $profiles->perfil }}"  autocomplete="perfil" autofocus>

                                @error('perfil')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        
                   <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Editar') }}
                                </button>
                            </div>
                        </div>
                        
				</form>
				
				</div>
			</div>
			
			
		</div>
	</div>
</div>
@endsection
