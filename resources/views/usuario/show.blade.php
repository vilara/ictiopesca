@extends('layouts.app') @section('title','Usuários') @section('content')




<div class="container">
	<div class="row justify-content-center">

		<div class="col-md-8">




			<div class="card">
			
				<div class="card-header">
					<div class="row">
						<div class="col-md-10">
							<h3>{{ __('Edição') }}</h3>
						</div>
						<div class="col-md-2 py-auto">
							<a href="/usuarios" class="btn btn-success">Voltar</a>
						</div>
					</div>
				</div>

				<div class="card-body">

					<form class="form-horizontal" method="post"
						action="{{ route('usuarios.update', $usuario->id) }}">
						@method('PATCH') @csrf




						<div class="form-group row">
							<label for="name" class="col-md-4 col-form-label text-md-right">{{
								__('Nome completo') }}</label>

							<div class="col-md-6">
								<input id="name" type="text"
									class="form-control @error('name') is-invalid @enderror"
									name="name" value="{{ $usuario->name }}" disabled="disabled"
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
									disabled="disabled" autofocus> @error('username') <span
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
									name="email" value="{{ $usuario->email }}" disabled="disabled">

								@error('email') <span class="invalid-feedback" role="alert"> <strong>{{
										$message }}</strong>
								</span> @enderror
							</div>
						</div>

						<div class="row justify-content-md-center">
							<div class="col-md-2">
								<a href="{{ route('usuarios.edit',$usuario->id) }}" type="submit"
									class="btn btn-success"> {{ __('Editar') }} </a>
							</div>
							<div class="col-md-2">
								<form class="form-inline"
									action="{{ route('usuarios.destroy',$usuario->id) }}"
									method="post">
									@csrf @method('DELETE')
									<button class="btn btn-success" type="submit" align="left">{{
										__('Excluir') }}</button>
								</form>
							</div>
						</div>







					</form>


				</div>
			</div>




















			@endsection