@extends('layouts.app') @section('title','Mercado') @section('content')



<div class="container">
	<div class="row justify-content-center">

		<div class="col-md-12">
	
			<div class="card" style="widht:100%;">

				<div class="card-header">
					<div class="row">
						<div class="col-md-6 float-left">
							
							<h3>{{ __('Mercados') }}</h3>
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
					<table class="table table-bordered data-table1" >
					
						<thead align="center">
							<tr id="">
								<th scope="col">id</th>
<!-- 								<th scope="col">Espécie</th> -->
<!-- 								<th scope="col">Local</th> -->
<!-- 								<th scope="col">CT</th> -->
<!-- 								<th scope="col">CP</th> -->
<!-- 								<th scope="col">PT</th> -->
<!-- 								<th scope="col">Cab</th> -->
<!-- 								<th scope="col">Sexo</th> -->
<!-- 								<th scope="col">Cresc</th> -->
<!-- 								<th scope="col">gg</th> -->
<!-- 								<th scope="col">gr</th> -->
<!-- 								<th scope="col">Data</th> -->
<!-- 								<th scope="col">cf</th> -->
<!-- 								<th scope="col">Gen</th> -->
<!-- 								<th scope="col">OD</th> -->
<!-- 								<th scope="col">AP</th> -->
								
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
