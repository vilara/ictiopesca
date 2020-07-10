@extends('layouts.app') @section('title','Usuários') @section('content')



<div class="container">
	<div class="row justify-content-center">

		<div class="col-md-12">
	
			<div class="card">

				<div class="card-header">
					<div class="row">
						<div class="col-md-6 float-left">
							
							<h3>{{ __('Biometria') }}</h3>
						</div>

						<div class=" col-md-6 float-right" align="right" style="color: white;">
<!-- 							<a class="btn btn-primary" type="submit" id="new-user"  data-toggle="modal"> -->
<!-- 								<i class="fa fa-fw fa-lg fa-check-circle"></i>Cadastrar -->
<!-- 							</a> -->
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
								<th scope="col">ID</th>
								<th scope="col">Espécie</th>
								<th scope="col">Localidade</th>
								<th scope="col">CT</th>
								<th scope="col">CP</th>
								<th scope="col">PT</th>
								<th scope="col">CAB</th>
								<th scope="col">SEXO</th>
								<th scope="col">CRESC</th>
								<th scope="col">GG</th>
								<th scope="col">GR</th>
								<th scope="col">DATA</th>
								<th scope="col">CF</th>
								<th scope="col">GEN</th>
								<th scope="col">OD</th>
								<th scope="col">AP</th>
							</tr>
						</thead>
						
						<tbody align="center">
							
						</tbody>
						<tfoot>
            <tr>
               <th scope="col">ID</th>
								<th scope="col">Espécie</th>
								<th scope="col">Localidade</th>
								<th scope="col">CT</th>
								<th scope="col">CP</th>
								<th scope="col">PT</th>
								<th scope="col">CAB</th>
								<th scope="col">SEXO</th>
								<th scope="col">CRESC</th>
								<th scope="col">GG</th>
								<th scope="col">GR</th>
								<th scope="col">DATA</th>
								<th scope="col">CF</th>
								<th scope="col">GEN</th>
								<th scope="col">OD</th>
								<th scope="col">AP</th>
            </tr>
        </tfoot>
						
					</table>

				</div>
			</div>
		</div>
	</div>
</div>










@endsection
