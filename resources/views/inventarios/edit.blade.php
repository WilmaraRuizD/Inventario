@extends('template')
@section('titulo','Editar <PICTURE></PICTURE>productos')

@section('contenido')
	<h1 class="text-center">Editar Productos {{$inventarios->nombre}}</h1>
	
<form action="{{ url('/inventarios/'.$inventarios->id) }}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
{{ method_field('PATCH') }}


			<div class="form-group">
			<label>Nombre</label>
			<input type="text" name="nombre" class="form-control" value="{{$inventarios->Nombre}}" required>
		</div>

		<div class="form-group">
			<label>Proveedor</label>
			<input type="text" name="Proveedor" class="form-control" value="{{$inventarios->Proveedor}}" required>
		</div>
		

			<div class="form-group">
			<label>Stock</label>
			<input type="number" name="Stock" class="form-control"value="{{$inventarios->Stock}}" required>

        <div class="form-group">
			<label>Nlote</label>
			<input type="number" name="Nlote" class="form-control" value="{{$inventarios->Nlote}}" required>

		<div class="form-group">
			<label>Fvencimiento</label>
			<input type="date" name="Fvencimiento" class="form-control" value="{{$inventarios->Fvencimiento}}" required>

		<div class="form-group">
			<label>Precio</label>
			<input type="number" name="precio" class="form-control" value="{{$inventarios->precio}}" required>

		<div class="form-group">
			<label>imagen</label>
			<input type="file" name="imagen" class="form-control" value="{{$inventarios->imagen}}" required>

	<input  type="submit" value="Editar" class="btb btn-success">

	<a class="btn btn-danger" href="{{ url('inventarios')  }}">Cancerlar </a>
			
	</form>
@endsection