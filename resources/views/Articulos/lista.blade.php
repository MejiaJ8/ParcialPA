@foreach($articulos as $articulo)
    <div>
        <img src="{{ asset('images/' . $articulo->imagen) }}" alt="{{ $articulo->nombre }}">
        <p>Nombre: {{ $articulo->nombre }}</p>
        <p>Marca: {{ $articulo->marca }}</p>
    </div>
@endforeach
