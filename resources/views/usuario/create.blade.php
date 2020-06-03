 @extends('layouts.app') @section('title','Ictiopesca')
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
			<h3 class="tile-title">Novo usuário</h3>
			<div class="tile-body">
				 <form  class="form-row" method="POST" action="{{ route('usuarios.store') }}">
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
					
					
					<div class="form-group col-md-6">
						<label class="control-label">Senha</label>
 <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required  autocomplete="new-password">
					@error('password')
   						<div class="alert alert-danger">{{ $message }}</div>
					@enderror
					</div>
					
					<div class="form-group col-md-6">
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
		
		
		<hr>
		
		
		<div class="tile">
            <h3 class="tile-title">Listagem de usuários</h3>
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Username</th>
                     <th style="text-align: center; vertical-align: middle; ">Ação</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($usuarios as $usuario)
                  <tr>
                    <td>{{$usuario->id}}</td>
                    <td><a href="{{ route('usuarios.show',$usuario->id)}}" style="color: inherit;">{{ $usuario->name }}</a></td>
                    <td>{{$usuario->email}}</td>
                    <td>{{$usuario->username}}</td>
                    <td>
                    <div class="row">
                    <div class="col-md-6 text-right pr-0" style="width: 70px;">
                    <a class="text-right" href="{{ route('usuarios.edit',$usuario->id) }}" style="text-decoration:none; color: black;"><i class="fa fa-pencil" aria-hidden="true"></i> &nbsp;&nbsp;&nbsp;&nbsp;|</a>
                    </div>
                    
                    <div class="col-md-6 text-left pl-0" style="width: 10px; height: 20px">
                    <form class="form-group" action="{{ route('usuarios.destroy',$usuario->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="text-left border-0 bg-transparent"  type="submit" onclick="return confirm('Deseja mesmo excuir este usuário?')">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-trash-o" aria-hidden="true"></i></button>
                    </form>
                    </div>
                    
                    </div>
                    </td>
                  </tr>
                 @endforeach 
                </tbody>
              </table>
            </div>
          </div>
		
		
	</div>


</div>

@endsection



