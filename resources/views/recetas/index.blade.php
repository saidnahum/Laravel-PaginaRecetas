<h1>Recetas</h1>

@foreach( $recetas as $receta )
  <li>{{ $receta }}</li>
@endforeach

<h2>Categorías</h2>
@foreach( $categorias as $categoria )
  <li>{{ $categoria }}</li>
@endforeach