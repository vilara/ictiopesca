 @extends('layouts.app') @section('title','Ictiopesca')
@section('content')
<div class="app-title">
	<div>
		<h1>
			<i class="fa fa-dashboard"></i> Espécies pesca
		</h1>
			</div>
	<ul class="app-breadcrumb breadcrumb">
		<li class="breadcrumb-item"><a href="/home"><i class="fa fa-home fa-lg"></i></a></li>
		<li class="breadcrumb-item"><a href="#">Cadastro de nova espécie</a></li>
	</ul>
</div>
<div class="row">
	<div class="col-md-12">
	
	@if(session('success'))
	
	 <div class="row">
          <div class="col-lg-12">
              <div class="alert alert-dismissible alert-success">
                <button class="close" type="button" data-dismiss="alert">×</button>
                <p>{{session('success')}}</p>
              </div>
          </div>
        </div>
	
	@endif
	 @can('update')
		<div class="tile">
			<h3 class="tile-title">Nova Espécie</h3>
			<div class="tile-body">
				 <form  class="form-row" method="POST" action="{{ route('pesc_especies.store') }}">
                        @csrf
				<div class="form-group col-md-4">
						<label class="control-label">Nome</label> 
   							 <input id="cat" type="text" class="form-control @error('cat') is-invalid @enderror" name="cat" value="{{ old('cat') }}" required autocomplete="off" autofocus>
					@error('cat')
   						<div class="alert alert-danger">{{ $message }}</div>
					@enderror
					</div>
					<div class="form-group col-md-4">
						<label class="control-label">Categoria trófica</label>
 <input id="cat_trof" type="text" class="form-control @error('cat_trof') is-invalid @enderror" name="cat_trof" value="{{ old('cat_trof') }}" required  autocomplete="cat_trof" autofocus>
					@error('cat_trof')
   						<div class="alert alert-danger">{{ $message }}</div>
					@enderror
					</div>
				
					
				
										
								
					<div class="form-group col-md-4 align-self-end">
						<button class="btn btn-primary" type="submit">
							<i class="fa fa-fw fa-lg fa-check-circle"></i>Cadastrar
						</button>
					</div>
					
										
					
				</form>
			</div>
		</div>
		
		@endcan
		<hr>
		
		
		<div class="tile">
            <h3 class="tile-title">Espécies</h3>
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Cat trof</th>
                     <th style="text-align: center; vertical-align: middle; ">Ação</th>
                  </tr>
                </thead>
                <tbody>
                 @foreach($especies as $especie)
                  <tr>
                    <td>{{$especie->id}}</td>
                    <td><a href="{{ route('pesc_especies.show',$especie->id)}}" style="color: inherit;">{{ $especie->cat }}</a></td>
                    <td>{{$especie->cat_trof}}</td>
                    <td>
                    <div class="row">
                    <div class="col-md-6 text-right pr-0" style="width: 70px;">
                    <a class="text-right" href="{{ route('pesc_especies.edit',$especie->id) }}" style="text-decoration:none; color: black;"><i class="fa fa-pencil" aria-hidden="true"></i> &nbsp;&nbsp;&nbsp;&nbsp;|</a>
                    </div>
                    
                    <div class="col-md-6 text-left pl-0" style="width: 10px; height: 20px">
                    <form class="form-group" action="{{ route('pesc_especies.destroy',$especie->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    @can('delete')
                    <button class="text-left border-0 bg-transparent"  type="submit" onclick="return confirm('Deseja mesmo excuir este usuário?')">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-trash-o" aria-hidden="true"></i></button>
                    @endcan
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



