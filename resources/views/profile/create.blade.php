@extends('layouts.app') @section('title','Usuários') @section('content')
<div class="container">
	<div class="row justify-content-center">

		<div class="col-md-8">
			<div class="card">
				<div class="card-header">

					<div class="row">
						<div class="col-md-10">
							<h3>{{ __('Cadastro do usuário: ')  }}{{$usuario->username}}</h3>
						</div>
						<div class="col-md-2" align="right">
							<a href="/usuarios" class="btn btn-success">Lista</a>
						</div>
					</div>

				</div>
				<div class="card-body">
				
				<form  class="form-horizontal" method="POST" action="{{ route('profiles.store') }}">
                        @csrf
                        <input name="user_id" type="hidden" value ="{{$usuario->id}}" id="user_id">
                        <div class="form-group row">
                            <label for="instituicao" class="col-md-4 col-form-label text-md-right">{{ __('Instituição') }}</label>

                            <div class="col-md-6">
                                <input id="instituicao" type="text" class="form-control @error('instituicao') is-invalid @enderror" name="instituicao" value="{{ old('instituicao') }}"  autocomplete="instituicao" autofocus>

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
                                <input id="perfil" type="text" class="form-control @error('perfil') is-invalid @enderror" name="perfil" value="{{ old('perfil') }}"  autocomplete="perfil" autofocus>

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
                                    {{ __('Cadastrar') }}
                                </button>
                            </div>
                        </div>
                        
				
				</form>
				
				</div>
			</div>
		</div>

		@endsection