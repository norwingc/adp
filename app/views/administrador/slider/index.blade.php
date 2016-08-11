@extends('templates.admintemplate')


@section('contenido')

<!-- Main content -->
<section class="content">	
	<div class="box box-info">
		<div class="box-header">
			<h3 class="box-title">{{ $title }}</h3>
		</div>

		@if(Session::has('message'))
			<div class="callout callout-info col-sm-12">
				<h4>Info</h4>
				<p>{{ Session::get('message') }}</p>
			</div>			
		@endif	

		
		<div class="box-body">	
			{{ HTML::ul($errors->all(), array('class' =>'bg-danger')) }}			
			{{ Form::open(array('url' => $url, 'class' => 'form-horizontal', 'files' => 'true')) }}
				<div class="col-sm-12">					
					<div class="form-group">
						<label class="col-sm-3">Nombre</label>
						<div class="col-sm-9">
							<input type="text" placeholder="Nombre" name="name" class="form-control" required>	
						</div>
					</div>
				</div>
				<div class="col-sm-12">					
					<div class="form-group">
						<label class="col-sm-3">Imagen</label>
						<div class="col-sm-9">
							<input type="file" name="path" class="form-control" required>	
						</div>
					</div>
				</div>
				<div class="text-center col-md-12">
					<button type="submit" class="btn btn-success">Guardar</button>
				</div>
			{{ Form::Close() }}	

		</div>
	</div>

	<div class="box box-info">
		<div class="box-header">
				<h3 class="box-title">Imagenes</h3>
			</div>
			<div class="box-body">
				@foreach($slider as $value)
					<div class="col-md-4">
						<div class="imagen">
							<img src="{{ asset('img/slider/'.$value->path) }}" alt="" class="img-responsive">	
							<a href="{{ URL().'/' .$url.'/Delete/'.$value->id }}" class="btn btn-danger">Borrar</a>
						</div>						
					</div>
				@endforeach
			</div>
		</div>
	</section>		
</section>

@stop		