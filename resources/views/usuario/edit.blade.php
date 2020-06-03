@extends('layouts.app')
 @section('title','Editar usuários')
  @section('content')

<div class="app-title">
	<div>
		<h1>
			<i class="fa fa-dashboard"></i> CADASTROS
		</h1>
		<p>Registro de novo usuário</p>
	</div>
	<ul class="app-breadcrumb breadcrumb">
		<li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
		<li class="breadcrumb-item"><a href="#">Cadastro</a></li>
	</ul>
</div>
<div class="row">
	<div class="col-md-12">
		<div class="tile">
			<h3 class="tile-title">Edição</h3>
			<div class="tile-body">
 
 <form class="form-row" method="post" action="{{ route('usuarios.update', $usuario->id) }}">
       @method('PATCH') @csrf




						<div class="form-group col-md-4">
							<label class="control-label">{{
								__('Nome completo') }}</label>

								<input id="name" type="text"
									class="form-control @error('name') is-invalid @enderror"
									name="name" value="{{ $usuario->name }}"
									required autofocus> @error('name') <span class="invalid-feedback"
									role="alert"> <strong>{{ $message }}</strong>
								</span> @enderror
						</div>

						<div class="form-group col-md-4">
							<label  class="control-label">{{ __('Usuário')
								}}</label>

							
								<input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ $usuario->username }}" required autofocus> @error('username') <span
									class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong>
								</span> @enderror
							
						</div>

						<div class="form-group col-md-4">
							<label  class="control-label">{{
								__('E-Mail') }}</label>

							
								<input id="email" type="email"
									class="form-control @error('email') is-invalid @enderror"
									name="email" value="{{ $usuario->email }}" >

								@error('email') <span class="invalid-feedback" role="alert"> <strong>{{
										$message }}</strong>
								</span> @enderror
						</div>
						
						 <div class="form-group col-md-6">
                            <label  class="control-label">{{ __('Senha') }}</label>

                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="new-password">
                                    
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @else
                                    <small id="emailHelp" class="form-text text-muted alert-danger">Preencha somente se desejar alterar a senha!</small>   
                                @enderror
                        </div>

                        <div class="form-group col-md-6">
                            <label  class="control-label">{{ __('Confirmar senha') }}</label>

                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation"  autocomplete="new-password">
                        </div>

					
<div class="form-group col-md-4 align-self-end">
						<button class="btn btn-primary" type="submit">
							<i class="fa fa-fw fa-lg fa-check-circle"></i>Alterar
						</button>
					</div>
							
  </form> 
							
</div>
	</div>
	
	
	
	
	
	</div>
	</div>
	</div>
						
						
@endsection