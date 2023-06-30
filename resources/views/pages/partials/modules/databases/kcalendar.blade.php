<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">fecha</th>
      <th scope="col">descripcion</th>
      <th scope="col">titulo</th>
      <th scope="col">created_at</th>
      <th scope="col">updated_at</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    @foreach($datos as $dato)
    <tr>
      <th scope="row">{{ $dato->id }}</th>
      <td>{{ $dato->fecha }}</td>
      <td>{{ $dato->descripcion }}</td>
      <td>{{ $dato->titulo }}</td>
      <td>{{ $dato->created_at }}</td>
      <td>{{ $dato->updated_at }}</td>
      <td>
        <a href="{{ route('editar', $dato->id) }}" class="btn btn-primary">Editar</a>
        <a href="{{ route('copiar', $dato->id) }}" class="btn btn-primary">Copiar</a>
        <a href="{{ route('borrar', $dato->id) }}" class="btn btn-danger">Borrar</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
