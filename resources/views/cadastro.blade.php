 @extends('layouts.app') @section('title','Ictiopesca')
@section('content')
		<div class="tile">
			<h3 class="tile-title">Novo usuário</h3>
			<div class="tile-body">
				 <form  class="form-row" method="POST" action="{{ url('/storeUsuario') }}">
                        @csrf
				<div class="form-group col-md-4">
						<label class="control-label">Nome completo</label> 
   							 <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
					@error('name')
   						<div class="alert alert-danger">{{ $message }}</div>
					@enderror
					</div>
					<div class="form-group col-md-4">
						<label class="control-label">Usuário</label>
 <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required  autocomplete="username" autofocus>
					@error('username')
   						<div class="alert alert-danger">{{ $message }}</div>
					@enderror
					</div>
					<div class="form-group col-md-4">
						<label class="control-label">Email</label> 
<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required  autocomplete="email">
					@error('email')
   						<div class="alert alert-danger">{{ $message }}</div>
					@enderror
					</div>
					
					<div class="form-group col-md-4">
						<label class="control-label">Senha</label>
 <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required  autocomplete="new-password">
					@error('password')
   						<div class="alert alert-danger">{{ $message }}</div>
					@enderror
					</div>
					
					<div class="form-group col-md-4">
						<label class="control-label">Repetir senha</label>
 <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required  autocomplete="new-password">
 					</div>
 					
					
								
					<div class="form-group col-md-4 align-self-end">
						<button class="btn btn-primary" type="submit">
							<i class="fa fa-fw fa-lg fa-check-circle"></i>Cadastrar
						</button>
					</div>
					
										
					
				</form>
			</div>
		</div>
@endsection





