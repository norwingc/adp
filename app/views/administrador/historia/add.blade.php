@extends('templates.admintemplate')


@section('contenido')
<section class="content">	
	<div class="box box-info">
		<div class="box-header">
			<h3 class="box-title">Agregar Noticia</h3>
		</div>

		@if(Session::has('message'))
			<div class="callout callout-info col-sm-12">
				<h4>Info</h4>
				<p>{{ Session::get('message') }}</p>
			</div>			
		@endif	

		<div class="box-body">	
			{{ HTML::ul($errors->all(), array('class' =>'bg-danger')) }}			
			{{ Form::open(array('url' => 'Administrador/Noticias/Add', 'class' => 'form-horizontal', 'files' => 'true')) }}
				<div class="col-sm-12">					
					<div class="form-group">
						<label class="col-sm-2">Titulo</label>
						<div class="col-sm-5">
							<input type="text" placeholder="titulo" name="titulo" class="form-control" required>	
						</div>
					</div>
								
					<div class="form-group">
						<label class="col-sm-2">Imagen</label>
						<div class="col-sm-5">
							<input type="file" name="path" class="form-control" required>	
						</div>
					</div>	

					<div class="form-group">
						<label class="col-sm-12">Texto</label>
						<div class="col-sm-12">
							<textarea name="texto" id="editor1" rows="10" cols="80"></textarea>
						</div>
					</div>
					<div class="text-center col-md-12">
						<button type="submit" class="btn btn-success">Guardar</button>
					</div>					
				</div>
			{{ Form::close() }}	
		</div>	
	</div>
</section>		
@stop

@section('js')
<script src="//cdn.ckeditor.com/4.5.10/standard/ckeditor.js"></script>
<script type="text/javascript">
	CKEDITOR.replace( 'editor1' );				
</script> 
@stop