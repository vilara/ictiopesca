@extends('layouts.app') @section('title','Photos') @section('content')




<div class="container">
	<div class="row justify-content-center">

		<div class="col-md-8" >




			<div class="card">
			
			<div class="card-header ">
					<div class="row">
						<div class="col-md-10">
							<h3>{{ __('Edição do perfil de: ') }} {{$photo->user->username}}</h3>
						</div>
						<div class="col-md-2 py-auto">
							<a href="/usuarios" class="btn btn-success">Voltar</a>
						</div>
					</div>
				</div>
				
				
				<div class="card-body">
				
							<form class="form-horizontal" method="post" action="{{ route('photos.update', $photo->id) }}">
       @method('PATCH') @csrf
                        <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>

                            <div class="col-md-6">
                                <input id="instituicao" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ $photo->title }}" autocomplete="title" autofocus>

                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        
                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">{{ __('Text') }}</label>

                            <div class="col-md-6">
                                <input id="text" type="text" class="form-control @error('text') is-invalid @enderror" name="text" value="{{ $photo->text }}"  autocomplete="text" autofocus>

                                @error('text')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        
                   <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Editar') }}
                                </button>
                            </div>
                        </div>
                        
				</form>
				
				</div>
			</div>
			
			
		</div>
	</div>
</div>
@endsection
