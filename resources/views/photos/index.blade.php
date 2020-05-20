@extends('layouts.app') @section('title','Usuários') @section('content')



<div class="container">
	<div class="row justify-content-center">

		<div class="col-md-12">
	
			<div class="card">

				<div class="card-header">
					<div class="row">
						<div class="col-md-10">
							
							<h3>{{ __('Photos') }}</h3>
						</div>
						<div class="col-md-2" align="right">
							<a href="{{ url('/photos/create') }}" class="btn btn-success">Novo
						
							
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
								<th scope="col">Title</th>
								<th scope="col">Text</th>
								<th scope="col">Autor</th>
								<th scope="col">Ações</th>
								
							</tr>
						</thead>
						
						<tbody align="center">
							@foreach ($photos as $photo)
							<tr>
							
								
								<td><a href="{{ route('photos.show',$photo->id)}}" style="color: inherit;">{{ $photo->title }}</a></td>
								<td>{{ $photo->text }}</td>
								<td>{{ $photo->user->username }}</td>

	





								<td>
									<div class="row">
									@if(Auth::user()->can('editPhoto', $photo))
										<div class="col-md-6 pt-0">
											<a href="{{ route('photos.edit',$photo->id) }}"	style="color: inherit;"><i class="far fa-edit"></i></a>
										</div>
										
										<div class="col-md-6">
											<form class="form-group" action="{{ route('photos.destroy',$photo->id) }}"	method="post">
												@csrf @method('DELETE')
											<button class="btn form-control pt-0" type="submit"><i class="far fa-trash-alt"></i></button>
											</form>
										</div>
									@endif
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