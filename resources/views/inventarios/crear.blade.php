@extends('template')
@section('titulo','Crear Producto')

@section('contenido')
	<h1 class="text-center">Crear Producto</h1>
	<form action="{{route('inventarios.store')}}" method="post" enctype="multipart/form-data" >
		@csrf
		<div class="form-group">
			<label>Nombre</label>
			<input type="text" name="nombre" class="form-control" required>
		</div>
		<div class="form-group">
			<label>Proveedor</label>
			<input type="text" name="Proveedor" class="form-control" required>
		</div>

		<div class="form-group">
			<label>Stock</label>
			<input type="number" name="Stock" class="form-control" required>

        <div class="form-group">
			<label>Nlote</label>
			<input type="number" name="Nlote" class="form-control" required>

		<div class="form-group">
			<label>Fvencimiento</label>
			<input type="date" name="Fvencimiento" class="form-control" required>

		<div class="form-group">
			<label>Precio</label>
			<input type="number" name="precio" class="form-control" required>

		<div class="form-group">
			<label>Imagen</label>
			<input type="file" name="imagen" class="form-control" required>




		</div>
		<div class="form-group">
			<a class="btn btn-danger" href="{{route('inventarios.index')}}">Cancelar</a>
			<button class="btn btn-success">Guardar <i class="fas fa-save"></i></button>
		</div>
	</form>
@endsection