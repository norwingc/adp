@extends('templates.admintemplate')


@section('contenido')
<section class="content">	
	<div class="box box-info">
		<div class="box-header">
			<h3 class="box-title">Noticias</h3>
		</div>
		@if(Session::has('message'))
			<div class="callout callout-info col-sm-12">
				<h4>Info</h4>
				<p>{{ Session::get('message') }}</p>
			</div>			
		@endif	
		<div class="box-body">
			@foreach($historias as $value)
				<div class="col-md-4">
					<div class="imagen">
						<img src="{{ asset('img/historia/'.$value->path) }}" alt="" class="img-responsive">	
						<h3 class="text-center">{{ $value->titulo }}</h3>
						<a href="{{ URL::to('Administrador/Noticias/Delete/'.$value->id) }}" class="btn btn-danger">Borrar</a>						
					</div>						
				</div>
			@endforeach
		</div>
	</div>
</section>		
@stop