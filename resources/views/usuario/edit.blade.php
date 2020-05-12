@extends('layouts.app')
 @section('title','Usuários')
  @section('content')

<div class="container">

<div class="row justify-content-center">

<div class="col-md-8">

@if (count($errors) > 0)

@foreach ($errors->all() as $error)
<p class="alert alert-danger">{{ $error }}</p>
@endforeach
@endif

 <div class="card">
 <div class="card-header">
 <div class="row">
 <div class="col-md-10">
 <h3>{{ __('Edição') }}</h3> 
 </div>
 <div class="col-md-2 py-auto">
 <a href="/usuarios" class="btn btn-success">Voltar</a></div>
 </div>
 </div>
 
 <div class="card-body">
 
 <form class="form-horizontal" method="post" action="{{ route('usuarios.update', $usuario->id) }}">
       @method('PATCH') @csrf




						<div class="form-group row">
							<label for="name" class="col-md-4 col-form-label text-md-right">{{
								__('Nome completo') }}</label>

							<div class="col-md-6">
								<input id="name" type="text"
									class="form-control @error('name') is-invalid @enderror"
									name="name" value="{{ $usuario->name }}"
									autofocus> @error('name') <span class="invalid-feedback"
									role="alert"> <strong>{{ $message }}</strong>
								</span> @enderror
							</div>
						</div>

						<div class="form-group row">
							<label for="username"
								class="col-md-4 col-form-label text-md-right">{{ __('Usuário')
								}}</label>

							<div class="col-md-6">
								<input id="username" type="text"
									class="form-control @error('username') is-invalid @enderror"
									name="username" value="{{ $usuario->username }}"
									 autofocus> @error('username') <span
									class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong>
								</span> @enderror
							</div>
						</div>

						<div class="form-group row">
							<label for="email" class="col-md-4 col-form-label text-md-right">{{
								__('E-Mail') }}</label>

							<div class="col-md-6">
								<input id="email" type="email"
									class="form-control @error('email') is-invalid @enderror"
									name="email" value="{{ $usuario->email }}" >

								@error('email') <span class="invalid-feedback" role="alert"> <strong>{{
										$message }}</strong>
								</span> @enderror
							</div>
						</div>
						
						 <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Senha') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmar senha') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation"  autocomplete="new-password">
                            </div>
                        </div>

					
<div class="row col-md-4 offset-4">
							<button type="submit" class="btn btn-success ">
                                    {{ __('Editar') }}
                                </button>
</div>
							
  </form> 
							
</div>
	</div>
	
	
	
	
	
	</div>
	</div>
	</div>
						
						
@endsection