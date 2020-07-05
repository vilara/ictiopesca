@extends('layouts.app') @section('title','Usuários') @section('content')



<div class="container">
	<div class="row justify-content-center">

		<div class="col-md-12">
	
			<div class="card">

				<div class="card-header">
					<div class="row">
						<div class="col-md-6 float-left">
							
							<h3>{{ __('Localidades') }}</h3>
						</div>

						<div class=" col-md-6 float-right" align="right" style="color: white;">
							<a class="btn btn-primary" type="submit" id="new-user"  data-toggle="modal">
								<i class="fa fa-fw fa-lg fa-check-circle"></i>Cadastrar
							</a>
						</div>
					
					</div>
				</div>

				<div class="card-body">

					@if(session()->get('success'))
					<div class="alert alert-success">{{ session()->get('success') }}</div>
					<br /> @endif

<!-- 					<table class="table"> -->
					<table class="table table-bordered data-table" >
					
						<thead align="center">
							<tr id="">
								<th scope="col">id</th>
								<th scope="col">localidade</th>
							</tr>
						</thead>
						
						<tbody align="center">
							
						</tbody>
						
					</table>

				</div>
			</div>
		</div>
	</div>
</div>










@endsection
