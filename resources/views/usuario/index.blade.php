@extends('layouts.app') @section('title','Usuários') @section('content')



<div class="container">
	<div class="row justify-content-center">

		<div class="col-md-12">
	
			<div class="card">

				<div class="card-header">
					<div class="row">
						<div class="col-md-10">
							
							<h3>{{ __('Usuários') }}</h3>
						</div>
						<div class="col-md-2" align="right">
							<a href="{{ url('/usuarios/create') }}" class="btn btn-success">Novo
						
							
							</a>
						</div>
					</div>
				</div>

				<div class="card-body">

					@if(session()->get('success'))
					<div class="alert alert-success">{{ session()->get('success') }}</div>
					<br /> @endif

					<table class="table">
						<thead class="thead-soft" align="center">
							<tr>
								<th scope="col">Nome Completo</th>
								<th scope="col">E-mail</th>
								<th scope="col">Usuário</th>
								<th scope="col">Ações</th>
							</tr>
						</thead>
						
						<tbody align="center">
							@foreach ($user as $usuario)
							<tr>
							
								
								<td><a href="{{ route('usuarios.show',$usuario->id)}}" style="color: inherit;">{{ $usuario->id }}</a></td>
								<td>{{ $usuario->email }}</td>
								<td>{{ $usuario->username }}</td>

								




								<td>
									<div class="row">
										<div class="col-md-6 pt-0">
											<a href="{{ route('usuarios.edit',$usuario->id) }}"	style="color: inherit;"><i class="far fa-edit"></i></a>
										</div>

										<div class="col-md-6">
											<form class="form-group" action="{{ route('usuarios.destroy',$usuario->id) }}"	method="post">
												@csrf @method('DELETE')
											<button class="btn form-control pt-0" type="submit"><i class="far fa-trash-alt"></i></button>
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
</div>



@endsection
