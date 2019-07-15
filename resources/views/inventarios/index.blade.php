@extends('template')
@section('titulo','Listado de inventarios')
@section('contenido')
	<h1 class="text-center">Inventario</h1>

	<a class="btn btn-success" href="{{ url('inventarios/create')  }}">Agregar Producto</a>

<table class="table table-light">
		<thead class="thead-light">
			<tr>
			    <th>#</th>
				<th>Nombre</th>
				<th>Proveedor</th>
				<th>Stock</th>
				<th>Nlote</th>
				<th>Fvencimiento</th>
				<th>imagen</th>
				<th>Acciones</th>


			</tr>
		</thead>
		<tbody>
			@foreach($inventarios as $inventarios)
		<tr>
			<td>{{$loop->iteration}}</td>

		<td>{{$inventarios->Nombre}}</td>
		<td>{{$inventarios->Proveedor}}</td>
		<td>{{$inventarios->Stock}}</td>
		<td>{{$inventarios->Nlote}}</td>
		<td>{{$inventarios->Fvencimiento}}</td>
		<td><img src="{{asset('storage').'/'.$inventarios->imagen}}"
            alt="" width="100"></td>
   <td>  
     <a class="btn btn-info" href="{{ url('/inventarios/'.$inventarios->id.'/edit') }}"><i class="fas fa-sync"></i>Edictar</a>
				 | 
 <form method="post" action="{{ url('/inventarios/'.$inventarios->id) }}">
 	{{ csrf_field() }}
 	{{ method_field('DELETE') }}
 	<button class="btn btn-dark" type="submit" onclick="return confirm('¿Borra?');">Borrar</button>
 </form>
				</td>
			</tr>
			@endforeach

		</tbody>
</table>
@endsection
