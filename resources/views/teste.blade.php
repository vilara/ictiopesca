 @extends('layouts.app') @section('title','Ictiopesca')
@section('content')
<div class="app-title">
	<div>
		<h1>
			<i class="fa fa-dashboard"></i> CADASTROSs
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
				<form class="row"  method="POST" action=""{{ url('/usuarios') }}">
                        @csrf
				
				<div class="form-group col-md-6">
						<label class="control-label">Name</label> <input
							class="form-control" type="text" placeholder="Enter your name">
					</div>
					<div class="form-group col-md-6">
						<label class="control-label">Email</label> <input
							class="form-control" type="text" placeholder="Enter your email">
					</div>
				
					<div class="form-group col-md-6">
						<label class="control-label">Name</label> <input
							class="form-control" type="text" placeholder="Enter your name">
					</div>
					<div class="form-group col-md-6">
						<label class="control-label">Email</label> <input
							class="form-control" type="text" placeholder="Enter your email">
					</div>
					<div class="form-group col-md-4 align-self-end">
						<button class="btn btn-primary" type="submit">
							<i class="fa fa-fw fa-lg fa-check-circle"></i>Cadastrar
						</button>
					</div>
					
										
					
				</form>
			</div>
		</div>
	</div>


</div>

@endsection





